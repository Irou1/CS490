<html>
   <head>
      <title>Get to Work</title>
      <!-- <link rel="stylesheet" type="text/css" href="test.css"> -->
   </head>
   <body>
      <div>
         <?php
	    //GET all current test's questions
	    $exam = 'testhello'; //$_GET['selectedExam'];
	    //$questions = array("one", "two", "three");
	    $examData = array('exam'=>$exam);

	    $url = "https://web.njit.edu/~em244/CS490/Model/getTestQuestions.php";
	    $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $examData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $questions = curl_exec($ch);
            curl_close($ch);
            
         ?>
         <p>Currently taking test:  <?php echo $exam; ?></p>
         <form method="post" action="submitTest.php"> 
	    <br>
	    <?php
               foreach(json_decode($questions) as $question){
		     echo "<p>$question</p>
                        <textarea type='text' name='answer' placeholder='Enter your answer'></textarea>
			<br>
			<button onclick='clear()' >clear answer</button>
			<br>";
	       }   
	    ?>
	    <br>
            <input type="submit" value="Submit Test for Grading">
         </form>
      </div>
   </body>
</html>
