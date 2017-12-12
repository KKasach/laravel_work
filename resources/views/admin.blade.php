@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
				<div class="panel-heading">Products</div>

                <div class="panel-body">
					
				<form action="{{asset('home')}}" method="post" enctype="multipart/form-data">
					 {!! csrf_field() !!}
					  <div class="form-group">
						<label for="name">Name</label>
						@if($errors->has('name'))
						<div class="error">{{!$errors->first('name')}}</div>
						@endif
						<input type="text" class="form-control" name="name" id="name">
					  </div>
					  
					  <div class="form-group">
						<label for="body">Body</label>
						@if($errors->has('body'))
						<div class="error">{{!$errors->first('body')}}</div>
						@endif
						<textarea name="body" class="form-control" id="body"></textarea>
					  </div>
					  
					  <div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input name="pic" type="file" id="exampleInputFile">
						
					  </div>
					 
					  <button type="submit" class="btn btn-default">Submit</button>
				</form>
                </div>
            </div>
        </div>
    </div>	
</div>
@endsection
