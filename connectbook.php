<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("logregi_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

$id = $_POST['id'];
$full = $_POST['full'];
$gender = $_POST['gender'];
$leave = $_POST['leave'];
$go = $_POST['go'];
//inserting into my table
$sql = "insert into booking(id, full, gender, leave, go)values('$id', '$full', '$gender', '$leave', '$go')";
$result = mysql_query($sql);

// If Statement.

if($result){
   header("Location: result.php");
}else{
    echo "Error...Try Again <a href='book.php'>Try again</a>";
}
?>