function ValidateAddForm(){
	if(AllChecks() == true)
		document.getElementById("myForm").submit();
}
function AllChecks(){
	checkSName = CheckName();
	checkSId = CheckId();
	checkSmajor = CheckMajor();
	checkSLevel = CheckLevel();
	checkSAddress = CheckAddress();
	checkSMail = CheckMail();
	checkSPassword = CheckPassword();
	
	if(checkSName == true && checkSId == true && checkSmajor == true && checkSLevel == true && checkSAddress == true && checkSMail == true && checkSPassword == true){
		return true;
	}
}

function CheckName(){
	var studentName = document.getElementById("name").value;
	var nameSyntax = /^([\w]{2,20}[\s]?([\d]{1,3})?){1,4}$/;// \s space \w any character \d any digit {} range to repeat
	if(nameSyntax.test(studentName) == true){
		RightNameChecked("name");
		return true;
	}
	else{
		DisplayError("name");
	}
}
function RightNameChecked(object){
	document.getElementById(object).style.borderColor = "green";
}

function CheckId(){
	var studentId = document.getElementById("id").value;
	if(studentId.length > 4){
		RightNameChecked("id");
		return true;
	}
	
	else{
		DisplayError("id");
	}
}
function DisplayError(content){
	document.getElementById(content).style.borderColor = "red";
}

function CheckMajor(){
	var studentMajor = document.getElementById("major").value;
	var majorSyntax = /^([c|C|i|I][s|S|t|T])$/;//cs CS Cs cS 
	if(majorSyntax.test(studentMajor) == true){
		RightNameChecked("major");
		return true;
	}
	else{
		DisplayError("major");
	}
}

function CheckLevel(){
	var studentLevel = document.getElementById("level").value;
	var levelSyntax = /^[1-4]$/;
	if(levelSyntax.test(studentLevel) == true){
		RightNameChecked("level");
		return true;
	}
	else{
		DisplayError("level");
	}
}

function CheckAddress(){
	var studentAddress = document.getElementById("address").value;
	var addressSyntax = /^[\d]{1,4}([ ]?[A-Z]?[a-z]{2,10}[-]?){2,5}[ ]?$/;
	if(addressSyntax.test(studentAddress) == true){
		RightNameChecked("address");
		return true;
	}
	else
		DisplayError("address");
}

function CheckMail(){
	var studentMail = document.getElementById("mail").value;
	var mailSyntax = /^[\w]{3,20}([\d]{1,4})?@[\w]{3,10}([\d]{1,10})?[\w]?(.[\w]{3,10}$){1,8}$/;
	if(mailSyntax.test(studentMail) == true){
		RightNameChecked("mail");
		return true;
	}
	else{
		DisplayError("mail");
	}
}

function CheckPassword(){
	var studentPassword = document.getElementById("password").value;
	var passwordSyntax = /[A-Za-z]\w{4,14}\d{1,11}/;
	if(passwordSyntax.test(studentPassword) == true){
		RightNameChecked("password");
		return true;
	}
	else{
		DisplayError("password");
	}
}

function CheckTerm(){
	var courseTerm = document.getElementById("term").value;
	var termSyntax = /^[1-2]$/;
	if(termSyntax.test(courseTerm) == true){
		RightNameChecked("term");
		return true;
	}
	else{
		DisplayError("term");
	}
}

function CheckCourseName(){
	var studentName = document.getElementById("bCourse").value;
	var nameSyntax = /^([\w]{2,20}[\s]?){1,4}$/;
	if(nameSyntax.test(studentName) == true){
		RightNameChecked("bCourse");
		return true;
	}
	else{
		DisplayError("bCourse");
	}
}

function ValidateLoginForm(){
	var checkLoginEmail = CheckMail();
	var checkLoginPassword = CheckPassword();
	
	if(checkLoginEmail == true && checkLoginPassword == true){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddCourse(){
	var checkCourseName = CheckName();
	var checkCourseTerm = CheckTerm();
	var checkCourseMajor = CheckMajor();
	var checkCourseLevel = CheckLevel();
	
	if(checkCourseName && checkCourseTerm && checkCourseMajor && checkCourseLevel){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddBooklet(){
	var checkStudentId = CheckId();
	var checkBookletName = CheckName();
	var checkBookletCourse = CheckCourseName();
	
	if(checkStudentId && checkBookletName && checkBookletCourse){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddSchedule(){
	var studentId = CheckId();
	var checkSLevel = CheckLevel();
	if(checkSLevel && studentId){
		document.getElementById("myForm").submit();
	}
}

function CheckMarks(object){
	var checkMarks = document.getElementById(object).value;
	var marksSyntax = /^(([1][0-9])|([2][0-5])|[0-9])$/;
	
	if(marksSyntax.test(checkMarks)){
		RightNameChecked(object);
		return true;
	}
	else{
		DisplayError(object);
	}
}

function ValidateAddTimetable(){
	var checkSId = CheckId();
	if(checkSId){
		document.getElementById("myForm").submit();
	}
}

function CheckUrl(){
	 var length = document.getElementById("url").value.length;
	if(length >20){
		RightNameChecked("url");
		return true;
	}
	else{
		DisplayError("url");
	}
}

function ValidateAddVideo(){
	var checkCourseId = CheckId();
	var checkUrlLength = CheckUrl();
	
	if(checkCourseId && checkUrlLength){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddTestSolutions(){
	var checkSId = CheckId();
	var checkSName = CheckName();
	
	if(checkSId && checkSName){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddWeekMarks(){
	var checkSId = CheckId();
	var checkSWeekMarks = CheckMarks("marks");
	
	if(checkSId && checkSWeekMarks){
		document.getElementById("myForm").submit();
	}
}

function ValidateAddPTs(){
	var checkSId = CheckId();
	var pt1Grade = CheckMarks("mark1");
	var pt2Grade = CheckMarks("mark2");
	
	if(checkSId && pt1Grade && pt2Grade){
		document.getElementById("myForm").submit();
	}
}
