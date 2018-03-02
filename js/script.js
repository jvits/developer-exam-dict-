$(document).ready(function(){
    
    $.get("php/index.php",{},function(data){
        $("#mainContent").html(data);
    });

});