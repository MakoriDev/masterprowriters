@extends('layouts.dashboard')
@section('title', 'Order Details')
@section('css')
    @include('inc.datatable-css')
@endsection
@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Order Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('order.index') }}">All Orders</a></li>
                <li class="breadcrumb-item active">Order Details</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h6 class="card-title">Order Details</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Order Number:</span>
                                    {{ $order->number }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Client Email:</span>
                                    {{ $order->email }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Paper Type:</span>
                                    {{ $order->paper_type }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Spacing:</span>
                                    {{ $order->spacing }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Style:</span>
                                    {{ $order->style }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Number of Pages:</span>
                                    {{ $order->pages }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Level:</span>
                                    {{ $order->level }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Deadline:</span>
                                    {{ $order->deadline }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Deadline Timestamp:</span>
                                    {{ $order->deadline_timestamp }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Amount:</span>
                                    {{ $order->amount }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Payment Status:</span>
                                    {{ $order->payment_status }}
                                </li>
                                <li class="list-group-item">
                                    <span class="font-weight-bold mr-1">Progress:</span>
                                    {{ $order->progress }}
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-light">
                                    <h6 class="card-title">Order Files</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach ($order->files as $file)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $file->name }}
                                                <form action="{{ route('order.download') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="filename" value="{{ $file->name }}">
                                                    <button type="submit" class="btn btn-sm btn-success"> <i class="fas fa-file-download mr-2"></i> Download</button>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('inc.datatable-js')
    <script>
        $(document).ready(function() {
            $('#orders-list').DataTable();
        });
    </script>
@endsection
