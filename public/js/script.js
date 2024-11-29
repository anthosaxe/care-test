window.onload = function () {
    setTimeout(function () {
        const loader = document.querySelector('.containLoader');
        loader.style.display = 'none';
    }, 1000);
};

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar-area");
    const banner = document.querySelector(".banner-type");

    if (navbar && banner) {
        const navbarHeight = navbar.offsetHeight; // Récupère la hauteur actuelle de la navbar
        banner.style.marginTop = `${navbarHeight}px`; // Applique dynamiquement une marge équivalente
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector('.navbar-area');
    const mainContent = document.querySelector('.main-content');

    if (navbar && mainContent) {
        const navbarHeight = navbar.offsetHeight;
        mainContent.style.paddingTop = `${navbarHeight}px`;
    }
});

$(document).ready(function () {
    $(function () {
        AOS.init({
            disable: function () {
                var maxWidth = 992;
                return window.innerWidth < maxWidth;
            }
        });
    });
    var $status = $('.countPage');

    $('.myform').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0);
        if (i > 8) {
            i = 8;
        }
        let count = slick.slideCount - 3;
        $status.html("<span>0" + i + '</span>/' + "0" + count);
        if (i < 2) {
            $(".back").addClass("d-none");
        }
    });
    $('.myform2').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0);
        if (i > 8) {
            i = 8;
        }
        let count = slick.slideCount - 2;
        $status.html("<span>0" + i + '</span>/' + "0" + count);
        if (i < 2) {
            $(".back").addClass("d-none");
        }
    });


    $('.myform').slick({
        infinite: false,
        slideToShow: 1,
        arrows: true,
        draggable: false
    });
    $('.myform2').slick({
        infinite: false,
        slideToShow: 1,
        arrows: true,
        draggable: false
    });

    $(document).on('click', '.last input', function (e) {
        $(".slick-next").trigger('click');
        $(".countPage").addClass("d-none");

    });
    $(document).on('click', '.lastCardio', function (e) {
        $(".countPage").addClass("d-none");
    });
    $(document).on('click', '.final', function (e) {
        $(".slick-next").trigger('click');
    });
    $(document).on('click', '.toNext input', function (e) {
        $(".slick-next").trigger('click');
    });
    $(document).on('click', '.first', function (e) {
        $(".slick-next").trigger('click');
        $(".countPage").removeClass("d-none");
    });
    $(document).on('click', '.back', function (e) {
        $(".countPage").removeClass("d-none");
        $(".slick-prev").trigger('click');
    });
    $(document).on('click', '.second input', function (e) {
        $(".back").removeClass("d-none");

    });

    let age = 0;
    let atteint = 0;
    let taille = 0;
    let activite = 0;
    let fruit = 0;
    let tension = 0;
    let sucre = 0;
    let indice = 0;

    let ageText = "";
    let atteintText = "";
    let tailleText = "";
    let activiteText = "";
    let fruitText = "";
    let tensionText = "";
    let sucreText = "";
    let indiceText = "";

    $('input[name="age"]').change(function () {

        age = $('input[name="age"]:checked').val();
        ageText = $("input[name=age]:checked").next().text();
        age = parseInt(age);
    });
    $('input[name="atteint"]').change(function () {

        atteint = $('input[name="atteint"]:checked').val();
        atteintText = $('input[name="atteint"]:checked').next().text();
        atteint = parseInt(atteint);

    });
    $('input[name="taille"]').change(function () {

        taille = $('input[name="taille"]:checked').val();
        tailleText = $('input[name="taille"]:checked').next().text();
        taille = parseInt(taille);

    });
    $('input[name="activite"]').change(function () {

        activite = $('input[name="activite"]:checked').val();
        activiteText = $('input[name="activite"]:checked').next().text();
        activite = parseInt(activite);

    });
    $('input[name="fruit"]').change(function () {

        fruit = $('input[name="fruit"]:checked').val();
        fruitText = $('input[name="fruit"]:checked').next().text();
        fruit = parseInt(fruit);

    });
    $('input[name="tension"]').change(function () {

        tension = $('input[name="tension"]:checked').val();
        tensionText = $('input[name="tension"]:checked').next().text();
        tension = parseInt(tension);

    });
    $('input[name="sucre"]').change(function () {

        sucre = $('input[name="sucre"]:checked').val();
        sucreText = $('input[name="sucre"]:checked').next().text();
        sucre = parseInt(sucre);

    });
    $('input[name="indice"]').change(function () {

        indice = $('input[name="indice"]:checked').val();
        indiceText = $('input[name="indice"]:checked').next().text();
        indice = parseInt(indice);

    });

    $('.last input').click(function () {
        $('input[name="indice"]').change(function () {

            indiceText = $('input[name="indice"]:checked').next().text();
            $('.recap.height').empty();
            $('.recap.height').append(indiceText);

        });
        // $('input[name="indice"]').change(function(){ 
        //     
        //    // indice = 0;
        //    indice = $('input[name="indice"]:checked').val();
        //    console.log("second" + indice);
        //   
        //  });
        $('.recap').empty();
        $('.recap.one').append(ageText);
        $('.recap.two').append(atteintText);
        $('.recap.three').append(tailleText);
        $('.recap.four').append(activiteText);
        $('.recap.five').append(fruitText);
        $('.recap.six').append(tensionText);
        $('.recap.seven').append(sucreText);

    });

    $('.final').click(function () {

        let total = 0;
        // console.log("atteint"+atteint);
        // console.log("age"+age);
        // console.log("taille"+taille);
        // console.log("activite"+activite);
        // console.log("fruit"+fruit);
        // console.log("tension"+tension);
        // console.log("sucre"+sucre);
        // console.log("indice"+indice);
        total = atteint + age + taille + activite + fruit + tension + sucre + indice;
        let resultat = "";
        if (total < 7) {
            resultat = "<span class='Green'>Faible</span><p class='p-result'>Bonne nouvelle, vous avez peu de risque de développer un diabète dans les 10 ans. Continuez de mener une vie saine en mangeant équilibré et en faisant suffisamment d’exercices.</p>";
        } else if (total >= 7 && total <= 12) {
            resultat = "<span class='Yellow'>Modéré</span><p class='p-result'>Votre risque de développer un diabète dans les 10 ans est légèrement élevé. En suivant une alimentation saine et équilibrée et en faisant suffisamment d’exercices vous pouvez réduire considérablement votre risque. Je retrouve des conseils sur un mode de vie sain <a href='https://ohmedias.com/Clients/care-test/fr/conseils/' target='_blank'>ici</a>.</p>";
        } else {
            resultat = "<span class='Red'>Élevé</span><p class='p-result'>Vous êtes exposé à un risque élevé de développer un diabète dans les 10 ans. Consultez rapidement votre médecin généraliste pour un effectuer un bilan approfondi. Je consulte un <a href='https://ohmedias.com/Clients/care-test/fr/mdecins-praticiens' target='_blank'>médecin généraliste</a>.</p>";
        }
        $(".resultat").empty();
        $(".resultat").append(resultat);
        $(".resultatFirst").empty();
        $(".resultatFirst").append(resultat);
        // console.log(total + " " + resultat);
    });


    $(".calcul input").keyup(function () {
        var val1 = +$(".value1").val();
        var val2 = +$(".value2").val();
        var imc = (val1 / (val2 * val2)).toFixed(2);
        // var imcResultat = imc.slice(0, 4);
        $("#result").val(imc);

    });
    $('.download').click(function () {
        $('.toShow').removeClass('d-none');
        $('.toShow').addClass('paddingToprint');
        html2canvas($(".toDownload")[0]).then(canvas => {
            //document.body.appendChild(canvas)

            //var canvas = document.getElementById("my-canvas");
            canvas.toBlob(function (blob) {
                saveAs(blob, "print.png");
            });

        });
    });

    // Second test

    $(document).ready(function () {
        let sexe = "";
        let fumeur = "";
        let age2 = "";
    
        // Capture les valeurs des inputs
        $('input[name="sexe"]').change(function () {
            sexe = $('input[name="sexe"]:checked').val();
        });
    
        $('input[name="fumeur"]').change(function () {
            fumeur = $('input[name="fumeur"]:checked').val();
        });
    
        $('input[name="age2"]').change(function () {
            age2 = $('input[name="age2"]:checked').val();
    
            // Assurez-vous que toutes les valeurs sont définies
            if (sexe && fumeur && age2) {
                // Créez dynamiquement le chemin de l'image en utilisant window.location.origin
                let baseUrl = window.location.origin + "/media/risque_cardio";  // Base URL
    
                // Assemblez le chemin complet
                let imagePath = `${baseUrl}/${sexe}/${fumeur}/${age2}.svg`;
    
                // Supprimez les anciennes images si nécessaire
                $(".votreRisqueVasculaire .cardio-img").remove();
    
                // Ajoutez la nouvelle image
                let image = `<img class="cardio-img" src="${imagePath}" alt="Risque cardiovasculaire">`;
                $(".votreRisqueVasculaire").append(image);
    
                console.log("Chemin généré :", imagePath);
            } else {
                console.log("Toutes les options ne sont pas encore sélectionnées.");
            }
        });
    });
    
    // Cardio help popup
    $(".popup-click").click(function () {
        $('.popup-wrapper').removeClass('d-none')
        $('.cardio-img.abs').removeClass('d-none')
        opacity($('.cardio-img.abs'));
        opacity($('.popup-wrapper'));
        $('.popup-wrapper-2').addClass('d-none')
        $('.popup-wrapper-2').css('opacity', '0')
    });

    $(".popup-click-2").click(function () {
        $('.popup-wrapper-2').removeClass('d-none')
        opacity($('.popup-wrapper-2'));
        $('.popup-wrapper').addClass('d-none')
        $('.cardio-img.abs').addClass('d-none')
        $('.popup-wrapper').css('opacity', '0')
        $('.cardio-img.abs').css('opacity', '0')
    });

    function opacity(elem) {
        $(elem).animate({
            opacity: 1,
        }, 1000);
    }

    // SUBMENU
    $('.menu a.list2').hover(
        function () {
            $('.submenu2').show();
        },
        function () {
            $('.submenu2').hide();
        }
    );
    $('.submenu2').hover(
        function () {
            $('.submenu2').show();
        },
        function () {
            $('.submenu2').hide();
        }
    );
    $('.menu a.list3').hover(
        function () {
            $('.submenu3').show();
        },
        function () {
            $('.submenu3').hide();
        }
    );
    $('.submenu3').hover(
        function () {
            $('.submenu3').show();
        },
        function () {
            $('.submenu3').hide();
        }
    );


    // MENU

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 250) {
                $('.menu').addClass('menu_scrolled');
            } else {
                $('.menu').removeClass('menu_scrolled');
            }
        });
    });

    $('.hamburger').click(function () {
        $(this).toggleClass("is-active");
        $('.menuResp').toggleClass('open');
    });

    function preloader() {
        $('.containLoader').delay(500).fadeOut('slow', function () { });
    }

    window.onload = preloader();
});