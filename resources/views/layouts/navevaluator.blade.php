<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Perfil <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('pollster.show',$id=5)}}">Ver</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Encuestas <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('survey.create')}}">Crear</a></li>
                    <li><a href="{{ route('survey.index')}}">Listar</a></li>
                    <li><a href="{{ route('pag_env_encuesta')}}">Enviar Formulario</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i>Historial de Encuestas<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="general_elements.html">Listar</a></li>
                </ul>
            </li>

        </ul>
    </div>

</div>
