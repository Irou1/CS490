<!DOCTYPE html>
<html>
   <head>
      <title>Create an Exam (temporary)</title>
       <link rel="stylesheet" type="text/css" href="all.css">
   </head>
   <body>
      <script src="something.js"></script>
      <div class="examwrapper">
         <div id="addedquestions">
            <p>Questions that were added</p>


	    <button type="button" onclick="submit">Create Exam</button>

         </div>
         <div id="allquestions">
            <p>Questions to choose from</p>
	    <?php
               //return all questions in database

	       //get request
	       //$url = "https://web.njit.edu/~em244/CS490/Controller/getAllQuestions.php";
               $url = "https://web.njit.edu/~em244/CS490/Model/getAllQuestions.php";
	       $ch = curl_init($url);
	       curl_setopt($ch, CURLOPT_POST, true);
	       curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               $result = curl_exec($ch);
	       curl_close($ch);
	       //parse result line by line
	       //foreach(){echo ;}
	       echo $result;
             
	    ?>
         </div>
      </div>

   </body>
</html>