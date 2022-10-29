


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Php Coffee</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <h5 class="display-4 text-center"> How to Find The Root Of X </h5>
<form action="phpCoffe.php" class="m-3 p-1"  method="post">
 <div class="container">

   <div class="form-group w-75  ">
     <label for="formGroupExampleInput">Enter Guess </label>
     <input type="text" class="form-control p-2 mb-2" id="formGroupExampleInput" placeholder="Example input" name="guess">
    </div>
    
    <input type="submit" value="Eval" name="submit" class="btn btn-primary btn-md ml-5">
    
  </form>
  

  <?php
// initial value for x 
$x = 9 ;

// converte the number  to integer  

// check if the inputs are nagative 
if ( isset($_POST['submit']) ) {
  //  show  alert
  $guess = (int) $_POST['guess'];
    if ( $guess <0 ) {
      echo "<p class='alert alert-danger'> Error nagative value </p> ";
      # code...
      // Receipt for root of x
    }else {
      # code...
      while (($guess*$guess) != $x) {
        // execute the mediator 
        $guess = ($guess + $x/$guess)/2;
   
        // multiple the result and see if is reach to X
        if ($guess * $guess ==$x) {
              $result = (int)($guess);
       
          // echo the actual value of x if is reach 
          echo "<p class='m-5 p-2 text-success border w-25'> result : {$result}</p>";
          // break  -- go out exit and print the guess 
        break;
         }
       
      }
      echo "<pre class='m-5 p-2 '> ${$result}</pre>";
      
    }
}
  
?>
</div>
  <!-- MDB -->
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
</body>
</html>
