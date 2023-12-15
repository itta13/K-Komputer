<div class="page-header">
    <h4>Perhitungan Metode KNN</h4>
</div>
<?php
$error = false;

if ($_POST) {
    $nilai_k = $_POST['nilai_k'];
    foreach ($_POST['nilai'] as $key => $val) {
        if ($val == '')
            $error = true;
    }
    if ($error) {
        print_msg('Isikan semua atribut');
    } else  if ($nilai_k <= 2) {
        print_msg('Masukkan nilai K minimal 3');
        $error = true;
    }
}

$atribut = $ATRIBUT;
unset($atribut[$TARGET]);
?>

<div class="card mb-3">
    <div class="card-header">Data yang diketahui</div>
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="?m=hitung#hasil">
            <div class="form-group"><label class="col-sm-3 control-label">Nilai k <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="nilai_k" value="<?= set_value('nilai_k', 15) ?>" />
                    <p class="help-block">Masukkan nilai k.</p>
                </div>
            </div>
            <?php
            foreach ($atribut as $key => $val) : ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?= $val->nama_atribut ?> <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <?php if (isset($ATRIBUT_NILAI[$key])) : ?>
                            <select class="form-control" name="nilai[<?= $key ?>]">
                                <option value="">&nbsp;</option>
                                <?= get_nilai_option($key, isset($_POST['nilai'][$key]) ? $_POST['nilai'][$key] : '') ?>
                            </select>
                        <?php else : ?>
                            <input class="form-control" type="text" name="nilai[<?= $key ?>]" value="<?= isset($_POST['nilai'][$key]) ? $_POST['nilai'][$key] : '' ?>" />
                        <?php endif ?>
                        <?php if ($val->keterangan) : ?>
                            <p class="help-block"><?= $val->keterangan ?></p>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    <button class="btn btn-primary"><span class=""></span> Hitung</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if ($_POST && !$error) include 'hitung_hasil.php';
?>