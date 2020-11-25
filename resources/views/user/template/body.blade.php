@extends('user/mainindex')

@section('content')
<div id="main">

    <section class="banner section-dark" style="background: #222;">
    <img src="{{asset('img/index.jpg')}}" alt="" width="1920" height="1120">
        <div class="banner-text text-center">
            <h1>Bagan Mart Company Limited Electronic Ecommerce Website</h1>
            <h5 class="mb-5">Bagan Mart Ecommerce Company Limited is one of the largest retailer marts in Yangon. It sells a variety of electronic appliances
                especially for electronic products. 
            </h5>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-outline goto-demos">Let's see categories<i class="icon-long-arrow-alt-down"></i></a></p>
        </div>
    </section>
    
    <section class="section section-demos text-center container-lg">
        <h2>Bagan Mart Electronic Components</h2>
        <p>Comes with 20 homepages available with multi style that better for your choice.<br>Molla store is one of the best Multi-Purpose eCommerce HTML Template for your store.</p>
        <div class="demo-filter menu">
            <a href="#homepages" class="active">Home Pages</a>
            {{-- <a href="#shoppages">Shop Pages</a>
            <a href="#otherpages">Other Pages</a> --}}
        </div>
        
        {{-- Start for Category --}}
        <div class="row demos">
                @foreach ($usercategory as $item)
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 homepages">
                <a href="{{route('baganmart.productpage',$item->id)}}" target="_blank">
                    <img src="{{asset('img/category.png')}}" data-oi="{{asset('img/category.png')}}" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Furniture 1">
                    <h5>{{$item->CategoryName}}</h5>
                </a>
            </div>
        
                @endforeach
        {{-- End for Category --}}
            
        {{-- Start for Services --}}
            {{-- <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category-list.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/21_shop_list.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shop List">
                    <h5>Shop List</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category-2cols.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/22_shop_grid_2col.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shop Grid">
                    <h5>Shop Grid <span>(2 Col)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/23_shop_grid_3col.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shop Grid">
                    <h5>Shop Grid <span>(3 Col)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category-4cols.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/24_shop_grid_4col.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Book Store">
                    <h5>Shop Grid <span>(4 Col)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category-boxed.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/25_shop_boxed_no_sidebar.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shop Boxed">
                    <h5>Shop Boxed <span>(No Sidebar)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="category-fullwidth.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/26_shop_fullwidth_no_sidebar.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shop Fullwidth">
                    <h5>Shop Fullwidth <span>(No Sidebar)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="product-category-boxed.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/27_shop_product_category_boxed.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Product Category">
                    <h5>Product Category <span>(Boxed)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="product-category-fullwidth.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/28_shop_product_category_fullwidth.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Product Category">
                    <h5>Product Category <span>(Full Width)</span></h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="cart.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/29_shop_shopping_cart.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Shopping Cart">
                    <h5>Shopping Cart</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="checkout.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/30_shop_checkout.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Checkout">
                    <h5>Checkout</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="wishlist.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/31_shop_wishlist.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Wishlist">
                    <h5>Wishlist</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 shoppages">
                <a href="dashboard.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/shop_my_account.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="My Account">
                    <h5>My Account</h5>
                </a>
            </div> --}}
        {{-- End for Services --}}

        {{-- Start of Description --}}

            {{-- <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="about.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/40_pages_aboutus.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="About Us">
                    <h5>About Us</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="about-2.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/41_pages_aboutus_2.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="About Us 2">
                    <h5>About Us 2</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="contact.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/42_pages_contactus.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Contact Us">
                    <h5>Contact Us</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="contact-2.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/43_pages_contactus_2.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Contact us 2">
                    <h5>Contact us 2</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="login.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/44_pages_login.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Login page">
                    <h5>Login page</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="faq.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/45_pages_FAQ.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="F.A.Q page">
                    <h5>F.A.Q page</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="404.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/46_pages_error_404.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Error 404 page">
                    <h5>Error 404 page</h5>
                </a>
            </div>
            <div class="iso-item col-sm-6 col-md-4 col-lg-3 otherpages">
                <a href="coming-soon.html" target="_blank">
                    <img src="assets/images/demos-img/lazy.png" data-oi="assets/images/demos-img/47_pages_coming_soon.jpg" width="500" height="385" class="molla-lz" style="padding-top: 77%" alt="Coming Soon page">
                    <h5>Coming Soon page</h5>
                </a>
            </div>
        </div> --}}
        {{-- End of Description --}}

        <h5 class="text-load-more">More New Demos Coming Soon ...</h5>
    </section>

    <section class="section section-features">
        <h2 class="text-center">Our Core Features</h2>
        <p class="text-center">Powerful features and inclusions, which makes Molla standout,<br>easily customizable and scalable.</p>
        <div class="divider-line">
            <div class="container-lg">
                <div class="overflow-hidden">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-laptop"></i>
                                <h4>Fully Responsive Design Layouts</h4>
                                <p>The Template looks good and sharp with all kind of devices and screen sizes. which increase the layout flexibility.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-code"></i>
                                <h4>Clean And Professional Codes</h4>
                                <p>The Template is ready with clean and well structured coding style by the Professional developers team.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-fill-drip"></i>
                                <h4>Creative And Modern Design Layout</h4>
                                <p>Every single section is created with the passion and years of experience in the website development.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-align-left"></i>
                                <h4>Perfect Documentations</h4>
                                <p>There are lots of creative section for you. So we have create a documentation that will helpful to understand the flow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-lg">
                <div class="overflow-hidden">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-th"></i>
                                <h4>Build With Bootstrap</h4>
                                <p>This Template is created with latest bootstrap version which used its new classes and tags.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-envelope-open-text"></i>
                                <h4>Working Contact Form</h4>
                                <p>There are different different styled form layouts that used to get in touch with you.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-cogs"></i>
                                <h4>Easily Customizable</h4>
                                <p>The design is fully customizable. Unlimited color styles, all 500+ Google fonts, and etc!</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box">
                                <i class="icon-html5" style="font-size: 2.4rem;""></i>
                                <h4>Valid HTML 5 And CSS 3</h4>
                                <p>We have used latest HTML and Css Coding style that makes the pages in well working state.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-elements container">
        <h2 class="text-center">Elements For Everything</h2>
        <p class="text-center">Use your creativity and the power of Molla elements to create your pages,<br>check out some of them.</p>
        <br>
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-accordions.html" target="_blank">
                    <div class="img-box">
                        <i class="img-accordions"></i>
                        <h5>Accordions</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-banners.html" target="_blank">
                    <div class="img-box">
                        <i class="img-banners"></i>
                        <h5>Banners</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-blog-posts.html" target="_blank">
                    <div class="img-box">
                        <i class="img-blog-posts"></i>
                        <h5>Blog Posts</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-buttons.html" target="_blank">
                    <div class="img-box">
                        <i class="img-buttons"></i>
                        <h5>Buttons</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-cta.html" target="_blank">
                    <div class="img-box">
                        <i class="img-cta"></i>
                        <h5>Call To Action</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-icon-boxes.html" target="_blank">
                    <div class="img-box">
                        <i class="img-icon-boxes"></i>
                        <h5>Icon Boxes</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-portfolio.html" target="_blank">
                    <div class="img-box">
                        <i class="img-portfolio"></i>
                        <h5>Portfolio</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-product-category.html" target="_blank">
                    <div class="img-box">
                        <i class="img-product-categories"></i>
                        <h5>Product Categories</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-products.html" target="_blank">
                    <div class="img-box">
                        <i class="img-products"></i>
                        <h5>Products</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-tabs.html" target="_blank">
                    <div class="img-box">
                        <i class="img-tabs"></i>
                        <h5>Tabs</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-testimonials.html" target="_blank">
   0                <div class="img-box">
                        <i class="img-testimonials"></i>
                        <h5>Testimonials</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-titles.html" target="_blank">
                    <div class="img-box">
                        <i class="img-titles"></i>
                        <h5>Titles</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5" target="_blank">
                <a href="elements-typography.html">
                    <div class="img-box">
                        <i class="img-typography"></i>
                        <h5>Typography</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-1-5">
                <a href="elements-video-banners.html" target="_blank">
                    <div class="img-box">
                        <i class="img-video"></i>
                        <h5>Video</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="section section-support section-dark">
        <div class="container molla-lz text-center" data-oi="assets/images/demos-img/support_bg.jpg">
            <h2>Outstaning Support Center<span class="fw-400">+</span>Extensive Documentation</h2>
            <p>Support is one of our priorities, our dedicatated support<br>will be waiting for you if you have any questions.</p>
        </div>
    </section>
    <section class="section section-light section-ready container text-center">
        <h2 class="mb-3">Molla Is Ready To Use. Get It Now!</h2>
        <p>DON'T FORGET TO APPRECIATE OUR WORK. RATE US NOW!</p>
        <div class="star-rating mb-4 pb-3">
            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
        </div>
        <p><a class="btn btn-primary btn-outline" href="#"><i class="icon-shopping-cart"></i>Buy Molla</a></p>
    </section>
</div>
@endsection