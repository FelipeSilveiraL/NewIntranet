<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\TablesBlog_Filiais;

class QueryBlog_filiais extends Controller
{
    public function blog_filiais(){
        $blogFiliais = TablesBlog_Filiais::where('deletar', 0)->get();

        $blogFiliais->transform(
            function ($blogFiliais){
                $blogFiliais->imagem = "public/".substr($blogFiliais->imagem, 3);

                return $blogFiliais;
            }
        );

        return $blogFiliais;
    }
}
