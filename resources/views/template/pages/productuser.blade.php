@extends('template.master')
@section('content')
<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
                    @include('template.user_option')
					<div class="col-sm-3">
						
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm đang bán</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							<?php $i=0?>
							@for( ; $i < count($products) ;)

							@if ($i % 3 == 0)
							<div class="row">

								@for($j=0 ; $j<3; $j++)
								@if($i < count($products))
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">

											
											<a href="{{route('products.show',$products[$i]->id)}}"><img src="{{url('assets/dest/products/' . $products[$i]->image .'')}}" alt="" margin-top="10px"></a>

										</div>
										<div class="single-item-body"> 
											<p class="single-item-title">{{mb_strtoupper($products[$i]->name)}}</b></p>
											<p class="single-item-price">
												<span class='flash-sale'>{{number_format($products[$i]->price,0,',','.')}} đ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('products.getProduct',$products[$i]->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<?php $i++?>
								@endif
								@endfor
							</div>
							<div class="space60">&nbsp;</div>
							@endif
							@endfor
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

					

					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection