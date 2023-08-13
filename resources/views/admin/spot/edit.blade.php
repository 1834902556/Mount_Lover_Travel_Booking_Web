@extends('admin.master')
@section('title')
Edit Spot
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Spot</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Edit Spot</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Spot</h4>
                <hr>
                <h4 class="text-center text-success">{{session('msg')}}</h4>
                <form class="form-horizontal p-t-20" method="post" action="{{route('update.spot',['id' => $spot->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Place Name</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                            <select name="place_id">
                                    <option selected disabled>---Select Place---</option>
                                @foreach($places as $place)
                                    <option value="{{$place->id}}"{{$place->id == $spot->place_id ? 'selected' : ''}}>{{$place->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Spot Name</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Place Name" value="{{$spot->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Spot Description</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <textarea pe="text" rows="10" class="form-control" id="description" name="description" placeholder="Place Description">{{$spot->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="form-label col-sm-3 control-label" for="web">Spot Image</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                <img src="{{asset($spot->image)}}" height="100px" width="100px">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="form-label col-sm-3 control-label" for="web">Publication Status</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <label class="me-3"><input type="radio" name="status" {{$spot->status == 1 ? 'checked' : ''}} value="1">Published</label>
                                <label><input type="radio" name="status" {{$spot->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
