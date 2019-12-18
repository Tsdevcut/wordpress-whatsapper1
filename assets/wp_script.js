window.onload=function(){

   //var number = "annivasary";
   var numberdiv = document.getElementById('whatsnumber');
    var number = numberdiv.getAttribute('data-whatsnumber');
    var message = "I want to book...";

   document.getElementById("whatsnumber").addEventListener("click", function(){
     window.location = 'https://api.whatsapp.com/send?phone=' + number + '&text=%20'+ message;
  });

}
