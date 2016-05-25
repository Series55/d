<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HM9</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body>



<div class="container">
    <div class="row margin-top">
        <form class="login-form center-block">
            <div class="form-group">
                <label for="itemtype"><h1>Проверка</h1></label>
                <input  name="empty" class="form-control" id="Input" placeholder="Введите данные"><br>
                <input  name="empty1" class="form-control" id="Input" placeholder="Введите данные">
            </div>
            <button type="submit" class="btn btn-warning">Отправить</button><br><br>

            <button type="submit1" class="btn btn-info">Проверить</button>

        </form>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

