<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Bootstrap 5 icons CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <title>ALC</title>

  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/src/output.css') }}">
</head>

<body>
  <div class="bg-gray-100">
    <div class="h-screen flex overflow-hidden bg-gray-200">
      <!-- Sidebar -->
      @include('dashboard/layouts/sidebar')

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
                <table class="min-w-full">

                  <thead class="bg-white border-b">
                    <tr class="text-center">
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">S.No
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Picture
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Name Course
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                        Price
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Description
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Title Name
                      </th>
                      <th class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">Description Coures
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

                  <tbody id="data">

                  </tbody>

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

              <form action="#" id="myForm" class="flex justify-center flex-col xl:flex-row w-[80%]  mx-auto mt-4">

                <div class=" ">
                  <label for="imgInput" class="upload">
                    <input type="file" name="" id="imgInput">

                  </label>
                  <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="img ">
                </div>

                <div class="inputField">

                  <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" name="" id="name" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="age" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" name="" id="title" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="city" class="block text-gray-700 font-bold mb-2">Body:</label>
                    <input type="text" name="" id="city" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="title-name" class="block text-gray-700 font-bold mb-2">Title Name:</label>
                    <input type="text" name="" id="title-name" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="descor" class="block text-gray-700 font-bold mb-2">Description
                      Coures:</label>
                    <input type="text" name="" id="descor" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="one" class="block text-gray-700 font-bold mb-2">Line One</label>
                    <input type="text" name="" id="one" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>

                  <div>
                    <label for="two" class="block text-gray-700 font-bold mb-2">Line Two</label>
                    <input type="text" name="" id="two" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="three" class="block text-gray-700 font-bold mb-2">Line Three</label>
                    <input type="text" name="" id="three" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>

                  <div>
                    <label for="four" class="block text-gray-700 font-bold mb-2">Line Four</label>
                    <input type="text" name="" id="four" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                  <div>
                    <label for="five" class="block text-gray-700 font-bold mb-2">Line Five</label>
                    <input type="text" name="" id="five" required
                      class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                  </div>
                </div>

              </form>

            </div>

            <div class="modal-footer">
              <button type="button" class="  bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full"
                data-bs-dismiss="modal">Close</button>
              <button type="submit" form="myForm"
                class="m-[20px]  bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full submit">Submit</button>
            </div>
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
  <script src="{{ asset('assets/saddsdsa.js') }}"></script>
</body>

</html>