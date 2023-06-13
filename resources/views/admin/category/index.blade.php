@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
    @include('partials.contend-header', ['name' => 'category', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">DataTable with default features</h3>--}}
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <a
                                href="{{route('categories.create')}}">Add item</a></button>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{route('categories.delete', ['id' => $item->id])}}" class="btn btn-outline-danger">Delete</a>
                                        <a href="{{route('categories.edit', ['id' => $item->id])}}" class="btn btn-outline-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>{{$category->links('pagination::bootstrap-4')}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
