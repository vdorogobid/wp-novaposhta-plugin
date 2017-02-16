<form action="options.php" method="POST">
    <?php
        settings_fields( 'WPNovaPoshtaMainSettings' );     // скрытые защитные поля
        do_settings_sections( 'wp-nova-poshta-plugin' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
        submit_button();
    ?>
</form>