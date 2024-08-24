<?php include 'include/header.php' ?>
<style>
    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 183px;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
    @media only screen and (min-width: 350px) and (max-width: 767px){
        .column {
            width: 94px;            
        }
        .img-ss {
            width: 100%!important;
            height: 200px!important;
        }
        .img-sss {
            width: 100%!important;
            height: 40px!important;
        }
    }
    @media only screen and (min-width: 370px) and (max-width: 767px){
        .column {
            width: 101px;
        }
        .img-ss {
            width: 100%!important;
            height: 200px!important;
        }
        .img-sss {
            width: 100%!important;
            height: 40px!important;
        }
    }
    @media only screen and (min-width: 450px) and (max-width: 767px){
        .column {
            width: 128px;
        }
        .img-ss {
            width: 100%!important;
            height: 200px!important;
        }
        .img-sss {
            width: 100%!important;
            height: 40px!important;
        }
    }
    @media only screen and (min-width: 470px) and (max-width: 767px){
        .column {
            width: 134px;
        }
        .img-ss {
            width: 100%!important;
            height: 200px!important;
        }
        .img-sss {
            width: 100%!important;
            height: 40px!important;
        }
    }

   
</style>
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/br-img.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title">
                            <h2>Facilities</h2>
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


    <section class="pt-80 pb-60 pad1 p-relative">
        <div class="animations-50"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
        <div class="container">
            <div class="row ">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="feature-content s-about-content">
                        <div class="feature-title pb-20">
                            <h5>The Pleasure Of Luxury</h5>
                            <h2>
                                Garden With Patio
                            </h2>
                        </div>
                        <p>
                            Nestled within the heart of the guest house, it stands as a testament to refined elegance
                            and impeccable taste. Adorned with opulent decor, from intricately designed chandeliers to
                            sumptuous furnishings, it serves as the perfect venue for hosting extravagant events and
                            grand
                            celebrations. The soft, ambient lighting enhances the sophisticated atmosphere, creating an
                            inviting space that captivates guests upon entry. </p>


                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                    <div class="feature-img">

                        <div class="mySlides">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/features/fea.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/features/fea2.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/features/fea3.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>
                        <div class="row">

                            <div class="column pt-2">
                                <img class="demo cursor img-sss" src="img/features/fea1.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide(1)" alt="#">
                            </div>
                            <div class="column pt-2">
                                <img class="demo cursor img-sss" src="img/features/fea2.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide(2)" alt="#">
                            </div>
                            <div class="column pt-2">
                                <img class="demo cursor img-sss" src="img/features/fea3.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide(3)" alt="#">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pr-30 pt-50">
                    <div class="feature-img">
                        <div class="mySlides1">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/features/faci1.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>

                        <div class="mySlides1">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/features/faci2.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>

                        <div class="mySlides1">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/features/faci3.jpg" class="img-ss" style="width:530px; height:300px;">
                        </div>
                        <div class="row">

                            <div class="column pt-2">
                                <img class="demo cursor img-sss " src="img/features/faci1.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide1(1)" alt="#">
                            </div>
                            <div class="column pt-2">
                                <img class="demo cursor img-sss" src="img/features/faci2.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide1(2)" alt="#">
                            </div>
                            <div class="column pt-2">
                                <img class="demo cursor img-sss" src="img/features/faci3.1.jpg" style="width:100%; height:70px;"
                                    onclick="currentSlide1(3)" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pt-50">
                    <div class="feature-content s-about-content">
                        <div class="feature-title pb-20">

                            <h2>

                                Multi Cuisine Restaurant
                            </h2>
                        </div>
                        <p>
                            Indulge your palate in a culinary journey at our multi-cuisine restaurant, where diverse
                            flavors from around the world come together to create a delightful dining experience. From
                            savory Asian delights to hearty Mediterranean dishes, our menu is a fusion of global tastes
                            carefully curated to satisfy every craving. Immerse yourself in the vibrant and inviting
                            ambiance as our skilled chefs craft each dish with precision and passion. Whether you're in
                            the mood for spicy curries, succulent grills, or freshly prepared sushi, our extensive menu
                            caters to all preferences. Restaurant service start from 7 am to 12 pm. </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service-details2" class="pt-70 pb-60 p-relative pad2" style="background-color:#eff2f5;">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 col-md-6">
                    <div class="services-08-item mb-30">
                        <div class="services-icon2">
                            <img src="img/icon/fe-icon01.png" alt="img">
                        </div>
                        <div class="services-08-thumb">
                            <img src="img/icon/fe-icon01.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="#!"> Qulity room</a></h3>
                            <p>
                                Our room exudes an atmosphere of unparalleled comfort and sophistication, showcasing
                                meticulous attention to detail and a commitment to providing a high-quality clean and
                                hygiene
                                rooms experience for every
                                visitor. All rooms are equipped with AC, free toiletrie.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-08-item mb-30">
                        <div class="services-icon2">
                            <img src="img/icon/fe-icon06.png" alt="img">
                        </div>
                        <div class="services-08-thumb">
                            <img src="img/icon/fe-icon06.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="#!">Garden view rooms</a></h3>
                            <p>Our garden view rooms provide a serene and picturesque escape, allowing guests to immerse
                                themselves in the tranquility of lush greenery and vibrant blooms, creating a refreshing
                                and
                                idyllic retreat.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services-08-item mb-30">
                        <div class="services-icon2">
                            <img src="img/icon/fe-icon07.png" alt="img">
                        </div>
                        <div class="services-08-thumb">
                            <img src="img/icon/fe-icon07.png" alt="img">
                        </div>
                        <div class="services-08-content">
                            <h3><a href="#!">Multi cuisine restaurant</a></h3>
                            <p>Our multi-cuisine restaurant offers a tantalizing culinary journey, featuring a diverse
                                menu
                                that spans the globe, ensuring a delightful experience for every palate with its
                                exquisite blend
                                of flavors. Restaurant service start from 7 am to 12 pm.</p>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="facility-new mb-30">
                        <p>Daily housekeeping, 24 hours check in, fire extinguishers, 24 hours front desk, invoice
                            provides, face mask for Guest available, couple, family and kids friendly property.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facility-new mb-30">
                        <p> Pick up and drop services, access to health professional services, contactless check-in and
                            check out, cctv in common areas and outside property.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facility-new mb-30">
                        <p>Situated on the ground floor, nearby shopping malls and corporate offices. In house travel
                            desk, airport and railway station shuttle. </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facility-new mb-30">
                        <p>Banquet and meeting facilities, non smoking guest rooms, designates smoking area. Cashless
                            and cash payment available. </p>
                    </div>
                </div> -->


            </div>
        </div>

    </section>
    <section class="pt-35 pb-50 pad1">
        <div class="animations-51"><img src="img/bg/an-img-07.png" alt="an-img-07"></div>
        <!-- <div class="animations-52"><img src="img/bg/an-img-06.png" alt="an-img-06"></div> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faci-title">
                        <h2>Amenities</h2>
                    </div>
                    <div class="faci-list">
                        <ol>
                            <li>Daily housekeeping.</li>
                            <li> 24 hours check in.</li>
                            <li> Fire extinguishers.</li>
                            <li>24 hours front desk, invoice provides.</li>
                            <li>Face mask for Guest available.</li>
                            <li>Couple, family and kids friendly property.</li>
                            <li>Pick up and drop services.</li>
                            <li>Access to health professional services.</li>
                            <li>Contactless check-in and check out.</li>
                            <li>Cctv in common areas and outside property.</li>
                            <li>Situated on the ground floor.</li>
                            <li>Nearby shopping malls and corporate offices.</li>
                            <li>In house travel desk, airport and railway station shuttle.</li>
                            <li>Banquet and meeting facilities.</li>
                            <li>Non smoking guest rooms, designates smoking area.</li>
                            <li>Cashless and cash payment available.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'include/footer.php' ?>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
<script>
    let slideIndex1 = 1;
    showSlides1(slideIndex1);

    function plusSlides(n) {
        showSlides1(slideIndex1 += n);
    }

    function currentSlide1(n) {
        showSlides1(slideIndex1 = n);
    }

    function showSlides1(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides1");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) { slideIndex1 = 1 }
        if (n < 1) { slideIndex1 = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex1 - 1].style.display = "block";
        dots[slideIndex1 - 1].className += " active";
        captionText.innerHTML = dots[slideIndex1 - 1].alt;
    }
</script>