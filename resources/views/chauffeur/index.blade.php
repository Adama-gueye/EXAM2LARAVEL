@extends('header.app')
<div style="background-color: #ffff99;">
<div class="row">
<div class="col-md-2 offset-9 mb-2 mt-1">
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
    SE DECONNECTER
    </button>
 </form>
 </div>

</div>
<div class="container" style="background-color: #ffff99;">

    <div class="row bg-info p-3 mb-4">
        <h3 style="box-shadow:2px 20px 20px pink,2px 2px 20px white ; text-align:center;">BIENVENUE CHER CHAUFFEUR VEUILLEZ CHOISIR VOTRE ITINERAIRE DE PARCOURT</h3>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="offset-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card" style="box-shadow:2px 2px 20px pink,2px 2px 20px grey ;">
                <div class="card-header" style="background: rgb(2,36,36); color:white;text-align:center;">CHOIX ITINERAIRE</div>

                    <form action="{{ route('messageChauffeur') }}" id="form" method="POST">
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
                        <label for="region">Région </label>
                        <select id="region" class="form-control" name="region">
                        <option value="">Veuillez Choisir une Région</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->nomRegion }}</option>
                            @endforeach
                        </select>

                        <label for="itineraire">Itinéraire </label>
                        <select id="itineraire" class="form-control" name="itineraire" disabled>
                        </select>
                        <label for="">Tarifs</label>
                            <input type="text" class="form-control" id="tarif" name="tarif" disabled>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="">Retour</a>
                                <button type="submit" class="btn btn-primary offset-5">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-2 offset-10 mb-2 mt-1" >

        <button  title="Supprimer Compte" type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
           voir les notifiattions
        </button>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function afficherItineraires(regionId) {
    $('#itineraire').prop('disabled', true);
    $.ajax({
        url: '/itineraireChauffeur/' + regionId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#itineraire').empty();
            $.each(data, function(index, itineraire) {
                $('#itineraire').append('<option value="' + itineraire.id + '">' + itineraire.nomItineraire + '</option>');
            });
            var itineraireId = $('#itineraire').val();
    $.ajax({
        url: '/getTarifChauffeur/' + itineraireId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#tarif').val(data.tarif);
            // Activer le champ tarif après avoir fini de le remplir
            $('#tarif').prop('disabled', true);
        },
        error: function() {
            console.log('Une erreur s\'est produite lors de la récupération du tarif de l\'itinéraire.');
        }
    });
            $('#itineraire').prop('disabled', false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Une erreur s\'est produite : ' + textStatus + ' - ' + errorThrown);
        }
    });
}
function majTarifItineraire() {
    $.ajax({
        url: '/getTarifChauffeur/' + itineraireId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#tarif').val(data.tarif);
            // Activer le champ tarif après avoir fini de le remplir
            $('#tarif').prop('disabled', true);
        },
        error: function() {
            console.log('Une erreur s\'est produite lors de la récupération du tarif de l\'itinéraire.');
        }
    });

} 
$('#region').on('change', function() {
    var regionId = $(this).val();
    if(regionId) {
        afficherItineraires(regionId);
    } else {
        $('#itineraire').empty().prop('disabled', true);
    }
});
$('#itineraire').change(function() {
    majTarifItineraire();
});
</script>

<script>
    function confirmDelete() {
        if (!confirm("Etes Vous sûr de vouloir supprimer Votre Compte?")) {
            return false;
        }
    }
</script>

@include('footer.footer')