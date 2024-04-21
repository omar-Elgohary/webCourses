let img = document.querySelector(".imge");
let nameCoures = document.getElementById("nameCoures");
let price = document.getElementById("price");
let description = document.getElementById("description");
let titleName = document.getElementById("titleName");
let descriptionCoures = document.getElementById("description-coures");
let lineOne = document.getElementById("lineOne");
let linetwo = document.getElementById("linetwo");
let linethree = document.getElementById("linethree");
let lineFour = document.getElementById("lineFour");
let linefive = document.getElementById("linefive");
let doneBtn = document.getElementById("doneBtn");

console.log(img);
console.log(nameCoures);
console.log(price);
console.log(description);
console.log(titleName);
console.log(descriptionCoures);
console.log(lineOne);
console.log(linetwo);
console.log(linetwo);
console.log(lineFour);
console.log(linefive);
let mood = "Done";
let tmp;
// console.log(nameCouresoures, price, description, titleName, lineOne, linetwo);

// create
let datapro = [];
doneBtn.onclick = function () {
  let newdatepro = {
    img: img.value,
    nameCoures: nameCoures.value,
    price: price.value,
    description: description.value,
    titleName: titleName.value,
    descriptionCoures: descriptionCoures.value,
    lineOne: lineOne.value,
    linetwo: linetwo.value,
    linethree: linethree.value,
    lineFour: lineFour.value,
    linefive: linefive.value,
  };
  if (nameCoures.value != "") {
    if (mood === "Done") {
      datapro.push(newdatepro);
    } else {
      datapro[tmp] = newdatepro;
      mood = "Done";
      doneBtn.innerHTML = "Done";
    }
  }

  // console.log(datapro);

  clearData();
  showDate();
};

// clear data

function clearData() {
  img = img.value;
  nameCoures.value = "";
  price.value = "";
  description.value = "";
  titleName.value = "";
  descriptionCoures = "";
  lineOne.value = "";
  linetwo.value = "";
  linethree.value = "";
  lineFour.value = "";
  linefive.value = "";
}

// showDate

function showDate() {
  let table = "";
  for (let i = 0; i < datapro.length; i++) {
    table += `
    <tr class="bg-gray-100 border-b">
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center text-gray-900">${i}</td>
    <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <img src="image/khaled.jpg" class="w-11 h-11 rounded-[50%]" alt="">
    </td>
    <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
    ${datapro[i].nameCoures}
    </td>
    <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
    ${datapro[i].price}
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52"> ${datapro[i].description}</p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52"> ${datapro[i].titleName}</p>
    </td>
    <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p>${datapro[i].descriptionCoures}</p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52">
      ${datapro[i].lineOne}
      </p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52"> ${datapro[i].linetwo}
      </p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52"> 
      ${datapro[i].linethree}
      </p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52">${datapro[i].lineFour}</p>
    </td>
    <td
      class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <p class="w-52">${datapro[i].linefive}</p>
    </td>
    <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
      <button  onclick="updateData() "
        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 edit-btn rounded-full"><a
          href="#">Edit</a></button>
      <button onclick="deleteData() "
        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full delete-btn"><a
          href="#">Delete</a></button>
    </td>
  </tr>

    `;
    // console.log(table);
  }
  document.getElementById("couresList").innerHTML = table;
  document.getElementById("myModal").style.display = "none";
}
showDate();

// delete
function deleteData(i) {
  console.log(i);
  datapro.splice(i, 1);
  showDate();
}

// updateData
function updateData(i) {
  img.value = datapro[i].img;
  nameCoures.value = datapro[i].nameCoures;
  price.value = datapro[i].price;
  description.value = datapro[i].description;
  titleName.value = datapro[i].titleName;
  descriptionCoures.value = datapro[i].descriptionCoures;
  lineOne.value = datapro[i].lineOne;
  linetwo.value = datapro[i].linetwo;
  linethree.value = datapro[i].linethree;
  lineFour.value = datapro[i].lineFour;
  linefive.value = datapro[i].linefive;
  doneBtn.innerHTML = "Updata";
  mood = "Updata";
  document.getElementById("myModal").style.display = "block";

  tmp = i;
  scroll({
    top: 0,
    behavior: "smooth",
  });
}

// Function to handle delete button click
function handleDeleteButtonClick(event) {
  const row = event.target.closest("tr");
  row.remove();
}

function addDeleteButtonListener(row) {
  const deleteButton = row.querySelector(".delete-btn");
  deleteButton.addEventListener("click", handleDeleteButtonClick);
}

// Function to open modal
document.getElementById("open-modal").addEventListener("click", function () {
  document.getElementById("myModal").style.display = "block";
});

// Function to close modal
document.getElementById("x").addEventListener("click", function () {
  document.getElementById("myModal").style.display = "none";
});

document.getElementById("closeBtn").addEventListener("click", function () {
  document.getElementById("myModal").style.display = "none";
});
