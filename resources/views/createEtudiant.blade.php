@extends("layouts.master")

@section("contenu")
<div class="my-5 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Ajout d'un nouvel etudiant</h3>

    <div class="mt-4">

        <!-- @if (session()-> has("success"))
        <div class="alert alert-success">
            <h3>{{session()->get('success')}}</h3>
            @endif

        </div>
        @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif -->


        <form style="width: 65%;" method="post" action="{{route('etudiant.ajouter')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de l'étudiant</label>
                <input type="text" class="form-control" required name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Classe</label>
                    <select class="form-control" name="classe_id">
                        <option value=""></option>
                        @foreach ($classes as $classe )
                        <option value={{$classe->id}}>{{$classe->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{route('etudiant')}}" class="btn btn-danger">Annuler</a>
        </form>
    </div>



    </main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}} integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
    </body>

    </html>
    @endsection