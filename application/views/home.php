<?php include_once "template/header.php" ?>
	<div class="datacapture">
		<div id="f_name">
			<input type="text" id="fname" retval="first name" />
		</div>
		<div id="l_name">
			<input type="text" id="lname" retval="last name" />
		</div>
		<div id="dob">
			<input type="text" id="dd" retval="dd" maxlength="2" />
			<input type="text" id="mm" retval="mm" maxlength="2" />
			<input type="text" id="yy" retval="yyyy" maxlength="4" />
		</div>
		<div id="colors">
			<div class="red" id="notactive"></div>
			<div class="blue" id="notactive"></div>
			<div class="green" id="notactive"></div>
			<div class="purple" id="notactive"></div>
			<div class="black" id="notactive"></div>
		</div>
		<div id="notice"></div>
		<div id="save">save answer</div>
	</div>
<?php include_once "template/footer.php" ?>
