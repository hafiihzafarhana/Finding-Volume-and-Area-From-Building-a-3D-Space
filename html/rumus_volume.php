<!-- cari file ajax -->
<!-- dist/js/app.js -->

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Kelompok 1 | Rumus Volume</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <!-- <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../dist/css/cssSaya.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <h3 class="mx-5 mt-3">Kelompok 1</h3>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="rumus_volume.php" aria-expanded="false"><i class="mdi mdi-lambda"></i><span
                                    class="hide-menu">Rumus Volume</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="rumus_luas.php" aria-expanded="false"><i class="mdi mdi-lambda"></i><span
                                    class="hide-menu">Rumus Luas</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Rumus Volume</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Rumus Volume</h1> 
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">10 Rumus Volume Bangun Ruang</h4>
                                        <h5 class="card-subtitle">isi Rumus</h5>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Bangun</th>
                                                <th class="border-top-0">Rumus</th>
                                                <th class="border-top-0">Kalkulator</th>
                                                <th class="border-top-0">Hasil</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/1.jpeg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        <p>Balok</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <i>p x l x t</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="panjang_balok" class="form-label">Panjang Balok</label>
                                                    <input type="number" name="panjang_balok" class="form-control" id="panjang_balok">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="lebar_balok" class="form-label">Lebar Balok</label>
                                                    <input type="number" name="lebar_balok" class="form-control" id="lebar_balok">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_balok" class="form-label">Tinggi Balok</label>
                                                    <input type="number" name="tinggi_balok" class="form-control" id="tinggi_balok">
                                                </div>
                                                <button type="button" id="button_vol_balok" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_balok"></p>
                                                </div>
                                                </td>
                                            </tr>
                                            <!-- copy ini -->
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/2.jpeg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Kubus
                                                    </div>
                                                </td>
                                                <td>
                                                    <i>s x s x s</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="sisi_kubus" class="form-label">Sisi Kubus</label>
                                                    <input type="number" name="sisi_kubus" class="form-control" id="sisi_kubus">
                                                </div>
                                                <button type="button" id="button_vol_kubus" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_kubus"></p>
                                                </div>
                                                </td>
                                            </tr>
                                            <!-- sampai ini -->
                                            <tr>
                                                <!-- Nomor -->
                                                <td>3</td>
                                                <!-- Nama -->
                                                <td class="bangun">
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/3.jpg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Limas Segiempat
                                                    </div>
                                                </td>
                                                <!-- Rumus -->
                                                <td>
                                                    <i>la x t / 3</i>
                                                </td>
                                                <!-- form input -->
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <!-- samakan isi label for, name, id -->
                                                    <label for="sisi_luasAlas_limasSegiEmpat" class="form-label">Alas SegiEmpat</label>
                                                    <input type="number" name="sisi_luasAlas_limasSegiEmpat" class="form-control" id="sisi_luasAlas_limasSegiEmpat">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <!-- samakan isi label for, name, id -->
                                                    <label for="tinggi_limasSegiEmpat" class="form-label">Tinggi Limas</label>
                                                    <input type="number" name="tinggi_limasSegiEmpat" class="form-control" id="tinggi_limasSegiEmpat">
                                                </div>
                                                <!-- tombol (ubah id) -->
                                                <button type="button" id="button_vol_limasSegiEmpat" class="btn btn-success">Hitung</button>
                                                </td>
                                                <!-- hasil (for, id, name samakan) -->
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_limasSegiEmpat"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/4.jpg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Prisma Segitiga
                                                    </div>
                                                </td>
                                                <td>
                                                    <i>la x t</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="alas_segitiga" class="form-label">Alas Segitiga</label>
                                                    <input type="number" name="alas_segitiga" class="form-control" id="alas_segitiga">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_segitiga" class="form-label">Tinggi Segitiga</label>
                                                    <input type="number" name="tinggi_segitiga" class="form-control" id="tinggi_segitiga">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_prisma" class="form-label">Tinggi Prisma</label>
                                                    <input type="number" name="tinggi_prisma" class="form-control" id="tinggi_prisma">
                                                </div>
                                                <button type="button" id="button_vol_prismaSegitiga" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_prismaSegitiga"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/5.png" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        <p>
                                                            Limas Segitiga
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <i>(la x t) / 3</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="alas_segitiga_limas" class="form-label">Alas Segitiga</label>
                                                    <input type="number" name="alas_segitiga_limas" class="form-control" id="alas_segitiga_limas">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_segitiga_limas" class="form-label">Tinggi Segitiga</label>
                                                    <input type="number" name="tinggi_segitiga_limas" class="form-control" id="tinggi_segitiga_limas">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <!-- samakan isi label for, name, id -->
                                                    <label for="tinggi_limasSegiTiga" class="form-label">Tinggi Limas</label>
                                                    <input type="number" name="tinggi_limasSegiTiga" class="form-control" id="tinggi_limasSegiTiga">
                                                </div>
                                                <button type="button" id="button_vol_limasSegiTiga" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_limasSegitiga"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/6.png" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Tabung
                                                    </div>
                                                </td>
                                                <td>
                                                    <i> pi x r^2 x t</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="jari_tabung" class="form-label">Jari Tabung</label>
                                                    <input type="number" 
                                                    name="jari_tabung" 
                                                    class="form-control" 
                                                    id="jari_tabung">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_tabung" class="form-label">Tinggi Tabung</label>
                                                    <input type="number" 
                                                    name="tinggi_tabung" 
                                                    class="form-control" 
                                                    id="tinggi_tabung">
                                                </div>
                                                <button type="button" id="button_vol_tabung" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_tabung"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                            <td>7</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/7.jpg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        kerucut
                                                    </div>
                                                </td>
                                                <td>
                                                    <i> 1/3 x pi x r^2 x t</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="jari_kerucut" class="form-label">Jari Kerucut</label>
                                                    <input type="number" 
                                                    name="jari_kerucut" 
                                                    class="form-control" 
                                                    id="jari_kerucut">
                                                </div>
                                                <div class="mb-3 col-md-5">
                                                    <label for="tinggi_kerucut" class="form-label">Tinggi Kerucut</label>
                                                    <input type="number" 
                                                    name="tinggi_kerucut" 
                                                    class="form-control" 
                                                    id="tinggi_kerucut">
                                                </div>
                                                <button type="button" id="button_vol_kerucut" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_kerucut"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                            <td>8</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/8.jpeg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Bola
                                                    </div>
                                                </td>
                                                <td>
                                                    <i> 4/3 x pi x jari^3</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="jari_bola" class="form-label">jari bola</label>
                                                    <input type="number" 
                                                    name="jari_bola" 
                                                    class="form-control" 
                                                    id="jari_bola">
                                                </div>
                                                <button type="button" id="button_vol_bola" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_bola"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                            <td>9</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/9.jpeg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Setengah Bola Pejal
                                                    </div>
                                                </td>
                                                <td>
                                                    <i> 2 / 3 x pi x r^3</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="jari_BolaSetengahPejal" class="form-label">Jari-Jari Setengah Bola Pejal</label>
                                                    <input type="number" name="jari_BolaSetengahPejal" class="form-control" id="jari_BolaSetengahPejal">
                                                </div>
                                                <button type="button" id="button_vol_prismasLima" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_prismaLima"></p>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                            <td>10</td>
                                                <td>
                                                <div class="imgBox">
                                                        <img src="./../assets/images/gambarbangun/10.jpg" alt="">
                                                    </div>
                                                    <div class="textName">
                                                        Seperempat Bola Pejal
                                                    </div>
                                                </td>
                                                <td>
                                                    <i> 1 / 3 x pi x r^3</i>
                                                </td>
                                                <td>
                                                <div class="mb-3 col-md-5">
                                                    <label for="jari_BolaSeperempatPejal" class="form-label">Jari-Jari Seperempat Bola Pejal</label>
                                                    <input type="number" name="jari_BolaSeperempatPejal" class="form-control" id="jari_BolaSeperempatPejal">
                                                </div>
                                                <button type="button" id="button_vol_prismasEnam" class="btn btn-success">Hitung</button>
                                                </td>
                                                <td>
                                                <div class="mb-3">
                                                    <p id="hasil_vol_prismaEnam"></p>
                                                </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                Copyright By <a
                    href="https://www.wrappixel.com">Kelompok 1</a>.
            </footer>

        </div>

    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>

    <!-- AJAX -->
    <script src="./../dist/js/app_volume.js"></script>
</body>

</html>