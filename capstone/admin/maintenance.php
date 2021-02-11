 <?php include_once 'admin-header.php'; ?>


	   <section id="showcase">

	   		<div class="showcase-header py-1 px-4">
	   			<div class="row">
	   				<div class="col-md-6">
	   					<i class="fas fa-home"></i> / <small>MAINTENANCE</small>
	   				</div>
	   			</div>
	   		</div>


	   		<div class="row py-3 px-4" id="maintenance">
	   			<div class="col-md1-12">
	   				<h1 class="mb-3">MAINTENANCE</h1>

	   				<!-- TAB PANNEL -->
	   				<div class="row">
	   					<div class="col-lg-12">
	   						<!-- TABS LIST -->
	   						<ul class="nav nav-tabs" id="myTab" role="tablist">
	   						  <li class="nav-item" role="presentation">
	   						    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#category" type="button" role="tab" aria-controls="home" aria-selected="true">CATEGORY</button>
	   						  </li>
	   						  <li class="nav-item" role="presentation">
	   						    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#program" type="button" role="tab" aria-controls="profile" aria-selected="false">PROGRAM</button>
	   						  </li>
	   						  <li class="nav-item" role="presentation">
	   						    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#books" type="button" role="tab" aria-controls="profile" aria-selected="false">BOOKS</button>
	   						  </li>
	   						  <li class="nav-item" role="presentation">
	   						    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#setting" type="button" role="tab" aria-controls="contact" aria-selected="false">SETTINGS</button>
	   						  </li>
	   						</ul>
	   						<!-- END OF TAB LIST -->

	   						<!-- TABS CONTENT -->
	   						<div class="tab-content pt-4" id="myTabContent">

	   						  <div class="tab-pane fade show active" id="category" role="tabpanel" aria-labelledby="home-tab">

	   						  	<form class="d-flex mb-3">
	   						  		<div class="form-group">
	   						  			<input type="text" name="" class="form-control" placeholder="Category">
	   						  		</div>
	   						  		<div class="form-group ms-2">
	   						  			<input type="submit" name="" value="ADD CATEGORY" class="btn btn-primary">
	   						  		</div>
	   						  	</form>

	   						  	<table class="table">
	   						  	  <thead>
	   						  	    <tr>
	   						  	      <th>#</th>
	   						  	      <th>Category</th>
	   						  	      <th></th>
	   						  	    </tr>
	   						  	  </thead>
	   						  	  <tbody>
	   						  	    <tr>
	   						  	      <td>1</td>
	   						  	      <td>Fantasy</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>2</td>
	   						  	      <td>Programming</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>3</td>
	   						  	      <td>Romance</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>4</td>
	   						  	      <td>Horror</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>5</td>
	   						  	      <td>Classic</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	  </tbody>
	   						  	</table>
	   						  </div>


	   						  <div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="profile-tab">

	   						  	<form class="d-flex  mb-3">
	   						  		<div class="form-group">
	   						  			<input type="text" name="" class="form-control" placeholder="Program Code">
	   						  		</div>
	   						  		<div class="form-group ms-2">
	   						  			<input type="text" name="" class="form-control" placeholder="Program Description">
	   						  		</div>
	   						  		<div class="form-group ms-2">
	   						  			<input type="submit" name="" value="ADD PROGRAM" class="btn btn-primary">
	   						  		</div>
	   						  	</form>

	   						  	<table class="table">
	   						  	  <thead>
	   						  	    <tr>
	   						  	      <th>Program Code</th>
	   						  	      <th>Description</th>
	   						  	      <th></th>
	   						  	    </tr>
	   						  	  </thead>
	   						  	  <tbody>
	   						  	    <tr>
	   						  	      <td>BSIT</td>
	   						  	      <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>BSED</td>
	   						  	      <td>BACHELOR OF SECONDARY EDUCATION</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>BSHM</td>
	   						  	      <td>BACHELOR OF SCIENCE HOSPITALITY AND MANAGEMENT</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>BSTM</td>
	   						  	      <td>BACHELOR OF SCIENCE IN TOURISM MANAGEMENT</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>BEED</td>
	   						  	      <td>BACHELOR OF ELEMENTARY EDUCATION</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	    <tr>
	   						  	      <td>BSDC</td>
	   						  	      <td>BACHELOR OF SCIENCE DEVELOPMENT COMMUNICATION</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	  </tbody>
	   						  	</table>
	   						  </div>


	   						  <div class="tab-pane fade" id="books" role="tabpanel" aria-labelledby="profile-tab">
	   						  	<table class="table">
	   						  	  <thead>
	   						  	    <tr>
	   						  	      <th>Book ID</th>
	   						  	      <th>Category</th>
	   						  	      <th>Title</th>
	   						  	      <th>DDC</th>
	   						  	      <th>Author(s)</th>
	   						  	      <th>Year Published</th>
	   						  	      <th>Publisher</th>
	   						  	      <th>Copies</th>
	   						  	      <th></th>
	   						  	    </tr>
	   						  	  </thead>
	   						  	  <tbody>
	   						  	    <tr>
	   						  	      <td>11001</td>
	   						  	      <td>Programming</td>
	   						  	      <td>Javascript</td>
	   						  	      <td>100</td>
	   						  	      <td>Kirk Olis</td>
	   						  	      <td>2019</td>
	   						  	      <td>Kirk Olis</td>
	   						  	      <td>6</td>
	   						  	      <td>
	   						  	      	<button class="me-2">
	   						  	      		<i class="fas fa-edit text-primary"></i>
	   						  	      	</button>
	   						  	      	<button>		
	   						  	      		<i class="fas fa-trash-alt text-danger"></i>
	   						  	      	</button>
	   						  	      </td>
	   						  	    </tr>
	   						  	   
	   						  	  </tbody>
	   						  	</table>
	   						  </div>


	   						  <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="profile-tab">
	   						  		<form class="mb-3 w-25">
	   						  			<div class="form-group mt-2">
	   						  				<label>BOOKS ALLOWED TO BORROW</label>
	   						  				<input type="number" name="" class="form-control">
	   						  			</div>
	   						  			<div class="form-group mt-2">
	   						  				<label>NUMBER OF DAYS ALLOWED</label>
	   						  				<input type="number" name="" class="form-control">
	   						  			</div>
	   						  			<div class="form-group mt-2">
	   						  				<label>PENALTY</label>
	   						  				<input type="number" name="" class="form-control">
	   						  			</div>
	   						  			<div class="form-group text-end mt-2">
	   						  				<input type="submit" name="" value="SAVE" class="btn btn-primary">
	   						  			</div>
	   						  		</form>
	   						  </div>

	   						</div>
	   						<!-- END OF TABS CONTENT -->


	   					</div>
	   				</div>

	   			</div>
	   		</div>

	   	
	   </section>


<?php include_once 'admin-footer.php'; ?>





