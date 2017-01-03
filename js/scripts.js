function signupformValidate()
  {  
     var name=document.getElementById("name").value;
     if(!name)
        alert("Please enter valid name");
        
     var x=document.getElementById("aadhar").value;
     if(isNaN(x))
      {alert ("you must enter numbers as aadhar is numeric");
        setTimeout(function() {document.getElementById('aadhar').focus();}, 0);
                return false;
              }

     if(x.length < 12)
              {alert("aadhar card number you entered is less than 12 digits,please enter correct aadhar card number");
                setTimeout(function() {document.getElementById('aadhar').focus();}, 0);
                return false;
                }

     
     var p1,p2;
     p1=document.getElementById("pwd").value;
     p2=document.getElementById("pwd2").value;

     if(p1!=p2)
      {  alert("passwords do not match,please re enter");
            setTimeout(function() {document.getElementById('pwd2').focus();}, 0);
          return false;}

}