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
				<div class="form-group">
					{{Form::label('company','Company')}}
					{{Form::text('branch',$branch->comp->company,['class'=>'form-control','readonly'])}}
				</div>
				<div class="form-group">
					{{Form::label('branch','Branch')}}
					{{Form::text('branch',$branch->branch_name,['class'=>'form-control','readonly'])}}
				</div>
				<div class="form-group">
					{{Form::label('range','Date Range')}}
					{{Form::text('range',$date_from.' to '.$date_to,['class'=>'form-control','readonly'])}}
				</div>	
				<div class="form-group">
					{{Form::label('total','Total People Count')}}
					{{Form::text('total',$total,['class'=>'form-control','readonly'])}}
				</div>		
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
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>										
										<th>Date</th>
										<th>Start Time</th>
										<th>End Time</th>
										<th>People Count</th>								
									</tr>
								</thead>
								<tbody>
									@foreach($details as $detail)
									<tr>
										<td>{{date('Y-m-d',strtotime($detail->created_at))}}</td>
										<td>{{date('h:i a',strtotime($detail->stime))}}</td>
										<td>{{date('h:i a',strtotime($detail->etime))}}</td>
										<td>{{$detail->count}}</td>
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