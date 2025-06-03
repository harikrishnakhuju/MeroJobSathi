@props(['job'])

<x-job-panel class="flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-4">
        <h3 class="group-hover:text-blue-800 font-bold ransition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4">{{ $job->schedule }} &bull; {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-baseline mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size='small' />
            @endforeach
        </div>
        <div>
            <x-employer-logo :employer="$job->employer" :width="42" />
        </div>
    </div>
</x-job-panel>
