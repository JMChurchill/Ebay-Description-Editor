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

<div class="editor" contenteditable="true">
</div>
</body>
