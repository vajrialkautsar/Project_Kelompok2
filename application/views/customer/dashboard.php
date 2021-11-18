
        <!-- Section-->
        <section class="py-5">
            <div class="container px-6 px-lg-6 mt-6">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($mobil as $mb) : ?>
                        
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <p align="center">
                            <img src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" style="width: 160px; height: 130px;">
                            </p>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><a href="#"><?php echo $mb->merk ?></a></h5>
                                    <!-- Product price-->
                                    No. Plat : <?php echo $mb->no_plat ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-3 border-top-3 bg-outlander">
                            <div class="text-center">
                                
                            <?php
                            
                            if ($mb->status == "0") {
                                echo "<span class='btn btn-danger' disable>Telah Di Rental</span>";
                            }else{
                                echo anchor('customer/rental/tambah_rental'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                            }

                            ?>

                            <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_mobil/').$mb->id_mobil ?>">Detail</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    
                    
                </div>
            </div>
        </section>
       