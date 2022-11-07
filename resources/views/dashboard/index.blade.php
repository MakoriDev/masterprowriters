@extends('layouts.dashboard')

@section('title', 'Dashboard')


@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-tasks"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{ route('order.index') }}" class="text-black h5">All Orders</a></span>
                    <span class="info-box-number">{{ $allOrders }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-spinner fa-spin"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{ route('order.active') }}" class="text-black h5">Active Orders</a></span>
                    <span class="info-box-number">{{ $activeOrders }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{ route('order.complete') }}" class="text-black h5">Complete Orders</a></span>
                    <span class="info-box-number">{{ $completeOrders }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><a href="{{ route('feedback.index') }}" class="text-black h5">Feedback</a></span>
                    <span class="info-box-number">{{ $feedback }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
@endsection
