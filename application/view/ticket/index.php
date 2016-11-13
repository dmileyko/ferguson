<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 new-ticket fade-in">
    <h1>Create a ticket</h1>
    <form method="post">
        <div class="form-group">
            <label for="customer">Customer Name</label>
            <input type="customer" class="form-control" id="customer" placeholder="Customer Name" name="customer" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="description" class="form-control" id="description" placeholder="Description" name="description">
            </textarea>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" id="address" placeholder="Address" name="address" required>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="arrival_hour">Arrival Time</label>
                <div class="">
                	<div class="col-sm-4">
                		<div class="row">
                			<select class="form-control col-sm-4" id="arrival_hour" placeholder="Arrival" name="arrival_hour" required>
			                	<option value="">Hour</option>
			                	<option value="0">00</option>                	
			                	<option value="1">01</option>
			                	<option value="2">02</option>
			                	<option value="3">03</option>
			                	<option value="4">04</option>
			                	<option value="5">05</option>
			                	<option value="6">06</option>
			                	<option value="7">07</option>
			                	<option value="8">08</option>
			                	<option value="9">09</option>
			                	<option value="10">10</option>
			                	<option value="11">11</option>
			                	<option value="12">12</option>
			                </select>
                		</div>	                	
	                </div>
	                <div class="col-sm-4">
	                	<div class="row">
			                <select class="form-control col-sm-4" id="arrival_min" placeholder="Arrival" name="arrival_min" required>
			                	<option value="">Min</option>
			                	<option value="0">00</option>                	
			                	<option value="5">05</option>
			                	<option value="10">10</option>
			                	<option value="15">15</option>
			                	<option value="20">20</option>
			                	<option value="25">25</option>
			                	<option value="30">30</option>
			                	<option value="35">35</option>
			                	<option value="40">40</option>
			                	<option value="45">45</option>
			                	<option value="50">50</option>
			                	<option value="55">55</option>                	
			                </select>
			            </div>
		            </div>
		            <div class="col-sm-4">
		            	<div class="row">
			                <select class="form-control col-sm-4" id="arrival_am" placeholder="Arrival" name="arrival_am" required>
			                	<option value="a">AM</option>
			                	<option value="p">PM</option>               	
			                </select>
			            </div>
		            </div>
                </div>
                
                <!--select type="arrival" class="form-control" id="arrival" placeholder="Arrival" name="arrival" required>
                    <option value="0830">8:30</option>
                    <option value="0900">9:00</option>
                    <option value="0930">9:30</option>
                </select-->
            </div> 
            <div class="col-xs-6">
                <label for="time_spent">Estimated Duration</label>
                <select class="form-control" id="time_spent" placeholder="Duration" name="time_spent" required>
                    <option value="0.5">.5 hour</option>
                    <option value="1">1 hour</option>
                    <option value="1.5">1.5 hours</option>
                    <option value="2">2 hours</option>
                    <option value="3">3 hours</option>
                    <option value="4">4 hours</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="level">Level</label>
                <select class="form-control" id="level" placeholder="Level" name="level_id" required>
                	<?php foreach($levels as $level) { ?>
                		<option value="<?php echo $level->level_id; ?>"><?php echo $level->name; ?></option>
                	<?php } ?>                                
                </select>
            </div>
            <div class="col-xs-6">   
                <label for="status">Ticket Status</label>
                <select type="status" class="form-control" id="status" placeholder="Status" name="ticket_status_id" required>
                	<?php foreach($ticket_statuses as $ticket_status) { ?>
                		<option value="<?php echo $ticket_status->ticket_status_id; ?>"><?php echo $ticket_status->name; ?></option>
                	<?php } ?>
                    <!--option value="assigned">Assigned</option>
                    <option value="accepted">Accepted</option>
                    <option value="enroute">En Route</option>
                    <option value="atjob">At Job</option>
                    <option value="completed">Completed</option-->                
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="employee_id">Assigned To:</label>
            <select class="form-control" id="employee_id" placeholder="Employee" name="employee_id" required>
                <option value="unassigned">Unassigned</option>
                <?php foreach($employees as $employee) { ?>
                	<option value="<?php echo $employee->employee_id; ?>"><?php echo $employee->firstname . ' ' . $employee->lastname; ?></option>
                <?php } ?>                	
            </select>
        </div>		
        <input type="submit" class="btn btn-default pull-right" name="submit" value="Submit" />&nbsp;
        <a href="home" class="btn btn-default pull-left">Cancel</a>
    </form>
</div>
 