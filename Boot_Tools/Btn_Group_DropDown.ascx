<%@ Control Language="C#" AutoEventWireup="true" CodeFile="Btn_Group_DropDown.ascx.cs" Inherits="Boot_Tools_Btn_Group_DropDown" %>

<div class="btn-group">
	<button class="btn btn-default">Action</button> <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li>
				<a href="#">Action</a>
			</li>
			<li class="disabled">
				<a href="#">Another action</a>
			</li>
			<li class="divider">
			</li>
			<li>
				<a href="#">Something else here</a>
			</li>
		</ul>
	</div>