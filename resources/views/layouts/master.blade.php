<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
<!-- topnav container -->
<div class="container-fluid topnav-conainer btm-border">
  <div class="container topnav-wrapper">
  <!-- top nav -->
  <div class="row topnav-home">
    <div class="col-lg-8 full-left">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#" class="nav-logo">&nbsp;</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret-new"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left topnav-search" role="search">
          <div class="form-group">
            <input type="text" class="form-control border-shadow-none" placeholder="I'm looking for...">
            <select class="selectpicker border-shadow-none select-border-left">
              <option value="">Everything</option>
              <option value="">Two</option>
              <option value="">Three</option>
            </select>
            <button type="submit" class="border-shadow-none icon-search">&nbsp;</button>
          </div>

        </form>
      </div>
    </div>
    <div class="col-lg-4 no-padding-left">
      <div class="collapse navbar-collapse box-login-cart">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="sub-title">Hello. Sign in</span><br/><span class="text-bold-black">Your Account</span><span class="caret-new"></span>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="sub-title">Wish</span><br/><span class="text-bold-black">List</span><span class="caret-new"></span>
              </a>
          </li>
          <li>
            <div class="box-topnav-cart">
              <p class="bg-tovnav-cart">
                <span class="tovnav-cart-subtitle">Shopping</span>
                <span  class="tovnav-cart-title">Cart</span>
                <span class="tovnav-cart-item-no">99</span>
              </p>

            </div>
          </li>
          <li>
            <span class="topnav-lang">EN</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end topnav -->
  </div>
</div>
<!-- end topnav container -->

<!--  bu list -->
<div class="container-fluid bu-icon-coontainer">
  <div class="container topnav-wrapper">
    <div class="row">
      <!-- central BU tab -->
      <div class="col-lg-8">
        <!-- list of BU -->
        <ul class="list-unstyled list-inline bu-icon-left">
          <li><a href="#" class="bu-icon-1">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-2">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-3">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-4">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-5">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-6">&nbsp;</a></li>
          <li><a href="#" class="bu-icon-7">&nbsp;</a></li>
        </ul>
        <!-- end list of BU -->
      </div>
      <div class="col-lg-4">
        <ul class="list-unstyled list-inline bu-icon-right">
          <li>
            <p>Central Online Shopping<br/><span class="text-large-24">0-2730-7777</span></p>
          </li>
          <li>
            <a href="#"><span class="text-large-18">Ask Us?</span><br/>Live Chat Now</a>
          </li>
          <li>
            <a href="#"><span class="box-text">Open<br/>Shop</span>Click Here</a>
          </li>
        </ul>
      </div>
      <!-- end central BU tab -->
    </div>
  </div>
</div>
<!-- end bu list -->

<!-- home slider -->
<div class="container-fluid color-white-ff">
  <div class="container">
    <div class="row slider-home">
      <!-- slider -->
      <div class="col-lg-12 ">

      <!-- Flickity HTML init -->
      <div class="gallery gallery-main js-flickity" data-flickity-options='{ "cellAlign": "left", "pageDots": false, "freeScroll": true, "wrapAround": true}'>
        <div class="gallery-cell">
            <img src="images/banner_1.jpg" title="" alt="" />
          </div>
          <div class="gallery-cell">
            <img src="images/banner_2.jpg" title="" alt="" />
          </div>
          <div class="gallery-cell">
            <img src="images/banner_1.jpg" title="" alt="" />
          </div>
          <div class="gallery-cell">
            <img src="images/banner_2.jpg" title="" alt="" />
          </div>
      </div>

      <div class="gallery gallery-nav js-flickity"
        data-flickity-options='{ "asNavFor": ".gallery-main", "contain": true, "pageDots": false, "prevNextButtons": false }'>
        <div class="gallery-cell">
           <img src="images/banner_nav_1.jpg" title="" alt=""/>
        </div>
        <div class="gallery-cell">
           <img src="images/banner_nav_2.jpg" title="" alt=""/>
        </div>
        <div class="gallery-cell">
           <img src="images/banner_nav_1.jpg" title="" alt=""/>
        </div>
        <div class="gallery-cell">
           <img src="images/banner_nav_2.jpg" title="" alt=""/>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end home slider -->

<!-- C2A -->
<div class="container-fluid home_banner_c2a">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a1.jpg" title="" alt=""/></a>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a2.jpg" title="" alt=""/></a>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a3.jpg" title="" alt=""/></a>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a4.jpg" title="" alt=""/></a>
      </div>
    </div>
  </div>
</div>

<!-- end C2A -->

<!-- deals of the day -->
<div class="container-fluid color-gray-eb border-red-ff0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="ribbon-type color-red-ff0">DEALS OF THE DAY</span>
        <a href="#" title="" alt=""><span class="view-more">VIEW ALL DEALS <span class="icon-view-more">&nbsp;</span></span></a>
      </div>
    </div>
    <div class="row product-box-full">

      <div class="gallery-product-list js-flickity" data-flickity-options='{ "cellAlign": "left", "pageDots": false }'>

        <!-- product item #1-->
        <div class="box-product-list-cell box-product-item color-white-ff box-product-item-mg-right">
          <!-- img -->
          <div class="box-product-img">
            <a href="#" title=""><img src="images/product_item_1.jpg" title="" alt="" width="260" height="260" /></a>

            <div class="box-promo-corner color-red-ff0 text-center hide"><span>SAVE<br/><span class="title-promo-percent">15<span class="title-promo-percent-sign">%</span></span></span></div>
            <div class="box-promo-corner color-black-00 text-center hide"><span>SOLD<br/><span class="title-soldout">OUT</span></span></div>
            <div class="box-promo-corner-img hide"><span>&nbsp;</span></div>
          </div>
          <!-- title -->
          <div class="box-product-title clear">
            <p><a href="#" title="">ADVANCED GENIFIQUE Youth Activating Concentrate</a></p>
          </div>
          <!-- timer -->
          <div class="box-product-timer clear">
            <div class="box-timer-wrapper text-center">
              <ul class="list-inline list-unstyled">
                <li><span class="box-timer">24</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
              </ul>
               <ul class="list-inline list-unstyled">
                <li><span class="box-timer-label">Hour</span></li>
                <li><span class="box-timer-divider-label-1">&nbsp;</span></li>
                <li><span class="box-timer-label">Min</span></li>
                <li><span class="box-timer-divider-label-2">&nbsp;</span></li>
                <li><span class="box-timer-label">Sec</span></li>
              </ul>
             </div>
          </div>
          <!-- price -->
          <div class="box-product-price clear">
            <div class="box-price-save">
              <p>SAVE</p>
              <p>5,180</p>
            </div>
            <div class="box-price-tag">
              <p>฿25,900</p>
              <p>฿20,720</p>
            </div>
          </div>
          <!-- add2cart -->
          <div class="box-product-cart clear">
            <span class="btn-add-to-cart">ADD TO CART</span>
            <span class="box-product-fav">&nbsp;</span>
            <a href="#" title=""><span class="box-product-info">&nbsp;</span></a>
          </div>
        </div>
        <!-- end product item -->

        <!-- product item #2-->
        <div class="box-product-list-cell box-product-item color-white-ff box-product-item-mg-right">
          <!-- img -->
          <div class="box-product-img">
            <a href="#" title=""><img src="images/product_item_2.jpg" title="" alt="" width="260" height="260" /></a>

            <div class="box-promo-corner color-red-ff0 text-center"><span>SAVE<br/><span class="title-promo-percent">15<span class="title-promo-percent-sign">%</span></span></span></div>
            <div class="box-promo-corner color-black-00 text-center hide"><span>SOLD<br/><span class="title-soldout">OUT</span></span></div>
            <div class="box-promo-corner-img"><span>&nbsp;</span></div>
          </div>
          <!-- title -->
          <div class="box-product-title clear">
            <p><a href="#" title="">MYKRONOZ Smartwatch ZeSplash Black</a></p>
          </div>
          <!-- timer -->
          <div class="box-product-timer clear">
            <div class="box-timer-wrapper text-center">
              <ul class="list-inline list-unstyled">
                <li><span class="box-timer">24</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
              </ul>
               <ul class="list-inline list-unstyled">
                <li><span class="box-timer-label">Hour</span></li>
                <li><span class="box-timer-divider-label-1">&nbsp;</span></li>
                <li><span class="box-timer-label">Min</span></li>
                <li><span class="box-timer-divider-label-2">&nbsp;</span></li>
                <li><span class="box-timer-label">Sec</span></li>
              </ul>
             </div>
          </div>
          <!-- price -->
          <div class="box-product-price clear">
            <div class="box-price-save">
              <p>SAVE</p>
              <p>15%</p>
            </div>
            <div class="box-price-tag">
              <p>฿25,900</p>
              <p>฿20,720</p>
            </div>
          </div>
          <!-- add2cart -->
          <div class="box-product-cart clear">
            <span class="btn-add-to-cart">ADD TO CART</span>
            <span class="box-product-fav">&nbsp;</span>
            <a href="#" title=""><span class="box-product-info">&nbsp;</span></a>
          </div>
        </div>
        <!-- end product item -->

        <!-- product item #3 -->
        <div class="box-product-list-cell box-product-item color-white-ff box-product-item-mg-right">
          <!-- img -->
          <div class="box-product-img">
            <a href="#" title=""><img src="images/product_item_3.jpg" title="" alt="" width="260" height="260" /></a>

            <div class="box-promo-corner color-red-ff0 text-center hide"><span>SAVE<br/><span class="title-promo-percent">15<span class="title-promo-percent-sign">%</span></span></span></div>
            <div class="box-promo-corner color-black-00 text-center"><span>SOLD<br/><span class="title-soldout">OUT</span></span></div>
            <div class="box-promo-corner-img hide"><span>&nbsp;</span></div>
          </div>
          <!-- title -->
          <div class="box-product-title clear">
            <p><a href="#" title="">MYKRONOZ Smartwatch ZeSplash Black Smartwatch</a></p>
          </div>
          <!-- timer -->
          <div class="box-product-timer clear">
            <div class="box-timer-wrapper text-center">
              <ul class="list-inline list-unstyled">
                <li><span class="box-timer">24</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
              </ul>
               <ul class="list-inline list-unstyled">
                <li><span class="box-timer-label">Hour</span></li>
                <li><span class="box-timer-divider-label-1">&nbsp;</span></li>
                <li><span class="box-timer-label">Min</span></li>
                <li><span class="box-timer-divider-label-2">&nbsp;</span></li>
                <li><span class="box-timer-label">Sec</span></li>
              </ul>
             </div>
          </div>
          <!-- price -->
          <div class="box-product-price clear">
            <div class="box-price-save">
              <p>SAVE</p>
              <p>15%</p>
            </div>
            <div class="box-price-tag">
              <p>฿25,900</p>
              <p>฿20,720</p>
            </div>
          </div>
          <!-- add2cart -->
          <div class="box-product-cart clear hide">
            <span class="btn-add-to-cart">ADD TO CART</span>
            <span class="box-product-fav">&nbsp;</span>
            <a href="#" title=""><span class="box-product-info">&nbsp;</span></a>
          </div>
        </div>
        <!-- end product item -->

        <!-- product item #4 -->
        <div class="box-product-list-cell box-product-item color-white-ff">
          <!-- img -->
          <div class="box-product-img">
            <a href="#" title=""><img src="images/product_item_4.jpg" title="" alt="" width="260" height="260" /></a>

            <div class="box-promo-corner color-red-ff0 text-center hide"><span>SAVE<br/><span class="title-promo-percent">15<span class="title-promo-percent-sign">%</span></span></span></div>
            <div class="box-promo-corner color-black-00 text-center hide"><span>SOLD<br/><span class="title-soldout">OUT</span></span></div>
            <div class="box-promo-corner-img hide"><span>&nbsp;</span></div>
          </div>
          <!-- title -->
          <div class="box-product-title clear">
            <p><a href="#" title="">MYKRONOZ Smartwatch Smartwatch ZeSplash Black</a></p>
          </div>
          <!-- timer -->
          <div class="box-product-timer clear">
            <div class="box-timer-wrapper text-center">
              <ul class="list-inline list-unstyled">
                <li><span class="box-timer">24</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
                <li><span class="box-timer-divider">:</span></li>
                <li><span class="box-timer">59</span></li>
              </ul>
               <ul class="list-inline list-unstyled">
                <li><span class="box-timer-label">Hour</span></li>
                <li><span class="box-timer-divider-label-1">&nbsp;</span></li>
                <li><span class="box-timer-label">Min</span></li>
                <li><span class="box-timer-divider-label-2">&nbsp;</span></li>
                <li><span class="box-timer-label">Sec</span></li>
              </ul>
             </div>
          </div>
          <!-- price -->
          <div class="box-product-price clear">
            <div class="box-price-save">
              <p>SAVE</p>
              <p>15%</p>
            </div>
            <div class="box-price-tag">
              <p>฿15,900</p>
              <p>฿10,720</p>
            </div>
          </div>
          <!-- add2cart -->
          <div class="box-product-cart clear">
            <span class="btn-add-to-cart">ADD TO CART</span>
            <span class="box-product-fav">&nbsp;</span>
            <a href="#" title=""><span class="box-product-info">&nbsp;</span></a>
          </div>
        </div>
        <!-- end product item -->


      </div>
      <!-- end col-lg-12 -->


    </div>
  </div>
</div>
<!-- end deals of the day -->

<!-- recommended for you -->
<div class="container-fluid border-black-00">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="ribbon-type color-black-00">RECOMMENDED FOR YOU</span>
        <a href="#" title="" alt=""><span class="view-more">VIEW ALL RECOMMENDATIONS <span class="icon-view-more">&nbsp;</span></span></a>
      </div>
    </div>
    <div class="row rec-box-full">
      <div class="col-lg-12">
        <div class="rec-box-right">
          <a href="#" title=""><img src="images/rec_left.jpg" title="" alt="" class="img-responsive" /></a>
        </div>
         <div class="rec-box-left">
              <div class="rec-box-left-one-half">
                <a href="#" title=""><img style="float: left;" src="images/rec_right_1.jpg" title="" alt="" class="img-responsive" /></a>
              </div>
              <div class="rec-box-left-one-half">
                <a href="#" title=""><img style="float: left;" src="images/rec_right_2.jpg" title="" alt="" class="img-responsive" /></a>
              </div>
            <div class="rec-box-left-one-full">
              <a href="#" title=""><img src="images/rec_right_3.jpg" title="" alt="" class="img-responsive" /></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end recommended for you  -->

<!-- privileges -->
<div class="container-fluid border-black-00">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="ribbon-type color-black-00">PRIVILEGES</span>
        <a href="#" title="" alt=""><span class="view-more">VIEW ALL <span class="icon-view-more">&nbsp;</span></span></a>
      </div>
    </div>
    <div class="row privilege-box-full">
      <!-- c2a slider -->
      <div class="c2a js-flickity" data-flickity-options='{ "cellAlign": "left", "pageDots": false }'>
        <div class="c2a-cell">
          <a href="#" title=""><img src="images/c2a_pv1.jpg" title="" alt=""/></a>
        </div>
        <div class="c2a-cell">
          <a href="#" title=""><img src="images/c2a_pv2.jpg" title="" alt=""/></a>
        </div>
        <div class="c2a-cell">
          <a href="#" title=""><img src="images/c2a_pv3.jpg" title="" alt=""/></a>
        </div>
        <div class="c2a-cell">
          <a href="#" title=""><img src="images/c2a_pv4.jpg" title="" alt=""/></a>
        </div>
      </div>
      <!-- end c2a slider -->
    </div>
  </div>
</div>
<!-- end provileges -->

<!-- editor's pack -->
<div class="container-fluid border-black-00">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="ribbon-type color-black-00">EDITOR'S PACK</span>
        <a href="#" title="" alt=""><span class="view-more">VIEW ALL <span class="icon-view-more">&nbsp;</span></span></a>
      </div>
    </div>
    <div class="row editor-box-full">
      <!-- column # 1 -->
      <div class="col-lg-4">
        <!-- item 1 column 1 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_1_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_1_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_1_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_1_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 1 column 1 -->

        <!-- item 2 column 1 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_2_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_2_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_2_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_2_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 2 column 1 -->

      </div>
      <!-- end column #1 -->

      <!-- colmn #2 -->
      <div class="col-lg-4">
        <!-- item 1 column 2 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_3_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_3_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_3_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_3_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 1 column 2 -->

        <!-- item 2 column 2 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_4_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_4_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_4_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_4_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 2 column 2 -->

      </div>
      <!-- end colmn #2 -->

      <!-- column 3 -->
      <div class="col-lg-4">
        <!-- item 1 column 3 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_5_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_5_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_5_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_5_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 1 column 3 -->

        <!-- item 2 column 3 -->
        <div class="box-pin-container border-box-gray-e3 margin-btm-19">
          <!-- pic container -->
          <div class="box-flex-main-img-container">
            <div class="flex-main-img">
              <a href="#" title="">
                <img src="images/pin_6_main.jpg"  title="" alt="" />
              </a>
            </div>
            <!-- 3x thumbnail -->
            <div class="box-thumbs-container-front">
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_6_thumb_a.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_6_thumb_b.jpg" title="" alt="" width="100" height="100"/>
              </a>
              <a href="#" title="">
                <img class="border-box-btm-gray-e3" src="images/pin_6_thumb_c.jpg" title="" alt="" width="100" height="100"/>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end pic container -->
          <!-- block text -->
          <div class="box-block-text-front">
            <p class="block-text-front-title"><a href="#" title="">Blouses under</a></p>
            <p>Want to make a statement? Sleek leather bags are essential to any wardrobe, so whether you’re a satchel girl or favour a clutch, shop for the perfect companion for any night out.</p>
          </div>
          <div class="box-block-click-font text-center">
            <p>17 items</p>
            <a href="#" title=""><span>SHOP NOW</span></a>
          </div>
          <!-- end block text -->
          <div class="clearfix"></div>
        </div>
        <!-- end item 3 column 3 -->

      </div>
      <!-- end column 3 -->

    </div>
  </div>
</div>
<!-- end editor's pack -->

<!-- clck channel -->
<div class="container-fluid border-red-ff0 color-black-00">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="ribbon-type color-red-ff0">CLICK CHANNEL</span>
        <a href="#" title="" alt=""><span class="view-more-white">VIEW ALL <span class="icon-view-more-white">&nbsp;</span></span></a>
      </div>
    </div>
    <div class="row channel-box-full">
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a_channel1.jpg" title="" alt=""/></a>
        <span class="title-vdo-clip">Kenwood</span>
        <span class="title-sub-vdo-clip">Review By: Central</span>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a_channel2.jpg" title="" alt=""/></a>
        <span class="title-vdo-clip">LeKue</span>
        <span class="title-sub-vdo-clip">Review By: Central</span>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a_channel3.jpg" title="" alt=""/></a>
        <span class="title-vdo-clip">Kenwood</span>
        <span class="title-sub-vdo-clip">Review By: Central</span>
      </div>
      <div class="col-lg-3">
        <a href="#" title=""><img src="images/c2a_channel4.jpg" title="" alt=""/></a>
        <span class="title-vdo-clip">Kenwood</span>
        <span class="title-sub-vdo-clip">Review By: Central</span>
      </div>

    </div>
  </div>
</div>
<!-- end clck channel -->

<!-- shop of the week -->
@include('common.shop_of_the_week')
<!-- end shop of the week -->

<!-- policy -->
@include('common.policy')
<!-- end policy-->

<!-- open hours -->
<div class="container-fluid color-gray-eb">
  <div class="container">
    <div class="row box-footer-open-hour">
      <div class="col-lg-12">
        <p class="text-center">Online Contact Center Office Hours : <span>8.30 a.m.- 9.00 p.m.</span>&nbsp;&nbsp;Delivery Time : <span>Monday - Saturday 8.30 a.m. - 6.00 p.m.</span></p>
      </div>
    </div>
  </div>
</div>
<!-- end open hours -->

<!-- social media icons -->
<div class="container-fluid border-dotted-top-gray-99 color-gray-eb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-inline list-unstyled text-center box-social-footer color-gray-eb">
          <li><a class="social-fb" href="#" title="">&nbsp;</a></li>
          <li><a class="social-tw" href="#" title="">&nbsp;</a></li>
          <li><a class="social-pin" href="#" title="">&nbsp;</a></li>
          <li><a class="social-ig" href="#" title="">&nbsp;</a></li>
          <li><a class="social-yt" href="#" title="">&nbsp;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- end social media iocns -->

@include('includes.footer')
</body>
</html>
