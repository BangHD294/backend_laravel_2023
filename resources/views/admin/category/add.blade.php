@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.contend-header', ['name' => 'category', 'key' => 'Add'])
        <div class="content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Category</h3>
                                </div>
                                <form action="{{route('categories.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Tên danh mục</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="name"
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
