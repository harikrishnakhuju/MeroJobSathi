<x-layout>
    <section class="text-center">
        <h1 class="font-bold text-4xl mt-10 mb-10">Let's Find Your Next Job</h1>

        <x-forms.form action="/search">
            <x-forms.input name='q' :label='false' placeholder='Web Developer...'/>
        </x-forms.form>

    </section>
    <section>
        <x-section-heading>Feature Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach ($featured_jobs as $job)
                <x-jobcard :$job />
            @endforeach
        </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-3 space-x-1">
            @foreach ($tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="flex flex-col gap-8 mt-6">
            @foreach ($jobs as $job)
                <x-jobcard-large :$job />
            @endforeach
        </div>
    </section>
</x-layout>
