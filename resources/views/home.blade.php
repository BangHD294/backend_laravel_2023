@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.contend-header', ['name' => 'Home', 'key' => 'Home'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div><p>Chưa làm gì cả</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


