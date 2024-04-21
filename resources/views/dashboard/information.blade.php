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
                          Name
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Phone
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Email 
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Country
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          city
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Address
                        </th>
                        <th scope="col" class="text-base font-semibold text-gray-900 px-6 py-4 text-righ">
                          Details
                        </th>
                      </tr>
                    </thead>

                  @foreach (\App\Models\PurchaseRequest::all() as $key => $item)
                    <tbody>
                      <tr class="bg-gray-100 border-b" id="informationDetails">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center text-gray-900">{{ $key+1 }}</td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->name }}
                        </td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->phone }}
                        </td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->email }}
                        </td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->country }}
                        </td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->city }}
                        </td>
                        <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
                          {{ $item->address }}
                        </td>
                        <td>
                          <button onclick="deleteData() "
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