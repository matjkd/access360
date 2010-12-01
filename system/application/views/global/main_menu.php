<script type="text/javascript"> 
$(document).ready(function() {

	$("#topnav li").prepend("<span></span>"); //Throws an empty span tag right before the a tag

	$("#topnav li").each(function() { //For each list item...
		var linkText = $(this).find("a").html(); //Find the text inside of the <a> tag
		$(this).find("span").show().html(linkText); //Add the text in the <span> tag
	}); 

	$("#topnav li").hover(function() {	//On hover...
		$(this).find("span").stop().animate({
			marginTop: "-31" //Find the <span> tag and move it up 31 pixels
		}, 250);
	} , function() { //On hover out...
		$(this).find("span").stop().animate({
			marginTop: "0"  //Move the <span> back to its original state (0px)
		}, 250);
	});

});
</script>
<ul id="topnav">
    <li class="menu_87"><a href="<?=base_url()?>">home</a></li>
    <li class="menu_87"><a href="<?=base_url()?>welcome/main/overview">overview</a></li>
    <li class="menu_87"><a href="<?=base_url()?>welcome/main/process">the process</a></li>
    <li class="menu_87"><a href="<?=base_url()?>welcome/main/signage">signage</a></li>
    <li class="menu_87"><a href="<?=base_url()?>welcome/main/exhibitions">exhibitions</a></li>
    <li class="menu_177"><a href="<?=base_url()?>welcome/main/professional">professional standards</a></li>
    <li class="menu_87"><a href="<?=base_url()?>news">news</a></li>
    <li class="menu_87"><a href="<?=base_url()?>contact">contact</a></li>
</ul>





