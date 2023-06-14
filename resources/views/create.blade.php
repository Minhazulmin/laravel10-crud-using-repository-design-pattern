@extends('layouts.app')
@section('title', 'MIN IT')

@section('minhaz')
    <div class="row mt-5">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 mt-5">
            <div class="row shadow rounded ">
                <div class="col-lg-6 mt-5">
                    <img src="images/login.jpg" class="w-100 mt-5" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 p-5">
                        <div class="card-head text-center mb-3">
                            <h5 class="fs-4 font-monospace" style="color: #ab82f5">Registration Here</h5>
                        </div>
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf
                            <div class="form-group">
                                <div class=" mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control mt-2" name="name" placeholder="Enter name">
                                </div>
                                <div class=" mb-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control mt-2" name="email"
                                        placeholder="Enter email">
                                </div>
                                <div class=" mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control mt-2" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                        required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-outline-success w-100 mt-3 mb-3 " type="submit">Submit </button>
                            <div class="form-group">
                                <div class="input-group">
                                    <a href="">Forgot Password?</a>
                                    <a href="" class="ms-4"> Login Here </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">

        </div>
    </div>

@endsection
