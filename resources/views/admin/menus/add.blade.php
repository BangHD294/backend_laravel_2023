@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.contend-header', ['name' => 'menu', 'key' => 'Add'])
        <div class="content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <form action="{{route('menus.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Tên Menu</label>
                                            <input type=inputCategory"text"
                                                   class="form-control"
                                                   id="inputCategory"
                                                   name="name"
                                                   placeholder="Nhập tên menu">
                                        </div>
                                        <div class="form-group">
                                            <label>Chon Menu cha</label>
                                            <select class="form-control select2" style="width: 100%;" name="parent_id">
                                                <option value="0" selected="selected">Chon danh muc cha</option>
                                                {!! $selectOtion !!}
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
