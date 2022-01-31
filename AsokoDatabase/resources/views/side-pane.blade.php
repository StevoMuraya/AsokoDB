<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2 mb-2" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">Asoko Database Management</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ($active == " dashboard")active @endif">
        <a class="nav-link" href="{{ route('home.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item @if ($active == " clients")active @endif">
        <a class="nav-link" href="{{ route('clients.index') }}">
            <i class="fas fa-calendar"></i>
            <span>Clients</span></a>
    </li>
    <li class="nav-item @if ($active == " agents")active @endif">
        <a class="nav-link" href="{{ route('agents.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Agents</span></a>
    </li>
    <li class="nav-item  @if ($active == " gadgets")active @endif">
        <a class="nav-link" href="{{ route('gadgets.index') }}">
            <i class="fas fa-space-shuttle"></i>
            <span>Gadgets</span></a>
    </li>
    <li class="nav-item  @if ($active == " transactions")active @endif">
        <a class="nav-link" href="{{ route('transactions.index') }}">
            <i class="fas fa-dollar-sign"></i>
            <span>Astrack Transactions</span></a>
    </li>
    <li class="nav-item  @if ($active == " mpesa-transaction")active @endif">
        <a class="nav-link" href="{{ route('mpesa-transactions.index') }}">
            <i class="fas fa-dollar-sign"></i>
            <span>M-Pesa Transactions</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Register New Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>
<!-- End of Sidebar -->