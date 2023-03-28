@include('navbar.app')
@extends('header.app')

<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">BIENVENUE CHEZ APP TAXI BOKBOK</h3>
    </div>
    <a type="button" class="btn btn-primary" href="{{route('ajoutRegion')}}">
    Ajout Region
    </a>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card" style="box-shadow:2px 2px 20px pink,2px 2px 20px grey ;">
                <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Page de Modification</div>

                    <form action="{{route('itineraire.update',$itineraire->id)}}" id="form" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf
                        <label for="">Ajout Région</label>
                           <select name="region" id="" class="form-control">
                           @foreach ($regions as $region)
                                <option value="{{$region->id}}" {{ $region->id == $itineraire->réegion_id ? 'selected' : '' }}> {{ $region->nomRegion }}</option>
                            @endforeach
                           </select>
                            <label for="">Itinéraire</label>
                            <input type="text" class="form-control" name="itineraire" value="{{$itineraire->nomItineraire}}">
                            <label for="">Tarifs</label>
                            <input type="number" min="100" class="form-control" name="tarif" value="{{$itineraire->tarif}}">
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="">Retour</a>
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary offset-5">Sauvegarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>


@include('footer.footer')