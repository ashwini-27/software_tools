<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>
    <?php
      echo $_POST['title'];
    ?>
  </title>
  <!-- <style type="text/css" src="excss1.css"></style> -->
</head>
<body>

<div class="container">
  <form method="POST" action=<?php echo $_POST['Action']?> style="background-color:<?php echo $POST['bgc'] ?>;border-style: solid;border-width: <?php echo $_POST['border'] ?>px;border-radius:<?php echo $_POST['bradius'] ?>;backgroung-img:<?php $_POST['bgi']?>;">
    <div class="well"><?php echo $_POST['title'];?></div>
   


      


          <?php
              //var_dump($_POST);

            

                $field=$_POST['field'];
                $types=$_POST['type'];
                $gfield=$_POST['gfield'];
                $gname=$_POST['gname'];
                $gtype=$_POST['gtype'];
    
    if(!empty($field)){
    for($x=0;$x<count($field);$x++)
    {


      echo
        '<div class="form-group ">',
          '<label for="first control-label">',$field[$x],'</label>',
          '<input type="',$types[$x],'" class="form-control" placeholder="',$field[$x],'" id="first">',
        '</div>';
       
    }
  }
    if(!empty($gfield)){
    for($x=0;$x<count($gfield);$x++)
    {


      echo
        '<div class="form-group">',
          '<label class="control-label">',$gfield[$x],'</label>',
          '<input type="',$gtype[$x],'" class="form-control" placeholder="',$gfield[$x],'"name="',$gname[$x],'" id="first">',
        '</div>';
       
    }
  }
  
  
?>
      
  <div>
    <div class="btn btn-block">
        
        <input  type="submit" name="submt" value="submit"/>
    </div>
    </div>
</div>
</div>
    
  </form>
</div>

</body>
</html>

