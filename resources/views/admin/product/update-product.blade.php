<!DOCTYPE html>
<html>

<head>
    <title>Update Product</title>
    @include('includes/links')
    <link rel="stylesheet" href="{{URL::to('assets/css/admin.css')}}">
</head>

<body class="dashboard">
    @include('includes/admin-header')
    <div class="container-fluid" style="padding:0px!important">
        <div class="row m-0">
            @include('includes/admin-sidebar')
            <div class="col-10 mt-3">
                <h2>Update Product</h2>
                
                <hr>
                <div class="container-fluid" style="padding:0px!important">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/admin/edit" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dbs['id'] }}">
                                <input type="text" placeholder="Product Name" name="pname" class="w-100 p-2" value="{{ $dbs['name'] }}"><br><br>
                                <textarea name="pdescription" id="" cols="30" rows="10" placeholder="Product Description" class="p-2 w-100">{{ $dbs['description'] }}</textarea><br><br>
                                <label for="file" class="border border-color-dark w-100 p-2">
                                <img src="{{ URL::to('storage/images/'.$dbs['file']) }}" alt="{{ $dbs['file'] }}" width="100"><br><br>
                                <input type="file" name="file" class="w-100 pl-2" placeholder="Enter File" value="{{ $dbs['file'] }}" /><br>
                                </label>
                                <br><br>
                                <select class="w-100 p-2" name="category" id="">
                                    <optgroup label="Category">
                                        <option value="{{ $dbs['category'] }}" selected>{{ $dbs['category'] }}</option>
                                        <option value="Book">Book</option>  
                                        <option value="School">School</option>  
                                    </optgroup>
                                </select><br><br>
                                <select class="w-100 p-2" name="subcategory" id="">
                                    <optgroup label="Category">
                                        <option value="{{$dbs['subcategory']}}" selected> {{ $dbs['subcategory'] }}</option>  
                                        <option value="Book">Book</option>  
                                        <option value="School">School</option>  
                                    </optgroup>
                                </select><br><br>
                                <input type="submit" class="btn btn-primary">
                                

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('includes/footer')
</body>

</html>