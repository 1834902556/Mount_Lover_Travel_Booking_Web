@extends('admin.master')
@section('title')
Manage Tour
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Manage Tour</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Manage Tour</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tours</h4>
            <div class="table-responsive m-t-40">
                <p class="text-center text-success">{{session('msg')}} </p>
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Tour Title</th>
                            <th>Place Name</th>
                            <th>Spot Name</th>
                            <th>Tour Category</th>
                            <th>Total Person</th>
                            <th>Tour Duration</th>
                            <th>Tour Cost</th>
                            <th>Tour Sort Description</th>
                            <th>Tour Long Description</th>
                            <th>Tour Banner</th>
                            <th>Punlication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tours as $tour)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$tour->title}}</td>
                            <td>{{$tour->place->name}}</td>
                            <td>{{$tour->spot->name}}</td>
                            <td>{{$tour->category}}</td>
                            <td>{{$tour->person}}</td>
                            <td>{{$tour->duration}}</td>
                            <td>{{$tour->total_cost}}</td>
                            <td>{{$tour->sort_description}}</td>
                            <td>{{$tour->long_description}}</td>
                            <td><img src="{{asset($tour->image)}}" alt="{{$tour->image}}" height="50px" width="80px"></td>
                            <td>{{$tour->status== 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{route('edit.tour',['id'=>$tour->id])}}" class="btn btn-success btn-sm" onclick="return confirm('Are you sure to edit it.')">
                                    <i class="bx bx-pen"></i>
                                </a>
                                <a href="{{route('delete.tour',['id'=>$tour->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete it.')">
                                    <i class="bx bx-unlink"></i>
                                </a>
                                <a href="{{route('delete.tour',['id'=>$tour->id])}}" class="btn btn-info btn-sm">
                                    <i class="bx bx-detail"></i>
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
