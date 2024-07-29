<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      
      <style>
        .font {
            font-family: 'Montserrat', sans-serif;
        }

        .product-details {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .width-box {
            width: 100%;
            align-content: center;
        }

      </style>
   </head>
   <body>
       @include('home.header')
       <div class="font">
           <h1 class="text-center m-4" style="font-size:40px; font-family: inherit; font-weight: 600">Product Details</h1>
           <div class="container product-details">
             <div>
                 <img src="/product/{{$product->image}}" alt="">
             </div>
             <div class="width-box">
                 <ul class="list-group border">
                    <li class="list-group-item">
                       <label>Product Title:</label><br>
                        {{$product->title}}
                    </li>
                    <li class="list-group-item">
                       <label>Product description:</label><br>
                        {{$product->description}}
                    </li>
                    <li class="list-group-item">
                       <label>Product price:</label><br>
                        {{$product->price}}
                    </li>
                    <li class="list-group-item">
                       <label>Product quantity:</label><br>
                        {{$product->quantity}}
                    </li>
                    <li class="list-group-item">
                       <label>Product discount price:</label><br>
                        {{$product->discount_price}}
                    </li>
                 </ul>
             </div>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-3">
                <button class="btn btn-primary">Add to cart</button>
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
      <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('home/js/custom.js')}}"></script>
   </body>
</html>