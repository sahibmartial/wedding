@extends('base2')
@section('title')
<title>Contact-T_MAYA</title>
@stop

@section('content')
<h1 class="text-center mt-3">Contact-TEAM MAYA</h1>
@if (Session::has('success'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('success') }}</p>

            </div>

@endif

<hr>
<form method="POST" action="{{route('contact_Maya_save')}}">
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
            {{ Form::label('Message', 'Message:') }} 
            <textarea id="msg" name="msg"  
            @error('msg') is-invalid @enderror" name="msg" value="{{ old('msg') }}" required autocomplete="msg" autofocusrows="4" cols="30"> 
            Entrez votre message
            </textarea>
           
                           @error('msg')
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
          <div class="row text-center">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Contacter</button>
          </div>
        </div>

      </div>
</form>



@stop