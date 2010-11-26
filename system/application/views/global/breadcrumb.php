<a href="<?=base_url()?>welcome/main/">HOME</a>

	<?php if(isset($breadcrumb)) {?>
		<?php $parent = strtoupper($breadcrumb);
		$secondary = "viewitem/";
		?>
		
		> <a href="<?=base_url()?><?=$breadcrumb?>"><?=$parent?></a>
	
	<?php }
	else
	{
	$breadcrumb = "welcome/main";
	$secondary = "";
	}?>
	
	
<?php 
if(isset($content)) {
foreach($content as $row): ?>


<?php $current_location = strtoupper($row->menu);?>

<?php if($row->menu != "home") {?>
	> <a href="<?=base_url()?><?=$breadcrumb?>/<?=$secondary?><?=$row->menu?>"><?=$current_location?></a>
<?php }?>
<?php endforeach;

}
?>