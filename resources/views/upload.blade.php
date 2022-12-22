@extends('master')
@section('content')
<div class="container d-flex align-items-center justify-content-center">
<form  id="fileUploadForm" class="container d-flex flex-column  align-items-center justify-content-center rounded" action="{{route('upload_store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="mb-1 w-50">
        <label for="title" class="form-label">عنوان ویدیو</label>
        <input type="text" class="form-control shadow" id="title" name="title" value="{{old('title')}}">
        @error('title')
                            <p class="invalid-feedback d-block">
                                <strong>{{$message}}</strong>
                            </p>
        @enderror
    </div>

      <div class="mb-1 w-50">
        <label for="desc" class="form-label">توضیحات</label>
        <textarea class="form-control shadow" id="desc" name="desc" rows="2">{{old('desc')}}</textarea>
        @error('desc')
                            <p class="invalid-feedback d-block">
                                <strong>{{$message}}</strong>
                            </p>
        @enderror
      </div>

      <div class="mb-1 w-50">
        <label for="formFile" class="form-label">انتخاب ویدیو</label>
        
        <input id="file_id" class="form-control shadow" type="file" name="file">
        @error('file')
                            <p class="invalid-feedback d-block">
                                <strong>{{$message}}</strong>
                            </p>
        @enderror
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>

      </div>

      <div class="mb-1 w-50">
        <button class="form-control shadow btn btn-success" >تایید</button>
      </div>

</form>
</div>
@endsection