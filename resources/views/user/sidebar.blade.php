<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/redirect')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('saving')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">My Savings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('loan')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Loan</span>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('profile')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('sendsms')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">SMS Confirmation</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('mpesa')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">M-Pesa API</span>
            </a>
          </li> --}}

        </ul>
      </nav>