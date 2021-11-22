


@extends('Eterna.layout')
@section('content')
<main id="main">

<div class="card start"  id="topce">
@if(isset($query[0]->Villa) && isset($count[0]->numRev))
<div class="image">
<!-- <img style="margin-left: 400px !important; margin-top: -280px !important;" id="slika" src="https://agnitravel.com/Pics/thumbs/{{$query[0]->Property_ID}}/{{$query[0]->Img1}}" alt="..." class="img-thumbnail img fluid"> -->
<!-- <a class="visit" href="#"><button class="btn btn-outline-secondary">Visit This villa's website</button></a> -->
</div>
<h1 class="toph1" style="display:inline-block;">   {{$query[0]->Villa}}, {{$query[0]->island}}, {{$query[0]->Country}}  </h1>
@if(isset($query[0]->source))
<h2 class="toph2">Source: {{ $query[0]->source }}</h2>
@endif
 <h2 class="toph2">Reviews: {{$count[0]->numRev}}</h2>
 
</div>


<div class=" row">
<div class=" col-md-12 col-lg-12 col-xl-7">
<div class="container" style="  width:42rem;" id="dete1">
<div class="card" style="width: 42rem; height: 5rem; padding-top:3%; padding-left:3%;  margin-top:4%;">
<h4><i class="bi bi-person-circle"></i> &emsp; <a class="write" href="/write">Write a review</a>
   &emsp; &emsp; &emsp;  <i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></h4>
</div>
</div>




<div class="container" style="  width:42rem;">
<div class="card" style="display:inline-block; width:42rem; height: 20rem; padding:2%; margin-top:2%; margin-bottom:2%;" >
<h2 class="card-title" style="padding: 1%;">Reviews:  {{$count[0]->numRev}}   </h2>
</div>
</div>



@foreach($query as $q)
<div class="container" style=" width:42rem;">
<div class="card" style="width:42rem;">
<h5 class="card-title" style="padding: 3%;">
<div class="circle" style="display:inline-block"><span class="initials">
{{ substr($q->Name, 0,1)  }}{{ substr($q->Surname, 0,1)  }}
</span></div> &emsp;
<span style="font-size:1.7rem;">{{$q->Name}} {{$q->Surname}}</span> <span style="font-size:1.3rem; float:right;">{{date('F d, Y', strtotime($q->reviewDate))}}</span>  </h5>
<hr>
<div class="card-body">
<h3>Holiday rating: {{$q->holidayRating}}</h3>
<hr>
<h3>Recommend Property: {{$q->recommendProperty}}</h3>
<hr>
<h3>Cleaning rating: {{$q->cleaningRating}}</h3>
@if(($q->clientReview)!="<br>")
<hr>
<h3><b>Client Review:</b></h3>
<p style="font-size:1.3rem;">{!!$q->clientReview!!}</p>
@endif
<hr>
<i class="bi bi-hand-thumbs-up">&thinsp;Useful</i>&emsp;&emsp;&emsp;&emsp;<i class="bi bi-share">&thinsp;&thinsp;Share</i>
</div>
</div>
</div>
<br><br>
@endforeach
</div>
<div class=" col-md-12 col-lg-12 col-xl-5">
<div  class="container" >
<div class="card rightSide" style="width: 21rem;  padding:5%; margin-bottom:2%; margin-top:3%; ">
<h3>Business Transparency</h3>
<p>See how this company has been using Beach Review for the past 12 months</p>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>

<div  class="container" >
<div class="card rightSide" style="width: 21rem;  padding:5%; margin-bottom:2%; margin-top:4%; ">
<h3>About This company</h3>
<p>See how this company has been using Beach Review for the past 12 months</p>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>

<div  class="container" >
<div class="card rightSide" style="width: 21rem;  padding:5%; margin-bottom:2%; margin-top:4%; ">
<h3>About Beach Review</h3>
<p>See how this company has been using Beach Review for the past 12 months</p>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>
</div>
</div>
</div>













@else
<h1>This villa does not have reviews!</h1>
@endif
</main>
@endsection


