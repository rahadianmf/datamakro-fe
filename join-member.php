<?php $page = "active"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<div class="auth-container">
			<div class="side-left">
				<div class="centerize">
					<div class = ""pr>
						<b>JOIN OUR MEMBER</b>
						<form>
							<div class="form-group">
								<span class = "ico-user"></span>
								<input class = "oneline" type = "email" placeholder = "Email" />
							</div>
							<div class="form-group">
								<span class = "ico-email"></span>
								<input class = "oneline" type = "email" placeholder = "Email" />
							</div>
							<div class="form-group">
								<span class = "ico-password"></span>
								<input class = "oneline" type = "password" placeholder = "Password" />
							</div>
							<div class="form-group">
								<span class = "ico-password"></span>
								<input class = "oneline" type = "password" placeholder = "Confirm Password" />
							</div>
							<div class="db captch">
								<div class="g-recaptcha" data-sitekey="6LdnhlgUAAAAAM4rnOyr6oXNqKZiIT1AhQpNU_au"></div>
							</div>
							<button class="db btn orange w-100">LOG IN</button>
						</form>
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
