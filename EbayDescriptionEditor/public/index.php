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

</div>
<div class="editor" id="editorText" contenteditable="true"></div>

<div>
    <h2>Paste into html description</h2>
    <div class="editor" id="htmlOut"></div>
</div>



</body>
