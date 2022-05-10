<?php
  
function getAllStates(){
    return '<select class="form-control" name="state">    	
    	<option value="">Please Select</option>
    	<option value="Alabama">Alabama</option>
    	<option value="Alsaka">Alsaka</option>
    	<option value="Arizona">Arizona</option>
    	<option value="Arkansas">Arkansas</option>
    	<option value="California">California</option>
    	<option value="Colorado">Colorado</option>
    	<option value="Connecticut">Connecticut</option>
    	<option value="Delaware">Delaware</option>
    	<option value="District Of Columbia">District Of Columbia</option>
    	<option value="Florida">Florida</option>
    	<option value="Georgia">Georgia</option>
    	<option value="Hawaii">Hawaii</option>
    	<option value="Idaho">Idaho</option>
    	<option value="Illinois">Illinois</option>
    	<option value="Indiana">Indiana</option>
    	<option value="Iowa">Iowa</option>
    	<option value="Kansas">Kansas</option>
    	<option value="Kentucky">Kentucky</option>
    	<option value="Louisiana">Louisiana</option>
    	<option value="Maine">Maine</option>
    	<option value="Maryland">Maryland</option>
    	<option value="Massachusetts">Massachusetts</option>
    	<option value="Michigan">Michigan</option>
    	<option value="Minnesota">Minnesota</option>
    	<option value="Mississippi">Mississippi</option>
    	<option value="Missouri">Missouri</option>
    	<option value="Montana">Montana</option>
    	<option value="Nebraska">Nebraska</option>
    	<option value="Nevada">Nevada</option>
    	<option value="New">New Hampshire</option>
    	<option value="New">New Jersey</option>
    	<option value="New">New Mexico</option>
    	<option value="New">New York</option>
    	<option value="North Carolina">North Carolina</option>
    	<option value="North Dakota">North Dakota</option>
    	<option value="Ohio">Ohio</option>
    	<option value="Oklahoma">Oklahoma</option>
    	<option value="Oregon">Oregon</option>
    	<option value="Pennsylvania">Pennsylvania</option>
    	<option value="Rhode Island">Rhode Island</option>
    	<option value="South Carolina">South Carolina</option>
    	<option value="South Dakota">South Dakota</option>
    	<option value="Tennessee">Tennessee</option>
    	<option value="Texas">Texas</option>
    	<option value="Utah">Utah</option>
    	<option value="Vermont">Vermont</option>
    	<option value="Virginia">Virginia</option>
    	<option value="Washington">Washington</option>
    	<option value="West">West Virginia</option>
    	<option value="Wisconsin">Wisconsin</option>
    	<option value="Wyoming">Wyoming</option>
    </select>';    
}

function getClinicFacilityById($clinicId)
{
    return App\Models\User::where('id', $clinicId)->pluck('facility')->first();
}

function getIncorrectReportStatus($id)
{
    $reportId = \Crypt::decrypt($id);
    return App\Models\IncorrectReport::where('report_id', $reportId)->pluck('description')->first();
}

function getUserNameById($id)
{
    return App\Models\User::where('id', $id)->pluck('first_name')->first();
}
   