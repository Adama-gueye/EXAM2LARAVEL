@include('navbar.app')
@extends('header.app')

<div style="background-color: #ffff99;">
<div class="container">
    <br><br>
    <div class="row bg-info p-3 mb-4 mt-5">
        <h3 style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">BIENVENUE CHEZ APP TAXI BOKBOK</h3>
    </div>
    <a type="button" class="btn btn-primary" href="{{route('ajoutRegion')}}">
    Ajout Region
    </a>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card" style="box-shadow:2px 2px 20px pink,2px 2px 20px grey ;">
                <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">NOUVELLE AJOUT ****</div>

                    <form action="{{route('itineraire.store2')}}" id="form" method="POST">
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
                            <option value="">Veuillez Choisir la Région</option>
                           @foreach ($regions as $region)
                                <option value="{{$region->id}}">{{ $region->nomRegion }}</option>
                            @endforeach
                           </select>
                            <label for="">Itinéraire</label>
                            <input type="text" class="form-control" name="itineraire">
                            <label for="">Tarifs</label>
                            <input type="number" min="100" class="form-control" name="tarif">
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="">Retour</a>
                                <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <div class="card">
                <div class="card" style="box-shadow:2px 2px 20px pink,2px 2px 20px grey ;">
                <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">LISTE</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>REGION</th>
                            <th>ITINERAIRE</th>
                            <th>TARIF</th>
                            <th>ACTIONS</th>
                        </tr>
                        <tr>
                        @foreach ($itineraires as $itineraire)
                        <tr>
                            <td>{{ $itineraire->réegion_id }}</td>
                            <td>{{ $itineraire->nomItineraire }}</td>
                            <td>{{ $itineraire->tarif }}</td>
                            <td>
                                <a href="{{ route('update',$itineraire->id)}}" class="btn btn-warning">✍🏽</a>
                                <form method="POST" action="{{ route('itineraire.destroy',$itineraire->id)}}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete()" title="Supprimer Region"><i class="fa fa-trash-o" aria-hidden="true"></i>🗑</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</script>
<script>
    function confirmDelete() {
        if (!confirm("Etes Vous sûr de vouloir supprimer cette Enregistrement?")) {
            return false;
        }
    }
</script>
@include('footer.footer')
