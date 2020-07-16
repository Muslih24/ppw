




<li><a href="#open" onclick="history(open,<?php echo date('Y-m-d H:i:s');  ?>)">Buka PDF</a></li>
<li><a href="#close" onclick="history(close,<?php echo date('Y-m-d H:i:s');  ?>)"> Tutup PDF</a></li>

<?php
// update_history.php
$keterangan = $_POST['keterangan'];
$waktu= $_POST['waktu'];
mysql_query("INSERT INTO log VALUES('','$_SESSION[id_user]','$keterangan','$waktu')");
?>

// Tempatkan diatas tag </body>
<script>
    function history($proses, $waktu){
        $.ajax({
            //Kirimkan data untuk di proses update/insert
            url: "update_history.php",
            //Data yang dikirimkan
            data: {proses : $proses, waktu: $waktu},
            type: "POST",
            //Jika success
            success: function(data){
                console.log("***********Success***************"); // Data Tersimpan
                console.log(data);
            },
            //Jika error
            error: function(){
                    console.log("***********Error***************"); // Gagal Tersimpan
                    console.log(data);
            }
        });
    }
</script>
