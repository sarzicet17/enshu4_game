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

<?php 
    for($i=1;$i<10;$i++){
        for($j=1;$j<10;$j++){
        $question_array[$i][$j] = pg_query("select num_question from $_GET{['level']} where point=\"$i$j\"");            
        }
    }
?>

<form name="panel" mathod="POST">

<table id="puzzle_array">
<?php 
    for($i = 1;$i <= 9;$i++){
        print"<tr>";
        for($j = 1;$j <= 9;$j++){
            print"<td>"."<input>"."</td>";
        }
        print"</tr>";
    }
?>
</table>

</form>

<h1>プレイ中</h1>

</body>
</html>