<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>

<?php
    $tablo_adi = "kategori";
    $sorgu = "";
    $veri = new Veri();
    $veriGetir = $veri->veriGetir($tablo_adi, $sorgu);

    // VERİ SİL
    if(isset($_GET['islem']) && $_GET['islem'] === 'kategorisil')
    {
        $tablo_id = $_GET["kategori_id"]; 
        $id_alan_isim = "kategori_id";

        $veri = new Veri();
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $veri->veriSil($tablo_adi, $id_alan_isim, $tablo_id);
        if($VeriSil)
        {
            echo "<script>window.location.href='kategori.php?kategorisil=ok';</script>";
            exit;
        }
        else 
        {
            echo "<script>window.location.href='kategori.php?kategorisil=no';</script>";
            exit;
        }
    }


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
                                    <h4 style="margin-bottom: 32px;">Kategori</h4>
                                    <a href="./kategori-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>

                                    <div class="table-responsive">
                                        <?php
                                        if($veriGetir)
                                        {
                                        ?>
                                            <table class="table text-center" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col">Kategori Adı</th>
                                                        <th scope="col" style="width: 150px;">Düzenle</th>
                                                        <th scope="col" style="width: 150px;">Sil</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                foreach($veriGetir as $kategori)
                                                {
                                                ?>
                                                    <tr class="text-center">
                                                        <th scope="row"><?php echo $kategori->kategori_id?></th>
                                                        <td><?php echo $kategori->kategori_adi?></td>
                                                        <td><a href="./kategori-duzenle.php?kategori_id=<?php echo $kategori->kategori_id?>" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>      
                                                        <td><a href="./kategori.php?kategori_id=<?php echo $kategori->kategori_id?>&islem=kategorisil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>                       
                                                    </tr>
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
