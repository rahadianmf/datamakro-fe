<?php $page = "data-talk"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<h1 class="c-blue ch-title big hm fwn">Data Talk</h1>
		<p class="pre-header c-gray3">
			Datamakro provides broad series of macro and microeconomic data of Indonesia. Besides providing the data, Datamakro also disseminates wide score of research report to let the data speaks even further. Datamakro is very suitable for student, researcher, analyst, consultant, and policymaker who is seeking trustable data.
		</p>
		<div class="db">
			<div class="form-group fl relative">
				<select class = "hb">
					<option value="">Classification</option>
				</select>
				<span class = "arr-select"></span>
			</div>
			<div class="form-group fl relative">
				<select class = "hb">
					<option value="">Published Date</option>
				</select>
				<span class = "arr-select"></span>
			</div>
			<div class="form-group fl relative">
				<select class = "hb">
					<option value="">Categories</option>
				</select>
				<span class = "arr-select"></span>
			</div>
			<div class="form-group fr relative">
				<input type ="text" class="search hb" placeholder = "Search all data talk..." />
				<span class = "search-ico"></span>
			</div>
			<div class="cb"></div>
		</div>
		<div class="db">
			<div class="data-list">
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">BSIM Economic Outlook 2017-2018</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">Update Risk to USD Asians</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">BSIM Economic Outlook 2017-2018</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">Update Risk to USD Asians</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">BSIM Economic Outlook 2017-2018</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-1.png">
					<a class="b-link" href="data-talk-detail.php">Update Risk to USD Asians</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img class = "w-100" src="img/content/re-search-2.png">
					<a class="b-link" href="data-talk-detail.php">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
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
	        $('.data-list .list .b-link').each(function(){
	           maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
	        });
	        $('.data-list .list .b-link').css("height",maxHeight + 10);
		}
	});
</script>