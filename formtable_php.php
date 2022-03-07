<?php

//session_start();
?>
<?php

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
			
			.tblone{
				width: 420px ;
				border: 1px solid #fff;
				margin: 20px 0 ;
			}
			.tblone td{
				padding:5px 10px ;
				
			}
			table.tblone tr:nth-child(2n+1){
				background:#fff ;
				height:30px ;
			}table.tblone tr:nth-child(2n){
				background:#f1f1f1 ;
				height:30px ;
			}
			
			#myform{
				width:400px ;
				border:1px solid #fff;
				padding: 10px ;
			}
		</style>
	</head>
	<body>
		<div class = "phpcoding">
		
			<section class="header">
				<h2><?php echo "This is php fundamental topics using by php";?></h2>
			</section>
			<section class="maincontent">
			<span style="float:right;color:black">
				
				<?php
				date_default_timezone_set('Asia/Dhaka');
				echo "Time ".date("h:i:sa");
				?>
			
			</span>
			
			
			<?php
			
				if(isset($_POST['submit'])){
					$name = $_POST['name'];
					$gender = $_POST['gender'];
					$dep = $_POST['dep'] ;
					$coder = $_POST['coder'];
					
					
				
			
				?>
			<h4><hr><marquee>PHP form and table handling</marquee><hr></h4>
			
			<table class="tblone" >
				<tr>
					<td colspan ="2" align="center" >Output</td>
				</tr>
				<tr>
					<td>Name</td>
					<td style="color:green"><?php echo $name;?></td>
				</tr>
				<tr>
					<td>Gender</td>
				 
						<?php
							if($gender == 'male'){?>
								<td style="color:green"><?php echo "Male";?></td>
							<?php }
								elseif($gender == 'female'){?>
								   <td style="color:green"><?php echo "Female";?></td>
							<?php 
							}
						?>
					 
				</tr>
				<tr>
					<td>Department</td>
				 
						<?php
							if($dep == 'cse'){?>
								<td style="color:green"><?php echo "CSE";?></td>
							<?php }
								elseif($dep == 'eee'){?>
								   <td style="color:green"><?php echo "EEE";?></td>
							<?php 
							}elseif($dep == 'swe'){?>
								   <td style="color:green"><?php echo "SWE";?></td>
							<?php 
							}
						?>
				 
				</tr>
				<tr>
					<td>Coder</td>
				 
					<?php
							if($coder == 'php'){?>
								<td style="color:green"><?php echo "PHP";?></td>
							<?php }
								elseif($coder == 'java'){?>
								   <td style="color:green"><?php echo "Java";?></td>
							<?php 
							}elseif($coder == 'javascript'){?>
								   <td style="color:green"><?php echo "Javascript";?></td>
							<?php 
							}elseif($coder == 'C++'){?>
								   <td style="color:green"><?php echo "C++";?></td>
							<?php 
							}
						?>
					 
				</tr>
				
			</table>
			
			<?php } ?>
			
			<form action = "" method ="post" id="myform" name="myform" onsubmit="chick(); return false">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" required="1" /></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
						<input type="radio" name="gender" value="male" />Male
						<input type="radio" name="gender" value="female"/>Female
						</td>
					</tr>
					<tr>
						<td>Department</td>
						<td>
						<input type="checkbox" name="dep" value="cse" />CSE
						<input type="checkbox" name="dep" value="eee" />EEE
						<input type="checkbox" name="dep" value="swe" />SWE
						</td>
					
					</tr>
					<tr>
						<td>Coder</td>
						<td>
							<select name="coder" required="1">
								<option value="">Select one</option>
								<option value="php">PHP</option>
								<option value="java">Java</option>
								<option value="javascript">Javascript</option>
								<option value="C++">C++</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td>
						<input type="submit" name="submit" value="Submit" />
						<input type="reset" value="Clear" />	
						</td>
					<tr>
				</table>
			</form> 
			
			 
			 
			<script>
			
			 
			
			
			</script>
			<span style="color:green"><p id="demo"></p></span>
			<?php
				
				
			
			?>
			
			</section>
			<section class="footeroption">
				<h2><?php echo "This is footer options using by php";?></h2>
			</section>
			
		</div>
	</body>
</html>