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
              <!-- Add Button -->
              <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full"
                id="open-modal">Add</button>

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
        <div class="flex-1 overflow-auto p-4">
          <h1 class="text-2xl mb-3 font-bold">Teachers</h1>
          <!-- Pop-up Modal -->

          <form action="{{ route('dashboard.addTeacher') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="myModal" class="modal">
              <div class="modal-content">
                <span id="x">X</span>

                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  image
                </label>
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file" name="image"
                  class="mohame appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">


                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Name
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="name" type="text" placeholder="Name" name="name">
                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Job
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="name" type="text" placeholder="title" name="job">


                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Body
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 mb-10 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="name" type="text" placeholder="body" name="body">

                <div class="flex m-[20px] justify-between">
                  <button id="doneBtn"
                    class="m-[20px]  bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full">Done</button>
                  <button id="closeBtn"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full delete-btn">Close</button>
                </div>
              </div>
            </div>
          </form>
          

          <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="bg-white border-b">
                      <tr>

                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          #
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Image
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Name
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Job
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Body
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Details
                        </th>


                      </tr>
                    </thead>
                    @foreach (\App\Models\Teacher::all() as $key => $teacher)
                      <tbody id="couresList">
                        <!-- id="couresList" -->
                        <tr class="bg-gray-100 border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center text-gray-900">{{$key+1}}</td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            <img src="{{ asset('image/'.$teacher->image) }}" class="w-11 h-11 rounded-[50%]" alt="">
                          </td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            {{ $teacher->name }}
                          </td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            {{ $teacher->job }}
                          </td>
                          <td
                            class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            <p class="w-52">{{ $teacher->body }}
                          </td>

                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            <button
                              class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full"><a
                                href="#">Edit</a></button>
                            <button
                              class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full delete-btn"><a
                                href="#">Delete</a></button>
                          </td>
                        </tr>

                      </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>

@include('dashboard.layouts.footer')