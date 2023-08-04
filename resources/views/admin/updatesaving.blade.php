<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <base href="/public">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Madaraka Day</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Welcome back, {{ Auth::user()->name }}</h2>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  
                  </button>
                  <button class="btn btn-success mt-2 mt-xl-0">Update Savings</button>
                </div>
              </div>
            </div>
          </div>
          <br><hr style="border : 1px solid black;">    

          <div class="container">
            <div class="card">
                <div class="card-body">

                <style>
                  .title{
                    color:black; 
                    padding-top: 25px; 
                    font-size: 25px
                  }
                  label{
                    display: inline-block;
                    width: 200px;
                  }
                  .btn{
                    background-color: aquamarine;
                  }
                  .btn:hover{
                    text-transform: uppercase;
                    color: green;
                  }

                </style>
                  <p class="card-title text-center">Update Saving</p>

                  <div class="container" align="center">

                    <form action="{{url('updsaving',$data->id)}}" method="post" enctype="multipart/form-data">

                    @if(session()->has('message'))

              
                      <div class="alert alert-success">

                      {{session()->get('message')}}
                      
                        <button type="button" class="close" data-dismiss="alert">X</button>               
                        
                      </div>
                    @endif

                    @csrf

                        <div style="padding:15px">
                        <label>Title</label>
                          <input type="text" name="title" required value="{{$data->title}}">  
                        </div>

                        <div style="padding: 15px;">
                          <label>Description</label>
                          <input type="text" name="description" required value="{{$data->description}}">
                        </div>

                        <div style="padding: 15px;">
                          <label>Amount</label>
                          <input type="number" name="amount" required value="{{$data->amount}}">
                        </div>

                        <div style="padding: 15px;">
                          <label>Old Image</label>
                          <img src="/savingmod/{{$data->image}}" alt="" height="100px;" width="100">
                        </div>

                        <div style="padding: 15px;">
                        <label>Change the Image</label>
                          <input type="file" name="file">
                        </div>

                        <div style="padding: 15px;">
                          <input class="btn" type="submit">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="admin/vendors/chart.js/Chart.min.js"></script>
  <script src="admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/dashboard.js"></script>
  <script src="admin/js/data-table.js"></script>
  <script src="admin/js/jquery.dataTables.js"></script>
  <script src="admin/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

