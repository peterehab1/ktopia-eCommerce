@extends('Store/base')
@section('title', ''.$category->name_ar.'')
@section('content')
<!----####-->

<section
class="elementor-element elementor-element-470591b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
>
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
                            <h2 style="text-align: center;">{{ $category->name_ar }} </h2>
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
                                    
                                    @foreach ($category_products as $p)
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
                    <div class="elementor-element elementor-element-602a4de elementor-align-center elementor-widget elementor-widget-button"
                        data-id="602a4de" data-element_type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                
                                    <span>
                                        {{ $category_products->links() }}

                                    </span>
                                
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

@endsection