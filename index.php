<?php
// CABEÇALHO DA PÁGINA
include __DIR__.'/includes/header.php';

// CABEÇALHO DA PÁGINA
include __DIR__.'/includes/form.php';

// CARREGA A IMAGEM
$img = imagecreatefromjpeg(__DIR__.'/img/php.jpg');

$filter = $_GET['filter'] ?? 0;

switch ($filter) {
    case '1':
        // negativo
        imagefilter($img, IMG_FILTER_NEGATE);
        break;
    case '2':
        // escala de cinza
            imagefilter($img, IMG_FILTER_GRAYSCALE);
            break;
    case '3':
        // brilho 
            imagefilter($img, IMG_FILTER_BRIGHTNESS, -80);
            break;
    case '4':
        // contraste 
            imagefilter($img, IMG_FILTER_CONTRAST, -80);
            break;
    case '5':
        // RGB'Alpha'
            imagefilter($img, IMG_FILTER_COLORIZE,100,0,0,0);
            break;   
    case '6':
        // detecta as bordas 
            imagefilter($img, IMG_FILTER_EDGEDETECT);
            break;  
    case '7':
        // entalhe 
            imagefilter($img, IMG_FILTER_EMBOSS);
            break; 
    case '8':
        // blur 
            imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
            break; 
    case '9':
        // blur 
            imagefilter($img, IMG_FILTER_SELECTIVE_BLUR);
            break;
    case '10':
        // sketch 
            imagefilter($img, IMG_FILTER_MEAN_REMOVAL);
            break;     
    case '11':
        // suavizar 
            imagefilter($img, IMG_FILTER_SMOOTH, 10);
            break;
    case '12':
        // pixelizar 
            imagefilter($img, IMG_FILTER_PIXELATE, 10, true);
            break; 
    case '13':
        // 1 = inverte horizontal  
            imageflip($img, 1);
            break; 
    case '14':
        // inverte vertical  
            imageflip($img, 2);
            break; 
    case '15':
        // inverte vertical e horizontal  
            imageflip($img, 3);
            break;         
}

$destino = __DIR__.'/img/php.jpg';
$qualidade = 100;
imagejpeg($img, $destino, $qualidade);

// IMPRIME A IMAGEM NA TELA
    // header('Content-type: image/png');
    // imagepng($img);
    echo '<img src="img/php.jpg" class="img-fluid" alt="Imagem responsiva">';
    // DESTRUINDO O CARREGAMENTO DA IMAGEM DA MEMORIA
    imagedestroy($img);


// RODAPE DA PÁGINA
include __DIR__.'/includes/footer.php';