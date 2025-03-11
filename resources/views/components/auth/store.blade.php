<x-layout.auth>


    <div class="flex min-h-full min-w-lg flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-2 text-center text-2xl/9 font-bold tracking-tight ">Become a member</h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                   <div>
                    <label for="name" class="block text-sm/6 font-medium ">Name</label>
                    <div>
                        <input type="text" name="name" id="name" autocomplete="name" required class="block w-full rounded-md text-black bg-white px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium ">Email address</label>
                    <div>
                        <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md text-black bg-white px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                   <div>
                    <label for="Employer" class="block text-sm/6 font-medium ">Employer</label>
                    <div>
                        <input type="text" name="employer" id="employer" autocomplete="none" required class="block w-full rounded-md bg-white text-black px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="logo" class="block text-sm/6 font-medium ">Logo</label>
                    <div>
                        <input type="file" name="logo" id="logo" required class="">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm/6 font-medium ">
                    Password</label>
                    <div>
                        <input type="password" name="password" id="password" autocomplete="current-password" required class="block text-black w-full rounded-md bg-white px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                 <div>
                    <label for="password_confirmation" class="block text-sm/6 font-medium ">
                    Confirm Password</label>
                    <div>
                        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="none" required class="block text-black w-full rounded-md bg-white px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
      Already a member?
      <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">
        Sign in now
      </a>
    </p>
</div>
</div>

</x-layout.auth>