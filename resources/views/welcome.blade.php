<x-layout.default>

    <section class="w-full space-y-4">

        <div class="w-full flex items-center justify-center py-4">

            <form method="POST" action="" class="w-full max-w-2xl flex flex-col items-center gap-6">
                @csrf
                <label for="search" class="capitalize text-4xl font-semibold">
                    Let's find you a great job
                </label>
                <input type="text" name="search" id="search" class="w-full p-2.5 text-slate-50 rounded-md bg-neutral-900" placeholder="Search for jobs">
            </form>

        </div>


        <x-topic-heading class="bg-slate-50" isHeading="true">
            Tags
        </x-topic-heading>

        <div class="w-full flex items-center gap-4 flex-wrap py-3">
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
            <x-tag class="text-base" href="#">Tag</x-tag>
        </div>



        <x-topic-heading class="bg-slate-50" isHeading="true">
            Top Jobs
        </x-topic-heading>

        <div class="w-full flex items-center justify-between gap-4 flex-wrap pb-4">


            <x-job.small-box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            />

            <x-job.small-box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            />


            <x-job.small-box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            />


        </div>

        <x-topic-heading class="bg-slate-50" isHeading="true">
            Recent Jobs
        </x-topic-heading>

        <div class="flex flex-col gap-6 ">

            <x-job.box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            :perks="['Perk', 'Perk', 'Perk']"
            />

              <x-job.box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            :perks="['Perk', 'Perk', 'Perk']"
            />

              <x-job.box
            title="Programmer"
            company="Laracasts"
            salary="From $60,000"
            :tags="['Tag', 'Tag', 'Tag']"
            logo="https://placehold.co/600x400"
            :perks="['Perk', 'Perk', 'Perk']"
            />

        </div>

    </section>

</x-layout.default>

