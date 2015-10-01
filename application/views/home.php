<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Larry Tang</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../assets/js/home.js"></script>
    <link rel="shortcut icon" type="image/png" href="../../assets/images/orangeDt.png"/>
</head>
<body>
<div id="loader-wrapper">
    <div id="loaderContainer">
        <img id="loadingLogo" src="../../assets/images/dtLogo.png">
        <div id="loader">
        </div>
    </div>

</div>

<div id="mainContainer" hidden>
    <img id='loaderImg' src='../../assets/images/background.jpg'/>
    <div id="mainHome" class="jumbotron">
        <div id="navContainer" class="activeHeader">
            <img id="transLogo" src="../../assets/images/dtLogo.png">
            <nav id="initNavList">
                <a href="#mainHome"> Home </a>
                <a href="#aboutMeDiv"> About </a>
                <a href="#workDiv"> Work</a>
                <a href="#contactDiv"> Contact</a>
            </nav>
        </div>
        <div id="mainHomeContainer" class="center-block">
            <div class="mainHomeWrapper">
                <h1 id="mainName" >Larry Tang</h1>
            </div>
            <div class="mainHomeWrapper">
                <h2 id="subName"> Addicted To Life  </h2>
            </div>
        </div>

    </div>
    <div id="fixedHeader" class="hide" >
        <img id="orangeLogo" src="../../assets/images/orangeDt.png">
        <nav id="scrollNavList">
            <a href="#mainHome"> Home </a>
            <a href="#aboutMeDiv"> About </a>
            <a href="#workDiv"> Work</a>
            <a href="#contactDiv"> Contact</a>
        </nav>
    </div>

    <div class='content'>

        <div id='aboutMeDiv' class="contentDiv center-block">
            <span class="contentTitle"> - About </span>
            <p> I am a 3rd year undergraduate student majoring in Software Engineering at the University of Waterloo. I've done a few internships as full-stack developer in the past two years. I will describe myself as an all-round web developer.
                I enjoy implementing useful and exciting features. At the same time, I also like spending time on small front-end details for a better user experience. I've gained a lot of experience with PHP, Javascript, HTML and CSS from my  past internships.

                I am interested in mobile, game development as well. I hope I can try and explore new and challenging areas before I graduate. My ultimate goal for being a software engineer / web developer is to make daily life easier and happier.
                <p> Hailing from Beijing, China; I moved to Canada to further my education and pursue a fulfilling career. That was a big move, but I believe I’ve made the most of it so far. And I really do enjoy the life here. I love travelling, music and
                all kinds of TV series. Also, I am a huge Sushi Lover! Can't wait for my next internship so I can learn more, travel and explore more Sushi places.</p>
        </div>

        <div id='workDiv' class="contentDiv center-block">
            <span class="contentTitle"> - Work </span>

            <p>  <img id="airZingLogo" src="../../assets/images/airZingLogo.png"> AirZing.com -  a website that helps you to find cool people on the same flight and never fly alone. You will get matched together with other people who booked the same flight.
                If you haven't book a ticket yet, Don't worry. AirZing will help you to find people who have the same destination and plan to travel around the same time with you.  Beta version at the moment.</p>
        </div>

        <div id='contactDiv' class="contentDiv center-block">
            <span class="contentTitle"> - Contact </span>

            <p>Email: <a href="mailto:d8tang@outlook.com"> d8tang@outlook.com</a>  Feel free to shoot me an Email! </p>
            <p>Address: 72 Marshall Street, Waterloo, ON, Canada N2J 2T4 </p>
            <p id="contactIcon">
                <a href="https://github.com/da-tang/" target="_blank"> <i class="fa fa-github"></i> </a>
                <a href="https://www.linkedin.com/profile/view?id=ADEAAA_4Pf8B7PmuIf3kxsHssVvm9BrekfC6uUI&authType=NAME_SEARCH&authToken=jYbB&locale=en_US&srchid=2679270391443680773031&srchindex=1&srchtotal=121&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A2679270391443680773031%2CVSRPtargetId%3A267927039%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH" target="_blank"> <i class="fa fa-linkedin-square"></i></a>
                <a href="https://plus.google.com/118186918078323117030"><i class="fa fa-google-plus-square"></i></a>
            </p>

        </div>
        <div id="footerContainer">
            <div id="footerContent" class="text-right">
                <i class="fa fa-copyright"></i> 2015 | Da Tang
            </div>
        </div>
    </div>



</div>



</body>
</html>