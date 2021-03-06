<?php 
include 'config/config.php';
$link = connection();

if (isset($_POST['saveapplication'])) {

    //echo '<pre>';
   // print_r($_FILES); die;

    require 'apk_upload.php';
    /*image upload start*/
    
}


?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Upload App</title>
  <style>
    *{margin: 0 ; padding: 0;}

    .navbar{
      background-color: #607D8B !important;
    }
    .navbar a{
      color: #fff;
    }

    .inputfile {
      display: inline-block;
      width: 100%;
      opacity: .6;
      padding: 120px 0 0 0;
      height: 50px;
      overflow: hidden;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      background: url('https://cdn3.iconfinder.com/data/icons/transfers/100/239396-upload_export-48.png') center center no-repeat #e4e4e4;
      background-size: 60px 60px;
      cursor: pointer;
    }

    .screenshot {
      display: inline-block;
      width: 85%;
      margin: 0px !important;
      padding: 120px 0 0 0;
      height: 50px;
      overflow: hidden;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      
      background: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png') center center no-repeat #e4e4e4;
      background-size: 60px 60px;
      cursor: pointer;
    }

    
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="index.php">All Applications</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      
      <input type="text" id="search-input" style="display: none;">
      <i class="fa fa-search" id="searchbtn" style="color:#fff;"></i>&nbsp;
      <i class="fa fa-bell" style="color:#fff;"></i>&nbsp;
      <i class="fa fa-question" style="color:#fff;"></i>&nbsp;
    </div>
  </nav>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">

      <h3>Upload App</h3>
      <!-- product details -->
      <div class="row">


        <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; margin-top: 20px; width: 100%;">

          <div class="card-body">
            <h5 class="card-title" >Android App Bundles and APKs to Add</h5>
            <small>This app bundles and APKs will be served in the Google Play Store after the rollout fo the release.</small>


            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <input type="file" name="file_apk" id="file_apk" class="inputfile" style="cursor: pointer;" accept=".apk" required="" />
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; margin-top: 20px; width: 100%;">

          <div class="card-body">
            <h5 class="card-title" >What's new in this release?</h5>
            <small>Release notes translated in 0 languages</small>
            <small>Enter the release notes for each languaghe within the relevant tags or copy the template for offline editing. Release notes for each language should be within 500 character limit. </small>


            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <textarea name="whatsnew" id="whatsnew" cols="30" rows="10"></textarea>>
                  <bn-BD>
                    Enter or paste your release notes for bn-BD here
                  </textarea>
                </div>
              </div>
              
            </div>
          </div>
        </div>


        <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; margin-top: 20px; width: 100%;">

          <div class="card-body">
            <h5 class="card-title" >Select Image for Cover and Logo</h5>
            <small>JPEG or 24-bit PNG(no alpha). Min length for any side: 320px;. Max length for any side 3840px.</small><br>
            <small>At least 2 <strong>screenshots are required</strong> overall. <strong>Max 8 screenshots per type.</strong>Drag to reorder or to move between types.</small>

            <div class="row">

             <div class="col-md-6">
              <div class="card ">
                <small class="text-center">Select Cover Image</small>
                <input type="file" name="cover_image"  id="cover_image" style="cursor: pointer; "  class="inputfile"   />
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="card " style="margin-left: 6px;">
                <small class="text-center">Select Logo</small>
                <input type="file" name="logo"  style="cursor: pointer;"  id="logo" class="inputfile"   />
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; width: 100%; margin-top: 20px;">

        <div class="card-body" >
          <h5 class="card-title" >Product Details</h5>

          <div class="row">
            <div class="col-md-4">
              <p>Title *</p>
              <p class="text-muted pull-left">English (United States) - en-US</p>
            </div>
            <div class="col-md-6">
              <input type="text" name="type" class="form-control pull-right" value="TutorBot" style="outline: none; border:none; border-bottom: 1px solid #ddd; border-radius: 0;">
              <small style="width: 100%" class="text-right">11/50</small>
            </div>

          </div>

          <div class="row" style="margin-top: 70px;">
            <div class="col-md-4">
              <p>Short Description *</p>
              <p class="text-muted pull-left">English (United States) - en-US</p>
            </div>
            <div class="col-md-6">
              <input type="text" name="short_description" id="short-description" class="form-control pull-right" style="outline: none; border:none; border-bottom: 1px solid #ddd; border-radius: 0;">
              <small style="width: 100%" class="text-right">11/50</small>
            </div>

          </div>

          <div class="row" style="margin-top: 70px;">
            <div class="col-md-4">
              <p>Full Description Description *</p>
              <p class="text-muted pull-left">English (United States) - en-US</p>
            </div>
            <div class="col-md-6">
              <input type="text" name="full_description" class="form-control pull-right" id="full-description" style="outline: none; border:none; border-radius: 0;">

            </div>

          </div>

        </div>
      </div>

      <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; width: 100%; margin-top: 20px;">

        <div class="card-body" >
          <h5 class="card-title" >Categorization</h5>

          <div class="row">
            <div class="col-md-4">
              <p>Application Type *</p>

            </div>
            <div class="col-md-6">
              <select name="application_type" id="categorization" class="form-control" style="border: none; outline: none; border-bottom: 2px solid #000; border-radius: 0px;">
                <option value="" class="text-muted" disabled="" selected="">Select an application type</option>
                <?php 
                $stmt = $link->prepare("select * from category order by category_name");
                $stmt->execute();
                $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($categories as $category) { ?>
                  <option value="<?php echo $category->id; ?>" class="text-muted" ><?php echo $category->category_name; ?></option>

                <?php }

                ?>
              </select>
            </div>

          </div>
          <div class="row" style="margin-top: 70px;">
            <div class="col-md-4">
              <p>Category *</p>

            </div>
            <div class="col-md-6">
              <select name="subcategory" id="subcategory" class="form-control" style="border: none; outline: none; border-bottom: 2px solid #000; border-radius: 0px;">
                <option value="" class="text-muted">Select a category</option>
              </select>
            </div>

          </div>
          <hr>

        </div>
      </div>
      <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; margin-top: 20px; width: 100%;">
        <div class="card-body">
          <h5 class="card-title" >Screenshots</h5>
          <small>Default - English(United States) - en-US</small>
          <small>JPEG or 24-bit PNG(no alpha). Min length for any side: 320px;. Max length for any side 3840px.</small><br>
          <small>At least 2 <strong>screenshots are required</strong> overall. <strong>Max 8 screenshots per type.</strong>Drag to reorder or to move between types.</small>

          <div class="row">
            <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_1" style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_2"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

             <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_3"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

             <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_4"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

             <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_5"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_6"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_7"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

            <div class="col-md-2">
              <div class="card">
                <span class="btn btn-info "><i class="glyphicon glyphicon-plus"> </i> Browse
                  <input type="file" name="screenshot_8"  style="position:relative; overflow:hidden" class="screenshot" name="ArtistImage" accept="image/png, image/jpeg" />
                </span>
              </div>
            </div>

            
          </div>
        </div>
      </div>


    </div>

    <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; width: 100%; margin-top: 20px;">

      <div class="card-body" >
        <h5 class="card-title" >Contact Details</h5>

        <div class="row">
          <div class="col-md-4">
            <p>Website</p>

          </div>
          <div class="col-md-6">
            <input type="text" name="website" class="form-control" style="outline: none; border: none; border-bottom: 1px solid #000; border-radius: 0px;" value="http://">
          </div>

        </div><hr>
        <div class="row" style="margin-top: 70px;">
          <div class="col-md-4">
            <p>Email</p>

          </div>
          <div class="col-md-6">
            <input type="text" name="email" class="form-control" style="outline: none; border: none; border-bottom: 1px solid #000; border-radius: 0px;" value="abc@gmail.com">
            <small class="text-muted">Please provide an email address where you be contacted. This address will be publicly displayed with your app.</small>
          </div>

        </div>
        <hr>
        <div class="row" style="margin-top: 70px;">
          <div class="col-md-4">
            <p>Phone</p>

          </div>
          <div class="col-md-6">
            <input type="text" name="phone" class="form-control" style="outline: none; border: none; border-bottom: 1px solid #000; border-radius: 0px;"  >

          </div>
        </div>
      </div>
    </div>

    <div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; width: 100%; margin-top: 20px;">

      <div class="card-body" >
        <h5 class="card-title" >Privacy Policy</h5>
        <small class="text-muted">If you wish to provide a policy URL for this application, please enter it below. Also please check out our User Data policy to avoid common violations.</small>

        <div class="row">
          <div class="col-md-4">
            <p>Privacy Policy</p>

          </div>
          <div class="col-md-6">
            <input type="text" name="privacy_policy" class="form-control" style="outline: none; border: none; border-bottom: 1px solid #000; border-radius: 0px;" value="http://">
            <input type="checkbox"> &nbsp; <span class="text-muted">Not submitting a privacy policy URL at this time. <a href="#">Learn more</a></span>
          </div>

        </div><hr>
      </div>
    </div>
    <button type="submit" name="saveapplication" class="btn btn-primary text-center;" style="margin-top: 50px; margin-bottom: 50px;  width: 99%; ">Upload Application</button>
  </div>
</form>
</div>
</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
  $(document).ready(function() {

    /*cover image change*/
    $('#cover_image').change(function(event) {
      var path = $(this).val();
      mystring = path.substr(12);
      
    });

    /*file apk*/
    $('#file_apk').change(function(event) {

      var path = $(this).val();
      mystring = path.substr(12);
      //$(this).attr("style", "");

      console.log(mystring);
      
    });

    


    $('#categorization').change(function() {
      var category = parseInt($(this).val());
      $.ajax({
        url: 'fetch.php',
        data: {category: category, action: 'getsubcategories'},
      })
      .done(function(response) {
        //console.log(response);
        $('#subcategory').html(response);
      })
      .fail(function() {
        console.log("error");
      });
    });


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