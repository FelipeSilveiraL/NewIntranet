<?php

namespace App\Models\glpi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesGlpi_usuario extends Model
{
    use HasFactory;

    protected $table = 'glpi_users';
    protected $connection = 'mysql_glpi';
}
