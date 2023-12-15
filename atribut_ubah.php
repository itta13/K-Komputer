<?php
$row = $db->get_row("SELECT * FROM tb_atribut WHERE id_atribut='$_GET[ID]'");
?>
<div class="page-header">
    <h4>Ubah Variabel Data</h4>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="POST" action="?m=atribut_ubah&ID=<?= $row->id_atribut ?>">
            <div class="mb-3">
                <label>Id.Variabel <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="id_atribut" readonly="readonly" value="<?= $row->id_atribut ?>" />
            </div>
            <div class="mb-3">
                <label>Nama Variabel<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_atribut" value="<?= $row->nama_atribut ?>" />
            </div>
           
            <div class="mb-3">
                <button class="btn btn-primary"><span class=""></span> Simpan</button>
                <a class="btn btn-danger" href="?m=atribut"><span class=""></span> Kembali</a>
            </div>
        </form>
    </div>
</div>