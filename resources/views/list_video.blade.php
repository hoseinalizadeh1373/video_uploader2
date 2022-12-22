@extends('master')
@section('content')
<div class="container mt-4">
    <div class="row pt-2">
        @forelse($videos as $video)
        <div class="col-lg-4 col-sm-6 col-xs-12 mt-2 rounded ">
            <div class="card w-100" >
                {{-- <img src="..."  alt="..."> --}}
                <div  class="card-img-top vv">

                <video  width="100%" height="100%"  >
                    <source src="{{$video->getFirstMediaUrl('video')}}" type="video/mp4">
                  مرورگر شما پشتیبانی نمی کند!
                  </video>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{{$video->title}}}</h5>
                  <a href="#" class="btn btn-info "id="btn_show" data-id="{{$video}}" data-url="{{$video->getFirstMediaUrl('video')}}" data-bs-toggle="modal"  data-bs-target="#exampleModal">دانلود</a>
                </div>
              </div>
        </div>

        
        @empty
        <div class="d-flex justify-content-center align-items-center">
            <td >هیچ ویدیویی جهت مشاهده وجود ندارد</td>
        </div>


    @endforelse

    </div>
  
    {{ $videos->links() }}
    {{-- {!! $videos->withQueryString()->links('pagination::bootstrap-5') !!} --}}
</div>
     @include('layouts.show_video')
@endsection