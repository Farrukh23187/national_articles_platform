@extends('layouts.app') @section('content')

<!-- Jumbotron -->
<div
  class="card card-image"
  style="background-image: url(https://ru.tokkoro.com/picsup/3359863-sony-mobile-xperia-books-television-mobile-phone.jpg); background-repeat: no-repeat; width: 100% ">
  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
    <div class="py-5">
      <!-- Content -->
      <h5 class="h5 orange-text">
        <i class="fas fa-book"></i>
        Scopus.com.uz
      </h5>
      <h2 class="card-title h2 my-4 py-2">Ilmiy maqolalar va konferensiyalar milliy tizimiga xush kelibsiz!</h2>
      <p class="mb-4 pb-2 px-md-5 mx-md-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati vero aliquid libero doloribus ad,
        unde tempora maiores, ullam, modi qui quidem minima debitis perferendis vitae cumque et quo impedit.
      </p>
      <a class="btn peach-gradient" href="{{route('articles')}}">
        <i class="fas fa-clone left"></i>
        Maqolalar
      </a>
    </div>
  </div>
</div>
<!-- Jumbotron -->
<br />

<div class="container-fluid" style="width: 100%">
  <div class="row">
    <div class="col-md-4">
      <!-- Card -->
      <div class="card">
        <!-- Card image -->


        <!-- Card content -->
        <div class="card-body">
          <!-- Title -->
          <h4 class="card-title">Saytga rusxatni tekshirish</h4>
          <!-- Text -->
          <p class="card-text">
            Tizimga ruxsatni tekshirish orqali siz pullik maqolalardan foydalana olish yoki olmasligingizni tekshirishingiz mumkin
          </p>
          <!-- Button -->
          <a href="#" class="btn btn-primary">Tizimga ruxsatni tekshirish</a>
        </div>
      </div>
      <!-- Card -->
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <img style="float: right" src="{{asset('images/skreen.png')}}" alt="Cinque Terre" width="200" height="150">
          <h4 class="card-title">
          Maqolalarni qidirish
        </h4>
          <p class="card-text">Maqolalarni qidirishda ularni muallifi, kategoriyasi, kalit so'zlari orqali qidirish imkoniyati mavjud.</p>
        <a href="#" class="btn btn-primary " >Maqolalarni qidirish</a>
        </div>
      </div>
    </div>
  </div> 
<br>
 


</div>
<br>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #00b5e9;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; <?=date('Y')?> Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Scopus.com.uz</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@endsection