@foreach($slides as $slide)
<div>
  <p>{{$slide->title}}</p>
  <p>{{$slide->description}}</p>
  <img src="{{asset('storage/'.$slide->src)}}">
</div>
@endforeach
