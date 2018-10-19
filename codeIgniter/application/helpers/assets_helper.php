<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    if ( ! function_exists('css_url'))
    {
        function css_url($nom)
        {
            return base_url() . '../../assets/styles/bootstrap4/bootstrap.min.css/' . $nom . '.css';
        }
    }