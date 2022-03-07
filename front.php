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
			
			<h2><hr>PHP form handling<hr></h2>
			
			<form action="front.php" method="POST" name="myform" id="myform" onsubmit="func(); return false;">
				<table>
					<tr>
						<td>Username : </td>
						<td>
						<select name="coder">
							<option value="JAVA">Java</option>
							<option value="PHP">PHP</option>
							<option value="C">C</option>
							<option value="C++">C++</option>
						</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" />
						<input type="reset" value="Clear" /></td>
						
					</tr>
				</table>
			</form>
			<script>
			function func(){
				var a = document.myform.username.value ;
				document.getElementById('demo').innerHTML=a;
			}
			
			
			</script>
			<span style="color:green"><p id="demo"></p></span>
			<?php
				if(isset($_POST['submit'])){
					$coder = $_POST['coder'];
					echo $coder ;
				}
			
			/*
				if(isset($_POST['submit'])){
					$coder = $_POST['coder'];
					
					echo "You have selected ";
					
					foreach($coder as $key=>$value){
						echo $value." " ;
					}
					
					/*
					if($_POST['coder'] == 'PHP')
					{
						echo "You Select for ".$_POST['coder']." course"."<br>";
					}
					elseif($_POST['coder'] == 'Java')
					{
						echo "You Select for ".$_POST['coder']." course"."<br>";
					}elseif($_POST['coder'] == 'C')
					{
						echo "You Select for ".$_POST['coder']." course"."<br>";
					}
					*/
				
				
			
				/*
				if(isset($_POST['username'])){
					echo "<span style='color: green'>You enter ".$_POST['username']."<br></span>";
				}else{
					echo "<span style='color:red'>not set the any type of value here<br></span>";
				}
				*/
				


			
			/*
			$_SESSION['user'] = 'Rubel';
			$_SESSION['password']='0123456789';


			echo "Username is = ".$_SESSION['user']."<br>";
			//session_unset();
			echo "Password is = ".$_SESSION['password'].'<br>';
			
			echo '<br>';
			
			$str = "<h2>I am new learner of PHP...........</h2>";
			
			echo filter_var($str , FILTER_SANITIZE_STRING);
			//phpinfo();
			///how to use explode and implode function
			echo "<br>";
			
			$string = "i love spring season";
			
			$brk = explode(" ",$string);
			
			echo $brk[0]."<br>";
			
			$length = count($brk);
			for($i = 0 ; $i < $length ; ++$i){
				echo "The result is = ".$brk[$i]."<br>";
			}
			
			$sttr = implode(" ", $brk);
			echo "<br>";
			echo "This is just string using by implode function  ".$sttr ;
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			require 'a.php';
			require 'a.php';
			require_once'a.php';
			*/
			
			
			?>
			
			</section>
			<section class="footeroption">
				<h2><?php echo "This is footer options using by php";?></h2>
			</section>
			
		</div>
	</body>
</html>