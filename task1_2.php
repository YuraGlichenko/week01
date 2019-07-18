<?php
    const IMAGES = 80;
    const IMAGES_MARKER = 23;
    const IMAGES_PENCIL = 40;

    $imagesPaints = IMAGES - (IMAGES_MARKER + IMAGES_PENCIL);

    echo "Всего рисунков IMAGES = " . IMAGES . "<br />",
        "Рисунки фломастерами IMAGES_MARKER = " . IMAGES_MARKER . "<br />",
        "Рисунков карандашами IMAGES_PENCIL = " . IMAGES_PENCIL . "<br />",
        "Рисунков красками = IMAGES - ( IMAGES_MARKER + IMAGES_PENCIL ) = $imagesPaints";
