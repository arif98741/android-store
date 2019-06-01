<?php 
session_start();
//echo json_encode($_SESSION); exit;
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

			</ul>

			<input type="text" id="search-input" style="display: none;">
			<i class="fa fa-search" id="searchbtn" style="color:#fff;"></i>&nbsp;
			<i class="fa fa-bell" style="color:#fff;"></i>&nbsp;
			<i class="fa fa-question" style="color:#fff;"></i>&nbsp;
		</div>
	</nav>
	<div class="container">


		<div class="card" style="box-shadow: 1px 4px 1px 2px #ddd; width: 100%; margin-top: 20px;">

			<div class="card-body" >
				<h5 class="card-title" >Uploaded Files</h5>

				<div class="row">

				</div><hr>
				<div class="row">
					<div class="col-md-4">
						<h4>File</h4>
						<p><strong><?php echo $_SESSION['filename']; ?></strong></p>
					</div>

				</div>

				<div class="row">
					<div class="col-md-4">

						<h5 class="">Cover Image</h5>
						<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/others/<?php echo $_SESSION['cover_image'];?>" style="width: 100%; height: 200px;">
					</div>

					<div class="col-md-4">

						<h5 class="">Logo</h5>
						<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/others/<?php echo $_SESSION['logo'];?>" style="width: 100px; height: 100px;">
					</div>

				</div>

				<div class="row" style="margin-top: 20px;">

					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_1'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot1</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_1'];?>" style="width: 100%; height: 150px;">
						</div>
					<?php } ?>



					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_2'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot2</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_2'];?>" style="width: 100%; height: 150px;">
						</div>
					<?php } ?>


					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_3'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot3</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_3'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>


					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_4'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot4</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_4'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>

					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_5'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot5</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_5'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>

					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_6'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot6</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_6'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>


					<br>
					<br>
					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_7'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot7</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_7'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>


					<?php if(file_exists("uploads/files/".$_SESSION['filename']."/screenshot/".$_SESSION['screenshot_8'])){ ?>
						<div class="col-md-2">

							<h5 class="">Screenshot8</h5>
							<img src="uploads/files/<?php echo $_SESSION['filename']; ?>/screenshot/<?php echo $_SESSION['screenshot_8'];?>" style="width: 100%; height: 150px;">
						</div>

					<?php } ?>

					


					

					
					
				</div>

			</div>
		</div>

	</div>

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