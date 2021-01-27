<?php
$user_id = $this->session->userdata('user_id');

if (!$user_id){
	redirect('User');
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<table class="table table-bordered table-striped">
				<tr>
					<th colspan="2"><h4 class="text-center">User Details</h4></th>
				</tr>
<!--				--><?php //foreach($users as $key=> $val){?><!--}-->
			</table>
		</div>
	</div>
</div>
