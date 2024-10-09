<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <input wire:model.live="search" type"text" />

    <br />

    <ul>

        @foreach ($users as $user)

            <li>{{ $user->name }}</li>

        @endforeach

    </ul>
</div>
