<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/output.css">
  <link rel="stylesheet" href="/all.min.css">
</head>

<body>
  <section class="flex relative">
    <nav class="bg-blue-500  w-[15%] overflow-hidden h-[100vh] fixed">
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
    <!-- component -->
    <div class="text-gray-900 bg-gray-200 w-[100%] relative left-[280px] -z-10 ">
      <div class=" ml-5 mt-5 flex items-center ">
        <h1 class="text-3xl">Teacher</h1>
        <div class="ml-96">
          <button
            class=" text-xl bg-blue-500 hover:bg-blue-700 text-white py-3 px-5  mt-1 rounded focus:outline-none focus:shadow-outline">
            <i class="fa-solid fa-plus"></i> Now
            Teacher</button>
        </div>
      </div>
      <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
          <thead>
            <tr class="border-b">
              <th class="text-left p-3 px-5">picture</th>
              <th class="text-left p-3 px-5">Name</th>
              <th class="text-left p-3 px-5">Job</th>
              <th class="text-left p-3 px-5">body</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                <button type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-orange-100 ">
              <td class="p-3 px-5">
                <input type="file" accept="image/jpeg, image/png , image/jpg" id="input-file">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Name" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="Job Title" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5">
                <input type="text" placeholder="body" class="bg-transparent border-b-2 border-gray-300 py-2">
              </td>
              <td class="p-3 px-5 flex justify-end">
                <button type="button"
                  class="mr-3 text-lg bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button
                  type="button"
                  class="text-lg bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
              </td>
            </tr>



          </tbody>

        </table>

      </div>
    </div>
    <!-- component -->

  </section>


</body>


</html>