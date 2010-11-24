<?php foreach($content as $row): ?>
<img src="<?=base_url()?>images/titles/<?=$menu?>.png"><br/>
<span>
<?=$row->content?>
</span>



<?php endforeach; ?>