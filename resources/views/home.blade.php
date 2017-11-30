@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
					@foreach($all as $one)
						<h2>{{$one->name}}
							<a href="{{asset('/product/'.$one->id)}}" class="btn btn-succes">
						</h2>
						
						<div class="my_text">
						<img src="{{asset('uploads/thumb/'.(isset($one->photo))?$one->photo:'')}}">
						{!!$one->body!!}
						</div>
						
						<hr/>
					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
