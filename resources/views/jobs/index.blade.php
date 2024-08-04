<x-layout>
    Jobs page
    <div class="job-card-container">
        @foreach ($jobs as $job)
            <div class="job-card">
                <div>{{ $job->id }} : {{ $job->employer->name }}</div>
                <a href="/jobs/{{ $job->id }}">
                    <strong>{{ $job->title }} : </strong> Pays {{ $job->salary }} per year
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
