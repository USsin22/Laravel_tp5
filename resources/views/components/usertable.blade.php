@props(['nom','users'])


<h1 class="text text-danger">Salam   {{ $nom }} From usertable Componets</h1>

   <table class="table table-bordered table-striped table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Métier</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $s)
            <tr>
                <td>{{ $s['id'] }}</td>
                <td>{{ $s['nom'] }}</td>
                <td>{{ $s['metier'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>



{{-- <x-usertable />
   
 php artisan:make controller  nom

--}}