<! TYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    @include('admin.css')
    <style>
    .div_center{
        text-align:center;
        padding-top:40px;
    }
    .font_size{
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color{
        color:black;
        padding:20px;
    }
    label{
        display:inline-block;
        width:200px;
    }
    .div_design{
            padding-bottom:15px;
    }
    </style>
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
       <!-- partial -->
       <div class="main-panel">
            <div class="content-wrapper">
                
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>

            @endif

               <div class="div_center">
                    <h1 class="font_size">Update Product</h1>
                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        <div class="div_design">
                            @csrf
                            <label>Product Title :</label>
                            <Input class="text_color" type="text" name="title" placeholder="write a Title" Required="" value="{{$product->title}}">                
                        </div>
                        <div class="div_design">
                            <label>Product Description :</label>
                            <Input class="text_color" type="text" name="description" placeholder="write a Description" Required="" value="{{$product->description}}">                
                        </div>
                        <div class="div_design">
                            <label>Product Price :</label>
                            <Input class="text_color" type="number" name="price" placeholder="write a Price" Required="" value="{{$product->price}}">                
                        </div>
                        <div class="div_design">
                            <label>Discount Price</label>
                            <Input class="text_color" type="number" name="discount_price" placeholder="write a Discount Price" value="{{$product->discount_price}}">                
                        </div>
                        <div class="div_design">
                            <label>Product Quantity :</label>
                            <Input class="text_color" type="number" min="0" name="quantity" placeholder="write a Quantity" Required="" value="{{$product->quantity}}">                
                        </div>
                        <div class="div_design">
                            <label>Product Category :</label>
                            <select class="text_color" name="category" Required="">
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            
                                @endforeach

                            </select>
                        </div>
                        <div class="div_design">
                            <label>Current Product Image :</label>
                            <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">                
                        </div>

                        <div class="div_design">
                            <label>Change Product Image :</label>
                            <Input type="file" name="image">                
                        </div>
                        <div class="div_design">
                            
                            <Input type="submit" value="Update Product" class="btn btn-primary">                
                        </div>
                    </form>
                </div>
            </div>             

        </div>
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>