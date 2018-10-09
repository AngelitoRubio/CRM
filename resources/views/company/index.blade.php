@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-building"></i> Company Maintance</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 animated flash">
	    <?php if (session('is_success')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Company was successfully added!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	    <?php if (session('is_update')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Company was successfully updated!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	</div>
</div>
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12 pb-5">
						<h4>
							Company Lists
							{!! Html::decode(link_to_Route('company.create', '<i class="fa fa-plus"></i> New Company', [], ['class' => 'btn btn-primary btn-xs btn-gradient pull-right'])) !!}	    	
						</h4>					
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Code</th>
										<th>Name</th>
										<th>Action</th>										
									</tr>
								</thead>
								<tbody>
									@foreach($companies as $company)
									<tr>
										<td>{!! $company->id !!}</td>
										<td>{!! $company->code !!}</td>
										<td>{!! $company->company !!}</td>
										<td>{!! Html::decode(link_to_Route('company.edit','<i class="fa fa-pencil"></i> Edit', $company->id, array('class' => 'btn btn-info btn-sm btn-gradient')))!!}</td>
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