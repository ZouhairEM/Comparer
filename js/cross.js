var RecaptchaOptions = {
   theme : 'white',
   lang : 'nl'
};

jQuery().ready(function(){
    $("#error").hide();
    $("#highlight").hide();
	$('.aantal').autofill({value: '1'});

	$('#zoekform').autofill({value: 'Typ hier uw zoekwoord(en)'});
	$('#nieuwsbrief_vnaam').autofill({value: 'Voornaam'});
	$('#nieuwsbrief_anaam').autofill({value: 'Achternaam'});
	$('#nieuwsbrief_email').autofill({value: 'Emailadres'});

	
	
	  
	$("#aantal").keyup(
		function(){
		cur_val = $('#aantal').val(); // grab what's in the field
		// do stuff with cur_val so that it's what you want
		$("#naantal").val(cur_val);
		}
	);
	
	$('span.required').append('&nbsp;<span class="required"><img src="images/icon_oblicated.gif"></span>&nbsp;');
});

(function($){$.fn.autofill=function(options){var defaults={value:'',defaultTextColor:"#aaa",activeTextColor:"#000"};var options=$.extend(defaults,options);return this.each(function(){var obj=$(this);obj.css({color:options.defaultTextColor}).val(options.value).focus(function(){if(obj.val()==options.value){obj.val("").css({color:options.activeTextColor});}}).blur(function(){if(obj.val()==""){obj.css({color:options.defaultTextColor}).val(options.value);}});});};})(jQuery);
function specfilter(){

var makeurl = makeurl;

jQuery().ready(function(){

$("#specfilterform input[type=checkbox]").click(

function () {
id = $(this).attr("id");
specId = id.substr(0, id.indexOf("_"));
// Single/Multi options do have a specid. Booleans don"t.
setClickedCheckbox($(this));

submitForm();

});
});
}

function setProductlistLoader() {
    var h = $("#facet_productlist");
    var f = h.offset();
    var g = h.height();
    var b = $(window).height();
    var c = b / 2;
    var e = $(window).scrollTop();
    var d = 250;
    var a = $("#facet_loader");
    if (a.length === 0) {
        a = $(document.createElement("div")).attr("class", "facet_loader").attr("id", "facet_loader").append($(document.createElement("a")).attr("href", "#").append($(document.createElement("span")).addClass("loader_img").css("top", d).css("left", 200)));
        $("#specification_results").append(a);
        $(".comparisonBar").css({
            "box-shadow": "none"
        })
    }
    a.show()
}

/**
 * Returns a beautified url based on the selected filters.
 * @return string The filter-url.
 */
function prePostSpecFilter() {
    var url = "";
    var specdefId;
    var separator = "?";
    var prevspecdefId;
    var specdefValue;
/*
	if(lastClickedCheckbox != null) {	// if a checkbox was clicked, then only execute this function for that specific checkbox
		var elem = lastClickedCheckbox;
		// Create URL part.
		prevspecdefId = specdefId;
		specdefId = $(elem).attr("name");
		// Strip off []
		specdefId = specdefId.replace("[]", "");
		specdefValue = $(elem).val();
		if (prevspecdefId != specdefId) {
			if (prevspecdefId != undefined) {
				url += separator + specdefId + "=" + specdefValue;
				separator = "&";
			} else {
				url += separator + specdefId + "=" + specdefValue;
				separator = "&";
			}
		} else {
		    url += "," + specdefValue;
		}
	} else {
*/
		// Else ... Loop through checked checkboxes.
		$("#specificationfilter_filter ul input:checked").each(function () {
			// Create URL part.
			prevspecdefId = specdefId;
			specdefId = $(this).attr("name");
			// Strip off []
			specdefId = specdefId.replace("[]", "");
			specdefValue = $(this).val();
			if (prevspecdefId != specdefId) {
				if (prevspecdefId != undefined) {
					url += separator + specdefId + "=" + specdefValue;
					separator = "&";
				} else {
					url += separator + specdefId + "=" + specdefValue;
					separator = "&";
				}
			} else {
			    url += "," + specdefValue;
			}
		});
//	}
    // Empty url won't work. To allow clearing all checkboxes, the url should at least contain a "?".
    if (url == "") {
        url = separator;
    }
    //console.log('cross.js.prePostSpecFilter: URL = ' + url); // G. Rijk: Enables logging message to developer consoles in Chrome, IE and Firebug.
    return url;
}



var lastFilterTime = null;
var updatingFilters = false;
var xmlHttpRequest = null;
//var lastClickedCheckbox = null;	// G. Rijk: This variable holds the most recently clicked price-range checkbox, to pass on to the prePostSpecFilter() function. This value should be set using setClickedCheckbox in external JS resources, such as from modules/left-content.php

function isIE6() {
    return /msie|MSIE 6/.test(navigator.userAgent);
}
var lastStateUrl = location.href;
/**
 * Is called whenever the filter is changed and the productlist should be re-filtered.
 * @param string url (optional) the url to request. If no url is given, an url is assebled by
 * checking the filter values.
 * NOTE: If the url is passed, filters are expected to be passed as a query (after the '?')
 * and not as a hash ('#').
 * @param bool isPop. Set to true when the new url is popped from the history. In that case, the new url is not pushed again.
 * @return bool false. Always return false to prevent default action.
 */
function submitForm(url, isPop, state) {

    if (isIE6()) {
        if (url) {
            location.href = url;
            return false;
        }
        document.forms['specfilterform'].submit();
        return false;
    }
    // Prevent immediate loading
    if (canPushState() && isPop === true && lastStateUrl == location.href) {
        return false;
    }

	setProductlistLoader();        


    if (!url) {
        var url = prePostSpecFilter();
		var newurl = makeurl+url;
    }
	
    // Extract the filters from the url
    var queryPos = newurl.indexOf('?');
    var filters = '';
    if (queryPos > -1) {
        filters = newurl.substr(queryPos + 1);
    }
	
    // Update the address bar.
    if (canPushState()) {
        // Push the new state, but only if the current state isn't just popped.
        if (isPop !== true) {
            window.history.pushState(null, "", newurl);
            lastStateUrl = newurl;
        }
    } else {
        // Update the address to reflect the filters.
//        location.hash = '#!' + filters;
        location.hash = filters;
        // Make sure to update the remembered hash to prevent a new submit when the check timer times out.
        lastHashBangState = location.hash;
    }
	
    if (state && state.rawdata) {
        processFilterResult(state.rawdata);
    } else {
        // Issue an AJAX request to filter the product list.
        lastFilterTime = new Date();
        var requestTime = lastFilterTime;
        // Abort any request that is still running
        if (xmlHttpRequest) {
            xmlHttpRequest.abort();
            xmlHttpRequest = null;
        }
		
        // New request for the filters.
        xmlHttpRequest = jQuery.get(
        newurl, {}, function (data, textStatus, jqXHR) {
            if (lastFilterTime == requestTime) {
                processFilterResult(data);
				var $data = $(data);
				var filter_result = $data.find("#filter_results");
				
				var kids = filter_result[0].childElementCount;

				if (kids == 0 ){
					$(".specifation_results_deleted_allfilters").hide();
				} else {
					$(".specifation_results_deleted_allfilters").show();
				}
				console.debug(kids);
            }
        });
    }
    // Return false to prevent default actions for form and remove-filter-links.
    return false;
}
/**
 * Processes the result of the filter AJAX request
 */
function processFilterResult(data) {
    var $data = $(data);
    // TODO replace the facet_productlist div, but it exist 2 times in the page
    var productList = $data.find("#facet_productlist");
    var filters = $data.find("#specfilterform");
    var filter_result = $data.find("#filter_results");
    
    $("#facet_productlist").replaceWith(productList);

    // Add click events to delete filter links
    initializeDeleteFilterlinks();    
    var form = $("#specfilterform");
    inputs = filters.find("input");
    updatingFilters = true;
    // Loop trough all inputs and update their status and numbers.
    inputs.each(
    function (index, e) {
        element = $(e);
        var id = element.attr("id");
        var type = element.attr("type");
        var target = $("#" + id);
        sourceLi = element.parent();
        targetLi = target.parent();

        targetLi.prop("class", sourceLi.prop("class"));
		
		
        targetLi.children("label").children("span").html(sourceLi.children("label").children("span"));
        if (type == "checkbox") {
            target.prop("checked", element.prop("checked"));
        } else {
            target.attr("value", element.attr("value"));
            // Force change event to update slider handle positions.
            target.change();
        }
    });
    updatingFilters = false;
}

/**
 * Returns wether the browser supports pushState.
 * @return bool true if the browser supports pushState.
 */
function canPushState() {
    return typeof window.history.pushState === "function";
}
/**
 * Event handler for window.onpopstate event, to re-filter on navigation.
 */
function popFilter(event) {
    // If no state object is provided, the history item that is popped is not put there using pushState.
    // In that case, there's no need to re-apply the filter.
    if (typeof event.state !== "object") {
        return;
    }
    submitForm(location.href, true, event.state);
}
/**
 * Variable to contain the last checked hash, to be able to check for changes.
 * @var string lastHashBangState
 */
var lastHashBangState = location.hash;

function checkStateChange() {
    if (location.hash !== lastHashBangState) {
        submitForm(location.href.replace("#!", "?"));
    }
    setTimeout("checkStateChange()", 100);
}

function initializeDeleteFilterlinks() {
    // Add a click event to the current filter links
    // when it is clicked the url is requested with the "submitform" function by a xmlHttpRequest
    $("#jqSelectedFilterItem a").click(

    function (event) {
        var url = $(this).attr("href");
        // Make the link invisible to give direct feedback
        $(this).hide();
        submitForm(url);
        return false;
    });
    // Add a click event to the delete al filter links
    // when it is clicked the url is requested with the "submitform" function by a xmlHttpRequest
    $("div.specifation_results_deleted_allfilters a").click(

    function (event) {
        var url = $(this).attr("href");
        // Make the link invisible to give direct feedback
        $(this).hide();
        $("#specifation_results_selectedfilters").hide();
        $("h3.selectedfilters").hide();
        submitForm(url);
        return false;
    });
    // Add a click event to the delete filter links on the no results page
    // when it is clicked the url is requested with the "submitform" function by a xmlHttpRequest
    $("div.specificationfilter_noresults_information li a").click(

    function (event) {
        var url = $(this).attr("href");
        // Make the link invisible to give direct feedback
        $(this).hide();
        submitForm(url);
        return false;
    });
}

function setClickedCheckbox(elem) {
	lastClickedCheckbox = elem;
}


