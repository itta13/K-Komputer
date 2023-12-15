<div class="page-header">
    <h4>Tambah Nilai Variabel</h4>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="POST" action="?m=nilai_tambah">
            <div class="mb-3">
                <label>Variabel <span class="text-danger">*</span></label>
                <select class="form-control" name="id_atribut">
                    <option></option>
                    <?= get_atribut_option(set_value('id_atribut')) ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Nama Nilai <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_nilai" value="<?= set_value('nama_nilai') ?>" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><span class=""></span> Simpan</button>
                <a class="btn btn-danger" href="?m=nilai"><span class=""></span> Kembali</a>
            </div>
        </form>
    </div>
</div>