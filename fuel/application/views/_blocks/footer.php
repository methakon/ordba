
  <!-- FOOTER-2
			============================================= -->
  <footer id="footer-2" class="footer division">
    <div class="container"> 
        
        <!-- FOOTER CONTENT -->
        <div class="row"> 
                      
                      <!-- FOOTER INFO -->
                      <div class="col-md-12 col-xl-3">
            <div class="footer-info mb-40"> 
                          
                          <!-- Footer Logo --> 
                          <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) --> 
                          <img src="<?=assets_path('images/logo.png');?>" width="172" height="40" alt="footer-logo"> </div>
          </div>
                      
                      <!-- FOOTER PRODUCTS LINKS -->
                      <div class="col-md-4 col-xl-3">
            <div class="footer-links mb-40"> 
                          
                          <!-- Footer Links -->
						<?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 2
							,'container_tag_class' => 'foo-links clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                           
                        </div>
          </div>
                      
                      <!-- FOOTER COMPANY LINKS -->
                      <div class="col-md-4 col-xl-3">
            <div class="footer-links mb-40"> 
                          
                          <!-- Footer Links -->
						  <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 3
							,'container_tag_class' => 'clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                           
                        </div>
          </div>
                      
                      <!-- FOOTER COMPANY LINKS -->
                      <div class="col-md-4 col-xl-3">
            <div class="footer-links mb-40"> 
                          <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 4
							,'container_tag_class' => 'foo-links clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                          <!-- Footer Links -->
                           
                        </div>
          </div>
                    </div>
        <!-- END FOOTER CONTENT --> 
        
        <!-- BOTTOM FOOTER -->
        <div class="bottom-footer">
                      <div class="row"> 
            
            <!-- FOOTER COPYRIGHT -->
            <div class="col-lg-8">
                          <ul class="bottom-footer-list">
                <li>
                              <p>Copyright © 2002-2020 Srinivas Maddali, All rights reserved.</p>
                            </li>
                
                <li>
                              <p><a href="#">Terms & Privacy</a></p>
                            </li>
              </ul>
                        </div>
            
            <!-- FOOTER SOCIALS LINKS -->
            <div class="col-lg-4 text-right">
                          <ul class="foo-socials text-center clearfix">
                <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
                
                <!--
										<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
										<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>									
										<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
										<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>								
										<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>										
										<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
										<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
										<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
									    -->
                
              </ul>
                        </div>
          </div>
                    </div>
        <!-- END BOTTOM FOOTER --> 
        
      </div>
    <!-- End container --> 
  </footer>
  <!-- END FOOTER-2 --> 
  
</div>
<!-- END PAGE CONTENT --> 

<!-- EXTERNAL SCRIPTS
		============================================= --> 
 <?=js(array( 
 'bootstrap.min',
 "modernizr.custom",
 'jquery.easing',
 'jquery.appear','menu',
 'materialize',
 'jquery.scrollto',
 'jquery.countdown.min',
 'imagesloaded.pkgd.min',
 'isotope.pkgd.min',
 'jquery.flexslider',
 'owl.carousel.min',
 'jquery.magnific-popup.min',
 'register-form',
 'comment-form',
 'jquery.validate.min',
 'jquery.ajaxchimp.min','custom'
 ));?>		

<script>
      $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
	$(this).parent(".sub-menu").children("ul").slideToggle("100");
	$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
      </script>
<!-- Custom Script --> 
 
</body>
</html>
