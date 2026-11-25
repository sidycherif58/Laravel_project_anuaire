@extends('base')

@section('title', 'show')

@section('content')
<div class=" m-auto border rounded mt-6 p-6 text-sm">
<h1 class="mb-3 h-3 text-black font-bold p-2">{{$contact->prenom}} {{$contact->nom}}</h1>
<div class="bg-white border rounded shadow-md p-4">
    <div>
        <dl>
            <div class="flex justify-between mt-2 border-b">
            <dt class="col-sm-3">Prenom : </dt>
            <dd class="col-sm-9">{{ $contact->prenom}}</dd>
            </div>

            <div class="flex justify-between mt-2 border-b">
            <dt class="col-sm-3">Nom : </dt>
            <dd class="col-sm-9"> {{ $contact->nom}}</dd>
            </div>

            <div class="flex justify-between mt-2 border-b">
            <dt class="col-sm-3">Email : </dt>
            <dd class="col-sm-9"><a href="mailto">{{ $contact->email}}</a></dd>
            </div>

            <div class="flex justify-between mt-2 border-b">
            <dt class="col-sm-3">N° de telephone : </dt>
            <dd class="col-sm-9">{{ $contact->telephone}}</dd>
            </div>

            <div class="flex justify-between mt-2 border-b">
            <dt class="col-sm-3">ajouée le  : </dt>
            <dd class="col-sm-9">{{ $contact->created_at}}</dd>
            </div>
        </dl>
    </div>
    <div class="mt-6">
        <a href="{{route ('index')}}" class="px-2 py-1 border rounded hover:bg-black hover:text-white">Retour</a>
        <a href="{{route  ('contacts.edit', $contact)}}" class="px-2 py-1 border rounded hover:bg-green-500 hover:text-black">Modifier</a>
    </div>
</div>
</div>

@endsection