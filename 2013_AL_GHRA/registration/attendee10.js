// JavaScript Document
function init() { return; };

	var memberPricing = false;
	var memberStatus = "";
	var memberLevel = "";
	var joining = false;
	var feeAttendee = 0;
	var feeMembership = 0;
	var feeTotal = 0;
	var num_included_attendees = 0;
	var num_additional_attendees = 0;
	var num_total_attendess = 0;
	var MEMBER_ATTENDEE_PRICE = 100;
//	var MEMBER_ATTENDEE_PRICE = 300;
	var MEMBER_ADDITIONAL_ATTENDEE_PRICE = 225;
//	var MEMBER_ADDITIONAL_ATTENDEE_PRICE = 300;
	var NONMEMBER_ATTENDEE_PRICE = 125;
//	var NONMEMBER_ATTENDEE_PRICE = 325;
	var numMemberAdditionalAttendees = 0;
	var LATE_REG_MEMBER_ATTENDEE_PRICE = 300;
	var LATE_REG_NONMEMBER_ATTENDEE_PRICE = 325;
	var STUDENT_ATTENDEE_PRICE = 25;
	var ORGANIZATIONAL_MEMBERSHIP_FEE = 275;
	var ORGANIZATIONAL_MEMBERSHIP_VOTES = 0;
	var INDIVIDUAL_MEMBERSHIP_FEE = 125;
	var ELECTED_OFFICIAL_MEMBERSHIP_FEE = 50;
	var STUDENT_MEMBERSHIP_FEE = 25;
	var PLATINUM_SPONSOR_FEE = 5000;
	var PLATINUM_SPONSOR_REPS = 6;
	var GOLD_SPONSOR_FEE = 3000;
	var GOLD_SPONSOR_REPS = 5;
	var SILVER_SPONSOR_FEE = 1350;
	var SILVER_SPONSOR_REPS = 4;
	var BRONZE_SPONSOR_FEE = 900;
	var BRONZE_SPONSOR_REPS = 3;
	var GENERAL_EXHIBITOR_FEE = 600;
	var GENERAL_EXIBITOR_REPS = 1;
	var OPENING_AWARDS_SPONSOR_FEE = 1200;
	var ANNUAL_BUSINESS_BREAKFAST_SPONSOR_FEE = 1200;
	var RECEPTION_SPONSOR_FEE = 900;
	var STUDENT_PAPER_AWARD_SPONSOR_FEE = 200;
	var SPONSOR_LOGO_ON_HANDOUT_FEE = 500;
	
	
    var rules=new Array();
    rules[0]='attendee:Attendee Name|required';
    rules[1]='attendee_email:Email Address|email';
	rules[2]='attendee_email:Email Address|required';
	rules[3]='attendee_reg_name:Organization Name|alphaspace';

	// change rule[4] to 'attendee_reg_name:Organization Name|required' if membership_level is organizational
	rules[4]='attendee_reg_name:Organization Name|optional';
	
	rules[5]='attendee_title:Title|alphaspace';

	// change rule[6] to 'attendee_title:Title|required' if membership_level is organizational
	rules[6]='attendee_title:Title|optional';
	
	rules[7]='attendee_address:Address|alphaspace or email';
	rules[8]='attendee_address:Address|required';
	rules[9]='attendee_city:City|alphaspace';
	rules[10]='attendee_city:City|required';
	rules[11]='attendee_state:State|alphabetic';
	rules[12]='attendee_state:State|minlength|2';
	rules[13]='attendee_state:State|required';
	rules[14]='attendee_zip:Zip Code|numeric';
	rules[15]='attendee_zip:Zip Code|minlength|5';
	rules[16]='attendee_zip:Zip Code|required';
	rules[17]='attendee_needs:Special Needs|optional';
	rules[18]='member_status:Membership Status|required';
	
	function init() {
		memberPricing = false;
		memberStatus = "";
		memberLevel = "";
		joining = false;
		feeAttendee = 0;
		feeMembership = 0;
		feeTotal = 0;
		memberAttendeePrice = MEMBER_ATTENDEE_PRICE;
		memberAdditionalAttendeePrice = MEMBER_ADDITIONAL_ATTENDEE_PRICE;
		nonMemberAttendeePrice = NONMEMBER_ATTENDEE_PRICE;
		numMemberAdditionalAttendees = 0;
		lateRegMemberAttendeePrice = LATE_REG_MEMBER_ATTENDEE_PRICE;
		lateRegNonMemberAttendeePrice = LATE_REG_NONMEMBER_ATTENDEE_PRICE;
		
		rules[4]='attendee_reg_name:Organization Name|optional';
		rules[6]='attendee_title:Title|optional';
	
		document.getElementById('attendee').value = "";
		document.getElementById('attendee_reg_name').value = "";
		document.getElementById('attendee_title').value = "";
		document.getElementById('attendee_address').value = "";
		document.getElementById('attendee_city').value = "";
		document.getElementById('attendee_state').value = "";
		document.getElementById('attendee_zip').value = "";
		document.getElementById('attendee_phone').value = "";
		document.getElementById('attendee_faxno').value = "";
		document.getElementById('attendee_email').value = "";
		document.getElementById('attendee_needs').value = "";
		
		document.getElementById('additional_attendees').value = 0;
		document.getElementById('attendee_price').value = 0;
		document.getElementById('attendeePrice').innerHTML = "$&nbsp;0";
		
		document.getElementById('membership').style.display = "none";

		document.getElementById('membership_level').options[0].selected = true;
		document.getElementById('membership_price').value = 0;
		document.getElementById('membershipPrice').innerHTML = "$&nbsp;0";
		
		document.getElementById('MultipleAttendeeInfo').style.display = "none";
		document.getElementById('additionalMemberInfo1').style.display = "none";
		document.getElementById('additionalMemberInfo2').style.display = "none";
		document.getElementById('additionalMemberInfo3').style.display = "none";
		document.getElementById('additionalMemberInfo4').style.display = "none";
		document.getElementById('additionalMemberInfo5').style.display = "none";
		document.getElementById('additionalMemberInfo6').style.display = "none";
		document.getElementById('additionalMemberInfo7').style.display = "none";
		document.getElementById('additionalMemberInfo8').style.display = "none";
		document.getElementById('additionalMemberInfo9').style.display = "none";
		document.getElementById('additionalMemberInfo10').style.display = "none";

		document.getElementById('additional_member_name_10').value = "";
		document.getElementById('additional_member_name_9').value = "";
		document.getElementById('additional_member_name_8').value = "";
		document.getElementById('additional_member_name_7').value = "";
		document.getElementById('additional_member_name_6').value = "";
		document.getElementById('additional_member_name_5').value = "";
		document.getElementById('additional_member_name_4').value = "";
		document.getElementById('additional_member_name_3').value = "";
		document.getElementById('additional_member_name_3').value = "";
		document.getElementById('additional_member_name_1').value = "";
		
		document.getElementById('additional_member_title_10').value = "";
		document.getElementById('additional_member_title_9').value = "";
		document.getElementById('additional_member_title_8').value = "";
		document.getElementById('additional_member_title_7').value = "";
		document.getElementById('additional_member_title_6').value = "";
		document.getElementById('additional_member_title_5').value = "";
		document.getElementById('additional_member_title_4').value = "";
		document.getElementById('additional_member_title_3').value = "";
		document.getElementById('additional_member_title_3').value = "";
		document.getElementById('additional_member_title_1').value = "";
		
		document.getElementById('additional_member_email_10').value = "";
		document.getElementById('additional_member_email_9').value = "";
		document.getElementById('additional_member_email_8').value = "";
		document.getElementById('additional_member_email_7').value = "";
		document.getElementById('additional_member_email_6').value = "";
		document.getElementById('additional_member_email_5').value = "";
		document.getElementById('additional_member_email_4').value = "";
		document.getElementById('additional_member_email_3').value = "";
		document.getElementById('additional_member_email_3').value = "";
		document.getElementById('additional_member_email_1').value = "";
		
		for (i=0; i < document.AttendeeRegForm.member_status.length; i++) {
		   document.AttendeeRegForm.member_status[i].checked = false;
		   }
		updateTotal();
		}

	function setRequiredFields(memLevel) {
		if (memLevel == "organizational") {
			rules[4]='attendee_reg_name:Organization Name|required';
			rules[6]='attendee_title:Title|required';
			}
		else {
			rules[4]='attendee_reg_name:Organization Name|optional';
			rules[6]='attendee_title:Title|optional';
			}
		}
		
	function updateNumAdditionalAttendees() {
		num_additional_attendees = parseInt(document.getElementById('additional_attendees').value);
		numMemberAdditionalAttendees = num_additional_attendees;
		update_additional_attendees_display();
		calcAttendeePrice();
		updateTotal();
		}



	function update_additional_attendees_display() {

			num_total_attendees = num_included_attendees + num_additional_attendees;

//			if (numMemberAdditionalAttendees > 0) {
			if (num_total_attendees > 1 ){
				document.getElementById('MultipleAttendeeInfo').style.display = "";
//				switch (numMemberAdditionalAttendees) {
				switch (num_total_attendees - 1) {
					case 10:
						document.getElementById('additionalMemberInfo1').style.display = "none";
						document.getElementById('additionalMemberInfo2').style.display = "none";
						document.getElementById('additionalMemberInfo3').style.display = "none";
						document.getElementById('additionalMemberInfo4').style.display = "none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";
						
						break;
					case 9:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display="none";
						document.getElementById('additionalMemberInfo6').style.display="none";
						document.getElementById('additionalMemberInfo7').style.display="none";
						document.getElementById('additionalMemberInfo8').style.display="none";
						document.getElementById('additionalMemberInfo9').style.display="none";
						document.getElementById('additionalMemberInfo10').style.display = "none";
						
						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_email_10').value = "";
						
						break;
					case 8:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display="none";
						document.getElementById('additionalMemberInfo6').style.display="none";
						document.getElementById('additionalMemberInfo7').style.display="none";
						document.getElementById('additionalMemberInfo8').style.display="none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";

						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";

						break;
					case 7:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display="none";
						document.getElementById('additionalMemberInfo6').style.display="none";
						document.getElementById('additionalMemberInfo7').style.display="none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";

						break;
					case 6:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display="none";
						document.getElementById('additionalMemberInfo6').style.display="none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";

						break;
					case 5:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display="none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						document.getElementById('additional_member_name_6').value = "";

						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						document.getElementById('additional_member_title_6').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";
						document.getElementById('additional_member_email_6').value = "";

						break;
					case 4:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display="none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						document.getElementById('additional_member_name_6').value = "";
						document.getElementById('additional_member_name_5').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						document.getElementById('additional_member_title_6').value = "";
						document.getElementById('additional_member_title_5').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";
						document.getElementById('additional_member_email_6').value = "";
						document.getElementById('additional_member_email_5').value = "";

						break;
					case 3:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display="none";
						document.getElementById('additionalMemberInfo4').style.display = "none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						document.getElementById('additional_member_name_6').value = "";
						document.getElementById('additional_member_name_5').value = "";
						document.getElementById('additional_member_name_4').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						document.getElementById('additional_member_title_6').value = "";
						document.getElementById('additional_member_title_5').value = "";
						document.getElementById('additional_member_title_4').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";
						document.getElementById('additional_member_email_6').value = "";
						document.getElementById('additional_member_email_5').value = "";
						document.getElementById('additional_member_email_4').value = "";

						break;
					case 2:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display="none";
						document.getElementById('additionalMemberInfo3').style.display = "none";
						document.getElementById('additionalMemberInfo4').style.display = "none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						document.getElementById('additional_member_name_6').value = "";
						document.getElementById('additional_member_name_5').value = "";
						document.getElementById('additional_member_name_4').value = "";
						document.getElementById('additional_member_name_3').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						document.getElementById('additional_member_title_6').value = "";
						document.getElementById('additional_member_title_5').value = "";
						document.getElementById('additional_member_title_4').value = "";
						document.getElementById('additional_member_title_3').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";
						document.getElementById('additional_member_email_6').value = "";
						document.getElementById('additional_member_email_5').value = "";
						document.getElementById('additional_member_email_4').value = "";
						document.getElementById('additional_member_email_3').value = "";

						break;
					case 1:
						document.getElementById('additionalMemberInfo1').style.display="none";
						document.getElementById('additionalMemberInfo2').style.display = "none";
						document.getElementById('additionalMemberInfo3').style.display = "none";
						document.getElementById('additionalMemberInfo4').style.display = "none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";

						document.getElementById('additional_member_name_10').value = "";
						document.getElementById('additional_member_name_9').value = "";
						document.getElementById('additional_member_name_8').value = "";
						document.getElementById('additional_member_name_7').value = "";
						document.getElementById('additional_member_name_6').value = "";
						document.getElementById('additional_member_name_5').value = "";
						document.getElementById('additional_member_name_4').value = "";
						document.getElementById('additional_member_name_3').value = "";
						document.getElementById('additional_member_name_2').value = "";
						
						document.getElementById('additional_member_title_10').value = "";
						document.getElementById('additional_member_title_9').value = "";
						document.getElementById('additional_member_title_8').value = "";
						document.getElementById('additional_member_title_7').value = "";
						document.getElementById('additional_member_title_6').value = "";
						document.getElementById('additional_member_title_5').value = "";
						document.getElementById('additional_member_title_4').value = "";
						document.getElementById('additional_member_title_3').value = "";
						document.getElementById('additional_member_title_2').value = "";
						
						document.getElementById('additional_member_email_10').value = "";
						document.getElementById('additional_member_email_9').value = "";
						document.getElementById('additional_member_email_8').value = "";
						document.getElementById('additional_member_email_7').value = "";
						document.getElementById('additional_member_email_6').value = "";
						document.getElementById('additional_member_email_5').value = "";
						document.getElementById('additional_member_email_4').value = "";
						document.getElementById('additional_member_email_3').value = "";
						document.getElementById('additional_member_email_2').value = "";
						break;
					default:
						document.getElementById('additionalMemberInfo1').style.display = "none";
						document.getElementById('additionalMemberInfo2').style.display = "none";
						document.getElementById('additionalMemberInfo3').style.display = "none";
						document.getElementById('additionalMemberInfo4').style.display = "none";
						document.getElementById('additionalMemberInfo5').style.display = "none";
						document.getElementById('additionalMemberInfo6').style.display = "none";
						document.getElementById('additionalMemberInfo7').style.display = "none";
						document.getElementById('additionalMemberInfo8').style.display = "none";
						document.getElementById('additionalMemberInfo9').style.display = "none";
						document.getElementById('additionalMemberInfo10').style.display = "none";
					
					}
				}
			else {
				document.getElementById('additional_member_name_10').value = "";
				document.getElementById('additional_member_name_9').value = "";
				document.getElementById('additional_member_name_8').value = "";
				document.getElementById('additional_member_name_7').value = "";
				document.getElementById('additional_member_name_6').value = "";
				document.getElementById('additional_member_name_5').value = "";
				document.getElementById('additional_member_name_4').value = "";
				document.getElementById('additional_member_name_3').value = "";
				document.getElementById('additional_member_name_2').value = "";
				document.getElementById('additional_member_name_1').value = "";
				
				document.getElementById('additional_member_title_10').value = "";
				document.getElementById('additional_member_title_9').value = "";
				document.getElementById('additional_member_title_8').value = "";
				document.getElementById('additional_member_title_7').value = "";
				document.getElementById('additional_member_title_6').value = "";
				document.getElementById('additional_member_title_5').value = "";
				document.getElementById('additional_member_title_4').value = "";
				document.getElementById('additional_member_title_3').value = "";
				document.getElementById('additional_member_title_2').value = "";
				document.getElementById('additional_member_title_1').value = "";
				
				document.getElementById('additional_member_email_10').value = "";
				document.getElementById('additional_member_email_9').value = "";
				document.getElementById('additional_member_email_8').value = "";
				document.getElementById('additional_member_email_7').value = "";
				document.getElementById('additional_member_email_6').value = "";
				document.getElementById('additional_member_email_5').value = "";
				document.getElementById('additional_member_email_4').value = "";
				document.getElementById('additional_member_email_3').value = "";
				document.getElementById('additional_member_email_2').value = "";
				document.getElementById('additional_member_email_1').value = "";

				document.getElementById('additionalMemberInfo1').style.display = "none";
				document.getElementById('additionalMemberInfo2').style.display = "none";
				document.getElementById('additionalMemberInfo3').style.display = "none";
				document.getElementById('additionalMemberInfo4').style.display = "none";
				document.getElementById('additionalMemberInfo5').style.display = "none";
				document.getElementById('additionalMemberInfo6').style.display = "none";
				document.getElementById('additionalMemberInfo7').style.display = "none";
				document.getElementById('additionalMemberInfo8').style.display = "none";
				document.getElementById('additionalMemberInfo9').style.display = "none";
				document.getElementById('additionalMemberInfo10').style.display = "none";
				document.getElementById('MultipleAttendeeInfo').style.display = "none";
			}
		}

	function calcAttendeePrice() {
		if (memberPricing) {
			// determine what kind of member
			// if member pricing then member_level is defined
			memberLevel = document.AttendeeRegForm.membership_level.value + "";
			switch (memberStatus) {
				case "Member":
					document.getElementById('attendee_price').value = MEMBER_ATTENDEE_PRICE + (num_additional_attendees * MEMBER_ADDITIONAL_ATTENDEE_PRICE);
					document.getElementById('attendeePrice').innerHTML = "<strong>$ " + (MEMBER_ATTENDEE_PRICE + (num_additional_attendees * MEMBER_ADDITIONAL_ATTENDEE_PRICE)) + "</strong>";
					break;
				case "StudentAttendee":
					document.getElementById('attendee_price').value = STUDENT_ATTENDEE_PRICE;
					document.getElementById('attendeePrice').innerHTML = "<strong>$ " + STUDENT_ATTENDEE_PRICE + "</strong>";
					break;
				case "default":
					document.getElementById('membership_price').value = 0;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + MEMBER_ATTENDEE_PRICE + "</strong>";
					setRequiredFields(memberLevel);
					break;
			}
			if (memberLevel == "student") {
				document.getElementById('attendee_price').value = STUDENT_ATTENDEE_PRICE;
				document.getElementById('attendeePrice').innerHTML = "<strong>$ " + STUDENT_ATTENDEE_PRICE + "</strong>";
			}
		}
		else {
			document.getElementById('attendee_price').value = NONMEMBER_ATTENDEE_PRICE + (num_additional_attendees * NONMEMBER_ATTENDEE_PRICE);
			document.getElementById('attendeePrice').innerHTML = "<strong>$ " + (NONMEMBER_ATTENDEE_PRICE + (num_additional_attendees * NONMEMBER_ATTENDEE_PRICE)) + "</strong>";
		}
		updateTotal();
	}

	function updateTotal() {
		feeAttendee = parseFloat(document.getElementById('attendee_price').value);
		feeMembership = parseFloat(document.getElementById('membership_price').value);
		
		feeTotal = feeAttendee;
		document.getElementById('total_price').value = feeTotal;
		document.getElementById('totalPrice').innerHTML = "<strong>$ " + feeTotal + "</strong>";
		}
		
		
	function joinGRHA() {
		contentString = "";
		switch (memberStatus) {
			case "NonMember-NoJoin":
				memberPricing = false;
				document.getElementById('membership_price').value = 0;
				document.getElementById('attendee_price').value = NONMEMBER_ATTENDEE_PRICE;
				document.getElementById('attendeePrice').innerHTML = "<strong>$ " + NONMEMBER_ATTENDEE_PRICE + "</strong>";
				document.getElementById('membership').style.display = "none";
				numMemberAdditionalAttendees = 0;
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();

				setRequiredFields("");
				break;		
			case "Member":
				memberPricing = true;
				document.getElementById('membership_level').options[0].selected = true;
				contentString = "<p><strong>Organizational Membership</strong> includes: </p>\n";
				contentString += "<ul>\n";
				contentString += "<li>Three Association representatives and votes</li>\n";
				contentString += "</ul>\n";
				//contentString += "<p align=\"right\">Number of additional organizational ";
				//contentString += "representatives: <input size=\"1\" type=\"text\" value=\"0\" ";
				//contentString += "name=\"additional_attendees\" id=\"additional_attendees\" ";
				//contentString += "onchange=\"updateNumAdditionalAttendees();\">\n";
				//contentString += "</p>\n";
				contentString += "<p align=\"right\" valign=\"bottom\">Join/Renew: ";
				contentString += "<input type=\"checkbox\" id=\"renew\" name=\"renew\" ";
				contentString += "onClick=\"checkJoining();\"></p>\n";
				
				num_included_attendees = 3;
				num_additional_attendees = 0;
				
				numMemberAdditionalAttendees = 0;
				document.getElementById('attendee_price').value = MEMBER_ATTENDEE_PRICE;
				document.getElementById('membershipBenefits').innerHTML = contentString;
				document.getElementById('membership_price').value = 0;
				document.getElementById('attendeePrice').innerHTML = "<strong>$ " + MEMBER_ATTENDEE_PRICE + "</strong>";
				document.getElementById('membership').style.display = "";
				setRequiredFields("organizational");
				update_additional_attendees_display();
				break;
			case "StudentAttendee":
				memberPricing = true;
				document.getElementById('membership_price').value = 0;
				document.getElementById('attendee_price').value = STUDENT_ATTENDEE_PRICE;
				document.getElementById('attendeePrice').innerHTML = "<strong>$ " + STUDENT_ATTENDEE_PRICE + "</strong>";
				document.getElementById('membership').style.display = "none";
				numMemberAdditionalAttendees = 0;
				num_additional_attendees = 0;
				num_included_attendees = 1;
				setRequiredFields("");
				// set nonMemberAttendeePrice to 25 for this exception to the rule.
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();
				break;		
			}
		calcAttendeePrice();
		updateTotal();
		// reset nonMemberAttendeePrice to standard value.
		nonMemberAttendeePrice = NONMEMBER_ATTENDEE_PRICE;
	}


	function checkJoining() {
		if (document.getElementById('renew').checked) {
			memberLevel = document.AttendeeRegForm.membership_level.value + "";
			switch (memberLevel) {
				case "organizational":
					document.getElementById('membership_price').value = ORGANIZATIONAL_MEMBERSHIP_FEE;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + ORGANIZATIONAL_MEMBERSHIP_FEE + "</strong>";
					setRequiredFields(memberLevel);
					break;
				case "individual":
					document.getElementById('membership_price').value = INDIVIDUAL_MEMBERSHIP_FEE;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + INDIVIDUAL_MEMBERSHIP_FEE + "</strong>";
					setRequiredFields(memberLevel);
					break;
				case "elected":
					document.getElementById('membership_price').value = ELECTED_OFFICIAL_MEMBERSHIP_FEE;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + ELECTED_OFFICIAL_MEMBERSHIP_FEE + "</strong>";
					setRequiredFields(memberLevel);
					break;
				case "student":
					document.getElementById('membership_price').value = STUDENT_MEMBERSHIP_FEE;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + STUDENT_MEMBERSHIP_FEE + "</strong>";
					setRequiredFields(memberLevel);
					break;
				case "default":
					document.getElementById('membership_price').value = 0;
					document.getElementById('membershipPrice').innerHTML = "<strong>$ " + INDIVIDUAL_MEMBERSHIP_FEE + "</strong>";
					setRequiredFields(memberLevel);
					break;
			}
		}
		else {
			document.getElementById('membership_price').value = 0;
			document.getElementById('membershipPrice').innerHTML = "&nbsp;";
		}
		update_additional_attendees_display();
		updateTotal();
	}
	

	function selectMembership () {
		contentString = "";
		memberLevel = document.AttendeeRegForm.membership_level.value;
		switch (memberLevel) {
			case "organizational":
				contentString = "<p><strong>Organizational Membership</strong> includes: </p>\n";
				contentString += "<ul>\n";
				contentString += "<li>Three Association representatives and votes</li>\n";
				contentString += "</ul>\n";
				//contentString += "<p align=\"right\">Number of additional organizational ";
				//contentString += "representatives: <input size=\"1\" type=\"text\" value=\"0\" ";
				//contentString += "name=\"additional_attendees\" id=\"additional_attendees\" ";
				//contentString += "onchange=\"updateNumAdditionalAttendees();\">\n";
				//contentString += "</p>\n";
				contentString += "<p align=\"right\" valign=\"bottom\">Join/Renew: ";
				contentString += "<input type=\"checkbox\" id=\"renew\" name=\"renew\" ";
				contentString += "onClick=\"checkJoining();\"></p>\n";
//				numMemberAdditionalAttendees = 3;
				document.getElementById('membershipBenefits').innerHTML = contentString;
				document.getElementById('membership_price').value = 0;
				document.getElementById('membershipPrice').innerHTML = "&nbsp;";
				document.getElementById('additional_attendees').value = 0;
				setRequiredFields(memberLevel);
				numMemberAdditionalAttendees = 0;
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();
				calcAttendeePrice();
				updateTotal();
				
				break;
			case "individual":
				contentString = "<p><strong>Individual Membership</strong> includes: </p>\n";
				contentString += "<ul>\n"; 			
				contentString += "<li>One Association representative and vote</li>\n";
				contentString += "</ul>\n";
				contentString += "<p align=\"right\">Join/Renew: ";
				contentString += "<input type=\"checkbox\" id=\"renew\" name=\"renew\" ";
				contentString += "onClick=\"checkJoining();\"></p>\n";
				document.getElementById('membershipBenefits').innerHTML = contentString;
				document.getElementById('membership_price').value = 0;
				document.getElementById('membershipPrice').innerHTML = "&nbsp;";
				setRequiredFields(memberLevel);

				numMemberAdditionalAttendees = 0;
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();
				calcAttendeePrice();
				updateTotal();
				break;
			case "elected":
				contentString = "<p><strong>Elected Official Membership</strong>: </p>\n";
				contentString += "<ul>\n";
				contentString += "<li>Non-voting membership</li>\n";
				contentString += "</ul>\n";
				contentString += "<p align=\"right\">Join/Renew: ";
				contentString += "<input type=\"checkbox\" id=\"renew\" name=\"renew\" ";
				contentString += "onClick=\"checkJoining();\"></p>\n";
				document.getElementById('membershipBenefits').innerHTML = contentString;
				document.getElementById('membership_price').value = 0;
				document.getElementById('membershipPrice').innerHTML = "&nbsp;";
				setRequiredFields(memberLevel);
				
				numMemberAdditionalAttendees = 0;
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();
				calcAttendeePrice();
				updateTotal();

				break;

			case "student":
				contentString = "<p><strong>Student Membership</strong>: </p>\n";
				contentString += "<ul>\n";
				contentString += "<li>Per school year, Non-voting membership</li>\n";
				contentString += "</ul>\n";
				contentString += "<p align=\"right\">Join/Renew: ";
				contentString += "<input type=\"checkbox\" id=\"renew\" name=\"renew\" ";
				contentString += "onClick=\"checkJoining();\"></p>\n";
				document.getElementById('membershipBenefits').innerHTML = contentString;
				document.getElementById('membership_price').value = 0;
				document.getElementById('membershipPrice').innerHTML = "&nbsp;";
				setRequiredFields(memberLevel);
				document.getElementById('attendee_price').value = STUDENT_ATTENDEE_PRICE;

				numMemberAdditionalAttendees = 0;
				num_included_attendees = 1;
				num_additional_attendees = 0;
				update_additional_attendees_display();
				calcAttendeePrice();
				updateTotal();

				break;

		}
		checkJoining();
		calcAttendeePrice();
		updateTotal();
	}
