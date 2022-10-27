<?php

$nama = "mike";

// echo $nama;

// MENGGUNAKAN FOR
/*$no = 10;
 
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ". $nama."<br/>";
}
*/

// MENGGUNAKAN WHILE
/*$no = 10;
$i = 0;

while ($i < $no){
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

// MENGGUNAKAN DO
/*$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

// DATA PENGULANGAN
/*$data = array('Avanza', 'Lamborghini', 'Buggati', 'Supra', 'GTR24');

echo $data[3];

foreach($data as $value){
    echo $value."<br/>";
}
*/


// PERCABANGAN
// ketika ini berar maka apa yang terjadi

// PAKE IF ELSE
/*if ($nama == "Zainal") {
    echo $nama." "."adalah orang Malang";
} else if ($nama == "Olivia"){
    echo $nama." "."Bukan orang Malang";
} else {
    echo $nama." "."Darimana ya?";
}
*/


// PAKE SWITCH
/*switch($nama){
    case "Zainal";
        $pesan = $nama." "."adalah orang Malang";
    break;
    case "Olivia";
        $pesan = $nama." "."Bukan orang Malang";
    break;
    default;
        $pesan = $nama." "."Darimana ya?";
}

echo $pesan;
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])){
            switch($_POST['nama']){
                case "Zainal";
                    $pesan = $_POST['nama']." "."adalah orang Malang";
                break;
                case "Olivia";
                    $pesan = $_POST['nama']." "."Bukan orang Malang";
                break;
                default;
                    $pesan = $_POST['nama']." "."Darimana ya?";
            }
            
            for ($i=0;$i<$_POST['no'];$i++){
                echo $pesan."<br/>";
            }
        }else {
            echo "Anda belum Input nama dan jumlah";
        }
    ?>
</body>
</html>