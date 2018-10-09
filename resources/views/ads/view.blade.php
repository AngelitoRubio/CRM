@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-eye"></i> Ads Details</h1>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Ads Details
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
		            	<div class="form-group">
							{!! Form::label('title','Ads Title') !!}
							{!! Form::text('ads_title',$adss->ads_title,['class'=>'form-control','placeholder'=>'Enter Ads Title','required'=>'required','readonly'=>true]) !!}
							@if($errors->has('ads_title')) <p class="help-block" style="color:red;">{{ $errors->first('ads_title') }}</p> @endif      
						</div>		
						<div class="form-group">
							{!! Form::label('Ads Type','Ads Type') !!}
							{!! Form::select('type',$typedata,$adss->type,['class'=>'form-control adstypes','readonly'=>true]) !!}   
						</div>	
						<div class="form-group">
							{!! Form::label('title','Ads Month') !!}
							{!! Form::month('ads_month',$adss->maindetails->ads_month,['class'=>'form-control','placeholder'=>'Enter Ads Month','required'=>'required','readonly'=>true]) !!}
							@if($errors->has('ads_month')) <p class="help-block" style="color:red;">{{ $errors->first('ads_month') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Target Gender') !!}
							<div class="form-control">
							Male:	
							@if (in_array("male", $myArray))
								{!! Form::checkbox('target_sex1', "male",['checked'=>'checked','readonly'=>true]) !!}
							@else
								{!! Form::checkbox('target_sex1', "male") !!}
							@endif
							Female:
							@if (in_array("female", $myArray))
								{!! Form::checkbox('target_sex2', "female",['checked'=>'checked','readonly'=>true]) !!}
							@else
							{!! Form::checkbox('target_sex2', "female") !!}
							@endif
							</div>
							@if($errors->has('target_sex')) <p class="help-block" style="color:red;">{{ $errors->first('target_sex') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Target Age') !!}
							{!! Form::number('target_age',6,['class'=>'form-control','placeholder'=>'Enter Target Age','required'=>'required','readonly'=>true]) !!}
							@if($errors->has('target_age')) <p class="help-block" style="color:red;">{{ $errors->first('target_age') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Target Date') !!}
							{!! Form::date('target_date',$adss->maindetails->target_date,['class'=>'form-control','placeholder'=>'Enter Target Date','required'=>'required','readonly'=>true]) !!}
							@if($errors->has('target_date')) <p class="help-block" style="color:red;">{{ $errors->first('target_date') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Description') !!}
							{!! Form::textarea('description',$adss->maindetails->description,['class'=>'form-control','placeholder'=>'Enter Description','readonly'=>true]) !!}
						</div>
						<div class="form-group">
							{!! Form::label('title','Area') !!}
							{!! Form::text('area',$adss->maindetails->area,['class'=>'form-control','placeholder'=>'Enter Target Area','readonly'=>true]) !!}     
						</div>


						@if($adss->type == 3)

						<div class="form-group">
							<h3>Product Details</h3>
						</div>

						<div class="form-group">
							{!! Form::label('title','Product Name') !!}
							{!! Form::text('product_name',$adss->maindetails->product_name,['class'=>'form-control','placeholder'=>'Enter product name','readonly'=>true]) !!}
							@if($errors->has('product_name')) <p class="help-block" style="color:red;">{{ $errors->first('product_name') }}</p> @endif      
						</div>
						<div class="form-group">
							{!! Form::label('title','Product Price Points') !!}
							{!! Form::text('price_point',$adss->maindetails->price_point,['class'=>'form-control','placeholder'=>'Enter Product Price Points','readonly'=>true]) !!}
							@if($errors->has('price_point')) <p class="help-block" style="color:red;">{{ $errors->first('price_point') }}</p> @endif      
						</div>

						<div class="form-group">
							{!! Form::label('title','Product Info') !!}
							{!! Form::textarea('product_info',$adss->maindetails->product_info,['class'=>'form-control','placeholder'=>'Enter Product Product Info','readonly'=>true]) !!}
							@if($errors->has('product_info')) <p class="help-block" style="color:red;">{{ $errors->first('product_info') }}</p> @endif      
						</div>

						<div class="form-group">
							{!! Form::label('title','Material') !!}
							{!! Form::text('material',$adss->maindetails->material,['class'=>'form-control','placeholder'=>'Enter Product Product Info','readonly'=>true]) !!}
							@if($errors->has('material')) <p class="help-block" style="color:red;">{{ $errors->first('material') }}</p> @endif      
						</div>

						<div class="form-group">
							{!! Form::label('title','Color') !!}
							{!! Form::text('color',$adss->maindetails->color,['class'=>'form-control','placeholder'=>'Enter Product Color','readonly'=>true]) !!}
							@if($errors->has('color')) <p class="help-block" style="color:red;">{{ $errors->first('color') }}</p> @endif      
						</div>

						@endif						
			        </div>    					
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Ads Email View
			</div>
			<div class="card-body">
				@if($adss->type == 1)
				<div class="row">
					<div class="col-lg-12 pb-5">
						<h1 class="text-center font-weight-bold">{{$adss->ads_title}}</h1>
						<h3 class="text-center font-weight-bold">Join Our Event On</h3>
						<h1 class="text-center font-weight-bold">{{date("M Y", strtotime($adss->maindetails->ads_month))}}</h1>
						
						<div class="row">
							<div class="col-lg-12 pb-5">
								<img src="/uploads/{{$adss->id}}/{{$adss->mainfile->filename}}" class="img-fluid" alt="Responsive image">
							</div>
						</div>

						<h5 class="text-center font-weight-bold">Details:{{$adss->maindetails->description}}</h5>
						<h5 class="text-center font-weight-bold">Location:{{$adss->maindetails->area}}</h5>
					</div>
				</div>
				@elseif($adss->type == 2)
				<div class="row">
					<div class="col-lg-12 pb-5">
						<h1 class="text-center font-weight-bold">{{$adss->ads_title}}</h1>
						<h5 class="text-center font-weight-bold">Celebrate with us!</h5>
						<h1 class="text-center font-weight-bold">{{date("M Y", strtotime($adss->maindetails->ads_month))}}</h1>
						
						<div class="row">
							<div class="col-lg-12 pb-5">
								<img src="/uploads/{{$adss->id}}/{{$adss->mainfile->filename}}" class="img-fluid" alt="Responsive image">
							</div>
						</div>

						<h5 class="text-center font-weight-bold">Details:{{$adss->maindetails->description}}</h5>
						<h5 class="text-center font-weight-bold">Location:{{$adss->maindetails->area}}</h5>
					</div>
				</div>
				@elseif($adss->type == 3)
				<div class="row">
					<div class="col-lg-12 pb-5">
						<h1 class="text-center font-weight-bold">{{$adss->ads_title}}</h1>
						<h5 class="text-center font-weight-bold">Check out our New product</h5>
						<h1 class="text-center font-weight-bold">{{date("M d Y", strtotime($adss->maindetails->target_date))}}</h1>
						<div class="row">
							<div class="col-lg-12 pb-5">
								<img src="/uploads/{{$adss->id}}/{{$adss->mainfile->filename}}" class="img-fluid" alt="Responsive image">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12">
							<!-- <h5 class="text-center"><span class="font-weight-bold">Location: 	</span><span>{{$adss->maindetails->area}}</span></h5> -->
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-lg-12">
								<h5 class="text-left"><span class="font-weight-bold">Product Name: </span><span>{{$adss->maindetails->product_name}}</span></h5>
							</div>

							<div class="col-lg-6">
							<!-- <h5 class="text-center"><span class="font-weight-bold">Product Price: </span><span>{{$adss->maindetails->price_point}}</span></h5> -->
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<h5 class="text-left font-weight-bold">Details:</h5>
							</div>
						</div>
						<h6 class="text-left ">{!!$adss->maindetails->product_info!!}</h6>
					</div>
				</div>

				@endif
			</div>
		</div>	
	</div>
</div>

@endsection