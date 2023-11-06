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
                    <h1 class="font_size">Add Product</h1>
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        <div class="div_design">
                            @csrf
                            <label>Product Title :</label>
                            <Input class="text_color" type="text" name="title" placeholder="write a Title" Required="">                
                        </div>
                        <div class="div_design">
                            <label>Product Description :</label>
                            <Input class="text_color" type="text" name="description" placeholder="write a Description" Required="">                
                        </div>
                        <div class="div_design">
                            <label>Product Price :</label>
                            <Input class="text_color" type="number" name="price" placeholder="write a Price" Required="">                
                        </div>
                        <div class="div_design">
                            <label>Discount Price</label>
                            <Input class="text_color" type="number" name="discount_price" placeholder="write a Discount Price">                
                        </div>
                        <div class="div_design">
                            <label>Product Quantity :</label>
                            <Input class="text_color" type="number" min="1" name="quantity" placeholder="write a Quantity" Required="">                
                        </div>
                        <div class="div_design">
                            <label>Product Category :</label>
                            <select class="text_color" name="category" Required="">
                                <option value="" selected="">Choose Category Here</option>
                              @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">
                            <label>Product Image Here :</label>
                            <Input type="file" name="image" Required="">                
                        </div>
                        <div class="div_design">
                            
                            <Input type="submit" value="Add Product" class="btn btn-primary">                
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