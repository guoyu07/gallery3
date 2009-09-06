<?php defined("SYSPATH") or die("No direct script access.") ?>
<?= form::dropdown("gSelectSessionLocale", $installed_locales, $selected) ?>
<script type="text/javascript">
  $("#gSelectSessionLocale").click(function() {
    var old_locale_preference = <?= html::js_string($selected) ?>;
    var locale = $(this).val();
    if (old_locale_preference == locale) {
      return;
    }

    var expires = -1;
    if (locale) {
      expires = 365;
    }
    $.cookie("g_locale", locale, {"expires": expires, "path": "/"});
    window.location.reload(true);
  });
</script>

