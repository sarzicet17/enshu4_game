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
    @$connect = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb1810 user=enuser1810 password=enpass1810");
    if($connect = false){
        print("DB Conntection Error");
        exit;
    }

    $sql1= "select name from passdb where name='{$_POST['uname']}'";

    @$result = pg_query($sql1);
    if($result == false){
        print "エラーが発生しました";
        exit;
    }

    $row = pg_num_rows($result);

    pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
    
    if($row > 0){ // 入力されたユーザ名が、データベースの中に１つ以上ある時は「登録済み」
    
      pg_close($con); // データベースとの接続を閉じる。
    
      print "<p>\n";
      print "そのユーザ名は登録済みです。\n";
      print "</p>\n";
    
      print "<p>\n";
      print "<a href=\"index.php\">戻る</a>\n";
      print "</p>\n";
    
      print "</body>\n";
    
      print "</html>\n";
    
      exit;
    }
    
    
    // 以下は、プログラミングドリルの1-cを参照せよ
    
    $sql1 = "insert into passdb values('{$_POST['uname']}','{$_POST['pass']}')"; // テーブルpassdbに、ユーザ名とパスワードを登録する。
    
    print $sql1."<br>";
    
    @$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
    if($result == false){
      print"DATA INSERTION ERROR\n";
      exit;
    }
    pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
    
    
    $sql2 = "create table {$_POST['uname']} (id int, pass int)"; // ユーザ名のテーブルを作成する。列はidとpassで、型はどちらもint。
    print $sql2."<br>";
    
    @$result = pg_query($sql2); // SQLのコマンドでデータベースに問い合わせする。
    if($result == false){
      print"TABLE CREATION ERROR\n";
      exit;
    }
    
    pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。
    pg_close($con); // データベースとの接続を閉じる。
?>

<p>ユーザーを登録しました</p>
<p><a href="index.php"></a></p>

</p>
</body>
</html>