// JavaScript Document

function ChangeTab(e, par, ind) {
        document.getElementById('div_general_' + ind.toString()).style.display = "none";
        document.getElementById('div_description_' + ind.toString()).style.display = "none";
        document.getElementById('div_photos_' + ind.toString()).style.display = "none";
        document.getElementById('div_facilities_' + ind.toString()).style.display = "none";
        document.getElementById(par + "_" + ind.toString()).style.display = "block";
        var li = e.parentNode;
        while (li.nodeName != "LI") {
            li = li.parentNode;
        }
        var li_prev = li.previousSibling;
        while (li_prev != null) {
            if (li_prev.nodeName == "LI") {
                li_prev.className = "";
            }
            li_prev = li_prev.previousSibling;
        }
        var li_next = li.nextSibling;
        while (li_next != null) {
            if (li_next.nodeName == "LI")
                li_next.className = "";
            li_next = li_next.nextSibling;
        }
        li.className = "current";
    }