<?php
namespace Hillel\Controller;

use Hillel\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserRegisterController
{
    public function __invoke(Request $request)
    {
        $request = request()->all();
        $error='';
        // Check input data
        if ($request['email']==''){$error.=' Email is not pointed!<br>';}
        if ($request['password']==''){$error.=' Password is not pointed<br>';}
        if (!isset($request['termsOfService'])) {$error.=' You have to accept terms of service!!!<br>';}

        if ($error!='') {
            //die("Error");
            //For debug comment prev. line and uncomment next line
            die("Error!<br>".$error);
        }
        $user = new User;

        $user->fullname = $request['fullname'];
        $user->email = $request['email'];
        $user->password = password_hash($request['password'], 2);

        $user->save();
        //after registration go to login page
        header('Location: /login');
    }
}