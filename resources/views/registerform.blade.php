<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <style>
        input[type=text]:not(.browser-default):focus:not([readonly])+label,
        textarea:not(.browser-default):focus:not([readonly])+label{
           color: #2ac52a !important;
        }
        input[type=text]:not(.browser-default):focus:not([readonly]), 
        textarea.materialize-textarea:focus:not([readonly]){
            border-bottom: 1px solid #2ac52a !important;
            -webkit-box-shadow: 0 1px 0 0 #2ac52a !important;
            box-shadow: 0 1px 0 0 #2ac52a !important;
        }
        [type="radio"]:checked+span:after, [type="radio"].with-gap:checked+span:after{
            background-color: #2ac52a !important;
        }
        [type="radio"]:checked+span:after, [type="radio"].with-gap:checked+span:before, [type="radio"].with-gap:checked+span:after{
            border: #2ac52a !important;
        }
        .cyan{
            background: #2ac52a !important;
        }
    </style>
</head>
<body>
    <ul id="languages" class="dropdown-content">
        <li>
            <a class="dropdown-item" href="locale/en">English</a>
        </li>
        <li>
            <a class="dropdown-item" href="locale/sn">සිංහල</a>
        </li>
        <li>
            <a class="dropdown-item" href="locale/tm">தமிழ்</a>
        </li>
    </ul>
    <ul class="sidenav" id="mobile-demo">
            <li>
                <a class="dropdown-item" href="locale/en">English</a>
            </li>
            <li>
                <a class="dropdown-item" href="locale/sn">සිංහල</a>
            </li>
            <li>
                <a class="dropdown-item" href="locale/tm">தமிழ்</a>
            </li>
    </ul>
    <nav class="cyan">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo" style="border: 1px solid rgba(200,200,200,0.5); padding-right: 20px;">
                    <i class="material-icons"> keyboard_arrow_left</i>
                    BACK
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="languages">
                            Languages<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{-- 
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav> --}}
        
    
    
    <br>
    <h1 style="text-align: center; font-size: 3.5em;">@lang('home.register')</h1>
    
    <div class="container" style="padding-bottom: 100px;">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12 l6">
                    <input id="full_name" type="text" name="full_name" class="validate">
                    <label for="full_name">@lang('home.full_name')</label>
                </div>
                <div class="input-field col s12 l6">
                    <input id="nic" type="text" name="nic" class="validate">
                    <label for="nic">@lang('home.nic')</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="address" id="address" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="address">@lang('home.address')</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6">
                    <input type="text" id="phone" name="phone" class="validate">
                    <label for="phone">@lang('home.phone')</label>
                </div>
                <div class="input-field col s12 l6">
                    <div class="row">
                        <div class="col">
                            <p class="text-secondary float-right">
                                <strong>@lang('home.gender'):</strong>
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <label>
                                    <input type="radio" name="gender" value="female">
                                    <span>@lang('home.female')</span>
                                </label>
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <label>
                                    <input type="radio" name="gender" value="male">
                                    <span>@lang('home.male')</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6">
                    <input type="text" id="email" name="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l4">
                    {{-- <input type="date" id="dob" name="dob" /> --}}
                    <input type="text" id="dob" name="dob" class="datepicker" autoClose placeholder="mmm dd, yyyy">
                    <label for="dob">@lang('home.dob')</label>
                </div>
                <div class="input-field col s12 l4">
                    <input id="country" type="text" name="country" list="countries" class="validate">
                    <label for="country">@lang('home.country')</label>

                    <datalist id="countries">
                        <option value="Afghanistan">
                        <option value="Åland Islands">
                        <option value="Albania">
                        <option value="Algeria">
                        <option value="American Samoa">
                        <option value="Andorra">
                        <option value="Angola">
                        <option value="Anguilla">
                        <option value="Antarctica">
                        <option value="Antigua and Barbuda">
                        <option value="Argentina">
                        <option value="Armenia">
                        <option value="Aruba">
                        <option value="Australia">
                        <option value="Austria">
                        <option value="Azerbaijan">
                        <option value="Bahamas">
                        <option value="Bahrain">
                        <option value="Bangladesh">
                        <option value="Barbados">
                        <option value="Belarus">
                        <option value="Belgium">
                        <option value="Belize">
                        <option value="Benin">
                        <option value="Bermuda">
                        <option value="Bhutan">
                        <option value="Bolivia, Plurinational State of">
                        <option value="Bonaire, Sint Eustatius and Saba">
                        <option value="Bosnia and Herzegovina">
                        <option value="Botswana">
                        <option value="Bouvet Island">
                        <option value="Brazil">
                        <option value="British Indian Ocean Territory">
                        <option value="Brunei Darussalam">
                        <option value="Bulgaria">
                        <option value="Burkina Faso">
                        <option value="Burundi">
                        <option value="Cambodia">
                        <option value="Cameroon">
                        <option value="Canada">
                        <option value="Cape Verde">
                        <option value="Cayman Islands">
                        <option value="Central African Republic">
                        <option value="Chad">
                        <option value="Chile">
                        <option value="China">
                        <option value="Christmas Island">
                        <option value="Cocos (Keeling) Islands">
                        <option value="Colombia">
                        <option value="Comoros">
                        <option value="Congo">
                        <option value="Congo, the Democratic Republic of the">
                        <option value="Cook Islands">
                        <option value="Costa Rica">
                        <option value="Côte d'Ivoire">
                        <option value="Croatia">
                        <option value="Cuba">
                        <option value="Curaçao">
                        <option value="Cyprus">
                        <option value="Czech Republic">
                        <option value="Denmark">
                        <option value="Djibouti">
                        <option value="Dominica">
                        <option value="Dominican Republic">
                        <option value="Ecuador">
                        <option value="Egypt">
                        <option value="El Salvador">
                        <option value="Equatorial Guinea">
                        <option value="Eritrea">
                        <option value="Estonia">
                        <option value="Ethiopia">
                        <option value="Falkland Islands (Malvinas)">
                        <option value="Faroe Islands">
                        <option value="Fiji">
                        <option value="Finland">
                        <option value="France">
                        <option value="French Guiana">
                        <option value="French Polynesia">
                        <option value="French Southern Territories">
                        <option value="Gabon">
                        <option value="Gambia">
                        <option value="Georgia">
                        <option value="Germany">
                        <option value="Ghana">
                        <option value="Gibraltar">
                        <option value="Greece">
                        <option value="Greenland">
                        <option value="Grenada">
                        <option value="Guadeloupe">
                        <option value="Guam">
                        <option value="Guatemala">
                        <option value="Guernsey">
                        <option value="Guinea">
                        <option value="Guinea-Bissau">
                        <option value="Guyana">
                        <option value="Haiti">
                        <option value="Heard Island and McDonald Islands">
                        <option value="Holy See (Vatican City State)">
                        <option value="Honduras">
                        <option value="Hong Kong">
                        <option value="Hungary">
                        <option value="Iceland">
                        <option value="India">
                        <option value="Indonesia">
                        <option value="Iran, Islamic Republic of">
                        <option value="Iraq">
                        <option value="Ireland">
                        <option value="Isle of Man">
                        <option value="Israel">
                        <option value="Italy">
                        <option value="Jamaica">
                        <option value="Japan">
                        <option value="Jersey">
                        <option value="Jordan">
                        <option value="Kazakhstan">
                        <option value="Kenya">
                        <option value="Kiribati">
                        <option value="Korea, Democratic People's Republic of">
                        <option value="Korea, Republic of">
                        <option value="Kuwait">
                        <option value="Kyrgyzstan">
                        <option value="Lao People's Democratic Republic">
                        <option value="Latvia">
                        <option value="Lebanon">
                        <option value="Lesotho">
                        <option value="Liberia">
                        <option value="Libya">
                        <option value="Liechtenstein">
                        <option value="Lithuania">
                        <option value="Luxembourg">
                        <option value="Macao">
                        <option value="Macedonia, the former Yugoslav Republic of">
                        <option value="Madagascar">
                        <option value="Malawi">
                        <option value="Malaysia">
                        <option value="Maldives">
                        <option value="Mali">
                        <option value="Malta">
                        <option value="Marshall Islands">
                        <option value="Martinique">
                        <option value="Mauritania">
                        <option value="Mauritius">
                        <option value="Mayotte">
                        <option value="Mexico">
                        <option value="Micronesia, Federated States of">
                        <option value="Moldova, Republic of">
                        <option value="Monaco">
                        <option value="Mongolia">
                        <option value="Montenegro">
                        <option value="Montserrat">
                        <option value="Morocco">
                        <option value="Mozambique">
                        <option value="Myanmar">
                        <option value="Namibia">
                        <option value="Nauru">
                        <option value="Nepal">
                        <option value="Netherlands">
                        <option value="New Caledonia">
                        <option value="New Zealand">
                        <option value="Nicaragua">
                        <option value="Niger">
                        <option value="Nigeria">
                        <option value="Niue">
                        <option value="Norfolk Island">
                        <option value="Northern Mariana Islands">
                        <option value="Norway">
                        <option value="Oman">
                        <option value="Pakistan">
                        <option value="Palau">
                        <option value="Palestinian Territory, Occupied">
                        <option value="Panama">
                        <option value="Papua New Guinea">
                        <option value="Paraguay">
                        <option value="Peru">
                        <option value="Philippines">
                        <option value="Pitcairn">
                        <option value="Poland">
                        <option value="Portugal">
                        <option value="Puerto Rico">
                        <option value="Qatar">
                        <option value="Réunion">
                        <option value="Romania">
                        <option value="Russian Federation">
                        <option value="Rwanda">
                        <option value="Saint Barthélemy">
                        <option value="Saint Helena, Ascension and Tristan da Cunha">
                        <option value="Saint Kitts and Nevis">
                        <option value="Saint Lucia">
                        <option value="Saint Martin (French part)">
                        <option value="Saint Pierre and Miquelon">
                        <option value="Saint Vincent and the Grenadines">
                        <option value="Samoa">
                        <option value="San Marino">
                        <option value="Sao Tome and Principe">
                        <option value="Saudi Arabia">
                        <option value="Senegal">
                        <option value="Serbia">
                        <option value="Seychelles">
                        <option value="Sierra Leone">
                        <option value="Singapore">
                        <option value="Sint Maarten (Dutch part)">
                        <option value="Slovakia">
                        <option value="Slovenia">
                        <option value="Solomon Islands">
                        <option value="Somalia">
                        <option value="South Africa">
                        <option value="South Georgia and the South Sandwich Islands">
                        <option value="South Sudan">
                        <option value="Spain">
                        <option value="Sri Lanka">
                        <option value="Sudan">
                        <option value="Suriname">
                        <option value="Svalbard and Jan Mayen">
                        <option value="Swaziland">
                        <option value="Sweden">
                        <option value="Switzerland">
                        <option value="Syrian Arab Republic">
                        <option value="Taiwan, Province of China">
                        <option value="Tajikistan">
                        <option value="Tanzania, United Republic of">
                        <option value="Thailand">
                        <option value="Timor-Leste">
                        <option value="Togo">
                        <option value="Tokelau">
                        <option value="Tonga">
                        <option value="Trinidad and Tobago">
                        <option value="Tunisia">
                        <option value="Turkey">
                        <option value="Turkmenistan">
                        <option value="Turks and Caicos Islands">
                        <option value="Tuvalu">
                        <option value="Uganda">
                        <option value="Ukraine">
                        <option value="United Arab Emirates">
                        <option value="United Kingdom">
                        <option value="United States">
                        <option value="United States Minor Outlying Islands">
                        <option value="Uruguay">
                        <option value="Uzbekistan">
                        <option value="Vanuatu">
                        <option value="Venezuela, Bolivarian Republic of">
                        <option value="Viet Nam">
                        <option value="Virgin Islands, British">
                        <option value="Virgin Islands, U.S.">
                        <option value="Wallis and Futuna">
                        <option value="Western Sahara">
                        <option value="Yemen">
                        <option value="Zambia">
                        <option value="Zimbabwe">
                    </datalist>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" name="status" id="status" class="validate">
                    <label for="status">@lang('home.status')</label>
                </div>
            </div>
            <button type="submit" class="btn waves-effect waves-light cyan float-right" style="float: right;">
                REGISTER
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                autoClose: true,
                defaultDate: new Date('1990-01-01'),
            });

            $('.sidenav').sidenav();
        });

        $(".dropdown-trigger").dropdown();
    
    </script>
</body>
</html>