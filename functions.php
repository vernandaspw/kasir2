<?php
$conn = mysqli_connect("localhost","root","","pwl_kasir2");
if (!$conn){
    die ("koneksi gagal");
}

// VERNANDA SEPTIA WANANDI


$h = "form";
if (!empty($_GET['h'])) {
    $h = $_GET['h'];
}


function hitung() {
    global $conn;
    if (isset($_POST['hitung'])) {
        $belanja = $_POST['belanja'];
        $bayar = $_POST['bayar'];
        $kembalian = $bayar-$belanja;

        $hitung = mysqli_query($conn, "INSERT INTO kasir SET belanja='$belanja', bayar='$bayar', kembalian='$kembalian' ");
    if ($hitung) {
        $status = '1';
    } else{
        $status = '1';
    }

    echo "<script>window.location.href='index.php?h=form&s=$status'</script>";
    }
}

function alert() {
if(!empty($_GET['s'])){
    if($_GET['s'] == "1"){
?>
<div class="alert alert-success">
    <strong>Berhasil,</strong> Data berhasil ditambahkan
</div>
<?php
}else if($_GET['s'] == "2"){
                    ?>
<div class="alert alert-danger">
    <strong>Maaf !</strong> Data gagal ditambahkan
</div>
<?php
                    }
                }
            
}

function alerthapus() {
    if(!empty($_GET['s'])){
        if($_GET['s'] == "1"){
    ?>
<div class="alert alert-success">
    <strong>Berhasil,</strong> Data berhasil dihapus
</div>
<?php
    }else if($_GET['s'] == "2"){
                        ?>
<div class="alert alert-danger">
    <strong>Maaf !</strong> Data gagal dihapus
</div>
<?php
                        }
                    }
                
    }