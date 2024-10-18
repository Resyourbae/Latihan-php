<?php
        include "koneksidb.php";
        if(isset($_POST['bhapus'])){
            $hapus = mysqli_query($koneksidb,"DELETE FROM tb_member WHERE Nama = '$_POST[Nama]'");

            if($hapus){
                echo "<script>alert('hapus data berhasil');
            document.location='datamember.php'</script>";
            } 
            else{
                echo "<script>alert('ubah data gagal');
            document.location='datamember.php'</script>";
            }
        }
        ?>