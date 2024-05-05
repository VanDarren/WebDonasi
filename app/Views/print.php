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
            <h1 class="display-4 text-white animated slideInDown mb-4">Print</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Print</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Print PDF Form</h5>
        <form class="row g-3" action="<?=base_url('home/printpdf')?>" method="post" target="blank">
            <div class="col-md-4">
                <label for="tanggal1" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="tanggal1" name="tanggal1" required>
            </div>
            <div class="col-md-4">
                <label for="tanggal2" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tanggal2" name="tanggal2" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Print PDF</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Print Excel Form</h5>
        <form class="row g-3" action="<?=base_url("home/printexcel")?>" method="post">
            <div class="col-md-4">
                <label for="tanggal3" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="nama" name="tanggal1" required>
            </div>
            <div class="col-md-4">
                <label for="tanggal4" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="umur" name="tanggal2" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Print Excel</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Print Windows</h5>
        <form class="row g-3" action="<?=base_url("home/printwindows")?>" method="post">
            <div class="col-md-4">
                <label for="tanggal3" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="nama" name="tanggal1" required>
            </div>
            <div class="col-md-4">
                <label for="tanggal4" class="form-label">Tanggal Akhir</label>
                <input type="date" class="form-control" id="umur" name="tanggal2" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Print Windows</button>
            </div>
        </form>
    </div>
</div>

         

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->