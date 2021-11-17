<?php

namespace Faker\Provider\fr_FR;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = ['Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan'];
    protected static $streetPrefix = ['rue', 'rue', 'chemin', 'avenue', 'boulevard', 'place', 'impasse'];
    protected static $cityFormats = [
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}-sur-{{lastName}}',
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} de {{lastName}}',
    ];
    protected static $streetAddressFormats = [
        '{{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
    ];
    protected static $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    protected static $buildingNumber = ['%', '%#', '%#', '%#', '%##'];
    protected static $postcode = ['#####', '## ###'];

    protected static $country = [
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Regions_of_France
     */
    private static $regions = [
        'Auvergne-Rhône-Alpes', 'Bourgogne-Franche-Comté', 'Bretagne', 'Centre-Val de Loire', 'Corse', 'Grand Est', 'Hauts-de-France',
        'Île-de-France', 'Normandie', 'Nouvelle-Aquitaine', 'Occitanie', 'Pays de la Loire', "Provence-Alpes-Côte d'Azur",
        'Guadeloupe', 'Martinique', 'Guyane', 'La Réunion', 'Mayotte',
    ];

    private static $departments = [
        ['Ain' => '01'], ['Aisne' => '02'], ['Allier' => '03'], ['Alpes-de-Haute-Provence' => '04'], ['Hautes-Alpes' => '05'],
        ['Alpes-Maritimes' => '06'], ['Ardèche' => '07'], ['Ardennes' => '08'], ['Ariège' => '09'], ['Aube' => '10'],
        ['Aude' => '11'], ['Aveyron' => '12'], ['Bouches-du-Rhône' => '13'], ['Calvados' => '14'], ['Cantal' => '15'],
        ['Charente' => '16'], ['Charente-Maritime' => '17'], ['Cher' => '18'], ['Corrèze' => '19'], ['Corse-du-Sud' => '2A'],
        ['Haute-Corse' => '2B'], ["Côte-d'Or" => '21'], ["Côtes-d'Armor" => '22'], ['Creuse' => '23'], ['Dordogne' => '24'],
        ['Doubs' => '25'], ['Drôme' => '26'], ['Eure' => '27'], ['Eure-et-Loir' => '28'], ['Finistère' => '29'], ['Gard' => '30'],
        ['Haute-Garonne' => '31'], ['Gers' => '32'], ['Gironde' => '33'], ['Hérault' => '34'], ['Ille-et-Vilaine' => '35'],
        ['Indre' => '36'], ['Indre-et-Loire' => '37'], ['Isère' => '38'], ['Jura' => '39'], ['Landes' => '40'], ['Loir-et-Cher' => '41'],
        ['Loire' => '42'], ['Haute-Loire' => '43'], ['Loire-Atlantique' => '44'], ['Loiret' => '45'], ['Lot' => '46'],
        ['Lot-et-Garonne' => '47'], ['Lozère' => '48'], ['Maine-et-Loire' => '49'], ['Manche' => '50'], ['Marne' => '51'],
        ['Haute-Marne' => '52'], ['Mayenne' => '53'], ['Meurthe-et-Moselle' => '54'], ['Meuse' => '55'], ['Morbihan' => '56'],
        ['Moselle' => '57'], ['Nièvre' => '58'], ['Nord' => '59'], ['Oise' => '60'], ['Orne' => '61'], ['Pas-de-Calais' => '62'],
        ['Puy-de-Dôme' => '63'], ['Pyrénées-Atlantiques' => '64'], ['Hautes-Pyrénées' => '65'], ['Pyrénées-Orientales' => '66'],
        ['Bas-Rhin' => '67'], ['Haut-Rhin' => '68'], ['Rhône' => '69'], ['Haute-Saône' => '70'], ['Saône-et-Loire' => '71'],
        ['Sarthe' => '72'], ['Savoie' => '73'], ['Haute-Savoie' => '74'], ['Paris' => '75'], ['Seine-Maritime' => '76'],
        ['Seine-et-Marne' => '77'], ['Yvelines' => '78'], ['Deux-Sèvres' => '79'], ['Somme' => '80'], ['Tarn' => '81'],
        ['Tarn-et-Garonne' => '82'], ['Var' => '83'], ['Vaucluse' => '84'], ['Vendée' => '85'], ['Vienne' => '86'],
        ['Haute-Vienne' => '87'], ['Vosges' => '88'], ['Yonne' => '89'], ['Territoire de Belfort' => '90'], ['Essonne' => '91'],
        ['Hauts-de-Seine' => '92'], ['Seine-Saint-Denis' => '93'], ['Val-de-Marne' => '94'], ["Val-d'Oise" => '95'],
        ['Guadeloupe' => '971'], ['Martinique' => '972'], ['Guyane' => '973'], ['La Réunion' => '974'], ['Mayotte' => '976'],
    ];

    protected static $secondaryAddressFormats = ['Apt. ###', 'Suite ###', 'Étage ###', 'Bât. ###', 'Chambre ###'];

    /**
     * @example 'Appt. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'rue'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Randomly returns a french region.
     *
     * @example 'Guadeloupe'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$regions);
    }

    /**
     * Randomly returns a french department ('departmentName' => 'departmentNumber').
     *
     * @example array('Haute-Corse' => '2B')
     *
     * @return array
     */
    public static function department()
    {
        return static::randomElement(static::$departments);
    }

    /**
     * Randomly returns a french department name.
     *
     * @example 'Ardèche'
     *
     * @return string
     */
    public static function departmentName()
    {
        $randomDepartmentName = array_keys(static::department());

        return $randomDepartmentName[0];
    }

    /**
     * Randomly returns a french department number.
     *
     * @example '59'
     *
     * @return string
     */
    public static function departmentNumber()
    {
        $randomDepartmentNumber = array_values(static::department());

        return $randomDepartmentNumber[0];
    }
}
