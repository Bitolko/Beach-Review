@extends('Eterna.layout')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <!-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(Eterna/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Beach Review</span></h2>
                <p class="animate__animated animate__fadeInUp">Behind every review lies an experience. We can help you learn from other experiences, but also share your own</p>
                <div class="col-md-4 mb-3">
                    <div class="container">
<div class=" offset-11 input-group md-form form-sm form-2 pl-0">
    <form action="/index" method="POST">
    @csrf
    <div class="input-group mb-3">
  <input type="text" class="form-control" name="name" placeholder="Villa,Country,Region" id="search">
  <button class="btn btn-outline-secondary" type="submit" >Search</button>
</div>
</form>
<div class="container">
    <div class="wrapper">
<ul class="list-group" id="list"></ul>
</div>
</div>
</div>
</div>
</div>
</div>
              </div>
            </div>
          </div>



          <!-- Slide 2 -->
          <!-- <div class="carousel-item" style="background: url(Eterna/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Ipsum Dolor</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>

              </div>
            </div>
          </div> -->

          <!-- Slide 3 -->
          <!-- <div class="carousel-item" style="background: url(Eterna/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Dime Lara</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              </div>
            </div>
          </div> -->

        </div>
<!--
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a> -->

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
          <h2 >Explore Categories</h2>

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
            <i class="bi bi-bookmark"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">Dolor Sitema</a></h3>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">Sed ut perspiciatis</a></h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>
      </div>
<br>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
            <i class="bi bi-house"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
            <i class="bi bi-bank"></i>
              <h3><a href="">Dolor Sitema</a></h3>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
            <i class="bi bi-star-fill"></i>
              <h3><a href="">Sed ut perspiciatis</a></h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

            <h2 class="text-center">Recent Reviews</h2>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>

                </div>
              <h4><a href="">Review 1</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
              <h4><a href="">Review 2</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star-fill"></i></i></div>
              <h4><a href="">Review 3</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star"></i></div>
              <h4><a href="">Review 4</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star"></i></div>
              <h4><a href="">Review 5</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-star"></i></div>
              <h4><a href="">Review 6</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="Eterna/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>About Beach Review</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="Eterna/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="Eterna/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>End Clients Section -->

    <script>

        const people = <?php echo json_encode($search); ?>;

        const list = document.getElementById('list');

        function setList(group){
        clearList();
        for(let i =0;i<group.length;i++){
        // for(const person of group){
            if(i==6)
            break;
        const item = document.createElement('h6');
        item.classList.add('list-group-item');
        const text = document.createTextNode(group[i].name);
        var createA = document.createElement('a');
        createA.setAttribute('href', "http://127.0.0.1:8000/index/"+group[i].name);



        item.appendChild(text);
        // item.appendChild(createA);
        createA.appendChild(item);
        // list.appendChild(item);
        list.appendChild(createA);
        }
        if(group.length===0){
        // if(group.length===0){
        setNoResults();
        }
        }

        function clearList(){
        while(list.firstChild){
        list.removeChild(list.firstChild);
        }

        }


        function setNoResults(){
        const item = document.createElement('h6');
        item.classList.add('list-group-item');
        item.classList.add('suggest');
        const text = document.createTextNode('No results found!');
        item.appendChild(text);
        list.appendChild(item);
        }

        function getRelevancy(value,searchTerm){
        if(value===searchTerm){
        return 2;
        } else if(value.startsWith(searchTerm)){
        return 1;
        } else{
        return 0;
        }

        }

        const searchInput = document.getElementById('search');



        searchInput.addEventListener('input',(event)=>{

        let value = event.target.value;
        if(value && value.trim().length>0){
        value=value.trim().toLowerCase();
        setList(people.filter(person => {
            return person.name.toLowerCase().includes(value);
        }).sort((personA,personB)=>{
            return getRelevancy(personB.name,value) - getRelevancy(personA.name,value);
        }));
        } else {
        clearList();
        }
        });


        // let transfer = document.getElementsByClassName('list-group-item');

        // transfer.addEventListener('click' function(){
        // // // //     searchInput.innerHTML="HELLO";
        // // // console.log("CLICKED");
        // // console.log(transfer.text());
        // console.log("2");
        //  });

</script>


  </main><!-- End #main -->
@endsection
