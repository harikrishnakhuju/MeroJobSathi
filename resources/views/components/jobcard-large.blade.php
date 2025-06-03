@props(['job'])

<x-job-panel class=" gap-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="self-start font-bold text-xl mt-3 group-hover:text-blue-800 font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a></h3>
        <p class="self-start text-sm text-gray-400 mt-auto">{{ $job->schedule }} &bull; {{ $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach

    </div>
</x-job-panel>
