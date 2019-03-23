<!DOCTYPE html>

<html>

<head itemscope="itemscope" itemtype="https://schema.org/WebSite">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title> @yield('title') </title>
    <style>
        .wishlist_table .add_to_cart,
        a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
        }
    </style>
   
    <link href="https://fonts.googleapis.com/css?family=Changa:500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='dns-prefetch' href='//s.w.org' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{ asset('Store/css/style.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css'
        href='{{ asset('Store/css/theme.min.css') }}'
        type='text/css' media='all' />

    <link rel='stylesheet' id='wp-block-library-theme-css'
        href='{{ asset('Store/css/slick.min.css') }}'
        type='text/css' media='all' />

    <link rel='stylesheet' id='sb_instagram_styles-css'
        href='{{ asset('Store/css/sb-instagram.min.css') }}'
        type='text/css' media='all' />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='{{ asset('Store/css/settings.css') }}'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='miini-theme-style-css'
        href='{{ asset('Store/css/style.css') }}' type='text/css'
        media='all' />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style id='font-awesome-inline-css' type='text/css'>
        [data-font="FontAwesome"]:before {
            font-family: 'FontAwesome' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel='stylesheet' id='elementor-icons-css'
        href='http://haintheme.com/demo/wp/minim/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=4.3.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css'
        href='{{ asset('Store/css/animations.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('Store/css/frontend.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='{{ asset('Store/css/global.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-1153-css'
        href='{{ asset('Store/css/post-1153.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.1.1'
        type='text/css' media='all' />
    
    <script type='text/javascript'
        src='{{ asset('Store/js/jquery.js') }}'></script>

    

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 5.4.7.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png"
        sizes="32x32" />
    <link rel="icon" href="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png"
        sizes="192x192" />
    <link rel="apple-touch-icon-precomposed"
        href="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png" />
    <meta name="msapplication-TileImage"
        content="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png" />
    <script type="text/javascript">function setREVStartSize(e) {
            try {
            e.c = jQuery(e.c); var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) { f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e) }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) { var u = (e.c.width(), jQuery(window).height()); if (void 0 != e.fullScreenOffsetContainer) { var c = e.fullScreenOffsetContainer.split(","); if (c) jQuery.each(c, function (e, i) { u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0)) } f = u } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight); e.c.closest(".rev_slider_wrapper").css({ height: f })
            } catch (d) { console.log("Failure at Presize of Slider:" + d) }
        };</script>
    <style id="kirki-inline-styles">
        .topbar {
            color: #666666;
            background-color: #f7f7f7;
        }

        .menu-layout-1 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-1 .theme-primary-menu>li>a:hover,
        .menu-layout-1 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-1 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-1 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-1 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-1 .theme-primary-menu>li:hover>a,
        .menu-layout-1 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-1 .theme-primary-menu li ul a:hover,
        .menu-layout-1 .theme-primary-menu li.current-menu-item>a {
            color: #007bff;
        }

        .menu-layout-2 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-2 .theme-primary-menu>li>a:hover,
        .menu-layout-2 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-2 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-2 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-2 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-2 .theme-primary-menu>li:hover>a,
        .menu-layout-2 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-2 .theme-primary-menu li ul a:hover,
        .menu-layout-2 .theme-primary-menu li.current-menu-item>a {
            color: #007bff;
        }

        .menu-layout-3 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-3 .theme-primary-menu>li>a:hover,
        .menu-layout-3 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-3 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-3 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-3 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-3 .theme-primary-menu>li:hover>a,
        .menu-layout-3 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-3 .theme-primary-menu li ul a:hover,
        .menu-layout-3 .theme-primary-menu li.current-menu-item>a {
            color: #007bff;
        }

        .menu-layout-4 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-4 .theme-primary-menu>li>a:hover,
        .menu-layout-4 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-4 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-4 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-4 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-4 .theme-primary-menu>li:hover>a,
        .menu-layout-4 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-4 .theme-primary-menu li ul a:hover,
        .menu-layout-4 .theme-primary-menu li.current-menu-item>a {
            color: #007bff;
        }

        .menu-layout-6 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-6 .theme-primary-menu>li>a:hover,
        .menu-layout-6 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-6 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-6 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-6 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-6 .theme-primary-menu>li:hover>a,
        .menu-layout-6 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-6 .theme-primary-menu li ul a:hover,
        .menu-layout-6 .theme-primary-menu li.current-menu-item>a {
            color: #007bff;
        }

        .menu-layout-6 .m-col .search-submit {
            color: #007bff;
        }

        .menu-layout-6 .m-col .search-field {
            color: #3c3c3c;
        }

        .menu-layout-7 .header-container {
            padding: 20px 0;
        }

        .menu-layout-7 .theme-primary-menu .mega-menu-row .sub-menu a:hover,
        .menu-layout-7 .theme-primary-menu>li>a:hover,
        .menu-layout-7 .theme-primary-menu>li.current-menu-ancestor>a,
        .menu-layout-7 .theme-primary-menu>li.current-menu-parent>a,
        .menu-layout-7 .theme-primary-menu>li.current_page_ancestor>a,
        .menu-layout-7 .theme-primary-menu>li.current_page_parent>a,
        .menu-layout-7 .theme-primary-menu>li:hover>a,
        .menu-layout-7 .theme-primary-menu>li:not(.menu-item-has-mega-menu) ul a:hover,
        .menu-layout-7 .theme-primary-menu li ul a:hover,
        .menu-layout-7 .theme-primary-menu li.current-menu-item>a {
            color: #c5c5c5;
            text-decoration: none;
            
        }

        .menu-layout-7 .m-col .search-submit {
            color: #007bff;
        }

        .ph-layout-1 {
            height: 200px;
            margin-bottom: 50px;
            background: #ffffff;
            background-color: #ffffff;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .ph-layout-2 {
            height: 55px;
            background: #f6f8f7;
            background-color: #f6f8f7;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .ph-layout-3 {
            height: 180px;
            margin-bottom: 50px;
            background: #f6f6f6;
            background-color: #f6f6f6;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .ph-layout-4 {
            height: 180px;
            margin-bottom: 50px;
            background: #f6f6f6;
            background-color: #f6f6f6;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .blog .ph-layout-1,
        .page-id-2087 .ph-layout-1,
        .page-id-2224 .ph-layout-1,
        .page-id-266 .ph-layout-1,
        .page-id-281 .ph-layout-1,
        .single-format-standard .ph-layout-1 {
            background-image: url("http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/hero-blog.png");
            background-color: rgba(255, 255, 255, 0.8);
            background-repeat: repeat;
            background-position: center center;
            background-attachment: scroll;
            height: 480px;
            margin-bottom: 100px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .page-id-27 .ph-layout-1 {
            background: #f6f8f7;
            background-color: #f6f8f7;
            background-repeat: repeat;
            background-position: center center;
            background-attachment: scroll;
            height: 250px;
            margin-bottom: 50px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .menu-woo-action:hover .menu-woo-user,
        .read-more-link,
        .size-guide__close:focus,
        .size-guide__close:hover,
        .wd-pro-flash-sale .price ins,
        .woocommerce-form-coupon-toggle .woocommerce-info a,
        .woocommerce-form-login-toggle .woocommerce-info a,
        .woocommerce-mini-cart__total .amount,
        a:not(.woocommerce-loop-product__link):hover {
            color: #007bff;
        }

        #page-loader #nprogress .bar,
        .scroll-to-top,
        #sidebar-menu-content .theme-primary-menu a:before,
        #sidebar-menu-content .theme-primary-menu a:hover:before,
        .cart-sidebar-content .woocommerce-mini-cart__buttons .checkout,
        .loop-action .product-quick-view-btn:hover,
        .loop-action .yith-wcwl-add-to-wishlist a:hover,
        .loop-action a:hover,
        .menu-woo-cart span,
        .shop-cart-count,
        .sidebar-action-cart {
            background-color: #007bff;
        }

        .blog-read-more:hover,
        .entry-categories a,
        .not-found .back-to-home,
        .p-attr-swatch.p-attr-label.active,
        .swatch.selected:before {
            border-color: #007bff;
        }

        .blog-read-more:hover,
        .woocommerce-tabs .tabs li.active a {
            border-bottom-color: #007bff;
        }

        .is-loading-effect:before {
            border-top-color: #007bff;
        }

        .blog-read-more,
        .ht-pagination ul .current {
            background-color: #bdefd7;
            color: #3c3c3c;
        }

        body {
            
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 26px;
            text-transform: none;
            color: #666;
        }

        .comment-form-rating .stars.selected .active~a,
        .comment-form-rating .stars.selected a:hover~a,
        .comment-form-rating .stars:not(.selected) a:hover~a,
        .price del,
        .product_meta>span a,
        .product_meta>span span,
        .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link a,
        .woocommerce-loop-product__title,
        a,
        input,
        select,
        textarea,
        button {
            color: #666;
        }

        input,
        select,
        textarea,
        button {
            font-family: 'Changa', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Changa', sans-serif;
            font-weight: 600;
            letter-spacing: 0px;
            line-height: 1.2em;
            text-transform: none;
            color: #222;
        }

        #order_review .shop_table tfoot strong,
        #order_review .shop_table tfoot tr th:first-of-type,
        #shipping_method input[type="radio"]:checked+label,
        #shipping_method input[type="radio"]:checked+label:before,
        #theme-search-btn,
        .blog-article .theme-social-icon a:hover,
        .comment-author-name,
        .form-row>label,
        .form-row input[type="email"],
        .form-row input[type="tel"],
        .form-row input[type="text"],
        .form-row textarea,
        .ht-pagination ul .page-numbers:not(.current),
        .menu-woo-cart,
        .menu-woo-user,
        .methods input[type="radio"]:checked+label,
        .methods input[type="radio"]:checked+label:before,
        .onsale,
        .price>.amount,
        .price ins,
        .product_meta .p-shared>span,
        .product_meta>span,
        .shop-sidebar .wcapf-layered-nav .chosen,
        .single .blog-header-info .if-item a,
        .summary .yith-wcwl-add-to-wishlist a,
        .variations .label label,
        .widget.widget_shopping_cart .woocommerce-mini-cart__total strong,
        .woocommerce-MyAccount-navigation .woocommerce-MyAccount-navigation-link.is-active a,
        .woocommerce-cart .woocommerce-cart-form th,
        .woocommerce-form-coupon-toggle .woocommerce-info,
        .woocommerce-form-login-toggle .woocommerce-info,
        .woocommerce-loop-product__title:hover,
        .woocommerce-review__author,
        .woocommerce-tabs .tabs li a:hover,
        .woocommerce-tabs .tabs li.active a {
            color: #222;
        }

        .t-bold {
            font-family: 'Changa', sans-serif;
        }

        #place_order,
        .cart .single_add_to_cart_button,
        .flash-sale-atc a,
        .footer-subscribe-form button,
        .loop-action .miini-add-to-cart-btn,
        .loop-action .product-quick-view-btn,
        .loop-action .yith-wcwl-add-to-wishlist a,
        .lost_reset_password button[type="submit"],
        .price_slider_wrapper .price_slider_amount button,
        .price_slider_wrapper .ui-widget-header,
        .shop-sidebar .woocommerce-widget-layered-nav-dropdown__submit,
        .widget.widget_shopping_cart .woocommerce-mini-cart__buttons a,
        .woocommerce-MyAccount-content .woocommerce-EditAccountForm button[type="submit"],
        .woocommerce-address-fields .button,
        .woocommerce-cart .woocommerce-shipping-calculator button[type="submit"],
        .woocommerce-form-coupon button[type="submit"],
        .woocommerce-form-login button[type="submit"],
        .woocommerce-form-register button[type="submit"] {
            background-color: #222;
        }

        .ht-pagination ul a:hover,
        .woocommerce-pagination ul a:hover {
            border-color: #222;
        }

        .summary .yith-wcwl-add-to-wishlist {
            border-bottom-color: #222;
        }

        h1 {
            font-size: 46px;
        }

        h2 {
            font-size: 28px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 22px;
        }

        h5 {
            font-size: 20px;
        }

        h6 {
            font-size: 18px;
        }

        #theme-footer {
            background: #ffffff;
            background-color: #ffffff;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .theme-logo {
            width: 80px;
        }

        @media (min-width: 992px) {
            .menu-layout-1 {
                background-color: #fff;
            }

            .menu-layout-1 .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-1 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-2 {
                background-color: rgba(255, 255, 255, 0);
            }

            .menu-layout-2 .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-2 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-3 {
                background-color: transparent;
            }

            .menu-layout-3 .search-btn,
            .menu-layout-3 .tel-number,
            .menu-layout-3 .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-3 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-4 .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 14px;
                font-weight: 400;
                letter-spacing: 0px;
                text-transform: none;
                color: #fff;
            }

            .menu-layout-4 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-6 {
                background-color: rgba(255, 255, 255, 0);
            }

            .menu-header-layout1 li>a,
            .menu-layout-6 .content-center .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-6 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-7 {
                background-color: rgba(255, 255, 255, 0);
            }

            .menu-layout-7 .theme-primary-menu>li>a {
                font-family: 'Changa', sans-serif;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 0px;
                text-transform: none;
                color: #3c3c3c;
            }

            .menu-layout-7 .theme-primary-menu .sub-menu a {
                font-family: 'Changa', sans-serif;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0px;
                text-transform: none;
                color: #333;
            }
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v6/pxiEyp8kv8JHgFVrFJM.woff) format('woff');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            src: local('Poppins Medium'), local('Poppins-Medium'), url(https://fonts.gstatic.com/s/poppins/v6/pxiByp8kv8JHgFVrLGT9V1g.woff) format('woff');
        }

        @font-face {
            font-display: swap;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(https://fonts.gstatic.com/s/poppins/v6/pxiByp8kv8JHgFVrLEj6V1g.woff) format('woff');
        }
    </style>
</head>

<body
    class="home page-template-default page page-id-1153 wp-custom-logo wp-embed-responsive woocommerce-no-js is-page-loading shop-buttons-is-sticky is-page-header-disable ajax-single-add-to-cart miini-1.0 has-menu-layout-7 elementor-default elementor-page elementor-page-1153">
    <div id="page-loader"></div>

    <div id="theme-container">

        <div id="sidebar-menu-content" class="menu-layout menu-layout-7 sidebar-menu">
            <div class="sidebar-menu-top">
                <form role="search" method="get" class="search-form" action="http://haintheme.com/demo/wp/minim/"><label
                        class="screen-reader-text">Search for:</label><button type="submit"
                        class="search-submit"><i class="fas fa-search"></i></button><input type="text" class="search-field"
                        placeholder=" بحث " value="" name="s" required /></form>
            </div><!-- .sidebar-menu-top -->

            <div class="sidebar-menu-middle">
                <ul id="menu-main-nav" class="theme-primary-menu theme-sidebar-menu">
                    @foreach ($categories as $c)
                        <li id="menu-item-54"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-54">
                        <a href="http://haintheme.com/demo/wp/minim/">{{ $c->name_ar }}</a>
                        
                        </li>
                    @endforeach
                    
                    
                </ul>
            </div><!-- .sidebar-menu-middle -->

            <div class="sidebar-menu-bottom">
                <ul class="sidebar-actions custom-sidebar-actions">
                    <li class="sidebar-action custom-sidebar-login">
                        <a href="http://haintheme.com/demo/wp/minim/my-account/" class="sidebar-action-link">
                            <i class="fas fa-user"></i>
                            <span class="sidebar-action-text">Login</span>
                        </a>
                    </li>
                    <li class="sidebar-action custom-sidebar-cart">
                        <a href="http://haintheme.com/demo/wp/minim/cart/" id="shopping-cart"
                            class="sidebar-action-link js-cart-button">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="sidebar-action-text">سلة التسوق</span>
                            <span class="sidebar-action-cart shop-cart-count">1</span>
                        </a>
                    </li>
                </ul>
            </div><!-- .sidebar-menu-bottom -->
        </div><!-- #sidebar-menu-content -->

        <div id="theme-menu-pusher">
        
            <div id="theme-menu-layout">
                <div class="menu-layout menu-layout-7 menu-layout-border">
                    <header class="header-box">
                        <div class="container">
                            <div class="header-container">
                                <div class="m-col m1-col">
                                    <button id="menu-toggle-btn"><span></span></button>
                                    <form role="search" method="get" class="search-form"
                                        action="http://haintheme.com/demo/wp/minim/"><label
                                            class="screen-reader-text">Search for:</label><input type="text"
                                            class="search-field" placeholder=" بحث " value="" name="s"
                                            required /><button type="submit"
                                            class="search-submit"><i class="fas fa-search"></i></button></form>
                                </div>

                                <div class="header-logo">
                                    <h1 class="theme-logo" itemscope itemtype="http://schema.org/Organization">
                                        <a class="logo" href="http://haintheme.com/demo/wp/minim/" itemprop="url">
                                            <img class="primary-logo"
                                                src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png"
                                                alt="Logo image" itemprop="logo"
                                                srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png 1x, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo@2x.png 2x">
                                        </a>
                                        <span class="screen-reader-text">Miini &#8211; WordPress Theme</span>
                                    </h1>
                                </div>

                                <div class="m-col m2-col">
                                    <div class="header-action">
                                       
                                        @auth
                                        <div class="menu-woo-action">
                                            <a href="/profile"
                                                class="menu-woo-user"><i class="fas fa-user"></i></a>
                                            <ul>
                                            <li><a href="{{ route('logout') }}" class="text-center" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                       تسجيل الخروج </a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                            </ul>
                                        </div>
                                        @else
                                        <div class="menu-woo-action">
                                            <a href="#"
                                                class="menu-woo-user"><i class="fas fa-user"></i></a>
                                            <ul>
                                            <li><a href="{{ route('login') }}"
                                                        class="text-center">تسجيل الدخول </a></li>
                                            <li><a href="{{ route('register') }}"
                                                        class="text-center"> أنشاء حساب</a></li>
                                            </ul>
                                        </div>
                                        @endauth
                                        
                                        <a href="http://haintheme.com/demo/wp/minim/cart/" id="shopping-cart-btn"
                                            class="menu-woo-cart js-cart-button"><i class="fas fa-shopping-cart"></i><span
                                                class="shop-cart-count">1</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-7-content  menu-home-1">
                                <ul id="menu-main-nav-2" class="theme-primary-menu">
                                   @foreach ($categories as $c)
                                   <li
                                   class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-54">
                                   <a href="http://haintheme.com/demo/wp/minim/">{{ $c->name_ar }}</a>
                                   
                                   </li>
                                   @endforeach

                                    
                                   
                                </ul>
                            </div>
                        </div>

                        <span id="menu-overlay"></span>
                    </header>
                </div>
            </div>


            <div id="theme-page-header">
            </div>

            

            @yield('content')

            <footer id="theme-footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row widget-box footer-col-4">
                            <aside id="custom_html-5" class="widget_text widget footer-widget widget_custom_html">
                                <div class="textwidget custom-html-widget"><a
                                        href="http://haintheme.com/demo/wp/minim"><img
                                            class="alignnone size-full wp-image-65"
                                            src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/miini-logo.png"
                                            alt="" />
                                    </a>
                                    <p class="description-footer">
                                        We are eager to help you to make your house more beautiful, more livable with an
                                        affordable price & good quality of furnitures.
                                    </p>
                                    <ul class="min-list inline-list social-footer">
                                        <li>
                                            <a class="ion-social-facebook"></a>
                                        </li>
                                        <li>
                                            <a class="ion-social-twitter"></a>
                                        </li>
                                        <li>
                                            <a class="ion-social-pinterest-outline"></a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside id="nav_menu-9" class="widget footer-widget widget_nav_menu">
                                <h6 class="widget-title">Shop</h6>
                                <div class="menu-footer-help-container">
                                    <ul id="menu-footer-help" class="menu">
                                        <li id="menu-item-2422"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2422">
                                            <a href="#">Our Stores</a></li>
                                        <li id="menu-item-2423"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2423">
                                            <a href="#">Cart</a></li>
                                        <li id="menu-item-2424"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2424">
                                            <a href="#">My Account</a></li>
                                        <li id="menu-item-2425"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2425">
                                            <a href="#">Wishlist</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside id="nav_menu-10" class="widget footer-widget widget_nav_menu">
                                <h6 class="widget-title">Help</h6>
                                <div class="menu-menu-footer-container">
                                    <ul id="menu-menu-footer" class="menu">
                                        <li id="menu-item-2426"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2426">
                                            <a href="#">Contact</a></li>
                                        <li id="menu-item-2427"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2427">
                                            <a href="#">FAQ</a></li>
                                        <li id="menu-item-2428"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2428">
                                            <a href="#">Returns</a></li>
                                        <li id="menu-item-2429"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2429">
                                            <a href="#">Shipping</a></li>
                                        <li id="menu-item-2430"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2430">
                                            <a href="#">Guides</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside id="custom_html-12" class="widget_text widget footer-widget widget_custom_html">
                                <h6 class="widget-title">Newsletter</h6>
                                <div class="textwidget custom-html-widget">
                                    <div role="form" class="wpcf7" id="wpcf7-f116-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="/demo/wp/minim/#wpcf7-f116-o1" method="post" class="wpcf7-form"
                                            novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="116" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.1" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f116-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                                <input type="hidden" name="g-recaptcha-response" value="" />
                                            </div>
                                            <p><span class="wpcf7-form-control-wrap text-892"><input type="text"
                                                        name="text-892" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-subscribe"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Your@email.com" /></span><br />
                                                <input type="submit" value="Subscribe"
                                                    class="wpcf7-form-control wpcf7-submit subscribe-footer" /></p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                    <p class="footer-subrice_description">
                                        I want emails from Minim with products information, promotions,
                                        advertisements <span class="c-green"> here</span>. Read our <span
                                            class="c-green">Privacy Policy</span>.
                                    </p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>

                <div class="footer-bot">
                    <div class="container">
                        <div class="footer-bot-flex">
                            <div class="footer-copyright">
                                <p>©2019 <span class="c-green"> Minim </span>. All Rights Reserved.</p>
                            </div>
                            <div class="footer-bot-right">
                                <ul class="inline-list social-copyright">
                                    <li><a href="#">PRIVACY POLICY </a></li>
                                    <li><a href="#">TERMS OF SERVICES</a> </li>
                                    <li><a href="#">AFFILIATION</a></li>
                                    <li><a href="#">SPONSORS</a></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <div id="shop-quick-view" data-view_id='0'>
            <button class="quick-view-close-btn ion-ios-close-empty"></button>
            <div class="quick-view-content"></div>
        </div>

        <div id="shop-cart-sidebar">
            <div class="cart-sidebar-head">
                <span class="shop-cart-count"> 1 </span>
                <h4 class="cart-sidebar-title" style="margin-left: 5px;"> سلة التسوق </h4>
                
                <button id="close-cart-sidebar"><i class="fas fa-times"></i></button>
            </div>
            <div class="cart-sidebar-content">


                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="http://haintheme.com/demo/wp/minim/cart/?remove_item=051e4e127b92f5d98d3c79b195f2b291&#038;_wpnonce=e511e31c78"
                            class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="629"
                            data-cart_item_key="051e4e127b92f5d98d3c79b195f2b291"
                            data-product_sku="DN582842"><i class="fas fa-trash"></i></a> <a
                            href="http://haintheme.com/demo/wp/minim/product/earphone-case/">
                            <img width="600" height="600"
                                src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-600x600.png"
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-250x250.png 250w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-150x150.png 150w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-300x300.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-100x100.png 100w"
                                sizes="(max-width: 600px) 100vw, 600px" />Earphone Case </a>
                        <span class="quantity">1 &times; <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>29.90</span></span> </li>
                </ul>

               <!--Subtotal-->


                <p class="woocommerce-mini-cart__buttons buttons"><a href="http://haintheme.com/demo/wp/minim/cart/"
                        class="button wc-forward">تعديل المشتروات</a><a href="http://haintheme.com/demo/wp/minim/checkout/"
                        class="button checkout wc-forward">الحجز</a></p>


            </div>
        </div>

        <div id="shop-overlay"></div>
        <div class="miini-search-form-container js-search-form">
            <div class="container miini-search-form__inner">
                <form action="http://haintheme.com/demo/wp/minim/" method="get" class="miini-search-form">
                    <input type="text" name="s" id="autocomplete" class="miini-search-form__field js-search-field"
                        placeholder=" بحث ">
                    <span class="miini-search-form__desc">Hit Enter to search or Esc key to close</span>
                    <!-- <span class="fa fa-circle-o-notch fa-2x fa-fw miini-search-form__loader"></span> -->
                    <a href="#" class="miini-search-form__close js-close-search-form">
                        <i class="fas fa-times"></i>
                    </a>
                </form><!-- .ajax-search-form -->

                <div class="miini-search-form__suggestions"></div>
            </div><!-- .ajax-search-form__inner -->
        </div><!-- .ajax-search-form-container -->
        <a href="#" class="scroll-to-top js-to-top">
            <i class="ion-chevron-up"></i>
        </a>
    </div><!-- #theme-container -->
    <span class="is-loading-effect"></span><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "http://haintheme.com/demo/wp/minim/wp-admin/admin-ajax.php";
    </script>
    <script type="text/javascript">
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type='text/javascript'
        src='{{ asset('Store/js/jquery.selectBox.min.js') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_wcwl_l10n = { "ajax_url": "\/demo\/wp\/minim\/wp-admin\/admin-ajax.php", "redirect_to_cart": "no", "multi_wishlist": "", "hide_add_button": "1", "is_user_logged_in": "", "ajax_loader_url": "http:\/\/haintheme.com\/demo\/wp\/minim\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif", "remove_from_wishlist_after_add_to_cart": "yes", "labels": { "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.", "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>" }, "actions": { "add_to_wishlist_action": "add_to_wishlist", "remove_from_wishlist_action": "remove_from_wishlist", "move_to_another_wishlist_action": "move_to_another_wishlsit", "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem" } };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.8'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = { "apiSettings": { "root": "http:\/\/haintheme.com\/demo\/wp\/minim\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" } };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='assets/js/scripts.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var sb_instagram_js_options = { "sb_instagram_at": "", "font_method": "svg" };
/* ]]> */
    </script>
    

    <script type='text/javascript'
        src='{{ asset('Store/js/add-to-cart.min.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/js.cookie.min.js') }}'></script>
  
    <script type='text/javascript'
        src='{{ asset('Store/js/woocommerce.min.js') }}'></script>
   
   
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-includes/js/wp-util.min.js?ver=5.1.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = { "wc_ajax_url": "\/demo\/wp\/minim\/?wc-ajax=%%endpoint%%", "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination." };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.5.6'></script>
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-content/themes/miini/js/nprogress.js?ver=5.1.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var global = { "url": "http:\/\/haintheme.com\/demo\/wp\/minim\/wp-admin\/admin-ajax.php", "nonce": "1a4bba0b80" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-content/themes/miini/js/autocomplete.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var miini_ajax = { "url": "http:\/\/haintheme.com\/demo\/wp\/minim\/wp-admin\/admin-ajax.php", "nonce": "389decabfb" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('Store/js/custom.js') }}'></script>

    <script type='text/javascript'
        src='{{ asset('Store/js/slick.min.js') }}'></script>

    <script type='text/javascript'
        src='{{ asset('Store/js/frontend.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/wp-embed.min.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/frontend-modules.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/position.min.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/dialog.min.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/waypoints.min.js') }}'></script>
    <script type='text/javascript'
        src='{{ asset('Store/js/swiper.min.js') }}'></script>
    <script type='text/javascript'>
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "version": "2.5.8", "urls": { "assets": "http:\/\/haintheme.com\/demo\/wp\/minim\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "general": { "elementor_global_image_lightbox": "yes", "elementor_enable_lightbox_in_editor": "yes" } }, "post": { "id": 1153, "title": "Home 1", "excerpt": "" } };
    </script>
    <script type='text/javascript'
        src='http://haintheme.com/demo/wp/minim/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=2.5.8'></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
