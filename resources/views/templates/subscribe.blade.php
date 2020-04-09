<!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    @foreach ($subscribes as $subscribe)
        
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">{{$subscribe->titre}}</h3>
          <p class="subscribe-text">{{$subscribe->description}}</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Subscribe Now</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </section>