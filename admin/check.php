<?php

    $email = isset($_POST['email'])? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8') : '';
    $password = isset($_POST['password'])? htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8'): '';

    if ($email == '') {
        header("Location:./index.html");
        exit;
    }
    if ($password == '') {
        header("Location:./index.html");
        exit;
    }

    if ($email=='ordnung.jp@gmail.com'&&$password=='pass') {
        //ログイン許可
        header("Location:./dashboard.html");
    } else {
        //間違っているのでログイン不可
        header("Location:./index.html");
        exit;
    }