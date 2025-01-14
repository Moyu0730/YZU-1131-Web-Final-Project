<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Explore YZU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type = "text/css">
        .outer {
            position: absolute;
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }

        .back-to-home:hover::before{
            position: absolute;
            left: -205px;
            background-color: #314065;
            height: 45px;
            width: 200px;
            align-content: center; 
            flex-wrap: wrap;
            color: white;
            border-radius: 5px;
            content: 'Back to Home Page';
        }

        .sign-in:hover{
            color: #314065 !important;
            font-weight: 900;
            background-color: white;
        }

        .create:hover{
            color: rgb(250, 176, 39) !important;
            font-weight: 900;
            background-color: white !important;
        }
    </style>
</head>

<body>
    <div class="wow fadeIn row g-0 align-items-center outer" style ="background-image: url('./img/sign-background.jpg'); align-content: center; flex-wrap: wrap;">


        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->

            <!-- Left Side Start -->
            <div style ="width: 40%; height: 85%; margin-left: auto; align-content: center; flex-wrap: wrap;">
                <div class="" style ="width: 95%; height: 90%; margin-left: auto; padding: 7.5%; background-color: rgb(49, 64, 101, 0.8); align-content: center; flex-wrap: wrap; flex: right; border-radius: 10px 0px 0px 10px">
                    <h1 class="animated fadeIn mb-4" style="text-align: left; font-size: 50px; color: white">Welcome</h1>
                    <form method="post" action="#">
                        <div class="row g-2">
                            <div class="mb-10" style="height: 60px;">
                                <input style="background-color: white !important" name="user-account" type="text" class="form-control bg-light border-0 py-3" placeholder="Account" pattern="[a-zA-Z0-9]{3,20}" required>
                            </div>
                            
                            <div class="mb-4" style="height: 60px;">
                                <input style="background-color: white !important" name="user-password" type="password" class="form-control bg-light border-0 py-3" placeholder="Password" pattern="[A-Za-z0-9]{10}" required>
                            </div>
                            
                            <div class="mb-4" style="height: 60px;" style="text-align: center;">
                                <button class="btn py-3 sign-in" style="color: white; font-size: 18px; float: right; width: 50%; border-width: 2px; border-color: white; border-radius: 40px" onclick="signIn()">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div style ="width: 50%; height: 85%; margin-right: auto; align-content: center; flex-wrap: wrap;">
                <div class="" style ="width: 95%; height: 90%; margin-right: auto; padding: 5%; background-color: rgb(255, 255, 255, 0.8); text-align: center; align-content: center; flex-wrap: wrap; flex: right; border-radius: 0px 10px 10px 0px">
                    <h1 class="animated fadeIn mb-4" style="font-size: 50px;">Create An Account</h1>
                    <div class="mb-4" style="height: 60px;" style="align-content: center; flex-wrap: wrap;">
                        <button class="btn py-3 create" style="background-color:rgb(250, 176, 39); color: white; font-size: 22.5px; width: 40%; border-width: 2px; border-color: rgb(250, 176, 39); border-radius: 40px" onclick="signUp()">Create Now</button>
                    </div>
                </div>
            </div>
            
            <a href="index.php" class="btn btn-lg btn-lg-square back-to-home" style="width: 125px; height: 45px; border-radius: 5px; background-color: #314065; color: white; position: absolute; right: 10px; bottom: 10px;"><i class="fa fa-home"></i>&nbsp; Home</a>
            <!-- Right Side End -->

        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>