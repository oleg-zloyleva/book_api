$(document).ready(function () {

    // === card number === //
    var cards = {
        37: {0: "American Express", 1: "", 2: "y", 3: 15, 4: "l"},
        4: {0: "Visa", 1: "", 2: "y", 3: ""},
        4026: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        417500: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        4405: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        4508: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        4844: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        4913: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        4917: {0: "Visa Electron", 1: "", 2: "y", 3: 16, 4: "l"},
        5: {0: "Mastercard", 1: "", 2: "y", 3: 16, 4: "l"},
        56: {0: "Maestro", 1: "", 2: "y", 3: ""},
        63: {0: "Maestro", 1: "", 2: "y", 3: ""},
        65: {0: "Discover Card", 1: "", 2: "y", 3: ""},
        67: {0: "Maestro", 1: "", 2: "y", 3: 16, 4: "l"},
    };

    var cardlen = "";
    var cardchk = "";

    $(".overlayFormMember #card").bind("propertychange input paste", function () {

        cardno = parseInt($(".overlayFormMember #card").val());

        if ((cardno == null) || (cardno == undefined) || (cardno == "")) {

            var cardtype = "";
            $("body").removeClass("invalid");

        } else if ((cards[cardno] != null) || (cards[cardno] != undefined)) {

            cardtype = cards[cardno][0];

            if (cardtype.toLowerCase() == 'american express') {
                $('#cvvCode').attr('maxlength', '4').attr('placeholder', '0000').val('');
            } else {
                $('#cvvCode').attr('maxlength', '3').attr('placeholder', '000').val('');
            }

            if ((cards[cardno][1] != null) && (cards[cardno][1] != "") && (cards[cardno][1] != undefined)) {
                cardtype = cards[cardno][1];
            }

            cardlen = cards[cardno][3];
            cardchk = cards[cardno][4];

            if (cards[cardno][2] == "n") {
                $("body").addClass("invalid");
            } else {
                $("body").removeClass("invalid");
            }
        } else {
            return false;
        }

        // @todo - Add Proper length checks
        if ((cardno.length == cardlen) && (cardlen != "")) {
            alert("Correct Card Number Length");
            // @ todo - Add Luhn Checking
            if ((cardchk == "l")) {
                alert("Perfom Luhn Check");
            }
        }

        $(".overlayFormMember #imgCardType").attr('src', '/img/svg/' + cardtype.toLowerCase() + '.svg');
        $(".overlayFormMember #cardType").val(cardtype);
    });


    $('.btnClosse').on('click', function () {
        $('.overlayFormMember').fadeOut();
    });


    // === ВВОД ТОЛЬКО ЦИФР === //
    $('.only-number').bind("change keyup input click", function () {
        if ($(this).val().match(/[^0-9]/g)) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        }
    });


    // === ВВОД ТОЛЬКО БУКВ === //
    $('.only-letters').bind("change keyup input click", function () {
        if ($(this).val().match(/[^a-zA-Z]/g)) {
            $(this).val($(this).val().replace(/[^a-zA-Z]/g, ''));
        }
    });


    // === INPUT MASK === //
    var cardNumber = new Cleave('.card-number-mask', {
        creditCard: true,
        delimiter: ' ',
    });

    var expDate = new Cleave('.exp-date-mask', {
        date: true,
        datePattern: ['m', 'y']
    });

});