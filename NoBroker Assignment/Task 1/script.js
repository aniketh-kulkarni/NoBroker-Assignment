// This is the JavaScript file
// Get the table element by id
let table = document.getElementById("table");

// Fetch the data from the API
fetch("https://www.nobroker.in/prophub/wp-content/uploads/2022/05/dataSample.json")
  .then((response) => response.json()) // Parse the response as JSON
  .then((data) => {
    // Loop through the data array
    data.forEach((item) => {
      // Create a table row element
      let row = document.createElement("tr");

      // Create a table cell element for each property
      let name = document.createElement("td");
      let phone = document.createElement("td");
      let age = document.createElement("td");
      let country = document.createElement("td");

      // Set the text content of each cell to the corresponding value
      name.textContent = item.name;
      phone.textContent = item.phone;
      age.textContent = item.age;
      country.textContent = item.country;

      // Append the cells to the row
      row.appendChild(name);
      row.appendChild(phone);
      row.appendChild(age);
      row.appendChild(country);

      // Append the row to the table
      table.appendChild(row);
    });
  })
  .catch((error) => console.error("Error:", error)); // Handle any errors
