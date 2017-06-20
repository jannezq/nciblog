// JavaScript File

var text2display = "";
var answersBox = document.getElementById("answersBox");
var answers = new Array(9);
  answers[0] ="1.Millennium\n";
  answers[1] ="2.Samuel Eto\n";
  answers[2] ="3. A, B, AB and O.\n";
  answers[3] ="4.37.\n";
  answers[4] ="5.Sherlock Holmes.\n";
  answers[5] ="6.True\n";
  answers[6] ="7.True\n";
  answers[7] ="8.Trigonometry.\n";
  answers[8] ="9.Photography.\n";
  
  
  
var questions = new Array(9);
  questions[0] ="q1";
  questions[1] ="q2";
  questions[2] ="q3";
  questions[3] ="q4";
  questions[4] ="q5";
  questions[5] ="q6";
  questions[6] ="q7";
  questions[7] ="q8";
  questions[8] ="q9";
  

function checkQs(s)
{
//fuction is saying get the radio buttons and check to see the answers
var qs = document.getElementsByName(s);
var noOfRadios = qs.length;

console.log("qs" + qs)
// check all the radio buttos
for(var i = 0; i < noOfRadios; i++)
{
//this one is say check to see if its the correct one
//get all the radio buttons to see s the values is correct, if its correct well done
  if(qs[i].checked)
	{
	if (qs[i].value=="correct") {
	 text2display = text2display + "you got that correct\n";
 // alert("Congratulations on winning this weeks quiz. Go to the SU for your weekly prize!!!!");
	 //get the user details which are logged into the system
	 // and if they win display there user email 
	 
	 console.log("correct")
	}
	 else {
	     
	    text2display = answers.valueOf(s);
	    document.getElementById("answersBox").value = text2display;
	     //alert("Congratulations on winning this weeks quiz. Go to the SU for your weekly prize!!!!");
	     
	break;
}
}
}
}

function sayhello(){
    alert("Chance To Win Two Tickets to any Holiday Destination of your choice If All Is Correct");
}
function checkAll()
{
     // alert("test");
for(var i = 0; i <questions.length; i++)
{
 checkQs(questions[i]);
}
document.getElementById("answersBox").value = text2display;
alert("Congratulations on winning this weeks quiz. Go to the SU for your weekly prize!!!!");
 }