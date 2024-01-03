<?php
include "../inc/_header.php";
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
                      <h6 class="mb-4">Blog Ekle</h6>
                      <form method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="blog_resim" class="form-label"> <h6 style="color: black;">Resim</h6></label>
                            <input class="form-control bg-dark" type="file" id="blog_resim" name="blog_resim">
                          </div>
                          <div class="mb-3">
                            <label for="blog_baslik" class="form-label"><h6 style="color: black;">Başlık</h6></label>
                            <input type="text" class="form-control" id="blog_baslik" name="blog_baslik">
                          </div>
                          <div class="mb-3">
                              <label for="blog_icerik" class="form-label"><h6 style="color: black;">İçerik</h6></label>
                              <textarea class="form-control" name="blog_icerik" id="blog_icerik" style="min-height: 150px;"></textarea>
                          </div>
                          <hr>
                          <hr>
                          <div class="mb-3">
                            <label for="blog_keywords" class="form-label"><h6 style="color: black;">Keywords</h6></label>
                            <input type="text" class="form-control" id="blog_keywords" name="blog_keywords">
                          </div>
                          <div class="mb-3">
                            <label for="blog_description" class="form-label"><h6 style="color: black;">Description</h6></label>
                            <input type="text" class="form-control" id="blog_description" name="blog_description">
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

