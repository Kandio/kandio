<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kandio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.fullPage.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Source+Sans+Pro:400,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery.fullPage.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>-->
    <script src="js/app.js"></script>
</head>
<body>
<div class="fp-bg">
    <div class="s1 tr active"></div>
    <div class="s2"></div>
    <div class="s3"></div>
    <div class="s4"></div>
    <div class="s5"></div>
    <div class="s6"></div>
    <div class="s7"></div>
</div>
<div id="order_from">
    <div class="overlay">
        <div class="close"></div>
        <div class="content container-fluid">
            <div class="row">
                <div class="text col-sm-5">
                    <form method="post">
                        <div class="logo">
                            <svg width="108px" height="18px" viewBox="0 0 108 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" fill-opacity="0.247961957">
                                    <g id="Kandio-logo-mobile-header" fill-rule="nonzero" fill="#1B2C42">
                                        <g id="KanDiod">
                                            <path d="M17.4852911,17.710754 L11.2643489,17.710754 L7.15408352,11.2583436 L5.19893026,13.4165637 L5.19893026,17.7330037 L0,17.7330037 L0,0.177997528 L5.19893026,0.177997528 L5.19893026,7.20889988 L11.06439,0.177997528 L17.0631557,0.177997528 L10.68669,7.29789864 L17.4852911,17.710754 Z M33.4597819,1.71322621 C34.8372763,2.82571075 35.5260235,4.40543881 35.5260235,6.407911 L35.5260235,17.710754 L29.193993,17.710754 L29.193993,15.7972806 C28.6607694,16.5092707 27.9720222,17.0432633 27.1055338,17.421508 C26.2390455,17.7997528 25.2392512,18 24.106151,18 C22.262086,18 20.8401563,17.5105068 19.7959268,16.5092707 C18.7516972,15.5080346 18.2184736,14.1953028 18.2184736,12.526576 C18.2184736,10.8355995 18.7961325,9.54511743 19.9292327,8.6328801 C21.0623329,7.72064277 22.7286567,7.25339926 24.9282041,7.23114957 L29.193993,7.23114957 L29.193993,7.16440049 C29.193993,6.43016069 28.9273812,5.87391842 28.4163752,5.47342398 C27.9053693,5.07292954 27.1499691,4.87268232 26.1723925,4.87268232 C25.4614277,4.87268232 24.6615923,4.98393078 23.7284509,5.184178 C22.7953096,5.40667491 21.8621683,5.71817058 20.9290269,6.11866502 L19.3293561,1.82447466 C22.262086,0.622991347 25.06151,0.022249691 27.7054104,0.022249691 C30.1715696,0.022249691 32.0822876,0.600741656 33.4597819,1.71322621 Z M28.0386752,13.3053152 C28.5718988,12.9938195 28.9495988,12.5488257 29.193993,11.9925834 L29.193993,10.4128554 L26.2612631,10.4128554 C24.9504217,10.4128554 24.3061099,10.946848 24.3061099,12.0370828 C24.3061099,12.5933251 24.4838511,13.0160692 24.8171158,13.3275649 C25.1503806,13.6168109 25.6391689,13.7725587 26.2612631,13.7725587 C26.905575,13.7725587 27.5054516,13.6168109 28.0386752,13.3053152 Z M54.2110677,0.845488257 C55.1664267,1.37948084 55.8996091,2.15822002 56.4106151,3.15945612 C56.9438387,4.16069221 57.1882329,5.31767614 57.1882329,6.6526576 L57.1882329,17.710754 L50.7451142,17.710754 L50.7451142,8.52163164 C50.7451142,7.67614339 50.5229377,6.98640297 50.056367,6.47466007 C49.5897963,5.96291718 48.9899198,5.69592089 48.2567373,5.69592089 C47.3902489,5.71817058 46.6792841,6.02966625 46.1682781,6.6526576 C45.6572722,7.27564895 45.3906604,8.07663782 45.3906604,9.07787392 L45.3906604,17.6885043 L38.9475417,17.6885043 L38.9475417,0.266996292 L45.412878,0.266996292 L45.412878,2.9592089 C46.0349722,2.00247219 46.81259,1.26823239 47.7235137,0.756489493 C48.6344374,0.244746601 49.7231022,0 50.945073,0 C52.1670438,0.022249691 53.2779264,0.311495674 54.2110677,0.845488257 Z M72.1851471,1.09023486 C73.6292944,1.82447466 74.7401769,2.87021014 75.5400123,4.20519159 C76.3398478,5.54017305 76.7175478,7.09765142 76.7175478,8.83312732 C76.7175478,10.5686032 76.3176301,12.1260816 75.495577,13.4833127 C74.6957416,14.8405439 73.5626414,15.8640297 72.0962765,16.5982695 C70.6299115,17.3325093 68.9413701,17.6885043 67.0306521,17.6885043 L60.3209216,17.6885043 L60.3209216,0 L67.2083933,0 C69.0968936,0 70.7632174,0.355995056 72.1851471,1.09023486 Z M70.0522526,11.5253399 C70.6076939,10.8800989 70.8743057,10.0346106 70.8743057,8.96662546 C70.8743057,7.8986403 70.5854762,7.05315204 69.9855997,6.38566131 C69.3857231,5.71817058 68.630323,5.40667491 67.674964,5.40667491 L65.8753343,5.40667491 L65.8753343,12.4820766 L67.8527052,12.4820766 C68.7636289,12.5043263 69.4968114,12.170581 70.0522526,11.5253399 Z M79.6724954,0.289245983 L86.1378317,0.289245983 L86.1378317,17.710754 L79.6724954,17.710754 L79.6724954,0.289245983 Z M103.423164,1.11248455 C104.867311,1.84672435 106.000411,2.89245983 106.800247,4.22744129 C107.600082,5.56242274 108,7.1421508 108,8.94437577 C108,10.7243511 107.600082,12.2818294 106.800247,13.6390606 C106.000411,14.9962917 104.867311,16.0420272 103.423164,16.776267 C101.979017,17.5105068 100.268258,17.8887515 98.335322,17.8887515 C96.4023863,17.8887515 94.6916272,17.5105068 93.2252623,16.776267 C91.7588973,16.0420272 90.6257972,14.9962917 89.8259617,13.6390606 C89.0261263,12.2818294 88.6262086,10.7243511 88.6262086,8.94437577 C88.6262086,7.1421508 89.0261263,5.58467244 89.8259617,4.22744129 C90.6257972,2.89245983 91.7588973,1.84672435 93.2252623,1.11248455 C94.6916272,0.378244747 96.3801687,0 98.335322,0 C100.290475,0 101.979017,0.378244747 103.423164,1.11248455 Z M96.1802098,6.18541409 C95.6025509,6.8974042 95.3137215,7.83189122 95.3137215,8.98887515 C95.3137215,10.1681088 95.6025509,11.1025958 96.1802098,11.8145859 C96.7578688,12.526576 97.5132689,12.8825711 98.4908455,12.8825711 C99.4239868,12.8825711 100.179387,12.526576 100.757046,11.8145859 C101.334705,11.1025958 101.623534,10.1681088 101.623534,8.98887515 C101.623534,7.83189122 101.334705,6.8974042 100.757046,6.18541409 C100.179387,5.47342398 99.4239868,5.11742892 98.4908455,5.11742892 C97.5132689,5.11742892 96.7578688,5.47342398 96.1802098,6.18541409 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h2>Order Demo</h2>
                        <p>All your questions can be solved in a minute. Write us and see all Kandio features.</p>
                        <div class="line">
                            <input type="text" name="name" value="" placeholder="Type your name">
                        </div>
                        <div class="line">
                            <input type="tel" name="phone" value="" placeholder="Phone number">
                        </div>
                        <div class="line">
                            <input type="text" name="email" value="" placeholder="E-mail">
                        </div>
                        <div class="line">
                            <textarea name="text" value="" placeholder="Your message (if any)"></textarea>
                        </div>
                        <div class="line">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-7 video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qc-yf626wVY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="order_success">
    <div class="overlay">
        <div class="close"></div>
        <div class="content container-fluid">
            <div class="row">
                <div class="text col-12">
                    <h2>Watch Demo</h2>
                    <div class="video">
                        <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <use xlink:href="#play_btn" x="0" y="0"></use>
                        </svg>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qc-yf626wVY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <p>
                        And you know what? You can start using Kandio right now!
                        Click the button below and test all features!
                    </p>
                    <a href="#" class="btn btn-go">Start Using</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fullpage">
    <div class="section tr-none">
        <section id="main">
            <div class="overlay">
                <div class="top">
                    <div class="menu-trigger">
                        <div class="trigger">
                            <svg width="17px" class="burg" height="13px" viewBox="0 0 17 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Burger-white" fill="#FFFFFF">
                                        <path d="M0,7.85714286 L0,6.14285714 L17,6.14285714 L17,7.85714286 L0,7.85714286 Z M0,2.71428571 L0,1 L17,1 L17,2.71428571 L0,2.71428571 Z M0,13 L0,11.2857143 L17,11.2857143 L17,13 L0,13 Z"></path>
                                    </g>
                                </g>
                            </svg>
                            <svg width="14px" class="close" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="close-icon" transform="translate(0.000000, -5.000000)" fill="#0B7FE5">
                                        <g transform="translate(0.000000, 5.000000)">
                                            <polygon points="13.96875 1.421875 8.390625 7 13.96875 12.578125 12.5625 13.984375 6.984375 8.40625 1.40625 13.984375 0 12.578125 5.578125 7 0 1.421875 1.40625 0.015625 6.984375 5.59375 12.5625 0.015625"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="30" viewBox="0 0 180 30">
                                <path fill="#FFF" fill-rule="nonzero" d="M29.142 29.518H18.774l-6.85-10.754-3.26 3.597v7.194H0V.297h8.665v11.718L18.44.297h9.998L17.81 12.163l11.331 17.355zM55.766 2.855c2.296 1.855 3.444 4.487 3.444 7.825v18.838H48.657v-3.19c-.89 1.187-2.037 2.077-3.481 2.708-1.444.63-3.11.964-5 .964-3.073 0-5.442-.816-7.183-2.485-1.74-1.668-2.629-3.856-2.629-6.637 0-2.819.963-4.97 2.851-6.49 1.889-1.52 4.666-2.299 8.332-2.336h7.11v-.111c0-1.224-.445-2.151-1.296-2.819-.852-.667-2.111-1-3.74-1-1.185 0-2.518.185-4.074.518-1.555.371-3.11.89-4.665 1.558L32.216 3.04C37.103 1.038 41.769.037 46.176.037c4.11 0 7.294.964 9.59 2.818zm-9.035 19.32c.889-.519 1.518-1.26 1.926-2.187v-2.633h-4.888c-2.185 0-3.259.89-3.259 2.707 0 .927.296 1.631.852 2.15.555.483 1.37.742 2.407.742 1.074 0 2.073-.26 2.962-.778zM90.351 1.41c1.593.89 2.815 2.188 3.667 3.857.888 1.668 1.296 3.597 1.296 5.822v18.43H84.575V14.203c0-1.41-.37-2.559-1.148-3.412-.777-.853-1.777-1.298-3-1.298-1.443.037-2.628.556-3.48 1.595-.852 1.038-1.296 2.373-1.296 4.042v14.35H64.913V.446h10.775v4.487c1.037-1.595 2.333-2.818 3.851-3.671C81.057.408 82.872 0 84.91 0c2.036.037 3.888.52 5.443 1.41zm29.958.408c2.406 1.224 4.258 2.967 5.591 5.192 1.333 2.225 1.963 4.82 1.963 7.713 0 2.892-.667 5.488-2.037 7.75-1.333 2.262-3.222 3.968-5.666 5.192-2.443 1.224-5.258 1.817-8.442 1.817h-11.183V0h11.479c3.147 0 5.925.593 8.295 1.817zm-3.555 17.392c.925-1.076 1.37-2.485 1.37-4.265 0-1.78-.482-3.189-1.481-4.301-1-1.113-2.26-1.632-3.851-1.632h-3v11.792h3.296c1.518.038 2.74-.519 3.666-1.594zM132.787.482h10.776v29.036h-10.776V.482zm39.585 1.372c2.407 1.224 4.295 2.967 5.628 5.192 1.333 2.225 2 4.858 2 7.861 0 2.967-.667 5.563-2 7.825-1.333 2.262-3.221 4.005-5.628 5.228-2.407 1.224-5.258 1.855-8.48 1.855-3.221 0-6.073-.63-8.517-1.855-2.444-1.223-4.332-2.966-5.665-5.228-1.333-2.262-2-4.858-2-7.825 0-3.003.667-5.6 2-7.861 1.333-2.225 3.221-3.968 5.665-5.192C157.82.63 160.634 0 163.892 0c3.259 0 6.073.63 8.48 1.854zM160.3 10.31c-.962 1.187-1.444 2.744-1.444 4.672 0 1.966.482 3.523 1.444 4.71.963 1.187 2.222 1.78 3.851 1.78 1.556 0 2.815-.593 3.777-1.78.963-1.187 1.445-2.744 1.445-4.71 0-1.928-.482-3.485-1.445-4.672-.962-1.187-2.221-1.78-3.777-1.78-1.629 0-2.888.593-3.85 1.78z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#hiw">How it works</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Karriär</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <a href="#" class="btn btn-demo">
                            <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href="#play_btn" x="0" y="0" />
                            </svg>
                            <span>Book a Demo</span>
                        </a>
                    </div>
                    <div class="button">
                        <a href="http://app.kandio.se/#!/sign-in" target="_blank" class="btn btn-login">
                                <span class="icon">
                                    <svg width="13px" height="13px" viewBox="0 0 13 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Login-white" fill="#FFFFFF">
                                                <path d="M13,13 L0,13 C0,12.4131915 0.0225692187,11.9618071 0.0677083333,11.6458333 C0.157986562,11.1944422 1.07203992,10.6414963 2.80989583,9.98697917 C3.08073052,9.89670094 3.40798419,9.78385484 3.79166667,9.6484375 C4.31076648,9.46788104 4.61545094,9.32682342 4.70572917,9.22526042 C4.7960074,9.12369741 4.84114583,8.82465526 4.84114583,8.328125 L4.84114583,8.125 C4.84114583,7.85416531 4.73958435,7.58897699 4.53645833,7.32942708 C4.33333232,7.06987717 4.17534779,6.61285049 4.0625,5.95833333 C4.01736089,5.73263776 3.94965323,5.55208401 3.859375,5.41666667 C3.76909677,5.28124932 3.6788199,5.0104187 3.58854167,4.60416667 C3.52083299,4.40104065 3.51519069,4.20920229 3.57161458,4.02864583 C3.62803848,3.84808938 3.65625,3.73524328 3.65625,3.69010417 C3.61111089,3.32899125 3.56597245,2.95659914 3.52083333,2.57291667 C3.47569422,2.05381685 3.70138641,1.49522868 4.19791667,0.897135417 C4.69444693,0.299042148 5.46180036,0 6.5,0 C7.53819964,0 8.30555307,0.299042148 8.80208333,0.897135417 C9.29861359,1.49522868 9.52430578,2.05381685 9.47916667,2.57291667 C9.43402755,2.95659914 9.38888911,3.32899125 9.34375,3.69010417 C9.34375,3.73524328 9.37196152,3.84808938 9.42838542,4.02864583 C9.48480931,4.20920229 9.47916701,4.40104065 9.41145833,4.60416667 C9.3211801,5.0104187 9.23090323,5.28124932 9.140625,5.41666667 C9.05034677,5.55208401 8.98263911,5.73263776 8.9375,5.95833333 C8.82465221,6.61285049 8.66666768,7.06987717 8.46354167,7.32942708 C8.26041565,7.58897699 8.15885417,7.85416531 8.15885417,8.125 C8.15885417,8.80208672 8.22656182,9.18576344 8.36197917,9.27604167 C8.40711828,9.32118078 8.96006414,9.53558836 10.0208333,9.91927083 C10.0659724,9.94184039 10.1223955,9.96440961 10.1901042,9.98697917 C11.9279601,10.6414963 12.8420134,11.1944422 12.9322917,11.6458333 L13,13 Z" id="login-icon"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            <span class="txt">Login</span>
                        </a>
                    </div>
                </div>
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-sm-5 text">
                            <h1>Find talents</h1>
                            <p>where you never though to find them</p>
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="play_btn" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g fill="#FFFFFF">
                                            <path d="M42.5,85 C19.0278981,85 0,65.9721019 0,42.5 C0,19.0278981 19.0278981,0 42.5,0 C65.9721019,0 85,19.0278981 85,42.5 C85,65.9721019 65.9721019,85 42.5,85 Z M59,42.5 L33,28 L33,57 L59,42.5 Z" id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span>Book a Demo</span></a>
                            <div class="scroll-more">
                                <a href="#">
                                    Scroll to learn more
                                    <svg width="13px" height="15px" viewBox="0 0 13 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Scroll-down" fill="#FFFFFF">
                                                <g id="Group-3">
                                                    <path d="M4.5,8.42893219 L4.5,0 L7.5,0 L7.5,8.53553391 L10.0355339,6 L12.1066017,8.07106781 L6.07106781,14.1066017 L6.05330086,14.0888348 L6.03553391,14.1066017 L9.32587341e-15,8.07106781 L2.07106781,6 L4.5,8.42893219 Z" id="Combined-Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7 img-wrap">
                            <img src="img/woman-floater@2x.png" class="ppl">
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/oval_main_screen.svg" class="main-oval">
        </section>
    </div>
    <div class="section">
        <section id="passive">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="text col-sm-5">
                            <h2>Nå passiva kandidater</h2>
                            <div class="line"></div>
                            <p>Gå utanför de traditionella kanalerna och hitta <br>kandidater på medier som de faktiskt använder, <br>bade passiva och aktiva.</p>
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href="#play_btn" x="0" y="0" />
                                </svg>
                                <span>Book a Demo</span></a>
                        </div>
                        <div class="col-sm-7 img-wrap">
                            <img src="img/passive-candidate@2x.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section">
        <section id="objectives">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="text col-sm-5">
                            <h2>Målstyrning</h2>
                            <div class="line"></div>
                            <p>Rikta dina annonser baserat på bl.a. demografi, <br>intressen och surfvanor.</p>
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href="#play_btn" x="0" y="0" />
                                </svg>
                                <span>Book a Demo</span></a>
                        </div>
                        <div class="col-sm-7 img-wrap">
                            <img src="img/targeted-mails@2x.png">
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/ovals-mailstyrning.svg" class="main-oval">
        </section>
    </div>
    <div class="section">
        <section id="iphone">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="text col-sm-5">
                            <h2>Automatisk<br> optimering</h2>
                            <div class="line"></div>
                            <p>Med hjälp av förutspående analys och<br> programmatisk budgivning vet vi när, var och hur vi<br> ska annonsera för bäst resultat och lägst kostnad.</p>
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href="#play_btn" x="0" y="0" />
                                </svg>
                                <span>Book a Demo</span></a>
                        </div>
                        <div class="col-sm-7 img-wrap">
                            <div class="shadow">
                                <img src="img/iphone@2x.png">
                                <svg width="322px" height="640px" viewBox="0 0 322 640" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter id="dropshadow" height="100%">
                                            <feGaussianBlur in="SourceAlpha" stdDeviation="30"/>
                                            <feOffset dx="-40" dy="0" result="offsetblur"/>
                                            <feComponentTransfer>
                                                <feFuncA type="linear" slope="0.36"/>
                                            </feComponentTransfer>
                                            <feMerge>
                                                <feMergeNode/>
                                                <feMergeNode in="SourceGraphic"/>
                                            </feMerge>
                                        </filter>
                                    </defs>

                                    <path fill="#4741A7" d="M319.658527,226.322472 C319.946501,226.303659 320.199253,226.296958 320.449553,226.268739 C321.488558,226.151736 321.955097,225.64597 321.9929,224.597971 C322.00219,224.340514 321.99561,224.082541 321.99561,223.824826 C321.995352,197.496905 321.994964,171.168984 321.994448,144.841192 C321.994448,144.540439 322.010447,144.238525 321.988126,143.939447 C321.930067,143.164369 321.388954,142.593659 320.623731,142.499077 C320.258215,142.453977 319.888829,142.439931 319.541892,142.413387 C319.584211,141.739977 319.649624,141.185632 319.649624,140.631158 C319.650785,110.308781 319.663301,79.9862756 319.618659,49.6640278 C319.613886,46.408699 319.513765,43.1189653 319.045678,39.9049998 C317.166103,27.0039088 310.958654,16.5913152 300.44991,8.83653783 C294.104538,4.15411147 286.955108,1.39346691 279.098773,0.470073565 C275.459096,0.0423952921 271.809614,-0.000256563362 268.155229,1.15177658e-06 C224.890812,0.00296487587 181.626266,0.00592859997 138.36185,0.0104386149 C109.461448,0.013402339 80.5611754,0.00154744261 51.6607737,0.0463898767 C48.4442851,0.0512864644 45.1970895,0.162490547 42.0175009,0.605760585 C31.1940748,2.11442501 22.0178573,6.91462718 14.6209657,14.9628132 C8.19185908,21.9581041 4.35323216,30.207308 2.98522459,39.6137817 C2.43895052,43.369851 2.43275752,47.1462798 2.41017888,50.9219354 C2.38256843,55.557071 2.44385331,60.1927221 2.44824002,64.8282443 C2.4562393,73.240453 2.45056239,81.6527905 2.45056239,90.1599673 C1.10952017,90.237153 0.954953248,91.126399 0.956114435,92.1567442 C0.964242746,98.9860665 0.953921082,105.815518 0.965920016,112.64484 C0.968629453,114.15853 1.0687496,114.26677 2.41701698,114.868793 L2.41701698,136.864136 C2.02892241,136.895835 1.6840498,136.894159 1.35143417,136.957171 C0.57421286,137.104455 0.0845789152,137.66782 0.0151657236,138.468155 C-0.00702585445,138.724066 0.00716643381,138.983198 0.00716643381,139.240913 C0.006392309,151.739969 0.00600524659,164.239024 0.00561818418,176.73808 C0.00561818418,176.952885 -0.00238110557,177.168206 0.0105209747,177.382239 C0.0714187934,178.385395 0.585824733,178.914742 1.60599222,179.044372 C1.88803169,179.080195 2.16761977,179.13599 2.41792013,179.177611 L2.41792013,189.940053 C2.06414509,189.965438 1.76584899,189.969046 1.47310079,190.011053 C0.621563495,190.133468 0.084062832,190.696318 0.0125853075,191.537629 C-0.00921920809,191.793669 0.00561818418,192.052802 0.00548916338,192.310517 C0.00471503857,204.766663 0.00419895536,217.222808 0.00381189295,229.678825 C0.00381189295,229.93654 -0.00818704167,230.195286 0.0103919539,230.451713 C0.0803212288,231.416856 0.56131078,231.889764 1.54961013,231.988597 C1.83835868,232.017461 2.12568801,232.059469 2.36437649,232.089235 C2.36437649,233.146898 2.36437649,234.128535 2.36437649,235.110043 C2.36373139,244.945999 2.36347335,254.782084 2.36244118,264.61804 C2.35366777,352.669767 2.34141079,440.721495 2.33921744,528.773222 C2.33883037,544.96031 2.3848908,561.147269 2.39766386,577.334357 C2.40127644,581.799787 2.31251013,586.265862 2.35715133,590.730647 C2.40011526,595.025084 2.64486772,599.30934 3.59626711,603.521823 C8.19547166,623.883767 25.8590646,639.876796 48.8085108,639.929756 C59.2114581,639.953724 69.6144054,639.954754 80.0174817,639.961326 C82.0344639,639.962615 84.0514461,639.934653 86.0684283,639.932462 C90.1489693,639.928081 94.2293812,639.932849 98.309793,639.930658 C98.5240966,639.930529 98.7382711,639.885558 98.9527037,639.88414 C100.111311,639.876151 101.270046,639.869837 102.428653,639.873188 C106.852389,639.885944 111.275997,639.902567 115.699733,639.917257 C115.742568,639.917386 115.785532,639.907979 115.828367,639.90785 C117.158313,639.905402 118.488259,639.893289 119.818077,639.903598 C122.779491,639.926277 125.749163,640.178709 128.692257,639.655676 C130.500096,639.334305 132.283035,639.450664 134.069844,639.793682 C134.530835,639.882079 135.007309,639.918417 135.477332,639.925117 C137.283365,639.95076 139.090172,639.932977 140.895689,639.975243 C141.899858,639.998695 142.84958,639.860173 143.791819,639.492413 C145.44664,638.846579 147.172551,638.538867 148.957554,638.540929 C156.999808,638.550465 165.041932,638.546341 173.084186,638.547759 C174.600439,638.548145 176.097209,638.735117 177.511277,639.281474 C178.984307,639.85038 180.482626,640.078329 182.051003,639.973825 C182.779454,639.925375 183.514099,639.974985 184.243453,639.935683 C185.826797,639.850251 187.407301,639.707606 188.99129,639.64279 C190.27195,639.590345 191.557643,639.570243 192.837916,639.620498 C194.765358,639.696266 196.688671,639.914164 198.616113,639.949214 C201.879178,640.008746 205.144178,639.987871 208.408276,639.97099 C210.298172,639.961197 212.187553,639.876151 214.07745,639.855663 C216.009278,639.834788 217.941365,639.851024 219.873451,639.851668 C220.818658,639.851926 221.763864,639.849993 222.70907,639.855276 C227.13229,639.879502 231.555382,639.914035 235.978602,639.925633 C236.922905,639.928081 237.867853,639.807341 238.81177,639.816877 C242.805221,639.857467 246.798286,639.956043 250.791738,639.97666 C256.16739,640.004236 261.543558,640.015189 266.918822,639.965063 C270.527663,639.931302 274.141536,639.880017 277.74199,639.656707 C283.031069,639.328507 288.050236,637.866231 292.841037,635.624753 C307.812224,628.619669 319.000521,613.402493 319.554407,594.333763 C319.761356,587.210516 319.665236,580.077734 319.66601,572.949334 C319.673364,499.41702 319.673235,425.884705 319.672977,352.352391 C319.672848,332.981619 319.663559,313.610719 319.661107,294.239818 C319.658527,274.438919 319.659301,254.638021 319.658527,234.837123 C319.658527,232.048516 319.658527,229.259781 319.658527,226.322472 L319.658527,226.322472 Z" id="path-1"></path>

                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/oval-feature-3.svg" class="main-oval">
        </section>
    </div>
    <div class="section">
        <section id="hiw">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2>How it works?</h2>
                        </div>
                        <div class="col-sm-12 col-xl-4">
                            <div class="inside">
                                <div class="row flex-column flex-sm-row-reverse flex-lg-row-reverse flex-md-row-reverse flex-xl-row-column">
                                    <div class="col-12 col-sm-4 col-md-4 col-xl-12">
                                        <!--div class="number d-none d-block d-md-none d-xl-block d-sm-none">Step #1</div-->
                                        <div class="img">
                                            <img src="img/hiw-step-1@2x.png">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-xl-12">
                                        <div class="number">Step #1</div>
                                        <div class="title">
                                            Berätta vem du söker
                                        </div>
                                        <div  class="line"></div>
                                        <div class="text">
                                            Välj bland kriterier som kön, ålder, intressen, utbildning och erfarenhet
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-4">
                            <div class="inside">
                                <div class="row flex-column flex-sm-row-reverse flex-lg-row-reverse flex-md-row-reverse flex-xl-row-column">
                                    <div class="col-12 col-sm-4 col-md-4 col-xl-12">
                                        <!--div class="number d-none d-block d-md-none d-xl-block d-sm-none">Step #2</div-->
                                        <div class="img">
                                            <img src="img/hiw-step-2@2x.png">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-xl-12">
                                        <div class="number">Step #2</div>
                                        <div class="title">
                                            Bekräfta budget
                                        </div>
                                        <div  class="line"></div>
                                        <div class="text">
                                            Välj bland kriterier som kön, ålder, intressen, utbildning och erfarenhet
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-4">
                            <div class="inside">
                                <div class="row flex-column flex-sm-row-reverse flex-lg-row-reverse flex-md-row-reverse flex-xl-row-column">
                                    <div class="col-12 col-sm-4 col-md-4 col-xl-12">
                                        <!--div class="number d-none d-block d-md-none d-xl-block d-sm-none">Step #3</div-->
                                        <div class="img">
                                            <img src="img/hiw-step-3@2x.png">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8 col-md-8 col-xl-12">
                                        <div class="number">Step #3</div>
                                        <div class="title">
                                            Luta dig tillbaka
                                        </div>
                                        <div  class="line"></div>
                                        <div class="text">
                                            Välj bland kriterier som kön, ålder, intressen, utbildning och erfarenhet
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href="#play_btn" x="0" y="0" />
                                </svg>
                                <span>Book a Demo</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section">
        <section id="example">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2>Amazing ads</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="tab-menu">
                                <ul>
                                    <li class="active"><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Google</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="tabs">
                                <div class="tab active"><img src="img/facebook_ad_example@2x.png"></div>
                                <div class="tab"><img src="img/instagram_example_ad@2x.png"></div>
                                <div class="tab"><img src="img/twitter_example_ad@2x.png"></div>
                                <div class="tab"><img src="img/google_example_ad@2x.png"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-demo">
                                <svg width="85px" height="85px" viewBox="0 0 85 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <use xlink:href="#play_btn" x="0" y="0" />
                                </svg>
                                <span>Book a Demo</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section">
        <section id="order">
            <div class="overlay">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-6 img-wrap">
                            <img src="img/man-at-table@2x.png">
                        </div>
                        <div class="text col-md-7 col-sm-6 col-lg-6">
                            <form method="post">
                                <h2>Order Demo</h2>
                                <p>All your questions can be solved in a minute. Write us and see all Kandio features.</p>
                                <div class="line">
                                    <input type="text" name="name" value="" placeholder="Type your name">
                                </div>
                                <div class="line">
                                    <input type="tel" name="phone" value="" placeholder="Phone number">
                                </div>
                                <div class="line">
                                    <input type="text" name="email" value="" placeholder="E-mail">
                                </div>
                                <div class="line">
                                    <textarea name="text" value="" placeholder="Your message (if any)"></textarea>
                                </div>
                                <div class="line">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3 text-center text-lg-left">
                        <a href="#" class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="30" viewBox="0 0 180 30">
                                <path fill="#FFF" fill-rule="nonzero" d="M29.142 29.518H18.774l-6.85-10.754-3.26 3.597v7.194H0V.297h8.665v11.718L18.44.297h9.998L17.81 12.163l11.331 17.355zM55.766 2.855c2.296 1.855 3.444 4.487 3.444 7.825v18.838H48.657v-3.19c-.89 1.187-2.037 2.077-3.481 2.708-1.444.63-3.11.964-5 .964-3.073 0-5.442-.816-7.183-2.485-1.74-1.668-2.629-3.856-2.629-6.637 0-2.819.963-4.97 2.851-6.49 1.889-1.52 4.666-2.299 8.332-2.336h7.11v-.111c0-1.224-.445-2.151-1.296-2.819-.852-.667-2.111-1-3.74-1-1.185 0-2.518.185-4.074.518-1.555.371-3.11.89-4.665 1.558L32.216 3.04C37.103 1.038 41.769.037 46.176.037c4.11 0 7.294.964 9.59 2.818zm-9.035 19.32c.889-.519 1.518-1.26 1.926-2.187v-2.633h-4.888c-2.185 0-3.259.89-3.259 2.707 0 .927.296 1.631.852 2.15.555.483 1.37.742 2.407.742 1.074 0 2.073-.26 2.962-.778zM90.351 1.41c1.593.89 2.815 2.188 3.667 3.857.888 1.668 1.296 3.597 1.296 5.822v18.43H84.575V14.203c0-1.41-.37-2.559-1.148-3.412-.777-.853-1.777-1.298-3-1.298-1.443.037-2.628.556-3.48 1.595-.852 1.038-1.296 2.373-1.296 4.042v14.35H64.913V.446h10.775v4.487c1.037-1.595 2.333-2.818 3.851-3.671C81.057.408 82.872 0 84.91 0c2.036.037 3.888.52 5.443 1.41zm29.958.408c2.406 1.224 4.258 2.967 5.591 5.192 1.333 2.225 1.963 4.82 1.963 7.713 0 2.892-.667 5.488-2.037 7.75-1.333 2.262-3.222 3.968-5.666 5.192-2.443 1.224-5.258 1.817-8.442 1.817h-11.183V0h11.479c3.147 0 5.925.593 8.295 1.817zm-3.555 17.392c.925-1.076 1.37-2.485 1.37-4.265 0-1.78-.482-3.189-1.481-4.301-1-1.113-2.26-1.632-3.851-1.632h-3v11.792h3.296c1.518.038 2.74-.519 3.666-1.594zM132.787.482h10.776v29.036h-10.776V.482zm39.585 1.372c2.407 1.224 4.295 2.967 5.628 5.192 1.333 2.225 2 4.858 2 7.861 0 2.967-.667 5.563-2 7.825-1.333 2.262-3.221 4.005-5.628 5.228-2.407 1.224-5.258 1.855-8.48 1.855-3.221 0-6.073-.63-8.517-1.855-2.444-1.223-4.332-2.966-5.665-5.228-1.333-2.262-2-4.858-2-7.825 0-3.003.667-5.6 2-7.861 1.333-2.225 3.221-3.968 5.665-5.192C157.82.63 160.634 0 163.892 0c3.259 0 6.073.63 8.48 1.854zM160.3 10.31c-.962 1.187-1.444 2.744-1.444 4.672 0 1.966.482 3.523 1.444 4.71.963 1.187 2.222 1.78 3.851 1.78 1.556 0 2.815-.593 3.777-1.78.963-1.187 1.445-2.744 1.445-4.71 0-1.928-.482-3.485-1.445-4.672-.962-1.187-2.221-1.78-3.777-1.78-1.629 0-2.888.593-3.85 1.78z"/>
                            </svg>
                        </a>
                        <p class="small">
                            © KANDIO - 2017. All rights reserved.
                        </p>
                        <p class="small">
                            <a href="#">Privacy Policy</a>
                            <span>|</span>
                            <a href="#">Terms of use</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>CONTACT</h3>
                        <p>Kungsgatan 26,<br> 11135 Stockholm,<br> Sweden</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>COMPANY</h3>
                        <p><a href="mailto:info@kand.io">info@kand.io</a></p>
                        <p><a href="tel:+46 (0) 111 111 11">+46 (0) 111 111 11</a></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li>
                                <a href="#">Hur fungerar det?</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Kariär</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12" style="position: relative;">
                        <h3><span class="social-parent"> SOCIAL<span class="notify">
                                    <img src="img/notification-1@2x.png">
                                </span></span></h3>
                        <div class="soc">
                            <a href="#"><img src="img/facebook-icon.svg"></a>
                            <a href="#"><img src="img/twitter-icon.svg"></a>
                            <a href="#"><img src="img/linked-in-icon.svg"></a>
                        </div>
                        <svg width="32px" height="32px" class="sc-top" onClick="toTop();" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Up-button">
                                    <circle id="Oval-2" fill="#364961" cx="16" cy="16" r="16"></circle>
                                    <path d="M14.5,17.4289322 L14.5,9 L17.5,9 L17.5,17.5355339 L20.0355339,15 L22.1066017,17.0710678 L16.0710678,23.1066017 L16.0533009,23.0888348 L16.0355339,23.1066017 L10,17.0710678 L12.0710678,15 L14.5,17.4289322 Z" id="Combined-Shape" fill="#FFFFFF" transform="translate(16.053301, 16.053301) rotate(-180.000000) translate(-16.053301, -16.053301) "></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

</body>
</html>