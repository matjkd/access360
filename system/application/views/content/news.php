<?php foreach($content as $row): ?>
<h1><?=$row->title?></h1>
<?php if(isset($row->news_image)) {?>
		<div id="strip">
						<a  href="<?=base_url()?>images/news/<?=$row->news_image?>" rel="prettyPhoto"><img align="left" class="news_image" src="<?=base_url()?>images/news/thumbs/<?=$row->news_image?>"></a>
		</div>
<?php  }?>
<?=$row->content?>




<?php endforeach; ?>