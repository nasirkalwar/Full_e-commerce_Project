<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
<style>
    .center{
        margin:auto;
        width:50%;
        border:2px solid white;
        text-align:center;
        margin-top:40px;
    }
    .center td {
        border:2px solid white;
    }
    .center th {
        background:skyblue;
    }
    .font_size{
        text-align:center;
        font-size:20px;
        padding-top:20px;
    }
    .img_size{
        width:150px;
        height:150px;
    }
    .th_deg{
        padding:30px;
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


          <div class="font_size">
            All Products
            </div>         
         
          
          <table class="center">
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount_price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td><img class="img_size" src="/product/{{$product->image}}"></td>
                    <td><a onclick="return confirm('Are You Sure To Delete This')" class=" btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a></td>
                    <td><a onclick="return confirm('Are You Sure To Edit This')" class=" btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>

                </tr>
                @endforeach
            </table>
            </div>
        </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>