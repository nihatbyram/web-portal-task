<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
/* Modal style */
.modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
}

/* error modal */
.error-modal {
    background-color: #ff6961; /* Kırmızı tonu */
    color: #fff; /* Beyaz renk */
}

/* success modal */
.success-modal {
    background-color: #77dd77; /* Yeşil tonu */
    color: #fff; /* Beyaz renk */
}
</style>

<script>
// Function to show a modal with a message
function showModal(message, modalClass) {
    // Create a div element for the modal
    var modalDiv = $('<div class="modal ' + modalClass + '"></div>').text(message);

    // Append the modal to the body
    $('body').append(modalDiv);

    // Automatically hide the modal after 5 seconds
    setTimeout(function() {
        modalDiv.fadeOut('slow', function() {
            // Remove the modal div after fading out
            $(this).remove();
        });
    }, 5000);
}

// Function to show a success modal
function showSuccess(message) {
    showModal(message, 'success-modal');
}

// Function to show an error modal
function showError(message) {
    showModal(message, 'error-modal');
}

// Function to fetch data from a sample API
function fetchDataAndUpdateTable() {
    // Simulate a successful AJAX request to JSONPlaceholder API
    var apiUrl = 'https://jsonplaceholder.typicode.com/todos/1';

    $.ajax({
         url: './sys/getData.php',
        type: 'GET',
        success: function(data) {
            // Call the function to update the table
            updateTable(data);

            // Display a success modal
            showSuccess('Data successfully fetched and table updated.');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Data retrieval error:', textStatus, errorThrown);

            // Display an error modal
            showError('Error fetching data. Please check the console for details.');
        }
    });
}

// Function to update the table
function updateTable(data) {
    // Implement the logic to update the table here
    // For example, you can iterate over the data and update HTML elements
    // ...

    console.log('Table updated with new data:', data);
}

// Fetch data and update the table every 1 hour
setInterval(fetchDataAndUpdateTable, 60 * 60 * 1000);

// Initial data fetch and table update
fetchDataAndUpdateTable();
</script>



<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VERO Digital Solutions - API-PHP-JS-HTML Tasks</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./assets/style.css">

</head>
<body>

<div class="app-container">
  <div class="app-header">
	   <style>
        /* Logo border CSS */
        img {
            border-radius: 25px; /* edge (px ) */
			box-shadow:0px 13px 39px rgba(1, 0, 0, 0.6);
        }
    </style>
    <div class="app-header-left">
      <span>    <img src="./img/logo.png" alt="Logo VERO">
</span>
      <p class="app-name">VERO 2023 - 2024</p>
      <div class="search-wrapper">
        <input class="search-input" type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search">
		 
		
   
		  
		  
     <button onclick="searchDiv()">  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
          <defs></defs>
          <circle cx="11" cy="11" r="8"></circle>
          <path d="M21 21l-4.35-4.35"></path>
        </svg>
		  </button>
		  
		<script>
    function searchTable() {
        var input, filter, divs, header, subheader, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        divs = document.getElementsByClassName("project-box-wrapper");

        for (i = 0; i < divs.length; i++) {
            header = divs[i].getElementsByClassName("box-content-header")[0];
            subheader = divs[i].getElementsByClassName("box-content-subheader")[0];
            txtValue = header.textContent || header.innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1 || subheader.innerText.toUpperCase().indexOf(filter) > -1) {
                divs[i].style.display = "block"; // changing is here
            } else {
                divs[i].style.display = "none";
				 console.log("clicked search button auto");
            }
        }
    }

    function searchDiv() {
        
        console.log("clicked search button auto");
    }
</script>

		  
      </div>
    </div>
    <div class="app-header-right">
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      
      <button class="profile-btn">
	  
        <img src="https://media.licdn.com/dms/image/C4E03AQEdz4bykfdeOw/profile-displayphoto-shrink_800_800/0/1602689948856?e=1706745600&v=beta&t=QCSeg4o0cjLhviEIYQexcljT0k1p5ZD0dryL8cWf4cc" />
        <span>Nihat Bayram</span>
      </button>
    </div>
  
  </div>
  <div class="app-content">
    <div class="app-sidebar">
      <a href="./index.php" class="app-sidebar-link active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" /></svg>
      </a>
      <a href="modal.php" class="app-sidebar-link">
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-pie-chart" viewBox="0 0 24 24">
          <defs />
          <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
        </svg>
      </a>  
	  <a href="./auth/logout.php" class="app-sidebar-link">
       <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
  </svg>
      </a>
    </div>
