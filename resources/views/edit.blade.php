@extends('base')

@section('title', 'edit')

@section('content')

<h1 class="h-3 font-bold text-center mt-3"> Modification </h1>
<div class="border shadow m-auto mt-6 px-4 py-4 flex justify-between">
<h2 class="h-3 font-bold">{{ $contact->prenom}} {{ $contact->nom}}</h2>
<div>
    <div >
    <form action="{{ route ('contacts.update', $contact) }}" method="POST" class="text-black">
        @csrf
        @method('PUT')

        @include('form', ['submit' => 'Mettre à jour'])
    </form>
    </div>
</div>
</div>
@endsection