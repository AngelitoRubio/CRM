@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-plus"></i> New Ads</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Ads Form 1
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
						{!! Form::open(array('route'=>'ads.store','method'=>'POST','files'=>true)) !!}							
							<div class="form-group">
								{!! Form::label('title','Ads Title') !!}
								{!! Form::text('ads_title','',['class'=>'form-control','placeholder'=>'Enter Ads Title','required'=>'required']) !!}
								@if($errors->has('ads_title')) <p class="help-block" style="color:red;">{{ $errors->first('ads_title') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Form::label('Ads Type','Ads Type') !!}
								{!! Form::select('type',$typedata,'',['class'=>'form-control adstypes']) !!}   
							</div>	
							<div class="form-group">
								{!! Form::label('title','Ads Month') !!}
								{!! Form::month('ads_month','',['class'=>'form-control','placeholder'=>'Enter Ads Month','required'=>'required']) !!}
								@if($errors->has('ads_month')) <p class="help-block" style="color:red;">{{ $errors->first('ads_month') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Target Gender') !!}
								<div class="form-control">
								Male:	
								{!! Form::checkbox('target_sex1', "male") !!}
								Female:
								{!! Form::checkbox('target_sex2', "female") !!}
								</div>
								@if($errors->has('target_sex')) <p class="help-block" style="color:red;">{{ $errors->first('target_sex') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Target Age') !!}
								{!! Form::number('target_age',6,['class'=>'form-control','placeholder'=>'Enter Target Age','required'=>'required']) !!}
								@if($errors->has('target_age')) <p class="help-block" style="color:red;">{{ $errors->first('target_age') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Target Date') !!}
								{!! Form::date('target_date','',['class'=>'form-control','placeholder'=>'Enter Target Date','required'=>'required']) !!}
								@if($errors->has('target_date')) <p class="help-block" style="color:red;">{{ $errors->first('target_date') }}</p> @endif      
							</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Ads Form 2
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 pb-5">

						<div class="form-group">
							{!! Form::label('title','Description') !!}
							{!! Form::textarea('description','',['class'=>'form-control','placeholder'=>'Enter Description']) !!}
							@if($errors->has('description')) <p class="help-block" style="color:red;">{{ $errors->first('description') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Area') !!}
							{!! Form::textarea('area','',['class'=>'form-control','placeholder'=>'Enter Target Area']) !!}
							@if($errors->has('area')) <p class="help-block" style="color:red;">{{ $errors->first('area') }}</p> @endif      
						</div>

						<div class="product-divider d-none">
							<div class="form-group">
								{!! Form::label('title','Product Name') !!}
								{!! Form::text('product_name','',['class'=>'form-control','placeholder'=>'Enter product name']) !!}
								@if($errors->has('product_name')) <p class="help-block" style="color:red;">{{ $errors->first('product_name') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Product Price Points') !!}
								{!! Form::text('price_point','',['class'=>'form-control','placeholder'=>'Enter Product Price Points']) !!}
								@if($errors->has('price_point')) <p class="help-block" style="color:red;">{{ $errors->first('price_point') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Product Info') !!}
								{!! Form::textarea('product_info','',['class'=>'form-control','placeholder'=>'Enter Product Product Info']) !!}
								@if($errors->has('product_info')) <p class="help-block" style="color:red;">{{ $errors->first('product_info') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Material') !!}
								{!! Form::text('material','',['class'=>'form-control','placeholder'=>'Enter Product Product Info']) !!}
								@if($errors->has('material')) <p class="help-block" style="color:red;">{{ $errors->first('material') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Color') !!}
								{!! Form::text('color','',['class'=>'form-control','placeholder'=>'Enter Product Color']) !!}
								@if($errors->has('color')) <p class="help-block" style="color:red;">{{ $errors->first('color') }}</p> @endif      
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-lg-12">
								{!! Form::label('title','File') !!}
								{!! Form::file('attached[]',['id'=>'attachment','multiple'=>'true']) !!}
							</div>
						</div>
						<div class="form-group">							
							<div class="col-lg-12">
								{!! Html::decode(link_to_Route('ads.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default float-right'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'btn btn-success float-right')) !!}
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

@section('script-body')
	$('.adstypes').on("change",function(){
	 	var x = $('.adstypes').val();
	 	if(x==3){
	 		$('.product-divider').removeClass('d-none');
	 	}
	 	else{
	 		$('.product-divider').addClass('d-none');
	 	}
	});
@endsection