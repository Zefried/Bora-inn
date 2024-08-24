<?php include 'include/header.php' ?>
<main>


    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/br-img.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title">
                            <h2>Gallery</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <section class="gallery">

        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <img src="img/gallery/gal1.jpg"  style="width:100%" onclick="openModal1();currentSlide(1)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal2.jpg"  style="width:100%" onclick="openModal1();currentSlide(2)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal3.jpg"  style="width:100%" onclick="openModal1();currentSlide(3)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal4.jpg"  style="width:100%" onclick="openModal1();currentSlide(4)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal5.jpg"  style="width:100%" onclick="openModal1();currentSlide(5)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal6.jpg"  style="width:100%" onclick="openModal1();currentSlide(6)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal7.jpg"  style="width:100%" onclick="openModal1();currentSlide(7)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal8.jpg"  style="width:100%" onclick="openModal1();currentSlide(8)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal9.1.jpg"  style="width:100%" onclick="openModal1();currentSlide(9)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal10.jpg"  style="width:100%" onclick="openModal1();currentSlide(10)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal11.jpg"  style="width:100%" onclick="openModal1();currentSlide(11)"
                        class="hover-shadow cursor gal-img">
                </div>
                <div class="col-lg-3">
                    <img src="img/gallery/gal12.jpg"  style="width:100%" onclick="openModal1();currentSlide(12)"
                        class="hover-shadow cursor gal-img">
                </div>
            </div>

            <div id="myModal1" class="modal1">
                <span class="close c
                ursor" onclick="closeModal1()">&times;</span>
                <div class="modal1-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 12</div>
                        <img src="img/gallery/gal1.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 12</div>
                        <img src="img/gallery/gal2.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 12</div>
                        <img src="img/gallery/gal3.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 12</div>
                        <img src="img/gallery/gal4.1.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">5 / 12</div>
                        <img src="img/gallery/gal5.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 12</div>
                        <img src="img/gallery/gal6.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">7 / 12</div>
                        <img src="img/gallery/gal7.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">8 / 12</div>
                        <img src="img/gallery/gal8.1.jpg" style="width:100%">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">9 / 12</div>
                        <img src="img/gallery/gal9.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">10 / 12</div>
                        <img src="img/gallery/gal10.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">11 / 12</div>
                        <img src="img/gallery/gal11.1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">12 / 12</div>
                        <img src="img/gallery/gal12.1.jpg" style="width:100%">
                    </div>
                    

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'include/footer.php' ?>
<script>
    function openModal1() {
	document.getElementById("myModal1").style.display = "block";
  }
  
  function closeModal1() {
	document.getElementById("myModal1").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
	showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
	showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
  }

</script>