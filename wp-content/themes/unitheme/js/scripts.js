// Search Functionality

// When the user clicks on the SEARCJ ICON in the header it activates
// the SEARCH OVERLAY, When the user clicks on the x button on the OVERLAY
// it closes the OVERLAY

class Search {
    constructor() {

        // this.searchButton = document.getElementById("search-button");
        // this.closeButton = document.getElementById("close-overlay");
        this.overlay = jQuery("#overlay");
        this.searchBox = jQuery("#search-box")
        this.timeOutLimit;
        this.spinningWheel = jQuery(".loader");
        this.searchResultBox = jQuery(".search-results");
        this.searchFieldVal;

    }
    write() {
        console.log(this.overlay);
    }

    on() {
        this.overlay.css('display', 'block');
        // this.overlay.style.display = "block";
    }

    off() {
        this.overlay.css('display', 'none');
        // this.overlay.style.display = "none";
    }



    keyboardLogic() {
        if (this.searchBox.val() == "") {
            this.spinningWheel.css('display', 'none');
            this.searchResultBox.css('display', 'none');
            jQuery(".search-results").css('display', 'none');

        } else {
            this.spinningWheel.css('display', 'block');
            clearTimeout(this.timeOutLimit);

            this.timeOutLimit = setTimeout(this.getResults, 2000);

        }



    }
    getResults() {
        this.searchFieldVal = jQuery("#search-box").val();
        // console.log(this.searchFieldVal);
        jQuery.getJSON('http://localhost:8888/WordpressProjects/UniSite/wp-json/wp/v2/posts?search=' + this.searchFieldVal,
            function(posts) {
                jQuery('#search-results-list').html(
                    posts.map(item => `<li><a style = "color:black;"href="${item.link}">${item.title.rendered}</a></li>`)
                )
            }

        );
        jQuery(".search-results").css('display', 'block');
        jQuery(".loader").css('display', 'none');

    }



}
var search1 = new Search();
//  search1.write();



//  Press S on keyboard to quickly search anything and press q to quit search
function keySearch(event) {
    if (event.keyCode == 115) {
        search1.on();
    }
    if (event.keyCode == 113) {
        search1.off();
    }
}