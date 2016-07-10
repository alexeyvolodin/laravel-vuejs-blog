<form class="form-horizontal" action="{{$action}}" method="POST">
	<csrf-token></csrf-token>
	@if(isset($method) && $method == 'PUT')
		<input type="hidden" name="_method" value="PUT">
	@endif

	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"
			       name="title" id="title"
			       placeholder="Title for your blog post"
			       value="{{$post->title}}"
			>
		</div>
	</div>

	@if(isset($method) && $method == 'PUT')
		<div class="form-group">
			<label for="slug" class="col-sm-2 control-label">Slug</label>
			<div class="col-sm-10">
				<input type="text" class="form-control"
				       name="slug" id="slug"
				       placeholder="The slug for this post, be careful to change it"
				       value="{{$post->slug}}"
				>
			</div>
		</div>
	@endif

	<div class="form-group">
		<label for="description" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"
			       name="description" id="description"
			       placeholder="Write a small description for this post"
			       value="{{$post->description}}"
			>
		</div>
	</div>

	<div class="form-group">
		<label for="body_raw" class="col-sm-2 control-label">Body</label>
		<div class="col-sm-10">
			<textarea type="text" class="form-control"
			          name="body_raw" id="body_raw"
			          placeholder="Write your post here ..."
			>{{$post->body_raw}}</textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary pull-right">Save</button>
		</div>
	</div>
</form>