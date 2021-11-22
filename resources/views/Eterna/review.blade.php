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


            <span>
              {{$test}}
            </span>

            <h1 id="text-to-search">{{ $a }}</h1>
            <h3>Reviews # : Score</h3>
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            <span>5.0</span> </article>

          

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
                  




                        </article><!-- End blog entry -->
    
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
