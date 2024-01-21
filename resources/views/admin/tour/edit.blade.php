@extends('admin.master')
@section('title')
Edit Tour
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Tour</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Edit Tour</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Tour</h4>
                <hr>
                <h4 class="text-center text-success">{{session('msg')}}</h4>
                <form class="form-horizontal p-t-20" method="post" action="{{route('update.tour',['id'=>$tour->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Place Name</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                            <select class="form-control" name="place_id" id="placeId">
                                    <option selected disabled>---Select Place---</option>
                                @foreach($places as $place)
                                    <option value="{{$place->id}}" {{$place->id == $tour->place_id ? 'selected' : ''}}>{{$place->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Spots Name</label>
                        <div class="col-sm-9">
                            <div class="input-group" >
                                <select  class="form-control" name="spot_id" id="spotId">
                                    <option selected disabled>Select Place For Select Spot</option>
                                @foreach($spots as $spot)
                                    <option value="{{$spot->id}}"{{$spot->id == $tour->spot_id ? 'selected' : ''}}></option>
                                @endforeach
                                 </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Tour Title</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="title" placeholder="Tour Title" value="{{$tour->title}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Tour Category</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="category" placeholder="Tour Category" value="{{$tour->category}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Total Person</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="person" name="person" placeholder="Total Person" value="{{$tour->person}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Tour Duration</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="Tour Duration" value="{{$tour->duration}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Tour Cost Per Person</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="total_cost" placeholder="Tour Cost" value="{{$tour->total_cost}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Sort Description</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="description" name="sort_description" placeholder="Sort Description" value="{{$tour->sort_description}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Long Description</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <textarea pe="text" rows="10" class="form-control" id="description" name="long_description">{{$tour->long_description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="form-label col-sm-3 control-label" for="web">Tour Bannaer</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="file" name="image" id="input-file-now" class="dropify" />
                                <img src="{{asset($tour->image)}}" alt="" height="100px" width="100px">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="form-label col-sm-3 control-label" for="web">Publication Status</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <label class="me-3"><input type="radio" name="status" value="1">Published</label>
                                <label><input type="radio" name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
