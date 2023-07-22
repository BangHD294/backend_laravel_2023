@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.contend-header', ['name' => 'category', 'key' => 'Edit'])
        <div class="content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Category</h3>
                                </div>
                                <form action="{{route('categories.update', ['id' =>$category->id])}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Tên danh mục</label>
                                            <input type=inputCategory"text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="name"
                                                   value="{{$category->name}}"
                                                   placeholder="Nhập tên danh mục">
                                        </div>
                                        <div class="form-group">
                                            <label>Chon danh muc cha</label>
                                            <select class="form-control select2" style="width: 100%;" name="parent_id">
                                                <option value="0" selected="selected">Chon danh muc cha</option>
                                                {!! $htmlOptiont !!}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
