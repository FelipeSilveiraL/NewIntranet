<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesBlog_departamento extends Model
{
    use HasFactory;
    protected $table = 'blog_departamento';
    protected $connection = 'mysql_blog';
}
