<html>
<head>
    <title>MySQLi Create Record</title>
</head>
<body>
    <?php
    //include database connection
    include 'koneksi.php';

if(isset($_POST['tambah'])){
    $stambuk = $_POST['stambuk'];
    $nama = $_POST['nama'];
    $query = "INSERT INTO mahasiswa (stambuk, nama) VALUES ('".$stambuk."','".$nama."')";

    if( $mysqli->query($query) ) {
        header('Location: index.php');
    }else{
        echo "Tambah Data Error";
    }
    $mysqli->close();
}
?>
<!--we have our html form here where user information will be entered-->
<form action='#' method='post' border='0'>
    <table>
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' /></td>
        </tr>
        <tr>
            <td>
                <input type='submit' name='tambah' value='Save' />
            </td>
        </tr>
        </table>
    </form>
</body>
</html>
