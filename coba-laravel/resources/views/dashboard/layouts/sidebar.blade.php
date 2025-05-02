<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard">AldiraBlog</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">AG</a>
      </div>
      <ul class="nav-flex-column">
        <li>
          <a class="nav-link dropdown-item  {{ Request::is('dashboard') ? 'active' : '' }}"href="/dashboard" aria-current="page"><i class="fas fa-fire "></i><span> Dashboard</span></a>
        </li>
        <li>
          <a class="nav-link dropdown-item {{ Request::is('dashboard/posts') ? 'active' : '' }} " href="/dashboard/posts" ><i class="fas fa-file-alt"></i> <span> My Posts</span></a>
        </li>
        
        <a class="dropdown-item has-icon text-danger">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
          </form>
        </a>
      </ul>
    </aside>
  </div>