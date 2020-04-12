
<section id="services">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">{{$titres[0]->titre}}</h3>
        <div class="section-title-divider"></div>
        <p class="section-description">{{$titres[0]->description}} </p>
      </div>
    </div>

    <div class="row">
      @foreach ($servicess as $services)
      <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-desktop"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
      @endforeach


      {{-- <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
      <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
      <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-photo"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
      <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-road"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
      <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
        <h4 class="service-title"><a href="">{{$services->titre}}</a></h4>
        <p class="service-description">{{$services->description}}</p>
      </div>
    </div>
  </div> --}}
</section>

