<?php alert(); ?>
<table class="table table-bordered table-striped table-hover mt-3">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nominal Belanja</th>
            <th>Nominal Bayar</th>
            <th>Kembalian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = mysqli_query($conn, "SELECT * from kasir");
        $no = "1";
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td>Rp. <?= number_format($data['belanja'],0,',','.'); ?></td>
            <td>Rp. <?= number_format($data['bayar'],0,',','.'); ?></td>
            <td>Rp. <?= number_format($data['kembalian'],0,',','.'); ?></td>
            <td><a href="hapus.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah yakin ingin dihapus?')">
                    <Button class="btn btn-danger form-control">Hapus</Button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>