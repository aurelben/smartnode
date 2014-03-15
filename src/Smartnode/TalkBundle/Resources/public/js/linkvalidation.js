
 $(document).ready(function(){
vvar flagcount = 0;
     $("#mon_textarea").keyup(function(){

         var inputVal = $(this).val();
         var yt = new RegExp("youtube.com/v/");
         var yt2 = new RegExp("youtube.com/embed/");
         //var yt3 = new RegExp("youtube.com/watch?NR=1&feature=endscreen&v=");
         var yt4 = new RegExp("youtube.com/watch");
         var yt5 = new RegExp("youtu.be/");

     switch(true) {
    
        case yt.test(inputVal) && flagcount===0: 
            alert("yt");
             var end = inputVal.indexOf("/v/");
             var vidid = inputVal.substr(end+3,11);
             $("#vid").prepend("<img src=\"http://img.youtube.com/vi/"+vidid+"/2.jpg\"></img>");
             alert(vidid);
             flagcount=1;
            break;
            
        case yt2.test(inputVal) && flagcount===0:
            alert("yt2");
              var end = inputVal.indexOf("/embed/");
             var vidid = inputVal.substr(end+7,11);
             $("#vid").prepend("<img src=\"http://img.youtube.com/vi/"+vidid+"/2.jpg\"></img>");
             alert(vidid);
             flagcount=1;
            break;
            
        case yt3.test(inputVal) && flagcount===0:
            alert("yt3");
             var end = inputVal.indexOf("?NR=1&feature=endscreen&v=");
             var vidid = inputVal.substr(end+26,11);
             $("#vid").prepend("<img src=\"http://img.youtube.com/vi/"+vidid+"/2.jpg\"></img>");
             alert(vidid);
             flagcount=1;
            break;
    
        case yt4.test(inputVal) && flagcount===0:
            alert("yt4");
             var end = inputVal.indexOf("/watch?v=");
             var vidid = inputVal.substr(end+9,11);
             $("#vid").prepend("<img src=\"http://img.youtube.com/vi/"+vidid+"/2.jpg\"></img>");
             alert(vidid);
             flagcount=1;
            break;
    
        case yt5.test(inputVal) && flagcount===0:
            alert("yt5");
             var end = inputVal.indexOf(".be/");
             var vidid = inputVal.substr(end+3,11);
             $("#vid").prepend("<img src=\"http://img.youtube.com/vi/"+vidid+"/2.jpg\"></img>");
             alert(vidid);
             flagcount=1;
            break;
    
    }
     });


}


verifvideo("#mon_textarea")

 });

 /*$(document).ready(function(){
      $("#monFormulaire").change.validate();
    });
    //définir les règles de validation du formulaire
    $(document).ready(function() {
   $("#formStep").validate({
      rules: {
         "montextarea":{
            "required": true,
            "minlength": 2,
            "maxlength": 60000,
            //utilisation de la regex
            "regex": /^(\+33\.|0)[0-9]{9}$/,

         }}

  })
});

 //Redéfinir les messages d’erreurs

 jQuery.extend(jQuery.validator.messages, {
  required: "votre message",
  remote: "votre message",
  email: "votre message",
  url: "votre message",
  date: "votre message",
  dateISO: "votre message",
  number: "votre message",
  digits: "votre message",
  creditcard: "votre message",
  equalTo: "votre message",
  accept: "votre message",
  maxlength: jQuery.validator.format("votre message {0} caractéres."),
  minlength: jQuery.validator.format("votre message {0} caractéres."),
  rangelength: jQuery.validator.format("votre message  entre {0} et {1} caractéres."),
  range: jQuery.validator.format("votre message  entre {0} et {1}."),
  max: jQuery.validator.format("votre message  inférieur ou égal à {0}."),
  min: jQuery.validator.format("votre message  supérieur ou égal à {0}.")
});

//Ajouter une méthode – Expression Régulière (Regex)

jQuery.validator.addMethod(
  "regex",
   function(value, element, regexp) {
       if (regexp.constructor != RegExp)
          regexp = new RegExp(regexp);
       else if (regexp.global)
          regexp.lastIndex = 0;
          return this.optional(element) || regexp.test(value)

   },"erreur expression reguliere"
);*/