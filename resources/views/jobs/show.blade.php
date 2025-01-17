<x-layout>
    Job page
    <div class="job-card-container">
            <div class="job-card">
                <div>{{ $job->id }} : {{ $job->employer->name }}</div>
                <a href="/jobs/{{ $job->id }}">
                    <strong>{{ $job->title }} : </strong> Pays {{ $job->salary }} per year
                </a>

                @can('edit-job', $job)
                <div>
                    <button><a href="/jobs/{{ $job->id }}/edit">Edit</a></button>
                </div>
                @endcan
            </div>
    </div>
</x-layout>
