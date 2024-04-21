<div class="absolute z-50 bg-gray-800 text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300" id="sidebar">
<!-- Your Sidebar Content -->
<div class="p-4">
  <h1 class="text-2xl font-semibold">ALC</h1>
  <ul class="mt-4">
    <li class="mb-2"><a href="{{route('dashboard')}}" class="block hover:text-indigo-400">Home</a></li>
    <li class="mb-2"><a href="{{ route('dashboard.courses') }}" class="block hover:text-indigo-400">Courses</a></li>
    <li class="mb-2"><a href="{{ route('dashboard.teachers') }}" class="block hover:text-indigo-400">Teachers</a></li>
    <li class="mb-2"><a href="{{ route('dashboard.information') }}" class="block hover:text-indigo-400">Information</a></li>
  </ul>
  <a href="information.html" class="block hover:text-indigo-400 mt-9">Log out</a>
</div>
</div>