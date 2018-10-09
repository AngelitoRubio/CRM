@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> New Company</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Company Form
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
						{!! Form::open(array('route'=>'company.store','method'=>'POST')) !!}							
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::label('code','Code') !!}
									{!! Form::text('code','',['class'=>'form-control','placeholder'=>'Enter Company Code']) !!}
									@if ($errors->has('code')) <p class="help-block" style="color:red;">{{ $errors->first('code') }}</p> @endif
								</div>
							</div>							
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::label('company','Company') !!}
									{!! Form::text('company','',['class'=>'form-control','placeholder'=>'Enter Company Name']) !!}
									@if ($errors->has('company')) <p class="help-block" style="color:red;">{{ $errors->first('company') }}</p> @endif
								</div>
							</div>					
							<div class="form-group">
								<div class="col-lg-12">
									{!! Html::decode(link_to_Route('company.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default btn-gradient'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'btn btn-primary btn-gradient')) !!}
								</div>								
							</div>																
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection