<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadcast</title>
    <link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/0082/5494/7392/files/broadcast-favicon_32x32.png?v=1547078668" width="100%">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
    <div class="first_page" id="first">
        <div class="logo">
            <img src="//cdn.shopify.com/s/files/1/0082/5494/7392/files/logo-BOLD--white_160x.png?v=1556139303 160w" alt="">
        </div>
        <!-- {{__('lang.')}} -->
        <div class="menu">
            <div class="nav">
                <a href="{{route('etq')}}">{{__('lang.home')}}</a>
                <a href="#third_page">{{__('lang.shop')}}</a>
                <a href="#footer">{{__('lang.contact')}}</a>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="lang" data-toggle="dropdown">{{__('lang.select')}}</button>
                <ul class="dropdown-menu">
                    <li><a href="lang/en"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Flag_of_the_USA.png" alt="">{{__('lang.en')}}</a></li>
                    <li><a href="lang/ru"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Flag_of_Russia_with_border.svg/1280px-Flag_of_Russia_with_border.svg.png" alt="">{{__('lang.ru')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="hero_content">
            <h1>{{__('lang.smart')}}</h1>
            <p>{{__('lang.never')}}</p>
            <button>{{__('lang.shop_all')}}</button>
        </div>
    </div>

    <div class="second_page">
        <div class="row1">
            <div class="r1c1">
                <h1 onmouseover="big(this)" onmouseout="small(this)"><b>{{__('lang.less')}} </b></h1>
                <p>{{__('lang.less2')}} </p>
            </div>
            <div class="r1c2">
            </div>
        </div>
        <div class="row2">
            <div class="r2c1">
            </div>
            <div class="r2c2">
                <h1 onmouseover="big(this)" onmouseout="small(this)"><b>{{__('lang.comfort')}} </b></h1>
                <p>{{__('lang.comfort2')}} </p>
            </div>
        </div>
    </div>

    <script>
        function big(element) {
            element.style.fontSize = "45px";
        }

        function small(element) {
            element.style.fontSize = "30px";
        }
    </script>

    <div id="third_page" class="third_page">

        <div class="popup1">
            <div class="content">
                <img onclick="close_popup1()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup2">
            <div class="content">
                <img onclick="close_popup2()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add2">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup3">
            <div class="content">
                <img onclick="close_popup3()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add3">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup4">
            <div class="content">
                <img onclick="close_popup4()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add4">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup5">
            <div class="content">
                <img onclick="close_popup5()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add5">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup6">
            <div class="content">
                <img onclick="close_popup6()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add6">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup7">
            <div class="content">
                <img onclick="close_popup7()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add7">{{__('lang.conf_btn')}}</a>
            </div>
        </div>
        <div class="popup8">
            <div class="content">
                <img onclick="close_popup8()" class="closed" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/OOjs_UI_icon_close.svg/1200px-OOjs_UI_icon_close.svg.png" alt="" width="4.5%">
                <h1>{{__('lang.confirm')}}</h1>
                <a href="add8">{{__('lang.conf_btn')}}</a>
            </div>
        </div>

        <script>
            function popup1() {
                document.querySelector(".popup1").style.display = "flex";
                $(".popup1").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup1() {
                $(".popup1").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup1").style.display = "none";
                document.body.style.overflow = "scroll";
            }

            function popup2() {
                document.querySelector(".popup2").style.display = "flex";
                $(".popup2").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup2() {
                $(".popup2").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup2").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup3() {
                document.querySelector(".popup3").style.display = "flex";
                $(".popup3").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup3() {
                $(".popup3").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup3").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup4() {
                document.querySelector(".popup4").style.display = "flex";
                $(".popup4").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup4() {
                $(".popup4").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup4").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup5() {
                document.querySelector(".popup5").style.display = "flex";
                $(".popup5").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup5() {
                $(".popup5").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup5").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup6() {
                document.querySelector(".popup6").style.display = "flex";
                $(".popup6").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup6() {
                $(".popup6").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup6").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup7() {
                document.querySelector(".popup7").style.display = "flex";
                $(".popup7").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup7() {
                $(".popup7").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup7").style.display = "none";
                document.body.style.overflow = "scroll";
            }
            function popup8() {
                document.querySelector(".popup8").style.display = "flex";
                $(".popup8").animate({
                    opacity: "1"
                }, "slow");
                document.body.style.overflow = "hidden";
            }
            function close_popup8() {
                $(".popup8").animate({
                    opacity: "0"
                }, "slow");
                document.querySelector(".popup8").style.display = "none";
                document.body.style.overflow = "scroll";
            }
        </script>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="https://cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-838_720x.jpg?v=1575070091">
                                <img class="pic-2" src="https://cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-357_v2-1_720x.jpg?v=1575070091">
                            </a>
                            <button class="select-options" onclick="popup1()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.daynight')}} </a></h3>
                            <div class="price">$300.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/Capture-One-Catalog0080-2_CREDIT_Tom_Griffiths_tomgphoto.co_.uk_-1500x1941_1_3000x.jpg?v=1570190784">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/CCS-Grey-Marl-800x1035_3000x.jpg?v=1570190784">
                            </a>
                            <button class="select-options" onclick="popup2()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.collar')}}</a></h3>
                            <div class="price">$109.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-634_3000x.jpg?v=1575067475">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-1390_3000x.jpg?v=1575067475">
                            </a>
                            <button class="select-options" onclick="popup3()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.tee')}}</a></h3>
                            <div class="price">$200.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/042A7084_CREDIT_Tom_Griffiths_tomgphoto.co_.uk_-1000x1375_3000x.jpg?v=1570186793">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/J-BM-Navy-800x1035_3000x.jpg?v=1570186793">
                            </a>
                            <button class="select-options" onclick="popup4()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.bomber')}}</a></h3>
                            <div class="price">$499.00</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/042A6623_CREDIT_Tom_Griffiths_tomgphoto.co_.uk_-1000x1375_3000x.jpg?v=1570190824">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/CVS-_-Navy-800x1035_3000x.jpg?v=1570190752">
                            </a>
                            <button class="select-options" onclick="popup5()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.curve')}}</a></h3>
                            <div class="price">$119.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-943_3000x.jpg?v=1575070053">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-LONDON-877_3000x.jpg?v=1575070053">
                            </a>
                            <button class="select-options" onclick="popup6()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.daynight')}}</a></h3>
                            <div class="price">$300.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/042A7417_CREDIT_Tom_Griffiths_tomgphoto.co_.uk-2-1000x1375_3000x.jpg?v=1570186774">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LH-Hatch-Navy-800x1035_3000x.jpg?v=1570186774">
                            </a>
                            <button class="select-options" onclick="popup7()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.hood')}}</a></h3>
                            <div class="price">$299.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid5">
                        <div class="product-image5">
                            <a href="">
                                <img class="pic-1" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-london8926_3000x.jpg?v=1575069164">
                                <img class="pic-2" src="//cdn.shopify.com/s/files/1/0082/5494/7392/products/LESTRANGE-london8939_3000x.jpg?v=1575069164">
                            </a>
                            <button class="select-options" onclick="popup8()"><i class="fa fa-arrow-right"></i>{{__('lang.add')}} </button>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="">{{__('lang.neck')}}</a></h3>
                            <div class="price">$300.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth_page">
        <div class="fourth_page_row">
            <div class="fourth_page_column1">
                <h2>{{__('lang.store')}}</h2>
                <p>{{__('lang.address')}}<br>{{__('lang.address2')}}</p>
                <p id="ppp">{{__('lang.time')}}<br>{{__('lang.time2')}}</p>
                <a href="https://www.google.com/maps?daddr=404+Beach+Avenue,+Vancouver,+BC"><b>{{__('lang.direct')}}</b></a>
            </div>
            <div class="fourth_page_column2"></div>
        </div>
        <div class="center">
            <div class="center_text">
                <h1><b>{{__('lang.hire')}}</b></h1>
                <h2>{{__('lang.jo')}}</h2>
            </div>
            <div class="center_form">
                <form action=" {{ route ('email/send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form_row">
                        <input type="text" name="name" id="" placeholder="{{__('lang.name')}}" required>
                        <input type="text" name="surname" id="" placeholder="{{__('lang.surn')}}" required>

                    </div>
                    <div class="form_column">
                        <p>{{__('lang.upload')}}</p>
                        <input type="file" name="file" id="file" required>
                        <input type="submit" value="{{__('lang.join')}}" id="submit">
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>

    <div id="footer" class="footer">
        <div class="social">
            <a href=""><i style="font-size:24px; color: black" class="fa">&#xf230;</i></a>
            <a href=""><i style="font-size:24px; color: black" class="fa">&#xf099;</i></a>
            <a href=""><i style="font-size:24px; color: black" class="fa">&#xf16a;</i></a>
        </div>
        <p>© BROADCAST MODERN 2021</p>
    </div>



</body>

</html>