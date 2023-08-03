@extends('admin-template')

@section('content-wrapper')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Discussion</h1>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">{{ $postingan->title }} </h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i>Category: {{ $postingan->Category->name }}</i>
							</button>

						</div>
					</div>
					<div class="card-body">
						{{ $postingan->description }}
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						@if(isset($postingan->image))
						<img src="{{ asset('imageUploaded/' . $postingan->image) }}" height="auto" width="500">
						@endif
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->





				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Tambahkan Komentar</div>

								<div class="panel-body">
									@if (session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
									@endif
									<form id="comment-form" method="post" action="{{ action ('CommentsController@store') }}" >
										{{ csrf_field() }}
										<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
										<div class="row" style="padding: 10px;">
											<div class="form-group">
												<textarea class="form-control" rows="5px;" cols="100px;" id="comment" name="comment" placeholder="Tulis komentar..."></textarea>
											</div>
										</div>
										<div class="row" style="padding: 0 10px 0 10px;">
											<div class="form-group">
												<input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Comments</div>

								<div class="panel-body comment-container" >

									@foreach($comments as $comment)
									<div class="well">
										<i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
										<span> {{ $comment->comment }} </span>
										<div style="margin-left:10px;">
											<a style="cursor: pointer;"  cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
											<a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a>
											<div class="reply-form">

												<!-- Dynamic Reply form -->

											</div>
											@foreach($comment->replies as $rep)
											@if($comment->id === $rep->comment_id)
											<div class="well">
												<i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
												<span> {{ $rep->reply }} </span>
												<div style="margin-left:10px;">
													<a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
												</div>
												<div class="reply-to-reply-form">

													<!-- Dynamic Reply form -->

												</div>

											</div>
											@endif
											@endforeach

										</div>
									</div>
									@endforeach

								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">

</script>




@stop
