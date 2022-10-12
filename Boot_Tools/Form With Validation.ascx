<%@ Control Language="C#" AutoEventWireup="true" CodeFile="Form With Validation.ascx.cs" Inherits="Boot_Tools_Forms" %>


	<form data-toggle="validator" role="form">
				
			
							  <div class="row clearfix">

								<div class="col-md-6 column">

										
										<div class="form-group">
										
											<label for="First Name">First Name *</label>
											<input type="text"  class="form-control" Placeholder="First Name" name="firstname" required/>

										</div>
										<div class="form-group">
										
											<label for="Last Name">Last Name *</label>
											<input type="text"  class="form-control" Placeholder="Last Name" name="lastname" required/>

										</div>
										<div class="form-group">
										
											<label for="exampleInputEmail1">Email *</label>
											<input type="email"  class="form-control" Placeholder="Email" name="email"  required/>

										</div>
										<div class="form-group">
											 <label for="exampleInputPassword1">Password</label>
											 <input type="password" class="form-control" Placeholder="Password" name="password1"  required/>
										</div>
										
										<div class="form-group">
										
											<label for="exampleInputEmail1">Mobile *</label>
											<input type="text"  class="form-control" Placeholder="Mobile" name="mobile"  required/>

										</div>

										<div class="form-group">
										
											<label for="exampleInputEmail1">Telephone </label>
											<input type="text"  class="form-control" Placeholder="Telephone" name="telephone"  />

										</div>

										<div class="checkbox">
											 <label><input type="checkbox" />My billing and delivery address are same.</label>
										</div> 





								</div>



								<div class="col-md-6 column">

									<div class="form-group">
										
											<label for="exampleInputEmail1">Address 1 *</label>
											<input type="text"  class="form-control" Placeholder="Address1" name="address1" required/>

										</div>
										<div class="form-group">
										
											<label for="exampleInputEmail1">Address 2 </label>
											<input type="text"  class="form-control" Placeholder="Address2" name="address2" />

										</div>
										<div class="form-group">
										
											<label for="city">City *</label>
											<input type="text"  class="form-control" Placeholder="City" name="city" required/>

										</div>
										<div class="form-group">
											 <label for="postcode">Post Code *</label>
											 <input type="text" class="form-control" Placeholder="Postcode" name="postcode" required/>
										</div>
										
										<div class="form-group">
											<label for="postcode">Country *</label>
											 <select class="form-control" id="select">
												<option>India</option>
												<option>USA</option>
												<option>UK</option>
												<option>UAE</option>
												
											</select>
										</div>



										<div class="form-group" >
										
											<label for="state">State *</label>
											<input type="text"  class="form-control" Placeholder="State" name="state" required/>

										</div>

										 


								</div>
        
							</div>
							<p class="text-left">
								<button type="submit" class="btn btn-primary">Continue</button>
							</p>
					</form>
