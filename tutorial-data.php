<?php $page = "active"; $header = "active"; $login = "no"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<h1 class="c-blue ch-title big fwn">Tutorial Data Title</h1>
		<div class="db pr video-container t2">
			<div class="play" onclick="toggleControls()"></div>
			<video id = "video" class = "w-100" poster="img/material/cover-video-about.jpg">
			    <source src="videos/about-sample.mp4" type="video/webm">
			</video>
		</div>
		<br/>
		<p class="pre-header mn">
			Pertumbuhan ekonomi Q2-17 tumbuh 5.01% YoY, stabil dari kuartal sebelumnya. Investasi yang tumbuh lebih cepat 5.35% YoY di Q2-17 dari 4.78% YoY Q1-17 menjadi penopang pertumbuhan secara keseluruhan. Untuk faktor penghambat, kontribusi ekspor netto turun dan belanja pemerintah tumbuh negatif. Pertumbuhan konsumsi rumah tangga stabil di 4.95% YoY.

		</p>
	</div>
</section>
<?php include ('_footer.php'); ?>
<script>
var video = document.getElementById("video");

function toggleControls() {
  if (video.hasAttribute("controls")) {
  } else {
     video.setAttribute("controls","controls");   
     $(".play").addClass("hidden"); 
     video.play();  
  }
}
$(video).on('pause', function() {
     video.removeAttribute("controls");
     $(".play").removeClass("hidden");   
});
</script>