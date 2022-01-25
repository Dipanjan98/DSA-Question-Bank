<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}
include_once('inc/header.php');
 ?>
 <div class="row">
 	<div class="col-md-12">
 		<h2>Welcome Dear,<?php echo $_SESSION['user_email']; ?></h2>
		
<h2> Find all questions Below
		</h2>

<p> 
<a>
<button onclick="myFunction1()">UIU</button>

<p id="demo1"></p>

<script>
function myFunction1() {
  document.getElementById("demo1").innerHTML = "<li> CSE</li> <li> MBA</li> <li> BBA</li> <li> EET</li> <li> EEE</li>";
}
</script>

</a>
</p>


<p> 
<a>
<button onclick="myFunction2()">NSU</button>

<p id="demo2"></p>

<script>
function myFunction2() {
  document.getElementById("demo2").innerHTML = "<li> CSE</li> <li> MBA</li> <li> BBA</li> <li> EET</li> <li> EEE</li>";
}
</script>

</a>

</p>


<p> 
<a>
<button onclick="myFunction3()">MBSTU</button>

<p id="demo3"></p>

<script>
function myFunction3() {
  document.getElementById("demo3").innerHTML = "<li> CSE</li> <li> MBA</li> <li> BBA</li> <li> EET</li> <li> EEE</li>";
}
</script>

</a>

</p>

<p> 
<a>
<button onclick="myFunction4()">IUB</button>

<p id="demo4"></p>

<script>
function myFunction4() {
  document.getElementById("demo4").innerHTML = "<li> CSE</li> <li> MBA</li> <li> BBA</li> <li> EET</li> <li> EEE</li>";
}
</script>

</a>

</p>


<p> 
<a>
<button onclick="myFunction5()">MIT</button>

<p id="demo5"></p>

<script>
function myFunction5() {
  document.getElementById("demo5").innerHTML = "<li> CSE</li> <li> MBA</li> <li> BBA</li> <li> EET</li> <li> EEE</li>";
}
</script>

</a>

</p>


		<p><a href="logout.php">Logout</a></p>

 	</div>
 </div>
 
