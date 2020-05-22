@extends('layout.main')

@section('content')

    <main id="main" class="bg-image main">
        <!-- Main Content -->
        <div class="container-fluid pt-4">

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="lightGallery" id="aniimated-thumbnials">


                                @php $i=0; @endphp
                                @foreach($data->gallery as $gallery)
                                    @if($i == 0 )
                                        <a href="{{$gallery->link}}" class="d-block bg-cover-style"
                                           style="background-image: url('{{$gallery->link}}')">
                                            <img src="{{$gallery->link}}" style="width: 100%; display: none;"/>
                                        </a>
                                    @endif
                                         <a href="{{$gallery->link}}">
                                           <img src="{{$gallery->link}}"/>
                                         </a>
                                        @php ++$i; @endphp

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card card-stats tb">
                        <div class="card-body">
                            <div class="d-flex ">
                                <h1 class="mb-3 title">{{$data->subject}}</h1>
                                <button data-remodal-target="modal"
                                        class="btn btn-outline btn-outline-primary mr-auto d-block">
                                    <i class="fal fa-edit v-middle"></i>
                                    ویرایش
                                </button>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>شماره سند</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->number}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>تاریخ سند</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->date}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>مرجع صادر کننده</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->exporterReference}}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>تعداد برگ</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$data->pageCount}}</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <a style="margin-right: 50% ; margin-bottom: 50px;width: 150px" href="{{route('show_documents')}}" class="explanation btn btn-danger"   >بازگشت</a>



        <!-- /End Main Content -->
    </main>
@endsection
