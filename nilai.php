<div class="page-header">
    <h4>Nilai Variabel Data</h4>
</div>
<div class="card">
    <div class="card-header">
        <form class="row g-1 align-items-center">
            <input type="hidden" name="m" value="nilai" />
            
            <div class="col-auto">
                <a class="btn btn-primary" href="?m=nilai_tambah"><span class=""></span> Tambah Nilai Variabel Data</a>
            </div>
        </form>
    </div>

    <table class="table table-bordered table-hover table-striped m-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Variabel</th>
                <th>Nama Variabel</th>
                <th>Nama Nilai Variabel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $q = esc_field(_get('q'));
        $rows = $db->get_results("SELECT * FROM tb_nilai n INNER JOIN tb_atribut a ON a.id_atribut=n.id_atribut WHERE nama_atribut LIKE '%$q%' OR nama_nilai LIKE '%$q%' ORDER BY n.id_atribut, n.nama_nilai");
        $no = 0;

        foreach ($rows as $row) : ?>
            <tr>
                <td><?= ++$no ?></td>
                <td><?= $row->id_atribut ?></td>
                <td><?= $row->nama_atribut ?></td>
                <td><?= $row->nama_nilai ?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="?m=nilai_ubah&ID=<?= $row->id_nilai ?>">Edit Data<span class=""></span></a>
                    <a class="btn btn-sm btn-danger" href="aksi.php?act=nilai_hapus&ID=<?= $row->id_nilai ?>" onclick="return confirm('Hapus data?')">Hapus Data<span class=""></span></a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</div>