<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('redirect')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('m_saving')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Members Savings</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('show_savings')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Show Savings</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ url('m_loan')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Loans</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('members')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Members</span>
            </a>
          </li>
        </ul>
      </nav>