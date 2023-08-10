<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Table Banking</title>
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
          
       <div class="container">
        <div class="card">
          <button class="btn bnt-primary"><a href="{{ url('/member_savings')}}">Report</a></button>
            <div class="card-title text-center pt-10 mt-10">
              <h1 style="text-align: center">Member Saving</h1><br><br>
              
          </div>

              <div class="card-body text-center">
                @if(session()->has('message'))

                
                <div class="alert alert-success">

                {{session()->get('message')}}
                
                  <button type="button" class="close" data-dismiss="alert">X</button>               
                  
                </div>
              @endif

              <table style="text-align: center" class="table">
                <tr style="width: 200px">
                    <th width="100">Saving Type</th>
                    <th width="100">Amount</th>
                    <th width="100">Update</th>
                    <th width="100">Date</th>
                    <th width="100">Action</th>
                </tr>
    
                {{-- @if(is_array($totalSavings) || is_object($totalSavings)) --}}
                    @foreach($totalSavings as $mbrsaves)
                <tr>
                    <td width="100">{{$mbrsaves->saving_typ}}</td>
                    <td width="100">{{$mbrsaves->amount}}</td>
                    <td width="100">{{$mbrsaves->date}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{url('update_mbrsave',$mbrsaves->id)}}">Update</a>
                    </td>                
                    <td>
                      <a class="btn btn-danger" href="{{url('deletembrsave',$mbrsaves->id)}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                    </td>
                </tr>
                    @endforeach

                </div>
            </table><br>
            
            <div class="container">
              <hr style="border:2px solid black;">
              @php
                  $total = 0;
    
                  foreach ($totalSavings as $mbrsaves) {
                      $total += $mbrsaves->amount;
                  }
              @endphp
              <table class="table">
                <tbody >
                  <th scope="row" colspan=4 align='right'><b>TOTAL</b></th>
                  <td>KSH. {{$total}} </td>
              </table>
            </div>
          </div>
          </div>
        </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">Jeremiah Mtai </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="#" target="_blank"> Micro  </a> SACCO</span>
        </div>
        </footer> --}}
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

