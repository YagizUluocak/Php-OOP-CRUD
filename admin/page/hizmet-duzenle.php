<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>

<?php
$tablo_adi = "hizmetler";
$tablo_id_alan = "hizmet_id";
$sorgu = "";
$veri = new Veri();
$tablo_id = $_GET["hizmet_id"];
$veriGetir = $veri->veriIdGetir($tablo_adi, $tablo_id_alan, $tablo_id, $sorgu);
$updated = false;

if(isset($_POST["submit"]))
{
  $veri2 = new Veri();
  $sutunlar = ["hizmet_baslik", "hizmet_icerik", "hizmet_durum"];
  $kosul = 'hizmet_id='.$_GET["hizmet_id"];
  $veri2->veriDuzenle($tablo_adi, $sutunlar, $kosul);

  if($veri2->veriDuzenle($tablo_adi, $sutunlar, $kosul))
  {
    $updated = true;
  }

}
?>
    <body>
      <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <?php include "../inc/_sidebar.php";?>
        <!-- Sidebar End -->
    
        <div class="content">
          <!-- Navbar Start -->
          <?php include "../inc/_navbar.php";?>
          <!-- Navbar End -->
    
          <div class="container-fluid pt-4 px-4">
            <div class="row g-4 h-100" >
              <div class="col-sm-12 col-xl-12">
                <div class="col">
                  <div class="bg-light rounded p-4" style="height: 100%;">
                      <h6 class="mb-4">Hizmet Düzenle</h6>
                      <?php
                      if($updated)
                      {
                        ?>
                          <div class="alert alert-success" role="alert">
                            <strong>Güncelleme İşlemi Başarıyla Gerçekleşti.</strong>
                          </div>
                        <?php
                      }
                      ?>
                      <form method="POST">
                          <div class="mb-3">
                            <label for="hizmet_baslik" class="form-label"><h6 style="color: black;">Hizmet Başlık</h6></label>
                            <input type="text" class="form-control" id="hizmet_baslik" name="hizmet_baslik" value="<?php echo $veriGetir->hizmet_baslik?>">
                          </div>
                          <div class="mb-3">
                              <label for="hizmet_icerik" class="form-label"><h6 style="color: black;">Himzet İçerik</h6></label>
                              <textarea class="form-control" name="hizmet_icerik" id="hizmet_icerik" style="min-height: 220px;"><?php echo $veriGetir->hizmet_icerik?></textarea>
                          </div>         
                          <div class="mb-3">
                            <label for="hizmet_durum" class="form-label"><h6 style="color: black;">Hizmet Durumu</h6></label>
                            <select class="form-control" name="hizmet_durum" id="hizmet_durum">
                              <option name="hizmet_durum" value="1">Göster</option>
                              <option name="hizmet_durum" value="0">Gizle</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-success rounded-pill" name="submit">Kaydet</button>
                      </form>
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

