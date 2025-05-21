<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="<?= APP_NAME ?>" content="<?= APP_NAME ?>">
	<meta name="<?= APP_NAME ?>" content="<?= APP_NAME ?>">
	<meta name="<?= APP_NAME ?>" content="<?= APP_NAME ?>">
	<!-- Favicon -->
	<link rel="icon" href="<?= base_url() ?>admin_assets/logo/logo.png" type="image/x-icon"
		style="border-radius:30px" />
	<!-- Title -->
	<title>
		<?= APP_NAME ?>
	</title>

	<!-- Bootstrap css-->
	<link href="<?php echo base_url()  ?>admin_assets/plugins/bootstrap/css/bootstrap.min.css"
		rel="stylesheet" />

	<!-- Icons css-->
	<link href="<?php echo base_url() ?>admin_assets/css/icons.css" rel="stylesheet" />

	<!-- Style css-->
	<link href="<?php echo base_url()  ?>admin_assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url()  ?>admin_assets/css/dark-boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()  ?>admin_assets/css/boxed.css" rel="stylesheet">
	<link href="<?php echo base_url()  ?>admin_assets/css/skins.css" rel="stylesheet">
	<link href="<?php echo base_url()  ?>admin_assets/css/dark-style.css" rel="stylesheet">
	<!-- Color css-->
	<link id="theme" rel="stylesheet" type="text/css" media="all"
		href="<?php echo base_url()  ?>admin_assets/css/colors/color.css">
	<!-- Select2 css -->
	<link href="<?php echo base_url()  ?>admin_assets/plugins/select2/css/select2.min.css" rel="stylesheet">
	<!-- Internal DataTables css-->
	<link href="<?php echo base_url()  ?>admin_assets/plugins/datatable/dataTables.bootstrap4.min.css"
		rel="stylesheet" />
	<link href="<?php echo base_url()  ?>admin_assets/plugins/datatable/responsivebootstrap4.min.css"
		rel="stylesheet" />
	<link
		href="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css"
		rel="stylesheet" />
	<!-- Sidemenu css-->
	<link href="<?php echo base_url()  ?>admin_assets/css/sidemenu/sidemenu.css" rel="stylesheet">
	<!-- Bootstrap Validations -->
	<script src="<?php echo base_url()  ?>admin_assets/validations/jquery.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/validations/bootstrap.min.js"></script>
	<!-- Internal Sweet-Alert css-->
	<link href="<?php echo base_url()  ?>admin_assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

	<script src="<?php echo base_url()  ?>admin_assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

	<style type="text/css">
		.help-block {
			color: red;
		}

		.has-success .help-block {
			color: green;
		}

		.zoom {
			transition: transform .2s;
			/* Animation */
			max-width: 100px;
			margin: 0 auto;
		}

		.zoom:hover {
			transform: scale(1.5);
			/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
		}
	</style>
</head>

<body class="horizontalmenu">

	<?php if (session()->getFlashdata('error')) { ?>
		<script>
			swal({
				title: 'Error!',
				text: '<?php echo session()->getFlashdata('error') ?>',
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			});
		</script>
	<?php } ?>
	<?php if (session()->getFlashdata('success')) { ?>
		<script>
			swal({
				title: 'Well Done!',
				text: '<?php echo session()->getFlashdata('success') ?>',
				type: 'success',
				timer: 3000,
				showConfirmButton: false
			});
		</script>
	<?php } ?>

	<!-- Page -->
	<div class="page main-signin-wrapper">

		<!-- Row -->
		<div class="row signpages  justify-content-center text-center sign-2 ">
			<div class="col-md-12 col-xl-8 col-lg-8 col-sm-12 col-xxl-8 ">
				<div class="sign1 ">
					<div class="card">
						<div class="">
							<div class="card-body mt-2 mb-2 p-5">
								<img src="<?= base_url()  ?>admin_assets/logo/logo.png"
									class="header-brand-img text-left mb-5 desktop-logo" alt="logo"
									style="max-width:200px">
								<img src="<?= base_url()  ?>admin_assets/logo/logo.png"
									class="header-brand-img desktop-logo text-left mb-5 theme-logo" alt="logo"
									style="max-width:200px">
								<!-- <h2>UniX Computers</h2> -->
								<div class="clearfix"></div>
								<form method="Post" id="loginForm" action="<?php echo base_url('login') ?>">
									<h5 class="text-left mb-2">Sign In</h5>
									<!-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to Continue in our website</p> -->
									<div class="form-group text-left">
										<label class="">Email Address</label>
										<input class="form-control rounded-11" placeholder="Users email" type="text"
											name="username" id="username">
									</div>
									<div class="form-group text-left">
										<label class="">Password</label>
										<input class="form-control rounded-11" placeholder="password" type="password"
											name="password" id="password">
									</div>
									<div class="row">
										<div class="col-6">
											<div class="form-group mb-0 text-left">
												<label class="custom-control custom-checkbox mb-0">
													<input type="checkbox" class="custom-control-input">
													<!-- <span class="custom-control-label">Remember me</span> -->
												</label>
											</div>
										</div>
										<!-- <div class="col-6 text-right mt-1">
											<a href="forgot.html" class="text-dark">Forgot password?</a>
										</div> -->
										<div class="col-12 mt-3">
											<button type="submit" class="btn btn-primary rounded-11 btn-block">SIGN
												IN</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row -->

	</div>
	<!-- End Page -->
	<script>
		$(document).ready(function () {
			$('#loginForm').bootstrapValidator({
				// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
				feedbackIcons: {
					// 	valid: 'glyphicon glyphicon-ok',
					// 	invalid: 'glyphicon glyphicon-remove',
					// 	validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'The username is required'
							},
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'The password  is required'
							},
						}
					},
				}
			}).on('success.form.bv', function (e) {
				$(this)[0].submit();
			});
		});
	</script>

	<!-- Jquery js-->


	<!-- Jquery js-->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap js-->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/plugins/bootstrap/js/bootstrap.min.js"></script>



	<!-- Internal Data Table js -->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/dataTables.responsive.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/jszip.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/js/table-data.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/js/form-elements.js"></script>
	<!-- Perfect-scrollbar js -->
	<script
		src="<?php echo base_url()  ?>admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<!-- Select2 js-->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/select2/js/select2.min.js"></script>
	<script src="<?php echo base_url()  ?>admin_assets/js/select2.js"></script>
	<!-- Sidemenu js -->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/sidemenu/sidemenu.js"></script>
	<!-- Sidebar js -->
	<script src="<?php echo base_url()  ?>admin_assets/plugins/sidebar/sidebar.js"></script>
	<!-- INTERNAL INDEX js -->
	<script src="<?php echo base_url()  ?>admin_assets/js/index.js"></script>
	<!-- Sticky js -->
	<script src="<?php echo base_url()  ?>admin_assets/js/sticky.js"></script>
	<!-- Custom js -->
	<script src="<?php echo base_url()  ?>admin_assets/js/custom.js"></script>
	<!-- BoottstrapValidator -->
	<script src="<?php echo base_url()  ?>admin_assets/validations/bootstrapValidator.min.js"></script>
</body>

</html>


</html>