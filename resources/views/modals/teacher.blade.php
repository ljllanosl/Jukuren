<div id="teacher{{$id}}" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Detalles del docente</h4>
			</div>
			<div class="modal-body">
				{{Form::open(['class' => ' form-horizontal'])}}

				<div class="form-group">
					{{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('codigo',$teacher->codigo,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('nombres',$teacher->nombres,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('apellidoPaterno',$teacher->apellidoPaterno,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('apellidoMaterno',$teacher->apellidoMaterno,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Email',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::email('email',$teacher->email,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Oficina',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('oficina',$teacher->oficina,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('telefono',$teacher->telefono,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>
				{{Form::close()}}
			</div>
			<div class="modal-footer">
				{{Form::button('Regresar', ['class' => 'btn btn-success', 'data-dismiss' => 'modal'])}}
			</div>
		</div>
	</div>
</div>