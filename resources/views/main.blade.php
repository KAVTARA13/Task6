
<table class="table">
			<tr>
				<td>#</td>
				<td>TITLE</td>
				<td>DESCRIPTION</td>
			</tr>
			@foreach ($posts as $post)
				<tr>
				<td>{{++$loop->index}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->description}}</td>
				</tr>
				<br>
			@endforeach
		</table>
	</div>
