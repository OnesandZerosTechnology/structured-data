<?php

namespace onesandzeros\StructuredData;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FieldList;

class SchemaSiteConfigExtension extends DataExtension {
	
	private static $db = [
		'SDTelephone' => 'Varchar(255)',
		'SDFax' => 'Varchar(255)',
		'SDEmail' => 'Varchar(255)',
		'SDContactType' => 'Enum(array("customer support", "technical support", "billing support", "bill payment", "sales", "reservations", "credit card support", "emergency", "baggage tracking", "roadside assistance", "package tracking"))',
		'SDStreetAddress' => 'Varchar(255)',
		'SDAddressLocality' => 'Varchar(255)',
		'SDAddressRegion' => 'Varchar(255)',
		'SDPostalCode' => 'Varchar(255)',
		'SDAddressCountry' => 'Varchar(255)',
	];

	private static $has_one = [
		'SDLogo' => Image::class
	];

	private static $owns = [
		'SDLogo'
	];

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab(
			'Root.ContactPoint',
			[
				TextField::create('SDTelephone', 'Telephone')->setRightTitle('An internationalized version of the phone number, starting with the "+" symbol and country code (+64 in New Zealand. e.g.+1-800-555-1212, +44-2078225951'),
				TextField::create('SDFax', 'Fax'),
				EmailField::create('SDEmail', 'Email'),
				DropdownField::create('SDContactType', 'Contact Type', $this->owner->dbObject('SDContactType')->enumValues()),
				UploadField::create('SDLogo', 'Logo'),
				TextField::create('SDStreetAddress', 'Street Address'),
				TextField::create('SDAddressLocality', 'Address Locality'),
				TextField::create('SDAddressRegion', 'Address Region'),
				TextField::create('SDPostalCode', 'Postal Code'),
				TextField::create('SDAddressCountry', 'Address Country'),
			]
		);

		return $fields;
	}

}