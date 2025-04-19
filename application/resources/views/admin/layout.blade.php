@extends('app')

@section('title', 'Admin Dashboard')
@section('layout-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                @include('admin.side_navigation')
            </div>
            <div class="col-md-10 main-content">
                @include('admin.notifications')
                @yield('content')
            </div>
        </div>
    </div>