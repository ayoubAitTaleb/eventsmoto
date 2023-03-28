<div>    
    <form method="POST" enctype="multipart/form-data" action="{{ route('events.store') }}">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Event Name</label>
            <input required="required" type="text" maxlength="50" class="form-control" id="title" name="name" placeholder="Event Title" required />
        </div>
        <div class="form-group">            
            <label for="select-label" class="form-label">Event Type</label>
            <select class="select2 select-label form-control w-100" id="select-label" name="type">
                <option data-label="primary" value="touristic" selected> Touristic</option>
                <option data-label="danger" value="sommercial">Commercial</option>
                <option data-label="warning" value="social">Social</option>
                <option data-label="warning" value="sportif">Sportif</option>                
            </select>
        </div>
        <div class="form-group position-relative">
            <label for="start-date" class="form-label">Start Date</label>
            <input required="required" type="date" maxlength="50" class="form-control" id="start-date" name="start_date" placeholder="Start Date" />
        </div>
        <div class="form-group position-relative">
            <label for="end-date" class="form-label">End Date</label>
            <input required="required" type="date" maxlength="50" class="form-control" id="end-date" name="end_date" placeholder="End Date" />
        </div>
        <div class="form-group">
            <label for="event-location" class="form-label">City</label>
            <select name="city">
                <option value="marrakech">Marrakech</option>         
                <option value="tangier">Tangier</option>         
                <option value="casa blanca">Casablanca</option>
            </select>         
        </div>       
        <div class="form-group">
            <label for="event-location" class="form-label">Address</label>
            <input required="required" type="text" maxlength="50" class="form-control" name="address" id="address" placeholder="Enter Location" />
        </div>
        <div class="form-group">
            <label class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="event-url" class="form-label">Event Cover</label>
            <input required="required" type="file" name="image" class="form-control"/>
        </div>
        <div class="form-group d-flex">
            <button type="submit" name="add" class="btn btn-primary add-event-btn mr-1" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-cancel">Cancel</button>            
        </div>
    </form>
</div>