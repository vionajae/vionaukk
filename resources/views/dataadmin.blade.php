<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
  
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
              </svg>
              <span class="app-brand-text demo menu-text fw-bold ms-2">app kasir</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item ">
              <a href="{{url('dashboard')}}" class="menu-link" 
              role="button">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
              </a>
            </li>
            <!-- Apps -->
            <li class="menu-item active open">
              <a
                href="{{url('dataadmin')}}"
                class="menu-link"
                role="button">
                <i class="menu-icon tf-icons bx bx-id-card "></i>
                <div data-i18n="Chat">Data Admin</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="{{url('produk')}}"
                class="menu-link"
                role="button">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Chat">Data Produk</div>
              </a>
            </li>
            <li class="menu-item">
            <a
                href="{{url('pelanggan')}}"
                class="menu-link"
                role="button">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div data-i18n="Chat">Data Pelanggan </div>
              </a>
            </li>
            <li class="menu-item">
              <a
                  href="{{url('transaksi')}}"
                  class="menu-link"
                  role="button">
                  <i class="menu-icon tf-icons bx bx-crown"></i>
                  <div data-i18n="Chat">Transaksi</div>
                </a>
              </li>
        </aside>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/org.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    
                    <li>
                      <a class="dropdown-item" href="{{url('logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tabel / </span> Data Admin </h4>
              
              <hr class="my-5" />
              
              <form action="{{url('dataadmin')}}" method="post">
              <!-- Bordered Table -->
              <div class="card">
                <div class="demo-inline-spacing d-flex justify-content-end mx-2">
                  <a class="btn btn-primary" href="{{url('tambahadmin')}}"  role="button">Tambah</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Admin ID</th>
                          <th>Nama Lengkap</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Akses</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $inem)
                          <tr>
                            <td>{{$inem->AdminID}}</td>
                            <td>{{$inem->NamaLengkap}}</td>
                            <td>{{$inem->Alamat}}</td>
                            <td>{{$inem->Telepon}}</td>
                            <td>{{$inem->Username}}</td>
                            <td>{{$inem->Password}}</td>
                            <td>{{$inem->Akses}}</td>
                            <td>
                                <div class="dropdown">
                                  <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a href="{{url('editadmin/'.$inem->AdminID)}}" class="dropdown-item"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a href="{{url('hapusadmin/'.$inem->AdminID)}}" class="dropdown-item"
                                      ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                  </div>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->
              </form>
              

              

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>