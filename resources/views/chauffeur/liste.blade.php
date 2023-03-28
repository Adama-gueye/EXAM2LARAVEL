@include('navbar.app')
@include('header.app')

<div style="background-color: #ffff99;">
<div class="container">
    <br><br>
    <div class="row bg-info p-3 mb-4 mt-5">
        <h3 style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">LISTE DES CHAUFFEURS DANS TAXI BOKBOK</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

</div>
<div class="card-body" style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">
    <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">Liste Des Chauffeur</div>
        <table class="table table-bordered" id="list">
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>ADRESSE</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>ACTIONS</th>
            </tr>
            @foreach ($chauffeurs as $chauffeur)
            <tr>
                <td>{{ $chauffeur->nom }}</td>
                <td>{{ $chauffeur->prenom }}</td>
                <td>{{ $chauffeur->adresse }}</td>
                <td>{{ $chauffeur->email }}</td>
                <td>{{ $chauffeur->telephone }}</td>
                <td>
                
                    <form method="POST" action="{{ route('destroyChauffeur',$chauffeur->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" onclick="return confirmDelete()" title="Supprimer Chauffeur"><i class="fa fa-trash-o" aria-hidden="true"></i>🗑</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>  
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/autofill/2.4.0/js/dataTables.autoFill.min.js"></script>
<script>
$(document).ready(function () {
 
 $('#list').DataTable({

     language: {  url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json" }

 });

});
</script>

<script>
    function confirmDelete() {
        if (!confirm("Etes Vous sûr de vouloir supprimer ce Chauffeur?")) {
            return false;
        }
    }
</script>
<script>
    function confirmDelete() {
        if (!confirm("Etes Vous sûr de vouloir supprimer cet Chauffeur?")) {
            return false;
        }
    }
</script>

@include('footer.footer')