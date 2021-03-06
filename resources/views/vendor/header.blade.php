@inject('banner', 'App\Models\Banner')

<div id="header-replacer-on-scroll"></div>
<!-- Header Section Start From Here -->
<header class="header-wrapper">
    <div class="header-top header-top-2 bg-blue ptb-30px d-xl-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a class="h1 text-white font-weight-bold" href="/">MIRU.GE</a>
                    </div>
                </div>
                <div class="col-md-10 align-self-center">
                    <div class="header-right-element d-flex">
                        <div class="search-element media-body">
                            <form action="/search" method="GET" class="d-flex">
                                <input 
                                    type="text" 
                                    name="keyword"
                                    placeholder="ჩაწერეთდ საძიებო სიტყვა ... " 
                                    required
                                />
                                <button type="submit" title="ძებნა">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                        <!--Cart info Start -->
                        <div class="header-tools tools-style-2 d-flex">
                            <div class="cart-info d-flex align-self-center">
                                <a title="კალათა" href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="{{ $cart->item_amount() }}"><i class="icon-bag"></i><span>{{ $cart->total_price() }}₾</span></a>
                            </div>
                        </div>
                    </div>
                    <!--Cart info End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class="header-menu header-menu-3 bg-white sticky-nav d-xl-block d-none padding-0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 custom-col-2">
                    <!-- header menu vertical -->
                </div>
                <div class="col-lg-9 custom-col-2">
                    <div class="header-horizontal-menu">
                        <ul class="menu-content">
                            <li class="active menu-dropdown">
                                <a href="/">მთავარი</a>
                            </li>
                            <li class="menu-dropdown">
                                <a href="/watches">საათები <i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu-wrap">
                                    <li class="w-100">
                                        <ul class="banner-megamenu-wrapper d-flex">
                                            <li class="banner-wrapper mr-30px">
                                                <a href="/watches?sex=men"><img src="{{ asset('/images/banner-image/' . $banner->image_name(6)) }}" alt="" /></a>
                                            </li>
                                            <li class="banner-wrapper">
                                                <a href="/watches?type=mechanical"><img src="{{ asset('/images/banner-image/' . $banner->image_name(9)) }}" alt="" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="w-100">
                                        <ul class="banner-megamenu-wrapper d-flex">
                                            <li class="banner-wrapper mr-30px">
                                                <a href="/watches?sex=women"><img src="{{ asset('/images/banner-image/' . $banner->image_name(7)) }}" alt="" /></a>
                                            </li>
                                            <li class="banner-wrapper">
                                                <a href="/watches?type=chronograph"><img src="{{ asset('/images/banner-image/' . $banner->image_name(10)) }}" alt="" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="w-100">
                                        <ul class="banner-megamenu-wrapper d-flex">
                                            <li class="banner-wrapper mr-30px">
                                                <a href="/watches?sex=unisex"><img src="{{ asset('/images/banner-image/' . $banner->image_name(8)) }}" alt="" /></a>
                                            </li>
                                            <li class="banner-wrapper">
                                                <a href="/watches?type=quartz"><img src="{{ asset('/images/banner-image/' . $banner->image_name(11)) }}" alt="" /></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- header horizontal menu -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- header menu -->
</header>
<!-- Header Section End Here -->  