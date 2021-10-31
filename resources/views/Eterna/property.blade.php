

@extends('Eterna.layout')
@section('content')
<main id="main">

<div class="card fixed-topce"  id="topce">
@if(isset($query[0]->Villa) && isset($count[0]->numRev))
<div class="image">
<img id="slika" src="https://agnitravel.com/Pics/thumbs/{{$query[0]->Property_ID}}/{{$query[0]->Img1}}" alt="..." class="img-thumbnail img fluid">
</div>
<h1 style="display:inline-block;">   {{$query[0]->Villa}}, {{$query[0]->island}}, {{$query[0]->Country}}  </h1>
@if(isset($query[0]->source))
<h2>Source: {{ $query[0]->source }}</h2>
@endif
 <h2>Reviews: {{$count[0]->numRev}}</h2>
 <a class="visit" href="#"><button class="btn btn-outline-secondary">Visit This villa's website</button></a>
</div>


<div class="parent">

<div id="leftside">

<div class="container" style=" margin-left:8%; width:43rem;" id="dete1">
<div class="card" style="width: 43rem; height: 6rem; padding:2%; margin-bottom:2%; margin-top:4%;">
<h4><i class="bi bi-person-circle"></i> &emsp; <a href="/write">Write a review</a>
   &emsp; &emsp; &emsp;  <i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></h4>
</div>
</div>


<div class="container" style=" margin-left:8%; width:43rem;">
<div class="card" style="display:inline-block; width:43rem; height: 20rem; padding:2%; margin-bottom:2%; ">
<h2 class="card-title" style="padding: 1%;">Reviews:  {{$count[0]->numRev}}   </h2>
</div>
</div>






</div>

<div id="rightside">

<div id="dete2" class="container" style=" margin-left:2%; width:21rem; margin-top:0.9%;margin-right:12%; ">
<div class="card" style="width: 21rem;  padding:5%; margin-bottom:2%; margin-top:4%; ">
<h3>Business Transparency</h3>
<p>See how this company has been using Beach Review for the past 12 months</p>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>


</div>
</div>
</div>

@foreach($query as $q)
<div class="container" style=" margin-left:8%; width:43rem;">
<div class="card" style="width:43rem;">
<h5 class="card-title" style="padding: 3%;">
<div class="circle" style="display:inline-block"><span class="initials">
{{ substr($q->Name, 0,1)  }}{{ substr($q->Surname, 0,1)  }}
</span></div> &emsp;
{{$q->Name}} {{$q->Surname}} &emsp;&emsp;&emsp;&emsp; {{date('F d, Y', strtotime($q->reviewDate))}}  </h5>
<hr>
<div class="card-body">
<h6>Holiday rating: {{$q->holidayRating}}</h6>
<hr>
<h6>Recommend Property: {{$q->recommendProperty}}</h6>
<hr>
<h6>Cleaning rating: {{$q->cleaningRating}}</h6>
@if(($q->clientReview)!="<br>")
<hr>
<h4><b>Client Review:</b></h4>
<p>{!!$q->clientReview!!}</p>
@endif
<hr>
<i class="bi bi-hand-thumbs-up">&thinsp;Useful</i>&emsp;&emsp;&emsp;&emsp;<i class="bi bi-share">&thinsp;&thinsp;Share</i>
</div>
</div>
</div>
<br><br>
@endforeach










@else
<h1>This villa does not have reviews!</h1>
@endif
</main>
@endsection


