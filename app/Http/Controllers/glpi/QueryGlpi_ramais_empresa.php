<?php

namespace App\Http\Controllers\glpi;

use App\Http\Controllers\Controller;
use App\Models\glpi\TablesGlpi_empresas;

class QueryGlpi_ramais_empresa extends Controller
{
    public function listaEmpresa($idEmpresa)
    {
        $listaEmpresa = TablesGlpi_empresas::select('name', 'address AS endereco', 'postcode AS piloto', 'town AS voip', 'state AS cnpj', 'country AS razao_social')
        ->where('id', $idEmpresa)
        ->get();

        return $listaEmpresa;
    }
}
