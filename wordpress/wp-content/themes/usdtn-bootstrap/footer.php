</div>
<!--End #content-->


<footer class="footer">
	<div class="container">
		<div id="footer">
			<div class="col-md-4">
				<a href="http://facebook.com/" target="_blank" class="btn btn-block btn-default"><i class="fa fa-facebook-square fa-5x"></i><br> facebook.com/</a>	
			</div>
			
			<div class="col-md-4">
				<a href="http://instagram.com/" target="_blank" class="btn btn-block btn-default">
					<i class="fa fa-instagram fa-5x"></i><br> instagram.com/</a>
			</div>
			
			<div class="col-md-4">
				<a href="http://twitter.com/" target="_blank" class="btn btn-block btn-default">
					<i class="fa fa-twitter-square fa-5x"></i><br> twitter.com/</a>
			</div>
			<div class="col-md-12">
				<div class="copyright">
					<p><strong>&copy; <span id="dateYear"></span> US Diesel Truckin Nationals</strong></p>
				</div>
			</div>

		</div>
	</div>
</footer>
	



<script>
d = new Date();
document.getElementById("dateYear").innerHTML = d.getFullYear();
</script>
<?php wp_footer(); ?>

</body>
</html>