<?php
/**
 * WCMS - WEX Simple CMS
 * https://github.com/vedees/wcms
 * Copyright (C) 2018 Evgenii Vedegis <vedegis@gmail.com>
 * https://github.com/vedees/wcms/blob/master/LICENSE
 */

require 'core/initialize.php'; ?>

<?php $page_title = 'HTML Editing - WEX CMS';
      $page = 'html';?>

<?php include('includes/header.php');
      $html_from_template = htmlspecialchars(file_get_contents($pagename));

// Find GET Finish editing
if (isset($_GET['finish'])) {
  $path = $_GET['finish'];
  file_put_contents($path, $_POST['textAreaCode']);
  // TODO func
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=html.php\">";
}
?>

<code-editor-component
    action='html.php'
    code='<?php echo print_r($html_from_template); ?>'
    path='<?php echo $pagename; ?>'>
</code-editor-component>


<?php include('includes/footer.php'); ?>