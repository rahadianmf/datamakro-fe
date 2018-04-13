<?php $page = "about"; $header = "active"; include ('_header.php'); ?>
<section class = "content c-standard">
	<div class="wrapper type-2">
		<h1 class="c-blue ch-title big hm fwn">About Datamakro</h1>
		<p class="pre-header">
			Datamakro provides broad series of macro and microeconomic data of Indonesia. Besides providing the data, Datamakro also disseminates wide score of research report to let the data speaks even further. Datamakro is very suitable for student, researcher, analyst, consultant, and policymaker who is seeking trustable data.
		</p>
		<div class="db pr video-container">
			<div class="play" onclick="toggleControls()"></div>
			<video id = "video" class = "w-100" poster="img/material/cover-video-about.jpg">
			    <source src="videos/about-sample.mp4" type="video/webm">
			</video>
		</div>
		<br/>
		<p class="ch-title c-blue big hm fwn">Team And Contributors</p>
		<p class="pre-header">
			Datamakro provides broad series of macro and microeconomic data of Indonesia. Besides providing the data, Datamakro also disseminates wide score of research report to let the data speaks even further. Datamakro is very suitable for student, researcher, analyst, consultant, and policymaker who is seeking trustable data.
		</p>
		<div class="db about-list">
			<div class="list">
				<div class="img-container">
					<img src="img/content/about-1.jpg">
					<div class="view-detail">
						<div class="center-det">
							<span></span>
							<a href="">VIEW DETAILS</a>
						</div>
					</div>
				</div>
				<p class="title">Andre Hehanusa</p>
				<span class = "role">Executive Director</span>
				<p class = "desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed urna tortor. Cras dignissim diam eu nisi iaculis, et porttitor eros vulputate. Sed eleifend.
 					id est quis euismod. Maecenas eget metus lorem. Duis dapibus posuere bibendum. Aliquam erat volutpat. Curabitur vulputate at erat quis bibendum. Sed pretium dictum dolor. Curabitur varius, ante quis faucibus sollicitudin, ex metus sollicitudin mauris, sit
				</p>
			</div>
			<div class="list">
				<div class="img-container">
					<img src="img/content/about-2.jpg">
					<div class="view-detail">
						<div class="center-det">
							<span></span>
							<a href="">VIEW DETAILS</a>
						</div>
					</div>
				</div>
				<p class="title">Gillberta Rita</p>
				<span class = "role">Executive Director</span>
				<p class = "desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed urna tortor. Cras dignissim diam eu nisi iaculis, et porttitor eros vulputate. Sed eleifend.
 					id est quis euismod. Maecenas eget metus lorem. Duis dapibus posuere bibendum. Aliquam erat volutpat. Curabitur vulputate at erat quis bibendum. Sed pretium dictum dolor. Curabitur varius, ante quis faucibus sollicitudin, ex metus sollicitudin mauris, sit
				</p>
			</div>
			<div class="list">
				<div class="img-container">
					<img src="img/content/about-3.jpg">
					<div class="view-detail">
						<div class="center-det">
							<span></span>
							<a href="">VIEW DETAILS</a>
						</div>
					</div>
				</div>
				<p class="title">Roberto Julio</p>
				<span class = "role">Executive Director</span>
				<p class = "desc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed urna tortor. Cras dignissim diam eu nisi iaculis, et porttitor eros vulputate. Sed eleifend.
 					id est quis euismod. Maecenas eget metus lorem. Duis dapibus posuere bibendum. Aliquam erat volutpat. Curabitur vulputate at erat quis bibendum. Sed pretium dictum dolor. Curabitur varius, ante quis faucibus sollicitudin, ex metus sollicitudin mauris, sit
				</p>
			</div>
		</div>
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