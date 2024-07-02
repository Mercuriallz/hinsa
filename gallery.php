<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .newBody {
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: 100vh; Ensure the body takes up the full height of the viewport */
            font-family: "DM Sans", sans-serif;
            transition: background 0.4s ease-in;
        }

        .newContainer {
            width: 100%;
            max-width: 100%;
            /* Adjust the maximum width as needed */
            transform-style: preserve-3d;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        input[type="radio"] {
            display: none;
        }

        .cards {
            position: relative;
            width: 100%;
            height: 200px;
            /* Adjust height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: absolute;
            width: 100%;
            /* Adjust the width of the cards */
            height: 200px;
            /* Adjust the height of the cards */
            margin: auto;
            transition: transform 0.4s ease;
            cursor: pointer;
            border-radius: 15px;
        }

        .ijg {
            position: relative;
        }

        .ijg img {
            width: 100%;
            /* Adjust the width of the images */
            height: 250px;
            /* Adjust the height of the images */
            border-radius: 15px;
            object-fit: cover;
        }

        .image-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            padding: 5px;
            border-radius: 15px;
        }

        #item-1:checked~.cards #song-4,
        #item-2:checked~.cards #song-5,
        #item-3:checked~.cards #song-1,
        #item-4:checked~.cards #song-2,
        #item-5:checked~.cards #song-3 {
            transform: translateX(-80%) scale(0.6);
            opacity: 0.2;
            z-index: 0;
        }

        #item-1:checked~.cards #song-5,
        #item-2:checked~.cards #song-1,
        #item-3:checked~.cards #song-2,
        #item-4:checked~.cards #song-3,
        #item-5:checked~.cards #song-4 {
            transform: translateX(-45%) scale(0.8);
            opacity: 0.4;
            z-index: 1;
        }

        

        #item-1:checked~.cards #song-3,
        #item-2:checked~.cards #song-4,
        #item-3:checked~.cards #song-5,
        #item-4:checked~.cards #song-1,
        #item-5:checked~.cards #song-2 {
            transform: translateX(80%) scale(0.6);
            opacity: 0.2;
            z-index: 0;
        }

        #item-1:checked~.cards #song-2,
        #item-2:checked~.cards #song-3,
        #item-3:checked~.cards #song-4,
        #item-4:checked~.cards #song-5,
        #item-5:checked~.cards #song-1 {
            transform: translateX(45%) scale(0.8);
            opacity: 0.4;
            z-index: 1;
        }
        

        #item-1:checked~.cards #song-1,
        #item-2:checked~.cards #song-2,
        #item-3:checked~.cards #song-3,
        #item-4:checked~.cards #song-4,
        #item-5:checked~.cards #song-5 {
            transform: translateX(0) scale(1);
            opacity: 1;
            z-index: 2;
        }

        


    </style>
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-1">
            <a class="navbar-brand fw-bold" href="#page-top"><img src="assets/images/logo_hinsa.png" width="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Feature
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-0 my-0 my-lg-0">
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="index.php">HOME</a></li>
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="about.php">ABOUT US</a></li>
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="#facilities">FACILITIES</a></li>
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="product.php">OUR PRODUCT</a></li>
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="gallery.php">GALLERY</a></li>
                    <li class="nav-item" style="font-family:Montserrat; font-size: 15px; font-weight: bold"><a class="nav-link me-lg-0" href="#contactus">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col" style="text-align: center; font-size:60px; font-family:Montserrat; font-weight:bolder">
                    GALLERY
                </div>
            </div>
            <div class="row">
                <div class= "col-md-4 col-sm-4 col-3 col-lg-4"></div>
                <div class="col-md-4 col-sm-4 col-6 col-lg-4" style="justify-content: center; align-items:center; display:absolute;" width="100%">
                    <div class="newBody">
                        <div class="newContainer">
                            <input type="radio" name="slider" id="item-1" checked>
                            <input type="radio" name="slider" id="item-2">
                            <input type="radio" name="slider" id="item-3">
                            <input type="radio" name="slider" id="item-4">
                            <input type="radio" name="slider" id="item-5">
                            <div class="cards">
                                <label class="card" for="item-1" id="song-1">
                                    <span class="ijg"><img src="assets/images/banyak_buah.jpeg" alt="song">
                                        <div class="image-text">Buah-buahan</div>
                                    </span>
                                </label>
                                <label class="card" for="item-2" id="song-2">
                                    <span class="ijg"><img src="assets/images/indian_condiments_with_copy_space_flat_lay_1.jpeg" alt="song">
                                        <div class="image-text">Rempah-rempah</div>
                                    </span>
                                </label>
                                <label class="card" for="item-3" id="song-3">
                                    <span class="ijg"><img src="assets/images/front_view_vegetable_1.jpeg" alt="song">
                                        <div class="image-text">Sayur-sayuran</div>
                                    </span>
                                </label>
                                <label class="card" for="item-4" id="song-4">
                                    <span class="ijg"><img src="assets/images/catering.jpeg" alt="song">
                                        <div class="image-text">Sayur-sayuran</div>
                                    </span>
                                </label>
                                <label class="card" for="item-5" id="song-5">
                                    <span class="ijg"><img src="assets/images/rumah_sakit.jpeg" alt="song">
                                        <div class="image-text">Sayur-sayuran</div>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-6" style="align-items: center;">
                <img src="assets/images/logo_hinsa.png" width="80px">
            </div>
            <div class="col-6">
                <div class="row ">
                    <div class="col ">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">HOME</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">ABOUT US</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">FACILITIES</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">OUR PRODUCT</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">GALLERY</a> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="text-align: right; font-family:Montserrat; font-size: 15px;"> <a href="#" style="text-decoration:none; color:black;">CONTACT US</a> </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- </section> -->
    <!-- Footer-->
    <footer class="text-center py-2" style="background: #115174;">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">Copyright © 2024 IDGroup. All rights reserved.</div>

            </div>
        </div>
    </footer>

    <script>
        $('input').on('change', function() {
            $('body').toggleClass('blue');
        });
    </script>

<script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
