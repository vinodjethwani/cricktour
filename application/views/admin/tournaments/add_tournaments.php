	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
			<h6><?php if($this->session->flashdata('msg')): ?>
				<p class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></p>
				<?php endif; ?>
			</h6>	
            <h1 class="m-0 text-dark">CricTour</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CricTour</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
	
	<div class="row-fluid">
		<div class="span12">
			<h3 class="heading">Add Tournaments</h3>
				<div class="row-fluid">
					<div class="span8">
						<form class="form-horizontal" action="<?php echo site_url('admin/tournaments/add_tournaments'); ?>" method="post" enctype="multipart/form-data" >
							<fieldset>
		
								<?php $error = ''; if(form_error('name')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Tournament Name <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('name', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('city_id')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">City <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
									    <select name="city_id" id="city_id" class="input-xlarge form-control chosen">
							                <option value="">Select City</option>
							 				<option value="1" <?php echo set_select('city_id', '1'); ?> >Jaipur</option>
							 				<option value="2" <?php echo set_select('city_id', '2'); ?> >Ajmer</option>
									    </select>
										<?php echo form_error('city_id', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('ground_id')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Ground <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="text" name="ground_id" id="ground_id" value="<?php echo set_value('ground_id'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('ground_id', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('organiser_name')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Organiser Name <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="text" name="organiser_name" id="organiser_name" value="<?php echo set_value('organiser_name'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('organiser_name', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('organiser_mobile_number')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Organiser Mobile Number <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="text" name="organiser_mobile_number" id="organiser_mobile_number" value="<?php echo set_value('organiser_mobile_number'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('organiser_mobile_number', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('start_date')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Start Date <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<div class="input-append date form_date" data-date-format="dd-mm-yyyy">
											<input class="input-xlarge form-control" type="date" name="start_date" id="start_date" value="<?php echo set_value('start_date'); ?>" /><span class="add-on"><i class="icon-calendar"></i></span>
										</div>
										<?php echo form_error('start_date', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('end_date')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">End Date <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<div class="input-append date form_date" data-date-format="dd-mm-yyyy">
											<input class="input-xlarge form-control" type="date" name="end_date" id="end_date" value="<?php echo set_value('end_date'); ?>" /><span class="add-on"><i class="icon-calendar"></i></span>
										</div>
										<?php echo form_error('end_date', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('tournament_category')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Tournament Category <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
									    <select name="tournament_category" id="tournament_category" class="input-xlarge form-control chosen">
							                <option value="">Select Tournament Category</option>
							 				<option value="Open" <?php echo set_select('tournament_category', '0'); ?> >Open</option>
							 				<option value="Corporate" <?php echo set_select('tournament_category', '1'); ?> >Corporate</option>
							 				<option value="Community" <?php echo set_select('tournament_category', '2'); ?> >Community</option>
							 				<option value="School" <?php echo set_select('tournament_category', '3'); ?> >School</option>
							 				<option value="Box-Cricket" <?php echo set_select('tournament_category', '4'); ?> >Box-Cricket</option>
							 				<option value="Other" <?php echo set_select('tournament_category', '5'); ?> >Other</option>
									    </select>
										<?php echo form_error('tournament_category', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('ball_type')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Ball Type <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
									    <select name="ball_type" id="ball_type" class="input-xlarge form-control chosen">
							                <option value="">Select Ball Type</option>
							 				<option value="0" <?php echo set_select('ball_type', 'Leather'); ?> >Leather</option>
							 				<option value="Tennis" <?php echo set_select('ball_type', 'Tennis'); ?> >Tennis</option>
							 				<option value="Other" <?php echo set_select('ball_type', 'Other'); ?> >Other</option>
									    </select>
										<?php echo form_error('ball_type', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('match_type')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Match Type <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
									    <select name="match_type" id="match_type" class="input-xlarge form-control chosen">
							                <option value="">Select Match Type</option>
							 				<option value="Limited Overs" <?php echo set_select('match_type', 'Limited Overs'); ?> >Limited Overs</option>
							 				<option value="Test Match" <?php echo set_select('match_type', 'Test Match'); ?> >Test Match</option>
									    </select>
										<?php echo form_error('match_type', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('logo')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Logo <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="file" name="logo" id="logo" value="<?php echo set_value('logo'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('logo', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('banner')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">Banner <span class="f_req">*</span></label>
							        <div class="controls col-md-10">
										<input type="file" name="banner" id="banner" value="<?php echo set_value('banner'); ?>" class="input-xlarge form-control"  >
										<?php echo form_error('banner', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<?php $error = ''; if(form_error('more_details')){ $error = 'error'; } ?>

							   	<div class="control-group  form-groupformSep row <?php echo $error; ?>">
							        <label for="select01" class="control-label form-labelcol-md-2">More Details </label>
							        <div class="controls col-md-10">
										<textarea class="span8" rows="3" cols="10" id="more_details" name="more_details form-control"><?php echo set_value('more_details'); ?></textarea>
										<?php echo form_error('more_details', '<span class="help-inline">', '</span>'); ?>
									</div>
							  	</div>
							  	
								<div class="control-group">
									<div class="controls col-md-10">
										<button class="btn btn-gebo" type="submit">Save</button>
										<a class="btn" href="<?php echo site_url('tournaments'); ?>">Cancel</a>
									</div>
								</div>

								</fieldset>
							</form>
					</div>
				</div>
			</div>
		</div>
		
		</div>
	</div>
</div>