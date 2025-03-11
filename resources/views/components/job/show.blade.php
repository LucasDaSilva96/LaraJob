<x-layout.default>

    <section class="w-full flex flex-col gap-4 py-4 h-full">


        <a href="/" class="text-blue-500 hover:text-blue-600 py-2 px-4 border border-blue-500 rounded-lg max-w-[80px] text-center">
            Back
        </a>

        <x-topic-heading class="bg-slate-50" isHeading="true">
            Result
        </x-topic-heading>

        <div class="flex flex-col gap-6 ">

            @foreach ($jobs as $job)

            <x-job.box
            title="{{ $job['title'] }}"
            company="{{ $job['employer_id'] }}"
            salary="{{ $job['salary'] }}"
            :tags="$job['tags']"
            logo="https://placehold.co/600x400"
            :schedule="$job['schedule']"
            />

            @endforeach

        </div>

    </section>

</x-layout.default>