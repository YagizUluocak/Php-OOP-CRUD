<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>
<?php
$tablo_adi = "hizmetler";
$sorgu = "";
$veri = new Veri();
$veriGetir = $veri->veriGetir($tablo_adi, $sorgu);
?>

        <body>
            <div class="container-fluid position-relative d-flex p-0">,
                <!-- Sidebar Start -->
                <?php include "../inc/_sidebar.php";?>
                <!-- Sidebar End -->

                <div class="content">
                    <!-- Navbar Start -->
                    <?php include "../inc/_navbar.php";?>
                    <!-- Navbar End -->

                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4" style="min-height: 90vh;">
                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h4 style="margin-bottom: 32px;">Hizmet</h4>
                                    <a href="./hizmet-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                    <div class="table-responsive">
                                        <?php
                                        if($veriGetir)
                                        {
                                            ?>
                                            <table class="table text-center" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col">Hizmet Başlık</th>
                                                        <th scope="col">Hizmet İçerik</th>
                                                        <th scope="col">Hizmet Durum</th>
                                                        <th scope="col">Düzenle</th>
                                                        <th scope="col">Sil</th>

                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                <?php
                                                foreach($veriGetir as $hizmet)
                                                {
                                                ?>
                                                    <tr class="text-center">
                                                        <th scope="row"><?php echo $hizmet->hizmet_id?></th>
                                                        <td><?php echo $hizmet->hizmet_baslik?></td>
                                                        <td><?php echo substr($hizmet->hizmet_icerik,0 , 50) ?></td>

                                                        <td>
                                                            <?php 
                                                                $durum = ($hizmet->hizmet_durum == 1) ?  '<p style = "color:green;">Onaylı</p>' : '<p style = "color:red;">Gizli</p>';
                                                                echo $durum;
                                                             ?>
                                                        </td>
                                                        <td><a href="./hizmet-duzenle.php?hizmet_id=<?php echo $hizmet->hizmet_id?>" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td> 
                                                        <td><a href="./hizmet.php?hizmet_id=<?php echo $hizmet->hizmet_id?>&islem=hizmetsil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>      
                                                    </tr>
                                                </tbody>
                                                <?php
                                                }
                                                ?>
                                            </table>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <?php include "../inc/_footer.php";?>
                    <!-- Footer End -->
                </div>

                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
                    <i class="bi bi-arrow-up"></i>
                </a>
            </div>   
            <!-- JavaScript Libraries -->
            <?php include "../inc/_scripts.php";?>
            <!-- JavaScript Libraries End -->          

        </body>
        </html>
