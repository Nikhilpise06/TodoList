<?php
$title=$_POST['title'];


include 'database.php';
$sql="SELECT * FROM todos";
$result=mysqli_query($conn, $sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        //$title=$row['title'];
    }
}
$id=$id+1;



$sql="INSERT INTO todos(id,title)VALUES('$id','$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>