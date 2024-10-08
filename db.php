<?php
// function connect_db(){
//         return new SQLite3('whatsapp.db');
// }
// function buat_tabel(){
//     $db = connect_db();
//     $query_tabel = "
//         CREATE TABLE IF NOT EXISTS whatsapp,
//         nama TEXT NOT NULL
//         )";
//         $db->query($query_tabel);
// }

$db = new SQLite3('waa.db');
if(!$db){
    echo "Database connection failed" .$db->lastErrorMsg();
    exit;
}


// tabel
$query_tabel_nomor= 'CREATE TABLE IF NOT EXISTS simpan_whatsapp(
    id_nomor INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT NOT NULL,
    nomor TEXT NOT NULL 
    )';

// function connect() {
//     return new SQLite3('wa.db');
// }
// function createtable($db) {

// }
//     $query = "CREATE TABLE IF NOT EXISTS simpan_whatsapp(
//         id_nomor INTEGER PRIMARY KEY AUTOINCREMENT,
//         nama TEXT NOT NULL,
//          nomor TEXT NOT NULL
//          )" ;
//          $db->query($query);

// function savecontact($db, $nama, $nomor){
//     $query = "INSERT INTO WA (nama, nomor) VALUES ('$nama', '$nomor')";
//     $db->query($query);
// }

// function getAllContact($db) {
//     return $db->query('SELECT * FROM wa')
// }

// function deletecontact($db, $id){
//     $query = "DELETE FROM wa WHERE id = $id";
//     $db->query($query);
// }

// function updatecontact($db, $id, $nama, $nomor) {
//     $query = "UPDATE wa SET nama = '$nama', nomor = '$nomor' WHERE id = $id";
//     $db->query($query);
// }

// $db = connect();
// createtable($db);

