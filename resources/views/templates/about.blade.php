<section class="py-3" id="about">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">{{$titres[5]->titre}}</h3>
        <div class="section-title-divider"></div>
        <p class="section-description"> {{$titres[5]->description}} </p>
      </div>
@foreach ($abouts as $aboutss)
    </div>
  </div>
  <div class="container py-3 about-container wow fadeInUp">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="{{$aboutss->img_about}}" alt="">
      </div>

      <div class="col-md-6 about-content">
        <h2 class="about-title">{{$aboutss->titre2}}</h2>
        <p class="about-text">{{$aboutss->description2}}
        </p>
        <p class="about-text">
          {{$aboutss->description2}}
        </p>
        <p class="about-text">
          {{$aboutss->description2}}
        </p>
      </div>
    </div>
  </div>
</section>
@endforeach
  