@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product</div>

                <div class="panel-body">
					
						<h2>
							<a href="{{asset('/product/'.$product->id)}}" class="btn btn-succes">
							{{$product->name}}
							</a>
						</h2>
						
						<div class="my_text">
						<img src="{{asset('uploads/thumb/'.(isset($product->photo))?$product->photo:'')}}">
						{!!$product->body!!}
						</div>
						<hr/>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
