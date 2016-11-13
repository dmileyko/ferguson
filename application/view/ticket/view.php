<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 new-ticket fade-in">
    <h1>Ticket #<?php echo $ticket->ticket_id; ?></h1>
    <form method="post">
        <div class="form-group">
            <label for="customer">Customer Name</label>
            <label class="readonly-label"><?php echo $ticket->customer; ?></label>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <label class="readonly-label"><?php echo $ticket->description; ?></label>
            
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <label class="readonly-label"><?php echo $ticket->address; ?></label>
        </div>
        <div class="form-group">
            <label for="address">Level</label>
            <label class="readonly-label"><?php echo $ticket->level_name; ?></label>
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
                <label for="time_spent">Time Spent</label>
                <select class="form-control" id="time_spent" placeholder="Duration" name="time_spent" required>
                    <option value="0.5"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>.5 hour</option>
                    <option value="1"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>1 hour</option>
                    <option value="1.5"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>1.5 hours</option>
                    <option value="2"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>2 hours</option>
                    <option value="3"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>3 hours</option>
                    <option value="4"<?php echo $ticket->time_spent == 0.5 ? ' selected ' : ''; ?>>4 hours</option>
                </select>
            </div>
        </div>
        <div class="form-group row">            
            <div class="col-xs-6">   
                <label for="status">Ticket Status</label>
                <select type="status" class="form-control" id="status" placeholder="Status" name="ticket_status_id" required>
                	<?php foreach($ticket_statuses as $ticket_status) { ?>
                		<option value="<?php echo $ticket_status->ticket_status_id; ?>" <?php echo $ticket->ticket_status_id == $ticket_status->ticket_status_id ? ' selected ' : ''; ?>><?php echo $ticket_status->name; ?></option>
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
            <label for="note">Notes</label>
            <textarea class="form-control" id="note" placeholder="Notes" name="note">
            	<?php echo $ticket->note; ?>
            </textarea>
        </div>      	
        <input type="submit" class="btn btn-default pull-right" name="submit" value="Save" />&nbsp;
        <a href="home" class="btn btn-default pull-left">Cancel</a>
    </form>
</div>