@extends('layouts.app')
@section('content')

<div class="page-title">
	<div class="title_left">
		<h3>Cursos</h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="clearfix"></div>
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">Codigo</th>
                        <th class="column-title">Nombre</th>
                        <th class="column-title">Descripcion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr> 
                            <td>{{$course->codigo}}</td> 
                            <td>{{$course->nombre}}</td> 
                            <td>{{$course->descripcion}}</td>                             
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection