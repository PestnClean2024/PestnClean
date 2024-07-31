<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/imgs/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/imgs/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Phạm Đức Mạnh</a>
          {{-- {{Auth::user()->name}} --}}
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<<<<<<< HEAD
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="{{route('categories.create')}}" class="nav-link">
                {{-- {{route('categories.index')}} --}}
              <i class="nav-icon fas fa-gear"></i>
              <p>
                Quản lý dịch vụ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories.create')}}" class="nav-link">
                    {{-- {{route('categories.create')}} --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo dịch vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link">
                    {{-- {{route('categories.index')}} --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách dịch vụ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="{{route('products.index')}}" class="nav-link">
                {{-- {{route('categories.index')}} --}}
              <i class="nav-icon fas fa-pagelines"></i>
              <p>
                Quản lý sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link">
                    {{-- {{route('categories.create')}} --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link">
                    {{-- {{route('categories.index')}} --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt kê sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="{{route('categoriesArticles.index')}}" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Danh mục bài viết
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categoriesArticles.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categoriesArticles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt kê danh mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="{{route('articles.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Quản lý bài viết
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('articles.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('articles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bài viết</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="{{route('customers.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Quản lý khách hàng
                
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Quản lý đơn hàng
                
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
=======
                @if (auth()->user()->role === 'executive')
                    <li class="nav-item">
                        <a href="{{ route('categoriesArticles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>
                                Danh mục bài viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categoriesArticles.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm danh mục </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categoriesArticles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Liệt kê danh mục</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @elseif(auth()->user()->role === 'superadmin' || auth()->user()->role === 'admin')
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.create') }}" class="nav-link">
                            {{-- {{route('categories.index')}} --}}
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Quản lý dịch vụ
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}" class="nav-link">
                                    {{-- {{route('categories.create')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo dịch vụ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}" class="nav-link">
                                    {{-- {{route('categories.index')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách dịch vụ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link">
                            {{-- {{route('categories.index')}} --}}
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Quản lý sản phẩm
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('products.create') }}" class="nav-link">
                                    {{-- {{route('categories.create')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm sản phẩm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products.index') }}" class="nav-link">
                                    {{-- {{route('categories.index')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách sản phẩm</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-earth-americas"></i>
                            <p>
                                Quản lý đơn hàng
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tình trạng đơn hàng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách các đơn hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('access.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Quản lý lượt truy cập
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.create') }}" class="nav-link">
                            {{-- {{route('categories.index')}} --}}
                            <i class="nav-icon fas fa-gear"></i>
                            <p>
                                Quản lý dịch vụ
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}" class="nav-link">
                                    {{-- {{route('categories.create')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo dịch vụ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}" class="nav-link">
                                    {{-- {{route('categories.index')}} --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách dịch vụ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categoriesArticles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder-plus"></i>
                            <p>
                                Danh mục bài viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categoriesArticles.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm danh mục </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categoriesArticles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Liệt kê danh mục</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('articles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Quản lý bài viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('articles.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm bài viết</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('articles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách bài viết</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('customers.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý khách hàng
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('customers.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách khách hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
>>>>>>> 6a55acc938acde8b8a2cb391e335c9c3f7362451
    </div>
    <!-- /.sidebar -->
  </aside>