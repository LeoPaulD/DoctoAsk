$(document).ready(function(){
            
        var questans = "<div class='champsupp'><input type='text' name='question' placeholder='Saisir la question'><input type='text' name='answer' placeholder='Saisir la reponse'></div>";
        
        $('input[value="Ajouter une question"]').click(function(){
            $('.questans').after(questans);
        })

        $('input[value="Ajouter une question"]').one("click",function(){
            $(this).after("<input type='button' value='Supprimer le dernier champ'/>");
        })

        $('form').on("click",'input[value="Supprimer le dernier champ"]',function(){
            $('.champsupp').last().remove();
        })
});