<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ユーザー登録</h1>
<p>
<?php
    @$coneect = pg_connect("host=localhost dbname=endb1810 user=enuser1810 password=enpass1810");
    if($coneect = false){
        print("DB Conntection Error");
        exit;
    }
    if($connect = true){
        print("DB Success");
    }
?>
</p>
</body>
</html>