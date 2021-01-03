function format(command, value) {
    document.execCommand(command, false, value);
    // alert("htmlOut");
    getHtml();
}

function getHtml(){
    //gets html from editorText div
    let htmlOut = document.getElementById('editorText').innerHTML;
    //puts raw html into htmlOut div
    document.getElementById('htmlOut').innerText = htmlOut;
}
