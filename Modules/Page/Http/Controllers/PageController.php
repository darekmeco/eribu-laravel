<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;
use Modules\Page\Http\Requests\PageCreateRequest;
use Modules\Page\Transformers\PageResource;
use function response;
use function view;

class PageController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        return response()->json(PageResource::collection(Page::query()->get()));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create() {
        //$locale = App::getLocale();
        //dd(config('laravellocalization'));
        //dd($locale);


        $model = new Page();
        $model->template = 'default';
        $model->slug = 'slug';

        $model->title = 'title';
        $model->body = 'body';
        $model->save();

//return view('page::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(PageCreateRequest $request) {
        
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show() {
        return view('page::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit() {
        return view('page::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request) {
        
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy() {
        
    }

}
