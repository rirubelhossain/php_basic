
<?php
$fronts = "arial";
?>
<?php
$vriable = "I love my counrty<br>";
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
			
			<form action="" method = "POST">
				Username: <input type="text" name="username" />
				<input type="submit" value="Submit" />
			</form>
			
			<a href="text.php">Send</a>
			
			
			<h2>PHP from validation</h2>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<table>
					<tr>
						<td>Name </td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td>Email </td>
						<td><input type="email" name="email" /></td>
					</tr>
					<tr>
						<td>Website </td>
						<td><input type="text" name="website" /></td>
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
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"/></td>
					</tr>
				</table>
			</form>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$name = validation($_POST['name']);
					$email = validation($_POST['email']);
					$website = validation($_POST['website']);
					$gender = validation($_POST['gender']);
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
			
			
			<?php
			/*
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$valu = $_POST['username'];
					if(empty($valu)){
						echo "<span style = 'color: red'>Please enter something this field <br></span>";
					}else{
						echo  "<span style='color:green'>You inter the ".$valu."</span>";
					}
				}
				echo "<br><br><br>";
				echo "<br>";
				*/
			?>
			
			
			
			<?php
			
			
			
				//echo "I love php <br>";
				//echo "<h1>I want to be a programmer!!<br><h1>";
				//echo $fronts;
				//echo $vriable;
				
				/// how to use output in php 
				
				//echo "PHP is nice <br>";
				//print "PHP is nice <br>";
				$a = "Rubel";
				var_dump($a);
				echo "<br>";
				class Student{
					public $a ;
					public $b ;
					function department(){
						return 'Computer Science and engineering';
					}
					function details(){
						echo "Electrical Electronoics and engineering";
					}
					public function addition($a,$b){
						return $a + $b ;
					}
					function test_string(){
						echo "This is just string noting else <br>";
						echo "if you doing practice everyday hard and soul then you will able learing someting new everyday ";
					}
				}
				$st = new Student();
				$st->details();
				$ss = $st->department();
				echo "<br>";
				echo $ss ;
				echo "<br>";
				echo $st->addition(10,20);
				echo '<br>';
				echo $st->test_string();
				echo '<br>';
				define("aa","3.12");
				echo "This is just define constent " .aa;
				define('pi','3.1416');
				echo '<br>';
				echo pi;
				echo '<br>';
				function test_define(){
					echo pi ."<br>";
				}
				test_define();
				echo '<br>';
				
				$x = "I love Programming ";
				$y = "Cause of i love it!!";
				$z = $x . $y ;
				echo $z ;
				echo "<br>";
				/// how to use foreach array
				$color = array("red","green","white","black");
				foreach($color as $key){
					echo $key."<br>" ;
				}
				///deeper concept of array
				echo "<br>";
				
				$ar = array(1,2,3,4,5,6,7,8,9,10);
				for($i = 0 ; $i < count($ar);++$i ){
					echo $i . "<br>" ;
					$sum += $i;
				}
				echo "The total sum of this array = ". $sum ;
				echo "<br>";
				
				$asso = array("Rubel" => "28" , "Rasel"=>"26" , "Amain"=>"20");
				foreach($asso as $key=>$value){
					echo "The key is = ".$key." => ".$value."<br>";
				}
				///supper global variable used
				
				echo "<br>";
				
				$contain = $_SERVER['PHP_SELF'];
				echo $contain;
				
				
			?>
			</section>
			<section class="footeroption">
				<h2><?php echo "This is footer options using by php";?></h2>
			</section>
			
		</div>
		
	</body>
</html>