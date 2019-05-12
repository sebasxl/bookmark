


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU PRINCIPAL</li>
        <li class="active treeview">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show') }}"><i class="fa fa-circle-o"></i> Ver Datos</a></li>
            <li><a href="{{ route('importer') }}"><i class="fa fa-circle-o"></i> Importar Datos</a></li>
            <li><a href="{{ route('exporter') }}"><i class="fa fa-circle-o"></i> Exportar a Archivo</a></li>
          </ul>
        </li>
        
        <li class="header">ENLACES</li>
        <li><a href="{{ route('json') }}"><i class="fa fa-circle-o text-red"></i> <span>API JSON</span></a></li>
        <li><a href="{{ route('importjson') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Importar desde JSON</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
