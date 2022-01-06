<?php

require_once __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NBA vacanze</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div id="app">
      <!-- header -->
      <header class="container-fluid d-flex align-items-center">
         <h1>NBA</h1>
         <h3 class="mx-3">Home</h3>

         <select>
            <option value="all">Seleziona una città</option>
         </select>
      </header>

      <!-- main -->
      <main>
         <div class="container">
            <div 
               class="row gs-container"
            >
            <?php foreach($matches as $match) {?>
               <!-- team 1 -->
               <div class="col-5">
                  <div class="row">
                     <!-- name -->
                     <div class="col-4">
                        <h5><?php echo $match['home_team']['city'] ?> <?php echo $match['home_team']['nickname'] ?></h5>
                     </div>

                     <!-- logo -->
                     <div class="col-4">
                        <img src="img/<?php echo $match['home_team']['logo'] ?>">
                     </div>

                     <!-- score -->
                     <div class="col-4">
                       <h3><?php echo $match['home_team']['score'] ?></h3>
                     </div>
                  </div>
               </div>

               <!-- location -->
               <div class="col-2">
                  <p class="arena m-0"><?php echo $match['arena'] ?></p>
                  <p class="city m-0"><?php echo $match['city'] ?></p>
               </div>

               <!-- team 2 -->
               <div class="col-5">
                  <div class="row">
                     <!-- score -->
                     <div class="col-4">
                       <h3><?php echo $match['away_team']['score'] ?></h3>
                     </div>

                     <!-- logo -->
                     <div class="col-4">
                        <img src="img/<?php echo $match['away_team']['logo'] ?>">
                     </div>

                     <!-- name -->
                     <div class="col-4">
                        <h5><?php echo $match['away_team']['city'] ?> <?php echo $match['away_team']['nickname'] ?></h5>
                     </div>
                  </div>
               </div>
            
            <?php } ?>
            </div>
         </div>
      </main>
   </div>
   
   <!-- vue -->
   <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
   <!-- axios -->
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <!-- mio js -->
   <script src="vue.js"></script>
</body>
</html>