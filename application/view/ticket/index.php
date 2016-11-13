<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 new-ticket fade-in">
    <h1>Create a ticket</h1>
    <form method="post">
        <div class="form-group">
            <label for="custname">Customer Name</label>
            <input type="custname" class="form-control" id="custname" placeholder="Customer Name" name="custname" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="description" class="form-control" id="description" placeholder="Description" name="description">
            </textarea>
        </div>
        <div class="form-group">
            <label for="arrival">Address</label>
            <input type="address" class="form-control" id="address" placeholder="Address" name="address" required>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="arrival">Arrival Time</label>
                <select type="arrival" class="form-control" id="arrival" placeholder="Arrival" name="arrival" required>
                    <option value="0830">8:30</option>
                    <option value="0900">9:00</option>
                    <option value="0930">9:30</option>
                </select>
            </div> 
            <div class="col-xs-6">
                <label for="duration">Estimated Duration</label>
                <select type="duration" class="form-control" id="duration" placeholder="Duration" name="duration" required>
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
                <label for="status">Ticket Tier</label>
                <select type="status" class="form-control" id="status" placeholder="Status" name="status" required>
                    <option value="1">Tier 1 <span class="swatch green"></span></option>
                    <option value="2">Tier 2 <span class="swatch amber"></span></option>
                    <option value="3">Tier 3 <span class="swatch red"></span></option>            
                </select>
            </div>
            <div class="col-xs-6">   
                <label for="status">Ticket Status</label>
                <select type="status" class="form-control" id="status" placeholder="Status" name="status" required>
                    <option value="assigned">Assigned</option>
                    <option value="accepted">Accepted</option>
                    <option value="enroute">En Route</option>
                    <option value="atjob">At Job</option>
                    <option value="completed">Completed</option>                
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="status">Assigned To:</label>
            <select type="status" class="form-control" id="status" placeholder="Status" name="status" required>
                <option value="unassigned">Unassigned</option>
                <option value="cweiss">Chris Weiss</option>
                <option value="dmileyko">Denis Mileyko</option>
                <option value="jzuck">Jon Zuck</option>
            </select>
        </div>                                
        <button type="submit" class="btn btn-default pull-right">Submit</button>
    </form>
</div>
 