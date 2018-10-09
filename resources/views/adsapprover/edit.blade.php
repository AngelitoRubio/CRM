@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> Edit Advertisment Approver </h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Advertisment Approver
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
						{!!Form::open(array('route'=>array('adsapprover.update',$adsapprover->id),'method'=>'PUT'))!!}												
							<div class="form-group">
								{!! Form::label('ads_id','Advertisment Title') !!}
								{!! Form::select('ads_id',$adss,$adsapprover->ads_id,['class'=>'form-control','required'=>'required']) !!}
								@if($errors->has('ads_id')) <p class="help-block" style="color:red;">{{ $errors->first('role_id') }}</p> @endif      
							</div>			
							<div class="form-group">
								{!! Form::label('user_id','Name') !!}
								{!! Form::select('user_id',$users,$adsapprover->user_id,['class'=>'form-control','required'=>'required']) !!}
								@if($errors->has('user_id')) <p class="help-block" style="color:red;">{{ $errors->first('company_code') }}</p> @endif      
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