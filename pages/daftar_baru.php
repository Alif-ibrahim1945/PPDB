<?php
session_start();

include "../koneksi.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar baru</title>
    
    
    
    <link rel="shortcut icon" href="../assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <link rel="stylesheet" href="../assets/compiled/css/app.css">
  <link rel="stylesheet" href="../assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="../assets/compiled/css/iconly.css">
</head>

<body>
    <script src="../assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="../assets/compiled/svg/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="../admin.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Data master</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li class="submenu-item active  ">
                        <a href="registrasi.php" class="submenu-link">Registrasi</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="input_gelombang.php" class="submenu-link">input gelombang</a>
                        
                    </li>
                    
                    
                </ul>
                

            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Pendaftaran</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li class="submenu-item  ">
                        <a href="#" class="submenu-link">daftar baru</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="data_siswa.php" class="submenu-link">data siswa</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="data_kaos.php" class="submenu-link">Data kaos</a>
                        
                    </li>
                
                    
                </ul>
                

            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Pembayaran</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li class="submenu-item  ">
                        <a href="transaksi.php" class="submenu-link">Transaksi</a>
                        
                    </li>
                    
                    <li class="submenu-item  ">
                        <a href="data_pembayaran.php" class="submenu-link">data pembayaran</a>
                        
                    </li>
                    
                </ul>
                

            </li>
            
            
            <li
                class="sidebar-item  has-sub">
                <a href="../index.php" class=>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
<h3 class="page-title"> DAFTAR BARU </h3>
</div> 
<div class="page-content"> 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Material design icons </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Icons</a></li>
                <li class="breadcrumb-item active" aria-current="page">Material design icons</li>
              </ol>
            </nav>
          </div>

          <?php

          // Ambil nomor pendaftaran tertinggi dari tabel data_siswa
          $sql = "SELECT MAX(no_pendaftaran) AS max_registration_number FROM data_siswa";
          $result = $koneksi->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $last_registration_number = $row["max_registration_number"];

            // Jika tidak ada nomor pendaftaran sebelumnya, mulai dari BYR001
            if ($last_registration_number === null) {
              $new_registration_number = "BYR001";
            } else {
              // Ubah nomor pendaftaran terakhir ke nomor pendaftaran baru
              $last_number = intval(substr($last_registration_number, 3));
              $next_number = $last_number + 1;
              $new_registration_number = "BYR" . sprintf("%03d", $next_number);
            }
          } else {
            // Penanganan kesalahan jika query tidak berhasil
            echo "Error: " . $koneksi->error;
          }

          // Gunakan $new_registration_number sesuai kebutuhan di sini



          ?>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Biodata Siswa</h4>


                    <form class="needs-validation" action="proses/pros_tambah_baru.php" method="post">
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="firstName">No Pendaftaran</label>
                          <input type="text" class="form-control " name="no_pendaftar" id="no_pen" placeholder="" value="<?php echo $new_registration_number; ?>" required="" readonly style="color: white;">

                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>

                        </div>

                        <div class="col-md-5 mb-3">
                          <label for="lastName">Nama Lengkap</label>
                          <input type="text" class="form-control text-white " name="nama_siswa" id="lastName" placeholder="" value="" required="">
                          <input type="hidden" name="tanggal" placeholder="" value="<?php echo date('d-m-Y'); ?>" required="">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                        <div class="col-md-5 mb-3">
                          <label for="firstName">Tempat,Tanggal Lahir</label>
                          <input type="text" class="form-control text-white" name="ttl" id="firstName" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
                      </div>
           <?php 
            $query= "SELECT * FROM tbl_gel ORDER BY id ASC";
            $result = mysqli_query($koneksi,$query);

            if(!$result){
              die("query error:" . mysqli_error($koneksi));
            }
            ?>
             <div class="row">

      <div class="col-md-6 mb-3">
      <label class="" for="">Gelombang</label>
      <select class="custom-select d-block w-100" name="gelombang" id="gelombang" required="">
        <option value="">pilih..</option>
        <?php
        while($row = mysqli_fetch_assoc($result)){
          echo '<option value= "' . $row ['gelombang'] . '">' . $row ['gelombang'] .'</option>';
        }
        ?>
        </select>
        <div class="invalid-feedback">
          silakan pilih gelombang.
      </div>
      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="" for="">Jenis Kelamin</label>
                          <div class="form-inline">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Laki-Laki">
                              <label class="custom-label text-white" for="inlineRadio1">Laki-Laki</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Perempuan">
                              <label class="custom-label text-white" for="inlineRadio2">Perempuan</label>
                            </div>
                          </div>
                        </div>

                      </div>

                  </div>
                  <h4 class="col-md-6 mb-3">Agama</h4>

                  <div class="d-block col-md-6 mb-3">
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="credit" name="agama" type="radio" class="cuform-control text-black-input" checked="" required="" value="Islam">
                          <label class="cuform-control text-black-label" for="credit">Islam</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="debit" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Kristen">
                          <label class="cuform-control text-black-label" for="debit">Kristen</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Katolik">
                          <label class="cuform-control text-black-label" for="paypal">Katolik</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Hindu">
                          <label class="cuform-control text-black-label" for="paypal">Hindu</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Buddha">
                          <label class="cuform-control text-black-label" for="paypal">Buddha</label>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="cuform-control text-white custom-radio">
                          <input id="paypal" name="agama" type="radio" class="cuform-control text-black-input" required="" value="Konghuchu">
                          <label class="cuform-control text-black-label" for="paypal">Konghuchu</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">No Telepon Siswa</label>
                      <input type="text" class="form-control text-white" name="no_telpSiswa" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Asal Sekolah </label>
                      <input type="text" class="form-control text-white" name="asal" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>

                  </div>


                  <div class="mb-3 col-md-14">
                    <label for="address">Alamat Sekolah</label>
                    <textarea class="form-control text-white" id="address" name="alamat_sekolah" placeholder="1234 Main St" required="" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>

                  <div class="col-md-14 mb-3">
                    <label for="country">Pilih Jurusan</label>
                    <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                      <option value="">Pilih...</option>
                      <option>REKAYASA PERANGKAT LUNAK</option>
                      <option>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                      <option>MANANJEMEN PERKANTORAN</option>
                      <option>DESAIN KOMUNIKASI VISUAL</option>
                      <option>PEMASARAN</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>

                  <h4 class="mb-3">Biodata Orang Tua</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Orang Tua</label>
                      <input type="text" class="form-control text-white" id="cc-name" name="nama_ortu" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Orang Tua</label>
                      <textarea class="form-control text-white" id="address" name="alamat_ortu" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-white" name="no_telpOrtu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-white" name="pekerjaan_ortu" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="mb-3">Biodata Wali</h4>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Nama Wali</label>
                      <input type="text" class="form-control text-white" id="cc-name" name="nama_wali" placeholder="">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>


                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="address">Alamat Wali</label>
                      <textarea class="form-control text-white" id="address" name="alamat_wali" placeholder="1234 Main St" cols="50" rows="7"></textarea>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">No Telepon</label>
                          <input type="text" class="form-control text-white" name="no_telpWali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="cc-name">Pekerjaan</label>
                          <input type="text" class="form-control text-white" name="pekerjaan_wali" id="cc-name" placeholder="">
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->


          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>

           </div>   
           <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="needs-validation" action="proses/proses_tambah.php" method="post">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="firstName">Nama</label>
                  <input type="text" class="form-control" name="nama" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Username</label>
                  <input type="text" class="form-control" name="username" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Password</label>
                  <input type="text" class="form-control" name="password" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="" for="">Sebagai</label>
                  <div class="form-inline">
                    <div class="form-check form-check-inline">
                        <span class="custom-label text-black"></span>
                      <input class="form-check-input" type="radio" name="sebagai" id="inlineRadio1" value="Admin">
                      <label class="custom-label text-black" for="inlineRadio1">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <span class="custom-label text-black"></span>
                      <input class="form-check-input" type="radio" name="sebagai" id="inlineRadio2" value="Petugas">
                      <label class="custom-label text-black" for="inlineRadio2">Petugas</label>
                    </div>
                  </div>
                </div>

              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
                      
            <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2024 &copy; Alip</p>
        </div>
    </div>
</footer>
        </div>
    </div>
    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    
    <script src="../assets/compiled/js/app.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
<!-- Need: Apexcharts -->
<script src="../assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="../assets/static/js/pages/dashboard.js"></script>

</body>

</html>