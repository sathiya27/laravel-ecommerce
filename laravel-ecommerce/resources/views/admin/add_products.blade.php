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
        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        .product-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .div-proDes label{
            width: 50%;
        }

        .div-proDes input, .div-proDes select{
            width: 50%;
        }

        .div-proDes{
            width: 50%;
            padding-bottom: 20px;
            display: flex;
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
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="text-center pt-3">
                    <h1 class="pb-3" style="font-size: 40px;">Add Product</h1>
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-left product-form">
                            <div class="div-proDes">
                                <label for="">Product Title:    </label>
                                <input class="text_color" type="text" name="title" required placeholder="Write a Title">
                            </div>
                            <div class="div-proDes">
                                <label for="">Product Description:    </label>
                                <input class="text_color" type="text" name="description" required placeholder="Write a Description">
                            </div>
                            <div class="div-proDes">
                                <label for="">Product Price:    </label>
                                <input class="text_color" type="number" name="price" required placeholder="Write product Price">
                            </div>
                            <div class="div-proDes">
                                <label for="">Product Discount Price:    </label>
                                <input class="text_color" type="number" name="discount_price" placeholder="Write product discount price">
                            </div>
                            <div class="div-proDes">
                                <label for="">Product quantity:    </label>
                                <input class="text_color" type="text" name="quantity" required min="0" placeholder="Write product quantity">
                            </div>
                            <div class="div-proDes">
                                <label for="">Product Category:    </label>
                                <select class="text_color" name="category" id="" required>
                                    <option value="" selected>Add Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="div-proDes">
                                <label for="">Product image:    </label>
                                <input class="" type="file" name="image" required min="0" placeholder="upload product image">
                            </div>
                            <div class="">
                                <input type="submit" value="Add Product" class="btn btn-success p-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.js')
        <!-- End custom js for this page -->
  </body>
</html>