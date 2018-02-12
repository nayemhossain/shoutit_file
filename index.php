<?php include "database.php"; ?>
<?php   
$query = "SELECT * FROM shouts ORDER BY id DESC LIMIT 5";
$shouts  = mysqli_query($con, $query);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SHOUT IT</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container">
    <div class="col-lg-6 col-md-offset-3">
    <div class="row">
        	<div class="page-header">
    		<h1>SHOUT IT' shoutbox</h1>
        </div>
     </div>
     <div class="row">
        <ul>
        <?php
         while($data = mysqli_fetch_array($shouts)){
		?>
            <li class="shout message"><span><?php echo $data['time'] ?>-</span>
            <strong><?php echo $data['user'] ?>-</strong>
            <?php echo $data['message'] ?></li>
            <?php }?>
        </ul>
     </div>
     <div class="row">
        	<form method="post" action="process.php">
            <div class="form-group">
            	<input type="text" name="user" placeholder="Enter Your Name" class="form-control"><br>
                <input type="text" name="message" placeholder="Enter Your Message" class="form-control">
            </div>
            <div class="form-group">  
                <input type="submit" name="submit" class="btn btn-success" value="shout it Out"> 
             </div>
            </form>
    </div>
    </div>
        
    </div>
    

</body>
</html>