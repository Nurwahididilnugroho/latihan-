<?php
// require "db.php";
// if (isset($_POST['submit']) $_POST['submit'] !=''){
//     $nama=$_POST['nama'];
//     $nomor=$_POST['nomor'];
//     $query_get_data_edit = "INSERT"
//     $update_data = $db->query($query_update_data);
    
// };

// $db = new SQLite3('Whatsapp.db');
// if ($_SERVER['Request_Method'] == 'POST'){
//     $nama=$_POST['nama'];
//     $nomor=$_POST['nomor'];

//     $db->exec("INSERT INTO Whatsapp (nama, nomor)Value('$nama', '$nomor')");
//     header('location : simpan.php');
//     exit;
// }

function connect() {
    return new SQLite3('waa.db');
}
function createtable($db) {

}
    $query = "CREATE TABLE IF NOT EXISTS simpan_whatsapp(
        id_nomor INTEGER PRIMARY KEY AUTOINCREMENT,
        nama TEXT NOT NULL,
         nomor TEXT NOT NULL
         )";
        //  $db->query($query);

function savecontact($db, $nama, $nomor){
    $query = "INSERT INTO WA (nama, nomor) VALUES ('$nama', '$nomor')";
    $db->query($query);
}

function getAllContact($db) {
    return $db->query("SELECT * FROM wa");
}

function deletecontact($db, $id){
    $query = "DELETE FROM wa WHERE id = $id";
    $db->query($query);
}

function updatecontact($db, $id, $nama, $nomor) {
    $query = "UPDATE wa SET nama = '$nama', nomor = '$nomor' WHERE id = $id";
    $db->query($query);
}

$db = connect();
createtable($db);

if (isset($_GET['id'])){
    $id = $_GET['id'];
    deletecontact($db, $id);
    header("location: simpan.php");
    exit;
}

if (isset($_POST['edit_id'])){
    $edit_id = $_POST['edit.id'];
    $edit_nama = $_POST['edit.nama'];
    $edit_nomor = $_POST['edit.nomor'];

        if(!empty($edit_nama) && !empty($edit_nama)) {
            updatecontact($db, $id, $nama, $nomor);
        }
}

if (isset($_POST['nama']) && isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];

    if(!empty($nama) && !empty($nomor)) {
        savecontact($db, $nama, $nomor);
        header('location: https://wa.me/$nomor');
        exit;
    }
}

$result = getAllContact($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatts app bro</title>

    <style>
        .conten{
            padding:15px;
            background: green;
            color: white;
        }

        .conten2{
            width:100%;
            height: 30px;
            margin-bottom:20px;
        }

        .button{
            width:100%;
            height:30px;
            padding-TOP:10px 0;
            background: green;
            text-align: center;
            color:white;
        }
        .a{
            text-decoration: none;
            color:white;
            
        }
        .table{
            background: grey;
        }
    </style>
</head>
<body>
    <div class="conten">
        <h1> Simpan whatsapp </h1>
        <br>
        <h3>Cepat dan mudah. tidak perlu instalisasi</h3>
    </div>

        <table>
            <th><a href="index.php"><h5>Kirim pesan</h5></a></th>
            <th><a href="simpan.php"><h5>simpan whats app</h5></a></th>
        </table>    
    
        <div>
        <form action="" method="get" >
            <label for="">Nama</label>
            <input  name="nama" type="name" class="conten2">
            <label for="">Nomor Whats app</label>
            <input  name="nomor" type="number" class="conten2">
            <input type="submit" value="Submit" class="button">
        </form>
        </div>
    <br>
        
    <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Nomor Whatsapp</td>
            <td>Aksi</td>
        </tr>
    <?php
    // $counter = 1;
    // while ($row = $result) {
    //     echo "<tr>";
    //     echo "<td>". $counter++ ."</td>";
    //     echo "<td>". htmlspecialchars($row['nama'])."</td>";
    //     echo "<td>". htmlspecialchars($row['nomor'])."</td>";
    //     echo "<td> <a href='?id=" . $row['id']. "'onclick='
    //     return confirm(\"anda yakin ingin menghapus ni?\")'>Hapus</a></td>";
    //     echo "</tr>";
    // }
?>
</table>
</body>
</html>