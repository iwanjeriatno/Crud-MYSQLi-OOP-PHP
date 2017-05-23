<html>
<head>
    <title>Belajar CRUD</title>
</head>
<body>
    <?php
        include 'koneksi.php';
        $query = "select * from mahasiswa";
        $result = $mysqli->query( $query );
        $num_results = $result->num_rows;
    ?>

<div><a href='insert.php'>Tambah Data</a></div>

<?php
    if( $num_results > 0){
?>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stambuk</th>
        <th>Action</th>
    </tr>
<?php
    while( $data = $result->fetch_object() ){

        echo '<tr>';
            echo '<td>'.$data->id.'</td>';
            echo '<td>'.$data->nama.'</td>';
            echo '<td>'.$data->stambuk.'</td>';
            echo '<td>';
                echo '<a href="edit.php?id='.$data->id.'">Edit</a>';
                 echo '|';
                echo '<a href="delete.php?id='.$data->id.'">Delete</a>';
            echo '</td>';
        echo '</tr>';

    }
}
?>
</table>

</body>
</html>
