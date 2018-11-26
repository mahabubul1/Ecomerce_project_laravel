@extends("fontEnd.masterContent")

@section("title", "blog")



@section("mainContent") 

<section class="blog_post">
    <div class="container"> 
      
      <!-- row -->
      <div class="row"> 
        
        <!-- Center colunm-->
        <div class="col-xs-12 col-sm-9" id="center_column">
          <div class="center_column">
            <div class="page-title">
              <h2>Blog post</h2>
            </div>
            <ul class="blog-posts">
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="{{url('single-post')}}">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img1.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img2.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img3.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img4.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img5.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img6.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb image-hover2"> <a href="single_post.html">
                        <figure><img src="{{asset('public/fontEnd/images/')}}/blog-img7.jpg" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="single_post.html">Aliquam Et Metus Pharetra, Bibendum Massa</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2015-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt">Donec Vitae Hendrerit Arcu, Sit Amet Faucibus Nisl. Cras Pretium Arcu Ex. Aenean Posuere Libero Eu Augue Condimentum Rhoncus.  Aenean Posuere Libero Eu Augue Condimentum Rhoncus.</div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
            </ul>
            <div class="sortPagiBar">
              <div class="pagination-area " style="visibility: visible;">
                <ul>
                  <li><a class="active" href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ./ Center colunm --> 



        <!-- Right colunm -->

          @include("fontEnd.blog.blogRightBar")


        
        <!-- ./right colunm --> 
      </div>
      <!-- ./row--> 
    </div>
  </section>
  <!-- Main Container End --> 
@endsection