<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="assets/css/login.css?<?= time() ?>" rel="stylesheet">
<style type="text/css">
	.box_lgroll {
		overflow: hidden;
		width: 100%;
	}

	.box_lgroll_content {
		width: 200%;
		transition: all 0.3s;
	}

	.left-50 {
		transform: translateX(-50%);
		transition: all 0.3s;
	}

	.change_form {
		color: #fff;
		cursor: pointer;
	}

	.box_lgroll_content form {
		width: 50%;
		padding: 1%;
	}
</style>
<div class="login-view-website text-sm"><a href="../" target="_blank" title="Xem website"><i class="fas fa-reply mr-2"></i>Xem website</a></div>
<div class="login-box">
	<div class="card">
		<div class="card-body login-card-body">


			<div class="d-flex main_login">
				<div class="bg_form">
					<div class="login-box-form">
						<p class="login-box-msg">Đăng nhập hệ thống</p>
						<div class="box_lgroll">
							<div class="d-flex box_lgroll_content">
								<form enctype="multipart/form-data" class="login-box-form1">

									<div class="input-group mb-3 flex-row-reverse">

										<input type="text" class="ml-2 form-control text-sm" name="username" id="username" placeholder="Tài khoản *" autocomplete="off">
										<div class="input-group-append login-input-group-append">
											<div class="input-group-text">
												<span class="fas fa-user"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3 flex-row-reverse">

										<input type="password" class="ml-2 form-control text-sm" name="password" id="password" placeholder="Mật khẩu *" autocomplete="off">
										<div class="input-group-append login-input-group-append">
											<div class="input-group-text">
												<span class="fas fa-lock"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3 justify-content-between">
										<span class="change_form show_forget">Quên mật khẩu</span>
									</div>
									<div class="text-align">
										<button type="button" class="btn btn-sm  btn-block btn-login text-sm p-2">
											<div class="sk-chase d-none">
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
											</div>
											<span>Login</span>
										</button>
										<div class="alert my-alert alert-login d-none text-center text-sm p-2 mb-0 mt-2" role="alert"></div>
									</div>
								</form>
								<form enctype="multipart/form-data" method="post" action="index.php?com=user&act=forget_pass" class="login-box-form2">
									<h2>Nhập email đã đăng ký với chúng tôi</h2>
									<div class="input-group mb-3">

										<input type="email" class="form-control text-sm" name="email" id="email" placeholder="Email *" autocomplete="off" required>
										<div class="input-group-append login-input-group-append">
											<div class="input-group-text">
												<span class="fas fa-user"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3 justify-content-between">
										<span class="change_form show_login">Đăng nhập</span>
									</div>

									<div class="text-align">
										<button type="submit" class="btn btn-sm btn-block text-sm p-2">
											<div class="sk-chase d-none">
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
												<div class="sk-chase-dot"></div>
											</div>
											<span>Login</span>
										</button>
										<div class="alert my-alert alert-login d-none text-center text-sm p-2 mb-0 mt-2" role="alert"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="banner_logo">
					<img src="assets/images/logosota.png" alt="">
				</div>
			</div>


		</div>
	</div>
</div>

<!-- Login js -->
<script type="text/javascript">
	
	function login() {
		
		var username = $("#username").val();
		var password = $("#password").val();
		var remember1 = document.getElementById("remember");
		/*if(remember1.checked){
			remember=1;
		}else{
			remember=0;
		}*/


		if ($(".alert-login").hasClass("alert-danger") || $(".alert-login").hasClass("alert-success")) {
			$(".alert-login").removeClass("alert-danger alert-success");
			$(".alert-login").addClass("d-none");
			$(".alert-login").html("");
		}
		if ($(".show-password").hasClass("active")) {
			$(".show-password").removeClass("active");
			$("#password").attr("type", "password");
			$(".show-password").find("span").toggleClass("fas fa-eye fas fa-eye-slash");
		}
		$(".show-password").addClass("disabled");
		$(".btn-login .sk-chase").removeClass("d-none");
		$(".btn-login span").addClass("d-none");
		$(".btn-login").attr("disabled", true);
		$("#username").attr("disabled", true);
		$("#password").attr("disabled", true);

		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'ajax/ajax_login.php',
			async: false,
			/*data: {username:username,password:password,remember:remember},*/
			data: {
				username: username,
				password: password
			},
			success: function(result) {
				if (result.success) {
					window.location = "index.php";
				} else if (result.error) {
					$(".alert-login").removeClass("d-none");
					$(".show-password").removeClass("disabled");
					$(".btn-login .sk-chase").addClass("d-none");
					$(".btn-login span").removeClass("d-none");
					$(".btn-login").attr("disabled", false);
					$("#username").attr("disabled", false);
					$("#password").attr("disabled", false);
					$(".alert-login").removeClass("alert-success");
					$(".alert-login").addClass("alert-danger");
					$(".alert-login").html(result.error);
				}
			}
		});
	}
	$(document).ready(function() {
		$(".show_forget").click(function() {
			$('.box_lgroll_content').addClass('left-50');
		});
		$(".show_login").click(function() {
			$('.box_lgroll_content').removeClass('left-50');
		});
		$("#username, #password").keypress(function(event) {
			if (event.keyCode == 13 || event.which == 13) login();
		})
		$(".btn-login").click(function() {
			login();
		})
		$(".show-password").click(function() {
			if ($("#password").val()) {
				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$("#password").attr("type", "password");
				} else {
					$(this).addClass("active");
					$("#password").attr("type", "text");
				}
				$(this).find("span").toggleClass("fas fa-eye fas fa-eye-slash");
			}
		})
	})
</script>