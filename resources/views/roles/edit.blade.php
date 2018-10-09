@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> Edit Role</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Role Form
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 pb-5">
						{!!Form::open(array('route'=>array('roles.update',$role->id),'method'=>'PUT'))!!}								
							<div class="form-group">
								{!! Form::label('role','Role Name') !!}
								{!! Form::text('role',$role->role,['class'=>'form-control','placeholder'=>'Enter Role','required'=>'required']) !!}
								@if($errors->has('role')) <p class="help-block" style="color:red;">{{ $errors->first('role') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Form::label('description','Description') !!}
								{!! Form::textarea('description',$role->description,['class'=>'form-control','placeholder'=>'Enter Description','required'=>'required']) !!}
								@if($errors->has('description')) <p class="help-block" style="color:red;">{{ $errors->first('description') }}</p> @endif      
							</div>				
							<div class="form-group">
								{!! Html::decode(link_to_Route('roles.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'btn btn-success')) !!}
							</div>	
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection