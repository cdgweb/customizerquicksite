<?

//Super Customizer

add_action( 'customize_register', 'excalibur_customize_register' );
function excalibur_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'meet_details' , array(
	    'title'      => __( 'Meet Details', 'Epik' ),
	    'priority'   => 150,
        'capability' => 'edit_theme_options', //Capability needed to tweak
        'description' => __('Allows you to enter the details for the event.', 'Epik'),
   	) );

		$wp_customize->add_setting( 'event_date' , array(
		    'default'     => '00-00-00',
		) );   
		
		$wp_customize->add_control( 'event_date', array(
		'label'        => __( 'Event Date', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'event_date',
		'priority'   => 1,
		) );
	      
		$wp_customize->add_setting( 'event_location' , array(
		    'default'     => 'City State Etc.',
		) );   
		
		$wp_customize->add_control( 'event_location', array(
		'label'        => __( 'Event Location', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'event_location',
		'priority'   => 2,
		) );
	
		$wp_customize->add_setting( 'registration_deadline' , array(
		    'default'     => '00-00-0000',
		) );   
		
		$wp_customize->add_control( 'registration_deadline', array(
		'label'        => __( 'Registration Deadline', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'registration_deadline',
		'priority'   => 4,
		) );
	
		$wp_customize->add_setting( 'schedule_avail_date' , array(
		    'default'     => '00-00-0000',
		) );   
		
		$wp_customize->add_control( 'schedule_avail_date', array(
		'label'        => __( 'Schedule Available Date', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'schedule_avail_date',
		'priority'   => 5,
		) );
	
		$wp_customize->add_setting( 'meet_manager' , array(
		    'default'     => 'Gustavo Moure',
		) );   
		
		$wp_customize->add_control( 'meet_manager', array(
		'label'        => __( 'Meet Manager Name', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'meet_manager',
		'priority'   => 6,
		) );
	
		$wp_customize->add_setting( 'meet_manager_email' , array(
		    'default'     => 'gmoure@excalibur-gymnastics.com',
		) );   
		
		$wp_customize->add_control( 'meet_manager_email', array(
		'label'        => __( 'Meet Manager Email', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'meet_manager_email',
		'priority'   => 7,
		) );
	
		$wp_customize->add_setting( 'fig_age_date_girls' , array(
		    'default'     => '12-31-2014',
		) );   
		
		$wp_customize->add_control( 'fig_age_date_girls', array(
		'label'        => __( 'FIG Age Date Girls', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'fig_age_date_girls',
		'priority'   => 8,
		) );
	
		$wp_customize->add_setting( 'fig_age_date_boys' , array(
		    'default'     => '09-01-2013',
		) );   
		
		$wp_customize->add_control( 'fig_age_date_boys', array(
		'label'        => __( 'FIG Age Date Boys', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'fig_age_date_boys',
		'priority'   => 9,
		) );
	
		$wp_customize->add_setting('meet_sponsor', array(
			'default' => 'Sports and Beyond',
		));
	
		$wp_customize->add_control('meet_sponsor', array(
	    'priority'   => 10,
		'label' => 'Key Sponsor',
		'section' => 'meet_details',
		'type' => 'select',
		'choices' => array(
			'Sports and Beyond' => 'Sports and Beyond',
			'Excalibur Gymnastics' => 'Excalibur Gymnastics',
			)
		));
		
		$wp_customize->add_setting( 'meet_host' , array(
		    'default'     => '',
		) );   
		
		$wp_customize->add_control( 'meet_host', array(
		'label'        => __( 'Meet Host', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'meet_host',
		'priority'   => 10,
		) );
	
		$wp_customize->add_setting( 'special-prize' , array(
		    'default'     => 'Participating gyms who register 50 or more gymnasts for the Excalibur Cup will receive a FREE FLAT SCREEN TV!',
		) );   
		
		$wp_customize->add_control( 'special-prize', array(
		'label'        => __( 'Special Prize Description', 'Epik' ),
		'section'    => 'meet_details',
		'settings'   => 'special-prize',
		'priority'   => 11,
		) );

	$wp_customize->add_section( 'venue_details' , array(
    'title'      => __( 'Venue Details', 'Epik' ),
    'priority'   => 160,
    'capability' => 'edit_theme_options', //Capability needed to tweak
    'description' => __('Allows you to enter the details for the venue.', 'Epik'),
   	) );
	
		$wp_customize->add_setting( 'venue_address' , array(
		'default'     => '',
		) );   
		
		$wp_customize->add_control( 'venue_address', array(
		'label'        => __( 'Venue Address', 'Epik' ),
		'section'    => 'venue_details',
		'settings'   => 'venue_address',
		'priority'   => 1,
		) );
	
			$wp_customize->add_setting( 'venue_address_street' , array(
			'default'     => '277 N Avenida Caballeros',
			) );   
			
			$wp_customize->add_control( 'venue_address_street', array(
			'label'        => __( 'Venue Street Address', 'Epik' ),
			'section'    => 'venue_details',
			'settings'   => 'venue_address_street',
			'priority'   => 2,
			) );

			$wp_customize->add_setting( 'venue_address_city' , array(
			'default'     => 'Palm Springs',
			) );   
			
			$wp_customize->add_control( 'venue_address_city', array(
			'label'        => __( 'Venue City', 'Epik' ),
			'section'    => 'venue_details',
			'settings'   => 'venue_address_city',
			'priority'   => 3,
			) );

			$wp_customize->add_setting( 'venue_address_state' , array(
			'default'     => 'CA',
			) );   
			
			$wp_customize->add_control( 'venue_address_state', array(
			'label'        => __( 'Venue State', 'Epik' ),
			'section'    => 'venue_details',
			'settings'   => 'venue_address_state',
			'priority'   => 4,
			) );

			$wp_customize->add_setting( 'venue_address_zip' , array(
			'default'     => '92262',
			) );   
			
			$wp_customize->add_control( 'venue_address_zip', array(
			'label'        => __( 'Venue Zip Code', 'Epik' ),
			'section'    => 'venue_details',
			'settings'   => 'venue_address_zip',
			'priority'   => 5,
			) );

		$wp_customize->add_setting( 'venue_phone' , array(
		    'default'     => '(555) 555-5555',
		) );   
		
		$wp_customize->add_control( 'venue_phone', array(
		'label'        => __( 'Venue Phone', 'Epik' ),
		'section'    => 'venue_details',
		'settings'   => 'venue_phone',
		'priority'   => 6,
		) );
	
		$wp_customize->add_setting( 'venue_map_link' , array(
		    'default'     => 'https://maps.google.com',
		) );   
		
		$wp_customize->add_control( 'venue_map_link', array(
		'label'        => __( 'Venue Map Link', 'Epik' ),
		'section'    => 'venue_details',
		'settings'   => 'venue_map_link',
		'priority'   => 7,
		) );
	
		$wp_customize->add_setting( 'venue_url' , array(
		    'default'     => '',
		) );   
		
		$wp_customize->add_control( 'venue_url', array(
		'label'        => __( 'Venue Web URL', 'Epik' ),
		'section'    => 'venue_details',
		'settings'   => 'venue_url',
		'priority'   => 8,
		) );

}


// Shortcodes to return the customizer info

add_shortcode('eventdate','cdgeventdate');
function cdgeventdate() {
	return get_theme_mod('event_date');
}
add_shortcode('eventlocation','cdgeventlocation');
function cdgeventlocation() {
	return get_theme_mod('event_location');
}
add_shortcode('venueaddress','cdgvenueaddress');
function cdgvenueaddress() {
	return get_theme_mod('venue_address');
}
add_shortcode('venueaddressstreet','cdgvenueaddressstreet');
function cdgvenueaddressstreet() {
	return get_theme_mod('venue_address_street');
}
add_shortcode('venueaddresscity','cdgvenueaddresscity');
function cdgvenueaddresscity() {
	return get_theme_mod('venue_address_city');
}
add_shortcode('venueaddressstate','cdgvenueaddressstate');
function cdgvenueaddressstate() {
	return get_theme_mod('venue_address_state');
}
add_shortcode('venueaddresszip','cdgvenueaddresszip');
function cdgvenueaddresszip() {
	return get_theme_mod('venue_address_zip');
}
add_shortcode('venuephone','cdgvenuephone');
function cdgvenuephone() {
	return get_theme_mod('venue_phone');
}
add_shortcode('venuemaplink','cdgvenuemaplink');
function cdgvenuemaplink() {
	return get_theme_mod('venuemaplink');
}
add_shortcode('venueurl','cdgvenueurl');
function cdgvenueurl() {
	return get_theme_mod('venue_url');
}
add_shortcode('registrationdeadline','cdgregdeadline');
function cdgregdeadline() {
	return get_theme_mod('registration_deadline');
}
add_shortcode('scheduleavailable','cdgschedavail');
function cdgschedavail() {
	return get_theme_mod('schedule_avail_date');
}
add_shortcode('meetmanager','cdgmeetmanager');
function cdgmeetmanager() {
	return get_theme_mod('meet_manager');
}
add_shortcode('meetmanageremail','cdgmeetmanageremail');
function cdgmeetmanageremail() {
	return get_theme_mod('meet_manager_email');
}
add_shortcode('figgirls','cdgfiggirls');
function cdgfiggirls() {
	return get_theme_mod('fig_age_date_girls');
}
add_shortcode('figboys','cdgfigboys');
function cdgfigboys() {
	return get_theme_mod('fig_age_date_boys');
}
add_shortcode('meetsponsor','cdgmeetsponsor');
function cdgmeetsponsor() {
	return get_theme_mod('meet_sponsor');
}
add_shortcode('meethost','cdgmeethost');
function cdgmeethost() {
	return get_theme_mod('meet_host');
}
add_shortcode('eventtitle','cdgeventtitle');
function cdgeventtitle() {
	return get_bloginfo('name');
}
add_shortcode('specialprize','cdgspecialprize');
function cdgspecialprize() {
	return get_theme_mod('special-prize');
}
add_shortcode('eventurl','cdggeteventurl');
function cdggeteventurl() {
	return get_bloginfo('url');
}