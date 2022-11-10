<?php


if (isset($_GET['p'])){

    if ($_GET['p'] == 'tampil') { //standar

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    } else if ($_GET['p'] == 'pesan') { // ada pesannya

        echo "Hallo apa kabar" .$_POST['nama'];
        echo "<br/>";
        echo "Password anda adalah" .$_POST['password'];

    } else if ($_GET['p'] == 'aman') { // tambahan eror

        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "Password masih kosong";
        }
    } else if ($_GET['p'] == "gambar") {
        $size = getimagesize($_FILES['berkas']['tmp_name']);//mengambil gambar
        $image = "data:".$size['mine'].";base64,".
                base64_encode(file_get_contents($FILES['berkas']['tmp_name'])); //menampilkan gambar

        echo "<image src='".$image."' width='720'>";
    }

} else {
    echo "Anda tidak boleh mengakses hal ini";
}