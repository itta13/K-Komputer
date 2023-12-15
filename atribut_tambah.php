<div class="page-header">
    <h4>Tambah Variabel Data</h4>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="POST">
            <div class="mb-3">
                <label>Id. Variabel<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_atribut" value="<?= set_value('id_atribut', kode_oto('id_atribut', 'tb_atribut', 'A', 2)) ?>" />
            </div>
            <div class="mb-3">
                <label>Nama Variabel <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_atribut" value="<?= set_value('nama_atribut') ?>" />
            </div>
            
            <div class="mb-3">
                <button class="btn btn-primary"><span class=""></span> Simpan</button>
                <a class="btn btn-danger" href="?m=atribut"><span class=""></span> Kembali</a>
            </div>
        </form>
    </div>
</div>