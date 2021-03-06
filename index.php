<?php 
include 'config/config.php';
$link = connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Android Store</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="assets/public/css/mdb.min.css" rel="stylesheet">

</head>

<body class="fixed-sn cyan-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4">
            <ul class="custom-scrollbar">
                <!-- Logo -->

                <!--/. Logo -->
                <!--Social-->
               <!--  <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                    </ul>
                </li> -->
                <!--/Social-->
                <!--Search Form-->
                <li>
                 <a href="#" class="" style="color: #D0ECED;"><i class="fab fa-android" style="font-size: 19px; color: #D3B2B2 !important; padding: 0px 0px 0px 11px;"></i>&nbsp; All Applications</a>

                 <a href="design.php" class=""  style="color: #D0ECED;"><i class="fas fa-upload"  style="font-size: 19px; color: #D3B2B2 !important; padding: 0px 0px 0px 11px;"></i>&nbsp; Upload Applcation</a>

                 <!--    <a href="#" class=""  style="color: #D0ECED;"><i class="fas fa-gamepad"  style="font-size: 19px; color: #D3B2B2 !important; padding: 0px 0px 0px 11px;"></i>&nbsp; Game Service</a>

                 -->

             </li>

             <!--/. Side navigation links -->
         </ul>
         <div class="sidenav-bg mask-strong"></div>
     </div>
     <!--/. Sidebar navigation -->
     <!-- Navbar -->
     <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>All Applications</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <i class="fa fa-search" id="searchbtn" style="cursor: pointer;"></i> <input type="text" id="search-input" class="search-inp" placeholder="Search for apps" style="display: none;">

            </li>&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <i class="fa fa-bell"></i>

            </li>&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <i class="far fa-question-circle"></i>

            </li>&nbsp;&nbsp;&nbsp;

            

        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->

<!--Main layout-->
<main>

    <div class="container ">

        <div class="row">
            <div class="offset-md-9 col-md-3">
               <ul class="list-inline pull-right" style="color: #0277BD;">

                <li class="list-inline-item pull-right"><a href="upload.php" class="btn btn-primary" >Create Application!</a></li>
            </ul> 
        </div>

    </div>

    <!--Card-->
    <div class="card card-cascade wider reverse my-4 pb-5" style="min-height: 400px;">

        <!--Card image-->
        <div class="view view-cascade overlay wow fadeIn">
           <table class="table" width="100%">
            <thead>
                <tr>
                    <th width="auto">Serial</th>
                   <th width="auto">App Name</th>
                   <th width="auto">active installs</th>
                   <th width="auto">Avg rating total</th>
                   <th width="auto">Last Update</th>
                   <th width="auto">Status</th>
               </tr>
           </thead>
           <tbody>

            <?php 
            $stmt = $link->prepare("select * from apps order by app_name asc");
            $stmt->execute();
            $apps = $stmt->fetchAll(PDO::FETCH_OBJ);
            $i = 1;
            foreach ($apps as $app) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $app->app_name; ?></td>
                    <td><?php echo $app->app_install; ?></td>
                    <td><i class="fas fa-star text-muted"><?php echo $app->average_rating; ?></i></td>
                    <td><?php echo date('F, d Y',strtotime($app->last_update)); ?></td>
                    <td><?php echo ucfirst($app->status); ?></td>
                </tr>

            <?php $i++;} ?>

        </tbody>
    </table>
</div>
<!--/Card image-->


<!--/.Card content-->

</div>
<!--/.Card-->

</div>

</main>
<!--/Main layout-->

<!--Footer-->
<footer class="page-footer text-center text-md-left pt-4">

    <!--Footer Links-->
    <!--  <div class="container-fluid"> -->
        <!-- <div class="row"> -->

            <!--First column-->
               <!--  <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div> -->
                <!--/.First column-->

                <!--   <hr class="w-100 clearfix d-md-none"> -->

                <!--Second column-->
                <!-- <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div> -->
                <!--/.Second column-->

                <!-- <hr class="w-100 clearfix d-md-none"> -->

                <!--Third column-->
                <!-- <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div> -->
                <!--/.Third column-->

                <!-- <hr class="w-100 clearfix d-md-none"> -->

                <!--Fourth column-->
                <!-- <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div> -->
                <!--/.Fourth column-->

                <!--  </div> -->
                <!--  </div> -->
                <!--/.Footer Links-->

                <!--  <hr> -->

                <!--Call to action-->
       <!--  <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div> -->
        <!--/.Call to action-->



        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2019 Copyright: <a href="#android-store">Android</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="assets/public/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/public/js/mdb.min.js"></script>
    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

    </script>

    <script>
        $(document).ready(function() {
            console.log($(window).width());

            $(window).resize(function() {
                //console.log($(this).width());
                if ($(this).width() < 768) {
                    $('table').addClass('table-responsive');
                }else{
                   $('table').removeClass('table-responsive');
               }
           });
            var i = 1;
            $('#searchbtn').click(function(event) {
                if(i==1)
                {
                    $('#search-input').show(500);
                    i =0;
                }else{
                    $('#search-input').hide(500);
                    i =1;
                }
            });



        });
    </script>

</body>

</html>
