<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id='".$id."' ";
$result = $mysqli->query( $query );
$data = $result->fetch_object();

if(isset( $_POST['edit'] )){
$stambuk = $_POST['stambuk'];
$nama = $_POST['nama'];

    $query = "UPDATE mahasiswa
                SET stambuk='".$stambuk."', nama='".$nama."' WHERE id='".$id."' ";

    if( $mysqli->query($query) ) {
        header('Location: index.php');
    }else{
        echo "Edit Data Error!!";
    }
}

?>
<!--we have our html form here where new user information will be entered-->
<form action='#' method='post' border='0'>
    <table>
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' value='<?php echo $data->stambuk;  ?>' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' value='<?php echo $data->nama;  ?>' /></td>
        </tr>
        <tr>
            <td>
                <input type='submit' value='Edit' name='edit' />
            </td>
        </tr>
        </table>
    </form>
