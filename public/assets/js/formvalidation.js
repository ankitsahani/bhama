$.validator.addMethod("noSpace", function(value, element) {
  return this.optional(element) || /^S+$/i.test(value);
}, "No white space please"); 

jQuery.validator.addMethod("noSpace", function(value) { 
  return value == '' || value.trim().length != 0;  
}, "No space please and don't leave it empty");

//validaion code for User form
$("#addUserform").validate({
    rules: {
      user_name: "required",
      first_name:"required",
      last_name:"required",
      password:{
        noSpace:true,
        required:true,
        minlength: 6
       },
     
      confirm_password:{
        noSpace:true,
        required: true,
        equalTo: '[name="password"]'
      },
      phone_number:{
        required:true,
        digits: true,
        minlength: 7,
        maxlength:14
        
      },
      subscription_plan:"required",
        email: {
        required: true,
        email: true
      }
    },
    messages: {
      user_name: "Please enter your user name",
      first_name: "Please enter your first name",
      last_name: "Please enter your last name",
      password: {
        required:"Please enter your password",
        noSpace:"White spaces not allowed",
        minlength:"Password should be 6 character long"
      },
     
      confirm_password:{
        required:"Please enter your confirm password",
        noSpace:"White spaces not allowed",
        equalTo:"Please enter Confirm Password Same as Password"
      },
      phone_number:{
        required: "Please enter your phone number",
        digits:"Please enter numbers Only"
    },
      subscription_plan:"Please select your plan",
      email: {
        required: "Please enter your email",
        email: "Your email address must be in the format of name@domain.com"
      }
    }
  });
  
//validation for numerice value
$('input[name="mobile"]').keyup(function(e)
{
if (/\D/g.test(this.value))
{
// Filter non-digits from input value.
this.value = this.value.replace(/\D/g, '');
}
});
//validaion code for subscription form
  $("#addSubscriptionForm").validate({
    rules: {
        plan_name: "required",
        price:"required",
       
        validity_days:{
          digits: true,
          required:true
        }
        
       
    },
    messages: {
        plan_name: "Please enter plan name",
        price:"Please enter price",
        validity_days:{
          required:"Please enter  days" ,
          digits:"please enter only digits"
        }
         
    }
  });

  //valdidation code for allergy form
  $("#addAllergyForm").validate({
    rules: {
        allergy_name: "required",
        allergy_image: {
            //required: true,
            extension: "jpg|jpeg|png"
        }
     
    },
    messages: {
        allergy_name: "Please enter allergy name",
        allergy_image: {
           // required: "Please upload file.",
            extension: "Only (jpg, jpeg, png)."
        }
     
    }
  });
  $("#editAllergyForm").validate({
    rules: {
        allergy_name: "required",
        allergy_image: {
          extension: "jpg|jpeg|png"
      },
    },
    messages: {
        allergy_name: "Please enter allergy name",
        allergy_image: {
          extension: "Only (jpg, jpeg, png)."
      }
     
    }
  });
  //valdidation code for faq form
  $("#addFaqForm").validate({
    rules: {
        question: "required",
        answer: "required"
     
    },
    messages: {
        question: "Please enter question",
        answer: "Please enter answer",
       
     
    }
  });
  //valdidation code for about form
  $("#aboutForm").validate({
    rules: {
      about: "required",
      image: {
          
            accept: "image/*, video/*",
            extension: "jpg|jpeg|png|mp4|mov"
        }
       
    },
    messages: {
      about: "Please enter about",
      image: {
           
            accept: "Only accept image/video",

            extension: "Only (jpg, jpeg, png, mp4, mov)."
        }
       
    }
  });
//valdidation code for update profile form
 /* $(document).ready(function(){
  $("#mobile").keypress(function(e){
     var keyCode = e.which;
 
    if ( (keyCode != 8 || keyCode ==32 ) && (keyCode < 48 || keyCode > 57)) { 
      return false;
    }
  });
});*/
  $("#editProfile").validate({
    rules: {
      name: "required",
      mobile: {
        required: true,
        digits: true,
        minlength: 7,
        maxlength:14
        
      },
      email: {
        required: true,
        email: true
      }
    },

    messages: {
      name: "Please enter your name",
      mobile:{
            required: "Please enter your phone number",
            digits:"Please enter numbers Only"
        },
      email: {
        required: "Please enter your email"
      }
    }
  });
  
  $('#addMealForm').validate({
    rules: {
      meal: "required",
      info: "required"
     
    },
    messages: {
      meal: "Please enter meal",
      info: "Please enter information"
     
    }
  });
  $('#editMealForm').validate({
    rules: {
      meal_name: "required",
      meal_info: "required",
      type:"required"
     
    },
    messages: {
      meal_name: "Please enter meal",
      meal_info: "Please enter information",
      type:"Please select any one color"
    }
  });

  
    $("#addVolumeForm").validate({  
      rules: {
            volume:"required",
            info: "required"
        },
            messages: {
            volume:"Please enter volume",
            info:"Please enter information"	
          }
       
     });
  
    $("#editVolumeForm").validate({  
      rules: {
            volume:"required",
            info: "required"
        },
            messages: {
            volume:"Please enter volume",
            info:"Please enter information"	
          }
       
     });
     
  //valdidation code for add recipe in recipe management form

  $("#recipeForm").validate({
    rules: {
      recipe_image: {
             required: true,
             extension: "jpg|jpeg|png|ico|bmp"
      },
      recipe_name:{
        noSpace: true,
        required:true
      },
       meal_type:{
         required:true,
         minlength: 1
        },
      volume: "required",
      calories: {
        required: true,
        number: true
       },
        protein:{
         required: true,
         number: true
       },
      cuisine_style: "required",
      serving_for: {
        required: true,
        digits: true,
      },
      prep_time: {
        required: true,
        digits: true,
      },
     
      cook_time: {
        required: true,
        digits: true,
      },
     
     
      "tips[]":{
        noSpace: true,
        required: true,
      },
      "title[]":{
        noSpace: true,
        required: true,
      },
      "directions[]": {
        noSpace: true,
        required: true,
      },
      "category[1]": {
        noSpace: true,
        required: true,
      },
      "ingredient[1][]": {
        noSpace: true,
        required: true,
      },
      "quantity[1][]": "required",
      "unit[1][]": "required"
    },
    messages: {
      recipe_image:{ 
        required: 'Please choose image', 
        extension: 'Only (jpg, jpeg, png)'
      },	
      recipe_name: "Please enter recipe name",
      meal_type: {
       required: "Please enter meal name",
       minlength:"Please select at least one meal"
      },
      volume:"Please select volume",
      calories: {
        required : "Please enter calories",
        number : "Please enter number only"
      },
    protein: {
        required : "Please enter protein",
        number : "Please enter number only"
      },
      cuisine_style:"Please select cuisine style",
      serving_for: {
        required : "Please enter serving for",
        digits : "Please enter number only"
      },
      prep_time: {
        required : "Please enter prep time",
        digits : "Please enter number only"
      },
      cook_time: {
        required : "Please enter cook time",
        digits : "Please enter number only"
      },
      
     
      "tips[]":"Please enter tips",
      "title[]":"Please enter title",
      "directions[]": "Please enter directions",
      "category[1]":"Please enter title",
      "ingredient[1][]":"Please enter ingredients",
      "quantity[1][]": "Please enter quantity",
      "unit[1][]": "Please select unit"
    }

  });
 
//valdidation code for add recipe in recipe management form
$("#recipeEditForm").validate({
  rules: {
  
    recipe_name: {
      noSpace: true,
      required: true,
    },
    "meal_type[]": "required",
    volume: "required",
    calories: {
      required: true,
      number: true
   },
    protein:{
     required: true,
     number: true
   },
    cuisine_style: "required",
    serving_for: {
        required: true,
        digits: true,
      },
      prep_time: {
        required: true,
        digits: true,
      },
     
      cook_time: {
        required: true,
        digits: true,
      },
    "tips[]":{
      noSpace: true,
      required: true,
    },
    "title[]":{
      noSpace: true,
      required: true,
    },
    "directions[]": {
      noSpace: true,
      required: true,
    },
    "category[1]":{
      noSpace: true,
      required: true,
    },
    "ingredient[1][]":{
        noSpace: true,
        required: true,
      },
    "quantity[1][]": "required",
    "unit[1][]": "required",
    allegic_ingredient:"required"
  },
  messages: {
   
    recipe_name: "Please enter recipe name",
    "meal_type[]": "Please select meal type",
    volume:"Please select volume",
    calories: {
        required : "Please enter calories",
        number : "Please enter number only"
      },
    protein: {
        required : "Please enter protein",
        number : "Please enter number only"
      },
    cuisine_style:"Please enter cuisine style",
    serving_for: {
        required : "Please enter serving for",
        digits : "Please enter number only"
      },
      prep_time: {
        required : "Please enter prep time",
        digits : "Please enter number only"
      },
      cook_time: {
        required : "Please enter cook time",
        digits : "Please enter number only"
      },
      
    "tips[]":"Please enter tips",
    "title[]":"Please enter title",
    "directions": "Please enter directions",
    "category[1]":"Please enter title",
    "ingredient[1][]":"Please enter ingredients",
    "quantity[1][]": "Please enter quantity",
    "unit[1][]": "Please select unit",
    //allegic_ingredient:"Please check at least one allegic ingredient"
  }
});

  
  
//   $(document).ready(function(){
//     $("#checkboxAllegic").click(function() {

//             //Reference the Group of CheckBoxes and verify whether at-least one CheckBox is checked.
//             var checked = $("#tblFruits input[type=checkbox]:checked").length;
 
//             //Set the Valid Flag to True if at-least one CheckBox is checked.
//             var isValid = checked > 0;
 
//             //Display error message if no CheckBox is checked.
//             $("#spnError")[0].style.display = isValid ? "none" : "block";
//         });
//  });

// $(document).ready(function(){
//     $("#checkboxAllegicIngredient").click(function() {

//             //Reference the Group of CheckBoxes and verify whether at-least one CheckBox is checked.
//             var checked = $("#tblFruits input[type=checkbox]:checked").length;
 
//             //Set the Valid Flag to True if at-least one CheckBox is checked.
//             var isValid = checked > 0;
 
//             //Display error message if no CheckBox is checked.
//             $("#spnError")[0].style.display = isValid ? "none" : "block";
//         });
//  });

// 	$(document).ready(function() {
//     $(".abc").click(function(){
//         var meal_type = [];

//         var checked = $(".abc option:selected").length;
 
//                     //Set the Valid Flag to True if at-least one CheckBox is checked.
//         var isValid = checked > 0;
//         $("#spnError")[0].style.display = isValid ? "none" : "block";
         
      
//     });
// });
	
