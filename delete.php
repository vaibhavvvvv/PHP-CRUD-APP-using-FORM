<?php
include "db_conn.php";


$id = $_GET['id'];
$sql = "DELETE FROM `idcrud` WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result){
  header("Location: index.php?msg= Record Deleted Succesfully");
}
else{
  echo "failed: " . mysqli_error($conn);
}
?>