<div class="span12">

<br>
<br>
<div class="well" style="padding-top:10px">
<br/>
<h4> Pending scholarships </h4>
<br/>
<div style="padding:10px;padding-top:0px">
<table class="table" >
	<tr class="orange">
		<th width="40%">Title</th>
		<th>Description</th>
	</tr>
	<?php
	$counter = 0;
	if(!empty($scholarships)) {
		while($counter < sizeof($scholarships)) { ?>
			<tr>
			
			<td> 
			<h3>
			<a href="<?= base_url('viewscholarshipdetails/loadscholarshipinfo_AsAdmin/' . $scholarships[$counter]['scholarshipid'])?>" > <?php echo $scholarships[$counter]['title']; ?> </a>
			</h3>
			</td>
			
			<td> <?php echo $scholarships[$counter]['description']; ?> </td>
			
			</tr>
		<?php
			$counter++;
		}
	}
	else { ?>
	<tr> No scholarships found </tr>
	<?php } ?>		
</table>
</div>
</div>
</div>