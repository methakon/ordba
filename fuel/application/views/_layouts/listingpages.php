<?php 
$this->load->view('_blocks/header'); ?>
 
   <div class="inner-page-wrapper"> 
    <!-- BREADCRUMB
				============================================= -->
    <div id="breadcrumb" class="division">
      <div class="container">
        <div class="row"> 
          
          <!-- BREADCRUMB NAV -->
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">RDBMS</li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- End row --> 
      </div>
      <!-- End container --> 
    </div>
    <!-- END BREADCRUMB --> 
    
    <!-- NEWS-3
				============================================= -->
    <section id="news-3" class="mt-40 news-section division">
      <div class="container">
        <div class="row"> 
          
           <!-- SIDEBAR -->
          <aside id="sidebar" class="col-lg-4 b-right bg-whitesmoke"> 
            
            <!-- SEARCH FIELD -->
        <div id="search-field" class="sidebar-div mb-50">
                          <div class="input-group mb-3">
                              <input id="search_on"   type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                <div class="input-group-append">
                              <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
              </div>
                        </div>
            
            <!-- BLOG CATEGORIES -->
            
            <div class="categories-menu">
              <div class="card">
                <div class="card-head">
                  <h3 class="mb-0 pt-1 pb-1">Categories</h3>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="sub-menu list-group-item"> <a href="#settings">RDBMS
                    <div class="fa fa-chevron-down float-right"></div>
                    </a>
                     <?=fuel_nav(array( 
		  					'render_type' => 'basic'
							,'group_id' => 5
							,'container_tag_class' => 'blog-category-list clearfix'
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
							))?>
                  </li>
                  <li class="sub-menu list-group-item"> <a href="#settings">NoSQL
                    <div class="fa fa-chevron-down float-right"></div>
                    </a>
                    <ul>
                      <li><i class="fa fa-chevron-right float-left"></i><a href="#settings">CouchBase</a></li>
                      <li><i class="fa fa-chevron-right float-left"></i><a href="#settings">Cassandra</a></li>
                    </ul>
                  </li>
                  <li class="sub-menu list-group-item"> <a href="#settings">Tutorials
                    <div class="fa fa-chevron-down float-right"></div>
                    </a>
                    <ul>
                      <li><i class="fa fa-chevron-right float-left"></i> <a href="#settings">PL/SQL Tutorials</a></li>
                      <li><i class="fa fa-chevron-right float-left"></i> <a href="#settings">RMAN Tutorials</a></li>
                    </ul>
                  </li>
                  <li class="sub-menu list-group-item"> <a href="#settings">OS
                    <div class="fa fa-chevron-down float-right"></div>
                    </a>
                    <ul>
                      <li><i class="fa fa-chevron-right float-left"></i> <a href="#settings">windows</a></li>
                      <li><i class="fa fa-chevron-right float-left"></i> <a href="#settings">ios</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
			  
			  
			  
<div class="row"> 
  
  <!-- SECTION TITLE -->
    <div class="col-md-12">
      <div class="mt-40 mb-20"> 
        
        <!-- Title 	-->
        <h4 class="h4-sm">Related Posts:</h4>
      </div>
  
  <!-- NEWS GRID -->
  <div class="align-items-center"> 
	   
    <!-- ARTICLE #1 -->
      <div id="a2-1" class="article-2"> 
        
        <!-- Title -->
        <h5 class="h5-sm"><a href="single-post.html"> Integer congue magna at pretium purus pretium</a></h5>
        
        <!-- Text -->
        <p>An enim nullam tempor sapien gravida donec
          enim blandit ipsum porta justo integer odio velna 
          vitae auctor integer </p>
        
        <!-- Post Author --> 
        <span><a href="#">Readmore</a></span> 
		</div>
	 <!-- END ARTICLE #1 --> 

	 <!-- ARTICLE #2 -->
      <div id="a2-2" class="article-2"> 
        
        <!-- Title -->
        <h5 class="h5-sm"><a href="single-post.html">
			Integer congue magna at pretium purus pretium</a></h5>
        
        <!-- Text -->
        <p>An enim nullam tempor sapien gravida donec
          enim blandit ipsum porta justo integer odio velna 
          vitae auctor integer </p>
        
        <!-- Post Author --> 
        <span><a href="#">Readmore</a></span> 
		</div>
	 <!-- END ARTICLE #2 -->  
	  
	  
	   <!-- ARTICLE #3 -->
      <div id="a2-2" class="article-2"> 
        
        <!-- Title -->
        <h5 class="h5-sm"><a href="single-post.html">
			Integer congue magna at pretium purus pretium</a></h5>
        
        <!-- Text -->
        <p>An enim nullam tempor sapien gravida donec
          enim blandit ipsum porta justo integer odio velna 
          vitae auctor integer </p>
        
        <!-- Post Author --> 
        <span><a href="#">Readmore</a></span> 
		</div>
	 <!-- END ARTICLE #3 --> 
	  
	  
	   <!-- ARTICLE #4 -->
      <div id="a2-2" class="article-2"> 
        
        <!-- Title -->
        <h5 class="h5-sm"><a href="single-post.html">
			Integer congue magna at pretium purus pretium</a></h5>
        
        <!-- Text -->
        <p>An enim nullam tempor sapien gravida donec
          enim blandit ipsum porta justo integer odio velna 
          vitae auctor integer </p>
        
        <!-- Post Author --> 
        <span><a href="#">Readmore</a></span> 
		</div>
	 <!-- END ARTICLE #4 --> 
	  
	  
	   <!-- ARTICLE #5 -->
      <div id="a2-2" class="article-2"> 
        
        <!-- Title -->
        <h5 class="h5-sm"><a href="single-post.html">
			Integer congue magna at pretium purus pretium</a></h5>
        
        <!-- Text -->
        <p>An enim nullam tempor sapien gravida donec
          enim blandit ipsum porta justo integer odio velna 
          vitae auctor integer </p>
        
        <!-- Post Author --> 
        <span><a href="#">Readmore</a></span> 
		</div>
	 <!-- END ARTICLE #5 --> 
	  
  <!-- END NEWS GRID --> 
</div>  			  
    </div>
			  
			  
          </aside>
          <!-- END SIDEBAR -->
          
          <!-- BLOG POSTS HOLDER -->
          <div class="col-lg-8">
            <div class="posts-holder pr-25"> 
              
              <!-- ARTICLE #1 -->
              <div class="article-3 row d-flex align-items-center b-bottom"> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="images/blog/article-3.jpg" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                  
                  <!-- Title -->
                  <h4 class="h4-sm"> <a href="single-post.html">PL/SQL Tutorials - DYNAMIC SQL</a> </h4>
                  
                  <!-- Text -->
                  <p>Vitae auctor integer a congue magna undo pretium at purus
                    pretium ligula a rutrum luctus
                    risus and ultrice blandit justo and purus ipsum neque 
                    dolor primis libero tempus, tempor 
                    posuere ligula... </p>
                </div>
              </div>
              <!-- END ARTICLE #1 --> 
              
              <!-- ARTICLE #2 -->
              <div class="article-3 row d-flex align-items-center b-bottom"> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="images/blog/article-5.jpg" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                  
                  <!-- Title -->
                  <h4 class="h4-sm"> <a href="single-post.html">Save the Source Code and Table and Index</a> </h4>
                  
                  <!-- Text -->
                  <p>Integer a congue magna undo pretium at purus pretium
                    ligula and rutrum luctus risus and 
                    ultrice blandit justo purus ipsum neque dolor primis
                    libero tempus, tempor posuere 
                    ligula varius impedit... </p>
                </div>
              </div>
              <!-- END ARTICLE #2 --> 
              
              <!-- ARTICLE #3 -->
              <div class="article-3 row d-flex align-items-center b-bottom"> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="images/blog/article-8.jpg" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                  
                  <!-- Title -->
                  <h4 class="h4-sm"> <a href="single-post.html">12 dolor primis libero 
                    tempus ligula at varius magna porta a pretium</a> </h4>
                  
                  <!-- Text -->
                  <p>Vitae auctor integer a congue magna undo pretium at
                    purus pretium ligula a rutrum luctus
                    risus and ultrice blandit justo purus ipsum... </p>
                </div>
              </div>
              <!-- END ARTICLE #3 --> 
              
              <!-- ARTICLE #4 -->
              <div class="article-3 row d-flex align-items-center b-bottom"> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="images/blog/article-2.jpg" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                  
                  <!-- Title -->
                  <h4 class="h4-sm"> <a href="single-post.html">Ultrice eTreeks justo purus
                    ipsum igula varius magna porta a pretium</a> </h4>
                  
                  <!-- Text -->
                  <p>Pretium at purus pretium ligula and rutrum luctus risus undo
                    ultrice blandit justo purus
                    ipsum neque dolor primis libero tempus... </p>
                </div>
              </div>
              <!-- END ARTICLE #4 --> 
              
				
				<!-- ARTICLE #4 -->
              <div class="article-3 row d-flex align-items-center"> 
                <!-- Article Preview -->
                <div class="col-md-4"> <img class="img-fluid" src="images/blog/article-2.jpg" alt="article-preview"> </div>
                
                <!-- Article Text -->
                <div class="col-md-8"> 
                  
                  <!-- Title -->
                  <h4 class="h4-sm"> <a href="single-post.html">Ultrice eTreeks justo purus
                    ipsum igula varius magna porta a pretium</a> </h4>
                  
                  <!-- Text -->
                  <p>Pretium at purus pretium ligula and rutrum luctus risus undo
                    ultrice blandit justo purus
                    ipsum neque dolor primis libero tempus... </p>
                </div>
              </div>
              <!-- END ARTICLE #4 --> 
				
				
            </div>
			  
			  
			   <!-- PAGE PAGINATION
				============================================= -->
    <div class="page-pagination division">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link" href="#">2</a> </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#"> <i class="fas fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- End row --> 
      </div>
      <!-- End container --> 
    </div>
    <!-- END PAGE PAGINATION -->  
			  
			  
          </div>
          <!-- END BLOG POSTS HOLDER --> 
          
        </div>
        <!-- End row --> 
      </div>
      <!-- End container --> 
    </section>
    <!-- END NEWS-3 --> 

<?php $this->load->view('_blocks/footer'); ?>