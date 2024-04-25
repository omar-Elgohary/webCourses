@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bg-cover')
@include('layouts.logo')

  <section class=" mb-9">
    <div class="px-5 grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 lg:max-w-[80rem] lg:grid-cols-3  mt-8  container mx-auto">

      @foreach ($courses as $course)
      <div class=" overflow-hidden bg-white rounded-lg shadow-md">
        <div class="relative">
          <img class="w-full h-72 object-cover" src="{{ asset('image/'.$course->image)}}" alt="Image">
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
            <h3 class="text-xl font-semibold mb-2">{{$course->name}}</h3>
            <p class="text-gray-700 text-base">
                {{$course->description}}
            </p>
          </div>
        </div>
        <div class="flex justify-center">
          <a href="{{route('showCourse', $course->id)}}" class=" bg-blue-500 mb-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Primary Button
          </a>
        </div>
      </div>
      @endforeach

    </div>
  </section>

@include('layouts.footer')
