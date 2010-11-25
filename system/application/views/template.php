<!DOCTYPE html> 
<html lang="en"> 
<?=$this->load->view('global/header')?> 
<body>

 <!--[if lt IE 7]>
  <div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
    <div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'><a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/></a></div>
    <div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
      <div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/></div>
      <div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
        <div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>You are using an outdated browser</div>
        <div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>For a better experience using this site, please upgrade to a modern web browser.</div>
      </div>
      <div style='width: 75px; float: left;'><a href='http://www.firefox.com' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox 3.5'/></a></div>
      <div style='width: 75px; float: left;'><a href='http://www.browserforthebetter.com/download.html' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer 8'/></a></div>
      <div style='width: 73px; float: left;'><a href='http://www.apple.com/safari/download/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari 4'/></a></div>
      <div style='float: left;'><a href='http://www.google.com/chrome' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/></a></div>
    </div>
  </div>
  <![endif]-->

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
	<div id="background_content">
		<div id="main_container" class="grid_11">
			
			<div id="breadcrumb">
				YOU ARE HERE:
			</div>
			
			<div id="main_text">
			<?=$this->load->view($main_content)?>
			
				<?php if(isset($content)) { $this->load->view('global/strip'); }?>
			</div>
			

			
		</div>
	
		<div id="sidebar" class="grid_5">
			<?=$this->load->view('sidebar/main_sidebar')?>
		</div>
		<div class="clear">
		</div>
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