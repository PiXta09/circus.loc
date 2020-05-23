<?php
require_once ("db.php");
$login = trim($_POST['login']);
$password = trim($_POST['password']);
if(!empty($login) && !empty($password)){
    $sql = 'SELECT * FROM users WHERE login = :login';
    $params = [':login'=>$login];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        if( $password == $user['password']){
            session_start();
            $_SESSION['id']=$user['id'];
            echo 'ok';
        }
        else{
            echo 'Неправильный пароль';
        }
    }
    else{
        echo 'Не существует такого пользователя';
    }
}
else{
    echo 'Пожалуйста, заполните все поля';
}