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
							{!! Form::open(array('route'=>['ads.update',$id],'method'=>'PUT','files'=>true)) !!}							
							<div class="form-group">
								{!! Form::label('title','Ads Title') !!}
								{!! Form::text('ads_title',$adss->ads_title,['class'=>'form-control','placeholder'=>'Enter Ads Title','required'=>'required']) !!}
								@if($errors->has('ads_title')) <p class="help-block" style="color:red;">{{ $errors->first('ads_title') }}</p> @endif      
							</div>		
							<div class="form-group">
								{!! Form::label('Ads Type','Ads Type') !!}
								{!! Form::select('type',$typedata,$adss->type,['class'=>'form-control adstypes']) !!}   
							</div>	
							<div class="form-group">
								{!! Form::label('title','Ads Month') !!}
								{!! Form::month('ads_month',$adss->maindetails->ads_month,['class'=>'form-control','placeholder'=>'Enter Ads Month','required'=>'required']) !!}
								@if($errors->has('ads_month')) <p class="help-block" style="color:red;">{{ $errors->first('ads_month') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Target Gender') !!}
								<div class="form-control">
								Male:	
								@if (in_array("male", $myArray))
								{!! Form::checkbox('target_sex1', "male",['checked'=>'checked']) !!}
								@else
								{!! Form::checkbox('target_sex1', "male") !!}
								@endif
								Female:
								@if (in_array("female", $myArray))
								{!! Form::checkbox('target_sex2', "female",['checked'=>'checked']) !!}
								@else
								{!! Form::checkbox('target_sex2', "female") !!}
								@endif
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
								{!! Form::date('target_date',$adss->maindetails->target_date,['class'=>'form-control','placeholder'=>'Enter Target Date','required'=>'required']) !!}
								@if($errors->has('target_date')) <p class="help-block" style="color:red;">{{ $errors->first('target_date') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Description') !!}
								{!! Form::textarea('description',$adss->maindetails->description,['class'=>'form-control','placeholder'=>'Enter Description']) !!}
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
							{!! Form::label('title','Area') !!}
							{!! Form::text('area',$adss->maindetails->area,['class'=>'form-control','placeholder'=>'Enter Target Area']) !!}     
						</div>

						@if($adss->type == 3)

							<div class="form-group">
								<h3>Product Details</h3>
							</div>

							<div class="form-group">
								{!! Form::label('title','Product Name') !!}
								{!! Form::text('product_name',$adss->maindetails->product_name,['class'=>'form-control','placeholder'=>'Enter product name']) !!}
								@if($errors->has('product_name')) <p class="help-block" style="color:red;">{{ $errors->first('product_name') }}</p> @endif      
							</div>
							<div class="form-group">
								{!! Form::label('title','Product Price Points') !!}
								{!! Form::text('price_point',$adss->maindetails->price_point,['class'=>'form-control','placeholder'=>'Enter Product Price Points']) !!}
								@if($errors->has('price_point')) <p class="help-block" style="color:red;">{{ $errors->first('price_point') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Product Info') !!}
								{!! Form::textarea('product_info',$adss->maindetails->product_info,['class'=>'form-control','placeholder'=>'Enter Product Product Info']) !!}
								@if($errors->has('product_info')) <p class="help-block" style="color:red;">{{ $errors->first('product_info') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Material') !!}
								{!! Form::text('material',$adss->maindetails->material,['class'=>'form-control','placeholder'=>'Enter Product Product Info']) !!}
								@if($errors->has('material')) <p class="help-block" style="color:red;">{{ $errors->first('material') }}</p> @endif      
							</div>

							<div class="form-group">
								{!! Form::label('title','Color') !!}
								{!! Form::text('color',$adss->maindetails->color,['class'=>'form-control','placeholder'=>'Enter Product Color']) !!}
								@if($errors->has('color')) <p class="help-block" style="color:red;">{{ $errors->first('color') }}</p> @endif      
							</div>

							@endif
						
						<div class="form-group">
								{!! Form::label('title','File') !!}
								{!! Form::file('attached[]',['id'=>'attachment','multiple'=>'true']) !!}
						</div>

						<div class="form-group">
								{!! Html::decode(link_to_Route('ads.index', '<i class="fa fa-arrow-left"></i> Cancel', [], ['class' => 'btn btn-default float-right'])) !!}
			                    {!! Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'btn btn-success float-right')) !!}
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