@extends('layouts.libraire')
@section('content')
<!-- <style>
  
  .card {
    
    margin: auto;
   
    
   
  }
  .card-header {
    
    margin: auto;
   
    text-align: center;
    font-weight:bold;
    font-size:20px;
    background-color:#FFA07A;
  }
.la{
    margin-left: 50px;
    text-align: center;
    font-weight:bold;
    font-size:25px;
}
</style> -->
<style>
.tablecenterheadCSS {
	text-align:center;
}
</style>
<h1 class="title fixed">Liste des abonnés</h1>
    <div class="col-md-12 text-right">
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#add">Ajouter un abonné</button>
    </div>
    <div id="" class="table responsive text-center">
    <table id="example" class="table table-striped table-bordered center mx-auto" style="width:90%;text-align:center">
        <!-- <table id="mydatatable"  class="table  table-bordered  table-hover table-sm table-responsive table-striped" > -->
            <thead  class="text-center">
                <tr>
                
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Prenom</th>
                <th scope="col" class="text-center">Adresse</th>
                <th scope="col" class="text-center">Telephone</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($abo as $abo)
                    <tr>
                        
                        
                        <td>{{$abo->nom_abo}}</td>
                        <td>{{$abo->prenom_abo}}</td>
                        <td>{{$abo->adresse_abo}}</td>
                        <td>{{$abo->telephone_abo}}</td>
                        
                        </td>
                        
                        <td><a href="{{ route('abo.show', $abo->id)}}" class="btn btn-primary"> <button>Detail</button></a></td>
                        <td><a href="{{ route('abo.edit2', $abo->id)}}" class="btn btn-primary">Modifier</a></td>
                        
                    </tr>
                    
                @endforeach
              
            </tbody>
        </table>
       
    </div>
    <!-- Modal -->
    


    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md">   
                            <form method="POST" action="{{ route('Abonne.create') }} ">
                                @csrf
                                @method('POST') 
                                <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom_abo" value="{{ old('nom_abo') }}" required autocomplete="nom" autofocus>

                                @error('nom_abo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom ') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom_abo') is-invalid @enderror" name="prenom_abo" value="{{ old('prenom_abo') }}" required autocomplete="prenom" autofocus>

                                @error('prenom_abo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="adresse" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse_abo') is-invalid @enderror" name="adresse_abo" value="{{ old('adresse_abo') }}" required autocomplete="adresse" autofocus>

                                @error('adresse_abo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone_abo') is-invalid @enderror" name="telephone_abo" value="{{ old('telephone_abo') }}" required autocomplete="telephone" autofocus>

                                @error('telephone_abo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"> {{ __('Ajouter') }}</button>
                            </div>
                </form>
    </div>
    



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  
</button>

<!-- Modal -->


    </div>
   
  </div>

</div>

@endsection