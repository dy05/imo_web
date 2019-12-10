<?php

//ini_set('smtp_port', 1025);
//$headers = 'From: webmaster@example.com' . "\r\n" .
//    'Reply-To: webmaster@example.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//mail('dyosby237@gmail.com', 'Confirmation d\'inscription de votre compte', 'Vous venez bien d\'etre enregistre dans notre base de donnees, vous pouvez apresent vous connectez', $headers);
//
//die('Mail send');


session_start();

$generalRoute = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$viewsDir = str_replace('/index.php', '', str_replace('public','Views/', str_replace('Public','Views/', $_SERVER['SCRIPT_FILENAME'])));
$viewsDir = str_replace('index.php', '', str_replace('public','Views', str_replace('Public','Views/', $_SERVER['SCRIPT_FILENAME'])));
if($host === 'localhost'){
    $addHost = explode('public', $_SERVER['REQUEST_URI']);
    $host .= $addHost[0].'public';
}

$generalRoute .= '://'.$host;
define('ROUTE', $generalRoute);
define('MEDIA', $generalRoute.'/img/');
define('VIEWS', $viewsDir);

// pour recuperer les fichiers des classes automatiquement
require '../App/Autoloader.php';

\WatatApp\App\Autoloader::register();

$path = $_GET['request'] ?? $_SERVER['REQUEST_URI'];
$slash = substr($path,-1);
if($slash === '/'){
    $path = substr($path, 0, -1);
}
if (empty($path)){
    $path = "/home";
}

$route = new \WatatApp\App\Router($path);

$route->get('/404', 'PagesController@error', 'errorpage');
$route->get('/home', 'PagesController@home', 'homepage');
$route->get('/index', 'PagesController@home', 'indexpage');
$route->get('/contact', 'PagesController@contact', 'contactpage');
//$route->get('/index', function () use ($route){
//    header('Location:'.ROUTE.'/home');
//});
$route->get('/login', 'NoAuthController@login', 'loginpage');
$route->get('/dyos/loll', 'NoAuthController@login', 'loginpage');
$route->post('/login', 'NoAuthController@login', 'loginform');
$route->get('/register', 'NoAuthController@register', 'registerpage');
$route->post('/register', 'NoAuthController@register', 'registerform');
$route->get('/logout', 'AuthController@logout', 'logout');


//$route->get('/techniciens', 'AuthController@techniciens', 'technicienspage');
//$route->get('/techniciens/new', 'AuthController@techniciens', 'techniciensnewpage');
//$route->post('/techniciens/new', 'AuthController@techniciensadd', 'techniciensnewform');
//$route->get('/blogs', 'PagesController@blogs', 'blogpage');
//$route->get('/blogs/:id', 'PagesController@blogs', 'blogshowpage');
//$route->post('/blogs/:id', 'PagesController@editblog', 'blogeditpage');
////$route->get('/blogs/new', 'PagesController@newblogs', 'blognewpage');
//$route->post('/blogs/new', 'PagesController@newblog', 'blognewform');
//$route->post('/blogs/delete/:id', 'PagesController@deleteblog', 'blogdeleteblog');
//$route->get('/blogs/delete/:id', 'PagesController@deleteblog', 'blogdelete');

//$route->get('/account', 'AuthController@home', 'adminhome');

$route->run();

if(isset($_SESSION['flash'])) {
    unset($_SESSION['flash']);
}
//unset($_SESSION['auth']);

