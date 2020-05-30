        function openNav() {
            document.getElementById("mobile-sidebar").style.width = "370px";
            document.getElementById("wrapper").style.transform = "translateX(375px)";
            document.getElementById("close").style.display = "block";
            document.getElementById("open").style.display = "none";
            
        }

        function closeNav() {
            document.getElementById("mobile-sidebar").style.width = "0";
            document.getElementById("wrapper").style.transform = "translateX(0px)";
            document.getElementById("close").style.display = "none";
            document.getElementById("open").style.display = "block";
        }
          
        



        function myFunctionmobile() {
                                document.getElementById("dropdownmobile").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.nodrops')) {

                                    var dropdowns = document.getElementsByClassName("mobilemenudrop");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                            function myFunctionmobile2() {
                                document.getElementById("dropdownmobile2").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.nodrops')) {

                                    var dropdowns = document.getElementsByClassName("mobilemenudrop");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }

                            function myFunctionmobile3() {
                                document.getElementById("dropdownmobile3").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.nodrops')) {

                                    var dropdowns = document.getElementsByClassName("mobilemenudrop");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }

                            function myFunctionmobile4() {
                                document.getElementById("dropdownmobile4").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.nodrops')) {

                                    var dropdowns = document.getElementsByClassName("mobilemenudrop");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                            function myFunctionmobile5() {
                                document.getElementById("dropdownmobile5").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function (event) {
                                if (!event.target.matches('.nodrops')) {

                                    var dropdowns = document.getElementsByClassName("mobilemenudrop");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
            }   
            
            

function myFunctionmat() {
    var input, filter, section, aside, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    section = document.getElementById("materials");
    aside = section.getElementsByTagName("aside");
    for (i = 0; i < aside.length; i++) {
        a = aside[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            aside[i].style.display = "";
        } else {
            aside[i].style.display = "none";
        }
    }
}








function myFunction() {
    document.getElementById("dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nodrops')) {

        var dropdowns = document.getElementsByClassName("menudrop");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
function myFunction2() {
    document.getElementById("dropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nodrops')) {

        var dropdowns = document.getElementsByClassName("menudrop");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction3() {
    document.getElementById("dropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nodrops')) {

        var dropdowns = document.getElementsByClassName("menudrop");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction4() {
    document.getElementById("dropdown4").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nodrops')) {

        var dropdowns = document.getElementsByClassName("menudrop");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
function myFunction5() {
    document.getElementById("dropdown5").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nodrops')) {

        var dropdowns = document.getElementsByClassName("menudrop");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}                                 
