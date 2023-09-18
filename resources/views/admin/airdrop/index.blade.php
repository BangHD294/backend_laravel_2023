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
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <a
{{--                                href="{{route('categories.create')}}">Add item</a></button>--}}
                                href="">Add item</a></button>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Tên dự án</th>
                                <th>Đánh giá</th>
                                <th>Vốn-chi phí cần bỏ ra</th>
                                <th>Chi tiết</th>
                                <th>Gọi vốn</th>
                                <th>Backer nổi bật</th>
                                <th>Xác nhận airdrop</th>
                                <th>Thời gian list Token</th>
                                <th>Hướng dẫn</th>
                                <th>Cảnh báo rủi ro</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ProjectName}}</td>
                                    <td>{{$item->Assess}}</td>
                                    <td>{{$item->Capital}}</td>
                                    <td>{{$item->Detail}}</td>
                                    <td>{{$item->Fundraising}}</td>
                                    <td>{{$item->FeaturedBacker}}</td>
                                    <td>{{$item->ConfirmAirdrop}}</td>
                                    <td>{{$item->TokenListTime}}</td>
                                    <td>{{$item->Guide}}</td>
                                    <td>{{$item->RiskWarning}}</td>
                                    <td>{{$item->Condition}}</td>
                                    <td>
{{--                                        <a href="{{route('categories.delete', ['id' => $item->id])}}" class="btn btn-outline-danger">Delete</a>--}}
{{--                                        <a href="{{route('categories.edit', ['id' => $item->id])}}" class="btn btn-outline-success">Edit</a>--}}
                                        <a href="" class="btn btn-outline-danger">Delete</a>
                                        <a href="" class="btn btn-outline-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
