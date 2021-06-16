@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
    <div class="fb-share-button" data-href="http://localhost/shopbanhang/" data-layout="button_count" data-size="small">
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}" class="fb-xfbml-parse-ignore">
            Chia sẻ
        </a>
    </div>
    <div class="fb-like" data-href="{{$url_canonical}}" 
    data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
    @foreach ($category_name as $key => $category_by_name)
        
    <h2 class="title text-center">{{$category_by_name->category_name}}</h2>
    @endforeach
    @foreach ($category_by_id as $key => $product)
        
    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                        <h2>{{number_format($product->product_price).' VNĐ'}}</h2>
                        <p>{{$product->product_name}}</p>
                        <a href="#" class="btn btn-default add-to-cart">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng
                        </a>
                    </div>
                    {{-- <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{number_format($product->product_price).' VNĐ'}}</h2>
                            <p>{{$product->product_name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                    </div> --}}
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>

    </div>
    </a>
    @endforeach


    
    
</div><!--features_items-->
<div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="20"></div>
<div class="fb-page" data-href="https://www.facebook.com/facebook" 
data-tabs="message" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" 
data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/facebook">Facebook</a>
    </blockquote>
</div>

@endsection
