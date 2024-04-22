@include('dashboard.layouts.header')
    <div class=" mt-[120px] flex flex-col justify-center py-12 sm:px-6 lg:px-8 px-6">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="flex items-center justify-center">
                <img class="h-10 w-auto" src="image/logo.png" alt="ALC">
                <h2 class="text-center text-3xl leading-9 font-extrabold text-gray-900">ALC</h2>
            </div>
            <h2 class="mt-6 text-center text-2xl leading-9 font-extrabold text-gray-900">
                Sign in to your account
            </h2>
        </div>


        <div class="text-center mt-8 sm:mx-auto sm:w-full sm:max-w-md">

            <div class="max-w-sm bg-white rounded-lg overflow-hidden shadow-lg mx-auto">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
                    <p class="text-gray-700 mb-6">Please sign in to your account</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="text" placeholder="email" name="email">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder="Password" name="password">
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Sign In
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>