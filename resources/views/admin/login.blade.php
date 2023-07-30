<html>

<head>
    <title>
        Admin Login
    </title>
    @include('includes/links')
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-12 py-5 d-flex justify-content-center align-items-center vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-md-4  border border-dark p-5 ">
                            <div class="admin-form">
                                <img src="{{ URL::to('assets/img/web-logo.png') }}" alt="logo" width="300">
                                <hr>
                                <form id="myForm" name="myForm" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email Or Username </label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Enter Email Address Or Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="*********" >
                                    </div>
                                    <input class="btn btn-primary" id="getDataButton" type="submit" value="submit">
                                </form>
                       
                                

                            </div>
                        </div>
                        <div class="col-4">
                            <div id="output"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
          type: "POST",
          url: "/admin/admin",
          data: formData,
          success: function(res) {
            if(res == true)
            {
                window.location.href = "http://127.0.0.1:8000/admin/dashboard";
            }
            else
            {
                console.log('False'+res);
            }
          }
        });
      });
    });
  </script>

    @include('includes/footer')
</body>

</html>