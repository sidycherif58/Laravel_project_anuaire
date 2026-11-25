@extends('base')

@section('title', 'index')

@section('content')

<div class="border-black text-white rounded-md shadow-md max-w-4xl mx-auto mt-6 p-4 bg-white">
    <div class="border shadow-md rounded-md">

        {{-- En-tête --}}
        <div class="flex justify-between items-center gap-4 p-4 bg-black">
            <h2 class="text-lg font-bold">Liste des contacts</h2>
            <a href="{{ route ('create')}}" class="text-2xl"><i class="bx bx-plus-circle"></i></a>
        </div>

        {{-- Tableau --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b text-black bg-blue-300">
                        <th class="px-4 py-3">Prénom</th>
                        <th class="px-4 py-3">Nom</th>
                        <th class="px-4 py-3">E-mail</th>
                        <th class="px-4 py-3">Téléphone</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr class="border-b hover:bg-white/10 text-black p-2 text-sm">
                            <td class="px-4 py-3">{{ $contact->prenom }}</td>
                            <td class="px-4 py-3">{{ $contact->nom }}</td>
                            <td class="px-4 py-3">{{ $contact->email }}</td>
                            <td class="px-4 py-3">{{ $contact->telephone }}</td>
                            <td class="px-4 py-3 text-right whitespace-nowrap">
                                <a href="{{ route ('contacts.show', $contact)}}" class="px-2 py-1 border rounded hover:bg-black hover:text-white">Voir</a>
                                <a href="{{ route ('contacts.edit', $contact)}}" class="px-2 py-1 border rounded hover:bg-green-500 hover:text-black">Modifier</a>
                                <form action="{{ route ('contacts.destroy', $contact)}}" method="POST" class="inline"
                                      onsubmit="return confirm('Supprimer {{ addslashes($contact->prenom.' '.$contact->nom) }} ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-2 py-1 border border-red-500 text-red-400 rounded hover:bg-red-500 hover:text-white">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-6 text-black">
                                Aucun contact trouvé.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
