


  function cashsubmit()
{

  var a=document.forms['supplierform']['supname'].value;

  if(a==null || a=="")
  {


  alert("Please input supplier name!");
  document.supplierform.supname.focus();
  return false;
  }

  var b=document.forms['supplierform']['contactnum'].value;

  if(b==null || b=="")
  {


  alert("Please input supplier contact number!");
  document.supplierform.contactnum.focus();
  return false;
  }


    var c=document.forms['supplierform']['add'].value;

  if(c==null || c=="")
  {


  alert("Please input supplier address!");
  document.supplierform.add.focus();
  return false;
  }

   else
  {
    var answer = confirm("Register?")
	if (!answer){
   return false;
	            }
  }
}





function validate()
{
  var o=document.forms["posform"]["quantity"].value;
  var p=document.forms["loginform"]["pass"].value;
      if(!isNaN(o))
  {
    alert("Please input only a number!");
    return false;
  }
  else
  {
    alert("please input a number! ");
  }

  if(p==null || p=="")
  {
    alert("Please input correct password!");
    return false;
  }
}




function validatecash()
{
  var o=document.forms["cashform"]["cash"].value;

  if(o==null || o=="")
  {
    alert("Please input  cash!");
    return false;
  }

  if(o)
  {
    alert("Please input correct password!");
    return false;
  }
}


function formpos()
{

   var b=document.forms["posform"]["quantity"].value;
        if(b==null || b=="")
  {
    alert("Please input quantity!");
    document.posform.quantity.focus();
    return false;
  }


  else
  {
    var answer = confirm("Add the order?")
	if (!answer){
   return false;
	}
  }
}


      function cashsubmit()
{


   var c=document.forms["cashform"]["cash"].value;
        if(c==null || c=="")
  {
    alert("Please input cash!");
    document.cashform.cash.focus();
    return false;
  }

  else
  {
    var answer = confirm("Add the order?")
	if (!answer){
   return false;
	}
  }
}




function payment()
{
  var ff=document.forms["formpay"]["payment_name"].value;
   if(ff==null || ff=="")
  {
    alert("Please input payment name!");
     document.formpay.payment_name.focus();
    return false;
  }

    var fff=document.forms["formpay"]["payment_description"].value;
   if(fff==null || fff=="")
  {
    alert("Please input payment description!");
    document.formpay.payment_description.focus();
    return false;
  }
   var ffff=document.forms["formpay"]["schoolyear"].value;
   if(ffff=="Please Select")
  {
    alert("Please select school year!");
    document.formpay.payment_name.focus();
    return false;
  }
}


function cash()
{
 var o=document.forms["Fcashform"]["cash"].value;

  if(o==null || o=="")
  {
    alert("Please input  cash!");
    return false;
  }

  if(o)
  {
    alert("Please input correct password!");
    return false;
  }
}



function cash()
{
    var eee=document.forms['login_form']['uname'].value;
     var xxx=document.forms['login_form']['pass'].value;
       if (eee==null || eee=="" && xxx=="")
    {
      alert("Please Fill in the form!");
      return false;
    }

 if(eee==null || eee=="")
    {
      alert("Please Input username!!!");
      return false;
    }


    if(xxx=="")
    {
      alert("Please input your password!!!");
      return false;
    }




}


function exist()
{
 var w=document.forms['existing']['existsy'].value;
    if(w=="Please Select")
    {
      alert("Please select School Year!!!");
      document.existing.existsy.focus();
      return false;
    }

    var x=document.forms['existing']['existsem'].value;
    if(x=="Please Select")
    {
      alert("Please select semester!!!");
      document.existing.existsem.focus();
      return false;
    }

    var y=document.forms['existing']['existyl'].value;
    if(y=="Please Select")
    {
      alert("Please select Year Level!!!");
      document.existing.existyl.focus();
      return false;
    }
    else
    {
       {
    var answer = confirm("Add the data?")
	if (!answer){
   return false;
	}
  }
    }
}















