<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
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
                  <button class="btn btn-success mt-2 mt-xl-0">Show Savings</button>
                </div>
              </div>
            </div>
          </div>
          <br><hr style="border : 1px solid black;">    

          <div class="container">
            <div class="card">
                <div class="card-title text-center pt-10 mt-10">
                    <h1>Show Savings</h1>
                </div>
                
                <div class="card-body text-center">

                @if(session()->has('message'))

              
                  <div class="alert alert-success">

                  {{session()->get('message')}}
                  
                    <button type="button" class="close" data-dismiss="alert">X</button>               
                    
                  </div>
                @endif

                    <table>
                        <tr>
                            <th width="100">Title</th>
                            <th width="100">Description</th>
                            <th width="100">Amount</th>
                            <th width="100">Image</th>
                            <th width="100">Update</th>
                            <th width="100">Delete</th>
                        </tr>

                        @foreach($data as $show_savings)
                        <tr>
                            <td width="100">{{$show_savings->title}}</td>
                            <td width="100">{{$show_savings->description}}</td>
                            <td width="100">{{$show_savings->amount}}</td>
                            <td width="100">
                                <img src="/savingmod/{{$show_savings->image}}" alt="">
                            </td>

                            <td>
                              <a class="btn btn-primary" href="">Update</a>
                            </td>
                            <td>
                              <a class="btn btn-danger" href="{{url('deletesaving',$show_savings->id)}}">Delete</a>
                            </td>

                        </tr>

                        @endforeach
                    </table>
                </div>

            </div>

          </div>


          
          
          


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">Jeremiah Mtai </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="#" target="_blank"> Micro  </a> SACCO</span>
        </div>
        </footer>
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

