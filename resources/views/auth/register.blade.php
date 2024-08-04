<x-layout>
    Register
    <div class="create-job-container">

        <form method="POST" action="/register">
            @csrf
            <x-formfield>
                <x-formlabel for="name">name : </x-formlabel>
                <x-forminput type="text" name="name" id="name" required />
                <x-formerror name="name" />
            </x-formfield>

            <x-formfield>
                <x-formlabel for="email">email : </x-formlabel>
                <x-forminput type="text" name="email" id="email" required />
                <x-formerror name="email" />
            </x-formfield>

            <x-formfield>
                <x-formlabel for="password">password : </x-formlabel>
                <x-forminput type="password" name="password" id="password" required />
                <x-formerror name="password" />
            </x-formfield>

            <x-formfield>
                <x-formlabel for="password_confirmation">password confirmation : </x-formlabel>
                <x-forminput type="password" name="password_confirmation" id="password_confirmation" required />
                <x-formerror name="password_confirmation" />
            </x-formfield>

            <button type="submit">Register</button>
        </form>

        {{-- @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        @endif --}}
    </div>
</x-layout>
