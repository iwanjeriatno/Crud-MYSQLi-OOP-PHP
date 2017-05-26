<?php
    include 'ConnectDB.php';

    if(isset($_POST['simpan'])){
        $stambuk = $_POST['stambuk'];
        $nama = $_POST['nama'];
        $sql = "INSERT INTO mahasiswa (stambuk, nama) VALUES ('$stambuk','$nama')";

        if( $connect->query($sql) ) {
            header('Location: Read.php');
        }else{
            echo "Tambah Data Error";
        }
        $mysqli->close();
    }
?>
<!--we have our html form here where user information will be entered-->
<form action='' method='post' border='0'>
    <table align="center">
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' name='simpan' value='Create' />
            </td>
        </tr>
        </table>
    </form>
</body>
</html>
