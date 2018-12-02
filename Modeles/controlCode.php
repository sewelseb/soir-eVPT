<?php
    $code="vpt240218!";
    $reponse['response']="false";
    $_SESSION['code']=false;
    //var_dump($_POST);
    if(isset($_POST['code']) && $_POST['code']==$code)
    {
        $reponse['response']=true;
        $_SESSION['code']='true';
        setcookie('code', true);


    }
    else
    {
        $_SESSION['code']=false;
        $reponse['response']=false;
    }