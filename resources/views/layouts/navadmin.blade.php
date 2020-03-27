<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Administrador <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="{{route('admin.show',$id=auth()->user()->actors_id)}}">Ver</a></li>
          <li><a href="{{route('admin.create')}}">Crear</a></li>
          <li><a href="{{route('admin.index')}}">Administradores</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> Evaluador <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('pollster.create')}}">Crear</a></li>
          <li><a href="{{route('pollster.index')}}">Evaluadores</a></li>
        </ul>
      </li>


    </ul>
  </div>

</div>
