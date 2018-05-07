<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index() {
    	$news = DB::table('news')->paginate(4);
    	return view('news.index', ['news' => $news]);
    }
    function create() {
    	return view('news.add');
    }
    function store(Request $request) {
	  	$news = new News();
	    $news->name = $request->input('name');
	    $news->preview = $request->input('preview');
	   
	    if($news->save()) {
	      $news = News::paginate(4);
	      $data['news'] = $news;
	      return view('news.index', $data);
	    } else {
	      return view('news.add');
	    }
    }
    function edit($id) {
    	$news = News::find($id);
	    $data['news'] = $news;
	    return view('news.edit', $data);
    }
    function update($id, Request $request) {
    	$news = News::find($id);
	    $news->name = $request->input('name');
	    $news->preview = $request->input('preview');

	    if($news->save()) {
	      $news = News::paginate(4);
	      $data['news'] = $news;
	      return redirect()->route('news.index');
	    } else {
	      return view('news.edit');
	    }
    }
    function show($id) {
	    $news = News::find($id);
	    if($news) {
	      $data['news'] = $news;
	      return view('news.index', $data);
	    } else {
	      $news = News::paginate(4);
	      $data['news'] = $news;
	      $data['msg'] = "Invalid ID";
	      return view('news.index', $data);
	    }
	}

	function destroy($id) {
		News::find($id)->delete();
	    return redirect()->route('news.index');
  	}
}
