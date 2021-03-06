<?php $page = "active"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<div class="box-subreq">
			<p class="c-blue ch-title big fwn m0">Request Your Data/Publication</p>
			<div class="pre-header c-grey3 fwn">
				You can request data that you need, Please fill this box below.
			</div>
			<br/>
			<br/>
			<form>
				<div class="form-group">
					<span class = "db c-gray3">Name</span>
					<input class = "oneline noicon" type = "text" placeholder = "Name" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Email</span>
					<input class = "oneline noicon" type = "email" placeholder = "Email Address" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Data Type</span>
					<label class="side-filter-2">Data
						<input type = "radio" checked="checked" name = "sf"/>
					  	<span class="checkmark-2"></span>
					</label>
					<label class="side-filter-2">Publication
						<input type = "radio" checked="checked" name = "sf"/>
					  	<span class="checkmark-2"></span>
					</label>
					<div class="cb"></div>
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Request Subject</span>
					<input class = "oneline noicon" type = "text" placeholder = "Subject" />
				</div>
				<div class="form-group">
					<span class = "db c-gray3">Upload Data</span>
					<div class="input_file">
                        <input type="file" class="" value="" placeholder-text="&nbsp;">
                        <span></span>
                    </div>
					<div class="span-upload">
						<span class = "dib u c-blue">+ Upload Data</span> &nbsp;&nbsp; <span class = "i">(.pdf, max. size 5MB)</span>
					</div>
				</div>
				<div class="db captch">
					<div class="g-recaptcha" data-sitekey="6LdnhlgUAAAAAM4rnOyr6oXNqKZiIT1AhQpNU_au"></div>
				</div>
				<br class = "hm" /><br/><br class = "hm" /><br/><br class = "hm" /><br/><br class = "hm" />
				<button class="db btn orange long">LOGIN</button>
			</form>
		</div>
	</div>
</section>
<?php include ('_footer.php'); ?>
<script type="text/javascript">
	$(window).load(function(){
		$('.input_file').fileInputC();
	});
</script>