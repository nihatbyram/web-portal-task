# Web Portal
Live Latest Version (v1.3)

https://vero.nihatbayram.com.tr

api username: 365

api pass: 1

Project Description:

This project connects to a remote API, downloads a dataset, displays it in a table on a web page, and provides basic search and filter functionalities. Additionally, the page auto-refreshes every 60 minutes to fetch new data without reloading.

## Getting Started
### PHP 5.6 or higher is required

Follow these steps to run the project.

1. Clone the repository:

   ```bash
   git clone https://github.com/nihatbyram/web-portal-task-Nihat.git
  or 
    This version emphasizes downloading the project directly by clicking the "Code" button and selecting "Download ZIP." Adjust as needed based on your project details.


## Usage
Open the main page of the project in your web browser.

Browse the data in the table on the page.

Use the search bar to search through the table data.

Observe that the page automatically refreshes every 60 minutes.

Try opening the modal window to select an image.

![Screenshot-1](https://i.imgur.com/QdUBloF.jpg)
![Screenshot-2](https://i.imgur.com/M1F97Fz.jpg)
![Screenshot-3](https://i.imgur.com/e1H1gK1.jpg)
![Screenshot-4](https://i.imgur.com/UQHCmQE.jpg)
![Screenshot-5](https://i.imgur.com/2gz9Ymk.jpg)
![Screenshot-6](https://i.imgur.com/5xGHcTU.jpg)

## Changelog
#28.11.2023

In this version, some folders have been reorganized.

Improvements have been made to the Tasks tab frontend.

You can now see the total number of tasks.

A warning message "Color not assigned" has been added to tasks without color assignment.

"Dark mode" has been added.

#29.11.2023

**Auto-Refresh and Notification Added:** 

Auto-refresh functionality and notification display functions have been added to the JavaScript code. Data is fetched every 1 hour, and if the retrieval is successful, a success notification is displayed; if an error occurs, an error notification is shown.

![int-varken](https://github.com/VERO-Digital-Solutions/web-portal-task/assets/30882402/b91bcefd-fc6b-4a06-a863-a6962ffa445c)
_When there is a network connection and after 1 hour, it gives a green and successful notification that the API data has been updated successfully._

![int-yok](https://github.com/VERO-Digital-Solutions/web-portal-task/assets/30882402/f6545fe5-eb41-4cdb-9033-2f2064bd01e8)
_If there is no network connection or if there is an error in the getData.php file related to the API or any other issue, it gives a red error notification._



**GitHub Repository and README Updated:** 

GitHub repository descriptions, the README.md file, and other requirements have been updated.


#01.12.2023
Login system added
Errors fixed
![login](https://github.com/nihatbyram/web-portal-task-Nihat/assets/30882402/2b7dd02b-ce56-46bd-a617-3b84398c6bb9)
Login page

![logout](https://github.com/nihatbyram/web-portal-task-Nihat/assets/30882402/35918faa-4690-4bc1-9707-6932ebef022f)

Logout page

