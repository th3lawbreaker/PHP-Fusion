<?php

use PHPFusion\Steam;

/**
 * Bootstrap 4 Navigation Render
 * Class Navbar
 */
class Navbar {

    /**
     * @param $info
     *
     * @return string
     * @throws ReflectionException
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function showSubLinks($info) {
        $settings = fusion_get_settings();

        if ($info['show_header']) {
            if ($info['show_banner']) {
                $info['banner'] = ($info['show_banner'] ? ($info['custom_banner'] ? $info['custom_banner'] : BASEDIR.$settings['sitebanner']) : '');
                $info['banner_title'] = $settings['sitename'];
                $info['banner_link'] = $info['custom_banner_link'] ?: BASEDIR.$settings['opening_page'];
                $info['banner_position'] = $info['logoposition_xs']." ".$info['logoposition_sm']." ".$info['logoposition_md']." ".$info['logoposition_lg'];
                $info['banner_class'] = (!empty($info['banner_class']) ? $info['banner_class'] : '');
            }
        }
        $info['search'] = Steam::getInstance()->load('Navigation')->search($info);
        if (!$info['navbar_class']) {
            $info['navbar_class'] = 'navbar-expand-lg navbar-light bg-light';
        }
        $info['responsive_class'] = ($info['responsive'] ? 'navbar-collapse collapse' : 'menu');
        ksort($info);

        return fusion_render(BOILERPLATES.'bootstrap4/html/', 'navbar.twig', $info, TRUE);
    }

    public static function getSearch($info) {
        $locale = fusion_get_locale();
        $settings = fusion_get_settings();
        if ($info['searchbar']) {
            // Add in a new default search form.
            // LI first
            return openform('searchform', 'post', FUSION_ROOT.BASEDIR.'search.php?stype='.$settings['default_search'],
                    [
                        'inline' => TRUE,
                        //'remote_url' => $settings['site_path'].'search.php'
                    ]
                ).form_text('stext', '', '',
                    [
                        'placeholder'        => $locale['search'],
                        'append_button'      => TRUE,
                        'append_type'        => "submit",
                        "append_form_value"  => $locale['search'],
                        "append_value"       => "<i class='".$info['search_icon']."' title='".$locale['search']."'></i>",
                        "append_button_name" => "search",
                        "append_class"       => $info['search_btn_class'],
                        'class'              => 'm-0',
                    ]
                ).closeform();
        }
        return '';
    }

}