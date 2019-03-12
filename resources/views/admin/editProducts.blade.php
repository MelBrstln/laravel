@extends('layout')

@section('MetaTitle', 'Edition')

@section('content', 'Edition des Produits')

@section('petitforeach')
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if (exist){
                alert(msg);
            }
        </script>

    <div class="produit">
        <table>
        <thead>
            <tr>
                <th colspan="2">Table Produits <br><a href="/addprod">Ajouter</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $prod)
                <tr>
                <td>
                        <a href="/product/{{ $prod->id }}">{{ $prod->name }}</a><br>
                </td>
                    <td>
                        <a href="/product/edit/{{ $prod->id }}">Editer</a><br> <a href="/product/erase/{{ $prod->id }}">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection