function verifyText(textStuff)
{
    var verified = false;
    if(textStuff=="") 
    {
        verified = false;
    }
    else if(!(textStuff).match(/^[a-zA-Z]+$/))
    {
        verified = false;
    }

    else{
    verified = true;
    }
    return verified;
}
function verifyZip(zip)
{
    var verifiedZip = false;
    if(zip.length!=5)
    {
        verifiedZip = false;
    }
    else if(!zip.match(/^[0-9]+$/))
    {
        verifiedZip = false;
    }
    else
    {
        verifiedZip = true;
    }
    return verifiedZip;
}

//takes a string and returns if it is valid.
function validateEmail(email) {
    var test_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return test_re.test(email);
}

function verifyState(state)
{
	var usStates = [
    	{ name: 'ALABAMA', abbreviation: 'AL'},
    	{ name: 'ALASKA', abbreviation: 'AK'},
    	{ name: 'AMERICAN SAMOA', abbreviation: 'AS'},
    	{ name: 'ARIZONA', abbreviation: 'AZ'},
    	{ name: 'ARKANSAS', abbreviation: 'AR'},
   		{ name: 'CALIFORNIA', abbreviation: 'CA'},
    	{ name: 'COLORADO', abbreviation: 'CO'},
    	{ name: 'CONNECTICUT', abbreviation: 'CT'},
    	{ name: 'DELAWARE', abbreviation: 'DE'},
    	{ name: 'DISTRICT OF COLUMBIA', abbreviation: 'DC'},
    	{ name: 'FEDERATED STATES OF MICRONESIA', abbreviation: 'FM'},
    	{ name: 'FLORIDA', abbreviation: 'FL'},
    	{ name: 'GEORGIA', abbreviation: 'GA'},
    	{ name: 'GUAM', abbreviation: 'GU'},
    	{ name: 'HAWAII', abbreviation: 'HI'},
    	{ name: 'IDAHO', abbreviation: 'ID'},
    	{ name: 'ILLINOIS', abbreviation: 'IL'},
    	{ name: 'INDIANA', abbreviation: 'IN'},
    	{ name: 'IOWA', abbreviation: 'IA'},
    	{ name: 'KANSAS', abbreviation: 'KS'},
    	{ name: 'KENTUCKY', abbreviation: 'KY'},
    	{ name: 'LOUISIANA', abbreviation: 'LA'},
    	{ name: 'MAINE', abbreviation: 'ME'},
    	{ name: 'MARSHALL ISLANDS', abbreviation: 'MH'},
    	{ name: 'MARYLAND', abbreviation: 'MD'},
    	{ name: 'MASSACHUSETTS', abbreviation: 'MA'},
    	{ name: 'MICHIGAN', abbreviation: 'MI'},
    	{ name: 'MINNESOTA', abbreviation: 'MN'},
    	{ name: 'MISSISSIPPI', abbreviation: 'MS'},
    	{ name: 'MISSOURI', abbreviation: 'MO'},
    	{ name: 'MONTANA', abbreviation: 'MT'},
    	{ name: 'NEBRASKA', abbreviation: 'NE'},
    	{ name: 'NEVADA', abbreviation: 'NV'},
    	{ name: 'NEW HAMPSHIRE', abbreviation: 'NH'},
    	{ name: 'NEW JERSEY', abbreviation: 'NJ'},
    	{ name: 'NEW MEXICO', abbreviation: 'NM'},
    	{ name: 'NEW YORK', abbreviation: 'NY'},
    	{ name: 'NORTH CAROLINA', abbreviation: 'NC'},
    	{ name: 'NORTH DAKOTA', abbreviation: 'ND'},
    	{ name: 'NORTHERN MARIANA ISLANDS', abbreviation: 'MP'},
    	{ name: 'OHIO', abbreviation: 'OH'},
    	{ name: 'OKLAHOMA', abbreviation: 'OK'},
    	{ name: 'OREGON', abbreviation: 'OR'},
    	{ name: 'PALAU', abbreviation: 'PW'},
    	{ name: 'PENNSYLVANIA', abbreviation: 'PA'},
	    { name: 'PUERTO RICO', abbreviation: 'PR'},
	    { name: 'RHODE ISLAND', abbreviation: 'RI'},
	    { name: 'SOUTH CAROLINA', abbreviation: 'SC'},
   		{ name: 'SOUTH DAKOTA', abbreviation: 'SD'},
    	{ name: 'TENNESSEE', abbreviation: 'TN'},
    	{ name: 'TEXAS', abbreviation: 'TX'},
    	{ name: 'UTAH', abbreviation: 'UT'},
    	{ name: 'VERMONT', abbreviation: 'VT'},
    	{ name: 'VIRGIN ISLANDS', abbreviation: 'VI'},
    	{ name: 'VIRGINIA', abbreviation: 'VA'},
    	{ name: 'WASHINGTON', abbreviation: 'WA'},
    	{ name: 'WEST VIRGINIA', abbreviation: 'WV'},
    	{ name: 'WISCONSIN', abbreviation: 'WI'},
    	{ name: 'WYOMING', abbreviation: 'WY' }
	];

	var verify = false;
	var stateUpper = state.toUpperCase();
	for (var element in usStates)
	{
		if(element.abbreviation === stateUpper)
			verify = true;
	}
	return verify;
}
function verifyPhone(number){
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
	if(number.match(phoneno)){
		return true;
	}
	else{
		return false
	}
}
