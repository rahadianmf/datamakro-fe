<?php $page = "data-tree"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<p class="c-blue ch-title big hm">Tutorial</p>
		<div class="pre-header c-grey3 fwn">
			Datamakro provides broad series of macro and microeconomic data of Indonesia. Besides providing the data, Datamakro also disseminates wide score of research report to let the data speaks even further. Datamakro is very suitable for student, researcher, analyst, consultant, and policymaker who is seeking trustable data.
		</div>
		<br/>
		<br/>
		<div class="data-list-2">
			<div class="list">
				<img src="img/content/tutorial-1.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">BSIM Economic Outlook 2017-2018</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-2.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">Upside Risk to USD Asians</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-1.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">BSIM Economic Outlook 2017-2018</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-2.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">Upside Risk to USD Asians</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-1.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">BSIM Economic Outlook 2017-2018</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-2.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">Upside Risk to USD Asians</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-1.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">BSIM Economic Outlook 2017-2018</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-2.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">Upside Risk to USD Asians</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-1.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">BSIM Economic Outlook 2017-2018</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
			<div class="list">
				<img src="img/content/tutorial-2.jpg">
				<div class="link-title">
					<a href="tutorial-data.php">Upside Risk to USD Asians</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus purus et purus volutpat.
					</p>
				</div>
			</div>
		</div>
		<div class="pagination">
			<ul>
				<li><a href=""><< Prev</a></li>
				<li><a class="active" href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href=""> Next >></a></li>
			</ul>
		</div>
	</div>
</section>
<?php include ('_footer.php'); ?>
<script type="text/javascript">
	$(window).load(function(){
	    var maxHeight = 0, maxHeight2 = 0, ww = $(window).width();
	    if(ww >= 768){
	        $('.data-list-2 .list .link-title').each(function(){
	           maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
	        });
	        $('.data-list-2 .list .link-title').css("height",maxHeight);
		}
	});
</script>