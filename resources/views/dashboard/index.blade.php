@extends('layout.main')

@section('content')

<main id="main" class="bg-image main">
    <!-- Main Content -->
    <div class="container-fluid pt-5">
        <div class="row alert-box mb-4">
            <div class="col-lg-6">
                <div class="card card-primary large">
                    <a href="{{route('add_new_document')}}" class="d-block text-center">
                        <i class="fal fa-plus"></i>
                        <div>new</div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-secondary large">
                    <a href="{{route('show_documents')}}" class="d-block text-center">
                        <i class="fal fa-eye"></i>
                        <div>read</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats">
                    <div class="card-header card-header-icon">
                        <div class="card-icon card-icon-warning">
                            <i class="fal fa-tasks"></i>
                        </div>
                        <h3 class="card-title">@php echo count($data) @endphp</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            all new doc
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats">
                    <div class="card-header card-header-icon">
                        <div class="card-icon card-icon-success">
                            <i class="fal fa-eye"></i>
                        </div>
                        <h3 class="card-title">100</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            gallery count
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats">
                    <div class="card-header card-header-icon">
                        <div class="card-icon card-icon-danger">
                            <i class="fal fa-copy"></i>
                        </div>
                        <h3 class="card-title">@php echo count($data) @endphp</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            all doc
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats">
                    <div class="card-header card-header-icon">
                        <div class="card-icon card-icon-info">
                            <i class="fal fa-copy"></i>
                        </div>
                        <h3 class="card-title">1500</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            new image
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Main Content -->
</main>

@endsection
