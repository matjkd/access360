
<?php foreach($content as $row): ?>
<?php if(isset($row->image_strip)) {?>
		<div id="strip">
						<img src="<?=base_url()?>images/strips/<?=$row->image_strip?>">
		</div>
<?php  }?>


<?php  endforeach; ?>
