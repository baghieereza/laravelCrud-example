<!DOCTYPE html>
<html>
	<head>
		<title>website</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="lib/stickyTableHeader/jquery.stickytable.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="dashboard">
		<nav class="topnav">
			<div class="container-fluid text-center">
				<span>سپاه پاسداران انقلاب اسلامی</span>
				<a class="logo" href="#"></a>
				<span>تیپ 21 امام رضا  علیه السلام</span>
			</div>
		</nav>
		<main id="main" class="bg-image main">
			<!-- Main Content -->
			<div class="container-fluid pt-5">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-5">
						<div class="card card-stats">
							<div class="card-header line-header d-lg-flex justify-content-lg-between align-items-center">
								<h3 class="title mb-3 mb-lg-0">ورود کاربر</h3>
							</div>
							<div class="card-body">
								<form>
									<div class="row">
									
										<div class="col-lg-12 form-group">
											<label>نام کاربری</label>
											<input type="text" name="user" class="form-control">
										</div>

										<div class="col-lg-12 form-group">
											<label>رمز عبور</label>
											<input type="password" name="pass" class="form-control">
										</div>
									</div>

									<div class="btn-container text-center">
										<a href="#" class="btn btn-primary btn-block">ورود</a>
									</div>

									<div class="form-group mb-0 d-flex justify-content-between">
										<label class="checkbox">مرا بخاطر بسپار
										  <input type="checkbox" checked="checked">
										  <span class="checkmark"></span>
										</label>
										<a href="#">فراموشی رمز عبور</a>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- /End Main Content -->
		</main>
		 
		<footer id="footer">
			<div class="bottom_footer text-center">
				<p class=""> &#169; تمامی حقوق متعلق به تیپ 21 امام رضا (ع)  میباشد . </p>
			</div>
		</footer> 
		

		<!-- JS files -->
		<script src="lib/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>