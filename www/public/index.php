<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

//print "We are after require.<br>";
//print "<pre>";
//print_r(view('login/login'));
//print "</pre>";

$request = \Illuminate\Http\Request::createFromGlobals();
function request() {
    global $request;

    return $request;
}

try {
    $response = $router->dispatch($request);
    echo $response->getContent();
} catch (Symfony\Component\HttpKernel\Exception\NotFoundHttpException $exception)
{
    //print "404".$exception;
    echo $blade->make('404')->render();
}