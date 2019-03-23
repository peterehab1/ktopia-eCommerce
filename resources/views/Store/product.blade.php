@extends('Store/base')
@section('title', 'المنتج')
@section('content')
<!----####-->

<style>
    .select-menu-product {
        width: 90px;
        margin-top: 10px;
        font-size: 15px;
        line-height: 1.5;
        border-radius: .3rem;
        direction: rtl;
    }

    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;

    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }

    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;

    }
</style>

<div class="container">

    <div class="card">
        <div class="row">
            <aside class="col-sm-5">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-600x600.png"></a>
                        </div>
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        <div class="item-gallery"> <img
                                src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/15-shop-600x600.png">
                        </div>
                        <div class="item-gallery"> <img
                                src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-a-600x600.png">
                        </div>
                        <div class="item-gallery"> <img
                                src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-b-600x600.png">
                        </div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7" style="text-align: right;">
                <article class="card-body p-5">
                    <h3 class="title mb-3"> كرسي متعدد الأستخدامات . <a style="font-size: 13px;font-weight: normal;"
                            href="##"> معفوشات </a></h3>

                    <p class="price-detail-wrap">
                        <span class="price h3 text-warning">
                            <span style="margin: 5px;" class="currency"> جنية </span> <span style="float: right;"
                                class="num"> 1299 </span>
                        </span>
                        <br>

                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>الوصف</dt>
                        <dd>
                            <p> هذا كرسي يساعدك علي الجلوس , هذا كرسي يساعدك علي الجلوس , هذا كرسي يساعدك علي الجلوس,
                                هذا كرسي يساعدك علي الجلوس </p>
                        </dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>الرقم التسلسلي</dt>
                        <dd>12345611</dd>
                    </dl> <!-- item-property-hor .// -->

                    <form>
                        <dl class="param param-feature">
                            <dt>اللون</dt>
                            <dd><select class="select-menu-product">
                                    <option>أسود</option>
                                    <option>أزرق</option>
                                    <option>خرا علي دماغك</option>
                                </select></dd>
                        </dl> <!-- item-property-hor .// -->

                        <dl class="param param-feature">
                            <dt>الحجم</dt>
                            <dd><select class="select-menu-product">
                                    <option>صغير</option>
                                    <option>كبير</option>
                                    <option>خرا علي دماغك</option>
                                </select></dd>
                        </dl> <!-- item-property-hor .// -->

                        <dl class="param param-feature">
                            <dt>الكمية</dt>
                            <dd><input required size="2" style="padding: 6px;" class="select-menu-product" value="1"
                                    type="number" name="quantity" /></dd>
                        </dl> <!-- item-property-hor .// -->

                        <hr>
                        @auth
                        <button class="btn btn-lg btn-primary text-uppercase"> أضف للعربة </button>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-lg btn-primary text-uppercase"> أضف للعربة </a>
                        @endauth

                    </form>

                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->

    <br><br>
    <div class="elementor-element elementor-element-3566fc3 elementor-widget elementor-widget-heading" data-id="3566fc3"
        data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="text-center">
                منتجات مشابهة</h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-8f6d81f elementor-widget elementor-widget-spacer" data-id="8f6d81f"
        data-element_type="widget" data-widget_type="spacer.default">
        <div class="elementor-widget-container">
            <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-5ee7c65 elementor-widget elementor-widget-products"
        data-id="5ee7c65" data-element_type="widget" data-widget_type="products.default">
        <div class="elementor-widget-container">
            <div class="miini-widget-products">

                <ul class="products columns-4">
                    <li
                        class="post-601 product type-product status-publish has-post-thumbnail product_cat-dining-room product_tag-chair product_tag-minimal product_tag-wallnut first instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="product-image-wrapper">
                            <a href="http://haintheme.com/demo/wp/minim/product/kime-chair-2/"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="600"
                                    height="600"
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-600x600.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Product image"
                                    data-origin_src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-600x600.png"
                                    srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-250x250.png 250w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-150x150.png 150w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-300x300.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/2-shop-100x100.png 100w"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                                <span class="hover-product-image"
                                    style="background-image: url(http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/15-shop.png);"></span>
                            </a>


                            <span class="miini-product-label"
                                style="color: #ffffff; background-color: #007bff">New</span>
                        </div>
                        <h2 class="woocommerce-loop-product__title">
                            <a href="http://haintheme.com/demo/wp/minim/product/kime-chair-2/">Kime
                                Chair</a></h2>

                        <span class="price"><span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>67.90</span>
                            &ndash; <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>124.90</span></span>
                        <div class="pro-swatch-list"><span class="p-attr-swatch p-attr-image " title="chair-black"
                                data-src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/1-z-600x600.jpg"><img
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/1-z.jpg"
                                    alt="Swatch image"></span><span class="p-attr-swatch p-attr-image " title="chair"
                                data-src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/9-b-600x600.jpg"><img
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/9-b.jpg"
                                    alt="Swatch image"></span></div>
                        <a href="http://haintheme.com/demo/wp/minim/product/kime-chair-2/" data-quantity="1"
                            class="button product_type_variable add_to_cart_button" data-product_id="601"
                            data-product_sku="DN58282" aria-label="Select options for &ldquo;Kime Chair&rdquo;"
                            rel="nofollow"></a>
                    </li>
                    <li
                        class="post-616 product type-product status-publish has-post-thumbnail product_cat-furniture product_tag-caddy product_tag-tea instock shipping-taxable purchasable product-type-simple">
                        <div class="product-image-wrapper">
                            <a href="http://haintheme.com/demo/wp/minim/product/kime-tea-caddy/"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="600"
                                    height="600"
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-600x600.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Product image"
                                    data-origin_src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-600x600.png"
                                    srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-250x250.png 250w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-150x150.png 150w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-300x300.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-100x100.png 100w"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                                <span class="hover-product-image"
                                    style="background-image: url(http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/3-shop-a.png);"></span>
                            </a>


                            <span class="miini-product-label"
                                style="color: #ffffff; background-color: #007bff">New</span>
                        </div>
                        <h2 class="woocommerce-loop-product__title">
                            <a href="http://haintheme.com/demo/wp/minim/product/kime-tea-caddy/">Kime
                                Tea Caddy</a></h2>

                        <span class="price"><span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">&#36;</span>29.90</span></span>
                        <a href="/demo/wp/minim/?add-to-cart=616" data-quantity="1"
                            class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="616"
                            data-product_sku="DN582828" aria-label="Add &ldquo;Kime Tea Caddy&rdquo; to your cart"
                            rel="nofollow"></a>
                    </li>
                    <li
                        class="post-629 product type-product status-publish has-post-thumbnail product_cat-dining-room product_cat-furniture product_tag-case instock sale shipping-taxable purchasable product-type-simple">

                        <span class="onsale">
                            Sale </span>

                        <div class="product-image-wrapper">
                            <a href="http://haintheme.com/demo/wp/minim/product/earphone-case/"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="600"
                                    height="600"
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-600x600.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Product image"
                                    data-origin_src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-600x600.png"
                                    srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-250x250.png 250w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-150x150.png 150w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-300x300.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-100x100.png 100w"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                                <span class="hover-product-image"
                                    style="background-image: url(http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/6-shop-a.png);"></span>
                            </a>


                        </div>
                        <h2 class="woocommerce-loop-product__title">
                            <a href="http://haintheme.com/demo/wp/minim/product/earphone-case/">Earphone
                                Case</a></h2>

                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">&#36;</span>49.90</span></del>
                            <ins><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">&#36;</span>29.90</span></ins></span>
                        <a href="/demo/wp/minim/?add-to-cart=629" data-quantity="1"
                            class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="629"
                            data-product_sku="DN582842" aria-label="Add &ldquo;Earphone Case&rdquo; to your cart"
                            rel="nofollow"></a>
                    </li>
                    <li
                        class="post-631 product type-product status-publish has-post-thumbnail product_cat-furniture product_tag-home product_tag-table last instock sale shipping-taxable purchasable product-type-simple">

                        <span class="onsale">
                            Sale </span>

                        <div class="product-image-wrapper">
                            <a href="http://haintheme.com/demo/wp/minim/product/horrison-table/"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="600"
                                    height="600"
                                    src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-600x600.png"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Product image"
                                    data-origin_src="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-600x600.png"
                                    srcset="http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop.png 600w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-250x250.png 250w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-150x150.png 150w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-300x300.png 300w, http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-100x100.png 100w"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                                <span class="hover-product-image"
                                    style="background-image: url(http://haintheme.com/demo/wp/minim/wp-content/uploads/2019/01/5-shop-a.png);"></span>
                            </a>


                        </div>
                        <h2 class="woocommerce-loop-product__title">
                            <a href="http://haintheme.com/demo/wp/minim/product/horrison-table/">Horrison
                                Table</a></h2>
                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">&#36;</span>397.90</span></del>
                            <ins><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">&#36;</span>350.90</span></ins></span>
                        <a href="/demo/wp/minim/?add-to-cart=631" data-quantity="1"
                            class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="631"
                            data-product_sku="DN582833" aria-label="Add &ldquo;Horrison Table&rdquo; to your cart"
                            rel="nofollow"></a>
                    </li>

                </ul>
            </div>

        </div>
    </div>

</div>
<!--container.//-->

<!----####-->
@endsection