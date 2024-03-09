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
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                        <a href="profile" class="dropdown-item">Detail Profile</a>
                        <a href="history" class="dropdown-item">History</a>
                            <a href="logout" class="dropdown-item">Sign Out</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Add Program</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
  
  <!-- Contact Start -->
  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Add Program</div>
                    <h1 class="display-6 mb-">Tambah Program Donasi</h1>
                    <p class="mb-4"> Setiap program yang ditambahkan akan membawa harapan baru dan memberikan bantuan kepada mereka yang membutuhkan.</p>
                    <form action="<?=base_url("home/addprogram1")?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="mulai" placeholder="Tanggal Mulai" name="mulai" value="<?php echo date('Y-m-d'); ?>" readonly>
                                    <label for="mulai">Tanggal Mulai</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="selesai" placeholder="Tanggal Selesai" name="selesai">
                                    <label for="selesai">Tanggal Selesai</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Program" name="nama">
                                    <label for="nama">Nama Program</label>
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                <input type="number" class="form-control" id="target" placeholder="Target Donasi" name="target">
                                    <label for="target">Target</label>
                                </div>
                            </div>
                            <div class="col-12">            
                                <div class="form-floating">
                                <input type="file" class="form-control" id="foto" placeholder="Gambar" name="foto">
                                    <label for="foto">Masukkan Gambar</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary py-2 px-3 me-3">
                                    Save
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                            
                        </div>
                       
                    </form>
                   
   
                </div>
                <a class="btn btn-outline-primary py-2 px-3" href="<?=base_url("home/Menu")?>">
                        Kembali
                    </a>
            </div>
            
        </div>
        
    </div>
    <!-- Contact End -->