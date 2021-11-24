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


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>

                <div class="card-body">
                    <table class="table">
                    <?php foreach($transaksi as $tr) : ?>
                        <tr>
                            <th>Merk Mobil</th>
                            <td>:</td>
                            <td><?php echo $tr->merk ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Rental</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_rental ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Kembali</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_kembali ?></td>
                        </tr>

                        <tr>
                            <th>Biaya Sewa/Hari</th>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                        </tr>

                        <tr>
                            <?php
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlHari = abs(($x - $y)/(60*60*24));
                            ?>
                            <th>Jumlah Hari Sewa</th>
                            <td>:</td>
                            <td><?php echo $jmlHari ?> Hari</td>
                        </tr>

                        <tr class="text-success">
                            <th>JUMLAH PEMBAYARAN</th>
                            <td>:</td>
                            <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga * $jmlHari,0,',','.') ?></button></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                        </tr>

                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah Ini :</p>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank Mandiri 13794947</li>
                            <li class="list-group-item">Bank BCA 89427985298</li>
                            <li class="list-group-item">Bank BNI 3904750347503703</li>
                            <li class="list-group-item">Bank BRI 487598459348</li>
                            <li class="list-group-item">Bank BTN 092570845794385798</li>
                        </ul>

                        <?php 
                            if(empty($tr->bukti_pembayaran)) { ?>
                                <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="btn btn-sm btn-danger mt-3 mb-1">Upload Bukti Pembayaran</label>
                                    <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                            </form>
                            <?php }elseif($tr->status_pembayaran == '0'){ ?>
                                <button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>
                            <?php }elseif($tr->status_pembayaran == '1') { ?>
                                <button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Pembayaran Selesai</button>
                            <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
