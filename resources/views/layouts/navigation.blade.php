<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    @if(auth()->check())
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">Usuario: {{auth()->user()->name}}</strong>
                                </span>
                            </span>
                        </a>
                    @endif
                    
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SEC
                </div>
            </li>
            <li>
                <a href="{{ url('/') }}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
            </li>
            {{--  @if(auth()->user()->role_id==2)  --}}
            <li>
                <a href="{{ route('competencia.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Competencias</span> </a>
            </li>    
            {{--  @endif
            @if(auth()->user()->role_id==2)              --}}
            <li>
                <a href="{{ route('curso.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Cursos</span> </a>
            </li>            
            {{--  @endif
            @if(auth()->user()->role_id==2)  --}}
            <li>
                <a href="{{ route('desempenho.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Desempeños</span> </a>
            </li>
            {{--  @endif  --}}
            <li class="bold">
                <a data-toggle="collapse" href="#collapse1"><i class="fa fa-cog"></i>Evaluacion en linea</a>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul>                    
                    <a href="{{ route('evaluacion.index') }}">Administrar Evaluacion</a>                    
                    <a href="{{ route('pregunta.index') }}">Administrar Preguntas</a>                                        
                    </ul>
                </div>
            </li>             
            <li>
                <a href="{{ route('docente.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Docentes</span> </a>
            </li>
            <li>
                <a href="{{ route('alumno.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Alumnos</span> </a>
            </li>
            <li>
                <a href="{{ route('reporte.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Reporte</span> </a>
            </li>
            <li>
                <a href="{{ route('usuario.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Usuarios</span> </a>
            </li>
            <li>
                <a href="{{ route('evidencia.index') }}"><i class="fa fa-cog"></i> <span class="nav-label">Portafolio</span> </a>
            </li>
            
        </ul>

    </div>
</nav>
