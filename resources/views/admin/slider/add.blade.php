@extends('layouts.admin')

@section('title')
    <title>Slider</title>
@endsection

@section('css')
    <link rel="stylesheet" href="">
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.contend-header', ['name' => 'Slider', 'key' => 'Add'])
        <div class="content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Slider</h3>
                                </div>
                                <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   name="name"
                                                   placeholder="Nhập tên Slider"
                                                   value="{{old('name')}}"
                                            >
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Decription</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                name="description">{{old('description')}}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file"
                                                   class="form-control @error('image_path') is-invalid @enderror"
                                                   name="image_path">
                                            @error('image_path')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button  class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
