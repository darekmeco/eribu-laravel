<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\RegisterRequest;
use Modules\User\Services\RegistersUsers;
use Modules\User\Transformers\UserResource;
use Modules\User\Transformers\UsersCollectionResource;
use function response;
use function view;

class UserController extends Controller {

    use RegistersUsers;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
        return response()->json(new UsersCollectionResource(User::query()->get()));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create() {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(RegisterRequest $request) {
        
        
     
        
        //dd($request);

        $user = $this->registerUser($request);
        return response()->json(new UserResource($user));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show() {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(User $user) {
        
        return response()->json(new UserResource($user));
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
