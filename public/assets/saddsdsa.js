var form = document.getElementById("myForm"),
  imgInput = document.querySelector(".img"),
  file = document.getElementById("imgInput"),
  userName = document.getElementById("name"),
  title = document.getElementById("title"),
  city = document.getElementById("city"),
  titleName = document.getElementById("title-name"),
  descor = document.getElementById("descor"),
  one = document.getElementById("one"),
  two = document.getElementById("two"),
  three = document.getElementById("three"),
  four = document.getElementById("four"),
  five = document.getElementById("five"),
  submitBtn = document.querySelector(".submit"),
  userInfo = document.getElementById("data"),
  modal = document.getElementById("userForm"),
  modalTitle = document.querySelector("#userForm .modal-title"),
  newUserBtn = document.querySelector(".newUser");

let getData = localStorage.getItem("userProfile")
  ? JSON.parse(localStorage.getItem("userProfile"))
  : [];

let isEdit = false,
  editId;
showInfo();

newUserBtn.addEventListener("click", () => {
  (submitBtn.innerText = "Submit"), (modalTitle.innerText = "Fill the Form");
  isEdit = false;
  imgInput.src = "./image/Profile Icon.webp";
  form.reset();
});

file.onchange = function () {
  if (file.files[0].size < 1000000) {
    // 1MB = 1000000
    var fileReader = new FileReader();

    fileReader.onload = function (e) {
      imgUrl = e.target.result;
      imgInput.src = imgUrl;
    };

    fileReader.readAsDataURL(file.files[0]);
  } else {
    alert("This file is too large!");
  }
};

function showInfo() {
  document
    .querySelectorAll(".employeeDetails")
    .forEach((info) => info.remove());
  getData.forEach((element, index) => {
    let createElement = `<tr class="employeeDetails text-center bg-gray-100 border-b r">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center text-gray-900">${
              index + 1
            }</td>
            <td><img src="${
              element.picture
            }" alt="" width="50" height="50" class="m-auto"></td>
            <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">${
              element.employeeName
            }</td>
            <td class="text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">${
              element.employeeTitle
            }</td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeCity}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeTitleName}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeDescor}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeOne}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeTwo}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeThree}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeFour}</p></td>
            <td  class="w-52 overflow-hidden text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
            <p class="w-52">${element.employeeFive}</p></td>

            <td class="flex justify-center gap-2 text-base font-medium text-gray-900 px-6 py-4 text-center whitespace-nowrap">
               
                <button class="  bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 edit-btn rounded-[8px]" onclick="editInfo(${index}, '${
      element.picture
    }', '${element.employeeName}', '${element.employeeTitle}', '${
      element.employeeCity
    }', '${element.employeeTitleName}', '${element.employeeDescor}', '${
      element.employeeOne
    }', '${element.employeeTwo}', '${element.employeeThree}', '${
      element.employeeFour
    }', '${
      element.employeeFive
    }')" data-bs-toggle="modal" data-bs-target="#userForm"><i class="bi bi-pencil-square"></i></button>

                <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-3 rounded-[8px] delete-btn" onclick="deleteInfo(${index})"><i class="bi bi-trash"></i></button>
                            
            </td>
        </tr>`;

    userInfo.innerHTML += createElement;
  });
}
showInfo();

// function readInfo(pic, name, title, city) {
//   (document.querySelector(".showImg").src = pic),
//     (document.querySelector("#showName").value = name),
//     (document.querySelector("#showTitle").value = title),
//     (document.querySelector("#showCity").value = city);
// }

function editInfo(
  index,
  pic,
  name,
  Title,
  City,
  TitleName,
  Descor,
  One,
  Two,
  Three,
  Four,
  Five
) {
  isEdit = true;
  editId = index;
  imgInput.src = pic;
  userName.value = name;
  title.value = Title;
  city.value = City;
  titleName.value = TitleName;
  descor.value = Descor;
  one.value = One;
  two.value = Two;
  three.value = Three;
  four.value = Four;
  five.value = Five;

  submitBtn.innerText = "Update";
  modalTitle.innerText = "Update The Form";
}

function deleteInfo(index) {
  if (confirm("Are you sure want to delete?")) {
    getData.splice(index, 1);
    localStorage.setItem("userProfile", JSON.stringify(getData));
    showInfo();
  }
}

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const information = {
    picture:
      imgInput.src == undefined ? "./image/Profile Icon.webp" : imgInput.src,
    employeeName: userName.value,
    employeeTitle: title.value,
    employeeCity: city.value,
    employeeTitleName: titleName.value,
    employeeDescor: descor.value,
    employeeOne: one.value,
    employeeTwo: two.value,
    employeeThree: three.value,
    employeeFour: four.value,
    employeeFive: five.value,
  };

  if (!isEdit) {
    getData.push(information);
  } else {
    isEdit = false;
    getData[editId] = information;
  }

  localStorage.setItem("userProfile", JSON.stringify(getData));

  submitBtn.innerText = "Submit";
  modalTitle.innerHTML = "Fill The Form";

  showInfo();

  form.reset();

  imgInput.src = "./image/Profile Icon.webp";

  // modal.style.display = "none"
  // document.querySelector(".modal-backdrop").remove()
});
