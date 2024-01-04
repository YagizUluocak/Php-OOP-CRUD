<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>
<?php
$tablo2 = "kategori";
$sorgu2 = "";
$kategori = new Veri();
$kategoriGetir = $kategori->veriGetir($tablo2, $sorgu2);

$tablo_ad = "urunler";
$sutunlar = ["urun_adi", "urun_aciklama", "urun_fiyat", "urun_durum", "kategori_id", "urun_resim"];

if(isset($_POST["submit"]))
{
  $urun_adi = $_POST["urun_adi"];
  $urun_aciklama = $_POST["urun_aciklama"];
  $urun_fiyat  = $_POST["urun_fiyat"];
  $urun_durum  = $_POST["urun_durum"];
  $kategori_id  = $_POST["kategori_id"];
  $urun_resim = $_FILES["urun_resim"];

  $dest_path = "../../images/urunler/";
  $urun_resim = $_FILES["urun_resim"]["name"];
  $fileSourcePath = $_FILES["urun_resim"]["tmp_name"];
  $fileDestPath = $dest_path . $urun_resim;
  move_uploaded_file($fileSourcePath, $fileDestPath);

  $veri = new Veri();
  $veriEkle = $veri->veriEkle($tablo_ad, $sutunlar, [$urun_adi, $urun_aciklama, $urun_fiyat, $urun_durum, $kategori_id, $urun_resim]);
  
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
                      <h6 class="mb-4">Ürün Ekle</h6>
                      <form method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="urun_resim" class="form-label"> <h6 style="color: black;">Resim</h6></label>
                            <input class="form-control bg-dark" type="file" id="urun_resim" name="urun_resim">
                          </div>
                          <div class="mb-3">
                            <label for="urun_adi" class="form-label"><h6 style="color: black;">Ürün Adı</h6></label>
                            <input type="text" class="form-control" id="urun_adi" name="urun_adi">
                          </div>
                          <div class="mb-3">
                              <label for="urun_aciklama" class="form-label"><h6 style="color: black;">Ürün Açıklaması</h6></label>
                              <textarea class="form-control" name="urun_aciklama" id="urun_aciklama" style="min-height: 150px;"></textarea>
                          </div>
                          <hr>
                          <hr>
                          <div class="mb-3">
                            <label for="urun_fiyat" class="form-label"><h6 style="color: black;">Ürün Fiyatı</h6></label>
                            <input type="text" class="form-control" id="urun_fiyat" name="urun_fiyat">
                          </div>
                          
                          <div class="mb-3">
                            <label for="kategori_id" class="form-label"><h6 style="color: black;">Ürün Kategorisi</h6></label>
                            <select class="form-control" name="kategori_id" id="kategori_id">
                            <?php
                              foreach($kategoriGetir as $kategori)
                              {
                                ?>
                                <option name="kategori_id" value="<?php echo $kategori->kategori_id?>"><?php echo $kategori->kategori_adi?></option>
                                <?php
                              }
                              ?>          
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="urun_durum" class="form-label"><h6 style="color: black;">Ürün Durumu</h6></label>
                            <select class="form-control" name="urun_durum" id="urun_durum">
                              <option name="urun_durum" value="1">Göster</option>
                              <option name="urun_durum" value="0">Gizle</option>
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

