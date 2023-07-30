<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    @include('includes/links')
    <link rel="stylesheet" href="{{URL::to('assets/css/admin.css')}}">
</head>

<body class="dashboard">
    @include('includes/admin-header')
    <div class="container-fluid" style="padding:0px!important">
        <div class="row m-0">
            @include('includes/admin-sidebar')
            <div class="col-10 mt-3">
                <h2>Add New Product</h2>
                <hr>
                <div class="container-fluid" style="padding:0px!important">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" placeholder="Product Name" name="pname" class="w-100 p-2"><br><br>
                                <textarea name="pdescription" id="" cols="30" rows="10" placeholder="Product Description" class="p-2 w-100"></textarea><br><br>
                                <label for="file" class="border border-color-dark w-100 p-2">Product Image
                                <input type="file" name="file" class="w-100 pl-2" placeholder="Enter File" /><br>
                                </label>
                                <br><br>
                                <select class="w-100 p-2" name="category" id="">
                                    <optgroup label="Category">
                                        <option value="Book">Book</option>  
                                        <option value="School">School</option>  
                                    </optgroup>
                                </select><br><br>
                                <select class="w-100 p-2" name="subcategory" id="">
                                    <optgroup label="Category">
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