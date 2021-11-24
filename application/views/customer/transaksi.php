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
    <div class="card mx-auto" style="margin-top: 50px; margin-bottom: 50px; width: 80%">
    <div class="card-header">
        Data Transaksi Anda
    </div>
    <span class="mt-2 p2"><?php echo $this->session->flashdata('pesan') ?></span>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>Nama Customer</th>
                <th>Merk Mobil</th>
                <th>No. Plat</th>
                <th>Harga Sewa</th>
                <th>Action</th>
                <th>Batal</th>
            </tr>

            <?php $no=1; foreach($transaksi as $tr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->merk ?></td>
                    <td><?php echo $tr->no_plat ?></td>
                    <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                    <td>
                        <?php if($tr->status_rental == "Selesai") { ?>
                            <button class="btn btn-sm btn-danger">Rental Selesai</button>
                        <?php }else { ?>
                            <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                        <?php } ?>
                    </td>
                    <td>

                        <?php
                            if($tr->status_rental == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Ingin Membatalkan Transaksi?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
                        <?php }else { ?>
                            <a onclick="return confirm('Terimakasih Telah Melakukan Transaksi.')" class="btn btn-sm btn-secondary">Batal</a>
                        <?php } ?>                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </div>
</div>