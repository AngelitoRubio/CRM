@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-building"></i> Advertisement </h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 animated flash">
	    <?php if (session('is_success')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Ads was successfully added!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	    <?php if (session('is_update')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Ads was successfully updated!<i class="fa fa-check"></i></h4> </center>
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
							Ads Lists
							{!! Html::decode(link_to_Route('ads.create', '<i class="fa fa-plus"></i> New Ads', [], ['class' => 'btn btn-primary btn-xs btn-gradient pull-right'])) !!}	    	
						</h4>					
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th>Type</th>
										<th>Status</th>
										<th>Action</th>										
									</tr>
								</thead>
								<tbody>
									@forelse($adss as $ads)
										<tr>
											<td>{!! $ads->id !!}</td>
											<td>{!! $ads->ads_title !!}</td>
											<td>{!! $ads->maintype->type !!}</td>
											<td>
												@if($ads->status < 1)
												<span class="label label-warning">
													Pending
												</span>
												@elseif($ads->status == 1)
												<span class="label label-success">
													Approved
												</span>
												@else
												<span class="label label-danger">
													Denied
												</span>
												@endif
											</td>
											<td>{!! Html::decode(link_to_Route('ads.edit','<i class="fa fa-pencil"></i> Edit', $ads->id, array('class' => 'btn btn-warning btn-sm btn-gradient')))!!}
											{!! Html::decode(link_to_Route('ads.view','<i class="fa fa-eye"></i> View', $ads->id, array('class' => 'btn btn-info btn-sm btn-gradient')))!!}
											</td>
										</tr>
									@empty	
									@endforelse
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