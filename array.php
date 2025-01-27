<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body style="font-family: 'Khmer OS Siemreap'; margin:32px"> 

<?php   $technologies = ["HTML", "CSS", "JavaScript", "Bootstrap","React JS", "PHP", "Laravel"];   ?> 
  <h2 class="my-3">indexed array</h2> 
  <h3>យកទិន្នន័យ indexed array ដោយប្រើលេខ index</h3> 
  <button type='button' class='btn rounded-circle btn-info m-1'><?=$technologies[0]?> </button> 
  <h3>យកទិន្នន័យពី indexed array ដោយប្រើ for loop</h3> 
  <?php     
      for($i=0; $i<7; $i++){ 
       echo  "<button type='button' class='btn rounded-circle btn-info m-1'>$technologies[$i]</button>"; 
      } 
   ?> 
   <h2 class="m-y">យកទិន្នន័យពី indexed array េដយេ្រប foreach </h2> 
   <?php 
      foreach ($technologies as $technology) { 
         echo  "<button type='button' class='btn rounded-circle btn-info m-1'>$technology</button>"; 
      } 
   ?>

    <hr> 
    <h2 class="my-3">associative array</h2> 
    <?php 
    $webs = [ 
    "front-end" => "HTML, CSS, JavaScript, BootStrap, React JS", 
    "back-end" => "PHP, Laravel" 
    ]; 
    ?> 
    <h3>យកទិន្នន័យពី associative array ដោយប្រើ key ដែលជាឈ្មោះសម្គាល់នៃធាតុ​ array</h3> 
    <div class='alert alert-info' role='alert' m-2>"  <?=$webs['back-end']?> </div> 
    <h3>យកទិន្នន័យពី associative array ដោយប្រើ foreach</h3> 
    <?php 
    foreach ($webs as $key => $value) { 
    echo "<div class='alert alert-info' role='alert' m-2>$key: $value</div>"; 
    } 
    ?> 
    
</body>
</html>

