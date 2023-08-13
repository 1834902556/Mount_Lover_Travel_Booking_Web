@extends('admin.master')
@section('title')
Manage Spot
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Manage Spot</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Manage Spot</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Spots</h4>
            <div class="table-responsive m-t-40">
                <p class="text-center text-success">{{session('msg')}} </p>
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Place Name</th>
                            <th>Spot Name</th>
                            <th>Spot Description</th>
                            <th>Spot Image</th>
                            <th>Punlication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($spots as $spot)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$spot->place->name}}</td>
                            <td>{{$spot->name}}</td>
                            <td>{{$spot->description}}</td>
                            <td><img src="{{asset($spot->image)}}" alt="{{$spot->image}}" height="50px" width="80px"></td>
                            <td>{{$spot->status== 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('edit.spot',['id'=>$spot->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Are you sure to edit it.')">
                                    <i class="bx bx-pen"></i>
                                </a>
                                <a href="{{route('delete.spot',['id'=>$spot->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete it.')">
                                    <i class="bx bx-unlink"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
