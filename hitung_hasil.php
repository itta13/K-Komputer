<?php
$dataset = get_dataset();
$knn = new KNN($dataset, $TARGET, $_POST['nilai'], $nilai_k);
?>
<div class="card mb-3">
    <div class="card-header">
        <strong>
            <a href="#dataset" data-bs-toggle="collapse">Data Penelitian</a>
        </strong>
    </div>
    <div class="table-responsive collapse" id="dataset">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <?php
            foreach ($knn->dataset as $key => $val) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($val as $k => $v) : ?>
                        <td><?= isset($ATRIBUT_NILAI[$k]) ? $NILAI[$v]->nama_nilai : $v ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <strong>
            <a href="#dataset_nilai" data-bs-toggle="collapse">Nilai Data Penelitian</a>
        </strong>
    </div>
    <div class="table-responsive collapse" id="dataset_nilai">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <?php
            foreach ($knn->dataset_nilai as $key => $val) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($val as $k => $v) : ?>
                        <td><?= $k == $TARGET ? $NILAI[$v]->nama_nilai : $v ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <strong>
            <a href="#c1" data-bs-toggle="collapse">Normalisasi Data Penelitian</a>
        </strong>
    </div>
    <div class="table-responsive collapse" id="c1">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <?php
            foreach ($knn->normal as $key => $val) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($val as $k => $v) : ?>
                        <td><?= $k == $TARGET ? $NILAI[$v]->nama_nilai : round($v, 9) ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<div class="card mb-3" id="hasil">
    <div class="card-header">
        <strong><?= count($knn->nearest) ?> Hasil Keputusan Jarak Tetangga Terdekat</strong>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>Nomor</th>
                    <?php foreach ($ATRIBUT as $key => $val) : ?>
                        <th><?= $val->nama_atribut ?></th>
                    <?php endforeach ?>
                    <th>Jarak</th>
                </tr>
            </thead>
            <?php foreach ($knn->nearest as $key) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <?php foreach ($knn->normal[$key] as $k => $v) : ?>
                        <td><?= $k == $TARGET ? $NILAI[$v]->nama_nilai : round($v, 9) ?></td>
                    <?php endforeach ?>
                    <td><?= round($knn->jarak[$key], 9) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <strong>Total</strong>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead class="nw">
                <tr>
                    <th><?= $ATRIBUT[$TARGET]->nama_atribut ?></th>
                    <th>Total</th>
                </tr>
            </thead>
            <?php foreach ($knn->total as $key => $val) : ?>
                <tr>
                    <td><?= $NILAI[$key]->nama_nilai ?></td>
                    <td><?= $val ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
<?php
$str = array();
foreach ($_POST['nilai'] as $key => $val) {
    $nama = isset($ATRIBUT_NILAI[$key]) ? $NILAI[$val]->nama_nilai : $val;
    $str[] = '' . $ATRIBUT[$key]->nama_atribut . ': <strong>' . $nama . '</strong>';
}
?>
<p>Berdasarkan perhitungan, dengan <?= implode(', ', $str) ?>, maka hasilnya: <strong><?= $NILAI[$knn->hasil]->nama_nilai ?></strong>.</p>