<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello, world!</h1>
            <?php 
                // echo('Contoh d:<br>');
                // d($tes);
                // echo('<br>Contoh dd:<br>');
                // dd($tes);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>