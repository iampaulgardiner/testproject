<?php include_once "template/header.php" ?>
	<div class="menu">
		<li><a href="/overview">all</a></li>
		<li><a href="/overview/unique">unique names</a></li>
		<li><a href="/overview/stats">stats</a></li>
	</div>
	<div class="body">
		<?php if(!empty($data)): ?>
		<div class="list">
		<?php foreach($data as $value): ?>
			<div id="element">
				<div id="name"><?php print $value['first_name']?> <?php print $value['last_name']?></div>
				<div id="dob"><?php print $value['dob']?></div>
				<div id="color" class="<?php print $value['color']?>"></div>
			</div>
		<?php endforeach; ?>
		</div>
		<?php endif; ?>
		
		<?php if(!empty($stats['users'])) :?>
			<div class="stats">
				<div id="users"> {<?php print $stats['users']?>} users answered the question </div>
				<div id="differentColors">
					<?php foreach($stats['color'] as $value): ?>
					<div class="<?php print $value['name']?>" style="width:<?php print $value['percentage']?>%;"> {<?php print $value['count']?>} </div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
		
	</div>
<?php include_once "template/footer.php" ?>