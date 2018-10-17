<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript" src="a.js"></script>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<br><br>

		<div class="panel panel-default" id="holder">
			<div class="panel-heading row">
				

				<form action="addnew.php" class="form row" method="POST" enctype="multipart/form-data" style="display:inline;">
				<span style="float: left">Files:</span>
				<input id="selector"  type="file" name="filein" style="opacity: 0;position:absolute;">
				<button type="submit" name="select" style="float: right;padding-right: 20px;background-color: transparent;border-style:none" class="glyphicon glyphicon-plus"></button>
				<label for="selector" class="glyphicon glyphicon-paperclip  " style="float: right;padding-right : 20px" ></label>
				</form>			

			</div>
			<br>
			<div>

				<?php
						$path = "files/";
						$dh = opendir($path);
						$i=1;
				?>
				<?php 
				while (($file = readdir($dh)) !== false):?>
    			<?php if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin"): ?>
        					<div class="panel-body">



        						<button class="glyphicon glyphicon-search btn btn-default" name="search"  style="float: right;border-style:none" onclick="searchFile(<?php echo $i ?>)"></button>

								<button class="glyphicon glyphicon-font btn btn-default" name="append" onclick="showfileareaerase(<?php echo $i ?>)" style="float: right;border-style:none"></button>

								<button class="glyphicon glyphicon-pencil btn btn-default" onclick="showfilearea(<?php echo $i ?>)"  name="editopen"  style="float: right;border-style:none"></button>
								
								<button class="glyphicon glyphicon-glass btn btn-default" onclick="viewfile(<?php echo $i ?>)" name="view" type="submit" style="float: right;border-style:none "></button>

								<form method="POST" id="myform".<?php echo $i; ?> action="a.php">
								<?php echo $file;?>
								
									<input type="text" name="idgier" hidden value="<?php echo $i ?>">
									
									<input type="text" name="checks" hidden value="<?php echo $file ?>" />
									
									<button class="glyphicon glyphicon-trash btn btn-default" onclick="settarget(<?php echo $i ?>,"remove.php")" name="remove" type="submit" style="float: right;border-style:none "></button>
									<br>
									<br>

									<div id="<?php echo $i ?>"> 
										<textarea class="container" hidden name="contentview" readonly style="height: 200px;width: 100%"   >
												<?php
													$refer=fopen("files/".$file,'r');
												echo fread($refer,filesize("files/".$file));
											 		fclose($refer);							
												?>

										</textarea>
										<textarea class="container" hidden name="content" style="height: 200px;width: 100%"   >

										</textarea>

										<button class="btn btn-block btn-success " style="display: none;" type="submit" name="edit" id="shower1">Savme</button>

										
									</div>


									

								</form>
		
		

       						 </div>


        				<?php $i++;?>
    
						<?php endif ?>
					<?php endwhile ?>
				<?php closedir($dh);?> 
			</div>
		</div>
</body>


	




</html>

