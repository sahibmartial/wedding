@extends('base2')
@section('title')
<title>Prestations-T_MAYA</title>
@stop

@section('content')
<h1 class="text-center mt-3">Nos Prestations-TEAM MAYA</h1>
<div class="row">
	<div class="col-md-4 mb-4">
		<div class="card" style="width: 18rem;">

         <img src="{{ asset('assets/img/logomaya.jpg')}}" class="card-img-top" alt="logo">

           <div class="card-body">	
           	<h5 class="card-title">MAYA-</h5>
			<h6 class="card-subtitle mb-2 text-muted">Digital</h6>
              <p class="card-text">
              	Nous offrons des prestations digitales en fonction de vos besoins et de votre secteur d'activités.<br>
                Avec  nous, la data plus qu'un outil decisionnel et de marketing mais un outil d'optimisant  pour booster votre actvité. </p>
                <a href="{{route('contact_Maya')}}">Nous joindre</a>
            </div>
       </div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">

         <img src="{{asset('assets/img/logomaya.jpg')}}" class="card-img-top" alt="decoration">

           <div class="card-body">
           	<h5 class="card-title">MAYA-</h5>
			<h6 class="card-subtitle mb-2 text-muted">Events</h6>
              <p class="card-text">Nous offrons une prestation dans la décoration et l'organisation de vos évènements.<br>
              	Un service de professionnel à votre ecoute.<br></p>
              	<a href="{{route('contact_Maya')}}">Nous joindre</a>
            </div>
       </div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{asset('assets/img/logomaya.jpg')}}" class="card-img-top" alt="decoration">
			<div class="card-body">
				<h5 class="card-title">MAYA-</h5>
				<h6 class="card-subtitle mb-2 text-muted">Tourisme</h6>
				<p class="card-text">Bientot Disponible</p>
				<a href="{{route('contact_Maya')}}" class="card-link">Nous joindre</a>
				
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{asset('assets/img/logomaya.jpg')}}" class="card-img-top" alt="decoration">
			<div class="card-body">
				<h5 class="card-title">MAYA-</h5>
				<h6 class="card-subtitle mb-2 text-muted">Foods</h6>
				<p class="card-text">
				Nous proposons des sirops de gimgembre, bissap etc..<br>
				Vous aurez une degustation lors du mariage du duo parfait le 13 mars 2021, merci.
			    </p>
				<a href="{{route('contact_Maya')}}" class="card-link">Nous joindre</a>
				
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{asset('assets/img/logomaya.jpg')}}" class="card-img" alt="decoration">
			<img src="{{asset('assets/img/couture1.png')}}" class="card-img-top" alt="decoration">
			<div class="card-body">
				<h5 class="card-title">MAYA-</h5>
				<h6 class="card-subtitle mb-2 text-muted">Couture</h6>
				<p class="card-text">
				Nous réalisons des tenues pour femmes et hommes, ainsi des sets de tables.<br>
			    Bientot notre page Web pour vous presentez tous nos produits .<br>
				
			    </p>
				<a href="{{route('contact_Maya')}}" class="card-link">Nous joindre</a>
				
			</div>
		</div>
	</div>
</div>

@stop