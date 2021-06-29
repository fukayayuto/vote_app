<?php

namespace controller\register;

use lib\Auth;
use model\UserModel;
use lib\Msg;

function get()
{
    require_once  SOURCE_BASE . 'views/register.php';
}

function post()
{
    $user = new UserModel;
    $user->id = get_param('id', '');
    $user->pwd = get_param('pwd', '');
    $user->nickname = get_param('nickname', '');


    $result = Auth::register($user);

    if ($result) {
        echo '登録成功';
    } else {
        echo '登録失敗';
    }
}
