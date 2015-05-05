// JavaScript Document

function Blank_TextField_Validator()
{

//check if Sponsor name is filled
if (document.AttendeeRegForm.attendee.value == "")
{
// If null display and alert box
alert("Please Fill in  Attendee Name Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee.focus();
// return false to stop further processing
return (false);
}

//check if Registrant name is filled
if (document.AttendeeRegForm.attendee_reg_name.value == "")
{
// If null display and alert box
alert("Please Fill in Organization Name Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_reg_name.focus();
// return false to stop further processing
return (false);
}

//check if vendor title is filled
if (document.AttendeeRegForm.attendee_title.value == "")
{
// If null display and alert box
alert("Please Fill Title Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_title.focus();
// return false to stop further processing
return (false);
}

//check if vendor address is filled
if (document.AttendeeRegForm.attendee_address.value == "")
{
// If null display and alert box
alert("Please Fill in Address Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_address.focus();
// return false to stop further processing
return (false);
}

//check if city is filled in
if (document.AttendeeRegForm.attendee_city.value == "")
{
// If null display and alert box
alert("Please Fill in City Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_city.focus();
// return false to stop further processing
return (false);
}

//Check if state is filled in
if (document.AttendeeRegForm.attendee_state.value == "")
{
// If null display and alert box
alert("Please Fill in State Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_state.focus();
// return false to stop further processing
return (false);
}

//check if zip code is filled in
if (document.AttendeeRegForm.attendee_zip.value == "")
{
// If null display and alert box
alert("Please Fill in Zip Code Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_zip.focus();
// return false to stop further processing
return (false);
}

//phone empty field validation
if (document.AttendeeRegForm.attendee_phone.value == "")
{
// If null display and alert box
alert("Please Fill in Phone Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_phone.focus();
// return false to stop further processing
return (false);
}


//email empty field validation
if (document.AttendeeRegForm.attendee_email.value == "")
{
// If null display and alert box
alert("Please Fill in Email Field.");
// Place the cursor on the field for revision
document.AttendeeRegForm.attendee_email.focus();
// return false to stop further processing
return (false);
}

//check if the Membership Status radio button is selected
//var radio_choice = false;

// Loop from zero to the one minus the number of radio button selections
//for (counter = 0; counter < AttendeeRegForm.member_status.length; counter++)
//{
// If a radio button has been selected it will return true
// (If not it will return false)
//if (AttendeeRegForm.member_status[counter].checked)
//radio_choice = true; 
//}

//if (!radio_choice)
{
// If there were no selections made display an alert box 
//alert("Please select your Membership Status.");

//return (false);

myOption = -1;
 for (i=AttendeeRegForm.attendee_payment.length-1; i > -1; i--) {
 if (AttendeeRegForm.attendee_payment[i].checked) {
 myOption = i; i = -1;
 }
 }
 if (myOption == -1) {
 alert("Please select a payment type");
 return false;
 }
}




// If text_name is not null continue processing
return (true);
}

