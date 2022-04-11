<?php
include("dbdisplay.php");
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
  <link rel="stylesheet" type="text/css" href="indexstyles.css">
</head>
<body>

<nav>
    
    <a href="#"><img src="  https://img.freepik.com/free-vector/orange-logo_121531-38.jpg" width= 80px; height= 80px; ></a>

    <ul>
      <li><a href="index.html">HOME</a></li>
      <li><a href="survey.html">SURVEY</a></li>
      <li><a href="#">TABLES</a></li>
      <li><a href="images.html">SUPRISE</a></li>
    </ul>
      

  </nav>

<div class="container" style="margin-bottom: 450px; margin-top: 50px;">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>ID</th>
         <th>Name</th>
         <th>Color</th>
         <th>Smell</th>
         <th>Type</th>
         <th>Country</th>
         <th>Life Story</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['color']??''; ?></td>
      <td><?php echo $data['smell']??''; ?></td>
      <td><?php echo $data['type']??''; ?></td>
      <td><?php echo $data['country']??''; ?></td>
      <td><?php echo $data['lifestory']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>


<footer>

    <div>
      <ul>
        <li><h2>erat nam</h2></li>
        <li><a href="#">et egestas quis</a></li>
        <li><a href="#">ipsum suspendisse ultrices</a></li>
        <li><a href="#">gravida dictum fusce</a></li>
      </ul>

      <ul>
        <li><h2>lectus urna</h2></li>
        <li><a href="#">ut placerat orci</a></li>
        <li><a href="#">nulla pellentesque dignissim</a></li>
        <li><a href="#">enim sit amet</a></li>
      </ul>

      <ul>
        <li><h2>duis convallis</h2></li>
        <li><a href="#">venenatis urna cursus</a></li>
        <li><a href="#">eget nunc scelerisque</a></li>
        <li><a href="#">viverra mauris in</a></li>
      </ul>

      <ul>
        <li><h2>convallis tellus</h2></li>
        <li><a href="#">aliquam sem fringilla</a></li>
        <li><a href="#">ut morbi tincidunt</a></li>
        <li><a href="#">augue interdum velit</a></li>
      </ul>
    </div>

  </footer>


</body>
</html>