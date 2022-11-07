@extends('layouts.dashboard')
@section('title', 'Feedback')
@section('css')
    @include('inc.datatable-css')
@endsection
@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> Feedback</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Feedback</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h6 class="card-title">Feedback</h6>
                </div>
                <div class="card-body">
                    <table id="feedback-list" class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                {{-- @canany(['view product', 'edit product', 'restock product', 'delete product']) --}}
                                    <th>Actions</th>
                                {{-- @endcanany --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ strlen($message->message) > 80 ? substr($message->message, 0, 80).'...' : $message->message  }}</td>
                                    {{-- @canany(['view product', 'edit product', 'restock product', 'delete product']) --}}
                                        <td>
                                            <div class="d-flex">
                                                {{-- @can('view product') --}}
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary mr-2"><i
                                                            class="far fa-eye mr-1"></i>Details</a>
                                                {{-- @endcan --}}

                                            </div>
                                        </td>
                                    {{-- @endcanany --}}


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
            $('#feedback-list').DataTable();
        });
    </script>
@endsection

