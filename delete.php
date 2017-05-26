<?php
//include database connection
 include 'koneksi.php';
$id = $_GET['id'];

if(isset($id)){
 $query = "DELETE FROM mahasiswa WHERE id = '".$id."' ";
 if( $mysqli->query($query) ){
     header('Location: index.php');
 }else{
     echo "Delete Data Error!!";
 }
}
?>
