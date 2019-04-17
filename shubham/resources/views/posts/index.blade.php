@extends('layouts.app')

@section('content')
<h1>Action Items</h1>

<div class="limiter">

			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column1">ID</th>
								<th class="column1">Description</th>
								<th class="column1">status</th>
								<th class="column1">Click to View</th>

							</tr>
						</thead>
						<tbody>
								
									@if(count($posts)>0)
									@foreach($posts as $post)
									<tr>
									<td class="column1">{{$post->created_at}}</td>
									<td class="column1">{{$post->id}}</td>
									<td class="column1">{{$post->body}}</td>
									<td class="column1">{{$post->status}}</td>
									<td class="column1"><a href="/price-searcher/shubham/public/posts/{{$post->id}}">Click ME</a></td>
									</tr>
									@endforeach
							@else
								
								
								
						</tbody>
					</table>
				</div>
			</div>
	</div>
<br>
<h1 align="center">No Posts found</h1>

@endif
@endsection()