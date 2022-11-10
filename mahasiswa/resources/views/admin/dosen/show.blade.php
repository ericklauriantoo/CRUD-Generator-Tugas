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

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dosen {{ $dosen->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/dosen') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/dosen/' . $dosen->id . '/edit') }}" title="Edit Dosen"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/dosen' . '/' . $dosen->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Dosen" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dosen->id }}</td>
                                    </tr>
                                    <tr><th> NIDN </th><td> {{ $dosen->NIDN }} </td></tr><tr><th> Nama </th><td> {{ $dosen->nama }} </td></tr><tr><th> Alamat </th><td> {{ $dosen->alamat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
