@extends('layouts.admin')

@section('title')
    <title>Add Product</title>
@endsection

@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet"/>
@endsection



@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.contend-header', ['name' => 'product', 'key' => 'Add'])
{{--        <div class="col-md-12">--}}
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
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
                                                   class="form-control "
                                                   id="inputCategory"
                                                   name="name"
                                                   placeholder="Nhập tên sản phẩm">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('price') is-invalid @enderror">
                                            <label for="">Giá sản phẩm</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="price"
                                                   placeholder="Nhập giá sản phẩm">
                                            @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh đại diện</label>
                                            <input type="file"
                                                   class="form-control-file"
                                                   name="feature_image_path">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh chi tiết</label>
                                            <input type="file"
                                                   multiple
                                                   class="form-control-file"
                                                   name="image_path[]">
                                        </div>
                                        <div class="form-group">
                                            <label>Chon danh muc</label>
                                            <select class="form-control select2 select2_init @error('category_id') is-invalid @enderror" style="width: 100%;"
                                                    name="category_id">
                                                <option value="0" selected="selected">Chon danh muc cha</option>
                                                {!! $htmlOption !!}
                                            </select>
                                            @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Nhap tags cho san pham</label>
                                            <select name="tags[]" class="form-control tags_select_choose"
                                                    multiple="multiple">

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Nhập nội dung</label>
                                            <textarea class="form-control tinymce_editor_init @error('contents') is-invalid @enderror"
                                                      name="contents"
                                                      rows="3"></textarea>
                                            @error('contents  ')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
    <script src="{{asset('admins/product/add/add.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/draggable/1.0.0-beta.9/plugins.min.js"></script>
@endsection

