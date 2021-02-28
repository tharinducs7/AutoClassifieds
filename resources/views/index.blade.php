@extends('layouts.master')
@section('content')

@include('custom_ads.ad_1')
@include('layouts.search_form')

<div class="category-info">
    <div class="row">
    
        @include('layouts.side_filter')

       <div class="col-md-8 col-lg-7">
          <div class="section recommended-ads">
             <div class="featured-top">
                <h4>Recommended Ads for You</h4>
                <div class="dropdown pull-right">
                   <div class="dropdown category-dropdown">
                      <h5>Sort by:</h5>
                      <a data-toggle="dropdown" href="#"><span class="change-text">Popular</span><i class="fa fa-caret-square-o-down"></i></a>
                      <ul class="dropdown-menu category-change">
                         <li><a href="#">Featured</a></li>
                         <li><a href="#">Newest</a></li>
                         <li><a href="#">All</a></li>
                         <li><a href="#">Bestselling</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$800.00</h3>
                      <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Tv & Video</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-fluid"></a>
                      <span class="featured-ad">Featured</span>
                      <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Home Appliances</a></span> /
                         <span><a href="#">Sofa</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-fluid"></a>
                      <span class="featured-ad">Featured</span>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$800.00</h3>
                      <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Books & Magazines</a></span> /
                         <span><a href="#">Story book</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/5.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Slim NoteBook</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/6.jpg" alt="Image" class="img-fluid"></a>
                      <span class="featured-ad">Featured</span>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/7.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Philips Streo Headphone</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/8.jpg" alt="Image" class="img-fluid"></a>
                      <span class="featured-ad">Featured</span>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$800.00</h3>
                      <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Books & Magazines</a></span> /
                         <span><a href="#">Story book</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-section text-center">
                <a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-fluid"></a>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/9.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Nikon Disital Camera</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/10.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/11.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Mega Monitor</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/12.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$800.00</h3>
                      <h4 class="item-title"><a href="#">Cannon Disital Camera</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Camera & Magazines</a></span> /
                         <span><a href="#">Story book</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/13.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Samsung Smart Watch</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="ad-item row">
                <div class="item-image-box col-lg-4">
                   <div class="item-image">
                      <a href="details.html"><img src="images/listing/14.jpg" alt="Image" class="img-fluid"></a>
                   </div>
                </div>
                <div class="item-info col-lg-8">
                   <div class="ad-info">
                      <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                      <h4 class="item-title"><a href="#">Accer Thinest Laptop</a></h4>
                      <div class="item-cat">
                         <span><a href="#">Electronics & Gedgets</a></span> /
                         <span><a href="#">Mobile Phone</a></span>
                      </div>
                   </div>
                   <div class="ad-meta">
                      <div class="meta-content">
                         <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                         <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                      </div>
                      <div class="user-option pull-right">
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                         <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="text-center">
                <ul class="pagination ">
                   <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                   <li><a href="#">1</a></li>
                   <li class="active"><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li><a>...</a></li>
                   <li><a href="#">10</a></li>
                   <li><a href="#">20</a></li>
                   <li><a href="#">30</a></li>
                   <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
             </div>
          </div>
       </div>

       <div class="col-md-2 d-none d-lg-block">
            @include('custom_ads.ad_2')
                <br>
            @include('custom_ads.ad_3')
       </div>

    </div>
 </div>
@endsection