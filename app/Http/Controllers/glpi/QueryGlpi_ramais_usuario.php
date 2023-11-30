<?php

namespace App\Http\Controllers\glpi;

use App\Http\Controllers\Controller;
use App\Models\glpi\TablesGlpi_usuario;

class QueryGlpi_ramais_usuario extends Controller
{
    public function listaUsuario($buscaInfo, $id, $departamento)
    {
        $listaUsuario = TablesGlpi_usuario::leftJoin('glpi_useremails', 'glpi_users.id', '=', 'glpi_useremails.users_id')
            ->leftJoin('glpi_usercategories', 'glpi_users.usercategories_id', '=', 'glpi_usercategories.id')
            ->leftJoin('glpi_locations', 'glpi_users.locations_id', '=', 'glpi_locations.id')
            ->select(
                'glpi_users.realname AS nome',
                'glpi_users.phone AS ramal',
                'glpi_usercategories.name AS departamento',
                'glpi_useremails.email',
                'glpi_locations.name AS filial',
                'glpi_locations.town AS voip',
                'glpi_locations.postcode AS piloto',
                'glpi_locations.postcode as pilotoRamal'
            )
            ->where('glpi_users.is_deleted', 0);

        if ($id == NULL) {
            $listaUsuario->where(function ($query) use ($buscaInfo) {
                $query->where('glpi_useremails.email', 'LIKE', '%' . $buscaInfo . '%')
                    ->orWhere('glpi_users.realname', 'LIKE', '%' . $buscaInfo . '%')
                    ->orWhere('glpi_users.phone', 'LIKE', '%' . $buscaInfo . '%')
                    ->orWhere('glpi_usercategories.name', 'LIKE', '%' . $buscaInfo . '%');
            });
        } else {

            if ($departamento === 'D') {

                $valores = explode(',', $id);
                $valores = str_replace('D', '', $valores);

                if (!empty($valores)) {
                    $listaUsuario->whereIN('glpi_users.usercategories_id', $valores);
                }

            } else {
                $listaUsuario->where('glpi_users.locations_id', $id);
            }
        }

        $listaUsuario = $listaUsuario->get();

         $listaUsuario->transform(

            function($listaUsuario){

                $limit = strlen($listaUsuario->ramal);

                if($limit <= 5){
                    $listaUsuario->pilotoRamal = str_replace(' ','', $listaUsuario->pilotoRamal);
                    $listaUsuario->pilotoRamal = substr($listaUsuario->pilotoRamal, 4, 4)."-";
                }else{
                    $listaUsuario->pilotoRamal = '';
                }

                return($listaUsuario);
            }
        );

        return $listaUsuario;
    }
}
