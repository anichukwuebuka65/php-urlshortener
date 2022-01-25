$(document).ready(function(){
    $("#urlcontainer").hide();

    $("#search_button").click(function(){

         longUrl= $("#url_input").val();
        $.get("shorten.php",{url: longUrl},function(data,status){

            if(status == "success"){

            var  result = JSON.parse(data);
             $("#longurl").text(result.long_url);
             $("#shorturl").text("localhost/urlshortener/redirect/"+ result.short_url).attr("href","redirect.php?link="+ result.short_url); 
             $("#urlcontainer").show(); 

             $("#copy_button").click(function(){
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($("#shorturl").text()).select();
                document.execCommand("copy");
                $temp.remove();
             });
    
            };
        });
    });
    
    })

  