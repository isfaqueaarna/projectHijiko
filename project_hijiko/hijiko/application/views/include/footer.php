<!--start footer-->

<div class="footer-area">
	<div class="container">
	
		<div class="col-md-3 col-sm-3">
			<div class="ftr-inner">
				<div class="spr_selector">
					<label class="fa fa-sort-desc"></label>
						<select class="spr_select">
							<option>Language</option>
							<option value="2"> - Lorem Ipsum</option>
							<option value="3"> -  - Lorem Ipsum</option>			
						</select>
				</div>
				
				<div class="spr_selector">
					<label class="fa fa-sort-desc"></label>
						<select class="spr_select">
							<option>Currency</option>
							<option value="2"> - USD</option>
							<option value="3"> -  - INR</option>			
						</select>
				</div>
				
			</div>
		</div>
		
		<div class="col-md-3 col-sm-3">
			<div class="ftr-inner">
				<h2>Hi, Jiko</h2>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Policies</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
		
		
		<div class="col-md-3 col-sm-3">
			<div class="ftr-inner">
				<h2>Explore</h2>
				<ul>
					<li><a href="#">Jiko Locator</a></li>
					<li><a href="#">Global Hot Deals at Now</a></li>
				</ul>
			</div>
		</div>
		
		
		<div class="col-md-3 col-sm-3">
			<div class="ftr-inner last">
				<h2>As a Jiko</h2>
				<ul>
					<li><a href="#"><!--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>-->What is a “Jiko”?</a></li>
					<li><a href="#">Become a Jiko</a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>


<!--footer btm-->	

 

<div class="ftr-btm-part">
	<div class="container">
		<div class="col-md-6 col-sm-6">
			<div class="tfr-btm">© Hi, Jiko, Inc.</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="ftr-social">
				<ul>
					<li><a href="#">Terms & Privacy</a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
	
<script type="text/javascript">
	$(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});

</script>
	
</body>
</html>