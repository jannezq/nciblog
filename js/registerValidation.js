// JavaScript File

/*function Validate(username) {
   // username.value = username.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
    var letters = /^[A-Za-z]+$/;  
    if(username.value.match(letters))
    {
        return true;
    }
    else
    {
        alert()
    }
}

https://bootsnipp.com/snippets/8ANqZ

*/


function Validate(username) {
    username.value = username.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}

function email_Valid(email)
{
    var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
    
    if(regMail.text(email) == false)
    {
        document.getElementById("status").innerHTML = "<span class='warning'>Email address is not valid yet.</span>";
    }
     else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}


function checkPass()
{
    //store the pass fields 
    var password1 = document.getElementById('password1');
    var password2 = document.getElementById('password2');
    //store the cofirm message
    var message = document.getElementById('confirmMessage');
    //set the colors
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //conpare the passwords 
    //and confirmation field
    if (password1.value == password2.value){
        //password match
        //set the color and inform
        //user they have correct passwords
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password Match"
    }
    else{
        //password don't match
        //colour is set to bad color
        //notify user
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password do not match!"
        
    }
}

