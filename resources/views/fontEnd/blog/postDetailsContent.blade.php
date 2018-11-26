@extends("fontEnd.masterContent")

@section("title", "posts-details")

@section("mainContent")
<!-- Main Container -->
  <section class="blog_post">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="entry-detail">
            <div class="page-title">
              <h1>Sed ut perspiciatis unde omnis iste natus error</h1>
            </div>
            <div class="entry-photo">
              <figure><img src="{{asset('public/fontEnd/images/')}}/blog-lg-img.jpg" alt="Blog"></figure>
            </div>
            <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar">&nbsp;</i>&nbsp; 2015-08-05</span>
              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
            </div>
            <div class="content-text clearfix">
              <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>
              <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
              <blockquote> Lorem ipsum dolor sit amet, verenam operibus furiam conclusoque sponte profundo. Conservus mihi esse haec aliquam inlido laetare quod eam ad per. Antiochia videns quia quod non ait est Apollonius non dum animae tertio eam ad te princeps ea docentur Hellenicus ut diem finito convocatis secessit civitatis civium takimata. Parem luctu gubernatori usque vero rex Dionysiadi me missam ne alicuius altum pervenit est amet amet Cur meae. </blockquote>
              <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. </p>
              <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
              <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>
            </div>
            <div class="entry-tags"> <span>Tags:</span> <a href="#">beauty,</a> <a href="#">medicine,</a> <a href="#">health</a> </div>
          </div>
          <!-- Related Posts -->
          <div class="single-box">
            <h2>Related Posts</h2>
            <div class="slider-items-products">
              <div id="related-posts" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img2.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">Qui ut ceteros comprehensam</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 1 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-05 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img3.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 5 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-15 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img4.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">Lorem ipsum dolor</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 6 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-11 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img5.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 10 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-05 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img6.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">Iste natus error</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 0 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2015-12-25 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img7.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">omnis iste natus</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 8 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-09 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="#"> <img src="{{asset('public/fontEnd/images/')}}/blog-img1.jpg" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="#">unde omnis iste</a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 2 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> 2016-01-02 </span> </div>
                        <div class="entry-more"> <a href="#">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Related Posts --> 
          <!-- Comment -->
          <div class="single-box">
            <h2 class="">Comments</h2>
            <div class="comment-list">
              <ul>
                <li>
                  <div class="avartar"> <img src="{{asset('public/fontEnd/images/')}}/avatar.png" alt="Avatar"> </div>
                  <div class="comment-body">
                    <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                    <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                  </div>
                </li>
                <li>
                  <ul>
                    <li>
                      <div class="avartar"> <img src="{{asset('public/fontEnd/images/')}}/avatar.png" alt="Avatar"> </div>
                      <div class="comment-body">
                        <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                        <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                      </div>
                    </li>
                    <li>
                      <div class="avartar"> <img src="{{asset('public/fontEnd/images/')}}/avatar.png" alt="Avatar"> </div>
                      <div class="comment-body">
                        <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                        <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="avartar"> <img src="{{asset('public/fontEnd/images/')}}/avatar.png" alt="Avatar"> </div>
                  <div class="comment-body">
                    <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                    <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                  </div>
                </li>
                <li>
                  <div class="avartar"> <img src="{{asset('public/fontEnd/images/')}}/avatar.png" alt="Avatar"> </div>
                  <div class="comment-body">
                    <div class="comment-meta"> <span class="author"><a href="#">Admin</a></span> <span class="date">2015-04-01</span> </div>
                    <div class="comment"> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="single-box comment-box">
            <h2>Leave a Comment</h2>
            <div class="coment-form">
              <p>Make sure you enter the () required information where indicated. HTML code is not allowed.</p>
              <div class="row">
                <div class="col-sm-6">
                  <label for="name">Name</label>
                  <input id="name" type="text" class="form-control">
                </div>
                <div class="col-sm-6">
                  <label for="email">Email</label>
                  <input id="email" type="text" class="form-control">
                </div>
                <div class="col-sm-12">
                  <label for="website">Website URL</label>
                  <input id="website" type="text" class="form-control">
                </div>
                <div class="col-sm-12">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                </div>
              </div>
              <button class="button"><span>Post Comment</span></button>
            </div>
          </div>
          <!-- ./Comment --> 
        </div>
        <!-- right colunm -->

         @include("fontEnd.blog.blogRightBar")
        
        <!-- ./right colunm --> 
      </div>
    </div>
  </section>
  <!-- Main Container End --> 

@endsection