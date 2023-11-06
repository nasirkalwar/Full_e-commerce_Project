<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('Home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('Home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('Home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('Home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
            @include('home.header')
         <!-- end header section -->

   
    <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:30px";>
                     <div class="img-box" style="padding:20px">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>
                        @if($product->discount_price!=null)
                        <h6 style="color:red;">
                        Doscount Price<br>
                           ${{$product->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue;">
                        Price<br>   
                        ${{$product->price}}
                        </h6>
                        @else
                        <h6>
                           ${{$product->price}}
                        </h6>
                        @endif
                        <h6>Product Category : {{$product->category}}<h6>
                        <h6>Product Details : {{$product->description}}<h6>
                        <h6>Product Availabilty : {{$product->quantity}}<h6>
                        <form action="{{url('add_cart',$product->id)}}" method="post">
                     @csrf
                        <div class="row">
                           <div class="col-md-4" >
                              <Input type="number" name="quantity" value="1" min="1" style="width:100px;">
                           </div>
                           <div class="col-md-4">
                              <Input type="Submit" value="Add to Cart">
                           </div>
                        </div>
                     </from>                    </div>
                  </div>
               </div>


      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="Home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="Home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="Home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="Home/js/custom.js"></script>
   </body>
</html>