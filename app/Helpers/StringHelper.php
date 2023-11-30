<?php


function helper_redicionar($rota)
{
    $caminho = "<script> window.location.href = '" . $rota . "' </script>";

    return $caminho;
}

function helper_caractesEspeciais($str)
{
    $str = str_replace('Ã©', 'é', $str);
    $str = str_replace('Ã‰', 'É', $str);
    $str = str_replace('Ãˆ', 'È', $str);
    $str = str_replace('Ãª', 'ê', $str);
    $str = str_replace('Ã§', 'ç', $str);
    $str = str_replace('Ã£', 'ã', $str);
    $str = str_replace('Ã¡', 'á', $str);
    $str = str_replace('Ãƒ', 'Ã', $str);
    $str = str_replace('Ã³', 'ó', $str);

    return $str;
}

function helper_palavroes($str)
{
    $str = str_replace('boceta', '(Palavra Removida)', $str);
    $str = str_replace('boketeira', '(Palavra Removida)', $str);
    $str = str_replace('boketera', '(Palavra Removida)', $str);
    $str = str_replace('bolsa', '(Palavra Removida)', $str);
    $str = str_replace('boquete', '(Palavra Removida)', $str);
    $str = str_replace('boqueteira', '(Palavra Removida)', $str);
    $str = str_replace('boquetera', '(Palavra Removida)', $str);
    $str = str_replace('bosseta', '(Palavra Removida)', $str);
    $str = str_replace('bosta', '(Palavra Removida)', $str);
    $str = str_replace('buceta', '(Palavra Removida)', $str);
    $str = str_replace('bunda', '(Palavra Removida)', $str);
    $str = str_replace('busseta', '(Palavra Removida)', $str);
    $str = str_replace('caceta', '(Palavra Removida)', $str);
    $str = str_replace('cacete', '(Palavra Removida)', $str);
    $str = str_replace('caraleo', '(Palavra Removida)', $str);
    $str = str_replace('caralho', '(Palavra Removida)', $str);
    $str = str_replace('caralho', '(Palavra Removida)', $str);
    $str = str_replace('caralhu', '(Palavra Removida)', $str);
    $str = str_replace('cassete', '(Palavra Removida)', $str);
    $str = str_replace('chochota', '(Palavra Removida)', $str);
    $str = str_replace('chupa', '(Palavra Removida)', $str);
    $str = str_replace('chupada', '(Palavra Removida)', $str);
    $str = str_replace('chupador', '(Palavra Removida)', $str);
    $str = str_replace('chupadora', '(Palavra Removida)', $str);
    $str = str_replace('cusao', '(Palavra Removida)', $str);
    $str = str_replace('cusona', '(Palavra Removida)', $str);
    $str = str_replace('cuzao', '(Palavra Removida)', $str);
    $str = str_replace('cuzinho', '(Palavra Removida)', $str);
    $str = str_replace('cuzona', '(Palavra Removida)', $str);
    $str = str_replace('fdps', '(Palavra Removida)', $str);
    $str = str_replace('filha-da-puta', '(Palavra Removida)', $str);
    $str = str_replace('filho-da-puta', '(Palavra Removida)', $str);
    $str = str_replace('filhodaputa', '(Palavra Removida)', $str);
    $str = str_replace('filhosdaputa', '(Palavra Removida)', $str);
    $str = str_replace('foda', '(Palavra Removida)', $str);
    $str = str_replace('fodedor', '(Palavra Removida)', $str);
    $str = str_replace('foder', '(Palavra Removida)', $str);
    $str = str_replace('fodida', '(Palavra Removida)', $str);
    $str = str_replace('fodido', '(Palavra Removida)', $str);
    $str = str_replace('fuder', '(Palavra Removida)', $str);
    $str = str_replace('fudida', '(Palavra Removida)', $str);
    $str = str_replace('fudido', '(Palavra Removida)', $str);
    $str = str_replace('gosa', '(Palavra Removida)', $str);
    $str = str_replace('gosado', '(Palavra Removida)', $str);
    $str = str_replace('gosado', '(Palavra Removida)', $str);
    $str = str_replace('goso', '(Palavra Removida)', $str);
    $str = str_replace('goza', '(Palavra Removida)', $str);
    $str = str_replace('gozada', '(Palavra Removida)', $str);
    $str = str_replace('gozado', '(Palavra Removida)', $str);
    $str = str_replace('gozo', '(Palavra Removida)', $str);
    $str = str_replace('grelinho', '(Palavra Removida)', $str);
    $str = str_replace('grelo', '(Palavra Removida)', $str);
    $str = str_replace('http://onlinecasinogameslots.com/#', '(Palavra Removida)', $str);
    $str = str_replace('http://onlinecasinogameslots.com/#', '(Palavra Removida)', $str);
    $str = str_replace('https://onlinecasinogameslots.com/ #', '(Palavra Removida)', $str);
    $str = str_replace('kacete', '(Palavra Removida)', $str);
    $str = str_replace('karalho', '(Palavra Removida)', $str);
    $str = str_replace('karalho', '(Palavra Removida)', $str);
    $str = str_replace('karalhu', '(Palavra Removida)', $str);
    $str = str_replace('kassete', '(Palavra Removida)', $str);
    $str = str_replace('merda', '(Palavra Removida)', $str);
    $str = str_replace('onlinecasinogameslots', '(Palavra Removida)', $str);
    $str = str_replace('pauduro', '(Palavra Removida)', $str);
    $str = str_replace('pauzudo', '(Palavra Removida)', $str);
    $str = str_replace('penis', '(Palavra Removida)', $str);
    $str = str_replace('pica', '(Palavra Removida)', $str);
    $str = str_replace('pinto', '(Palavra Removida)', $str);
    $str = str_replace('piroca', '(Palavra Removida)', $str);
    $str = str_replace('punheta', '(Palavra Removida)', $str);
    $str = str_replace('puta', '(Palavra Removida)', $str);
    $str = str_replace('puta', '(Palavra Removida)', $str);
    $str = str_replace('putana', '(Palavra Removida)', $str);
    $str = str_replace('putaria', '(Palavra Removida)', $str);
    $str = str_replace('putinha', '(Palavra Removida)', $str);
    $str = str_replace('putinho', '(Palavra Removida)', $str);
    $str = str_replace('puto', '(Palavra Removida)', $str);
    $str = str_replace('putona', '(Palavra Removida)', $str);
    $str = str_replace('quenga', '(Palavra Removida)', $str);
    $str = str_replace('rabo', '(Palavra Removida)', $str);
    $str = str_replace('rola', '(Palavra Removida)', $str);
    $str = str_replace('roludo', '(Palavra Removida)', $str);
    $str = str_replace('siririca', '(Palavra Removida)', $str);
    $str = str_replace('tomanocu', '(Palavra Removida)', $str);
    $str = str_replace('tomarnocu', '(Palavra Removida)', $str);
    $str = str_replace('trepada', '(Palavra Removida)', $str);
    $str = str_replace('trepadeira', '(Palavra Removida)', $str);
    $str = str_replace('trepar', '(Palavra Removida)', $str);
    $str = str_replace('vadia', '(Palavra Removida)', $str);
    $str = str_replace('xoxota', '(Palavra Removida)', $str);
    $str = str_replace('xupa', '(Palavra Removida)', $str);
    $str = str_replace('xupada', '(Palavra Removida)', $str);
    $str = str_replace('xupador', '(Palavra Removida)', $str);
    $str = str_replace('xupadora', '(Palavra Removida)', $str);


    return $str;
}

// app/Helpers/PostagemHelper.php


function renderPostagem($postagem)
{
    // Estrutura HTML da postagem
    $html = '
        <div class="row mb-3">
            <h3 class="mb-3">' . $postagem->titulo . '</h3>
            <div class="col-5 col-sm-6">
                <div class="post-img">
                    <img src="' . asset($postagem->file_img) . '" alt="" class="img-thumbnail rounded">
                </div>
            </div>
            <div class="col-5 col-sm-6">
                <span class="text-start truncate">
                    ' . substr($postagem->mensagem, 0, 61) . '...
                    <br />
                    <a href="' . url('blog-details', ['idPostagem' => $postagem->id_postagem]) . '"><u>Leia mais</u></a>
                </span>
            </div>
            <div class="meta-top mb-5 mt-3">
                <span class="calendarioPostagem">
                    <i class="fa-solid fa-calendar text-primary"></i>
                    <time datetime="2020-01-01">' . $postagem->data . '</time>
                </span>
                <span class="comentarioPostagem">
                    <i class="fa-solid fa-comment-dots text-primary"></i>
                    ' . $postagem->comentarios_count . ' Comentários
                </span>
                <span class="resposavelPostagem">
                    <a href="javascript:" data-post-id="' . $postagem->id_postagem . '" class="btn-like">
                        <i class="fa-solid fa-thumbs-up text-primary"></i>
                    </a>
                    ' . $postagem->curtidas . ' Curtidas
                </span>
            </div><!-- End meta top -->
        </div>
    ';

    return $html;
}

function renderPostagemRecente($postagemRecente)
{
    // Estrutura HTML da postagem
    $html = '
            <div class="row">
            <a class="linkSimples"
                href="' . url('blog-details', ['idPostagem' => $postagemRecente->id_postagem]) . '">
                <h6>' . $postagemRecente->titulo . '</h6>
            </a>
            <div class="mb-2 mt-2 text-center">
                <span class="dadosPostagemRecente">

                    <i class="fa-solid fa-calendar text-primary"></i>
                    <time datetime="2020-01-01">' . $postagemRecente->data . '</time>

                </span>
                <span class="dadosPostagemRecente">
                    <i class="fa-solid fa-comment-dots text-primary"></i>
                    ' . $postagemRecente->comentarios_count . ' Comentários
                </span>
                <span class="dadosPostagemRecente">
                    <a href="javascript:" data-post-id="' . $postagemRecente->id_postagem . '" class="btn-like">
                        <i class="fa-solid fa-thumbs-up text-primary"></i>
                    </a>
                    ' . $postagemRecente->curtidas . ' Curtidas
                </span>

            </div>
            <hr>
        </div>';

    return $html;
}
