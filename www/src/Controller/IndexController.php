<?php
namespace Hillel\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController
{
    public function __invoke(Request $request){
        //$body = \request();
        print_r($request->all());
        return new \Illuminate\Http\Response('<h1>Index</h1>');
    }
    public function abc()
    {
        print "ABC!";
        return new \Illuminate\Http\Response('<h1>Index</h1>');
    }
}