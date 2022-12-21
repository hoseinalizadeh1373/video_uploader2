@extends('master')
@section('content')
<div class="container d-flex align-items-center justify-content-center">
<form class="contaiex-column ml-2 mr-2  rounded" action="{{route('upload_store')}}" method="POST" enctype="multipart/form-ner-fluid d-flex align-items-center justify-content-center fldata">
    @csrf
    @method('POST')

    <div class="mb-1 w-50">
        <label for="title" class="form-label">عنوان ویدیو</label>
        <input type="text" class="form-control shadow" id="title" name="title" >
    </div>

      <div class="mb-1 w-50">
        <label for="desc" class="form-label">توضیحات</label>
        <textarea class="form-control shadow" id="desc" name="desc" rows="2"></textarea>
      </div>

      <div class="mb-1 w-50">
        <label for="formFile" class="form-label">انتخاب ویدیو</label>
        <input class="form-control shadow" type="file" name="file">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>

      </div>

      <div class="mb-1 w-50">
        <button class="form-control shadow btn btn-success" type="submit">تایید</button>
      </div>

</form>
</div>
@endsection