<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>products</span>
         </h2>
      </div>

                  <div>
                    <form action="{{url('product_search')}}" method="get">
                        @csrf
                        <div style="padding-left:230px;">
                           <input type="text" name="search" placeholder="Search For Something" Style="width:700px;">
                        </div>
                           <input type="submit" value="Search" class="btn btn-outline">
                    </form>
                   </div>

                   @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>

            @endif

      <div class="row">

         @foreach($product as $products)
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_details',$products->id)}}" class="option1">
                          Product Details
                     </a>
                     <form action="{{url('add_cart',$products->id)}}" method="post">
                     @csrf
                        <div class="row">
                           <div class="col-md-4" >
                              <Input type="number" name="quantity" value="1" min="1" Style="width:100px;">
                           </div>
                           <div class="col-md-4">
                              <Input type="Submit" value="Add to Cart">
                           </div>
                        </div>
                     </from>
                  </div>
               </div>
               <div class="img-box">
                  <img src="product/{{$products->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$products->title}}
                  </h5>
                     @if($products->discount_price!=null)
                        <h6 style="color:red;">
                           Doscount Price<br>
                           ${{$products->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue;">
                           Price<br>   
                           ${{$products->price}}
                        </h6>
                        @else
                        <h6>
                           ${{$products->price}}
                        </h6>
                     @endif
               </div>
            </div>
         </div>

         @endforeach
            <span style="padding-top:20px;">
               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>   
   </div>
   
</section>
