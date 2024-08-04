<x-layout>
    Edit Job {{ $job->title }}
    <div class="create-job-container">

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')
            <div>
                <label for="">title : </label>
                <input type="text" name="title" id="" value="{{ $job->title }}" required>
                @error('title')
                    <span class="red small-text">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="">salary : </label>
                <input type="text" name="salary" id="" value="{{ $job->salary }}" required>
                @error('salary')
                    <span class="red small-text">{{ $message }}</span>
                @enderror
            </div>

            <a href="/jobs/{{ $job->id }}">Cancle</a>
            <button type="submit">Update</button>
            <button form="delete-form" type="submit">Delete</button>
        </form>
        <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form">
            @csrf
            @method('DELETE')
        </form>

        {{-- @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach

        @endif --}}
    </div>
</x-layout>
