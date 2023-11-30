<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesBlog_Post extends Model
{
    use HasFactory;

    protected $table = 'blog_post';
    protected $connection = 'mysql_blog';
    protected $primaryKey = 'id_postagem';

    public $timestamps = false;

}
