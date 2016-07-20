<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard-container">
    <div class="dashboard-left" id="dashboard-left">
        @include('layouts.dashboard')
        @yield('dashboard_content')
    </div>
    <div class="dashboard-right" id="dashboard-right">
        <div id="dashboard-right-item-1-option-1" class="dashboard-right-item">
            @include('products.create')
            @yield('product_create')
        </div>
        <div id="dashboard-right-item-1-option-2" class="dashboard-right-item">
            @include('products.edit')
            @yield('product_edit')
        </div>
        <div id="dashboard-right-item-1-option-3" class="dashboard-right-item">
            @include('products.show')
            @yield('product_show')
        </div>
        <div id="dashboard-right-item-1-option-4" class="dashboard-right-item">
            @include('products.delete')
            @yield('product_delete')
        </div>
        <div id="dashboard-right-item-1-option-5" class="dashboard-right-item">
            @include('products.image')
            @yield('product_image')
        </div>
    </div>
</div>
@endsection
