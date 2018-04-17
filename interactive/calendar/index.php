<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Will Monahan - Calendar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="./css/main.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  </head>
	<body class="d-flex flex-column justify-content-between">

		<div id="pagemain" class="container">
			
      <?php include "./resources/navbar.html" ?>

			<h2 class="text-center">Interactive Computing</h2>
      <h3 class="text-center text-muted">Tutoring Availability</h3>

			<div class="row">
				<iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=wm804%40nyu.edu&amp;color=%2323164E&amp;src=nyu.edu_nluore6ia39u9bdvqefgfr3q8o%40group.calendar.google.com&amp;color=%23BE6D00&amp;src=nyu.edu_mfkcmvppl2ndnrq4rpuktrb4h8%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no" class="mx-auto"></iframe>
			</div>
			<br/>
			<div style="max-width: 800px; display: block; margin: auto;">
				<p class="text-justify">Above, you can find my Google Calendar availability. I'm free to meet in the evenings and on the weekends, or if you'd like to squeeze in a quick meeting during the day, we can try to make that work too.</p>
				<p class="text-justify">If you'd like to schedule a time to meet, just <a href="mailto:willmonahan@nyu.edu">shoot me an email</a>. My address is <a href="mailto:willmonahan@nyu.edu">willmonahan@nyu.edu</a>, and I'll try to get back to you as soon as I can.</p>
				<p class="text-justify">For your group projects, it would be awesome if you could include a quick description of the libraries and technologies that you'll be using, so that I can prepare for our meeting. Please use <strong>Interactive Computing Tutoring</strong> as the subject of your message. Thanks!</p>
		  </div>

		  <br>
			
		</div><!--Container End-->

    <?php include "./resources/footer.html" ?>

		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#interactive-calendar").addClass("active");
        $(".footer #mail").attr("href","mailto:willmonahan@nyu.edu")
      });
    </script>
	</body>
</html>
