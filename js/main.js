function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
var authenticated=false;

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function search(){
    console.log("in search");
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("searchbar");
    filter = input.value.toUpperCase();
    ulElement = document.getElementById("myUL");
    var child = ulElement.lastElementChild;  
        while (child) { 
          ulElement.removeChild(child); 
            child = ulElement.lastElementChild; 
        }
    console.log(ulElement)
    data=['avatar','avengers','DDLJ']
    for (i = 0; i < data.length; i++) {
      console.log("filter",filter)
      console.log("data is ",data[i])
      
            
        if (data[i].toUpperCase().indexOf(filter) > -1) {
          liElement=document.createElement("li");
          liElement.innerHTML=data[i];

            liElement.style.display = "";
            ulElement.appendChild(liElement);
            console.log(liElement.innerHTML)
        }
        else{
          liElement.style.display = "none";

        }


    }

}

function showRegisterForm(){
    console.log("in search");
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');

}

function openProfilePage(){
       window.location.replace("profile.php"); 
}

function openHistoryPage(){
  window.location.replace("booking_history.php"); 
}

function openAdminPage(){
    window.location.replace("adminpage.php"); 
  }

function RegistrationAjax(e){
   // console.log("asse");
   

   $.post( "registration.php", function() {
    var userName=$('#registrationName').val();
    var password=$('#registrationPassword').val();
    var re_password=$('#registrationPassword_confirmation').val();
    var email=$('#registrationEmail').val();
    var phone=$('#registrationPhone').val();
    var image=$('#registrationImage').val();
    if (!userName=="") {

        if (!password=="") {

           if (!re_password=="") {

             if (!(password==re_password)) {
               shakeModal("password didn't match");
           }else{
               if(!email=="")
               {
             // window.location.replace("about.html"); 
            if(!phone=="")
            {
             $.post('registration.php',{postName:userName,postPassword:password,postEmail:email,postPhone:phone,postImage:image},
                function(data)
                {


                    if (data==1) {
                        //window.location.replace("problem.php"); 
                        registrationComplete();
                    }
                    if (data==2) {
                       shakeModal("username has been taken");
                   }
                   if (data==3) {
                    alert("please try again");
                }
            });
        }
        else{
            shakeModal("phone cannot be empty");
        }
    }
    else{
        shakeModal("email cannot be empty");
    }
}
        
    }
     else{
       shakeModal("password confirmation cannot be empty");
   }
}else{
    shakeModal("password cannot be empty");
}
}else{

   shakeModal("username cannot be empty");

}


});

   e.preventDefault();

}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);

}

function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });

        $('.modal-title').html('Login with');
    });       
    $('.error').removeClass('alert alert-danger').html(''); 
}

function loginAjax(check){


    $.post( "index.php", function() {
        var userName=$('#userName').val();
        var password=$('#password').val();

        if (userName=="" || password=="") {

            shakeModal("Username or Password cannot be empty");

        }else{
            $.post('logIn.php',{postName:userName,postPassword:password},
                function(data)
                {

                 if (data==1) {
                     window.authenticated=true;
                    
                   window.location.replace("adminpage.php"); 

               }else if (data==2) {
                   window.location.replace("index.php"); 
                   window.authenticated=true;
               }else{

                 shakeModal("Wrong Username or Password"); 
             }


         });
        }

    });
    
}

function shakeModal(error){
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html(error);
    $('input[type="password"]').val('');
    $('input[type="text"]').val('');
    setTimeout( function(){ 
        $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

function registrationComplete(){
    $('#loginModal .modal-dialog').addClass('');
    $('.error').addClass('alert successfully-submit').html("Registration Complete,Please LogIn");
    $('input[type="password"]').val('');
    $('input[type="text"]').val('');

    setTimeout( function(){ 
        $('#loginModal .modal-dialog').removeClass(''); 
    }, 1000 ); 
}