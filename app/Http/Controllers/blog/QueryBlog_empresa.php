<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\TablesBlog_empresa;

class QueryBlog_empresa extends Controller
{
    public function blog_empresa(){
        $blogEmpresa = TablesBlog_empresa::get();

        return $blogEmpresa;
    }
}
