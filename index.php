<?php

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
            padding-top:10px;
            background: green;
            text-align: center;
            color:white;
        }
        .a{
            text-decoration: none;
            color:white;
            
        }
    </style>
</head>
<body>
    <div class="conten">
        <h1> Kirim whatsapp tanpa perlu simpan nomor</h1>
        <br>
        <h3>Cepat dan mudah. tidak perlu instalisasi</h3>
    </div>
        
    <table>
    <th><a href="index.php"><h5>Kirim pesan</h5></a></th>
    <th><a href="simpan.php"><h5>simpan whats app</h5></a></th>
        </table>    
        <div>
        <form action="" method="get" >
            <input  name="text" type="number" class="conten2" !IMPORTANT>
        </form>
        </div>
        <div class="button">
            <a href="ui.php" class="a">Kirim</a>
             <!-- <input type="submit" Value="Kirim" link="ui.php"> -->
           <!-- <input type="submit" value="Kirim" class="button"> -->
        </div>

        
</body>
</html>