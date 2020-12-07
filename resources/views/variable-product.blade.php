@extends('layout')

@section('content')


<body>
    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon-round"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                       
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header sticky-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-md-4 offset-md-4 offset-lg-0 col-5 offset-3 col-sm-5">
						<div class="logo">
							<a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">                
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a  href="index.html">home<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu">
											<li><a href="index.html">Home shop 1</a></li>
											<li><a href="index-2.html">Home shop 2</a></li>
											<li><a href="index-3.html">Home shop 3</a></li>
										</ul>
									</li>
									<li class="mega_items"><a class="active" href="shop.html">shop<i class="fa fa-angle-down"></i></a> 
										<div class="mega_menu">
											<ul class="mega_menu_inner">
												<li><a href="#">Shop Layouts</a>
													<ul>
														<li><a href="shop-fullwidth.html">Full Width</a></li>
														<li><a href="shop-fullwidth-list.html">Full Width list</a></li>
														<li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
														<li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
														<li><a href="shop-list.html">List View</a></li>
													</ul>
												</li>
												<li><a href="#">other Pages</a>
													<ul>
														<li><a href="cart.html">cart</a></li>
														<li><a href="wishlist.html">Wishlist</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="my-account.html">my account</a></li>
														<li><a href="404.html">Error 404</a></li>
													</ul>
												</li>
												<li><a href="#">Product Types</a>
													<ul>
														<li><a href="product-details.html">product details</a></li>
														<li><a href="product-sidebar.html">product sidebar</a></li>
														<li><a href="product-grouped.html">product grouped</a></li>
														<li><a href="variable-product.html">product variable</a></li>

													</ul>
												</li>
											</ul>
										</div>
									</li>
									<li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="blog-details.html">blog details</a></li>
											<li><a href="blog-fullwidth.html">blog fullwidth</a></li>
											<li><a href="blog-sidebar.html">blog sidebar</a></li>
										</ul>
									</li> 
									<li><a href="contact.html"> Contact Us</a></li>
									<li><a href="about.html"> About us</a></li>
									<li><a href="#">pages <i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="about.html">About Us</a></li>
											<li><a href="services.html">services</a></li>
											<li><a href="faq.html">Frequently Questions</a></li>
											<li><a href="contact.html">contact</a></li>
											<li><a href="login.html">login</a></li>
											<li><a href="404.html">Error 404</a></li>
										</ul>
									</li>
								</ul>  
							</nav> 
						</div>
						<!--main menu end-->
					</div> 
					<div class="col-lg-2 col-md-4 col-sm-4 col-4">
						<div class="header_account_area">
							<div class="header_account_list search_list">
								<a href="javascript:void(0)"><span class="pe-7s-search"></span></a>
								<div class="dropdown_search">
									<form action="#">
										<input placeholder="Search entire store here ..." type="text">
										<button type="submit"><span class="pe-7s-search"></span></button>
									</form>
								</div>
							</div>
							<div class="header_account_list  mini_cart_wrapper">
								<a href="javascript:void(0)"><span class="pe-7s-shopbag"></span>
									<span class="item_count">2</span>
								</a>
								
						   </div>
						    <div class="language_currency header_account_list ">
						        <a href="#"> <span class="pe-7s-user"></span></a>
								<ul class="dropdown_currency">
									<li><a href="my-account.html">My account</a></li>
									<li><a href="#">Order History</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="cart.html">Shipping</a></li>
								</ul>
							</div>
						</div>
					</div>               
				</div>
			</div>
        </div> 
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Tricot</a>
                        <p>1 x <span> $30.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Juicy</a>
                        <p>1 x <span> $29.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$125.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$125.00</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
               <div class="cart_button">
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>

            </div>
        </div>
        <!--mini cart end-->
    </header>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>product variable</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details variable_product mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig1.jpg" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                        <img src="assets/img/product/productbig4.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                        <img src="assets/img/product/productbig1.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                        <img src="assets/img/product/productbig2.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                        <img src="assets/img/product/productbig3.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                       <form action="#"> 
                            <div class="productd_title_nav">
                                <h1><a href="#">Lorem ipsum dolor sit amet elit</a></h1>
                                <div class="product_nav">
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                                
                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            
                            <div class="product_variant size">
                                <label>size</label>
                                <select class="select_option" id="color2" name="produc_color2">
                                    <option selected value="1"> size in option</option>        
                                    <option value="2">s</option>              
                                    <option value="3">m</option>              
                                    <option value="4">l</option>              
                                    <option value="5">xl</option>              
                                    <option value="6">xxl</option>              
                                </select>   
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                   <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                               </ul>
                            </div>
                            
                        </form>
                        
                        <div class="product_d_meta">
                            <span>SKU: N/A</span>
                            <span>Category: <a href="#">Clothings</a></span>
                            <span>Tags: 
                                <a href="#">Creams</a>
                                <a href="#">Lotions</a>
                            </span>
                        </div>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>
                    </div>
                </div>
              
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    <!--product info start-->
    <div class="product_d_info mb-77">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div> 
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->
    
    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column5 owl-carousel">
				   <div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Eodem modo vel are mattis ante his facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
										<div class="price_box"> 
											<span class="old_price">$82.00</span>
											<span class="current_price">$77.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
										<div class="price_box"> 
											<span class="old_price">$94.00</span>
											<span class="current_price">$92.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
										<div class="price_box"> 
											<span class="old_price">$76.00</span>
											<span class="current_price">$73.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
										<div class="price_box"> 
											<span class="old_price">$87.00</span>
											<span class="current_price">$78.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$86.00</span>
											<span class="current_price">$82.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
			   </div>
            </div>  
        </div>
    </section>
    <!--product area end-->
    
    <!--product area start-->
    <section class="product_area upsell_products mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">
                        <h2>Upsell Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column5 owl-carousel">
					<div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
										<div class="label_product">
											<span class="label_sale">Sale</span>
										</div>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna her placerat</a></h4>
											<div class="price_box"> 
												<span class="old_price">$87.00</span>
												<span class="current_price">$78.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$86.00</span>
											<span class="current_price">$82.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
										<div class="price_box"> 
											<span class="old_price">$82.00</span>
											<span class="current_price">$77.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
										<div class="price_box"> 
											<span class="old_price">$94.00</span>
											<span class="current_price">$92.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
											<div class="price_box"> 
												<span class="old_price">$76.00</span>
												<span class="current_price">$73.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>

			   </div> 
            </div>   
        </div>
    </section>
    <!--product area end-->
    @endsection