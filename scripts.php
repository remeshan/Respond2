<?php	
	include 'app.php'; // import php files

	$authUser = new AuthUser(); // get auth user
	$authUser->Authenticate('All');
?>
<!DOCTYPE html>
<html>

<head>
	
<title>Scripts&mdash;<?php print $authUser->SiteName; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- include css -->
<link href="<?php print BOOTSTRAP_CSS; ?>" rel="stylesheet">
<link href="<?php print FONTAWESOME_CSS; ?>" rel="stylesheet">
<link type="text/css" href="js/helper/codemirror/codemirror.css" rel="stylesheet">
<link type="text/css" href="css/app.css" rel="stylesheet">
<link type="text/css" href="css/messages.css" rel="stylesheet">
<link type="text/css" href="css/list.css" rel="stylesheet">

</head>

<body data-currpage="scripts">
	
<p id="message">
  <span>Holds the message text.</span>
  <a class="close" href="#"></a>
</p>

<?php include 'modules/menu.php'; ?>

<section class="main">

    <nav>
        <a class="show-menu"><i class="icon-reorder icon-large"></i></a>
    
        <ul>
        <!-- ko foreach: files -->
            <li data-bind="attr:{'data-file': file}"><a data-bind="text: file, click: $parent.updateContent"></a><i data-bind="click: $parent.showRemoveDialog" class="icon-minus-sign icon-large"></i></li>
        <!-- /ko -->    
            <li class="add"><i class="icon-plus-sign icon-large" data-bind="click: showAddDialog"></i></li>
        </ul>
        
    </nav>

    <div class="container">
	    <textarea id="content" spellcheck="false" data-bind="value: content"></textarea>
	</div>
    
    <div class="actions">
        <button class="primary-button" data-bind="click: save">Save</button
    </div>
</section>
<!-- /.main -->


<div class="modal hide" id="addDialog">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3>Add Script</h3>
  </div>
  <!-- /.modal-header -->

  <div class="modal-body">

  <form class="form-horizontal">

	<div class="control-group">
		<label for="name" class="control-label">Name:</label>
		<div class="controls">
			<input id="name" type="text"><span style="font-size: 16px; color: #aaa;">.js</span>
			<span class="help-block">Lowercase, no spaces, no special characters (., !, etc)</span>
		</div>
	</div>
	
	</form>
	<!-- /.form-horizontal -->

  </div>
  <!-- /.modal-body -->

  <div class="modal-footer">
    <button class="secondary-button" data-dismiss="modal">Close</button>
	<button class="primary-button" data-bind="click: addScript">Add Script</button>
  </div>

</div>
<!-- /.modal -->

<div class="modal hide" id="removeDialog">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3>Remove Script</h3>
  </div>
  <!-- /.modal-header -->

  <div class="modal-body">
	
	<p>
		Are you sure that you want to delete <strong id="removeName">this script</strong>?
	</p>

  </div>
  <!-- /.modal-body -->

  <div class="modal-footer">
    <button class="secondary-button" data-dismiss="modal">Close</button>
	<button class="primary-button" data-bind="click: removeScript">Remove Script</button>
  </div>

</div>
<!-- /.modal -->

<?php include 'modules/footer.php'; ?>

</body>

<!-- include js -->
<script type="text/javascript" src="<?php print JQUERY_JS; ?>"></script>
<script type="text/javascript" src="<?php print JQUERYUI_JS; ?>"></script>
<script type="text/javascript" src="<?php print BOOTSTRAP_JS; ?>"></script>
<script type="text/javascript" src="<?php print KNOCKOUT_JS; ?>"></script>
<script type="text/javascript" src="js/helper/moment.min.js"></script>
<script type="text/javascript" src="js/helper/codemirror/codemirror.js"></script>
<script type="text/javascript" src="js/helper/codemirror/mode/css/css.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/messages.js"></script>
<script type="text/javascript" src="js/viewModels/scriptsModel.js"></script>

</html>Layout