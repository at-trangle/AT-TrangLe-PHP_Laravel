@extends('layout.news')
@section('content')
  <h1><span class="blue"><span class="yellow">Show list news</pan></h1>
  <table class="container">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Preview</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($news as $n)
      <tr>
        <td scope="row">{{$n->id}}</td>
        <td>{{$n->name}}</td>
        <td>{{$n->preview}}</td>
        <td>
          <a href="/news/{{$n->id}}/edit"><i class="fas fa-edit"></i></a> |
          <form method="POST" action="/news/{{$n->id}}">
          @method('DELETE')
          {{ csrf_field() }}
          <button type="submit"><i class="fas fa-trash-alt"></i></button>
          </form>
          
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class = "pagination">
   {{ $news->render() }}
  </div>
  
@endsection
