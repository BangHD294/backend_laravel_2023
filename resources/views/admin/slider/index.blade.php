@extends('layouts.admin')

@section('title')
    <title>Slider</title>
@endsection
@section('js')
    <script src="{{asset('vendors/sweetalert2/sweetalert2@11.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script src="{{asset('admins/sliders/index/list.js')}}"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.contend-header', ['name' => 'Slider', 'key' => 'List'])
    <!-- /.content-header -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">DataTable with default features</h3>--}}
                        <button class="btn btn-success float-right"><i class="fas fa-plus"></i>
                            <a href="{{route('slider.create')}}">Add item</a></button>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{$item->image_path}}" alt=""></td>
                                    <td>
                                        <a href=""
                                           data-url="{{route('slider.delete', ['id' => $item->id])}}"
                                           class="btn btn-outline-danger float-right action-delete">Delete</a>
                                        <a href="{{route('slider.edit', ['id' => $item->id])}}" class="btn btn-outline-success float-right">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div>{{$items->links('pagination::bootstrap-4')}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
