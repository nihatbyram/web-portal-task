<?php include "./layout.php";?>
    <div class="projects-section">
      <div class="projects-section-header">
      
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

		
		  
    <div class="project-boxes jsGridView" >
		
		

<div id="basicModal" x-data="{ open: false }" @open-me="open=true" @close-me="open=false">
    <button align="center"class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm"
            @click.prevent="open = true"
            aria-controls="basic-modal"
    >Uploader MODAL</button>  <div @keydown.window.escape="open = false" x-show="open" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">


        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>


        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

              
                   
					 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drag & Drop File Upload</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./assets/up-style.css" />

  <body>
    <div class="container">
      <input type="file" id="upload-button" multiple accept="image/*" />
      <label for="upload-button"
        ><i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
      </label>
      <div id="error"></div>
      <div id="image-display"></div> <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false">
                            Cancel
                        </button>
    </div>
    <!-- Script -->
    <script src="./js/up-script.js"></script>
  </body>

<!-- partial -->
  
					
					
					
					
                   

            </div>
        </div>
	</div></div>
		  
      <!--  <div class="projects-status">
          <div class="item-status">
            <span class="status-number">2
			  
			  </span>
            <span class="status-type">In Progress</span>
          </div>
          <div class="item-status">
            <span class="status-number">3</span>
            <span class="status-type">Upcoming</span>
          </div>
          <div class="item-status">
            <span class="status-number">8</span>
            <span class="status-type">Total Projects</span>
          </div>
        </div> -->
       
      </div>
  
</div>

 
   

</div>
</div>

<!-- partial -->
  
  <script  src="./js/modal.js"></script>
 <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
 <script src="https://cdn.tailwindcss.com/3.1.8"></script>

	
	




</body>
</html>
