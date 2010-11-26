<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker({showOtherMonths: true, selectOtherMonths: true, dateFormat: 'D, dd M yy' });
	});

	$(function() {
		$("button, input:submit").button();


	});
</script>



<?php if($errors) {?>
<div class="ui-state-error ui-corner-all">
<?php echo $errors;?>
</div>
<?php }?>


<?=form_open('contact/form')?>
<?=$this->load->view('global/table')?>

<?php

$messagedata = array(
              'name'        => 'message',
              'id'          => 'message',
              'value'       => $message,
               'size'        => '50',
              'style'       => 'width:80%',
            );

$referrals = array(
'Search Engine' => 'Search Engine',
'Radio Advertisement'  => 'Radio Advertisement',
'Word of Mouth' => 'Word of Mouth',
'Other' => 'Other'
);
?>
<strong>Full Name</strong><br/><?=form_input('full_name', $full_name)?><br/>
<strong>Email Address</strong><br/><?=form_input('email_address', $email_address)?><br/>
<strong>Message</strong><br/><?=form_textarea($messagedata)?><br/>
If you do not want to receive future information from Access360 Ltd, please uncheck this box<br/>
<?=form_checkbox('request_info', 'accept', TRUE)?>


<br/>

<?php
	echo form_submit('submit', 'Submit');
		form_close();

?>
