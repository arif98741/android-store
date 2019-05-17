<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>File List</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><i class="fa fa-android text-red brand-icon"></i>Android Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Latest<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">New Release</a>
      </li>
    </ul>
    
  </div>
</nav>

  <div class="container-fluid" style="margin-top: 20px;">

    <div class="row">
      <div class="col-md-2">

        <div class="sidebar">
           <ul class="list-group">
            <li class="list-group-item"><a href="index.html" class=" btn btn-lg btn-primary btn-block text-le"  style="margin: 0px; padding: 0px;"><i class="fa fa-home">&nbsp;</i>Homepage</a></li>
            <li class="list-group-item"><a href="filelist.html" class="active btn btn-block btn-lg btn-primary text-le" style="margin: 0px; padding: 0px;"><i class="fa fa-list"></i>&nbsp;File List</a></li>
            <li class="list-group-item"><a href="profile.html" class="btn btn-block btn-lg btn-primary text-le" style="margin: 0px; padding: 0px;"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
            <li class="list-group-item"><a href="login.html" class="btn btn-block btn-lg btn-primary text-le" style="margin: 0px; padding: 0px;"><i class="fa fa-lock"></i>&nbsp;Login</a></li>
            <!-- <li class="list-group-item"><a href="#" class="btn btn-block btn-sm btn-primary text-le" style="margin: 0px; padding: 0px;">Vestibulum at eros</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-10">
        <div class="content">
          <h1 class="text-muted">File List</h1><hr>
          <table class="table table-bordered" id="datatable">
            <tbody>
              <tr>
                <th>SL</th>
                <th>App Name</th>
                <th>Size</th>
                <th>Uploader</th>
                <th>Upload Date</th>
                <th>--</th>
              </tr>
              <tr>
                <td>01</td>
                <td>Skype</td>
                <td>35MB</td>
                <td>Ariful Islam</td>
                <td>12-12-2019</td>
                <td>
                  <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td>02</td>
                <td>Skype</td>
                <td>35MB</td>
                <td>Ariful Islam</td>
                <td>12-12-2019</td>
                <td>
                  <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td>03</td>
                <td>Skype</td>
                <td>35MB</td>
                <td>Ariful Islam</td>
                <td>12-12-2019</td>
                <td>
                  <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td>04</td>
                <td>Skype</td>
                <td>35MB</td>
                <td>Ariful Islam</td>
                <td>12-12-2019</td>
                <td>
                  <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              
            </tbody>
          </table>
        </div>
      </div>


    </div>


  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>
</body>
</html>