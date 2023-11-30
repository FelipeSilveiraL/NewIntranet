<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\TablesBlog_departamento;

class QueryBlog_departamento extends Controller
{
    public function blog_departamento(){
        $blogDepartamento = TablesBlog_departamento::get();

        return $blogDepartamento;
    }
}
