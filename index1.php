
<?php
$fronts = "arial";


			$name=$email=$website=$gender=$comment="";
			$errname=$erremail=$errweb=$errgender="";
			
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					
					if(empty($name)){
						$errname="<span style='color:red'>Name is Required</span>";
					}else{
						$name = validation($_POST['name']);
					}
					if(empty($email)){
						$erremail = "<span style='color: red'>Email is Required</span>";
					}else{
						$email = validation($_POST['email']);
					}
					if(empty($website)){
						$errweb = "<span style='color: red'>Website is Required</span>";
					}else{
						$website = validation($_POST['website']);
					}
					if(empty($gender)){
						$errgender = "<span style='color:red'>Gender is Required</span>";
					}else{
						$gender = validation($_POST['gender']);
					}
					
					
					
					
					
					
					$comment = validation($_POST['comment']);
					
					echo $name ."<br>";
					echo $email ."<br>";
					echo $website ."<br>";
					echo $gender ."<br>";
					echo $comment ."<br>";
				}
				
				function validation($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data ;
				}
		

?>
<html>
	<head>
	<style>
			body{
				font-family:<?php echo $fronts;?>
			}
			.phpcoding{
				width: 900px ;
				margin: 0 auto ;
				background:<?php echo "#ddd";?>;
				
			}
			.header, .footeroption{
				background:<?php echo "#444";?> ;
				color:#fff ;
				text-align:center;
				padding: 20px ;
			}
			.maincontent{
				min-height: 400px;
				
				
				padding: 20px ;
			}
			.header h2, .footeroption h2{
				margin: 0 ;
			}
		</style>
	</head>
	<body>
		<div class = "phpcoding">
		
			<section class="header">
				<h2><?php echo "This is php fundamental topics using by php";?></h2>
			</section>
			<section class="maincontent">
			
			<h2>PHP from validation</h2>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<table>
				<p style="color:red">* Required Field</p>
					<tr>
						<td>Name </td>
						<td><input type="text" name="name" />*<?php echo $errname;?></td>
					</tr>
					<tr>
						<td>Email </td>
						<td><input type="email" name="email" />*<?php echo $erremail;?></td>
					</tr>
					<tr>
						<td>Website </td>
						<td><input type="text" name="website" />*<?php echo $errweb?></td>
					</tr>
					<tr>
						<td>Comment  </td>
						<td><textarea name="comment" rows="5" cols="50"></textarea></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" value="female" />Female
							<input type="radio" name="gender" value="male"/>Male
							*<?php echo $errgender;?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"/></td>
					</tr>
				</table>
			</form>
			
			
			</section>
			<section class="footeroption">
				<h2><?php echo "This is footer options using by php";?></h2>
			</section>
			
		</div>
	</body>
</html>