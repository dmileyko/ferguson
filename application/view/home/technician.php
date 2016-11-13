<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 new-ticket fade-in">
    <h1>My Tickets</h1>
    <ul class="list-group transparent">
    	<?php foreach($tickets as $ticket) { ?>
    		<li class="list-group-item clearfix">
    			<a class="ticket-thumbnail" href="ticket/view/<?php echo $ticket->ticket_id; ?>">    			
	    			<div class="col-sm-8">
	    				<span class="ticket-customer">#<?php echo $ticket->customer; ?></span><br /> 			
	    				<i class="fa fa-map-marker"></i><?php echo $ticket->address; ?><br />
	    			</div>
	    			<div class="col-sm-3">
	    				<?php echo $ticket->status_name; ?><br />
		    			<span class="ticket-date">Arrival @ <?php echo date('g:i a', strtotime($ticket->estimated_arrival)); ?></span>	    			
		    		</div>
		    		<div class="col-sm-1 nowrap">
		    			<?php 
		    				$miles = rand(0,300) / 10;
		    				echo $miles . ' mi';
		    			?>
		    		</div>		    		
		    	</a>
    		</li>
    	<?php } ?>
    </ul>    
</div>