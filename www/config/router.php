<?php
require_once '../src/Model.php';
use Illuminate\Events\Dispatcher;

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);

$router->post('/123',function(){
    // this route for testing post request from Scratches/scratch.http
    echo "This is from router.php\r\n";
    print_r(request()->all());
});

//examples execute controllers
//$router->get('/123',\Hillel\Controller\IndexController::class);
//$router->get('/234','\Hillel\Controller\IndexController@abc');

$router->get('/222',function(){
    $password='12345678';
    $hash = password_hash($password,3);
    print $password."<br>";
    print $hash."<br>";
    print var_dump(password_verify($password,$hash))."<br>";
    print var_dump(password_verify($password.'1',$hash));
    print "<br>";
    print var_dump(password_needs_rehash($hash,3,['memory_cost'=>65535,'time_cost'=>1000,'threads'=>2]));
});

$router->get('/', function () {
    // home page redirect to login page
    header('Location: /login');
});

$router->get('/login', function () {
    return view('login/login');
});

$router->get('/register', function () {
    return view('login/register');
});

$router->get('/forgot-password', function () {
    return view('login/forgot-password');
});

$router->post('/register',\Hillel\Controller\UserRegisterController::class);

$router->post('/login', \Hillel\Controller\UserLoginController::class);

$router->get('/TopSecretPage',function(){
    return ("<h1>You have been logged in successfully!</h1>");
});