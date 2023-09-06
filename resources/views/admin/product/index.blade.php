@extends('layouts.admin')

@section('title')
    <title>Add product</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/product/index/list.css')}}">
@endsection

@section('js')
    <script src="{{asset('vendors/sweetalert2/sweetalert2@11.js')}}"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
{{--    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>--}}
    <script src="{{asset('admins/product/index/list.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.contend-header', ['name' => 'product', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <a
                                href="{{route('product.create')}}">Add item</a></button>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Danh mục</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{number_format($item->price)}}</td>
                                    <td><img class="product_image" src="{{$item->feature_image_path}}" alt=""></td>
                                    <td>{{optional($item->category)->name}}</td>
                                    <td>
                                        <a href="{{route('product.edit', ['id' => $item->id])}}" class="btn btn-outline-success">Edit</a>
                                        <a href=""
                                           data-url="{{route('product.delete', ['id' => $item->id])}}"
                                           class="btn btn-outline-danger action-delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>{{$products->links('pagination::bootstrap-4')}}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
