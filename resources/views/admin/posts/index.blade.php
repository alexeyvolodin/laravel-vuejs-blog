@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">
					Posts
					<div class="pull-right">
						<a href="{{route('admin.posts.create')}}" class="btn btn-info">Create new one</a>
					</div>
				</h1>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#Id</th>
							<th>Title</th>
							<th>Slug</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th colspan="3">Total: {{ $posts->count() }}</th>
							<th colspan="2"></th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{{$post->id}}</td>
								<td>{{$post->title}}</td>
								<td>{{$post->slug}}</td>
								<td>{{$post->description}}</td>
								<td>
									<a href="{{route('admin.posts.edit', ['id' => $post->id])}}"><i class="fa fa-pencil"></i></a>
									<a href="#"><i class="fa fa-eye"></i></a>
									<a href="#" role="button" data-toggle="modal" data-target="#modal" data-action="{{route('admin.posts.destroy', ['id' => $post->id])}}">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<sidebar></sidebar>
			</div>
		</div>
	</div>

	<modal></modal>
@endsection
