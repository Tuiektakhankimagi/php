<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Good morning good evening/goodnight</title>
</head>
<body>
     <div>
          <?php 
          date_default_timezone_set("Asia/Kolkata");
          echo "Current time: " . date("h:i:sa") . "<br>";
          $currentTime = strtotime(date("h:i:sa"));
          
          $morningStart = strtotime("9:00 AM");
          $afternoonStart = strtotime("12:00 PM");
          $eveningStart = strtotime("5:00 PM");
          $nightStart = strtotime("10:00 PM");
          
          if($currentTime >= $morningStart && $currentTime < $afternoonStart){
               echo "Good Morning buddy";
          } else if($currentTime >= $afternoonStart && $currentTime < $eveningStart){
               echo "Good Afternoon, let's finish your lunch buddy";
          } else if($currentTime >= $eveningStart && $currentTime < $nightStart){
               echo "Good Evening buddy, let's play football";
          } else if($currentTime >= $nightStart || $currentTime < $morningStart){
               echo "Goodnight buddy, let's sleep";
          } else {
               echo "error!!.";
          }
          ?>
     </div>
</body>
</html>
