 function show_login()
    {
             document.getElementById("loginDiv").style.display="block";
    }
     function hide_login()
    {
             document.getElementById("loginDiv").style.display="none";
    }

    function show_terms()
    {
      if(form_register.name.value=="")
      {
        alert("Name cannot be blank");
      }
      else if(form_register.email.value=="")
      {
        alert("Email cannot be blank");
      }
      else if(form_register.password.value=="")
      {
        alert("Password cannot be blank");
      }
      else if(form_register.confirm_pass.value=="")
      {
        alert("Confirm Password cannot be blank");
      }
      else{
        if(form_register.password.value!=form_register.confirm_pass.value)
        {
          alert("Password does not match");
        }
        else
        {
          document.getElementById("register").submit();
        }
      }
               
    }
   

   