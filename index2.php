<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CHAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <?php 
        session_start();
        $s=0;
        $_SESSION["count"]=$s;
    ?>
    <h1>CHATROOM</h1>
    <a href="index.php"><button class="btn btn-success enter"><p>ENTER</p></button></a>
</body>
</html>