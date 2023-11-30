<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesBlog_empresa extends Model
{
    use HasFactory;

    protected $table = 'blog_empresa';
    protected $connection = 'mysql_blog';
}
