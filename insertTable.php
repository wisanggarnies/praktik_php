<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databese = "web_db";
    
        $connect = mysqli_connect($hostname, $username, $password, $databese);
    
        if($connect){
            echo "Koneksi ke MySQL berhasil <br>";
        }
        else{
            echo "Koneksi ke MySQL gagal". mysqli_connect_error();
        }

        $query = "INSERT into student(name,address)
                    VALUES ('Kevin','Malang'),
                    ('Stephanie','Surabaya'),
                    ('Sammy','Jakarta')";
        
        if(mysqli_query($connect, $query)){
            echo "Data baru berhasil ditambahkan";
        }
        else{
            echo "Data baru gagal di tambahkan <br>".mysqli_error($connect);
        }
        mysqli_close($connect);
?>