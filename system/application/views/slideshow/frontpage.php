<script type="text/javascript">
$(document).ready(function() {
    $('.cycle').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		speedIn:  2500, 
	    speedOut: 2500, 
	   timeout:   18000 
	});
});
</script>

<div class="cycle">
<img src="<?=base_url()?>images/slideshow/sl1.jpg" width="940px" height="202px">
<img src="<?=base_url()?>images/slideshow/sl2.jpg" width="940px" height="202px">
<img src="<?=base_url()?>images/slideshow/sl3.jpg" width="940px" height="202px">
</div>