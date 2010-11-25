<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker({showOtherMonths: true, selectOtherMonths: true, dateFormat: 'D, dd M yy' });
	});

	$(function() {
		$("button, input:submit").button();
		
		
	});
</script>
<style type="text/css" media="screen">

#scoreEntry {
text-align:center;
}
</style>

<h4>Your time: <?=$score?></h4>
	
<?php echo $errors;?>	
<?=form_open('flashgame/submit_turkey')?>
<?=$this->load->view('global/table')?>	

<?php 



$data = array(
			'name' => 'initials',
			'id' => 'initials',
			'maxlength' => 3,
              'rows'   => '1',
              'cols'        => '3'
            
            );
$referrals = array(
'Search Engine' => 'Search Engine',
'Radio Advertisement'  => 'Radio Advertisement',
'Word of Mouth' => 'Word of Mouth',
'Other' => 'Other'
);
?>
<div id="scoreEntry">
Initials<br/><?=form_input($data)?><br/>
Email Address<br/><?=form_input('email_address')?><br/>
If you do not want to receive future information from Access 360 Ltd, please uncheck this box<br/>
<?=form_checkbox('request_info', 'accept', TRUE)?>


	
<?php 
	echo form_submit('submit', 'Submit');
		form_close();
	
?>
</div>