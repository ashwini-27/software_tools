<!DOCTYPE html>
<html>
<head>


         <link rel="stylesheet" href="excss1.css">
         <title>Bootstrap Example</title>
        <meta charset="utf-8">
       <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        --> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
    label{
      class control-label;
      margin-right: 10px;
    }
    fieldset{
      class form-group;

    }
    input{
      width: 100%;
      class form-control;
    }

body {
  font-family:<?php echo $_POST['ffa']?> ;
  font-weight: 100;
  font-size: 12px;
  border-style: solid;
  line-height: 30px;
  border-width: <?php echo $_POST['border'] ?>;
  color: #777;
  border-radius:<?php echo $_POST['bradius'] ?>
  background: <?php echo $_POST['bgc']?>;
  backgroung-image:<?php $_POST['bgi']?>
}
    

 </style>
  <title></title>
  <!-- <style type="text/css" src="excss1.css"></style> -->
</head>

<body  >
<div class="container">  
  <form id="contact" action="" method="post" action=<?php echo $_POST['Action']?>>

<div class="col-sm-6 style="background-color: <?php echo $_POST['bgc']?>;">





          <?php
              //var_dump($_POST);

            if(true){

                $field=$_POST['field'];
                $types=$_POST['type'];
                $gfield=$_POST['gfield'];
                $gname=$_POST['gname'];
                $gtype=$_POST['gtype'];
    
    for($x=0;$x<count($field);$x++)
    {
      echo 
    '<fieldset>',
      '<input  placeholder="',$field[$x],'"type="',$types[$x],'" tabindex="',$x+1,'" required/>',
    '</fieldset>';
    }
  }
      if(!empty($_POST['gfield'])){
    for($x=0;$x<count($gfield);$x++)
    {

          

          echo 
    '<fieldset>',
      '<label class="control-label col-sm-6" style="float: left;">',$gfield[$x],'</label>',
      '<input class="col-sm-3" placeholder="',$gfield[$x],'"type="',$gtype[$x],'" tabindex="',$x+1,'" name="',$gname[$x],' "required/">',
    '</fieldset>';
    
  }
  }
?>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>