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
    <title>Maqueta Vía Levana | Levana</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<meta name="description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta name="keywords" content="levana, vida levana, predios, lotes, fraccionamiento, desarrollo, inmobiliario, Aguascalientes, terrenos">
    <meta name="author" content="Vida Levana">
    <meta property="og:title" content="Maqueta Vía Levana | Levana">
    <meta property="og:description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta property="og:image" content="images/ogportada.jpg">
    <meta property="og:url" content="https://vidalevana.com">
    <style>
body{
    background-color: #ededed;
}
/*.row > div,
.row{
    outline: 1px solid #ededed;
}*/


#main{
	background-color: #ededed;
    display: flex;
    align-items: center;
}
#main .row.d-flex{
  min-height: 65vh;
  align-items: center;
}
.col-aside{
    align-self: stretch;
    background-color: #fff;
}

th, td{ text-align: center;}
thead{ text-transform: uppercase; font-size:0.65em;}
    
#svgcontainer{text-align: center;}
#svgmap{
    width: 100%;
    min-width: 705px;
    max-width: 45vw;
    margin: 0;
}
#svgmap [id*='lote_'], #svgmap #entrada,
#svgmap .jardin{
		cursor: pointer;
        fill-opacity: 0.65;
        transition: all .25s ease-in;
      }
    #svgmap .jardin .fijo{fill-opacity: 1;}
	#svgmap [id*='lote_']:hover, #svgmap [id*='lote_']:focus,
    #svgmap #entrada:hover, #svgmap #entrada:focus,
	#svgmap .jardin:hover, #svgmap .jardin:focus{
        fill-opacity: 1;
      }

    [id*='lote2a'], [id*='lotecc']{
		fill-opacity: 0.25;
		stroke: silver !important;
	}

    .cls-2, .st5 {background-color: #ef7f96;}
	.cls-6, .st2 {background-color: #98bfd5;}
	.cls-3, .st3 {background-color: #d2c98f;}

    .vendido{
        background-color: #ededed !important;
        fill: #ededed !important;
        stroke: silver !important;
        border: 1px solid silver !important;
        cursor: default !important;
    }

    .main-wrapper{
        position: relative;
    }

    /* RENDER modal (fijo) */
    .modal-dialog{
      min-width: 50vw !important;
    }
    .modal-content .modal-header img{
    max-width: 240px;
    }

	#minimap{
	position: absolute;
	width: 200px;
	height: 200px;
	background-image: url('assets/img/levana_oriente.jpg');
	background-color: transparent;
	background-repeat: no-repeat;
	box-shadow: 1px 1px 6px #333, 0 0 12px rgba(0,0,0,0.25);
	right: 2em;
    top: 10%; /*2em;*/
	border: 1px solid silver;
	border-radius: 6px;
    background-position: 0 -1380px;
	background-size: 1900px auto;
	transition: all 1.5s ease-in-out;
	transition-delay: 0.5s;

	}


    #minimap.mmap_1{ background-position: -375px -1570px; background-size: 2220px auto; }
	#minimap.mmap_2{ background-position: -375px -1470px; background-size: 2220px auto; }	    
	#minimap.mmap_3{ background-position: -375px -1370px; background-size: 2220px auto; }
	#minimap.mmap_4{ background-position: -375px -1270px; background-size: 2210px auto; }
	#minimap.mmap_5{ background-position: -375px -1188px; background-size: 2210px auto; }
	#minimap.mmap_6{ background-position: -378px -1108px; background-size: 2210px auto; }
	#minimap.mmap_7{ background-position: -378px -1038px; background-size: 2210px auto; }
	#minimap.mmap_8{ background-position: -378px -958px; background-size: 2200px auto; }
	#minimap.mmap_9{ background-position: -378px -868px; background-size: 2200px auto; }
	#minimap.mmap_10{ background-position: -375px -790px; background-size: 2180px auto; }
    #minimap.mmap_11{ background-position: -365px -700px; background-size: 2160px auto; }
	#minimap.mmap_12{ background-position: -355px -620px; background-size: 2160px auto; }
	#minimap.mmap_13{ background-position: -345px -535px; background-size: 2160px auto; }
	#minimap.mmap_14{ background-position: -518px -525px; background-size: 2160px auto; }
	#minimap.mmap_15{ background-position: -528px -614px; background-size: 2160px auto; }
	#minimap.mmap_16{ background-position: -538px -674px; background-size: 2160px auto; }
	#minimap.mmap_17{ background-position: -540px -752px; background-size: 2150px auto; }
	#minimap.mmap_18{ background-position: -540px -828px; background-size: 2145px auto; }
	#minimap.mmap_19{ background-position: -540px -908px; background-size: 2145px auto; }
	#minimap.mmap_20{ background-position: -538px -982px; background-size: 2145px auto; }
	#minimap.mmap_21{ background-position: -538px -1065px; background-size: 2145px auto; }
	#minimap.mmap_22{ background-position: -532px -1145px; background-size: 2140px auto; }
	#minimap.mmap_23{ background-position: -532px -1225px; background-size: 2140px auto; }
	#minimap.mmap_24{ background-position: -532px -1295px; background-size: 2140px auto; }
	#minimap.mmap_25{ background-position: -532px -1405px; background-size: 2140px auto; }
	#minimap.mmap_26{ background-position: -530px -1495px; background-size: 2140px auto; }
    
	#minimap.mmap_27{ background-position: -800px -1625px; background-size: 2130px auto; }
	#minimap.mmap_28{ background-position: -805px -1525px; background-size: 2130px auto; }
	#minimap.mmap_29{ background-position: -805px -1430px; background-size: 2130px auto; }
	#minimap.mmap_30{ background-position: -805px -1350px; background-size: 2130px auto; }
	#minimap.mmap_31{ background-position: -805px -1280px; background-size: 2130px auto; }
	#minimap.mmap_32{ background-position: -808px -1195px; background-size: 2130px auto; }
	#minimap.mmap_33{ background-position: -808px -1115px; background-size: 2130px auto; }
	#minimap.mmap_34{ background-position: -810px -1050px; background-size: 2130px auto; }
	#minimap.mmap_35{ background-position: -815px -975px; background-size: 2130px auto; }
	#minimap.mmap_36{ background-position: -815px -900px; background-size: 2130px auto; }
	#minimap.mmap_37{ background-position: -815px -820px; background-size: 2130px auto; }
	#minimap.mmap_38{ background-position: -810px -740px; background-size: 2130px auto; }
	#minimap.mmap_39{ background-position: -805px -670px; background-size: 2130px auto; }
	#minimap.mmap_40{ background-position: -795px -590px; background-size: 2120px auto; }
    #minimap.mmap_41{ background-position: -785px -510px; background-size: 2120px auto; }
	#minimap.mmap_42{ background-position: -775px -435px; background-size: 2120px auto; }
	#minimap.mmap_43{ background-position: -770px -350px; background-size: 2120px auto; }

	#minimap.mmap_44{ background-position: -940px -350px; background-size: 2125px auto; }
	#minimap.mmap_45{ background-position: -950px -420px; background-size: 2125px auto; }
	#minimap.mmap_46{ background-position: -958px -500px; background-size: 2125px auto; }
	#minimap.mmap_47{ background-position: -962px -575px; background-size: 2125px auto; }
	#minimap.mmap_48{ background-position: -970px -645px; background-size: 2125px auto; }
	#minimap.mmap_49{ background-position: -978px -710px; background-size: 2120px auto; }
	#minimap.mmap_50{ background-position: -978px -790px; background-size: 2120px auto; }
	#minimap.mmap_51{ background-position: -978px -870px; background-size: 2120px auto; }
	#minimap.mmap_52{ background-position: -978px -940px; background-size: 2120px auto; }
	#minimap.mmap_53{ background-position: -975px -1035px; background-size: 2120px auto; }
	#minimap.mmap_54{ background-position: -975px -1105px; background-size: 2120px auto; }
	#minimap.mmap_55{ background-position: -975px -1185px; background-size: 2120px auto; }
	#minimap.mmap_56{ background-position: -970px -1260px; background-size: 2120px auto; }
	#minimap.mmap_57{ background-position: -970px -1330px; background-size: 2120px auto; }
	#minimap.mmap_58{ background-position: -970px -1418px; background-size: 2120px auto; }
	#minimap.mmap_59{ background-position: -965px -1510px; background-size: 2120px auto; }
	#minimap.mmap_60{ background-position: -965px -1600px; background-size: 2120px auto; }

	#minimap.mmap_61{ background-position: -1235px -520px; background-size: 2145px auto; }
	#minimap.mmap_62{ background-position: -1235px -450px; background-size: 2145px auto; }
	#minimap.mmap_63{ background-position: -1225px -350px; background-size: 2145px auto; }
	#minimap.mmap_64{ background-position: -1210px -270px; background-size: 2145px auto; }
	#minimap.mmap_65{ background-position: -1200px -140px; background-size: 2150px auto; }
	#minimap.mmap_66{ background-position: -1330px -140px; background-size: 2165px auto; }
	#minimap.mmap_67{ background-position: -1380px -250px; background-size: 2165px auto; }
	#minimap.mmap_68{ background-position: -1400px -350px; background-size: 2165px auto; }
	#minimap.mmap_69{ background-position: -1410px -430px; background-size: 2165px auto; }
	#minimap.mmap_70{ background-position: -1410px -510px; background-size: 2150px auto; }
	#minimap.mmap_71{ background-position: -1540px -610px; background-size: 2090px auto; }
	#minimap.mmap_72{ background-position: -1430px -610px; background-size: 2100px auto; }
	#minimap.mmap_73{ background-position: -1360px -630px; background-size: 2120px auto; }
	#minimap.mmap_74{ background-position: -1280px -630px; background-size: 2120px auto; }
	#minimap.mmap_75{ background-position: -1205px -640px; background-size: 2120px auto; }

	#minimap.mmap_76{ background-position: -1205px -900px; background-size: 2100px auto; }
	#minimap.mmap_77{ background-position: -1285px -895px; background-size: 2100px auto; }
	#minimap.mmap_78{ background-position: -1370px -895px; background-size: 2105px auto; }
	#minimap.mmap_79{ background-position: -1441px -890px; background-size: 2105px auto; }
	#minimap.mmap_80{ background-position: -1515px -885px; background-size: 2105px auto; }
	#minimap.mmap_81{ background-position: -1600px -880px; background-size: 2110px auto; }
	#minimap.mmap_82{ background-position: -1675px -874px; background-size: 2115px auto; }
	#minimap.mmap_83{ background-position: -1685px -1045px; background-size: 2115px auto; }
	#minimap.mmap_84{ background-position: -1615px -1050px; background-size: 2115px auto; }
    #minimap.mmap_85{ background-position: -1545px -1055px; background-size: 2115px auto; }
    #minimap.mmap_86{ background-position: -1465px -1060px; background-size: 2115px auto; }
    #minimap.mmap_87{ background-position: -1392px -1065px; background-size: 2115px auto; }
	#minimap.mmap_88{ background-position: -1310px -1075px; background-size: 2115px auto; }
	#minimap.mmap_89{ background-position: -1240px -1080px; background-size: 2115px auto; }

	#minimap.mmap_90{ background-position: -1220px -1595px; background-size: 2070px auto; }
	#minimap.mmap_91{ background-position: -1214px -1500px; background-size: 2070px auto; }
	#minimap.mmap_92{ background-position: -1216px -1440px; background-size: 2070px auto; }
	#minimap.mmap_93{ background-position: -1216px -1355px; background-size: 2070px auto; }
	#minimap.mmap_94{ background-position: -1230px -1280px; background-size: 2100px auto; }
	#minimap.mmap_95{ background-position: -1340px -1315px; background-size: 2070px auto; }
	#minimap.mmap_96{ background-position: -1400px -1310px; background-size: 2070px auto; }
	#minimap.mmap_97{ background-position: -1480px -1300px; background-size: 2070px auto; }
	#minimap.mmap_98{ background-position: -1555px -1294px; background-size: 2070px auto; }
	#minimap.mmap_99{ background-position: -1625px -1294px; background-size: 2070px auto; }
	#minimap.mmap_100{ background-position: -1705px -1290px; background-size: 2070px auto; }
	#minimap.mmap_101{ background-position: -1000px -910px; background-size: 1350px auto; }
	#minimap.mmap_102{ background-position: -1395px -1470px; background-size: 2050px auto; }
    #minimap.mmap_103{ background-position: -1125px -1260px; background-size: 1750px auto; }

    #minimap.mmap_104{ background-position: -1100px -1280px; background-size: 1550px auto; }
	#minimap.mmap_105{ background-position: -1070px -1325px; background-size: 1580px auto; }
	#minimap.mmap_106{ background-position: -1070px -1440px; background-size: 1680px auto; }
	#minimap.mmap_107{ background-position: -1015px -1440px; background-size: 1680px auto; }
	#minimap.mmap_108{ background-position: -950px -1440px; background-size: 1680px auto; }
	#minimap.mmap_109{ background-position: -900px -1455px; background-size: 1690px auto; }
	#minimap.mmap_110{ background-position: -840px -1460px; background-size: 1690px auto; }
	#minimap.mmap_111{ background-position: -765px -1465px; background-size: 1690px auto; }
	#minimap.mmap_112{ background-position: -715px -1485px; background-size: 1700px auto; }
	#minimap.mmap_113{ background-position: -660px -1485px; background-size: 1700px auto; }
	#minimap.mmap_114{ background-position: -590px -1500px; background-size: 1710px auto; }
	#minimap.mmap_115{ background-position: -525px -1500px; background-size: 1710px auto; }
	#minimap.mmap_116{ background-position: -460px -1500px; background-size: 1720px auto; }
	#minimap.mmap_117{ background-position: -400px -1485px; background-size: 1720px auto; }
        
    #minimap.mmap_118{ background-position: -345px -1475px; background-size: 1730px auto; }
    #minimap.mmap_119{ background-position: -290px -1460px; background-size: 1730px auto; }
    #minimap.mmap_120{ background-position: -220px -1470px; background-size: 1750px auto; }
    #minimap.mmap_121{ background-position: -175px -1450px; background-size: 1750px auto; }
    #minimap.mmap_122{ background-position: -100px -1380px; background-size: 1700px auto; }

#controls{
		position: relative;
		bottom: 10px;
		left: 10px;
	}
	#controls .btn{
		width: 34px;
		height: 32px;
		background-color: #fff;
		font-size: 1.5em;
		line-height: 0.5;
		text-align: center;
	}

    #arrowCheck{
  position: absolute;
  top:-12px;
  right: -12px;
  border-radius: 50%;
  padding: 1px;
  margin:0;
  line-height: 0;
  overflow:hidden;
  box-shadow: 0 1px 1px #000, 0 2px 3px #333, 0 3px 5px rgba(0, 0, 0, 0.35);
}
@-webkit-keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}

@keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}

.bx-tada
{
    -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
}
</style>
</head>
<body>
    <div id="main" class="container-fluid">
        <div class="row d-flex justify-content-center">
        <div class="col-11"  style="z-index:999;">
                <h1 style="margin-top:25px;margin-bottom: -159px;">VÍA LEVANA <br> 
                <a href="levana.php" class="btn btn-outline-primary">
                    Ir a Paseo Levana
                </a></h1>
                
            </div>
            <div class="col-9 main-wrapper">
                <div id="minimap" class="mini">
                    <div></div>
                  </div>
                <div id="svgcontainer">
                    <svg id="svgmap" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1700" height="100vh"
                    viewBox="-1.75 463 1700 800" style="enable-background:new -1.75 463 1700 800;" xml:space="preserve">
               <style type="text/css">
                   .st0{fill:#979290;}
                   .st1{fill:#8DA584;}
                   .st2{fill:#A5C5DB;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st3{fill:#D9CE90;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st4{fill:#A6C6DC;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st5{fill:#EF7D96;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st6{fill:#8DA685;}
                   .st7{fill:none;stroke:#979290;stroke-miterlimit:10;}
                   .st8{fill:#404F37;}
                   .st9{fill:none;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st10{fill:#E5DCAE;stroke:#010202;stroke-width:0.5;stroke-miterlimit:10;}
                   .st11{fill:#020203;}
                   .st12{fill:#12100B;}
                   .st13{fill:none;stroke:#1E1E1C;stroke-width:0.25;stroke-miterlimit:10;}
                   .st14{fill:none;stroke:#1E1E1C;stroke-miterlimit:10;}
               </style>
               <g id="manzana1">
                   <path id="mzn1calle" class="st0" d="M564.81,441.99l27.47,248.88l-5.56,269.86l-5.38,405.07c-0.12,8.73-8.22,15.16-16.75,13.27
                       l-230.42-50.99c-5.01-1.11-9.9-2.69-14.6-4.73l-28.84-12.5c-6.66-2.89-10.93-9.5-10.81-16.76l9.53-582.06l-27.89-265.8
                       c-0.48-4.54,2.41-8.75,6.81-9.95l86-23.41c5.41-1.47,10.05,4.1,7.62,9.16l-6.83,14.21c-2.34,4.87,1.27,10.5,6.68,10.4l82.1-1.47
                       l19.06-30.03c2.74-4.31,7.96-6.35,12.9-5.02l80.06,21.56C560.75,432.95,564.27,437.05,564.81,441.99z"/>
                   <path id="mzn1verde" class="st1" d="M346.7,429.82l0.34,9.26c0.15,4.16-2.86,7.76-6.98,8.35l-42.64,6.48
                       c-9.48,1.35-17.69-11.21-8.6-14.26l48.27-16.48C341.71,421.61,346.53,424.94,346.7,429.82z M470.92,433.72l78.05,5.81
                       c1.89,0.15,2.35-2.57,0.52-3.05l-81.7-20.18c-1.97-0.49-3.66,1.49-2.86,3.36L470.92,433.72z M336.52,1314.28l229.68,51.84
                       l1.32-68.35l-236.78,14.01L336.52,1314.28z"/>
                   <g id="mzn1lotes">
                       <path id="lote_26" class="st2" d="M435.37,1304.89c-0.1-0.51-0.21-0.89-0.24-1.27c-1.88-23.11-3.75-46.21-5.61-69.32
                           c-0.02-0.22,0.1-0.45,0.2-0.85c0.84-0.08,1.7-0.18,2.57-0.23c10.13-0.62,20.27-1.24,30.4-1.85c6.46-0.39,12.93-0.74,19.4-1.13
                           c6.62-0.4,13.25-0.83,19.87-1.24c3.11-0.19,6.22-0.38,9.34-0.57c9.34-0.55,18.68-1.07,28.02-1.64c8.94-0.54,17.87-1.13,26.81-1.68
                           c0.87-0.05,1.75-0.01,2.79-0.01c0.07,0.51,0.22,1.03,0.22,1.56c-0.04,3.92-0.09,7.84-0.16,11.75
                           c-0.28,14.79-0.57,29.58-0.87,44.37c-0.08,4.16-0.19,8.31-0.3,12.47c-0.01,0.55-0.11,1.09-0.19,1.79c-1.08,0.11-2.1,0.24-3.12,0.3
                           c-9.58,0.55-19.16,1.09-28.74,1.64c-10.78,0.63-21.55,1.27-32.32,1.91c-10.85,0.64-21.71,1.28-32.56,1.93
                           c-11.41,0.68-22.82,1.37-34.24,2.06C436.23,1304.91,435.84,1304.89,435.37,1304.89z"/>
                       <path id="lote_25" class="st3" d="M435.21,1231.93c-0.13-0.31-0.29-0.52-0.31-0.75c-1.81-22.31-3.61-44.61-5.4-66.92
                           c-0.02-0.3,0.06-0.61,0.11-1.06c0.91-0.09,1.77-0.17,2.62-0.25c0.88-0.08,1.75-0.17,2.63-0.22c6.7-0.39,13.41-0.75,20.11-1.16
                           c9.02-0.55,18.03-1.14,27.04-1.69c6.54-0.4,13.09-0.75,19.63-1.14c6.54-0.4,13.08-0.82,19.63-1.23c3.11-0.19,6.22-0.38,9.34-0.57
                           c9.34-0.55,18.67-1.08,28.01-1.64c3.43-0.2,6.86-0.46,10.29-0.68c0.39-0.03,0.79,0,1.32,0c0.1,0.47,0.27,0.92,0.27,1.36
                           c-0.01,2.56-0.06,5.12-0.11,7.67c-0.3,15.43-0.59,30.85-0.9,46.28c-0.08,4.08-0.19,8.15-0.31,12.23
                           c-0.01,0.54-0.11,1.07-0.17,1.67c-0.42,0.08-0.72,0.17-1.02,0.19c-5.19,0.33-10.37,0.64-15.56,0.96
                           c-7.02,0.43-14.04,0.87-21.06,1.3c-2.95,0.18-5.9,0.36-8.86,0.54c-9.34,0.55-18.67,1.08-28.01,1.64
                           c-10.61,0.63-21.22,1.28-31.84,1.93c-8.7,0.53-17.39,1.09-26.09,1.62C436.12,1232.03,435.66,1231.95,435.21,1231.93z"/>
                       <path id="lote_24" class="st3" d="M436.73,1161.55c-0.14-0.95-0.29-1.73-0.36-2.52c-1.81-22.47-3.62-44.94-5.42-67.41
                           c-0.02-0.22,0.09-0.45,0.16-0.8c0.37-0.07,0.74-0.17,1.12-0.2c4.55-0.3,9.09-0.59,13.64-0.87c7.42-0.46,14.84-0.91,22.26-1.36
                           c6.46-0.39,12.93-0.74,19.39-1.13c6.62-0.4,13.25-0.83,19.87-1.24c3.11-0.19,6.22-0.39,9.34-0.57c9.34-0.55,18.68-1.08,28.01-1.64
                           c8.62-0.52,17.23-1.07,25.85-1.6c0.31-0.02,0.63,0.03,1.07,0.05c0.08,0.47,0.2,0.92,0.23,1.37c0.04,0.48,0,0.96-0.01,1.44
                           c-0.44,22.22-0.89,44.45-1.33,66.67c-0.01,0.47-0.06,0.94-0.1,1.56c-0.47,0.11-0.9,0.26-1.35,0.3c-3.75,0.27-7.5,0.53-11.25,0.76
                           c-6.7,0.4-13.41,0.76-20.11,1.16c-9.02,0.55-18.03,1.14-27.05,1.69c-6.54,0.4-13.09,0.75-19.63,1.14
                           c-6.54,0.4-13.09,0.82-19.63,1.23c-2.95,0.18-5.91,0.36-8.86,0.54c-7.82,0.47-15.64,0.95-23.46,1.42
                           C438.42,1161.58,437.71,1161.55,436.73,1161.55z"/>
                       <path id="lote_23" class="st3" d="M432.71,1029.32c2.44-0.18,4.58-0.37,6.72-0.5c7.42-0.46,14.84-0.92,22.26-1.36
                           c6.46-0.39,12.93-0.74,19.39-1.13c6.62-0.4,13.24-0.83,19.87-1.24c2.95-0.18,5.9-0.37,8.86-0.54c9.34-0.55,18.68-1.07,28.01-1.64
                           c9.02-0.55,18.03-1.14,27.05-1.69c2.62-0.16,5.24-0.27,7.81-0.39c0.6,0.82,0.37,1.64,0.35,2.42c-0.14,7.99-0.3,15.99-0.45,23.98
                           c-0.2,10.55-0.39,21.1-0.59,31.65c-0.01,0.63-0.06,1.26-0.09,2.05c-0.5,0.1-0.94,0.24-1.39,0.27c-3.35,0.24-6.7,0.48-10.05,0.68
                           c-6.46,0.39-12.93,0.74-19.39,1.13c-6.62,0.4-13.24,0.83-19.87,1.24c-3.03,0.19-6.06,0.38-9.1,0.55
                           c-9.34,0.55-18.67,1.08-28.01,1.64c-10.61,0.63-21.23,1.28-31.84,1.93c-4.39,0.27-8.78,0.56-13.16,0.83
                           c-0.79,0.05-1.58,0.01-2.28,0.01c-0.61-0.72-0.49-1.47-0.54-2.17c-0.54-8.7-1.06-17.39-1.61-26.09
                           c-0.55-8.62-1.14-17.23-1.7-25.84C432.84,1033.27,432.8,1031.44,432.71,1029.32z"/>
                       <path id="lote_22" class="st3" d="M436.57,1027.85c-1.28-20.44-2.54-40.62-3.79-60.8c-0.02-0.3,0.08-0.6,0.15-1.05
                           c1-0.08,1.94-0.16,2.87-0.24c0.88-0.07,1.75-0.17,2.63-0.22c6.62-0.39,13.25-0.75,19.87-1.15c9.1-0.55,18.19-1.15,27.29-1.7
                           c6.46-0.4,12.93-0.74,19.39-1.13c6.62-0.4,13.24-0.83,19.87-1.24c3.11-0.19,6.22-0.39,9.34-0.57c9.34-0.55,18.68-1.08,28.01-1.64
                           c3.43-0.2,6.86-0.46,10.29-0.67c0.53-0.03,1.08,0.03,1.68,0.05c0.07,0.43,0.17,0.74,0.16,1.04c-0.39,20.3-0.78,40.6-1.18,60.98
                           c-0.67,0.13-1.2,0.28-1.74,0.32c-3.19,0.23-6.38,0.45-9.57,0.64c-6.62,0.39-13.25,0.75-19.87,1.15
                           c-6.46,0.39-12.92,0.82-19.39,1.22c-3.03,0.19-6.06,0.38-9.1,0.55c-9.34,0.55-18.68,1.08-28.01,1.64
                           c-10.53,0.63-21.07,1.27-31.6,1.91c-4.95,0.3-9.89,0.61-14.84,0.9C438.32,1027.89,437.61,1027.85,436.57,1027.85z"/>
                       <path id="lote_21" class="st3" d="M575.43,896.03c0.06,0.57,0.13,0.96,0.14,1.34c0.03,11.31-1.07,56.54-1.45,58.87
                           c-1.42,0.24-2.92,0.32-4.42,0.41c-6.62,0.4-13.25,0.75-19.87,1.16c-9.1,0.55-18.19,1.14-27.28,1.7
                           c-6.38,0.39-12.77,0.74-19.15,1.13c-6.78,0.41-13.56,0.84-20.34,1.26c-3.03,0.19-6.06,0.37-9.1,0.55
                           c-9.34,0.55-18.67,1.09-28.01,1.64c-1.84,0.11-3.67,0.25-5.5,0.36c-0.55,0.03-1.1,0-1.75,0c-0.36-1.08-0.39-2.11-0.45-3.12
                           c-0.39-6.3-0.75-12.61-1.16-18.91c-0.56-8.69-1.14-17.39-1.71-26.08c-0.2-3.03-0.39-6.06-0.57-9.09
                           c-0.05-0.79-0.01-1.59-0.01-2.52c0.43-0.11,0.87-0.28,1.32-0.31c4.87-0.32,9.73-0.61,14.6-0.92c6.7-0.42,13.4-0.84,20.1-1.25
                           c2.95-0.18,5.9-0.37,8.86-0.54c9.34-0.55,18.67-1.07,28.01-1.64c9.02-0.55,18.03-1.14,27.04-1.69c6.62-0.4,13.25-0.76,19.87-1.15
                           c6.38-0.38,12.76-0.8,19.15-1.2C574.22,896,574.7,896.03,575.43,896.03z"/>
                       <path id="lote_20" class="st3" d="M576.55,834.6c0.12,0.41,0.25,0.64,0.25,0.86c-0.36,19.42-0.74,38.84-1.12,58.25
                           c-0.01,0.31-0.1,0.62-0.18,1.03c-0.48,0.09-0.93,0.22-1.38,0.25c-3.67,0.26-7.33,0.52-11,0.74c-6.7,0.4-13.4,0.75-20.11,1.16
                           c-9.01,0.55-18.02,1.14-27.04,1.69c-6.46,0.4-12.93,0.74-19.39,1.14c-6.62,0.4-13.24,0.83-19.86,1.24
                           c-2.79,0.17-5.58,0.34-8.38,0.51c-8.38,0.51-16.75,1.02-25.13,1.51c-1.19,0.07-2.38,0.01-3.71,0.01
                           c-0.11-0.41-0.31-0.84-0.34-1.28c-0.36-5.5-0.69-11.01-1.04-16.51c-0.42-6.62-0.86-13.24-1.28-19.86
                           c-0.42-6.78-0.83-13.56-1.23-20.34c-0.03-0.54,0-1.08,0-1.73c0.6-0.1,1.05-0.21,1.51-0.23c8.14-0.5,16.27-0.98,24.41-1.48
                           c9.01-0.56,18.02-1.14,27.04-1.69c6.54-0.4,13.08-0.75,19.63-1.14c6.54-0.4,13.08-0.82,19.62-1.23c3.11-0.19,6.22-0.38,9.33-0.57
                           c9.33-0.55,18.67-1.08,28-1.64c3.43-0.2,6.86-0.45,10.29-0.67C575.75,834.58,576.07,834.6,576.55,834.6z"/>
                       <path id="lote_19" class="st3" d="M440.43,841.58c-0.11-1.02-0.24-1.96-0.3-2.9c-0.65-10.05-1.29-20.1-1.92-30.15
                           c-0.4-6.38-0.77-12.76-1.16-19.15c-0.14-2.23-0.3-4.47-0.43-6.7c-0.03-0.55,0-1.1,0-1.77c0.53-0.1,0.98-0.24,1.43-0.27
                           c7.98-0.49,15.96-0.97,23.93-1.46c9.09-0.56,18.19-1.15,27.28-1.71c6.46-0.4,12.93-0.75,19.39-1.14
                           c6.62-0.4,13.24-0.83,19.86-1.24c3.19-0.2,6.38-0.39,9.57-0.58c9.34-0.55,18.67-1.08,28.01-1.64c3.43-0.2,6.86-0.46,10.29-0.68
                           c0.47-0.03,0.95,0,1.53,0c0.09,0.51,0.21,0.96,0.23,1.42c0.03,0.64,0,1.28-0.02,1.92c-0.4,18.46-0.8,36.92-1.21,55.38
                           c-0.02,0.78-0.1,1.57-0.15,2.5c-1.58,0.23-3.08,0.35-4.57,0.43c-9.41,0.56-18.83,1.09-28.24,1.65
                           c-10.53,0.63-21.06,1.27-31.59,1.91c-10.61,0.64-21.22,1.28-31.83,1.93c-10.53,0.64-21.06,1.28-31.59,1.91
                           c-2.23,0.14-4.47,0.29-6.7,0.41C441.68,841.7,441.13,841.62,440.43,841.58z"/>
                       <path id="lote_18" class="st3" d="M579.23,709.86c0.07,0.43,0.17,0.73,0.17,1.03c0.11,4.88-1.14,58.06-1.42,60.08
                           c-0.39,0.07-0.84,0.19-1.29,0.22c-4.79,0.31-9.57,0.6-14.36,0.9c-6.7,0.42-13.4,0.84-20.1,1.26c-3.03,0.19-6.06,0.38-9.1,0.55
                           c-9.34,0.55-18.67,1.08-28.01,1.64c-10.61,0.63-21.22,1.27-31.83,1.93c-9.01,0.56-18.03,1.14-27.04,1.69
                           c-1.49,0.09-2.99,0.26-4.6,0.05c-0.07-0.59-0.15-1.05-0.18-1.51c-1.26-19.68-2.52-39.37-3.76-59.12c0.45-0.12,0.74-0.26,1.04-0.28
                           c4.3-0.29,8.6-0.59,12.9-0.85c10.21-0.63,20.42-1.25,30.64-1.86c6.62-0.4,13.25-0.75,19.87-1.15c6.46-0.39,12.92-0.82,19.38-1.22
                           c6.22-0.38,12.45-0.73,18.67-1.11c6.94-0.42,13.88-0.86,20.82-1.28c3.43-0.21,6.86-0.41,10.29-0.61c1.83-0.11,3.67-0.24,5.5-0.34
                           C577.61,709.83,578.38,709.86,579.23,709.86z"/>
                       <path id="lote_17" class="st3" d="M572.4,646.03c0.11,0.39,0.28,0.75,0.32,1.14c2.27,20.4,4.52,40.79,6.79,61.3
                           c-0.58,0.13-1.03,0.29-1.48,0.32c-5.26,0.33-10.53,0.64-15.79,0.97c-6.46,0.4-12.92,0.83-19.38,1.23
                           c-6.3,0.39-12.6,0.73-18.91,1.12c-6.86,0.42-13.72,0.85-20.58,1.28c-3.11,0.19-6.22,0.38-9.33,0.56
                           c-10.21,0.62-20.42,1.24-30.63,1.86c-6.38,0.38-12.76,0.75-19.15,1.11c-0.78,0.04-1.59,0.24-2.39-0.14
                           c-0.08-0.2-0.23-0.42-0.25-0.64c-1.32-20.57-2.63-41.14-3.94-61.82c0.5-0.13,0.94-0.32,1.39-0.35c3.83-0.27,7.65-0.54,11.48-0.77
                           c6.62-0.4,13.24-0.75,19.86-1.15c9.01-0.55,18.02-1.14,27.03-1.69c6.46-0.4,12.92-0.74,19.38-1.13c6.62-0.4,13.24-0.83,19.86-1.24
                           c3.03-0.19,6.06-0.37,9.09-0.56c7.82-0.47,15.63-0.95,23.45-1.41C570.27,645.93,571.31,645.76,572.4,646.03z"/>
                       <path id="lote_16" class="st3" d="M437.61,652.89c-1.28-20.06-2.54-39.83-3.79-59.5c0.7-0.7,1.45-0.61,2.15-0.65
                           c2.63-0.18,5.27-0.33,7.9-0.48c6.7-0.39,13.41-0.75,20.11-1.16c9.02-0.55,18.03-1.14,27.05-1.69c6.46-0.4,12.93-0.74,19.4-1.13
                           c6.62-0.4,13.25-0.83,19.87-1.24c2.95-0.18,5.91-0.36,8.86-0.54c7.9-0.48,15.8-0.96,23.7-1.43c0.87-0.05,1.74-0.01,2.78-0.01
                           c0.15,0.68,0.37,1.35,0.44,2.03c0.55,4.92,1.07,9.85,1.61,14.78c0.56,5.08,1.15,10.17,1.72,15.25c0.52,4.69,1.04,9.37,1.56,14.06
                           c0.44,3.97,0.89,7.94,1.32,11.92c0.05,0.47,0.01,0.95,0.01,1.54c-0.43,0.1-0.88,0.25-1.33,0.28c-8.54,0.52-17.08,1.01-25.62,1.54
                           c-9.02,0.55-18.03,1.14-27.05,1.69c-6.62,0.4-13.25,0.75-19.88,1.15c-6.46,0.39-12.93,0.82-19.39,1.22
                           c-5.99,0.37-11.97,0.72-17.96,1.08c-7.1,0.43-14.2,0.87-21.31,1.29C439.14,652.92,438.52,652.89,437.61,652.89z"/>
                       <path id="lote_15" class="st3" d="M431.01,592c-0.11-0.6-0.25-1.05-0.28-1.51c-1.5-21.36-2.99-42.72-4.49-64.2
                           c0.56-0.14,0.99-0.32,1.43-0.34c8.62-0.53,17.24-1.02,25.85-1.55c9.02-0.55,18.03-1.14,27.05-1.69c6.46-0.4,12.93-0.74,19.39-1.13
                           c6.62-0.4,13.24-0.83,19.87-1.24c2.71-0.17,5.43-0.34,8.14-0.5c9.26-0.55,18.51-1.09,27.77-1.63c0.79-0.05,1.58-0.01,2.27-0.01
                           c0.15,0.14,0.22,0.18,0.27,0.24c0.05,0.06,0.13,0.12,0.14,0.19c2.41,21.52,4.81,43.04,7.2,64.57c0.02,0.14-0.08,0.3-0.16,0.56
                           c-0.33,0.07-0.71,0.19-1.09,0.21c-4.87,0.31-9.73,0.62-14.6,0.92c-7.26,0.45-14.52,0.89-21.78,1.33
                           c-6.14,0.37-12.29,0.73-18.43,1.1c-7.02,0.43-14.04,0.86-21.06,1.29c-3.03,0.19-6.06,0.37-9.1,0.55
                           c-9.34,0.55-18.68,1.08-28.01,1.64c-6.22,0.37-12.44,0.8-18.67,1.19C432.18,592.03,431.63,592,431.01,592z"/>
                       <path id="lote_14" class="st4" d="M420.32,525.31c-0.12-1.06-0.25-1.84-0.3-2.63c-0.38-6.38-0.74-12.77-1.13-19.15
                           c-0.41-6.7-0.84-13.4-1.25-20.1c-0.17-2.79-0.34-5.58-0.51-8.38c-0.33-5.35-0.65-10.69-0.97-16.04c-0.04-0.61,0.03-1.23,0.06-1.91
                           c0.42-0.09,0.72-0.19,1.03-0.21c4.78-0.33,9.57-0.65,14.36-0.96c6.7-0.45,13.4-0.89,20.1-1.33c5.5-0.36,11.01-0.71,16.51-1.07
                           c6.62-0.44,13.24-0.88,19.86-1.32c5.74-0.38,11.49-0.73,17.23-1.11c6.38-0.42,12.76-0.86,19.14-1.28c2.63-0.18,5.26-0.35,7.9-0.52
                           c5.1-0.34,10.21-0.68,15.32-0.99c0.94-0.06,1.89-0.24,2.76,0.04c0.14,0.22,0.28,0.35,0.29,0.49c2.47,22.24,4.94,44.48,7.4,66.72
                           c0.04,0.39,0.01,0.78,0.01,1.3c-0.59,0.13-1.11,0.31-1.63,0.35c-5.98,0.37-11.97,0.71-17.95,1.07
                           c-6.94,0.42-13.88,0.85-20.82,1.28c-3.03,0.19-6.06,0.38-9.1,0.55c-9.34,0.55-18.67,1.08-28.01,1.64
                           c-10.61,0.63-21.22,1.27-31.84,1.93c-8.86,0.55-17.71,1.12-26.57,1.67C421.65,525.34,421.09,525.31,420.32,525.31z"/>
                       <path id="lote_13" class="st4" d="M414.74,457.21c0.16,0.28,0.29,0.41,0.3,0.55c1.37,22.33,2.73,44.66,4.09,67
                           c0.01,0.14-0.1,0.29-0.23,0.6c-0.77,0.07-1.62,0.16-2.48,0.23c-0.88,0.08-1.75,0.17-2.63,0.22c-9.41,0.55-18.83,1.09-28.24,1.65
                           c-10.61,0.63-21.22,1.28-31.83,1.93c-10.53,0.64-21.06,1.28-31.59,1.91c-10.61,0.64-21.22,1.28-31.83,1.93
                           c-1.59,0.1-3.18,0.22-4.86,0.33c-0.15-0.56-0.33-0.99-0.38-1.44c-1.01-9.61-1.99-19.23-3-28.85c-1.04-9.93-2.11-19.86-3.16-29.79
                           c-0.16-1.51-0.33-3.02-0.47-4.53c-0.08-0.87-0.11-1.74-0.17-2.71c0.56-0.12,1.01-0.28,1.46-0.31c7.81-0.52,15.63-1.02,23.44-1.53
                           c9.81-0.64,19.62-1.29,29.42-1.93c9.65-0.63,19.3-1.27,28.94-1.9c9.81-0.65,19.62-1.29,29.42-1.93
                           c7.26-0.48,14.51-0.96,21.77-1.43C413.43,457.17,414.13,457.21,414.74,457.21z"/>
                       <path id="lote_12" class="st5" d="M425.25,526.24c1.52,21.97,3.03,43.73,4.55,65.61c-0.52,0.13-0.96,0.31-1.4,0.34
                           c-5.11,0.33-10.21,0.63-15.32,0.95c-6.54,0.41-13.08,0.82-19.63,1.23c-3.03,0.19-6.06,0.38-9.1,0.55
                           c-9.34,0.55-18.68,1.08-28.01,1.64c-10.61,0.63-21.23,1.28-31.84,1.93c-7.9,0.48-15.8,0.96-23.7,1.44
                           c-2.23,0.14-4.47,0.28-6.7,0.41c-0.54,0.03-1.09,0-1.75,0c-0.17-0.89-0.36-1.65-0.44-2.42c-0.55-5.25-1.07-10.5-1.61-15.74
                           c-0.55-5.33-1.13-10.65-1.69-15.97c-0.54-5.17-1.07-10.33-1.61-15.5c-0.42-4.05-0.86-8.11-1.28-12.16
                           c-0.12-1.19-0.19-2.38-0.3-3.69c0.53-0.13,0.96-0.31,1.4-0.34c4.31-0.3,8.61-0.58,12.92-0.85c7.42-0.46,14.84-0.91,22.26-1.36
                           c6.46-0.39,12.93-0.74,19.39-1.13c6.7-0.41,13.4-0.84,20.11-1.26c3.11-0.19,6.22-0.38,9.34-0.56c9.34-0.55,18.68-1.08,28.01-1.64
                           c8.38-0.5,16.76-1.03,25.14-1.54C424.3,526.16,424.61,526.2,425.25,526.24z"/>
                       <path id="lote_11" class="st5" d="M298.62,661.28c-0.2-1.54-0.4-2.87-0.54-4.2c-1.92-18.42-3.82-36.85-5.74-55.38
                           c0.59-0.14,1.03-0.31,1.48-0.34c6.06-0.37,12.13-0.71,18.19-1.08c6.78-0.41,13.56-0.85,20.34-1.27c2.87-0.18,5.74-0.36,8.62-0.52
                           c9.34-0.55,18.67-1.07,28.01-1.64c9.01-0.55,18.03-1.14,27.04-1.69c6.62-0.4,13.25-0.76,19.87-1.15c4.79-0.28,9.57-0.6,14.36-0.88
                           c0.78-0.05,1.56,0,2.24,0.01c0.16,0.3,0.29,0.43,0.3,0.57c1.27,19.46,2.53,38.92,3.78,58.38c0.01,0.22-0.08,0.46-0.14,0.82
                           c-0.44,0.08-0.89,0.2-1.35,0.23c-8.14,0.5-16.28,0.98-24.41,1.48c-9.01,0.56-18.03,1.14-27.04,1.69
                           c-6.54,0.4-13.09,0.75-19.63,1.14c-6.54,0.4-13.08,0.82-19.62,1.23c-3.11,0.19-6.22,0.38-9.33,0.57
                           c-9.34,0.55-18.67,1.09-28.01,1.63c-2.15,0.13-4.31,0.28-6.46,0.4C300.02,661.3,299.46,661.28,298.62,661.28z"/>
                       <path id="lote_10" class="st5" d="M305.53,725.18c-0.15-0.24-0.28-0.36-0.3-0.5c-2.14-20.26-4.26-40.52-6.38-60.78
                           c-0.04-0.39-0.01-0.78-0.01-1.29c0.48-0.11,0.91-0.29,1.36-0.31c6.3-0.38,12.6-0.73,18.91-1.11c6.54-0.4,13.08-0.82,19.62-1.23
                           c3.03-0.19,6.06-0.38,9.09-0.55c9.33-0.55,18.67-1.08,28-1.63c10.53-0.63,21.06-1.26,31.59-1.91c8.93-0.55,17.86-1.13,26.8-1.68
                           c0.71-0.04,1.42-0.01,2.27-0.01c0.1,0.49,0.24,0.93,0.27,1.38c0.32,4.7,0.62,9.41,0.92,14.11c0.41,6.3,0.84,12.6,1.24,18.9
                           c0.37,5.82,0.73,11.64,1.09,17.47c0.18,2.95,0.37,5.9,0.53,8.85c0.04,0.63,0.01,1.26,0.01,2.02c-0.49,0.13-0.92,0.33-1.36,0.36
                           c-5.9,0.37-11.8,0.71-17.71,1.06c-7.02,0.43-14.04,0.86-21.06,1.29c-3.11,0.19-6.22,0.38-9.33,0.57c-9.33,0.55-18.67,1.08-28,1.64
                           c-7.9,0.47-15.79,0.95-23.69,1.43c-10.69,0.65-21.38,1.3-32.07,1.94C306.71,725.21,306.09,725.18,305.53,725.18z"/>
                       <path id="lote_9" class="st5" d="M305.59,726.4c0.99-0.1,1.93-0.24,2.87-0.29c9.33-0.55,18.67-1.08,28-1.64
                           c10.69-0.64,21.38-1.29,32.07-1.94c10.45-0.63,20.9-1.27,31.35-1.9c10.69-0.65,21.38-1.29,32.07-1.94
                           c1.43-0.09,2.86-0.21,4.41-0.32c0.14,0.5,0.34,0.93,0.37,1.37c0.29,3.98,0.58,7.97,0.83,11.96c0.56,8.85,1.08,17.71,1.64,26.56
                           c0.38,6.06,0.82,12.12,1.21,18.18c0.06,0.87,0.01,1.75,0.01,2.63c-0.55,0.63-1.31,0.51-2,0.55c-2.55,0.17-5.1,0.32-7.66,0.47
                           c-6.62,0.38-13.24,0.75-19.87,1.15c-9.09,0.55-18.18,1.14-27.28,1.7c-6.38,0.39-12.76,0.74-19.15,1.13
                           c-6.78,0.41-13.56,0.84-20.34,1.26c-2.95,0.18-5.9,0.37-8.85,0.54c-9.65,0.57-19.31,1.13-28.96,1.68c-0.55,0.03-1.1,0-1.63,0
                           c-0.6-0.66-0.36-1.41-0.35-2.1c0.11-6.23,0.26-12.47,0.38-18.7c0.25-13.18,0.48-26.37,0.72-39.55
                           C305.44,727.06,305.49,726.9,305.59,726.4z"/>
                       <path id="lote_8" class="st5" d="M435.35,780.85c0.12,0.6,0.21,0.9,0.23,1.21c1.23,19.71,2.46,39.42,3.68,59.13
                           c0.01,0.14-0.11,0.29-0.24,0.62c-0.6,0.07-1.3,0.24-1.99,0.22c-2.15-0.07-4.28,0.25-6.41,0.4c-2.07,0.14-4.15,0.2-6.23,0.33
                           c-3.51,0.22-7.02,0.49-10.53,0.69c-9.34,0.56-18.68,1.07-28.02,1.64c-9.02,0.55-18.03,1.14-27.05,1.69
                           c-6.62,0.4-13.25,0.75-19.87,1.15c-6.46,0.39-12.93,0.82-19.39,1.22c-5.19,0.32-10.38,0.6-15.56,0.9
                           c-0.15,0.01-0.3-0.08-0.62-0.17c-0.05-0.55-0.16-1.16-0.15-1.77c0.06-5.36,0.13-10.71,0.23-16.07c0.26-13.59,0.54-27.18,0.8-40.77
                           c0.01-0.71,0-1.42,0-2.18c0.91-0.52,1.8-0.49,2.64-0.55c2.71-0.19,5.43-0.34,8.14-0.5c6.47-0.38,12.93-0.74,19.4-1.13
                           c6.62-0.4,13.25-0.83,19.87-1.24c2.87-0.18,5.75-0.36,8.62-0.53c9.34-0.55,18.68-1.08,28.02-1.64c10.85-0.65,21.71-1.3,32.56-1.97
                           c3.43-0.21,6.86-0.46,10.29-0.68C434.24,780.82,434.72,780.85,435.35,780.85z"/>
                       <path id="lote_7" class="st5" d="M434.09,843.23c0.59,0.85,0.51,1.68,0.56,2.46c0.55,8.85,1.07,17.71,1.64,26.56
                           c0.55,8.61,1.14,17.22,1.7,25.83c0.1,1.59,0.13,3.18,0.19,4.63c-0.57,0.74-1.25,0.65-1.86,0.69c-2.63,0.18-5.26,0.33-7.9,0.49
                           c-6.62,0.38-13.24,0.74-19.87,1.15c-9.09,0.55-18.18,1.15-27.28,1.7c-6.46,0.4-12.92,0.75-19.39,1.14
                           c-6.62,0.4-13.24,0.83-19.86,1.24c-2.87,0.18-5.74,0.36-8.61,0.53c-10.05,0.6-20.1,1.19-30.15,1.77
                           c-0.31,0.02-0.63-0.03-0.87-0.04c-0.67-0.56-0.44-1.25-0.43-1.85c0.17-9.51,0.36-19.02,0.54-28.53
                           c0.16-8.39,0.31-16.78,0.49-25.17c0.03-1.5,0-3.01,0.27-4.63c1.45-0.13,2.78-0.29,4.12-0.37c10.21-0.63,20.42-1.25,30.63-1.86
                           c6.54-0.39,13.08-0.75,19.63-1.14c6.54-0.4,13.08-0.82,19.62-1.23c3.11-0.19,6.22-0.38,9.33-0.57c9.33-0.55,18.67-1.08,28-1.64
                           c6.06-0.36,12.12-0.77,18.18-1.15C433.26,843.21,433.72,843.23,434.09,843.23z"/>
                       <path id="lote_6" class="st5" d="M437.48,964.56c-1.24,0.12-2.18,0.24-3.13,0.29c-9.34,0.55-18.67,1.08-28.01,1.64
                           c-10.53,0.63-21.06,1.27-31.59,1.91c-10.61,0.64-21.22,1.28-31.83,1.93c-10.53,0.64-21.06,1.28-31.59,1.91
                           c-2.95,0.18-5.9,0.36-8.86,0.53c-0.46,0.03-0.92,0-1.38,0c-0.1-0.37-0.22-0.59-0.22-0.81c0.34-19.42,0.69-38.84,1.05-58.27
                           c0.01-0.31,0.11-0.62,0.17-0.94c1.1-0.46,2.23-0.43,3.33-0.49c9.34-0.56,18.67-1.08,28.01-1.64c9.02-0.55,18.03-1.14,27.04-1.69
                           c6.62-0.4,13.25-0.75,19.87-1.15c6.46-0.39,12.92-0.83,19.38-1.22c6.3-0.39,12.61-0.74,18.91-1.12c4.15-0.25,8.3-0.53,12.44-0.77
                           c0.78-0.05,1.57-0.01,2.35-0.01c0.13,0.3,0.28,0.51,0.29,0.73C434.97,925.01,436.21,944.62,437.48,964.56z"/>
                       <path id="lote_5" class="st5" d="M299.76,1036.15c-0.07-0.41-0.17-0.71-0.16-1.01c0.49-20.28,0.69-40.57,1.22-60.91
                           c0.91-0.46,1.79-0.45,2.64-0.5c6.46-0.39,12.92-0.75,19.39-1.14c6.62-0.4,13.24-0.83,19.86-1.24c3.11-0.19,6.22-0.38,9.33-0.56
                           c9.33-0.55,18.67-1.08,28-1.64c7.74-0.46,15.47-0.93,23.21-1.41c8.85-0.55,17.71-1.11,26.56-1.66c0.54-0.03,1.08,0,1.59,0
                           c0.15,0.37,0.31,0.59,0.32,0.81c1.29,20.1,2.57,40.19,3.83,60.29c0.01,0.22-0.1,0.45-0.19,0.81c-0.6,0.08-1.21,0.2-1.83,0.24
                           c-9.09,0.54-18.19,1.06-27.28,1.61c-10.53,0.63-21.06,1.27-31.59,1.91c-10.61,0.64-21.22,1.29-31.83,1.93
                           c-10.53,0.64-21.06,1.27-31.59,1.92c-3.35,0.2-6.7,0.44-10.05,0.64C300.75,1036.25,300.29,1036.18,299.76,1036.15z"/>
                       <path id="lote_4" class="st5" d="M298.67,1097.57c-0.07-0.35-0.2-0.65-0.19-0.95c0.35-19.65,0.71-39.29,1.07-59.06
                           c0.58-0.12,1.02-0.27,1.47-0.3c3.43-0.25,6.85-0.49,10.28-0.7c6.54-0.39,13.08-0.75,19.62-1.14c6.54-0.4,13.08-0.82,19.62-1.23
                           c3.11-0.19,6.22-0.37,9.33-0.56c10.21-0.62,20.42-1.25,30.63-1.86c6.62-0.4,13.24-0.75,19.86-1.15c6.38-0.38,12.76-0.8,19.14-1.2
                           c0.62-0.04,1.24-0.01,1.77-0.01c0.6,0.86,0.47,1.68,0.52,2.47c0.63,9.65,1.25,19.3,1.85,28.95c0.4,6.3,0.76,12.6,1.15,18.9
                           c0.16,2.55,0.33,5.1,0.48,7.66c0.03,0.55,0,1.1,0,1.58c-0.65,0.68-1.41,0.57-2.1,0.61c-2.63,0.18-5.26,0.33-7.9,0.49
                           c-6.7,0.39-13.4,0.75-20.1,1.16c-9.01,0.55-18.02,1.14-27.04,1.69c-6.54,0.4-13.08,0.75-19.62,1.14
                           c-6.54,0.4-13.08,0.82-19.62,1.23c-2.87,0.18-5.74,0.36-8.61,0.53c-10.21,0.61-20.42,1.22-30.63,1.83
                           C299.37,1097.66,299.06,1097.6,298.67,1097.57z"/>
                       <path id="lote_3" class="st5" d="M435.58,1161.54c-0.64,0.1-1.1,0.2-1.56,0.24c-1.27,0.11-2.55,0.26-3.82,0.24
                           c-0.48-0.01-0.96-0.43-1.5-0.7c-0.45,0.73-1.18,0.87-2.02,0.92c-3.75,0.22-7.5,0.5-11.25,0.73c-6.62,0.4-13.25,0.75-19.87,1.15
                           c-9.09,0.55-18.19,1.15-27.28,1.7c-6.38,0.39-12.77,0.74-19.15,1.13c-6.7,0.4-13.4,0.83-20.1,1.25c-2.79,0.17-5.58,0.35-8.38,0.51
                           c-7.5,0.44-15,0.87-22.5,1.3c-0.23,0.01-0.47-0.04-0.85-0.08c-0.08-0.43-0.23-0.87-0.22-1.32c0.01-2.48,0.06-4.96,0.11-7.43
                           c0.31-16.54,0.62-33.09,0.94-49.63c0.07-3.68,0.18-7.35,0.28-11.03c0.02-0.54,0.12-1.09,0.2-1.75c1.5-0.13,2.92-0.29,4.34-0.37
                           c10.21-0.63,20.42-1.25,30.63-1.86c6.54-0.39,13.09-0.75,19.63-1.14c6.54-0.4,13.08-0.82,19.62-1.23
                           c3.11-0.19,6.22-0.38,9.33-0.57c9.34-0.55,18.67-1.08,28.01-1.64c6.06-0.36,12.12-0.77,18.19-1.16c0.39-0.02,0.79,0,1.29,0
                           c0.12,0.5,0.28,0.94,0.32,1.39c0.67,8.2,1.32,16.41,1.99,24.61c0.72,8.76,1.47,17.52,2.18,26.28
                           C434.63,1149.15,435.08,1155.2,435.58,1161.54z"/>
                       <path id="lote_2" class="st5" d="M433.83,1232.1c-2.73,0.19-5.19,0.38-7.65,0.53c-7.18,0.45-14.36,0.88-21.54,1.32
                           c-3.03,0.19-6.06,0.37-9.1,0.55c-9.34,0.55-18.67,1.08-28.01,1.64c-10.53,0.63-21.06,1.27-31.59,1.91
                           c-10.61,0.64-21.22,1.28-31.83,1.93c-2.15,0.13-4.31,0.28-6.46,0.4c-0.54,0.03-1.09-0.04-1.78-0.07
                           c-0.05-0.69-0.15-1.31-0.14-1.92c0.17-9.59,0.36-19.18,0.55-28.77c0.24-11.83,0.48-23.66,0.72-35.49c0.02-0.87,0-1.74,0-2.69
                           c1-0.47,1.96-0.46,2.89-0.53c2.63-0.18,5.27-0.33,7.9-0.48c6.62-0.38,13.25-0.75,19.87-1.15c9.1-0.55,18.19-1.14,27.28-1.7
                           c6.22-0.38,12.45-0.73,18.67-1.11c6.94-0.42,13.88-0.85,20.82-1.28c2.95-0.18,5.9-0.36,8.86-0.54c7.74-0.47,15.48-0.94,23.22-1.4
                           c0.54-0.03,1.09,0,1.75,0c0.11,0.56,0.23,1.01,0.27,1.47c0.84,10.36,1.66,20.71,2.5,31.07c0.8,9.88,1.6,19.76,2.4,29.63
                           c0.14,1.67,0.29,3.34,0.41,5.02C433.86,1230.89,433.83,1231.37,433.83,1232.1z"/>
                       <path id="lote_1" class="st2" d="M433.87,1304.91c-0.22,0.05-0.52,0.16-0.82,0.18c-5.35,0.33-10.69,0.65-16.04,0.97
                           c-7.26,0.44-14.52,0.87-21.79,1.31c-3.51,0.21-7.02,0.41-10.54,0.61c-9.34,0.54-18.68,1.07-28.02,1.61
                           c-7.66,0.45-15.32,0.89-22.98,1.38c-1.4,0.09-2.66-0.12-3.95-0.68c-10.99-4.79-21.99-9.55-32.98-14.32
                           c-0.65-0.28-1.28-0.62-1.86-0.9c-0.26-2.07,0.67-51.35,1.02-53.42c0.56-0.09,1.17-0.23,1.79-0.27c9.02-0.54,18.04-1.05,27.05-1.6
                           c9.02-0.55,18.03-1.14,27.05-1.69c6.54-0.4,13.09-0.75,19.63-1.14c6.54-0.4,13.08-0.82,19.63-1.23c2.79-0.17,5.59-0.34,8.38-0.51
                           c8.22-0.5,16.44-1,24.66-1.48c1.34-0.08,2.69-0.18,3.85-0.11c0.23,0.21,0.3,0.25,0.35,0.32c0.05,0.06,0.1,0.13,0.11,0.2
                           c1.91,23.26,3.82,46.52,5.72,69.79c0.02,0.23-0.04,0.47-0.07,0.71C434.04,1304.69,433.98,1304.75,433.87,1304.91z"/>
                   </g>
               </g>
               <g id="manzana2">
                   <path id="mzn2calle" class="st0" d="M952.19,683.29l-41.32-375.84c-0.52-4.82-4.19-8.22-8.77-10.21v-0.01l-0.26-0.1
                       c-0.55-0.23-1.12-0.45-1.69-0.64l-50.16-18.87c-6-2.26-12.7,0.82-14.89,6.85l-6,16.48c-1.58,4.33-5.67,7.23-10.29,7.28l-79.78,0.78
                       c-6.39,0.06-10.35-6.93-7.02-12.38l8.2-13.42c3.25-5.32-1.77-11.84-7.74-10.07l-121,35.89c-4.27,1.2-6.9,5.46-6.06,9.81l1.33,10.05
                       l39.21,366.19L633,1445.76c-0.13,7.82,6.41,14.6,14.11,16.01l35.28,4.48c0.96,0.18,1.93,0.26,2.89,0.26
                       c4.57,0,8.99-1.96,12.06-5.48l16.85-20.61l157.54-8.88l14.09,13.1c3.06,3.57,7.51,4.59,12.15,4.59c0.68,0,1.36-0.04,2.04-0.13
                       l26.08-1.6c7.89-1.01,13.83-7.66,13.96-15.61l12.24-746.64C952.29,684.6,952.26,683.95,952.19,683.29z"/>
                   <path id="mzn2verde" class="st6" d="M729.92,290.12l-8.56,23.36l-81.34,3.92c-9.34,0.45-11.36-12.94-2.31-15.28l83.56-21.54
                       C726.95,279.11,731.93,284.62,729.92,290.12z M847.67,309.3l32.06-1.49c11.77-0.55,14.07-15.58,2.9-19.22l-26.2-8.56
                       c-9.7-3.17-20.18,2.13-23.1,11.69l-0.15,0.5C830.33,301.5,837.74,309.76,847.67,309.3z M649.51,1416.63l-0.51,29.41l35.28,6.48
                       l19.36-22.19c2.49-2.85,6.01-4.59,9.78-4.82l157.52-9.94c4.88-0.31,9.62,1.69,12.8,5.4l12.23,14.27l28.08-3.6l0.49-29.75
                       L649.51,1416.63z"/>
                   <g id="mzn2lotes">
                       <path id="lote_60" class="st4" d="M925.77,1328.72c0.06,0.58,0.15,1.04,0.16,1.5c0.12,6.12-1.04,69.37-1.32,71.12
                           c-0.44,0.14-0.95,0.33-1.47,0.45c-0.31,0.07-0.64,0.06-0.95,0.08c-4.31,0.21-8.63,0.39-12.94,0.62
                           c-4.07,0.22-8.14,0.48-12.21,0.72c-3.35,0.19-6.7,0.38-10.06,0.55c-4.55,0.23-9.1,0.42-13.66,0.66
                           c-4.07,0.21-8.14,0.48-12.21,0.72c-3.19,0.18-6.39,0.36-9.58,0.52c-4.31,0.22-8.62,0.41-12.94,0.64
                           c-4.47,0.24-8.94,0.51-13.41,0.76c-3.19,0.18-6.39,0.36-9.58,0.52c-4.47,0.23-8.94,0.43-13.42,0.65c-3.03,0.15-6.07,0.33-9.1,0.48
                           c-0.79,0.04-1.58,0.01-2.48,0.01c-0.14-0.55-0.32-0.98-0.36-1.43c-0.32-3.74-0.62-7.49-0.92-11.23c-0.25-3.11-0.5-6.21-0.75-9.32
                           c-0.19-2.31-0.38-4.62-0.55-6.93c-0.38-5.18-0.73-10.36-1.13-15.54c-0.39-5.02-0.82-10.04-1.22-15.05
                           c-0.23-2.87-0.44-5.74-0.63-8.61c-0.05-0.78-0.01-1.57-0.01-2.49c0.55-0.12,0.99-0.27,1.44-0.3c3.43-0.28,6.85-0.55,10.28-0.79
                           c7.02-0.48,14.04-0.95,21.06-1.41c6.06-0.39,12.13-0.73,18.19-1.14c5.82-0.39,11.64-0.83,17.46-1.23
                           c3.43-0.23,6.86-0.41,10.29-0.64c3.59-0.24,7.18-0.5,10.76-0.75c2.63-0.18,5.26-0.37,7.9-0.54c3.51-0.22,7.02-0.41,10.53-0.64
                           c3.51-0.23,7.02-0.5,10.52-0.75c2.47-0.17,4.94-0.34,7.42-0.5c4.63-0.29,9.26-0.57,13.88-0.85
                           C925.02,1328.55,925.26,1328.64,925.77,1328.72z"/>
                       <path id="lote_59" class="st3" d="M785.15,1265.09c1.91-0.28,3.73-0.41,5.55-0.53c6.3-0.4,12.61-0.74,18.91-1.14
                           c5.98-0.38,11.96-0.83,17.94-1.22c3.59-0.24,7.18-0.41,10.77-0.64c3.75-0.24,7.5-0.51,11.24-0.76c2.71-0.18,5.42-0.37,8.14-0.53
                           c3.75-0.23,7.5-0.42,11.25-0.65c3.51-0.22,7.02-0.49,10.53-0.73c2.71-0.18,5.42-0.37,8.14-0.53c3.67-0.22,7.34-0.41,11.01-0.64
                           c3.67-0.23,7.34-0.51,11-0.75c3.19-0.21,6.38-0.41,9.57-0.61c1.83-0.12,3.67-0.24,5.5-0.35c0.71-0.04,1.43-0.21,2.08,0.15
                           c0.59,0.82,0.39,1.73,0.37,2.59c-0.06,3.52-0.18,7.03-0.24,10.55c-0.26,16.79-0.5,33.58-0.76,50.37
                           c-0.03,2.16-0.12,4.32-0.19,6.47c-0.02,0.47-0.11,0.94-0.19,1.53c-0.54,0.12-1.07,0.31-1.6,0.35c-5.5,0.37-11.01,0.7-16.51,1.07
                           c-5.74,0.39-11.48,0.83-17.22,1.22c-3.43,0.24-6.86,0.41-10.29,0.64c-3.59,0.24-7.18,0.5-10.76,0.75
                           c-2.63,0.18-5.26,0.37-7.9,0.54c-3.51,0.22-7.02,0.41-10.53,0.64c-5.98,0.4-11.96,0.83-17.94,1.24c-2.63,0.18-5.26,0.37-7.9,0.54
                           c-6.06,0.38-12.13,0.74-18.19,1.13c-4.47,0.29-8.93,0.62-13.4,0.9c-0.78,0.05-1.56-0.01-2.44-0.02c-0.13-0.6-0.27-1.05-0.31-1.5
                           c-0.51-5.97-0.99-11.95-1.5-17.92c-0.56-6.53-1.17-13.05-1.72-19.58c-0.4-4.7-0.73-9.4-1.13-14.1c-0.39-4.62-0.82-9.23-1.22-13.85
                           C785.1,1268.23,784.9,1266.73,785.15,1265.09z"/>
                       <path id="lote_58" class="st3" d="M790.99,1263.78c-0.19-1.68-0.4-3.1-0.52-4.53c-0.39-4.62-0.74-9.24-1.13-13.86
                           c-0.39-4.62-0.82-9.23-1.22-13.85c-0.2-2.23-0.4-4.46-0.58-6.69c-0.54-6.61-1.06-13.22-1.61-19.83c-0.22-2.63-0.52-5.25-0.74-7.87
                           c-0.11-1.26-0.3-2.53,0-3.92c0.46-0.1,0.9-0.27,1.35-0.3c5.1-0.35,10.21-0.67,15.31-1.02c5.74-0.4,11.48-0.83,17.22-1.22
                           c3.43-0.24,6.86-0.41,10.29-0.64c3.59-0.24,7.17-0.5,10.76-0.75c2.63-0.18,5.26-0.37,7.89-0.54c3.51-0.22,7.02-0.41,10.53-0.64
                           c3.51-0.23,7.01-0.5,10.52-0.75c2.79-0.2,5.58-0.39,8.37-0.57c3.59-0.22,7.18-0.4,10.77-0.64c5.74-0.39,11.48-0.81,17.22-1.22
                           c2.47-0.17,4.94-0.34,7.42-0.5c4.71-0.31,9.41-0.61,14.12-0.9c0.31-0.02,0.63,0.06,0.87,0.09c0.65,0.54,0.52,1.22,0.51,1.84
                           c-0.08,6.16-0.17,12.31-0.27,18.46c-0.07,4.32-0.16,8.63-0.22,12.95c-0.18,11.91-0.36,23.82-0.55,35.73
                           c-0.01,0.78,0.13,1.6-0.32,2.32c-0.67,0.59-1.5,0.52-2.29,0.57c-6.14,0.37-12.29,0.72-18.43,1.1c-7.58,0.47-15.15,0.96-22.73,1.45
                           c-7.42,0.47-14.84,0.94-22.25,1.43c-5.98,0.4-11.96,0.84-17.94,1.23c-3.67,0.24-7.34,0.41-11.01,0.65
                           c-3.67,0.23-7.33,0.51-11,0.75c-2.79,0.19-5.58,0.38-8.37,0.54c-3.75,0.22-7.5,0.42-11.25,0.64c-2.95,0.17-5.9,0.37-8.85,0.54
                           C792.29,1263.87,791.75,1263.81,790.99,1263.78z"/>
                       <path id="lote_57" class="st3" d="M929.02,1121.14c0.14,0.44,0.27,0.67,0.27,0.89c-0.07,7.52-0.05,15.03-0.26,22.55
                           c-0.35,12.62-0.13,25.25-0.79,38c-0.54,0.16-1.05,0.4-1.57,0.44c-2.95,0.22-5.9,0.37-8.85,0.57c-3.59,0.24-7.18,0.5-10.76,0.75
                           c-2.63,0.18-5.26,0.37-7.9,0.54c-3.51,0.22-7.02,0.41-10.53,0.64c-3.51,0.23-7.02,0.5-10.52,0.75c-2.71,0.19-5.42,0.39-8.13,0.56
                           c-3.51,0.22-7.02,0.39-10.53,0.63c-5.82,0.39-11.64,0.82-17.46,1.23c-2.63,0.18-5.26,0.37-7.9,0.54
                           c-6.06,0.38-12.13,0.73-18.19,1.13c-5.74,0.38-11.48,0.82-17.22,1.21c-2.23,0.15-4.47,0.25-6.71,0.36
                           c-0.23,0.01-0.46-0.1-0.82-0.18c-0.1-0.41-0.28-0.85-0.3-1.3c-0.2-3.99-0.36-7.99-0.56-11.98c-0.23-4.55-0.49-9.1-0.73-13.65
                           c-0.18-3.43-0.35-6.87-0.51-10.3c-0.22-4.87-0.43-9.74-0.65-14.62c-0.1-2.08-0.26-4.15-0.36-6.22c-0.05-0.95-0.01-1.9-0.01-2.82
                           c0.92-0.71,1.9-0.63,2.84-0.7c2.23-0.17,4.47-0.31,6.7-0.45c3.59-0.22,7.18-0.4,10.77-0.65c5.82-0.39,11.64-0.82,17.46-1.23
                           c2.63-0.18,5.26-0.37,7.9-0.53c3.51-0.22,7.02-0.4,10.53-0.63c5.82-0.39,11.64-0.82,17.46-1.23c2.63-0.18,5.26-0.37,7.9-0.54
                           c6.06-0.38,12.13-0.73,18.19-1.13c5.74-0.38,11.48-0.81,17.22-1.22c2.63-0.19,5.26-0.37,7.9-0.53c3.59-0.22,7.18-0.42,10.77-0.64
                           c0.88-0.05,1.75-0.19,2.63-0.23C927.15,1121.11,928.02,1121.14,929.02,1121.14z"/>
                       <path id="lote_56" class="st3" d="M792.62,1129.26c-0.13-0.54-0.28-0.91-0.3-1.3c-0.36-4.7-0.69-9.41-1.04-14.11
                           c-0.24-3.19-0.5-6.37-0.75-9.56c-0.19-2.47-0.4-4.94-0.57-7.41c-0.38-5.42-0.74-10.84-1.14-16.27c-0.21-2.87-0.48-5.73-0.72-8.6
                           c-0.07-0.86-0.24-1.74,0.08-2.69c1.13-0.42,2.33-0.46,3.5-0.53c3.75-0.24,7.5-0.42,11.25-0.65c3.91-0.24,7.82-0.51,11.73-0.76
                           c2.79-0.18,5.58-0.36,8.38-0.53c3.83-0.22,7.66-0.42,11.49-0.65c3.83-0.23,7.66-0.5,11.49-0.75c2.87-0.19,5.74-0.37,8.62-0.54
                           c3.91-0.23,7.82-0.41,11.73-0.65c3.67-0.22,7.34-0.49,11.01-0.73c2.79-0.18,5.58-0.36,8.38-0.53c3.83-0.22,7.66-0.41,11.49-0.64
                           c3.83-0.23,7.66-0.51,11.49-0.75c2.47-0.16,4.95-0.3,7.42-0.45c3.99-0.24,7.98-0.48,11.97-0.69c0.62-0.03,1.24,0.06,1.99,0.1
                           c0.07,0.65,0.19,1.19,0.18,1.72c-0.13,8.79-0.29,17.59-0.42,26.38c-0.08,5.6-0.1,11.2-0.19,16.79c-0.07,4.4-0.2,8.79-0.32,13.19
                           c-0.01,0.47-0.1,0.93-0.14,1.33c-0.87,0.64-1.77,0.58-2.63,0.63c-5.98,0.38-11.97,0.73-17.95,1.11
                           c-7.26,0.47-14.52,0.96-21.78,1.45c-7.1,0.47-14.2,0.94-21.3,1.43c-5.74,0.4-11.48,0.83-17.22,1.23
                           c-3.51,0.24-7.02,0.42-10.53,0.65c-3.51,0.23-7.02,0.5-10.52,0.75c-2.63,0.18-5.26,0.37-7.9,0.54c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-3.43,0.23-6.86,0.49-10.29,0.73C796.68,1129.28,794.77,1129.48,792.62,1129.26z"/>
                       <path id="lote_55" class="st3" d="M790.43,1006.58c0.53-0.12,0.9-0.26,1.28-0.28c2.79-0.19,5.59-0.36,8.38-0.55
                           c3.59-0.24,7.18-0.51,10.77-0.76c2.71-0.19,5.42-0.39,8.14-0.56c3.51-0.22,7.03-0.4,10.54-0.63c5.82-0.39,11.64-0.82,17.47-1.22
                           c2.63-0.18,5.26-0.37,7.9-0.54c6.06-0.38,12.13-0.73,18.19-1.14c5.82-0.39,11.64-0.83,17.47-1.23c2.55-0.18,5.1-0.35,7.66-0.51
                           c6.06-0.38,12.13-0.74,18.19-1.13c3.35-0.22,6.7-0.5,10.05-0.74c1.51-0.11,3.02-0.21,4.65-0.12c0.12,0.63,0.3,1.16,0.29,1.68
                           c-0.17,10.39-0.37,20.79-0.54,31.18c-0.08,4.8-0.11,9.6-0.17,14.4c-0.05,4-0.11,8-0.19,12c-0.02,1.03,0.06,2.08-0.4,3.14
                           c-1.52,0.4-3.12,0.45-4.7,0.55c-6.62,0.41-13.25,0.74-19.88,1.15c-6.3,0.39-12.61,0.83-18.91,1.24c-2.87,0.19-5.75,0.37-8.62,0.53
                           c-3.91,0.22-7.83,0.4-11.74,0.64c-6.22,0.39-12.45,0.82-18.67,1.22c-2.71,0.18-5.43,0.35-8.14,0.5c-3.83,0.22-7.67,0.41-11.5,0.64
                           c-3.75,0.23-7.5,0.5-11.25,0.74c-2.63,0.17-5.27,0.34-7.9,0.49c-4.39,0.25-8.78,0.49-13.17,0.72c-0.54,0.03-1.09-0.04-1.76-0.08
                           c-0.1-0.55-0.22-0.99-0.27-1.45c-0.11-0.95-0.22-1.91-0.27-2.87c-0.23-4.39-0.41-8.79-0.66-13.18
                           c-0.39-6.86-0.81-13.73-1.21-20.59c-0.16-2.79-0.31-5.59-0.46-8.38c-0.23-4.23-0.46-8.46-0.66-12.7
                           C790.3,1008.05,790.39,1007.35,790.43,1006.58z"/>
                       <path id="lote_54" class="st3" d="M794.89,1005.37c-0.4-1.97-0.51-3.79-0.65-5.6c-0.48-6.13-0.93-12.27-1.38-18.41
                           c-0.23-3.11-0.4-6.22-0.64-9.33c-0.4-5.34-0.83-10.67-1.24-16.01c-0.22-2.87-0.43-5.74-0.62-8.61c-0.05-0.7,0.02-1.41,0.03-2.25
                           c0.73-0.12,1.34-0.28,1.95-0.32c7.97-0.52,15.95-1.03,23.92-1.55c7.18-0.47,14.35-0.96,21.53-1.43
                           c7.26-0.48,14.51-0.96,21.77-1.45c7.18-0.48,14.35-0.96,21.53-1.44c7.18-0.48,14.35-0.96,21.53-1.44
                           c7.26-0.48,14.51-0.96,21.77-1.45c1.99-0.13,3.98-0.29,5.98-0.41c0.55-0.03,1.1,0.05,1.59,0.08c0.66,0.86,0.47,1.76,0.45,2.62
                           c-0.05,3.28-0.16,6.55-0.21,9.83c-0.23,14.95-0.44,29.89-0.67,44.84c-0.02,1.02-0.13,2.05-0.21,3.09
                           c-1.69,0.49-3.28,0.55-4.86,0.66c-6.94,0.47-13.87,0.94-20.81,1.39c-3.51,0.23-7.02,0.4-10.53,0.64c-5.9,0.4-11.8,0.82-17.7,1.23
                           c-2.63,0.18-5.26,0.37-7.89,0.54c-6.06,0.38-12.13,0.73-18.19,1.13c-5.82,0.39-11.64,0.83-17.46,1.24
                           c-2.47,0.17-4.94,0.34-7.42,0.5c-3.51,0.22-7.02,0.41-10.53,0.64c-3.43,0.23-6.85,0.49-10.28,0.73c-3.03,0.21-6.06,0.42-9.09,0.61
                           C796.1,1005.48,795.63,1005.41,794.89,1005.37z"/>
                       <path id="lote_53" class="st3" d="M933.44,874.32c0,1.06,0.01,1.85,0,2.64c-0.17,10.23-0.34,20.47-0.51,30.7
                           c-0.13,8.08-0.26,16.15-0.39,24.23c-0.02,0.95,0.09,1.92-0.42,2.97c-1.87,0.17-3.76,0.39-5.66,0.52
                           c-6.86,0.48-13.72,0.93-20.58,1.38c-3.51,0.23-7.02,0.41-10.53,0.64c-3.51,0.23-7.02,0.5-10.52,0.75
                           c-2.63,0.19-5.26,0.37-7.9,0.54c-6.06,0.38-12.13,0.73-18.19,1.14c-5.82,0.39-11.64,0.82-17.46,1.23
                           c-2.47,0.17-4.94,0.34-7.42,0.5c-3.51,0.22-7.02,0.41-10.53,0.64c-3.43,0.23-6.86,0.49-10.29,0.73c-2.95,0.21-5.9,0.4-8.85,0.6
                           c-2.07,0.14-4.15,0.29-6.22,0.41c-0.63,0.04-1.26,0.01-2.01,0.01c-0.15-0.49-0.36-0.92-0.39-1.37c-0.32-4.14-0.62-8.29-0.91-12.44
                           c-0.27-3.75-0.53-7.49-0.79-11.24c-0.18-2.55-0.36-5.1-0.53-7.66c-0.22-3.43-0.41-6.86-0.64-10.29
                           c-0.23-3.43-0.51-6.85-0.73-10.28c-0.14-2.07-0.21-4.15-0.29-6.23c-0.01-0.22,0.1-0.45,0.17-0.71c0.22-0.1,0.42-0.26,0.63-0.28
                           c2.39-0.19,4.78-0.36,7.17-0.53c3.91-0.27,7.82-0.54,11.72-0.8c2.63-0.18,5.26-0.37,7.9-0.54c6.06-0.38,12.13-0.73,18.19-1.14
                           c5.82-0.39,11.64-0.83,17.46-1.23c3.19-0.22,6.38-0.4,9.57-0.61c3.91-0.26,7.82-0.54,11.72-0.8c2.63-0.18,5.26-0.37,7.9-0.54
                           c6.06-0.38,12.13-0.73,18.19-1.14c5.74-0.38,11.48-0.82,17.22-1.21c3.99-0.27,7.98-0.49,11.97-0.71
                           C932.04,874.18,932.59,874.26,933.44,874.32z"/>
                       <path id="lote_52" class="st3" d="M795.81,882.55c-0.37-2.17-0.52-4.07-0.64-5.97c-0.44-6.78-0.9-13.56-1.34-20.34
                           c-0.23-3.51-0.42-7.02-0.64-10.53c-0.23-3.59-0.51-7.18-0.73-10.77c-0.28-4.47-0.53-8.94-0.78-13.41
                           c-0.02-0.38,0.05-0.77,0.08-1.17c0.8-0.5,1.63-0.33,2.4-0.42c0.79-0.1,1.59-0.2,2.39-0.25c3.51-0.22,7.02-0.41,10.54-0.64
                           c3.51-0.23,7.02-0.51,10.53-0.75c2.55-0.18,5.1-0.36,7.66-0.52c3.51-0.22,7.02-0.41,10.54-0.64c3.51-0.23,7.02-0.5,10.53-0.75
                           c2.71-0.19,5.42-0.38,8.14-0.56c3.51-0.22,7.03-0.4,10.54-0.63c5.82-0.39,11.64-0.82,17.47-1.23c2.63-0.18,5.26-0.37,7.9-0.53
                           c6.06-0.38,12.13-0.73,18.2-1.14c5.74-0.38,11.48-0.82,17.23-1.22c2.47-0.17,4.95-0.32,7.42-0.46c0.3-0.02,0.61,0.1,1.08,0.19
                           c0.07,0.63,0.21,1.24,0.21,1.85c-0.03,3.12-0.09,6.24-0.14,9.36c-0.1,6.08-0.2,12.15-0.3,18.23c-0.17,10.24-0.33,20.47-0.5,30.71
                           c-0.01,0.78,0.15,1.61-0.43,2.29c-0.15,0.08-0.29,0.2-0.44,0.21c-1.91,0.17-3.82,0.36-5.74,0.49c-6.94,0.48-13.88,0.94-20.82,1.39
                           c-3.51,0.23-7.02,0.41-10.54,0.64c-3.43,0.23-6.86,0.49-10.29,0.73c-2.63,0.19-5.26,0.37-7.9,0.54
                           c-3.51,0.22-7.03,0.41-10.54,0.64c-3.51,0.23-7.02,0.51-10.53,0.75c-2.71,0.19-5.42,0.38-8.14,0.55
                           c-3.51,0.22-7.03,0.4-10.54,0.63c-5.82,0.39-11.64,0.82-17.47,1.22c-2.55,0.18-5.11,0.35-7.66,0.52
                           c-4.95,0.33-9.89,0.66-14.84,0.98C797.14,882.58,796.59,882.55,795.81,882.55z"/>
                       <path id="lote_51" class="st3" d="M797,818.92c-0.14-1.1-0.3-2.04-0.36-2.98c-0.47-6.53-0.93-13.07-1.38-19.61
                           c-0.23-3.35-0.41-6.7-0.64-10.05c-0.23-3.35-0.51-6.69-0.75-10.04c-0.16-2.23-0.31-4.46-0.46-6.7c-0.22-3.19-0.45-6.38-0.64-9.57
                           c-0.04-0.7,0.03-1.4,0.05-2.16c1.35-0.4,2.62-0.49,3.88-0.58c7.1-0.48,14.19-0.96,21.29-1.42c6.06-0.39,12.13-0.73,18.19-1.14
                           c5.82-0.39,11.64-0.83,17.46-1.24c2.55-0.18,5.1-0.35,7.65-0.51c6.06-0.38,12.13-0.73,18.19-1.14c5.82-0.39,11.64-0.84,17.46-1.23
                           c3.51-0.24,7.02-0.41,10.53-0.65c3.51-0.23,7.01-0.5,10.52-0.75c2.95-0.21,5.9-0.4,8.85-0.6c1.99-0.13,3.99-0.27,5.98-0.4
                           c0.78-0.05,1.58-0.19,2.29,0.11c0.59,0.78,0.39,1.61,0.38,2.39c-0.04,4.32-0.11,8.63-0.18,12.95c-0.1,5.99-0.2,11.99-0.3,17.98
                           c-0.15,8.71-0.3,17.42-0.45,26.14c-0.01,0.63-0.11,1.25-0.15,1.74c-0.71,0.69-1.45,0.61-2.16,0.65
                           c-8.13,0.52-16.27,1.03-24.4,1.56c-7.1,0.46-14.19,0.95-21.29,1.42c-7.34,0.49-14.67,0.97-22.01,1.46
                           c-7.1,0.47-14.19,0.95-21.29,1.42c-7.34,0.49-14.67,0.97-22.01,1.46c-7.65,0.52-15.31,1.04-22.96,1.56
                           C797.95,819.05,797.64,818.98,797,818.92z"/>
                       <path id="lote_50" class="st3" d="M798.18,756.45c-0.68-0.84-0.55-1.67-0.6-2.45c-0.46-6.94-0.91-13.88-1.35-20.82
                           c-0.23-3.59-0.41-7.18-0.64-10.77c-0.23-3.67-0.51-7.34-0.74-11c-0.23-3.59-0.45-7.18-0.67-10.77c-0.07-1.2-0.16-2.39-0.22-3.59
                           c-0.03-0.54,0-1.09,0-1.5c0.93-0.72,1.83-0.64,2.7-0.69c5.98-0.38,11.97-0.73,17.95-1.12c7.26-0.47,14.52-0.96,21.77-1.44
                           c7.18-0.48,14.36-0.96,21.53-1.44c7.26-0.48,14.52-0.97,21.77-1.45c7.18-0.48,14.36-0.96,21.53-1.44
                           c7.18-0.48,14.36-0.95,21.53-1.44c3.27-0.22,6.54-0.5,9.8-0.73c1.18-0.08,2.37-0.24,3.66,0.02c0.09,0.52,0.24,0.98,0.23,1.43
                           c-0.09,6.72-0.2,13.43-0.3,20.15c-0.05,3.12-0.09,6.24-0.14,9.35c-0.16,9.51-0.31,19.03-0.48,28.54c-0.01,0.63-0.1,1.26-0.15,1.8
                           c-0.97,0.66-1.95,0.59-2.9,0.65c-6.86,0.47-13.72,0.93-20.58,1.38c-3.59,0.23-7.18,0.41-10.77,0.65
                           c-5.82,0.39-11.64,0.82-17.46,1.22c-2.63,0.18-5.26,0.37-7.9,0.54c-6.06,0.38-12.13,0.73-18.19,1.14
                           c-5.82,0.39-11.64,0.83-17.46,1.24c-2.55,0.18-5.1,0.35-7.66,0.51c-6.06,0.38-12.13,0.74-18.19,1.13
                           c-4.71,0.3-9.41,0.63-14.12,0.94C799.46,756.51,798.76,756.45,798.18,756.45z"/>
                       <path id="lote_49" class="st3" d="M798.83,694.03c-0.13-0.88-0.27-1.5-0.31-2.12c-0.37-5.82-0.71-11.65-1.07-17.48
                           c-0.47-7.5-0.96-15-1.45-22.5c-0.28-4.31-0.59-8.61-0.87-12.92c-0.05-0.79-0.01-1.58-0.01-2.47c0.54-0.14,0.97-0.32,1.42-0.35
                           c5.51-0.34,11.02-0.65,16.52-0.99c6.54-0.4,13.09-0.81,19.63-1.22c2.87-0.18,5.75-0.35,8.62-0.51c3.99-0.22,7.99-0.42,11.98-0.65
                           c3.99-0.23,7.98-0.5,11.97-0.75c2.95-0.18,5.91-0.36,8.86-0.53c3.99-0.22,7.99-0.41,11.98-0.65c3.99-0.23,7.98-0.5,11.97-0.75
                           c3.11-0.19,6.23-0.39,9.34-0.56c4.15-0.23,8.31-0.43,12.46-0.65c2.79-0.15,5.59-0.33,8.38-0.48c0.63-0.03,1.26,0,1.83,0
                           c0.2,0.34,0.4,0.54,0.42,0.76c1.97,18.19,3.93,36.39,5.88,54.59c0.03,0.3-0.1,0.61-0.17,0.97c-1.36,0.41-2.71,0.47-4.06,0.56
                           c-6.86,0.46-13.72,0.92-20.58,1.37c-3.51,0.23-7.03,0.41-10.54,0.64c-3.51,0.23-7.02,0.51-10.53,0.75
                           c-2.63,0.19-5.26,0.37-7.9,0.54c-6.07,0.38-12.13,0.73-18.2,1.14c-5.82,0.39-11.64,0.83-17.47,1.24c-2.63,0.19-5.26,0.37-7.9,0.53
                           c-3.59,0.22-7.19,0.4-10.78,0.64c-3.35,0.22-6.7,0.5-10.05,0.74c-2.23,0.16-4.47,0.29-6.7,0.44c-3.51,0.23-7.02,0.46-10.53,0.67
                           C800.37,694.06,799.73,694.03,798.83,694.03z"/>
                       <path id="lote_48" class="st3" d="M795.06,635.42c-0.14-0.71-0.31-1.32-0.36-1.94c-0.38-4.86-0.7-9.72-1.09-14.58
                           c-0.39-4.94-0.85-9.87-1.24-14.81c-0.4-5.1-0.75-10.2-1.14-15.3c-0.32-4.22-0.66-8.44-0.97-12.67c-0.04-0.61,0.03-1.24,0.05-2.01
                           c0.81-0.1,1.51-0.22,2.2-0.27c6.78-0.45,13.56-0.9,20.34-1.33c3.59-0.23,7.18-0.41,10.77-0.64c3.75-0.24,7.49-0.51,11.24-0.76
                           c2.71-0.18,5.42-0.37,8.13-0.53c3.67-0.22,7.34-0.41,11.01-0.64c3.67-0.23,7.33-0.51,11-0.75c2.71-0.18,5.42-0.37,8.13-0.53
                           c3.75-0.23,7.5-0.41,11.25-0.65c6.06-0.39,12.12-0.82,18.18-1.22c2.39-0.16,4.79-0.3,7.18-0.45c3.99-0.24,7.98-0.49,11.97-0.71
                           c0.55-0.03,1.1,0.06,1.7,0.1c0.17,0.5,0.39,0.94,0.45,1.39c0.37,3.25,0.7,6.51,1.05,9.77c0.42,3.89,0.85,7.78,1.26,11.67
                           c0.39,3.65,0.77,7.31,1.16,10.96c0.41,3.81,0.83,7.62,1.24,11.44c0.38,3.49,0.75,6.99,1.13,10.49c0.11,1.03,0.23,2.06,0.34,3.1
                           c0.1,0.95,0.28,1.89,0.01,2.91c-0.3,0.11-0.59,0.28-0.88,0.3c-2.63,0.19-5.26,0.35-7.9,0.51c-4.31,0.27-8.62,0.52-12.92,0.78
                           c-2.95,0.18-5.9,0.37-8.86,0.53c-4.07,0.23-8.14,0.41-12.21,0.65c-3.91,0.23-7.82,0.5-11.72,0.74c-2.87,0.18-5.74,0.35-8.62,0.51
                           c-3.91,0.22-7.82,0.41-11.73,0.64c-4.07,0.24-8.14,0.5-12.2,0.75c-2.95,0.18-5.9,0.37-8.86,0.53c-3.99,0.22-7.98,0.41-11.97,0.65
                           c-3.99,0.23-7.98,0.51-11.97,0.74c-4.39,0.25-8.78,0.48-13.17,0.7C796.44,635.54,795.81,635.46,795.06,635.42z"/>
                       <path id="lote_47" class="st3" d="M783.13,512.65c0.6-0.1,0.98-0.2,1.36-0.23c1.83-0.14,3.67-0.29,5.5-0.4
                           c6.06-0.38,12.13-0.73,18.19-1.13c5.82-0.39,11.64-0.83,17.46-1.24c2.47-0.17,4.94-0.34,7.42-0.5c3.51-0.22,7.02-0.41,10.53-0.64
                           c3.43-0.23,6.86-0.49,10.28-0.73c2.63-0.19,5.26-0.37,7.89-0.54c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.01-0.5,10.52-0.75
                           c2.71-0.19,5.42-0.38,8.13-0.55c3.59-0.22,7.18-0.41,10.77-0.64c3.35-0.22,6.69-0.51,10.04-0.73c1.66-0.11,3.33-0.37,4.99-0.04
                           c0.14,0.25,0.34,0.45,0.36,0.66c2.13,19.54,4.24,39.07,6.35,58.61c0.05,0.46-0.04,0.93-0.07,1.52c-0.51,0.11-0.95,0.27-1.41,0.3
                           c-4.94,0.33-9.89,0.64-14.83,0.97c-6.06,0.4-12.12,0.83-18.18,1.24c-2.71,0.18-5.42,0.36-8.14,0.53
                           c-3.67,0.22-7.34,0.4-11.01,0.63c-6.06,0.39-12.12,0.82-18.18,1.22c-2.63,0.18-5.26,0.35-7.9,0.51
                           c-3.67,0.22-7.34,0.41-11.01,0.65c-3.67,0.23-7.34,0.5-11,0.75c-2.71,0.18-5.42,0.37-8.14,0.53c-3.67,0.22-7.34,0.41-11.01,0.64
                           c-3.59,0.23-7.17,0.5-10.76,0.73c-1.58,0.1-3.16,0.4-4.69,0.01c-0.57-0.85-0.52-1.75-0.58-2.62c-0.48-7.34-0.95-14.67-1.41-22.01
                           c-0.23-3.75-0.4-7.5-0.64-11.25c-0.39-6.06-0.83-12.12-1.22-18.18C783.14,517.18,782.97,515.03,783.13,512.65z"/>
                       <path id="lote_46" class="st3" d="M776.4,450.79c0.57-0.14,0.86-0.27,1.17-0.29c4.39-0.32,8.77-0.64,13.16-0.94
                           c6.7-0.46,13.4-0.91,20.1-1.35c3.43-0.23,6.86-0.41,10.3-0.64c3.59-0.24,7.18-0.5,10.77-0.75c2.63-0.18,5.26-0.37,7.9-0.54
                           c3.51-0.22,7.03-0.41,10.54-0.64c3.51-0.23,7.02-0.5,10.53-0.75c2.63-0.19,5.26-0.37,7.9-0.54c5.99-0.38,11.97-0.73,17.96-1.13
                           c5.82-0.39,11.64-0.83,17.47-1.22c1.98-0.13,3.96-0.4,6.04-0.08c0.54,1.47,0.56,3,0.73,4.48c0.67,5.8,1.28,11.6,1.89,17.4
                           c0.55,5.25,1.06,10.5,1.62,15.74c0.55,5.17,1.15,10.33,1.73,15.49c0.19,1.75,0.4,3.5,0.55,5.25c0.07,0.78,0.01,1.57,0.01,2.5
                           c-0.49,0.11-0.93,0.27-1.38,0.3c-3.59,0.29-7.17,0.57-10.76,0.82c-6.86,0.47-13.72,0.93-20.58,1.38
                           c-3.51,0.23-7.03,0.41-10.54,0.64c-5.9,0.4-11.8,0.82-17.71,1.23c-2.63,0.18-5.26,0.37-7.9,0.54c-6.07,0.38-12.13,0.74-18.2,1.14
                           c-5.82,0.39-11.64,0.83-17.47,1.23c-2.55,0.18-5.11,0.35-7.66,0.51c-6.07,0.38-12.13,0.75-18.2,1.14
                           c-0.96,0.06-1.91,0.21-2.87,0.25c-1.1,0.04-2.21,0.01-3.44,0.01c-0.11-0.49-0.29-0.93-0.31-1.38c-0.33-5.51-0.64-11.02-0.97-16.52
                           c-0.23-3.91-0.49-7.82-0.73-11.73c-0.19-3.11-0.37-6.23-0.54-9.34c-0.23-4.31-0.43-8.63-0.66-12.94c-0.13-2.4-0.29-4.79-0.42-7.18
                           C776.37,452.26,776.4,451.62,776.4,450.79z"/>
                       <path id="lote_45" class="st3" d="M903.63,378.97c0.23,1.89,0.46,3.7,0.66,5.51c0.43,3.89,0.85,7.78,1.27,11.68
                           c0.39,3.65,0.77,7.31,1.16,10.96c0.41,3.81,0.83,7.62,1.25,11.44c0.38,3.5,0.75,6.99,1.12,10.49c0.27,2.54,0.57,5.08,0.83,7.62
                           c0.13,1.34,0.36,2.68,0.11,4.16c-0.46,0.11-0.9,0.27-1.35,0.3c-4.78,0.34-9.57,0.65-14.35,0.98c-5.82,0.4-11.64,0.82-17.46,1.23
                           c-2.55,0.18-5.1,0.36-7.66,0.52c-3.51,0.22-7.02,0.4-10.53,0.64c-5.9,0.4-11.8,0.82-17.7,1.23c-2.63,0.18-5.26,0.37-7.9,0.54
                           c-6.06,0.38-12.13,0.74-18.19,1.14c-5.82,0.39-11.64,0.82-17.46,1.23c-2.39,0.17-4.79,0.32-7.18,0.48
                           c-5.26,0.35-10.53,0.71-15.79,1.04c-0.94,0.06-1.91,0.24-3-0.21c-0.09-0.54-0.25-1.15-0.28-1.76c-0.37-6.14-0.69-12.29-1.07-18.43
                           c-0.39-6.3-0.82-12.6-1.22-18.9c-0.24-3.83-0.43-7.66-0.64-11.49c-0.17-3.03-0.35-6.06-0.51-9.1c-0.04-0.71-0.01-1.43-0.01-2.25
                           c0.48-0.14,0.92-0.34,1.36-0.37c5.42-0.37,10.85-0.69,16.27-1.06c5.74-0.39,11.48-0.82,17.22-1.22c3.27-0.23,6.54-0.41,9.81-0.63
                           c3.83-0.25,7.65-0.53,11.48-0.79c2.63-0.18,5.26-0.37,7.9-0.54c6.06-0.38,12.13-0.73,18.19-1.14c5.82-0.39,11.64-0.83,17.46-1.23
                           c3.27-0.23,6.54-0.41,9.81-0.63c3.83-0.25,7.65-0.54,11.48-0.79c4.63-0.3,9.26-0.57,13.88-0.84
                           C902.81,378.77,903.05,378.86,903.63,378.97z"/>
                       <path id="lote_44" class="st4" d="M903.22,377.9c-0.39,0.1-0.76,0.26-1.14,0.28c-2.71,0.19-5.43,0.35-8.14,0.54
                           c-3.51,0.24-7.02,0.5-10.53,0.74c-2.63,0.18-5.26,0.38-7.9,0.54c-3.51,0.22-7.02,0.41-10.54,0.64c-3.51,0.23-7.02,0.5-10.53,0.75
                           c-2.63,0.19-5.26,0.37-7.9,0.54c-6.06,0.38-12.13,0.74-18.2,1.14c-5.82,0.39-11.64,0.83-17.47,1.23
                           c-3.43,0.23-6.86,0.42-10.3,0.64c-3.67,0.24-7.34,0.52-11.01,0.77c-2.71,0.19-5.42,0.38-8.14,0.55
                           c-3.59,0.22-7.18,0.42-10.78,0.64c-1.04,0.06-2.07,0.21-3.11,0.27c-1.1,0.06-2.22,0.27-3.46-0.06c-0.09-0.46-0.23-0.91-0.25-1.36
                           c-0.31-5.27-0.61-10.54-0.91-15.81c-0.26-4.55-0.52-9.1-0.77-13.65c-0.18-3.19-0.36-6.39-0.52-9.58
                           c-0.23-4.47-0.42-8.95-0.66-13.42c-0.21-4.07-0.47-8.14-0.69-12.21c-0.04-0.71-0.01-1.42-0.01-2.21c0.44-0.15,0.8-0.36,1.16-0.39
                           c4.55-0.33,9.09-0.64,13.64-0.95c4.15-0.28,8.3-0.55,12.45-0.83c2.55-0.17,5.11-0.35,7.66-0.51c3.59-0.22,7.18-0.41,10.78-0.65
                           c3.51-0.23,7.02-0.49,10.53-0.74c2.63-0.18,5.26-0.37,7.9-0.53c3.59-0.22,7.18-0.41,10.78-0.65c3.59-0.23,7.18-0.51,10.77-0.76
                           c2.71-0.19,5.42-0.38,8.14-0.54c3.67-0.23,7.35-0.41,11.02-0.65c3.35-0.22,6.7-0.49,10.05-0.72c2.31-0.16,4.63-0.3,6.94-0.45
                           c4.07-0.25,8.14-0.5,12.21-0.73c0.54-0.03,1.09,0.06,1.73,0.11c0.17,0.67,0.39,1.27,0.46,1.89c0.37,3.34,0.71,6.68,1.06,10.01
                           c0.42,3.97,0.87,7.94,1.29,11.92c0.39,3.66,0.76,7.31,1.14,10.97c0.37,3.5,0.73,6.99,1.11,10.49c0.41,3.73,0.83,7.47,1.24,11.2
                           c0.28,2.54,0.56,5.08,0.82,7.63C903.31,375.28,903.56,376.54,903.22,377.9z"/>
                       <path id="lote_43" class="st4" d="M630.13,396.05c-0.18-1.07-0.37-1.92-0.47-2.79c-2.33-21.52-4.65-43.04-6.97-64.56
                           c-0.02-0.23,0.05-0.47,0.1-0.85c0.42-0.1,0.85-0.26,1.3-0.29c4.62-0.33,9.25-0.63,13.87-0.94c5.98-0.41,11.96-0.83,17.94-1.24
                           c2.63-0.18,5.26-0.36,7.89-0.53c3.67-0.23,7.34-0.41,11.01-0.65c5.9-0.39,11.8-0.82,17.7-1.23c2.63-0.18,5.26-0.36,7.89-0.53
                           c6.14-0.38,12.29-0.73,18.43-1.13c5.9-0.39,11.8-0.82,17.7-1.23c2.39-0.17,4.78-0.32,7.18-0.47c4.87-0.31,9.73-0.62,14.6-0.92
                           c0.31-0.02,0.62,0.08,0.85,0.11c0.71,0.61,0.59,1.37,0.63,2.07c0.15,2.39,0.29,4.79,0.4,7.18c0.23,4.55,0.42,9.1,0.66,13.65
                           c0.22,4.15,0.49,8.3,0.73,12.44c0.18,3.19,0.36,6.38,0.52,9.58c0.23,4.47,0.43,8.94,0.65,13.41c0.13,2.63,0.31,5.27,0.44,7.9
                           c0.03,0.7-0.04,1.41-0.07,2.1c-1.36,0.53-2.64,0.54-3.9,0.62c-6.86,0.46-13.71,0.92-20.57,1.37c-3.51,0.23-7.02,0.41-10.53,0.65
                           c-3.51,0.23-7.01,0.5-10.52,0.75c-2.71,0.19-5.42,0.38-8.13,0.55c-3.59,0.22-7.18,0.4-10.77,0.65
                           c-5.82,0.39-11.64,0.82-17.46,1.23c-2.63,0.18-5.26,0.37-7.89,0.53c-3.51,0.22-7.02,0.4-10.53,0.63
                           c-5.82,0.39-11.64,0.83-17.46,1.22c-4.7,0.32-9.41,0.6-14.12,0.89C630.94,396.24,630.63,396.13,630.13,396.05z"/>
                       <path id="lote_42" class="st3" d="M637.12,459.11c-0.56-1.96-0.6-3.8-0.82-5.61c-0.65-5.47-1.23-10.95-1.83-16.43
                           c-0.4-3.65-0.75-7.31-1.15-10.96c-0.39-3.57-0.82-7.14-1.22-10.71c-0.4-3.57-0.77-7.15-1.15-10.72c-0.2-1.91-0.4-3.81-0.6-5.72
                           c-0.21-2.04-0.14-2.1,1.98-2.23c1.52-0.1,3.03-0.23,4.54-0.33c3.19-0.21,6.38-0.4,9.57-0.62c3.91-0.26,7.81-0.53,11.72-0.8
                           c2.71-0.19,5.42-0.38,8.13-0.55c3.51-0.22,7.02-0.4,10.53-0.63c5.82-0.39,11.64-0.82,17.46-1.22c2.55-0.18,5.1-0.36,7.65-0.52
                           c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.01-0.5,10.52-0.75c2.55-0.18,5.1-0.36,7.65-0.52c3.51-0.22,7.02-0.41,10.53-0.64
                           c3.43-0.22,6.85-0.5,10.28-0.72c4.86-0.31,9.73-0.6,14.6-0.89c0.15-0.01,0.31,0.08,0.61,0.16c0.11,0.36,0.32,0.79,0.35,1.23
                           c0.36,5.74,0.67,11.49,1.03,17.23c0.4,6.38,0.82,12.76,1.23,19.14c0.16,2.47,0.29,4.95,0.44,7.42c0.31,5.34,0.63,10.69,0.93,16.03
                           c0.02,0.3-0.1,0.62-0.14,0.88c-0.81,0.65-1.72,0.57-2.58,0.63c-6.06,0.39-12.13,0.74-18.19,1.14c-5.74,0.38-11.48,0.82-17.22,1.22
                           c-2.55,0.18-5.1,0.35-7.65,0.51c-6.06,0.38-12.13,0.73-18.19,1.14c-5.74,0.38-11.48,0.81-17.22,1.22
                           c-2.55,0.18-5.1,0.35-7.65,0.52c-6.06,0.38-12.13,0.74-18.19,1.14c-5.74,0.38-11.48,0.81-17.22,1.21
                           c-2.63,0.18-5.26,0.36-7.89,0.52C638.13,459.23,637.73,459.15,637.12,459.11z"/>
                       <path id="lote_41" class="st3" d="M775.63,450.81c0.17,2.36,0.35,4.5,0.48,6.65c0.29,4.79,0.56,9.58,0.83,14.36
                           c0.17,2.95,0.35,5.91,0.51,8.86c0.22,4.07,0.41,8.14,0.64,12.22c0.24,4.23,0.51,8.46,0.77,12.69c0.12,2.07,0.26,4.13,0.17,6.3
                           c-1.18,0.55-2.38,0.54-3.55,0.63c-2.23,0.17-4.47,0.31-6.7,0.45c-3.51,0.22-7.02,0.41-10.53,0.65c-3.51,0.23-7.02,0.5-10.53,0.75
                           c-2.63,0.18-5.26,0.37-7.9,0.54c-3.59,0.23-7.18,0.41-10.77,0.65c-5.82,0.39-11.64,0.82-17.46,1.22c-2.63,0.18-5.26,0.37-7.9,0.54
                           c-6.06,0.38-12.13,0.73-18.19,1.14c-5.82,0.39-11.64,0.83-17.46,1.24c-2.55,0.18-5.1,0.36-7.66,0.51
                           c-3.59,0.22-7.18,0.42-10.77,0.64c-0.96,0.06-1.91,0.2-2.87,0.25c-0.87,0.04-1.73,0.01-2.7,0.01c-0.18-0.58-0.43-1.09-0.49-1.62
                           c-0.38-3.33-0.71-6.67-1.07-10.01c-0.4-3.65-0.83-7.3-1.23-10.96c-0.39-3.49-0.76-6.99-1.14-10.49c-0.41-3.73-0.83-7.47-1.24-11.2
                           c-0.39-3.49-0.76-6.99-1.15-10.49c-0.1-0.95-0.23-1.9-0.32-2.86c-0.1-1.1-0.39-2.21-0.05-3.28c0.72-0.61,1.54-0.51,2.33-0.57
                           c6.7-0.46,13.4-0.92,20.1-1.36c3.51-0.23,7.02-0.41,10.53-0.64c3.43-0.23,6.86-0.49,10.29-0.73c2.63-0.19,5.26-0.37,7.9-0.54
                           c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.5,10.53-0.75c2.71-0.19,5.42-0.38,8.14-0.55c3.51-0.22,7.02-0.4,10.53-0.63
                           c5.82-0.39,11.64-0.82,17.46-1.23c2.63-0.18,5.26-0.36,7.9-0.53c6.86-0.45,13.72-0.89,20.58-1.33
                           C774.54,450.68,774.93,450.75,775.63,450.81z"/>
                       <path id="lote_40" class="st3" d="M781.98,512.69c0.23,0.47,0.34,0.61,0.35,0.76c0.18,2.15,0.36,4.3,0.5,6.46
                           c0.46,6.94,0.89,13.88,1.34,20.82c0.17,2.71,0.36,5.42,0.52,8.14c0.23,3.83,0.41,7.66,0.66,11.49c0.22,3.43,0.49,6.86,0.72,10.29
                           c0.06,0.87,0.01,1.74,0.01,2.65c-0.87,0.61-1.85,0.57-2.78,0.64c-2.39,0.17-4.79,0.32-7.18,0.46c-3.67,0.22-7.34,0.41-11.02,0.64
                           c-3.59,0.23-7.18,0.49-10.77,0.74c-2.71,0.18-5.42,0.37-8.14,0.53c-3.67,0.22-7.34,0.42-11.02,0.65
                           c-3.67,0.23-7.34,0.5-11.01,0.75c-2.71,0.18-5.42,0.37-8.14,0.53c-3.67,0.22-7.35,0.41-11.02,0.64
                           c-6.14,0.4-12.28,0.82-18.43,1.23c-2.71,0.18-5.42,0.37-8.14,0.53c-3.75,0.23-7.5,0.42-11.26,0.65c-3.51,0.22-7.02,0.5-10.53,0.72
                           c-1.91,0.12-3.82,0.18-5.5,0.25c-0.84-0.56-0.86-1.22-0.93-1.85c-0.68-6.36-1.35-12.71-2.05-19.07
                           c-0.56-5.08-1.17-10.16-1.73-15.24c-0.56-5.08-1.07-10.17-1.62-15.26c-0.22-2.07-0.5-4.13-0.73-6.19
                           c-0.09-0.78-0.11-1.57-0.16-2.35c0.81-0.71,1.72-0.66,2.57-0.72c2.23-0.16,4.47-0.31,6.7-0.45c3.51-0.22,7.02-0.4,10.53-0.63
                           c5.82-0.39,11.64-0.82,17.46-1.22c2.55-0.18,5.1-0.36,7.66-0.52c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.5,10.53-0.75
                           c2.71-0.19,5.42-0.38,8.14-0.56c3.51-0.22,7.03-0.4,10.54-0.63c5.82-0.39,11.64-0.82,17.47-1.22c2.55-0.18,5.1-0.36,7.66-0.52
                           c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.52,10.53-0.74C777.18,512.9,779.56,512.81,781.98,512.69z"/>
                       <path id="lote_39" class="st3" d="M789.51,574.32c1.6,20.28,3.17,40.27,4.74,60.27c0.02,0.23-0.09,0.46-0.13,0.67
                           c-0.73,0.74-1.65,0.59-2.5,0.64c-2.23,0.15-4.47,0.28-6.7,0.41c-3.99,0.22-7.99,0.41-11.98,0.64c-3.99,0.23-7.98,0.5-11.97,0.75
                           c-2.95,0.18-5.91,0.37-8.86,0.53c-4.07,0.23-8.15,0.41-12.22,0.65c-3.91,0.23-7.82,0.5-11.73,0.75c-2.95,0.18-5.91,0.37-8.86,0.53
                           c-4.07,0.22-8.15,0.41-12.22,0.65c-3.83,0.22-7.66,0.49-11.49,0.73c-3.11,0.19-6.22,0.39-9.34,0.56
                           c-4.15,0.23-8.31,0.41-12.46,0.65c-3.75,0.22-7.5,0.5-11.25,0.72c-1.66,0.1-3.33,0.33-5.11,0.03c-0.16-0.53-0.4-1.04-0.46-1.58
                           c-0.38-3.33-0.71-6.67-1.08-10.01c-0.4-3.65-0.82-7.3-1.23-10.96c-0.39-3.49-0.76-6.99-1.14-10.49
                           c-0.42-3.81-0.85-7.62-1.27-11.44c-0.38-3.42-0.74-6.83-1.11-10.25c-0.1-0.95-0.22-1.9-0.32-2.86c-0.09-0.86-0.32-1.73,0.05-2.74
                           c0.38-0.09,0.82-0.25,1.27-0.28c4.87-0.33,9.73-0.64,14.6-0.96c6.06-0.4,12.12-0.82,18.19-1.23c2.79-0.19,5.58-0.38,8.38-0.54
                           c3.67-0.22,7.35-0.4,11.02-0.63c6.06-0.39,12.12-0.82,18.19-1.23c2.71-0.18,5.42-0.37,8.14-0.53c6.3-0.38,12.61-0.73,18.91-1.13
                           c5.98-0.38,11.96-0.81,17.95-1.22c2.55-0.17,5.11-0.34,7.66-0.49c4.07-0.24,8.14-0.47,12.21-0.69
                           C788.01,574.21,788.63,574.28,789.51,574.32z"/>
                       <path id="lote_38" class="st3" d="M794.11,636.45c0.14,0.45,0.26,0.67,0.27,0.9c1.21,18.67,2.42,37.33,3.62,56
                           c0.01,0.14-0.1,0.3-0.15,0.46c-0.53,0.6-1.29,0.56-1.99,0.6c-3.27,0.21-6.55,0.39-9.82,0.6c-3.59,0.24-7.18,0.51-10.77,0.76
                           c-2.55,0.18-5.1,0.36-7.66,0.52c-3.51,0.22-7.02,0.41-10.54,0.64c-3.51,0.23-7.02,0.5-10.53,0.75c-2.71,0.19-5.42,0.38-8.14,0.56
                           c-3.51,0.22-7.03,0.4-10.54,0.63c-5.82,0.39-11.64,0.82-17.47,1.22c-2.63,0.18-5.26,0.37-7.9,0.54
                           c-6.07,0.38-12.13,0.73-18.2,1.14c-5.82,0.39-11.64,0.84-17.47,1.22c-1.26,0.08-2.53,0.01-3.91,0.01
                           c-0.1-0.49-0.26-0.94-0.27-1.39c-0.03-1.04-0.04-2.08,0.02-3.12c0.22-4.02-0.33-7.98-0.8-11.95c-0.41-3.49-0.76-6.99-1.15-10.49
                           c-0.42-3.81-0.84-7.63-1.27-11.44c-0.37-3.34-0.74-6.67-1.11-10.01c-0.28-2.54-0.57-5.08-0.84-7.63c-0.08-0.78-0.29-1.57,0.1-2.48
                           c1.18-0.35,2.46-0.41,3.71-0.49c4.07-0.24,8.15-0.42,12.22-0.66c3.91-0.23,7.82-0.5,11.73-0.74c2.87-0.18,5.75-0.35,8.62-0.51
                           c3.99-0.22,7.99-0.42,11.98-0.65c3.99-0.23,7.98-0.5,11.97-0.75c2.95-0.18,5.91-0.37,8.86-0.53c4.07-0.23,8.15-0.42,12.22-0.66
                           c3.91-0.23,7.82-0.49,11.73-0.74c2.95-0.18,5.91-0.37,8.86-0.53c3.91-0.22,7.83-0.41,11.74-0.64c4.07-0.24,8.14-0.51,12.21-0.76
                           c3.11-0.19,6.23-0.37,9.34-0.54C793.2,636.31,793.6,636.4,794.11,636.45z"/>
                       <path id="lote_37" class="st3" d="M793.1,695.43c0.11,0.53,0.26,0.98,0.29,1.44c0.36,5.66,0.69,11.33,1.06,16.99
                           c0.39,6.06,0.82,12.12,1.23,18.18c0.18,2.63,0.36,5.26,0.51,7.9c0.22,3.67,0.42,7.34,0.64,11.01c0.06,1.04,0.18,2.07,0.24,3.11
                           c0.05,0.78,0.29,1.59-0.15,2.31c-0.61,0.57-1.36,0.46-2.07,0.51c-6.62,0.45-13.24,0.91-19.86,1.35
                           c-6.06,0.4-12.13,0.74-18.19,1.14c-5.82,0.39-11.64,0.83-17.46,1.23c-3.43,0.23-6.86,0.41-10.29,0.64
                           c-3.67,0.24-7.33,0.52-11,0.77c-2.63,0.18-5.26,0.37-7.89,0.54c-5.98,0.38-11.97,0.73-17.95,1.13
                           c-5.82,0.39-11.64,0.82-17.46,1.22c-3.51,0.24-7.02,0.45-10.53,0.65c-0.71,0.04-1.43,0.01-2.04,0.01
                           c-0.73-0.66-0.54-1.42-0.54-2.11c0.04-4.88,0.08-9.75,0.16-14.63c0.17-10.63,0.36-21.26,0.55-31.9c0.07-3.68,0.16-7.35,0.26-11.03
                           c0.01-0.55,0.08-1.1,0.14-1.79c0.49-0.12,0.92-0.27,1.37-0.34c0.79-0.11,1.59-0.21,2.38-0.26c6.06-0.38,12.13-0.73,18.19-1.13
                           c5.74-0.38,11.48-0.83,17.22-1.22c3.51-0.24,7.02-0.42,10.53-0.65c3.51-0.23,7.02-0.5,10.52-0.74c2.63-0.18,5.26-0.37,7.89-0.54
                           c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.5,10.52-0.75c2.71-0.19,5.42-0.38,8.13-0.55c3.51-0.22,7.02-0.4,10.53-0.63
                           c5.82-0.39,11.64-0.82,17.46-1.22c1.28-0.09,2.55-0.14,3.83-0.18C792.25,695.23,792.63,695.35,793.1,695.43z"/>
                       <path id="lote_36" class="st3" d="M791.89,757.93c0.25,1.47,0.42,2.96,0.52,4.47c0.45,6.54,0.92,13.08,1.37,19.62
                           c0.23,3.35,0.41,6.7,0.64,10.05c0.39,5.58,0.81,11.16,1.22,16.74c0.2,2.79,0.41,5.58,0.59,8.37c0.03,0.54-0.06,1.09-0.1,1.74
                           c-0.51,0.13-0.95,0.32-1.4,0.35c-5.34,0.36-10.69,0.69-16.04,1.05c-5.82,0.4-11.64,0.83-17.46,1.24c-2.55,0.18-5.1,0.35-7.66,0.51
                           c-6.06,0.38-12.13,0.73-18.19,1.13c-5.74,0.38-11.48,0.81-17.23,1.22c-2.55,0.18-5.1,0.36-7.66,0.52
                           c-3.59,0.22-7.18,0.41-10.78,0.65c-5.82,0.39-11.64,0.82-17.47,1.22c-2.39,0.17-4.79,0.33-7.18,0.48
                           c-4.47,0.27-8.94,0.54-13.41,0.8c-0.23,0.01-0.47-0.07-0.68-0.1c-0.67-0.57-0.5-1.33-0.49-2.02c0.11-7.28,0.22-14.55,0.35-21.83
                           c0.18-10.56,0.36-21.11,0.56-31.67c0.03-1.6,0.11-3.2,0.19-4.79c0.02-0.38,0.13-0.76,0.23-1.29c1.96-0.18,3.85-0.39,5.75-0.53
                           c6.78-0.47,13.56-0.92,20.34-1.36c3.43-0.22,6.86-0.41,10.29-0.64c3.59-0.24,7.18-0.5,10.77-0.75c2.63-0.18,5.26-0.37,7.9-0.54
                           c3.51-0.22,7.02-0.41,10.54-0.64c3.51-0.23,7.02-0.5,10.53-0.75c2.71-0.19,5.42-0.38,8.14-0.55c3.51-0.22,7.03-0.4,10.54-0.63
                           c5.82-0.39,11.64-0.82,17.47-1.23c2.87-0.2,5.74-0.39,8.62-0.58c2.07-0.14,4.15-0.29,6.22-0.41
                           C789.85,757.71,790.81,757.54,791.89,757.93z"/>
                       <path id="lote_35" class="st3" d="M659.44,891.2c-0.02-0.73-0.08-1.44-0.06-2.15c0.25-12.63,0.52-25.26,0.75-37.89
                           c0.12-6.48,0.15-12.95,0.25-19.43c0.01-0.94-0.18-1.94,0.66-2.95c1.03-0.06,2.22-0.12,3.4-0.21c1.2-0.09,2.39-0.24,3.58-0.32
                           c6.78-0.46,13.56-0.92,20.34-1.36c3.51-0.23,7.02-0.42,10.53-0.65c3.51-0.23,7.02-0.5,10.52-0.75c2.63-0.18,5.26-0.37,7.9-0.54
                           c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.5,10.52-0.75c2.63-0.19,5.26-0.37,7.9-0.54c6.06-0.38,12.13-0.73,18.19-1.14
                           c5.74-0.38,11.48-0.81,17.22-1.21c2.63-0.18,5.26-0.35,7.9-0.51c0.31-0.02,0.63,0.06,1.06,0.11c0.13,0.43,0.36,0.86,0.39,1.31
                           c0.36,5.18,0.67,10.37,1.02,15.55c0.4,5.98,0.83,11.96,1.24,17.94c0.2,2.87,0.39,5.74,0.57,8.61c0.22,3.67,0.42,7.34,0.64,11.01
                           c0.12,1.99,0.29,3.99,0.4,5.98c0.03,0.54-0.04,1.09-0.07,1.76c-1.29,0.41-2.57,0.45-3.81,0.54c-3.51,0.25-7.02,0.42-10.53,0.66
                           c-3.51,0.23-7.02,0.5-10.52,0.75c-2.71,0.19-5.42,0.38-8.14,0.55c-3.59,0.23-7.18,0.41-10.77,0.65
                           c-5.82,0.39-11.64,0.82-17.46,1.23c-2.63,0.18-5.26,0.37-7.9,0.53c-3.51,0.22-7.02,0.4-10.53,0.63
                           c-5.82,0.39-11.64,0.82-17.46,1.22c-2.63,0.18-5.26,0.37-7.9,0.53c-6.06,0.38-12.13,0.74-18.19,1.14
                           c-3.19,0.21-6.38,0.47-9.57,0.69C661.25,891.62,660.45,891.87,659.44,891.2z"/>
                       <path id="lote_34" class="st3" d="M658.54,953.11c-0.09-0.85-0.2-1.39-0.19-1.93c0.33-19.5,0.65-39,1.04-58.32
                           c0.81-0.79,1.64-0.73,2.43-0.78c5.82-0.37,11.65-0.71,17.47-1.1c5.74-0.38,11.48-0.83,17.22-1.22c3.43-0.24,6.86-0.41,10.29-0.64
                           c3.59-0.24,7.18-0.5,10.77-0.75c2.63-0.18,5.26-0.37,7.9-0.54c3.51-0.22,7.02-0.41,10.53-0.64c3.51-0.23,7.02-0.5,10.53-0.75
                           c2.63-0.19,5.26-0.37,7.9-0.54c3.51-0.22,7.02-0.4,10.53-0.64c3.43-0.23,6.86-0.51,10.29-0.74c3.75-0.25,7.5-0.47,11.25-0.7
                           c1.34-0.08,2.69-0.15,4.11-0.23c0.16,0.48,0.37,0.84,0.4,1.2c0.35,4.86,0.67,9.73,1,14.59c0.24,3.51,0.5,7.02,0.75,10.52
                           c0.19,2.71,0.39,5.42,0.57,8.13c0.22,3.51,0.41,7.02,0.64,10.53c0.22,3.27,0.49,6.54,0.72,9.8c0.1,1.36,0.16,2.71,0.2,4.07
                           c0.01,0.46-0.1,0.92-0.16,1.5c-1.9,0.26-3.71,0.44-5.53,0.56c-6.62,0.42-13.24,0.89-19.86,1.32c-3.35,0.22-6.7,0.41-10.05,0.63
                           c-3.75,0.25-7.5,0.52-11.24,0.78c-2.71,0.19-5.42,0.38-8.14,0.55c-3.51,0.22-7.02,0.4-10.53,0.63
                           c-5.82,0.39-11.64,0.82-17.46,1.22c-2.55,0.18-5.1,0.36-7.66,0.52c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-3.51,0.23-7.02,0.5-10.53,0.75c-2.55,0.18-5.1,0.35-7.66,0.52c-5.03,0.34-10.05,0.67-15.08,1
                           C659.9,953.14,659.35,953.11,658.54,953.11z"/>
                       <path id="lote_33" class="st3" d="M789.46,945.22c0.31,1.62,0.46,3.12,0.57,4.62c0.43,5.98,0.89,11.96,1.33,17.93
                           c0.22,2.95,0.41,5.9,0.62,8.85c0.25,3.35,0.51,6.69,0.77,10.04c0.16,2.15,0.32,4.3,0.48,6.46c0.24,3.43,0.49,6.86,0.7,10.29
                           c0.04,0.62-0.05,1.24-0.08,1.97c-1.49,0.36-2.91,0.47-4.34,0.56c-6.86,0.45-13.72,0.92-20.58,1.37
                           c-3.51,0.23-7.02,0.41-10.53,0.64c-3.51,0.23-7.02,0.5-10.53,0.75c-2.63,0.19-5.26,0.37-7.9,0.54c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-5.9,0.4-11.8,0.82-17.7,1.23c-2.63,0.18-5.26,0.37-7.9,0.53c-6.06,0.38-12.13,0.74-18.19,1.14c-5.74,0.38-11.48,0.81-17.22,1.21
                           c-2.87,0.2-5.74,0.4-8.62,0.57c-0.7,0.04-1.41-0.03-2.23-0.05c-0.1-0.64-0.26-1.17-0.25-1.7c0.11-7.2,0.24-14.39,0.36-21.59
                           c0.07-4.32,0.1-8.64,0.18-12.95c0.13-7.44,0.28-14.87,0.43-22.31c0.01-0.63,0.1-1.25,0.15-1.8c0.97-0.64,1.96-0.58,2.91-0.64
                           c5.98-0.38,11.97-0.73,17.95-1.12c7.26-0.47,14.52-0.96,21.78-1.45c7.18-0.48,14.36-0.96,21.54-1.44
                           c7.18-0.48,14.36-0.96,21.54-1.44c7.42-0.49,14.84-0.99,22.26-1.48c7.02-0.47,14.04-0.94,21.06-1.39
                           C788.1,945.18,788.72,945.22,789.46,945.22z"/>
                       <path id="lote_32" class="st3" d="M657.46,1015.53c1.32-0.49,2.6-0.5,3.86-0.58c6.78-0.46,13.56-0.91,20.33-1.36
                           c3.43-0.22,6.86-0.41,10.29-0.64c3.59-0.24,7.17-0.5,10.76-0.75c2.63-0.18,5.26-0.37,7.89-0.54c3.51-0.22,7.02-0.41,10.53-0.64
                           c3.51-0.23,7.01-0.5,10.52-0.75c2.71-0.19,5.42-0.38,8.13-0.55c3.51-0.22,7.02-0.4,10.53-0.63c5.82-0.39,11.64-0.82,17.46-1.23
                           c2.55-0.18,5.1-0.36,7.66-0.52c4.23-0.26,8.46-0.5,12.69-0.74c0.38-0.02,0.77,0.04,1.28,0.07c0.1,0.53,0.23,0.98,0.26,1.43
                           c0.31,5.19,0.61,10.37,0.91,15.56c0.25,4.31,0.52,8.62,0.77,12.92c0.19,3.19,0.38,6.38,0.54,9.58c0.23,4.39,0.42,8.78,0.65,13.17
                           c0.11,2.15,0.29,4.31,0.39,6.46c0.04,0.7-0.05,1.4-0.07,1.96c-0.86,0.69-1.68,0.56-2.47,0.61c-7.1,0.45-14.2,0.9-21.3,1.33
                           c-3.83,0.23-7.66,0.41-11.49,0.65c-3.83,0.23-7.66,0.5-11.48,0.75c-2.79,0.18-5.58,0.36-8.38,0.53
                           c-3.83,0.22-7.66,0.41-11.49,0.64c-3.83,0.23-7.66,0.51-11.48,0.76c-2.79,0.18-5.58,0.36-8.38,0.52
                           c-3.91,0.23-7.82,0.42-11.73,0.65c-3.67,0.22-7.34,0.49-11.01,0.73c-3.19,0.21-6.38,0.41-9.57,0.6
                           c-3.91,0.22-7.82,0.41-11.73,0.64c-1.2,0.07-2.39,0.23-3.58,0.3c-0.7,0.04-1.41,0.01-2.21,0.01c-0.1-0.58-0.26-1.04-0.26-1.49
                           c0.14-9.35,0.31-18.71,0.45-28.06c0.07-4.32,0.09-8.63,0.17-12.95c0.1-5.52,0.23-11.03,0.36-16.54
                           C657.29,1016.79,657.39,1016.17,657.46,1015.53z"/>
                       <path id="lote_31" class="st3" d="M655.54,1138.4c-0.6-0.95-0.41-1.85-0.4-2.71c0.06-3.52,0.19-7.03,0.25-10.55
                           c0.24-14.95,0.46-29.91,0.7-44.86c0.02-0.95-0.06-1.91,0.35-2.86c0.9-0.47,1.87-0.47,2.81-0.52c6.63-0.38,13.25-0.73,19.88-1.14
                           c6.14-0.37,12.29-0.81,18.43-1.21c3.51-0.22,7.02-0.41,10.54-0.62c4.23-0.26,8.46-0.53,12.69-0.8c2.79-0.18,5.59-0.36,8.38-0.52
                           c3.75-0.22,7.51-0.41,11.26-0.64c3.91-0.24,7.82-0.51,11.73-0.76c2.79-0.18,5.59-0.36,8.38-0.53c3.83-0.22,7.67-0.41,11.5-0.64
                           c3.75-0.23,7.5-0.5,11.25-0.73c1.26-0.08,2.53-0.36,3.75,0.05c0.59,0.91,0.53,1.89,0.6,2.84c0.46,6.06,0.93,12.11,1.37,18.17
                           c0.39,5.34,0.73,10.69,1.13,16.03c0.39,5.26,0.83,10.52,1.24,15.78c0.16,1.99,0.29,3.99,0.41,5.98c0.06,0.96-0.24,1.33-1.15,1.48
                           c-0.39,0.07-0.79,0.09-1.19,0.11c-2.07,0.14-4.15,0.29-6.22,0.42c-6.06,0.38-12.13,0.73-18.19,1.13
                           c-5.82,0.39-11.64,0.83-17.46,1.24c-2.55,0.18-5.1,0.35-7.66,0.51c-3.51,0.22-7.03,0.4-10.54,0.63
                           c-5.82,0.39-11.64,0.82-17.47,1.22c-2.55,0.18-5.1,0.36-7.66,0.52c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-3.51,0.23-7.02,0.5-10.53,0.75c-2.71,0.19-5.42,0.39-8.14,0.55c-3.59,0.22-7.18,0.42-10.78,0.64c-2.31,0.14-4.63,0.32-6.94,0.45
                           C656.7,1138.53,656.08,1138.43,655.54,1138.4z"/>
                       <path id="lote_30" class="st3" d="M786.93,1130.6c0.61,1,0.56,1.98,0.61,2.92c0.17,3.19,0.32,6.39,0.47,9.58
                           c0.22,4.71,0.42,9.43,0.64,14.14c0.24,4.95,0.52,9.9,0.76,14.85c0.3,6.23,0.56,12.46,0.83,18.69c0.01,0.31-0.08,0.62-0.14,1.06
                           c-0.45,0.12-0.88,0.31-1.33,0.34c-5.42,0.37-10.85,0.69-16.28,1.06c-5.74,0.39-11.48,0.82-17.23,1.22
                           c-3.19,0.22-6.38,0.4-9.58,0.61c-3.91,0.26-7.82,0.53-11.73,0.8c-2.63,0.18-5.26,0.37-7.9,0.53c-3.59,0.22-7.19,0.41-10.78,0.65
                           c-5.82,0.39-11.64,0.82-17.47,1.23c-2.55,0.18-5.1,0.36-7.66,0.52c-3.51,0.22-7.02,0.41-10.54,0.64
                           c-3.51,0.23-7.02,0.52-10.53,0.75c-4.63,0.3-9.26,0.58-13.89,0.85c-0.23,0.01-0.47-0.07-0.67-0.11c-0.65-0.49-0.5-1.18-0.49-1.79
                           c0.04-3.52,0.11-7.04,0.17-10.56c0.09-4.8,0.19-9.6,0.27-14.39c0.18-10.8,0.35-21.59,0.54-32.39c0.01-0.78-0.13-1.61,0.54-2.49
                           c1.67-0.16,3.48-0.38,5.3-0.5c6.06-0.4,12.13-0.73,18.2-1.14c5.74-0.38,11.48-0.83,17.23-1.22c3.51-0.24,7.02-0.42,10.54-0.65
                           c3.51-0.23,7.02-0.5,10.53-0.75c2.71-0.19,5.42-0.38,8.14-0.55c3.59-0.23,7.19-0.41,10.78-0.65c3.35-0.22,6.7-0.49,10.05-0.73
                           c2.71-0.19,5.42-0.38,8.14-0.55c3.51-0.22,7.03-0.4,10.54-0.63c5.82-0.39,11.64-0.81,17.47-1.22
                           C783.96,1130.61,785.46,1130.49,786.93,1130.6z"/>
                       <path id="lote_29" class="st3" d="M653.34,1272.69c-0.57-0.61-0.48-1.27-0.48-1.9c0.12-8.39,0.24-16.79,0.38-25.18
                           c0.15-9.03,0.31-18.06,0.47-27.1c0.09-4.8,0.19-9.59,0.3-14.39c0.02-0.7,0.11-1.4,0.18-2.17c0.49-0.13,0.86-0.29,1.24-0.31
                           c5.34-0.36,10.69-0.69,16.03-1.05c3.43-0.23,6.85-0.49,10.28-0.74c2.71-0.19,5.42-0.39,8.13-0.56c3.51-0.22,7.02-0.4,10.53-0.63
                           c5.82-0.39,11.64-0.82,17.46-1.22c2.63-0.18,5.26-0.37,7.89-0.53c6.06-0.38,12.13-0.74,18.19-1.14
                           c5.82-0.39,11.64-0.83,17.46-1.23c3.43-0.23,6.86-0.42,10.29-0.64c3.43-0.22,6.86-0.46,10.29-0.69c0.7-0.05,1.43-0.28,2.24,0.33
                           c0.13,0.96,0.33,2.05,0.43,3.15c0.4,4.62,0.74,9.24,1.14,13.86c0.4,4.7,0.83,9.39,1.25,14.09c0.18,2.07,0.37,4.14,0.54,6.21
                           c0.38,4.7,0.73,9.4,1.13,14.1c0.39,4.54,0.84,9.07,1.22,13.61c0.15,1.73,0.4,3.48,0.14,5.33c-0.41,0.1-0.78,0.26-1.15,0.28
                           c-5.74,0.36-11.49,0.7-17.23,1.07c-5.98,0.39-11.96,0.81-17.94,1.21c-2.71,0.18-5.42,0.37-8.14,0.53
                           c-3.75,0.23-7.5,0.41-11.25,0.65c-6.06,0.39-12.12,0.82-18.18,1.22c-2.63,0.18-5.26,0.35-7.9,0.51
                           c-3.59,0.22-7.18,0.41-10.77,0.64c-3.75,0.24-7.49,0.51-11.24,0.76c-2.79,0.19-5.58,0.38-8.37,0.55
                           c-3.75,0.23-7.5,0.41-11.25,0.65c-3.51,0.22-7.01,0.51-10.52,0.73C655.16,1272.74,654.21,1272.69,653.34,1272.69z"/>
                       <path id="lote_28" class="st3" d="M651.81,1346.04c-0.11-0.63-0.21-0.93-0.21-1.24c0.38-23.26,0.76-46.52,1.15-69.78
                           c0.01-0.39,0.12-0.78,0.18-1.15c0.84-0.73,1.83-0.61,2.77-0.68c2.23-0.17,4.47-0.3,6.7-0.43c3.59-0.22,7.18-0.41,10.77-0.64
                           c3.75-0.24,7.49-0.51,11.24-0.76c2.71-0.18,5.42-0.37,8.13-0.53c3.67-0.22,7.34-0.41,11.01-0.64c3.67-0.23,7.33-0.51,11-0.76
                           c2.63-0.18,5.26-0.35,7.9-0.51c3.67-0.22,7.34-0.41,11.01-0.65c3.67-0.23,7.33-0.5,11-0.75c2.79-0.19,5.58-0.38,8.37-0.55
                           c3.75-0.23,7.5-0.41,11.25-0.65c5.9-0.38,11.8-0.79,17.7-1.18c0.7-0.05,1.41-0.01,2.24-0.01c0.13,0.54,0.29,0.98,0.33,1.43
                           c0.31,3.18,0.6,6.36,0.88,9.55c0.44,5.09,0.87,10.19,1.31,15.28c0.18,2.15,0.38,4.3,0.55,6.45c0.38,4.7,0.71,9.4,1.11,14.1
                           c0.55,6.53,1.16,13.05,1.72,19.58c0.14,1.66,0.18,3.33,0.27,5.12c-0.64,0.17-1.15,0.39-1.67,0.43c-2.79,0.21-5.58,0.37-8.37,0.55
                           c-3.99,0.27-7.97,0.54-11.96,0.82c-2.71,0.18-5.42,0.38-8.13,0.55c-6.06,0.38-12.13,0.73-18.19,1.13
                           c-5.74,0.38-11.48,0.82-17.22,1.22c-2.47,0.17-4.94,0.34-7.42,0.5c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-3.43,0.23-6.85,0.49-10.28,0.73c-2.63,0.19-5.26,0.37-7.89,0.54c-3.51,0.22-7.02,0.41-10.53,0.64
                           c-3.51,0.23-7.01,0.51-10.52,0.75c-3.27,0.22-6.54,0.43-9.81,0.64c-1.36,0.09-2.71,0.18-4.07,0.26
                           C653.08,1346.07,652.53,1346.04,651.81,1346.04z"/>
                       <path id="lote_27" class="st4" d="M650.56,1416.29c-0.09-0.9-0.22-1.52-0.21-2.14c0.2-10.95,0.42-21.91,0.63-32.86
                           c0.06-3.04,0.08-6.08,0.13-9.11c0.14-7.84,0.29-15.67,0.44-23.5c0.01-0.54,0.12-1.09,0.17-1.52c0.7-0.63,1.45-0.54,2.16-0.59
                           c6.62-0.46,13.24-0.92,19.86-1.35c6.06-0.4,12.13-0.74,18.19-1.14c5.74-0.38,11.48-0.81,17.22-1.22c2.63-0.19,5.26-0.37,7.9-0.53
                           c3.51-0.22,7.02-0.4,10.53-0.63c5.82-0.39,11.64-0.81,17.46-1.22c2.71-0.19,5.42-0.38,8.14-0.55c3.59-0.22,7.18-0.4,10.77-0.64
                           c5.74-0.39,11.48-0.81,17.22-1.21c0.94-0.07,1.9-0.26,2.93,0.12c0.38,1.56,0.48,3.15,0.61,4.72c0.48,5.98,0.94,11.95,1.39,17.93
                           c0.39,5.18,0.74,10.36,1.13,15.54c0.39,5.02,0.82,10.04,1.22,15.06c0.17,2.07,0.32,4.14,0.48,6.22c0.22,2.87,0.44,5.74,0.63,8.61
                           c0.05,0.78,0.22,1.59-0.13,2.32c-0.73,0.57-1.55,0.48-2.34,0.52c-7.35,0.37-14.69,0.72-22.04,1.1
                           c-8.94,0.46-17.88,0.95-26.82,1.43c-8.94,0.48-17.88,0.96-26.82,1.44c-8.94,0.48-17.88,0.96-26.82,1.44
                           c-9.02,0.48-18.04,0.96-27.06,1.45c-1.44,0.08-2.87,0.23-4.31,0.31C652.43,1416.32,651.64,1416.29,650.56,1416.29z"/>
                   </g>
               </g>
               <g id="manzana3">
                   <path id="mzn3calle" class="st0" d="M1063.77,120.33c0,0-0.01,0-0.01,0c-15.79,0-43.55,7.11-82.49,21.13
                       c-21.69,7.81-28.55,17.69-30.49,21.58c-1.36,2.73-1.92,5.79-1.6,8.83l51.84,493.92c0.86,8.2,7.79,14.33,15.9,14.33
                       c0.43,0,0.86-0.02,1.3-0.05l393.84-31.68c6.47-0.52,11.98-4.89,13.96-11.08c1.98-6.18,0.02-12.94-4.94-17.12
                       c-3.82-3.21-93.65-78.76-108.71-90.95c-6.08-4.92-16.79-16.77-27.02-32.14c-8.18-12.29-18.82-30.99-23.11-50.3
                       c-3.69-16.62-3.93-32.34-4.16-47.53c-0.29-19.06-0.56-37.06-7.23-55.29c-10.48-28.64-44.32-82.29-50.37-91.78l-41.29-106.17
                       c-4.36-11.21-14.5-18.9-26.46-20.07c-18.95-1.86-52.86-5.05-66.93-5.59C1065.12,120.35,1064.45,120.33,1063.77,120.33
                       L1063.77,120.33z"/>
                   <g id="mzn3lotes">
                       <path id="lote_75" class="st4" d="M1017.32,663.8c-4.74-45.14-9.46-90.14-14.2-135.26c21.45-1.76,42.75-3.51,64.23-5.27
                           c4.32,45.15,8.62,90.2,12.94,135.42c-5.3,0.53-10.54,0.87-15.78,1.31c-5.22,0.44-10.44,0.86-15.66,1.28
                           c-5.26,0.42-10.52,0.83-15.78,1.25C1027.86,662.94,1022.66,663.37,1017.32,663.8z"/>
                       <path id="lote_74" class="st3" d="M1067.83,523.23c20.97-1.72,41.82-3.43,62.64-5.14c0.49,1,13.48,133.65,13.58,135.52
                           c-21.04,1.69-42.09,3.39-63.28,5.09C1076.46,613.53,1072.15,568.45,1067.83,523.23z"/>
                       <path id="lote_73" class="st3" d="M1202.96,648.87c-19.49,1.57-38.84,3.12-58.32,4.69c-4.49-45.2-8.96-90.28-13.45-135.53
                           c20.72-1.7,41.37-3.39,62.11-5.1c0.08,0.41,0.18,0.7,0.2,1c0.51,7.33,1.01,14.67,1.53,22c0.43,6.14,0.9,12.27,1.33,18.41
                           c0.36,5.1,0.69,10.21,1.06,15.31c0.44,6.22,0.9,12.43,1.34,18.65c0.36,5.06,0.69,10.13,1.05,15.19c0.36,5.1,0.73,10.2,1.09,15.3
                           c0.35,5.02,0.7,10.04,1.05,15.07c0.28,4.03,0.58,8.05,0.86,12.08C1202.86,646.86,1202.9,647.78,1202.96,648.87z"/>
                       <path id="lote_72_00000096780264869313924530000007730801874393419141_" class="st3" d="M1267,643.72
                           c-21.21,1.71-42.31,3.4-63.52,5.11c-3.2-45.34-6.39-90.57-9.59-135.94c20.24-1.66,40.37-3.31,60.65-4.98
                           C1258.69,553.23,1262.84,598.41,1267,643.72z"/>
                       <path id="lote_71" class="st4" d="M1267.47,643.58c-4.15-45.21-8.29-90.36-12.44-135.56c0.22-0.08,0.39-0.19,0.57-0.21
                           c5.18-0.43,10.36-0.82,15.53-1.28c0.89-0.08,1.35,0.25,1.83,0.96c6.27,9.3,13.14,18.12,20.82,26.31c3.78,4.04,8,7.58,12.25,11.11
                           c14.37,11.93,28.71,23.89,43.03,35.87c17.66,14.78,35.29,29.6,52.94,44.41c2.48,2.08,4.96,4.17,7.44,6.25
                           c0.21,0.18,0.41,0.37,0.74,0.67c-0.39,0.08-0.63,0.16-0.87,0.18c-5.66,0.46-11.31,0.92-16.97,1.38
                           c-4.42,0.35-8.85,0.69-13.27,1.05c-5.5,0.44-10.99,0.9-16.49,1.34c-4.38,0.35-8.77,0.69-13.15,1.04
                           c-4.42,0.35-8.84,0.71-13.27,1.07c-4.5,0.36-9,0.73-13.51,1.09c-4.58,0.37-9.16,0.75-13.74,1.12c-3.35,0.27-6.69,0.53-10.04,0.8
                           c-4.58,0.37-9.16,0.74-13.74,1.11c-4.46,0.36-8.92,0.71-13.39,1.06c-1.04,0.08-2.07,0.17-3.11,0.25
                           C1268.28,643.6,1267.93,643.58,1267.47,643.58z"/>
                       <path id="lote_70" class="st5" d="M1271.88,506c-48.53,3.98-96.87,7.95-145.17,11.91c-0.38-1.11-4.24-57.21-4.35-62.7
                           c0.31-0.06,0.64-0.17,0.97-0.19c9.97-0.57,19.95-1.13,29.92-1.7c6.78-0.39,13.56-0.79,20.35-1.18c6.42-0.36,12.85-0.69,19.27-1.06
                           c6.5-0.37,13-0.77,19.51-1.15c6.66-0.39,13.32-0.77,19.99-1.15c4.27-0.25,8.54-0.49,12.81-0.73c0.27-0.02,0.55,0.02,0.85,0.04
                           c0.46,1.94,0.88,3.85,1.37,5.74c2.45,9.52,6.03,18.61,10.31,27.43c4,8.25,8.58,16.16,13.61,23.82
                           C1271.48,505.31,1271.61,505.56,1271.88,506z"/>
                       <path id="lote_69" class="st5" d="M1122.26,454.52c-1.36-20.42-2.72-40.77-4.08-61.21c0.44-0.07,0.82-0.17,1.2-0.19
                           c4.91-0.28,9.82-0.53,14.72-0.81c6.26-0.36,12.52-0.74,18.79-1.1c5.39-0.31,10.77-0.6,16.16-0.9c5.07-0.28,10.13-0.57,15.2-0.86
                           c6.74-0.39,13.48-0.79,20.22-1.18c6.62-0.38,13.24-0.76,19.86-1.14c5.66-0.32,11.33-0.64,16.99-0.96c0.08,0,0.15,0.04,0.37,0.1
                           c0.04,1.02,0.09,2.08,0.11,3.15c0.09,5.03,0.09,10.07,0.26,15.1c0.25,7.26,0.51,14.53,0.97,21.78c0.43,6.74,1.38,13.43,2.68,20.06
                           c0.07,0.34,0.11,0.69,0.17,1.13c-0.83,0.08-1.57,0.17-2.32,0.21c-4.71,0.27-9.42,0.52-14.12,0.79
                           c-6.46,0.37-12.92,0.75-19.38,1.12c-4.67,0.27-9.33,0.53-14,0.79c-5.03,0.28-10.05,0.56-15.08,0.85
                           c-4.87,0.28-9.73,0.55-14.6,0.83c-6.46,0.37-12.92,0.75-19.38,1.13c-4.71,0.27-9.41,0.53-14.12,0.79
                           c-3.07,0.17-6.14,0.34-9.22,0.51C1123.23,454.54,1122.81,454.52,1122.26,454.52z"/>
                       <path id="lote_68" class="st5" d="M1111.71,325.8c36.72-2.1,73.25-4.18,109.84-6.27c0.84,1.58,1.65,3.08,2.44,4.6
                           c3.64,6.98,7.12,14.04,10.16,21.31c3.16,7.57,5.17,15.43,6.23,23.56c0.7,5.35,1.08,10.73,1.29,16.12c0,0.12-0.01,0.23-0.02,0.51
                           c-0.85,0.07-1.71,0.15-2.57,0.2c-9.33,0.53-18.67,1.06-28.01,1.59c-4.91,0.28-9.81,0.56-14.72,0.84
                           c-5.11,0.29-10.21,0.59-15.32,0.89c-4.27,0.25-8.54,0.5-12.81,0.74c-5.9,0.34-11.81,0.66-17.71,1c-6.7,0.38-13.4,0.78-20.1,1.16
                           c-4.51,0.26-9.02,0.51-13.52,0.76c-0.47,0.03-0.95,0-1.6,0C1114.07,370.52,1112.91,348.25,1111.71,325.8z"/>
                       <path id="lote_67" class="st5" d="M1220.53,317.64c-10.55-19.39-21.95-38.28-33.74-56.93c-0.47-0.74-0.86-1.53-1.18-2.35
                           c-2.29-5.84-4.56-11.69-6.84-17.53c-0.16-0.4-0.34-0.78-0.51-1.16c-0.34,0-0.57-0.01-0.81,0c-5.91,0.33-11.81,0.67-17.72,1
                           c-6.27,0.35-12.53,0.69-18.8,1.04c-6.74,0.38-13.49,0.78-20.23,1.17c-6.7,0.39-13.41,0.78-20.11,1.16
                           c-1.6,0.09-3.21,0.18-4.81,0.27l0.04,0.49l0,0c2.26,26.97,4.51,53.94,6.78,81.04c39.61-2.26,79.04-4.51,118.67-6.77
                           C1220.97,318.46,1220.76,318.05,1220.53,317.64z"/>
                       <path id="lote_66" class="st4" d="M1178.09,239.13c-34.35,1.96-68.48,3.91-102.72,5.86c-0.05-0.69-0.11-1.28-0.13-1.86
                           c-0.33-7.38-0.65-14.76-0.98-22.15c-0.4-9.1-0.8-18.2-1.19-27.3c-0.4-9.14-0.8-18.28-1.2-27.42c-0.4-9.14-0.8-18.28-1.2-27.42
                           c-0.03-0.59,0-1.18,0-1.77c0.9,0,1.73-0.06,2.56,0.01c6.61,0.51,13.23,1.03,19.84,1.58c5.81,0.48,11.63,0.99,17.44,1.53
                           c5.45,0.5,10.9,1.05,16.35,1.57c1.67,0.16,3.35,0.26,5.01,0.51c5.81,0.88,9.93,4.04,12.22,9.42c1.64,3.86,3.07,7.8,4.59,11.71
                           c9.63,24.75,19.26,49.51,28.89,74.26C1177.7,238.08,1177.85,238.49,1178.09,239.13z"/>
                       <path id="lote_65" class="st4" d="M1070.03,136.87c0.06,0.41,0.12,0.68,0.13,0.96c0.34,7.94,0.66,15.88,1.01,23.83
                           c0.44,9.9,0.91,19.79,1.35,29.69c0.29,6.54,0.53,13.09,0.81,19.64c0.35,8.02,0.74,16.04,1.1,24.06c0.15,3.27,0.25,6.54,0.39,9.98
                           c-33.63,1.94-67.19,3.84-100.83,5.76c-0.17-1.5-0.35-2.88-0.49-4.26c-0.75-7.23-1.49-14.46-2.25-21.7
                           c-0.76-7.23-1.54-14.46-2.3-21.69c-0.68-6.48-1.34-12.95-2.01-19.43c-0.44-4.17-0.88-8.34-1.35-12.51
                           c-0.07-0.65,0.06-1.16,0.45-1.66c1.28-1.66,2.82-3.05,4.48-4.31c3.98-3.01,8.37-5.31,13.02-7.07c5.42-2.05,10.88-3.97,16.35-5.86
                           c11.07-3.81,22.23-7.33,33.54-10.33c6.53-1.73,13.09-3.33,19.78-4.31c3.35-0.49,6.74-0.81,10.13-1
                           C1065.52,136.52,1067.72,136.78,1070.03,136.87z"/>
                       <path id="lote_64" class="st3" d="M1101.36,316.54c-0.35-4.18-0.7-8.36-1.05-12.54c-0.37-4.38-0.74-8.76-1.1-13.14
                           c-0.35-4.22-0.7-8.44-1.05-12.66c-0.36-4.3-0.73-8.6-1.1-12.9c-0.38-4.46-0.74-8.92-1.12-13.38c-0.18-2.11-0.36-4.22-0.53-6.33
                           c-0.02-0.26,0.06-0.54,0.09-0.8c0.11,0.01,0.23,0.01,0.34,0.02l-0.04-0.49c-4.58,0.25-9.16,0.5-13.75,0.76
                           c-6.74,0.38-13.49,0.78-20.23,1.17c-6.7,0.39-13.41,0.79-20.11,1.17c-6.19,0.35-12.37,0.68-18.56,1.03
                           c-6.74,0.38-13.49,0.78-20.23,1.17c-8.66,0.49-17.32,0.97-25.98,1.47c-0.94,0.05-1.88,0.17-2.94,0.26
                           c2.85,27.16,5.69,54.2,8.53,81.27c0.57,0,0.96,0.02,1.36,0c5.63-0.32,11.25-0.64,16.88-0.96c6.14-0.35,12.29-0.68,18.44-1.03
                           c6.66-0.38,13.33-0.77,19.99-1.15c7.06-0.41,14.12-0.81,21.19-1.21c6.62-0.38,13.25-0.77,19.87-1.15
                           c6.27-0.35,12.53-0.69,18.8-1.04c0.99-0.06,1.97-0.17,3.03-0.26c0,0,0,0,0,0l-0.53-6.92
                           C1101.49,318.1,1101.42,317.32,1101.36,316.54z"/>
                       <path id="lote_63" class="st3" d="M1111.23,325.89c1.19,22.32,2.37,44.57,3.56,66.93c-0.46,0.07-0.88,0.16-1.3,0.18
                           c-6.22,0.35-12.45,0.69-18.67,1.04c-6.62,0.38-13.25,0.77-19.87,1.15c-6.74,0.39-13.49,0.79-20.23,1.17
                           c-6.22,0.35-12.45,0.68-18.68,1.04c-6.74,0.38-13.49,0.78-20.23,1.17c-6.62,0.38-13.25,0.76-19.87,1.14
                           c-1.72,0.1-3.43,0.19-5.15,0.28c-0.35,0.02-0.71,0-1.18,0c-2.34-22.26-4.67-44.46-7.01-66.76c0.34-0.05,0.64-0.12,0.93-0.13
                           c9.02-0.51,18.04-1,27.05-1.52c7.86-0.45,15.72-0.92,23.58-1.38c6.7-0.39,13.4-0.78,20.11-1.16c6.18-0.35,12.37-0.68,18.56-1.03
                           c6.7-0.38,13.41-0.78,20.11-1.17c5.63-0.32,11.25-0.65,16.88-0.96C1110.26,325.87,1110.69,325.89,1111.23,325.89z"/>
                       <path id="lote_62" class="st3" d="M1121.79,454.61c-1.59,0.11-3.01,0.22-4.44,0.3c-5.91,0.34-11.81,0.66-17.72,1
                           c-6.66,0.38-13.33,0.78-19.99,1.15c-6.22,0.35-12.45,0.68-18.68,1.03c-6.38,0.36-12.77,0.76-19.15,1.12
                           c-4.95,0.28-9.9,0.54-14.85,0.82c-6.26,0.36-12.53,0.74-18.79,1.09c-3.79,0.22-7.58,0.41-11.38,0.61
                           c-0.19,0.01-0.39-0.02-0.7-0.04c-2.14-20.35-4.27-40.68-6.42-61.11c1.26-0.1,2.4-0.21,3.55-0.27c8.66-0.49,17.32-0.98,25.98-1.47
                           c6.74-0.38,13.49-0.79,20.23-1.17c6.22-0.35,12.45-0.68,18.68-1.03c6.74-0.38,13.49-0.78,20.23-1.18
                           c6.62-0.38,13.25-0.77,19.87-1.14c6.03-0.34,12.05-0.68,18.08-1.02c0.43-0.02,0.86,0,1.41,0
                           C1119.06,413.77,1120.42,434.16,1121.79,454.61z"/>
                       <path id="lote_61" class="st3" d="M1003.06,527.97c-2.3-21.93-4.59-43.73-6.88-65.59c0.43-0.07,0.74-0.16,1.04-0.18
                           c4.47-0.26,8.94-0.5,13.41-0.76c6.62-0.38,13.24-0.77,19.87-1.14c4.79-0.27,9.58-0.52,14.36-0.79c4.99-0.28,9.97-0.59,14.96-0.87
                           c4.47-0.26,8.94-0.51,13.41-0.76c5.74-0.33,11.49-0.66,17.23-0.99c6.66-0.38,13.32-0.77,19.99-1.15c3.43-0.19,6.86-0.37,10.3-0.55
                           c0.31-0.02,0.63,0,1.09,0c1.39,20.93,2.78,41.8,4.18,62.75c-1.15,0.11-2.17,0.22-3.19,0.3c-5.34,0.43-10.68,0.85-16.01,1.29
                           c-4.38,0.36-8.76,0.74-13.14,1.1c-4.34,0.36-8.69,0.69-13.03,1.04c-4.38,0.36-8.76,0.73-13.14,1.09c-4.3,0.36-8.6,0.7-12.91,1.06
                           c-4.5,0.37-9,0.74-13.5,1.11c-4.22,0.35-8.44,0.69-12.67,1.04c-4.54,0.37-9.08,0.75-13.62,1.12c-3.67,0.3-7.33,0.58-11,0.87
                           C1003.6,527.99,1003.41,527.97,1003.06,527.97z"/>
                   </g>
               </g>
               <g id="manzana4">
                   <path id="mzn4calle" class="st0" d="M1517.66,984.53l-36.31-137.49l-8.57-95.79c-0.07-0.78-0.2-1.56-0.38-2.32l-9.36-38.88
                       c-1.74-7.23-8.21-12.26-15.54-12.26c-0.42,0-0.85,0.02-1.28,0.05l-406.91,32.31h0l-19.33,1.53c-1.23,0.1-2.43,0.35-3.59,0.72
                       l-3.16,0.31c-5.51,0.54-9.46,5.57-8.68,11.05l0.77,5.41l6.08,104.05l9.84,18.24l14.37,30.13l7.39,108.64l-15.41,9.2
                       c0.01,0.12,0.03,0.24,0.04,0.36l-16.5,10.25c-3.59,2.23-1.7,7.77,2.5,7.35l31.11-3.09l434.16-32.4c4.27-0.32,32.24-2.34,35.01-5.61
                       C1516.69,993.04,1518.04,988.8,1517.66,984.53z"/>
                   <path id="mzn4verde" class="st6" d="M1517.66,984.53l-27.22-0.25l-9.09-131.52L1517.66,984.53z M1016.74,863.14
                       c5.08,2.44,12.42-0.46,12.42-7.7v-1.24c0,0-8.16-52.94-9.6-70.63c-1.44-17.69,1.68-27.09,1.68-27.09l-1.56-7.86
                       c-1.57-7.9-13.18-6.88-13.34,1.18l-0.25,12.69l0.7,11.92l4.61,78.83L1016.74,863.14z"/>
                   <g id="mzn4lotes">
                       <polygon id="lote_89" class="st4" points="1095.95,880.39 1036.08,885.24 1044.17,1017.9 1106.2,1013.37 		"/>
                       <polygon id="lote_88" class="st3" points="1168.66,1008.66 1106.92,1013.31 1096.85,880.2 1158.14,875.11 		"/>
                       <path id="lote_87" class="st3" d="M1159.11,875.03c20.52-1.7,40.94-3.4,61.41-5.1c0.11,0.38,0.23,0.63,0.25,0.89
                           c0.34,4.34,0.67,8.69,1.01,13.03c0.36,4.62,0.75,9.24,1.12,13.86c0.27,3.39,0.52,6.77,0.79,10.16c0.29,3.71,0.6,7.41,0.89,11.11
                           c0.27,3.43,0.53,6.85,0.8,10.28c0.29,3.67,0.59,7.33,0.88,11c0.27,3.35,0.52,6.69,0.79,10.04c0.3,3.78,0.61,7.57,0.9,11.35
                           c0.26,3.31,0.51,6.61,0.77,9.92c0.38,4.78,0.76,9.56,1.13,14.34c0.26,3.35,0.53,6.69,0.79,10.04c0.17,2.23,0.34,4.46,0.5,6.7
                           c0.03,0.39,0,0.79,0,1.36c-20.48,1.56-40.94,3.06-61.51,4.6c-0.1-0.8-0.2-1.46-0.25-2.13c-0.43-5.58-0.85-11.16-1.29-16.74
                           c-0.44-5.54-0.91-11.07-1.35-16.61c-0.36-4.54-0.68-9.09-1.04-13.63c-0.44-5.58-0.91-11.15-1.35-16.73
                           c-0.36-4.58-0.69-9.17-1.05-13.75c-0.35-4.5-0.74-9-1.09-13.5c-0.28-3.51-0.53-7.01-0.8-10.52c-0.37-4.62-0.75-9.24-1.12-13.86
                           c-0.26-3.31-0.52-6.61-0.78-9.92c-0.13-1.71-0.27-3.43-0.4-5.14C1159.09,875.82,1159.11,875.54,1159.11,875.03z"/>
                       <path id="lote_86" class="st3" d="M1221.6,869.85c19.99-1.66,39.85-3.32,59.81-4.96c0.11,1.07,0.23,1.97,0.3,2.88
                           c0.36,4.58,0.69,9.17,1.05,13.75c0.36,4.5,0.74,9,1.1,13.5c0.28,3.47,0.52,6.93,0.79,10.4c0.36,4.62,0.75,9.24,1.12,13.86
                           c0.27,3.39,0.53,6.77,0.79,10.16c0.37,4.74,0.76,9.48,1.13,14.22c0.27,3.43,0.53,6.85,0.8,10.28c0.37,4.7,0.75,9.4,1.13,14.1
                           c0.27,3.35,0.52,6.69,0.79,10.04c0.3,3.74,0.6,7.49,0.89,11.23c0.25,3.15,0.5,6.29,0.74,9.44c0.01,0.19-0.04,0.39-0.07,0.69
                           c-1.12,0.11-2.22,0.22-3.32,0.31c-5.14,0.39-10.28,0.78-15.42,1.16c-3.67,0.27-7.33,0.51-11,0.79c-4.9,0.37-9.8,0.76-14.7,1.13
                           c-3.63,0.27-7.25,0.52-10.88,0.79c-1.08,0.08-2.15,0.17-3.23,0.24c-0.39,0.03-0.79,0-1.3,0c-0.11-1.16-0.24-2.26-0.33-3.36
                           c-0.4-4.98-0.8-9.96-1.19-14.94c-0.35-4.54-0.68-9.09-1.04-13.63c-0.44-5.58-0.91-11.15-1.35-16.73
                           c-0.36-4.5-0.68-9.01-1.04-13.51c-0.36-4.58-0.74-9.16-1.11-13.74c-0.27-3.39-0.52-6.77-0.79-10.16c-0.29-3.7-0.6-7.41-0.89-11.11
                           c-0.27-3.39-0.52-6.77-0.79-10.16c-0.29-3.7-0.59-7.41-0.89-11.11c-0.27-3.39-0.53-6.77-0.79-10.16
                           c-0.11-1.43-0.21-2.87-0.31-4.31C1221.59,870.62,1221.6,870.31,1221.6,869.85z"/>
                       <path id="lote_85" class="st3" d="M1292.96,999.32c-0.08-0.6-0.17-1.11-0.21-1.62c-0.4-4.94-0.8-9.88-1.18-14.82
                           c-0.35-4.54-0.68-9.09-1.04-13.63c-0.36-4.54-0.74-9.08-1.1-13.62c-0.27-3.47-0.52-6.93-0.8-10.4c-0.37-4.66-0.75-9.32-1.13-13.98
                           c-0.27-3.35-0.52-6.69-0.78-10.04c-0.37-4.74-0.76-9.48-1.13-14.22c-0.27-3.43-0.52-6.85-0.79-10.28c-0.29-3.67-0.59-7.33-0.88-11
                           c-0.26-3.27-0.51-6.53-0.77-9.8c-0.23-2.91-0.47-5.82-0.69-8.73c-0.05-0.74-0.01-1.5-0.01-2.38c19.81-1.65,39.59-3.29,59.47-4.94
                           c0.1,0.89,0.22,1.63,0.27,2.37c0.27,3.47,0.52,6.93,0.8,10.4c0.37,4.66,0.76,9.32,1.13,13.98c0.26,3.31,0.51,6.62,0.77,9.92
                           c0.38,4.82,0.77,9.64,1.15,14.46c0.27,3.47,0.52,6.93,0.8,10.4c0.37,4.62,0.75,9.24,1.12,13.86c0.27,3.43,0.52,6.86,0.79,10.28
                           c0.37,4.66,0.75,9.32,1.12,13.98c0.27,3.43,0.53,6.85,0.8,10.28c0.37,4.7,0.75,9.4,1.13,14.1c0.26,3.27,0.52,6.53,0.77,9.8
                           c0.03,0.35,0,0.71,0,1.17c-0.75,0.09-1.45,0.21-2.15,0.27c-3.67,0.27-7.34,0.52-11,0.8c-3.83,0.29-7.65,0.6-11.48,0.88
                           c-3.63,0.27-7.26,0.52-10.88,0.79c-3.83,0.28-7.65,0.59-11.48,0.87c-3.83,0.28-7.65,0.56-11.48,0.83
                           C1293.74,999.34,1293.38,999.32,1292.96,999.32z"/>
                       <path id="lote_84" class="st3" d="M1403.21,854.89c0.15,1.6,0.31,3.15,0.43,4.7c0.36,4.54,0.69,9.09,1.04,13.63
                           c0.36,4.58,0.75,9.16,1.11,13.74c0.36,4.58,0.69,9.17,1.06,13.75c0.36,4.54,0.75,9.08,1.1,13.62c0.36,4.5,0.69,9.01,1.04,13.51
                           c0.36,4.62,0.75,9.24,1.12,13.86c0.27,3.43,0.52,6.85,0.79,10.28c0.29,3.63,0.58,7.25,0.87,10.87c0.27,3.35,0.53,6.69,0.79,10.04
                           c0.3,3.78,0.61,7.57,0.9,11.35c0.15,1.98,0.28,3.97,0.42,5.91c-0.94,0.44-59,4.7-60.38,4.58c-0.08-0.64-0.19-1.3-0.24-1.96
                           c-0.36-4.54-0.69-9.09-1.05-13.63c-0.36-4.58-0.75-9.16-1.11-13.74c-0.27-3.43-0.52-6.85-0.79-10.28
                           c-0.29-3.67-0.6-7.33-0.89-10.99c-0.26-3.31-0.51-6.61-0.77-9.92c-0.3-3.78-0.6-7.57-0.9-11.35c-0.27-3.39-0.52-6.77-0.79-10.16
                           c-0.29-3.71-0.59-7.41-0.89-11.11c-0.27-3.35-0.52-6.69-0.79-10.04c-0.38-4.78-0.76-9.56-1.14-14.34
                           c-0.26-3.35-0.52-6.69-0.78-10.04c-0.14-1.75-0.29-3.5-0.42-5.26c-0.05-0.63-0.06-1.27-0.09-1.88
                           C1343.78,859.64,1400.88,854.79,1403.21,854.89z"/>
                       <path id="lote_83" class="st4" d="M1404.06,854.69c20.46-1.7,40.75-3.38,61.18-5.08c0.13,1.23,0.26,2.33,0.36,3.43
                           c0.38,4.22,0.76,8.44,1.14,12.66c0.35,3.98,0.69,7.96,1.05,11.94c0.36,4.06,0.75,8.12,1.11,12.18c0.27,3.02,0.53,6.05,0.8,9.08
                           c0.37,4.1,0.74,8.2,1.11,12.3c0.27,3.02,0.53,6.05,0.8,9.07c0.37,4.14,0.75,8.28,1.12,12.42c0.27,2.99,0.53,5.97,0.8,8.96
                           c0.37,4.14,0.75,8.28,1.12,12.42c0.27,3.02,0.53,6.05,0.81,9.07c0.38,4.18,0.76,8.36,1.13,12.54c0.26,2.91,0.52,5.81,0.77,8.72
                           c0.03,0.35,0,0.71,0,1.17c-0.54,0.09-1.04,0.2-1.54,0.24c-3.71,0.28-7.41,0.53-11.12,0.8c-4.86,0.36-9.72,0.75-14.58,1.12
                           c-3.63,0.27-7.25,0.52-10.88,0.79c-4.9,0.37-9.8,0.75-14.7,1.11c-2.99,0.22-5.98,0.43-8.97,0.63c-0.23,0.02-0.46-0.04-0.81-0.08
                           c-0.12-1.29-0.24-2.55-0.34-3.81c-0.39-4.86-0.78-9.72-1.16-14.58c-0.27-3.43-0.52-6.85-0.79-10.28
                           c-0.37-4.66-0.75-9.32-1.12-13.98c-0.27-3.43-0.53-6.85-0.8-10.28c-0.29-3.67-0.59-7.33-0.88-10.99
                           c-0.27-3.43-0.53-6.85-0.8-10.28c-0.37-4.7-0.76-9.4-1.13-14.1c-0.27-3.39-0.52-6.77-0.79-10.16c-0.29-3.7-0.6-7.41-0.89-11.11
                           c-0.27-3.39-0.52-6.77-0.79-10.16c-0.29-3.7-0.59-7.41-0.88-11.11C1404.27,857.84,1404.18,856.37,1404.06,854.69z"/>
                       <path id="lote_82" class="st4" d="M1465.08,848.81c-20.37,1.69-40.63,3.38-60.97,5.07c-0.1-0.45-0.21-0.79-0.24-1.13
                           c-0.26-3.31-0.5-6.62-0.77-9.92c-0.37-4.66-0.76-9.32-1.12-13.98c-0.27-3.43-0.52-6.85-0.79-10.28
                           c-0.37-4.66-0.75-9.32-1.12-13.98c-0.27-3.43-0.53-6.85-0.8-10.28c-0.29-3.67-0.59-7.33-0.88-11c-0.27-3.39-0.53-6.77-0.8-10.16
                           c-0.3-3.75-0.6-7.49-0.89-11.24c-0.26-3.31-0.52-6.61-0.78-9.92c-0.3-3.79-0.6-7.57-0.9-11.36c-0.26-3.27-0.52-6.53-0.77-9.8
                           c-0.29-3.71-0.57-7.41-0.85-11.12c-0.02-0.31,0-0.62,0-0.91c0.91-0.32,52.33-4.49,53.89-4.37c0.1,0.33,0.25,0.69,0.34,1.06
                           c2.94,12.19,5.9,24.38,8.8,36.58c0.31,1.31,0.39,2.69,0.51,4.04c0.52,5.85,1.02,11.71,1.53,17.56c0.55,6.25,1.11,12.5,1.68,18.75
                           c0.68,7.52,1.39,15.04,2.06,22.57c0.52,5.81,1.01,11.63,1.53,17.44c0.44,4.9,0.9,9.79,1.34,14.69
                           C1465.12,847.6,1465.08,848.11,1465.08,848.81z"/>
                       <path id="lote_81" class="st3" d="M1403.11,853.87c-0.48,0.08-0.86,0.17-1.25,0.2c-5.62,0.48-11.23,0.95-16.85,1.41
                           c-5.34,0.44-10.68,0.85-16.01,1.29c-6.21,0.52-12.42,1.06-18.64,1.59c-2.03,0.17-4.06,0.34-6.1,0.49
                           c-0.47,0.04-0.94,0.01-1.51,0.01c-0.12-1.22-0.24-2.36-0.33-3.51c-0.4-4.94-0.79-9.88-1.18-14.82c-0.35-4.5-0.68-9.01-1.04-13.51
                           c-0.44-5.62-0.91-11.23-1.36-16.85c-0.27-3.43-0.52-6.86-0.79-10.28c-0.37-4.66-0.75-9.32-1.13-13.98
                           c-0.27-3.35-0.52-6.7-0.78-10.04c-0.3-3.75-0.6-7.49-0.9-11.24c-0.27-3.47-0.52-6.94-0.79-10.4c-0.36-4.62-0.74-9.24-1.11-13.86
                           c-0.27-3.39-0.53-6.77-0.8-10.16c-0.14-1.71-0.28-3.43-0.41-5.14c-0.03-0.47-0.01-0.94-0.01-1.4c0.95-0.45,59.02-4.94,60.29-4.86
                           c0.06,0.36,0.15,0.75,0.19,1.14c0.51,6.62,1.01,13.23,1.53,19.85c0.55,7.09,1.12,14.19,1.68,21.28
                           c0.56,7.09,1.12,14.19,1.68,21.28c0.56,7.09,1.12,14.19,1.68,21.28c0.56,7.13,1.12,14.27,1.68,21.4
                           c0.48,6.1,0.96,12.19,1.44,18.29c0.26,3.31,0.53,6.61,0.8,9.92C1403.12,853.38,1403.11,853.53,1403.11,853.87z"/>
                       <path id="lote_80" class="st3" d="M1271.55,728.25c19.93-1.58,39.71-3.15,59.61-4.73c0.1,0.78,0.2,1.4,0.24,2.02
                           c0.43,5.62,0.85,11.24,1.29,16.86c0.52,6.53,1.07,13.07,1.59,19.6c0.44,5.62,0.85,11.24,1.29,16.86
                           c0.52,6.53,1.06,13.07,1.58,19.6c0.36,4.58,0.69,9.17,1.05,13.75c0.44,5.54,0.9,11.07,1.34,16.61c0.36,4.5,0.69,9.01,1.04,13.51
                           c0.36,4.62,0.75,9.24,1.11,13.86c0.07,0.9,0.09,1.81,0.14,2.85c-19.91,1.65-39.68,3.29-59.59,4.95c-0.12-1.23-0.24-2.33-0.33-3.43
                           c-0.39-4.86-0.78-9.72-1.16-14.58c-0.27-3.51-0.53-7.02-0.8-10.52c-0.36-4.58-0.75-9.16-1.11-13.74
                           c-0.27-3.47-0.52-6.94-0.79-10.4c-0.36-4.62-0.75-9.24-1.12-13.86c-0.27-3.39-0.53-6.77-0.79-10.16
                           c-0.37-4.74-0.76-9.48-1.13-14.22c-0.26-3.35-0.52-6.69-0.79-10.04c-0.38-4.78-0.77-9.56-1.14-14.34
                           c-0.27-3.47-0.52-6.94-0.79-10.4c-0.2-2.59-0.43-5.18-0.63-7.77C1271.62,729.83,1271.6,729.15,1271.55,728.25z"/>
                       <path id="lote_79" class="st3" d="M1281.3,864.07c-19.95,1.66-39.8,3.3-59.78,4.96c-0.09-0.7-0.19-1.28-0.24-1.86
                           c-0.28-3.43-0.54-6.85-0.81-10.28c-0.37-4.7-0.75-9.4-1.12-14.1c-0.27-3.35-0.52-6.69-0.79-10.04c-0.38-4.78-0.76-9.56-1.14-14.34
                           c-0.27-3.39-0.52-6.77-0.79-10.16c-0.37-4.74-0.76-9.48-1.13-14.22c-0.27-3.39-0.52-6.77-0.79-10.16c-0.37-4.7-0.75-9.4-1.12-14.1
                           c-0.27-3.43-0.53-6.85-0.8-10.28c-0.37-4.66-0.75-9.32-1.11-13.98c-0.3-3.82-0.58-7.65-0.87-11.48c-0.02-0.27,0-0.55,0-0.92
                           c0.89-0.1,1.71-0.21,2.53-0.28c3.55-0.28,7.09-0.53,10.64-0.82c4.5-0.36,9-0.74,13.5-1.1c3.47-0.28,6.93-0.53,10.4-0.8
                           c3.55-0.28,7.09-0.59,10.63-0.86c3.7-0.29,7.41-0.56,11.12-0.84c0.31-0.02,0.62,0,1.01,0c0.1,0.86,0.22,1.64,0.28,2.42
                           c0.35,4.54,0.69,9.09,1.04,13.63c0.36,4.54,0.74,9.08,1.1,13.62c0.27,3.43,0.52,6.85,0.79,10.28c0.37,4.66,0.75,9.32,1.12,13.98
                           c0.27,3.43,0.53,6.85,0.8,10.28c0.37,4.7,0.75,9.4,1.12,14.1c0.27,3.35,0.52,6.69,0.79,10.04c0.38,4.78,0.77,9.56,1.14,14.34
                           c0.27,3.43,0.52,6.85,0.79,10.28c0.36,4.62,0.74,9.24,1.1,13.86c0.2,2.51,0.39,5.02,0.57,7.53
                           C1281.32,863.17,1281.3,863.56,1281.3,864.07z"/>
                       <path id="lote_78" class="st3" d="M1148.32,738.04c20.55-1.64,41.01-3.27,61.56-4.89c0.13,1.5,0.26,2.8,0.36,4.1
                           c0.39,4.82,0.77,9.64,1.15,14.46c0.27,3.43,0.52,6.85,0.79,10.28c0.37,4.7,0.76,9.4,1.13,14.1c0.27,3.43,0.52,6.85,0.79,10.28
                           c0.29,3.63,0.58,7.25,0.87,10.88c0.27,3.35,0.53,6.69,0.79,10.04c0.3,3.78,0.6,7.57,0.9,11.35c0.27,3.39,0.52,6.77,0.79,10.16
                           c0.37,4.7,0.75,9.4,1.12,14.1c0.27,3.43,0.53,6.85,0.8,10.28c0.29,3.67,0.59,7.33,0.88,10.99c0.12,1.59,0.22,3.18,0.35,4.93
                           c-20.55,1.71-40.99,3.4-61.53,5.11c-0.09-0.6-0.19-1.06-0.23-1.53c-0.43-5.58-0.85-11.16-1.29-16.74
                           c-0.44-5.54-0.9-11.07-1.34-16.61c-0.36-4.58-0.69-9.17-1.05-13.75c-0.36-4.54-0.75-9.08-1.11-13.62
                           c-0.28-3.51-0.52-7.01-0.8-10.52c-0.36-4.58-0.75-9.16-1.11-13.74c-0.27-3.47-0.52-6.93-0.8-10.4c-0.36-4.62-0.74-9.24-1.11-13.86
                           c-0.27-3.35-0.53-6.69-0.79-10.04c-0.37-4.74-0.75-9.48-1.12-14.22C1148.29,738.87,1148.32,738.56,1148.32,738.04z"/>
                       <path id="lote_77" class="st3" d="M1158.06,874.24c-0.65,0.08-1.27,0.18-1.9,0.23c-4.58,0.39-9.16,0.77-13.74,1.15
                           c-3.31,0.27-6.61,0.52-9.92,0.8c-4.38,0.37-8.76,0.75-13.14,1.12c-3.23,0.27-6.45,0.52-9.68,0.79c-3.5,0.29-7.01,0.6-10.51,0.88
                           c-0.78,0.06-1.57,0.08-2.43,0.13c-0.11-1.01-0.23-1.87-0.29-2.74c-0.36-4.58-0.69-9.17-1.05-13.75
                           c-0.44-5.54-0.9-11.07-1.34-16.61c-0.36-4.5-0.68-9.01-1.04-13.51c-0.36-4.62-0.76-9.24-1.12-13.86
                           c-0.28-3.51-0.52-7.01-0.8-10.52c-0.36-4.58-0.75-9.16-1.11-13.74c-0.27-3.43-0.52-6.85-0.79-10.28
                           c-0.37-4.66-0.75-9.32-1.12-13.98c-0.27-3.35-0.53-6.69-0.79-10.04c-0.38-4.82-0.77-9.64-1.14-14.46
                           c-0.07-0.91-0.08-1.82-0.13-2.88c20.48-1.63,40.85-3.24,61.33-4.87c0.09,0.53,0.2,0.94,0.23,1.37c0.36,4.58,0.69,9.17,1.05,13.75
                           c0.44,5.54,0.91,11.07,1.34,16.61c0.36,4.54,0.69,9.09,1.04,13.63c0.36,4.58,0.75,9.16,1.11,13.74c0.36,4.58,0.69,9.17,1.05,13.75
                           c0.35,4.5,0.74,9,1.09,13.5c0.28,3.47,0.52,6.93,0.8,10.4c0.29,3.63,0.59,7.25,0.88,10.87c0.27,3.43,0.53,6.85,0.8,10.28
                           c0.28,3.63,0.58,7.25,0.87,10.87c0.18,2.23,0.36,4.46,0.53,6.69C1158.14,873.76,1158.09,873.96,1158.06,874.24z"/>
                       <path id="lote_76" class="st4" d="M1021.91,748.07c21.07-1.67,42.04-3.34,63.15-5.01c0.12,1.26,0.26,2.39,0.35,3.53
                           c0.6,7.65,1.18,15.3,1.77,22.95c0.55,7.05,1.11,14.1,1.67,21.16c0.61,7.57,1.23,15.14,1.83,22.71c0.36,4.58,0.68,9.17,1.05,13.75
                           c0.52,6.53,1.06,13.07,1.58,19.6c0.36,4.5,0.68,9.01,1.03,13.51c0.36,4.58,0.74,9.16,1.11,13.74c0.11,1.43,0.21,2.87,0.31,4.31
                           c0.02,0.35,0,0.69,0,1.17c-20.25,1.68-40.38,3.36-60.61,5.04c-0.08-0.38-0.18-0.67-0.21-0.97c-0.47-4.97-0.92-9.95-1.39-14.92
                           c-0.43-4.54-0.85-9.07-1.29-13.61c-0.44-4.49-0.9-8.99-1.34-13.48c-0.36-3.7-0.7-7.4-1.06-11.1c-0.44-4.49-0.89-8.99-1.32-13.48
                           c-0.36-3.66-0.7-7.32-1.05-10.98c-0.36-3.74-0.74-7.48-1.1-11.22c-0.35-3.62-0.7-7.24-1.05-10.86c-0.36-3.7-0.71-7.4-1.07-11.1
                           c-0.36-3.74-0.72-7.48-1.09-11.22c-0.37-3.74-0.74-7.48-1.1-11.22C1022.01,749.66,1021.98,748.95,1021.91,748.07z"/>
                   </g>
               </g>
               <g id="manzana5">
                   <path id="mzn4calle_00000144323255488937723640000017327707542762681529_" class="st0" d="M1531.02,1049.88
                       c-0.44,0-0.88,0.02-1.32,0.05l-516.13,40.7c-8.07,0.67-14.35,7.32-14.55,15.42l-5.85,316.33c-0.11,4.46,1.67,8.77,4.89,11.86
                       c2.96,2.84,6.9,4.4,10.97,4.4c0.36,0,0.73-0.01,1.09-0.04l155.67-10.71c2.79-0.19,5.48-1.12,7.8-2.69
                       c84.62-57.24,247.73-167.39,259.38-174.6c6.95-4.3,16.72-6.4,25.34-8.25c6.88-1.48,25.81-9.75,30.95-12.12
                       c5.32-2.45,19.39-11.71,32.92-21.01c12.4-8.52,20.34-25.09,24.67-28.5c4.37-3.45,11.22-22.95,10.99-25.74
                       c0,0,1.64-24.68,0.01-44.84c-1.63-20.16-13.34-53.79-16.55-56.51C1538.4,1051.21,1534.76,1049.88,1531.02,1049.88L1531.02,1049.88z
                       "/>
                   <path id="mzn4verde_00000091008274458902259950000016458198134421442695_" class="st6" d="M1557.83,1110.16
                       c-1.12-13.84-6.99-34.02-11.6-46.2l-21.5,1.25c-2.89,0.17-5.08,2.67-4.86,5.56l9.25,119.42c0.29,3.74,3.92,5.7,6.98,4.8
                       c4.79-6.39,8.31-12.35,10.72-14.25c4.37-3.45,11.22-22.95,10.99-25.74C1557.83,1155,1559.47,1130.32,1557.83,1110.16z"/>
                   <g id="mzn5lotes">
                       <path id="lote_103" class="st3" d="M1160.72,1411.8c-0.12-1.26-0.24-2.33-0.33-3.4c-0.51-6.37-1.01-12.75-1.53-19.12
                           c-0.6-7.29-1.23-14.57-1.83-21.86c-0.45-5.42-0.85-10.83-1.29-16.25c-0.52-6.29-1.07-12.58-1.58-18.87
                           c-0.52-6.37-1.01-12.75-1.53-19.12c-0.6-7.29-1.23-14.57-1.83-21.86c-0.44-5.38-0.84-10.75-1.29-16.13
                           c-0.52-6.29-1.06-12.58-1.58-18.87c-0.36-4.38-0.69-8.76-1.05-13.14c-0.2-2.43-0.43-4.86-0.62-7.28
                           c-0.05-0.59-0.01-1.19-0.01-1.91c0.43-0.08,0.89-0.2,1.35-0.24c4.54-0.36,9.09-0.69,13.63-1.05c4.54-0.36,9.08-0.74,13.62-1.1
                           c3.43-0.27,6.85-0.52,10.28-0.79c3.59-0.28,7.17-0.58,10.76-0.86c3.87-0.3,7.73-0.59,11.6-0.88c0.2-0.01,0.39,0,0.7,0
                           c0.08,0.42,0.19,0.79,0.22,1.17c0.35,4.34,0.68,8.68,1.04,13.02c0.44,5.34,0.9,10.67,1.34,16c0.36,4.34,0.69,8.68,1.04,13.02
                           c0.37,4.46,0.75,8.92,1.12,13.38c0.27,3.34,0.52,6.69,0.79,10.04c0.36,4.42,0.75,8.84,1.11,13.26c0.27,3.22,0.52,6.45,0.79,9.68
                           c0.38,4.62,0.77,9.24,1.14,13.86c0.27,3.35,0.52,6.69,0.8,10.04c0.37,4.46,0.75,8.92,1.12,13.38c0.26,3.15,0.52,6.29,0.77,9.44
                           c0.2,2.51,0.35,5.02,0.61,7.53c0.09,0.87-0.11,1.38-0.85,1.88c-5.98,4-11.94,8.04-17.9,12.07c-11.69,7.9-23.41,15.77-35.05,23.73
                           C1164.53,1411.77,1162.73,1411.71,1160.72,1411.8z"/>
                       <path id="lote_102" class="st3" d="M1220.97,1373.47c-0.13-1.38-0.25-2.55-0.35-3.73c-0.4-4.74-0.79-9.47-1.17-14.21
                           c-0.35-4.34-0.68-8.68-1.04-13.02c-0.36-4.38-0.74-8.76-1.1-13.14c-0.27-3.3-0.52-6.61-0.79-9.92c-0.37-4.5-0.75-9-1.12-13.5
                           c-0.27-3.3-0.53-6.61-0.8-9.92c-0.37-4.5-0.75-9-1.12-13.5c-0.27-3.26-0.53-6.53-0.8-9.79c-0.37-4.54-0.75-9.08-1.12-13.62
                           c-0.27-3.3-0.53-6.61-0.8-9.91c-0.37-4.54-0.76-9.08-1.13-13.62c-0.18-2.15-0.33-4.29-0.49-6.37c0.09-0.11,0.11-0.14,0.14-0.17
                           c0.03-0.03,0.05-0.07,0.09-0.08c0.19-0.04,0.39-0.1,0.58-0.12c19.96-1.58,39.92-3.16,59.88-4.74c0.11-0.01,0.23,0.04,0.46,0.09
                           c0.09,0.71,0.21,1.45,0.27,2.19c0.36,4.38,0.7,8.76,1.05,13.14c0.36,4.38,0.74,8.76,1.1,13.14c0.27,3.22,0.52,6.45,0.78,9.68
                           c0.38,4.58,0.76,9.16,1.14,13.73c0.27,3.3,0.52,6.61,0.79,9.92c0.37,4.46,0.74,8.92,1.11,13.38c0.27,3.3,0.53,6.61,0.8,9.91
                           c0.37,4.54,0.76,9.08,1.13,13.62c0.27,3.34,0.51,6.69,0.82,10.03c0.08,0.86-0.17,1.37-0.9,1.86
                           c-8.47,5.68-16.91,11.39-25.36,17.09c-10.3,6.96-20.6,13.91-30.91,20.87C1221.8,1373,1221.46,1373.18,1220.97,1373.47z"/>
                       <path id="lote_101" class="st4" d="M1280.19,1333.54c-0.11-0.91-0.22-1.61-0.28-2.32c-0.44-5.42-0.85-10.83-1.29-16.25
                           c-0.52-6.29-1.07-12.58-1.59-18.87c-0.44-5.38-0.85-10.75-1.29-16.13c-0.44-5.33-0.91-10.67-1.35-16
                           c-0.36-4.38-0.69-8.76-1.05-13.14c-0.44-5.33-0.9-10.67-1.34-16c-0.26-3.15-0.51-6.29-0.76-9.44c-0.03-0.39,0-0.79,0-1.27
                           c0.42-0.08,0.8-0.18,1.19-0.21c4.54-0.35,9.09-0.69,13.63-1.04c4.5-0.36,9-0.74,13.5-1.1c3.47-0.28,6.93-0.51,10.4-0.79
                           c4.62-0.36,9.24-0.75,13.86-1.12c3.39-0.27,6.77-0.52,10.16-0.79c3.7-0.29,7.41-0.6,11.11-0.89c3.43-0.27,6.85-0.52,10.28-0.79
                           c3.67-0.29,7.33-0.59,10.99-0.88c3.35-0.27,6.69-0.53,10.04-0.79c3.78-0.3,7.57-0.6,11.35-0.9c3.43-0.27,6.85-0.52,10.28-0.79
                           c3.67-0.29,7.33-0.59,10.99-0.88c3.39-0.27,6.77-0.52,10.16-0.79c3.67-0.29,7.33-0.59,10.99-0.88c3.39-0.27,6.77-0.53,10.16-0.8
                           c3.74-0.3,7.49-0.6,11.23-0.89c3.39-0.27,6.77-0.52,10.16-0.79c3.71-0.29,7.41-0.59,11.11-0.89c3.27-0.26,6.53-0.51,9.8-0.77
                           c2.83-0.22,5.66-0.45,8.49-0.67c0.38-0.03,0.77,0,1.35,0c-0.27,0.31-0.39,0.5-0.56,0.63c-6.41,4.71-12.79,9.45-19.57,13.65
                           c-3.25,2.01-6.82,3.11-10.48,3.97c-6.3,1.48-12.63,2.81-18.9,4.38c-5.98,1.5-11.79,3.57-17.13,6.72
                           c-2.89,1.71-5.69,3.56-8.48,5.43c-22.29,14.92-44.58,29.84-66.85,44.78c-13.81,9.26-27.59,18.56-41.38,27.85
                           c-9.18,6.19-18.36,12.38-27.54,18.57C1281.19,1332.92,1280.76,1333.18,1280.19,1333.54z"/>
                       <path id="lote_100" class="st4" d="M1455.3,1208.55c-0.15-2.08-0.31-4.07-0.45-6.06c-0.56-8.13-1.11-16.26-1.65-24.4
                           c-0.28-4.23-0.53-8.45-0.81-12.68c-0.36-5.26-0.75-10.52-1.11-15.78c-0.36-5.26-0.68-10.53-1.03-15.79
                           c-0.36-5.38-0.75-10.76-1.12-16.14c-0.27-3.91-0.51-7.81-0.78-11.72c-0.3-4.38-0.6-8.77-0.9-13.15c-0.17-2.51-0.34-5.02-0.51-7.53
                           c-0.28-4.35-0.56-8.69-0.84-13.04c-0.02-0.28-0.03-0.55-0.04-0.92c0.32-0.09,0.61-0.22,0.91-0.25c4.14-0.35,8.29-0.67,12.43-1.02
                           c4.42-0.37,8.84-0.75,13.26-1.12c3.31-0.27,6.61-0.52,9.92-0.8c4.38-0.36,8.76-0.74,13.14-1.11c3.07-0.26,6.13-0.51,9.2-0.76
                           c0.23-0.02,0.47,0,0.83,0c0.09,0.63,0.19,1.21,0.24,1.79c0.35,4.42,0.69,8.84,1.05,13.26c0.44,5.46,0.91,10.91,1.35,16.36
                           c0.36,4.38,0.68,8.76,1.04,13.14c0.36,4.46,0.74,8.92,1.1,13.38c0.28,3.42,0.53,6.85,0.81,10.28c0.37,4.5,0.75,9,1.12,13.5
                           c0.27,3.3,0.52,6.61,0.79,9.92c0.37,4.58,0.75,9.16,1.12,13.74c0.27,3.3,0.53,6.61,0.79,9.92c0.16,2.07,0.29,4.15,0.5,6.21
                           c0.09,0.92-0.14,1.54-0.91,2.13c-6.62,5.03-13.22,10.1-19.81,15.17c-0.57,0.44-1.16,0.62-1.87,0.68
                           c-4.78,0.36-9.56,0.75-14.34,1.13c-3.35,0.26-6.69,0.52-10.04,0.78c-3.74,0.29-7.49,0.6-11.23,0.89
                           C1456.8,1208.59,1456.13,1208.55,1455.3,1208.55z"/>
                       <path id="lote_99" class="st3" d="M1384.7,1076.26c20.16-1.67,40.25-3.33,60.4-5c0.09,0.46,0.17,0.77,0.19,1.08
                           c0.27,3.99,0.52,7.97,0.79,11.96c0.36,5.3,0.74,10.6,1.1,15.9c0.27,3.99,0.52,7.97,0.79,11.96c0.29,4.31,0.6,8.61,0.89,12.91
                           c0.27,3.99,0.52,7.97,0.79,11.96c0.29,4.31,0.59,8.61,0.88,12.91c0.19,2.79,0.37,5.58,0.56,8.37c0.29,4.34,0.59,8.69,0.89,13.03
                           c0.18,2.71,0.36,5.42,0.55,8.13c0.3,4.42,0.6,8.85,0.9,13.27c0.27,3.99,0.52,7.97,0.79,11.96c0.05,0.76,0.13,1.51,0.17,2.27
                           c0.03,0.55,0.01,1.09,0.01,1.78c-20.14,1.59-40.2,3.17-60.36,4.76c-0.06-0.48-0.13-0.82-0.15-1.16
                           c-0.47-6.74-0.94-13.47-1.4-20.21c-0.28-4.11-0.52-8.21-0.8-12.32c-0.36-5.26-0.75-10.52-1.11-15.78
                           c-0.27-3.99-0.51-7.97-0.78-11.96c-0.37-5.38-0.76-10.76-1.13-16.14c-0.27-3.87-0.52-7.73-0.78-11.6
                           c-0.38-5.54-0.76-11.08-1.14-16.62c-0.26-3.83-0.51-7.65-0.77-11.48c-0.3-4.38-0.61-8.77-0.9-13.15
                           c-0.13-1.95-0.24-3.91-0.35-5.86C1384.69,1076.97,1384.7,1076.69,1384.7,1076.26z"/>
                       <path id="lote_98" class="st3" d="M1393.01,1213.61c-19.81,1.56-39.56,3.12-59.45,4.69c-0.14-1.23-0.28-2.33-0.38-3.42
                           c-0.64-7-1.28-14.01-1.91-21.01c-0.52-5.77-1.01-11.54-1.53-17.31c-0.6-6.6-1.23-13.21-1.83-19.81
                           c-0.52-5.73-1.01-11.46-1.53-17.19c-0.52-5.73-1.07-11.46-1.59-17.19c-0.44-4.85-0.85-9.71-1.29-14.57
                           c-0.44-4.81-0.89-9.63-1.34-14.44c-0.33-3.62-0.66-7.24-0.98-10.86c-0.02-0.27,0.02-0.55,0.04-0.98
                           c20.8-1.72,41.58-3.45,62.42-5.17c0.09,0.34,0.2,0.6,0.22,0.86c0.27,3.87,0.51,7.73,0.78,11.6c0.36,5.22,0.73,10.44,1.09,15.66
                           c0.26,3.83,0.52,7.65,0.78,11.48c0.3,4.42,0.61,8.85,0.91,13.27c0.18,2.63,0.35,5.26,0.53,7.89c0.3,4.43,0.61,8.85,0.91,13.27
                           c0.27,3.99,0.52,7.97,0.79,11.96c0.29,4.23,0.6,8.45,0.89,12.68c0.27,3.91,0.52,7.81,0.78,11.72c0.29,4.27,0.59,8.53,0.88,12.8
                           c0.29,4.35,0.57,8.69,0.84,13.04C1393.07,1212.89,1393.03,1213.2,1393.01,1213.61z"/>
                       <path id="lote_97" class="st3" d="M1332.6,1218.37c-20.53,1.62-40.92,3.23-61.42,4.84c-0.07-0.42-0.16-0.76-0.18-1.1
                           c-0.55-6.57-1.1-13.14-1.64-19.71c-0.44-5.38-0.85-10.75-1.29-16.13c-0.44-5.34-0.91-10.67-1.34-16
                           c-0.36-4.42-0.69-8.84-1.05-13.26c-0.44-5.34-0.91-10.67-1.34-16c-0.36-4.34-0.68-8.68-1.04-13.02c-0.36-4.38-0.74-8.76-1.1-13.14
                           c-0.27-3.22-0.52-6.45-0.79-9.68c-0.38-4.62-0.77-9.24-1.14-13.86c-0.12-1.51-0.22-3.01-0.32-4.49c1.09-0.4,11.85-1.35,20.1-1.92
                           c6.7-0.46,13.38-1.09,20.08-1.64c6.68-0.56,13.36-1.11,20.17-1.68c0.17,1.7,0.34,3.28,0.48,4.86c0.38,4.14,0.76,8.27,1.13,12.41
                           c0.35,3.86,0.69,7.72,1.04,11.58c0.37,4.1,0.75,8.2,1.12,12.29c0.27,3.02,0.53,6.05,0.8,9.07c0.36,4.02,0.74,8.03,1.11,12.05
                           c0.27,2.98,0.53,5.97,0.8,8.95c0.37,4.1,0.75,8.2,1.12,12.29c0.35,3.94,0.69,7.88,1.05,11.82c0.37,4.02,0.75,8.03,1.12,12.05
                           c0.27,2.94,0.53,5.89,0.79,8.83c0.37,4.14,0.76,8.27,1.13,12.41c0.22,2.43,0.42,4.86,0.62,7.28
                           C1332.62,1217.74,1332.6,1217.98,1332.6,1218.37z"/>
                       <path id="lote_96" class="st3" d="M1270.22,1223.3c-20.43,1.61-40.73,3.21-61.11,4.82c-0.1-0.67-0.2-1.17-0.24-1.68
                           c-0.56-6.77-1.12-13.54-1.67-20.31c-0.36-4.38-0.68-8.76-1.04-13.14c-0.44-5.34-0.91-10.67-1.35-16
                           c-0.36-4.38-0.69-8.76-1.05-13.14c-0.36-4.42-0.75-8.84-1.11-13.26c-0.36-4.34-0.68-8.68-1.04-13.02
                           c-0.36-4.42-0.75-8.84-1.11-13.26c-0.27-3.26-0.52-6.53-0.79-9.8c-0.37-4.54-0.76-9.08-1.13-13.62c-0.24-2.98-0.46-5.96-0.71-9.12
                           c6.82-0.68,13.58-1.14,20.32-1.74c6.81-0.6,13.62-1.14,20.43-1.7c6.76-0.55,13.52-1.1,20.38-1.66c0.11,0.83,0.22,1.53,0.28,2.23
                           c0.44,5.38,0.85,10.75,1.29,16.13c0.44,5.34,0.91,10.67,1.35,16c0.36,4.34,0.68,8.68,1.04,13.02c0.44,5.38,0.91,10.75,1.35,16.12
                           c0.35,4.3,0.68,8.6,1.03,12.9c0.36,4.46,0.75,8.92,1.11,13.38c0.27,3.3,0.53,6.61,0.8,9.92c0.29,3.5,0.59,7.01,0.88,10.51
                           c0.27,3.26,0.53,6.53,0.8,9.8c0.38,4.58,0.76,9.16,1.13,13.74C1270.13,1221.34,1270.16,1222.25,1270.22,1223.3z"/>
                       <polygon id="lote_95" class="st3" points="1208.41,1228.43 1146.25,1233 1134.95,1097.05 1197.13,1091.84 		"/>
                       <path id="lote_94" class="st4" d="M1015.67,1106.87c0.84-0.09,1.71-0.21,2.58-0.28c6.77-0.57,13.54-1.13,20.32-1.68
                           c6.29-0.51,12.59-1.01,18.88-1.53c6.77-0.55,13.54-1.12,20.32-1.68c6.77-0.56,13.54-1.12,20.31-1.68
                           c5.82-0.48,11.63-0.96,17.45-1.44c5.86-0.49,11.71-0.97,17.57-1.46c0.27-0.02,0.55,0,0.99,0c1.69,20.27,3.33,40.52,5,60.85
                           c-0.44,0.09-0.78,0.2-1.13,0.23c-4.5,0.35-9.01,0.67-13.51,1.02c-4.7,0.36-9.4,0.75-14.1,1.12c-3.51,0.27-7.02,0.52-10.52,0.79
                           c-3.71,0.29-7.41,0.59-11.12,0.88c-3.47,0.27-6.93,0.53-10.4,0.79c-3.79,0.29-7.57,0.59-11.36,0.88
                           c-3.51,0.27-7.02,0.53-10.52,0.8c-3.75,0.29-7.49,0.59-11.24,0.88c-3.47,0.27-6.93,0.53-10.4,0.8c-3.83,0.3-7.65,0.6-11.48,0.89
                           c-2.91,0.22-5.82,0.43-8.71,0.64C1014.27,1166.55,1015.32,1107.98,1015.67,1106.87z"/>
                       <path id="lote_93" class="st3" d="M1138.94,1159.02c0.36,0.97,5.04,56.7,5.02,59.87c-0.22,0.08-0.47,0.22-0.72,0.24
                           c-3.35,0.26-6.69,0.51-10.04,0.76c-3.94,0.3-7.89,0.6-11.83,0.9c-2.39,0.18-4.78,0.35-7.17,0.53c-3.98,0.3-7.97,0.61-11.95,0.91
                           c-3.55,0.27-7.09,0.52-10.64,0.78c-3.83,0.29-7.65,0.59-11.47,0.88c-3.51,0.27-7.01,0.53-10.52,0.79c-3.94,0.3-7.89,0.6-11.83,0.9
                           c-3.47,0.26-6.93,0.51-10.4,0.78c-5.02,0.38-10.04,0.77-15.06,1.15c-3.43,0.26-6.85,0.52-10.28,0.77
                           c-2.47,0.18-4.94,0.36-7.41,0.53c-0.39,0.03-0.79,0-1.16,0c-0.31-1.02,0.7-58.65,1.06-60.25c1.1-0.1,2.24-0.23,3.38-0.32
                           c5.02-0.4,10.04-0.79,15.06-1.17c3.63-0.28,7.25-0.52,10.88-0.81c4.66-0.36,9.32-0.75,13.98-1.11c3.55-0.28,7.09-0.52,10.64-0.8
                           c4.74-0.37,9.48-0.75,14.22-1.12c3.47-0.27,6.93-0.52,10.4-0.79c3.75-0.29,7.49-0.59,11.23-0.88c3.51-0.27,7.01-0.53,10.52-0.8
                           c3.75-0.29,7.49-0.59,11.23-0.88c4.18-0.32,8.37-0.64,12.55-0.95C1138.73,1158.93,1138.84,1158.99,1138.94,1159.02z"/>
                       <path id="lote_92" class="st3" d="M1013.34,1229.74c1.52-0.12,2.98-0.24,4.45-0.36c4.94-0.38,9.88-0.76,14.82-1.13
                           c3.51-0.27,7.01-0.52,10.52-0.78c4.98-0.38,9.96-0.76,14.94-1.14c3.55-0.27,7.09-0.52,10.64-0.78c4.9-0.37,9.8-0.75,14.7-1.12
                           c3.59-0.27,7.17-0.53,10.76-0.8c4.9-0.37,9.8-0.75,14.7-1.12c3.51-0.27,7.01-0.52,10.52-0.79c4.98-0.38,9.96-0.77,14.94-1.14
                           c3.03-0.23,6.06-0.43,9.09-0.64c0.19-0.01,0.39,0.02,0.72,0.04c1.65,20.12,3.29,40.21,4.95,60.38c-0.47,0.09-0.81,0.18-1.16,0.21
                           c-5.3,0.43-10.6,0.84-15.89,1.27c-6.25,0.52-12.5,1.07-18.75,1.59c-4.38,0.36-8.76,0.68-13.15,1.05
                           c-5.3,0.44-10.59,0.9-15.89,1.34c-4.34,0.36-8.68,0.69-13.02,1.04c-4.38,0.36-8.76,0.75-13.14,1.11
                           c-3.39,0.28-6.77,0.53-10.16,0.81c-4.38,0.36-8.76,0.74-13.14,1.11c-3.19,0.27-6.37,0.52-9.56,0.78c-3.62,0.3-7.25,0.61-10.87,0.9
                           c-0.71,0.06-1.43,0.01-2.14,0.01C1011.92,1290.67,1013.11,1231.41,1013.34,1229.74z"/>
                       <path id="lote_91" class="st3" d="M1149.19,1281.43c1.66,20.25,3.32,40.53,5,60.94c-1.05,0.12-1.99,0.24-2.93,0.32
                           c-5.89,0.48-11.79,0.96-17.69,1.43c-4.46,0.35-8.93,0.68-13.39,1.04c-5.5,0.44-10.99,0.9-16.49,1.35
                           c-3.39,0.27-6.77,0.52-10.16,0.79c-4.58,0.37-9.16,0.75-13.74,1.12c-3.39,0.27-6.77,0.53-10.16,0.8
                           c-4.62,0.37-9.24,0.75-13.86,1.12c-3.35,0.27-6.69,0.52-10.04,0.79c-4.66,0.37-9.32,0.75-13.98,1.13
                           c-3.03,0.24-6.05,0.49-9.08,0.73c-3.47,0.27-6.93,0.54-10.4,0.8c-0.39,0.03-0.79,0-1.17,0c-0.22-0.68,0.19-25.47,0.32-30.54
                           c0.27-10.18,0.41-20.36,0.6-30.65c1.19-0.12,2.25-0.25,3.31-0.34c4.62-0.39,9.24-0.77,13.86-1.15c3.23-0.26,6.45-0.52,9.68-0.78
                           c4.54-0.37,9.08-0.76,13.62-1.13c3.19-0.26,6.37-0.52,9.56-0.78c4.62-0.38,9.24-0.77,13.86-1.15c3.27-0.27,6.53-0.52,9.8-0.79
                           c4.46-0.37,8.92-0.75,13.38-1.12c3.27-0.27,6.53-0.53,9.8-0.8c3.55-0.29,7.09-0.59,10.63-0.88c3.27-0.27,6.53-0.53,9.8-0.8
                           c4.5-0.37,9-0.75,13.5-1.12c1.95-0.16,3.9-0.31,5.86-0.46C1148.79,1281.3,1148.91,1281.36,1149.19,1281.43z"/>
                       <path id="lote_90" class="st4" d="M1154.26,1343.3c1.88,22.92,3.74,45.65,5.61,68.47c-0.45,0.1-0.78,0.22-1.12,0.24
                           c-3.87,0.27-7.74,0.51-11.61,0.77c-5.34,0.37-10.68,0.76-16.03,1.13c-3.95,0.27-7.9,0.52-11.84,0.79
                           c-4.19,0.29-8.37,0.6-12.56,0.89c-3.83,0.27-7.66,0.51-11.49,0.78c-4.31,0.3-8.61,0.6-12.92,0.9c-3.91,0.27-7.82,0.52-11.72,0.79
                           c-4.19,0.29-8.37,0.58-12.56,0.88c-2.67,0.19-5.34,0.37-8.01,0.55c-4.35,0.3-8.69,0.61-13.04,0.9c-3.95,0.27-7.9,0.52-11.84,0.79
                           c-4.19,0.29-8.37,0.6-12.56,0.88c-0.91,0.06-1.83,0.01-2.87,0.01c-0.02-0.4-0.07-0.82-0.06-1.25c0.14-6.83,0.29-13.66,0.43-20.5
                           c0.05-2.36,0.04-4.72,0.09-7.07c0.13-7.19,0.28-14.38,0.41-21.58c0.09-5.03,0.18-10.07,0.27-15.1c0-0.28-0.01-0.56,0-0.84
                           c0.04-0.94,0.12-1.03,1.03-1.1c4.26-0.34,8.53-0.66,12.79-1.01c5.46-0.44,10.91-0.9,16.37-1.34c3.43-0.28,6.85-0.52,10.28-0.79
                           c4.54-0.36,9.08-0.75,13.62-1.12c3.31-0.27,6.61-0.52,9.92-0.79c3.7-0.3,7.41-0.6,11.11-0.9c3.31-0.26,6.61-0.52,9.92-0.78
                           c4.7-0.38,9.4-0.76,14.1-1.14c3.27-0.26,6.53-0.51,9.8-0.78c4.74-0.38,9.48-0.77,14.22-1.14c3.39-0.27,6.77-0.52,10.16-0.79
                           c2.59-0.2,5.18-0.43,7.77-0.63C1152.64,1343.37,1153.35,1343.35,1154.26,1343.3z"/>
                   </g>
               </g>
               <g id="manzana6">
                   <path id="mzn6calle" class="st0" d="M1504.48,1607.61l-21.6-298.8c-0.42-5.76-3.9-10.85-9.12-13.31c-2.17-1.03-4.51-1.53-6.83-1.53
                       c-3.26,0-6.49,0.99-9.24,2.94l-254.89,180.34l-541.77,42.66l-365.7-85.8L145.84,1375c-1.9-0.75-3.9-1.12-5.88-1.12
                       c-0.71,0-1.42,0.06-2.13,0.15l-128.67,9.13v14.4l130.8-7.68l6.48,167.76l506.16,118.08l851.89-67.7
                       C1504.48,1607.88,1504.49,1607.75,1504.48,1607.61z"/>
                   <path id="mzn6verdes" class="st1" d="M551.56,1424.44l-0.28,2.74l-1.17,11.5c-0.5,4.93-5.22,8.3-10.04,7.18l-231.39-53.57
                       l-42.46-19.01c-2.63-1.18-3.86-4.23-2.77-6.9l3.86-9.47c1.11-2.73,4.22-4.05,6.96-2.94l47.37,19.12"/>
                   <g id="mzn6lotes">
                       <path id="lote_122" class="st4" d="M140.96,1390.9c0.54,0,0.8-0.07,1,0.01c32.85,12.95,65.7,25.9,98.38,38.79
                           c0.63,0.96,0.31,1.74,0.13,2.5c-1.42,6.22-2.86,12.45-4.3,18.67c-3.77,16.33-7.54,32.66-11.31,49
                           c-3.79,16.41-7.58,32.82-11.36,49.23c-1.51,6.53-3,13.07-4.51,19.6c-0.19,0.84-0.45,1.67-0.64,2.35c-0.27,0.14-0.33,0.2-0.41,0.21
                           c-0.24,0.02-0.49,0.08-0.71,0.03c-19.45-4.52-38.9-9.06-58.35-13.6c-0.46-0.11-0.9-0.29-1.43-0.47c-0.08-0.59-0.19-1.12-0.23-1.67
                           c-0.13-2.15-0.25-4.31-0.33-6.46c-0.29-7.02-0.56-14.05-0.83-21.07c-0.18-4.47-0.36-8.94-0.52-13.41
                           c-0.23-6.31-0.42-12.62-0.66-18.92c-0.22-5.67-0.48-11.33-0.72-17c-0.18-4.47-0.36-8.94-0.52-13.41
                           c-0.23-6.23-0.42-12.46-0.66-18.68c-0.22-5.83-0.49-11.65-0.73-17.48c-0.02-0.48-0.05-0.96-0.07-1.44
                           c-0.22-6.55-0.43-13.1-0.67-19.64c-0.19-5.03-0.42-10.06-0.61-15.09C140.88,1392.32,140.94,1391.69,140.96,1390.9z"/>
                       <path id="lote_121" class="st3" d="M241.55,1430.66c1.19-0.22,1.95,0.33,2.75,0.64c10.11,3.97,20.22,7.97,30.32,11.96
                           c3.42,1.35,6.85,2.67,10.24,4.08c4.07,1.7,8.23,3.05,12.56,3.9c0.7,0.14,1.38,0.36,1.98,0.52c0.58,0.78,0.3,1.49,0.15,2.18
                           c-1.12,4.9-2.25,9.8-3.38,14.7c-3.75,16.25-7.51,32.51-11.26,48.76c-4.31,18.67-8.61,37.33-12.92,56
                           c-0.83,3.58-1.64,7.16-2.48,10.73c-0.1,0.45-0.33,0.86-0.49,1.28c-0.34,0.02-0.58,0.1-0.8,0.05
                           c-19.14-4.44-38.29-8.88-57.43-13.34c-0.46-0.11-0.9-0.3-1.3-0.44c-0.51-0.86-0.17-1.63,0-2.39c1.75-7.62,3.51-15.25,5.27-22.87
                           c3.93-17.03,7.85-34.07,11.78-51.1c4.09-17.73,8.18-35.47,12.27-53.2c0.72-3.11,1.42-6.22,2.15-9.33
                           C241.13,1432.11,241.34,1431.43,241.55,1430.66z"/>
                       <path id="lote_120" class="st3" d="M329.8,1599.61c-0.42,0-0.75,0.06-1.04-0.01c-19.45-4.55-38.89-9.11-58.33-13.68
                           c-0.13-0.03-0.22-0.22-0.32-0.34c-0.03-0.07-0.08-0.14-0.09-0.22c-0.02-0.08-0.01-0.16,0-0.24c0.11-0.63,0.2-1.26,0.34-1.89
                           c9.98-43.25,19.97-86.5,29.95-129.75c0.07-0.31,0.19-0.61,0.31-0.91c0.02-0.07,0.11-0.11,0.31-0.3c0.4,0.02,0.95-0.02,1.47,0.1
                           c10.97,2.56,21.94,5.13,32.91,7.71c7.78,1.83,15.56,3.66,23.33,5.49c0.61,0.14,1.21,0.35,1.94,0.56c-0.05,0.63-0.03,1.18-0.15,1.7
                           c-2.21,9.65-4.43,19.3-6.65,28.94c-3.44,14.94-6.89,29.87-10.34,44.81c-3.79,16.41-7.58,32.83-11.36,49.24
                           c-0.56,2.41-1.09,4.83-1.66,7.24C330.28,1598.6,330.02,1599.08,329.8,1599.61z"/>
                       <path id="lote_119" class="st3" d="M390.57,1613.78c-1.96-0.15-57.3-12.99-59.67-13.86c0.03-0.48-0.02-1.02,0.1-1.53
                           c1.9-8.33,3.82-16.65,5.74-24.97c4.23-18.36,8.46-36.71,12.69-55.07c3.85-16.72,7.7-33.44,11.57-50.16
                           c0.12-0.53,0.35-1.04,0.57-1.7c0.75,0.09,1.46,0.11,2.14,0.26c16.49,3.86,32.97,7.73,49.46,11.6c2.33,0.55,4.67,1.09,6.99,1.66
                           c0.43,0.11,0.83,0.37,1.33,0.6c-0.18,0.95-0.31,1.81-0.51,2.66c-10,43.32-20.01,86.63-30.03,129.94
                           C390.89,1613.44,390.69,1613.61,390.57,1613.78z"/>
                       <path id="lote_118" class="st3" d="M422.48,1480.68c0.53,0.08,1,0.13,1.45,0.23c18.97,4.45,37.94,8.91,56.91,13.38
                           c0.22,0.05,0.4,0.23,0.73,0.42c-0.06,0.51-0.07,1.05-0.19,1.57c-3.18,13.85-6.36,27.69-9.55,41.53
                           c-3.92,17.03-7.85,34.06-11.78,51.09c-2.78,12.05-5.54,24.11-8.33,36.16c-0.21,0.91-0.52,1.81-0.81,2.81
                           c-0.68-0.08-1.23-0.09-1.75-0.21c-12.29-2.85-24.58-5.71-36.87-8.57c-5.91-1.38-11.83-2.74-17.73-4.14
                           c-0.92-0.22-1.88-0.33-2.66-0.8c-0.4-0.8-0.12-1.49,0.04-2.18c1.9-8.24,3.78-16.49,5.69-24.73c3.93-17.03,7.86-34.06,11.79-51.09
                           c3.79-16.41,7.57-32.81,11.36-49.22c0.39-1.71,0.77-3.43,1.18-5.13C422.04,1481.44,422.27,1481.11,422.48,1480.68z"/>
                       <path id="lote_117" class="st3" d="M482.74,1494.69c19.68,4.57,39.19,9.17,58.6,13.72c0.66,0.86,0.3,1.65,0.13,2.4
                           c-0.93,4.13-1.89,8.25-2.84,12.37c-3.47,15.01-6.94,30.02-10.4,45.03c-4.88,21.15-9.74,42.31-14.61,63.47
                           c-0.59,2.57-1.17,5.13-1.78,7.7c-0.18,0.77-0.42,1.52-0.61,2.2c-0.8,0.53-1.5,0.23-2.18,0.07c-6.3-1.47-12.6-2.96-18.9-4.43
                           c-11.9-2.77-23.81-5.54-35.71-8.31c-0.84-0.2-1.67-0.46-2.38-0.66c-0.12-0.33-0.25-0.5-0.22-0.62
                           c10.1-43.95,20.21-87.89,30.33-131.83C482.23,1495.5,482.44,1495.25,482.74,1494.69z"/>
                       <path id="lote_116" class="st3" d="M571.03,1655.9c-0.32-0.03-0.72-0.01-1.09-0.1c-18.98-4.41-37.95-8.83-56.92-13.26
                           c-0.3-0.07-0.56-0.26-0.86-0.4c-0.19-0.86,0.04-1.62,0.22-2.39c6.61-28.61,13.21-57.22,19.81-85.83
                           c3.26-14.15,6.5-28.31,9.76-42.46c0.19-0.84,0.33-1.71,0.78-2.39c0.26-0.07,0.43-0.18,0.56-0.15
                           c19.21,4.48,38.41,8.96,57.62,13.45c0.3,0.07,0.57,0.27,0.98,0.46c-0.03,0.44-0.01,0.91-0.11,1.35
                           c-1.37,6.07-2.75,12.14-4.14,18.2c-4.09,17.73-8.19,35.45-12.27,53.18c-4.48,19.44-8.96,38.87-13.44,58.31
                           C571.75,1654.56,571.7,1655.29,571.03,1655.9z"/>
                       <path id="lote_115" class="st3" d="M659.55,1536.5c0,0.57,0.03,1.2-0.01,1.82c-0.26,4.55-0.53,9.09-0.82,13.63
                           c-0.41,6.54-0.84,13.07-1.26,19.61c-0.18,2.79-0.35,5.58-0.51,8.37c-0.38,6.7-0.73,13.4-1.13,20.1
                           c-0.39,6.46-0.85,12.91-1.25,19.37c-0.23,3.75-0.4,7.5-0.62,11.25c-0.24,4.07-0.53,8.13-0.79,12.2c-0.18,2.87-0.37,5.74-0.53,8.61
                           c-0.38,6.62-0.74,13.24-1.12,19.86c-0.06,1.02,0,2.07-0.57,3.15c-0.63-0.06-1.26-0.04-1.85-0.18
                           c-14.55-3.39-29.09-6.8-43.64-10.19c-9.96-2.32-19.92-4.62-29.88-6.94c-1.08-0.25-2.14-0.56-3.32-0.87
                           c0.06-0.68,0.04-1.23,0.16-1.75c2.9-12.6,5.82-25.2,8.72-37.8c3.42-14.86,6.83-29.72,10.25-44.57
                           c3.66-15.87,7.32-31.73,10.99-47.59c0.11-0.45,0.28-0.89,0.4-1.26c0.83-0.43,1.54-0.16,2.21,0c11.75,2.75,23.49,5.51,35.23,8.27
                           c5.68,1.33,11.35,2.68,17.03,4C658.01,1535.77,658.81,1535.85,659.55,1536.5z"/>
                       <path id="lote_114" class="st3" d="M651.98,1674.92c0-1.1-0.04-1.89,0.01-2.67c0.23-3.59,0.51-7.17,0.72-10.76
                           c0.24-3.91,0.4-7.82,0.64-11.73c0.4-6.46,0.84-12.91,1.25-19.37c0.2-3.19,0.37-6.38,0.56-9.57c0.29-4.7,0.59-9.41,0.88-14.11
                           c0.18-2.87,0.36-5.74,0.52-8.61c0.21-3.83,0.39-7.66,0.62-11.49c0.4-6.54,0.84-13.07,1.26-19.61c0.18-2.79,0.35-5.58,0.51-8.37
                           c0.37-6.46,0.73-12.92,1.11-19.38c0.05-0.94-0.09-1.93,0.58-2.79c0.2-0.07,0.41-0.21,0.64-0.23c17.93-1.4,35.86-2.8,53.79-4.18
                           c0.14-0.01,0.29,0.11,0.6,0.24c0.08,0.34,0.23,0.79,0.27,1.24c0.5,5.65,0.97,11.3,1.47,16.95c0.4,4.53,0.84,9.07,1.23,13.6
                           c0.39,4.54,0.74,9.07,1.13,13.61c0.4,4.69,0.83,9.39,1.25,14.08c0.2,2.23,0.39,4.46,0.58,6.68c0.62,7.24,1.26,14.48,1.87,21.72
                           c0.39,4.62,0.73,9.24,1.13,13.85c0.39,4.54,0.83,9.07,1.22,13.6c0.39,4.54,0.76,9.07,1.14,13.61c0.15,1.75,0.33,3.5,0.45,5.25
                           c0.06,0.78,0.01,1.57,0.01,2.47c-1,0.46-2.03,0.53-3.05,0.61c-5.02,0.39-10.05,0.73-15.07,1.13c-4.86,0.39-9.72,0.85-14.58,1.24
                           c-4.94,0.4-9.89,0.73-14.83,1.13c-4.94,0.39-9.88,0.84-14.82,1.24c-3.67,0.3-7.33,0.57-11,0.81
                           C653.46,1675.16,652.84,1675.01,651.98,1674.92z"/>
                       <path id="lote_113" class="st3" d="M791.63,1663.62c-0.83,0.72-1.57,0.68-2.28,0.74c-5.58,0.45-11.15,0.92-16.73,1.35
                           c-5.02,0.39-10.05,0.74-15.07,1.14c-4.86,0.39-9.72,0.82-14.58,1.23c-2.55,0.21-5.1,0.4-7.65,0.6c-1.43,0.11-2.87,0.24-4.3,0.35
                           c-0.79,0.06-1.58,0.08-2.45,0.11c-0.17-0.57-0.38-1-0.42-1.45c-0.51-5.73-0.98-11.46-1.49-17.19c-0.4-4.53-0.84-9.07-1.23-13.6
                           c-0.4-4.62-0.75-9.23-1.15-13.85c-0.4-4.61-0.82-9.23-1.23-13.84c-0.19-2.15-0.39-4.3-0.57-6.44c-0.54-6.53-1.05-13.06-1.61-19.58
                           c-0.55-6.37-1.15-12.73-1.71-19.09c-0.4-4.61-0.74-9.23-1.13-13.85c-0.39-4.54-0.81-9.07-1.22-13.6c-0.13-1.5-0.31-2.99-0.11-4.63
                           c1.65-0.38,3.24-0.45,4.81-0.58c7.17-0.58,14.35-1.07,21.52-1.63c6.93-0.54,13.86-1.15,20.79-1.71c4.3-0.35,8.61-0.69,12.91-1
                           c0.94-0.07,1.91-0.26,2.82,0.08c0.63,0.77,0.54,1.68,0.62,2.54c0.46,5.17,0.91,10.34,1.35,15.51c0.39,4.62,0.74,9.24,1.13,13.85
                           c0.39,4.54,0.81,9.07,1.22,13.6c0.2,2.23,0.39,4.45,0.59,6.68c0.63,7.32,1.27,14.64,1.89,21.96c0.39,4.62,0.73,9.24,1.12,13.85
                           c0.39,4.54,0.83,9.07,1.23,13.6c0.38,4.38,0.73,8.76,1.11,13.13c0.42,4.85,0.86,9.7,1.27,14.56
                           C791.28,1658.85,791.45,1661.23,791.63,1663.62z"/>
                       <path id="lote_112" class="st3" d="M792.49,1663.88c-0.16-0.77-0.34-1.38-0.4-2c-0.38-4.46-0.72-8.91-1.1-13.37
                           c-0.39-4.53-0.81-9.07-1.22-13.6c-0.2-2.23-0.4-4.45-0.59-6.68c-0.63-7.32-1.27-14.64-1.89-21.96c-0.39-4.62-0.73-9.23-1.12-13.85
                           c-0.39-4.53-0.84-9.06-1.23-13.6c-0.4-4.61-0.75-9.23-1.14-13.85c-0.4-4.61-0.82-9.23-1.23-13.84c-0.18-2.07-0.37-4.14-0.55-6.2
                           c-0.47-5.49-0.94-10.98-1.4-16.47c-0.03-0.39,0-0.78,0-1.04c0.65-0.75,1.39-0.74,2.1-0.79c4.86-0.37,9.73-0.71,14.59-1.09
                           c4.94-0.39,9.88-0.82,14.82-1.22c2.23-0.18,4.46-0.37,6.69-0.54c5.1-0.38,10.2-0.75,15.3-1.13c1.91-0.14,3.82-0.31,5.74-0.45
                           c0.55-0.04,1.1-0.01,1.77-0.01c0.17,0.61,0.41,1.11,0.45,1.64c0.38,4.3,0.7,8.6,1.07,12.89c0.39,4.53,0.83,9.06,1.23,13.6
                           c0.39,4.53,0.75,9.07,1.14,13.61c0.4,4.69,0.83,9.39,1.24,14.08c0.2,2.23,0.39,4.45,0.59,6.68c0.63,7.32,1.27,14.64,1.89,21.96
                           c0.39,4.62,0.73,9.23,1.13,13.85c0.39,4.53,0.83,9.07,1.22,13.6c0.37,4.22,0.72,8.43,1.08,12.65c0.27,3.18,0.55,6.36,0.83,9.55
                           c0.08,0.87,0.23,1.73-0.06,2.69c-1.32,0.36-2.66,0.48-4,0.58c-5.58,0.44-11.15,0.9-16.73,1.34c-2.79,0.22-5.58,0.41-8.37,0.63
                           c-5.1,0.41-10.2,0.84-15.29,1.26c-2.07,0.17-4.14,0.34-6.21,0.5c-2.47,0.2-4.94,0.41-7.41,0.58
                           C794.54,1663.93,793.66,1663.88,792.49,1663.88z"/>
                       <path id="lote_111" class="st3" d="M901,1517.7c0.18,1.55,0.38,2.97,0.51,4.39c0.39,4.61,0.75,9.23,1.14,13.85
                           c0.39,4.53,0.81,9.07,1.21,13.6c0.2,2.23,0.41,4.45,0.59,6.68c0.54,6.52,1.05,13.05,1.61,19.58c0.55,6.36,1.16,12.72,1.71,19.08
                           c0.4,4.61,0.74,9.23,1.13,13.85c0.39,4.53,0.82,9.06,1.22,13.6c0.19,2.15,0.39,4.29,0.56,6.44c0.54,6.52,1.07,13.05,1.61,19.58
                           c0.12,1.43,0.28,2.86,0.39,4.29c0.04,0.47,0.01,0.94,0.01,1.43c-0.95,0.59-1.91,0.6-2.85,0.67c-7.01,0.54-14.03,1.06-21.04,1.6
                           c-5.98,0.46-11.95,0.94-17.92,1.44c-4.78,0.39-9.55,0.82-14.33,1.22c-0.62,0.05-1.25,0.01-1.9,0.01
                           c-0.57-1.14-0.58-2.26-0.68-3.35c-0.46-5.25-0.92-10.5-1.36-15.75c-0.39-4.61-0.74-9.23-1.14-13.85
                           c-0.4-4.61-0.83-9.22-1.24-13.84c-0.19-2.15-0.38-4.29-0.56-6.44c-0.54-6.53-1.06-13.05-1.61-19.58
                           c-0.63-7.48-1.28-14.95-1.92-22.43c-0.64-7.4-1.27-14.8-1.91-22.19c-0.5-5.81-1-11.61-1.51-17.42c-0.03-0.4-0.09-0.79-0.1-1.19
                           c-0.01-0.55,0.28-0.9,0.8-1.04c0.23-0.06,0.47-0.09,0.71-0.11c4.22-0.33,8.45-0.66,12.67-0.99c5.42-0.43,10.83-0.86,16.25-1.29
                           c2.23-0.18,4.46-0.37,6.69-0.54c5.1-0.38,10.2-0.75,15.3-1.13c0.88-0.07,1.75-0.2,2.62-0.27
                           C898.71,1517.5,899.74,1517.3,901,1517.7z"/>
                       <path id="lote_110" class="st3" d="M974.36,1649.31c-0.29,0.08-0.58,0.21-0.88,0.24c-19.6,1.59-39.2,3.17-58.81,4.74
                           c-0.3,0.02-0.61-0.09-1.06-0.16c-0.12-0.81-0.25-1.58-0.35-2.35c-0.1-0.79-0.19-1.59-0.26-2.38c-0.45-5.17-0.9-10.34-1.34-15.52
                           c-0.38-4.54-0.74-9.08-1.13-13.61c-0.39-4.62-0.81-9.23-1.22-13.84c-0.2-2.23-0.41-4.45-0.59-6.68
                           c-0.54-6.53-1.05-13.06-1.61-19.58c-0.55-6.37-1.16-12.73-1.71-19.09c-0.4-4.62-0.74-9.24-1.13-13.85
                           c-0.39-4.54-0.83-9.07-1.22-13.6c-0.39-4.54-0.77-9.07-1.13-13.61c-0.06-0.78-0.01-1.57-0.01-2.33c0.98-0.58,1.95-0.58,2.89-0.65
                           c7.09-0.54,14.19-1.05,21.29-1.6c6.06-0.46,12.11-0.94,18.17-1.43c4.94-0.4,9.88-0.84,14.82-1.24c1.18-0.1,2.37-0.23,3.59-0.03
                           c0.15,0.39,0.33,0.67,0.35,0.97c0.35,3.82,0.68,7.64,1.02,11.46c0.43,4.93,0.86,9.87,1.29,14.8c0.2,2.31,0.4,4.62,0.6,6.92
                           c0.62,7.16,1.25,14.32,1.85,21.48c0.39,4.62,0.73,9.24,1.13,13.85c0.39,4.54,0.82,9.07,1.22,13.6c0.2,2.23,0.39,4.46,0.58,6.68
                           c0.63,7.24,1.26,14.48,1.87,21.72c0.4,4.7,0.75,9.4,1.14,14.09c0.22,2.63,0.5,5.25,0.73,7.87c0.07,0.79,0.11,1.59,0.12,2.39
                           C974.58,1648.78,974.45,1649.01,974.36,1649.31z"/>
                       <path id="lote_109" class="st3" d="M963.65,1512.61c0.91-0.16,1.52-0.33,2.14-0.38c4.94-0.38,9.88-0.71,14.82-1.1
                           c6.93-0.55,13.86-1.15,20.79-1.71c2.95-0.24,5.9-0.42,8.85-0.65c3.03-0.24,6.05-0.52,9.08-0.75c1.83-0.14,3.66-0.22,5.57-0.33
                           c0.2,0.54,0.46,0.96,0.5,1.39c0.37,3.98,0.69,7.95,1.03,11.93c0.44,5.09,0.89,10.18,1.32,15.27c0.39,4.53,0.74,9.07,1.13,13.61
                           c0.4,4.69,0.83,9.38,1.24,14.08c0.19,2.15,0.39,4.29,0.57,6.44c0.54,6.53,1.05,13.05,1.61,19.58c0.55,6.36,1.16,12.72,1.71,19.09
                           c0.4,4.61,0.74,9.23,1.13,13.85c0.39,4.53,0.82,9.07,1.22,13.6c0.19,2.15,0.38,4.29,0.55,6.44c0.03,0.39-0.05,0.78-0.09,1.29
                           c-0.55,0.15-1.07,0.37-1.59,0.41c-4.7,0.38-9.4,0.71-14.1,1.09c-4.86,0.39-9.71,0.83-14.57,1.23c-2.63,0.22-5.26,0.4-7.89,0.61
                           c-5.26,0.42-10.51,0.86-15.77,1.27c-2.38,0.19-4.76,0.33-7.26,0.5c-0.16-0.56-0.34-0.99-0.39-1.44c-0.26-2.38-0.5-4.76-0.71-7.15
                           c-0.4-4.61-0.75-9.23-1.14-13.85c-0.39-4.53-0.81-9.07-1.21-13.6c-0.19-2.15-0.39-4.29-0.57-6.44
                           c-0.54-6.53-1.05-13.05-1.61-19.58c-0.55-6.36-1.16-12.72-1.71-19.09c-0.41-4.69-0.75-9.39-1.15-14.09
                           c-0.39-4.53-0.82-9.06-1.22-13.6c-0.2-2.23-0.39-4.45-0.58-6.68c-0.46-5.33-0.93-10.66-1.37-15.99
                           C963.83,1516.21,963.76,1514.54,963.65,1512.61z"/>
                       <path id="lote_108" class="st3" d="M1097.83,1639.2c-0.75,0.64-1.57,0.61-2.36,0.67c-5.9,0.48-11.79,0.96-17.69,1.42
                           c-4.94,0.38-9.89,0.72-14.83,1.11c-4.86,0.39-9.71,0.84-14.57,1.24c-2.87,0.24-5.74,0.44-8.61,0.62
                           c-0.62,0.04-1.25-0.04-1.79-0.06c-0.63-0.99-0.58-1.97-0.66-2.92c-0.45-5.17-0.91-10.34-1.34-15.51
                           c-0.39-4.62-0.74-9.23-1.14-13.85c-0.4-4.61-0.83-9.23-1.24-13.84c-0.2-2.23-0.39-4.46-0.58-6.68
                           c-0.46-5.33-0.93-10.66-1.38-15.99c-0.39-4.62-0.74-9.23-1.13-13.85c-0.39-4.54-0.81-9.07-1.22-13.6
                           c-0.2-2.23-0.39-4.46-0.58-6.68c-0.62-7.24-1.25-14.48-1.87-21.72c-0.31-3.58-0.6-7.16-0.88-10.75c-0.02-0.31,0.07-0.62,0.12-1.06
                           c0.54-0.13,1.06-0.32,1.59-0.36c6.69-0.53,13.39-1.01,20.08-1.55c6.93-0.55,13.86-1.16,20.79-1.71c5.1-0.41,10.2-0.77,15.31-1.13
                           c0.7-0.05,1.41-0.01,2.16-0.01c0.14,0.39,0.32,0.67,0.35,0.97c0.37,4.22,0.72,8.43,1.08,12.65c0.4,4.61,0.81,9.23,1.22,13.84
                           c0.2,2.23,0.41,4.45,0.59,6.68c0.54,6.53,1.05,13.05,1.61,19.58c0.55,6.36,1.16,12.72,1.72,19.09c0.4,4.61,0.74,9.23,1.13,13.85
                           c0.4,4.61,0.84,9.22,1.24,13.84c0.4,4.61,0.75,9.23,1.14,13.85c0.4,4.61,0.83,9.23,1.24,13.84c0.2,2.23,0.4,4.45,0.57,6.68
                           C1097.94,1638.33,1097.85,1638.81,1097.83,1639.2z"/>
                       <path id="lote_107" class="st3" d="M1087.15,1502.75c2.72-0.23,5.18-0.45,7.64-0.65c3.27-0.27,6.53-0.53,9.8-0.79
                           c2.39-0.19,4.78-0.4,7.17-0.58c5.02-0.38,10.05-0.72,15.07-1.11c4.94-0.39,9.88-0.84,14.82-1.23c1.98-0.16,3.96-0.27,5.97-0.31
                           c0.58,1.06,0.6,2.1,0.68,3.12c0.54,6.53,1.06,13.05,1.61,19.58c0.62,7.4,1.26,14.8,1.91,22.2c0.57,6.44,1.18,12.88,1.73,19.33
                           c0.4,4.61,0.73,9.24,1.12,13.85c0.39,4.54,0.84,9.07,1.23,13.6c0.4,4.61,0.75,9.23,1.14,13.85c0.4,4.61,0.83,9.23,1.24,13.84
                           c0.17,1.91,0.34,3.82,0.49,5.73c0.28,3.42,0.54,6.85,0.8,10.27c0.02,0.3-0.06,0.62-0.11,1.07c-1.42,0.35-2.83,0.46-4.25,0.58
                           c-5.66,0.45-11.31,0.91-16.97,1.36c-4.94,0.39-9.88,0.74-14.82,1.13c-4.86,0.39-9.72,0.81-14.58,1.21
                           c-2.63,0.22-5.26,0.43-7.89,0.63c-0.63,0.05-1.26,0.01-1.99,0.01c-0.49-0.91-0.56-1.86-0.64-2.8c-0.54-6.53-1.05-13.06-1.61-19.58
                           c-0.55-6.44-1.17-12.88-1.73-19.33c-0.4-4.61-0.73-9.23-1.13-13.85c-0.39-4.54-0.83-9.07-1.23-13.6
                           c-0.39-4.54-0.74-9.07-1.13-13.61c-0.4-4.69-0.83-9.39-1.24-14.08c-0.2-2.23-0.39-4.45-0.59-6.68
                           c-0.63-7.32-1.27-14.64-1.89-21.96c-0.27-3.18-0.51-6.37-0.74-9.56C1087.02,1503.92,1087.1,1503.46,1087.15,1502.75z"/>
                       <path id="lote_106" class="st3" d="M1148.72,1497.95c2.34-0.22,4.39-0.45,6.45-0.61c5.58-0.45,11.16-0.89,16.73-1.33
                           c2.47-0.2,4.94-0.4,7.41-0.58c7.09-0.53,14.19-1.06,21.29-1.59c2.31-0.17,4.62-0.39,6.93-0.56c1.32-0.1,1.63,0.14,1.74,1.36
                           c0.36,3.98,0.68,7.96,1.02,11.94c0.42,4.85,0.85,9.71,1.27,14.56c0.19,2.15,0.39,4.3,0.57,6.44c0.54,6.53,1.05,13.06,1.61,19.58
                           c0.55,6.45,1.17,12.89,1.73,19.33c0.4,4.62,0.73,9.24,1.13,13.85c0.39,4.54,0.83,9.07,1.23,13.6c0.39,4.54,0.74,9.07,1.13,13.61
                           c0.4,4.62,0.81,9.23,1.22,13.84c0.2,2.23,0.41,4.45,0.58,6.68c0.04,0.46-0.05,0.93-0.09,1.49c-0.43,0.12-0.8,0.28-1.17,0.31
                           c-4.22,0.35-8.45,0.67-12.67,1.02c-4.86,0.4-9.72,0.83-14.58,1.23c-2.79,0.23-5.58,0.41-8.37,0.63
                           c-5.02,0.4-10.04,0.82-15.06,1.23c-2.39,0.19-4.78,0.39-7.17,0.57c-0.31,0.02-0.63-0.07-1.03-0.12c-0.14-0.45-0.36-0.88-0.4-1.33
                           c-0.37-4.22-0.7-8.44-1.07-12.65c-0.4-4.61-0.85-9.23-1.25-13.84c-0.39-4.54-0.74-9.08-1.13-13.61c-0.4-4.62-0.82-9.23-1.23-13.84
                           c-0.19-2.15-0.39-4.3-0.57-6.45c-0.54-6.53-1.05-13.06-1.61-19.58c-0.55-6.45-1.17-12.88-1.73-19.33
                           c-0.4-4.61-0.73-9.24-1.13-13.85c-0.39-4.54-0.82-9.07-1.23-13.6c-0.19-2.15-0.38-4.3-0.55-6.45
                           C1148.69,1499.35,1148.72,1498.8,1148.72,1497.95z"/>
                       <path id="lote_105" class="st3" d="M1282.68,1624.51c-0.41,0.19-0.62,0.37-0.84,0.38c-19.76,1.59-39.53,3.17-59.29,4.75
                           c-0.22,0.02-0.46-0.09-0.74-0.15c-0.54-0.84-0.53-1.81-0.62-2.75c-0.63-7.24-1.26-14.48-1.87-21.73
                           c-0.39-4.62-0.73-9.24-1.13-13.85c-0.39-4.54-0.83-9.07-1.23-13.6c-0.38-4.3-0.72-8.6-1.09-12.89
                           c-0.43-5.01-0.88-10.03-1.31-15.04c-0.39-4.54-0.75-9.08-1.13-13.61c-0.39-4.62-0.81-9.23-1.21-13.85
                           c-0.21-2.39-0.43-4.77-0.63-7.16c-0.58-6.84-1.12-13.69-1.77-20.53c-0.12-1.3,0.25-2.07,1.29-2.8c5.31-3.7,10.59-7.46,15.88-11.2
                           c12.8-9.05,25.59-18.09,38.4-27.13c0.7-0.49,1.32-1.17,2.32-1.26c0.52,0.98,0.52,2.03,0.61,3.05c0.46,5.33,0.93,10.66,1.38,16
                           c0.39,4.62,0.74,9.24,1.14,13.85c0.39,4.54,0.81,9.07,1.22,13.6c0.19,2.15,0.39,4.3,0.57,6.45c0.54,6.53,1.05,13.06,1.61,19.58
                           c0.55,6.45,1.17,12.89,1.73,19.33c0.4,4.62,0.73,9.24,1.13,13.85c0.39,4.54,0.83,9.07,1.23,13.6c0.39,4.54,0.74,9.08,1.13,13.61
                           c0.39,4.62,0.81,9.23,1.22,13.84c0.2,2.23,0.4,4.45,0.6,6.68c0.48,5.49,0.95,10.98,1.41,16.47
                           C1282.73,1622.8,1282.68,1623.6,1282.68,1624.51z"/>
                       <path id="lote_104" class="st3" d="M1345.26,1619.73c-1.26,0.16-2.29,0.33-3.31,0.41c-5.02,0.39-10.04,0.74-15.07,1.14
                           c-4.86,0.39-9.72,0.82-14.58,1.22c-2.23,0.19-4.46,0.37-6.69,0.55c-6.06,0.49-12.11,0.98-18.17,1.44
                           c-1.18,0.09-2.37,0.01-3.68,0.01c-0.51-1.02-0.53-2.14-0.62-3.23c-0.55-6.53-1.06-13.06-1.62-19.58
                           c-0.55-6.37-1.16-12.72-1.71-19.09c-0.4-4.61-0.74-9.23-1.14-13.85c-0.39-4.54-0.81-9.07-1.22-13.6c-0.19-2.15-0.39-4.3-0.56-6.44
                           c-0.54-6.53-1.05-13.06-1.61-19.58c-0.55-6.37-1.16-12.72-1.71-19.09c-0.4-4.61-0.74-9.23-1.13-13.85
                           c-0.39-4.54-0.81-9.07-1.22-13.6c-0.21-2.31-0.4-4.61-0.6-6.92c-0.62-7.16-1.25-14.32-1.84-21.48c-0.09-1.02-0.01-2.06-0.01-3.28
                           c20.24-14.28,40.55-28.61,60.87-42.93c0.17-0.12,0.44-0.11,0.61-0.16c0.53,0.23,0.49,0.67,0.52,1.04c0.35,5.1,0.68,10.2,1.04,15.3
                           c0.4,5.58,0.82,11.15,1.23,16.73c0.18,2.47,0.36,4.94,0.52,7.41c0.38,5.82,0.73,11.64,1.13,17.46c0.38,5.5,0.81,10.99,1.22,16.49
                           c0.18,2.47,0.36,4.94,0.52,7.41c0.38,5.74,0.73,11.48,1.13,17.22c0.39,5.58,0.82,11.15,1.22,16.73c0.18,2.47,0.36,4.94,0.52,7.41
                           c0.38,5.82,0.74,11.64,1.14,17.46c0.38,5.5,0.81,10.99,1.21,16.49c0.19,2.55,0.37,5.1,0.54,7.65c0.38,5.82,0.73,11.64,1.14,17.46
                           c0.38,5.5,0.83,10.99,1.21,16.49c0.27,3.82,0.48,7.65,0.71,11.48C1345.29,1618.51,1345.26,1618.98,1345.26,1619.73z"/>
                   </g>
                   <path id="znrosa" class="st5" d="M1466.87,1311.23c0.54,0.96,0.55,1.93,0.62,2.87c0.55,7.81,1.07,15.62,1.62,23.43
                       c0.47,6.77,0.97,13.55,1.46,20.32c0.47,6.53,0.95,13.07,1.43,19.6c0.48,6.69,0.96,13.39,1.45,20.08
                       c0.48,6.61,0.96,13.23,1.44,19.84c0.48,6.61,0.94,13.23,1.44,19.84c0.56,7.57,1.17,15.13,1.72,22.7
                       c0.41,5.58,0.74,11.16,1.14,16.74c0.38,5.34,0.82,10.67,1.22,16.01c0.23,3.03,0.41,6.06,0.63,9.09c0.25,3.51,0.52,7.01,0.78,10.51
                       c0.18,2.47,0.38,4.94,0.55,7.41c0.38,5.58,0.73,11.16,1.13,16.74c0.38,5.34,0.83,10.67,1.23,16.01c0.24,3.19,0.42,6.38,0.65,9.56
                       c0.23,3.27,0.49,6.53,0.74,9.8c0.2,2.71,0.42,5.42,0.61,8.13c0.38,5.5,0.73,11,1.11,16.5c0.21,3.03,0.5,6.05,0.73,9.08
                       c0.06,0.86,0.29,1.75-0.2,2.69c-1.15,0.41-2.42,0.46-3.69,0.56c-5.58,0.45-11.16,0.9-16.73,1.34c-4.94,0.39-9.89,0.74-14.83,1.13
                       c-4.94,0.39-9.88,0.82-14.82,1.23c-2.31,0.19-4.62,0.39-6.93,0.57c-7.01,0.54-14.03,1.05-21.04,1.61
                       c-6.85,0.55-13.7,1.16-20.55,1.71c-4.94,0.4-9.89,0.73-14.83,1.13c-4.86,0.39-9.72,0.81-14.58,1.22c-2.47,0.21-4.94,0.4-7.41,0.6
                       c-1.59,0.13-3.19,0.27-4.78,0.37c-0.61,0.04-1.23-0.03-1.95-0.05c-0.11-0.58-0.23-1.04-0.27-1.5c-0.14-1.51-0.27-3.02-0.37-4.54
                       c-0.38-5.74-0.73-11.48-1.13-17.22c-0.39-5.66-0.83-11.31-1.25-16.97c-0.17-2.39-0.34-4.78-0.5-7.17
                       c-0.38-5.82-0.74-11.64-1.14-17.46c-0.39-5.58-0.82-11.15-1.23-16.73c-0.18-2.47-0.36-4.94-0.52-7.41
                       c-0.38-5.82-0.74-11.64-1.14-17.46c-0.39-5.58-0.84-11.15-1.23-16.73c-0.24-3.35-0.42-6.7-0.65-10.05
                       c-0.23-3.35-0.49-6.69-0.74-10.04c-0.19-2.55-0.38-5.1-0.54-7.65c-0.39-5.82-0.74-11.64-1.14-17.46
                       c-0.39-5.58-0.82-11.15-1.23-16.73c-0.17-2.39-0.34-4.78-0.5-7.17c-0.42-6.38-0.81-12.76-1.28-19.13
                       c-0.08-1.14,0.38-1.77,1.23-2.36c4.39-3.07,8.75-6.17,13.13-9.27c39.3-27.78,78.6-55.57,117.9-83.35c0.72-0.51,1.43-1.02,2.17-1.5
                       C1466.09,1311.5,1466.47,1311.4,1466.87,1311.23z"/>
                   <path class="st0" d="M1632.52,1188.16l8.43-14.28l-32.91-92.29c0,0,5.76,26.05,7.2,70.81c1.44,44.77-36,83.39-63.36,103.51
                       s-94.2,40.98-94.2,40.98l8.1,14.81c0,0,58.19-14.05,101.68-47.86C1597.24,1240.7,1620.69,1207.07,1632.52,1188.16z"/>
               </g>
               <g id="trazos">
                   <path class="st6" d="M1465.78,1311.71c0,0,58.19-14.05,101.68-47.86c43.49-33.81,73.49-89.97,73.49-89.97l58.49,27.17V1734H1500.9
                       L1465.78,1311.71z"/>
                   <path class="st7" d="M1608.04,1081.59c0,0-8.64-41.1-18.36-63.69c-9.72-22.58-60.5-186.74-73.99-255.86
                       c-8.48-43.44-21.44-96.7-29.9-130.27c-5.35-21.24-17.17-40.28-33.82-54.51l-99.65-85.17c-27.32-23.35-42.27-58.05-40.48-93.95
                       l1.07-21.36c1.3-26.07-5.27-51.92-18.87-74.2l-52.61-86.17l-16.41-59.32c-13.48-48.73-55.85-83.92-106.22-88.29
                       c-29.11-2.53-56.79-4.3-66.07-2.95c-22.26,3.24-116.46,38.48-116.46,38.48l-122.04,78.84l-248.62,82.08l-125.07,67.37L261.5,378.78
                       "/>
                   <path class="st1" d="M221.07,1034.56l-20.44-14.3c-5.09-3.56-8.12-9.38-8.12-15.59v-83.59c0-7.11,8.63-10.64,13.61-5.56l9.57,9.75
                       l4.18-186.99l-9.54-141.83l-21.28-17.13c-7.88-6.34-12.41-15.95-12.3-26.07l0.82-72.91c0.08-6.75,8.51-9.74,12.83-4.56l6.91,8.3
                       c4.26,5.11,12.56,1.59,11.83-5.02l-2.76-25.35c-3.46-31.72,16.7-61.24,47.5-69.56l8.11-2.19l0.78-15.02l-152.85-40.25l40.12,376.35
                       l-5.4,552.88h58.03c12.2,0,22.18-9.69,22.55-21.88l5.45-180.34C230.9,1046.11,227.29,1038.91,221.07,1034.56z"/>
                   <path class="st0" d="M254.8,387.52l8.11-2.19l-1.83-6.76l-8.11,2.19c-15.7,4.24-29.4,13.98-38.58,27.41
                       c-9.17,13.43-13.25,29.74-11.49,45.91l2.76,25.35c0.24,2.2-1.42,3.09-1.94,3.31c-0.52,0.22-2.31,0.8-3.73-0.9l-6.91-8.3
                       c-2.92-3.5-7.58-4.78-11.87-3.25c-4.29,1.53-7.1,5.46-7.15,10.01l-0.82,72.91c-0.13,11.26,4.83,21.77,13.6,28.83l21.58,17.37
                       c0.77,0.62,1.51,1.28,2.23,1.95l8.71,129.54l-3.59,189.46l-7.17-7.3c-3.32-3.38-8.11-4.37-12.49-2.58
                       c-4.39,1.79-7.11,5.85-7.11,10.59v83.59c0,7.35,3.59,14.25,9.61,18.46l20.44,14.3c5.27,3.69,8.3,9.73,8.11,16.16l-5.45,180.34
                       c-0.31,10.37-8.68,18.49-19.05,18.49h-58.03v7h58.03c14.18,0,25.62-11.1,26.05-25.28l5.45-180.34c0.27-8.8-3.88-17.06-11.09-22.1
                       l-20.44-14.3c-4.15-2.9-6.62-7.66-6.62-12.72v-83.59c0-2.77,2.11-3.84,2.76-4.11c0.65-0.26,2.91-0.98,4.85,1l10.76,10.96
                       c3.49,3.56,8.54,4.62,13.17,2.77c4.63-1.85,7.56-6.09,7.65-11.07l3.64-208.72l-8.01-83.75c-1.02-13.34-7.58-25.8-18-34.19
                       l-21.58-17.37c-7.09-5.71-11.1-14.2-10.99-23.3l0.82-72.91c0.03-2.43,1.92-3.29,2.5-3.49c0.58-0.21,2.59-0.73,4.14,1.14l6.91,8.3
                       c2.95,3.54,7.6,4.67,11.84,2.87c4.24-1.8,6.66-5.93,6.16-10.51l-2.76-25.35C206.57,423.12,225.47,395.44,254.8,387.52z"/>
                   <path class="st6" d="M507.69,357.45l50.44,15.79l-5.9-30.27c-0.79-4.05-5.26-6.19-8.91-4.27L507.69,357.45z"/>
                   <path id="arboles" class="st8" d="M301.66,1366.79l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C302.55,1361.91,302.77,1364.57,301.66,1366.79z M355.66,1387.43l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C356.55,1382.55,356.77,1385.21,355.66,1387.43z M418.3,1400.48l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C419.19,1395.61,419.41,1398.27,418.3,1400.48z M484.06,1420.64l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C484.95,1415.77,485.17,1418.43,484.06,1420.64z M549.58,1424.41l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C550.47,1419.54,550.69,1422.2,549.58,1424.41z M1570.33,1104.49l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C1571.22,1099.61,1571.44,1102.27,1570.33,1104.49z M1571.09,1157.2l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C1571.97,1152.32,1572.2,1154.98,1571.09,1157.2z M693.23,1446.73l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C694.11,1441.86,694.33,1444.52,693.23,1446.73z M527.97,1337.38l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C528.86,1332.5,529.08,1335.16,527.97,1337.38z M549.58,356.28l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C550.47,351.4,550.69,354.06,549.58,356.28z M333.21,439.06l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C334.09,434.18,334.32,436.85,333.21,439.06z M513.21,423.45l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C514.09,418.57,514.32,421.23,513.21,423.45z M681.4,300.25l-0.67,1.33c-0.67,1.11-0.89,2.44-0.67,3.55l0.22,1.55
                       c0.22,2.66-1.11,5.1-3.33,6.21l-1.33,0.67c-1.11,0.44-2,1.33-2.66,2.44l-0.67,1.33c-1.33,2.22-3.77,3.55-6.43,3.1l-1.55-0.22
                       c-1.33-0.22-2.44,0-3.55,0.44l-1.33,0.67c-2.44,1.11-5.1,0.67-6.87-1.33l-1.11-1.11c-0.89-0.89-2-1.55-3.33-1.77l-1.55-0.22
                       c-2.44-0.44-4.43-2.44-4.88-5.1l-0.22-1.55c-0.22-1.33-0.67-2.44-1.55-3.33l-1.11-1.11c-1.77-1.77-2.22-4.66-0.89-6.87l0.67-1.33
                       c0.67-1.11,0.89-2.44,0.67-3.55l-0.22-1.55c-0.22-2.66,1.11-5.1,3.33-6.21l1.33-0.67c1.11-0.44,2-1.33,2.66-2.44l0.67-1.33
                       c1.33-2.22,3.77-3.55,6.43-3.1l1.55,0.22c1.33,0.22,2.44,0,3.55-0.44l1.33-0.67c2.44-1.11,5.1-0.67,6.87,1.33l1.11,1.11
                       c0.89,0.89,2,1.55,3.33,1.77l1.55,0.22c2.44,0.44,4.43,2.44,4.88,5.1l0.22,1.55c0.22,1.33,0.67,2.44,1.55,3.33l1.11,1.11
                       C682.29,295.37,682.51,298.03,681.4,300.25z M911.6,210.77l-0.72,1.44c-0.72,1.2-0.96,2.65-0.72,3.85l0.24,1.68
                       c0.24,2.89-1.2,5.53-3.61,6.74l-1.44,0.72c-1.2,0.48-2.17,1.44-2.89,2.65l-0.72,1.44c-1.44,2.41-4.09,3.85-6.98,3.37l-1.68-0.24
                       c-1.44-0.24-2.65,0-3.85,0.48l-1.44,0.72c-2.65,1.2-5.53,0.72-7.46-1.44l-1.2-1.2c-0.96-0.96-2.17-1.68-3.61-1.93l-1.68-0.24
                       c-2.65-0.48-4.81-2.65-5.29-5.53l-0.24-1.68c-0.24-1.44-0.72-2.65-1.68-3.61l-1.2-1.2c-1.93-1.93-2.41-5.05-0.96-7.46l0.72-1.44
                       c0.72-1.2,0.96-2.65,0.72-3.85l-0.24-1.68c-0.24-2.89,1.2-5.53,3.61-6.74l1.44-0.72c1.2-0.48,2.17-1.44,2.89-2.65l0.72-1.44
                       c1.44-2.41,4.09-3.85,6.98-3.37l1.68,0.24c1.44,0.24,2.65,0,3.85-0.48l1.44-0.72c2.65-1.2,5.53-0.72,7.46,1.44l1.2,1.2
                       c0.96,0.96,2.17,1.68,3.61,1.93l1.68,0.24c2.65,0.48,4.81,2.65,5.29,5.53l0.24,1.68c0.24,1.44,0.72,2.65,1.68,3.61l1.2,1.2
                       C912.56,205.48,912.8,208.37,911.6,210.77z M1539.33,964.23l-0.72,1.44c-0.72,1.2-0.96,2.65-0.72,3.85l0.24,1.68
                       c0.24,2.89-1.2,5.53-3.61,6.74l-1.44,0.72c-1.2,0.48-2.17,1.44-2.89,2.65l-0.72,1.44c-1.44,2.41-4.09,3.85-6.98,3.37l-1.68-0.24
                       c-1.44-0.24-2.65,0-3.85,0.48l-1.44,0.72c-2.65,1.2-5.53,0.72-7.46-1.44l-1.2-1.2c-0.96-0.96-2.17-1.68-3.61-1.93l-1.68-0.24
                       c-2.65-0.48-4.81-2.65-5.29-5.53l-0.24-1.68c-0.24-1.44-0.72-2.65-1.68-3.61l-1.2-1.2c-1.93-1.93-2.41-5.05-0.96-7.46l0.72-1.44
                       c0.72-1.2,0.96-2.65,0.72-3.85l-0.24-1.68c-0.24-2.89,1.2-5.53,3.61-6.74l1.44-0.72c1.2-0.48,2.17-1.44,2.89-2.65l0.72-1.44
                       c1.44-2.41,4.09-3.85,6.98-3.37l1.68,0.24c1.44,0.24,2.65,0,3.85-0.48l1.44-0.72c2.65-1.2,5.53-0.72,7.46,1.44l1.2,1.2
                       c0.96,0.96,2.17,1.68,3.61,1.93l1.68,0.24c2.65,0.48,4.81,2.65,5.29,5.53l0.24,1.68c0.24,1.44,0.72,2.65,1.68,3.61l1.2,1.2
                       C1540.29,958.93,1540.53,961.82,1539.33,964.23z M727.61,283.44l-0.53,1.18c-0.53,0.98-0.7,2.16-0.53,3.15l0.18,1.38
                       c0.18,2.36-0.88,4.52-2.63,5.51l-1.05,0.59c-0.88,0.39-1.58,1.18-2.11,2.16l-0.53,1.18c-1.05,1.97-2.99,3.15-5.09,2.75l-1.23-0.2
                       c-1.05-0.2-1.93,0-2.81,0.39l-1.05,0.59c-1.93,0.98-4.04,0.59-5.45-1.18l-0.88-0.98c-0.7-0.79-1.58-1.38-2.63-1.57l-1.23-0.2
                       c-1.93-0.39-3.51-2.16-3.86-4.52l-0.18-1.38c-0.18-1.18-0.53-2.16-1.23-2.95l-0.88-0.98c-1.41-1.57-1.76-4.13-0.7-6.1l0.53-1.18
                       c0.53-0.98,0.7-2.16,0.53-3.15l-0.18-1.38c-0.18-2.36,0.88-4.52,2.63-5.51l1.05-0.59c0.88-0.39,1.58-1.18,2.11-2.16l0.53-1.18
                       c1.05-1.97,2.99-3.15,5.09-2.75l1.23,0.2c1.05,0.2,1.93,0,2.81-0.39l1.05-0.59c1.93-0.98,4.04-0.59,5.45,1.18l0.88,0.98
                       c0.7,0.79,1.58,1.38,2.63,1.57l1.23,0.2c1.93,0.39,3.51,2.16,3.86,4.52l0.18,1.38c0.18,1.18,0.53,2.16,1.23,2.95l0.88,0.98
                       C728.31,279.11,728.49,281.47,727.61,283.44z M880,290.05l-0.53,1.18c-0.53,0.98-0.7,2.16-0.53,3.15l0.18,1.38
                       c0.18,2.36-0.88,4.52-2.63,5.51l-1.05,0.59c-0.88,0.39-1.58,1.18-2.11,2.16l-0.53,1.18c-1.05,1.97-2.99,3.15-5.09,2.75l-1.23-0.2
                       c-1.05-0.2-1.93,0-2.81,0.39l-1.05,0.59c-1.93,0.98-4.04,0.59-5.45-1.18l-0.88-0.98c-0.7-0.79-1.58-1.38-2.63-1.57l-1.23-0.2
                       c-1.93-0.39-3.51-2.16-3.86-4.52l-0.18-1.38c-0.18-1.18-0.53-2.16-1.23-2.95l-0.88-0.98c-1.41-1.57-1.76-4.13-0.7-6.1l0.53-1.18
                       c0.53-0.98,0.7-2.16,0.53-3.15l-0.18-1.38c-0.18-2.36,0.88-4.52,2.63-5.51l1.05-0.59c0.88-0.39,1.58-1.18,2.11-2.16l0.53-1.18
                       c1.05-1.97,2.99-3.15,5.09-2.75l1.23,0.2c1.05,0.2,1.93,0,2.81-0.39l1.05-0.59c1.93-0.98,4.04-0.59,5.45,1.18l0.88,0.98
                       c0.7,0.79,1.58,1.38,2.63,1.57l1.23,0.2c1.93,0.39,3.51,2.16,3.86,4.52l0.18,1.38c0.18,1.18,0.53,2.16,1.23,2.95l0.88,0.98
                       C880.7,285.72,880.88,288.08,880,290.05z"/>
                   <g id="brujula">
                       <circle class="st13" cx="198.34" cy="216.71" r="61.51"/>
                       <path class="st14" d="M228.27,270.45L198.34,155.2L166,269.04c9.4,5.82,20.47,9.19,32.34,9.19
                           C209.21,278.23,219.41,275.4,228.27,270.45z"/>
                       <g>
                           <path d="M186.84,268.98v-27.44h3.87l8.79,13.88c2.04,3.22,3.62,6.11,4.93,8.92l0.08-0.04c-0.33-3.66-0.41-7-0.41-11.28v-11.48
                               h3.34v27.44h-3.58l-8.71-13.92c-1.91-3.05-3.75-6.19-5.13-9.16l-0.12,0.04c0.2,3.46,0.28,6.76,0.28,11.32v11.72H186.84z"/>
                       </g>
                   </g>
               </g>
               <g id="entrada" class="jardin">
                    <polyline class="st9" points="9.16,1267.28 144.64,1259.42 139.96,1373.88 9.16,1383.16"/>
                    <path class="st1" d="M88.83,1310.51l-80.12,3.53l0.91,20.62l80.12-3.53c2.65-0.12,4.7-2.35,4.58-5l-0.49-11.04
                        C93.71,1312.44,91.47,1310.39,88.83,1310.51z"/>
                    <polygon class="st3" points="144.64,1259.42 196.84,1259.42 196.84,1374.04 142.22,1374.04"/>
                </g>
                <g id="amenidades">
                    <g id="petpark" class="jardin">
                        <circle class="st3" cx="89.33" cy="1082.63" r="23.72"/>
                        <path id="petparkicon" d="M114.81,1078.49c-1.67,2.79-3.35,5.3-6.42,6.42c-2.51,0.84-5.02,1.4-7.81,1.95
                            c-1.12,5.58-2.51,11.44-3.91,17.3c-0.28,1.4-1.4,2.79-1.95,4.19c-0.28,0.56-0.56,1.4-0.56,2.23c0,5.3,0,10.6,0,15.9
                            c0,1.4,0,2.79-1.95,2.79c-2.51,0.28-3.07-0.28-3.35-2.51c-0.84-5.02-1.67-10.32-2.23-15.35c-0.28-1.4-0.56-2.23-2.23-2.51
                            c-6.98-1.12-13.67-2.23-20.37-3.63c-1.12-0.28-1.67,0.28-2.23,0.84c-1.95,2.23-4.19,3.91-6.42,5.86c-2.79,2.23-5.86,4.46-8.65,6.7
                            c-0.56,0.56-0.84,1.4-0.84,2.23c0.28,1.95,0.56,3.63,0.84,5.58c0.28,1.12,0,2.23-1.4,2.51c-1.95,0.56-3.63,0-3.91-1.4
                            c-0.84-3.91-1.4-7.81-2.23-11.72c0-0.56,0.28-1.4,0.84-1.95c1.12-1.67,2.51-3.35,3.63-5.02c0.28-0.56,0.56-1.4,0.28-1.95
                            c-2.51-6.14-2.79-12,1.12-17.86c-0.56-0.28-1.12-0.28-1.67-0.56c-5.02-1.67-8.65-5.02-11.44-9.49c-0.56-1.12-0.84-1.95,0.28-2.79
                            c1.12-0.56,1.95-0.28,2.51,0.84c3.91,6.7,9.77,9.49,17.3,8.93c9.77-0.56,19.53-0.84,29.3-1.4c1.4,0,2.23-0.56,2.51-1.95
                            c2.51-7.25,5.02-14.51,7.81-21.76c0.28-0.84,1.12-2.23,1.95-2.23c1.4-0.28,1.67,1.12,1.95,2.23c0.28,0.84,0.56,1.67,0.84,3.35
                            c0.56-0.84,1.12-1.67,1.67-2.23c1.4-1.4,2.79-0.84,3.07,0.84c0,0.56,0.28,0.84,0.28,1.4c-0.28,1.95,0.28,3.63,2.23,4.46
                            c0.84,0.28,1.4,1.12,1.67,1.95c0.56,2.23,2.23,2.51,3.91,3.35c1.95,0.84,3.63,1.95,5.58,2.79
                            C114.81,1077.65,114.81,1078.21,114.81,1078.49z"/>
                    </g>
                    <g id="deportes" class="jardin">
                        <rect x="46.32" y="881.53" class="st3" width="48.59" height="48.59"/>
                        <path d="M73.55,869.01c-1.75,0.61-3.51,1.17-4.99,2.41c-3.32,2.78-4.54,7.3-3.01,11.63c1.31,3.7,5.27,6.5,9.31,6.58
                            c5.15,0.1,9.4-3.28,10.51-8.38c0.98-4.47-1.6-9.38-6.03-11.38c-0.83-0.37-1.73-0.58-2.59-0.87
                            C75.67,869.01,74.61,869.01,73.55,869.01z"/>
                        <path d="M67.72,942.61c6.8,2.82,13.51,5.6,20.29,8.41c-1.19,2.52-2.38,4.99-3.51,7.5c-1.55,3.44-3.07,6.91-4.58,10.37
                            c-2.36,5.42,2.42,9.17,6.26,8.91c2.05-0.14,3.65-1.07,4.48-2.91c3.75-8.26,7.45-16.55,11.11-24.85c1.37-3.12,0.18-7.21-3.92-8.71
                            c-7.75-2.83-15.37-6.05-23.04-9.1c-0.16-0.06-0.31-0.15-0.56-0.28c0.69-3.49,1.38-6.98,2.11-10.64c0.96,1.06,1.75,2.11,2.71,2.97
                            c2.57,2.28,5.14,4.55,7.83,6.67c2.68,2.12,5.44,1.82,7.41-0.58c2.16-2.62,2-6.33-0.41-8.43c-2.11-1.83-4.35-3.52-6.36-5.46
                            c-3.4-3.29-5.86-7.25-7.51-11.68c-0.2-0.54-0.11-1.24,0-1.84c0.33-1.76,0.54-3.5-0.05-5.24c-1-2.95-4.06-5.17-7.28-5.34
                            c-1.8-0.1-3.45,0.29-5.13,1c-4.21,1.79-7.5,4.9-11.16,7.47c-6.31,4.44-12.52,9.02-18.75,13.56c-3.24,2.36-3.17,6.49,0.14,8.55
                            c1.9,1.18,3.7,0.79,5.42-0.46c2.89-2.1,5.79-4.2,8.68-6.3c2.92-2.12,5.84-4.24,8.77-6.36c0.31-0.22,0.63-0.42,1.12-0.75
                            c-0.53,2.68-1.01,5.17-1.51,7.65c-1.06,5.37-2.17,10.73-3.19,16.1c-0.75,3.95-1.36,7.93-2.07,11.9c-0.07,0.36-0.33,0.79-0.64,1
                            c-8.06,5.63-16.13,11.25-24.21,16.85c-1.74,1.21-3.51,2.39-5.3,3.53c-1.81,1.16-3.12,2.65-2.86,4.93
                            c0.29,2.53,1.74,4.27,4.09,5.24c2.03,0.84,3.9,0.35,5.61-0.84c5.4-3.76,10.75-7.59,16.18-11.31c5.02-3.43,10.1-6.78,15.19-10.11
                            c1.54-1.01,2.49-2.24,2.82-4.11C66.36,947.53,67.08,945.16,67.72,942.61z"/>
                        <path d="M24.81,918.9c-4.9-0.01-8.9,3.97-8.94,8.88c-0.04,4.85,3.97,9,8.87,8.96c5.06-0.04,8.97-3.8,8.97-8.95
                            C33.71,922.59,29.59,918.92,24.81,918.9z"/>
                    </g>
                    <g id="juegosyfogatero" class="jardin">
                        <rect x="39.32" y="686.53" class="st3" width="75.49" height="48.59"/>
                        <g id="juegos">
                            <path d="M96.99,729.52c1.42-0.71,2.84-1.42,4.26-1.77c2.48-1.06,4.61,0,5.32,2.84c1.06,6.03,2.48,12.06,3.55,18.1
                                c0,0.71,0,1.42,0,2.48c-0.35,0-0.35,0.35-0.71,0.35c-1.42-1.42-2.84-2.84-3.9-4.26c-1.42-1.42-2.48-2.84-3.55-4.61
                                c-0.71-1.06-0.71-2.48-1.06-3.55c-0.35-1.06-0.35-1.77-0.71-2.84c-0.71,0.35-1.42,0.71-2.13,0.71c-0.35-0.71-1.06-1.77-1.42-2.48
                                c-4.26-6.74-10.65-11-18.1-13.13c-1.42-0.35-2.84-1.06-4.26-2.13c-2.84-2.13-6.03-4.61-8.87-6.74c0,0-0.35-0.35-0.71-0.35
                                c0,3.55,0,6.74,0,10.29c1.42,0,2.48,0,3.9,0.35c7.45,0.71,14.19,2.84,19.87,7.81c2.84,2.13,4.61,4.97,6.39,7.81
                                c2.84,4.61,5.68,9.23,9.58,13.13c6.03,6.03,13.13,9.23,22,9.23c1.06,0,2.13,0,2.84,0.35c2.13,0.35,3.55,2.13,3.55,4.26
                                c0,1.42,0,2.84,0,4.26c0,2.48-1.77,4.26-4.61,4.61c-5.68,0.71-11.35,0.35-17.03-1.42c-5.68-1.77-10.29-4.97-14.19-9.23
                                c-3.55-3.9-6.74-8.16-9.23-12.77c-2.84-4.61-6.39-8.52-11.35-11c-3.9-2.13-7.81-2.84-12.42-3.55c0,0.35,0,0.71,0,1.42
                                c0,11.35,0,22.71,0,34.06c0,2.13-0.71,2.48-2.48,2.48c-1.06,0-2.13,0-2.84,0c-1.42,0-2.13-0.71-2.13-2.13c0-5.68,0-11.35,0-17.03
                                c0-0.35,0-0.71,0-1.42c-7.45,0-14.9,0-22.36,0c0,0.35,0,0.71,0,1.06c0,5.68,0,11,0,16.68c0,2.13-0.71,2.48-2.48,2.48
                                c-1.06,0-1.77,0-2.84,0c-1.77,0-2.48-0.71-2.48-2.48c0-12.06,0-24.48,0-36.55c0-10.65,0-21.29,0-31.94c0-1.77,0.71-2.84,1.77-3.9
                                c4.97-3.9,9.58-7.81,14.55-11.71c1.77-1.42,3.19-1.42,4.97,0c4.97,3.9,9.58,7.81,14.55,11.71c1.42,1.06,2.13,2.48,1.77,4.26
                                c0,0.71,0.35,1.42,0.71,1.77c4.97,3.55,9.58,7.1,14.55,10.65c0.71,0.35,1.06,0.35,1.77,0.35c2.13-0.71,4.26-1.06,6.39-1.77
                                c0.71,0,1.06-0.71,1.42-1.06c3.9-4.97,7.45-10.29,11.35-15.26c1.06-1.42,2.13-1.77,3.55-1.06c1.06,0.35,2.13,1.77,1.77,2.84
                                c0,0.71-0.35,1.42-0.71,1.77c-3.55,4.97-7.1,9.94-10.65,14.9c-0.35,0.71-0.71,1.06-0.35,1.77
                                C95.22,722.07,95.92,725.62,96.99,729.52z M35.25,733.07c7.45,0,14.9,0,22.36,0c0-2.84,0-5.68,0-8.52c-7.45,0-14.9,0-22.36,0
                                C35.25,727.39,35.25,730.23,35.25,733.07z M35.25,747.62c7.45,0,14.9,0,22.36,0c0-2.84,0-5.68,0-8.16c-7.45,0-14.9,0-22.36,0
                                C35.25,741.94,35.25,744.78,35.25,747.62z"/>
                            <path d="M77.12,707.52c0-3.55,2.84-6.74,6.74-6.74c3.55,0,6.74,3.19,6.74,6.74c0,3.55-3.19,6.74-6.74,6.74
                                C79.96,714.26,77.12,711.07,77.12,707.52z"/>
                            <path d="M109.41,729.17c3.9,3.19,7.81,6.03,11.35,9.23c1.42,1.06,1.42,3.19,0.35,4.61
                                c-1.06,1.42-3.19,1.77-4.61,0.71c-1.77-1.06-3.19-2.48-4.97-3.9c-0.35,0-0.35-0.35-0.35-0.71
                                C110.47,735.91,109.76,732.72,109.41,729.17C109.05,729.17,109.05,729.17,109.41,729.17z"/>
                        </g>
                    </g>
                    <g id="alberca" class="jardin">
                        <circle class="st3" cx="68.64" cy="523.1" r="23.72"/>
                        <path d="M92.23,555.14c-1.99,0.98-3.59,2.41-5.72,2.7c-2.34,0.32-4.6,0.16-6.67-1.15c-1.92-1.21-3.88-2.35-6.11-2.89
                            c-5.47-1.32-10.66-0.69-15.43,2.4c-2.09,1.36-4.31,1.98-6.8,1.73c-1.18-0.12-2.27-0.45-3.3-1.03c-1.56-0.87-3.12-1.74-4.66-2.6
                            c5.12-5.13,10.3-10.32,15.55-15.58c-0.67-0.65-1.3-1.25-1.93-1.85c-1.76-1.68-3.44-3.44-5.28-5.03
                            c-3.39-2.93-7.42-4.44-11.86-4.87c-1.65-0.16-3.31-0.23-5.01-0.34c0-3.92,0-7.88,0-11.85c1.4,0,2.79-0.06,4.17,0.01
                            c3.62,0.18,7.2,0.67,10.64,1.88c4.33,1.52,7.96,4.1,11.17,7.31c10.28,10.27,20.55,20.56,30.83,30.84
                            C91.9,554.91,92.01,554.98,92.23,555.14z"/>
                        <path d="M20.54,579.78c0-3.39,0-6.54,0-9.7c0.69-0.08,1.39-0.04,1.99-0.26c1.18-0.42,2.37-0.9,3.45-1.52
                            c2.05-1.17,4.12-2.26,6.46-2.69c4.8-0.89,9.39-0.39,13.67,2.12c0.47,0.27,0.93,0.55,1.39,0.83c3.38,2.02,6.77,2.03,10.15,0.03
                            c2.17-1.29,4.36-2.5,6.88-2.97c4.9-0.92,9.54-0.35,13.88,2.25c1.22,0.73,2.49,1.5,3.84,1.86c2.5,0.67,4.99,0.39,7.26-1.01
                            c1.82-1.12,3.67-2.23,5.76-2.77c5.46-1.42,10.67-0.89,15.53,2.14c1.22,0.76,2.45,1.51,3.89,1.76c0.65,0.11,1.32,0.16,2.02,0.25
                            c0,3.15,0,6.32,0,9.54c-1.95,0.01-3.82-0.25-5.66-0.8c-1.93-0.58-3.66-1.57-5.35-2.63c-2.22-1.4-4.65-1.71-7.13-1.13
                            c-1.22,0.29-2.39,0.94-3.5,1.57c-1.94,1.11-3.91,2.13-6.12,2.56c-4.86,0.95-9.51,0.46-13.84-2.12c-0.54-0.32-1.06-0.65-1.61-0.96
                            c-3.22-1.81-6.46-1.83-9.66,0.01c-2.22,1.28-4.42,2.57-6.98,3.07c-4.82,0.93-9.42,0.45-13.74-2.03c-1.26-0.72-2.5-1.56-3.87-1.97
                            c-2.62-0.78-5.22-0.54-7.62,0.96c-1.98,1.24-4,2.41-6.31,2.89C23.79,579.36,22.2,579.53,20.54,579.78z"/>
                        <path d="M20.53,601.23c0-3.21,0-6.35,0-9.54c0.5-0.04,0.99-0.06,1.48-0.11c1.42-0.15,2.66-0.78,3.85-1.52
                            c1.97-1.23,4.02-2.28,6.31-2.74c4.95-0.99,9.68-0.5,14.08,2.13c0.39,0.23,0.79,0.46,1.18,0.7c3.43,2.08,6.88,2.1,10.31,0.04
                            c2.22-1.33,4.49-2.54,7.07-2.98c4.77-0.82,9.3-0.27,13.53,2.25c1.21,0.72,2.44,1.51,3.77,1.87c2.61,0.71,5.18,0.45,7.55-1.05
                            c1.78-1.12,3.6-2.18,5.66-2.7c5.28-1.35,10.34-0.93,15.09,1.91c1.5,0.89,2.96,1.87,4.76,2.08c0.51,0.06,1.03,0.09,1.57,0.13
                            c0,3.18,0,6.33,0,9.54c-1.53,0.08-3-0.12-4.46-0.44c-2.07-0.46-3.96-1.35-5.76-2.47c-1.33-0.82-2.67-1.61-4.28-1.78
                            c-2.2-0.23-4.31-0.04-6.25,1.16c-1.91,1.18-3.84,2.34-6.05,2.89c-5.24,1.29-10.27,0.86-14.97-1.97c-0.45-0.27-0.89-0.54-1.34-0.8
                            c-3.27-1.88-6.57-1.91-9.82-0.02c-2.31,1.34-4.62,2.65-7.29,3.11c-4.72,0.81-9.23,0.32-13.43-2.14c-1.34-0.78-2.6-1.75-4.17-2.06
                            c-2.48-0.49-4.88-0.37-7.1,1c-1.98,1.22-4,2.38-6.29,2.95C23.91,601.06,22.27,601.29,20.53,601.23z"/>
                        <path d="M90.31,538.73c-6.61,0.01-12.02-5.35-12.04-11.93c-0.01-6.69,5.31-12.06,12-12.09c6.67-0.03,12.06,5.34,12.06,12.02
                            C102.34,533.36,96.97,538.72,90.31,538.73z"/>
                    </g>
                    <g id="casaclub" class="jardin">
                        <rect x="35.25" y="400.46" class="st3" width="67.07" height="37.93"/>
                        <path d="M94.36,366.26c-0.44-14.85-12.61-26.76-27.56-26.76s-27.12,11.91-27.56,26.76
                            c-0.03,0.26-0.04,0.53-0.02,0.83c0,2.48,0.33,4.88,0.95,7.17c5.08,26.1,26.64,40.18,26.64,40.18s21.56-14.07,26.64-40.18
                            c0.61-2.29,0.95-4.69,0.95-7.17C94.4,366.79,94.39,366.51,94.36,366.26z M66.79,383.2c-8.9,0-16.11-7.21-16.11-16.11
                            c0-8.9,7.21-16.11,16.11-16.11s16.11,7.21,16.11,16.11C82.91,375.98,75.69,383.2,66.79,383.2z"/>
                    </g>
                </g>
               </svg>                    
                    <!-- END: SVG #svgmap -->

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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
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
    </div>  <!-- /#main.container-fluid -->

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
	<!-- <script src="assets/js/lotes-oriente.js"></script> -->
<script>
    <?php
    // array Lotes para mapa
    $sql = "SELECT * FROM lotesvia";
    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));
    //create an array
    $lotesarray = array();
    while($row =mysqli_fetch_assoc($result)){
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
    for(let i=0; i<lotes.length;i++){
        let item = lotes[i].estatus;
        if(item=="1"){ // vendido
            // $("[id*='lote_'"+(i+1)+"]")
            $("#lote_"+(i+1)).addClass('vendido');
            console.log(i, " : VENDIDO", item, "CAMBIO DE CLASE", lotes[i].cls);

        } // else{console.log(i, " : ", lotes[i]);}
    }
	// [0] click en lote (svg)
	$("[id*='lote_']").on('click', function(e){
		e.preventDefault();
		let num = $(this).attr('id').split("_");
		_curr = parseInt(num[1]) || (Math.floor(Math.random()*10));
		// $('#exampleModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
		mostrarLote(_curr);
		// open Modal
		// myModal.show();
	});
	// [00] click en lotePrev y loteNext
	$("#lotePrev, #loteNext").on('click', function(e){
		e.preventDefault();
		console.log( $(this).attr('id'), lotes.length, _curr );
		if ($(this).attr('id') == "loteNext"){
			_curr = (_curr==122)?122:_curr+1;
		} else{
			_curr = (_curr==1)?1:_curr-1;
		}
		mostrarLote(_curr);
	});
    // [0] click en render (svg)
	$("svg .jardin").on('click', function(e){
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
	function mostrarLote(_curr){
        obj = lotes[_curr-1];
        console.log("fn::mostrarLote",_curr, obj);
		if(obj!=undefined){
            // Lote disponible
            if(obj.estatus=="0"){ // 0 es Disponible
                let _class = obj.cls;
                $("#lvnId").text(obj.id);
                $("#lvnMzn").text(obj.mzn);
                $("#lvnCateg").text(obj.categ);
                $("#lvnMt").text(obj.mt);
                $("#estatus").text(obj.estatus);
                // PRECIOS
                $("#lvnPM2").text(obj.lvnPM2);
                $("#lvnP18").text(obj.lvnP18);

                $('#lvnCategClr, #arrowCheck').attr('class','').addClass(_class);
                $('#arrowCheck').addClass('bx-tada');
                $('#minimap').attr('class','').addClass('mmap_'+obj.id);
                if(obj.id < 123){
                    $('#minimap').addClass('mmap-show');
                }
                console.log("LOTE_ = ", obj, '_class = '+_class, "_curr = "+_curr);
            } else{

            }
		}
	}
    function renderJardin(who){
		// IMG render renderAmenidad assets/img/amenidades [jpg]
		$("#renderAmenidad").attr("src", "assets/img/amenidades/or_"+who+".png");
		let _txt = (who!="alberca")?((who=="terraza")?"terraza 1":"terraza Casa club"):"alberca";
		_txt = (who=="petpark" || who=="juegosyfogatero")?((who=="petpark")?"pet park":"juegos y fogatero"):_txt;
		_txt = (who=="deportes") ? "área deportiva" : _txt;
		_txt = (who=="entrada") ? "a un costado, la puerta de acceso" : _txt;
		$("#wAmenidad").text(_txt);
	}

}); // JQuery	    
</script>

</body>
