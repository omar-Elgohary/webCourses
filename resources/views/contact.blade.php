@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bg-cover')
@include('layouts.logo')
    
  <!-- Container for demo purpose -->
  <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <iframe class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat w-full px-4"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940969.2255199654!2d35.90481762372662!3d39.05030328475345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b2d9289220d25%3A0xf3daf72eb4a509ae!2zRGV2ZWNpcMSxbmFyLCBCb8SfYXpsxLF5YW4v2YrZiNiy2KzYp9iq2Iwg2KrYsdmD2YrYpw!5e0!3m2!1sar!2seg!4v1712060849904!5m2!1sar!2seg"
        height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- <div
        class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat bg-[url('https://mdbcdn.b-cdn.net/img/new/textures/full/284.jpg')]">
      </div> -->
      <div class="container px-6 md:px-12 mt-[-30px]">
        <div
          class="relative bg-white p-6 shadow-xl mx-auto w-full max-w-2xl rounded-2xl border-dashed border-2 border-gray-500">
          <div class="grid grid-cols-2 sm:grid-cols-4 items-center">

            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                <path
                  d="M11 39h7.5V26.5h11V39H37V19.5L24 9.75 11 19.5Zm-3 3V18L24 6l16 12v24H26.5V29.5h-5V42Zm16-17.65Z" />
              </svg>
              Home
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                <path
                  d="M12 40q-3.3 0-5.65-2.35Q4 35.3 4 32V16q0-3.3 2.35-5.65Q8.7 8 12 8h24q3.3 0 5.65 2.35Q44 12.7 44 16v16q0 3.3-2.35 5.65Q39.3 40 36 40Zm0-23.5h24q1.45 0 2.725.45Q40 17.4 41 18.25V16q0-2.1-1.45-3.55Q38.1 11 36 11H12q-2.1 0-3.55 1.45Q7 13.9 7 16v2.25q1-.85 2.275-1.3Q10.55 16.5 12 16.5Zm-4.85 6.8L31 29.05q.35.1.725.025.375-.075.625-.325l8-6.7q-.65-1.15-1.8-1.85-1.15-.7-2.55-.7H12q-1.75 0-3.1 1.075T7.15 23.3Z" />
              </svg>
              Budget
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                <path
                  d="M12 28.05h15.65v-3H12Zm0-6.5h24v-3H12Zm0-6.5h24v-3H12ZM4 44V7q0-1.15.9-2.075Q5.8 4 7 4h34q1.15 0 2.075.925Q44 5.85 44 7v26q0 1.15-.925 2.075Q42.15 36 41 36H12Zm3-7.25L10.75 33H41V7H7ZM7 7v29.75Z" />
              </svg>
              Message
            </a>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                <path
                  d="M24 23.95q-3.3 0-5.4-2.1-2.1-2.1-2.1-5.4 0-3.3 2.1-5.4 2.1-2.1 5.4-2.1 3.3 0 5.4 2.1 2.1 2.1 2.1 5.4 0 3.3-2.1 5.4-2.1 2.1-5.4 2.1ZM8 40v-4.7q0-1.9.95-3.25T11.4 30q3.35-1.5 6.425-2.25Q20.9 27 24 27q3.1 0 6.15.775 3.05.775 6.4 2.225 1.55.7 2.5 2.05.95 1.35.95 3.25V40Zm3-3h26v-1.7q0-.8-.475-1.525-.475-.725-1.175-1.075-3.2-1.55-5.85-2.125Q26.85 30 24 30t-5.55.575q-2.7.575-5.85 2.125-.7.35-1.15 1.075Q11 34.5 11 35.3Zm13-16.05q1.95 0 3.225-1.275Q28.5 18.4 28.5 16.45q0-1.95-1.275-3.225Q25.95 11.95 24 11.95q-1.95 0-3.225 1.275Q19.5 14.5 19.5 16.45q0 1.95 1.275 3.225Q22.05 20.95 24 20.95Zm0-4.5ZM24 37Z" />
              </svg>
              Account
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  
@include('layouts.footer')
