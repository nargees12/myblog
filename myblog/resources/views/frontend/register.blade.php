@extends('layouts.frontend')
@section('content')
<section class="fullscreen" style="background-image: url(https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg?cs=srgb&dl=pexels-c%C3%A1tia-matos-1072179.jpg&fm=jpg)">
    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="text-center m-b-30">
                <a href="/" class="logo"> </a>
            </div>
            <div class="card">
                <div class="card-body py-5 px-sm-5">
                    <div class="mb-5 text-center">
                        <div class="row">
                            <h6 class="h3 mb-1">Register New Account</h6>
                            <p class="text-muted mb-0">Enter your information to register.</p>
                        </div><span class="clearfix"></span>
                        <form class="form-validate">
                            <div class="form-group">
                                <label for="text"></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                                    <span class="input-group-text"><i class="icon-star"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text"></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="surname" placeholder="Last Name" required="">
                                    <span class="input-group-text"><i class="icon-download-cloud"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    <span class="input-group-text"><i class="icon-mail"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text"></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password"></label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="password" placeholder="Enter password" type="password" required="">
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password"></label>
                                <div class="input-group show-hide-password">
                                    <input class="form-control" name="repassword" placeholder="Retype password" type="password" required="">
                                    <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                            <div class="mt-4"><button type="submit" class="btn btn-primary btn-block btn-primary">Register</button></div>
                        </form>
                        <div class="mt-4 text-center"><small>Have an account?</small> <a href="/login" class="small fw-bold">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('title',"Registration")