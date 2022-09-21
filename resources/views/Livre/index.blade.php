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
<h1 class="title fixed">Liste des livres</h1>
    <div class="col-md-12 text-right">
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#add">Ajouter un Livre</button>
    </div>
    <div id="" class="table responsive text-center">
    <table id="example" class="table table-striped table-bordered center mx-auto" style="width:90%;text-align:center">
        <!-- <table id="mydatatable"  class="table  table-bordered  table-hover table-sm table-responsive table-striped" > -->
            <thead  class="text-center">
                <tr>
                
                <th scope="col" class="text-center">Auteur</th>
                <th scope="col" class="text-center">Edition</th>
                <th scope="col" class="text-center">Disponibilite</th>
                <th scope="col" class="text-center">Fournisseur</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($liv as $liv)
                    <tr>
                        
                        
                        <td>{{$liv->auteur}}</td>
                        <td>{{$liv->edition}}</td>
                        <td>{{$liv->disponibilite}}</td>
                        <td>{{$liv->id_four}}</td>
                        
                        </td>
                        
                        <td><a href="{{ route('livre.show', $liv->id)}}" class="btn btn-primary"> <button>Detail</button></a></td>
                        <td><a href="{{ route('livre.edit2', $liv->id)}}" class="btn btn-primary">Modifier</a></td>
                        
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
                            <form method="POST" action="{{ route('Livre.create') }} ">
                                @csrf
                                @method('POST') 
                                <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Auteur') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('auteur') is-invalid @enderror" name="auteur" value="{{ old('auteur') }}" required autocomplete="auteur" autofocus>

                                @error('auteur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Edition ') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('edition') is-invalid @enderror" name="edition" value="{{ old('edition') }}" required autocomplete="prenom" autofocus>

                                @error('edition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" >
                                        <label for="enteprise" class="col-md-4 col-form-label text-md-end">{{ __('Fournisseur') }}</label>
                                        <div class="col-md-6">
                                            <select name="id_four">
                                                @foreach($four as $four)
                                                <option value="{{$four->id }}">{{$four->nom_four}}</option>
                                                @endforeach
                                            </select>
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