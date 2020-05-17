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
                                <a href="img/1.jpg" class="d-block bg-cover-style"
                                   style="background-image: url('img/1.jpg')">
                                    <img src="img/1.jpg" style="width: 100%; display: none;"/>
                                    <!--   <=======(it's thumbnial)  -->
                                </a>
                                <a href="img/1.jpg">
                                    <img src="img/1.jpg"/>
                                </a>
                                <a href="img/1.jpg">
                                    <img src="img/1.jpg"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card card-stats tb">
                        <div class="card-body">
                            <div class="d-flex ">
                                <h1 class="mb-3 title">لورم ایپسوم متن ساختگی</h1>
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
                                    <p>شماره سند</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>تاریخ سند</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>تاریخ سند</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>مرجع صادر کننده</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>مرجع صادر کننده</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h3>تعداد برگ</h3>
                                </div>
                                <div class="col-md-6">
                                    <p>تعداد برگ</p>
                                </div>
                            </div>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه
                                راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                                جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Main Content -->
    </main>
@endsection
