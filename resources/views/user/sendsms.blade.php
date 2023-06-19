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
    @include('user.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('user.sidebar')
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
                  <button class="btn btn-danger mt-2 mt-xl-0">Send SMS Confirmation</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <style>
                label{
                    display: inline-block;
                    width: 100px;
                    padding: 15px;
                }
            </style>
            <center>
                <h2 style="padding-top: 100px; color: skyblue">Sending SMS</h2>

                <form action="{{url('/sendsms')}}" method="get">
                    <div>
                        <label>Receiver Phone :</label>
                        <input type="text" name="phone">
                    </div>

                    <div>
                        <label>Receiver Message :</label>
                        <input type="text" name="message">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Send SMS">
                    </div>
                </form>
            </center>
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

