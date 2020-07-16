<?php
require_once('includes/header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$data = trim($_POST['data']);
	$result = testRegexPatternLevel4($data);
}

?>
<section>
<p>Let's work on some regex. Using this number pattern 123-939-7878 complete this level.</p>
<br/><br/><br/><br/>

<h2>Level 4 - Group Those Numbers</h2><br/>

<p>Let's turn those numbers into groups.</p>
</section>


<section>
<form action="level4.php" method="POST">
<label for="data">Number to be validated:</label>
<br/>
<input type="text" name="data"
value="<?php if(isset($data)) echo htmlentities(strip_tags($data)); ?>" size="30"/><br/><br/>
<input type="submit" name="submit" value="Submit" />
<br/><br/><p>Regex pattern used:<br/><?php echo htmlentities('/^(\d){3}-(\d){3}-(\d){4}$/')?></p>
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


function testRegexPatternLevel4($value){
	$pattern = '/^(\d){3}-(\d){3}-(\d){4}$/';

	if(preg_match($pattern, $value)) {
		return "<p>Success! - The value entered matches the Regex pattern</p>";
	} else {
		return "<p>Fail! - The value entered does NOT match the Regex pattern</p>";
	}
}

require_once('includes/footer.php');