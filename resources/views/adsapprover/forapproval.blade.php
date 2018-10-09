@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-building"></i> For Approval Advertisments</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 animated flash">
	    <?php if (session('is_success')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Advertisment was successfully approved!<i class="fa fa-check"></i></h4> </center>
			</div>
	    <?php endif;?>
	    <?php if (session('is_update')): ?>
	        <div class="alert alert-primary" role="alert">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<center><h4>Advertisment was successfully denied!<i class="fa fa-check"></i></h4> </center>
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
							Approval Lists							
						</h4>					
						<div class="table-responsive">
							<table id="datatable-1" class="table table-datatable table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Ads Title</th>
										<th>Date Created</th>										
										<th>Action</th>									
									</tr>
								</thead>
								<tbody>
									@foreach($ads as $ad)
									<tr>
										<td>{!! $ad->id !!}</td>
										<td>{!! $ad->ads->ads_title !!}</td>										
										<td>{!! $ad->ads->created_at !!}</td>
										<td>
											<button type="button" class="btn btn-success btn-sm" id="{{$ad->id}}" value="{{$ad->id}}" onclick="approvedFunction(this)"><i class="fa fa-check"></i> Approve</button>
                                			<button type="button" class="btn btn-danger btn-sm" id="{{$ad->id}}" value="{{$ad->id}}" onclick="deniedFunction(this)"><i class="fa fa-times"></i> Denied</button>
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
<script type="text/javascript">
	
	function approvedFunction(elem){


        swal({
            title: "Are you sure?",
            text: "You will about to approve the ads",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#1abc9c",
            confirmButtonText: "Yes, approve it!",
            closeOnConfirm: false
        }, function () {
            swal("Got it!", "Please wait...", "success");            

            var x = elem.value;
            var s = 1;
            $.ajax({
		        type:"POST",
		        dataType: 'json',
		        data: {ads_id: x, status: s},
		        url: "../../ads/stat_update",
		        success: function(data){            

		            location.reload(true);
		        }
		    });      
        });      	    

	}

	function deniedFunction(elem){
		

        swal({
            title: "Are you sure?",
            text: "You will about to denied the ads",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f43a59",
            confirmButtonText: "Yes, denied it!",
            closeOnConfirm: false,
            dangerMode: true
        }, function () {
            swal("Got it!", "Please wait...", "success");            

            var x = elem.value;
            var s = 2;
            $.ajax({
		        type:"POST",
		        dataType: 'json',
		        data: {ads_id: x, status: s},
		        url: "../../ads/stat_update",
		        success: function(data){            
		        	
		            location.reload(true);
		        }
		    });      
        });      
	}
	    
</script>