# Memory Game for Test

## Introduction
I have just interviewed with client for new empolyment. I hope this project will be good help.
This project is Simple Memory Game built in php, html, js, css. Game user will enjoy by mapping famous company logos. 
## Requirements
* Xampp installed on game user machine

## Installing Guide
1. Please download [xampp](https://www.apachefriends.org/download.html) and install on machine. [Xampp Server install video](https://www.youtube.com/watch?v=-f8N4FEQWyY)

2. Clone [git repository](https://github.com/Hazard4233/simple-memory-game.git) using following command
    ```sh
    git clone https://github.com/Hazard4233/simple-memory-game.git
    ```

3. Please copy current path of index.php from project.
4. Go to C:\xampp\apache\conf\httpd.conf.
5. Open httpd.conf.
6. Find tag : DocumentRoot "C:/xampp/htdocs"
7. Edit tag to : DocumentRoot ${copied path}, 
    for example, DocumentRoot "D:/myproject/web".
8. Now find tag and change it to < Directory ${copied path} >, 
    for example, < Directory  "D:/myproject/web" >
9. Restart Your Apache.
10. Please open browser and visit http://localhost.
11. Enjoy the game.