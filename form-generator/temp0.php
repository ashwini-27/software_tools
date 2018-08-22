<!DOCTYPE html>
<html>

<body style="font-family:<?php echo $_POST['ffa'] ?>;background-color: <?php echo $_POST['bgc']?>;">
<head>
<style type="text/css">
			label{
        	class=control-label col-sm-3	
        	float: left;
        	}
        	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>
		<?php
			echo $_POST['title'];
		?>
	</title>
</head>
<body  >

<div >
	   
</div>
<form class="form-horizontal row" id="main" action=<?php echo $_POST['Action']?> method="get"  >
<div class="col-sm-3">
</div>
<div class="col-sm-6 preform" style="background-color:white;border-style: solid;border-width: <?php echo $_POST['border'] ?>px;border-radius:<?php echo $_POST['bradius'] ?>;backgroung-img:<?php $_POST['bgi']?>;margin-top: 100px;">



<!-- <?php var_dump($_POST)?>  -->
<!--<div class="well"> <img src="big.png" class="img-circle " alt="Cinque Terre" width="304" height="236";"></div>-->
 
		<div class="form-group">
					<legend class="well"><?php echo $_POST['title']?></legend>
			
					<!-- <div class="form-group">
					<label class="control-label col-sm-3" >Name:</label>
					<div class="col-sm-6" >
					<input class="form-control" type="text" name="username" placeholder="john doe"/>
					</div>
					<div class="col-sm-3"></div>
					</div>


					<div class="form-group">
					<label class="control-label col-sm-3";">Email:</label>
					<div class="col-sm-6">
					<input type="email" class="form-control" name="user_email" required placeholder="abc@example.com"/>
					</div>

					<div class="col-sm-3"></div>
					</div>


					<div class="form-group">
					<label class="control-label col-sm-3" style="float: left;">Password:</label>
					<div class="col-sm-6">
					<input type="Password" name="userpass" value="" required/>
					</div>

					<div class="col-sm-3"></div>
					</div>


					<div class="form-group">
					<label class="control-label col-sm-3" style="float: left;"> Confirm Password:</label>
					<div class="col-sm-6">
					<input type="Password" name="usercpass" value="" required/>
					</div>

					<div class="col-sm-3"></div>
					</div>


					<div class="form-group">
					<label class="control-label col-sm-3" style="float: left;">profile photo</label>
					<div class="col-sm-6">
					<input type="file" name="userprofile" />
					</div>

					<div class="col-sm-3"></div>
					</div> -->

					<?php
							//var_dump($_POST);


								$field=$_POST['field'];
								$types=$_POST['type'];
								$gfield=$_POST['gfield'];
								$gname=$_POST['gname'];
								$gtype=$_POST['gtype'];
												
		//$str=0;

				if(!empty($_POST['gfield'])){

		for($x=0;$x<count($field);$x++)
		{

					
							echo 
							'<div class="form-group">',
							'<label class="control-label col-sm-3" style="float: left;">',$field[$x],'</label>',
							'<div class="col-sm-6">',
							'<input class="form-control" type="',$types[$x],'" name="',$field[$x],' />',
							'</div>',
							'<div class="col-sm-3">',
							'</div>',
							'</div>';
		}
	}
		if(!empty($_POST['gfield'])){

		for($x=0;$x<count($gfield);$x++)
		{

					
							echo 
							'<div class="form-group">',
							'<label class="control-label col-sm-3" style="float: left;">',$gfield[$x],'</label>',
							'<div class="col-sm-6">',
							'<input class="col-sm-6" type="',$gtype[$x],'" name="',$gname[$x],' />',
							'</div>',
							'<div class="col-sm-3">',
							'</div>',
							'</div>';
		}
	}

?>
		
</div>
		<div>
		<div class="btn btn-block">
				
				<input  type="submit" name="submt" value="submit"/>
		</div>
		</div>
</div>
<div class="col-sm-3"></div>
</form>


</body>















<script type="text/javascript">

function de(argument) {
	// body...

	docu
    var jAf = <?php echo json_encode($field); ?>;


    var jAt = <?php echo json_encode($types); ?>;
    for(var i=0; i<jAf.length; i++){
        alert(jArray[i]);
    }
}

 </script>
</html>
