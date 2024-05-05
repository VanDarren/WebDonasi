    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jl. Raya Merdeka 12, Batam, Kepulauan Riau</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>donasibersama@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href="#"><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="<?=base_url("home/menu")?>" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Donasi<span class="text-white">Bersama</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="menu" class="nav-item nav-link active">Home</a>
                    <a href="#program-donasi" class="nav-item nav-link">Program</a>
                    <a href="print" class="nav-item nav-link">Print</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                        <a href="profile" class="dropdown-item">Detail Profile</a>
                        <a href="history" class="dropdown-item">History</a>
                        <a href="logout" class="dropdown-item">Sign Out</a>
                        </div>
                    </div>
                </div>
                <?php if(session()->get('level')=="admin" ){ 
        ?>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-primary py-2 px-3" href="<?=base_url("home/addprogram")?>">
                        Add Program
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
              
                    </a>
                </div>
                <?php } ?>
                <?php if(session()->get('level')=="donatur" ){ 
        ?>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-primary py-2 px-3" href="<?=base_url("home/donasi")?>">
                        Donasi
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
              
                    </a>
                </div>
                <?php } ?>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=base_url("img/carousel-1.jpg")?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Welcome, <?=session()->get('username')?></h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Let's Change The World With Humanity</p> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=base_url("img/carousel-2.jpg")?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With Our Helping Hand</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Everyone Deserves The Opportunity To Live</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <?php
$host = "localhost"; 
$username = "root";
$password = ""; 
$database = "aplikasidonasi"; 

$koneksi = mysqli_connect($host, $username, $password, $database);

if (isset($koneksi)) {
    $query = "SELECT DISTINCT user.id_user, user.username, user.email, user.foto, donasi.pesan, donasi.jumlah_donasi, program.nama_program 
    FROM donasi INNER JOIN user ON donasi.id_user=user.id_user INNER JOIN program ON donasi.id_program=program.id_program  ORDER BY donasi.tanggal DESC LIMIT 3";
    
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo '<div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donatur</div>
                        <h1 class="display-6 mb-5">Donatur Terbaru</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">';
            while ($darren = mysqli_fetch_assoc($result)) {
                echo '<div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-1 mx-auto mb-6" src="' . base_url("img/" . $darren['foto']) . '" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                        <h2 class="mb-1">' . $darren['username'] . '</h2>
                            <p style="font-size: 22px;">' . ' baru saja berdonasi sebanyak Rp. ' . $darren['jumlah_donasi'] . '</p>
                            <p style="font-size: 18px;">'  . $darren['nama_program'] . '</p>
                              <span class="fst-italic" style="font-size: 20px;">' .'Pesan : ' .  $darren['pesan'] . '</span>
     
                        </div>
                    </div>';
            }
            echo '</div>
                </div>
            </div>';
        } else {
            echo "Tidak ada data pengguna yang melakukan donasi.";
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Koneksi belum terbentuk.";
}
mysqli_close($koneksi);
?>


<!-- Causes Start -->
    <section id="program-donasi"> 
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Rekomendasi Program</div>
                                            <br>
                <a class="btn btn-outline-primary py-2 px-3" href="listprogram ">
                        Lihat Program Lainnya
                        
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                        </a>  
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            </div>
                            <h5 class="mb-3">Bantu Korban Bencana Alam</h5>
                            <p>Bantu korban dampak bencana alam mendapat pakaian dan tempat tinggal</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?=base_url("img/program1.jpg")?>" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                              
                            </div>
                            <h5 class="mb-3">Bantu Anak-Anak Di Palestina</h5>
                            <p>Bantu anak-anak di Palestina hidup lebih layak</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?=base_url("img/program2.jpg")?>" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                               
                            </div>
                            <h5 class="mb-3">Sedekah Makanan Kepada Pemulung</h5>
                            <p>Memberi makan pemulung yang kelaparan di jalanan</p>
                           
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?=base_url("img/program3.jpg")?>" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </section>
    <!-- Causes End -->
