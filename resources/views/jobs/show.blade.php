<x-layout>
    Job page
    <div class="job-card-container">
            <div class="job-card">
                <div>{{ $job->id }} : {{ $job->employer->name }}</div>
                <a href="/jobs/{{ $job->id }}">
                    <strong>{{ $job->title }} : </strong> Pays {{ $job->salary }} per year
                </a>
                <div>
                    <button><a href="/jobs/{{ $job->id }}/edit">Edit</a></button>
                </div>
            </div>
    </div>
</x-layout>
