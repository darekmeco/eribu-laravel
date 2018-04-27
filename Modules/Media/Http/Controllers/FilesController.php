<?php

namespace Modules\Media\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Media\Repositories\FileRepository;

class FilesController extends Controller {

    /**
     * FilesController constructor.
     *
     * @param FileRepository $repository
     */
    public function __construct(FileRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $models = $this->repository->all();      
        return view('media::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('media::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UploadMediaRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UploadMediaRequest $request): JsonResponse {
        $savedFile = $this->fileService->store($request->file('file'), $request->get('parent_id'));

        if (is_string($savedFile)) {
            return response()->json([
                        'error' => $savedFile,
                            ], 409);
        }

        event(new FileWasUploaded($savedFile));

        return response()->json($savedFile->toArray());
    }

    /**
     * Show the specified resource.
     *
     * @return Response
     */
    public function show() {
        return view('media::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit() {
        return view('media::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy() {
        
    }

}
