$(document).ready(function () {
    //navbar animation code , slide up and down.
    $("#home").click(function () {
        $("#slide1").slideToggle(500);
        $("#slide2").slideUp(500);
        $("#slide3").slideUp(500);
        $("#slide4").slideUp(500);

        var target = $(event.target);
        if (target.is("li")) {
            target.children().toggle();
        }

    })

    $("#news").click(function () {
        $("#slide2").slideToggle(500);
        $("#slide1").slideUp(500);
        $("#slide3").slideUp(500);
        $("#slide4").slideUp(500);
    })


    $("#contact").click(function () {
        $("#slide3").slideToggle(500);
        $("#slide1").slideUp(500);
        $("#slide2").slideUp(500);
        $("#slide4").slideUp(500);
    })


    // games description animation 

    $(".empty").mouseover(function () {
        $("#fstdiv").css("right", "0px")
    })

    $(".empty").mouseover(function () {
        $("#scnddiv").css("right", "0px")
    })

    $(".empty").mouseover(function () {
        $("#thrddiv").css("right", "0px")
    })


    $(".empty").mouseover(function () {
        $(".fstp1 ,.fstp2 ,.fstp3,.fstp4,.fstp5,.fstp6,.fstp7,.fstp8,.fstp9,.fstp10,.fstp11,.fstp12").css("left", "0px")
    })









    // random ID, this code is to provide random number to use it as id for the user.
//it combine the fname of thuser with random number of 5 digits
    $("#submit").click(function () {
        var x = $("#fname").val() + Math.floor((Math.random() * 10000) + 1);
        var y = $("#lname").val();
        var z = $("#emale").val();
        var r = $("#pass").val();
        alertify.alert(" ", " " + "THE USER ID IS : " + " " + x + "<br>" + "password:" + " " + r);
    });

});



// On click bullet shot sound, (sound effect on the website)
function PlaySound(melody) {

    var path = "mm.mp3"
    var snd = new Audio("m.mp3");
    snd.play();
};




// video slides 

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}


//The errors that might appers here is because that this is external java script code and it cant see the variables comes from the HTML file. and the functions used in it.
