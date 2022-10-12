	
	<!-- ----------------- data grid draw here -------------------- -->
<div class="row clearfix">

	<div class="col-md-12 column">
	

			<div ng-controller="orderCrtl">
				<div class="container">
				

				
					<div class="row">
						<div class="col-md-4">
							<ul class="breadcrumb">
								<li>
									<a href="shopadmin.php?var1=<?php echo $_SESSION["mobile"]; ?>">Home</a> <span class="divider"></span>
								</li>
				
								<li class="active">
									Order
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
							
								<th>First Name&nbsp;<a ng-click="sort_by('fname');"><i class="glyphicon glyphicon-sort"></i></a></th>
								<th>City&nbsp;<a ng-click="sort_by('ccity');"><i class="glyphicon glyphicon-sort"></i></a></th>
								<th>Mobile &nbsp;<a ng-click="sort_by('mobile1');"><i class="glyphicon glyphicon-sort"></i></a></th>
                <th>Amount &nbsp;<a ng-click="sort_by('total');"><i class="glyphicon glyphicon-sort"></i></a>
                <th>Date &nbsp;<a ng-click="sort_by('dateoforder');">            <i class="glyphicon glyphicon-sort"></i>                    </a>



                  <th>
                   
                  </th>
                  
                  
                  
							</thead>
							<tbody>
								<tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
									<td>{{data.fname}}</td>
									<td>{{data.ccity}}</td>
									<td>{{data.mobile1}}</td>
                  <td>{{data.total}}</td>
                  <td>{{data.dateoforder}}</td>
                  <td>
                    
                    
                    <a href="product_edit.php?vv={{data.orderid}}">
                      Detail
                    </a>
                    <!--
                    &nbsp;&nbsp;&nbsp;
                    
                    
                    <a href="product_del.php?vv={{data.orderid}}">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete
                    </a>

                    -->



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