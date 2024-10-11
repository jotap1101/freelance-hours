<div>
    {{-- The Master doesn't talk, he acts. --}}

    <h1>Meu componente Livewire</h1>

    <input wire:model.live="search">


    @foreach ($users as $user)
        <div>{{ $user->name }}</div>
    @endforeach
</div>