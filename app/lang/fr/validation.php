<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "Le champ :attribute doit être accepté.",
	"active_url"           => "Le champ :attribute n'est pas une URL valide.",
	"after"                => "Le champ :attribute doit être une date après le :date.",
	"alpha"                => "Le champ :attribute ne doit contenir que des lettres.",
	"alpha_dash"           => "Le champ :attribute ne doit contenir que des lettres, numéros et des dashes.",
	"alpha_num"            => "Le champ :attribute ne doit contenir que des lettres et des numéros.",
	"array"                => "Le champ :attribute doit être un tableau.",
	"before"               => "Le champ :attribute doit être une date avant le :date.",
	"between"              => array(
		"numeric" => "Le champ :attribute doit être entre :min and :max.",
		"file"    => "le champ :attribute doit être entre :min and :max kilobytes.",
		"string"  => "Le champ :attribute doit être entre :min and :max characters.",
		"array"   => "Le champ :attribute doit être entre :min and :max items.",
	),
	"confirmed"            => "Le champ :attribute confirmation ne correspond pas.",
	"date"                 => "Le champ :attribute n'est pas une date valide.",
	"date_format"          => "Le champ :attribute ne répond pas au format :format.",
	"different"            => "Le champ :attribute et :other doivent être différents.",
	"digits"               => "Le champ :attribute doit être :digits digits.",
	"digits_between"       => "Le champ :attribute doit être entre :min et :max digits.",
	"email"                => "Le champ :attribute doit être une adresse mail valide.",
	"exists"               => "L'attribut :attribute seléctionné est invalide.",
	"image"                => "Le champ :attribute doit être une image.",
	"in"                   => "L'attribut :attribute seléctionné est invalide.",
	"integer"              => "Le champ :attribute doit être un entier.",
	"ip"                   => "Le champ :attribute doit être une adresse IP valide.",
	"max"                  => array(
		"numeric" => "Le champ :attribute ne doit pas dépasser :max.",
		"file"    => "Le champ :attribute ne doit pas dépasser les :max kilobytes.",
		"string"  => "Le champ :attribute ne doit pas dépasser les :max caractères.",
		"array"   => "Le champ :attribute ne doit pas dépasser les :max items.",
	),
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min caractères.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "Le champ :attribute doit être un numéro.",
	"regex"                => "Le champ :attribute n'est pas valide.",
	"required"             => "The :attribute field is required.",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "Le champ :attribute et le champ :other doivent correspondre.",
	"size"                 => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"               => "Le champ :attribute est déjà utilisé.",
	"url"                  => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
