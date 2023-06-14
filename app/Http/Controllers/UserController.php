<?php

namespace App\Http\Controllers;

use App\Repository\Interface\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller {

    private $userRepository;
    public function __construct( UserRepositoryInterface $userRepository ) {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $users = $this->userRepository->allUserShow();
        return view( 'index', compact( 'users' ) );
    }

    public function create() {
        return view( 'create' );
    }
    public function store( Request $request ) {

        $this->userRepository->storeUser( $request->all() );
        return redirect()->route( 'user.index' );
    }
    public function edit( $id ) {
        $user = $this->userRepository->editUser( $id );
        return view( 'edit', compact( 'user' ) );
    }
    public function update( Request $request, $id ) {

        $this->userRepository->updateUser( $id, $request->all() );

        return redirect()->route( 'user.index' );
    }
    public function show( $id ) {
        $user = $this->userRepository->showUser( $id );
        return view( 'view', compact( 'user' ) );
    }
    public function distroy( $id ) {
        $this->userRepository->distroyUser( $id );
        return back();
    }
}