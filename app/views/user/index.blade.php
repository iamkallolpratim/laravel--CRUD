@extends('layouts.user') @section('content')
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Add Contacts</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						{{Form::open(array('class'=>'form','id'=>'contact-form'))}}
						<div class="form-group">
							<input type="hidden" name="id" id="editID"> <label>Name</label> <input
								type="text" class="form-control" name="name" id="name">
						</div>
						<div class="form-group">
							<label>Email</label> <input type="email" class="form-control"
								name="email" id="email">
						</div>
						<div class="form-group">
							<label>Mobile</label> <input type="tel" class="form-control"
								name="mobile" id="mobile">
						</div>
						<div class="form-group">
							<label>Client Type</label>
							<br> 
							<label class="radio-inline"> <input
								type="radio" name="type" id="private" 
								value="Private" checked="checked"> Private
							</label> <label class="radio-inline"> <input type="radio"
								name="type" id="government"  value="Government">Government
							</label>
						</div>
						<div class="form-group">
							<label>Select Region</label> <select class="form-control"
								id="region" name="region">
								<option value="North Delhi">North Delhi</option>
								<option value="West Delhi">West Delhi</option>
								<option value="East Delhi">East Delhi</option>
								<option value="South Delhi">South Delhi</option>
							</select>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea rows="2" cols="" class="form-control" name="address"
								id="address"></textarea>
						</div>
						{{Form::close() }}
					</div>
					<div class="col-md-6">
						<button type="button" id="upBtn" onclick="updateData();"
							class="btn btn-info btn-block">Update</button>
					</div>
					<div class="col-md-6">
						<button type="button" id="canBtn" onclick="cancel();"
							class="btn btn-danger btn-block">Cancel</button>
					</div>
					<div class="col-md-12">
						<button type="button" id="saveBtn" onclick="saveContact();"
							class="btn btn-primary btn-block">Save</button>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">Contact List</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Type</th>
						<th>Region</th>
						<th style="width: 20%;">Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="contact-list"></tbody>
			</table>
		</div>
	</div>
</div>
{{HTML::script('packages/script/contact.js');}} @stop
