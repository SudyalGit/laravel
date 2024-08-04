<x-layout>
    Create Job page
    <div class="create-job-container">

        <form method="POST" action="/jobs">
            @csrf
            <x-formfield>
                <x-formlabel for="title">title : </x-formlabel>
                <x-forminput type="text" name="title" id="title" required />
                <x-formerror name="title" />
            </x-formfield>

            <x-formfield>
                <x-formlabel for="salary">salary : </x-formlabel>
                <x-forminput type="text" name="salary" id="salary" required />
                <x-formerror name="salary" />
            </x-formfield>

            <button type="submit">Create</button>
        </form>

        {{-- @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        @endif --}}
    </div>
</x-layout>
