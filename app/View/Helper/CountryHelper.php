<?php 
/**
 * Helper for outputing a country select list.
 *
 * Allows you to include a selec list of all countries using 1 line of code.
 *
 * Author: Tane Piper (digitalspaghetti@gmail.com)
 * URL: http://digitalspaghetti.me.uk
 *
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */


class CountryHelper extends FormHelper
{
    
    public $helpers = array('Form');
    
    function select($fieldname,  $default="  ", $attributes=array())
    {
          $list = $this->Form->select($fieldname , array(
            '  ' =>    __('Please select a country'),
            '--' => __('None'),
            'Afganistan' => __('Afganistan'),
            'Albania' => __('Albania'),
            'Algeria' => __('Algeria'),
            'American Samoa' => __('American Samoa'),
            'Andorra' => __('Andorra'), 
            'Angola' => __('Angola'),
            'Anguilla' => __('Anguilla'),
            'Antarctica' => __('Antarctica'),
            'Antigua and Barbuda' => __('Antigua and Barbuda'), 
            'Argentina' => __('Argentina'), 
            'Armenia' => __('Armenia'), 
            'Aruba' => __('Aruba'), 
            'Australia' => __('Australia'), 
            'Austria' => __('Austria'), 
            'Azerbaijan' => __('Azerbaijan'),
            'Bahamas' => __('Bahamas'), 
            'Bahrain' => __('Bahrain'), 
            'Bangladesh' => __('Bangladesh'),
            'Barbados' => __('Barbados'),
            'Belarus' => __('Belarus'), 
            'Belgium' => __('Belgium'), 
            'Belize' => __('Belize'),
            'Benin' => __('Benin'), 
            'Bermuda' => __('Bermuda'), 
            'Bhutan' => __('Bhutan'),
            'Bolivia' => __('Bolivia'), 
            'Bosnia and Herzegowina' => __('Bosnia and Herzegowina'),
            'Botswana' => __('Botswana'),
            'Bouvet Island' => __('Bouvet Island'), 
            'British Indian Ocean Territory' => __('Brazil'),
            'British Indian Ocean Territory' => __('British Indian Ocean Territory'),
            'Brunei Darussalam' => __('Brunei Darussalam'), 
            'Bulgaria' => __('Bulgaria'),
            'Burkina Faso' => __('Burkina Faso'),
            'Burundi' => __('Burundi'), 
            'Cambodia' => __('Cambodia'),
            'Cameroon' => __('Cameroon'),
            'Canada' => __('Canada'),
            'Cape Verde' => __('Cape Verde'),
            'Cayman Islands' => __('Cayman Islands'),
            'Central African Republic' => __('Central African Republic'),
            'Chad' => __('Chad'),
            'Chile' => __('Chile'), 
            'China' => __('China'),
            'Christmas Island' => __('Christmas Island'),    
            'Cocos (Keeling) Islands' => __('Cocos (Keeling) Islands'), 
            'Colombia' => __('Colombia'),
            'Comoros' => __('Comoros'), 
            'Congo' => __('Congo'), 
            'Congo, the Democratic Republic of the' => __('Congo, the Democratic Republic'), 
            'Cook Islands' => __('Cook Islands'),
            'Costa Rica' => __('Costa Rica'),
            'Cote d\'Ivoire' => __('Cote d\'Ivoire'), 
            'Croatia (Hrvatska)' => __('Croatia (Hrvatska)'),
            'Cuba' => __('Cuba'),
            'Cyprus' => __('Cyprus'),
            'Czech Republic' => __('Czech Republic'),
            'Denmark' => __('Denmark'), 
            'Djibouti' => __('Djibouti'),
            'Dominica' => __('Dominica'),
            'Dominican Republic' => __('Dominican Republic'),
            'East Timor' => __('East Timor'),
            'Ecuador' => __('Ecuador'), 
            'Egypt' => __('Egypt'), 
            'El Salvador' => __('El Salvador'), 
            'Equatorial Guinea' => __('Equatorial Guinea'), 
            'Eritrea' => __('Eritrea'), 
            'Estonia' => __('Estonia'), 
            'Ethiopia' => __('Ethiopia'),
            'Falkland Islands (Malvinas)' => __('Falkland Islands (Malvinas)'), 
            'Faroe Islands' => __('Faroe Islands'), 
            'Fiji' => __('Fiji'),
            'Finland' => __('Finland'),
            'France' => __('France'),
            'France, Metropolitan' => __('France, Metropolitan'),
            'French Guiana' => __('French Guiana'), 
            'French Polynesia' => __('French Polynesia'),
            'French Southern Territories' => __('French Southern Territories'), 
            'Gabon' => __('Gabon'), 
            'Gambia' => __('Gambia'),
            'Georgia' => __('Georgia'), 
            'Germany' => __('Germany'), 
            'Ghana' => __('Ghana'), 
            'Gibraltar' => __('Gibraltar'), 
            'Greece' => __('Greece'),
            'Greenland' => __('Greenland'), 
            'Grenada' => __('Grenada'), 
            'Guadeloupe' => __('Guadeloupe'),
            'Guam' => __('Guam'),
            'Guatemala' => __('Guatemala'), 
            'Guinea' => __('Guinea'),
            'Guinea-Bissau' => __('Guinea-Bissau'), 
            'Guyana' => __('Guyana'),
            'Haiti' => __('Haiti'), 
            'Heard and Mc Donald Islands' => __('Heard and Mc Donald Islands'), 
            'Holy See (Vatican City State)' => __('Holy See (Vatican City State)'), 
            'Honduras' => __('Honduras'),
            'Hong Kong' => __('Hong Kong'), 
            'Hungary' => __('Hungary'), 
            'Iceland' => __('Iceland'), 
            'India' => __('India'), 
            'Indonesia' => __('Indonesia'), 
            'Iran (Islamic Republic of)' => __('Iran (Islamic Republic of)'),
            'Iraq' => __('Iraq'),
            'Ireland' => __('Ireland'), 
            'Israel' => __('Israel'),
            'Italy' => __('Italy'), 
            'Jamaica' => __('Jamaica'), 
            'Japan' => __('Japan'),
            'Jordan' => __('Jordan'),
            'Kazakhstan' => __('Kazakhstan'),
            'Kenya' => __('Kenya'), 
            'Kiribati' => __('Kiribati'),
            'Korea, Democratic People\'s Republic of' => __('Korea, Democratic People\'s'),
            'Korea, Republic of' => __('Korea, Republic of'),
            'Kuwait' => __('Kuwait'),
            'Kyrgyzstan' => __('Kyrgyzstan'),
            'Lao People\'s Democratic Republic' => __('Lao People\'s Democratic Republic'),
            'Latvia' => __('Latvia'),
            'Lebanon' => __('Lebanon'),
            'Lesotho' => __('Lesotho'), 
            'Liberia' => __('Liberia'), 
            'Libyan Arab Jamahiriya' => __('Libyan Arab Jamahiriya'),
            'Liechtenstein' => __('Liechtenstein'), 
            'Lithuania' => __('Lithuania'),
            'Luxembourg' => __('Luxembourg'),
            'Macau' => __('Macau'), 
            'Macedonia, The Former Yugoslav Republic of' => __('Macedonia, The Former Yugoslav'),
            'Madagascar' => __('Madagascar'),
            'Malawi' => __('Malawi'),
            'Malaysia' => __('Malaysia'),
            'Maldives' => __('Maldives'),
            'Mali' => __('Mali'),
            'Malta' => __('Malta'),
            'Marshall Islands' => __('Marshall Islands'),
            'Martinique' => __('Martinique'),
            'Mauritania' => __('Mauritania'),
            'Mauritius' => __('Mauritius'),
            'Mayotte' => __('Mayotte'), 
            'Mexico' => __('Mexico'),
            'Micronesia, Federated States of' => __('Micronesia, Federated States of'),
            'Moldova, Republic of' => __('Moldova, Republic of'),
            'Monaco' => __('Monaco'),
            'Mongolia' => __('Mongolia'),
            'Montserrat' => __('Montserrat'),
            'Morocco' => __('Morocco'),
            'Mozambique' => __('Mozambique'),
            'Myanmar' => __('Myanmar'),
            'Namibia' => __('Namibia'),
            'Nauru' => __('Nauru'), 
            'Nepal' => __('Nepal'), 
            'Netherlands' => __('Netherlands'),
            'Netherlands Antilles' => __('Netherlands Antilles'),
            'New Caledonia' => __('New Caledonia'),
            'New Zealand' => __('New Zealand'), 
            'Nicaragua' => __('Nicaragua'), 
            'Niger' => __('Niger'), 
            'Nigeria' => __('Nigeria'), 
            'Niue' => __('Niue'),
            'Norfolk Island' => __('Norfolk Island'),
            'Northern Mariana Islands' => __('Northern Mariana Islands'),
            'Norway' => __('Norway'),
            'Oman' => __('Oman'),
            'Pakistan' => __('Pakistan'),
            'Palau' => __('Palau'),
            'Panama' => __('Panama'),
            'Papua New Guinea' => __('Papua New Guinea'),
            'Paraguay' => __('Paraguay'),
            'Peru' => __('Peru'),
            'Philippines' => __('Philippines'),
            'Pitcairn' => __('Pitcairn'),
            'Poland' => __('Poland'),
            'Portugal' => __('Portugal'),
            'Puerto Rico' => __('Puerto Rico'),
            'Qatar' => __('Qatar'),
            'Reunion' => __('Reunion'),
            'Romania' => __('Romania'),
            'Russian Federation' => __('Russian Federation'),
            'Rwanda' => __('Rwanda'),
            'Saint Kitts and Nevis' => __('Saint Kitts and Nevis'), 
            'LC' => __('Saint LUCIA'), 
            'Saint Vincent and the Grenadines' => __('Saint Vincent and the Grenadines'),
            'Samoa' => __('Samoa'), 
            'San Marino' => __('San Marino'),
            'Sao Tome and Principe' => __('Sao Tome and Principe'),
            'Saudi Arabia' => __('Saudi Arabia'),
            'Senegal' => __('Senegal'),
            'Seychelles' => __('Seychelles'),
            'Sierra Leone' => __('Sierra Leone'),
            'Singapore' => __('Singapore'), 
            'Slovakia (Slovak Republic)' => __('Slovakia (Slovak Republic)'),
            'Slovenia' => __('Slovenia'),
            'Solomon Islands' => __('Solomon Islands'),
            'Somalia' => __('Somalia'), 
            'South Africa' => __('South Africa'),
            'South Georgia and the South Sandwich Islands' => __('South Georgia '),
            'Spain' => __('Spain'),
            'Sri Lanka' => __('Sri Lanka'),
            'St. Helena' => __('St. Helena'),
            'St. Pierre and Miquelon' => __('St. Pierre and Miquelon'), 
            'Sudan' => __('Sudan'), 
            'Suriname' => __('Suriname'),
            'Svalbard and Jan Mayen Islands' => __('Svalbard and Jan Mayen Islands'),
            'Swaziland' => __('Swaziland'), 
            'Sweden' => __('Sweden'),
            'Switzerland' => __('Switzerland'), 
            'Syrian Arab Republic' => __('Syrian Arab Republic'),
            'Taiwan, Province of China' => __('Taiwan, Province of China'),
            'Tajikistan' => __('Tajikistan'),
            'Tanzania, United Republic of' => __('Tanzania, United Republic of'),
            'Thailand' => __('Thailand'),
            'Togo' => __('Togo'),
            'Tokelau' => __('Tokelau'),
            'Tonga' => __('Tonga'), 
            'Trinidad and Tobago' => __('Trinidad and Tobago'), 
            'Tunisia' => __('Tunisia'), 
            'Turkey' => __('Turkey'),
            'Turkmenistan' => __('Turkmenistan'),
            'Turks and Caicos Islands' => __('Turks and Caicos Islands'),
            'Tuvalu' => __('Tuvalu'),
            'Uganda' => __('Uganda'),
            'Ukraine' => __('Ukraine'),
            'United Arab Emirates' => __('United Arab Emirates'),
            'United Kingdom' => __('United Kingdom'),
            'United States' => __('United States'),
            'United States Minor Outlying Islands' => __('United States Minor Outlying'),
            'Uruguay' => __('Uruguay'), 
            'Uzbekistan' => __('Uzbekistan'),
            'Vanuatu' => __('Vanuatu'), 
            'Venezuela' => __('Venezuela'),
            'Viet Nam' => __('Viet Nam'),
            'Virgin Islands (British)' => __('Virgin Islands (British)'),
            'Virgin Islands (U.S.)' => __('Virgin Islands (U.S.)'), 
            'Wallis and Futuna Islands' => __('Wallis and Futuna Islands'), 
            'Western Sahara' => __('Western Sahara'),
            'Yemen' => __('Yemen'), 
            'Yugoslavia' => __('Yugoslavia'),
            'Zambia' => __('Zambia'),
            'Zimbabwe' => __('Zimbabwe')            
            ), $default, $attributes);
       
        return $this->output($list);
    }

}
?> 