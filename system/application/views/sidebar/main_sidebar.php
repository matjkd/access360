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

    <a href="<?=base_url()?>flashgame"><img alt="turkey game"  src="<?=base_url()?>images/feature/Access360_Game_Insert.jpg"></a>

<?php
}
?>
</div>