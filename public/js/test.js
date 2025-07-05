// script.js
var tableInfo = data1;
console.log(tableInfo);

// const deleteRoutesMain = deleteRoutesInitial;


// DOM elements
const tableBody = document.getElementById("table-body");
const searchInput = document.getElementById("search");
const entriesSelect = document.getElementById("entries");
const hiddenFields = document.getElementById('deleteSelectedButton');
hiddenFields.style.display = 'none';
var mainCheckBoxV1 = document.getElementById('mainCheckbox');
var selected = [];
let mainCheckboxEventListener;

// var DR = new FormData();
// DR.append()
// document.addEventListener('DOMContentLoaded', function () {
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success me-3",
    cancelButton: "btn btn-danger me-3"
  },
  buttonsStyling: false
});

function test(checkboxes, event) {
  // console.log(checkboxes);
  if (!mainCheckBoxV1.checked) {
    selected = [];
  }
  console.log("My checkboxes: ");
  console.log(checkboxes);

  checkboxes.forEach((item) => {
    item.checked = mainCheckBoxV1.checked;
    if (mainCheckBoxV1.checked) {
      if (!selected.includes(item.value)) {
        selected.push(item.value);
      }
      hiddenFields.style.display = 'block';
    }
    else {
      hiddenFields.style.display = 'none';
    }
  });
  console.log("Result of changing state of main checkbox: " + selected);
}

// In this function system checks if all checkboxes have checked status,
// if all => main checkbox status will be checked,
// else => will be unchecked
// Except above mentioned action, this function adds all checkboxes
// that have checked=true to array named 'selected' 
const setStateOfMainCheckBox = (checkboxes) => {
  checkboxes.forEach((item) => {
    item.addEventListener('change', () => {
      if (!item.checked) {
        mainCheckBoxV1.checked = false;
        const index = selected.indexOf(item.value);
        selected.splice(index, 1);
        if (selected.length < 1) {
          hiddenFields.style.display = 'none';
        }
        // console.log("State of selected: " + selected);

      } else if (Array.from(checkboxes).every((checkbox) => checkbox.checked)) {
        mainCheckBoxV1.checked = true;
        console.log("State of selected: " + selected);
        hiddenFields.style.display = 'block';
      }
      else {
        if (!selected.includes(item.value)) {
          selected.push(item.value);
        }
        hiddenFields.style.display = 'block';
      }
    });
    // console.log("State of checkbox was changed: " + selected);
  });
  console.log("Result of changing state of selected checkboxes: " + selected);
};

// Pagination variables
let currentPage = 1;
let rowsPerPage = parseInt(entriesSelect.value);

// Helper function to display rows
function displayRows(dataSubset) {
  tableBody.innerHTML = "";
  var element = 0;

  dataSubset.forEach((item) => {
    const row = document.createElement("tr");

    $arrows = "<div><img class='arrow-image' src='img/arrow.svg'></div>";
    const haveChildren = item.child_num != 0;
    if (haveChildren) {
      row.className += 'bg-amber-500';
      $arrows += "<div class='pt-0.5'>";
      for (let i = 0; i < item.child_num; i++) {
        $arrows += ">"
      }
      $arrows += "</div>";
    }
    // console.log(item.name);
    // console.log(item.deleteRoute);

    row.innerHTML = `
      <td><input type="checkbox" class="itemCheckbox" value="${item.buttonId}"></td>
      <td class="${haveChildren ? 'd-flex align-content-center' : ''}">${haveChildren ? $arrows : ""}</td>
      <td>
      ${item.main_category}</td >
      <td>${item.name}</td>
      <td>
        <span class="status-badge ${item.status.toLowerCase() === "active"
        ? "status-professional"
        : "status-resigned"
      }">
          ${item.status}
        </span>
      </td >
      <td>${item.order_id}</td>
    <td>
      <div class="btn-group dropstart">
        <i
          class="fas fa-ellipsis-v"
          type="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
        </i>
        <ul class="dropdown-menu me-3">
          <li><a class="dropdown-item" href="${item.editRoute}">Edit</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="${item.showRoute}">Show</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <button type="button" class="dropdown-item" name="${item.buttonId}" data-bs-toggle="delete-buttons"
            data-bs-target="deleteButton_${item.buttonId}">Delete</button>
          </li>
        </ul>
      </div>
    </td> 
    `;

    tableBody.appendChild(row);

    element++;
  });

  var newDeleteButtons = document.querySelectorAll('[data-bs-toggle="delete-buttons"]');
  addPopUpToDeleteButtons(newDeleteButtons);
  mainCheckBoxV1.checked = false;
  selected = [];

  const itemCheckboxes = document.querySelectorAll('.itemCheckbox');
  // setEventToCheckBoxes(itemCheckboxes);
  mainCheckboxEventListener = test.bind(null, itemCheckboxes);
  mainCheckBoxV1.addEventListener('change', mainCheckboxEventListener);

  setStateOfMainCheckBox(itemCheckboxes);
}

// Paginate data

function paginateData(data, page, rows) {
  const start = (page - 1) * rows;
  const end = start + rows;
  return data.slice(start, end);
}

// Update pagination UI
// function updatePaginationUI(totalPages) {
//   const paginationContainer = document.querySelector(".pagination");
//   paginationContainer.innerHTML = "";

//   for (let i = 1; i <= totalPages; i++) {
//     const li = document.createElement("li");
//     if (i === currentPage) {
//       li.classList.add("page-item", "active");
//     }
//     li.innerHTML = `<a class= "page-link" href = "#" > ${i}</a > `;
//     li.addEventListener("click", () => {
//       currentPage = i;
//       renderTable();
//     });
//     paginationContainer.appendChild(li);
//   }
// }
function updatePaginationUI(totalPages) {
  const paginationContainer = document.querySelector(".pagination");
  paginationContainer.innerHTML = "";

  const createPageItem = (pageNumber, isActive = false) => {
    const li = document.createElement("li");
    li.classList.add("page-item");
    if (isActive) li.classList.add("active");
    li.innerHTML = `<a class="page-link" href="#">${pageNumber}</a>`;
    li.addEventListener("click", () => {
      currentPage = pageNumber;
      renderTable();
    });
    return li;
  };

  const createEllipsisItem = () => {
    const li = document.createElement("li");
    li.classList.add("page-item", "disabled");
    li.innerHTML = `<span class="page-link">...</span>`;
    return li;
  };

  // Define range limits for pagination
  const visibleRange = 2; // Number of pages visible before/after the current page
  const startPage = Math.max(1, currentPage - visibleRange);
  const endPage = Math.min(totalPages, currentPage + visibleRange);

  // Add "Previous" button
  const prevLi = document.createElement("li");
  prevLi.classList.add("page-item");
  if (currentPage === 1) prevLi.classList.add("disabled");
  prevLi.innerHTML = `<a class="page-link" href="#">Previous</a>`;
  prevLi.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderTable();
    }
  });
  paginationContainer.appendChild(prevLi);

  // Add first page and ellipsis if needed
  if (startPage > 1) {
    paginationContainer.appendChild(createPageItem(1, currentPage === 1));
    if (startPage > 2) {
      paginationContainer.appendChild(createEllipsisItem());
    }
  }

  // Add visible page numbers
  for (let i = startPage; i <= endPage; i++) {
    paginationContainer.appendChild(createPageItem(i, i === currentPage));
  }

  // Add last page and ellipsis if needed
  if (endPage < totalPages) {
    if (endPage < totalPages - 1) {
      paginationContainer.appendChild(createEllipsisItem());
    }
    paginationContainer.appendChild(createPageItem(totalPages, currentPage === totalPages));
  }

  // Add "Next" button
  const nextLi = document.createElement("li");
  nextLi.classList.add("page-item");
  if (currentPage === totalPages) nextLi.classList.add("disabled");
  nextLi.innerHTML = `<a class="page-link" href="#">Next</a>`;
  nextLi.addEventListener("click", () => {
    if (currentPage < totalPages) {
      currentPage++;
      renderTable();
    }
  });
  paginationContainer.appendChild(nextLi);
}



// Render the table
function renderTable() {

  selected = [];
  console.log(tableInfo);

  // Apply search filter
  const searchTerm = searchInput.value.toLowerCase();
  const filteredData = tableInfo.filter(
    (item) =>
      item.main_category.toLowerCase().includes(searchTerm) ||
      item.name.toLowerCase().includes(searchTerm) ||
      item.status.toLowerCase().includes(searchTerm) ||
      item.order_id.includes(searchTerm)
  );

  // Paginate filtered data
  const paginatedData = paginateData(filteredData, currentPage, rowsPerPage);

  // Display rows
  displayRows(paginatedData);

  // Update pagination UI
  const totalPages = Math.ceil(filteredData.length / rowsPerPage);
  updatePaginationUI(totalPages);

  // Update "Showing x to y of z" text
  const showingText = document.querySelector(".showing-values");

  showingText.textContent = `Showing ${(currentPage - 1) * rowsPerPage + 1
    } to ${Math.min(currentPage * rowsPerPage, filteredData.length)} of ${filteredData.length
    } entries`;
}

// Event listeners
searchInput.addEventListener("input", () => {
  currentPage = 1;
  renderTable();
});

entriesSelect.addEventListener("change", () => {
  rowsPerPage = parseInt(entriesSelect.value);
  currentPage = 1;
  renderTable();
});

// Initial render
renderTable();