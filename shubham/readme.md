
# Comments

## Laravel Framework
I've used Laravel framework for this task because of :
- Low Server overhead.
Laravel has the functionality that it can reduce the overhead on server. So as a result processing speed would be fast with compare to other framework.
- Robust Tool Integration for Agile Development:
 The PHP framework is well configured in a manner to effectively stores cached components in a particular file system.
 - Configuration Error and Exceptional Handling:
 Automation testing is less time consuming and in most instances more exact compared to a manual one.
 
 ## MYSQL Vs Json
The reason why i used MySql over json is 
- Inserting or storing data MySQL was quicker and the code is cleaner even though you still have to design the database layout and schema it’s still worth it to use MySQL.
- MySQL stores data in a database. JSON stores data in a format to be passed to and from the server to the client. Javascript/jquery can use JSON as data objects, but they only exist on the client side for the life of the page.
So if you wanted to store data as JSON you'd probably have to store them as text files to save the data.
You have to store data in a database. Use functions to convert it to JSON format, then pass it to the webpage for javascript to consume and present to the user.(in short it would be time conusming and be complicated).

## Functionality  
On opening the home page, A default welcome page will be seen. Just below the Welcome heading a button will be present which on click will redirect the user to a page which displays a list of items in a tabular format.
As you can see some of the listed items have status as 'Done' and next to the it will be as click me button which onclick re-directs the user to a page which shows a picture uploaded against the description.
If a user wants to change the status of an incomplete item,He/she should click on the button next to the status which will re-direct the user to page which displays 2 buttons. If the user wants to complete the action he should click on the green button which will take the user to a page which will prompt the user to upload a file(only images) against the description. The user is free to edit the Description field as well. once the user Uploads an image, the status of the uploaded item will change to 'Done' and the user can view the image on click on the button next to it.On click on the button the page will display the uploaded image and will no longer display the green button(The user cannot upload the file again). Any other files such as pdf,excels,docs will display an error message.

 ## NOTE
Use the database file in the database_data_for_the_task folder 
