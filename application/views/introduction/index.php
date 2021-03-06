  <!-- Navbar -->
  <nav class="autohide navbar navbar-expand-lg navbar-dark fixed-top shadow-sm rounded-bottom" style="transition: top 0.3s; background-color: #13131a">
    <div class="container-xl container-fluid">
      <!-- Navbar Brand -->
      <a class="navbar-brand fw-bold text-primary" href="<?= base_url(); ?>">Jobtastic</a>

      <!-- Navbar Responsive Button -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Navbar Responsive Icon -->
        <i class="bx bx-menu"></i>
      </button>

      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar Links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5 d-flex gap-2">
          <li class="nav-item">
            <a class="nav-link fs-sm d-flex gap-1 align-items-center py-md-3 justify-content-center" aria-current="page" href="#!"><i class="bx bx-home-alt"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-sm d-flex gap-1 align-items-center py-md-3 justify-content-center" href="#!"><i class="bx bx-briefcase"></i> Cari Pekerjaan</a>
          </li>
        </ul>

        <!-- Horizontal Line -->
        <hr class="dropdown-divider d-lg-none d-xl-block bg-secondary" />

        <!-- Navbar Account -->
        <ul class="navbar-nav d-flex gap-3">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-1 justify-content-center fs-sm" href="#!"><i class="bx bx-log-in"></i> Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary text-white d-flex align-items-center gap-1 justify-content-center fs-sm" href="#!"><i class="bx bx-user-circle"></i> Daftar Sekarang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center gap-1 justify-content-center fs-sm p-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= base_url('assets/img/person/person-special.jpg'); ?>" alt="" class="img-thumbnail rounded p-0 bg-dark border-dark" width="30" style="height: 30px" />
              Fachry Dwi Afriza
            </a>
            <ul class="dropdown-menu border-dark" aria-labelledby="navbarDropdown" style="background-color: #13131a">
              <li>
                <a class="dropdown-item d-flex align-items-center gap-1 text-secondary fs-sm py-2" href="#!"><i class="bx bx-user-circle"></i> My Profile</a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-1 text-secondary fs-sm py-2" href="#!"><i class="bx bx-bell"></i> Activity</a>
              </li>
              <li>
                <hr class="dropdown-divider bg-secondary" />
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-1 text-danger fs-sm py-2" href="#!"><i class="bx bx-log-out bx-rotate-180"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- ----------------------------- -->

  <!-- Display -->
  <div class="container-xl container-fluid d-flex align-items-center flex-column gap-md-5 gap-4 py-5" id="display" style="margin-top: 65px">
    <!-- Job Registered -->
    <p class="fs-xs p-2 rounded border border-secondary border-1 text-secondary" style="width: min-content; white-space: nowrap" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
      <?= number_format(rand(1000000, 99999999), 0, ',', '.') ?> pekerjaan terdaftar
    </p>

    <!-- Headline -->
    <p class="display-4 text-center" style="max-width: 900px; min-width: 310px" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
      Dapatkan
      <span class="fw-bold text-primary">Pekerjaan Impian</span> Segera
      Disekitar Kamu
    </p>

    <!-- Small Headline -->
    <p class="fs-sm text-center text-secondary" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
      Segera cari pekerjaan impianmu bersama Jobtastic!
    </p>

    <!-- Job Search -->
    <div class="job-search border border-secondary rounded-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
      <div class="d-flex align-items-center gap-2">
        <i class="bx bx-briefcase text-secondary"></i>
        <input type="text" name="findJob" id="findJob" placeholder="Cari pekerjaan favorit kamu ..." class="fs-xs border-secondary" />
      </div>
      <div class="d-flex align-items-center gap-2">
        <i class="bx bx-map text-secondary"></i>
        <input type="text" name="findJobLoc" id="findJobLoc" placeholder="Temukan pekerjaan disekitar ..." class="fs-xs" />
      </div>
      <hr class="dropdown-divider d-lg-none d-xl-block" style="border-top: unset" />
      <button class="btn btn-primary text-white d-flex align-items-center justify-content-center gap-1">
        <i class="bx bx-search"></i> Cari
      </button>
    </div>

    <!-- Learn More Button -->
    <a href="#category" class="btn btn-primary fs-sm px-2 py-3 text-white d-flex align-items-center gap-1" style="cursor: pointer" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true" role="button"><i class="bx bx-mouse"></i> Kenalan dengan Kami</a>
  </div>
  <!-- Display End -->

  <!-- ----------------------------- -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#212529" fill-opacity="1" d="M0,224L48,234.7C96,245,192,267,288,272C384,277,480,267,576,224C672,181,768,107,864,106.7C960,107,1056,181,1152,181.3C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  <!-- ----------------------------- -->

  <!-- Categories -->
  <div class="container-fluid bg-dark px-0" id="category">
    <div class="container-xl d-flex align-items-center flex-column gap-md-5 gap-4 py-4 px-0" id="categories">
      <!-- Heading -->
      <p class="h4 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
        <span class="fw-bold text-primary">Banyak Pilihan</span><br />
        Kategori Pekerjaan
      </p>

      <!-- Categories Grid -->
      <div class="grid-custom container-fluid">
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="color-fill-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              UI Desainer & <br />
              Developer
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="megaphone-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Pemasaran & <br />
              Komunikasi
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="car-sport-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Transportasi / <br />
              Driver Online
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="cash-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Keuangan & <br />
              Analisa
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="cart-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Pengantar Barang / <br />
              Kurir Barang
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="business-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Bisnis & <br />
              Konsultan
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="headset-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Customer <br />
              Support Care
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
        <a href="#!" class="nav-link text-light kategori p-3 rounded-3 g-col-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <ion-icon name="folder-open-outline"></ion-icon>
          <div class="d-flex justify-content-between flex-column gap-3">
            <p class="mb-0" style="font-weight: 500">
              Proyek <br />
              Manajemen
            </p>
            <p class="fs-xs mb-0 text-secondary"><?= rand(100, 999) ?> Pekerjaan Tersedia</p>
          </div>
        </a>
      </div>

      <!-- Explore Button -->
      <a href="#popularJobs" class="btn fs-sm px-2 py-3 text-white d-flex align-items-center gap-1 btn-dark" style="background-color: #13131a; cursor: pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button"><i class="bx bx-mouse"></i> Lihat Pekerjaan Popular</a>
    </div>
  </div>
  <!-- Categories End -->

  <!-- ----------------------------- -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#212529" fill-opacity="1" d="M0,224L48,234.7C96,245,192,267,288,272C384,277,480,267,576,224C672,181,768,107,864,106.7C960,107,1056,181,1152,181.3C1248,181,1344,107,1392,69.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>
  <!-- ----------------------------- -->

  <!-- Popular Jobs -->
  <div class="container-xl container-fluid d-flex align-items-center flex-column gap-md-5 gap-4 py-4 px-0" id="popularJobs">
    <!-- Heading -->
    <p class="h4 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
      Pekerjaan yang diminati <br />
      <span class="fw-bold text-primary"> Banyak Orang</span>
    </p>

    <!-- Jobs Grid -->
    <div class="job-grid py-2 px-3">
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://1000logos.net/wp-content/uploads/2021/10/logo-Meta.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Meta</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">UI Designer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div max-line-1 class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://seeklogo.com/images/D/discord-color-logo-E5E6DFEF80-seeklogo.com.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Discord</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">FrontEnd Developer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Facebook</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">BackEnd Developer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://seeklogo.com/images/S/steam-logo-73274B19E3-seeklogo.com.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Steam</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">Server Engineer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Rockstar_Games_Logo.svg/1200px-Rockstar_Games_Logo.svg.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Rockstar Games</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">Game Developer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Google</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">Software Engineer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-512.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Instagram</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">UX Designer</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
      <div class="job border border-dark rounded-3 p-3 d-flex flex-column gap-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" role="button">
        <div class="d-flex gap-2 align-items-center">
          <div style="max-height: 30px; max-width: 30px">
            <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/image-gallery-spotify-logo-21.png" alt="Company" style="width: 100%" />
          </div>
          <div class="me-auto">
            <p class="m-0 fw-bold max-line-1">Spotify</p>
            <p class="m-0 fs-xs text-secondary max-line-1">
              Jakarta, Indonesia
            </p>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
          <p class="h6 my-0 max-line-1">Data Analyst</p>
          <p class="fs-xs text-primary my-0 mb-2">full-time</p>
          <p class="fs-xs text-white my-0 max-line-1">
            <?= "Rp. " . number_format(round(rand(1000000, 6000000), -5), 0, ',', '.') . " - " . number_format(round(rand(7000000, 20000000), -5), 0, ',', '.') ?>
          </p>
          <p class="fs-xs job-desc text-secondary my-0 text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
            voluptatem aliquid nisi necessitatibus itaque vero dignissimos
            quod molestiae pariatur doloremque!
          </p>
        </div>
        <div class="d-flex gap-2 align-items-end">
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs">
            <ion-icon name="people" style="font-size: 1rem"></ion-icon> <?= rand(50, 500) ?>
          </div>
          <div class="d-flex gap-2 align-items-center py-1 px-2 rounded-3 bg-dark fs-xs me-4" style="white-space: nowrap">
            <ion-icon name="eye" style="font-size: 1rem"></ion-icon> <?= rand(100, 900) . " rb" ?>
          </div>
          <p class="my-0 fs-xs text-secondary ms-auto" style="white-space: nowrap">
            10 hari lalu
          </p>
        </div>
      </div>
    </div>

    <!-- Explore Button -->
    <a href="#feedback" class="btn fs-sm px-2 py-3 text-white d-flex align-items-center gap-1 btn-dark bg-dark" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" style="cursor: pointer"><i class="bx bxs-hand-up"></i> Pendapat Tentang Kami</a>
  </div>
  <!-- Popular Jobs End -->

  <!-- ----------------------------- -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#212529" fill-opacity="1" d="M0,192L20,170.7C40,149,80,107,120,74.7C160,43,200,21,240,48C280,75,320,149,360,170.7C400,192,440,160,480,170.7C520,181,560,235,600,256C640,277,680,267,720,250.7C760,235,800,213,840,218.7C880,224,920,256,960,250.7C1000,245,1040,203,1080,176C1120,149,1160,139,1200,154.7C1240,171,1280,213,1320,240C1360,267,1400,277,1420,282.7L1440,288L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
  </svg>
  <!-- ----------------------------- -->

  <!-- Feedback -->
  <div class="container-fluid bg-dark d-flex align-items-center flex-column gap-md-5 gap-4 py-4 px-0" id="feedback">
    <!-- Heading -->
    <p class="h4 text-center" style="max-width: 30ch" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
      Ulasan Teman-Teman yang Berhasil Dapat
      <span class="fw-bold text-primary"> Pekerjaan Dengan Jobtastic.</span>
    </p>

    <!-- Feedback Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide mx-3" data-bs-ride="carousel" data-bs-interval="10000">
      <div class="carousel-indicators top-0 align-items-center gap-3" style="bottom: unset">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="carouselButton" aria-current="true" aria-label="Slide 1" style="background-color: unset" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
          <img src="https://randomuser.me/api/portraits/men/9.jpg" class="d-block w-100 rounded-circle" alt="User" />
        </button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="carouselButton" aria-current="true" aria-label="Slide 2" style="background-color: unset" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
          <img src="https://randomuser.me/api/portraits/women/64.jpg" class="d-block w-100 rounded-circle" alt="User" />
        </button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="carouselButton active" aria-current="true" aria-label="Slide 3" style="background-color: unset" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <img src="<?= base_url('assets/img/person/person-special.jpg'); ?>" class="d-block w-100 rounded-circle" alt="User" />
        </button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="carouselButton" aria-current="true" aria-label="Slide 4" style="background-color: unset" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
          <img src="https://randomuser.me/api/portraits/men/78.jpg" class="d-block w-100 rounded-circle" alt="User" />
        </button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class="carouselButton" aria-current="true" aria-label="Slide 5" style="background-color: unset" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
          <img src="https://randomuser.me/api/portraits/women/82.jpg" class="d-block w-100 rounded-circle" alt="User" />
        </button>
      </div>
      <div class="carousel-inner" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">
        <div class="carousel-item">
          <div class=" container bg-dark" style="
                margin-top: 7rem;
                padding: 2rem;
                border-radius: 1rem;
                border: 1px solid whitesmoke;
                max-width: 75ch;
              ">
            <figure>
              <blockquote class="blockquote">
                <p style="font-size: 1rem">
                  Bagi saya
                  <span class="fw-bold text-primary">Jobtastic</span> adalah
                  pencari pekerjaan terbaik yang pernah ada. Saya telah
                  mencoba begitu banyak pencari kerja lain dan sangat tidak
                  <i>user friendly</i>. Tetapi
                  <span class="fw-bold text-primary">Jobtastic</span> sangat
                  mudah digunakan dan memiliki <i>interface</i> hebat yang
                  memudahkan untuk melihat jenis pekerjaan yang saya inginkan.
                  ???
                </p>
              </blockquote>
              <figcaption class="blockquote-footer text-primary mt-4">
                Marcus Spencer
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="carousel-item">
          <div class=" container bg-dark" style="
                margin-top: 7rem;
                padding: 2rem;
                border-radius: 1rem;
                border: 1px solid whitesmoke;
                max-width: 75ch;
              ">
            <figure>
              <blockquote class="blockquote">
                <p style="font-size: 1rem">
                  "Saya yakin Anda sedang mencari pekerjaan bergaji tinggi,
                  tapi saya yakin Anda sedang mencari sesuatu yang sesuai
                  dengan keahlian dan minat Anda.
                  <span class="fw-bold text-primary">Jobtastic</span> adalah
                  tempat untuk memulai. Saya tidak pernah kecewa dengan hasil
                  pencarian mereka dan mereka selalu tepat mencarikan
                  pekerjaan yang cocok untuk saya."
                </p>
              </blockquote>
              <figcaption class="blockquote-footer text-primary mt-4">
                Aubree Parker
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="carousel-item active">
          <div class=" container bg-dark" style="
                margin-top: 7rem;
                padding: 2rem;
                border-radius: 1rem;
                border: 1px solid whitesmoke;
                max-width: 75ch;
              ">
            <figure>
              <blockquote class="blockquote">
                <p style="font-size: 1rem">
                  ???Sangat mudah untuk mencari pekerjaan dengan
                  <span class="fw-bold text-primary">Jobtastic</span>, karena
                  tidak hanya terdapat banyak lowongan yang tersedia, tetapi
                  juga terdapat banyak kategori serta fitur seperti
                  <i>Lowongan Pekerjaan Terdekat</i> yang sangat membantu bagi
                  para pencari pekerjaan.???
                </p>
              </blockquote>
              <figcaption class="blockquote-footer text-primary mt-4">
                Fachry Dwi Afriza
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="carousel-item">
          <div class=" container bg-dark" style="
                margin-top: 7rem;
                padding: 2rem;
                border-radius: 1rem;
                border: 1px solid whitesmoke;
                max-width: 75ch;
              ">
            <figure>
              <blockquote class="blockquote">
                <p style="font-size: 1rem">
                  ???Saya telah mencari pekerjaan baru sejak saya di-PHK
                  perusahaan dan saya sangat senang saya menemukan
                  <span class="fw-bold text-primary">Jobtastic</span>. Situs
                  ini sangat mudah digunakan dan memiliki pembaruan pekerjaan
                  terbaik. Itu sudah membantu saya menemukan sesuatu yang
                  membuat saya lebih bahagia. Ditambah tim di belakang
                  <span class="fw-bold text-primary">Jobtastic</span> sangat
                  responsif dan membantu dengan apa pun yang Anda butuhkan.???
                </p>
              </blockquote>
              <figcaption class="blockquote-footer text-primary mt-4">
                Antonio Fisher
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="carousel-item">
          <div class=" container bg-dark" style="
                margin-top: 7rem;
                padding: 2rem;
                border-radius: 1rem;
                border: 1px solid whitesmoke;
                max-width: 75ch;
              ">
            <figure>
              <blockquote class="blockquote">
                <p style="font-size: 1rem">
                  ???Saya tidak pernah menduga saya akan menemukan karier yang
                  sangat mirip dengan apa yang selalu ingin saya lakukan,
                  tetapi ketika saya menemukan
                  <span class="fw-bold text-primary">Jobtastic</span> dan
                  mulai melamar pekerjaan, semuanya berubah. Pencarian
                  pekerjaan saya sekarang jauh lebih mudah dan semua pekerjaan
                  sangat cocok untuk saya! Ini benar-benar hebat dan saya
                  tidak bisa cukup berterima kasih kepada
                  <span class="fw-bold text-primary">Jobtastic</span>.???
                </p>
              </blockquote>
              <figcaption class="blockquote-footer text-primary mt-4">
                Melinda Cox
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <!-- <button
          class="carousel-control-prev"
          style="width: unset; top: 112px"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span
            class="carousel-control-prev-icon visually-hidden"
            aria-hidden="true"
          ></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          style="width: unset; top: 112px"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span
            class="carousel-control-next-icon visually-hidden"
            aria-hidden="true"
          ></span>
          <span class="visually-hidden">Next</span>
        </button> -->
    </div>
  </div>
  <!-- Feedback End -->

  <!-- ----------------------------- -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#212529" fill-opacity="1" d="M0,192L20,170.7C40,149,80,107,120,74.7C160,43,200,21,240,48C280,75,320,149,360,170.7C400,192,440,160,480,170.7C520,181,560,235,600,256C640,277,680,267,720,250.7C760,235,800,213,840,218.7C880,224,920,256,960,250.7C1000,245,1040,203,1080,176C1120,149,1160,139,1200,154.7C1240,171,1280,213,1320,240C1360,267,1400,277,1420,282.7L1440,288L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
  </svg>
  <!-- ----------------------------- -->

  <!-- Footer -->
  <div class="container-fluid" style="padding-bottom: 4rem" id="footer">

    <!-- Email Subscribe -->
    <div class="container-xl d-flex align-items-center flex-column gap-md-5 gap-4 py-4 px-0 position-relative" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
      <div class="subscribe-container bg-dark p-3 rounded-3 d-flex flex-column flex-lg-row gap-3 align-items-center" style="min-width: min(50%, 100% - 2rem)">
        <p class="h5 footer-text" style="max-width: 30ch">
          Ingin Selalu Dapat Lowongan
          <span class="fw-bold text-primary">Pekerjaan Yang Menarik?</span>
        </p>
        <div class="rounded-3 p-2 d-flex flex-column flex-lg-row gap-1 w-100" style="border: 1px solid #676767">
          <div class="d-flex gap-1 align-items-center">
            <i class="bx bx-envelope text-secondary"></i>
            <input type="text" placeholder="Masukkan alamat email kamu ..." class="subscribe w-100" />
          </div>
          <hr class="dropdown-divider d-lg-none d-xl-block" style="border-top: unset" />
          <button class="btn fs-xs px-2 py-2 text-white btn-primary" style="cursor: pointer">
            <i class="bx bxs-megaphone"></i>
            Berlangganan
          </button>
        </div>
      </div>
    </div>

    <!-- Actual Footer -->
    <div class="container-xl d-flex flex-column gap-3">
      <div class="d-flex flex-column flex-lg-row justify-content-between">
        <p class="h4 pt-3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
          <span class="fw-bold text-primary">Jobtastic</span>
        </p>
        <div class="d-flex flex-column footer-links">
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-group"></i> Tentang Kami</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-shape-polygon"></i> Hubungan Partner</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bxl-sketch"></i> Blog</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-phone"></i> Kontak Kami</a>
        </div>
        <div class="d-flex flex-column footer-links">
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-briefcase-alt"></i> Karir</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-briefcase"></i> Lowongan Pekerjaan</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-briefcase-alt-2"></i> Referal Lowongan
            Pekerjaan</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-help-circle"></i> Bantuan</a>
        </div>
        <div class="d-flex flex-column footer-links">
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-share-alt"></i> Afiliasi</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-shield-quarter"></i> Syarat dan Ketentuan</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-headphone"></i> Layanan Kebijakan Pribadi</a>
          <a href="#!" class="py-3 ps-0 fs-sm" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true"><i class="bx bx-coffee-togo"></i> Kirim Saran dan Masukan</a>
        </div>
      </div>

      <!-- Horizontal Line -->
      <hr class="dropdown-divider bg-secondary" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true" />

      <!-- Copyright -->
      <p class="text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
        <span class="fw-bold text-primary">Jobtastic</span> &copy; 2021 - <?= date('Y'); ?>
        <br />Seluruh Hak Cipta
      </p>
    </div>
  </div>
  <!-- Footer End -->