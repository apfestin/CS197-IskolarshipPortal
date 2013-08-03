<div class="span12" align="center">
 <?$fullname = array($studentinfo['firstname'], $studentinfo['middlename'], $studentinfo['lastname'], $studentinfo['namesuffix']);?>
	<div class="row" style="width:95%">
		<div class="well span5" align="center" style="text-align:center">
			<div class="well" style="background-color:white">
			<img src="<?= base_url('images/pic.png')?>" style="padding-left:20px;"/>
			</div>
			<div class="well" style="background-color:white">
			Description:<br/>
			I am beautiful, no matter what they say
			</div>
		</div>
		<div class="well span5">
			<table style="width:100%; text-align:center">
			<tr>
			<td style="text-align:left">
			<h3>Donation Information</h3>
			</td>
			<td style="text-align:right">
			&nbsp;
			</td>
			</tr>
			</table>
			<br/>
			<table style="width:100%; text-align:center">
			<tr>
			<td style="border-right: 2px solid">
			<b>Percent Funded</b>
			</td>
			<td>
			<b>Peso donations to go</b>
			</td>
			</tr>
			<tr height="80px">
			<td style="font-size:60px; border-right: 2px solid">
			<b><?=ceil(($money / $studentinfo['targetmoney']) * 100)?>%</b>
			</td>
			<td style="font-size:35px">
			<b>Php <?=$studentinfo['targetmoney'] - $money?></b>
			</td>
			</tr>
			</table>
			<br/>
			<div class="progress" style="border:2px solid">
				<div style="width: 69%;" class="bar bar-custom"></div>
			</div>
			<form method="post" action="<?= base_url('viewstudentdetails/fundeducation')?>">
			<input type="hidden" name = "studentid" value = "<?=$studentid?>">
			<table style="width:100%; text-align:center">
			<tr>
			<td>
			<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;Donation Amount</b>
			<br/></td>
			<td rowspan="2">
			<input type = "submit" class="btn btn-custom btn-xlarge" value = "Fund Education"/>
			
			</td>
			</tr>
			<tr>
			<td style="font-size:35px;">
			<b>Php</b>&nbsp;<input type="text" name = "amount" style="width:150px; height: 50px; font-size:30px">
			</td>
			
			</tr>
			</table>
			</form>
		</div>
		<div class="well span12" style="width:91%;">
			<div style="width:80%;">
			<h3>Student's Information</h3>
			<hr>
			<table class="wide table table-bordered tablesorter tablesorter-bootstrap table-striped table-hover">
				<tr>
				<td width="25%"><b>Name: </b></td>
				<td><?=implode($fullname, " ")?><br/></td>
				</tr>
				<tr>
				<td><b>Sex: </b></td>
				<td><?=($studentinfo['sex'] == 1 ? 'Female' : 'Male')?><br/></td>
				</tr>
				<tr>
				<td><b>Birthday: </b></td>
				<td><?=$studentinfo['birthday']?><br/></td>
				</tr>
				<tr>
				<td><b>Degree Program: </b></td>
				<td><?=$studentinfo['name']?><br/></td>
				</tr>
				<tr>
				<td><b>Family Income: </b></td>
				<td><?=$studentinfo['familyincome']?><br/></td>
				</tr>
				<tr>
				<td><b>Reason For Needing Scholarship: </b></td>
				<td><?=$studentinfo['reasonforneedingscholarship']?><br/></td>
				</tr>
				<tr>
				<td><b>Target Money: </b></td>
				<td><?=$studentinfo['targetmoney']?><br/></td>
				</tr>
			</table>
			<div width="100%" align="center">
				<form method="post" action="<?= base_url('viewstudentdetails/downloadfile')?>">
					<input type = "hidden" name = "filename" value = "sample.pdf"/>
					<input type = "hidden" name = "filepath" value = "C:\Users\adelin\Desktop\pandesal.pdf"/>
					<input type="submit" value = "Download CSV" class="btn btn-large btn-custom"/>
				</form>
			</div>
			<br/>
			</div>
		</div>
	</div>	
</div>