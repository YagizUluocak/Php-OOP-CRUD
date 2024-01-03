<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>

<?php
$tablo_adi = "kategori";
$tablo_id_alan = "kategori_id";
$sorgu = "";
$veri = new Veri();
$tablo_id = $_GET["kategori_id"];
$veriGetir = $veri->veriIdGetir($tablo_adi, $tablo_id_alan, $tablo_id, $sorgu);
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
                      <h6 class="mb-4">Kategori Güncelle</h6>
                      <form method="POST">
                          <div class="mb-3">
                            <label for="kategori_adi" class="form-label"><h6 style="color: black;">Kategori Adı</h6></label>
                            <input type="text" class="form-control" id="kategori_adi" name="kategori_adi" value="<?php echo $veriGetir->kategori_adi?>">
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

