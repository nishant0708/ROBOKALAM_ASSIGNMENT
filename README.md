# ROBOKALAM_ASSIGNMENT
This is an assignment submitted to ROBOKALAM by Nishant Kaushal for an internship application.

I1: Design a web template that has a grid with provision for one live instructional video, space to show a live video of the student listening to it, and his emotional status.

For this, I have made two files: one of CSS and one of HTML. In the HTML file, we have divided web pages into 3 sections: header,footer,and main section. We have divided the main section further into two sections: one for video and one for student status and live video.I have used the Grid System in the main section. In the CSS file, I have also used media queries so that people viewing on small screens can see data in a systematic way. To import video, just remove padding from the CSS file on line 28 and uncomment line 17 of the HTML file, add the source of the video and its type, and you are good to go.

I2: Design a simple form and connect it to the backend database.

In this assignment, I have used PHP to connect a form with a database. The post method is preferred by me so that sensitive information is not visible in the URL. Inside the form method, I have used a table just to decorate the webpage so that all the blanks are on the same line. Instead of using a table here, we can also use a grid system. For using this code, create a database and place that name in line 36 of the HTML file instead of php. In that database, create a table named users and create the attributes that we have used in the form. In my code, I have used name (varchar),email(varchar),Roll_NO(int).And place your database username and password in lines 34 and 35.
