<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesBlog_comentario extends Model
{
    use HasFactory;

    protected $table = 'blog_comentarios';
    public $timestamps = false;
    protected $connection = 'mysql_blog';
}
