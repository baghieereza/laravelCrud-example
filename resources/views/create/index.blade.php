@extends('layout.main')

@section('content')

	<main id="main" class="bg-image main">
	<!-- Main Content -->
	<div class="container-fluid pt-4">

		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-7 col-md-9">

				<ul id="progressbar">
					<li class="active">information</li>
					<li>gallery</li>
					<li>confirm</li>
				</ul>

				<form style="direction: ltr !important; text-align: left !important;" class="steps" method="post" action="{{route('createDoc')}}" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
					<!-- USER INFORMATION FIELD SET -->
					{{ csrf_field() }}
					<fieldset>
						<h2 class="fs-title">information</h2>
						<h3 class="fs-subtitle">enter correct information to save them!</h3>
						<div class="form-group">
							<label>
								subject
							</label>
							<input class="form-control" id="subject" type="text" name="subject" required="required"  data-rule-required="true" data-msg-required="required" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								number of doc
							</label>
							<input class="form-control" id="docNumber" type="number" name="number"   required="required"  data-rule-required="true" data-msg-required="required" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>

						<div class="form-group controls">
							<label>
								date of doc
							</label>
							<input type="date" id="datepicker1" class="form-control"   name="date"   required="required"  data-rule-required="true" data-msg-required="required" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								exporter Reference
							</label>
							<input class="form-control" id="exporter" type="text" name="exporterReference"   required="required"  data-rule-required="true" data-msg-required="required" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>
						<div class="form-group">
							<label>
								pages
							</label>
							<input class="form-control" id="pageCount" type="text" name="pageCount"   required="required"  data-rule-required="true" data-msg-required="required" >
							<span class="error1" style="display: none;">
										<i class="error-log fal fa-exclamation-circle ml-2"></i>
									</span>
						</div>

 							<input type="button" style="margin-right: 41%;" data-page="1" name="next" class="next action-button btn btn-primary" value="next" />


					</fieldset>



					<!-- ACQUISITION FIELD SET -->
					<fieldset>
						<h2 class="fs-title">galley</h2>
						<h3 class="fs-subtitle">choose your pic and upload them!</h3>
						<!-- Begin Total Number of Donors in Year 1 Field -->
						<div class="form-group">
							<label>enter your pic</label>
							<div action="/file-upload" class="dropzone">
								<div class="fallback">
									<input name="docPics" type="file" multiple />
								</div>
							</div>
						</div>
						<!-- End Calc of Total Number of Donors Fields -->
						<input type="button" data-page="2" name="previous" class="previous action-button btn btn-secondary" value="back" />
						<input type="button" data-page="2" name="next" class="next action-button btn btn-primary" value="next" />
					</fieldset>



					<!-- Cultivation FIELD SET -->
					<fieldset>
						<h2 class="fs-title">confirm info</h2>
						<h3 class="fs-subtitle">check your entered information</h3>

						<div class="row mb-3">
							<div class="col-md-6">
								<h3>subject</h3>
							</div>
							<div class="col-md-6">
								<p id="subject2">subject</p>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<h3>number of doc</h3>
							</div>
							<div class="col-md-6">
								<p id="numDoc2">number of doc</p>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<h3>date</h3>
							</div>
							<div class="col-md-6">
								<p id="datepicker2">date</p>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<h3>exporter reference </h3>
							</div>
							<div class="col-md-6">
								<p id="exporter2">exporter reference</p>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<h3>pages</h3>
							</div>
							<div class="col-md-6">
								<p id="pageCount2">pages</p>
							</div>
						</div>
						<input type="button" data-page="3" name="previous" class="previous action-button btn btn-secondary" value="back" />
						<input type="button" data-page="3" name="next" class="next action-button btn btn-primary" value="next" />
					</fieldset>



					<fieldset>
						<h2 class="fs-title">save info</h2>
						<h3 class="fs-subtitle">lets to save your data if correct </h3>
						<input style="width: 540px!important;" class="explanation btn btn-small modal-trigger" type="submit" value="save">
					</fieldset>
				</form>

			</div>
		</div>
	</div>
	<!-- /End Main Content -->
</main>

@endsection


@section('script')
	<script>

		$("#subject").bind('focusout' , function () {
			$("#subject2").html($(this).val())
			$.ajax({
				type:'POST',
				url: "{{route('checkSubject')}}",
				data:{_token: "{{ csrf_token() }}" , subject : $(this).val()
				},
				success: function( msg ) {
					if (msg['success'] == false){
						$("#subject").val('')
 						$("#subject").notify(
								'The entered title is duplicate.',
								{ position:"right" }
						);
					}
 				},

			});
		});
		$("#docNumber").bind('focusout' , function () {
			$("#numDoc2").html($(this).val())
		});
		$("#datepicker1").change( function () {
			$("#datepicker2").html($(this).val())

		});
		$("#exporter").bind('focusout' , function () {
			$("#exporter2").html($(this).val())
		});
		$("#pageCount").bind('focusout' , function () {
			$("#pageCount2").html($(this).val())
		});
	</script>
@endsection
