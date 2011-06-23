	<div id="breadcrumb">
			<?=$this->load->view('/sidebar/latest_news')?>
		<div class="clear">
		</div>
	</div>

<div id="sidebarItem">
<?php if(isset($sidebar1))
{

   $this->load->view($sidebar1);

}
else
{


?>

    <img alt="touch screens"  src="<?=base_url()?>images/feature/touchscreen.jpg"></a>

<?php
}
?>
</div>