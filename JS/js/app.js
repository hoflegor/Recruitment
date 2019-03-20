//OBIEKT I PRZEKIEROWANIE

var basic = {

    redirect : function (param) {

        if (param === 1){ /* === -> sprawdzenie typu i wartości*/
        window.location.href = "https://developer.mozilla.org/pl/docs/Web/JavaScript";
    }
    else {
        alert("Przekazano nieprawidłową wartość");
    }
    }

};

/*PRZEKIEROWANIE*/
// basic.redirect(1);

/*BRAK PRZEKIEROWANIA & ALERT*/
// basic.redirect("tekst");

////////////////////////////////////////////////////////////////////////////////////////

/*ŁAPANIE INPUTU I ZMIANA WARTOŚCI*/
$(function () {

    $('#test').prop('value', 'test OK');

});
