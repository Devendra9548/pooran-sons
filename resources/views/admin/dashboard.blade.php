<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @include('includes/links')
    <link rel="stylesheet" href="{{URL::to('assets/css/admin.css')}}">
</head>

<body class="dashboard">
    @include('includes/admin-sidebar')

    @include('includes/footer')
</body>

</html>