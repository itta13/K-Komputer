<?php
$row = $db->get_row("SELECT * FROM tb_nilai WHERE id_nilai='$_GET[ID]'");
?>
<div class="page-header">
    <h4>Ubah Variabel</h4>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="POST">
            <div class="mb-3">
                <label>Variabel <span class="text-danger">*</span></label>
                <select class="form-control" name="id_atribut">
                    <option></option>
                    <?= get_atribut_option($row->id_atribut) ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Nama Nilai <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_nilai" value="<?= $row->nama_nilai ?>" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><span class=""></span> Simpan</button>
                <a class="btn btn-danger" href="?m=nilai"><span class=""></span> Kembali</a>
            </div>
        </form>
    </div>
</div>