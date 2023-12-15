<div class="page-header">
    <h4>Variabel Data</h4>
</div>
<div class="card">
    <div class="card-header">
        <form class="row g-1 align-items-center">
            <input type="hidden" name="m" value="atribut" />
           
          
            <div class="col-auto">
                <a class="btn btn-primary" href="?m=atribut_tambah"><span class=""></span> Tambah Data Variabel</a>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-hover table-striped m-0">
        <thead>
            <tr>
                <th>Kode Variabel</th>
                <th>Nama Variabel</th>
               
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $q = esc_field(_get('q'));
        $rows = $db->get_results("SELECT * FROM tb_atribut WHERE nama_atribut LIKE '%$q%' ORDER BY id_atribut");
        $no = 0;
        foreach ($rows as $row) : ?>
            <tr>
                <td><?= $row->id_atribut ?></td>
                <td><?= $row->nama_atribut ?></td>
               
                <td>
                    <a class="btn btn-sm btn-warning" href="?m=atribut_ubah&ID=<?= $row->id_atribut ?>">Edit Data<span class=""></span></a>
                    <a class="btn btn-sm btn-danger" href="aksi.php?act=atribut_hapus&ID=<?= $row->id_atribut ?>" onclick="return confirm('Hapus data?')">Hapus Data<span class=""></span></a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>