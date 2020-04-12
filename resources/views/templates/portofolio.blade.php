 <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        
        <div class="col-md-12">
          <h3 class="section-title">{{$titres[1]->titre}}</h3>
          <div class="section-title-divider"></div>
          <!-- <p class="section-description">{{$titres[1]->description}}</p> -->
        </div>
      </div>

      <div class="row">
        
        @foreach ($portofolios as $portofolio)
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url('{{$portofolio->img_porto}}');" href="">
            <div class="details">
              <h4>{{$portofolio->titre}}</h4>
              <span>{{$portofolio->description2}}</span>
            </div>
          </a>
          
        </div>
        @endforeach
      
      

        {{-- <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Portfolio 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Portfolio 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Portfolio 4</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Portfolio 5</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Portfolio 6</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Portfolio 7</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Portfolio 8</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div> --}}

      {{-- </div>
    </div> --}}
  </section>