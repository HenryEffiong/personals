
@extends('main')

@section('content')
<main>
    <section class="page-banner-section font-main" style="background-image:url(images/background/2.jpg);">
        <div class="container">
            <div class="row content">
                <div class="col-md-7">
                    <header class=" margin-b-20">
                        <h2 class="txt-2em txt-color-white margin-b-10">We need your support</h2>
                        <h2 class="txt-3em txt-bold txt-color-yellow">BE A VOLUNTEER</h2>
                    </header>
                    {{--<p class="txt-normal-s txt-color-white txt-height-1-7">--}}
                        {{--Make an online donation to help our organization provide treatment, care and support services to vulnerable children. Please submit your donation through the secure and easy online donation form below.--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="padding-tb-40">
        <div class="container">
            <div class="txt-2em margin-b-40 txt-color-default txt-bold">
                <h2>Volunteers Form</h2>
            </div>
            <div class="col-md-8">
                <form class="custom-form" method="POST" action="{{route('savevolunteer')}}">
                    {{csrf_field()}}
                    <div class="row margin-reset-lr-10">
                        <div class="col-md-12 padding-lr-10">
                            <h4 class="txt-bold txt-color-default margin-b-20">Bio</h4>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="text" name="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="text" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <select name="gender" id="" required>
                                    <option value="" disabled selected hidden="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <select name="age" id="" required>
                                    <option value="" disabled selected hidden="">Age Range</option>
                                    <option value="10 - 17">10 - 17</option>
                                    <option value="18 - 21">18 - 21</option>
                                    <option value="22 - 39">22 - 39</option>
                                    <option value="30 - 49">30 - 49</option>
                                    <option value="50  and Above">50  and Above</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 padding-lr-10">
                            <h4 class="txt-bold txt-color-default margin-t-40 margin-b-20">Contact Informtion</h4>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="telephone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <select name="country" required="">

                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                {{--<select name="state" id="">--}}
                                    {{--@foreach($states as $state)--}}
                                        {{--<option value="{{$state->name}}">{{$state->name}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                                <input type="text" name="state" placeholder="State" required>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="text" name="city" placeholder="City" required>
                            </div>
                        </div>

                        <div class="col-md-12 padding-lr-10">
                            <h4 class="txt-bold txt-color-default margin-t-40 margin-b-20">Career & Interest</h4>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <select  id="occupation" name="occupation">
                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                                        <option value="Chiropractor">-  Chiropractor</option>
                                        <option value="Dentist">-  Dentist</option>
                                        <option value="Dietitian or Nutritionist">-  Dietitian or Nutritionist</option>
                                        <option value="Optometrist">-  Optometrist</option>
                                        <option value="Pharmacist">-  Pharmacist</option>
                                        <option value="Physician">-  Physician</option>
                                        <option value="Physician Assistant">-  Physician Assistant</option>
                                        <option value="Podiatrist">-  Podiatrist</option>
                                        <option value="Registered Nurse">-  Registered Nurse</option>
                                        <option value="Therapist">-  Therapist</option>
                                        <option value="Veterinarian">-  Veterinarian</option>
                                        <option value="Health Technologist or Technician">-  Health Technologist or Technician</option>
                                        <option value="Other Healthcare Practitioners and Technical Occupation">-  Other Healthcare Practitioners and Technical Occupation</option>
                                    </optgroup>
                                    <optgroup label="Healthcare Support Occupations:">
                                        <option value="Nursing, Psychiatric, or Home Health Aide">-  Nursing, Psychiatric, or Home Health Aide</option>
                                        <option value="Occupational and Physical Therapist Assistant or Aide">-  Occupational and Physical Therapist Assistant or Aide</option>
                                        <option value="Other Healthcare Support Occupation">-  Other Healthcare Support Occupation</option>
                                    </optgroup>
                                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                                        <option value="Chief Executive">-  Chief Executive</option>
                                        <option value="General and Operations Manager">-  General and Operations Manager</option>
                                        <option value="Advertising, Marketing, Promotions, Public Relations, and Sales Manager">-  Advertising, Marketing, Promotions, Public Relations, and Sales Manager</option>
                                        <option value="Operations Specialties Manager (e.g., IT or HR Manager)">-  Operations Specialties Manager (e.g., IT or HR Manager)</option>
                                        <option value="Construction Manager">-  Construction Manager</option>
                                        <option value="Engineering Manager">-  Engineering Manager</option>
                                        <option value="Accountant, Auditor">-  Accountant, Auditor</option>
                                        <option value="Business Operations or Financial Specialist">-  Business Operations or Financial Specialist</option>
                                        <option value="Business Owner">-  Business Owner</option>
                                        <option value="Other Business, Executive, Management, Financial Occupation">-  Other Business, Executive, Management, Financial Occupation</option>
                                    </optgroup>
                                    <optgroup label="Architecture and Engineering Occupations:">
                                        <option value="Architect, Surveyor, or Cartographer">-  Architect, Surveyor, or Cartographer</option>
                                        <option value="Engineer">-  Engineer</option>
                                        <option value="Other Architecture and Engineering Occupation">-  Other Architecture and Engineering Occupation</option>
                                    </optgroup>
                                    <optgroup label="Education, Training, and Library Occupations:">
                                        <option value="Postsecondary Teacher (e.g., College Professor)">-  Postsecondary Teacher (e.g., College Professor)</option>
                                        <option value="Primary, Secondary, or Special Education School Teacher">-  Primary, Secondary, or Special Education School Teacher</option>
                                        <option value="Other Teacher or Instructor">-  Other Teacher or Instructor</option>
                                        <option value="Other Education, Training, and Library Occupation">-  Other Education, Training, and Library Occupation</option>
                                    </optgroup>
                                    <optgroup label="Other Professional Occupations:">
                                        <option value="Arts, Design, Entertainment, Sports, and Media Occupations">-  Arts, Design, Entertainment, Sports, and Media Occupations</option>
                                        <option value="Computer Specialist, Mathematical Science">-  Computer Specialist, Mathematical Science</option>
                                        <option value="Counselor, Social Worker, or Other Community and Social Service Special">-  Counselor, Social Worker, or Other Community and Social Service Specialist</option>
                                        <option value="Lawyer, Judge">-  Lawyer, Judge</option>
                                        <option value="Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)">-  Life Scientist (e.g., Animal, Food, Soil, or Biological Scientist, Zoologist)</option>
                                        <option value="Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)">-  Physical Scientist (e.g., Astronomer, Physicist, Chemist, Hydrologist)</option>
                                        <option value="Religious Worker (e.g., Clergy, Director of Religious Activities or Education">-  Religious Worker (e.g., Clergy, Director of Religious Activities or Education)</option>
                                        <option value="Social Scientist and Related Worker">-  Social Scientist and Related Worker</option>
                                        <option value="Other Professional Occupation">-  Other Professional Occupation</option>
                                    </optgroup>
                                    <optgroup label="Office and Administrative Support Occupations:">
                                        <option value="Supervisor of Administrative Support Workers">-  Supervisor of Administrative Support Workers</option>
                                        <option value="Financial Clerk">-  Financial Clerk</option>
                                        <option value="Secretary or Administrative Assistant">-  Secretary or Administrative Assistant</option>
                                        <option value="Material Recording, Scheduling, and Dispatching Worker">-  Material Recording, Scheduling, and Dispatching Worker</option>
                                        <option value="Other Office and Administrative Support Occupation">-  Other Office and Administrative Support Occupation</option>
                                    </optgroup>
                                    <optgroup label="Services Occupations:">
                                        <option value="Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)">-  Protective Service (e.g., Fire Fighting, Police Officer, Correctional Officer)</option>
                                        <option value="Chef or Head Cook">-  Chef or Head Cook</option>
                                        <option value="Cook or Food Preparation Worker">-  Cook or Food Preparation Worker</option>
                                        <option value="Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)">-  Food and Beverage Serving Worker (e.g., Bartender, Waiter, Waitress)</option>
                                        <option value="Building and Grounds Cleaning and Maintenance">-  Building and Grounds Cleaning and Maintenance</option>
                                        <option value="Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)">-  Personal Care and Service (e.g., Hairdresser, Flight Attendant, Concierge)</option>
                                        <option value="Sales Supervisor, Retail Sale">-  Sales Supervisor, Retail Sales</option>
                                        <option value="Retail Sales Worker">-  Retail Sales Worker</option>
                                        <option value="Insurance Sales Agent">-  Insurance Sales Agent</option>
                                        <option value="Sales Representative">-  Sales Representative</option>
                                        <option value="Real Estate Sales Agent">-  Real Estate Sales Agent</option>
                                        <option value="Other Services Occupation">-  Other Services Occupation</option>
                                    </optgroup>
                                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                                        <option value="Construction and Extraction (e.g., Construction Laborer, Electrician)">-  Construction and Extraction (e.g., Construction Laborer, Electrician)</option>
                                        <option value="Farming, Fishing, and Forestry">-  Farming, Fishing, and Forestry</option>
                                        <option value="Installation, Maintenance, and Repair">-  Installation, Maintenance, and Repair</option>
                                        <option value="Production Occupations">-  Production Occupations</option>
                                        <option value="Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation">-  Other Agriculture, Maintenance, Repair, and Skilled Crafts Occupation</option>
                                    </optgroup>
                                    <optgroup label="Transportation Occupations:">
                                        <option value="Aircraft Pilot or Flight Engineer">-  Aircraft Pilot or Flight Engineer</option>
                                        <option value="Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)">-  Motor Vehicle Operator (e.g., Ambulance, Bus, Taxi, or Truck Driver)</option>
                                        <option value="Other Transportation Occupation">-  Other Transportation Occupation</option>
                                    </optgroup>
                                    <optgroup label="Other Occupations:">
                                        <option value="Military">-  Military</option>
                                        <option value="Homemaker">-  Homemaker</option>
                                        <option value="Other Occupation">-  Other Occupation</option>
                                        <option value="Don't Know">-  Don't Know</option>
                                        <option value="Not Applicable">-  Not Applicable</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 padding-lr-10">
                            <div class="form-item">
                                <input type="text" placeholder="Interest" required>
                            </div>
                        </div>

                        {{--<div class="col-md-12 padding-lr-10">--}}
                            {{--<h4 class="txt-bold txt-color-default margin-t-40 margin-b-20">Donation</h4>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 padding-lr-10">--}}
                            {{--<div class="form-item">--}}
                                {{--<input type="number" placeholder="$0.00">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 padding-lr-10">--}}
                            {{--<div class="form-item no-icon font-main">--}}
                                {{--<div class="floated-checkboxes margin-b-10">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label class="">--}}
                                            {{--<input type="checkbox" value="">--}}
                                            {{--<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>--}}
                                            {{--<span class="txt-bold txt-color-default">--}}
                                                    {{--Donate anonymously--}}
                                                {{--</span>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-12 padding-lr-10 margin-t-40">
                            <div class="link-button">
                                <button type="submit" class="btn-style-one">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection