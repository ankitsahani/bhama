
//validaion code for User form
var host = window.location.host;
console.log(host);
$("#registerForm").validate({
    rules: {
     
      first_name:"required",
      last_name:"required",
      password:"required",
      email: {
        required: true,
        email: true,
      }
    },
    messages: {
      
      first_name: "Please enter your first name",
      last_name: "Please enter your last name",
      password: "Please enter your password",
      email: {
        required: "Please enter your email",
        email: "Your email address must be in the format of name@domain.com",
        
      }
    }
  });
  



  
 