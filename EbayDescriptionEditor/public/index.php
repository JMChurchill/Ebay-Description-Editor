<?php

include_once "header.php";

?>

<body>
<h2>Editor</h2>
<p>enter your text here</p>

<div class="sample-toolbar">
    <a href="javascript:void(0)" onclick="format('bold')"><span class="fas fa-bold" style="color: black"></span></a>
    <a href="javascript:void(0)" onclick="format('italic')"><span class="fa fa-italic fa-fw" style="color: black"></span></a>
    <a href="javascript:void(0)" onclick="format('insertunorderedlist')"><span class="fa fa-list fa-fw" style="color: black"></span></a>
<!--    colour select dropDown-->
    <div class="dropdown">
        <button class="dropbtn"><span class="fas fa-tint" id="selectColour" style="color: black"><span class="fa fa-caret-down" style="color: black"></span></button>
        <div class="dropdown-content">
            <a href="javascript:void(0)" onclick="format('ForeColor','black')"><span class="fas fa-tint" style="color: black"></span></a>
            <a href="javascript:void(0)" onclick="format('ForeColor','red')"><span class="fas fa-tint" style="color: red"></span></a>
            <a href="javascript:void(0)" onclick="format('ForeColor','blue')"><span class="fas fa-tint" style="color: blue"></span></a>
            <a href="javascript:void(0)" onclick="format('ForeColor','green')"><span class="fas fa-tint" style="color: green"></span></a>
            <a href="javascript:void(0)" onclick="format('ForeColor','yellow')"><span class="fas fa-tint" style="color: yellow"></span></a>
        </div>
    </div>



<!--    <a href="javascript:void(0)" onclick="format('ForeColor','black')"><span class="fas fa-tint" style="color: black"></span></a>-->
<!--    <a href="javascript:void(0)" onclick="format('ForeColor','red')"><span class="fas fa-tint" style="color: red"></span></a>-->
    <a href="javascript:void(0)" onclick="format('JustifyLeft')"><span class="fas fa-align-left" style="color: black"></span></a>
    <a href="javascript:void(0)" onclick="format('JustifyCenter')"><span class="fas fa-align-center" style="color: black"></span></a>
    <a href="javascript:void(0)" onclick="format('JustifyRight')"><span class="fas fa-align-right" style="color: black"></span></a>



</div>
<div class="editor" id="editorText" contenteditable="true"></div>

<div>
    <h2>Paste into html description</h2>
    <div class="editor" id="htmlOut"></div>
</div>



</body>
