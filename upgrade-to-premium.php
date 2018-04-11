<?php $page = "active"; $header = "active"; include ('_header.php'); ?>
<section class = "popup">
	<div class="wrapper type-popup">
		<div class="pop-content">
			<span class = "pop-close"></span>
			<b class = "ch-title big c-blue">Payment Confirmation</b>
			<p class="c-gray3">If you already purchase, Please confirm your payment here</p>
			<form class="three-quarter">
				<div class="form-group">
					<span class = "db c-gray3">Receipt Number</span>
					<input class = "oneline noicon" type = "text" placeholder = "" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Bank Account</span>
					<input class = "oneline noicon" type = "text" placeholder = "" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Total Amount</span>
					<input class = "oneline noicon" type = "text" placeholder = "" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Upload Receipt</span>
					<div class="input_file">
	                    <input type="file" class="" value="" placeholder-text="&nbsp;">
	                    <span></span>
	                </div>
					<div class="span-upload">
						<span class = "dib u c-blue">+ Upload Data</span> &nbsp;&nbsp; <span class = "i">(.pdf, max. size 5MB)</span>
					</div>
				</div>
				<div class="form-group">
					<img class = "captcha" src="img/material/captcha.png">
				</div>
				<br/><br/><br/>
				<button class="db btn orange long">LOGIN</button>
			</form>
		</div>
	</div>
</section>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<p class="c-blue ch-title big hm">Upgrade to Premium</p>
		<div class="pre-header c-grey3 fwn">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis enim ut ipsum lobortis laoreet. Nullam eget enim dapibus, aliquet urna eget, viverra metus. In iaculis ligula id justo viverra volutpat. Aenean pellentesque elit ut velit dictum lacinia. Sed auctor suscipit dapibus
		</div>
		<div class="db article pre-header">
			<b class = "b-link">Benefit from upgrade to premium</b>
			<ul>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
			</ul>
			<b class = "b-link">Subscription method details</b>
			<ul>
				<li>Transfer to 1</li>
				<li>Confirm Payment 2</li>
				<li>Premium Activated 3</li>
			</ul>
			<br/>
			<br/>
			<br/>
			<a href="" class="u popup-trigger">Confirm your payment here</a>
		</div>
	</div>
</section>
<?php include ('_footer.php'); ?>