// ------------loading--------------- //


window.onload = function(){
    var spinner = document.getElementById("sp");
    document.body.style.overflow = "hidden";

    setTimeout(function() {
        spinner.style.display = "none";
        document.body.style.overflow = "auto";
    }, 3000);
}

// window.onclick = function open(){
//  function open(){
//     alert('algendy');
// }