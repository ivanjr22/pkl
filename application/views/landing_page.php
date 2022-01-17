<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Witel Malang</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
   </head>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
            <div class="container">
               <a class="navbar-brand" href="#">Witel Malang</a>
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Informass Website</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">About Me</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2>Witel Malang<br> </h2>
                        </div>
                        <p>Jl. A. Yani No.11, RW.02, Blimbing, Kec. Blimbing, Kota Malang, Jawa Timur 65126</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/payroll.svg');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2>Informasi Website</h2>
               <div class="subHeading">
                  Berikut informasi singkat tentang website Witel Malang
               </div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
               background-color: #00BFD8;
               border: solid 1px #c3c3c3;
             }

             #panel1 {
               padding: 10px;
               display: none;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/tentang.svg"></div>
                        <div class="body">
                           <div class="title">Tentang Website</div>
                           <div id="flip1">Baca</div>
                           <div id="panel1">aplikasi ini dibuat untuk membantu perusahaan dalam mengedit data karyawan</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/administrator.svg"></div>
                        <div class="body">
                           <div class="title">Halaman Admin</div>
                           <div id="flip2">Baca</div>
                           <div id="panel2">Administrator dapat menggunakan website untuk mengelola data pada website, halaman administrator terdapat dashboard / informasi singkat mengenai data data, terdapat data jabatan untuk pengelolaan jabatan.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/karyawan.svg"></div>
                        <div class="body">
                           <div class="title">Halaman Karyawan</div>
                           <div id="flip3">Baca</div>
                           <div id="panel3">Halaman karyawan terdapat informasi tentang karyawan.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                  }
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <div class="title">Fitur Lainnya</div>
                           <div id="flip4">Baca</div>
                           <div id="panel4">lupa password, login karyawan,admin</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Team Section -->
      <div class="Team" id="AboutMe">
         <div class="Section">
            <div class="text-center">
               <h2>Tentang Perusahaan</h2>
               <div class="subHeading">
                 </div>
               <br>
            </div>
            <div class="content">
               <div class="team row">
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/img/ss.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Crisis  Center Witel Malang</div>
                           
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="https://www.facebook.com/sftelkommalang/"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="https://www.instagram.com/plasatelkomalang/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="https://www.youtube.com/channel/UCo3FbpmB6D_6PBAXjGpW5GA/videos"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
                           <div class="col-12 text-center my-3">
                                      <img src="assets/img/1.png"   >
                                      <img src="assets/img/2.png"   >
                            </div>
                        </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="Footer" id="Footer">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  Copyright &copy; Dwi Febi Fauzi | Penggajian 2020 - All Rights Reserved
               </div>
            </div>
         </div>
      </div>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
   </body>
</html>