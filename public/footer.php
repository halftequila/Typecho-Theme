<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<!--<canvas id="static"></canvas>-->
<div class="footer-container">
    <p>
        Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?> </a>
    </p>
</div>
<div id="outerdiv">
    <img id="bigimg" src="" />
</div>
<?php $this->footer();?>
<script src="<?php $this->options->themeUrl('assets/js/lantern.config.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $( ".fancybox").fancybox();
    });
</script>
<script>
  document.addEventListener('keydown', function(e) {
    // Ignore if input, textarea or contenteditable element is focused
    let activeElement = document.activeElement;
    if (activeElement.tagName === 'INPUT' || activeElement.tagName === 'TEXTAREA' || activeElement.isContentEditable) {
      return;
    }

    // Example: Use '/' key to focus search input
    if (e.key === '/') {
      e.preventDefault(); // prevent the '/' from being inserted anywhere
      
      let searchInput = document.querySelector('.search-form-input');
      if (searchInput) {
        searchInput.focus();
      }
    }
  });
</script>
<?php echo $this->options->beforeBodyClose; ?>
