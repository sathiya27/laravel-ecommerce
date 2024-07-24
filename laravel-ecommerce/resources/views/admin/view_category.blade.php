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
        .h2_category {
            font-size: 40px;
            padding-bottom: 40px;
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
                <div class="text-center pt-4">
                    
                    <h2 class="h2_category">Add Category</h2>

                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input style="color: black;" type="text" name="category_name" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
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