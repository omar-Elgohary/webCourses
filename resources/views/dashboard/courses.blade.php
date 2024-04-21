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

          <form action="{{ route('dashboard.addCourse') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="myModal" class="modal">
              <div class="modal-content">
                <span id="x">X</span>

                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Image
                </label>
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file" name="image"
                  class="imge appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Course Name
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="nameCoures" type="text" placeholder="title" name="title">


                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Price
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 mb-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="price" type="number" placeholder="body" name="price">

                <label class="block text-gray-700 font-bold mb-2" for="card-number">
                  Description
                </label>
                <input
                  class="appearance-none border border-gray-400 rounded w-full py-2 mb-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="description" type="text" placeholder="Country" name="description">
        
                <div class="flex  justify-between">
                  <button id="doneBtn"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full">Done</button>
                  <button id="closeBtn"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full delete-btn">Close</button>
                </div>
              </div>
            </div>
        </form>


          <h1 class="text-2xl mb-3 font-bold">Information for course participants</h1>
          <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="bg-white border-b">

                      <tr>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-right">
                          #
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-right">
                          Image
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Course Name
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Price
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Description
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ w-[300px]">
                          Details
                        </th>
                      </tr>
                    </thead>

                    @foreach (\App\Models\Course::all() as $key => $course)
                      <tbody id="couresList">
                        <!-- id="couresList" -->
                        <tr class="bg-gray-100 border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center text-gray-900">{{$key+1}}</td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            <img src="{{ asset('image/'.$course->image) }}" class="w-11 h-11 rounded-[50%]" alt="">
                          </td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            {{ $course->title }}
                          </td>
                          <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            {{ $course->price }}
                          </td>
                          <td
                            class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                            <p class="w-52">{{ $course->description }}
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