<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
?>
<?php
$tablo_adi = "blog";
$sorgu = "";
$veri = new Veri();
$veriGetir = $veri->veriGetir($tablo_adi,$sorgu);
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
                                <h4 style="margin-bottom: 32px;">Blog</h4>
                                <a href="./blog-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>

                                <div class="table-responsive">
                                    <?php
                                    if($veriGetir)
                                    {
                                        ?>
                                        <table class="table text-center" style="margin-top: 20px;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:50px;">#</th>
                                                    <th scope="col" style="width:150px;">Resim</th>
                                                    <th scope="col">Başlık</th>
                                                    <th scope="col">İçerik</th>
                                                    <th scope="col">Durum</th>
                                                    <th scope="col">Düzenle</th>
                                                    <th scope="col">Sil</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach($veriGetir as $blog)
                                                {
                                                    ?>
                                                        <tr class="text-center">
                                                            <th scope="row"><?php echo $blog->blog_id?></th>
                                                            <td><img class="img-fluid" src="../../images/blog/<?php echo $blog->blog_resim?>" alt=""></td>
                                                            <td><?php echo $blog->blog_baslik?></td>
                                                            <td><?php echo substr($blog->blog_icerik, 0, 50)?></td>
                                                            <td>
                                                            <?php 
                                                                $durum = ($blog->blog_durum == 1) ?  '<p style = "color:green;">Onaylı</p>' : '<p style = "color:red;">Gizli</p>';
                                                                echo $durum;
                                                             ?>
                                                            </td>
                                                            <td><a href="blog-duzenle.php?blog_id=<?php echo $blog->blog_id?>" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>      
                                                            <td><a href="blog.php?blog_id=<?php echo $blog->blog_id?>&islem=blogsil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>      
                                                        
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
