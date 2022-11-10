{{-- ERICK LAURIANTO | 03081200002 --}}

<?php
use App\Models\Mahasiswa;
?>

@extends('layouts.main')

@section('title')
    UPH 
@endsection

@section('breadcrumb_item1')
    Dosen
@endsection 

{{-- Content --}}
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Dosen</div>
                            <div class="card-body">
                                <a href="{{ url('/admin/dosen/create') }}" class="btn btn-success btn-sm" title="Add New Dosen">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
        
                                <form method="GET" action="{{ url('/admin/dosen') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
        
                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th><th>NIDN</th><th>Nama</th><th>Alamat</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dosen as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->NIDN }}</td><td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td>
                                                <td>
                                                    <a href="{{ url('/admin/dosen/' . $item->id) }}" title="View Dosen"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/admin/dosen/' . $item->id . '/edit') }}" title="Edit Dosen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        
                                                    <form method="POST" action="{{ url('/admin/dosen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Dosen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $dosen->appends(['search' => Request::get('search')])->render() !!} </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
