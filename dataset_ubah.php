<?php
$rows = $db->get_results("SELECT * FROM tb_dataset WHERE nomor='$_GET[ID]' ORDER BY id_atribut");
?>
<div class="page-header">
    <h4>Ubah Data Penelitian</h4>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="POST">
            <div class="mb-3">
                <label>Nomor <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nomor" value="<?= $_GET['ID'] ?>" readonly="" />
            </div>
            <div class="mb-3">
                <label>Nama Balita</label>
                <input class="form-control" type="text" name="ket_dataset" value="<?= set_value('ket_dataset', $rows[0]->ket_dataset) ?>" />
            </div>
            <?php foreach ($rows as $row) : ?>
                <div class="mb-3">
                    <label><?= $ATRIBUT[$row->id_atribut]->nama_atribut ?> <span class="text-danger">*</span></label>
                    <?php if ($ATRIBUT_NILAI[$row->id_atribut]) : ?>
                        <select class="form-control" name="nilai[<?= $row->id_dataset ?>]">
                            <option value="">&nbsp;</option>
                            <?= get_nilai_option($row->id_atribut, $row->id_nilai) ?>
                        </select>
                    <?php else : ?>
                        <input class="form-control" type="text" name="nilai[<?= $row->id_dataset ?>]" value="<?= $row->id_nilai ?>" />
                    <?php endif ?>
                    <?php if ($row->keterangan) : ?>
                        <p class="help-block"><?= $row->keterangan ?></p>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
            <div class="mb-3">
                <button class="btn btn-primary"><span class=""></span> Simpan</button>
                <a class="btn btn-danger" href="?m=dataset"><span class=""></span> Kembali</a>
            </div>
        </form>
    </div>
</div>