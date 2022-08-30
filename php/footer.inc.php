<!-- Footer Partial -->
<footer>
  
  <div id="block_footer" class="row text-left rowNo06">
    <div id="ft1"> 
        <h4>Get in touch</h4>
        <p> . . . .</p>
        <address class="panelMid">
            45 Fonsacker Ave<br>
            Sandhollows<br>
            Cricklewood<br>
            C349LD
        </address>
        <p>. . . .</p>
            T: <a href="tel:0123014587">01234 356 789</a><br>
            E: <a href="mailto:hello@nowhere.com">hello@nowhere.com</a>
        </p>
    </div> 

    <div id="ft2">
      <h2>A little about us</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias reiciendis deleniti possimus nemo non repellendus?
        Quae atque vero modi quidem! Autem cupiditate fugit doloribus ad amet, asperiores provident commodi.</p>
      <a href="#" class="btn">Learn More</a>
    </div>

    <div class="footerBottom">
        <div class="footerCopyright">
            <p><?php echo $site->footer(); ?> <?php echo date("Y") . " " . $site->title(); ?>  </p>
        </div>
        <div class="footerLinks">
            <p><a href="http://www.codecobber.co.uk" id="FooterDesignedBy">Design by: Pixacura</a></p>
        </div>
    </div>
  </div> 

</footer>



<div id="searchModal">
  <div class="modalContent">
  <img src="<?php echo Theme::src('img/searchLogo.png');?>" alt="logo" />
  <h2>Search bar</h2>
  <span onclick="document.getElementById('searchModal').style.display='none'">X</span>
    <!-- Custom search form if the plugin "search" is enabled -->
		<?php if (pluginActivated('pluginSearch')): ?>
		<div class="form-inline d-block modal-content">
			<input id="search-input" class="form-control mr-sm-2" type="search" placeholder="<?php $language->p('Search') ?>" aria-label="Search">
			<button class="btn btn-outline-primary my-2 my-sm-0" type="button" onClick="searchNow()"><?php $language->p('Search') ?></button>
			<script>
				function searchNow() {
					var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
					window.open(searchURL + document.getElementById("search-input").value, "_self");
				}
				document.getElementById("search-input").onkeypress = function(e) {
					if (!e) e = window.event;
					var keyCode = e.keyCode || e.which;
					if (keyCode == '13') {
						searchNow();
						return false;
					}
				}

        // When the user clicks anywhere outside of the modal, close it
        var modalSearch = document.getElementById("searchModal");

        window.onclick = function(event) {
          console.log(event.target);
          if (event.target == searchModal) {
            searchModal.style.display = "none";
          }
        }
			</script>
		</div>
		<?php endif ?>
  </div>
</div>


<!-- Close footer partial -->


<?php echo Theme::js("js/slidePush.js");?>

<?php Theme::plugins('siteBodyEnd') ?>
    </body>

</html>

