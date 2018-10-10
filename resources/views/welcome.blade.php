@extends('layouts.master')

@section('content')

<div class="row">
   
    <div class="col-sm-6">
      <h4>Mobile Cupcake</h4>
      <div class="plyr__video-embed" id="player">
        <iframe src="https://player.vimeo.com/video/44332989?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>      
      </div>
    </div>

    <div class="col-sm-6">
      <h4>Our Clubcard</h4>
      <div class="plyr__video-embed" id="player">
          <iframe src="https://player.vimeo.com/video/41422121?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
      </div>
    </div>

</div>

 <div class="album py-5 bg-light" data-animation="fadeInUp">
    <div class="container">
      <div class="row"> 

        <div class="col-md-4">
            <a href="/products">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('/images/product.png')}}" alt="images">
                <div class="card-body" align="center" >
                  <h3>Products</h3>                  
                </div>
              </div>
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="/buys">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('/images/buys.png')}}" alt="buys" style="height: 69%; width: 75%">
                <div class="card-body" align="center" >
                  <h3>Buys</h3>  
                </div>                
              </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/brands">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('/images/brands.png')}}" alt="brands">
                <div class="card-body" align="center" >
                  <h3>Brands</h3> 
                </div>
              </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/clients">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('/images/clients.png')}}" alt="clients">
                <div class="card-body" align="center" >
                  <h3>Clients</h3> 
                </div>
              </div>
            </a>
        </div>

      </div>
    </div>
  </div>

    
@endsection