<!DOCTYPE html> 
<html lang="en"> 
<?=$this->load->view('global/header')?> 
<body>
<div id="background_text">               

	<div id="header" class="container_16"></div>
	                
	<div id="top-menu" class="container_16">
		<?=$this->load->view('global/main_menu')?> 
	</div>
	
	<div id="slideshow" class="container_16">
		<div id="" class="grid_16">
			<?=$this->load->view('slideshow/frontpage')?> 
		</div>
		
		<div class="clear">
		</div>
	</div>
	
	
	<div id="content" class="container_16">
	
		<div id="main_container" class="grid_11">
			
			<div id="breadcrumb">
				YOU ARE HERE:
			</div>
			
			<div id="main_text">
			<?=$this->load->view($main_content)?>
			</div>
			
		<?php if(isset($content)) { $this->load->view('global/strip'); }?>
			
		</div>
	
		<div id="sidebar" class="grid_5">
			<?=$this->load->view('sidebar/main_sidebar')?>
		</div>
		<div class="clear">
		</div>
	</div>
	
	                
	
	<div id="footer" class="container_16">
		<div id="" class="grid_16">
			
		</div>
		<div class="clear">
		</div>
	</div>
	
	<div id="sub_footer" class="container_16">
		<div id="" class="grid_16">
			Access360 Ltd, Ilgars Manor, Workhouse Lane, South Woodham Ferrers, Essex CM3 8RD   T: 0845 074 5656   E: sales@access360.co.uk
		</div>
		<div class="clear">
		</div>
	</div>
 </div> 
           
</body>
</html>