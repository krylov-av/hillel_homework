<?php
namespace Hillel\Controller;

use Hillel\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserLoginController
{
    public function __invoke(Request $request)
    {
        $error='';
        $request = request()->all();
        if ($request['email']==''){$error.=' Email is not pointed!<br>';}
        if ($request['password']==''){$error.=' Password is not pointed<br>';}
        $user = User::where('email',$request['email'])->first();
        if (isset($user) and $error=='')
        {
            if (password_verify($request['password'],$user->password))
            {
                //Password correct check if needs, update hash
                if (password_needs_rehash($request['password'],3))
                {
                    $user->password = password_hash($request['password'],3);
                    $user->save();
                }
            }
            else
            {
                $error = 'password is incorrect';
            }
        }
        else
        {
            $error.='User not find<br>';
        }
        if ($error!='')
        {
            //die("Error!");
            //for debug
            print "<pre>";
            var_dump($request);
            print "</pre><hr>";
            die("Error! <br>'".$error."'");
        }
        //We are logged in successfuly
        header('Location: /TopSecretPage');
    }
}