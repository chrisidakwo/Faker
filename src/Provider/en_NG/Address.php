<?php

namespace Faker\Provider\en_NG;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = [];

    protected static $streetPrefix = ['Chief', 'Dr.', 'Alhaji', 'General', 'Bishop', 'Rev.'];

    protected static $streetSuffix = ['Street', 'Avenue', 'Close', 'Boulevard', 'Way'];

    protected static $postcode = ['######'];

    protected static $cityFormats = [
        '{{cityName}}'
    ];

    protected static $streetNameFormats = [
        '{{lastName}} {{streetSuffix}}',
        '{{streetPrefix}} {{lastName}} {{streetSuffix}}',
    ];

    private static $state = [
        'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra',
        'Bauchi', 'Bayelsa', 'Benue', 'Borno',
        'Cross River',
        'Delta',
        'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe',
        'Federal Capital Territory',
        'Imo', 'Jigawa',
        'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara',
        'Lagos',
        'Nasarawa', 'Niger',
        'Ogun', 'Ondo', 'Osun', 'Oyo',
        'Plateau',
        'Rivers',
        'Sokoto',
        'Taraba',
        'Yobe',
        'Zamfara',
    ];

    protected static $country = [
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe',
    ];

    private static $cityName = [
        'Aba', 'Abakaliki', 'Abeokuta', 'Abuja', 'Ado Ekiti', 'Akure', 'Arochukwu', 'Asaba', 'Awka', 'Azare',
        'Badagry', 'Bama', 'Bauchi', 'Benin', 'Bida', 'Birnin Kebbi', 'Biu', 'Bonny Island', 'Brass', 'Bukuru', 'Buguma', 'Burutu', 'Bwari',
        'Calabar',
        'Damaturu', 'Deba Habe', 'Degema', 'Dikwa', 'Dutse',
        'Effom-Alaiye', 'Ekiti', 'Eleme', 'Enugu', 'Epe',
        'Garki', 'Gashua', 'Gboko', 'Gombe', 'Gusau', 'Gwagwalada',
        'Ibadan', 'Idah', 'Ijebu-Ode', 'Ikare', 'Ikeja', 'Ikorodu', 'Ikot Abasi', 'Ikot Ekpene', 'Ilaro', 'Ile-Ife', 'Ilesa', 'Ilorin',
        'Jalingo', "Jama'are", 'Jebba', 'Jimeta', 'Jos',
        'Kabba', 'Kaduna', 'Kano', 'Katagum', 'Katsina', 'Kaura Namoda', 'Kebbi', 'Keffi', 'Koko', 'Kontagora', 'Kukawa', 'Kuje', 'Kwali',
        'Lafia', 'Lapai', 'Lekki', 'Lokoja',
        'Maiduguri', 'Makurdi', 'Mubi', 'Minna', 'Misau', 'Mushin',
        'Nsukka', 'Numan',
        'Obafemi-Owode', 'Oka-Akoko', 'Okene', 'Okrika', 'Okpoko', 'Ogbomosho', 'Ogoja', 'Ondo', 'Onitsha', 'Oron', 'Oshogbo', 'Otukpo', 'Owerri', 'Owo',
        'Port-Harcourt', 'Pategi',
        'Sagamu', 'Sapele', 'Sokoto', 'Suleja',
        'Ugep', 'Ughelli', 'Umuahia', 'Uromi', 'Uyo',
        'Victoria Island', 'Vom',
        'Warri', 'Wase',
        'Yenagoa', 'Yola',
        'Zaria',
    ];

    private static $region = [
        'North-Central', 'North-East', 'North-West',
        'South-East', 'South-South', 'South-West',
    ];

    /**
     * @example 'Chief'
     *
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Randomly returns a Nigerian city.
     *
     * @example 'Ikeja'
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * Randomly returns a Nigerian state.
     *
     * @example 'Lagos'
     *
     * @return string
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * Randomly returns a Nigerian region.
     *
     * @example 'South-South'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }
}
