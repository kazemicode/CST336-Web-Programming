<!DOCTYPE html>
<html>
<!--

About page

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
      <meta charset="utf-8" />
      <title>Sara Kazemi: Personal Website</title> 
      <link href="css/styles.css" rel="stylesheet" type="text/css"> 
      <link href="https://fonts.googleapis.com/css?family=Pacifico|Ubuntu&display=swap" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
          <h1>Sara Kazemi</h1>
        </header>
        <hr>
        <nav>
          <a href="index.php">Home</a>
          <a id ="current" href="about.php">About</a>
          <a href="contact.php">Contact</a>
        </nav>
      
        <br><br>
        <div id="content">
          <!-- Table to hold experience data -->
          <table>
            <tr id= "table-header">
              <td>Programming Language</td>
              <td>Years Experience</td>
            </tr>
            <tr class="table-row">
              <td>Java</td>
              <td>5</td>
            </tr>
            <tr class="table-row">
              <td>Python</td>
              <td>6</td>
            </tr>
            <tr class="table-row">
              <td>C</td>
              <td>1</td>
            </tr>
          </table>
          <br><br>
          <ul>
            <li><span class="hobby">Bicycling:</span> I bike everywhere, no matter the weather!</li>
            <li><span class="hobby">Video games:</span> I enjoy games rich in story and adventure like <i>Chrono Trigger</i>.</li>
            <li><span class="hobby">Programming:</span> I love learning new technologies and creating new things with code.</li>
            <li><span class="hobby">Reading:</span> My favorite genre is science fiction, especially Isaac Asimov. I also enjoy the <i>Paper Girls</i> comicbooks</li>
          </ul>
        </div>
      <!-- This is the footer -->
      <!-- The footer goes inside the body but not always -->
      <footer>
        <hr>
        CST 336 Internet Programming 2019&copy; Kazemi  
        <br>
        <img src="images/csumb-logo.png">
      </footer>
      <!-- closing footer -->
        
  </body>
</html>