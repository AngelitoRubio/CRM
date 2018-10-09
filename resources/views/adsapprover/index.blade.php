@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-building"></i> Advertisment Approver</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 animated flash">
	    <?php if (session('is_success')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Advertisment Approver was successfully added!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	    <?php if (session('is_update')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Advertisment Approver was successfully updated!<i class="fa fa-check"></i></h4> </center>
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
							Advertisment Lists
							{!! Html::decode(link_to_Route('adsapprover.create', '<i class="fa fa-plus"></i> New Advertisment Approver', [], ['class' => 'btn btn-primary btn-xs btn-gradient pull-right'])) !!}	    	
						</h4>					
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Advertisment Title</th>
										<th>User</th>
										<th>Status</th>	
										<th>Action</th>									
									</tr>
								</thead>
								<tbody>
									@foreach($ads_approvers as $ads_approver)
									<tr>
										<td>{!! $ads_approver->id !!}</td>
										<td>{!! $ads_approver->ads->ads_title !!}</td>
										<td>{!! $ads_approver->user->name !!}</td>
										<td>
											@if($ads_approver->status < 1)
											<span class="label label-warning">
												Pending
											</span>
											@elseif($ads_approver->status == 1)
												<span class="label label-success">
													Approved
												</span>
											@else
												<span class="label label-danger">
													Denied
												</span>
											@endif
										</td>
										<td>
											{!! Html::decode(link_to_Route('adsapprover.edit','
											<i class="fa fa-pencil"></i> Edit',
											 $ads_approver->id, array('class' => 'btn btn-info btn-sm btn-gradient')))!!}
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