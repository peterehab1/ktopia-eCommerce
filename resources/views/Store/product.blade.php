@extends('Store/base')
@section('title', ''.$product->name_ar.'')
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
                                    src="{{ asset('Store/images/products/'.$product->pic1.'') }}"></a>
                        </div>
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        @if ($product->pic2)
                            <div class="item-gallery"> <img
                                src="{{ asset('Store/images/products/'.$product->pic2.'') }}">
                            </div>
                        @endif
                        @if ($product->pic3)
                        <div class="item-gallery"> <img
                            src="{{ asset('Store/images/products/'.$product->pic3.'') }}">
                        </div>
                    @endif
                        
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7" style="text-align: right;">
                <article class="card-body p-5">
                    <h3 class="title mb-3">{{ $product->name_ar }} . <a style="font-size: 13px;font-weight: normal;"
                            href="##"> {{ $product->category->name_ar }} </a></h3>

                    <p class="price-detail-wrap">
                        <span class="price h3 text-warning">
                            <span style="margin: 5px;" class="currency"> جنية </span> <span style="float: right;"
                                class="num"> {{ $product->price }} </span>
                        </span>
                        <br>

                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>الوصف</dt>
                        <dd>
                            <p> {{ $product->body_ar }} </p>
                        </dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>الرقم التسلسلي</dt>
                        <dd>{{ $product->key }}</dd>
                    </dl> <!-- item-property-hor .// -->

                    <form method="POST" action="{{ route('add-to-cart') }}">
                        {{ csrf_field() }}
                        <?php
                            $product_colors = $product->colors;
                            $product_sizes = $product->sizes;

                            $colors = explode(',', $product_colors);    
                            $sizes = explode(',', $product_sizes);    
                        ?>

                        <input hidden name="product_price" type="number" step="0.01" value="{{ $product->price }}">
                        <input hidden name="product_id" type="number" value="{{ $product->id }}">

                        @if ($colors[0])
                            <dl class="param param-feature">
                                <dt>اللون</dt>
                                <dd>
                                    <select name="product_color" class="select-menu-product">
                                       
                                       @foreach ($colors as $color)
                                            <option value="{{ $color }}">{{ $color }}</option>
                                       @endforeach
    
                                    </select>
                                </dd>
                            </dl> <!-- item-property-hor .// -->
                        @endif
                        
                        @if ($sizes[0])
                        <dl class="param param-feature">
                            <dt>الحجم</dt>
                            <dd>
                                <select name="product_size" class="select-menu-product">
                                   
                                   @foreach ($sizes as $size)
                                        <option value="{{ $size }}">{{ $size }}</option>
                                   @endforeach

                                </select>
                            </dd>
                        </dl> <!-- item-property-hor .// -->
                        @endif

                        <dl class="param param-feature">
                            <dt>الكمية</dt>
                            <dd><input required size="2" style="padding: 6px;" class="select-menu-product" value="1"
                                    type="number" name="product_quantity" /></dd>
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
                    
                   
                    @foreach ($similar_products as $p)
                    <li
                    class="post-616 product type-product status-publish has-post-thumbnail product_cat-furniture product_tag-caddy product_tag-tea instock shipping-taxable purchasable product-type-simple">
                        <div class="product-image-wrapper">
                            <a href="{{ url('/product/'.$p->key.'') }}"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                    width="600" height="600"
                        src="{{ asset('Store/images/products/'.$p->pic1.'') }}"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    alt="Product image"
                                    
                                    sizes="(max-width: 600px) 100vw, 600px" />
                                
                            </a>
                            
                        </div>
                        <h2 class="woocommerce-loop-product__title">
                            <a
                            href="{{ url('/product/'.$p->key.'') }}">{{ $p->name_ar }}</a></h2>
                    
                        <span class="price" style="direction: rtl;"><span
                                class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol"></span>{{ $p->price }} جنية</span></span>
                        
                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </div>

</div>
<!--container.//-->

<!----####-->
@endsection