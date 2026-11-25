@extends('base')

@section('title', 'create')

@section('content')

<div class="border shadow-md mt-6 max-w-lg items-center m-auto">
    <div class="bg-black text-white p-4 rounded-md shadow-md">
        <h2 class="font-medium text-2xl text-center">Anuaire de Contact</h2>
    </div>
    <div class="p-4 mt-4 bg-white">
        <form action="{{ route('contacts.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="prenom" class="font-medium">Prenom :</label>
                <input type="text" id="prenom" name="prenom" value="{{old('prenom')}}" 
                class="w-full px-2 py-4 rounded border-md shadow-md bg-blue">
            </div>
            <div class="mb-4">
                <label for="prenom" class="font-medium">Nom :</label>
                <input type="text" id="nom" name="nom" value="{{old('nom')}}"
                class="w-full px-2 py-4 rounded border-md shadow-md">
            </div>
            <div class="mb-4">
                <label for="email" class="font-medium">Email :</label>
                <input type="email" id="email" name="email" value="{{old('email')}}"
                class="w-full px-2 py-4 rounded border-md shadow-md">
            </div>
            <div class="mb-4">
                <label for="telephone" class="font-medium">N° de telephone :</label>
                <input type="tel" id="telephone" name="telephone" value="{{old('telephone')}}"
                class="w-full px-2 py-4 rounded border-md shadow-md">
            </div>
            <div class="mb-4">
            <button type="submit" class="rounded-full border shadow px-3 py-3 bg-black text-white font-medium">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

@endsection