<!DOCTYPE html>
<html>

<head>
    <title>All Product</title>
    @include('includes/links')
    <link rel="stylesheet" href="{{URL::to('assets/css/admin.css')}}">
    <style>
        table td{

        }
    </style>
</head>

<body class="dashboard">
 @include('includes/admin-header')
 <div class="container-fluid" style="padding:0px!important">
    <div class="row m-0">
     @include('includes/admin-sidebar')
    <div class="col-10">
        <h2>All Product</h2>
        <hr>
        <table class="w-100" border="2">
        <colgroup>
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 30%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 20%;">
      </colgroup>
            <tr>
                <td class="pl-2" ><b>ID</b></td>
                <td class="pl-2"><b>Name</b></td>
                <td class="pl-2"><b>Description</b></td>
                <td class="pl-2"><b>File</b></td>
                <td class="pl-2"><b>Category</b></td>
                <td class="pl-2"><b>SubCategory</b></td>
                <td class="pl-2"><b>Action</b></td>
            </tr>
            @foreach($members as $member)
            <tr style="height:50px">
                <td class="pl-2">{{ $member['id'] }}</td>
                <td class="pl-2">{{ $member['name'] }}</td>
                <td class="pl-2">{{ $member['description'] }}</td>
                <td class="pl-2">
                    <img src="{{ URL::to('storage/images/'.$member['file']) }}" alt="{{ $member['file'] }}" width="100">
                    <p style="font-size:12px!important">File Name : {{ $member['file'] }}</p>
                </td>
                <td class="pl-2">{{ $member['category'] }}</td>
                <td class="pl-2">{{ $member['subcategory'] }}</td>
                <td class="pl-2">
                    <a href="edit/{{ $member['id']  }}" class="py-2 px-3 bg-primary">Edit</a>
                    <a href="delete/{{ $member['id']  }}" class="py-2 px-3 bg-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
 </div>
    @include('includes/footer')
</body>

</html>