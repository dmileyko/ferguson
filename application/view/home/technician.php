<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 login fade-in">
    <h1>My Tickets</h1>
    <ul class="list-group transparent">
    	<?php foreach($tickets as $ticket) { ?>
    		<li class="list-group-item clearfix">
    			<a class="ticket-thumbnail" href="ticket/view/<?php echo $ticket->ticket_id; ?>">    			
	    			<div class="col-sm-8">
	    				<span class="ticket-customer">#<?php echo $ticket->customer; ?></span><br /> 			
	    				<i class="fa fa-map-marker"></i><?php echo $ticket->address; ?><br />
	    			</div>
	    			<div class="col-sm-4">
	    				<?php echo $ticket->status_name; ?><br />
		    			<span class="ticket-date">Arrival @ <?php echo date('g:i a', $ticket->estimated_arrival); ?></span>	    			
		    		</div>
		    	</a>
    		</li>
    	<?php } ?>
    </ul>    
</div>