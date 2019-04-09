<?php
use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options()
{


    /** ........................................................................
     *                                                                         *
     *                                                                         *
     *                               THEME OPTIONS                             *
     *                                                                         *
     *                                                                         *
     *........................................................................ **/


    Container::make('theme_options', __('Theme Options', 'best4u'))
        ->set_page_file('trebbe-options')//admin slug
        ->set_icon('dashicons-carrot')
        ->add_tab('header', array(
            Field::make('separator', 'header_contact_s', __('Header Contact Info', 'best4u')),
            Field::make('text', 'header_phone', 'Phone')->set_width(33.33),
            Field::make('text', 'header_site_url', 'Website URL')->set_width(33.33),
            Field::make('text', 'header_site_text', 'Website name')->set_width(33.33),
            Field::make('separator', 'hero_image_s', __('Default Hero Image', 'best4u')),
            Field::make('image', 'hero_image_default', '')->set_width(100),
        ))
        ->add_tab('footer', array(

            Field::make('separator', 'footer_subscribe_s', __('Subscribe', 'best4u')),
            Field::make('image', 'footer_subscribe_cover', __('Cover Image', 'best4u'))->set_width(5),
            Field::make('text', 'footer_subscribe_title', __('Title', 'best4u'))->set_width(33.33),
            Field::make('text', 'footer_subscribe_desc', __('Description', 'best4u'))->set_width(33.33),

            Field::make('separator', 'footer_copyright', __('Copyright', 'best4u')),
            Field::make('text', 'copyright', ''),

            Field::make('separator', 'footer_social_icon_s', __('Social Menu', 'best4u')),


            Field::make('complex', 'footer_social_icons', __(''))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('select', 'footer_social_icon', __('Choose icon'))
                        ->set_options(array(
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                            'google' => 'Google+',
                            'instagram' => 'Instagram',
                            'linkedin' => 'LinkedIn',
                        ))
                        ->set_width(30),
                    Field::make('text', 'footer_social_link', __('Link'))->set_width(70),
                ))
                ->set_header_template('<%- footer_social_icon %>')
        ))
        ->add_tab('Scripts', array(
            Field::make('header_scripts', 'header_scripts', 'Header Scripts'),

            Field::make('footer_scripts', 'footer_scripts', 'Footer Scripts'),

        ));

    // Add CPT subpage

    Container::make('theme_options', __('Post Type Options', 'best4u'))
        ->set_page_file('trebbe-options-cpt')//admin slug
        ->set_page_parent('trebbe-options')// identificator of the "Appearance" admin section

        ->add_tab(__('Vacancies', 'best4u'), array(
            Field::make('separator', 'cpt_vacancies_separator_0', __('Image Hero', 'best4u')),
            Field::make('image', 'cpt_vacancies_cover', '')->set_width(100),


            Field::make('separator', 'cpt_vacancies_separator_2', __('Before Content', 'best4u')),
            Field::make('rich_text', 'cpt_vacancies_before', '')->set_width(100),

            Field::make('separator', 'cpt_vacancies_separator_3', __('After Content', 'best4u')),
            Field::make('rich_text', 'cpt_vacancies_after', '')->set_width(100),

            Field::make('separator', 'cpt_vacancies_separator_4', __('Single Page', 'best4u')),
            Field::make('text', 'cpt_vacancies_hero_btn_link', 'Hero Image Button - Link')->set_width(50),
            Field::make('text', 'cpt_vacancies_hero_btn_text', 'Hero Image Button - Text')->set_width(50)


        ))
        ->add_tab(__('Our Heroes', 'best4u'), array(
            Field::make('separator', 'cpt_our_heroes_0', __('Image Hero', 'best4u')),
            Field::make('image', 'cpt_our_heroes_cover', '')->set_width(100),

            Field::make('separator', 'cpt_our_heroes_1', __('Before Content', 'best4u')),
            Field::make('rich_text', 'cpt_our_heroes_before', '')->set_width(100),

            Field::make('separator', 'cpt_our_heroes_separator_2', __('After Content', 'best4u')),
            Field::make('rich_text', 'cpt_our_heroes_after', '')->set_width(100),

        ))
        ->add_tab(__('Culture', 'best4u'), array(
            Field::make('separator', 'cpt_culture_0', __('Image Hero', 'best4u')),
            Field::make('image', 'cpt_culture_cover', '')->set_width(100),

            Field::make('separator', 'cpt_culture_1', __('Before Content', 'best4u')),
            Field::make('rich_text', 'cpt_culture_before', '')->set_width(100),

            Field::make('separator', 'cpt_culture_separator_2', __('After Content', 'best4u')),
            Field::make('rich_text', 'cpt_culture_after', '')->set_width(100),
        ));

}