@extends('layouts_home.main')

@section('container')


<div class="intro-section container-fluid">
    <div class="container">
      <div class="row">
          <div class="intro-right-mobile col-lg-6">
              <img src="images/home.svg" class="img-fluid" alt="hero" />
            </div>
        <div class="intro-left col-lg-6">
          <h3>Belajar Kursus Dengan<br>Guru-Guru Terbaik Kami</h3>
          <p>Kursus yang dirancang untuk membantu Anda <br>mencapai tujuan dengan biaya yanglebih murah.</p>
          <ul class="intro-left-btns">
            <li><a class="quote-btn" href="#">Belajar Sekarang</a></li>
          </ul>
          <p>Belum Daftar G-Learning ? <a href="#" class="home-daftarbtn">Daftar Sekarang.</a> </p>
        </div>
        <div class="intro-right col-lg-6">
          <img src="images/home.svg" class="img-fluid" alt="hero" />
        </div>
      </div>
    </div>
  </div>
  <div class="courses-section container">
    <div class="countdown container">
      <div class="row">
        <div class="countdown-left col-lg-6">
          <!-- <img src="images/countdown.svg" class="img-fluid" alt="course" /> -->
          <span class="countdown-text-left"
            >Akan Datang
            <span class="python-span">Kursus Bahasa London Kami di</span> G-Learning!</span
          >
        </div>
        <div class="countdown-right col-lg-6">
          <!-- <ul>
            <li>
              <ul>
                <li>11 :</li>
                <li class="countdown-tag"><br>Days</li>
              </ul>
            </li>
            <li>
              <ul>
                <li>02 :</li>
                <li class="countdown-tag">Hours</li>
              </ul>
            </li>
            <li>
              <ul>
                <li>45 :</li>
                <li class="countdown-tag">Minutes</li>
              </ul>
            </li>
            <li>
              <ul>
                <li>21 :</li>
                <li class="countdown-tag">Seconds</li>
              </ul>
            </li>
          </ul> -->

          <!-- <div class="countdown-text-right">
              11 <span>:</span> 02 <span>:</span> 45 <span>:</span> 21
          </div> -->

          <!-- start of countdown -->
          <div id="countdown-timer" class="text-white countdown-text-right">
            <strong id="days" class="bold-number">118</strong><span class="slim-countdown-text" style="color: #0d6efd;">D<span class="hide-words" style="color: #0d6efd;">ays</span><span class="timer"></span></span>
            
            <strong id="hours" class="bold-number">14</strong><span class="slim-countdown-text"style="color: #0d6efd;">H<span class="hide-words" style="color: #0d6efd;">ours</span><span class="timer"></span></span>    
            
            <strong id="mins" class="bold-number">36</strong><span class="slim-countdown-text"style="color: #0d6efd;">M<span class="hide-words" style="color: #0d6efd;">inutes</span><span class="timer"></span></span>
            
            <strong id="seconds" class="bold-number">24</strong><span class="slim-countdown-text"style="color: #0d6efd;">S<span class="hide-words" style="color: #0d6efd;">econds</span></span><span class="timer"></span></span>
          </div>
          
          
          <!-- end of countdown -->
        </div>
      </div>
    </div>
    <div class="top-courses container">
      <h1 class="top-courses-title">Top Featured Courses</h1>
      <div class="row">
        


        <div class="col-lg-4 col-md-6 mb-4">
          <div class="course-container">
          <img src="images/fitur1.jpg" class="img-fluid" alt="course"
          />
          <h6 class="course-name">
              Di Kursus kami menyediakan berbagai macam bahasa di Dunia
            </h6>
            <p class="course-provider">Lebih dari 30+ bahasa</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="course-container">
          <img src="images/fitur8.jpg" class="img-fluid" alt="course"
          />
          <h6 class="course-name">
              Di Kursus kami terdapat webinar untuk setiap Minggunya
            </h6>
            <p class="course-provider">Webinar</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="course-container">
          <img src="images/fitur3.jpg" class="img-fluid" alt="course"
          />
          <h6 class="course-name">
              Tidak hanya Orang-orang dewasa, Anak-anak juga dapat mengikuti Kursus
            </h6>
            <p class="course-provider">Kursus Khusus Anak</p>
        
        </div>
        </div>
      
       
        <div class="col-lg-4 col-md-6">
          <div class="course-container">
            <img src="images/Courses 6.jpg" class="img-fluid" alt="course"
          /><h6 class="course-name">
              Pengguna tidak perlu khawatir tentang Jadwal pembelajaran 
            </h6>
            <p class="course-provider">Atur Jadwal Sendiri</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="course-container">
            <img src="images/Courses 8.jpg" class="img-fluid" alt="course"
          />
          <h6 class="course-name">
              Pengguna harus memahami materi yang diberikan
            </h6>
            <p class="course-provider">Berpikir yang Baik</p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="course-container">
            <img src="images/Courses 5.jpg" class="img-fluid" alt="course"
          />
          <h6 class="course-name">
              Design Website yang tidak membuat pengguna bosan
            </h6>
          <p class="course-provider">Design Website</p>
        </div>
        </div>
      
    </div>
    </div>
    </div>
  </div>
  <div class="feedback-section container">
    <div class="container">
      <div class="row">
        <div class="feedback-left col-lg-6">
          <img src="images/sukses.jpg" class="img-fluid mt-5 mt-5" alt="Successful"  />
          <div class="student-details">
            <h6 class="student-name">Angelia Renata</h6>
            <p class="student-job">Mahasiswa</p>
          </div>
        </div>
        <div class="feedback-right col-lg-6">
          <h1 class="feedback-right-title">
            Successful Student<br />
            <span>Feedback</span>
          </h1>
          <p class="feedback-right-para">
            G-Learning telah menjadi platform hebat untuk tetap kompetitif dalam transformasi digital di tempat kerja dengan menawarkan konten pembelajaran on-demand yang baru, relevan, dan dipersonalisasi yang didukung oleh pasar konten yang dinamis.
          </p>
          <h6 class="taken-courses-title">Kursus yang diambil Angelia Renata</h6>
          <div class="taken-courses-feeback">
              <img src="images/ingrish.png" alt="taken-course">
             <a href=""><h6>English Speaking Complete:
              English Language Mastery</h6></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="statistcs-section container-fluid">
<div class="container">
  <div class="row">
     <ul class="stat1 stat-list col-lg-3 col-sm-6 mt-2">
      <li><img src="images/img1.svg" alt=""></li>
      <li><h1>768</h1></li>
      <li><h6>COURSES PUBLISHED</h6></li>
     </ul>
     <ul class="stat2 stat-list col-lg-3 col-sm-6 mt-4">
      <li><img src="images/img2.svg" alt=""></li>
      <li><h1>120</h1></li>
      <li><h6>EXPERT INSTRUCTORS</h6></li>
     </ul>
     <ul class="stat3 stat-list col-lg-3 col-sm-6">
      <li><img src="images/img3.svg" alt=""></li>
      <li><h1>8,300</h1></li>
      <li><h6>HAPPY LEARNERS</h6></li>
     </ul>
     <ul class="stat4 stat-list col-lg-3 col-sm-6">
      <li><img src="images/img4.svg" alt=""></li>
      <li><h1>32</h1></li>
      <li><h6>AWARDS ACHIEVED</h6></li>
     </ul>
      
  </div>
</div>
</div>
<div class="subscribe-section container">
  <div class="row">
      <div class="subscribe-left col-lg-4 offset-lg-2">
          <img src="images/img5.svg" class="img-fluid" alt="hero">
      </div>
      <div class="subscribe-right col-lg-6 mt-2">
         <div class="subtitle">Subscribe now</div>
         <h1>Dapatkan setiap pembaruan yang akan Anda dapatkan</h1>
         <form>  
             <i><img src="images/email.svg" alt=""></i>
             <input class="email-field" type="email" name="emailadress" id="email" placeholder="Enter email address">
             <input class="sub-btn" type="submit" value="Subscribe now">
           
         </form>
      </div>
  </div>
</div>


@endsection