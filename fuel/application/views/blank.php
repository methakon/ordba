  <!-- SINGLE POST
				============================================= -->
    <section id="single-post" class="wide-80 single-post-section division">
                  <div class="container"> 
        
        <!-- SINGLE POST CONTENT -->
        <div class="row">
                      <div class="col-lg-9">
            <div class="single-post-wrapper"> 
                          
                          <!-- SINGLE POST TITLE -->
                          <div class="single-post-title mb-35"> 
                
                <!-- Post Title -->
                <h3 class="h3-md"><?=(isset($content->title))?$content->title:"" ?></h3>
              </div>
                   <?=(isset($content->content))?htmlspecialchars_decode($this->fuel->parser->parse_string($content->content)):"" ?>        
                          
                         
              
            
                          <!-- END BLOG POST TEXT --> 
                          
                          <!-- SINGLE POST SHARE LINKS -->
                          <div class="row post-share-links d-flex align-items-center"> 
                
                
                
                
                <!-- POST SHARE ICONS -->
                <div class="col-md-3 col-xl-4 post-share-list text-right">
                              <ul class="share-social-icons text-center clearfix">
                    <li><a href="#" class="share-ico ico-facebook"> <i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#" class="share-ico ico-twitter"> <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="share-ico ico-like"> <i class="far fa-bookmark"></i></a></li>
                  </ul>
                            </div>
              </div>
                          <!-- END SINGLE POST SHARE --> 
                          
                          <!-- OTHER POSTS
									============================================= -->
                          <div class="other-posts">
                <div id="op-row" class="row d-flex align-items-center"> 
                              
                              <!-- Previous Post -->
                              <div class="col-md-4">
                    <div class="prev-post mb-30 pr-45">
                                  <h5 class="h5-xs"><i class="fas fa-arrow-left"></i></h5>
                                  <a href="<?=($content->previous != "")?base_url("contact_us/post/".$content->previous):"#"?>"><h6>Previous Post</h6></a> 
                                  </div>
                  </div>
                              
                              <!-- All Posts -->
                              <div class="col-md-4 text-center">
                    <div class="all-posts mb-30"> <a href="blog-listing.html"><i class="fas fa-th-large"></i></a>
                     </div>
                  </div>
                              
                              <!-- Next Post -->
                              <div class="col-md-4 text-right">
                    <div class="next-post mb-30 pl-45"> <a href="<?=($content->next != "")?base_url("contact_us/post/".$content->next):"#"?>">
                    <h6>Next Post </h6>
                    <i class="fas fa-arrow-right"></i></a> </div>
                  </div>
                            </div>
                <!-- End row --> 
              </div>
                          <!-- END OTHER POSTS --> 
                          
                        </div>
          </div>
                      <!-- END SINGLE POST CONTENT --> 
                      
                      <!-- SIDEBAR -->
                      <aside id="sidebar" class="col-lg-3"> 
            
            <!-- SEARCH FIELD -->
            <div id="search-field" class="sidebar-div mb-50">
              <?=form_open('contact_us',  array('id'=>'search_from')); ?>
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" name="key_val" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                            <div class="input-group-append">
                                <button class="btn" type="button" onclick="document.getElementById('search_from').submit();">
                                  <i class="fa fa-search" aria-hidden="true"></i>
                              </button>
                            </div>
                          </div>
               <?=form_close( );?> 
            </div>
            
            <!-- BLOG CATEGORIES -->
            <div class="blog-categories sidebar-div mb-50">
                          <h5>RDBMS</h5>
                           <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 5
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                          <h5 class="pad-t-15">Big Data</h5>
                        <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 6
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                          <h5 class="pad-t-15">Tutorials</h5>
                         <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 7
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                        </div>
          </aside>
                      <!-- END SIDEBAR --> 
                      
                    </div>
      </div>
                </section>
    <!-- END SINGLE POST --> 
    
    <!-- NEWS-2
				============================================= -->
    <section id="news-2" class="bg-whitesmoke wide-60 news-section division">
                  <div class="container"> 
        
        <!-- SECTION TITLE -->
        <div class="row">
                      <div class="col-md-12">
            <div class="section-title mb-60"> 
                          
                          <!-- Title 	-->
                          <h4 class="h4-sm">Related Posts:</h4>
                        </div>
          </div>
                    </div>
        
        <!-- NEWS GRID -->
        <?php if(isset($relateds)){ ?>
        <div class="row d-flex align-items-center"> 
                     <?php foreach ($relateds as $ind=>$related){ ?> 
                      <!-- ARTICLE #1 -->
                      <div class="col-md-6 col-lg-3">
            <div id="a2-<?=($ind+1)?>" class="article-2 b-right"> 
                          
                          <!-- Title -->
                          <h5 class="h5-sm"><a href="<?=base_url("contact_us/post/".$related->Slug)?>"> <?=$related->title?></a></h5>
                          
                          <!-- Text -->
                          <p><?=substr($related->content,0,100)?> </p>
                          
                          <!-- Post Author --> 
                          <span><?=$related->auther?></span> </div>
          </div>
                      <!-- END ARTICLE #1 --> 
                     <?php } ?>          
                      
                    </div>
        <?php } ?>
        <!-- END NEWS GRID --> 
        
      </div>
                  <!-- End container --> 
                </section>
    <!-- END NEWS-2 --> 
    