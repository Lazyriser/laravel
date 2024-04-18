<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$news = News::all();
		return view('news.index', [
			'news' => $news
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		News::create([])->save();
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		$news = News::find($id);

		return view('news.show', [
			'news' => $news
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		$news = News::find($id);

		return view('news.edit', [
			'news' => $news
		]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		$news = News::findOrFail($id);

		$news->update([
			'name' => $request->get('news_name'), // откуда взялись именно такие названия у ключей? они больше нигде не фигурируют
			'shortdesc' => $request->get('short_desc'),
			'content' => $request->get('news_content'),
			'author' => $request->get('news_author'),
		]);

		return route('news.show', $news->id);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		//
	}
}
