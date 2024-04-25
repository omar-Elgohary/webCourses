@include('dashboard.layouts.header')
  <div class="bg-gray-100">
    <div class="h-screen flex overflow-hidden bg-gray-200">
      <!-- Sidebar -->
      @include('dashboard.layouts.sidebar')


      <section class="flex-1 flex flex-col overflow-hidden">
        <div class="bg-white shadow">
          <div class="container mx-auto">
            <div class="flex justify-between items-center py-4 px-2">
              <!-- Add Button -->
              <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full newUser"
                data-bs-toggle="modal" data-bs-target="#userForm">New Course</button>

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
        <div class="container mx-auto">
          <h1 class="text-2xl mb-3 mt-3 font-bold">Courses</h1>
        </div>
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="table table-striped text-center min-w-full">

                  <thead class="bg-white border-b">
                    <tr class="text-center">
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        #
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Image
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Name
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Price
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Description
                      </th>

                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Line One
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Line Two
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Line Three
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Line Four
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Line Five
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Action
                      </th>
                    </tr>
                  </thead>

                @foreach ($courses as $key => $item)
                    <tbody id="data">
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                <img class="rounded-full" src="{{ asset('image/' . $item->image) }}" width="100" height="100" alt="">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->line_one }}</td>
                            <td>{{ $item->line_two }}</td>
                            <td>{{ $item->line_three }}</td>
                            <td>{{ $item->line_four }}</td>
                            <td>{{ $item->line_five }}</td>
                            <td>
                                <a href="{{route('dashboard.editCourse', $item->id)}}" class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <a href="{{route('dashboard.deleteCourse', $item->id)}}" class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach

                </table>
              </div>
            </div>
          </div>
        </div>
      </section>



      <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="caerd">
            <div class="px-6 py-4 bg-gray-900 text-white flex justify-between">
              <h4 class=" modal-title bg-slate-900">Fill the Form</h4>
              <button type="button" class=" text-white" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="">
              <form action="{{route('dashboard.addCourse')}}" method="POST" enctype="multipart/form-data" id="myForm" class="flex justify-center flex-col xl:flex-row w-[80%]  mx-auto mt-4">
                @csrf
                <div class=" ">
                  <label for="imgInput" class="upload">
                    <input type="file" name="image">
                  </label>
                  <img src="{{ asset('image/Profile.webp')}}" alt="" width="200" height="200" class="img">
                </div>

                <div class="inputField">
                  <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" name="name" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="age" class="block text-gray-700 font-bold mb-2">Price:</label>
                    <input type="text" name="price"required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="city" class="block text-gray-700 font-bold mb-2">Description:</label>
                    <input type="text" name="description" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="title-name" class="block text-gray-700 font-bold mb-2">Line One:</label>
                    <input type="text" name="line_one" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="descor" class="block text-gray-700 font-bold mb-2">Line Two:</label>
                    <input type="text" name="line_two" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="three" class="block text-gray-700 font-bold mb-2">Line Three</label>
                    <input type="text" name="line_three" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>

                  <div>
                    <label for="four" class="block text-gray-700 font-bold mb-2">Line Four</label>
                    <input type="text" name="line_four" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="five" class="block text-gray-700 font-bold mb-2">Line Five</label>
                    <input type="text" name="line_five" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="  bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full"
                data-bs-dismiss="modal">Close</button>
              <button type="submit"
                class="m-[20px] bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full submit">Submit</button>
            </div>
        </form>

          </div>
        </div>
      </div>

      <!--Read Data Modal-->

    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

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
  <script src="{{ asset('assets/coures.js')}}"></script>
</body>

</html>
