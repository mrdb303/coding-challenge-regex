<?php
require_once('includes/header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$data = trim($_POST['data']);
	$result = testRegexPatternLevel1($data);
}

?>
<section>
<p>Let's work on some regex. Using this set of numbers 123-939-7878 complete this level.</p>
<br/><br/><br/><br/>

<h2>Level 1 - The Simplest Way</h2><br/>

<p>Yes, this is a trick question. What is the simplest way to check for EXACTLY 
this set of numbers?.<br/> Remember the simplest way is not always the correct way ;)</p>
</section>


<section>
<form action="level1.php" method="POST">
<label for="data">Number to be validated:</label>
<br/>
<input type="text" name="data"
value="<?php if(isset($data)) echo htmlentities($data); ?>" size="30"/></p><br/>
<input type="submit" name="submit" value="Submit" />
<br/><br/><p>Regex pattern used:<br/><?php echo htmlentities('/^123-939-7878$/')?></p>
</form>
</section>


<div id="result">
	<h3>Result:</h3><br/>
<?php

if(isset($result) && $data != ''){
	echo $result;
}
echo "</div>";
echo '<a href="./index.php">Back to index</a><br/><br/>';

function testRegexPatternLevel1($value){
	$pattern = '/^123-939-7878$/';

	if(preg_match($pattern, $value)) {
		return "<p>Success! - The value entered matches the Regex pattern</p>";
	} else {
		return "<p>Fail! - The value entered does NOT match the Regex pattern</p>";
	}
}

require_once('includes/footer.php');