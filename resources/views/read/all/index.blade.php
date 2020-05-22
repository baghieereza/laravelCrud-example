@extends('layout.main')

@section('content')

    <main id="main" class="bg-image main">
        <!-- Main Content -->
        <div class="container-fluid pt-4">
            <form>
                <div class="row  justify-content-center mb-2">
                    <div class="col-lg-4 form-group">
                        <div class="form-group mb-0">
                            <input type="text" name="tableSearch" class="form-control" placeholder="جستجو">
                            <button class="btn btn-primary btn-input">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">

                @foreach($data as $key)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-stats">
                        <div class="card-img" style="background-image: url('{{$key->gallery[0]->link }}');"></div>
                        <div class="card-text">
                            <a href="{{route('show_document').'/'.$key['id']}}">
                                {{$key['subject']}}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /End Main Content -->
    </main>

@endsection
