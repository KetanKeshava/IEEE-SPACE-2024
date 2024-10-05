<!DOCTYPE html>
<html>
<?php $page = "sar"; ?>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Workshop on Synthetic Aperture Radar (SAR) Technology | SPACE 2024</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <!-- slick slider -->
    <link rel="stylesheet" href="css/slick-theme.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="sub_page">
    <div class="hero_area">
        <!-- header section starts -->
        <header class="header_section">
            <div class="container-fluid">
                <?php include 'include/navbar.php'; ?>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <section class="course_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="text-align: center;">
                    Workshop on <span>Synthetic Aperture Radar (SAR) Technology</span>
                </h2><br>
                <h3>Dr. Tapan Misra, DS &amp; Former Director, SAC, Founding Director &amp; Chief Scientist, SISIR Radar</h3>
                <p style="text-align: center;">July 21, 2024 (8.30AM - 10.30PM)</p>
            </div>
            <div class="cfa_heading">
                <p style="text-align: justify;">
                    Abstract: In the last seven decades, Synthetic Aperture Radar (SAR) developed into a formidable tool for imaging earth, planetary objects and recently even imaging Event Horizon of black holes. Unlike optical imaging systems, SAR picks up structural signatures from interaction of different polarisations of electromagnetic waves to structural features. SAR signature is invariant to day and night, diurnal and seasonal variations. Further, the signature is almost unaffected by clouds, dusts, water vapours and other vagaries of weather, making SAR a prized imaging sensor. Consistency of SAR images, unlike optical imaging, makes it very much amenable to AI/ML.<br><br>
                    But SAR sensor itself is a bunch of contradictions. SAR is nothing but a pulse Doppler radar in motion. Because of motion, SAR signatures can be used to create a virtual array antenna of a very very large length and hence very fine beamwidth on a computer post facto. Hence the nomenclature of SAR. But SAR utilises clutter signal to create an image. But clutter is anathema to Radar engineers and an array of Radar literature is devoted to different techniques to eliminate clutter! Similarly, antenna engineers are accustomed to only array antennas operating in the far field of the Array antenna itself. But the SAR antenna actually operates mostly in the reactive field region and rarely even in Near Field region of the Synthetic Array antenna itself. SAR array poses a significant contradiction to conventional knowledge of antenna operation.<br><br>
                    SAR antenna is formed post facto on computer. Surprisingly, the tool used for array synthesis of SAR is signal processing. The formidable signal processing requirements call for huge computing resources and clever software strategies to handle extremely large computation and back and forth exchange of large data multiple times. Further, over last five decades, computing hardware and computing architectures have evolved beyond imaginations. Consequently, SAR processing algorithms and software had to adapt repeatedly to match evolution of computing and storage systems.<br><br>
                    We all know that final geometric accuracies of optical images depend upon errors in three degrees of angular rotation and three degrees of positional estimates. Surprisingly, location accuracy of SAR images is governed by only errors in position estimates but not at all on errors of angular estimates. In fact most SAR processors do not even use any data from angle sensors of SAR platform! Superiority of SAR images accuracy makes it a "must have" sensor in every advanced fighter aircraft and reconnaissance platform. No doubt, SAR is a fascinating sensor and it is still evolving. This particular workshop talk will address various facets of SAR technology, their evolution and also signatures and applications of SAR imaging.
                </p>
            </div>
        </div>
    </section>

    <?php include 'sponsors.php'; ?>

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="footer_box">
                <p>
                    Copyright &copy; 2024 SPACE2024 - IEEE Microwaves, Antennas and Propagation Conference |
                    Powered by SPACE2024 - IEEE Microwaves, Antennas and Propagation Conference
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

</body>
</html>
