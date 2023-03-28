@include('navbar.app')
@extends('header.app')

<div class="container mt-5">
    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">BIENVENUE CHEZ APP TAXI BOKBOK</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card" style="box-shadow:2px 2px 20px pink,2px 2px 20px grey ;">
                <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">NOUVELLE AJOUT ****</div>

                    <form action="{{route('region.store')}}" id="form" method="POST">
                        @csrf
                        <label for="">Ajout Région</label>
                        <select name="region" id="" class="form-control">
                            <option value="Dakar">Dakar</option>
                            <option value="Thies">Thies</option>
                            <option value="StLouis">StLouis</option>
                            <option value="Tamba">Tamba</option>
                            <option value="Kaolack">Kaolack</option>
                        </select>
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
                            <th>ACTIONS</th>
                        </tr>
                    @foreach ($regions as $region)
                        <tr>
                            <td>{{ $region->nomRegion }}</td>
                            <td>
                                <form method="POST" action="{{ route('destroyRegion',$region->id)}}"  accept-charset="UTF-8" style="display:inline">
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
<script>
    function confirmDelete() {
        if (!confirm("Etes Vous sûr de vouloir supprimer cette Enregistrement? Si Oui les Itinéraires associés vont etre supprimés")) {
            return false;
        }
    }
</script>

@include('footer.footer')