@extends('layouts.backend')

@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>My Account</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                                        <form method="post">
                                                @csrf
                                                    <div class="tab-pane" id="account-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="userName1">Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" id="userName1"  value="{{Auth::user()->name}}" name="name">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="password1"> Email</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="password1"> Password</label>
                                                                    <div class="col-md-9">
                                                                        <input type="password" name="password" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-update"></i>Update Details</button>
                                                </div>
                                        </form>
                                </div>
                            </div>
                    </div>
    @endsection