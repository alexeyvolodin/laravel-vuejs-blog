@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Edit Post <small>{{$post->title}}</small></h1>
				@include('admin.posts.form', ['action' => route('admin.posts.update', ['id'=> $post->id]), 'method' => 'PUT'])

				<sidebar></sidebar>
			</div>
		</div>
	</div>
@endsection
