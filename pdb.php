<?php $page = "data-tree"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<h1 class="c-blue ch-title big hm fwn">Produk Domestik Bruto</h1>
		<br/>
		<br class = "hm" />
		<a class="dw" href=""><span></span> Download File</a>
		<div class= "line-dashed"></div>
		<div class="box-desc">
			<div class="list">
				<b class = "c-gray3">Source :</b>
				<p class="m0 c-gray3">Badan Pusat Statistik</p>
			</div>
			<div class="list">
				<b class = "c-gray3">Unit :</b>
				<p class="m0 c-gray3">IDR Billion</p>
			</div>
			<div class="list">
				<b class = "c-gray3">Frequency :</b>
				<p class="m0 c-gray3">5 Years</p>
			</div>
		</div>
		<div class= "line-dashed"></div>
		<div class="db">
			<div class="form-group dib relative">
				<select class = "hb">
					<option value="">6 Years</option>
				</select>
				<span class = "arr-select"></span>
			</div>
			<div class="form-group dib relative">
				<select class = "hb">
					<option value="">Yearly</option>
				</select>
				<span class = "arr-select"></span>
			</div>
		</div>
		<br/>
		<div class="db">
			<div class="chart" id="chart" style="width: 100%; margin: 0 auto"></div>
		</div>
		<div class="article db c-gray3 chart-mobile">
			<p>
				Pertumbuhan ekonomi Q2-17 tumbuh 5.01% YoY, stabil dari kuartal sebelumnya. Investasi yang tumbuh lebih cepat 5.35% YoY di Q2-17 dari 4.78% YoY Q1-17 menjadi penopang pertumbuhan secara keseluruhan. Untuk faktor penghambat, kontribusi ekspor netto turun dan belanja pemerintah tumbuh negatif. Pertumbuhan konsumsi rumah tangga stabil di 4.95% YoY.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lectus libero, dapibus sit amet nulla suscipit, finibus facilisis sem. Phasellus accumsan, sapien et sollicitudin condimentum, ex justo consequat nulla, vitae tempus mi ligula vehicula libero. Nullam eleifend, ligula vel efficitur eleifend, nunc nibh auctor nisi, vitae ornare justo augue vel dui. Proin dictum turpis purus, a egestas enim auctor ut. Praesent tempor risus id nisl dictum rutrum. Morbi non varius nulla, id bibendum est. Duis a sodales lectus.
			</p>
			<p>
				Donec ut faucibus mi. Integer cursus augue et ante efficitur, in condimentum magna sodales. Sed pharetra sit amet ligula ut sodales. Sed nunc libero, auctor quis nisl nec, molestie venenatis diam. Aenean in massa in massa faucibus mattis. Donec arcu libero, tincidunt vitae fringilla in, imperdiet vel odio. Fusce bibendum viverra ornare. Integer libero leo, fringilla ornare ipsum et, efficitur interdum nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
			<p>
				Duis id sem imperdiet, ultrices lectus eget, pellentesque augue. Aliquam eleifend id eros eu sollicitudin. Nam sit amet mauris eu purus venenatis viverra. Mauris malesuada nulla nec porta iaculis. Nunc convallis, tortor sit amet tempor auctor, ante nisl efficitur ex, vitae porttitor turpis lorem eget massa. Nam at mauris sed magna condimentum placerat. Mauris molestie dui quam. Pellentesque varius luctus quam, a rutrum tortor sodales ut. Nulla sit amet nisl vel lacus fermentum gravida vitae eu mauris. Nullam eu turpis nec est ultrices posuere vel a arcu. In hac habitasse platea dictumst. Fusce id magna ut enim tincidunt congue quis sed dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor varius felis, eget interdum odio ornare ut.
			</p>
		</div>
		<div class="db">
			<h4 class="ch-title sm">Related Search</h4>
			<div class="re-search">
				<div class="list">
					<img src="img/content/re-search-1.png">
					<a class="b-link" href="">BSIM Economic Outlook 2017-2018</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img src="img/content/re-search-2.png">
					<a class="b-link" href="">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img src="img/content/re-search-1.png">
					<a class="b-link" href="">Update Risk to USD Asians</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
				<div class="list">
					<img src="img/content/re-search-2.png">
					<a class="b-link" href="">BII Industry Outlook 2014-2015</a>
					<span class = "db c-gray3">September 2014</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include ('_footer.php'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	    var maxHeight = 0, maxHeight2 = 0, ww = $(window).width();
	    if(ww >= 768){
	        $('.re-search .b-link').each(function(){
	           maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
	        });
	        $('.re-search .b-link').css("height",maxHeight);
		}
	});

	Highcharts.chart('chart', {
	    chart: {
	        type: 'line'
	    },
	    title: {
	        text: ''
	    },
	    subtitle: {
	        text: 'Source: WorldClimate.com'
	    },
	    xAxis: {
	        categories: ['2011', '2012', '2013', '2014', '2015', '2016']
	    },
	    yAxis: {
	        title: {
	            text: ''
	        }
	    },
	    plotOptions: {
	        line: {
	            dataLabels: {
	                enabled: true
	            },
	            enableMouseTracking: false
	        }
	    },
	    series: [{
	        name: '',
	        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5]
	    }]
	});
</script>