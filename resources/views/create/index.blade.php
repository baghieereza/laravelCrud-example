@extends('layout.main')

@section('content')

	<main id="main" class="bg-image main">
	<!-- Main Content -->
	<div class="container-fluid pt-4">

		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-7 col-md-9">

				<ul id="progressbar">
					<li class="active">اطلاعات</li>
					<li>تصاویر</li>
					<li>تایید</li>
				</ul>

				<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
					<!-- USER INFORMATION FIELD SET -->
					<fieldset>
						<h2 class="fs-title">اطلاعات</h2>
						<h3 class="fs-subtitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h3>
						<div class="form-group">
							<label>
								عنوان سند
							</label>
							<input class="form-control" type="text" name="a" required="required" data-rule-required="true" data-msg-required="پر کردن اجباری" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								شماره سند
							</label>
							<input class="form-control" type="number" name="b" required="required" data-rule-required="true" data-msg-required="پر کردن اجباری" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>

						<div class="form-group controls">
							<label>
								تاریخ سند
							</label>
							<input type="text" id="datepicker1" class="form-control" placeholder="تاریخ سر رسید " name="c" required="required" data-rule-required="true" data-msg-required="پر کردن اجباری" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								مرجع صادر کننده
							</label>
							<input class="form-control" type="text" name="d" required="required" data-rule-required="true" data-msg-required="پر کردن اجباری" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								تعداد برگ
							</label>
							<input class="form-control" type="text" name="e" required="required" data-rule-required="true" data-msg-required="پر کردن اجباری" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>

 							<input type="button" style="margin-right: 41%;" data-page="1" name="next" class="next action-button btn btn-primary" value="مرحله بعد" />


					</fieldset>



					<!-- ACQUISITION FIELD SET -->
					<fieldset>
						<h2 class="fs-title">تصاویر</h2>
						<h3 class="fs-subtitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h3>
						<!-- Begin Total Number of Donors in Year 1 Field -->
						<div class="form-group">
							<label>تصاویر را وارد کنید</label>
							<div action="/file-upload" class="dropzone">
								<div class="fallback">
									<input name="file" type="file" multiple />
								</div>
							</div>
						</div>
						<!-- End Calc of Total Number of Donors Fields -->
						<input type="button" data-page="2" name="previous" class="previous action-button btn btn-secondary" value="مرحله قبل" />
						<input type="button" data-page="2" name="next" class="next action-button btn btn-primary" value="مرحله بعد" />
					</fieldset>



					<!-- Cultivation FIELD SET -->
					<fieldset>
						<h2 class="fs-title">تایید اطلاعات</h2>
						<h3 class="fs-subtitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h3>

						<div class="row mb-3">
							<div class="col-md-6">
								<h3>عنوان سند</h3>
							</div>
							<div class="col-md-6">
								<p>عنوان سند</p>
							</div>
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
						<input type="button" data-page="3" name="previous" class="previous action-button btn btn-secondary" value="مرحله قبل" />
						<input type="button" data-page="3" name="next" class="next action-button btn btn-primary" value="مرحله بعد" />
					</fieldset>



					<fieldset>
						<h2 class="fs-title">اطلاعات با موفقیت ثبت شد</h2>
						<h3 class="fs-subtitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h3>
						<div class="explanation btn btn-small modal-trigger">بازگشت به صفحه اصلی</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div>
	<!-- /End Main Content -->
</main>

@endsection
