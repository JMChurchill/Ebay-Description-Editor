function format(command, value) {
    if (command == 'FontSize'){
        value = document.getElementById("fontSelect").value;
    }
    if (command == 'FontName'){
        value = document.getElementById("fontName").value;
    }

    document.execCommand(command, false, value);

    if (command == "ForeColor"){
        //change color select icon colour
        document.getElementById('selectColour').style.color = value;
    }
    getHtml();
}



function getHtml(){
    //gets html from editorText div
    let htmlOut = document.getElementById('editorText').innerHTML;
    //puts raw html into htmlOut div
    document.getElementById('htmlOut').innerText = htmlOut;
}
