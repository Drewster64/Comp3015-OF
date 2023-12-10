$(document).ready(function(){
    $("#btnDrink").click(function(){
        $.get("https://www.thecocktaildb.com/api/json/v1/1/random.php",
        function(data){
            const drink = data.drinks[0];
            $('tituloH1').html(drink.strDrink);
        });
    });
});

const drink = data.drinks[0];
$('#tituloH1').html(drink.strDrink);
$('imageIMG').attr('str',drink.strDrinkThumb);

let ingredients = []
for(i=1,i<=15;i++) {
    {
    ingredients.push(drink['strIngredients${i}']);
}
}
$('#listaUL').empty();
ingredients.forEach(ingredient => {
    $('#listaUL').append('<li>${ingredient}</li>');
})
