<?php


   //if(isset($_POST['difficulty'], ['category'])){
   $difficulty = (int)$_POST['difficulty'];
   $category = $_POST['category'];
   $question = $_POST['question'];
   //$question = mysql_real_escape_string($_POST['question']);
   //}
   $testCase = $_POST['testCase'];
   $testAnswer = $_POST['testAnswer'];

   require_once('config.php');
   extract(dbConfig());
   $db = new mysqli($host, $user, $pw, $sqldb);
   $query = "INSERT INTO  questions (difficulty, category, question)
             VALUES ('$difficulty', '$category', '$question')";
      
   $result = $db->query($query); 
   //$row = $result->fetch_assoc();

   $tests = "INSERT INTO testcases (question, testcase, testanswer)
             VALUES ('$question', '$testCase', '$testAnswer')";
   $testresults = $db->query($tests);

   if($result){ ///if($row){
      echo "QUESTION ADDED";
   }else{
      echo "ERROR IN QUERY";
   }
   
?>
