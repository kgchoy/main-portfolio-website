<!-- Open Graph -->
<?php if($page->OpenGraphTitle() != ""): ?>
  <meta property="og:title" content="<?php echo $page->OpenGraphTitle() ?>">
<?php endif ?>

<?php if($page->OpenGraphDescription() != ""): ?>
  <meta property="og:description" content="<?php echo $page->OpenGraphDescription() ?>">
<?php endif ?>

<?php if($page->OpenGraphType() != ""): ?>
  <meta property="og:type" content="<?php echo $page->OpenGraphType() ?>">
<?php endif ?>

<?php if($page->OpenGraphImage() != ""): ?>
  <meta property="og:image" content="<?php echo $page->OpenGraphImage() ?>">
<?php endif ?>

<?php if($page->OpenGraphUrl() != ""): ?>
  <meta property="og:url" content="<?php echo $page->OpenGraphUrl() ?>">
<?php endif ?>