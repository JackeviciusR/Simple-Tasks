<?php

// Butinas .htaccess failas, kitaip, jei url'e po API_currance
// irasom pavadinima, kuris neatitinka jokio failo/folderio, 
// negales ieiti i pagrindini index.php faila ir ismes klaida, kad neranda
// pvz.: /API_currance/delete - bus klaida, jei delete nera failas ar aplankas su index failu


define('DIR', __DIR__.'/');
//_dc(__DIR__, 'ohoi');
// _dc($_SERVER['DOCUMENT_ROOT']);
// _dc($_SERVER['SERVER_NAME']);
$install_dir = str_replace($_SERVER['DOCUMENT_ROOT'], '', strtr(DIR,"'\'", "'/'"));
define('INSTALL_DIR', $install_dir);
define('URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].INSTALL_DIR);
//_dc(URL);
$uri = explode('/', str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
//_dc($_SERVER['REQUEST_URI']);
// _dc($install_dir);
// _dc(INSTALL_DIR);
//_dc($uri);
//_d($_SERVER['REQUEST_METHOD']);
//_dc($_GET);


include DIR.'app/RestController.php';
include DIR.'app/Rest.php';
include DIR.'app/Json.php';


// ROUTING

if ('' == $uri[0]) {
     (new RestController) -> index();
}

if ('refresh' == $uri[0]) {
     (new RestController) -> index();
}

if ('compare' == $uri[0]) {
     (new RestController) -> index();
}

?>
