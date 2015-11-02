<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
</head>
<body>
<div class="container">  
    <div class="row"> 
        <div class="col-lg-12" > <?php include_once './ustkisim.php'; ?></div>
    </div>
    
   <div class="row"> 
        <div class="col-lg-3" >  <?php include_once './solkisim.php'; ?>  </div>
        
         <div class="col-lg-9"> <?php include_once './icerik.php'; ?>  </div>
        
    </div>
     
     <div class="row"> 
        <div class="col-lg-12"><?php include_once './altkisim.php'; ?>  </div>
    </div>

  
</div>
    
    
    <?php
    // put your code here
    ?>
</body>
</html>
