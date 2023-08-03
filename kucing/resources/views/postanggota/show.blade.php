@extends('anggota-template')

@section('anggota-content-wrapper')
	<div id="postanggota">
		<h2>Detail Post</h2>
		<div class="card-footer">

		<table class="table table-striped">
			<tr>
				<th>Judul</th>
				<td>{{ $postanggota->title }}</td>
			</tr>
			<tr>
				<th>Kategori</th>
				<td>{{ $postanggota->category_anggota->name }}</td>
			</tr>
			<tr>
				<th>Deskripsi</th>
				<td>{{ $postanggota->description }}</td>
			</tr>
			<tr>
				<th>Gambar 1</th>
				<td>
					@if(isset($postanggota->image))
						<img src="{{ asset('imageUploaded/' . $postanggota->image) }}" height="auto" width="500">
					@endif
				</td>
			</tr>
		</table>
		<div class="panel panel-default">
                    <div class="panel-heading">Tambahkan Komentar</div>

                    @foreach ($postanggota->comment()->get() as $comments)
                        <div class="panel-body">
                            <h3>{{ $comments->user->name }} - {{ $comments->created_at->diffForHumans() }}</h3>

                            <p>{{ $comments->message }}</p>
                        </div>
                    @endforeach

                    <div class="panel-body">
                        <form action="{{ action ('PostCommentController@store') }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan komentar ..."></textarea>

                            <input type="submit" value="Komentar" class="btn btn-primary">

                        </form>
                    </div>
                </div>
</div>
</div>
@stop
