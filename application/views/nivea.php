<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $title; ?></title>
    <link rel="icon" href="https://images-as.nivea.com/-/media/niveax/icons/logos/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
</head>

<style>
    html,
    body {
        position: relative;
        height: 100%;

    }

    body {
        color: #000;
        margin: 0;
        overflow-x: hidden;
    }

    .no-scroll-y {
        overflow-y: hidden;
    }

    #preloader-section {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    /* Preloader */
    .ctn-preloader {
        -webkit-box-align: center;
        align-items: center;

        /* Show or Hide cursor when hover of Preloader*/
        cursor: none;
        display: -webkit-box;
        display: flex;
        height: 100%;
        -webkit-box-pack: center;
        justify-content: center;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

    .ctn-preloader .animation-preloader {
        position: absolute;
        z-index: 100;
    }

    /* Spinner loading */
    .ctn-preloader .animation-preloader .spinner {
        -webkit-animation: spinner 1s infinite linear;
        animation: spinner 1s infinite linear;
        border-radius: 50%;
        border: 3px solid rgba(0, 0, 0, 0.2);
        border-top-color: white;
        /* It is not identified in alphabetical order so that it does not overwrite it */
        height: 9em;
        margin: 0 auto 3.5em auto;
        width: 9em;
    }

    /* Text Loading */
    .ctn-preloader .animation-preloader .txt-loading {
        font: bold 5em 'Montserrat', sans-serif;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
        -webkit-animation: letters-loading 4s infinite;
        animation: letters-loading 4s infinite;
        color: white;
        content: attr(data-text-preloader);
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        -webkit-transform: rotateY(-90deg);
        transform: rotateY(-90deg);
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading {
        color: rgba(0, 0, 0, 0.2);
        position: relative;
    }

    /* Letters Animation */
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
        -webkit-animation-delay: 1.2s;
        animation-delay: 1.2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(8):before {
        -webkit-animation-delay: 1.4s;
        animation-delay: 1.4s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(9):before {
        -webkit-animation-delay: 1.6s;
        animation-delay: 1.6s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(10):before {
        -webkit-animation-delay: 1.8s;
        animation-delay: 1.8s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(11):before {
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(12):before {
        -webkit-animation-delay: 2.2s;
        animation-delay: 2.2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(13):before {
        -webkit-animation-delay: 2.4s;
        animation-delay: 2.4s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(14):before {
        -webkit-animation-delay: 2.6s;
        animation-delay: 2.6s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(15):before {
        -webkit-animation-delay: 2.8s;
        animation-delay: 2.8s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(16):before {
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
    }

    /* Loader section Settings */
    .ctn-preloader .loader-section {
        background-color: #000;
        height: 100%;
        position: fixed;
        top: 0;
        width: calc(50% + 1px);
    }

    .ctn-preloader .loader-section.section-left {
        left: 0;
    }

    .ctn-preloader .loader-section.section-right {
        right: 0;
    }

    /* Fade effect in loading animation */
    .loaded .animation-preloader {
        opacity: 0;
        -webkit-transition: 0.3s ease-out;
        transition: 0.3s ease-out;
    }

    /* Curtain effect */
    .loaded .loader-section.section-left {
        -webkit-transform: translateX(-101%);
        transform: translateX(-101%);
        -webkit-transition: 3.5s 0.1s all cubic-bezier(0.1, 0.1, 0.1, 2.000);
        transition: 3.5s 0.1s all cubic-bezier(0.1, 0.1, 0.1, 2.000);
    }

    .loaded .loader-section.section-right {
        -webkit-transform: translateX(101%);
        transform: translateX(101%);
        -webkit-transition: 3.5s 0.1s all cubic-bezier(0.1, 0.1, 0.1, 2.000);
        transition: 3.5s 0.1s all cubic-bezier(0.1, 0.1, 0.1, 2.000);
    }

    /* Preloader Animation */
    @-webkit-keyframes spinner {
        to {
            -webkit-transform: rotateZ(360deg);
            transform: rotateZ(360deg);
        }
    }

    @keyframes spinner {
        to {
            -webkit-transform: rotateZ(360deg);
            transform: rotateZ(360deg);
        }
    }

    /* Animation of the letters loading from the preloader */
    @-webkit-keyframes letters-loading {

        0%,
        75%,
        100% {
            opacity: 0;
            -webkit-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
        }

        25%,
        50% {
            opacity: 1;
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
        }
    }

    @keyframes letters-loading {

        0%,
        75%,
        100% {
            opacity: 0;
            -webkit-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
        }

        25%,
        50% {
            opacity: 1;
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
        }
    }

    /* Backward laptop size (laptop, tablet, cell phone) */
    @media screen and (max-width: 767px) {

        /* Preloader */
        /* Spinner Loading */
        .ctn-preloader .animation-preloader .spinner {
            height: 8em;
            width: 8em;
        }

        /* Text Loading */
        .ctn-preloader .animation-preloader .txt-loading {
            font: bold 3.5em 'Montserrat', sans-serif;
        }
    }

    @media screen and (max-width: 500px) {

        /* Prelaoder */
        /* Spinner Loading */
        .ctn-preloader .animation-preloader .spinner {
            height: 7em;
            width: 7em;
        }

        /* Text Loading */
        .ctn-preloader .animation-preloader .txt-loading {
            font: bold 2em 'Montserrat', sans-serif;
        }
    }

    /* Navbar */

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.6s;
        padding: 10px 30px;

    }

    header.sticky {
        padding: 5px 120px;
        background-color: #1f1f1f;
        transition: 1.5s;
        z-index: 50;
        position: fixed;
    }

    header.sticky .logo {
        width: 50px;
        margin-top: 5px;
        margin-bottom: 5px;

    }

    header.sticky button ul li a {
        color: #2b2b2b;
    }

    header.sticky ul li a:hover {
        color: #fff;
    }


    header .logo {
        position: relative;
        letter-spacing: 2px;
    }

    header ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header ul li {
        position: relative;
        list-style: none;

    }

    header ul li a {
        position: relative;
        margin: 0 15px;
        color: #fff;
        letter-spacing: 2px;
        font-weight: 300px;
        transition: 0.5s;
    }

    .carousel {
        position: flex;
        width: 300px;
        height: 200px;
        border-radius: 20px;
        transform-style: preserve-3d;
        transform: perspective(1100px) rotateY(0deg);
        animation: rotate 12s linear infinite;
    }

    .carousel__item {
        position: absolute;
        width: 100%;
        height: 100%;
        transform-origin: center;
        transform-style: preserve-3d;
        transform: rotateY(calc(var(--i) * 45deg)) translateZ(500px);
    }

    .carousel-img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @keyframes rotate {
        100% {
            transform: perspective(1100px) rotateY(300deg);
        }
    }

    .swiper {
        width: 800px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
        background: #2b2b2b;
        line-height: 300px;
        text-align: center;
        border-radius: 10px;
        display: flex;
        margin: 3px;
        justify-content: center;
    }

    .swiper-slide:hover {
        transition: 0.5s;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

    .swiper2 {
        width: 800px;
    }

    @media (min-aspect-ratio: 16/9) {
        .back-video {
            width: 100%;
            z-index: 1;
            height: auto;
        }
    }

    @media (max-aspect-ratio: 16/9) {
        .back-video {
            width: auto;
            z-index: 1;
            height: 100%;
        }
    }

    .contener {
        position: relative;
        width: 1280px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;

    }

    .contener .cards {
        position: relative;
        width: 300px;
        height: 400px;
        background: linear-gradient(#2196f3, #2196f3 30%, #1d3548);
        margin: 10px;
        border-radius: 20px;
        overflow: hidden;
    }

    .contener .cards .imgBx {
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        transition: 0.5s;
        transform-origin: top;
        border-radius: 20px;
        overflow: hidden;
    }

    .contener .cards .content .details {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    .contener .cards .content .details h2 {
        color: #fff;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .contener .cards .content .details h2 span {
        font-size: 0.8em;
        font-weight: 400;
        color: #03a9f4;

    }

    .social_icons {
        position: relative;
        display: flex;
        margin-top: 5px;
    }

    .social_icons li {
        list-style: none;
        margin: 4px;
    }

    .social_icons li a {
        width: 45px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #294d69;
        border-radius: 50%;
        font-size: 1.5em;
        color: #fff;
        text-decoration: none;
        transition: 0.5s;
    }

    .socal_icons li a:hover {
        transform: rotate(360deg);
        background: #03a9f4;
    }

    .contener .cards .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        padding-bottom: 30px;
        transform: translateY(100%);
    }

    .contener .cards:hover .content {

        transform: translateY(100%);
    }

    .contener .cards:hover .imgBx {
        transform: translateY(30px) scale(0.5);
    }

    .contener .cards .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .title {
        -webkit-text-stroke: 1px #fff;
        left: 50%;
        top: 50%;
        color: transparent;
        font-size: 120px;
        background-image: linear-gradient(#fff, #fff);
        background-repeat: no-repeat;
        -webkit-background-clip: text;
        background-position: -500px 0;
        animation: backcolor 4s linear infinite alternate;
    }

    .hero-btn {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        border-radius: 10px;
        padding: 12px 34px;
        font-size: 13px;
        background: #413f42;
        position: relative;
        box-shadow: inset 0 0 0.10em 0 rgb(65, 63, 66), 0 0 0.5em 0 rgb(65, 63, 66);
    }

    .hero-btn:hover {
        background: #00136F;

        box-shadow: inset 0 0 0.10em 0 rgb(30, 144, 255), 0 0 0.5em 0 rgb(30, 144, 255);
        transition: 0.5s;
        color: #fff;
        cursor: default;
    }

    .card {
        display: grid;
        grid-template-columns: 300px;
        grid-template-rows: 210px 250px 40px;
        grid-template-areas: "image" "text" "stats";
        border-radius: 18px;
        background: #1d1d1d;
        width: 350px;
        color: white;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);

        text-align: justify;
        cursor: pointer;
        margin: 30px;
        transform-style: preserve-3d;
        transform: perspective(1000px);
    }

    .rgb::after {
        content: "";
        background: linear-gradient(45deg,
                #ff0000 0%,
                #ff9a00 10%,
                #d0de21 20%,
                #4fdc4a 30%,
                #3fdad8 40%,
                #2fc9e2 50%,
                #1c7fee 60%,
                #5f15f2 70%,
                #ba0cf8 80%,
                #fb07d9 90%,
                #ff0000 100%) repeat 0% 0% / 300% 100%;
        position: absolute;
        inset: -3px;
        border-radius: 16px;
        filter: blur(8px);
        transform: translateZ(-1px);
        /*or z-index */
        animation: rgb 6s linear infinite;
    }

    @keyframes rgb {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .js-tilt-glare {
        border-radius: 18px;
    }

    .card-image {
        grid-area: image;
        background: linear-gradient(#fff0 0%, #fff0 70%, #1d1d1d 100%);
        border-top-left-radius: 20px;
        border-top-right-radius: 15px;
        width: 280px;
        background-size: cover;
        margin-left: 55px;
        margin-top: 11px;
    }

    .card-text {
        grid-area: text;
        margin: 25px;
        font: bold 5em 'Montserrat', sans-serif;
        transform: translateZ(30px);
    }

    .card-text .date {
        color: rgb(255, 7, 110);
        font-size: 13px;
    }

    .card-text p {
        color: white;
        font-size: 14px;
        font-weight: 300;
        margin-top: 10px;
    }

    .card-text h2 {
        margin-top: 150px;
        font-size: 28px;
    }

    .card-stats {
        grid-area: stats;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        background: rgb(255, 7, 110);
    }

    .card-stats .stat {
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;
    }

    .card-stats .border {
        border-left: 1px solid rgb(172, 26, 87);
        border-right: 1px solid rgb(172, 26, 87);
    }

    .card-stats .value {
        font-size: 22px;
        font-weight: 500;
    }

    .card-stats .value sup {
        font-size: 12px;
    }

    .card-stats .type {
        font-size: 11px;
        font-weight: 300;
        text-transform: uppercase;
    }


    /*card2*/
    .card-image.card2 {
        background: linear-gradient(#fff0 0%, #fff0 70%, #1d1d1d 100%), url("img2.jpg");
        background-size: cover;
    }

    .card-text.card2 .date {
        color: rgb(255, 77, 7);
    }

    .card-stats.card2 .border {
        border-left: 1px solid rgb(185, 67, 20);
        border-right: 1px solid rgb(185, 67, 20);
    }

    .card-stats.card2 {
        background: rgb(255, 77, 7);
    }

    /*card3*/
    .card-image.card3 {
        background: linear-gradient(#fff0 0%, #fff0 70%, #1d1d1d 100%), url("img3.jpg");
        background-size: cover;
    }

    .card-text.card3 .date {
        color: rgb(0, 189, 63);
    }

    .card-stats.card3 .border {
        border-left: 1px solid rgb(14, 122, 50);
        border-right: 1px solid rgb(14, 122, 50);
    }

    .card-stats.card3 {
        background: rgb(0, 189, 63);
    }

    @keyframes backcolor {
        100% {
            background-position: 0 0;
        }
    }



    @keyframes rotate {
        100% {
            transform: perspective(1100px) rotateY(360deg);
        }
    }

    footer {
        background: #73777B;
    }

    footer:hover {
        transition: 0.5s;
    }
</style>

<body class="gradient">

    <header class="bg-black">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="" class="logo w-16">
        <ul>
            <li><a href="#section-produk">Produk</a></li>
            <li><a href="#section-manfaat">Manfaat</a></li>
            <li><a href="#section-pemakaian">Pemakaian</a></li>
            <li><a href="#section-tips">Tips</a></li>
        </ul>
    </header>



    <!-- Splash Screen -->
    <div id="preloader-body" class="no-scroll-y">

        <!-- Start: Preloader -->
        <section id="preloader-section">
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">

                        <!-- Spinner -->
                        <div class="spinner"></div>

                        <!-- Start: Text Loading -->
                        <div class="txt-loading">
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="V" class="letters-loading">V</span>
                            <span data-text-preloader="E" class="letters-loading">E</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                        </div>
                        <!-- End: Text Loading -->

                    </div>

                    <!-- Start: Preloader sides - Model 1 -->
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                    <!-- End: Preloader sides - Model 1 -->

                </div>
            </div>
        </section>
        <!-- End: Preloader -->

    </div>
    <div class="leading-normal tracking-normal text-white gradient">

        <div class="text-center">
            <video autoplay loop muted plays-inline class="back-video pointer-events-none h-7 mt-5">
                <source src="<?= base_url('assets/videos/video.mp4') ?>" type="video/mp4">
            </video>
        </div>
        <!-- Produk Section -->
        <section id="section-produk" class="scroll-mt-1">
            <div class="container flex flex-row justify-between items-center py-48 ml-24">
                <div class="w-[32%] flex flex-col space-y-12">
                    <div class="text-white" data-aos="fade-right">
                        <h2 class="font-semibold text-xl uppercase">TENTANG</h2>
                        <p class="font-medium text-[12px] font-sans mt-3"> membantu membersihkan kotoran dan polusi pada kulit hingga pori terdalam dan juga menutrisi dan mencerahkan kulit. Sehingga wajah jadi cerah dan bebas minyak seharian. Cocok digunakan sehari-hari & untuk semua jenis kulit terutama untuk pria dengan wajah mudah berminyak dan sering terpapar polusi dan kotoran. Telah diuji secara dermatologi cocok untuk kulit. Formula NIVEA MEN tidak membuat kulit wajah kering.</p>
                    </div>
                    <div class="flex items-center" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-3/5 z-10">
                            <a href="<?= base_url('assets/images/nivea-deep.png') ?>" class="relative inline bg-[#2b2b2b] font-semibold text-lg py-3 px-10 rounded-lg capitalize shadow-one hover:bg-[#fff] hover:text-gray-800 group" target="_blank">
                                <div class="absolute h-full bg-[#2b2b2b] rounded-tr-xl group-hover:bg-[#fff]"></div>
                                BELI !
                            </a>
                        </div>

                        <div class="w-2/5 text-right">
                            <p class="text-4xl font-extrabold text-white font-[Inter]">
                                Rp27.800
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] flex flex-col items-center">
                    <div class="leading-[.8] text-gray-900 text-center flex flex-col space-y-6">
                        <h1 class="uppercase font-[Inter] title">Nivea</h1>
                        <p class="text-xl uppercase justify-center text-[#fff]">NIVEA MEN DEEP BRIGHT OIL CLEAR MUD FOAM</p>
                    </div>
                    <div class="w-full h-[440px] mt-4 hover:scale-105 transition-all">
                        <img src="assets/images/nivea-deep.png" class="w-96 h-full-object-cover drop-shadow-one z-10" alt="Main Product">
                    </div>
                </div>
                <div class="w-[30%] flex flex-col items-end space-y-32 z-10">
                    <div class="relative w-[45%] pt-4 pb-6 px-4 leading-normal text-[#fff] bg-[#413F42] rounded-xl shadow-one z-50 hover:scale-110 transition-all">
                        <div class="absolute -top-[30px] left-0 h-11 w-[135px] transform skew-y-[150deg] rounded-tr-3xl -z-10 bg-[#2b2b2b] shadow-two"></div>
                        <div class="relative -top-10 font-bold text-sm">01</div>
                        <p class="uppercase text-sm font-bold mb-3">ACTIVE</p>
                        <h2 class="text-[24px] font-bold leading-[.8]">100%</h2>
                        <h4 class="text-[18px] lowercase font-semibold flex justify-center">Charcoal</h4>
                    </div>
                    <div class="relative w-[45%] pt-4 pb-6 px-4 leading-normal text-[#fff] bg-[#413F42] rounded-xl shadow-one z-50 hover:scale-110 transition-all">
                        <div class="absolute -top-[30px] left-0 h-11 w-[135px] transform skew-y-[150deg] rounded-tr-3xl -z-10 bg-[#2b2b2b] shadow-two"></div>
                        <div class="relative -top-10 font-bold text-sm">02</div>
                        <p class="uppercase text-sm font-bold mb-3">VITAMIN</p>
                        <h2 class="text-[24px] font-bold leading-[.8]">C</h2>
                        <h4 class="text-[18px] lowercase font-semibold"></h4>
                    </div>
                    <div class="relative w-[45%] pt-4 pb-6 px-4 leading-normal text-[#fff] bg-[#413F42] rounded-xl shadow-one z-50 hover:scale-110 transition-all">
                        <div class="absolute -top-[30px] left-0 h-11 w-[135px] transform skew-y-[155deg] rounded-tr-3xl -z-10 bg-[#2b2b2b] shadow-two"></div>
                        <div class="relative -top-10 font-bold text-sm">03</div>
                        <p class="uppercase text-sm font-bold mb-3">LCARNITE</p>
                        <h2 class="text-[24px] font-bold leading-[.8]">100%</h2>
                    </div>
                </div>
            </div>
        </section>


        <!-- <div class="carousel mx-80">
            <div class="carousel__item" style="--i:1">
                <img src="images/img1.jpg" alt="" class="carousel-img">
            </div>
            <div class="carousel__item" style="--i:2">
                <img src="images/img2.jpg" alt="" class="carousel-img">
            </div>
            <div class="carousel__item" style="--i:3">
                <img src="images/img3.jpg" alt="" class="carousel-img">
            </div>
            <div class="carousel__item" style="--i:4">
                <img src="images/img4.jpg" alt="" class="carousel-img">
            </div>
            <div class="carousel__item" style="--i:5">
                <img src="images/img5.jpg" alt="" class="carousel-img">
            </div>
            <div class="carousel__item" style="--i:6">
                <img src="images/img6.jpg" alt="" class="carousel-img">
            </div>
        </div> -->

        <!-- Manfaat section -->

        <section id="section-manfaat" class="scroll-mt-10  mx-20 py-36 font-semibold">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                <div class="p-6 duration-300 bg-[#2b2b2b]  text-white rounded-md shadow-one hover:bg-white hover:text-black" data-aos="fade-right" data-aos-duration="1000">
                    <div class="py-5 justify-center flex space-x-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p>WAJAH BEBAS MINYAK</p>
                    </div>
                </div>
                <div class="p-6 duration-300 bg-[#2b2b2b]  text-white rounded-md shadow-one hover:bg-white hover:text-black" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    <div class="py-5 justify-center flex space-x-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p>MEMBERSIHKAN HINGGA PORI TERDALAM</p>
                    </div>
                </div>
                <div class="p-6 duration-300 bg-[#2b2b2b]  text-white rounded-md shadow-one hover:bg-white hover:text-black" data-aos="fade-right" data-aos-duration="1000">
                    <div class="py-5 justify-center flex space-x-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p>WAJAH CERAH DAN TERBEBAS DARI EFEK NEGATIF POLUSI DAN KOTORAN</p>
                    </div>
                </div>
                <div class="p-6 duration-300 bg-[#2b2b2b]  text-white rounded-md shadow-one hover:bg-white hover:text-black" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    <div class="py-5 justify-center flex space-x-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p>TERBUKTI AMAN UNTUK KULIT WAJAH DAN TERUJI SECARA DERMATOLOGI</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pemakaian Section -->

        <section id="section-pemakaian" class="scroll-mt-9 mx-20 py-36">
            <!-- Swiper -->
            <div class="swiper mySwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/1.png" class="rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/2.png" class="rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/3.png" class="rounded-lg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/4.png" class="rounded-lg" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Tips Section -->


        <section id="section-tips" class="scroll-mt-24 mx-20 py-16
        ">
            <h3 class="text-center font-inter" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                Berikut Adalah Beberapa Cara Merawat Wajah Agar Tidak Kusam dan Tetap Bersih Cerah
            </h3>
            <div class="swiper mySwiper2" data-aos="flip-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hover:bg-white hover:text-black">Perhatikan Waktu Istirahat</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Rajin Mencuci Wajah</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Rajin Berolahraga</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Konsumsi Makanan Sehat</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Gunakan Masker Alami</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Pakai Pelembap Sesuai Jenis Kulit</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Melakukan Eksfoliasi</div>
                    <div class="swiper-slide hover:bg-white hover:text-black">Memakai Tabir Surya</div>
                </div>
            </div>
        </section>

        <!-- About Section -->



        <footer class="relative pt-3 pb-5">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4 py-5">
                        <img class="mb-4" src="https://images-as.nivea.com/-/media/niveax/icons/logos/favicon.png" width="100px" alt="">
                        <h5 class="text-lg mt-0 mb-2 text-black">
                            Semua berita terbaru, tips perawatan, inspirasi dan kesempatan untuk mendapatkan produk gratis khusus untuk kamu.
                        </h5>
                        <div class="mt-6 lg:mb-0 mb-6">
                            <button class="bg-white text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                <a href="https://www.instagram.com/nivea_id/?hl=en" target="_blank"><i class="fab fa-instagram"></i></button><button class="bg-white text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"></a>
                                <a href="https://web.facebook.com/niveaid/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-square"></i></button><button class="bg-white text-black shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"></a>
                                <a href="https://www.youtube.com/channel/UCulV38unvZugVvdiAHwcGPg" target="_blank"><i class="fab fa-youtube"></i></a>
                            </button>
                        </div>
                    </div>

                    <div class="w-full lg:w-6/12 px-4 py-7">
                        <div class="flex flex-wrap justify-center items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block whitespace-nowrap uppercase text-black text-lg font-semibold mb-2">INFORMASI</span>
                                <ul class="list-unstyled font-inter">
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/syarat-penggunaan" target="_blank">Syarat Penggunaan</a>
                                    </li>
                                    <li>
                                        <a class="text-black font-inter hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/kebijakan-privasi" target="_blank">Kebijakan Privasi</a>
                                    </li>
                                    <li>
                                        <a class="text-black font-inter hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/info-perusahaan" target="_blank">Info Perusahaan</a>
                                    </li>
                                    <li>
                                        <a class="text-black font-inter hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/cookies" target="_blank">Penggunaan Cookies pada NiVEA.co.id</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block whitespace-nowrap uppercase text-black text-lg font-semibold mb-2">TENTANG NIVEA</span>
                                <ul class="list-unstyled font-inter">
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/sejarah-nivea" target="_blank">Sejarah NIVEA</a>
                                    </li>
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/karir" target="_blank">Karir Di Beiersdorf</a>
                                    </li>
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/sustainability" target="_blank">Bagaimana NIVEA Memberikan bantuan pada alam</a>
                                    </li>
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/produk/nivea-men-deep-bright-oil-clear-mud-foam-89997770145680048.html#layer=contact-us" target="_blank">Kami Siap Sedia Membantu</a>
                                    </li>
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/tentang-kami/sitemap" target="_blank">NIVEA Sitemap</a>
                                    </li>
                                    <li>
                                        <a class="text-black hover:text-white font-semibold block pb-2 text-sm" href="https://www.nivea.co.id/saran/faq" target="_blank">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="scroll-to-top " aria-label="Scroll to top"><svg width="28" height="28" fill="# f2772e" viewBox="0 0 256 256">
                        <path d="M222.138,91.475l-89.6-89.6c-2.5-2.5-6.551-2.5-9.051,0l-89.6,89.6c-2.5,2.5-2.5,6.551,0,9.051s6.744,2.5,9.244,0L122,21.85  V249.6c0,3.535,2.466,6.4,6,6.4s6-2.865,6-6.4V21.85l78.881,78.676c1.25,1.25,2.992,1.875,4.629,1.875s3.326-0.625,4.576-1.875  C224.586,98.025,224.638,93.975,222.138,91.475z"></path>
                    </svg>
                </button>
                <hr class="my-6 border-blueGray-300">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-black font-semibold py-1 font-inter">
                            Copyright © <span id="get-current-year">2022</span><a class="text-black hover:text-gray-800" target="_blank"> By
                                <a>me</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            watchSlidesProgress: true,
            slidesPerView: 3,
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper3", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.ripples@0.6.3/dist/jquery.ripples.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#ctn-preloader").addClass("loaded");
                // Once the preloader has finished, the scroll appears
                $("#preloader-body").removeClass("no-scroll-y");

                if ($("#ctn-preloader").hasClass("loaded")) {
                    // It is so that once the preloader is gone, the entire preloader section will removed
                    $("#preloader")
                        .delay(1000)
                        .queue(function() {
                            $(this).remove();

                            // Force Main page to show from the Start(Top) even if user scroll down on preloader

                            // Model 1 - Smooth
                            document
                                .getElementById("page-top")
                                .scrollIntoView({
                                    behavior: "smooth"
                                });
                            // Model 2 - Fast
                            // document.getElementById("page-top").scrollIntoView();
                        });
                }
            }, 3000);
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header")
            header.classList.toggle("sticky", window.scrollY > 0)
        })
    </script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
    </script>
    <script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script type="text/javascript" src="js/script2.js"></script>
    <script src="vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            glare: true,
            reverse: true,
            "max-glare": 0.15
        });
    </script>
</body>

</html>