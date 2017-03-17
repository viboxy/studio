@extends('layouts.users-master')

@section('title')
    Home
@endsection

@section('content')
    @include('includes.users-default-navbar')
    @include('includes.users-signin-modal')
    @include('includes.users-signup-modal')
@endsection

