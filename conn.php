<?php
function connect() {
  $username = 'root';
  $password = 'admin';
  $sqlhost = 'localhost:3305';
  $dbname = 'practise';
 
  $pdo = new PDO('mysql:host='.$sqlhost.'; dbname = '.$dbname.';',$username, $password);
  if ($pdo){
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    }
  else{
    die("Could not connect to PDO!");
    }
  }

$pdo = connect();
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$sql = "INSERT INTO practise.test_db
    (id,fname,lname,age)
    values ('$id','$fname','$lname','$age')";
$pdo -> exec($sql);

header("location:index.html");
?>