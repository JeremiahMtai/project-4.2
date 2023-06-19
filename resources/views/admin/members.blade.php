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
                  
                  <button class="btn btn-info mt-2 mt-xl-0">List of Group Members</button>
                </div>
              </div>    
            </div>
          </div>

        <div class="container" align="center">
            <!-- <h1 style="text-transform: uppercase; font-weight: bold; background-color: gray; width: 100px;">Customer Order</h1> -->
            <br>

            <table>
                <tr style="background-color: gray;">
                    <td style="padding: 20px;">Name</td>
                    <td style="padding: 20px;">Gender</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                </tr>
                @foreach($data as $members)
                
                <tr align="center" style="background-color: antiquewhite; color: black;">
                    <td style="padding: 20px;">{{$members->name}}</td>
                    <td style="padding: 20px;">{{$members->gender}}</td>
                    <td style="padding: 20px;">{{$members->phone}}</td>
                    <td style="padding: 20px;">{{$members->address}}</td>
                </tr>
                @endforeach
                
            </table>
        </div>

        
                 
        

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">Jeremiah Mtai </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Micro  </a> SACCO</span>
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

