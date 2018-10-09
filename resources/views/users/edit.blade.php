@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> New User</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				User Form
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 animated flash">
			            @if(count($errors) > 0 )
			                <div class="alert alert-danger alert-dismissible flash" role="alert">            
			                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			            </button>
			                    <center><h4>Oh snap! You got an error!</h4></center>   
			                </div>
			            @endif
			        </div>    
					<div class="col-lg-12 pb-5">
						{!!Form::open(array('route'=>array('users.update',$user->id),'method'=>'PUT'))!!}											
							<div class="form-group">
								{!! Form::label('name','Name') !!}
								{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Enter Name','required'=>'required']) !!}
								@if($errors->has('name')) <p class="help-block" style="color:red;">{{ $errors->first('name') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Form::label('role_id','Description') !!}
								{!! Form::select('role_id',$roles,$user->role_id,['class'=>'form-control','required'=>'required']) !!}
								@if($errors->has('role_id')) <p class="help-block" style="color:red;">{{ $errors->first('role_id') }}</p> @endif      
							</div>			
							<div class="form-group">
								{!! Form::label('company_code','Description') !!}
								{!! Form::select('company_code',$companies,$user->company_code,['class'=>'form-control','required'=>'required']) !!}
								@if($errors->has('company_code')) <p class="help-block" style="color:red;">{{ $errors->first('company_code') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Form::label('email','Email') !!}
								{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Enter Email','required'=>'required']) !!}
								@if($errors->has('email')) <p class="help-block" style="color:red;">{{ $errors->first('email') }}</p> @endif      
							</div>				
							<div class="form-group">
								{!! Form::label('password','Password') !!}
								<input type="password" name="password" class="form-control" required="">
								@if($errors->has('password')) <p class="help-block" style="color:red;">{{ $errors->first('password') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Html::decode(link_to_Route('users.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Update', array('type' => 'submit', 'class' => 'btn btn-success')) !!}
							</div>	
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection