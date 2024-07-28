<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include("admin.css")

    <style>
        .heading {
            text-align: center;
            font-size: 40px;
            padding-bottom: 40px;
        }
        .image-row {
            height: 200px;
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
                    <div class="alert alert-success fade show">
                        {{session()->get('message')}}
                        <button class="close" data-dismiss="alert">x</button>
                    </div>
                @endif

                <h1 class="heading">View Products</h1>

                <table class="table text-center">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->Category->category_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td class="image-row"><img class="img-fluid h-100 w-auto mx-auto" style="border-radius: 0;" src="/product/{{$product->image}}" alt=""></td>
                            <td>
                                <a class="btn btn-danger p-2 mr-2" onclick="return confirm('Confirm delete product {{$product->title}}?')" href="{{route('delete_product', $product->id)}}">Delete</a>
                                <a class="btn btn-primary p-2" href="{{route('update-product', $product->id)}}" >Update</a>
                            </td>
                        </tr>
                        @endforeach
                </table>


            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>