<x-layout>
    Create Job page
    <div class="create-job-container">

        <form method="POST" action="/jobs">
            @csrf
            <div>
                <label for="">title : </label>
                <input type="text" name="title" id="" required>
                @error('title')
                    <span class="red small-text">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="">salary : </label>
                <input type="text" name="salary" id="" required>
                @error('salary')
                    <span class="red small-text">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Create</button>
        </form>

        {{-- @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        @endif --}}
    </div>
</x-layout>
