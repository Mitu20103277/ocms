@extends('frontend.master')
@section('content')



<div class="row">
    <div class="col ps-5">
	<img src="{{asset('uploads/'.$singlepackage->image)}}" class="ps-5 ms-5  pb-5" width="700" height="500" />
    </div>
    <div class="col">
      
<h1 class="product_title entry-title elementor-heading-title elementor-size-default">{{$singlepackage->food_name}}</h1>
				
				<div class="elementor-element elementor-element-76401056 elementor-widget elementor-widget-woocommerce-product-short-description" data-id="76401056" data-element_type="widget" data-widget_type="woocommerce-product-short-description.default">
					<div class="elementor-widget-container">
						<div class="woocommerce-product-details__short-description">
							
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-37bed334 elementor-product-price-block-yes elementor-widget elementor-widget-woocommerce-product-price" data-id="37bed334" data-element_type="widget" data-widget_type="woocommerce-product-price.default">
					<div class="elementor-widget-container">
						<p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">price:&nbsp;</span>{{{$singlepackage->price}}}</bdi></span></p>
					</div>
				</div>
				<div class="elementor-element elementor-element-4237294 elementor-add-to-cart--align-left e-add-to-cart--show-quantity-yes elementor-widget elementor-widget-woocommerce-product-add-to-cart" data-id="4237294" data-element_type="widget" data-widget_type="woocommerce-product-add-to-cart.default">
					<div class="elementor-widget-container">
						<div class="elementor-add-to-cart elementor-product-simple">
							<form class="cart" action="https://www.deshcatering.com/products/mini-package-three/" method="post" enctype="multipart/form-data">
								<div class="quantity">
									<!-- <label class="screen-reader-text" for="quantity_65827fbc9b4f9">Mini Package Three quantity</label> -->
									<input type="number" id="quantity_65827fbc9b4f9" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="40" max="500" step="1" placeholder="" inputmode="numeric" autocomplete="off">
								</div>
								<div class=""><a class="btn btn-outline-dark mt-auto" href="{{route('add.cartItem',$singlepackage->id)}}">Add tocart</a></div>

							</form>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-4aeaddc elementor-woo-meta--view-inline elementor-widget elementor-widget-woocommerce-product-meta" data-id="4aeaddc" data-element_type="widget" data-widget_type="woocommerce-product-meta.default">
					<div class="elementor-widget-container">
						<div class="product_meta">

							<span class="tagged_as detail-container"><span class="detail-label">Tags</span> <span class="detail-content"><a href="https://www.deshcatering.com/product-tag/borhani/" rel="tag">borhani</a>, <a href="https://www.deshcatering.com/product-tag/chicken-biryani/" rel="tag">Chicken Biryani</a>, <a href="https://www.deshcatering.com/product-tag/firni/" rel="tag">Firni</a>, <a href="https://www.deshcatering.com/product-tag/jorda/" rel="tag">Jorda</a>, <a href="https://www.deshcatering.com/product-tag/kabab/" rel="tag">Kabab</a>, <a href="https://www.deshcatering.com/product-tag/morog-polao/" rel="tag">Morog Polao</a></span></span>
						</div>
					</div>
				</div>
    </div>
  </div>

				








@endsection