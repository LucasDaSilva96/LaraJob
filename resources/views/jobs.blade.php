<x-layout.default>

    <section class="w-full space-y-4">

        <div class="w-full flex items-center justify-center py-4">

            <form method="POST" action="/search" class="w-full max-w-2xl flex flex-col items-center gap-6">
                @csrf
                @method('POST')
                <label for="search" class="capitalize text-4xl font-semibold">
                    Let's find you a great job
                </label>
                <div class="flex w-full items-center gap-4">

                    <input type="text" required name="search" id="search" class="w-full p-2.5 text-slate-50 rounded-md bg-neutral-900" placeholder="Search for jobs">

                    <button class="py-2 px-4 bg-blue-500 text-slate-50 rounded-md cursor-pointer transition-colors hover:bg-blue-600">
                        Search
                    </button>
                </div>
            </form>

        </div>


        <x-topic-heading class="bg-slate-50" isHeading="true">
            Top Jobs
        </x-topic-heading>

        <div class="w-full flex items-center justify-between gap-4 flex-wrap pb-4">



        @foreach ($featured_jobs as $job)

        <x-job.small-box
            :title="$job['title']"
            :company="$job['employer_id']"
            :salary="$job['salary']"
            :tags="$job['tags']"
            logo="https://placehold.co/600x400"
            :schedule="$job['schedule']"
        />

        @endforeach


        </div>

        <x-topic-heading class="bg-slate-50" isHeading="true">
            Tags
        </x-topic-heading>

        <div class="w-full flex items-center gap-4 flex-wrap py-3">
            @foreach ($tags as $tag)
                <x-tag class="text-base" href="#">{{ $tag['name'] }}</x-tag>
            @endforeach
        </div>




        <x-topic-heading class="bg-slate-50" isHeading="true">
            Recent Jobs
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

