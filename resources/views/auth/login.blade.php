<x-layout>
    Login
    <div class="create-job-container">

        <form method="POST" action="/login">
            @csrf
            <x-formfield>
                <x-formlabel for="email">email : </x-formlabel>
                <x-forminput type="text" name="email" id="email" :value="old('email')" required />
                <x-formerror name="email" />
            </x-formfield>

            <x-formfield>
                <x-formlabel for="password">password : </x-formlabel>
                <x-forminput type="password" name="password" id="password" required />
                <x-formerror name="password" />
            </x-formfield>

            <button type="submit">Login</button>
        </form>

        {{-- @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        @endif --}}
    </div>
</x-layout>
