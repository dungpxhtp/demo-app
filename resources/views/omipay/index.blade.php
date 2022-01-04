<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Laravel 8 - Add Blog Post Form Example
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">App ID</label>
                    <input type="text" id="title" name="key" class="form-control" required="" value="64815">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">App Code</label>
                    <input type="text" id="title" name="code" class="form-control" required="" value="f3485d1b6be04a344f8e8c95b7e7534e">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" id="title" name="title" class="form-control" required="" value="Thanh toán đơn hàng 10001">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" id="title" name="fullname" class="form-control" required="" value="Phan Xuân Dũng">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" id="title" name="email" class="form-control" value="dungpx@htpgroup.com.vn">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" id="title" name="phone" class="form-control" value="0367158269">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" id="title" name="price" class="form-control" value="200000">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" class="form-control" required="">Mô tả</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
