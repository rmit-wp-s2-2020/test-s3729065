var membership = function(memberId, memberCode)
{

	this.memberId = memberId;
	this.memberCode = memberCode;

	this.createNewMember = new membership(
		firstNameInput, secondNameInput,
		memberEmailInput, memberAddressInput,
		memberReferalInput, membershipTypeInput,
		memberAgeInput, durationOfMembership); // TODO

	var membershipRepository = [];

	this.addMember = function(member) {
		membershipRepository.push(member);
	}

	this.removeMember = function(member) {
		membershipRepository.splice(member);
	};
};