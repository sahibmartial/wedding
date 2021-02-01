@extends('base2')
@section('title')
<title>Contact-T_MAYA</title>
@stop

@section('content')
<h1 class="text-center mt-3">Wedding-ListeInvites</h1>
@if (Session::has('success'))

            <div class="alert alert-success text-center">

                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                <p>{{ Session::get('success') }}</p>

            </div>

@endif

<hr>
<form method="POST" action="{{route('showlistinvitesbylien')}}">
{{ csrf_field() }}
	<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          	 {{ Form::label('Lien', 'Lien:') }}      
            @php
           echo  Form::select('lien', array('Parent_Martial' => 'Parent_Martial','Parent_Alix'=>'Parent_Alix', 'Amis&Connaissances' => 'Amis&Connaissances','Camarades_SFA'=>'Camarades_SFA','Collègues_Services'=>'Collègues_Services'));
            @endphp
           
          </div>
          
        </div>
       <center>
       	<div class="row">
         
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">DownloadtoPDF</button>
          </div>
       
      </div>

       </center>
        
</form>



@stop