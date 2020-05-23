<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Цирк!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid header">
    <div class="float-left col-3"><a href="index.php">Цирк</a></div>
    <div class="row align-items-center justify-content-center">
        <div class="col-6 center"><a href="containing.php">У нас вы увидите</a></div>
        <div class="col-6 center"><a href="troupe.php">У нас работают</a></div>
    </div>
</div>
<div class="container-fluid">
    <div>Ваша персональная страница!!!</div>
    <?php
        require_once ("db.php");
        session_start();
        if(empty($_SESSION['id'])){
            header('Location: index.php');
        }
        $id = $_SESSION['id'];
        $sql = 'SELECT login, password FROM users WHERE id = :id';
        $params = [':id'=>$id];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<div>\n";
        echo "Ваш логин:", $user['login'],"\n";
        echo "</div>\n";
        echo "<div>\n";
        echo "Ваш пароль:", $user['password'],"\n";
        echo "</div>\n";
        echo '<form action="abort.php">';
        echo '<button>';
        echo "Выход";
        echo "</button>";
        echo '</form>';
    ?>

</div>
<div class="container-fluid footer">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 center">Наши контактные данные: ул.Пушкина, д.Колотушкина</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>