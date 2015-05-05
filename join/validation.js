function Blank_TextField_Validator(form)
{
// Check the value of the element named text_name
// from the form named text_form

if (document.text_form.memberLevel.value == "")
{
// If null display and alert box
alert("Please Select Your Membership Level.");
// Place the cursor on the field for revision
document.text_form.memberLevel.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.firstname.value == "")
{
// If null display and alert box
alert("Please Fill in  First Name Field.");
// Place the cursor on the field for revision
document.text_form.firstname.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.lastname.value == "")
{
// If null display and alert box
alert("Please Fill in  Last Name Field.");
// Place the cursor on the field for revision
document.text_form.lastname.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.address.value == "")
{
// If null display and alert box
alert("Please Fill in Address Field.");
// Place the cursor on the field for revision
document.text_form.address.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.city.value == "")
{
// If null display and alert box
alert("Please Fill in City Field.");
// Place the cursor on the field for revision
document.text_form.city.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.state.value == "")
{
// If null display and alert box
alert("Please Fill in State Field.");
// Place the cursor on the field for revision
document.text_form.state.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.zip.value == "")
{
// If null display and alert box
alert("Please Fill in Zip Code Field.");
// Place the cursor on the field for revision
document.text_form.zip.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.phone.value == "")
{
// If null display and alert box
alert("Please Fill in Phone Field.");
// Place the cursor on the field for revision
document.text_form.phone.focus();
// return false to stop further processing
return (false);
}

if (document.text_form.email.value == "")
{
// If null display and alert box
alert("Please Fill in Email Field.");
// Place the cursor on the field for revision
document.text_form.email.focus();
// return false to stop further processing
return (false);
}
// If text_name is not null continue processing
return (true);
}