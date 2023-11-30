<?php

namespace App\Models\glpi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesGlpi_empresas extends Model
{
    use HasFactory;

    protected $table = 'glpi_locations';
    protected $connection = 'mysql_glpi';
}
