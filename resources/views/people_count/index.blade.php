@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-users"></i> People Count</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 animated flash">
	    <?php if (session('is_success')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	    <?php if (session('is_update')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				{{Form::open(array('route'=>'people_count.store','method'=>'POST'))}}
				<div class="row">
					<div class="col-md-3">
						{{Form::label('branch','Select Branch')}}
						{{Form::select('branch[]',$branches,'',['class'=>'form-control','multiple'=>'multiple','id'=>'select_branch'])}}	
					</div>
					<div class="col-md-3">
						{{Form::label('date_from','Date From')}}
						<div class="input-group date" data-provide="datepicker">
						    <input type="text" class="form-control" name="date_from" value="{{$date_from}}">
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-th"></span>
						    </div>
						</div>
					</div>
					<div class="col-md-3">
						{{Form::label('date_to','Date To')}}
						<div class="input-group date" data-provide="datepicker">
						    <input type="text" class="form-control" name="date_to" value="{{$date_to}}">
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-th"></span>
						    </div>
						</div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-xs btn-primary" type="submit"> Process</button>
					</div>
				</div>
				{{Form::close()}}		
			</div>
		</div>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 pb-5">
						<h4> Branches</h4>					
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>										
										<th>Branch Name</th>
										<th>Count</th>
										<th>Action</th>								
									</tr>
								</thead>
								<tbody>
									@foreach($pcounts as $pcount)
									<tr>
										<td>{{strtoupper($pcount->branch_name)}}</td>
										<td>{{$pcount->count}}</td>
										<td>
											{{Form::open(array('route'=>'people_count.details','method'=>'POST'))}}
											<input type="hidden" name="date_from" value="{{$date_from}}">
											<input type="hidden" name="date_to" value="{{$date_to}}">
											<input type="hidden" name="branch" value="{{$pcount->branch_code}}">
											<button class="btn btn-xs"> Details</button>
											{{Form::close()}}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script-body')
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    orientation: 'bottom'
});
$('#select_branch').multiselect({
	maxHeight: 200,
	includeSelectAllOption: true,
	enableCaseInsensitiveFiltering: true,
	enableFiltering: true,
	buttonWidth: '220px',
	orientation: 'bottom'
});
@endsection