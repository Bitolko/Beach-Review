@extends('Eterna.layout')

@section('content')





    <main id="main">

     <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">


        <div class="container">
        <ol>
        <li><a href="index.html">Categories</a></li>
        <li><a href="blog.html">Selected Category</a></li>
        </ol>
        <br><br>
        </div>
        </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Single Section ======= -->
            <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-lg-8 entries">
            <article class="entry entry-single">




<h1>Search results for: "{{ $a }}"</h1><br>

            @foreach($test as $t)

<ul class="list-group redi">

<li class="list-group-item"><a href="/property/{{$t->Property_ID}}"><h1 class="rev villa-name">Villa: {{$t->Villa}}</h1></a></li>
<li class="list-group-item"><h2 class="rev">Island: {{$t->island}}</h2></li>
<li class="list-group-item"><h2 class="rev">Country: {{$t->Country}}</h2></li>
<li class="list-group-item"><h4 class="rev"><div style="display:inline-block;" class="circle"><span class="initials">{{ substr($t->Name, 0,1)  }}{{ substr($t->Surname, 0,1)  }}
     </span></div>&emsp; Reviewer: {{$t->Name}} {{$t->Surname}}</h4></li>
<li class="list-group-item"><h5 class="rev">Review: {!!$t->clientReview!!}</h5></li>
<li class="list-group-item"><p class="rev">Rating: {{$t->holidayRating}}</p></li>

</ul>
<br><br>
            @endforeach

            <h1 id="text-to-search">{{ $a }}</h1>
            <h3>Reviews # : Score</h3>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <span>5.0</span> </article>

            <article class="entry entry-single">
            <i class="bi bi-person-circle" style='font-size:50px;'></i><span>&emsp; Write a review &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
            <i class="bi bi-star" style='font-size:50px;'></i> <i class="bi bi-star" style='font-size:50px;'></i> <i class="bi bi-star" style='font-size:50px;'></i> <i class="bi bi-star" style='font-size:50px;'></i> <i class="bi bi-star" style='font-size:50px;'></i>
            </article>

            <article class="entry entry-single">
              <h2 class="entry-title">
              Reviews <span>183</span>
              </h2>
              <hr>

              <div class="container mt-5">
                <div class="card">
                  <div class="row no-gutters">
                 <div class="col-md-4 border-right">
                   <div class="ratings text-center p-4 py-5"> <span class="badge bg-success">4.1 <i class="fa fa-star-o"></i></span> <span class="d-block about-rating">VERY GOOD</span> <span class="d-block total-ratings">183 ratings</span> </div>
                          </div>
                         <div class="col-md-8">
                           <div class="rating-progress-bars p-3">
                           <div class="progress-1 align-items-center">
                            <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> 71% </div>
                              </div>
                               <div class="progress">
                            <div class="progress-bar bg-custom" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                           </div>
                           <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 48%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">48%</div>
                          </div>
                              <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                        </div>
                    </div>
                </div>
                     </div>
                    </div>
                  </div>
                </div>
                <br>
                    <div class="container justify-content-center">
                         <div class="row">
                      <div class="col-md-8">
                      <div class="input-group mb-3"> <input type="text" class="form-control input-text" placeholder="Search reviews" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append"> <button class="btn btn-outline-warning btn-lg" type="button"><i class="bi bi-search"></i></button> </div>
                      </div>
                     </div>
                     </div>
                    </div>




              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
                         </div>

                        </article><!-- End blog entry -->

                     <div class="blog-author d-flex align-items-center">
                          <img src="Eterna/img/blog/male.png" class="rounded-circle float-left" alt="">
                      <div>
                      <h4>John Doe</h4> <div class="social-links"> <a href="#"><i class="bi bi-pen"></i> 1 Review</a><hr> </div> <h1>Stars</h1>
                   <h3>Fantastic service!</h3>
                      <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                      </p>
                  </div>
                 </div><!-- End blog author bio -->

                        <div class="blog-author d-flex align-items-center">
                         <img src="Eterna/img/blog/female.png" class="rounded-circle float-left" alt="">
                    <div>
                     <h4>Jane Smith</h4>
                     <div class="social-links">
                         <a href="#"><i class="bi bi-pen"></i> 1 Review</a><hr>
                     </div>
                      <h1>Stars</h1>
                      <h3>Fantastic service!</h3>
                     <p>
                       Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                      </p>
                    </div>
                      </div><!-- End blog author bio -->


                                         <div class="blog-author d-flex align-items-center">
                              <img src="Eterna/img/blog/male.png" class="rounded-circle float-left" alt="">
                             <div>
                              <h4>John Doe</h4> <div class="social-links">
                                    <a href="#"><i class="bi bi-pen"></i> 1 Review</a><hr>
                                             </div>
                                                <h1>Stars</h1>
                                     <h3>Fantastic service!</h3>
                                     <p>
                                   Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                                  </p>
                                  </div>
                                </div><!-- End blog author bio -->



                            <div class="blog-author d-flex align-items-center">
                         <img src="Eterna/img/blog/female.png" class="rounded-circle float-left" alt="">
                        <div>
                         <h4>Jane Smith</h4>
                         <div class="social-links">
                           <a href="#"><i class="bi bi-pen"></i> 1 Review</a><hr>
                             </div>
                        <h1>Stars</h1>
                         <h3>Fantastic service!</h3>
                         <p>
                              Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                            </p>
                        <hr>
                                <!-- <i class="bi bi-hand-thumbs-up">&emsp;&emsp;<i class="bi bi-share"></i> -->
                         </div>
                             </div><!-- End blog author bio -->


                         <!-- <div class="col-lg-4"> -->
                      <div class="col-lg-4">
                     <div class="sidebar">
                              <h3 class="sidebar-title">Business Transparency</h3>
                             <h6>Claimed their profile on:</h6>
                     <h6>Additional verified company details</h6>
                    <hr>
                     <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>
                         <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>
                     <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>
                         <button class="btn btn-primary">See a detailed overview</button>
                        </div>


                     <div class="sidebar">
                     <h3 class="sidebar-title">About the selected company</h3>
                     <h6>Information written by the company</h6>
                     <hr>
                     <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>
                       <br>
                       <h3 class="sidebar-title">Contact</h3>
                      <h6>info</h6>
                       <br>
                      <h3 class="sidebar-title">Category</h3>
                     <h6>info</h6>


                  <div class="sidebar">
                     <h3 class="sidebar-title">About our company</h3>
                          <h6>Information about our company</h6>
                   <hr>
                     <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p><br>





               </div><!-- End sidebar -->
           </div><!-- End blog sidebar -->
            </div>
         </div>
        </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <script>
      $(document).ready(function(){
        let text = $("#text-to-search").text();
        $('.rev').each(function(i,obj){
            if($(this).text().match(text)){
                let splitStr= $(this).text().split(text);
                let a=[];
               $(this).html(text.replace(text, function(){
                for (let i = 0; i < splitStr.length; ++i) {
                    if(i<splitStr.length-1){
                    a=a+ splitStr[i]+ "<b style='color:green'>" + text + "</b>";
                    }
                    else if(i==splitStr.length-1)
                    a=a+ splitStr[i]
                                }
                                return a;
                        }));
            }
        });


        // $('.redi').each(function(i,obj){
        //     $(obj).on('click', function(){

        //         a=$(obj).text();
        //         alert(a);
        //         $(location).attr('href','http://127.0.0.1:8000/review-details');


        //     });
        // });


      });

  </script>




    @endsection
