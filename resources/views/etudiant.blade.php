
@extends("layouts.master")

@section("contenu")
<div class="my-5 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h3>
    <div class="mt-4">
        <div class="d-flex justify-content-end mb-4">
            <a href="{{route('etudiant.create')}}" class="btn btn-info">Ajouter un nouvel etudiant</a>
        </div>
        <!-- <a href="#" class="btn btn-info">Editer</a> -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">classe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->Classe->libelle}}</td>
                    <td>
                        <a href="#" class="btn btn-info">Editer</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
            {{$etudiants->links()}}
        </table>

    </div>


</div>


</main>
<script src="{{asset('js/bootstrap.bundle.min.js')}} integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="{{asset('js/offcanvas-navbar.js')}}"></script>
</body>

</html>
@endsection