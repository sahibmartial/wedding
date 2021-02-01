
<body>
  
          
        <div id="content">
            

    <center><h2><b> <span style="color:blue">{{ 'Récapitulatif Liste '.ucfirst($lien) }} : {{$data->count()}}</span> </b></h2> 
   </center>
   <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Pays</th>
                    <th scope="col">WeddingPass</th>
                </tr>
            </thead>
             <tbody>
                @foreach($data as $key => $result)
                <tr>
                    <th scope="row"></th>
                    <td>{{$result->nom}}</td>
                    <td>{{$result->prenom}}</td>
                    <td>{{$result->email}}</td>
                    <td>{{$result->contact}}</td>
                    <td>{{$result->pays}}</td>
                    <td>{{$result->passWedding}}</td>
                </tr>
                @endforeach
            </tbody>

    </table>

</div>
<hr>
  <center style="color:#FA8072">
    {{'© 2017-2020 La T_MAYA, savoir-faire et savoir-être à partger'}}<br>
                   {{'Wedding 13 Mars 2021 - Martial&Alix '}}<br> 
                            {{'Privacy · Terms '}}
  </center>
  

        
</body>
