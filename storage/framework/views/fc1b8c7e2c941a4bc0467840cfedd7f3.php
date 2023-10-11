<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Bimbingan Konseling </title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/ind.css')); ?>">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bx-book-heart'></i>
      <span class="logo_name">KONSELING</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
            <i class='bx bx-home'></i>
          <span class="link_name">Beranda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Beranda</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-detail' ></i>
            <span class="link_name">Konsultasi</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name " href="#">Konsultasi</a></li>
          <li><a href="other/individu.php">Individu</a></li>
          <li><a href="#">kelompok</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user-circle'></i>
            <span class="link_name">Guru</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Guru</a></li>
          <li><a href="#">Mahdiansyah</a></li>
          <li><a href="#">Enny Widyastuti</a></li>
          <li><a href="#">Hapsari Lintang S</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class='bx bx-bulb'></i>
          <span class="link_name">Tips</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Tips</a></li>
        </ul>
      </li>

      <!-- <li>
       <a href="#">
            <i class='bx bx-info-circle'></i>
          <span class="link_name">Tentang</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Tentang</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
            <i class='bx bx-help-circle' ></i>
          <span class="link_name">Bantuan</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Bantuan</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> -->
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="../img/logo1.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Ardhn</div>
        <div class="job">Siswa</div>
      </div>
      <a href="/logout"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Beranda</span>
    </div>
    



    <!-- <section class="main-course">
        <!-- <h1>Penjelasan</h1> -->
        <div class="course-box">
            <ul>
                <li class="active"><h3>Apa Itu Bimbingan Konseling?</h3></li>
                <!-- <li>Explore</li> -->
                <!-- <li>Incoming</li> -->
                <!-- <li>Finished</li> -->
            </ul>
            <div class="course">
                <div class="box">
                    <p>Bimbingan dan konseling adalah dua pengertian yang berhubungan dengan makna pemberian bantuan. Bimbingan dapat diberikan kepada mahasiswa atau kelompok mahasiswa yang mengalami kesulitan dalam pendidikan, memilih jurusan, maupun kesulitan pribadi serta penyesuaian diri dengan masyarakat dan lingkungannya.</p>
                </div>
                    <!-- <p>85% - Progres</p> 
                    <button>Continue</button>
                    <i class="fab fa-html5 html"></i>
                </div>
                <div class="box">
                    <h3>CSS</h3>
                    <p>65% - Progres</p>
                    <button>Continue</button>
                    <i class="fab fa-css3 css"></i>
                </div>
                <div class="box">
                    <h3>JavaScript</h3>
                    <p>45% - Progres</p>
                    <button>Continue</button>
                    <i class="fab fa-js-square js"></i>
                </div> -->
            </div>
        </div>



        <div class="main-skill">
            <div class="card">
                <i class="far fa-address-card"></i>
                <h3>Tips Dari Kami</h3>
                <p>Tentang Konseling</p>
                <button>Mulai</button>
            </div>
            <div class="card">
                <i class="fas fa-user-alt"></i>
                <h3>Individu</h3>
                <p>Tentang Individu</p>
                <button>Mulai</button>
            </div>
            <div class="card">
                <i class="fas fa-user-friends"></i>
                <h3>Kelompok</h3>
                <p>Tentang Konseling</p>
                <button>Mulai</button>
            </div>
            <div class="card">
                <i class="far fa-address-card"></i>
                <h3>Tips Dari Kami</h3>
                <p>Tentang Konseling</p>
                <button>Mulai</button>
            </div>
        </div>

        




    </section> -->






  </section>
  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html><?php /**PATH C:\Laravel10\Project_BK\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>