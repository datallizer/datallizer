<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maqueta Paseo Levana | Levana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <meta name="description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta name="keywords" content="levana, vida levana, predios, lotes, fraccionamiento, desarrollo, inmobiliario, Aguascalientes, terrenos">
    <meta name="author" content="Vida Levana">
    <meta property="og:title" content="Maqueta Paseo Levana | Levana">
    <meta property="og:description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta property="og:image" content="images/ogportada.jpg">
    <meta property="og:url" content="https://vidalevana.com">
    <style>
        body {
            min-height: 100vh;
            overflow: hidden;
        }

        /*.row > div,
.row{
    outline: 1px solid #ededed;
}*/


        #main {
            height: 100vh;
            background-color: #ededed;
            display: flex;
            align-items: center;
        }

        #main .row.d-flex {
            min-height: 65vh;
            align-items: center;
        }

        .col-aside {
            align-self: stretch;
            margin: 3vh 0;
            background-color: #fff;
        }

        th,
        td {
            text-align: center;
        }

        thead {
            text-transform: uppercase;
            font-size: 0.65em;
        }

        #svgcontainer {
            text-align: center;
        }

        #svgmap {
            width: 100%;
            min-width: 765px;
            max-width: 60vw;
            margin: 0 auto;
        }

        #svgmap [id*='lote_'],
        #svgmap .jardin {
            cursor: pointer;
            fill-opacity: 0.65;
            transition: all .25s ease-in;
        }

        #svgmap .jardin .fijo {
            fill-opacity: 1;
        }

        #svgmap [id*='lote_']:hover,
        #svgmap [id*='lote_']:focus,
        #svgmap .jardin:hover,
        #svgmap .jardin:focus {
            fill-opacity: 1;
        }

        [id*='lote2a'],
        [id*='lotecc'] {
            fill-opacity: 0.25;
            stroke: silver !important;
        }

        .cls-2,
        .st10 {
            background-color: #ef7f96;
        }

        .cls-3,
        .st7 {
            background-color: #d2c98f;
        }

        .cls-4,
        .st9 {
            background-color: #dbdbdb;
        }

        .cls-5,
        .st11 {
            background-color: #e2b291;
        }

        .cls-6,
        .st8 {
            background-color: #98bfd5;
        }

        .cls-7,
        .st12 {
            background-color: #F3A5B8;
        }

        .vendido {
            background-color: #ededed !important;
            fill: #ededed !important;
            stroke: silver !important;
            border: 1px solid silver !important;
            cursor: default !important;
        }

        .main-wrapper {
            position: relative;
        }

        /* RENDER modal (fijo) */
        .modal-dialog {
            min-width: 50vw !important;
        }

        .modal-content .modal-header img {
            max-width: 240px;
        }

        #minimap {
            position: absolute;
            width: 200px;
            height: 200px;
            background-image: url('assets/img/levana_map.jpg');
            background-color: transparent;
            background-repeat: no-repeat;
            box-shadow: 1px 1px 6px #333, 0 0 12px rgba(0, 0, 0, 0.25);
            right: 2em;
            bottom: 20%;
            /*2em;*/
            border: 1px solid silver;
            border-radius: 6px;
            background-position: -2185px -86px;
            background-size: 2860px auto;
            transition: all 1.5s ease-in-out;
            transition-delay: 0.5s;

        }

        #minimap.mmap_1 {
            background-position: -2185px -86px;
            background-size: 2860px auto;
        }

        #minimap.mmap_2 {
            background-position: -2305px -66px;
            background-size: 2875px auto;
        }

        #minimap.mmap_3 {
            background-position: -2370px -66px;
            background-size: 2890px auto;
        }

        #minimap.mmap_4 {
            background-position: -2430px -66px;
            background-size: 2890px auto;
        }

        #minimap.mmap_5 {
            background-position: -2480px -66px;
            background-size: 2890px auto;
        }

        #minimap.mmap_6 {
            background-position: -2540px -66px;
            background-size: 2900px auto;
        }

        #minimap.mmap_7 {
            background-position: -2640px -62px;
            background-size: 2950px auto;
        }

        #minimap.mmap_8 {
            background-position: -2680px -60px;
            background-size: 2950px auto;
        }

        #minimap.mmap_9 {
            background-position: -2665px -195px;
            background-size: 2950px auto;
        }

        #minimap.mmap_10 {
            background-position: -2665px -260px;
            background-size: 2950px auto;
        }

        #minimap.mmap_11 {
            background-position: -2670px -305px;
            background-size: 2950px auto;
        }

        #minimap.mmap_12 {
            background-position: -2670px -365px;
            background-size: 2950px auto;
        }

        #minimap.mmap_13 {
            background-position: -2700px -440px;
            background-size: 2980px auto;
        }

        #minimap.mmap_14 {
            background-position: -2700px -480px;
            background-size: 2980px auto;
        }

        #minimap.mmap_15 {
            background-position: -2690px -645px;
            background-size: 2950px auto;
        }

        #minimap.mmap_16 {
            background-position: -2650px -648px;
            background-size: 2950px auto;
        }

        #minimap.mmap_17 {
            background-position: -2590px -652px;
            background-size: 2950px auto;
        }

        #minimap.mmap_18 {
            background-position: -2528px -654px;
            background-size: 2940px auto;
        }

        #minimap.mmap_19 {
            background-position: -2478px -656px;
            background-size: 2940px auto;
        }

        #minimap.mmap_20 {
            background-position: -2420px -659px;
            background-size: 2940px auto;
        }

        #minimap.mmap_21 {
            background-position: -2375px -664px;
            background-size: 2940px auto;
        }

        #minimap.mmap_22 {
            background-position: -2300px -665px;
            background-size: 2930px auto;
        }

        #minimap.mmap_23 {
            background-position: -2245px -665px;
            background-size: 2930px auto;
        }

        #minimap.mmap_24 {
            background-position: -2190px -667px;
            background-size: 2930px auto;
        }

        #minimap.mmap_25 {
            background-position: -2372px -206px;
            background-size: 2860px auto;
        }

        #minimap.mmap_26 {
            background-position: -2372px -246px;
            background-size: 2860px auto;
        }

        #minimap.mmap_27 {
            background-position: -2382px -310px;
            background-size: 2860px auto;
        }

        #minimap.mmap_28 {
            background-position: -2384px -370px;
            background-size: 2860px auto;
        }

        #minimap.mmap_29 {
            background-position: -2384px -425px;
            background-size: 2860px auto;
        }

        #minimap.mmap_30 {
            background-position: -2394px -465px;
            background-size: 2860px auto;
        }

        #minimap.mmap_31 {
            background-position: -2282px -429px;
            background-size: 2840px auto;
        }

        #minimap.mmap_32 {
            background-position: -2232px -435px;
            background-size: 2840px auto;
        }

        #minimap.mmap_33 {
            background-position: -2172px -440px;
            background-size: 2830px auto;
        }

        #minimap.mmap_34 {
            background-position: -2110px -442px;
            background-size: 2830px auto;
        }

        #minimap.mmap_35 {
            background-position: -2105px -300px;
            background-size: 2840px auto;
        }

        #minimap.mmap_35 {
            background-position: -2105px -300px;
            background-size: 2840px auto;
        }

        #minimap.mmap_36 {
            background-position: -2145px -280px;
            background-size: 2820px auto;
        }

        #minimap.mmap_37 {
            background-position: -2200px -270px;
            background-size: 2820px auto;
        }

        #minimap.mmap_38 {
            background-position: -2250px -265px;
            background-size: 2820px auto;
        }

        #minimap.mmap_39 {
            background-position: -1630px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_40 {
            background-position: -1380px -380px;
            background-size: 2560px auto;
        }

        #minimap.mmap_41 {
            background-position: -1360px -420px;
            background-size: 2560px auto;
        }

        #minimap.mmap_42 {
            background-position: -1330px -460px;
            background-size: 2560px auto;
        }

        #minimap.mmap_43 {
            background-position: -1350px -540px;
            background-size: 2600px auto;
        }

        #minimap.mmap_44 {
            background-position: -1295px -580px;
            background-size: 2650px auto;
        }

        #minimap.mmap_45 {
            background-position: -1265px -680px;
            background-size: 2760px auto;
        }

        #minimap.mmap_46 {
            background-position: -1185px -680px;
            background-size: 2720px auto;
        }

        #minimap.mmap_47 {
            background-position: -1215px -585px;
            background-size: 2700px auto;
        }

        #minimap.mmap_48 {
            background-position: -1215px -535px;
            background-size: 2700px auto;
        }

        #minimap.mmap_49 {
            background-position: -1225px -505px;
            background-size: 2680px auto;
        }

        #minimap.mmap_50 {
            background-position: -1210px -435px;
            background-size: 2620px auto;
        }

        #minimap.mmap_51 {
            background-position: -1172px -380px;
            background-size: 2520px auto;
        }

        #minimap.mmap_52 {
            background-position: -1250px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_53 {
            background-position: -1300px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_54 {
            background-position: -1360px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_55 {
            background-position: -1410px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_56 {
            background-position: -1465px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_57 {
            background-position: -1520px -312px;
            background-size: 2820px auto;
        }

        #minimap.mmap_58 {
            background-position: -1560px -305px;
            background-size: 2800px auto;
        }

        #minimap.mmap_59 {
            background-position: -1020px -370px;
            background-size: 2650px auto;
        }

        #minimap.mmap_60 {
            background-position: -1020px -395px;
            background-size: 2650px auto;
        }

        #minimap.mmap_61 {
            background-position: -1014px -460px;
            background-size: 2650px auto;
        }

        #minimap.mmap_62 {
            background-position: -1014px -505px;
            background-size: 2650px auto;
        }

        #minimap.mmap_63 {
            background-position: -1014px -555px;
            background-size: 2650px auto;
        }

        #minimap.mmap_64 {
            background-position: -1020px -615px;
            background-size: 2680px auto;
        }

        #minimap.mmap_65 {
            background-position: -1020px -660px;
            background-size: 2680px auto;
        }

        #minimap.mmap_66 {
            background-position: -1020px -700px;
            background-size: 2680px auto;
        }

        #minimap.mmap_67 {
            background-position: -1105px -850px;
            background-size: 2820px auto;
        }

        #minimap.mmap_68 {
            background-position: -1050px -860px;
            background-size: 2820px auto;
        }

        #minimap.mmap_69 {
            background-position: -1038px -940px;
            background-size: 2980px auto;
        }

        #minimap.mmap_70 {
            background-position: -985px -950px;
            background-size: 2980px auto;
        }

        #minimap.mmap_71 {
            background-position: -910px -775px;
            background-size: 2720px auto;
        }

        #minimap.mmap_72 {
            background-position: -910px -745px;
            background-size: 2720px auto;
        }

        #minimap.mmap_73 {
            background-position: -910px -690px;
            background-size: 2720px auto;
        }

        #minimap.mmap_74 {
            background-position: -910px -630px;
            background-size: 2720px auto;
        }

        #minimap.mmap_75 {
            background-position: -910px -580px;
            background-size: 2720px auto;
        }

        #minimap.mmap_76 {
            background-position: -915px -530px;
            background-size: 2720px auto;
        }

        #minimap.mmap_77 {
            background-position: -915px -480px;
            background-size: 2720px auto;
        }

        #minimap.mmap_78 {
            background-position: -945px -435px;
            background-size: 2760px auto;
        }

        #minimap.mmap_79 {
            background-position: -942px -395px;
            background-size: 2760px auto;
        }

        #minimap.mmap_80 {
            background-position: -965px -318px;
            background-size: 2920px auto;
        }

        #minimap.mmap_81 {
            background-position: -1015px -318px;
            background-size: 2920px auto;
        }

        #minimap.mmap_82 {
            background-position: -1078px -318px;
            background-size: 2920px auto;
        }

        #minimap.mmap_83 {
            background-position: -1130px -318px;
            background-size: 2920px auto;
        }

        #minimap.mmap_84 {
            background-position: -1185px -318px;
            background-size: 2920px auto;
        }

        #minimap.mmap_88 {
            background-position: -1515px -1050px;
            background-size: 3080px auto;
        }

        #minimap.mmap_89 {
            background-position: -1480px -1110px;
            background-size: 3090px auto;
        }

        #minimap.mmap_90 {
            background-position: -1420px -1150px;
            background-size: 3085px auto;
        }

        #minimap.mmap_91 {
            background-position: -1340px -1150px;
            background-size: 3025px auto;
        }

        #minimap.mmap_92 {
            background-position: -1240px -1150px;
            background-size: 2900px auto;
        }

        #minimap.mmap_93 {
            background-position: -1120px -1110px;
            background-size: 2760px auto;
        }

        #minimap.mmap_94 {
            background-position: -1060px -1120px;
            background-size: 2760px auto;
        }

        #minimap.mmap_95 {
            background-position: -1010px -1128px;
            background-size: 2760px auto;
        }

        #minimap.mmap_96 {
            background-position: -965px -1158px;
            background-size: 2800px auto;
        }

        #minimap.mmap_97 {
            background-position: -920px -1178px;
            background-size: 2820px auto;
        }

        #minimap.mmap_98 {
            background-position: -870px -1185px;
            background-size: 2820px auto;
        }

        #minimap.mmap_99 {
            background-position: -820px -1195px;
            background-size: 2820px auto;
        }

        #minimap.mmap_100 {
            background-position: -770px -1205px;
            background-size: 2820px auto;
        }

        #minimap.mmap_101 {
            background-position: -700px -1195px;
            background-size: 2780px auto;
        }

        #minimap.mmap_103 {
            background-position: -752px -1415px;
            background-size: 2880px auto;
        }

        #minimap.mmap_104 {
            background-position: -820px -1410px;
            background-size: 2880px auto;
        }

        #minimap.mmap_105 {
            background-position: -870px -1400px;
            background-size: 2880px auto;
        }

        #minimap.mmap_106 {
            background-position: -925px -1395px;
            background-size: 2880px auto;
        }

        #minimap.mmap_107 {
            background-position: -980px -1395px;
            background-size: 2880px auto;
        }

        #minimap.mmap_108 {
            background-position: -1030px -1385px;
            background-size: 2880px auto;
        }

        #minimap.mmap_109 {
            background-position: -1080px -1387px;
            background-size: 2880px auto;
        }

        #minimap.mmap_110 {
            background-position: -1145px -1390px;
            background-size: 2900px auto;
        }

        #minimap.mmap_111 {
            background-position: -1185px -1375px;
            background-size: 2880px auto;
        }

        #minimap.mmap_112 {
            background-position: -1225px -1335px;
            background-size: 2820px auto;
        }

        #minimap.mmap_113 {
            background-position: -1265px -1300px;
            background-size: 2780px auto;
        }

        #minimap.mmap_114 {
            background-position: -1300px -1240px;
            background-size: 2720px auto;
        }

        #minimap.mmap_115 {
            background-position: -1350px -1195px;
            background-size: 2780px auto;
        }

        #minimap.mmap_116 {
            background-position: -1415px -1150px;
            background-size: 2820px auto;
        }

        #minimap.mmap_117 {
            background-position: -1510px -1122px;
            background-size: 2920px auto;
        }

        #controls {
            position: relative;
            bottom: 10px;
            left: 10px;
        }

        #controls .btn {
            width: 34px;
            height: 32px;
            background-color: #fff;
            font-size: 1.5em;
            line-height: 0.5;
            text-align: center;
        }

        #arrowCheck {
            position: absolute;
            top: -12px;
            right: -12px;
            border-radius: 50%;
            padding: 1px;
            margin: 0;
            line-height: 0;
            overflow: hidden;
            box-shadow: 0 1px 1px #000, 0 2px 3px #333, 0 3px 5px rgba(0, 0, 0, 0.35);
        }

        @-webkit-keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .bx-tada {
            -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
        }
    </style>
</head>

<body>

    <div id="main" class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-11" style="z-index: 999;">
                <h1 style="margin-left:-40px;margin-top:35px;margin-bottom: -80px;">PASEO LEVANA <br><a href="levanaoriente.php" class="btn btn-sm btn-outline-primary" style="margin-bottom: 10px;">
                    Ir a Vía Levana
                </a></h1>
                
            </div>
            <div class="col-9 p-4 main-wrapper">
                <div id="minimap" class="mini">
                    <div></div>
                </div>
                <div id="svgcontainer">

                    <svg id="svgmap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 765 520"> <!-- width="765" height="520" -->
                        <style type="text/css">
                            .st0 {
                                fill: none;
                            }

                            .st1 {
                                fill: #999999;
                            }

                            .st2 {
                                fill: #999999;
                                stroke: #5B5B5B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st3 {
                                fill: #2F7F31;
                                stroke: #1D1D1B;
                                stroke-width: 0.1;
                                stroke-miterlimit: 10;
                            }

                            .st4 {
                                fill: #8AA17F;
                            }

                            .st5 {
                                fill: #931432;
                                stroke: #1D1D1B;
                                stroke-width: 0.1;
                                stroke-miterlimit: 10;
                            }

                            .st6 {
                                fill: #A3DAF1;
                            }

                            .st7 {
                                fill: #D2C98F;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st8 {
                                fill: #98BFD5;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st9 {
                                fill: #DBDBDB;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st10 {
                                fill: #EF7F96;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st11 {
                                fill: #E2B291;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }

                            .st12 {
                                fill: #F3A5B8;
                                stroke: #1D1D1B;
                                stroke-width: 0.25;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <g id="trazos2">
                            <path class="st0" d="M2.2,151.2L3,165.9c5.6,4.5,11.6,7.4,17.8,8.9c-11.9-7.9-11.5-24.6,1.1-31.3C14.7,144.3,8.2,146.7,2.2,151.2" />
                            <path class="st0" d="M29.6,148.2c5.8,0.9,9.5,4.2,10.4,10.6c-0.1,5.3-2.1,8.4-5.2,10.2c-4.2,2.4-8.3,2.1-12.2-0.5
                         c-4.3-3.4-4.7-7.7-4-12.4C20.2,151.5,23.7,148.6,29.6,148.2L29.6,148.2z" />
                            <path class="st1" d="M3.1,170.1l-0.2-4.6c7.4,6.6,16.3,10.2,27.2,9.8c3.8-0.4,7.1-1.8,9.9-4.5l3.6-4.9c2-2.7,4.7-3.7,7.7-4.1
                         l60.5-4.4c24.4-2.4,49.7-2.2,75.6,0l43.5,3.2c1,0.1,1.3,0.8,1.4,1.4l-1,13.1c-0.3,1.9-0.7,2.4-1.6,3.2l-6.2,5.7
                         c-0.6,0.8-0.9,1.5-0.9,2.1l0.3,31.7c-0.1,1.6,0.3,2.9,1.4,3.6l4.9,4.5c0.7,0.6,1.1,1.2,1.1,2l0.7,15.4c0.1,1.9-0.3,2.2-1.5,2.4
                         l-64.4-3.1c-25.4-1.3-48-1.2-67.1,0.5l-44.7,4.5c-1.5,0.4-2.6-0.2-3.5-1.4c-1.9-2.9-4.9-4.9-9-6c-12.3-1.4-22.7,0.7-30.4,7.4
                         l-0.5-3.7c4.1-2.9,9-5.1,14.9-6.6c7.4-1.2,14.3-1.4,20.2,0.9c2.2,1,4.2,2.5,6.2,4.6c0.8,1.1,1.9,1.6,3.2,1.6l30.6-3.3
                         c19.7-2.1,41.8-3.2,69.1-2l53.7,2.6l13.3,0.7l-0.9-79.4l-32.1-2.6c-11.2-0.9-22.9-1.4-34.8-1.5c-17.8-0.2-36.8,0.9-56.7,2.8
                         l-44.3,3.2c-2.8,0.3-4.9,1.3-6.4,3.4c-1.4,2.5-3,4.4-4.9,5.9c-3.3,2.9-7.5,4.4-12.7,4.3c-6.3,0-12.4-1.3-18.1-4.2
                         C7.4,173.4,5.5,171.8,3.1,170.1L3.1,170.1z" />
                            <path class="st2" d="M30.1,240.2c-13.9,7.9-11.6,25-1.1,31.4c-5.9-1.4-11.6-4-17-8.4l-1.6-15.2C18.8,241,30.1,240.2,30.1,240.2z" />
                            <path id="rotonda" class="st1" d="M38,244.8c6.4,0.8,9.6,5.3,10.3,9.8c0.4,4.4-1.3,8-4.9,10.8c-4.4,2.5-8.7,2.6-13.3-1.1
                         c-3.4-2.9-4.7-8.6-2.4-13.4C29.9,247,33.1,244.8,38,244.8z" />
                            <path class="st3" d="M47.3,256.3l-0.3,0.6c-0.3,0.5-0.4,1.1-0.3,1.6l0.1,0.7c0.2,1.2-0.5,2.3-1.5,2.8l-0.6,0.3
                         c-0.5,0.2-0.9,0.6-1.2,1.2l-0.3,0.6c-0.6,1-1.7,1.6-2.9,1.4l-0.7-0.1c-0.6-0.1-1.1,0-1.7,0.2l-0.6,0.3c-1.1,0.5-2.3,0.3-3.1-0.6
                         l-0.5-0.5c-0.4-0.4-0.9-0.7-1.5-0.8l-0.7-0.1c-1.2-0.2-2-1.2-2.2-2.3l-0.1-0.7c-0.1-0.6-0.3-1.1-0.7-1.5l-0.5-0.5
                         c-0.8-0.9-1-2.1-0.4-3.2l0.3-0.6c0.3-0.5,0.4-1.1,0.3-1.6l-0.1-0.7c-0.2-1.2,0.5-2.3,1.5-2.8l0.6-0.3c0.5-0.2,0.9-0.6,1.2-1.2
                         l0.3-0.6c0.6-1,1.7-1.6,2.9-1.4l0.7,0.1c0.6,0.1,1.1,0,1.7-0.2l0.6-0.3c1.1-0.5,2.3-0.3,3.1,0.6l0.5,0.5c0.4,0.4,0.9,0.7,1.5,0.8
                         l0.7,0.1c1.2,0.2,2,1.2,2.2,2.3l0.1,0.7c0.1,0.6,0.3,1.1,0.7,1.5l0.5,0.5C47.7,254,47.9,255.3,47.3,256.3z" />
                            <path id="rotonda_00000176037277373514013600000008496203474052303779_" class="st1" d="M29.4,148.4c6.4,0.8,9.6,5.3,10.3,9.8
                         c0.4,4.4-1.3,8-4.9,10.8c-4.4,2.5-8.7,2.6-13.3-1.1c-3.4-2.9-4.7-8.6-2.4-13.4C21.3,150.5,24.5,148.4,29.4,148.4z" />
                            <path class="st3" d="M37.4,160l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C37.8,158,37.9,159.1,37.4,160z" />
                            <path class="st1" d="M12.4,267.4l-0.3-4.4c6.7,5.5,14,8.4,22,8.9c8.5,0.5,13.9-2.6,16.9-8.1c1.2-1.5,1.9-2.8,3.6-3.5l26.1-2.7
                         c15.6-1.9,32.9-2.8,51.2-3.1c14,0,32.1,0.6,51.6,1.8l47.2,2.3c0.9,0,1.5,0.5,1.8,1.6l2.3,33.6c0.1,1.1-0.5,1.6-1.6,1.8L212,298
                         c-3.9,0.4-8,1.6-12.7,4.9L170.7,320c-5.6,3.5-13.9,4.4-21.5,6.1c-12.8,3.2-28.2,5.1-39.7,7.3c-13,2.4-24.3,5.2-34.6,8.4l-10.9,3.4
                         c-2.3,1.4-4.2,0.9-6.9-1.1c-6-4-13.6-3.6-21.9-1.6c-5.7,1.4-10.2,4.1-14.4,7.4l-0.5-4c6.5-4.6,13.8-7.5,22.3-7.8
                         c6-0.7,11.4,0.8,16.5,3.4c1.7,1.2,3.4,1.6,4.9,0.6c12.9-4.5,26.4-8.2,40.6-11l20.6-3.4l7.4-1.3l3.2-0.6l22.4-4.8
                         c6.1-1,10.9-3.9,16.5-7.1l26.2-15.6c2.1-1.4,2.9-1.7,5.7-2.5c3.2-0.7,6.7-1.2,10.4-1.5l14.7-1.5l-2.4-30.9l-42.9-2
                         c-17.5-1-35.1-1.8-44.1-1.9c-21.2-0.5-41,0.7-61.6,3l-19.7,2l-3.8,0.4c-1.3,0-2.5,0.6-3.5,2.2c-2.7,4.6-6.2,7.7-13.1,9.4
                         c-6,0.8-12.2,0.2-19-2.5C17.3,270.8,14.4,268.5,12.4,267.4L12.4,267.4z" />
                            <path class="st2" d="M40.1,372.6c-15.5-11.7-6.8-27.7,1.1-31.3c-0.8-0.6-16.5,3.4-20.3,8.5l1.2,13.9
                         C27.8,368.3,33.8,371.2,40.1,372.6L40.1,372.6z" />
                            <path class="st1" d="M47.8,346.2c5.9,0,8.9,2.5,10.8,6.7c1.3,4.5,1.1,8.5-1.7,11.6c-3.4,3.7-7,5-13.2,2.8c-5.1-3.1-6.6-7-5.9-12.7
                         C39.2,350.1,42.3,346.6,47.8,346.2L47.8,346.2z" />
                            <path class="st3" d="M183,418l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C183.3,416,183.5,417.1,183,418z" />
                            <path id="rotonda_00000038384950901459528860000005741675275599195067_" class="st1" d="M175,406.5c6.4,0.8,9.6,5.3,10.3,9.8
                         c0.4,4.4-1.3,8-4.9,10.8c-4.4,2.5-8.7,2.6-13.3-1.1c-3.4-2.9-4.7-8.6-2.4-13.4C166.9,408.7,170.1,406.5,175,406.5z" />
                            <path class="st3" d="M183,418l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C183.3,416,183.5,417.1,183,418z" />
                            <path class="st1" d="M0.9,65.6v4.1c5.3,4.4,11.9,7.6,20.4,9.1c7.9,1,12.2,0.1,17.9-3.3c1.5-1.1,4.1-4,5.5-6.4c1.4-2,3.5-3,6.2-3
                         l46.8-3.2c10.5-0.9,20.9-1.3,31.3-1.3c8.3-0.2,18.9,0,31.3,0.6l24.2,0.6l38.4,0.9l1.1,80.7l-15.8-1.3l-15.6-1.3
                         c-13.1-1.1-27-1.6-41.5-1.8c-16.7-0.1-34.9,0.9-54,2.7l-48.7,3.7c-1.9,0.9-4.2,0.5-7.2-1.6c-4.8-4.2-11.4-5-18.9-4.6
                         c-8.6,0.9-15.2,3.5-20.4,7.2l0.3,3.7c5.9-4.4,13-7.2,21.8-7.8c3.7-0.2,7.2,0.1,10.3,1.1c2.3,0.8,4.4,1.9,6.1,3.8
                         c2.8,1.6,5.5,2.3,7.9,1.4l38.6-2.9c25.7-2.5,48.8-3.7,69.2-3.4c16.8,0.3,34.8,1.4,53.7,3.1l22.7,1.8c0.9-0.3,1.4-0.8,1.6-1.5l1.2-9
                         l-9.3-8.5c-0.3-0.4-0.4-0.7-0.4-1.1l0.1-34.8c0.1-0.8,0.5-1.3,1.1-1.5l6.3-0.6c0.8-0.2,1.3-0.7,1.5-1.5l-2.5-27.4
                         c-0.1-0.9-0.6-1.4-1.5-1.5l-78.1-2.1c-14-0.5-28.9-0.3-44.2,0.4l-5.9,0.3l-34.7,2.3l-18.5,1.2c-3.2,0.6-5.7,2-7.3,4.6
                         c-3.5,6.2-8.9,8.9-16.1,8.5c-6.5-0.2-12.3-1.8-17.4-4.8C5.6,69.7,3.4,67.8,0.9,65.6L0.9,65.6z" />
                            <path class="st4" d="M225.4,65.9c0.1-0.8,0.3-1.4,1.3-1.6h2.2c0.6,0.3,1,0.7,1.1,1.3l1.5,21.2c0,1-0.2,1.7-0.8,2l-4.3,0.5
                         c-0.7,0-1.4-0.5-1.6-1.5L225.4,65.9L225.4,65.9z" />
                            <path class="st4" d="M231.8,142.3c0,1-0.4,1.6-1.4,1.6h-4c-0.8,0-1.2-0.6-1.2-1.7l0.5-6.8c0.3-0.6,0.7-0.8,1.5-1l3.3,2.9
                         L231.8,142.3L231.8,142.3z" />
                            <path class="st1" d="M16,41.5c-5.7,1.1-10.8,3.5-15.4,6.7v4c7.8-6.2,16.9-9.1,27.7-8c4.1,0.3,7.9,1.5,11.1,4.8
                         c1.8,1,3.6,1.5,5.5,1.6l49.4-3.2c21.9-2.3,47.6-2,74.7-0.8l41.3,1c17.8,0.5,35.3,0.5,52.5,0l123.9-1.8L445,45
                         c11.4-0.2,17.2,1.9,24.6,6.4l47.7,25.1l14,7.4c8.6,5.3,17.3,9.9,26.2,13.1l3.5,1.1c5.8,1.8,10-0.6,13.3-5.4
                         c3-6.2,7.3-12.5,12.4-18.7c0.5-0.6,0.3-1.5-0.1-2l-1.3-1.1c-5.3,6.3-10,12.6-13.2,18.9l-1.7,2.6c-2.4,2.5-5.3,3.4-8.5,2.7
                         c-7.5-2.6-14.2-5.6-20.1-9l-36.7-19.7l-35.6-18.9c-5.2-2.8-11.4-4.8-18.8-6L398,42.3l-100.3,1.5l-30.7,0.5
                         c-24.6,0.4-52.2,0.4-82.1-0.8l-31.8-0.8l-15.4-0.5l-15.9,0.3l-31.2,1.6l-35.5,2.4l-8.6,0.7c0,0-3,0.5-6.7-1.9s-5.1-3.3-8.6-3.9
                         c-3.5-0.6-6.7-0.9-8.6-0.7S16,41.5,16,41.5z" />
                            <path class="st2" d="M20.7,44C8.4,50.8,7.2,67.8,19.8,75.4C13,74.1,6.7,71,0.9,65.6L0.6,52.2C5.9,47.7,13,44.8,20.7,44z" />
                            <path class="st1" d="M17.3,56.8c2.3-8.4,12.2-10.1,17.7-5.5c5,4.5,5.5,10.7,1.4,15.8c-3.7,4.7-11.3,5.7-15.7,1.2
                         C16.8,64.7,16.5,61.2,17.3,56.8z" />
                            <path class="st2" d="M21.8,143.5c-11.8,7-13.3,23.4-1.1,31.3c-7-1.8-13-4.7-17.8-9.3l-0.7-14.4C8.1,146.7,14.7,144.5,21.8,143.5
                         L21.8,143.5z" />
                            <g>
                                <polygon class="st4" points="115.7,451.2 115.7,451.2 115.7,451.2 		" />
                                <path class="st4" d="M192.1,424.6c-1.9,5-4.8,9.1-9.6,11.6c-6.7,2.7-9.1,1.3-17.1,0.3c0,0-11.3,0.3-14.2-12.5
                             c-1.8-8.3,3.5-15.5,6.9-20.3c3.3-2.3,6.6-5,9.7-6c4.6-1.1,7.4-0.5,14.1,1.3h6.5l-8-27.6l-30.7,27l-30.9,9.5l-6.2,3.6l2.9,39.8
                             l78.3-6.4L192.1,424.6z" />
                            </g>
                            <path class="st4" d="M390.9,231.6c-2.6,1.3-2,5.2,0.8,5.8c3.2,0.6,6.6,1.4,9.1,2.4c1.5,0.6,3,1.3,4.4,2.1c2.9,1.6,6.4-0.7,6-4
                         c-0.2-1.6-0.3-3.3-0.3-5c0-2.3,0.1-4.8,0.2-7c0.2-3.5-3.9-5.6-6.6-3.3c-2.5,2.1-5.1,4.2-6.6,5.3
                         C396.3,228.8,393.6,230.2,390.9,231.6z" />
                            <polygon class="st4" points="541.1,128.1 514.2,138.6 426.8,258.8 426.8,300 423.3,314.1 438.2,328.9 444.2,321.8 450.4,290.6 
                         484.5,237.1 505.1,227 529,227 540.1,239.6 536,228.5 533.9,173.3 	" />
                            <path id="rotonda_00000054242762234690827840000009778504755050132097_" class="st1" d="M175,406.5c6.4,0.8,9.6,5.3,10.3,9.8
                         c0.4,4.4-1.3,8-4.9,10.8c-4.4,2.5-8.7,2.6-13.3-1.1c-3.4-2.9-4.7-8.6-2.4-13.4C166.9,408.7,170.1,406.5,175,406.5z" />
                            <path class="st3" d="M183,418l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C183.3,416,183.5,417.1,183,418z" />
                            <path class="st5" d="M58.3,357.6l-0.3,0.6c-0.3,0.5-0.4,1.1-0.3,1.6l0.1,0.7c0.1,1.2-0.5,2.3-1.5,2.8l-0.6,0.3
                         c-0.5,0.2-0.9,0.6-1.2,1.1l-0.3,0.6c-0.6,1-1.7,1.6-2.9,1.4l-0.7-0.1c-0.6-0.1-1.1,0-1.6,0.2l-0.6,0.3c-1.1,0.5-2.3,0.3-3.1-0.6
                         l-0.5-0.5c-0.4-0.4-0.9-0.7-1.5-0.8l-0.7-0.1c-1.1-0.2-2-1.1-2.2-2.3l-0.1-0.7c-0.1-0.6-0.3-1.1-0.7-1.5l-0.5-0.5
                         c-0.8-0.8-1-2.1-0.4-3.1l0.3-0.6c0.3-0.5,0.4-1.1,0.3-1.6l-0.1-0.7c-0.1-1.2,0.5-2.3,1.5-2.8l0.6-0.3c0.5-0.2,0.9-0.6,1.2-1.1
                         l0.3-0.6c0.6-1,1.7-1.6,2.9-1.4l0.7,0.1c0.6,0.1,1.1,0,1.6-0.2l0.6-0.3c1.1-0.5,2.3-0.3,3.1,0.6l0.5,0.5c0.4,0.4,0.9,0.7,1.5,0.8
                         l0.7,0.1c1.1,0.2,2,1.1,2.2,2.3l0.1,0.7c0.1,0.6,0.3,1.1,0.7,1.5l0.5,0.5C58.7,355.4,58.8,356.6,58.3,357.6z" />
                            <path class="st3" d="M411.7,232.2l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         L408,239c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C412,230.2,412.2,231.3,411.7,232.2z" />
                            <path class="st1" d="M22.6,368.1l-0.4-4.3c6.5,5.5,14.1,8.6,22.7,9.6c11.8,1,15-5,17.1-7.8c0,0,1.3-2.5,1.6-3.9
                         c0.8-2.1,2.3-3.4,4.4-4.1c10.3-3.6,22.5-6.9,35.9-10c9-1.9,18.1-3.5,27.4-4.6l33.3-7.1c5.8-1.4,11.6-4.2,18.4-8.6l19.7-11.4
                         l5.7-3.5c0.5-0.6,1.8-1.1,3.4-1.3l18.5-2.1l39.2-4.1c12.9-1.1,24.4-3.2,33.4-7.2c13.7-5.3,26-12.8,36.7-22.7
                         c5.5-5.2,10.5-10.8,14.9-16.8l4.3-6.1c1.5-2.1,3.4-4,6-5.4c1.6-0.9,3.3-1.2,5.3-0.8l17,2.5c7.1,0.8,14,3.2,20.6,6.9
                         c2.6,1.4,4.1,4.4,4.7,8.8l0.8,27.3c0.1,7.3-2,12.8-6,16.6l-24.7,28.3l-18.7,21.2c-5.3,5.5-10.9,10.1-17,13.4
                         c-7.3,4.4-15.3,6.7-24,7.3l-55.5,4.9l-19.5,1.7c-12,2.1-22.9,4.4-32.1,6.9c-7.6,2.3-14.9,5.2-22.1,8.5c-4.9,2.5-9.9,3.3-15.1,1.1
                         c-3.9-1.6-7.8-1.7-11.6-0.3c-5.7,2.9-10.5,6.3-14.3,10.5l-8.4,11c-0.5,0.9-0.9,1.7-0.7,2.7l0.4,1.4c0.2,1,1.2,1.9,1.9,2.3
                         c5,3.1,10.5,5.3,16.6,6.3c8.9,0.9,14.7-0.4,19.2-2.7c3.1-2.3,5.3-5.3,7-8.8c0.9-3.3,2.3-6.2,4.6-8.5c1.2-1.6,16.4-8.7,23.3-10.3
                         l20.7-5.2l11.7-2l21.6-2.1l45.1-4l8.2-0.7c8.9-1,17-3,24-6.4c6.6-2.8,13-7.2,19.1-12.5l20-21.9l22.5-25.5l10.2-11.9
                         c4.8-6.6,6.3-15.7,6-26l-1.3-60.5c7.9-13.4,18-27.8,30-44.7l10.2-14.3l11.6-21.1l5.8-10.2c0.5-1.1,1.1-1.5,2.7-0.6l0.9,0.8
                         l-17.3,30.8l-7.7,11.3c-13.3,18.4-25.2,35.6-33.6,49.6l1.8,59.5c0.1,6.3-0.2,12-1.5,16.7c-1.5,4.6-3.4,8.5-5.9,11.4l-14.3,16.5
                         l-33.8,38.3c-9.5,11.1-21.9,16.6-34.7,21.1c-7.5,2-15,3.2-22.7,3.4l-33,2.9l-32.2,2.9c-12.8,1.9-24.7,4.6-35.7,8.1
                         c-6.5,2.3-12.2,4.8-17.4,7.3c-2.8,1.3-4.6,4-5.3,8.5c-2.1,5.9-5.8,10.1-11.4,12.5c-8.8,2.7-17.6,2.4-26.4-0.4
                         c-4.8-1.8-9.2-4.1-13.1-6.8c-1.6-1.2-2-3.1-1.3-5.7c3.7-7.5,9-14.2,16.6-20.1c3.9-3.2,7.9-5.5,12-6.5c4.4-0.8,8.7-0.2,12.9,1.5
                         c4.3,0.8,7.9,0.2,10.9-1.6c6.6-3.2,13.2-5.8,19.9-7.6c7.9-2.6,16.4-5,26.1-6.6c5.9-1,10.3-1.5,18.8-2.4l44.2-4.1l20.9-1.8
                         c10.4-1.1,20.1-4.4,29-10.4c6.1-5.2,11.4-10.2,15.5-15.1l29.1-33.4l10.8-12.3c3-3.5,3.8-9.6,3.3-17.6l-0.7-21.1
                         c-0.1-4.9-2-7-7.2-9.2c-5.6-2.6-12.1-4.3-19.6-5l-12.7-1.9c-2.4-0.6-4.9,1-7.5,3.6c-6.2,9.7-13.3,18.2-21.4,25.5
                         c-9.4,8.1-19.2,14.7-29.6,19.6c-12.2,5.5-25.2,9.1-39.2,10.2l-54.6,5.5c-3.2,0.3-5.7,0.7-6.7,1.2l-29.2,17.5
                         c-7.7,4.2-13.4,6.5-22,7.9l-27.7,6c-12.2,1.4-23.7,3.5-34.6,6.4c-7.8,1.8-15.2,3.9-22.2,6.2l-6.7,2.2c-1.2,0.4-2,1.6-2.4,3.4
                         c-2.3,5.4-6.9,11.2-15.5,12.2c-6.6,0.5-13.5-0.9-20.4-3.8C27.2,370.9,24.7,369.4,22.6,368.1L22.6,368.1z" />
                            <path class="st1" d="M531.8,470.8l13.7-1.2c5.6-4.3,8.6-13.1,10.2-24.5v-28.9c-0.3-9.3,0.8-19.4,3.2-30l3-18c1.9-8.1,2.6-18-1-34.5
                         c-0.3-2.3-2.5-26.1-4.7-42.2c-0.3-8.9-0.5-16.1-0.7-21.5c-1.4-9.2-4.2-17.3-8.5-24.4c-5-8.2-7.7-15.2-9.5-25.8l-0.7-37.6l0.5-7.8
                         l4-46.2c0.3-2.2-0.3-4.5-3.1-5.6l-10.1-8.4c-3.8-3.2-7.4-5.1-13.8-8.7c-6.8-4.4-12.8-3.5-17.7,4.3l0.3,2l1.1,2.7
                         c2.9-8.2,8.5-9.9,13.4-7.1l9.8,5.5l15.6,12.4c1.3,1,1.8,2.5,1.2,4.6l-2.6,34.2l-2.3,17l1.2,35.7c0.6,8.2,2.4,15.9,6,22.8
                         c6.5,10.2,10.9,20.6,12.1,31.4c-0.7,11.9,0.5,25,3,38.9l3.7,31.9c1.4,10.6,1.2,20.3-0.9,29.1c-3.2,16.5-5.3,32-5.6,44.3l-0.5,30.1
                         C551,456.9,544.3,465.4,531.8,470.8L531.8,470.8z" />
                            <path class="st4" d="M509.9,122.6l-2.6-16.3c-4.4,0-7.6,2.7-9.5,8.2l2.6,6.2c1.8,3.9,1.3,7.4-0.1,10.4l-9.7,12.3l-5.6-6.2
                         L465.7,171l3.3,0.5l28.8-35.9L509.9,122.6z" />
                            <path class="st6" d="M411.8,481l-42.2,3.5l-2.1-31l14-29.6l22.3-21.1l21.9-59l18.6-22l6.1-31.2c11-18.4,22.3-36.2,34.2-53.4V204
                         l12.8-28v-3l-11.7,7.2l-50.5,80.2l-6.9,8.6l-1.2-41.1c11.4-18.2,24.4-37.2,38.7-57l2.4-0.7l27.5-32.4l14.4-15.2l-2.6-16.3
                         c1.5-0.8,4.5,1.8,8.9,3.8l4.7,2.8l14.9,11.9c2.1,1.1,2.6,2.9,1.9,5.1l-1.9,3.5l-2.1,20c-7.8,21-18.6,40.6-26.6,58l-3.9,30.6
                         l-13.6,27.9l-2.6,9.3l-6,23.5l-14.9,32.2l-21.5,19.7l-3.3,30.5l-18.5,31.1l-14.6,11.4L411.8,481L411.8,481z" />
                            <path class="st6" d="M30.3,444.8l29.1-14.4l32-6.7l27.6-15.9l30.9-9.5l27.6-23.8l27.9-29L217,347l31.9-3.5l30.2-12.4l15.9-3.2
                         l13.4-2.9l2.2-0.7l17.9-8.1l9.8-4.4l8.8-2.6l7.4-2.1l3.9-1.2l4.9-1.1l8.8-2.8l10.4-16.1l0.4-9.8c10,0.9,19.2,1.5,26.7,1.1
                         l-0.6-14.3c-0.4-3.5-3.2-5.9-7.9-7.6c-6.7-2.9-13.1-4.2-21.5-5l-4.5-0.7l-5.4-0.8c-1.3-0.3-2.7-0.1-4.1,0.8
                         c-1.4,0.9-2.5,1.8-3.3,2.8c-11.4,17.3-25.3,31.4-42.9,40.9c-14.5,8.2-30.6,13.1-48.4,14.6c-24.7,2.4-53,4.9-60.1,6.6l-18.3,11
                         l-11.9,10.7l-2.9,3.6l-16.4,20l-23.9,16l-25.7,8.7l-33.2,6.1l-25.8,15.9l-25.9,1.9L30.3,444.8L30.3,444.8z" />
                            <path class="st3" d="M494.1,145.1l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4l-0.1-0.6c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C494.4,143.1,494.6,144.2,494.1,145.1z" />
                            <path class="st1" d="M601.5,465c-10.7-1.9-14.2-7.4-16.5-15.5v-32.6v-4l1.3-9.1c0.5-9.1,2.9-21.6,5.8-35c1.8-8.4,1.4-17.9-0.3-28.1
                         l-7.2-61.4c-1.8-17.8,6.5-22.8,25.1-26.7l63-3.1l90.8-6v-2.9c-58.5,3.9-113,7.2-153.6,8.7c-18.6,2.6-30.2,10.7-28.4,29.4
                         c0.8,14.1,4.3,39.9,7.8,67c0.8,6.5,0.9,12.6,0.3,18.2l-4.7,25.6c-1.4,5.9-2.2,15.1-2.9,25.1l-0.5,34.4c0.8,7.9,3,14.7,7.4,17
                         L601.5,465L601.5,465z" />
                            <path class="st4" d="M603.4,222.4l-24.9,1.3c-1.2,0.2-2-0.2-2.2-1.6l-1-43c0-1.3,0.7-1.9,2.3-1.9l23-1.2L603.4,222.4" />
                            <path class="st1" d="M709.6,170.3l-72.1,4.1l-37.3,1.7l-0.8,0.1c-5.3,0.4-9.6,1.7-10.4,1.9c-6,1-10.6,5.9-11.2,12.1l-0.2,2
                         l0.5,19.9l0.1,0.2c1.8,4.9,7.4,8.8,13.2,9.3l11.8,0.8l57.5-2.7l35.6-2.2l18.1-1.1l19.1-1.1l30-1.9v-3.2l-82.6,5.3l-77.8,3.8
                         l-5.6-0.3v0c-3.3-0.3-5.8-0.5-5.9-0.6c-4.6-0.4-8.9-3.3-10.4-7l-0.5-19.2l0.2-1.8c0.4-4.7,4-8.5,8.6-9.2l0.2-0.1
                         c0,0,3.3-1.1,7.7-1.6l3.3-0.3c0.3,0,0.6,0,1,0c0.2,0,0.3,0,0.5,0l0,0c43.8-1.9,90.7-4.6,139.3-7.7l22.4-1.4V167l0,0L709.6,170.3z" />
                            <path class="st3" d="M586.9,184.2l-0.3,0.2c-0.4,0.2-0.7,0.6-0.7,1l-0.1,0.3c-0.2,0.9-1.1,1.5-2,1.1l-0.3-0.1
                         c-0.4-0.2-0.9-0.1-1.3,0.1l-0.3,0.2c-0.8,0.5-1.8,0-2.1-0.9l-0.1-0.3c-0.1-0.4-0.4-0.8-0.8-0.9l-0.3-0.1c-0.9-0.4-1.2-1.4-0.6-2.2
                         l0.2-0.3c0.3-0.4,0.3-0.8,0.2-1.2l-0.1-0.3c-0.3-0.9,0.4-1.8,1.3-1.8l0.3,0c0.4,0,0.8-0.2,1.1-0.6l0.2-0.3c0.5-0.8,1.6-0.8,2.3-0.1
                         l0.2,0.3c0.3,0.3,0.7,0.5,1.2,0.5l0.3,0c0.9-0.1,1.7,0.8,1.5,1.7l-0.1,0.3c-0.1,0.4,0.1,0.9,0.3,1.2l0.2,0.3
                         C587.9,182.6,587.7,183.7,586.9,184.2z" />
                            <path class="st5" d="M587.8,219.3l-0.3,0.2c-0.4,0.2-0.7,0.6-0.7,1l-0.1,0.3c-0.2,0.9-1.1,1.5-2,1.1l-0.3-0.1
                         c-0.4-0.2-0.9-0.1-1.3,0.1l-0.3,0.2c-0.8,0.5-1.8,0-2.1-0.9l-0.1-0.3c-0.1-0.4-0.4-0.8-0.8-0.9l-0.3-0.1c-0.9-0.4-1.2-1.4-0.6-2.2
                         l0.2-0.3c0.3-0.4,0.3-0.8,0.2-1.2l-0.1-0.3c-0.3-0.9,0.4-1.8,1.3-1.8l0.3,0c0.4,0,0.8-0.2,1.1-0.6l0.2-0.3c0.5-0.8,1.6-0.8,2.3-0.1
                         l0.2,0.3c0.3,0.3,0.7,0.5,1.2,0.5l0.3,0c0.9-0.1,1.7,0.8,1.5,1.7l-0.1,0.3c-0.1,0.4,0.1,0.9,0.3,1.2l0.2,0.3
                         C588.8,217.8,588.6,218.9,587.8,219.3z" />
                            <path class="st1" d="M761.7,51.9l0.3,3.2l-18.4,1.1l-8.4,0.5L720,57.7l1.2,19.6l1.1,18.3l2.2,36.6l1.3,21l38.8-2.3l-0.1,3.2
                         l-39.6,2.4c-1.3,0.1-2.1-0.5-2.2-1.7L716.7,56c0.1-0.8,0.6-1.2,1.3-1.4l15.3-0.8L761.7,51.9L761.7,51.9z" />
                            <path class="st1" d="M704.3,57c0-1.1-0.6-1.6-1.8-1.6l-56,3.4l-6.9,0.3c-15.7,2.7-29.8,9.6-41.9,21.5c-10.2,10.1-17.3,21.7-21.5,35
                         c1.8,1.2,2.2,1.1,3.5,2.4c1.3,1.5,1.2,2.2,1.8,3.4l2,8.9c0,0.8,0.1,1.3,0,1.7c-0.3,0.1-0.6,0.3-0.9,0.5c-2.3,1.3-3.7,3.2-4.2,5.9h0
                         c-0.6,3.8,0.6,6.6,3.2,8.3c0.8,0.4,1.6,0.8,2.4,1c0.4,0.6,0.5,1.5,0.6,2.1l0,0v10.5l-1.8,3.7l67.4-3l57.9-3.5
                         c1.2-0.1,1.8-0.6,2-1.6L704.3,57z M588.9,160.7c-1,0.1-1.4-0.4-1.4-1.2l0.3-9.9c0.1-0.5,0.3-1.2,0.8-1.7c0.8-0.2,1.6-0.5,2.4-0.9
                         c2.2-1.2,3.3-3.3,3.7-6.1c0.3-3.5-0.7-6.6-4-8.5c-1.1-0.6-2.2-0.9-3.2-1.1c0.1,0,0.2,0,0.3,0c-0.4-0.2-0.8-0.7-1.1-1.5l-2.2-10.9
                         c0.1-4.9,1.3-9.8,3.5-14.8c3.5-10.9,9.5-19.5,17.4-26.3c10-8.2,20.8-13.2,32.3-15.4l63.4-3.7l5.7,95.7L588.9,160.7z" />
                            <path class="st4" d="M597.7,124.2l2.2,35.9l-11,0.6c-0.8,0.2-1.3-0.2-1.4-1.2l0.3-9.9c0.1-0.6,0.4-1.1,0.8-1.8
                         c2.8-0.5,4.7-2.3,5.6-5.3c0.9-3,0.2-5.8-1.6-8.4c-1.1-1.3-2.8-2.1-4.9-2.7c-0.5-0.2-0.8-0.7-1.1-1.5l-2-9.9
                         c-0.8-4.9,0.9-10.4,3.8-17.4c1.6-4.9,4.1-9.5,7-13.9L597.7,124.2L597.7,124.2z" />
                            <path class="st4" d="M578.5,164.3c-1.2,0.3-1.9-0.4-2.2-1.6l-2-33.7l2-13.4c2.6,1.1,4.4,2.8,5.1,5.2l2.1,9c0.2,1.1,0.2,1.7,0.1,2.4
                         c-2.7,1.3-4.4,3.3-5,6.1c-0.5,3.3,0.1,5.7,1.7,7.3c1.1,1.1,2.3,1.9,3.7,2.2c0.5,1.2,0.7,1.6,0.6,2.5v10.2l-1.8,3.7L578.5,164.3
                         L578.5,164.3z" />
                            <path class="st5" d="M593.7,140.2l-0.2,0.4c-0.2,0.4-0.3,0.8-0.2,1.2l0.1,0.5c0.1,0.9-0.3,1.7-1.1,2.1l-0.5,0.2
                         c-0.4,0.2-0.7,0.5-0.9,0.8l-0.2,0.4c-0.4,0.8-1.3,1.2-2.1,1l-0.5-0.1c-0.4-0.1-0.8,0-1.2,0.2l-0.5,0.2c-0.8,0.4-1.7,0.2-2.3-0.4
                         l-0.3-0.4c-0.3-0.3-0.7-0.5-1.1-0.6l-0.5-0.1c-0.8-0.2-1.5-0.8-1.6-1.7l-0.1-0.5c-0.1-0.4-0.2-0.8-0.5-1.1l-0.3-0.4
                         c-0.6-0.6-0.7-1.6-0.3-2.3l0.2-0.4c0.2-0.4,0.3-0.8,0.2-1.2l-0.1-0.5c-0.1-0.9,0.3-1.7,1.1-2.1l0.5-0.2c0.4-0.2,0.7-0.5,0.9-0.8
                         l0.2-0.4c0.4-0.8,1.3-1.2,2.1-1l0.5,0.1c0.4,0.1,0.8,0,1.2-0.2l0.5-0.2c0.8-0.4,1.7-0.2,2.3,0.4l0.3,0.4c0.3,0.3,0.7,0.5,1.1,0.6
                         l0.5,0.1c0.8,0.2,1.5,0.8,1.6,1.7l0.1,0.5c0.1,0.4,0.2,0.8,0.5,1.1l0.3,0.4C594,138.5,594.1,139.4,593.7,140.2z" />
                            <path class="st1" d="M593.4,52.8l5.6,4.6c2.7,1.6,5.6,1.5,8.7-0.3c8-4.8,17.2-8.4,28.1-10.5l35.6-1.9l74.6-4.4l14.3-1.1l-0.4-2.9
                         l-55.3,3l-25.7,1.8l-41.3,2.4c-12.9,1.4-23.7,6.2-34.5,12.7c-0.9,0.2-1.8,0-2.6-0.8l-3-4.2L593.4,52.8L593.4,52.8z" />
                            <path class="st3" d="M36.6,60.3l-0.3,0.5c-0.2,0.4-0.3,0.9-0.3,1.4l0.1,0.6c0.1,1-0.4,2-1.3,2.4l-0.5,0.3c-0.4,0.2-0.8,0.6-1.1,1
                         l-0.3,0.5c-0.5,0.9-1.5,1.4-2.5,1.2l-0.6-0.1c-0.5-0.1-1,0-1.4,0.2l-0.5,0.3c-0.9,0.4-2,0.2-2.7-0.5l-0.4-0.4
                         c-0.3-0.4-0.8-0.6-1.3-0.7l-0.6-0.1c-1-0.2-1.8-1-1.9-2l-0.1-0.6c-0.1-0.5-0.3-1-0.6-1.3l-0.4-0.4c-0.7-0.7-0.8-1.8-0.4-2.7
                         l0.3-0.5c0.2-0.4,0.3-0.9,0.3-1.4L20,57.2c-0.1-1,0.4-2,1.3-2.4l0.5-0.3c0.4-0.2,0.8-0.6,1.1-1l0.3-0.5c0.5-0.9,1.5-1.4,2.5-1.2
                         l0.6,0.1c0.5,0.1,1,0,1.4-0.2l0.5-0.3c0.9-0.4,2-0.2,2.7,0.5l0.4,0.4c0.3,0.4,0.8,0.6,1.3,0.7l0.6,0.1c1,0.2,1.8,1,1.9,2l0.1,0.6
                         c0.1,0.5,0.3,1,0.6,1.3l0.4,0.4C37,58.3,37.1,59.4,36.6,60.3z" />
                            <path class="st4" d="M223.1,179.7v-16.5l4.7,0.4c1,0.1,1.7,1,1.6,1.9l-0.7,9.4c-0.1,1-0.7,2-1.6,2.5L223.1,179.7z" />
                            <polygon class="st4" points="223.7,226.4 223.7,242.6 228.2,242.6 227.4,228.4 	" />
                        </g>
                        <g id="peatonal">
                            <g>
                                <path class="st1" d="M445.9,75.1c2.9,0,5.7,0.7,8.2,2l28.5,15c2.2,1.2,3.1,4,1.9,6.2c-6.9,12.6-28,51-31.8,57.5
                             c-4.6,7.7-19.5,29.4-23.9,32.9c-4.3,3.6-13.7,9.4-14.8,9.7s-55.8,32.2-61.7,37.6c-2.5,2.3-4.4,4.3-5.7,5.8
                             c-0.3,0.4-0.7,0.5-1.2,0.5c-0.7,0-1.5-0.5-1.5-1.4c-0.2-2.6-0.5-6-0.8-9c-0.7-5.7,0-34.8,0.7-49.8c0.7-15.1,5.8-45,5.6-57.3
                             c-0.2-12.2-2.7-47.3-2.7-48l98.8-1.8C445.7,75.1,445.8,75.1,445.9,75.1 M346.8,76.9C346.8,76.9,346.8,76.9,346.8,76.9L346.8,76.9
                             L346.8,76.9 M445.9,72.1L445.9,72.1c-0.1,0-0.3,0-0.4,0l-98.8,1.8l-3.2,0.1l0.2,3.2c0,0.4,2.5,35.8,2.7,47.8
                             c0.1,6.6-1.4,18.8-2.8,30.6c-1.2,9.7-2.4,19.7-2.7,26.6c-0.7,13.7-1.5,44-0.7,50.3c0.4,3,0.7,6.5,0.8,8.8c0.2,2.4,2.1,4.2,4.5,4.2
                             c1.3,0,2.6-0.6,3.4-1.6c1.5-1.7,3.3-3.6,5.4-5.5c5.4-4.9,57.9-35.6,60.9-37.1c2.3-1,11.4-6.8,15.4-10.1c4.9-4,20.1-26.3,24.5-33.7
                             c2.6-4.4,13.6-24.3,31.8-57.6c1-1.8,1.2-3.9,0.6-5.8c-0.6-1.9-1.9-3.5-3.7-4.5l-28.5-15C452.6,72.9,449.3,72.1,445.9,72.1
                             L445.9,72.1z" />
                            </g>
                            <g>
                                <path class="st1" d="M327.7,76.9L327.7,76.9c0,0,3.6,21,2.5,51.4s-5.3,36.2-6,74.6c-0.7,38.4,2.5,62.3,2.5,62.3
                             s-10.2,11.1-34.4,19.4c-8.2,2.8-15.9,3.4-22.3,4.2c-11.8,1.6-19.4,1.7-19.4,1.7s-3.9-48.7-4.7-77.6c-0.9-33.6,5.8-69.9,6.4-89.9
                             c0.6-18.3-2.9-45.3-2.9-45.3L327.7,76.9 M330.7,73.8l-3,0l-78.3,1l-3.4,0l0.4,3.3c0,0.3,3.4,27,2.8,44.8
                             c-0.2,7.2-1.3,16.6-2.5,27.4c-2,18.3-4.5,41.1-4,62.6c0.8,28.6,4.6,77.2,4.7,77.7l0.2,2.8l2.8-0.1c0.3,0,8-0.2,19.8-1.7
                             c1-0.1,2.1-0.3,3.2-0.4c5.9-0.7,12.5-1.5,19.7-4c24.7-8.4,35.2-19.8,35.7-20.2l0.9-1l-0.2-1.4c0-0.2-3.1-24.1-2.4-61.8
                             c0.4-21,1.8-32.2,3.2-43c1.2-9.1,2.3-17.8,2.8-31.6c1-28.9-2.1-49.1-2.5-51.7V73.8L330.7,73.8z" />
                            </g>
                        </g>
                        <g id="amenidades">
                            <path id="jardin" class="st4" d="M645.4,1.1l-10.2,18.5l-25.6,23.5L598,50.9l-4.6,1.8l-10.8,12.7c-0.9,1.2-1.3,2.1-0.1,3l2.8,2.6
                            c-5.8,6.8-10.7,13.7-14.2,20.5c-2.2,3.1-5.2,4.3-9.2,3.6c-19.3-6.3-54.6-28.5-93.6-48.1c-5.7-2.8-11.6-4.5-17.6-5.4l-0.6-38
                            L645.4,1.1L645.4,1.1z" />
                            <rect id="mesasterraza" class="st7 jardin" x="487.9" y="5.6" width="54.3" height="17.3" />
                            <rect id="terraza" class="st7 jardin" x="461.9" y="6.7" width="17" height="34" />
                            <polyline id="alberca" class="st8 jardin" points="487.2,28.4 518.3,28.4 518.3,45.3 487.2,45.3 487.2,28.2 	" />
                            <g id="juegosyfogatero" class="jardin">
                                <polyline id="juegos_bg" class="st7" points="535.2,48.4 566.3,48.4 566.3,65.3 535.2,65.3 535.2,48.2 		" />
                                <g id="juegos">
                                    <path d="M552.4,59.6c0.4-0.2,0.8-0.4,1.2-0.5c0.7-0.3,1.3,0,1.5,0.8c0.3,1.7,0.7,3.4,1,5.1c0,0.2,0,0.4,0,0.7
                                c-0.1,0-0.1,0.1-0.2,0.1c-0.4-0.4-0.8-0.8-1.1-1.2c-0.4-0.4-0.7-0.8-1-1.3c-0.2-0.3-0.2-0.7-0.3-1c-0.1-0.3-0.1-0.5-0.2-0.8
                                c-0.2,0.1-0.4,0.2-0.6,0.2c-0.1-0.2-0.3-0.5-0.4-0.7c-1.2-1.9-3-3.1-5.1-3.7c-0.4-0.1-0.8-0.3-1.2-0.6c-0.8-0.6-1.7-1.3-2.5-1.9
                                c0,0-0.1-0.1-0.2-0.1c0,1,0,1.9,0,2.9c0.4,0,0.7,0,1.1,0.1c2.1,0.2,4,0.8,5.6,2.2c0.8,0.6,1.3,1.4,1.8,2.2
                                c0.8,1.3,1.6,2.6,2.7,3.7c1.7,1.7,3.7,2.6,6.2,2.6c0.3,0,0.6,0,0.8,0.1c0.6,0.1,1,0.6,1,1.2c0,0.4,0,0.8,0,1.2
                                c0,0.7-0.5,1.2-1.3,1.3c-1.6,0.2-3.2,0.1-4.8-0.4c-1.6-0.5-2.9-1.4-4-2.6c-1-1.1-1.9-2.3-2.6-3.6c-0.8-1.3-1.8-2.4-3.2-3.1
                                c-1.1-0.6-2.2-0.8-3.5-1c0,0.1,0,0.2,0,0.4c0,3.2,0,6.4,0,9.6c0,0.6-0.2,0.7-0.7,0.7c-0.3,0-0.6,0-0.8,0c-0.4,0-0.6-0.2-0.6-0.6
                                c0-1.6,0-3.2,0-4.8c0-0.1,0-0.2,0-0.4c-2.1,0-4.2,0-6.3,0c0,0.1,0,0.2,0,0.3c0,1.6,0,3.1,0,4.7c0,0.6-0.2,0.7-0.7,0.7
                                c-0.3,0-0.5,0-0.8,0c-0.5,0-0.7-0.2-0.7-0.7c0-3.4,0-6.9,0-10.3c0-3,0-6,0-9c0-0.5,0.2-0.8,0.5-1.1c1.4-1.1,2.7-2.2,4.1-3.3
                                c0.5-0.4,0.9-0.4,1.4,0c1.4,1.1,2.7,2.2,4.1,3.3c0.4,0.3,0.6,0.7,0.5,1.2c0,0.2,0.1,0.4,0.2,0.5c1.4,1,2.7,2,4.1,3
                                c0.2,0.1,0.3,0.1,0.5,0.1c0.6-0.2,1.2-0.3,1.8-0.5c0.2,0,0.3-0.2,0.4-0.3c1.1-1.4,2.1-2.9,3.2-4.3c0.3-0.4,0.6-0.5,1-0.3
                                c0.3,0.1,0.6,0.5,0.5,0.8c0,0.2-0.1,0.4-0.2,0.5c-1,1.4-2,2.8-3,4.2c-0.1,0.2-0.2,0.3-0.1,0.5C551.9,57.5,552.1,58.5,552.4,59.6z
                                    M535,60.6c2.1,0,4.2,0,6.3,0c0-0.8,0-1.6,0-2.4c-2.1,0-4.2,0-6.3,0C535,59,535,59.8,535,60.6z M535,64.7c2.1,0,4.2,0,6.3,0
                                c0-0.8,0-1.6,0-2.3c-2.1,0-4.2,0-6.3,0C535,63.1,535,63.9,535,64.7z" />
                                    <path d="M546.8,53.4c0-1,0.8-1.9,1.9-1.9c1,0,1.9,0.9,1.9,1.9c0,1-0.9,1.9-1.9,1.9C547.6,55.3,546.8,54.4,546.8,53.4z" />
                                    <path d="M555.9,59.5c1.1,0.9,2.2,1.7,3.2,2.6c0.4,0.3,0.4,0.9,0.1,1.3c-0.3,0.4-0.9,0.5-1.3,0.2c-0.5-0.3-0.9-0.7-1.4-1.1
                                c-0.1,0-0.1-0.1-0.1-0.2C556.2,61.4,556,60.5,555.9,59.5C555.8,59.5,555.8,59.5,555.9,59.5z" />
                                </g>
                            </g>
                            <g id="petpark" class="jardin">
                                <circle class="st7" cx="138.3" cy="417.3" r="10.5" />
                                <path id="petparkicon" d="M146.1,416.2c-0.6,1-1.2,1.9-2.3,2.3c-0.9,0.3-1.8,0.5-2.8,0.7c-0.4,2-0.9,4.1-1.4,6.2
                            c-0.1,0.5-0.5,1-0.7,1.5c-0.1,0.2-0.2,0.5-0.2,0.8c0,1.9,0,3.8,0,5.7c0,0.5,0,1-0.7,1c-0.9,0.1-1.1-0.1-1.2-0.9
                            c-0.3-1.8-0.6-3.7-0.8-5.5c-0.1-0.5-0.2-0.8-0.8-0.9c-2.5-0.4-4.9-0.8-7.3-1.3c-0.4-0.1-0.6,0.1-0.8,0.3c-0.7,0.8-1.5,1.4-2.3,2.1
                            c-1,0.8-2.1,1.6-3.1,2.4c-0.2,0.2-0.3,0.5-0.3,0.8c0.1,0.7,0.2,1.3,0.3,2c0.1,0.4,0,0.8-0.5,0.9c-0.7,0.2-1.3,0-1.4-0.5
                            c-0.3-1.4-0.5-2.8-0.8-4.2c0-0.2,0.1-0.5,0.3-0.7c0.4-0.6,0.9-1.2,1.3-1.8c0.1-0.2,0.2-0.5,0.1-0.7c-0.9-2.2-1-4.3,0.4-6.4
                            c-0.2-0.1-0.4-0.1-0.6-0.2c-1.8-0.6-3.1-1.8-4.1-3.4c-0.2-0.4-0.3-0.7,0.1-1c0.4-0.2,0.7-0.1,0.9,0.3c1.4,2.4,3.5,3.4,6.2,3.2
                            c3.5-0.2,7-0.3,10.5-0.5c0.5,0,0.8-0.2,0.9-0.7c0.9-2.6,1.8-5.2,2.8-7.8c0.1-0.3,0.4-0.8,0.7-0.8c0.5-0.1,0.6,0.4,0.7,0.8
                            c0.1,0.3,0.2,0.6,0.3,1.2c0.2-0.3,0.4-0.6,0.6-0.8c0.5-0.5,1-0.3,1.1,0.3c0,0.2,0.1,0.3,0.1,0.5c-0.1,0.7,0.1,1.3,0.8,1.6
                            c0.3,0.1,0.5,0.4,0.6,0.7c0.2,0.8,0.8,0.9,1.4,1.2c0.7,0.3,1.3,0.7,2,1C146.1,415.9,146.1,416.1,146.1,416.2z" />
                            </g>
                        </g>
                        <g id="comercial">
                            <path id="lotecc_0" class="st9" d="M120.2,506.6l-84.3,13c-0.6-25.1-2.4-50-5.6-74.7l29.1-14.4l32-6.7l21.4-12.3L120.2,506.6
                         L120.2,506.6z" />
                            <polygon id="lotecc_1" class="st9" points="145,503.8 120.2,506.6 115.7,451.2 140.8,449.1 	" />
                            <polygon id="lotecc_2" class="st9" points="169.9,501.5 145,503.8 140.8,449.1 166,447.1 	" />
                            <polygon id="lotecc_3" class="st9" points="194.8,499.4 169.9,501.5 166,447.1 190.7,445.1 	" />
                            <polygon id="lotecc_4" class="st9" points="219.6,497.3 194.8,499.4 190.7,445.1 215.6,443.1 	" />
                            <polygon id="lotecc_5" class="st9" points="244.7,495.2 219.6,497.3 215.6,443.1 240.7,440.9 	" />
                            <polygon id="lotecc_6" class="st9" points="269.8,493.3 244.7,495.2 240.7,440.9 265.7,439.2 	" />
                            <polygon id="lotecc_7" class="st9" points="294.6,491 269.8,493.3 265.7,439.2 290.6,436.8 	" />
                            <polygon id="lotecc_8" class="st9" points="319.7,488.7 294.6,491 290.6,436.8 315.4,434.8 	" />
                            <polygon id="lotecc_9" class="st9" points="344.6,487 319.7,488.7 315.4,434.8 340.4,432.7 	" />
                            <polygon id="lotecc_10" class="st9" points="369.6,484.5 344.6,487 340.4,432.7 378.7,429.5 367.5,453.5 	" />
                            <path id="lotecc_11" class="st9" d="M505.1,227H529l11,12.6c6.3,9.7,10.4,19.8,12,30.4c-0.3,13.9,0.5,27,3,39.1l4.5,39.9
                         c0.4,6.7,0.2,12.9-0.9,18.4c-3.2,14.1-5.2,29.8-6.3,46.6l-0.6,31.4c-1.3,12.7-8.5,20.8-20,25.6l-120,10.2l-3.7-53.4l14.6-11.4
                         l18.5-31.1l3.3-30.5l21.5-19.7l14.9-32.2l8.4-32.1l13.8-28.6L505.1,227L505.1,227z" />
                        </g>
                        <g id="zona_13">
                            <path id="lote2a_233" class="st10" d="M434.5,3.9c1.8-0.1,3.6,0,5.4-0.1c0.5,0,1,0.1,1.4-0.1c3,0,5.9,0,8.9,0c0,0.2,0,0.4,0,0.7
                         c0,2.1,0,4.1,0.1,6.2c0.1,2.3,0,4.5,0.1,6.8c0.1,2.8,0.1,5.5,0.1,8.2c0.1,3,0.1,6.1,0.1,9.1c0,1.1,0,2.2,0,3.3
                         c0,0.2-0.1,0.4,0.1,0.6v3c-4.2,0-8.4,0-12.6,0.1c-1.2,0-2.5,0.1-3.8,0C434.5,29.2,434.5,16.6,434.5,3.9L434.5,3.9z" />
                            <path id="lote2a_232" class="st11" d="M419.3,42c0-0.2,0-0.4,0-0.5c0-12.3,0-24.6,0-36.9c0-0.2,0-0.4,0-0.5
                         c2.8-0.2,5.5-0.1,8.2-0.1c2.1,0,4.2-0.1,6.3-0.1c0.2,0,0.4,0,0.6,0c0,12.6,0,25.3,0,37.9c-1.3,0.1-2.6,0.1-3.9,0.1
                         C426.8,42,423,42.1,419.3,42L419.3,42z" />
                            <path id="lote2a_231" class="st11" d="M403.3,4.3c5.3-0.1,10.6-0.2,16-0.2c0,0.2,0,0.4,0,0.5c0,12.3,0,24.6,0,36.9
                         c0,0.2,0,0.4,0,0.5c-2.7,0-5.4,0.1-8.1,0.1c-2.6,0-5.3,0.1-7.9,0.1c0-0.1,0-0.2,0-0.4c0-12.4,0-24.8,0-37.1
                         C403.3,4.6,403.3,4.5,403.3,4.3L403.3,4.3z" />
                            <path id="lote2a_230" class="st11" d="M403.3,4.3c0,0.2,0,0.4,0,0.5c0,12.4,0,24.8,0,37.1c0,0.1,0,0.2,0,0.4
                         c-4.1,0-8.3,0.1-12.5,0.1c-1,0-1.9,0.2-2.9,0c0-0.2,0-0.4,0-0.5c0-12.4,0-24.8,0-37.1c0-0.1,0-0.2,0-0.4c2.7-0.2,5.3-0.1,8-0.1
                         c2.2-0.1,4.5-0.1,6.7-0.1C402.9,4.2,403.1,4.2,403.3,4.3L403.3,4.3z" />
                            <path id="lote2a_229" class="st11" d="M372,4.6c5.3-0.1,10.6-0.2,16-0.2c0,0.1,0,0.2,0,0.4c0,12.4,0,24.8,0,37.1c0,0.2,0,0.4,0,0.5
                         c-0.8,0-1.6,0.1-2.4,0.1c-3.8,0-7.6,0.1-11.4,0.1c-0.7,0-1.4,0.1-2.1,0c0-0.2,0-0.4,0-0.7c0-12.3,0-24.5,0-36.8
                         C372,5.1,372,4.8,372,4.6L372,4.6z" />
                            <path id="lote2a_228" class="st11" d="M372,4.6c0,0.2,0,0.4,0,0.7c0,12.3,0,24.5,0,36.8c0,0.2,0,0.4,0,0.7c-0.9,0-1.8,0.1-2.6,0.1
                         c-3.8,0-7.6,0.1-11.4,0.1c-0.4,0-0.9,0.2-1.3,0c0-0.1,0-0.2,0-0.3c0-12.6,0-25.2,0-37.8c0.5-0.1,1.1-0.1,1.6-0.1
                         c2.9,0,5.9,0,8.8-0.1C368.8,4.6,370.4,4.5,372,4.6L372,4.6z" />
                            <path id="lote2a_227" class="st11" d="M340.7,5c0.6,0,1.3-0.1,1.9-0.1c2.9,0,5.9,0,8.8-0.1c1.8,0,3.5,0,5.3,0c0,12.6,0,25.2,0,37.8
                         c0,0.1,0,0.2,0,0.3c-1.2,0-2.4,0.1-3.6,0.1c-2.4,0-4.8,0-7.2,0.1c-1.7,0-3.5,0.1-5.2,0.1c0-0.2,0-0.4,0-0.5c0-12.4,0-24.8,0-37.1
                         C340.6,5.3,340.7,5.2,340.7,5L340.7,5z" />
                            <path id="lote2a_226" class="st11" d="M325.4,43.4c0-0.2,0-0.4,0-0.5c0-12.4,0-24.8,0-37.1c0-0.2,0-0.4,0-0.5
                         c0.2-0.1,0.5-0.1,0.7-0.1c1.6,0,3.3,0,4.9,0c3.1,0,6.1-0.1,9.2-0.1c0.2,0,0.3,0,0.5,0.1c0,0.2,0,0.4,0,0.5c0,12.4,0,24.8,0,37.1
                         c0,0.2,0,0.4,0,0.5c-1.5,0-3,0.1-4.5,0.1C332.6,43.3,329,43.4,325.4,43.4L325.4,43.4z" />
                            <path id="lote2a_225" class="st11" d="M309.5,5.3c0.2,0,0.4-0.1,0.6-0.1c3,0,5.9-0.1,8.9-0.1c2.1,0,4.3,0,6.5,0c0,0.2,0,0.4,0,0.5
                         c0,12.4,0,24.8,0,37.1c0,0.2,0,0.4,0,0.5c-5.3,0.1-10.6,0.2-16,0.2c0-0.1,0-0.2,0-0.4c0-12.5,0-24.9,0-37.4
                         C309.4,5.7,309.5,5.5,309.5,5.3L309.5,5.3z" />
                            <path id="lote2a_224" class="st11" d="M309.5,5.3c0,0.2,0,0.4,0,0.5c0,12.5,0,24.9,0,37.4c0,0.1,0,0.2,0,0.4
                         c-2.7,0.2-5.5,0.1-8.2,0.1c-2.4,0.1-4.7,0.1-7.1,0.1c0-0.2,0-0.3,0-0.5c0-12.5,0-25,0-37.4c0-0.2,0-0.3,0-0.5
                         c0.1,0,0.3-0.1,0.4-0.1c2.5,0,5.1,0,7.6,0c2.2,0,4.5-0.1,6.7-0.1C309.1,5.3,309.3,5.3,309.5,5.3L309.5,5.3z" />
                            <path id="lote2a_223" class="st11" d="M278.1,5.7c0.1,0,0.2,0,0.4,0c3.2,0,6.4,0,9.6-0.1c2,0,4-0.1,6-0.1c0,0.2,0,0.3,0,0.5
                         c0,12.5,0,25,0,37.4c0,0.2,0,0.3,0,0.5c-3.1,0-6.1,0.1-9.2,0.1c-2.2,0-4.5,0.1-6.8,0.1C278.2,31.3,278.2,18.4,278.1,5.7L278.1,5.7z
                         " />
                            <path id="lote2a_222" class="st11" d="M278.1,5.7c0,12.8,0,25.6,0,38.4c-2.2,0-4.5,0.1-6.7,0.1c-2.9,0-5.7,0.1-8.6,0.1
                         c0-11.5,0-22.9,0-34.3c0-1.4,0-2.8,0-4.1c0.2-0.1,0.4-0.1,0.5-0.1c2.9,0,5.7,0,8.6-0.1C274,5.7,276.1,5.7,278.1,5.7L278.1,5.7z" />
                            <path id="lote2a_221" class="st11" d="M246.9,6c1.8-0.1,3.7,0,5.5-0.1c3.1-0.1,6.3-0.1,9.5-0.1c0.3,0,0.7-0.1,1,0
                         c0,1.4,0,2.8,0,4.1c0,11.5,0,22.9,0,34.3c-1.5,0.1-3,0-4.5,0.1c-2.5,0.1-5,0-7.5,0.1c-1.3,0-2.6,0.1-3.9,0c0-0.2,0-0.5,0-0.7
                         c0-12.4,0-24.8,0-37.1C246.9,6.4,247,6.2,246.9,6L246.9,6z" />
                            <path id="lote2a_219" class="st11" d="M215.6,6.4c1.7-0.1,3.4,0,5.1-0.1c3.2-0.1,6.3-0.1,9.5-0.1c0.4,0,0.9-0.1,1.3,0
                         c0,12.6,0,25.2,0,37.8c0,0.3,0,0.5,0,0.8c-1.9,0-3.8-0.1-5.7-0.1c-0.9,0-1.8,0-2.7-0.1c-2.1,0-4.3-0.1-6.4-0.1
                         c-0.4,0-0.8,0-1.2-0.1C215.6,31.7,215.6,19,215.6,6.4L215.6,6.4z" />
                            <path id="lote2a_218" class="st11" d="M200.3,44c0-0.2,0-0.3,0-0.5c0-12.2,0-24.3,0-36.5c0-0.2,0-0.3,0-0.5c0.1,0,0.3-0.1,0.4-0.1
                         c2.8,0,5.6,0,8.4-0.1c2.2-0.1,4.3,0,6.5-0.1c0,12.6,0,25.3,0,38c-3.1,0-6.1-0.1-9.2-0.2c-0.9,0-1.8,0-2.6,0
                         C202.6,44,201.5,44,200.3,44L200.3,44z" />
                            <path id="lote2a_217" class="st11" d="M184.3,6.7c1.6-0.1,3.3,0,4.9-0.1c3.2-0.1,6.3-0.1,9.5-0.1c0.5,0,1,0,1.6,0
                         c0,0.2,0,0.3,0,0.5c0,12.2,0,24.3,0,36.5c0,0.2,0,0.3,0,0.5c-2.8-0.1-5.6-0.2-8.4-0.2c-1.3,0-2.6,0-3.9-0.1c-1.2,0-2.5-0.1-3.7-0.1
                         c0-0.1,0-0.2,0-0.3C184.3,31.1,184.3,18.9,184.3,6.7L184.3,6.7z" />
                            <path id="lote2a_220" class="st11" d="M231.6,44.7c0-0.3,0-0.5,0-0.8c0-12.6,0-25.2,0-37.8c0.2-0.1,0.4-0.1,0.5-0.1
                         c2.8,0,5.6,0,8.4-0.1c2.1-0.1,4.3,0,6.4-0.1c0,0.2,0,0.4,0,0.7c0,12.4,0,24.8,0,37.1c0,0.2,0,0.5,0,0.7c-0.4,0-0.9,0.1-1.3,0.1
                         c-4,0-8,0.1-12,0.1C232.9,44.7,232.3,44.9,231.6,44.7L231.6,44.7z" />
                            <path id="lote2a_216" class="st11" d="M169.1,43.2c0-11.8,0-23.6,0-35.5c0-0.3,0-0.5,0-0.8c1.3,0,2.6-0.1,3.9-0.1
                         c3.8,0,7.6-0.1,11.4-0.1c0,12.2,0,24.4,0,36.5c0,0.1,0,0.2,0,0.3c-1.4,0.2-2.7-0.1-4.1-0.1c-2.2,0-4.5,0-6.8-0.2
                         C172,43.2,170.5,43.3,169.1,43.2L169.1,43.2z" />
                            <path id="lote2a_215" class="st11" d="M153.1,7.1c1.5-0.1,3,0,4.5-0.1c3.1-0.1,6.2-0.1,9.4-0.1c0.7,0,1.4-0.1,2,0
                         c0,0.3,0,0.5,0,0.8c0,11.8,0,23.6,0,35.5c-1.8,0-3.6-0.1-5.4-0.1c-0.9,0-1.8-0.1-2.6-0.1c-2.6-0.1-5.3-0.1-7.9-0.2
                         c0-0.2,0-0.4,0-0.5c0-11.5,0-23.1,0-34.6C153.1,7.4,153.1,7.2,153.1,7.1L153.1,7.1z" />
                            <path id="lote2a_214" class="st11" d="M137.8,42.3c0-11.6,0-23.1,0-34.7c0-0.1,0-0.2,0-0.3c1.3,0,2.5-0.1,3.8-0.1
                         c3.9,0,7.7-0.1,11.6-0.1c0,0.2,0,0.4,0,0.5c0,11.5,0,23.1,0,34.6c0,0.2,0,0.4,0,0.5c-1.7,0-3.4-0.1-5.1-0.1
                         c-3.1-0.1-6.3-0.2-9.4-0.2C138.3,42.4,138,42.3,137.8,42.3L137.8,42.3z" />
                            <path id="lote2a_213" class="st11" d="M121.8,7.4c1.4-0.1,2.8,0,4.2-0.1c3.1-0.1,6.3-0.1,9.5-0.1c0.8,0,1.5-0.1,2.3,0
                         c0,0.1,0,0.2,0,0.3c0,11.6,0,23.1,0,34.7c-1.4,0.1-2.9,0-4.4,0.1c-3.9,0-7.7,0.2-11.6,0.2c0-1.2,0-2.3,0-3.5
                         C121.8,28.5,121.8,18,121.8,7.4L121.8,7.4z" />
                            <path id="lote2a_212" class="st11" d="M121.8,7.4c0,10.5,0,21.1,0,31.6c0,1.2,0,2.3,0,3.5c-0.6,0.2-1.2,0.1-1.8,0.1
                         c-2.4,0.1-4.9,0.2-7.3,0.3c-1.9,0.1-3.8,0.2-5.8,0.3c-0.2,0-0.3,0-0.5,0c0-0.2,0-0.4,0-0.7c0-11.4,0-22.8,0-34.3c0-0.2,0-0.4,0-0.7
                         c1.7,0,3.4-0.1,5.1-0.1C115,7.5,118.4,7.5,121.8,7.4L121.8,7.4z" />
                            <path id="lote2a_211" class="st11" d="M90.6,44.1c0-0.2,0-0.4,0-0.5c0-11.8,0-23.6,0-35.4c0-0.1,0-0.3,0-0.4c1.5,0,3-0.1,4.5-0.1
                         c3,0,6,0,9-0.1c0.8,0,1.6-0.1,2.3,0c0,0.2,0,0.4,0,0.6c0,11.4,0,22.8,0,34.3c0,0.2,0,0.4,0,0.7c-2.6,0.1-5.1,0.3-7.7,0.4
                         C96,43.8,93.3,43.9,90.6,44.1L90.6,44.1z" />
                            <path id="lote2a_210" class="st11" d="M73.3,45.3c0-0.2,0-0.3,0-0.5c0-12.1,0-24.2,0-36.3c0-0.2,0-0.3,0-0.5c0.2,0,0.3-0.1,0.5-0.1
                         c3,0,6.1,0,9.1-0.1c2.6-0.1,5.1,0,7.7-0.1c0,0.1,0,0.3,0,0.4c0,11.8,0,23.6,0,35.4c0,0.2,0,0.4,0,0.5c-2,0.1-4,0.3-6,0.4
                         c-3,0.2-6,0.4-9,0.6C74.8,45.2,74.1,45.2,73.3,45.3z" />
                            <path id="lote2a_209" class="st11" d="M55.1,46.5c0-12.7,0-25.3,0-38c0-0.1,0-0.2,0-0.3c0.8,0,1.6-0.1,2.5-0.1c3.2,0,6.4,0,9.6-0.1
                         C69.2,8,71.3,8,73.3,8c0,0.2,0,0.3,0,0.5c0,12.1,0,24.2,0,36.3c0,0.2,0,0.3,0,0.5C67.3,45.7,61.2,46.1,55.1,46.5L55.1,46.5z" />
                            <path id="lote2a_208" class="st11" d="M36.3,8.4c0.1,0,0.2,0,0.3,0c4.5,0,9-0.1,13.5-0.1c1.5,0,2.9-0.1,4.4-0.1
                         c0.2,0,0.4,0,0.7,0.1c0,0.1,0,0.2,0,0.3c0,12.6,0,25.3,0,38c-2.8,0.3-5.7,0.4-8.6,0.7c-2.6,0.3-5.1-0.2-7.1-2.3
                         c-0.9-0.9-2.1-1.4-3.2-2c0.2-0.2,0.1-0.5,0.1-0.7C36.3,30.9,36.3,19.7,36.3,8.4L36.3,8.4z" />
                            <path id="lote2a_207" class="st11" d="M36.3,8.4c0,11.3,0,22.5,0,33.8c0,0.2,0.1,0.5-0.1,0.7c-2-0.8-4-1.4-6-1.8
                         c-3.1-0.6-6.2-0.7-9.4-0.3c-1.1,0.1-2.2,0.3-3.3,0.4c0-0.2,0-0.3,0-0.5c0-10.6,0-21.1,0-31.7c0-0.1,0-0.3,0-0.4
                         c1.6,0,3.2-0.1,4.9-0.1c2.7,0,5.4,0,8.1-0.1C32.4,8.4,34.4,8.5,36.3,8.4L36.3,8.4z" />
                            <path id="lote2a_206" class="st8" d="M0.1,8.7c3.1,0,6.3,0.1,9.4,0c2.7-0.1,5.3,0,8-0.1c0,0.1,0,0.3,0,0.4c0,10.6,0,21.1,0,31.7
                         c0,0.2,0,0.3,0,0.5c-1.4,0.3-2.8,0.5-4.1,0.9c-2.5,0.6-4.9,1.7-7.3,2.7c-2,0.8-3.6,2.1-5.3,3.3H0.6c-0.1-1.6,0-3.2-0.1-4.8
                         c-0.1-3.5,0-7-0.1-10.6c-0.1-1.7,0-3.5,0-5.2c0-3.2-0.1-6.3-0.1-9.5c0-0.2,0.1-0.4-0.1-0.5L0.1,8.7L0.1,8.7z" />
                        </g>
                        <g id="zona_12">
                            <polyline id="lote2a_205" class="st8" points="222.9,63.7 223.4,104 207.7,104 207.3,63.3 222.9,63.7 	" />
                            <polyline id="lote2a_204" class="st7" points="207.3,63.3 207.7,103.1 192.1,103.1 191.6,63 207.3,63.3 	" />
                            <polyline id="lote2a_203" class="st7" points="191.6,63 192.1,102.3 176.4,102.3 176,62.6 191.6,63 	" />
                            <polyline id="lote2a_202" class="st7" points="176,62.6 176.4,101.7 160.8,101.7 160.3,62.2 176,62.6 	" />
                            <polyline id="lote2a_201" class="st7" points="160.3,62.2 160.8,101 145.2,101 144.7,61.7 160.3,62.2 	" />
                            <polyline id="lote2a_200" class="st7" points="144.7,61.7 145.2,101 129.5,101 128.9,61.6 144.7,61.7 	" />
                            <polyline id="lote2a_199" class="st7" points="128.9,61.6 129.5,101 113.9,101 113.4,61.9 128.9,61.6 	" />
                            <polyline id="lote2a_198" class="st7" points="113.4,61.9 113.9,101.7 98.2,101.7 97.8,62.9 113.4,61.9 	" />
                            <polygon id="lote2a_197" class="st7" points="98.2,102.7 82.6,102.7 82.1,64 97.8,62.9 	" />
                            <polygon id="lote2a_196" class="st7" points="82.6,103.9 67,103.8 66.5,65 82.1,64 	" />
                            <polygon id="lote2a_195" class="st7" points="67,105 51.4,105 50.8,66.1 66.5,65 	" />
                            <path id="lote2a_194" class="st7" d="M34.2,109.7h17.2l-0.6-43.6c-3.3,0-5.6,1.5-7.1,4.3c-2.4,4-5.8,6.4-9.9,7.7
                         C33.8,78.1,34.2,109.7,34.2,109.7z" />
                            <path id="lote2a_193" class="st7" d="M34.2,109.7H15.4l-0.4-32v-0.4c6.7,2.3,13,2.4,18.8,0.8L34.2,109.7L34.2,109.7z" />
                            <path id="lote2a_192" class="st8" d="M15.4,109.7l-0.4-32.3c-5.1-1.6-9.9-4.1-14.2-7.6l0.4,39.9L15.4,109.7L15.4,109.7z" />
                            <path id="lote2a_191" class="st8" d="M15.4,109.7H1.3L2,147.4c4.1-2.8,8.6-5,13.8-6.1L15.4,109.7L15.4,109.7z" />
                            <path id="lote2a_190" class="st7" d="M34.2,109.7H15.4l0.3,31.6c6.2-1.9,12.1-1.8,18.7-0.4L34.2,109.7z" />
                            <path id="lote2a_189" class="st7" d="M51.4,109.7H34.2l0.3,31.2c2.6,1,5.1,2.5,7.5,4.4c1.6,1.3,3.6,1.7,5.9,1.2l3.9-0.5L51.4,109.7
                         " />
                            <polyline id="lote2a_188" class="st7" points="67.5,144.9 67,105 51.4,105 51.8,146.1 67.5,144.9 	" />
                            <polyline id="lote2a_187" class="st7" points="83.1,143.7 82.6,103.9 67,103.8 67.5,144.9 83.1,143.7 	" />
                            <polygon id="lote2a_186" class="st7" points="98.2,102.7 98.7,142.5 83.1,143.7 82.6,102.7 	" />
                            <polygon id="lote2a_185" class="st7" points="113.9,101.7 98.2,101.7 98.7,142.5 114.4,141.3 	" />
                            <polygon id="lote2a_184" class="st7" points="130,140.4 129.5,101 113.9,101 114.4,141.3 	" />
                            <polyline id="lote2a_183" class="st7" points="145.5,140 145.4,119.9 145.2,101 129.5,101 130,140.4 145.5,140 	" />
                            <polyline id="lote2a_182" class="st7" points="161.2,140.1 161.2,140.1 160.8,109.8 160.8,101 145.2,101 145.5,140 161.2,140.1 	
                         " />
                            <polyline id="lote2a_181" class="st7" points="176.9,140.7 176.4,101.7 160.8,101.7 161.2,140.1 176.9,140.7 	" />
                            <polyline id="lote2a_180" class="st7" points="192.5,141.8 192.1,102.3 176.4,102.3 176.9,140.7 192.5,141.8 	" />
                            <polyline id="lote2a_179" class="st7" points="208.2,143.1 207.7,103.1 192.1,103.1 192.5,141.8 208.2,143.1 	" />
                            <polyline id="lote2a_178" class="st8" points="223.9,144.4 223.4,104 207.7,104 208.2,143.1 223.9,144.4 	" />
                        </g>
                        <g id="zona_11">
                            <polygon id="lote2a_177" class="st8" points="220.6,202.9 220.2,163.2 205.4,162.1 205.8,202.9 	" />
                            <polygon id="lote2a_176" class="st7" points="205.4,162.1 205.8,201.9 190.1,201.9 189.6,160.8 	" />
                            <polygon id="lote2a_175" class="st7" points="190.1,200.9 189.6,160.8 173.9,159.7 174.3,200.9 	" />
                            <polygon id="lote2a_174" class="st7" points="174.3,200 173.9,159.7 158.3,159.4 158.8,200 	" />
                            <polygon id="lote2a_173" class="st7" points="158.8,199.4 158.3,159.4 142.6,159.2 143.1,199 143.1,199.4 	" />
                            <polygon id="lote2a_172" class="st7" points="143.1,199 142.6,159.2 127,159.7 127.6,199 	" />
                            <polygon id="lote2a_171" class="st7" points="127.6,199.4 127,159.7 111.5,160.7 111.9,199.4 	" />
                            <polygon id="lote2a_170" class="st7" points="111.9,200 111.5,160.7 95.8,162 96.3,200 	" />
                            <polygon id="lote2a_169" class="st7" points="96.4,201.1 95.8,162 80.1,163.1 80.7,201.1 	" />
                            <polygon id="lote2a_168" class="st7" points="80.7,202.4 80.1,163.1 64.6,164.3 65,202.4 	" />
                            <path id="lote2a_167" class="st7" d="M65.1,208.8l-0.5-44.5c-8.8,0.5-14.8,1-15.7,1.8l0.6,42.7L65.1,208.8L65.1,208.8z" />
                            <path id="lote2a_166" class="st7" d="M48.8,166.1l0.6,42.7H33.8l-0.4-30.6c5.3-1.5,9.1-4.4,11.8-8.5C46,168,47.3,166.9,48.8,166.1
                         L48.8,166.1z" />
                            <path id="lote2a_165" class="st7" d="M33.8,208.8l-0.4-30.6c-5.3,0.8-10.5,0.6-15.6-0.8l0.2,31.4H33.8L33.8,208.8z" />
                            <path id="lote2a_164" class="st8" d="M18.1,208.8l-0.2-31.4c-5.4-1.5-10.3-3.9-14.8-7.2l3.3,38.6H18.1z" />
                            <path id="lote2a_163" class="st8" d="M6.4,208.8l3.6,35.3c4.7-3.2,9.6-5.4,14.9-6.6l-0.4-28.8L6.4,208.8L6.4,208.8z" />
                            <path id="lote2a_162" class="st7" d="M24.8,237.5l-0.4-28.8h20.3l0.3,29.7C40.2,236.2,33,236.4,24.8,237.5L24.8,237.5z" />
                            <path id="lote2a_161" class="st7" d="M44.7,208.8l0.3,29.7l6.2,4.6c0.9,1.1,2,1.7,3.2,1.6l11.1-1.2l-0.4-34.7L44.7,208.8
                         L44.7,208.8z" />
                            <polygon id="lote2a_160" class="st7" points="65.5,243.4 65,202.4 80.7,202.4 81.1,241.8 	" />
                            <polygon id="lote2a_159" class="st7" points="81.1,241.8 80.7,201.1 96.4,201.1 96.6,240.3 	" />
                            <polygon id="lote2a_158" class="st7" points="96.3,200 96.6,240.3 112.3,239.3 111.9,200 	" />
                            <polygon id="lote2a_157" class="st7" points="111.9,199.4 112.3,239.3 128,238.9 127.6,199.4 	" />
                            <polygon id="lote2a_156" class="st7" points="128,238.9 127.6,199 143.1,199 143.6,239 	" />
                            <polygon id="lote2a_155" class="st7" points="143.1,199.4 143.6,239 159.2,239.6 158.8,199.4 	" />
                            <polygon id="lote2a_154" class="st7" points="158.8,200 174.3,200 174.9,240.3 159.2,239.6 	" />
                            <polygon id="lote2a_153" class="st7" points="174.3,200.9 174.9,240.3 190.6,241.1 190.1,200.9 	" />
                            <polygon id="lote2a_152" class="st7" points="190.1,201.9 190.6,241.1 206.1,241.8 205.8,201.9 	" />
                            <polygon id="lote2a_151" class="st8" points="221.1,242.6 220.6,202.9 205.8,202.9 206.1,241.8 	" />
                        </g>
                        <g id="zona_10">
                            <polygon id="lote2a_150" class="st8" points="229.4,262.1 230.6,278 197.9,278.5 197.9,260.5 	" />
                            <polygon id="lote2a_149" class="st7" points="182.3,287 182.2,259.6 163.1,258.8 163.5,287.1 	" />
                            <polygon id="lote2a_148" class="st7" points="163.1,258.8 163.5,289 147.8,289.3 147.5,258 	" />
                            <polygon id="lote2a_147" class="st7" points="147.5,258 147.8,289.8 132.2,290.1 131.8,258 	" />
                            <polygon id="lote2a_146" class="st7" points="131.8,258 132.2,291.8 116.6,292 116.2,258.3 	" />
                            <polygon id="lote2a_145" class="st7" points="101,293.8 116.6,293.5 116.2,258.3 100.6,259.1 	" />
                            <polygon id="lote2a_144" class="st7" points="100.6,259.1 101,295.4 85.4,295.7 85,260.5 	" />
                            <polygon id="lote2a_143" class="st7" points="85,260.5 85.4,298 69.8,298.2 69.3,262.1 	" />
                            <path id="lote2a_142" class="st7" d="M69.8,304.3l-18.8,0.4l-0.5-35l3.8-5c0.6-0.7,1.5-1.2,2.5-1.3l12.4-1.2L69.8,304.3L69.8,304.3
                         z" />
                            <path id="lote2a_141" class="st7" d="M51.1,304.6l-18.8,0.2l-0.4-30c7.7,1,13.3-0.4,18.7-5.2L51.1,304.6z" />
                            <path id="lote2a_140" class="st8" d="M16.2,305.2l16.1-0.3l-0.4-30c-8.2-1.4-14.9-3.7-19.5-7.5L16.2,305.2z" />
                            <path id="lote2a_139" class="st8" d="M20.4,346l-4.2-40.8l17.7-0.3l0.3,34.5C28.8,341,24.3,343.3,20.4,346z" />
                            <path id="lote2a_138" class="st7" d="M34.2,339.4l-0.3-34.5l18.7-0.3l0.4,34C46.4,337.5,40.1,337.8,34.2,339.4z" />
                            <path id="lote2a_137" class="st7" d="M52.6,304.6l0.4,34c1.8,0.4,3.8,1.4,6.1,2.8c1.1,1.2,2.5,1.5,4.3,0.8l6.8-2.2l-0.4-35.8
                         L52.6,304.6L52.6,304.6z" />
                            <path id="lote2a_136" class="st7" d="M70.2,340l-0.4-41.8l15.6-0.2l0.5,37.3C80.3,336.8,75.1,338.4,70.2,340z" />
                            <path id="lote2a_135" class="st7" d="M85.9,335.4l-0.5-39.7l15.6-0.3l0.4,36.3C96.3,332.9,91.1,334.1,85.9,335.4L85.9,335.4z" />
                            <polygon id="lote2a_134" class="st7" points="101,293.8 101.4,331.8 117,328.8 116.6,293.5 	" />
                            <polygon id="lote2a_133" class="st7" points="117,328.8 116.6,292 132.2,291.8 132.6,326.3 128.3,327.1 	" />
                            <polygon id="lote2a_132" class="st7" points="132.2,290.1 132.6,326.3 148.2,323.1 147.8,289.8 	" />
                            <polygon id="lote2a_131" class="st7" points="147.8,289.3 148.2,323.1 163.8,319.4 163.5,289 	" />
                            <path id="lote2a_130" class="st7" d="M163.8,319.4l-0.3-32.3l18.8-0.2v22.4l-11.8,6.9C168.1,317.7,165.9,318.7,163.8,319.4
                         L163.8,319.4z" />
                            <polygon id="lote2a_129" class="st10" points="197.9,260.5 197.9,300 182.3,309.3 182.2,259.8 	" />
                            <path id="lote2a_128" class="st12" d="M231.5,292.8l-0.9-14.8l-32.7,0.6l0,21.5l4.4-2.6c4.2-3.2-6.4,1.3,3.1-1.3
                         C210.1,294.7,220.7,293.7,231.5,292.8L231.5,292.8z" />
                        </g>
                        <g id="zona_9">
                            <path id="lote2a_126" class="st10" d="M148.9,368.3l12.4-8.3l19.3-23.6l11.9-10.7c-12.4,7.5-21.1,12.6-32.9,14.4l-11.3,2.4
                         L148.9,368.3L148.9,368.3z" />
                            <polygon id="lote2a_125" class="st10" points="137.4,376 148.9,368.3 148.2,342.5 131.4,346.1 131.7,378 	" />
                            <path id="lote2a_124" class="st10" d="M131.4,346.1l0.3,31.9l-15.6,5.2l-0.5-34.8C120.9,347.5,126.1,346.7,131.4,346.1L131.4,346.1
                         z" />
                            <polygon id="lote2a_123" class="st10" points="100.6,386.9 100.1,351.7 115.7,348.4 116.1,383.2 110.7,385.1 	" />
                            <polygon id="lote2a_122" class="st10" points="85.4,355.5 100.1,351.7 100.6,386.9 85.7,389.5 	" />
                            <path id="lote2a_121" class="st10" d="M85.4,355.5l0.3,34l-7.2,1.4l-7.5,4.8l-3.9-26.4c-0.2-1.8-0.8-4.4-1.2-4.8
                         c0.8-3.1,1.7-3.6,4.7-4.4L85.4,355.5L85.4,355.5z" />
                            <path id="lote2a_120" class="st10" d="M55,375.4l0.3,29.7l15.6-9.4c0,0-4.5-34-5.1-31C63.2,369.9,59.8,373.9,55,375.4L55,375.4z" />
                            <path id="lote2a_119" class="st10" d="M39,407.8l13.7-1l2.6-1.7L55,375.4c-5,1.5-10.4,1.5-16.4,0.1L39,407.8z" />
                            <path id="lote2a_118" class="st8" d="M26.8,408.7l12.1-0.9l-0.3-32.4c-2.9-0.6-5.7-1.6-8.5-2.8l-7.5-4.6L26.8,408.7L26.8,408.7z" />
                        </g>
                        <g id="zona_8">
                            <path id="lote_103" class="st10" d="M215.6,443.1l-21.6,1.7l-1.8-20.2c0.7-3.9,1.8-6.5,5.3-8.5c4.2-2.1,9.6-4.3,15.7-6.6
                         L215.6,443.1L215.6,443.1z" />
                            <path id="lote_104" class="st7 red" d="M231.1,441.7l-15.5,1.4l-2.4-33.6c4.5-1.6,9.6-3.1,15.2-4.4L231.1,441.7L231.1,441.7z" />
                            <path id="lote_105" class="st7" d="M246.8,440.4l-15.6,1.4l-2.7-36.7c4.7-1.2,9.9-2.2,15.5-3.2L246.8,440.4L246.8,440.4z" />
                            <polygon id="lote_106" class="st7" points="262.3,439.2 246.8,440.4 243.9,401.8 250.7,400.7 259.4,399.9 	" />
                            <polygon id="lote_107" class="st7" points="277.9,437.8 262.3,439.2 259.4,399.9 275.1,398.5 	" />
                            <polygon id="lote_108" class="st7" points="293.6,436.5 277.9,437.8 275.1,398.5 290.6,397.1 	" />
                            <polygon id="lote_109" class="st7" points="309.1,435.3 293.6,436.5 290.6,397.1 306.2,395.8 	" />
                            <polygon id="lote_110" class="st7" points="324.7,434 309.1,435.3 306.2,395.8 316.8,394.9 321.8,394.5 	" />
                            <path id="lote_111" class="st7" d="M340.4,432.7l-15.7,1.3l-2.9-39.5c4.9-0.4,10.1-1.4,15.5-2.7L340.4,432.7L340.4,432.7z" />
                            <path id="lote_112" class="st7" d="M357.4,431.3l-17.1,1.4l-3-40.9c5.4-1.6,11-4,16.7-6.7L357.4,431.3L357.4,431.3z" />
                            <path id="lote_113" class="st7" d="M378.7,429.5l-21.3,1.8l-3.5-46.2c4.6-2.2,9.1-5.2,13.5-8.9l14,47.6L378.7,429.5L378.7,429.5z" />
                            <path id="lote_114" class="st10" d="M406.9,394.2l-3.1,8.5l-22.3,21.1l-14-47.6c3-2.6,6.1-5.9,9.2-9.7L406.9,394.2L406.9,394.2z" />
                            <polygon id="lote_115" class="st10" points="414.2,374.3 406.9,394.2 376.7,366.5 389.7,351.8 	" />
                            <polygon id="lote_116" class="st10" points="422.8,351.4 414.2,374.3 389.7,351.8 404.6,334.9 	" />
                            <polygon id="lote_117" class="st10" points="438.2,328.6 425.7,343.8 422.8,351.4 404.6,334.9 420.2,316.9 422.5,314.1 	" />
                        </g>
                        <g id="zona_7">
                            <path id="lote_88" class="st12" d="M400.2,311L379,291.5l3.5-5.4l0.4-9.8c9.3,0.9,18.2,1.4,26.7,1.1l0.4,11
                         c0.3,7.1-0.8,12.9-4.2,16.2L400.2,311" />
                            <polyline id="lote_89" class="st10" points="386.7,326.6 400.2,311 379,291.5 372.1,302.1 363.3,305 386.7,326.6 	" />
                            <polygon id="lote_90" class="st10" points="345.4,309.9 376.2,338.6 386.7,326.6 363.3,305 358.4,306 	" />
                            <polyline id="lote_91" class="st10" points="366,350.3 376.2,338.6 345.4,309.9 338.4,312 329,316.1 366,350.3 	" />
                            <path id="lote_92" class="st10" d="M319.1,320.6l24.8,48.2c5.7-2.8,10.9-6.7,15.4-11.6l6.6-7l-37-34.1L319.1,320.6L319.1,320.6z" />
                            <path id="lote_93" class="st10" d="M310.8,324.4l4.4,51.2c7.7-0.3,15.1-1.5,22.1-4l6.7-2.9l-24.8-48.2L310.8,324.4z" />
                            <path id="lote_94" class="st10" d="M295.2,327.9l4.1,49.1l15.9-1.4l-4.4-51.2C308.5,325.2,301.9,326.5,295.2,327.9L295.2,327.9z" />
                            <polygon id="lote_95" class="st10" points="283.7,378.4 299.3,377 295.2,327.9 279.5,331.1 	" />
                            <polygon id="lote_96" class="st10" points="264.4,337.2 268.1,379.9 283.7,378.4 279.5,331.1 279.2,331.1 	" />
                            <polygon id="lote_97" class="st10" points="249.3,343.4 252.6,381.2 268.1,379.9 264.4,337.2 	" />
                            <polygon id="lote_98" class="st10" points="237.2,383.4 233.8,345.2 249,343.5 249.3,343.4 252.6,381.2 	" />
                            <path id="lote_99" class="st10" d="M218.2,347l3.5,39.9c4.9-1.4,10.1-2.6,15.5-3.5l-3.4-38.3L218.2,347L218.2,347z" />
                            <polygon id="lote_100" class="st10" points="206.1,391.6 202.6,348.4 205.4,345.5 218.2,347 221.7,386.9 	" />
                            <path id="lote_101" class="st10" d="M188.5,399l-8-27.6l22.1-22.9l3.6,43.2l-12.4,5.2C191.7,397.8,189.9,398.7,188.5,399L188.5,399
                         z" />
                        </g>
                        <g id="zona_6">
                            <path id="lote_84" class="st8" d="M315.2,116.7c-0.1-5.6-0.2-11.2-0.2-16.8c-0.1-5-0.2-9.9-0.2-14.9c0-2.7-0.1-5.3-0.1-8
                         c1.5,0,3,0,4.5,0c2.7,0,5.4-0.1,8-0.1c0.5,0,0.6,0.1,0.7,0.6c0.3,2.3,0.6,4.5,0.9,6.8c0.3,2.2,0.5,4.5,0.7,6.7
                         c0.1,1.6,0.3,3.1,0.4,4.7c0.2,3.5,0.4,7,0.5,10.5c0.1,3.5,0.1,6.9,0.1,10.4c-3.5,0.1-6.9,0.1-10.4,0.2c-1.4,0-2.8,0.1-4.2,0.1
                         C315.6,116.8,315.3,116.9,315.2,116.7L315.2,116.7z" />
                            <path id="lote_83" class="st7" d="M315.2,116.7c-5.4,0.1-10.8,0.2-16.1,0.2c0-1.6-0.1-3.2-0.1-4.8c-0.1-2.5,0-4.9-0.1-7.4
                         c-0.1-2.8-0.1-5.7-0.1-8.5c0-2.2,0-4.3-0.1-6.5c-0.1-4.2-0.1-8.3-0.2-12.4c2.9-0.2,5.9-0.1,8.8-0.1c2.5,0,4.9-0.1,7.4-0.1
                         c0,2.7,0.1,5.3,0.1,8c0.1,5,0.2,9.9,0.2,14.9C315,105.5,315.1,111.1,315.2,116.7L315.2,116.7z" />
                            <path id="lote_82" class="st7" d="M298.4,77.2c0,4.2,0.1,8.3,0.2,12.4c0.1,2.2,0,4.3,0.1,6.5c0.1,2.8,0,5.7,0.1,8.5
                         c0.1,2.5,0,4.9,0.1,7.4c0,1.6,0.1,3.2,0.1,4.8c-0.3,0-0.6,0-0.8,0c-2.4,0.1-4.8,0.1-7.2,0.1c-2.3-0.1-4.6,0.1-7,0.1
                         c-0.2,0-0.4,0-0.6,0c0-2.6,0.1-5.2-0.1-7.8c-0.1-2.5-0.1-5-0.1-7.5c-0.1-3.8-0.2-7.6-0.2-11.4c0-1.2,0-2.4-0.1-3.6
                         c-0.1-3.2,0-6.3-0.1-9.4c2.2,0,4.4,0,6.5-0.1C292.4,77.3,295.4,77.2,298.4,77.2L298.4,77.2z" />
                            <path id="lote_81" class="st7" d="M282.9,77.4c0.1,3.2,0,6.3,0.1,9.4c0,1.2,0.1,2.4,0.1,3.6c0,3.8,0.1,7.6,0.2,11.4
                         c0,2.5,0,5,0.1,7.5c0.2,2.6,0,5.2,0.1,7.8c-3.9,0.1-7.7,0.1-11.6,0.2c-1.2,0-2.4,0-3.5,0.1c0-3.8,0-7.6-0.2-11.3
                         c-0.1-2.5,0-4.9-0.1-7.4c-0.1-2.6,0-5.2-0.1-7.8c-0.1-2.4,0-4.8-0.1-7.2c-0.1-2-0.1-4.1-0.1-6.1c4.5-0.1,8.9-0.1,13.3-0.1
                         C281.7,77.5,282.3,77.3,282.9,77.4L282.9,77.4z" />
                            <path id="lote_80" class="st8" d="M252.4,117.7c0-1.9-0.1-3.9-0.1-5.8c-0.1-3.1-0.3-6.2-0.5-9.3c-0.2-3.1-0.4-6.2-0.7-9.3
                         c-0.3-3.5-0.7-7.1-1.1-10.6c-0.1-1.5-0.3-2.9-0.5-4.4c-0.1-0.6,0.3-0.4,0.6-0.4c3.8-0.1,7.6-0.1,11.4-0.2c2.1,0,4.2-0.1,6.4-0.1
                         c0,2,0,4.1,0.1,6.1c0.1,2.4,0,4.8,0.1,7.2c0.1,2.6,0,5.2,0.1,7.8c0.1,2.4,0,4.9,0.1,7.4c0.1,3.8,0.1,7.6,0.2,11.3
                         C263,117.5,257.7,117.6,252.4,117.7L252.4,117.7z" />
                            <path id="lote_79" class="st7" d="M252.4,117.7c5.3-0.1,10.6-0.2,16-0.2c1.2,0,2.4,0,3.5-0.1c3.9-0.1,7.7-0.1,11.6-0.2
                         c0.2,0,0.4,0,0.6,0c2.3,0,4.6-0.2,7-0.1c0,1.4,0,2.9,0.1,4.3c0.1,4,0.1,8.1,0.2,12.1c-0.8,0.2-1.6,0.1-2.4,0.1c-0.1,0-0.3,0-0.4,0
                         c-3.9,0.1-7.9,0.1-11.8,0.2c-5,0.1-10,0.2-15,0.2c-3.4,0.1-6.8,0.1-10.2,0.1c0.1-1.8,0.2-3.5,0.4-5.3c0.3-3.5,0.4-7,0.4-10.5
                         C252.3,118.2,252.2,117.9,252.4,117.7L252.4,117.7z" />
                            <path id="lote_78" class="st7" d="M289,133.6c0,5.1,0.1,10.1,0.2,15.2c-0.7,0-1.3,0-2,0c-0.2,0-0.4-0.1-0.5,0.1
                         c-3.6,0.1-7.2,0.1-10.8,0.1c-2.2,0-4.4,0.1-6.6,0.1c-5.3,0.1-10.5,0.1-15.8,0.2c-1.2,0-2.3,0.1-3.5,0.1c0.2-1.8,0.4-3.6,0.5-5.5
                         c0.2-1.7,0.4-3.5,0.6-5.2c0.2-1.6,0.3-3.1,0.5-4.7c3.4-0.1,6.8-0.1,10.2-0.1c5-0.1,10-0.2,15-0.2c3.9-0.1,7.9-0.1,11.8-0.2
                         C288.7,133.6,288.8,133.6,289,133.6L289,133.6z" />
                            <path id="lote_77" class="st7" d="M286.7,149c0,3.5,0,7.1,0,10.6c0,2.1,0,4.1,0,6.2c-0.2,0-0.5,0-0.7,0.1c-1.1,0-2.3,0-3.4,0.1
                         c-4.7,0.1-9.4,0.1-14.1,0.2c-2.2,0-4.4,0.1-6.5,0.1c-4.6,0.1-9.2,0.1-13.8,0.2c0.2-2.3,0.4-4.6,0.7-6.9c0.3-3.2,0.7-6.4,1.1-9.6
                         c0-0.1,0.1-0.2,0.1-0.3c1.2,0,2.3,0,3.5-0.1c5.3-0.1,10.5-0.2,15.8-0.2c2.2,0,4.4-0.1,6.6-0.1C279.5,149.1,283.1,149.1,286.7,149
                         L286.7,149z" />
                            <path id="lote_76" class="st7" d="M286,165.8c0.2,1.9,0,3.8,0.1,5.7c0.1,3.3,0.1,6.6,0.1,9.9c-0.6,0.1-1.2-0.1-1.7,0.1
                         c-2.5,0-5,0-7.4,0.1c-2,0.1-4,0.1-5.9,0.1c-5.4,0.1-10.7,0.2-16.1,0.2c-2.4,0-4.9,0.1-7.4,0.1c-0.3,0-0.6,0.1-0.9,0.1
                         c0.1-1.7,0.2-3.5,0.4-5.2c0.1-1.6,0.3-3.2,0.4-4.9c0.2-1.9,0.4-3.8,0.6-5.6c4.6-0.1,9.2-0.1,13.8-0.2c2.2,0,4.4-0.1,6.5-0.1
                         c4.7-0.1,9.4-0.1,14.1-0.2C283.7,165.9,284.8,165.8,286,165.8L286,165.8z" />
                            <path id="lote_75" class="st7" d="M284.5,181.5c0,1.5,0,2.9,0.1,4.4c0,2.9,0.1,5.8,0.1,8.6c0,1.1,0.1,2.1,0.1,3.2c0,0-0.1,0-0.1,0
                         c-1.1,0-2.1,0.1-3.2,0.1c-5,0.1-10.1,0.2-15.1,0.2c-2.5,0-4.9,0.1-7.4,0.1c-4.4,0.1-8.7,0.1-13.1,0.2c0-3.4,0.2-6.7,0.4-10.1
                         c0.1-2.1,0.3-4.1,0.4-6.1c0.3,0,0.6-0.1,0.9-0.1c2.4,0,4.9-0.1,7.4-0.1c5.4-0.1,10.7-0.2,16-0.2c2,0,4,0,5.9-0.1
                         C279.5,181.5,282,181.5,284.5,181.5L284.5,181.5z" />
                            <path id="lote_74" class="st7" d="M284.9,213.3c-2.6,0-5.2,0.1-7.9,0.1c-5.2,0.1-10.5,0.2-15.7,0.2c-2.3,0-4.7,0.1-7,0.1
                         c-2.8,0.1-5.6,0.1-8.4,0.2c-0.2-4.3-0.1-8.6-0.1-12.8c0-0.9,0.1-1.9,0.1-2.9c4.4-0.1,8.7-0.1,13.1-0.2c2.5,0,4.9-0.1,7.4-0.1
                         c5-0.1,10.1-0.2,15.1-0.2c1.1,0,2.1,0,3.2-0.1c0.2,2.6,0,5.3,0.1,8C284.9,208.2,284.8,210.8,284.9,213.3L284.9,213.3z" />
                            <path id="lote_73" class="st7" d="M284.9,229.1v-15.7c0,0,0,0,0-0.1c-2.6,0-5.2,0.1-7.9,0.1c-5.2,0.1-10.5,0.2-15.7,0.2
                         c-2.3,0-4.7,0.1-7,0.1c-2.8,0.1-5.6,0.1-8.4,0.2c0,1.2,0,2.3,0.1,3.5c0.1,2.1,0.1,4.2,0.2,6.4c0.1,1.9,0.1,3.9,0.3,5.8
                         c5.3-0.1,10.5-0.2,15.8-0.2c2.5,0,5.1-0.1,7.6-0.1c4.8-0.1,9.5-0.2,14.2-0.2c0.2,0,0.3,0,0.5,0
                         C284.7,229.1,284.8,229.1,284.9,229.1L284.9,229.1L284.9,229.1z" />
                            <path id="lote_72" class="st7" d="M246.5,229.7c5.3-0.1,10.5-0.2,15.8-0.2c2.5,0,5.1-0.1,7.6-0.1c4.8-0.1,9.5-0.2,14.2-0.2
                         c0.2,0,0.3,0,0.5,0c0.2,5.1,0.3,10.2,0.2,15.4c-1.7,0-3.3,0.1-5,0.1c-2.4,0.1-4.8,0.1-7.2,0.1c-5.3,0.1-10.5,0.2-15.8,0.2
                         c-3.2,0.1-6.3,0.1-9.5,0.1c-0.1-1.6-0.2-3.1-0.3-4.6c-0.1-2.2-0.2-4.4-0.4-6.7C246.6,232.4,246.5,231.1,246.5,229.7L246.5,229.7z" />
                            <path id="lote_71" class="st7" d="M285.2,258.5c-3.7,0-7.4,0.1-11.1,0.2c-2.4,0.1-4.9,0-7.3,0.1c-2.8,0-5.5,0.1-8.3,0.1
                         c-2,0-4,0-6,0.1c-1.4,0-2.8,0.1-4.2,0.1c-0.2-1.3-0.2-2.6-0.3-3.9c-0.2-3.3-0.4-6.5-0.6-9.8c0-0.1,0-0.2,0-0.3
                         c3.2-0.1,6.3-0.1,9.5-0.1c5.3-0.1,10.5-0.1,15.8-0.2c2.4-0.1,4.8-0.1,7.2-0.1c1.7,0,3.3-0.1,5-0.1c0,0,0.1,0,0.1,0
                         c0.1,4.5,0.1,9.1,0.2,13.6C285.2,258.3,285.2,258.4,285.2,258.5L285.2,258.5z" />
                            <path id="lote_70" class="st12" d="M266.9,289.1c-1.3,0.2-2.7,0.4-4,0.5c-2.1,0.2-4.2,0.4-6.4,0.6c-1.9,0.1-3.7,0.3-5.6,0.3
                         c-0.3,0-0.4-0.1-0.5-0.5c-0.1-2.4-0.3-4.8-0.5-7.2c-0.2-3.3-0.5-6.5-0.7-9.8c-0.2-2.3-0.3-4.6-0.5-6.9c-0.2-2.4-0.4-4.7-0.5-7
                         c1.4,0,2.8-0.1,4.2-0.1c2,0,4,0,6-0.1c2.8,0,5.5-0.1,8.3-0.1c0,2.1,0.1,4.2,0.1,6.3c0,4.2,0,8.4,0,12.6
                         C266.9,281.5,266.9,285.3,266.9,289.1L266.9,289.1z" />
                            <path id="lote_69" class="st10" d="M266.9,289.1c0-3.8,0-7.6,0-11.4c0-4.2,0-8.4,0-12.6c0-2.1,0-4.2-0.1-6.3
                         c2.4-0.1,4.9-0.1,7.3-0.1c3.7-0.1,7.4-0.1,11.1-0.2c0,1.3,0,2.6,0,4c0,2.8,0,5.7,0.1,8.5c0.1,2.5,0,4.9,0.1,7.4
                         c0.1,2.7,0.1,5.4,0.1,8c-1.8,0.5-3.7,0.8-5.6,1.1c-2.2,0.3-4.4,0.6-6.6,0.9C271.3,288.6,269.1,288.9,266.9,289.1L266.9,289.1z" />
                            <path id="lote_68" class="st10" d="M285,244.5c2.1,0,4.1,0,6.2-0.1c2.5-0.1,5.1,0,7.6-0.1c1.3-0.1,2.6-0.1,3.9-0.1
                         c0,2.5,0,5,0.1,7.5c0.1,2.6,0,5.2,0.1,7.8c0.1,2.4,0,4.8,0.1,7.2c0.1,2.8,0,5.6,0.1,8.4c0,1.6,0,3.3,0.1,4.9
                         c-1.5,0.8-3.1,1.4-4.6,2c-3.9,1.6-7.9,3-12,4c-0.3,0.1-0.7,0.1-1,0.2c-0.1-2.7,0-5.4-0.1-8c-0.1-2.5,0-4.9-0.1-7.4
                         c-0.1-2.8-0.1-5.7-0.1-8.5c0-1.3,0-2.6,0-4c0-0.1,0-0.3,0-0.4C285.2,253.6,285.1,249.1,285,244.5L285,244.5z" />
                            <path id="lote_67" class="st12" d="M303.3,280.1c0-1.6,0-3.3-0.1-4.9c-0.1-2.8,0-5.6-0.1-8.4c-0.1-2.4,0-4.8-0.1-7.2
                         c-0.1-2.6,0-5.2-0.1-7.8c-0.1-2.5-0.1-5-0.1-7.5c3.5-0.1,7-0.1,10.5-0.2c2.8-0.1,5.5,0,8.2-0.1c1.1,0,2.3,0,3.5-0.1
                         c0.1,2.1,0.3,4.1,0.4,6.1c0.2,2.8,0.4,5.6,0.7,8.5c0.2,2,0.4,4,0.6,6.1c0,0.4-0.1,0.7-0.4,1c-3.2,3.1-6.7,5.6-10.5,8
                         c-3.9,2.4-7.9,4.5-12,6.5C303.6,280.1,303.5,280.1,303.3,280.1L303.3,280.1z" />
                            <path id="lote_66" class="st7" d="M284.9,229.1c-0.1,0-0.2,0-0.3,0.1c0.2,5.1,0.3,10.2,0.2,15.4c0,0,0.1,0,0.1,0
                         c2.1,0,4.1,0,6.2-0.1c2.5-0.1,5.1,0,7.6-0.1c1.3-0.1,2.6-0.1,3.9-0.1c3.5-0.1,7-0.1,10.5-0.2c2.8-0.1,5.5,0,8.2-0.1
                         c1.1,0,2.3,0,3.5-0.1c-0.1-2.1-0.2-4.2-0.3-6.3c-0.1-2.8-0.2-5.6-0.3-8.5L284.9,229.1L284.9,229.1L284.9,229.1z" />
                            <rect id="lote_65" x="284.9" y="213.4" class="st7" width="39.2" height="15.7" />
                            <path id="lote_64" class="st7" d="M324.1,213.4c0-2.1,0-4.3,0.1-6.4c0-1.4,0-2.8,0-4.2c0-1.9,0.1-3.8,0.1-5.8c-2.8,0-5.6,0-8.4,0.1
                         c-2.2,0.1-4.5,0-6.8,0.1c-2.5,0.1-4.9,0-7.4,0.1c-2.3,0.1-4.6,0-6.9,0.1c-2.4,0.1-4.8,0-7.2,0.1c-1,0-2,0.1-3,0.1c0,0-0.1,0-0.1,0
                         c0.2,2.6,0,5.3,0.1,8c0.1,2.6,0,5.1,0.1,7.7c0,0,0,0,0,0.1H324.1L324.1,213.4z" />
                            <path id="lote_63" class="st7" d="M324.3,197c-2.8,0-5.6,0-8.4,0.1c-2.2,0.1-4.5,0-6.8,0.1c-2.5,0.1-4.9,0-7.4,0.1
                         c-2.3,0.1-4.6,0-6.9,0.1c-2.4,0.1-4.8,0-7.2,0.1c-1,0-2,0.1-3,0.1c0-1.1,0-2.1-0.1-3.2c-0.1-2.9-0.1-5.8-0.1-8.6
                         c0-1.5,0-2.9-0.1-4.4c0.6-0.2,1.2,0,1.7-0.1c2.1,0,4.3,0,6.4-0.1c2.5-0.1,5,0,7.4-0.1c2.6-0.1,5.1,0,7.7-0.1c2.4-0.1,4.9,0,7.3-0.1
                         c3.4-0.1,6.8-0.1,10.1-0.1c-0.1,2.3-0.3,4.5-0.4,6.8c-0.1,1.1-0.1,2.2-0.2,3.3C324.5,192.9,324.4,195,324.3,197L324.3,197z" />
                            <path id="lote_62" class="st7" d="M286,165.8c0.2,0,0.5,0,0.7-0.1c2.4,0.1,4.8-0.1,7.2-0.1c1.7,0,3.3,0,5-0.1
                         c2.8-0.1,5.5,0,8.3-0.1c2.4-0.1,4.9,0,7.3-0.1c2.7-0.1,5.4,0,8.1-0.1c1.4-0.1,2.8-0.1,4.2-0.1c-0.2,1.6-0.4,3.2-0.5,4.8
                         c-0.3,2.7-0.5,5.3-0.8,8c-0.1,0.9-0.2,1.9-0.2,2.8c-3.4,0-6.8,0-10.1,0.1c-2.4,0.1-4.9,0-7.3,0.1c-2.6,0.1-5.1,0-7.7,0.1
                         c-2.5,0.1-5,0-7.4,0.1c-2.1,0.1-4.3,0.1-6.4,0.1c0-3.3,0-6.6-0.1-9.9C286,169.6,286.2,167.7,286,165.8L286,165.8z" />
                            <path id="lote_61" class="st7" d="M328.8,148.3c-0.1,2.1-0.4,4.1-0.7,6.1c-0.3,2.4-0.6,4.7-0.9,7.1c-0.2,1.2-0.3,2.5-0.5,3.7
                         c-1.4,0-2.8,0-4.2,0.1c-2.7,0.1-5.4,0-8.1,0.1c-2.4,0.1-4.9,0-7.3,0.1c-2.8,0.1-5.5,0-8.3,0.1c-1.7,0.1-3.3,0-5,0.1
                         c-2.4,0-4.8,0.1-7.2,0.1c0-2.1,0-4.1,0-6.2c0-3.5,0-7.1,0-10.6c0.1-0.2,0.4-0.1,0.5-0.1c0.7,0,1.3,0,2,0c1.1,0,2.1,0,3.2-0.1
                         c2.8-0.1,5.5,0,8.3-0.1c2.7-0.1,5.4,0,8.1-0.1c2.7-0.1,5.5,0,8.2-0.1C320.9,148.3,324.9,148.3,328.8,148.3L328.8,148.3z" />
                            <path id="lote_60" class="st7" d="M289,133.6c0.8-0.1,1.6,0.1,2.4-0.1c2,0,4,0.1,6,0c2.5-0.1,5,0,7.5-0.1c2.5-0.1,5,0,7.5-0.1
                         c2.5-0.1,5,0,7.5-0.1c2.5-0.1,5.1,0,7.7-0.1c0.8,0,1.7-0.1,2.5-0.1c0,2.4-0.2,4.8-0.4,7.2c-0.2,2.5-0.5,5-0.7,7.6
                         c0,0.2-0.1,0.4-0.1,0.6c-4,0.1-7.9,0-11.9,0.1c-2.7,0.1-5.5,0-8.2,0.1c-2.7,0.1-5.4,0-8.1,0.1c-2.8,0.1-5.5,0-8.3,0.1
                         c-1.1,0-2.1,0.1-3.2,0.1C289,143.8,289,138.7,289,133.6L289,133.6z" />
                            <path id="lote_59" class="st7" d="M330.5,122.4c-0.2,0.1-0.1,0.3-0.1,0.4c0,2-0.1,4.1-0.1,6.1c0,1.3-0.1,2.7-0.2,4
                         c-0.8,0-1.7,0.1-2.5,0.1c-2.5,0.1-5.1,0-7.7,0.1c-2.5,0.1-5,0-7.5,0.1c-2.5,0.1-5,0-7.5,0.1c-2.5,0.1-5,0-7.5,0.1c-2,0.1-4,0-6,0
                         c-0.1-4-0.1-8.1-0.2-12.1c0-1.4,0-2.9-0.1-4.3c2.4-0.1,4.8-0.1,7.2-0.1c0.3,0,0.6,0,0.8,0c5.4-0.1,10.8-0.2,16.1-0.2
                         c0.2,0.2,0.4,0.1,0.6,0.1c1.4,0,2.8-0.1,4.2-0.1c3.5-0.1,6.9-0.1,10.4-0.2l0,0l0,0L330.5,122.4L330.5,122.4z" />
                        </g>
                        <g id="zona_5">
                            <path id="lote_58" class="st7" d="M444.6,75.1c0.7,0,1.4,0,2.1,0c2.8,0.2,5.5,0.9,7.9,2.3c1.6,0.9,3.3,1.7,4.9,2.7l0,0
                         c-0.6-0.1-1.1-0.6-1.7-0.7c0,1.2,0,2.5,0,3.7c0,3.2,0.1,6.3,0.1,9.5c0,3.2,0.1,6.5,0.1,9.7c0.1,5.5,0.1,11,0.2,16.5
                         c0,1.2,0.1,2.3,0,3.5c-4.8,0.1-9.5,0.1-14.3,0.2c-0.2,0-0.4,0-0.7,0c0-4.6-0.1-9.2-0.1-13.7c0-3.2-0.1-6.4-0.1-9.6
                         c0-3.2-0.1-6.3-0.1-9.5s-0.1-6.3-0.1-9.5c0-1.4-0.1-2.9-0.1-4.3c0-0.4-0.2-0.4-0.5-0.4" />
                            <path id="lote_57" class="st7" d="M443.4,122.3c-3.2,0.2-6.5,0.1-9.7,0.2c-2.1,0.1-4.2,0.1-6.3,0.1c0-0.8,0-1.7,0-2.5
                         c0-3.2-0.1-6.5-0.1-9.7c0-3.2-0.1-6.3-0.1-9.5c0-3.7-0.1-7.4-0.1-11.1c0-1.8,0-3.5-0.1-5.3c0-2.8-0.1-5.7-0.1-8.6
                         c0-0.3,0.1-0.4,0.4-0.4c0.9,0,1.7,0,2.6-0.1c0.8,0,1.7,0.1,2.5-0.1c0.2-0.2,0.5-0.1,0.8-0.1c1,0.2,2,0.1,3,0.1c2.1,0,4.1,0,6.2-0.1
                         c0.3,0,0.5,0,0.5,0.4c0,1.4,0,2.9,0.1,4.3c0,3.2,0.1,6.3,0.1,9.5s0.1,6.3,0.1,9.5c0,3.2,0.1,6.4,0.1,9.6
                         C443.3,113.2,443.3,117.8,443.4,122.3L443.4,122.3z" />
                            <path id="lote_56" class="st7" d="M427.2,75.5c-0.3,0-0.4,0.1-0.4,0.4c0,2.8,0.1,5.7,0.1,8.6c0,1.8,0,3.5,0.1,5.3
                         c0,3.7,0.1,7.4,0.1,11.1c0,3.2,0.1,6.3,0.1,9.5c0,3.2,0.1,6.5,0.1,9.7c0,0.8,0,1.7,0,2.5c-1.8,0-3.7,0-5.5,0.1
                         c-2.6,0-5.3,0.1-8,0.1c-0.6,0-1.2,0-1.9-0.1v0c0-4.9-0.1-9.8-0.2-14.7c0-2.7-0.1-5.3-0.1-8c0-3.7-0.1-7.4-0.1-11.1
                         c0-3.2-0.1-6.3-0.1-9.5c0-1.1-0.1-2.2-0.1-3.3c0-0.3-0.1-0.4-0.4-0.4" />
                            <path id="lote_55" class="st7" d="M408.9,122.9c-1,0-2,0-2.9,0c-3.3,0-6.6,0.1-9.9,0.1c-0.1-4.3-0.1-8.5-0.2-12.8
                         c0-3.2-0.1-6.4-0.1-9.6c0-3.7-0.1-7.3-0.1-11c0-1.8,0-3.6-0.1-5.4c0-2.7-0.1-5.4-0.1-8.1c0.4-0.1,0.8-0.1,1.1,0
                         c0.9,0.2,1.7,0.2,2.6,0c0.8-0.2,1.5-0.2,2.3-0.1c0.5,0.1,1.1,0.1,1.7,0.1c0.2,0,0.5,0,0.7,0c0.6-0.1,1.3,0.1,1.9-0.1
                         c0.8-0.2,1.5-0.2,2.3-0.1c0.5,0.1,1.1,0.1,1.7,0.1c0.4,0,0.9,0,1.3,0c0.3,0,0.4,0.1,0.4,0.4c0,1.1,0,2.2,0.1,3.3
                         c0,3.2,0.1,6.3,0.1,9.5c0,3.7,0.1,7.4,0.1,11.1c0,2.7,0.1,5.3,0.1,8c0.1,4.9,0.1,9.8,0.2,14.7C411,123,410,122.8,408.9,122.9
                         L408.9,122.9z" />
                            <path id="lote_54" class="st7" d="M393.1,76c0.8,0,1.6-0.1,2.5-0.1c-0.1,2.7,0,5.4,0.1,8.1c0,1.8,0,3.6,0.1,5.4
                         c0,3.7,0.1,7.3,0.1,11c0,3.2,0.1,6.4,0.1,9.6c0.1,4.3,0.1,8.5,0.2,12.8c-5,0.1-10.1,0.1-15.1,0.2c-0.1-2.2-0.1-4.4-0.1-6.6
                         c-0.1-4.5-0.1-9-0.1-13.5c0-3.2-0.1-6.3-0.1-9.5c0-3.2-0.1-6.4-0.1-9.6c0-2.3-0.1-4.6-0.1-6.9c0-0.5-0.1-0.6-0.6-0.6" />
                            <path id="lote_53" class="st7" d="M365,123.3c0-4.4-0.1-8.8-0.1-13.2c0-4.3-0.1-8.6-0.1-12.9c0-3.6-0.1-7.2-0.1-10.7
                         c0-3.1-0.1-6.2-0.1-9.3c0-0.4,0.1-0.6,0.6-0.6c0.4,0,0.9,0.1,1.3-0.1c1.4-0.2,2.7-0.2,4.1-0.1c0.9,0.2,1.7,0.2,2.5,0
                         c1.4-0.2,2.7-0.2,4.1-0.1c0.1,0.2,0.4,0.1,0.5,0.1c0.8,0,1.6,0,2.4,0c0.4,0,0.6,0.1,0.6,0.6c0,2.3,0,4.6,0.1,6.9
                         c0,3.2,0.1,6.4,0.1,9.6c0,3.2,0.1,6.3,0.1,9.5c0,4.5,0.1,9,0.1,13.5c0,2.2,0,4.4,0.1,6.6c-2.1,0-4.2,0.1-6.3,0.1
                         C371.5,123.2,368.2,123.3,365,123.3L365,123.3z" />
                            <path id="lote_52" class="st8" d="M365,123.3c-3.3,0.1-6.6,0.1-9.9,0.2c-1.9,0-3.7,0.1-5.6,0.1c-0.1-2.7-0.2-5.3-0.3-8
                         c-0.3-6-0.7-12.1-1-18.1c-0.3-5.2-0.7-10.4-1-15.6c-0.1-1.4-0.2-2.9-0.3-4.3c-0.1-0.7,0.2-0.8,0.7-0.8c1.6,0,3.2-0.1,4.8-0.1
                         c4.5-0.1,8.9-0.2,13.4-0.2c0.2,0,0.4,0,0.5,0c-0.4,0.2-0.9,0.1-1.3,0.1c-0.5,0-0.6,0.1-0.6,0.6c0.1,3.1,0.1,6.2,0.1,9.3
                         c0,3.6,0.1,7.2,0.1,10.7c0,4.3,0.1,8.6,0.1,12.9C364.9,114.5,364.9,118.9,365,123.3z" />
                            <path id="lote_51" class="st7" d="M409.1,139.5c-1.2,0-2.5,0-3.7,0.1c-0.6,0-1.2,0-1.8,0.1c-0.2,0-0.4,0-0.7,0c-3,0-6,0.1-8.9,0.1
                         c-3.1,0-6.3,0.1-9.4,0.1c-4.5,0.1-9,0.1-13.5,0.2c-2.5,0-5,0.1-7.4,0.1c-5,0.1-10.1,0.1-15.2,0.2c0.2-1.8,0.3-3.5,0.5-5.2
                         c0.4-3.8,0.6-7.6,0.5-11.5c1.9,0,3.7-0.1,5.6-0.1c3.3-0.1,6.6-0.1,9.9-0.2c3.2,0,6.5-0.1,9.8-0.1c2.1,0,4.2-0.1,6.3-0.1
                         c5-0.1,10.1-0.1,15.1-0.2c3.3,0,6.6-0.1,9.9-0.1c1,0,2,0,2.9,0c0,4.9,0.1,9.8,0.2,14.7C409.1,138.2,409.2,138.8,409.1,139.5
                         L409.1,139.5z" />
                            <path id="lote_50" class="st7" d="M348.5,140.2c5-0.1,10.1-0.1,15.2-0.2c2.5,0,5-0.1,7.4-0.1c4.5-0.1,9-0.1,13.5-0.2
                         c3.1,0,6.3-0.1,9.4-0.1c3,0,6-0.1,8.9-0.1c0.2,0,0.4,0,0.7,0c0,2.7,0,5.4,0.1,8.1c0,2.7,0.1,5.4,0.1,8.1c-3.1,0.1-6.1,0.1-9.2,0.1
                         c-0.5-0.1-1,0.1-1.5,0.1c-3.2,0.1-6.4,0-9.6,0.1c-3.2,0.1-6.4,0-9.6,0.1c-3.1,0.1-6.3,0-9.4,0.1c-3.2,0.1-6.4,0-9.6,0.1
                         c-2.7,0.1-5.5,0-8.2,0c0.2-1.8,0.4-3.6,0.6-5.4c0.2-1.9,0.5-3.8,0.7-5.7C348.1,143.7,348.3,142,348.5,140.2L348.5,140.2z" />
                            <path id="lote_49" class="st7" d="M346.6,156.6c2.7,0,5.5,0.1,8.2,0c3.2-0.1,6.4,0,9.6-0.1c3.1-0.1,6.3,0,9.4-0.1
                         c3.2-0.1,6.4,0,9.6-0.1c3.2-0.1,6.4-0.1,9.6-0.1c0.5,0,1-0.2,1.5-0.1c0,4.9,0.1,9.9,0.1,14.8c0,0.2,0,0.5,0.1,0.7
                         c-1.5,0-3,0-4.4,0.1c-1.5,0-3,0-4.5,0.1c-0.2-0.1-0.4-0.1-0.6-0.1c-1.8,0-3.6,0.1-5.5,0.1c-3.2,0-6.4,0.1-9.6,0.1
                         c-3.2,0-6.4,0.1-9.5,0.1c-5.3,0.1-10.5,0.1-15.8,0.2c0.1-1.3,0.2-2.5,0.4-3.8c0.2-1.9,0.5-3.8,0.7-5.6
                         C346.1,160.7,346.3,158.6,346.6,156.6L346.6,156.6z" />
                            <path id="lote_48" class="st7" d="M343.7,187.3c0.2-4.9,0.5-9.7,1-14.5c0-0.2,0.1-0.4,0.1-0.6c5.3-0.1,10.5-0.1,15.8-0.2
                         c3.2,0,6.4-0.1,9.5-0.1c3.2,0,6.4-0.1,9.6-0.1c1.8,0,3.6-0.1,5.5-0.1c0.2,0,0.4,0,0.6,0.1c0,0.2,0,0.4,0,0.7c0,4.8,0,9.6,0,14.3
                         c-0.2,0-0.5,0-0.7,0c-13.5,0-27,0-40.5,0c-0.9,0-0.8,0-0.8,0.9" />
                            <path id="lote_47" class="st7" d="M359.9,202.5c0-0.1,0-0.3,0-0.4c0-0.4-0.1-0.5-0.5-0.5c-0.5,0-1,0.1-1.5,0.1
                         c-2.6,0.1-5.2,0-7.8,0.1c-1.9,0.1-3.8,0.1-5.8,0c-0.6,0-1,0.1-1,0.8c-0.1-0.1,0.1-0.4-0.1-0.5c0-0.6-0.1-1.2,0-1.8
                         c0.3-0.1,0.2-0.3,0.2-0.5c0.1-2.1,0.1-4.3,0.2-6.5c0.1-1.9,0.1-3.9,0.2-5.8c0-0.9,0-0.9,0.8-0.9c13.5,0,27,0,40.5,0
                         c0.2,0,0.5,0,0.7,0c0,4.8,0,9.7,0,14.5c-0.1,0-0.2,0-0.4,0c-4,0.1-8.1,0.1-12.1,0.2c-4.1,0.1-8.3,0.1-12.5,0.2
                         C360,201.6,360,201.6,359.9,202.5" />
                            <path id="lote_46" class="st12" d="M343.4,202.6c0-0.7,0.4-0.8,1-0.8c1.9,0,3.8,0.1,5.8,0c2.6-0.1,5.2,0,7.8-0.1
                         c0.5,0,1-0.1,1.5-0.1c0.4,0,0.5,0.1,0.5,0.5c0,0.1,0,0.3,0,0.4c0,9.1,0,18.2,0,27.3c0,0.4,0,0.9-0.2,1.2h0c-0.8,0.2-1.5,0.7-2,1.3
                         l0,0c-0.2,0-0.4,0-0.3,0.2l0,0c-0.2,0-0.4,0-0.3,0.2l0,0c-0.2,0-0.4,0-0.3,0.2l0,0c-0.6,0.2-1.2,0.5-1.5,1.1h0
                         c-0.4,0-0.7,0.3-0.9,0.6l0,0c-0.3,0.1-0.6,0.2-0.7,0.6c-0.1,0.1-0.3,0.1-0.4,0.2c-0.1,0.2-0.5,0.1-0.4,0.5l0,0
                         c-0.6,0.3-1,0.7-1.3,1.2v0c-0.2,0-0.3,0.1-0.2,0.3c-0.1,0.2-0.2,0.3-0.4,0.4c-0.2-0.1-0.2,0-0.3,0.1l0,0c-0.1,0-0.1,0.1-0.1,0.1
                         l0,0c-0.1,0-0.1,0.1-0.1,0.1l0,0c-0.1,0-0.1,0.1-0.1,0.1l0,0c-0.1,0-0.1,0.1-0.1,0.1l0,0c-0.1,0-0.1,0.1-0.1,0.1l0,0
                         c-0.1,0-0.1,0.1-0.1,0.1l0,0c-0.1,0.1-0.3,0.1-0.1,0.3c-0.1,0.2-0.2,0.3-0.4,0.4c-0.6,0.1-0.8,0.7-1.1,1.1l0,0
                         c-0.1,0-0.1,0.1-0.1,0.1l0,0c-0.1,0.1-0.3,0.1-0.1,0.3v0h0c-0.4,0-0.5,0.4-0.7,0.6l0,0c-0.1,0.1-0.2,0.1-0.1,0.3l0,0
                         c-0.1-0.1-0.2,0-0.1,0.1l0,0c-0.6,0.3-1.2,0.3-1.8,0.1l0,0c-0.7-0.8-0.7-1.7-0.6-2.6c-0.1-0.2-0.1-0.4-0.2-0.6c0,0,0.1-0.1,0.1-0.1
                         c-0.1-1.6-0.3-3.1-0.5-4.7c0-0.1,0-0.3,0-0.4c-0.4-3.1-0.5-6.2-0.5-9.2c0-5,0-10,0.1-15C343.3,207.2,343.3,204.9,343.4,202.6
                         L343.4,202.6z" />
                            <path id="lote_45" class="st10" d="M360,230.8c-0.1-0.3,0-0.6,0-0.9c0-9.1,0-18.3,0-27.4c0-0.9,0-0.9,1-0.9
                         c4.1-0.1,8.3-0.1,12.5-0.2c4-0.1,8.1-0.1,12.1-0.2c0.1,0,0.2,0,0.4,0c0,4.3,0,8.6,0,12.9c0,0.6,0,0.6,0.6,0.3
                         c0.6-0.3,1.2-0.8,1.9-1l0,0c-1.8,1.1-3.6,2.2-5.4,3.3C375.2,221.3,367.5,225.9,360,230.8L360,230.8z" />
                            <path id="lote_44" class="st10" d="M385.9,186.7c0-4.8,0-9.6,0-14.3c0-0.2,0-0.4,0-0.7c1.5-0.2,3-0.1,4.5-0.1c1.5,0,3-0.1,4.4-0.1
                         c2.8,0,5.6-0.1,8.4-0.1c0.2,0,0.5,0,0.7,0c0,10.9,0,21.8,0,32.7c-0.5,0.2-0.9,0.5-1.3,0.8c-0.5,0.2-1,0.5-1.4,0.8
                         c-0.5,0.2-1,0.5-1.4,0.8c-0.5,0.2-1,0.5-1.5,0.8c-0.2,0.1-0.5,0.1-0.6,0.4c-0.6,0.1-1,0.5-1.5,0.8c-0.7,0.3-1.4,0.7-2,1.2
                         c-0.2,0.1-0.5,0.1-0.6,0.4c-0.6,0.1-1,0.5-1.5,0.8c-0.2,0.1-0.5,0.2-0.6,0.4c-0.7,0.3-1.4,0.7-2,1.2c-0.2,0.1-0.5,0.1-0.6,0.4
                         c-0.2,0.1-0.5,0.1-0.6,0.4c-0.7,0.2-1.2,0.7-1.9,1c-0.6,0.3-0.6,0.3-0.6-0.3c0-4.3,0-8.6,0-12.9
                         C385.8,196.4,385.8,191.5,385.9,186.7L385.9,186.7z" />
                            <path id="lote_43" class="st10" d="M403.9,171.5c2-0.1,4.1-0.1,6.2-0.1c5.3-0.1,10.6-0.1,15.9-0.2c3.1,0,6.3-0.1,9.4-0.1
                         c2.3,0,4.5-0.1,6.8-0.1c0.2,0,0.4-0.1,0.6,0.1c-3.1,4.3-6.2,8.6-9.4,12.8c-2.5,3.2-5.4,5.9-8.8,8.1c-3.2,2.1-6.3,4.3-9.6,6.1
                         c-3.7,2-7.3,4.1-10.9,6.2c0,0-0.1-0.1-0.1-0.1C403.9,193.3,403.9,182.4,403.9,171.5L403.9,171.5z" />
                            <path id="lote_42" class="st10" d="M403.8,155.8c3,0.1,6-0.1,8.9-0.1c1.8,0,3.5,0,5.3-0.1c3.7,0,7.4-0.1,11.1-0.1
                         c3.2,0,6.4-0.1,9.6-0.1c4.6-0.1,9.2-0.1,13.8-0.2c0.1,0,0.3,0,0.4,0c-0.5,1.1-1.2,2.2-1.9,3.2c-2.6,4.1-5.3,8.1-8,12
                         c-0.1,0.2-0.2,0.3-0.3,0.5c-0.2-0.2-0.4-0.1-0.6-0.1c-2.3,0-4.5,0.1-6.8,0.1c-3.1,0-6.3,0.1-9.4,0.1c-5.3,0.1-10.6,0.1-15.9,0.2
                         c-2,0-4.1,0.1-6.2,0.1c-0.2,0-0.5,0-0.7,0c-2.8,0-5.6,0.1-8.4,0.1c0-0.2-0.1-0.5-0.1-0.7c0-4.9-0.1-9.9-0.1-14.8
                         C397.6,155.9,400.7,155.9,403.8,155.8L403.8,155.8z" />
                            <path id="lote_41" class="st10" d="M409.1,139.5c2.3,0.1,4.6-0.1,6.9-0.1c1.8,0,3.6,0,5.3-0.1c3.7,0,7.4-0.1,11.1-0.1
                         c3.2,0,6.3-0.1,9.5-0.1c3.2,0,6.4-0.1,9.6-0.1c3.2,0,6.3-0.1,9.5-0.1c0.4,0,0.8,0,1.3-0.1c-0.6,1.3-1.3,2.5-2,3.7
                         c-2.3,4.1-4.6,8.1-6.9,12.2c-0.1,0.2-0.2,0.4-0.4,0.5c-0.1,0-0.3,0-0.4,0c-4.6,0.1-9.2,0.1-13.8,0.2c-3.2,0-6.4,0.1-9.6,0.1
                         c-3.7,0-7.4,0.1-11.1,0.1c-1.8,0-3.5,0-5.3,0.1c-3,0-6,0.1-8.9,0.1c0-2.7-0.1-5.4-0.1-8.1c0-2.7-0.1-5.4-0.1-8.1
                         c0.6,0,1.2-0.1,1.8-0.1C406.7,139.5,407.9,139.5,409.1,139.5L409.1,139.5z" />
                            <path id="lote_40" class="st10" d="M471.5,122c-0.1,0.6-0.4,1-0.7,1.4c-2.7,5-5.5,10-8.2,14.9c-0.1,0.1-0.1,0.3-0.3,0.4
                         c-0.4,0-0.8,0.1-1.3,0.1c-3.2,0-6.3,0.1-9.5,0.1c-3.2,0-6.4,0.1-9.6,0.1c-3.2,0-6.3,0.1-9.5,0.1c-3.7,0-7.4,0.1-11.1,0.1
                         c-1.8,0-3.6,0.1-5.3,0.1c-2.3,0-4.6,0.1-6.9,0.1c0.1-0.6,0-1.3,0-1.9c-0.1-4.9-0.1-9.8-0.2-14.7c1-0.1,2.1,0.1,3.1-0.1v0
                         c0.6,0.2,1.2,0.1,1.9,0.1c2.6,0,5.3-0.1,8-0.1c1.8,0,3.7-0.1,5.5-0.1c2.1,0,4.2,0,6.3-0.1c3.2-0.1,6.5,0.1,9.7-0.2
                         c0.2,0,0.4,0,0.7,0c4.8-0.1,9.5-0.1,14.3-0.2C462.7,122.1,467.1,122.2,471.5,122L471.5,122L471.5,122z" />
                            <path id="lote_39" class="st12" d="M483.2,92.6c0,0.1,0.1,0.2,0.2,0.1c0.1,0.3,0.4,0.5,0.6,0.7c1.1,1.6,1.2,3.3,0.2,5.1
                         c0,0.1,0,0.2,0,0.2c-0.4,0.3-0.6,0.8-0.7,1.3c-0.6,0.7-1,1.5-1.3,2.4c-0.4,0.4-0.6,0.8-0.7,1.3c-0.4,0.3-0.6,0.8-0.7,1.3
                         c-0.4,0.3-0.5,0.7-0.6,1.1c-0.4,0.4-0.6,0.8-0.7,1.3c-0.4,0.3-0.6,0.8-0.7,1.3c-0.4,0.3-0.5,0.7-0.6,1.1c-0.4,0.4-0.6,0.8-0.7,1.3
                         c-0.6,0.7-1,1.5-1.3,2.4c-0.4,0.3-0.6,0.8-0.7,1.3c-0.4,0.3-0.5,0.7-0.6,1.1c-0.4,0.4-0.6,0.8-0.7,1.3c-0.6,0.7-1,1.5-1.3,2.4
                         c-0.6,0.7-0.9,1.5-1.3,2.3c-4.4,0.2-8.8,0.1-13.1,0.2c0.1-1.2,0-2.3,0-3.5c0-5.5-0.1-11-0.2-16.5c0-3.2-0.1-6.5-0.1-9.7
                         c0-3.2-0.1-6.3-0.1-9.5c0-1.2,0-2.5,0-3.7c0.6,0.1,1.1,0.7,1.7,0.7c0,0,0,0.1,0,0.1c1.4,0.8,2.8,1.6,4.3,2.2c0,0,0,0,0.1,0
                         c0,0,0,0.1,0,0.1c1.4,0.8,2.8,1.6,4.3,2.2c0,0,0,0,0.1,0c1.4,0.9,2.8,1.7,4.3,2.3c0.6,0.5,1.3,0.8,2,1.1c0.7,0.6,1.4,0.9,2.3,1.2
                         c0.6,0.5,1.3,0.8,2,1.1c0.7,0.6,1.4,0.9,2.3,1.2c0.5,0.5,1.1,0.8,1.8,1C482.9,92.6,483.1,92.6,483.2,92.6L483.2,92.6z" />
                        </g>
                        <g id="zona_4">
                            <polygon id="lote_38" class="st7" points="646.5,62 649.5,110 665,109.1 662.2,61 	" />
                            <path id="lote_37" class="st7" d="M631.2,67l2.5,44l15.7-1l-2.9-48l-8.8,0.5c-2.4,0.5-4.7,1-6.7,1.6L631.2,67z" />
                            <path id="lote_36" class="st7" d="M615.9,73.3l2.3,38.7l15.6-0.9L631,64.1c-5.6,1.7-10.8,3.9-15.3,6.6L615.9,73.3L615.9,73.3z" />
                            <path id="lote_35" class="st10" d="M595.6,88.6l1.4,24.5l21.2-1.2l-2.5-41.2C608.4,74.8,601.2,80.7,595.6,88.6z" />
                            <polygon id="lote_34" class="st10" points="618.2,111.9 597,113.1 599.9,160.2 621,159.1 	" />
                            <polygon id="lote_33" class="st7" points="633.8,111 618.2,111.9 621,159.1 636.6,158.2 	" />
                            <polygon id="lote_32" class="st7" points="649.5,110 633.8,111 636.6,158.2 652.3,157.4 	" />
                            <polygon id="lote_31" class="st7" points="665,109.1 649.5,110 652.3,157.4 667.9,156.6 	" />
                            <polygon id="lote_30" class="st8" points="698.6,139.1 667,140.9 667.9,156.6 706.9,154.5 705.9,138.6 	" />
                            <polygon id="lote_29" class="st7" points="701.7,122.8 666,124.9 667,140.9 705.9,138.6 705,122.5 	" />
                            <polygon id="lote_28" class="st7" points="701.7,106.9 665,109.1 666,124.9 705,122.5 704,106.7 	" />
                            <polygon id="lote_27" class="st7" points="664,93 665,109.1 704,106.7 703,90.7 	" />
                            <polygon id="lote_26" class="st7" points="663.2,77 664,93 703,90.7 702.1,74.7 	" />
                            <polygon id="lote_25" class="st8" points="662.4,63.1 663.2,77 702.1,74.7 701.1,58.8 662.2,61 	" />
                        </g>
                        <g id="zona_3">
                            <polygon id="lote_24" class="st10" points="601.6,185.4 603.2,219.2 621,218.3 618.7,178.5 601,179.3 	" />
                            <polygon id="lote_23" class="st7" points="618.8,180 621,218.3 636.7,217.5 634.3,177.8 618.7,178.5 	" />
                            <polygon id="lote_22" class="st7" points="634.5,180.6 636.7,217.5 652.4,216.8 650,177 634.3,177.8 	" />
                            <polygon id="lote_21" class="st7" points="650,179 652.4,216.8 668,216 665.6,176.1 650,177 	" />
                            <polygon id="lote_20" class="st7" points="665.7,178.6 668,216 683.5,215.2 681.1,175.2 665.6,176.1 	" />
                            <polygon id="lote_19" class="st7" points="681.3,177.2 683.5,215.2 699.2,214.2 696.8,174.3 681.1,175.2 	" />
                            <polygon id="lote_18" class="st7" points="696.9,177.1 699.2,214.2 714.7,213.2 712.4,173.4 696.8,174.3 	" />
                            <polygon id="lote_17" class="st7" points="712.6,176.8 714.7,213.2 730.3,212.2 728,172.4 712.4,173.4 	" />
                            <polygon id="lote_16" class="st7" points="728.1,175 728,172.4 743.6,171.4 745.9,211.2 730.3,212.2 	" />
                            <polygon id="lote_15" class="st7" points="764.2,172.8 763.6,210.1 745.9,211.2 743.6,171.4 764.2,170.2 	" />
                        </g>
                        <g id="zona_2">
                            <polygon id="lote_14" class="st8" points="735,152.7 764.5,151 764.8,134.9 724.7,137.3 725.7,153.2 	" />
                            <polygon id="lote_13" class="st7" points="764.8,134.9 724.7,137.3 723.8,121.4 765,118.9 	" />
                            <polygon id="lote_12" class="st7" points="765,118.9 723.8,121.4 722.8,105.5 765.3,102.9 	" />
                            <polygon id="lote_11" class="st7" points="765.3,102.9 722.8,105.5 721.9,89.5 765.5,86.9 	" />
                            <polygon id="lote_10" class="st7" points="765.5,86.9 721.9,89.5 721,73.7 763.9,71 	" />
                            <polygon id="lote_9" class="st8" points="763.9,71 721,73.7 720,57.7 762.1,55.1 	" />
                        </g>
                        <g id="zona_1">
                            <polygon id="lote_8" class="st11" points="756.4,0.1 760,36.2 744.7,37.1 742.2,0.1 	" />
                            <polygon id="lote_7" class="st11" points="728.9,38 726.3,0.1 742.2,0.1 744.7,37.1 	" />
                            <polygon id="lote_6" class="st11" points="713.1,38.8 710.9,0.5 726.3,0.1 728.9,38 	" />
                            <polygon id="lote_5" class="st11" points="697.6,39.5 713.1,38.8 710.9,0.5 695.2,0.7 	" />
                            <polygon id="lote_4" class="st11" points="679.7,1 681.9,40.8 697.6,39.5 695.2,0.7 	" />
                            <polygon id="lote_3" class="st11" points="666.3,41.7 681.9,40.8 679.7,1 664,1.1 	" />
                            <polygon id="lote_2" class="st11" points="648.3,1.1 650.8,42.6 666.3,41.7 664,1.1 	" />
                            <path id="lote_1" class="st12" d="M645.4,1.1h2.8l2.5,41.4l-12,0.7c-10.6,0.5-22.5,4.8-35.5,12.7c-1,0.3-1.8,0-2.6-0.8l-3-4.2
                         l11.8-7.9l25.6-23.5L645.4,1.1L645.4,1.1z" />
                        </g>
                    </svg>

                </div> <!-- ./#svgcontainer -->


            </div> <!-- /.col-9 -->
            
            <div class="col-2 px-0 col-aside d-flex flex-column justify-content-around">

                <div class="wrapper-aside px-4">
                    <div id="logo" class="col-12 p-0 text-center">
                        <img class="d-block img-fluid mt-3" src="assets/img/logo.png" alt="LEVANA">
                    </div>
                    <hr class="my-4">
                </div>
                <div class="wrapper-aside p-4 ">
                    <!-- <div id="minimap" class="mini">
                        <div></div>
                    </div> -->
                    <table class="table mb-0">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col fs-6">Concepto</th>
                                <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Predio</th>
                                <td id="lvnId">-</td>
                            </tr>
                            <tr>
                                <th scope="row">Manzana</th>
                                <td id="lvnMzn">-</td>
                            </tr>
                            <tr id="lvnCategClr" class="lvn-categ_color">
                                <th scope="row">Categoría</th>
                                <td id="lvnCateg">-</td>
                            </tr>
                            <tr>
                                <th scope="row">Area m<sup>2</sup></th>
                                <td id="lvnMt">-</td>
                            </tr>
                            <tr>
                                <th scope="row">Estatus</th>
                                <td id="estatus">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wrapper-aside p-4">
                    <div class="bg-primary p-4 text-center" style="color: #fff; position:relative;">
                        <div id="arrowCheck" class="d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path>
                            </svg>
                        </div>
                        <span class="available">PRECIOS</span>
                    </div>
                    <!-- p class="fn-bold mb-0">Lista de precios</p -->
                    <!-- id="lvnPrecioClr" class="lvn-categ_color" -->
                    <table class="table m-0 align-middle">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col fs-6">Concepto</th>
                                <th scope="col">Cantidad (MXN)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="width:40%;">m<sup>2</sup></th>
                                <td id="lvnPM2">-</td>
                            </tr>
                            <tr>
                                <th scope="row">18 meses</th>
                                <td id="lvnP18">-</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- div id="wrapperTbPrecios" class="d-none">
                            <table id="tbPrecios" class="table table-striped table-bordered m-0 align-middle table-sm">
                                <tr> <th style="width:40%;">a 3 meses</th> <td id="lvnP3">num</td> </tr>
                                <tr> <th>a 6 meses</th> <td id="lvnP6">num</td> </tr>
                                <tr> <th>a 9 meses</th> <td id="lvnP9">num</td> </tr>
                                <tr> <th>a 12 meses</th> <td id="lvnP12">num</td> </tr>
                                <tr> <th>a 15 meses</th> <td id="lvnP15">num</td> </tr>
                                <tr> <th>a 18 meses</th> <td id="lvnP18">num</td> </tr>
                            </table>
                        </div -->
                </div>

            </div> <!-- /.col-2 -->
        </div> <!-- /.row.d-flex -->
    </div> <!-- /#main.container-fluid -->

    <!-- Modal Renders -->
    <div class="modal fade" id="mapaModal" tabindex="-1" aria-labelledby="mapaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="mapaModalLabel">
                        <img class="d-block img-fluid" src="assets/img/logo.png" alt="LEVANA">
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body amenidades-info">
                    <img id="renderAmenidad" class="img-responsive d-block w-100" src="assets/img/amenidades/alberca.jpg" alt="">
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div class="amenidades-info">
                        <p>Amenidades, <strong id="wAmenidad">Alberca</strong></p>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <!--button type="button" class="btn btn-primary">Save changes</button-->

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- script src="lotes.js"></script -->
    <script>
        <?php
        // array Lotes para mapa
        $sql = "SELECT * FROM lotes";
        $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
        //create an array
        $lotesarray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $lotesarray[] = $row;
        }
        echo "const lotes = ";
        echo json_encode($lotesarray);
        echo ";\n";
        ?>

        const myModal = new bootstrap.Modal(document.getElementById("mapaModal"), {});

        $(function() {
            console.log("JQuery", lotes.length);
            let obj = new Object();
            let _curr; // lote actual
            // LOTE No Disponible
            for (let i = 0; i < lotes.length; i++) {
                let item = lotes[i].estatus;
                if (item == "1") { // vendido
                    // $("[id*='lote_'"+(i+1)+"]")
                    $("#lote_" + (i + 1)).addClass('vendido');
                    console.log(i, " : VENDIDO", item, "CAMBIO DE CLASE", lotes[i].cls);

                } // else{console.log(i, " : ", lotes[i]);}
            }
            // [0] click en lote (svg)
            $("[id*='lote_']").on('click', function(e) {
                e.preventDefault();
                let num = $(this).attr('id').split("_");
                _curr = parseInt(num[1]) || (Math.floor(Math.random() * 10));
                // $('#exampleModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
                mostrarLote(_curr);
                // open Modal
                // myModal.show();
            });
            // [00] click en lotePrev y loteNext
            $("#lotePrev, #loteNext").on('click', function(e) {
                e.preventDefault();
                console.log($(this).attr('id'), lotes.length, _curr);
                if ($(this).attr('id') == "loteNext") {
                    _curr = (_curr == 117) ? 117 : _curr + 1;
                } else {
                    _curr = (_curr == 1) ? 1 : _curr - 1;
                }
                mostrarLote(_curr);
            });
            // [0] click en render (svg)
            $("svg .jardin").on('click', function(e) {
                e.preventDefault();
                let who = $(this).attr('id');
                // _curr = parseInt(num[1]) || (Math.floor(Math.random()*10));
                // $('#mapaModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
                renderJardin(who); // alberca
                console.log(who);
                /*
		$('.lotes-info').hide();
		$('.amenidades-info').show();		// open Modal
		$('.modal-dialog').addClass('modal-fullscreen-sm-down-bye');
        */
                myModal.show();
            });
            //
            function mostrarLote(_curr) {
                console.log("fn::mostrarLote", _curr);
                obj = lotes[_curr - 1];
                if (obj != undefined) {
                    // Lote disponible
                    if (obj.estatus == "0") {
                        let _class = obj.cls;
                        $("#lvnId").text(obj.id);
                        $("#lvnMzn").text(obj.mzn);
                        $("#lvnCateg").text(obj.categ);
                        $("#lvnMt").text(obj.mt);
                        $("#estatus").text(obj.estatus);
                        // PRECIOS
                        $("#lvnPM2").text(obj.lvnPM2);
                        $("#lvnP18").text(obj.lvnP18);

                        $('#lvnCategClr, #arrowCheck').attr('class', '').addClass(_class);
                        $('#arrowCheck').addClass('bx-tada');
                        $('#minimap').attr('class', '').addClass('mmap_' + obj.id);
                        if (obj.id < 118) {
                            $('#minimap').addClass('mmap-show');
                        }
                        console.log("LOTE_ = ", obj, '_class = ' + _class, "_curr = " + _curr);
                    } else {

                    }
                }
            }

            function renderJardin(who) {
                // IMG render renderAmenidad assets/img/amenidades [jpg]
                $("#renderAmenidad").attr("src", "assets/img/amenidades/" + who + ".jpg");
                let _txt = (who != "alberca") ? ((who == "terraza") ? "terraza 1" : "terraza 2") : "alberca";
                _txt = (who == "petpark" || who == "juegosyfogatero") ? ((who == "petpark") ? "pet park" : "juegos y fogatero") : _txt;
                $("#wAmenidad").text(_txt);
            }

        }); // JQuery	    
    </script>

</body>