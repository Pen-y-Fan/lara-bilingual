<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use App\Http\Requests\StoreNewsItemRequest;
use App\Http\Requests\UpdateNewsItemRequest;

class NewsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function show(NewsItem $newsItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsItem $newsItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsItemRequest  $request
     * @param  \App\Models\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsItemRequest $request, NewsItem $newsItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsItem $newsItem)
    {
        //
    }
}
