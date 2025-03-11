

<nav class="w-full py-4 flex items-center justify-evenly gap-2 border-b border-neutral-800">

    <div>
        <a href="#" class="">
            <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo" class="max-w-20 h-auto object-contain">
        </a>
    </div>

    <div class="flex items-center gap-8">
        <a class="transition-colors text-slate-50 hover:text-blue-500" href="#">Jobs</a>
        <a class="transition-colors text-slate-50 hover:text-blue-500" href="#">Career</a>
        <a class="transition-colors text-slate-50 hover:text-blue-500" href="#">Salaries</a>
        <a class="transition-colors text-slate-50 hover:text-blue-500" href="#">Companies</a>
    </div>

    @auth
        <a href="#" class="flex items-center gap-0.5 text-slate-50 hover:text-blue-500
        transition-colors">
        <x-topic-heading class="bg-blue-500">
            Post a Job
        </x-topic-heading>
        </a>

        <form action="/logout" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="flex items-center gap-0.5 text-slate-50 hover:text-blue-500
            transition-colors cursor-pointer">
            <x-topic-heading class="bg-blue-500">
                Logout
            </x-topic-heading>
            </button>
        </form>
    @endauth

    @guest
        <div class="flex items-center gap-8">
            <a href="{{route('login')}}" class="transition
            -colors text-slate-50 hover:text-blue-500">Login</a>

            <a href="{{route('store')}}" class="transition
            -colors text-slate-50 hover:text-blue-500">Register</a>
        </div>
    @endguest

</nav>