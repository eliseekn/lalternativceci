$(document).ready(function() {

    // format de la date
    var monthNames = [
        "Janvier", "Février", "Mars", "Avril",
        "Mai", "Juin", "Juillet", "Aout", "Septenbre",
        "Octobre", "Novembre", "Décembre"
    ];
    //=============formatage date francais=============
    function formateDateRsetApi(date) {
        var tempDate = date.split('-');
        return tempDate[2].substr(0, 2) + ' ' + monthNames[tempDate[1] - 1] + ' ' + tempDate[0];
    }


        //construit un element du blog (Photo + Titre + Description) l'alternative

        function buidBlogElementAlt(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.content.rendered;
        var bigString=  '<div  class="col-md-12 mb-4">'+
            '<div  class="card">' +
             '<div class="view overlay">' +
            '<a href="article?id=' + elem.id + '"> <img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></a></div>'+
            '<div class="mx-1">';
        if (single) {
            bigString += '<h5 class=" text-center perso_textBleu1">' + elem.title.rendered + '</h5>';
        } else {
            bigString += '<h5 class="text-center perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h5>';
        }
        bigString += '<hr class="mx-4 red title-hr">'+
            '<p class="dark-grey-text mb-3">' + bigto.substr(0, 300) + '...</p></div></div></div>';
            return bigString;

        }

        //construit un element du blog (Photo + Titre) l'alternative reportage

        function buidBlogElementAlt2(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.content.rendered;
        var bigString= '<div  class="col-md-6 mb-4">'+
            '<div  class="card">' +
            '<div class="view overlay">' +
            '<a href="article?id=' + elem.id + '"> <img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></a></div>'+
            '<div class="mx-1">';
        if (single) {
            bigString += '<h5 class="text-center perso_textBleu1">' + elem.title.rendered + '</h5>';
        } else {
            bigString += '<h5 class="text-center perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h5></div></div></div>';
        }
            return bigString;

        }

        //construit un element du blog (Photo + Titre) l'alternative bas de page

        function buidBlogElementAltBas(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.content.rendered;
        var bigString= '<div  class="col-md-4 mb-4">'+
            '<div  class="card">' +
            '<div class="view overlay">' +
            '<a href="article?id=' + elem.id + '"> <img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></a></div>'+
            '<div class="mx-1">';
        if (single) {
            bigString += '<h5 class="text-center perso_textBleu1">' + elem.title.rendered + '</h5>';
        } else {
            bigString += '<h5 class="text-center perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h5></div></div></div>';
        }
            return bigString;

        }

        //construit un element du blog (Titre + Description) l'alternative Editorial
        function buidBlogElementAltEdito(elem, date, single) {
        var bigto = elem.content.rendered;
        var bigString=  '<p class="mt-3 dark-grey-text font-small text-center">';
        if (single) {
            bigString += '<em>' + bigto.substr(0, 300) + '</em>';
        } else {
            bigString += '<em><a href="article?id=' + elem.id + '">' +
            bigto.substr(0, 278) + '[...]</a></em><p> ';
        }
            return bigString;
        }



        //construit un element du blog (Photo + Titre) l'alternative Actualité

        function buidBlogElementAltActu(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.title.rendered;
        var bigString= '<div  class="col-5">'+
            '<div class="view overlay">' +
            '<a href="article?id=' + elem.id + '"> <img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></a></div></div>'+
            '<div class="col-7">';
        if (single) {
            bigString += '<h6 class="mt-0 font-small">' +  bigto.substr(0, 35) + '...</h6></div>';
        } else {
            bigString += '<h6 class="mt-0 font-small"><a href="article?id=' + elem.id + '">' +
            bigto.substr(0, 35) + '...</a></h6>';
        }
            return bigString;

        }

        //construit un element du blog (Photo + Titre) l'alternative Vision

        function buidBlogElementAltVision(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigString= '<div  class="col-md-6 mb-4">'+
            '<div  class="card">' +
            '<div class="view overlay">' +
            '<a href="article?id=' + elem.id + '"> <img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></a></div>'+
            '<div px-1>';
        if (single) {
            bigString += '<h5 class=" perso_textBleu1">' + elem.title.rendered + '</h5>';
        } else {
            bigString += '<h5 class=" perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h5>';
        }
            bigString += '<hr class="mx-4 red title-hr">'+
            '<p class="dark-grey-text mb-3">' + elem.content.rendered + '</p></div></div></div>';
            return bigString;
        }

        //construit un element du blog SINGLE (Photo + Titre + Description) l'alternative

        function buidBlogElementAltSingle(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.content.rendered;
        var bigString=  '<div  class="col-md-12 mb-4">'+
            '<div  class="card">' +
                '<div class="view overlay">' +
            '<img src="'+ elem.featured_image_url +'"class="card-img-top img-thumbnail"></div>'+
            '<div class="mx-1">';
        if (single) {
            bigString += '<h5 class=" text-center perso_textBleu1">' + elem.title.rendered + '</h5>';
        } else {
            bigString += '<h5 class="text-center perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h5>';
        }
        bigString += '<hr class="mx-4 red title-hr">'+
            '<p class="dark-grey-text mb-3">' + bigto+ '</p></div></div></div>';
            return bigString;

        }


        //construit un element du blog MOUVEMENT (Photo + Titre + Description) l'alternative 

        function buidBlogElementAltMvt(elem, date, single) {
            if (elem.featured_image_url === undefined) {
                elem.featured_image_url = 'images/img1_webysee.jpg';
            }
        var bigto = elem.content.rendered;
        var bigString=  '<div  class=" col-md-12 mb-4">'+
            '<div class="mx-4">';
        if (single) {
            bigString += '<h1 class=" text-center perso_textBleu1">' + elem.title.rendered + '</h1>';
        } else {
            bigString += '<h1 class="text-center perso_textBleu1"><a href="article?id=' + elem.id + '">' +
                elem.title.rendered + '</a></h1>';
        }
        bigString += '<hr class="mx-4 red title-hr">'+
            '<p class="dark-grey-text ">' + bigto+ '</p></div></div>';
            return bigString;

        }






            // -------------------------
            // -----ALTernativeCI--------
            // ---------------------------

    /*   gestion de blog Accueil A la UNE              */
    if (document.getElementById('blog-accueilUne1')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=2&per_page=1';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilUne1").append(buidBlogElementAlt(element, dateFormated, false));
            });
        });
    }

    /*   gestion de blog Accueil deuxième UNE              */
    if (document.getElementById('blog-accueilUne2')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=7&per_page=1';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilUne2").append(buidBlogElementAlt(element, dateFormated, false));
            });
        });
    }

    /*   gestion de blog Accueil Editorial             */
    if (document.getElementById('blog-accueilEdito')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=9&per_page=1';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilEdito").append(buidBlogElementAltEdito(element, dateFormated, false));
            });
        });
    }

    /*   gestion de blog Accueil Vision              */
    if (document.getElementById('blog-accueilVision')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=8&per_page=4';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilVision").append(buidBlogElementAltVision(element, dateFormated, false));
            });
        });
    }


    /*   gestion de blog Accueil Reportage              */
    if (document.getElementById('blog-accueilRetportage')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=4';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilRetportage").append(buidBlogElementAlt2(element, dateFormated, false));
            });
        });
    }

    /*   gestion de blog Accueil Actualité              */
    if (document.getElementById('blog-accueilActu')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=9';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-accueilActu").append(buidBlogElementAltActu(element, dateFormated, false));
            });
        });
    }

    /*   gestion de la page article seul           */

    if (document.getElementById('blog-single')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?include=' + currId;
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-single").append(buidBlogElementAltSingle(element, dateFormated, true));
            });
        });
    }

    /*   gestion de la page catégorie   */

    if (document.getElementById('blog-categorie')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=' + currId;
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-categorie").append(buidBlogElementAlt(element, dateFormated, false));
            });
        });
    }


    /*   gestion de la page bas de page  mouvement */
    if (document.getElementById('blog-basPage')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?categories=3&per_page=3';
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-basPage").append(buidBlogElementAltBas(element, dateFormated, false));
            });
        });
    }

    /*   gestion de la page article seul sur page mouvement          */

    if (document.getElementById('blog-mouvement')) {
        var restUrl = 'https://lalternativeci.org/bd/wp-json/wp/v2/posts?include=' + currId;
        $.getJSON(restUrl, function(posts) {
            posts.forEach(function(element) {
                var dateFormated = formateDateRsetApi(element.date);
                $("#blog-mouvement").append(buidBlogElementAltMvt(element, dateFormated, true));
            });
        });
    }
  

})