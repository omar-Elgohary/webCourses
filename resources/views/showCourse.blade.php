@include('layouts.header')
@include('layouts.navbar')


  <!-- start about -->
  <div class="relative overflow-hidden pt-16 space-y-24">
    <div class="relative  container mx-auto ">
      <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
        <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

          <div>
            <div class="">
              <h2 class="xl:text-5xl text-4xl font-bold tracking-tight text-[#121D50]">
                Simplify Your Shipping Experience with Our Easy Step Process
              </h2>
              <div class="flex mt-4">
                <div class="bg-black px-2 py-1">
                  <p class="text-white uppercase text-xl">information</p>
                </div>
                <div>

                </div>
              </div>
              <p class="mt-2 text-lg text-[#5C6C7B]">
                {{ $course->description }}
              </p>
              <button class=" mt-3 w-full bg-blue-500 mb-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Primary Button
              </button>
            </div>
          </div>
        </div>

        <div class=" px-4 mt-8">
          <img loading="lazy" width="" height="" class=" w-[100%] rounded-xl shadow-2xl h-[450px]"
            style="color:transparent" src="{{ asset('image/'. $course->image)}}">

        </div>
      </div>
    </div>
  </div>
  <!-- end about -->

  <!--  -->
  <div class="relative overflow-hidden pt-10 pb-7  space-y-24  bg-[#F7F9FA] mb-8 ">
    <div class="container mx-auto  ">
      <div class="lg:mx-auto  lg:max-w-7xl  lg:gap-24 lg:px-8 ">
        <h1 class="text-3xl uppercase font-black"> Details</h1>
        <h3 class=" text-2xl my-3 text-blue-500 font-bold">What you'll learn</h3>
        <div class="text-lg ">
          <p class="mb-2">1- {{ $course->line_one }}</p>
          <p class="mb-2">2- {{ $course->line_two }}</p>
          <p class="mb-2">3- {{ $course->line_three }}</p>
          <p class="mb-2">4- {{ $course->line_four }}</p>
          <p class="mb-2">5- {{ $course->line_five }}</p>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <div class=" container mx-auto mt-[70px] flex max-w-[58rem] flex-col items-center space-y-4 text-center">

    <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Request to purchase the course</h2>
  </div>
  <div>
    <div class="flex items-center justify-center p-12">
      <!-- Author: FormBold Team -->
      <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{route('storePurchaseRequest')}}" method="POST">
          @csrf
          <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
              Full Name
            </label>
            <input type="text" name="name" id="name" placeholder="Full Name"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
          </div>
          <div class="mb-5">
            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
              Phone Number
            </label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
          </div>
          <div class="mb-5">
            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
              Email Address
            </label>
            <input type="email" name="email" id="email" placeholder="Enter your email"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
          </div>

          <div class="mb-5 pt-3">
            <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
              Address Details
            </label>
            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <input type="text" name="country" id="country" placeholder="country"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                </div>
              </div>
              <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                  <input type="text" name="city" id="city" placeholder="Enter city"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                </div>
              </div>
              <div class="w-full px-3 ">
                <div class="mb-5">
                  <input type="text" name="address" id="address" placeholder="the Address"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                </div>
              </div>

            </div>
          </div>

          <div>
            <button
              class="hover:shadow-form w-full rounded-md bg-blue-500 py-3 px-8 text-center text-base font-semibold text-white outline-none">
              Book Appointment
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ////// -->
  <section id="testimonials" class="py-10 lg:py-20">
    <div class="container mx-auto">
      <div class="text-center">
        <div class=" container mx-auto mb-9 flex max-w-[58rem] flex-col items-center space-y-4 text-center">

          <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">Personal experiences</h2>

          <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
            The product can personalize user experiences by understanding individual preferences and tailoring
            recommendations or content based on user behavior and historical data.
          </p>

        </div>

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
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="{{ asset('image/khaledOne.png')}}"
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
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="{{ asset('image/khaledTwo.jpg')}}"
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
            <div class="flex items-center mt-8"><img class="w-12 h-12 mr-4 rounded-full" src="{{ asset('image/khaledThree.jpg')}}"
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

@include('layouts.footer')
