$(document).ready(function(){
    // BOUTON CONNEXION
    $(".formulaire").hide();
    
    $(".connexion").click(function(){
        $(".formulaire").show();    
    });
    
    $("#fermer").click(function(){
        $(".formulaire").hide();
        $(".formulaire2").hide();  
    });
    
    // BOUTON INSCRIRE
    $(".formulaire2").hide();
    
    $(".inscrire").click(function(){
        $(".formulaire2").show();    
    });
    
     $("#fermer2").click(function(){
        $(".formulaire2").hide();  
    });
    
});