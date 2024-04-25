@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bg-cover')
@include('layouts.logo')

<section class="bg-[#f3f4f6]">
  <div class=" container px-4 mx-auto grid grid-cols-1 gap-3 md:gap-6 py-10 lg:grid-cols-2  items-center">

    @foreach($teachers as $teacher)
      <div class="max-w-xl overflow-hidden mx-auto bg-white rounded-xl shadow-md  md:max-w-2xl">
        <div class="flex">
          <div class="md:shrink-0 h-48  lg:h-48">
            <img id="imgInput" class="h-full  object-cover md:h-full w-[600px] md:w-48" src="{{asset('image/'.$teacher->image)}}">
          </div>
          <div class="px-8 md:py-4">
            <span href="#" class="block mt-1 text-xl leading-tight font-medium text-black">
              {{$teacher->name}}
            </span>
            <div class="uppercase mt-2 tracking-wide text-sm text-blue-500 font-semibold">job: <span>{{$teacher->job}}</span>
            </div>

            <p class="mt-2 text-slate-500">
              {{$teacher->body}}s
          </div>
        </div>
      </div>
    @endforeach

  </div>
</section>

@include('layouts.footer')
