<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('<?php echo base_url()?>assets/assets_shop/images/hero_2.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
            <h1>Our For Rent Cars</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        </div>
    </div>
    </div>
</div>


<div class="container">

    <div class="card" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="card-header">
            Form Rental Mobil
        </div>

        <div class="card-body">
            <?php foreach($detail as $dt) : ?>

                <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">

                <div class="form-group">
                    <label>Harga Sewa/Hari</label>
                    <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                    <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Denda/Hari</label>
                    <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Tanggal Rental</label>
                    <input type="date" name="tanggal_rental" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" class="form-control">
                </div>

                <button type="submit" class="btn btn-warning">Rental</button>

                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>