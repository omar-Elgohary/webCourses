@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bg-cover')
@include('layouts.logo')

  <section class="flex">
    <nav class="bg-blue-500 relative w-[15%] overflow-hidden h-[100vh]">
      <div class="pl-3 pt-6 text-white items-start gap-5">

        <div class="flex items-center p-2  ap-1"> <a href="home.html"><i class="fa-solid fa-house"></i>
            Home</a></div>
        <div class="flex items-center  p-2  gap-1"><a href="pageTeacher.html">
            <i class="fa-solid fa-user"></i> Teacher
          </a></div>
        <div class="flex items-center  p-2  gap-1">
          <a href="pageCourses.html">
            <i class="fa-solid fa-graduation-cap"></i> Course
          </a>
        </div>
        <div class="flex items-center  p-2  gap-1">
          <a href="pageDate.html">
            <i class="fa-solid fa-database"></i> Date
          </a>
        </div>
      </div>

      <div class="absolute pl-3  text-white hover:text-slate-800 bottom-0 mb-5">
        <a href="login.html">
          <i class="fa-solid fa-right-to-bracket"></i> login out
        </a>
      </div>
    </nav>
    <div class=" w-[85%] relative ">
      <div class="   px-4 absolute top-2/4 left-2/4 translate-y-[-50%] translate-x-[-50%] text-center">
        <div class="w-full items-center flex flex-col ">
          <div class="flex items-center justify-center">
            <img class="h-10 w-auto" src="/Dashboard/image/logo.png" alt="ALC">
            <h2 class="text-center text-3xl leading-9 font-extrabold text-gray-900">ALC</h2>
          </div>
          <h1 class="text-4xl font-bold mt-2 mb-6">Helping you find your new home;<br>by simplifying the search.</h1>
          <p class="px-4 leading-relaxed">Propiti provides you with a quick, simple way to reach multiple estate
            agents.<br>Allowing you to spend less time trawling through property portals,<br>giving you more time on the
            other things you enjoy.
          </p>
          <p class="mb-8 mt-4 px-4 leading-relaxed">Oh, and the best bit...
            <span class="text-pink-600 font-bold">It's free!</span>
          </p>
          <div>
            <a class="inline-block py-4 px-8 leading-none text-white bg-slate-800 hover:bg-blue-700 rounded shadow text-sm font-bold"
              href="/website/index.html">Go To website</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('layouts.footer')