@extends('Store/base')
@section('title', 'Page Title')
@section('content')

<main class="page-content">
    <div id="page-1153" class="post-1153 page type-page status-publish hentry">
        <div data-elementor-type="post" data-elementor-id="1153" class="elementor elementor-1153"
            data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                        class="elementor-element elementor-element-b7c4ad5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                        data-id="b7c4ad5" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-4233536 elementor-column elementor-col-100 elementor-top-column"
                                    data-id="4233536" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-b3d6aa8 elementor-widget elementor-widget-shortcode"
                                                data-id="b3d6aa8" data-element_type="widget"
                                                data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <link
                                                            href="http://fonts.googleapis.com/css?family=Poppins:600%2C400"
                                                            rel="stylesheet" property="stylesheet"
                                                            type="text/css" media="all">
                                                        <div id="rev_slider_5_1_wrapper"
                                                            class="rev_slider_wrapper fullwidthbanner-container"
                                                            data-source="gallery"
                                                            style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                            <!--Peter-->
                                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                                <ol class="carousel-indicators">
                                                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                                </ol>
                                                                <div class="carousel-inner">
                                                                  <div class="carousel-item active">
                                                                    <img class="d-block w-100" src="Store/images/slider-home1-a.png" alt="First slide">
                                                                  </div>
                                                                  <div class="carousel-item">
                                                                    <img class="d-block w-100" src="Store/images/slider-home1-b.png" alt="Second slide">
                                                                  </div>
                                                                  <div class="carousel-item">
                                                                    <img class="d-block w-100" src="Store/images/slider-home1-a.png" alt="Third slide">
                                                                  </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                  <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                  <span class="sr-only">Next</span>
                                                                </a>
                                                              </div>                                                                 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-element elementor-element-470591b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible elementor-section elementor-top-section"
                        data-id="470591b" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-6812bf4 elementor-column elementor-col-100 elementor-top-column"
                                    data-id="6812bf4" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-28a17e0 elementor-widget elementor-widget-spacer"
                                                data-id="28a17e0" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3566fc3 elementor-widget elementor-widget-heading"
                                                data-id="3566fc3" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2
                                                        class="">
                                                       منتجات مضافة حديثاً</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8f6d81f elementor-widget elementor-widget-spacer"
                                                data-id="8f6d81f" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5ee7c65 elementor-widget elementor-widget-products"
                                                data-id="5ee7c65" data-element_type="widget"
                                                data-widget_type="products.default">
                                                <div class="elementor-widget-container">
                                                    <div class="miini-widget-products">

                                                        <ul class="products columns-4">
                                                            
                                                            @foreach ($products as $p)
                                                            <li
                                                            class="post-616 product type-product status-publish has-post-thumbnail product_cat-furniture product_tag-caddy product_tag-tea instock shipping-taxable purchasable product-type-simple">
                                                            <div class="product-image-wrapper">
                                                                <a href="http://haintheme.com/demo/wp/minim/product/kime-tea-caddy/"
                                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                                        width="600" height="600"
                                                            src="{{ asset('Store/images/products/'.$p->pic1.'') }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="Product image"
                                                                        
                                                                        sizes="(max-width: 600px) 100vw, 600px" />
                                                                    
                                                                </a>
                                                                

                                                                <span class="miini-product-label"
                                                                    style="color: #ffffff; background-color: #007bff">New</span>
                                                            </div>
                                                            <h2 class="woocommerce-loop-product__title">
                                                                <a
                                                            href="http://haintheme.com/demo/wp/minim/product/kime-tea-caddy/">{{ $p->name_ar }}</a></h2>
                                                          
                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>{{ $p->price }} جنية</span></span>
                                                            <a href="/demo/wp/minim/?add-to-cart=616"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="616"
                                                                data-product_sku="DN582828"
                                                                aria-label="Add &ldquo;Kime Tea Caddy&rdquo; to your cart"
                                                                rel="nofollow"></a>
                                                        </li>
                                                            @endforeach
                                                            
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-602a4de elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="602a4de" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="http://haintheme.com/demo/wp/minim/shop"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">All
                                                                    Products</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ec48187 elementor-widget elementor-widget-spacer"
                                                data-id="ec48187" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    
                    <section
                        class="elementor-element elementor-element-713dae1 latest-new_home elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                        data-id="713dae1" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-dcaadf8 elementor-column elementor-col-100 elementor-top-column"
                                    data-id="dcaadf8" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-4af4f13 elementor-widget elementor-widget-spacer"
                                                data-id="4af4f13" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0b347b4 elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="0b347b4" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2
                                                        class="elementor-heading-title elementor-size-default">
                                                        latest news</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c916c70 elementor-widget elementor-widget-spacer"
                                                data-id="c916c70" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f8d8ca0 elementor-invisible elementor-widget elementor-widget-miini-blog-posts"
                                                data-id="f8d8ca0" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="miini-blog-posts.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="wd-blog ht-grid ht-grid-3 ht-grid-tablet-2 ht-grid-mobile-1">
                                                        <div class="ht-grid-item post-layout-classic"
                                                            itemscope="itemscope"
                                                            itemtype="https://schema.org/Article">
                                                            <article itemprop="mainEntityOfPage">
                                                                <div class="entry-thumbnail thumbnail-wrap">
                                                                    <a
                                                                        href="http://haintheme.com/demo/wp/minim/hello-world/">
                                                                        <img width="840" height="440"
                                                                            src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail.png"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail.png 840w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-600x314.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-300x157.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-768x402.png 768w"
                                                                            sizes="(max-width: 840px) 100vw, 840px" />
                                                                    </a>
                                                                </div>
                                                                <div class="entry-wrapper
                                            ">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-categorie">
                                                                            <a href="http://haintheme.com/demo/wp/minim/category/architect/"
                                                                                rel="tag">Architect</a>
                                                                        </div>
                                                                    </div>

                                                                    <h3 class="entry-title">
                                                                        <a
                                                                            href="http://haintheme.com/demo/wp/minim/hello-world/">7
                                                                            thoughts on simplifying your
                                                                            furniture</a>
                                                                    </h3>
                                                                    <div
                                                                        class="entry-description description-box-flex">
                                                                        Donec accumsan auctor iaculis. Sed
                                                                        suscipit arcu ligula, at
                                                                        egestas&hellip; </div>
                                                                    <div class="read-more">
                                                                        <a href="http://haintheme.com/demo/wp/minim/hello-world/"
                                                                            class="read-more">
                                                                            Read more
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="ht-grid-item post-layout-classic"
                                                            itemscope="itemscope"
                                                            itemtype="https://schema.org/Article">
                                                            <article itemprop="mainEntityOfPage">
                                                                <div class="entry-thumbnail thumbnail-wrap">
                                                                    <a
                                                                        href="http://haintheme.com/demo/wp/minim/2018-color-trends-for-your-home-interior/">
                                                                        <img width="840" height="440"
                                                                            src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2.png"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2.png 840w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-600x314.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-300x157.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-768x402.png 768w"
                                                                            sizes="(max-width: 840px) 100vw, 840px" />
                                                                    </a>
                                                                </div>
                                                                <div class="entry-wrapper
                                            ">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-categorie">
                                                                            <a href="http://haintheme.com/demo/wp/minim/category/trending/"
                                                                                rel="tag">Trending</a>
                                                                        </div>
                                                                    </div>

                                                                    <h3 class="entry-title">
                                                                        <a
                                                                            href="http://haintheme.com/demo/wp/minim/2018-color-trends-for-your-home-interior/">2018
                                                                            color trends for your home
                                                                            interior</a>
                                                                    </h3>
                                                                    <div
                                                                        class="entry-description description-box-flex">
                                                                        Donec accumsan auctor iaculis. Sed
                                                                        suscipit arcu ligula, at
                                                                        egestas&hellip; </div>
                                                                    <div class="read-more">
                                                                        <a href="http://haintheme.com/demo/wp/minim/2018-color-trends-for-your-home-interior/"
                                                                            class="read-more">
                                                                            Read more
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="ht-grid-item post-layout-classic"
                                                            itemscope="itemscope"
                                                            itemtype="https://schema.org/Article">
                                                            <article itemprop="mainEntityOfPage">
                                                                <div class="entry-thumbnail thumbnail-wrap">
                                                                    <a
                                                                        href="http://haintheme.com/demo/wp/minim/7-thoughts-on-simplifying-your-furniture/">
                                                                        <img width="840" height="440"
                                                                            src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2.png"
                                                                            class="attachment-full size-full wp-post-image"
                                                                            alt=""
                                                                            srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2.png 840w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-600x314.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-300x157.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2018/12/blog-thumbnail-2-768x402.png 768w"
                                                                            sizes="(max-width: 840px) 100vw, 840px" />
                                                                    </a>
                                                                </div>
                                                                <div class="entry-wrapper
                                            ">
                                                                    <div class="entry-meta">
                                                                        <div class="entry-categorie">
                                                                            <a href="http://haintheme.com/demo/wp/minim/category/architect/"
                                                                                rel="tag">Architect</a>
                                                                        </div>
                                                                    </div>

                                                                    <h3 class="entry-title">
                                                                        <a
                                                                            href="http://haintheme.com/demo/wp/minim/7-thoughts-on-simplifying-your-furniture/">7
                                                                            thoughts on simplifying your
                                                                            furniture</a>
                                                                    </h3>
                                                                    <div
                                                                        class="entry-description description-box-flex">
                                                                        Donec accumsan auctor iaculis. Sed
                                                                        suscipit arcu ligula, at
                                                                        egestas&hellip; </div>
                                                                    <div class="read-more">
                                                                        <a href="http://haintheme.com/demo/wp/minim/7-thoughts-on-simplifying-your-furniture/"
                                                                            class="read-more">
                                                                            Read more
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-74a4e40 elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="74a4e40" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="http://haintheme.com/demo/wp/minim/blog"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">All Blog
                                                                    Posts</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-19a638f elementor-widget elementor-widget-spacer"
                                                data-id="19a638f" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection