{{-- ERICK LAURIANTO | 03081200002 --}}

<?php
use App\Models\Mahasiswa;
?>

@extends('layouts.main')

@section('title')
    UPH | Dashboard Mahasiswa | Erick Laurianto | 03081200002
@endsection

@section('breadcrumb_item1')
    Dashboard
@endsection 

{{-- Content --}}
@section('content')
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">
                    <b>Nama:</b> 
                    <br><br>
                    <b>Student ID: </b> 
                    <br><br>
                    <b>Term:</b>
                    <br><br>
                    <b>IP:</b> 
                    <br><br><br><br>
                    Mata kuliah yang diambil:

                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection