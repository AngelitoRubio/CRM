@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> Edit Company</h1>
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
					<div class="col-lg-12 pb-5">
						{!!Form::open(array('route'=>array('company.update',$company->id),'method'=>'PUT'))!!}								
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::label('code','Code') !!}
									{!! Form::text('code',$company->code,['class'=>'form-control','placeholder'=>'Enter Company Code']) !!}
								</div>
							</div>							
							<div class="form-group">
								<div class="col-lg-12">
									{!! Form::label('company','Company') !!}
									{!! Form::text('company',$company->company,['class'=>'form-control','placeholder'=>'Enter Company Name']) !!}
								</div>
							</div>					
							<div class="form-group">
								<div class="col-lg-12">
									{!! Html::decode(link_to_Route('company.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default btn-gradient'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Update', array('type' => 'submit', 'class' => 'btn btn-primary btn-gradient')) !!}
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