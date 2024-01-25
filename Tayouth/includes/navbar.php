<section class="header">
	<nav>
		<!-- <a href="index.html"><img src="img/logo.png"></a> -->
		<div class="nav-links" id="navLinks">
			 <ul>
				<li><a href="">Home</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Our Work</a></li>
				<li><a href="">News & Stories</a></li>
				<button style="color:white;" type="button" class="btn btn-outline-warning">Donate <i class="fa-regular fa-heart"></i></button>
			</ul>
		</div> 
	</nav>
</section>






	<!------JavaScript for Toggle Menu------->
	<script>

		var navLinks = document.getElementById("navLinks");
		function showMenu() {
			navLinks.style.right = "0"
		}
		function hideMenu() {
			navLinks.style.right = "-200px"
		}
	</script>