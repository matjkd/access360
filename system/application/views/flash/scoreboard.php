<div id="scoreboard">
<h4>Top Ten</h4>
<?php $x = 0; ?>
<?php foreach($top_ten as $row):?>
<?php 
$x = $x + 1; 
$initials = strtoupper($row->initials);
?>
<div id="number"><?=$x?>.</div>

<div id="scoreInitials"><?=$initials?> </div>

<div id="time">............. <?=$row->time?></div><br/>

<?php endforeach;?>
</div>

 <div style="padding:10px;">The competition is now over, but you can now play for fun!</div>