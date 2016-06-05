<?php

/* /home/alampuisivilla/public_html/themes/alampuisi/pages/samples/enquire.htm */
class __TwigTemplate_e4ef6cee3e838d2bba42d0f45e05d8873075095a58a3a678c818aae0cb2eb82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container-fluid main-content-box main-content-enquire\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-15\"></div>
\t\t\t\t<div class=\"col-md-7 col-md-offset-15\">
\t\t\t\t\t<form name=\"enquire-form\" method=\"post\" action=\"";
        // line 6
        echo url("submitenquire");
        echo "\">
\t\t\t\t\t\t<h3 class=\"main-head-title title-medium\">Your Contact Information</h3>
\t\t\t\t\t\t<div class=\"thin-border title-medium\" style=\"margin-top:19px;\">__</div>
\t\t\t\t\t\t<div class=\"clearfix\">&nbsp;</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"fullname\">Full Name *</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"fullname\" id=\"fullname\" placeholder=\"\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"email\">Email Address *</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"\" required />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"phonenum\">Phone</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phonenum\" id=\"phonenum\" placeholder=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"mobilenum\">Mobile</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mobilenum\" id=\"mobilenum\" placeholder=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"address\">Address</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address\" id=\"address\" placeholder=\"\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"city\">City</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\" placeholder=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"postcode\">Post Code</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" id=\"postcode\" placeholder=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"country\">Country *</label>
\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"country\" id=\"country\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\">Please Choose</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"state\">State</label>
\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state\" id=\"state\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please Choose</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"region\">Region</label>
\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"region\" id=\"region\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Please Choose</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<h3 class=\"main-head-title title-medium\">Quotation Details</h3>
\t\t\t\t\t\t<div class=\"thin-border title-medium\" style=\"margin-top:19px;\">__</div>
\t\t\t\t\t\t<div class=\"clearfix\">&nbsp;</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"enquire_type\">Enquire Type</label>
\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"enquire_type\">
\t\t\t\t\t\t\t\t\t<option value=\"General Enquiry\">General Enquiry</option>
\t\t\t\t\t\t\t\t\t<option value=\"Request Booking\">Request Booking</option>
\t\t\t\t\t\t\t\t\t<option value=\"Family\">Family</option>
\t\t\t\t\t\t\t\t\t<option value=\"Business\">Business</option>
\t\t\t\t\t\t\t\t\t<option value=\"Conference Enquiry\">Conference Enquiry</option>
\t\t\t\t\t\t\t\t\t<option value=\"Group Enquiry\">Group Enquiry</option>
\t\t\t\t\t\t\t\t\t<option value=\"Wedding Enquiry\">Wedding Enquiry</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"dayin\">Day In *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-datepicker\" name=\"dayin\" id=\"dayin\" data-date-format=\"mm/dd/yyyy\" placeholder=\"\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"dayout\">Day Out *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-datepicker\" name=\"dayout\" id=\"dayout\" data-date-format=\"mm/dd/yyyy\" placeholder=\"\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"room_type\">Room Type *</label>
\t\t\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"room_type\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Please Choose</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Premier Room\">Premier Room</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Premier Club\">Premier Club</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Celebrity Suite\">Celebrity Suite</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Villa\">Villa</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"Presidential Villa\">Presidential Villa</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"quantity\">Quantity</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"quantity\" id=\"quantity\" placeholder=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"adult\">No. of Adults *</label>
\t\t\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"adult\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"children\">No. of Children *</label>
\t\t\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"children\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"infant\">No. of Infants (0-2 yrs) *</label>
\t\t\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"infant\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">0</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<h3 class=\"main-head-title title-medium\">Transport</h3>
\t\t\t\t\t\t\t\t<div class=\"thin-border title-medium\" style=\"margin-top:19px;\">__</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\">&nbsp;</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-warning active\">No
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"transportcheck\" id=\"transportcheck1\" value=\"transportcheck1\" autocomplete=\"off\" checked />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-warning\">Yes
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"transportcheck\" id=\"transportcheck2\" value=\"transportcheck2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label>&nbsp;&nbsp;&nbsp;Airport Transfer?</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"iftrasporton hidden\">
\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"airport_name\">Airport Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"airport_name\" id=\"airport_name\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t\t\t<div class=\"radio radio-warning radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"airport_location\" id=\"airport_location1\" value=\"Domestic\" checked />
\t\t\t\t\t\t\t\t\t\t<label for=\"airport_location1\" class=\"radio-inline\">Domestic</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"radio radio-warning radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"airport_location\" id=\"airport_location2\" value=\"International\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"airport_location2\">International</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"flightnum\">Flight Number</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"flightnum\" id=\"flightnum\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"arrival_time\">Arrival Time</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control timepicker\" name=\"arrival_time\" id=\"arrival_time\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"other_trasport\">Other Transport</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"other_trasport\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Please Choose</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Limo\">Limo</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hire Car Economy\">Hire Car Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hire Car Sedan\">Hire Car Sedan</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hire Car 4WD\">Hire Car 4WD</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Hire Car Mini Van\">Hire Car Mini Van</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<h3 class=\"main-head-title title-medium\">Comments / Requests</h3>
\t\t\t\t\t\t<div class=\"thin-border title-medium\" style=\"margin-top:19px;\">__</div>
\t\t\t\t\t\t<div class=\"clearfix\">&nbsp;</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"comment\">Your Comments, Requests or Questions</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"comment\" id=\"comment\"></textarea>
\t\t\t\t\t\t\t<div class=\"textarea-help\">For example Non-smoking level</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special_check\" id=\"info_special_check\" value=\"Y\" autocomplete=\"off\" checked />
\t\t\t\t\t\t\t<label for=\"info_special1\">Please keep me informed of specials available</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[1]\" id=\"info_special2\" autocomplete=\"off\" value=\"Special Deals\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special2\">Special Deals</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[2]\" id=\"info_special3\" autocomplete=\"off\" value=\"Family Escapes\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special3\">Family Escapes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[3]\" id=\"info_special4\" autocomplete=\"off\" value=\"Romantic Escapes\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special4\">Romantic Escapes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[4]\" id=\"info_special5\" autocomplete=\"off\" value=\"Golf in Bali\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special5\">Golf in Bali</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[5]\" id=\"info_special6\" autocomplete=\"off\" value=\"Food & Wine\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special6\">Food & Wine</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[6]\" id=\"info_special7\" autocomplete=\"off\" value=\"Day Tours\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special7\">Day Tours</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[7]\" id=\"info_special8\" autocomplete=\"off\" value=\"Events - Conference\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special8\">Events - Conference</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[8]\" id=\"info_special9\" autocomplete=\"off\" value=\"Wedding Packages\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special9\">Wedding Packages</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-warning\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"info_special[9]\" id=\"info_special10\" autocomplete=\"off\" value=\"Honeymoon\" />
\t\t\t\t\t\t\t\t\t\t\t<label for=\"info_special10\">Honeymoon</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"how_did_enquire\">How did you hear about us? *</label>
\t\t\t\t\t\t\t<div class=\"select-dropdown\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"how_did_enquire\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\">Please Select</option>
\t\t\t\t\t\t\t\t\t<option value=\"Previous Guest\">Previous Guest</option>
\t\t\t\t\t\t\t\t\t<option value=\"Referred by a friend\">Referred by a friend</option>
\t\t\t\t\t\t\t\t\t<option value=\"Already Spoken to you\">Already Spoken to you</option>
\t\t\t\t\t\t\t\t\t<option value=\"Travel Agent\">Travel Agent</option>
\t\t\t\t\t\t\t\t\t<option value=\"Google Search\">Google Search</option>
\t\t\t\t\t\t\t\t\t<option value=\"Online Booking Website\">Online Booking Website</option>
\t\t\t\t\t\t\t\t\t<option value=\"Magazine\">Magazine</option>
\t\t\t\t\t\t\t\t\t<option value=\"Newspaper\">Newspaper</option>
\t\t\t\t\t\t\t\t\t<option value=\"Other\">Other</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<button class=\"btn btn-lg btn-trans text-uppercase\" style=\"font-size:14px;\">Submit Enquiry</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/alampuisivilla/public_html/themes/alampuisi/pages/samples/enquire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <div class="container-fluid main-content-box main-content-enquire">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-15"></div>*/
/* 				<div class="col-md-7 col-md-offset-15">*/
/* 					<form name="enquire-form" method="post" action="{{url('submitenquire')}}">*/
/* 						<h3 class="main-head-title title-medium">Your Contact Information</h3>*/
/* 						<div class="thin-border title-medium" style="margin-top:19px;">__</div>*/
/* 						<div class="clearfix">&nbsp;</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<div class="form-group">*/
/* 							<label for="fullname">Full Name *</label>*/
/* 							<input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required />*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="email">Email Address *</label>*/
/* 							<input type="text" class="form-control" name="email" id="email" placeholder="" required />*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="phonenum">Phone</label>*/
/* 									<input type="text" class="form-control" name="phonenum" id="phonenum" placeholder="" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="mobilenum">Mobile</label>*/
/* 									<input type="text" class="form-control" name="mobilenum" id="mobilenum" placeholder="" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="address">Address</label>*/
/* 							<input type="text" class="form-control" name="address" id="address" placeholder="" />*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="city">City</label>*/
/* 									<input type="text" class="form-control" name="city" id="city" placeholder="" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="postcode">Post Code</label>*/
/* 									<input type="text" class="form-control" name="postcode" id="postcode" placeholder="" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="country">Country *</label>*/
/* 							<div class="select-dropdown">*/
/* 								<select class="form-control" name="country" id="country" required>*/
/* 									<option value="">Please Choose</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="state">State</label>*/
/* 							<div class="select-dropdown">*/
/* 								<select class="form-control" name="state" id="state">*/
/* 									<option value="">Please Choose</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="region">Region</label>*/
/* 							<div class="select-dropdown">*/
/* 								<select class="form-control" name="region" id="region">*/
/* 									<option value="">Please Choose</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<h3 class="main-head-title title-medium">Quotation Details</h3>*/
/* 						<div class="thin-border title-medium" style="margin-top:19px;">__</div>*/
/* 						<div class="clearfix">&nbsp;</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<div class="form-group">*/
/* 							<label for="enquire_type">Enquire Type</label>*/
/* 							<div class="select-dropdown">*/
/* 								<select class="form-control" name="enquire_type">*/
/* 									<option value="General Enquiry">General Enquiry</option>*/
/* 									<option value="Request Booking">Request Booking</option>*/
/* 									<option value="Family">Family</option>*/
/* 									<option value="Business">Business</option>*/
/* 									<option value="Conference Enquiry">Conference Enquiry</option>*/
/* 									<option value="Group Enquiry">Group Enquiry</option>*/
/* 									<option value="Wedding Enquiry">Wedding Enquiry</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="dayin">Day In *</label>*/
/* 									<input type="text" class="form-control input-datepicker" name="dayin" id="dayin" data-date-format="mm/dd/yyyy" placeholder="" required />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="dayout">Day Out *</label>*/
/* 									<input type="text" class="form-control input-datepicker" name="dayout" id="dayout" data-date-format="mm/dd/yyyy" placeholder="" required />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="room_type">Room Type *</label>*/
/* 									<div class="select-dropdown">*/
/* 										<select class="form-control" name="room_type" required>*/
/* 											<option value="">Please Choose</option>*/
/* 											<option value="Premier Room">Premier Room</option>*/
/* 											<option value="Premier Club">Premier Club</option>*/
/* 											<option value="Celebrity Suite">Celebrity Suite</option>*/
/* 											<option value="Villa">Villa</option>*/
/* 											<option value="Presidential Villa">Presidential Villa</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-6">*/
/* 								<div class="form-group">*/
/* 									<label for="quantity">Quantity</label>*/
/* 									<input type="text" class="form-control" name="quantity" id="quantity" placeholder="" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-4">*/
/* 								<div class="form-group">*/
/* 									<label for="adult">No. of Adults *</label>*/
/* 									<div class="select-dropdown">*/
/* 										<select class="form-control" name="adult" required>*/
/* 											<option value="1">1</option>*/
/* 											<option value="2">2</option>*/
/* 											<option value="3">3</option>*/
/* 											<option value="4">4</option>*/
/* 											<option value="5">5</option>*/
/* 											<option value="6">6</option>*/
/* 											<option value="7">7</option>*/
/* 											<option value="8">8</option>*/
/* 											<option value="9">9</option>*/
/* 											<option value="10">10</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-4">*/
/* 								<div class="form-group">*/
/* 									<label for="children">No. of Children *</label>*/
/* 									<div class="select-dropdown">*/
/* 										<select class="form-control" name="children" required>*/
/* 											<option value="0">0</option>*/
/* 											<option value="1">1</option>*/
/* 											<option value="2">2</option>*/
/* 											<option value="3">3</option>*/
/* 											<option value="4">4</option>*/
/* 											<option value="5">5</option>*/
/* 											<option value="6">6</option>*/
/* 											<option value="7">7</option>*/
/* 											<option value="8">8</option>*/
/* 											<option value="9">9</option>*/
/* 											<option value="10">10</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-md-4">*/
/* 								<div class="form-group">*/
/* 									<label for="infant">No. of Infants (0-2 yrs) *</label>*/
/* 									<div class="select-dropdown">*/
/* 										<select class="form-control" name="infant" required>*/
/* 											<option value="0">0</option>*/
/* 											<option value="1">1</option>*/
/* 											<option value="2">2</option>*/
/* 											<option value="3">3</option>*/
/* 											<option value="4">4</option>*/
/* 											<option value="5">5</option>*/
/* 											<option value="6">6</option>*/
/* 											<option value="7">7</option>*/
/* 											<option value="8">8</option>*/
/* 											<option value="9">9</option>*/
/* 											<option value="10">10</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<div class="row">*/
/* 							<div class="col-md-4">*/
/* 								<h3 class="main-head-title title-medium">Transport</h3>*/
/* 								<div class="thin-border title-medium" style="margin-top:19px;">__</div>*/
/* 								<div class="clearfix">&nbsp;</div>*/
/* 							</div>*/
/* 							<div class="col-md-8">*/
/* 								<p>&nbsp;</p>*/
/* 								<div class="btn-group" data-toggle="buttons">*/
/* 									<label class="btn btn-warning active">No*/
/* 										<input type="radio" name="transportcheck" id="transportcheck1" value="transportcheck1" autocomplete="off" checked />*/
/* 									</label>*/
/* 									<label class="btn btn-warning">Yes*/
/* 										<input type="radio" name="transportcheck" id="transportcheck2" value="transportcheck2" autocomplete="off" />*/
/* 									</label>*/
/* 								</div>*/
/* 								<label>&nbsp;&nbsp;&nbsp;Airport Transfer?</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="iftrasporton hidden">*/
/* 							<p>&nbsp;</p>*/
/* 							<div class="row">*/
/* 								<div class="col-md-6">*/
/* 									<div class="form-group">*/
/* 										<label for="airport_name">Airport Name</label>*/
/* 										<input type="text" class="form-control" name="airport_name" id="airport_name" placeholder="" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<p>&nbsp;</p>*/
/* 									<div class="radio radio-warning radio-inline">*/
/* 										<input type="radio" name="airport_location" id="airport_location1" value="Domestic" checked />*/
/* 										<label for="airport_location1" class="radio-inline">Domestic</label>*/
/* 									</div>*/
/* 									<div class="radio radio-warning radio-inline">*/
/* 										<input type="radio" name="airport_location" id="airport_location2" value="International" />*/
/* 										<label for="airport_location2">International</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row">*/
/* 								<div class="col-md-6">*/
/* 									<div class="form-group">*/
/* 										<label for="flightnum">Flight Number</label>*/
/* 										<input type="text" class="form-control" name="flightnum" id="flightnum" placeholder="" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<div class="form-group">*/
/* 										<label for="arrival_time">Arrival Time</label>*/
/* 										<input type="text" class="form-control timepicker" name="arrival_time" id="arrival_time" placeholder="" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="row">*/
/* 								<div class="col-md-12">*/
/* 									<div class="form-group">*/
/* 										<label for="other_trasport">Other Transport</label>*/
/* 										<div class="select-dropdown">*/
/* 											<select class="form-control" name="other_trasport">*/
/* 												<option value="">Please Choose</option>*/
/* 												<option value="Limo">Limo</option>*/
/* 												<option value="Hire Car Economy">Hire Car Economy</option>*/
/* 												<option value="Hire Car Sedan">Hire Car Sedan</option>*/
/* 												<option value="Hire Car 4WD">Hire Car 4WD</option>*/
/* 												<option value="Hire Car Mini Van">Hire Car Mini Van</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<h3 class="main-head-title title-medium">Comments / Requests</h3>*/
/* 						<div class="thin-border title-medium" style="margin-top:19px;">__</div>*/
/* 						<div class="clearfix">&nbsp;</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<div class="form-group">*/
/* 							<label for="comment">Your Comments, Requests or Questions</label>*/
/* 							<textarea class="form-control" name="comment" id="comment"></textarea>*/
/* 							<div class="textarea-help">For example Non-smoking level</div>*/
/* 						</div>*/
/* 						<div class="checkbox checkbox-warning">*/
/* 							<input type="checkbox" name="info_special_check" id="info_special_check" value="Y" autocomplete="off" checked />*/
/* 							<label for="info_special1">Please keep me informed of specials available</label>*/
/* 						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-md-10 col-md-offset-1">*/
/* 								<div class="row">*/
/* 									<div class="col-md-4">*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[1]" id="info_special2" autocomplete="off" value="Special Deals" />*/
/* 											<label for="info_special2">Special Deals</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[2]" id="info_special3" autocomplete="off" value="Family Escapes" />*/
/* 											<label for="info_special3">Family Escapes</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[3]" id="info_special4" autocomplete="off" value="Romantic Escapes" />*/
/* 											<label for="info_special4">Romantic Escapes</label>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-md-4">*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[4]" id="info_special5" autocomplete="off" value="Golf in Bali" />*/
/* 											<label for="info_special5">Golf in Bali</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[5]" id="info_special6" autocomplete="off" value="Food & Wine" />*/
/* 											<label for="info_special6">Food & Wine</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[6]" id="info_special7" autocomplete="off" value="Day Tours" />*/
/* 											<label for="info_special7">Day Tours</label>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-md-4">*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[7]" id="info_special8" autocomplete="off" value="Events - Conference" />*/
/* 											<label for="info_special8">Events - Conference</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[8]" id="info_special9" autocomplete="off" value="Wedding Packages" />*/
/* 											<label for="info_special9">Wedding Packages</label>*/
/* 										</div>*/
/* 										<div class="checkbox checkbox-warning">*/
/* 											<input type="checkbox" name="info_special[9]" id="info_special10" autocomplete="off" value="Honeymoon" />*/
/* 											<label for="info_special10">Honeymoon</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label for="how_did_enquire">How did you hear about us? *</label>*/
/* 							<div class="select-dropdown">*/
/* 								<select class="form-control" name="how_did_enquire" required>*/
/* 									<option value="">Please Select</option>*/
/* 									<option value="Previous Guest">Previous Guest</option>*/
/* 									<option value="Referred by a friend">Referred by a friend</option>*/
/* 									<option value="Already Spoken to you">Already Spoken to you</option>*/
/* 									<option value="Travel Agent">Travel Agent</option>*/
/* 									<option value="Google Search">Google Search</option>*/
/* 									<option value="Online Booking Website">Online Booking Website</option>*/
/* 									<option value="Magazine">Magazine</option>*/
/* 									<option value="Newspaper">Newspaper</option>*/
/* 									<option value="Other">Other</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<p>&nbsp;</p>*/
/* 						<button class="btn btn-lg btn-trans text-uppercase" style="font-size:14px;">Submit Enquiry</button>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
