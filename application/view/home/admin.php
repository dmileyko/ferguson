<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 login fade-in">
    <h1>
    	Tickets
    	<a href="ticket" class="pull-right">+ Add New</a>
    </h1>    
    <ul class="list-group transparent">
    	<?php foreach($tickets as $ticket) {
    			$employee_name = $ticket->employee_id > 0 ? ' (' . $ticket->employee_name . ')' : ''; 
    		?>
    		<li class="list-group-item clearfix">
    			<a class="ticket-thumbnail" href="ticket/view/<?php echo $ticket->ticket_id; ?>">    			
	    			<div class="col-sm-6">
	    				<span class="ticket-customer">#<?php echo $ticket->customer; ?></span><br /> 			
	    				<i class="fa fa-map-marker"></i><?php echo $ticket->address; ?><br />
	    			</div>
	    			<div class="col-sm-3">
	    				<?php echo $ticket->status_name . $employee_name; ?><br />
		    			<span class="ticket-date">Arrival @ <?php echo date('g:i a', $ticket->estimated_arrival); ?></span>	    			
		    		</div>
		    		<div class="col-sm-2">
	    				<?php echo $ticket->level_name; ?><br class="hidden-xs" />
		    			<span class="ticket-date"><?php echo $ticket->estimated_time_spent . ' ' . ($ticket->estimated_time_spent == 1 ? 'hr' : 'hrs'); ?></span>	    			
		    		</div>
		    		<div class="col-sm-1">
	    				<a class="btn btn-primary" href="ticket/delete/<?php echo $ticket->ticket_id; ?>">Delete</a>	    			
		    		</div>
		    	</a>
    		</li>
    	<?php } ?>
    </ul>    
</div>