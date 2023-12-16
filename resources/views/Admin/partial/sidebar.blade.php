  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
       
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('category.list') }}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Categories</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('food.list') }}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Foods</span>
        </a>
      </li><!-- End Tables Nav -->  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{route('package.list')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>package</span>
        </a>
      </li><!-- End Tables Nav -->  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('order.list')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>order</span>
        </a>
      </li><!-- End Tables Nav --><li class="nav-item">
       {{-- <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{route('order.details')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span> order details</span>
        </a> --}}
      </li><!-- End Tables Nav --><li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>schedule</span>
        </a>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>payment</span>
        </a>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Business settings</span>
        </a>
       
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{route('users.list')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>user</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{route('customer.list')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Customer</span>
        </a>
    </ul>

  </aside>