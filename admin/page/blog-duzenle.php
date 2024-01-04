<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>

<?php
$tablo_adi = "blog";
$tablo_id_alan = "blog_id";
$sorgu = "";
$veri = new Veri();
$tablo_id = $_GET["blog_id"];
$veriGetir = $veri->veriIdGetir($tablo_adi, $tablo_id_alan, $tablo_id, $sorgu);
?>
<?php
if(isset($_POST["submit"]))
{
  $veri = new Veri();

  $tablo_adi = "blog"; // İşlem yapılacak tablo adı
  $sutunlar = ["blog_baslik", "blog_icerik", "blog_keywords", "blog_description", "blog_durum"]; // İşlenecek sütunlar
  $kosul = 'blog_id='.$_GET["blog_id"]; // İşlem yapılacak verilerin koşulu
  $resim_sutun_adi = "blog_resim";

  $dest_path = "../../images/blog/";
  $resim_name = $_FILES["blog_resim"]["name"];
  $fileSourcePath = $_FILES["blog_resim"]["tmp_name"];
  $fileDestPath = $dest_path . $resim_name;
  move_uploaded_file($fileSourcePath, $fileDestPath);



  // Veriyi güncellemek için fonksiyon çağrısı
  $veri->veriDuzenle($tablo_adi, $sutunlar, $kosul, $resim_sutun_adi);

  $veriGetir = $veri->veriIdGetir($tablo_adi, $tablo_id_alan, $tablo_id, $sorgu);
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
                      <h6 class="mb-4">Blog Düzenle</h6>
                      <form method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="blog_resim" class="form-label"> <h6 style="color: black;">Resim</h6></label>
                            <img style="width:150px;" class="img-fluid mb-4" src="../../images/blog/<?php echo $veriGetir->blog_resim?>" alt="">
                            <input class="form-control bg-dark" type="file" id="blog_resim" name="blog_resim" value = "<?php echo $veriGetir->blog_resim?>">
                          </div>
                          <div class="mb-3">
                            <label for="blog_baslik" class="form-label"><h6 style="color: black;">Başlık</h6></label>
                            <input type="text" class="form-control" id="blog_baslik" name="blog_baslik" value = "<?php echo $veriGetir->blog_baslik?>">
                          </div>
                          <div class="mb-3">
                              <label for="blog_icerik" class="form-label"><h6 style="color: black;">İçerik</h6></label>
                              <textarea class="form-control" name="blog_icerik" id="blog_icerik" style="min-height: 350px;"><?php echo $veriGetir->blog_icerik?></textarea>
                          </div>
                          <hr>
                          <hr>
                          <div class="mb-3">
                            <label for="blog_keywords" class="form-label"><h6 style="color: black;">Keywords</h6></label>
                            <input type="text" class="form-control" id="blog_keywords" name="blog_keywords" value = "<?php echo $veriGetir->blog_keywords?>">
                          </div>
                          <div class="mb-3">
                            <label for="blog_description" class="form-label"><h6 style="color: black;">Description</h6></label>
                            <input type="text" class="form-control" id="blog_description" name="blog_description" value = "<?php echo $veriGetir->blog_description?>">
                          </div>
                          
                          <div class="mb-3">
                            <label for="blog_durum" class="form-label"><h6 style="color: black;">Blog Durumu</h6></label>
                            <select class="form-control" name="blog_durum" id="blog_durum">
                              <option name="blog_durum" value="1">Göster</option>
                              <option name="blog_durum" value="0">Gizle</option>
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

