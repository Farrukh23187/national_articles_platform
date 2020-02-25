@extends('layouts.app') @section('content')

<!-- Jumbotron -->
<div
  class="card card-image"
  style="background-image: url({{asset('images/jumbotron.jpg')}}); background-repeat: no-repeat; width: 100% ">
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
        <a href="{{route('articles')}}" class="btn btn-primary " >Maqolalarni qidirish</a>
        </div>
      </div>
    </div>
  </div> 
<br>
 


</div>
<br>

<!-- Footer -->
@include('footer')
<!-- Footer -->
@endsection
