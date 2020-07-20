<form id="loginscok">
	<div class="form-group">
		<label class="text-label-sm" for="username">Username</label>
		<div class="input-group input-group-merge">
			<input name="username" type="text" required="" class="form-control" placeholder="Username">
		</div>
	</div>
	<div class="form-group">
		<label class="text-label-sm" for="password">Password</label>
		<div class="input-group input-group-merge">
			<input name="password" type="password" required="" class="form-control" placeholder="Enter your password">
		</div>
	</div>
	<div class="form-group text-right">
		<h6><a class="" href="">Forgot password?</a></h6><br>
	</div>
</form>
<div class="form-group">
	<button id="btn-login" class="btn btn-rounded btn-lg btn-block btn-custom" type="button">Sign In</a><br>
</div><br><br><br><br>
<div class="text-center">
	Don't have an account? <a class="text-body" style="color: blue;" href="signup-centered-boxed.html"><b>Register here!</b></a>
</div>
<script>
	$(function() {
		$("#btn-login").on("click", function() {
			var data = $("form").serialize();
			console.log(data);
			swal.fire({
				title: "Processing Data..",
				text: "Data sedang berkelana",
				imageUrl: '<?= base_url() ?>' + "images/loadings.gif",
				showConfirmButton: false,
				allowOutsideClick: false
			});
			$.ajax({
				type: "POST",
				url: '<?= base_url() ?>' + 'Login/prosesLogin',
				data: data,
				success: function(data) {
					if (data === "1") {
						window.location.replace("<?= site_url("welcome") ?>");
					} else {
						// console.log(data);
						Swal.fire("Input Username/Password Salah", data, "error");
					}
				}
			});
		});
	});
</script>
