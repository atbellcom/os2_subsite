<!-- content-with-left-and-right-sidebar.tpl.php -->


<div class="row" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <?php if ($content['top']): ?>
    <!-- Begin - top -->
    <div class="col-md-12">
      <?php print $content['top']; ?>
    </div>
    <!-- End - top -->
  <?php endif ?>


  <?php if ($content['content-left']): ?>
    <!-- Begin - left content -->
    <?php //not switching to col-md-12 because the picture used here don't support full page width view ?>
    <div class="col-md-6">
      <?php print $content['content-left']; ?>
    </div>
    <!-- End - left content -->
  <?php endif ?>

  <?php if ($content['content-right']): ?>
    <!-- Begin - right content -->
    <?php if ($content['content-left']): ?>
      <div class="col-md-6">
    <?php else: ?>
      <div class="col-md-12">
    <?php endif ?>
      <?php print $content['content-right']; ?>
    </div>
    <!-- End - right content -->
  <?php endif ?>

  <?php if ($content['footer']): ?>
    <!-- Begin - bottom -->
    <div class="col-md-12">
      <?php print $content['footer']; ?>
    </div>
    <!-- End - bottom -->
  <?php endif ?>


</div>
