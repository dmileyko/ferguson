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
    <table class="table">
    	<thead>
    		<tr>
    			<th>Customer</th>
    			<th>Address</th>
    			<th>Arrival Time</th>    			
    			<th>Status</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach($tickets as $ticket) { ?>
    		<tr>    
    			<td><?php echo $ticket->customer; ?></td>
    			<td><?php echo $ticket->address; ?></td>
    			<td><?php echo date('m/d/Y g:i a', $ticket->estimated_arrival); ?></td>
    			<td><?php echo $ticket->status_name; ?></td>    						
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>    
</div>