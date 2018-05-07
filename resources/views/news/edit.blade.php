@extends('layout.news')
@section('content')
  <h1><span class="blue">Edit news</span></h1>  
  <div class="container form-top">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <div class="panel panel-danger">
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" id="reused_form" action="/news/{{$news->id}}">
            {{ csrf_field() }}
            @method('PUT')
              <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" required class="form-control" value="{{$news->name}}">
              </div>
              <div class="form-group">
                <label >Preview</label>
                <input type="text" name="preview" required class="form-control" value="{{$news->preview}}">
              </div>
             
              <div class="form-group">
                <button class="btn btn-raised btn-lg btn-warning" type="submit" name="edit">Edit</button>
                <button class="btn btn-raised btn-lg btn-warning" type="reset">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection