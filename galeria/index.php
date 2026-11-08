<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="">
        <link rel="canonical" href="">
        <meta name="author" content="Qarta Online">
        <meta property="og:title" content="Bacanora Terraza">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:image:secure_url" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Bacanora Terraza | Galería</title>
        <link rel="icon" href="">
        <link rel="apple-touch-icon" href="">
        <meta name="msapplication-TileImage" content="">
        <style type="text/css">
            main #galeria-index h2.title { color: #170D09; text-align: center; }
            /* Galeria */
            #galeria-index { background-color: #FFFFFB; }
            .inner { padding: 10px; }
            .mother-col { /* padding: 0!important; */ padding-bottom: 10px; width: 100%; }
            #galeria-index :is(.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto) { padding-left: 10px; padding-right: 10px; }
            #galeria-index .row { margin-right: -10px; margin-left: -10px; }
            .img-galeria { width: 100%; height: 100%; object-fit: cover; cursor: pointer; -webkit-user-drag: none; -khtml-user-drag: none; -moz-user-drag: none; -o-user-drag: none; }
            .img-galeria:hover { transform: scale(1.008); transition: .35s; transition-timing-function: ease; }
            #galeria-index :is(.container, .container-lg, .container-md, .container-sm, .container-xl) { max-width: 1700px; }
            /* Modal */
            .modal { display: none; position: fixed; z-index: 50; left: 0; top: 0; width: 100vw; height: 100vh; overflow: auto; background-color: rgba(0, 0, 0, 0.3); }
            .no-modal { display: none; }
            .yes-modal {  }
            .modal-contentt { height: auto; width: auto; /* max-width: 90%; */ /* max-height: 70vh; */ position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); }
            .slidesImg { width: auto; height: auto; max-height: 70vh; object-fit: scale-down; max-width: 90vw; }
            .flechasImgLeft { position: absolute; z-index: 150; top: 50%; left: 3%; transform: translateY(-50%); height: 1.6rem; width: auto; }
            .flechasImgRight { position: absolute; z-index: 150; top: 50%; right: 3%; transform: translateY(-50%); height: 1.6rem; width: auto; }
        </style>
    </head>
    <body>
        <?php require("../includes/nav.php");?>
        <div id="myModal" class="modal">
            <!-- Icon Close -->
            <img src="../assets/icons/close.svg" alt="" style="cursor: pointer; filter: invert(100%); position: absolute; top: 6rem; right: 2rem; height: 1.4rem; z-index: 100;" onclick="closeModal()">
            <div class="modal-contentt">
                <!-- Icons Arrows -->
                <img src="../assets/icons/flechitas-left.svg" alt="" style="cursor: pointer; filter: invert(100%);" class="flechasImgLeft" onclick="plusSlides(-1);">
                <img src="../assets/icons/flechitas-right.svg" alt="" style="cursor: pointer; filter: invert(100%);" class="flechasImgRight" onclick="plusSlides(1);">
                <!-- Content -->
                <div class="mySlides">
                    <img src="../assets/img/6.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/11.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/13.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/7.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/5.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/3.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/18.jpg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/12.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/19.jpg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/4.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/10.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/20.jpg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/26.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/17.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/22.jpeg" class="slidesImg" alt="">
                </div>    
                <div class="mySlides">
                    <img src="../assets/img/23.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/27.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/24.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/25.jpeg" class="slidesImg" alt="">
                </div>
                <div class="mySlides">
                    <img src="../assets/img/21.jpeg" class="slidesImg" alt="">
                </div>
                
            </div> 
        </div>
        <main>
            <section id="galeria-index">
                <div class="container">
                    <!-- Título -->
                    <div class="content pb-0" style="padding-top: 7rem;">
                        <h2 class="title">Galería</h2>
                        <img src="../assets/img/logo-flip.png" alt="logo" class="icon mt-2">
                    </div>
                    <!-- Galería -->
                    <div>
                        <!-- Row 1 -->
                        <div class="row">
                            <div class="col-8 mother-col" style="height: 600px;">
                                    <img src="../assets/img/6.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(1)"> 
                            </div>
                            <div class="col-4 mother-col pb-0">
                                <div class="row">
                                    <div class="col-12 mother-col" style="padding-left: 0; height: 300px;">
                                        
                                            <img src="../assets/img/11.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(2)">   
                                    </div>     
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="padding-left: 0; height: 300px;">
                                            <img src="../assets/img/13.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(3)">
                                        
                                    </div>         
                                </div>
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="row">
                            <div class="col-4 mother-col" style="height: 600px; padding-right: 0;">
                                    <img src="../assets/img/7.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(4)"> 
                            </div>
                            <div class="col-8 mother-col" style="height: 600px;">
                                <img src="../assets/img/5.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(5)"> 
                            </div>
                        </div>
                        <!-- Row 3 -->
                        <div class="row">
                            <div class="col-4 mother-col">
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px; padding-right: 0;">
                                        <img src="../assets/img/3.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(6)">   
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 600px; padding-right: 0; padding-bottom: 0;">
                                        <img src="../assets/img/18.jpg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(7)">
                                    </div>
                                </div>

                            </div>
                            <div class="col-4 mother-col">
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px;">
                                        <img src="../assets/img/12.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(8)"> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px;">
                                        <img src="../assets/img/19.jpg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(9)"> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px; padding-bottom: 0;">
                                        <img src="../assets/img/4.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(10)"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 mother-col">
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 600px; padding-left: 0;">
                                        <img src="../assets/img/10.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(11)"> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px; padding-left: 0; padding-bottom: 0;">
                                        <img src="../assets/img/20.jpg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(12)"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 4 -->
                        <div class="row">
                            <div class="col-4 mother-col">
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 300px; padding-right: 0;">
                                        <img src="../assets/img/26.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(13)">   
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mother-col" style="height: 600px; padding-right: 0; padding-bottom: 0;">
                                        <img src="../assets/img/17.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(14)">   
                                    </div>
                                </div>

                            </div>
                            <div class="col-8 mother-col">
                                <div class="row">
                                    <div class="col-12" style="height: 600px; padding-bottom: 10px;">
                                        <img src="../assets/img/22.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(15)"> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" style="height: 300px;">
                                        <img src="../assets/img/23.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(16)"> 
                                    </div>
                                    <div class="col-6" style="height: 300px; padding-left: 0;">
                                        <img src="../assets/img/27.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(17)"> 
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- Row 5 -->
                        <div class="row mb-4">
                            <div class="col-4 mother-col" style="height: 300px; padding-right: 0;">
                                <img src="../assets/img/24.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(18)">   
                            </div>
                            <div class="col-4 mother-col" style="height: 300px; ">
                                <img src="../assets/img/25.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(19)">   
                            </div>
                            <div class="col-4 mother-col" style="height: 300px; padding-left: 0;">
                                <img src="../assets/img/21.jpeg" alt="Bacanora Terraza Galería" class="img-galeria" onclick="openModal();currentSlide(20)">   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require("../includes/footer.php");?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src=""></script>
        <script type="text/javascript">
            function openModal() {
                document.getElementById("myModal").style.display = "block";
            }
            function closeModal() {
                document.getElementById("myModal").style.display = "none";
            }
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n){
                showSlides(slideIndex += n);
            }
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            function showSlides(n){
                var i;
                setTimeout(function() {

                }, 500);
                var slides = document.getElementsByClassName("mySlides");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1){
                    slideIndex = slides.length;
                }
                for (i=0; i < slides.length; i++){
                    slides[i].style.display = "none";
                }
                slides[slideIndex-1].style.display = "block";
            }

            var wHeight = window.innerHeight;

            function nav() {
                var nav = document.getElementsByTagName("nav")[0];
                var toggler = document.getElementById("nav-toggler");
                var scrollPos = window.pageYOffset;
                var screenWidth = window.innerWidth;
                if (screenWidth <= 991.98) {
                    if (toggler.classList.contains("open")) {
                        nav.classList.remove("open");
                        toggler.classList.remove("open");
                    } else {
                        nav.classList.add("open");
                        toggler.classList.add("open");
                    }
                }
            }

            function slideTo(place) {
              $('html, body').animate({
                scrollTop: $(place).offset().top - 60
              }, 1000);
            }
        </script>
    </body>
</html>