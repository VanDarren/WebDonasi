<main id="main" class="main">
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
                <?php if(session()->get('level')=="admin" ){ ?>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-primary py-2 px-3" href="<?=base_url("home/addprogram")?>">
                        Add Program
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


    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">List Program</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">List</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" id="search-input">
        <span class="input-group-text" id="basic-addon2">Search</span>
    </div>

    <div class="table-responsive" style="overflow-x: auto;">
        <table class="table table-bordered" id="program-table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Program</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($darren as $key) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key->nama_program ?></td>
                        <td><?= $key->tanggal_mulai ?></td>
                        <td><?= $key->tanggal_selesai ?></td>
                        <td>
                            <a href="<?= base_url('home/detailprogram/'.$key->id_program)?>">
                                <button class="btn btn-primary px-3">Detail</button>
                            </a>
                            <a href="<?= base_url('home/history2/'.$key->id_program)?>">
                                <button class="btn btn-primary px-3">History</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
               
<script>

    function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search-input");
        filter = input.value.toUpperCase();
        table = document.getElementById("program-table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    document.getElementById("search-input").addEventListener("keyup", filterTable);
</script>
