<?php
//1. Buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","fakultas");

//2. check koneksi dengan MySQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal". mysqli_connect_error();
}else{
    echo "Koneksi berhasil";
}

//3. Membaca data table MySQL
$query = "SELECT * FROM mahasiswa";

//4. Tampilkan data, dengan menjalankan sql query
$result = mysqli_query($con,$query);  //cera menjalankan querynya
$mahasiswa = [];
if ($result){
    //tampilakn data satu per satu
    // $row = mysqli_fetch_assoc($result); //parameter result , row : tampung
    // mysqli_fetch_asso : mengambil 1 baris
    while($row = mysqli_fetch_assoc($result)){
        //echo "<br>".$row["nama"]; //menampilkan nama semua data
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
    //var_dump($row); //untuk melihat di row
    //echo $row["nama"]; //intik menampilkan spesifik kolom 
}
//5. Tutup koneksi mysql
mysqli_close($con);

foreach($mahasiswa as $value){
    echo $value["nama"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
        </tr>
        <?php foreach($mahasiswa as $value):?>
        <tr>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>