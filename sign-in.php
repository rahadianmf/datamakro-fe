<?php $page = "active"; $header = "active"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<div class="auth-container">
			<div class="side-left">
				<div class="centerize">
					<div class = ""pr>
						<b>SIGN IN</b>
						<form>
							<div class="form-group">
								<span class = "ico-email"></span>
								<input class = "oneline" type = "email" placeholder = "Email" />
							</div>
							<div class="form-group">
								<span class = "ico-password"></span>
								<input class = "oneline" type = "password" placeholder = "Password" />
							</div>
							<div class="remember">
								<label class="side-filter">Remember Me
									<input type = "checkbox" name = "sf"/>
								  	<span class="checkmark"></span>
								</label>
							</div>
							<div class="forgot">
								<a class="c-blue" href="">forgot password?</a>
							</div>
							<div class="cb"></div>
							<button class="btn orange w-100">LOG IN</button>
						</form>
						<span class = "signup dib m0a">Don't have account? <a class="i" href="">Sign up Here</a></span>
					</div>
				</div>
			</div>
			<div class="side-right">
				<div class="content-ins">
					<b>WHY REGISTER?</b>
					<p>
						Subscribe to email updates for economic data series.
						Create personalized lists of economic data series.
						Save customized graphs and maps for later use.
						Build and share personalized dashboards with series 
					</p>
					<a href="">Learn more about user accounts </a>
				</div>
				<img src="img/material/side-code.jpg">
			</div>
		</div>
	</div>
</section>
<?php include ('_footer.php'); ?>
