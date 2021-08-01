function validate()
      { 
     
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 
      if( document.Feedback.contact_name.value == "")
   {
     alert( "Please provide your Name!" );
     document.Feedback.contact_name.focus() ;
     return false;
   }
 
      if( document.Feedback.contact_name.value.length > 20 )
   {
     alert( "Name Should be between 20 characters!" );
     document.Feedback.contact_name.focus() ;
     return false;
   }
    if (!/^[a-zA-Z]*$/g.test(document.Feedback.contact_name.value)) {
        alert("numbers and special characters not allowed in name field");
        document.Feedback.contact_name.focus();
        return false;
    }
 
   if( document.Feedback.contact_no.value == "" ||
           isNaN( document.Feedback.contact_no.value) ||
           document.Feedback.contact_no.value.length != 10 || 
           document.Feedback.contact_no.value == /^\d{10}$/)
   {
     alert( "Please provide a valid Mobile No" );
     document.Feedback.contact_no.focus() ;
     return false;
   }

      if( document.Feedback.contact_subject.value == "")
   {
     alert( "Please provide your Subject!" );
     document.Feedback.contact_subject.focus() ;
     return false;
   }

      if( document.Feedback.contact_message.value == "")
   {
     alert( "Please provide your Message!" );
     document.Feedback.contact_message.focus() ;
     return false;
   }
 
   if(document.Feedback.contact_email.value.match(mailformat))
   {
    document.form1.text1.focus();
    return true;
   }

   else
   {
    alert("Enter a valid email address!");
    document.Feedback.contact_email.focus();
    return false;
   }
var frm = document.getElementsByName('Feedback')[0];
frm.submit();
frm.reset();
return false;
}
   }
