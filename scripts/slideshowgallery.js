/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

var mygallery=new fadeSlideShow({
    wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
    dimensions: [900, 150], //width/height of gallery in pixels. Should reflect dimensions of largest image
    imagearray: [
    ["images/banner-1.png"],
    ["images/banner-2.png"],
    ["images/banner-3.png"],
    ["images/banner-4.png"],
    ["images/banner-5.png"], //<--no trailing comma after very last image element!
    ],
    displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
    persist: false, //remember last viewed slide and recall within same session?
    fadeduration: 500, //transition duration (milliseconds)
    descreveal: "ondemand",
    togglerid: ""
})