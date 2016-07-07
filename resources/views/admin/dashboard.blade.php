@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">

			@include('shared.partials.sidebar')

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Dashboard</h1>
				<p>You are logged in!</p>
			</div>
		</div>
	</div>
@endsection
