<footer>
<div class="inner-footer">
<h2>Tours of the Month!</h2>

<?php dynamic_sidebar('sidebar-footer'); ?>
</div>

<div class="inner-footer">
<ul>
<li>Copyright &copy; <?php echo date('Y') ; ?></li>
<li>All Rights Reserved</li>
<li><a href="">Web Design by Elena</a></li>
<li><a href="http://validator.w3.org/nu/?doc=http%3A%2F%2Fmystudywp.com%2Fit270%2Fsite1%2F">Valid HTML</a></li>
<li><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fmystudywp.com%2Fit270%2Fsite1%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">Valid CSS</a></li>
</ul>
</div>



</footer>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>

<?php wp_footer(); ?>
</body>
</html>