<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tiny</title>

        <script type="text/javascript" src="tinymce/js/tinymce/tinymce.dev.js"></script>

    </head>

    <body>
    
<div id="form-content-body">
	<form id="submitElement" name="submitElement" action="" method="post">
		<input type="hidden" name="field_type" id="field_type" value="editor" />
		<textarea name="econtent" class="econtent" style="width:100%"></textarea>
		<p>
			<input type="button" name="insert" id="insert" value="Insert" class="text ui-widget-content ui-corner-all" onClick="insertFormEditor('editor', '<?=WEB_ROOT?>');"/>
		</p>
	</form>
</div>

<script type="text/javascript">
/*
    tinymce.init({
        selector: "textarea",
        theme   : "modern",
        width   : 680,
        height  : 300,
        plugins : [
             "advlist autolink link image lists charmap preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime nonbreaking",
             "table contextmenu directionality paste textcolor responsivefilemanager code"
       ],
       toolbar1 : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
       toolbar2 : "| responsivefilemanager image | link unlink anchor | forecolor backcolor  | preview code ",
       
       external_filemanager_path:"/tiny/filemanager/",
       filemanager_title:"Filemanager" ,
       external_plugins: { "filemanager" : "/tiny/filemanager/plugin.min.js"
   }
     });
    */
    tinymce.init({
        selector: "textarea",
        //theme   : "advance",
        width   : 680,
        height  : 300,
        external_plugins: {
		codemirror: "tinymce/js/tinymce/plugins/codemirror/plugin.js",
		},
        plugins :['codemirror','image'],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
  codemirror: {
    indentOnInit: true,
    path: 'CodeMirror',
    config: {
      lineNumbers: true       
    }
  },
       external_filemanager_path:"/tiny/filemanager/",
       filemanager_title:"Filemanager" ,
       external_plugins: { "filemanager" : "/tiny/filemanager/plugin.min.js"
   }
     });
</script>
    <?php
    $x = 5;
    $y = 10;
    list($x,$y)= array($y,$x);
    echo $x;
    echo "<br>";
    echo $y;
    ?>
    </body>
</html>