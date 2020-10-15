<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Compare the best gyms</title>
    <base />
    <meta name="description" />
    <meta name="keywords" />
    <link href="images/favicon.html" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <div class="container">
            <!-- FILTERS -->
            <div class="filters">
                <div class="allFilterBar"> FILTERS </div>
                <div class="remfilterContainers">
                    <div class="topFilterContainer">
                        <div class="topFilter disable">
                            <div class="topFilterBtns">
                                <div class="allGymsBtn"> <i aria-hidden="true" class="fa fa-table top"></i> Show all gyms </div>
                            </div>
                        </div>
                    </div>
                    <div class="ratFilterContainer"> <span class="accordion" class="ratFilter">
                            BEST RATED <i aria-hidden="true" class="fa fa-star top"></i>
                        </span>
                        <div>
                            <form action="#" id="ratForm">
                                <div class="row">
                                    <input id="rating1" data-ratingrange="5" data-filter="26" name="" type="checkbox">
                                    <label for="rating1"><span></span></label> <span class="ratingChild">
                                        <span class="ratingChild1">
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                        </span> 9/10 </span>
                                </div>
                                <div class="row">
                                    <input id="rating2" data-ratingrange="4" data-filter="27" name="" type="checkbox">
                                    <label for="rating2"><span></span></label> <span class="ratingChild">
                                        <span class="ratingChild2">
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                        </span> 8/9 </span>
                                </div>
                                <div class="row">
                                    <input id="rating3" data-ratingrange="3" data-filter="28" name="" type="checkbox">
                                    <label for="rating3"><span></span></label> <span class="ratingChild">
                                        <span class="ratingChild3">
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                        </span> <span>
                                            7/8
                                        </span> </span>
                                </div>
                                <div class="row">
                                    <input id="rating4" data-ratingrange="2" data-filter="29" name="" type="checkbox">
                                    <label for="rating4"><span></span></label> <span class="ratingChild">
                                        <span class="ratingChild4">>
                                            <span>
                                                <i aria-hidden="true" class="fa fa-star"></i>
                                                <i aria-hidden="true" class="fa fa-star"></i>
                                                <i aria-hidden="true" class="fa fa-star-o"></i>
                                                <i aria-hidden="true" class="fa fa-star-o"></i>
                                                <i aria-hidden="true" class="fa fa-star-o"></i>
                                            </span> 6/7 </span>
                                    </span>
                                </div>
                                <div class="row">
                                    <input id="rating5" data-ratingrange="1" data-filter="30" name="" type="checkbox">
                                    <label for="rating5"><span></span></label> <span class="ratingChild">
                                        <span class="ratingChild5">
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                            <i aria-hidden="true" class="fa fa-star-o"></i>
                                        </span> <span>
                                            6 < </span> </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="locFilterContainer"> <span class="accordion" class="locFilter">
                                                    LOCATIONS 
                                                </span>
                        <div>
                            <form action="#" id="locForm">
                                <div class="row">
                                    <input id="locatie1" data-filter="31" name="" type="checkbox">
                                    <label for="locatie1"><span></span>London</label>
                                </div>
                                <div class="row">
                                    <input id="locatie2" data-filter="32" name="" type="checkbox">
                                    <label for="locatie2"><span></span>Liverpool</label>
                                </div>
                                <div class="row">
                                    <input id="locatie3" data-filter="33" name="" type="checkbox">
                                    <label for="locatie3"><span></span>Birmingham</label>
                                </div>
                                <div class="row">
                                    <input id="locatie4" data-filter="34" name="" type="checkbox">
                                    <label for="locatie4"><span></span>Manchester</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="facFilterContainer"> <span class="accordion" class="facFilter">
                                        FACILITIES
                                    </span>
                        <div>
                            <form action="#" id="facForm">
                                <div class="row">
                                    <input id="faciliteit1" data-filter="1" name="" type="checkbox">
                                    <label for="faciliteit1"><span></span>Group lessons</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit2" data-filter="2" name="" type="checkbox">
                                    <label for="faciliteit2"><span></span>Showers</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit3" data-filter="3" name="" type="checkbox">
                                    <label for="faciliteit3"><span></span>Lockers</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit4" data-filter="4" name="" type="checkbox">
                                    <label for="faciliteit4"><span></span>Free parking</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit5" data-filter="5" name="" type="checkbox">
                                    <label for="faciliteit5"><span></span>Free trial</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit6" data-filter="6" name="" type="checkbox">
                                    <label for="faciliteit6"><span></span>Free signup</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit7" data-filter="7" name="" type="checkbox">
                                    <label for="faciliteit7"><span></span>Sauna</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit8" data-filter="8" name="" type="checkbox">
                                    <label for="faciliteit8"><span></span>Personal Training</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit9" data-filter="9" name="" type="checkbox">
                                    <label for="faciliteit9"><span></span>Phsyical therapy</label>
                                </div>
                                <div class="row">
                                    <input id="faciliteit10" data-filter="10" name="" type="checkbox">
                                    <label for="faciliteit10"><span></span>Tanning bed</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="extFilterContainer"> <span class="accordion" class="extFilter">
                                        EXTRAS
                                    </span>
                        <div>
                            <form action="#" id="extForm">
                                <div class="row">
                                    <input id="extra1" data-filter="11" name="" type="checkbox">
                                    <label for="extra1"><span></span>Dancing</label>
                                </div>
                                <div class="row">
                                    <input id="extra2" data-filter="12" name="" type="checkbox">
                                    <label for="extra2"><span></span>Yoga</label>
                                </div>
                                <div class="row">
                                    <input id="extra3" data-filter="13" name="" type="checkbox">
                                    <label for="extra3"><span></span>Boxing</label>
                                </div>
                                <div class="row">
                                    <input id="extra4" data-filter="14" name="" type="checkbox">
                                    <label for="extra4"><span></span>Company fitness</label>
                                </div>
                                <div class="row">
                                    <input id="extra5" data-filter="15" name="" type="checkbox">
                                    <label for="extra5"><span></span>Working out with a disability</label>
                                </div>
                                <div class="row">
                                    <input id="extra6" data-filter="16" name="" type="checkbox">
                                    <label for="extra6"><span></span>Daycare</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="appFilterContainer"> <span class="accordion" class="appFilter">
                                        EQUIPMENT
                                    </span>
                        <div>
                            <form action="#" id="appForm">
                                <div class="row">
                                    <input id="apparaat1" data-filter="21" name="" type="checkbox">
                                    <label for="apparaat1"><span></span>Matrix</label>
                                </div>
                                <div class="row">
                                    <input id="apparaat2" data-filter="22" name="" type="checkbox">
                                    <label for="apparaat2"><span></span>Precor</label>
                                </div>
                                <div class="row">
                                    <input id="apparaat3" data-filter="23" name="" type="checkbox">
                                    <label for="apparaat3"><span></span>Life Fitness</label>
                                </div>
                                <div class="row">
                                    <input id="apparaat4" data-filter="24" name="" type="checkbox">
                                    <label for="apparaat4"><span></span>Hammer Strength</label>
                                </div>
                                <div class="row">
                                    <input id="apparaat5" data-filter="25" name="" type="checkbox">
                                    <label for="apparaat5"><span></span>Sterling</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GYMS -->
            <div class="gymTitle">
                <div class="pageTitle"> MOST POPULAR ENGLISH GYMS </div>
            </div>
            <div class="filterandCompare">
                <div class="filterHamburger">
                    <div> <span>Filters:</span> <i class="fa fa-filter" aria-hidden="true"></i> </div>
                </div>
                <div class="compareDiv">
                    <div class="boxLine"> </div>
                    <div class="compareMsg disable">
                        <div class="compareIconC"> <img alt="" src="images/vergelijk/scales.png" class="compareIcon"> </div> <span class="compareCounter"><span>x</span></span>
                    </div>
                    <div class="compareMsgButton">
                        <div class="compareTitle">
                            <p>Select</p>
                            <p>at least 2</p>
                            <p>gyms</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gyms"> <span class="alertMsg1">No results found</span>
                <div class="gymCardsContainer">
                    <div class="gymCardContainer " vergelijkId="1">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym2.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/allfitlondonlogo.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Westelsons 37, London </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-full"></i> <span>
                                    9/10                                    </span> </div>
                                <div class="gymPrice"> <span>From <span class="directPrice">€19,50</span> p.m. (unlimited)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> ALLFIT LONDON </div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> mo</td>
                                            <td>7:00-22:30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> tue</td>
                                            <td>7:00-22:30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> wed</td>
                                            <td>7:00-22:30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> thu</td>
                                            <td>7:00-22:30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>fri</td>
                                            <td>7:00-21:30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sa</td>
                                            <td>8:30-15:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sun</td>
                                            <td>8:30-13:00</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="31"></span> <span data-ratingrange="5"></span> <span data-extra="11"></span><span data-extra="12"></span> <span data-apparaat="23"></span><span data-apparaat="24"></span><span data-apparaat="25"></span> <span data-rating="9"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar active" data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon active" data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns active" data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau " data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer active" data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys active" data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon " data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="gymCardContainer " vergelijkId="2">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym3.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/fitnessgoroundlogo.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Byrne Deep 16A, London </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <span>
                                    8/10                                    </span> </div>
                                <div class="gymPrice"> <span>From <span class="directPrice">€19,95</span> p.m. (unlimited)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> FITNESS GOROUND </div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> mo</td>
                                            <td>6:30-23:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> tue</td>
                                            <td>6:30-23:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> wed</td>
                                            <td>6:30-23:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> thu</td>
                                            <td>6:30-23:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> fri</td>
                                            <td>6:30-23:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sa</td>
                                            <td>9:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sun</td>
                                            <td>9:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="31"></span> <span data-ratingrange="4"></span> <span data-extra="11"></span><span data-extra="13"></span> <span data-apparaat="21"></span> <span data-rating="8"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar active" data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon active" data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns " data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau " data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer active" data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys active" data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon " data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="gymCardContainer " vergelijkId="3">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym4.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/fitnesspool.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Ville de Bearoux 113, Birmingham </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-full"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <span>
                                    7.5/10                                  </span> </div>
                                <div class="gymPrice"> <span><span>Prices not known</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> FITNESSPOOL </div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> Altijd&nbsp;</td>
                                            <td>geopend</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="33"></span> <span data-ratingrange="4"></span> <span data-extra="12"></span> <span data-apparaat="22"></span> <span data-rating="7.5"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar active" data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon active" data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns " data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau " data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer active" data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys " data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon " data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="gymCardContainer " vergelijkId="4">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym1.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/lifestylevidalogo.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Woodelson Park 10, Liverpool </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-full"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <span>
                                    7/10                                    </span> </div>
                                <div class="gymPrice"> <span><span>Prices not known</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> LIFESTYLE VIDA </div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p> <span font-size:="" roboto="" style="color: rgb(127, 127, 127); font-family: ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
                                </div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <p> mo</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> tue</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> wed</td>
                                            <td>7:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> thu</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> fri</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sa</td>
                                            <td>9:00-15:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sun</td>
                                            <td>9:00-13:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                </div>
                                                <div> &nbsp;</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="32"></span> <span data-ratingrange="3"></span> <span data-extra="12"></span><span data-extra="14"></span><span data-extra="15"></span> <span data-apparaat=""></span> <span data-rating="7"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar active" data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon active" data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns " data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau " data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer active" data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys active" data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon " data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>

                    <div class="gymCardContainer " vergelijkId="5">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym5.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/mancsfitnessclublogo.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Dalton St. Bridge 19, Manchester </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-full"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <span>
                                    7/10                                    </span> </div>
                                <div class="gymPrice"> <span>From <span class="directPrice">€19,95</span> p.m. (unlimited)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> MANC'S FITNESS CLUB </div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p style="box-sizing: border-box; margin: 0px 0px 1.3em;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> mo</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> tue</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> wed</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> thu</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> fri</td>
                                            <td>8:00-21:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sa</td>
                                            <td>9:00-15:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sun</td>
                                            <td>9:00-15:00</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="34"></span> <span data-ratingrange="3"></span> <span data-extra="12"></span> <span data-apparaat="21"></span> <span data-rating="7"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar active" data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon " data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns " data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau " data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer " data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys " data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon active" data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>

                    <div class="gymCardContainer " vergelijkId="6">
                        <div class="gymImgContainer">
                            <div class="gymImg" style="background-size: cover; background:url(images/P/gym6.jpg);    -webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover; background-size: cover;"> <img alt="" class="gymLogo" src="images/detail/1/dreamanddologo.jpg"> </div>
                            <div class="gymBasicInfo">
                                <div class="gymStreet"> <i aria-hidden="true" class="fa fa-map-marker"></i> Eston Park 11, Manchester </div>
                                <div class="gymRating"> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-half-full"></i> <i aria-hidden="true" class="fa fa-star-o"></i> <span>
                                    7/10                                    </span> </div>
                                <div class="gymPrice"> <span>From <span class="directPrice">€19,95</span> p.m. (unlimited)</span>
                                </div>
                            </div>
                        </div>
                        <div class="gymInfoContainer">
                            <div class="gymNameContainer">
                                <div class="gymName"> DREAM AND DO</div>
                            </div>
                            <div class="gymTextContentContainer">
                                <div class="gymTextContent">
                                    <p style="box-sizing: border-box; margin: 0px 0px 1.3em;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="readMore"> <a href="fitness-gyms/#">
                                        Visit website >>
                                    </a> </div>
                            </div>
                            <div class="gymDates">
                                <table>
                                    <thead>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> mo</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> tue</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> wed</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> thu</td>
                                            <td>8:00-22:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> fri</td>
                                            <td>8:00-21:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sa</td>
                                            <td>9:00-15:00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> sun</td>
                                            <td>9:00-15:00</td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="compareBox"> <i aria-hidden="true" class="fa fa-close"></i> </div>
                        </div>
                        <hr class="lowerHr"> <span data-locatie="34"></span> <span data-ratingrange="3"></span> <span data-extra="12"></span> <span data-apparaat="21"></span> <span data-rating="7"></span>
                        <div class="gymIconsContainer">
                            <div class="one" class="fl-l">
                                <div class="gymIcons"> <span class="gymIconGro active" data-facility="1">
                                        <img alt="" class="gymIcon" src="images/vergelijk/grouplessons.png">
                                        <span>Group lessons</span> </span> <span class="gymIconDou active" data-facility="2">
                                        <img alt="" class="gymIcon" src="images/vergelijk/douche.png">
                                        <span>Showers</span> </span> <span class="gymIconKlu active" data-facility="3">
                                        <img alt="" class="gymIcon" src="images/vergelijk/lock.png">
                                        <span>Lockers</span> </span> <span class="gymIconPar " data-facility="4">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freeparking.png">
                                        <span>Free parking</span> </span> <span class="gymIconZon " data-facility="5">
                                        <img alt="" class="gymIcon" src="images/vergelijk/freetrial.png">
                                        <span>Free trial</span> </span> <span class="gymIconIns active" data-facility="6">
                                        <img alt="" class="gymIcon" src="images/vergelijk/inschrijven.png">
                                        <span>Free signup</span> </span> <span class="gymIconSau active" data-facility="7">
                                        <img alt="" class="gymIcon" src="images/vergelijk/sauna.png">
                                        <span>Sauna</span> </span> <span class="gymIconPer " data-facility="8">
                                        <img alt="" class="gymIcon" src="images/vergelijk/personal-training.png">
                                        <span>Personal Training</span> </span> <span class="gymIconFys " data-facility="9">
                                        <img alt="" class="gymIcon" src="images/vergelijk/fysiotherapie.png">
                                        <span>Phsyical therapy</span> </span> <span class="gymIconZon " data-facility="10">
                                        <img alt="" class="gymIcon" src="images/vergelijk/zonnebank.png">
                                        <span>Tanning bed</span> </span>
                                </div>
                            </div>
                            <div class="visitBtn" class="fl-l">
                                <p>COMPARE<i aria-hidden="true" class="fa fa-caret-right"></i></p>
                            </div>
                        </div>
                    </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="js/index.js"></script>
    <script type="text/javascript">
        localStorage.clear();
    </script>
</body>

</html>