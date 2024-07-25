<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==' crossorigin='anonymous'></script>
<script>
    <?= $_head_js_code ?>
</script>
<!-- Dynamic js Load -->
<?php if (isset($_head_js_files) && is_array($_head_js_files)) : ?>
    <?php foreach ($_head_js_files as $key => $_head_js_file) : ?>
        <?php if (is_string($_head_js_file)) : ?>
            <script src="<?= base_url($_head_js_file) ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>