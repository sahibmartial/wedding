@extends('base2')
@section('title')
<title>ADJAH-ALIX_MARTIAL</title>
@stop

@section('content')
<div class="alert alert-info" role="alert">
 <h1 class="text-center mt-3"> <small>Wedding Invitation</small>-Martial&Alix</h1>
</div>
 
@if (Session::has('success'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('success') }}</p>

            </div>

@endif

<hr>
<form method="POST" action="{{route('addinvite')}}">
	{{ csrf_field() }}
	<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            {{ Form::label('Nom', 'Nom:') }} 
            <input type="text" name="nom" placeholder="Entrez nom"
                           @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                           @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Prenom', 'Prenom:') }} 
           
            <input type="text" name="pnom" placeholder="Entrez prenom"
                           @error('pnom') is-invalid @enderror" name="pnom" value="{{ old('pnom') }}" required autocomplete="pnom" autofocus>
                           @error('pnom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
             {{ Form::label('Email', 'Email:') }} 
           
            <input type="email" name="email" placeholder="Entrez email"
                           @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="form-group col-md-4">
            {{ Form::label('Contact', 'Contact:') }} 
           
            <input type="texte" name="contact" placeholder="Entrez Contact"
                           @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                           @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
           {{ Form::label('Lien', 'Lien:') }}      
            @php
           echo  Form::select('lien', array('Parent_Martial' => 'Parent_Martial','Parent_Alix'=>'Parent_Alix', 'Amis&Connaissances' => 'Amis&Connaissances','Camarades_SFA'=>'Camarades_SFA','Collègues_Services'=>'Collègues_Services'));
            @endphp

          </div>
          <div class="form-group col-md-4">
           {{ Form::label('Pays', 'Pays:') }}      
            <select name="country" id="country" class="form-group col-md-6">
            <option value="">Choisir Pays</option>
            @foreach ($countries as $country)
                <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
             </select>
            
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Wedding-Invitation</button>
          </div>
        </div>
	
</form>

@stop