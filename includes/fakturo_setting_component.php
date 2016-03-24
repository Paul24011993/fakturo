<?php

/**
* 
*/
class FakturoSettingComponent
{	
	public static function getFakturoSettingTabs() {
		return apply_filters( 'FakturoSettingTabs', array( 
			'general' => __( '​​General Settings', FAKTURO_TEXT_DOMAIN ), 
			'tables' => __( 'Tables', FAKTURO_TEXT_DOMAIN ), 
			'products' => __( '​​Products', FAKTURO_TEXT_DOMAIN ), 
			'taxes' => __( 'Taxes', FAKTURO_TEXT_DOMAIN ), 
			'countries' => __( 'Countries', FAKTURO_TEXT_DOMAIN ), 
			'extensions' => __( '​​Extensions', FAKTURO_TEXT_DOMAIN ))
		);
	}

	public static function getFakturoSettingSections() {
		return apply_filters( 'FakturoSettingSections', array(
		'general' => array( 
			'company_info' => __( 'Company Info', FAKTURO_TEXT_DOMAIN ), 
			'system_settings' => __( 'System Settings', FAKTURO_TEXT_DOMAIN ), 
			'invoice_type' => __( 'Invoice Types', FAKTURO_TEXT_DOMAIN ),
			'payment_types' => __( 'Payment Types', FAKTURO_TEXT_DOMAIN ), 
			'currencies' => __( 'Currencies', FAKTURO_TEXT_DOMAIN ),
			'user_preferences' => __( 'User Preferences', FAKTURO_TEXT_DOMAIN ), 
			'users' => __( 'Users', FAKTURO_TEXT_DOMAIN )),
		'tables' => array( 'user-template' => __( 'User Template', FAKTURO_TEXT_DOMAIN ),
           'print-template' => __( 'Print Template', FAKTURO_TEXT_DOMAIN ), 
			'bank_entities' => __( 'Bank Entities', FAKTURO_TEXT_DOMAIN ),
			'locations' => __( 'Locations', FAKTURO_TEXT_DOMAIN )),
		'products' => array( 'product_types' => __( 'Product Types', FAKTURO_TEXT_DOMAIN ),
			'packagings' => __( 'Packagings', FAKTURO_TEXT_DOMAIN ), 
			'price_scales' => __( 'Price Scales', FAKTURO_TEXT_DOMAIN ),
			'origins' => __( 'Origins', FAKTURO_TEXT_DOMAIN )),
		'taxes' => array( 'taxes' => __( 'Taxes', FAKTURO_TEXT_DOMAIN ),
			'tax_condition' => __( 'Tax Conditions', FAKTURO_TEXT_DOMAIN )),
		'countries' => array( 'countries' => __( 'Countries', FAKTURO_TEXT_DOMAIN ),
			'states' => __( 'States', FAKTURO_TEXT_DOMAIN )),
		'extensions' => array( 'repairs_status' => __( 'Repairs Status', FAKTURO_TEXT_DOMAIN ),
           'emails' => __( 'Emails', FAKTURO_TEXT_DOMAIN ) )
		));
		
	}

	public static function getFakturoSettingSection($name = 'general') {
		return self::getFakturoSettingSections()[$name];
	}

	public static function getFakturoCurrentSection() {
		if (isset($_GET['section'])) {
			return $_GET['section'];
		}

		if (isset($_GET['tab'])) {
			return key(self::getFakturoSettingSection($_GET['tab']));
		}
		return key(self::getFakturoSettingSection( key(self::getFakturoSettingTabs()) ));
	}

	public static function getCurrencies() {
		return apply_filters('FakturoSettingCurrency', array(
			'USD' => 'US Dollars ($)',
			'EUR' => 'Euros (€)',
			'GBP' => 'Pounds Sterling (£)',
			'AUD' => 'Australian Dollars ($)',
			'BRL' => 'Brazilian Real (R$)',
			'CAD' => 'Canadian Dollars ($)',
			'CZK' => 'Czech Koruna',
			'DKK' => 'Danish Krone',
			'HKD' => 'Hong Kong Dollar ($)',
			'HUF' => 'Hungarian Forint',
			'ILS' => 'Israeli Shekel (₪)',
			'JPY' => 'Japanese Yen (¥)',
			'MYR' => 'Malaysian Ringgits',
			'MXN' => 'Mexican Peso ($)',
			'NZD' => 'New Zealand Dollar ($)',
			'NOK' => 'Norwegian Krone',
			'PHP' => 'Philippine Pesos',
			'PLN' => 'Polish Zloty',
			'SGD' => 'Singapore Dollar ($)',
			'SEK' => 'Swedish Krona',
			'CHF' => 'Swiss Franc',
			'TWD' => 'Taiwan New Dollars',
			'THB' => 'Thai Baht (฿)',
			'INR' => 'Indian Rupee',
			'TRY' => 'Turkish Lira',
			'RIAL' => 'Iranian Rial',
			'RUB' => 'Russian Rubles'
		));
	}
}

?>