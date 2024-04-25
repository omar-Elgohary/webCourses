<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="" id="userForm">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="caerd">

        <div class="px-6 py-4 bg-gray-900 text-white flex justify-between">
          <h4 class=" modal-title bg-slate-900">Fill the Form</h4>
          <button type="button" class=" text-white" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>

        <div class="">
            <form action="{{ route('dashboard.updateCourse', $course->id) }}" method="POST" enctype="multipart/form-data" id="myForm" class="flex justify-center flex-col xl:flex-row w-[80%] mx-auto mt-4">
                @csrf
                @method('PUT')
            <div class=" ">
              <label for="imgInput" class="upload">
                <input type="file" name="image">
              </label>
              <img src="{{ asset('image/'.$course->image) }}" alt="" width="200" height="200" class="img ">
            </div>

            <div class="inputField">
              <div>
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" value="{{ $course->name }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
              <div>
                <label for="age" class="block text-gray-700 font-bold mb-2">Price:</label>
                <input type="text" name="price" value="{{ $course->price }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
              <div>
                <label for="descor" class="block text-gray-700 font-bold mb-2">Description:</label>
                <input type="text" name="description" value="{{ $course->description }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
              <div>
                <label for="one" class="block text-gray-700 font-bold mb-2">Line One</label>
                <input type="text" name="line_one" value="{{ $course->line_one }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>

              <div>
                <label for="two" class="block text-gray-700 font-bold mb-2">Line Two</label>
                <input type="text" name="line_two" value="{{ $course->line_two }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
              <div>
                <label for="three" class="block text-gray-700 font-bold mb-2">Line Three</label>
                <input type="text" name="line_three" value="{{ $course->line_three }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>

              <div>
                <label for="four" class="block text-gray-700 font-bold mb-2">Line Four</label>
                <input type="text" name="line_four" value="{{ $course->line_four }}" required
                  class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
              </div>
              <div>
                <label for="five" class="block text-gray-700 font-bold mb-2">Line Five</label>
                <input type="text" name="line_five" value="{{ $course->line_five }}" required
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
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>
