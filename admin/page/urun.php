<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>
<?php

    $tablo_adi = "urunler";
    $sorgu = " INNER JOIN kategori ON urunler.kategori_id = kategori.kategori_id;";
    $veri = new Veri();
    $veriGetir = $veri->veriGetir($tablo_adi, $sorgu);

    // VERİ SİL
    if(isset($_GET['islem']) && $_GET['islem'] === 'urunsil')
    {
        $tablo_id = $_GET["urun_id"]; 
        $id_alan_isim = "urun_id";

        $veri = new Veri();
        $tablo_id = $_GET[$id_alan_isim];
        $VeriSil = $veri->veriSil($tablo_adi, $id_alan_isim, $tablo_id);
        if($VeriSil)
        {
            echo "<script>window.location.href='urun.php?urunsil=ok';</script>";
            exit;
        }
        else 
        {
            echo "<script>window.location.href='urun.php?urunsil=no';</script>";
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
                                    <h4 style="margin-bottom: 32px;">Ürünler</h4>
                                    <a href="./urun-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>

                                    <div class="table-responsive">
                                        <?php
                                        if($veriGetir)
                                        {
                                        ?>
                                            <table class="table text-center" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">1</th>
                                                        <th scope="col" style="width:120px;">Ürün Resim</th>
                                                        <th scope="col">Ürün İsmi</th>
                                                        <th scope="col" style="width:250px;">Ürün Açıklama</th>
                                                        <th scope="col">Ürün Fiyatı</th>
                                                        <th scope="col">Ürün Durumu</th>
                                                        <th scope="col">Düzenle</th>
                                                        <th scope="col">Sil</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($veriGetir as $urun)
                                                    {
                                                      ?>
                                                      <tr class="text-center" style="max-height: 120px; height:120px;">
                                                          <th scope="row"><?php echo $urun->urun_id?></th>
                                                          <td><img class="img-fluid" style="max-height: 120px; height:120px; max-width:120px; width:120px;"  src="../../images/urunler/<?php echo $urun->urun_resim?>" alt=""></td>
                                                          <td><p class="hizala"><?php echo $urun->urun_adi?></p></td>
                                                          <td><p class="hizala"><?php echo substr($urun->urun_aciklama, 0, 50)?></p></td>
                                                          <td><p class="hizala"><?php echo $urun->urun_fiyat?> ₺</p></td>
                                                          <td>
                                                                <?php 
                                                                    $durum = ($urun->urun_durum == 1) ?  '<p class="hizala" style = "color:green;">Onaylı</p>' : '<p class="hizala" style = "color:red;">Gizli</p>';
                                                                    echo $durum;
                                                                ?>
                                                          </td>
                                                          <td><p class="hizala"><a href="./urun-duzenle.php?urun_id=<?php echo $urun->urun_id?>" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></p></td>      
                                                          <td><p class="hizala"><a href="./urun.php?urun_id=<?php echo $urun->urun_id?>&islem=urunsil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>sil</a></p></td>                                                      
                                                      </tr>
                                                      <?php
                                                    }
                                                    ?>
                                                </tbody>

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
<style>

.hizala
{
    text-align: center; /* Yatayda hizalama */
    height: 100px; /* Hücre yüksekliği */
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>