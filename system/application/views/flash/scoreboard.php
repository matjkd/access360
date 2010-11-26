<div id="scoreboard">
<h4>Top Ten</h4>
<?php $x = 0; ?>
<?php foreach($top_ten as $row):?>
<?php $x = $x + 1; ?>
<div id="number"><?=$x?>.</div>

<div id="scoreInitials"><?=$row->initials?> </div>

<div id="time">............. <?=$row->time?></div><br/>

<?php endforeach;?>
</div>