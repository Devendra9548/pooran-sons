<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
    @include('includes/links')
    <link rel="stylesheet" href="{{URL::to('assets/css/admin.css')}}">
</head>

<body class="dashboard">
    @include('includes/admin-header')
    <div class="container-fluid" style="padding:0px!important">
        <div class="row m-0">
            @include('includes/admin-sidebar')
            <div class="col-10 mt-3">
                <h2>Add New Category</h2>
                <hr>
                <div class="container-fluid" style="padding:0px!important">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                                @csrf
                                <input type="text" placeholder="Category Name" name="cname" class="w-100 p-2"><br><br>
                                <input type="text" placeholder="Category Slug" name="slug" class="w-100 p-2"><br><br>
                                <textarea name="cdescription" id="" cols="30" rows="10" placeholder="Category Description" class="p-2 w-100"></textarea><br><br>
                                <label for="file" class="border border-color-dark w-100 p-2">Category Image
                                <input type="file" name="file" class="w-100 pl-2" placeholder="Enter File" /><br>
                                </label>
                               <label for="pcategory" class="w-100">Select Parent Category
                                <select class="w-100 p-2" name="pcategory" id="">
                                    <optgroup label="Category">
                                        <option value="Book">Book</option>  
                                        <option value="School">School</option>  
                                    </optgroup>
                                </select>
                                </label>
                                <br><br>
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