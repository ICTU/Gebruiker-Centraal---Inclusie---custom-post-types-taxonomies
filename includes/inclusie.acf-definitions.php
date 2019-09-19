<?php

/*
// Gebruiker Centraal - inclusie.acf-definitions.php
// ----------------------------------------------------------------------------------
// ACF definities voor inclusie plugin
// ----------------------------------------------------------------------------------
// @package   ictu-gc-posttypes-inclusie
// @author    Paul van Buuren
// @license   GPL-2.0+
// @version   0.0.9
// @desc.     Bugfixing. Styling for page and other content types. Title for methodes.
// @link      https://github.com/ICTU/Gebruiker-Centraal---Inclusie---custom-post-types-taxonomies
 */


if( ! function_exists('ictu_gc_inclusie_initialize_acf_fields') ) {

	function ictu_gc_inclusie_initialize_acf_fields() {
		if( function_exists('acf_add_local_field_group') ):
			
			acf_add_local_field_group(array(
				'key' => 'group_5c8f882222034',
				'title' => 'Citaat: auteur',
				'fields' => array(
					array(
						'key' => 'field_5c8f882d1c131',
						'label' => 'citaat auteur',
						'name' => 'citaat_auteur',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'citaat',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c8fd53fbda24',
				'title' => 'Doelgroep: citaat, facts & figures',
				'fields' => array(
					array(
						'key' => 'field_5cdbde536c7d1',
						'label' => 'doelgroep_avatar',
						'name' => 'doelgroep_avatar',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'poppetje-1' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-1-small.png"> Avatar',
							'poppetje-2' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-2-small.png"> poppetje-2',
							'poppetje-3' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-3-small.png"> poppetje-3',
							'poppetje-4' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-4-small.png"> poppetje-4',
							'poppetje-5' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-5-small.png"> poppetje-5',
							'poppetje-6' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/avatar/poppetje-6-small.png"> poppetje-6',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => '',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5c922f65f8152',
						'label' => 'Bijbehorende citaten',
						'name' => 'facts_citaten',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'citaat',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
					array(
						'key' => 'field_5c8fd54f1a328',
						'label' => 'Titel boven facts & figures',
						'name' => 'facts_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c8fd568b08ec',
						'label' => 'Beschrijving facts & figures',
						'name' => 'facts_description',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'default_value' => '',
						'delay' => 0,
					),
					array(
						'key' => 'field_5c8fd57f464c4',
						'label' => 'URL facts & figures',
						'name' => 'facts_source_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5c8fd5975c283',
						'label' => 'Linktekst URL facts & figures',
						'name' => 'facts_source_label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'doelgroep',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c8fd6bacf265',
				'title' => 'Doelgroep: vaardigheden',
				'fields' => array(
					array(
						'key' => 'field_5c924f598eeab',
						'label' => 'doelgroep_vaardigheden',
						'name' => 'doelgroep_vaardigheden',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'vaardigheden',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'doelgroep',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c90e063ca578',
				'title' => 'Homepage template: inleiding, stappen en doelgroepen',
				'fields' => array(
					array(
						'key' => 'field_5c90fd5fe0a58',
						'label' => 'Inleiding op homepage',
						'name' => 'home_template_inleiding',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5c90e0739fa4b',
						'label' => 'Stappen',
						'name' => 'home_template_stappen',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'stap',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
					array(
						'key' => 'field_5c90e096cca0a',
						'label' => 'Doelgroepen',
						'name' => 'home_template_doelgroepen',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 0,
						'max' => 0,
						'layout' => 'table',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_5c9104bff7ade',
								'label' => 'Kies doelgroep',
								'name' => 'home_template_doelgroepen_doelgroep',
								'type' => 'post_object',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'post_type' => array(
									0 => 'doelgroep',
								),
								'taxonomy' => '',
								'allow_null' => 1,
								'multiple' => 0,
								'return_format' => 'object',
								'ui' => 1,
							),
							array(
								'key' => 'field_5c910507f7adf',
								'label' => 'Kies citaat',
								'name' => 'home_template_doelgroepen_citaat',
								'type' => 'post_object',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'post_type' => array(
									0 => 'citaat',
								),
								'taxonomy' => '',
								'allow_null' => 1,
								'multiple' => 0,
								'return_format' => 'object',
								'ui' => 1,
							),
						),
					),
					array(
						'key' => 'field_5ccfec39e2de3',
						'label' => 'home_template_poster',
						'name' => 'home_template_poster',
						'type' => 'file',
						'instructions' => 'Upload de PDF voor de poster',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'library' => 'all',
						'min_size' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_5ccfeccee8a61',
						'label' => 'home_template_poster_linktekst',
						'name' => 'home_template_poster_linktekst',
						'type' => 'text',
						'instructions' => 'Dit is de tekst op de downloadknop als je een PDF met de poster hebt toegevoegd.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Download de poster',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'home-inclusie.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c91ff4e9f37c',
				'title' => 'Homepage template: teasers',
				'fields' => array(
					array(
						'key' => 'field_5c91ff4eb3ace',
						'label' => 'Doelgroepen',
						'name' => 'home_template_teasers',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => 'field_5c91ff4ebb071',
						'min' => 0,
						'max' => 0,
						'layout' => 'block',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_5c91ff4ebb071',
								'label' => 'Titel',
								'name' => 'home_template_teaser_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5c91ff4ebb07a',
								'label' => 'home_template_teaser_text',
								'name' => 'home_template_teaser_text',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'basic',
								'media_upload' => 0,
								'delay' => 0,
							),
							array(
								'key' => 'field_5c92023852c87',
								'label' => 'home_template_teaser_link',
								'name' => 'home_template_teaser_link',
								'type' => 'link',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'array',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'home-inclusie.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c8f9ba967736',
				'title' => 'Stap en pagina\'s: gerelateerde content',
				'fields' => array(
					array(
						'key' => 'field_5c8fe203a8435',
						'label' => 'Gerelateerde content toevoegen?',
						'name' => 'gerelateerde_content_toevoegen',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'ja' => 'Ja',
							'nee' => 'Nee',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'nee',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5c8fd404bd765',
						'label' => 'content_block_title',
						'name' => 'content_block_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5c8fe203a8435',
									'operator' => '==',
									'value' => 'ja',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c8fd42e15a23',
						'label' => 'content_block_items',
						'name' => 'content_block_items',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5c8fe203a8435',
									'operator' => '==',
									'value' => 'ja',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'post',
							1 => 'page',
							2 => 'doelgroep',
							3 => 'stap',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'post_type',
							2 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'stap',
						),
					),
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'page',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));
			
			acf_add_local_field_group(array(
				'key' => 'group_5c8fdeebf0c34',
				'title' => 'Stap en pagina\'s: handige (externe) links',
				'fields' => array(
					array(
						'key' => 'field_5c8fe142c5418',
						'label' => 'Handige links toevoegen?',
						'name' => 'handige_links_toevoegen',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'ja' => 'Ja',
							'nee' => 'Nee',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'nee',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5c8fdeec07d4b',
						'label' => 'links_block_title',
						'name' => 'links_block_title',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5c8fe142c5418',
									'operator' => '==',
									'value' => 'ja',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c8fdeec07d58',
						'label' => 'links_block_items',
						'name' => 'links_block_items',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5c8fe142c5418',
									'operator' => '==',
									'value' => 'ja',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 1,
						'max' => 0,
						'layout' => 'table',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_5c8fdf2a0c1a1',
								'label' => 'links_block_item_url',
								'name' => 'links_block_item_url',
								'type' => 'url',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '30',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
							),
							array(
								'key' => 'field_5c8fe1000c1a2',
								'label' => 'links_block_item_linktext',
								'name' => 'links_block_item_linktext',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '30',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5c8fe10d0c1a3',
								'label' => 'links_block_item_description',
								'name' => 'links_block_item_description',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '40',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'new_lines' => '',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'stap',
						),
					),
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'page',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//------------------------------------------------------------------------------------------------

			acf_add_local_field_group(array(
				'key' => 'group_5c8fde441c0a9',
				'title' => 'Stap: inleiding en methodes',
				'fields' => array(
					array(
						'key' => 'field_5c91fb7281870',
						'label' => 'Verkorte titel',
						'name' => 'stap_verkorte_titel',
						'type' => 'text',
						'instructions' => 'Deze tekst wordt als label getoond in het stappenschema. Gebruik bij voorkeur 1 woord.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5cdb1d4374d09',
						'label' => 'Icoontje',
						'name' => 'stap_icon',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'identificeer' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/identificeer.png"> Identificeer',
							'verdiep' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/verdiep.png"> Verdiep',
							'ontwerp' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/ontwerp.png"> Ontwerp',
							'evalueer' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/evalueer.png"> Evalueer',
							'deel' => '<img src="/wp-content/plugins/ictu-gc-posttypes-inclusie/images/deel.png"> Deel',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'identificeer',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5c90bae01c857',
						'label' => 'Inleiding',
						'name' => 'stap_inleiding',
						'type' => 'wysiwyg',
						'instructions' => 'korte inleiding bij deze stap. Wordt getoond in het cirkelschema op de homepage.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5d7245be8ffc0',
						'label' => 'Titel bij de methodes',
						'name' => 'stap_methodes_titel',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Methodes',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5ce3d0e2f8917',
						'label' => 'Inleiding bij de methodes',
						'name' => 'stap_methode_inleiding',
						'type' => 'wysiwyg',
						'instructions' => 'Korte inleiding bij methoden.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Dit is een selectie van methoden, technieken en instrumenten die je in kunt zetten bij het uitvoeren van deze stap. Soms gaat het om standaardmethoden die worden ingezet voor het uitvoeren van een ontwerptraject waarbij de gebruiker centraal staat. Andere methoden richten zich specifiek op inclusie.',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_5c8fde5259d46',
						'label' => 'Methodes',
						'name' => 'stap_methodes',
						'type' => 'relationship',
						'instructions' => 'Kies de bij deze stap horende methodes.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'methode',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'stap',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//------------------------------------------------------------------------------------------------

			acf_add_local_field_group(array(
				'key' => 'group_5c9398df21747',
				'title' => 'Vaardigheid: aan- en afraders',
				'fields' => array(
					array(
						'key' => 'field_5c9398f446669',
						'label' => 'Afraders',
						'name' => 'vaardigheid_afraders',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'afrader',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
					array(
						'key' => 'field_5c93993e49d5c',
						'label' => 'Aanraders',
						'name' => 'vaardigheid_aanraders',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'aanrader',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'vaardigheden',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//--------------------------------------------------------------------------------------------
			// instellingen voor paginatemplate inclusie_template_doelgroeppagina
			acf_add_local_field_group(array(
				'key' => 'group_5d7278b291f4c',
				'title' => 'Doelgroepen op doelgroeppagina',
				'fields' => array(
					array(
						'key' => 'field_5d7278f7a35d2',
						'label' => 'Wil je alle doelgroepen tonen op deze pagina?',
						'name' => 'doelgroeppagina_showall_or_select',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'showall' => 'Ja, toon alle doelgroepen',
							'showsome' => 'Nee, laat mij de doelgroepen selecteren',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'showall',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5d7278c6a98c9',
						'label' => 'Kies doelgroepen',
						'name' => 'doelgroeppagina_kies_doelgroepen',
						'type' => 'relationship',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5d7278f7a35d2',
									'operator' => '==',
									'value' => 'showsome',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'doelgroep',
						),
						'taxonomy' => '',
						'filters' => array(
							0 => 'search',
							1 => 'taxonomy',
						),
						'elements' => '',
						'min' => '',
						'max' => '',
						'return_format' => 'object',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'inclusie_template_doelgroeppagina.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//--------------------------------------------------------------------------------------------
			// theme settings
			acf_add_local_field_group(array(
				'key' => 'group_5d726d93a46f2',
				'title' => 'Instellingen voor inclusiewebsite',
				'fields' => array(
					array(
						'key' => 'field_5d726daa06090',
						'label' => 'Pagina met doelgroepoverzicht',
						'name' => 'themesettings_inclusie_doelgroeppagina',
						'type' => 'post_object',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'page',
						),
						'taxonomy' => '',
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'instellingen',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

		endif;
    }
}    
    
