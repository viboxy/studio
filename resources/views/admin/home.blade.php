@extends('layouts.admin-master')

@section('title')
    Admin:home
@endsection
    @if(Auth::check())
        @include('includes.admin-logged-navbar')
    @else
        @include('includes.users-default-navbar')
    @endif

@section('content')
    <div class="container-fluid">
        <div class="row skipNavBar">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="text-center admin-home-icon">
                            <span>Users</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="text-center admin-home-icon">
                            <span>Packages</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="text-center admin-home-icon">
                            <span>System Settings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection