@extends('layouts.master')
@section('main-body')
<div class="row">
	<div class="col-md-12">
		<h1><i class="fa fa-dashboard"></i> Dashboard</h1>
	</div>
</div>
	<div class="row">
		<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
			<div class="card card-tile card-xs bg-primary bg-gradient text-center">
				<div class="card-body p-4">
					<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
					<div class="tile-left">
						<i class="batch-icon batch-icon-user-alt batch-icon-xxl"></i>
					</div>
					<div class="tile-right">
						<div class="tile-number">1,359</div>
						<div class="tile-description">Total Ads</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
			<div class="card card-tile card-xs bg-secondary bg-gradient text-center">
				<div class="card-body p-4">
					<div class="tile-left">
						<i class="batch-icon batch-icon-star batch-icon-xxl"></i>
					</div>
					<div class="tile-right">
						<div class="tile-number">476</div>
						<div class="tile-description">Todays Ads Response</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
			<div class="card card-tile card-xs bg-secondary bg-gradient text-center">
				<div class="card-body p-4">
					<div class="tile-left">
						<i class="batch-icon batch-icon-tag-alt-2 batch-icon-xxl"></i>
					</div>
					<div class="tile-right">
						<div class="tile-number">1,300</div>
						<div class="tile-description">Store Leads</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
			<div class="card card-tile card-xs bg-primary bg-gradient text-center">
				<div class="card-body p-4">
					<div class="tile-left">
						<i class="batch-icon batch-icon-list batch-icon-xxl"></i>
					</div>
					<div class="tile-right">
						<div class="tile-number">500</div>
						<div class="tile-description">Web Leads</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-6 col-xl-8 mb-5">
			<div class="card">
				<div class="card-header">
					Company Sales Overview
					<div class="header-btn-block">
						<span class="data-range dropdown">
							<a href="#" class="btn btn-primary dropdown-toggle" id="navbar-dropdown-sales-overview-header-button" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
								<i class="batch-icon batch-icon-calendar"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-sales-overview-header-button">
								<a class="dropdown-item" href="today.html">Today</a>
								<a class="dropdown-item" href="week.html">This Week</a>
								<a class="dropdown-item" href="month.html">This Month</a>
								<a class="dropdown-item active" href="year.html">This Year</a>
							</div>
						</span>
					</div>
				</div>
				<div class="card-body">
					<div class="card-chart" data-chart-color-1="#07a7e3" data-chart-color-2="#32dac3" data-chart-color-3="#27ae60" data-chart-legend-1="Anello" data-chart-legend-2="Owndays" data-chart-legend-3="Pandora" data-chart-height="281">
						<canvas id="sales-overview"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-xl-4 mb-5">
			<div class="card card-md">
				<div class="card-header">
					Leads Sources
					<div class="header-btn-block">
						<span class="data-range dropdown">
							<a href="#" class="btn btn-primary dropdown-toggle" id="navbar-dropdown-traffic-sources-header-button" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
								<i class="batch-icon batch-icon-calendar"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbar-dropdown-traffic-sources-header-button">
								<a class="dropdown-item" href="today.html">Today</a>
								<a class="dropdown-item" href="week.html">This Week</a>
								<a class="dropdown-item" href="month.html">This Month</a>
								<a class="dropdown-item active" href="year.html">This Year</a>
							</div>
						</span>
					</div>
				</div>
				<div class="card-body text-center">
					<p class="text-left">Your top 5 traffic sources</p>
					<div class="card-chart" data-chart-color-1="#07a7e3" data-chart-color-2="#32dac3" data-chart-color-3="#4f5b60" data-chart-color-4="#FCCF31" data-chart-color-5="#f43a59">
						<canvas id="traffic-source"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection