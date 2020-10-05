/**
 * Classes are initialized as variables (with "var" keyword),
 * so that the program initializes these values from the get-go.
 * 
 * Attribution of code snippets:
	Web Programming: Lecture 03 on a Tuesday at 2.30PM on the 4th of August 2020, by Shekhar Kalra
	Web Programming: Tutorial 04 on a Thursday at 9.30AM on the 13th of August 2020, by Trevor Reynolds.
 */
var emptyString = "";
var namePattern = /^([a-zA-Z'-])$/;
var contractsRepository = [];

firstName = document.getElementById("contractFirstName").value;
surname = document.getElementById("contractSurname").value;
emailAddr = document.getElementById("contractEmailAddress").value;
homeAddr = document.getElementById("contractHomeAddress").value;
phoneNo = document.getElementById("contractPhoneNumber").value;
age = document.getElementById("contractAgeInYears").value;


function onErrorOfId(item) {
//hideAllErrors();
	firstName = item.firstName;
	surname = item.surame;
	emailAddr = item.emailAddr;
	homeAddr = item.homeAddr;
	phoneNo = item.phoneNo;
	age = item.age;

	var hideOrShow = "";
	if (item !== emptyString) hideOrShow = "none";
	else {
		hideOrShow = "inline";

		document.getElementById(item).style.display=hideOrShow;
		document.getElementById(item).select();
		document.getElementById(item).focus();
	}

	if (contractValidation.isNumeric(age) === false) return false;

	else if (age === false) {
		document.getElementById("contractAgeInYearsError").style.display="inline";
		document.getElementById("contractAgeInYears").select();
		document.getElementById("contractAgeInYears").focus();
	}

	else if (contractValidation.isAPhoneLocale(phoneNo) === false) return false;

	else if (phoneNo === false) {
		document.getElementById("contractPhoneNumberError").style.display="inline";
		document.getElementById("contractPhoneNumber").select();
		document.getElementById("contractPhoneNumber").focus();
	}
} // Available: https://stackoverflow.com/questions/46224895/javascript-pass-object-as-function-argument


this.addcontract = function(contract) {
	contractsRepository.push(contract);
}

this.removecontract = function(contract) {
	contractsRepository.splice(contract);
};

function getcontractEmailAddress() {
	return contractValidation.CheckEmail(contractEmail);
}; // Is only initialized/recognized when needed- using "let" keyword.

function getIsNumericalValue(n) {
	return contractValidation.IsNumeric(n);
}; // Is only initialized/recognized when needed- using "let" keyword.

/**	Attribution:
 *	Available: Week 3 - Lecture 3
*/

var contractValidation = function() { // This use of keywords var and function is used to simulate a class keyword from later EcmaScript editions

	function CheckEmail(i) {
		var x = /^([a-zA-Z0-9_.-])+@([a-Za-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
		if (x.test(i)) return true;
		else return false;
	}

	function IsNumeric(n) {
		if (n.match(/^\d+$/)) return true;
		else return false;
	}

	for (var i = 0; i < elements[i]; i++) {

	var form = document.querySelector("form");
		var type = form.elements[i].type;
		var element = form.elements.name.form == form;
	} // TODO Higher-order function(s)

	function isAPhoneLocale(n) {
		var localePhonePattern = /^(\(04\)[04]\+614)( ?\d){8}$/;

		if (n.match(localePhonePattern)) return true;
		else return false;
	}
};

function slider_input(ages) {
	document.getElementById("agesInSlider").value=ages;
} // HTML5 input type range show range value: https://stackoverflow.com/questions/10004723/html5-input-type-range-show-range-value

function hideAllErrors() {
	document.getElementById("contractFirstName").style.display="none";
	document.getElementById("contractSurname").style.display="none";
	document.getElementById("contractEmailAddress").style.display="none";
	document.getElementById("contractHomeAddress").style.display="none";
	document.getElementById("contractPhoneNumber").style.display="none";
	document.getElementById("contractAgeInYears").style.display="none";
}