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

<section id="car-list-area" class="section-padding">
<div class="site-section bg-light">
    <div class="container">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="row">

    <div class="col-lg-12">
        <div class="car-list-content">
            <div class="row">
                <?php foreach($mobil as $mb) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                <table class="table table-hover table-border">
                    <p align="center">
                        <img width="250px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">
                    </p>
                        <div class="text-center">
                            <h2><a href="#"><?php echo $mb->merk ?></a></h2>
                            <h4>Rp. <?php echo number_format($mb->harga,0,',','.') ?> / Hari</h4>
                            <h5>Rp. <?php echo number_format($mb->denda,0,',','.') ?> / Jam</h5>
                             
                            <tr>
                                <th>   
                                    <span>AC</span>
                                </th>
                                <td>
                                    <?php 
                                        if($mb->ac == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <span>Supir</span>
                                </th>
                                <td>
                                    <?php 
                                        if($mb->supir == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <span>MP3 Player</span>
                                </th>
                                <td>
                                    <?php 
                                        if($mb->mp3_player == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <span>Central Lock</span>
                                </th>
                                <td>
                                    <?php 
                                        if($mb->central_lock == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <?php
                                        if($mb->status == "1") {
                                            echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,'<span class="btn btn-primary">Rental</span>');
                                        }else {
                                            echo "<span class='btn btn-danger'>Tidak Tersedia</span>";
                                        }
                                    ?>
                                    <a href="<?php echo base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>" class="btn btn-info">Detail</a>  
                                </th>
                            </tr>
                            
                        </div>
                    </table>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</section>