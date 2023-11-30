<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablesBlog_Filiais extends Model
{
    use HasFactory;

    protected $table = 'blog_filiais';
    protected $connection = 'mysql_blog';
}
