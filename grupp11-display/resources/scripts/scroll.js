ScrollRate = 80;

function scrollDiv_init() {
    DivElmnt = document.getElementById('read');
    ReachedMaxScroll = false;

    DivElmnt.scrollTop = 0;
    PreviousScrollTop  = 0;

    ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {

    if (!ReachedMaxScroll) {
        DivElmnt.scrollTop = PreviousScrollTop;
        PreviousScrollTop++;

        ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
    }
    else {
        ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;

        DivElmnt.scrollTop = PreviousScrollTop;
        PreviousScrollTop--;
    }
}

function pauseDiv() {
    clearInterval(ScrollInterval);
}

function resumeDiv() {
    PreviousScrollTop = DivElmnt.scrollTop;
    ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}

window.onload=scrollDiv_init();