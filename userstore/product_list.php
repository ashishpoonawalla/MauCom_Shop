	
	<!-- ----------------- data grid draw here -------------------- -->
<div class="row clearfix">

	<div class="col-md-12 column">
	

			<div ng-controller="productCrtl">
				<div class="container">
				

				
					<div class="row">
						<div class="col-md-4">
							<ul class="breadcrumb">
								<li>
									<a href="shopadmin.php?var1=<?php echo $_SESSION["mobile"]; ?>">Home</a> <span class="divider"></span>
								</li>
				
								<li class="active">
									Product
								</li>
							</ul>
						</div>
						<div class="col-md-2">
							<select ng-model="entryLimit" class="form-control">
								<option>5</option>
								<option>10</option>
								<option>20</option>
								<option>50</option>
								<option>100</option>
							</select>
						</div>
						<div class="col-md-2">
							<input type="text" ng-model="search" ng-change="filter()" placeholder="Search" class="form-control" />
						</div>
						<div class="col-md-4">
							<h5>Filtered {{ filtered.length }} of {{ totalItems}} total</h5>
						</div>
						
					</div>
					<br/>
					<div class="row">
						<div class="col-md-12" ng-show="filteredItems > 0">
							<table class="table table-striped table-bordered">
							<thead>
							
								<th>Product Name&nbsp;<a ng-click="sort_by('productName');"><i class="glyphicon glyphicon-sort"></i></a></th>
								<th>Price&nbsp;<a ng-click="sort_by('price');"><i class="glyphicon glyphicon-sort"></i></a></th>
								<th>Category &nbsp;<a ng-click="sort_by('categoryID');"><i class="glyphicon glyphicon-sort"></i></a></th>
                <th>Brand &nbsp;<a ng-click="sort_by('brand');"><i class="glyphicon glyphicon-sort"></i></a>
                
                  
                  
                  <th>
                    <a href="product_add.php">
                      <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Add Product
                    </a>
                  </th>
                  
                  
                  
							</thead>
							<tbody>
								<tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
									<td>{{data.productName}}</td>
									<td>{{data.price}}</td>
									<td>{{data.categoryID}}</td>
                  <td>{{data.brand}}</td>
									<td>
                    
                    
                    <a href="product_edit.php?vv={{data.productid}}">
                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                    </a>
                    
                    &nbsp;&nbsp;&nbsp;
                    
                    
                    <a href="product_del.php?vv={{data.productid}}">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete
                    </a>





                  </td>
								</tr>
							</tbody>
							</table>
						</div>
						<div class="col-md-12" ng-show="filteredItems == 0">
							<div class="col-md-12">
								<h4>No customers found</h4>
							</div>
						</div>
						<div class="col-md-12" ng-show="filteredItems > 0">    
							<div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
            
            
						</div>
					</div>
				</div>
			</div>
	

		
	</div>
</div>

<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="app/app.js"></script>   