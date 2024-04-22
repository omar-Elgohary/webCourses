@include('dashboard.layouts.header')

  <div class="bg-gray-100">
    <div class="h-screen flex overflow-hidden bg-gray-200">
      <!-- Sidebar -->
      @include('dashboard.layouts.sidebar')

      <!-- Content -->
      <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Navbar -->
        <div class="bg-white shadow">
          <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-2">
              <h1 class="text-xl font-semibold">Control Board</h1>

              <button class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- Content Body -->
        <div class="flex-1 relative overflow-auto p-4">

          <div class="   px-4 absolute top-2/4 left-2/4 translate-y-[-50%] translate-x-[-50%] text-center ">
            <div class=" ">
              <div class="w-full items-center flex flex-col ">
                <div class="flex items-center justify-center">
                  <img class="h-10 w-auto" src="image/logo.png" alt="ALC">
                  <h2 class="text-center text-3xl leading-9 font-extrabold text-gray-900">ALC</h2>
                </div>
                <h1 class="text-4xl font-bold mt-2 mb-6">Helping you find your new home;<br>by simplifying the search.
                </h1>
                <p class="px-4 leading-relaxed">Propiti provides you with a quick, simple way to reach multiple estate
                  agents.<br>Allowing you to spend less time trawling through property portals,<br>giving you more time
                  on the
                  other things you enjoy.
                </p>
                <p class="mb-8 mt-4 px-4 leading-relaxed">Oh, and the best bit...
                  <span class="text-pink-600 font-bold">It's free!</span>
                </p>
                <div>
                  <a class="inline-block py-4 px-8 leading-none text-white bg-slate-800 hover:bg-blue-700 rounded shadow text-sm font-bold"
                    href="{{ route('home') }}">Go To website</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      const sidebar = document.getElementById('sidebar');
      const openSidebarButton = document.getElementById('open-sidebar');

      openSidebarButton.addEventListener('click', (e) => {
        e.stopPropagation();
        sidebar.classList.toggle('-translate-x-full');
      });

      // Close the sidebar when clicking outside of it
      document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
          sidebar.classList.add('-translate-x-full');
        }
      });
    </script>

  </div>
  </script>
</body>



</html>