@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bg-cover')
@include('layouts.logo')

  <!-- start card -->
  <section class="">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">

      <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Cours disponibles</h2>

      <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
        The product can personalize user experiences by understanding individual preferences and tailoring
        recommendations or content based on user behavior and historical data.
      </p>

    </div>
    <!-- box -->
    <div class="px-5 grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 lg:max-w-[80rem] lg:grid-cols-4  mt-8  container mx-auto">
      @foreach (\App\Models\Course::all() as $course)
        <div class="overflow-hidden bg-white rounded-lg shadow-md">
          <div class="relative">
            <img class="w-full h-64 object-cover" src="{{ asset('image/'.$course->image) }}" alt="Image">
            <div class="absolute top-0 right-0">
              <div class="w-32 h-8 absolute top-4 -right-8">
                <div class="h-full w-full bg-red-600 text-white text-center leading-8 font-semibold transform rotate-45">
                  SALE</div>
              </div>
            </div>
          </div>
          <div class="relative">

            <div class="p-4 absolute right-0 top-[-34px] bg-white mr-3 rounded-lg	 shadow-inner	drop-shadow-lg">
              <h3 class="text-xl font-semibold mb-2 text-[#f00] line-through decoration-[#f00]">${{$course->price}}</h3>
            </div>
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-2">{{ $course->title }}</h3>
              <p class="text-gray-700 text-base">
                {{ $course->description }}
              </p>
            </div>
          </div>
          <div class="flex justify-center">
            <button class=" bg-blue-500 mb-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              <a href="{{ route('showCourse', $course->id)}}">Buy now</a>
            </button>
          </div>
        </div>
      @endforeach

    </div>
    <!-- box -->

    <div class="flex justify-center mt-16 mb-5">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="course.html">Primary Button</a>
      </button>
    </div>
  </section>
  <!-- end card -->

  <!-- ////// -->
  <section id="testimonials" class="py-10 lg:py-20">
    <div class="container mx-auto">
      <div class="text-center">
        <h2 class="font-bold mb-9 text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Personal experiences</h2>
      </div>
      <div class="
      grid justify-center gap-4 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3
      ">
        <div class="flex-1 px-3">
          <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing

            </p>
            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa.
              Sit amet consectetur adipiscing elit duis.
            </p>
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="image/khaledOne.png"
                alt="Jane Doe">
              <div>
                <p>Jane Doe
                </p>
                <p class="text-sm text-gray-600">Director of Research and Data
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-1 px-3">
          <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing

            </p>
            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa.
              Sit amet consectetur adipiscing elit duis.
            </p>
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="image/khaledTwo.jpg"
                alt="John Doe">
              <div>
                <p>John Doe
                </p>
                <p class="text-sm text-gray-600">Director of Research and Data
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-1 px-3">
          <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
            <p class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing

            </p>
            <p class="mt-6">Eu lobortis elementum nibh tellus molestie nunc non blandit massa.
              Sit amet consectetur adipiscing elit duis.
            </p>
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="image/khaledThree.jpg"
                alt="Jane Smith">
              <div>
                <p>Jane Smith
                </p>
                <p class="text-sm text-gray-600">Director of Research and Data
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ////// -->

  <!-- start about -->
  <div class="relative overflow-hidden pt-16 pb-32 space-y-24">
    <div class="relative  container mx-auto ">
      <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
        <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

          <div>
            <div>
              <span class="flex h-12 w-12 items-center justify-center rounded-xl text-[#0E33CB]">
                About
              </span>
            </div>

            <div class="mt-6">
              <h2 class="text-3xl font-bold tracking-tight text-[#121D50]">
                Simplify Your Shipping Experience with Our Easy Step Process
              </h2>
              <p class="mt-4 text-lg text-[#5C6C7B]">
                At FastGo, we believe in providing our clients with personalized and efficient logistics solutions that
                meet their unique needs. With years of experience and a team of experts, we are dedicated to empowering
                your business with seamless shipping experiences.
              </p>
              <div class="mt-6">
                <a class="inline-flex rounded-lg bg-blue-500 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-blue-600 hover:bg-blue-700 hover:ring-blue-700"
                  href="/about.html">
                  Learn More
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class=" px-4 mt-8">
          <img loading="lazy" width="" height="" class=" w-[100%] rounded-xl shadow-2xl h-[450px]"
            style="color:transparent" src="image/about.png">

        </div>
      </div>
    </div>
  </div>
  <!-- end about -->

  <!-- start Personal experiences -->
  <section id="features" class=" px-4 space-y-6 bg-slate-50 py-8 md:py-12 lg:py-20">

    <div class=" container mx-auto  flex max-w-[58rem] flex-col items-center space-y-4 text-center">

      <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Features</h2>

      <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
        The product can personalize user experiences by understanding individual preferences and tailoring
        recommendations or content based on user behavior and historical data.
      </p>

    </div>

    <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 ">

      <div
        class="relative text-center overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
        <div class="flex  flex-col justify-between rounded-md p-6">
          <div class=" flex justify-center">
            <img class="w-12 h-12 mr-4 rounded-full" src="image/khaledOne.png" alt="Jane Doe">
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">kaheld mohamed</h3>
            <div class="flex items-center justify-center space-x-2 mt-4">
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
            </div>
            <p class="text-sm text-muted-foreground">I liked the professional and friendly customer service of this
              company. They were always willing to answer my questions and provide assistance every time.</p>
          </div>
        </div>
      </div>

      <div
        class="relative text-center overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
        <div class="flex  flex-col justify-between rounded-md p-6">
          <div class=" flex justify-center">
            <img class="w-12 h-12 mr-4 rounded-full" src="image/khaledOne.png" alt="Jane Doe">
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">kaheld mohamed</h3>
            <div class="flex items-center justify-center space-x-2 mt-4">
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
            </div>
            <p class="text-sm text-muted-foreground">I liked the professional and friendly customer service of this
              company. They were always willing to answer my questions and provide assistance every time.</p>
          </div>
        </div>
      </div>
      <div
        class="relative text-center overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
        <div class="flex  flex-col justify-between rounded-md p-6">
          <div class=" flex justify-center">
            <img class="w-12 h-12 mr-4 rounded-full" src="image/khaledOne.png" alt="Jane Doe">
          </div>

          <div class="space-y-2">
            <h3 class="font-bold">kaheld mohamed</h3>
            <div class="flex items-center justify-center space-x-2 mt-4">
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
              <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" stroke="currentColor">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
            </div>
            <p class="text-sm text-muted-foreground">I liked the professional and friendly customer service of this
              company. They were always willing to answer my questions and provide assistance every time.</p>
          </div>
        </div>
      </div>



    </div>

  </section>

  <!-- /////////////// -->

  <!--End Personal experiences  -->

  <!-- start work team -->
  <section class="">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">

        <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">work team </h2>

        <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
          The product can personalize user experiences by understanding individual preferences and tailoring
          recommendations or content based on user behavior and historical data.
        </p>

      </div>
      <div class="grid gap-8 lg:gap-16 grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <div data-aos="flip-left" class="text-center text-gray-400 md:-order-2">
          <img class="mx-auto mb-4 w-36 h-36 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar" />
          <h3 class="mb-1 text-lg font-bold tracking-tight text-[#00072E]">
            <a href="#">Mohamed KhafaGa</a>
          </h3>
          <p>CEO/Co-founder</p>
          <ul class="flex justify-center mt-4 space-x-4">
            <li>
              <a href="#" class="text-[#39569c] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#00acee] :">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#ea4c89] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div data-aos="flip-left" class="text-center text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt="Helene Avatar" />
          <h3 class="mb-1 text-lg font-bold tracking-tight text-[#00072E]">
            <a href="#">Ebrahem Ahmed</a>
          </h3>
          <p>CTO/Co-founder</p>
          <ul class="flex justify-center mt-4 space-x-4">
            <li>
              <a href="#" class="text-[#39569c] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#00acee] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#ea4c89] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div data-aos="flip-left" class="text-center order-first md:-order-1  lg:order-none text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar" />
          <h3 class="mb-1 text-lg font-bold tracking-tight text-[#00072E]">
            <a href="#">Khaled Mohamed</a>
          </h3>
          <p>SEO & Marketing</p>
          <ul class="flex justify-center mt-4 space-x-4">
            <li>
              <a href="#" class="text-[#39569c] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#00acee] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#ea4c89] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div data-aos="flip-left" class="text-center text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph Avatar" />
          <h3 class="mb-1 text-lg font-bold tracking-tight text-[#00072E]">
            <a href="#">Maher Abo Alasad</a>
          </h3>
          <p>SEO & Marketing</p>
          <ul class="flex justify-center mt-4 space-x-4">
            <li>
              <a href="#" class="text-[#39569c]">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#00acee] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#ea4c89] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div data-aos="flip-left" class="text-center text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-lg"
            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar" />
          <h3 class="mb-1 text-lg font-bold tracking-tight text-[#00072E]">
            <a href="#">Mahmoud Abdel</a>
          </h3>
          <p>SEO & Marketing</p>
          <ul class="flex justify-center mt-4 space-x-4">
            <li>
              <a href="#" class="text-[#39569c] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#00acee] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class=" text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="text-[#ea4c89] ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex justify-center  ">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Primary Button
      </button>
    </div>
  </section>
  <!-- end work team -->

  <!--  -->
  <div class="m-5">
    <div class="text-center">
      <h2 class="font-bold mb-6 mt-28 text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Activities from the course</h2>
    </div>
    <section class="overflow-hidden text-gray-700 ">
      <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="flex flex-wrap -m-1 md:-m-2">
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp">
            </div>
          </div>
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp">
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!--  -->

  <!-- start Connect us -->
  <section class="bg-white ">
    <div class="container px-6 py-12 mx-auto">
      <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">

        <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Connect us</h2>

      </div>

      <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-4 items-center">
        <div class="flex flex-col items-center justify-center text-center">
          <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
          </span>

          <h2 class="mt-4 text-lg font-medium text-gray-800 ">Email</h2>
          <p class="mt-2 text-gray-500 ">Our friendly team is here to help.</p>
          <p class="mt-2 text-blue-500 ">hello@merakiui.com</p>
        </div>

        <div class="flex flex-col items-center justify-center text-center">
          <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
          </span>

          <h2 class="mt-4 text-lg font-medium text-gray-800 ">Office</h2>
          <p class="mt-2 text-gray-500 ">Come say hello at our office HQ.</p>
          <p class="mt-2 text-blue-500 ">100 Smith Street Collingwood VIC 3066 AU</p>
        </div>

        <div class="flex flex-col items-center justify-center text-center">
          <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
          </span>

          <h2 class="mt-4 text-lg font-medium text-gray-800 ">Phone</h2>
          <p class="mt-2 text-gray-500 ">Mon-Fri from 8am to 5pm.</p>
          <p class="mt-2 text-blue-500 ">+1 (555) 000-0000</p>
        </div>

        <div class="flex flex-col items-center justify-center text-center">
          <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
          </span>

          <h2 class="mt-4 text-lg font-medium text-gray-800 ">Phone</h2>
          <p class="mt-2 text-gray-500 ">Mon-Fri from 8am to 5pm.</p>
          <p class="mt-2 text-blue-500 ">+1 (555) 000-0000</p>
        </div>
      </div>
    </div>
    <div class="flex justify-center ">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Primary Button
      </button>
    </div>
  </section>
  <!-- end Connect us -->


@include('layouts.footer')
