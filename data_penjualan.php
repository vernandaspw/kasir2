<table class="table table-bordered table-striped table-hover mt-3">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nominal Belanja</th>
            <th>Nominal Bayar</th>
            <th>Kembalian</th>
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
        </tr>
        <?php } ?>
    </tbody>
</table>