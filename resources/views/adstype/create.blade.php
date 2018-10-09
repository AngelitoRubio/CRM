@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> New Advertisment</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Advertisment Form
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
						{!! Form::open(array('route'=>'adstype.store','method'=>'POST','files'=>true)) !!}							
							<div class="form-group">
								{!! Form::label('type','Advertisment Type') !!}
								{!! Form::text('type','',['class'=>'form-control','placeholder'=>'Enter Advertisment Type','required'=>'required']) !!}
								@if($errors->has('type')) <p class="help-block" style="color:red;">{{ $errors->first('type') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Html::decode(link_to_Route('adstype.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default'])) !!}
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