<?php

    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_PSOT["myaddress"];
    $gambar = $_FILES[foto]['name'];
    $tmpSementara = $_FILES['foto']['tmp_name'];

    $lokasiUpload = "img/";

    move_uploaded_file($tmpSementara, $lokasiUpload . $gambar);

    $query = "INSERT INTO student (name,address,foto)
            VALUE ('$name','$address','$gambar')";
    
    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>