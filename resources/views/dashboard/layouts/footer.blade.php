<script>
  let i = document.querySelector(".mohame")
  let img = document.querySelector(".khaled")
  // img.src = "image/khaled.jpg";
  function myFunction() {
    img.src = `${URL.createObjectURL(i.files[ 0 ])}`;
  }

  // Function to handle delete button click
  function handleDeleteButtonClick(event) {
    const row = event.target.closest('tr');
    row.remove();
  }

  function addDeleteButtonListener(row) {
    const deleteButton = row.querySelector('.delete-btn');
    deleteButton.addEventListener('click', handleDeleteButtonClick);
  }

  function addRow(imageSrc, name, title, body) {
    const tableBody = document.getElementById('teacherList');
    const newRow = document.createElement('tr');
    newRow.className = 'bg-gray-100 border-b';
    imageSrc = URL.createObjectURL(i.files[ 0 ])
    newRow.innerHTML = `
      <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap"><img src="${imageSrc}" alt="Image" class=" w-12 h-12 m-auto rounded-[50%]"></td>
      <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">${name}</td>
      <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">${title}</td>
      <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap overflow-hidden w-[300px]"> <p class="w-[300px] wh text-center">${body}</p></td>
      <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full"><a href="#">Edit</a></button>
        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full delete-btn"><a href="#">Delete</a></button>
      </td>
    `;
    tableBody.appendChild(newRow);
    addDeleteButtonListener(newRow);
  }
  document.getElementById('doneBtn').addEventListener('click', function () {
    const input1Value = document.querySelector('#myModal input:nth-of-type(1)').value;
    const input2Value = document.querySelector('#myModal input:nth-of-type(2)').value;
    const input3Value = document.querySelector('#myModal input:nth-of-type(3)').value;
    const input4Value = document.querySelector('#myModal input:nth-of-type(4)').value;
    addRow(input1Value, input2Value, input3Value, input4Value);
    document.getElementById('myModal').style.display = "none";
  });

  // Function to open sidebar
  const sidebar = document.getElementById('sidebar');
  const openSidebarButton = document.getElementById('open-sidebar');
  openSidebarButton.addEventListener('click', (e) => {
    e.stopPropagation();
    sidebar.classList.toggle('-translate-x-full');
  });

  // Function to close sidebar when clicking outside of it
  document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
      sidebar.classList.add('-translate-x-full');
    }
  });

  // Function to open modal
  document.getElementById('open-modal').addEventListener('click', function () {
    document.getElementById('myModal').style.display = "block";
  });

  // Function to close modal
  document.getElementById('x').addEventListener('click', function () {
    document.getElementById('myModal').style.display = "none";
  });

  document.getElementById('closeBtn').addEventListener('click', function () {
    document.getElementById('myModal').style.display = "none";
  });


</script>

</div>
</script>
</body>
</html>
