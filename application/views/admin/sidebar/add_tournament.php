 

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add A Tournament</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add A Tournament</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
			
			<div class="col-md-8">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user addbanner">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info banner-size">
				
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Founder & CEO</h5>
              </div>
              <div class="widget-user-image addbanner-image">			  
						<div>
							<img class="img-circle elevation-2" src="<?php echo base_url();?>/assets/admintheme/dist/img/user1-128x128.jpg" alt="User Avatar">
						</div>
              </div>
			  
			  
			  

              <div class="card-footer">
                <div class="row">
				
				<div class="col-sm-6 ">
                    <div class="description-block 	divspace-banner">
						<span class="logo-text">Add Banner</span>
						<input type="file" class="input-file">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
				
				<div class="col-sm-6 border-right">
                    <div class="description-block">
						<span class="logo-text">Add Profile</span>
						<input type="file">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                 
                  
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
	  </div>    
      <!-- /.row -->
	  
		  <div class="row">
			<div class="main">
			<form>
				<div class="inputtour">
					<input id="TourName" type="text" class="styl" placeholder="Tournament Name*">
				</div>
	 
				 <div class="inputtour">
					<input id="City" type="text" class="styl" placeholder="City*">
				 </div>
	  
				<div class="inputtour">
					<input id="Ground" type="text" class="styl" placeholder=" Ground*">
				</div>
				
				<div class="inputtour">
					<input id="OrganiseName" type="text" class="styl" placeholder="Organiser Name*">
				</div>
				
				<div class="inputtour">
					<input id="OrganiseNum" type="text" class="styl" placeholder="Organiser Number*">
				</div>
				
				
				<div class="inputtour">
					<input id="startdate" type="date" class="styl" placeholder="Start Date*">
				</div>
				
				<div class="inputtour">
					<input id="enddate" type="date" class="styl" placeholder="End Date*">
				</div>
				
				<div class="inputtour">
					<fieldset class="radiotour">
						<legend class="categorytour">Tournament Category</legend>
							<label for="radio-1" class="categorytours" >OPEN</label>
							<input type="radio" name="radio-1" id="radio-1"  class="radiotours">
							<label for="radio-2" class="categorytours">CORPORATE</label>
							<input type="radio" name="radio-1" id="radio-2" class="radiotours">
							<label for="radio-3" class="categorytours">COMMUNITY</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">
							<label for="radio-3" class="categorytours">SCHOOL</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">
							
							<label for="radio-3" class="categorytours">BOX CRICKET</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">
							<label for="radio-3" class="categorytours">OTHER</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">
					</fieldset>
				</div>
				
				
				
				<div class="inputtour">
					<fieldset class="radiotour">
						<legend class="categorytour">Select Ball Type</legend>
							<label for="radio-1" class="categorytours" >TENNIS</label>
							<input type="radio" name="radio-1" id="radio-1"  class="radiotours">
							<label for="radio-2" class="categorytours">LEATHER</label>
							<input type="radio" name="radio-1" id="radio-2" class="radiotours">
							<label for="radio-3" class="categorytours">OTHER</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">							
					</fieldset>
				</div>
				
				
				<div class="inputtour">
					<fieldset class="radiotour">
						<legend class="categorytour">Select Match Type</legend>
							<label for="radio-2" class="categorytours">LIMITED OVERS</label>
							<input type="radio" name="radio-1" id="radio-2" class="radiotours">
							<label for="radio-3" class="categorytours">TEST MATCH</label>
							<input type="radio" name="radio-1" id="radio-3" class="radiotours">							
					</fieldset>
				</div>
				
				
				<textarea class="tourdetails"placeholder="Add More Details of the Tournaments..."></textarea>
				<br><br>
				<button class="sendtour">Next</button><br><br>
				
			</form>
			</div>
			
		  </div>      <!-- /.row -->

			<div  class="row">
			
			

			</div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </section>
	
    <!-- /.content -->
