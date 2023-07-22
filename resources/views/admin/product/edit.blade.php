@extends('layouts.admin')

@section('title')
    <title>Add Product</title>
@endsection

@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('admin/product/index/list.css')}}">
@endsection



@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.contend-header', ['name' => 'product', 'key' => 'Add'])
        <form action="{{route('product.update', ['id' => $product->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Quick Example</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Tên sản phẩm</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="name"
                                                   placeholder="Nhập tên sản phẩm"
                                                   value="{{$product->name}}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Giá sản phẩm</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="price"
                                                   placeholder="Nhập giá sản phẩm"
                                                   value="{{$product->price}}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh đại diện</label>
                                            <input type="file"
                                                   class="form-control-file"
                                                   name="feature_image_path">
                                            <div class="col-md-12">
                                                <div class="row product_image">
                                                    <img src="{{$product->feature_image_path}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh chi tiết</label>
                                            <input type="file"
                                                   multiple
                                                   class="form-control-file"
                                                   name="image_path[]">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    @foreach($product->productImages as $item)
                                                    <div class="col-md-3 ">
                                                        <img class="product_image" src="{{$item->image_path}}" alt="">
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Chon danh muc</label>
                                            <select class="form-control select2 select2_init" style="width: 100%;"
                                                    name="category_id">
                                                <option value="0" selected="selected">Chon danh muc cha</option>
                                                {!! $htmlOption !!}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nhap tags cho san pham</label>
                                            <select name="tags[]" class="form-control tags_select_choose"
                                                    multiple="multiple">
                                                @foreach($product->tags as $item)
                                                    <option value="{{$item->name}}" selected>{{$item->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Nhập nội dung</label>
                                            <textarea class="form-control tinymce_editor_init" name="contents"
                                                      rows="3">{{$product->content}}</textarea>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>

    </div>
@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/1dtvvmm1y7snmzyc7octk6rredwfyykamidbve2qd763kpfq/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    {{--<script src="https://cdn.tiny.cloud/1/1dtvvmm1y7snmzyc7octk6rredwfyykamidbve2qd763kpfq/tinymce/6/tinymce.min.js"></script>--}}
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/product/add/add.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/draggable/1.0.0-beta.9/plugins.min.js"></script>
@endsection

