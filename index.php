<?php include "./getData.php"; ?>
<!DOCTYPE html>

       
        <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
/* Temel modal stil */
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

/* Stilize edilmiş hata modali */
.error-modal {
    background-color: #ff6961; /* Kırmızı tonu */
    color: #fff; /* Beyaz renk */
}

/* Stilize edilmiş başarı modali */
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
         url: 'getData.php',
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

// Fetch data and update the table every 30 seconds
setInterval(fetchDataAndUpdateTable, 7 * 1000);

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
      </button>
		
      <button class="add-btn" title="Add New Project">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
      <button class="notification-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
          <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
          <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
      </button>
      <button class="profile-btn">
        <img src="https://media.licdn.com/dms/image/C4E03AQEdz4bykfdeOw/profile-displayphoto-shrink_800_800/0/1602689948856?e=1706745600&v=beta&t=QCSeg4o0cjLhviEIYQexcljT0k1p5ZD0dryL8cWf4cc" />
        <span>Nihat Bayram</span>
      </button>
    </div>
  
  </div>
  <div class="app-content">
    <div class="app-sidebar">
      <a href="" class="app-sidebar-link active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" /></svg>
      </a>HOME
      <a href="modal.php" class="app-sidebar-link">
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-pie-chart" viewBox="0 0 24 24">
          <defs />
          <path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z" />
        </svg>
      </a>MODAL
      <a href="" class="app-sidebar-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" /></svg>
      </a>
      <a href="" class="app-sidebar-link">
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-settings" viewBox="0 0 24 24">
          <defs />
          <circle cx="12" cy="12" r="3" />
          <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
        </svg>
      </a>
    </div>
    <div class="projects-section">
      <div class="projects-section-header">
        <p>Tasks</p>
        <p class="time">
			
<?php
// Get the current date
$today = getdate();

// Get the day, month, and year
$day = $today['mday'];
$month = $today['mon'];
$year = $today['year'];

// Get the name of the month
$monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

// Display on the screen
echo "$day  $monthName  $year";
?>

		  </p>
      </div>
      <div class="projects-section-line">
 <div class="projects-status">
              
          <div class="item-status">
            <span class="status-number">
			
			
			<?php

$loopCount = 0;

foreach ($data as $row) {
        $loopCount++;

    
}


echo " $loopCount";
?>
			
			
			
			
			
			
			</span>
            <span class="status-type">Total Tasks</span>
          </div>
        </div> 
		<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
/* Stilize edilmiş hata mesajları */
.error-message {
    background-color: #ff6961; /* Kırmızı tonu */
    color: #fff; /* Beyaz renk */
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

/* Stilize edilmiş başarı mesajları */
.success-message {
    background-color: #77dd77; /* Yeşil tonu */
    color: #fff; /* Beyaz renk */
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

/* Uyarılar için genel stil */
.notification-message {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    display: none; /* Başlangıçta gizli */
}
</style>

<script>
// Function to show a notification message
function showNotification(message, type) {
    // Check if there is already a notification visible
    if ($('#notification-container .notification-message').length === 0) {
        // Create a div element for the notification message
        var notificationDiv = $('<div class="notification-message"></div>').addClass(type).text(message);

        // Append the notification div to the specified container
        $('#notification-container').prepend(notificationDiv);

        // Show the notification
        notificationDiv.fadeIn('slow');

        // Automatically hide the notification after 5 seconds
        setTimeout(function() {
            notificationDiv.fadeOut('slow', function() {
                // Remove the notification div after fading out
                $(this).remove();
            });
        }, 2000);
    }
}

// Function to fetch data and update the table
function fetchDataAndUpdateTable() {
    $.ajax({
        url: 'getData.php',
        type: 'GET',
        success: function(data) {
            // Call the function to update the table
            updateTable(data);

            // Display a success message
            showNotification('Data successfully fetched and table updated.', 'success-message');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Data retrieval error:', textStatus, errorThrown);

            // Display an error message
            showNotification('Error fetching data. Please check the network connect or the console for details.', 'error-message');
        }
    });
}

// Fetch data and update the table every 20 minutes
setInterval(function() {
    fetchDataAndUpdateTable();
}, 7 * 1000);

// Initial data fetch and table update
fetchDataAndUpdateTable();
</script>

<!-- Container to hold the notification messages -->
<div id="notification-container"></div>

		
		
        <div class="view-actions">
          <button class="view-btn list-view" title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
              <line x1="8" y1="6" x2="21" y2="6" />
              <line x1="8" y1="12" x2="21" y2="12" />
              <line x1="8" y1="18" x2="21" y2="18" />
              <line x1="3" y1="6" x2="3.01" y2="6" />
              <line x1="3" y1="12" x2="3.01" y2="12" />
              <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
          </button>
          <button class="view-btn grid-view active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" /></svg>
          </button>
        </div>
      </div>
      <div class="project-boxes jsGridView" >
		 <?php foreach ($data as $row): ?>
        <div class="project-box-wrapper" >
          <div class="project-box" style="background-color:<?php echo $row['colorCode']; ?>">
            <div class="project-box-header" >
              <span>. . .</span>
              <div class="more-wrapper">
                <button class="project-btn-more">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
          </div>
        </div>
        <div class="project-box-content-header" >
          <p class="box-content-header" ><?php echo $row['task']; ?></p>
          <p class="box-content-subheader"> <?php echo $row['title']; ?></p>
		
           

<div id="basicModal" x-data="{ open: false }" @open-me="open=true" @close-me="open=false">
  <button class="mt-3 w-full inline-flex justify-center rounded-md py-2 bg-transparent text-base font-medium  sm:ml-3 sm:w-auto sm:text-sm"
        @click.prevent="open = true"
        aria-controls="basic-modal"
>Description</button>

    <div @keydown.window.escape="open = false" x-show="open" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">


        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>


        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full" @click.away="open = false">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full  sm:mx-0 sm:h-10 sm:w-10"style="background-color: <?php echo $row['colorCode']; ?>">
                                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/exclamation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                   
							 <path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M3,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L3,14 C2.44771525,14 2,13.5522847 2,13 L2,11 C2,10.4477153 2.44771525,10 3,10 Z M3,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,17 C2,16.4477153 2.44771525,16 3,16 Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                   <?php echo $row['task']; ?>'s Description
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
										
										
										
										
										
                                       
									
									<?php
									
									
									if (strlen($row['description']) > 0) {
        echo "<p class='box-content-subheader description'>{$row['description']} </p>";
    } else {
        echo "<p class='box-content-subheader description'>Description not found</p>";
    }
									
								?>	
									
									
									
									
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-black text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false">
                            Close
                        </button>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
         



			
			
			
			
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">TEST Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 90%; background-color:black"></span>
          </div>
          <p class="box-progress-percentage"> 90%</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
            <button class="add-participant" style="color: #ff942e;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
         <div class="days-left" style="color: <?php echo !empty($row['colorCode']) ? $row['colorCode'] : 'white'; ?>">
    <?php echo !empty($row['colorCode']) ? $row['colorCode'] : 'Color Not Assigned'; ?>
</div>
        </div>
      </div>
    </div>
		  <?php endforeach; ?> 
		  </div>
</div>

 
   

</div>
</div>

<!-- partial -->
  <script  src="./js/script.js"></script>
  <script  src="./js/modal.js"></script>
	<script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
<script src="https://cdn.tailwindcss.com/3.1.8"></script>

	
  <!-- jQuery'yi ekleyin -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





</body>
</html>
