// JavaScript Document
function init() { return; };

	
	
	var ORGANIZATIONAL_MEMBERSHIP_FEE = 275;
	var ORGANIZATIONAL_MEMBERSHIP_VOTES = 3;
	var INDIVIDUAL_MEMBERSHIP_FEE = 125;
	var ELECTED_OFFICIAL_MEMBERSHIP_FEE = 50;
	var STUDENT_MEMBERSHIP_FEE = 20;
	var total_price;
	var memberLevel ="";
	
	
	function init() {
		memberPricing = false;
		memberStatus = "";
		memberLevel = "";
		joining = false;
		feeAttendee = 0;
		feeMembership = 0;
		feeMembershipDiscount = 0;
		feeTotal = 0;
		memberAttendeePrice = MEMBER_ATTENDEE_PRICE;
		memberAdditionalAttendeePrice = MEMBER_ADDITIONAL_ATTENDEE_PRICE;
		nonMemberAttendeePrice = NONMEMBER_ATTENDEE_PRICE;
		numMemberAdditionalAttendees = 0;
		lateRegMemberAttendeePrice = LATE_REG_MEMBER_ATTENDEE_PRICE;
		lateRegNonMemberAttendeePrice = LATE_REG_NONMEMBER_ATTENDEE_PRICE;
	}
		
		
	function calcTotal() {
	
			switch (memberLevel) {
				case "platinum":
					total_price="2500.00"
					break;
				case "gold":
					total_price="2000.00"
					break;
				case "silver":
					total_price="1500.00"
		   			break;
				case "bronze":
					total_price="1000.00"
					
				case "default":
					total_price="2500.00"
					break;
			}
			document.getElementById('total_price').value = total_price;
		document.getElementById('total_price').innerHTML = "$ " + total_price.toFixed(2);
	}
	