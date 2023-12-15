<div class="page-header">
    <h4>Data Penelitian</h4>
</div>
<div class="card">
    <div class="card-header">
        <form class="row g-1 align-items-center">
            <input type="hidden" name="m" value="dataset" />
           
            <div class="col-auto">
                <a class="btn btn-primary" href="?m=dataset_tambah"><span class=""></span> Tambah Data Penelitian</a>
            </div>
           
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <th>Nama Balita</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));
            $rows = $db->get_results("SELECT * FROM tb_dataset WHERE ket_dataset LIKE '%$q%' GROUP BY nomor");
            $dataset = get_dataset();

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row->nomor ?></td>
                    <td><?= $row->ket_dataset ?></td>
                    <?php foreach ($dataset[$row->nomor] as $k => $v) : ?>
                        <td><?= isset($ATRIBUT_NILAI[$k]) ? $NILAI[$v]->nama_nilai : $v ?></td>
                    <?php endforeach ?>
                    <td class="nw">
                        <a class="btn btn-sm btn-warning" href="?m=dataset_ubah&ID=<?= $row->nomor ?>">Edit Data<span class=""></span></a>
                        <a class="btn btn-sm btn-danger" href="aksi.php?act=dataset_hapus&ID=<?= $row->nomor ?>" onclick="return confirm('Hapus data?')">Hapus Data<span class=""></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>