@extends('layouts.dashboard')
@section('title', 'All Orders')
@section('css')
    @include('inc.datatable-css')
@endsection
@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> All Orders</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> All Orders</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h6 class="card-title">All Orders</h6>
                </div>
                <div class="card-body">
                    <table id="orders-list" class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Number</th>
                                <th>Client</th>
                                <th>Paper Type</th>
                                <th>Spacing</th>
                                <th>Style</th>
                                <th>Pages</th>
                                <th>Level</th>
                                <th>Deadline</th>
                                <th>Deadline Timestamp</th>
                                @canany(['view order details'])
                                    <th>Actions</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $order->number }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->paper_type }}</td>
                                    <td>{{ $order->spacing }}</td>
                                    <td>{{ $order->style }}</td>
                                    <td>{{ $order->pages }}</td>
                                    <td>{{ $order->level }}</td>
                                    <td>{{ $order->deadline }}</td>
                                    <td>{{ $order->deadline_timestamp }}</td>
                                    @canany(['view order details'])
                                        <td>
                                            <div class="d-flex">
                                                @can('view order details')
                                                    <a href="#" class="btn btn-sm btn-secondary mr-2"><i
                                                            class="far fa-eye mr-1"></i>Details</a>
                                                @endcan

                                            </div>
                                        </td>
                                    @endcanany
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
