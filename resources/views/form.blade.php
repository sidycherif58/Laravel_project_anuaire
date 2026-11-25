
<div class="text-sm">
    <div class="mb-4">
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" class="w-full rounded border p-2"
         value="{{ old ('prenom', $contact->prenom ?? '')}}">
        @error('prenom')
            <div class="bg-red"> {{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" class="w-full rounded border p-2"
         value="{{ old ('nom', $contact->nom ?? '')}}">
        @error('nom')
            <div class="bg-red"> {{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email">email</label>
        <input type="email" id="email" name="email" class="w-full rounded border p-2"
         value="{{ old ('email', $contact->email ?? '')}}">
        @error('email')
            <div class="bg-red"> {{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="telephone">N°de telephone</label>
        <input type="tel" id="telephone" name="telephone" class="w-full rounded border p-2"
         value="{{ old ('telephone', $contact->telephone ?? '')}}">
        @error('telephone')
            <div class="bg-red"> {{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="px-2 py-1 border rounded hover:bg-green-500 hover:text-black">Mettre a jours</button>
</div>
