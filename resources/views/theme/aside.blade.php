 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
              <a>
                <i class="fa fa-institution"></i>
                <span>Empresas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{Route('empresa.create')}}"><i class="fa fa-circle-o"></i>Crear Empresa</a></li>
                <li><a href="{{Route('empresa.index')}}"><i class="fa fa-circle-o"></i>Listar Empresa</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a>
                <i class="fa fa-users"></i>
                <span>Empleados</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{Route('empleado.create')}}"><i class="fa fa-circle-o"></i>Crear Empleados</a></li>
                <li><a href="{{Route('empleado.index')}}"><i class="fa fa-circle-o"></i>Listar Empleados</a></li>
              </ul>
            </li>
          </ul>
          </div>
        </section>
 </aside>
    
    