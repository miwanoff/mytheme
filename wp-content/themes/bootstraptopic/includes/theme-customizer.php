<?php

function bootstraptopic_customize_register($wp_customize)
{
    bootstraptopic_social_customizer_section($wp_customize);
    bootstraptopic_misc_customizer_section($wp_customize);
}