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
<div id="scoreEntry">

<?php if($score > 0) {?>
<h4>Your time: <?=$response?> <?=$score?> seconds</h4><br/>

<?php }?>	

<?php if($errors) {?>
<div class="ui-state-error ui-corner-all">
<?php echo $errors;?>	
</div>
<?php }?>


<?=form_open('flashgame/submit_turkey')?>
<?=$this->load->view('global/table')?>	

<?php 



$data = array(
			'name' => 'initials',
			'id' => 'initials',
			'maxlength' => 3,
             'rows'   => '1',
             'cols'        => '3',
            'value' => $initials
            );
$referrals = array(
'Search Engine' => 'Search Engine',
'Radio Advertisement'  => 'Radio Advertisement',
'Word of Mouth' => 'Word of Mouth',
'Other' => 'Other'
);
?>

<strong>Initials</strong><br/><?=form_input($data)?><br/>
<strong>Email Address</strong><br/><?=form_input('email_address', $email_address)?><br/>
If you do not want to receive future information from Access360 Ltd, please uncheck this box<br/>
<?=form_checkbox('request_info', 'accept', TRUE)?>
<?=form_hidden('time', $score)?>
<br/>
	
<?php 
	echo form_submit('submit', 'Submit');
		form_close();
	
?>
</div>