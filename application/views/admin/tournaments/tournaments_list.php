

	<div class="row-fluid">
		<div class="span12">
			<h3 class="heading">Tournaments List</h3>

				<div class="row-fluid">
					<div class="span12">
						<ul class="dshb_icoNav tac">
							<li><a href="<?php echo site_url('admin/tournaments/add_tournaments'); ?>" style="background-image: url(<?php echo base_url(); ?>assets/img/gCons/add-item.png)">New Tournaments</a></li>
						</ul>
					</div>
				</div>

				<table class="table table-striped table-bordered" id="dt_d">
                    <thead>
                        <tr>
                        	<th>No.</th>
                        	<th>Tournament Name</th>
							<th>City</th>
							<th>Ground</th>
							<th>Organiser Name</th>
							<th>Organiser Mobile Number</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Tournament Category</th>
							<th>Ball Type</th>
							<th>Match Type</th>
							<th>Logo</th>
							<th>Banner</th>
							<th>More Details</th>
							<th>Action</th>
						</tr>
                    </thead>
                    <tbody>
	                    <?php
						    $num = 0; if(isset($tournaments_records)) :foreach($tournaments_records as $row): $num++;
						?>
						<tr>
							<td></td>
							<td><?php echo $row->name; ?></td>
							<td><?php echo $row->city_name; ?></td>
							<td><?php echo $row->ground_name; ?></td>
							<td><?php echo $row->organiser_name; ?></td>
							<td><?php echo $row->organiser_mobile_number; ?></td>
							<td><?php echo $row->start_date; ?></td>
							<td><?php echo $row->end_date; ?></td>
							<td><?php echo $row->tournament_category; ?></td>
							<td><?php echo $row->ball_type; ?></td>
							<td><?php echo $row->match_type; ?></td>
							<td><?php echo $row->logo; ?></td>
							<td><?php echo $row->banner; ?></td>
							<td><?php echo $row->more_details; ?></td>
							<td>
                              <a href="<?php echo site_url('tournaments/edit_tournaments/'.$row->tournaments_id.'/'.encode_id($row->tournaments_id)); ?>" class="sepV_a" title="Edit"><i class="icon-pencil"></i></a>
                              <a href="#" class="delete" id="<?php echo encode_ajax_id($row->tournaments_id); ?>" title="Delete"><i class="icon-trash"></i></a>
                          	</td>
                        </tr>
                        <?php endforeach; ?>
						<?php else : ?>
						<?php endif; ?>
                    </tbody>
            	</table>
      	</div>
 	</div>