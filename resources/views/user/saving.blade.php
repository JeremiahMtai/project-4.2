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

  <!-- font awesome -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  
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
                  <a href="{{url('total-saving')}}">Total Savings [ {{$count}} ]</a>
                </div>
              </div>
            </div>
          </div>
          <br>

          @if(session()->has('message'))

              
            <div class="alert alert-success">

            {{session()->get('message')}}
            
              <button type="button" class="close" data-dismiss="alert">X</button>               
              
            </div>
          @endif


          <hr style="border : 1px solid black;">
          <br>
          <div class="row"> 
          <br>           

            @foreach($data as $saving_mod)
            <div class="col-md-4">
              <div class="product-item">
                <img style="height: 200px; width: 200px"  src="/savingmod/{{($saving_mod->image)}}" alt=""><br>
                <div class="down-content">
                  <a href="#"><h4>{{($saving_mod->title)}}</h4></a><br><br>
                  {{-- <h6>{{($saving_mod->amount)}}</h6><br> --}}
                  <p>{{($saving_mod->description)}}</p><br>
                </div>
                <div>
                  <form action="{{url('save',$saving_mod->id)}}" method="POST">
                    @csrf

                    {{-- <input type="number" value="10" min="10" style="width:100px" class="form-control" name=""> --}}
                    <br>

                    {{-- <input class="btn btn-primary" type="submit" value="Save" style="color: blue;"> --}}
                  </form>
                </div>
              </div>
           </div>
           @endforeach

           <div class="d-flex justify-content-center">
               {!! $data->links()!!}

            </div>
            
          </div>
          <br><br>

          <!-- resources/views/savings.blade.php -->

          <div class="container">
            <h2>Savings</h2>
            <form action="{{ url('mbrsave') }}" method="POST">
                @csrf

                <label for="saving_typ">Saving Type:</label>
                <select name="saving_typ" id="saving_typ" required>
                    <option value="Normal Saving">Normal Saving</option>
                    <option value="Local Saving">Local Saving</option>
                    <option value="Mwalimu Saving">Mwalimu Saving</option>
                    <!-- Add more options as needed -->
                </select><br><br>

                <label for="date">Date:</label>
                <input type="date" name="date"><br><br>

                <label for="amount">Amount:</label>
                <input type="number"  name="amount" id="amount" required><br><br>

                <input type="submit" class="btn btn-primary" value="Send" style="text-transform: uppercase">
            </form>
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

