<?php
	session_start();
	
	$user = $_SESSION['S4S']['user'];
	
	$fb_id = $user['fb']['id'];
	
	?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Welcome | Scholars 4 Scholars</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-base.css" rel="stylesheet" /> 
	<link href="assets/css/bootstrap-select.min.css" rel="stylesheet" /> 
    <link href="assets/css/welcome.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <style>
	.wizard-card.ct-wizard-red > ul > li.done a
	{
		background-color: #27ae60;
	}
	</style>
  
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('images/library.jpg'); background-size:cover;">
    <!--   Creative Tim Branding   -->
    <a href="http://scholars4scholars.org">
         <div class="logo-container">
            <div class="logo">
                <img src="images/Scholars-4-Scholars-Logo@2x.png" height="50">
            </div>
        </div>
    </a>
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <form id="ProfileForm">
                <div class="card wizard-card ct-wizard-red" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>BUILD</b> YOUR PROFILE <br>
                        	   <small id="small_info">This information will let us pair you with the perfect scholarships for you.</small>
                        	</h3>
                    	</div>
                    	<ul>
                            <li id="step_0"><a href="#about" data-toggle="tab">About You</a></li>
                            <li id="step_1"><a href="#location" data-toggle="tab">Location</a></li>
                            <li id="step_2"><a href="#education" data-toggle="tab">Education</a></li>
                            <li id="step_3"><a href="#activities" data-toggle="tab">Activities</a></li>
                            <li id="step_4"><a href="#misc" data-toggle="tab">Misc</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="https://graph.facebook.com/<?=$fb_id;?>/picture?width=100&height=100" class="picture-src" id="wizardPicturePreview" title=""/>    
                                          </div>
                                          <h6><?=$user['fb']['name'];?></h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Gilbert..." value="<?=$user['first_name'];?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Rodriguez..." value="<?=$user['last_name'];?>">
                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control" name="email" placeholder="hello@scholars4scholars.org" value="<?=$user['fb']['email'];?>">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>When is your birthday?</label>
                                          <input class="datepicker form-control" type="text" name="bday" data-provide="datepicker"/>
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Which of the following applies to you?</label>
										    <select name="citizenship" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
											    <option value="us">US Student (US Citizen/Permanent Resident) </option>
										        <option value="undoc">US Student (Undocumented/DACA/DREAM Act) </option>
										        <option value="int">International Student</option>
										    </select>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="location">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Residence/Location </h4>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Street Address</label>
                                            <input type="text" class="form-control" name="location.street_address" placeholder="5th Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>State</label>
										    <select name="location.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">International</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
										    </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-3 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" name="location.zip" class="form-control" placeholder="12312...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label>
										    <select name="location.country" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="AF">Afghanistan</option>
													<option value="AX">Åland Islands</option>
													<option value="AL">Albania</option>
													<option value="DZ">Algeria</option>
													<option value="AS">American Samoa</option>
													<option value="AD">Andorra</option>
													<option value="AO">Angola</option>
													<option value="AI">Anguilla</option>
													<option value="AQ">Antarctica</option>
													<option value="AG">Antigua and Barbuda</option>
													<option value="AR">Argentina</option>
													<option value="AM">Armenia</option>
													<option value="AW">Aruba</option>
													<option value="AU">Australia</option>
													<option value="AT">Austria</option>
													<option value="AZ">Azerbaijan</option>
													<option value="BS">Bahamas</option>
													<option value="BH">Bahrain</option>
													<option value="BD">Bangladesh</option>
													<option value="BB">Barbados</option>
													<option value="BY">Belarus</option>
													<option value="BE">Belgium</option>
													<option value="BZ">Belize</option>
													<option value="BJ">Benin</option>
													<option value="BM">Bermuda</option>
													<option value="BT">Bhutan</option>
													<option value="BO">Bolivia, Plurinational State of</option>
													<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
													<option value="BA">Bosnia and Herzegovina</option>
													<option value="BW">Botswana</option>
													<option value="BV">Bouvet Island</option>
													<option value="BR">Brazil</option>
													<option value="IO">British Indian Ocean Territory</option>
													<option value="BN">Brunei Darussalam</option>
													<option value="BG">Bulgaria</option>
													<option value="BF">Burkina Faso</option>
													<option value="BI">Burundi</option>
													<option value="KH">Cambodia</option>
													<option value="CM">Cameroon</option>
													<option value="CA">Canada</option>
													<option value="CV">Cape Verde</option>
													<option value="KY">Cayman Islands</option>
													<option value="CF">Central African Republic</option>
													<option value="TD">Chad</option>
													<option value="CL">Chile</option>
													<option value="CN">China</option>
													<option value="CX">Christmas Island</option>
													<option value="CC">Cocos (Keeling) Islands</option>
													<option value="CO">Colombia</option>
													<option value="KM">Comoros</option>
													<option value="CG">Congo</option>
													<option value="CD">Congo, the Democratic Republic of the</option>
													<option value="CK">Cook Islands</option>
													<option value="CR">Costa Rica</option>
													<option value="CI">Côte d'Ivoire</option>
													<option value="HR">Croatia</option>
													<option value="CU">Cuba</option>
													<option value="CW">Curaçao</option>
													<option value="CY">Cyprus</option>
													<option value="CZ">Czech Republic</option>
													<option value="DK">Denmark</option>
													<option value="DJ">Djibouti</option>
													<option value="DM">Dominica</option>
													<option value="DO">Dominican Republic</option>
													<option value="EC">Ecuador</option>
													<option value="EG">Egypt</option>
													<option value="SV">El Salvador</option>
													<option value="GQ">Equatorial Guinea</option>
													<option value="ER">Eritrea</option>
													<option value="EE">Estonia</option>
													<option value="ET">Ethiopia</option>
													<option value="FK">Falkland Islands (Malvinas)</option>
													<option value="FO">Faroe Islands</option>
													<option value="FJ">Fiji</option>
													<option value="FI">Finland</option>
													<option value="FR">France</option>
													<option value="GF">French Guiana</option>
													<option value="PF">French Polynesia</option>
													<option value="TF">French Southern Territories</option>
													<option value="GA">Gabon</option>
													<option value="GM">Gambia</option>
													<option value="GE">Georgia</option>
													<option value="DE">Germany</option>
													<option value="GH">Ghana</option>
													<option value="GI">Gibraltar</option>
													<option value="GR">Greece</option>
													<option value="GL">Greenland</option>
													<option value="GD">Grenada</option>
													<option value="GP">Guadeloupe</option>
													<option value="GU">Guam</option>
													<option value="GT">Guatemala</option>
													<option value="GG">Guernsey</option>
													<option value="GN">Guinea</option>
													<option value="GW">Guinea-Bissau</option>
													<option value="GY">Guyana</option>
													<option value="HT">Haiti</option>
													<option value="HM">Heard Island and McDonald Islands</option>
													<option value="VA">Holy See (Vatican City State)</option>
													<option value="HN">Honduras</option>
													<option value="HK">Hong Kong</option>
													<option value="HU">Hungary</option>
													<option value="IS">Iceland</option>
													<option value="IN">India</option>
													<option value="ID">Indonesia</option>
													<option value="IR">Iran, Islamic Republic of</option>
													<option value="IQ">Iraq</option>
													<option value="IE">Ireland</option>
													<option value="IM">Isle of Man</option>
													<option value="IL">Israel</option>
													<option value="IT">Italy</option>
													<option value="JM">Jamaica</option>
													<option value="JP">Japan</option>
													<option value="JE">Jersey</option>
													<option value="JO">Jordan</option>
													<option value="KZ">Kazakhstan</option>
													<option value="KE">Kenya</option>
													<option value="KI">Kiribati</option>
													<option value="KP">Korea, Democratic People's Republic of</option>
													<option value="KR">Korea, Republic of</option>
													<option value="KW">Kuwait</option>
													<option value="KG">Kyrgyzstan</option>
													<option value="LA">Lao People's Democratic Republic</option>
													<option value="LV">Latvia</option>
													<option value="LB">Lebanon</option>
													<option value="LS">Lesotho</option>
													<option value="LR">Liberia</option>
													<option value="LY">Libya</option>
													<option value="LI">Liechtenstein</option>
													<option value="LT">Lithuania</option>
													<option value="LU">Luxembourg</option>
													<option value="MO">Macao</option>
													<option value="MK">Macedonia, the former Yugoslav Republic of</option>
													<option value="MG">Madagascar</option>
													<option value="MW">Malawi</option>
													<option value="MY">Malaysia</option>
													<option value="MV">Maldives</option>
													<option value="ML">Mali</option>
													<option value="MT">Malta</option>
													<option value="MH">Marshall Islands</option>
													<option value="MQ">Martinique</option>
													<option value="MR">Mauritania</option>
													<option value="MU">Mauritius</option>
													<option value="YT">Mayotte</option>
													<option value="MX">Mexico</option>
													<option value="FM">Micronesia, Federated States of</option>
													<option value="MD">Moldova, Republic of</option>
													<option value="MC">Monaco</option>
													<option value="MN">Mongolia</option>
													<option value="ME">Montenegro</option>
													<option value="MS">Montserrat</option>
													<option value="MA">Morocco</option>
													<option value="MZ">Mozambique</option>
													<option value="MM">Myanmar</option>
													<option value="NA">Namibia</option>
													<option value="NR">Nauru</option>
													<option value="NP">Nepal</option>
													<option value="NL">Netherlands</option>
													<option value="NC">New Caledonia</option>
													<option value="NZ">New Zealand</option>
													<option value="NI">Nicaragua</option>
													<option value="NE">Niger</option>
													<option value="NG">Nigeria</option>
													<option value="NU">Niue</option>
													<option value="NF">Norfolk Island</option>
													<option value="MP">Northern Mariana Islands</option>
													<option value="NO">Norway</option>
													<option value="OM">Oman</option>
													<option value="PK">Pakistan</option>
													<option value="PW">Palau</option>
													<option value="PS">Palestinian Territory, Occupied</option>
													<option value="PA">Panama</option>
													<option value="PG">Papua New Guinea</option>
													<option value="PY">Paraguay</option>
													<option value="PE">Peru</option>
													<option value="PH">Philippines</option>
													<option value="PN">Pitcairn</option>
													<option value="PL">Poland</option>
													<option value="PT">Portugal</option>
													<option value="PR">Puerto Rico</option>
													<option value="QA">Qatar</option>
													<option value="RE">Réunion</option>
													<option value="RO">Romania</option>
													<option value="RU">Russian Federation</option>
													<option value="RW">Rwanda</option>
													<option value="BL">Saint Barthélemy</option>
													<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
													<option value="KN">Saint Kitts and Nevis</option>
													<option value="LC">Saint Lucia</option>
													<option value="MF">Saint Martin (French part)</option>
													<option value="PM">Saint Pierre and Miquelon</option>
													<option value="VC">Saint Vincent and the Grenadines</option>
													<option value="WS">Samoa</option>
													<option value="SM">San Marino</option>
													<option value="ST">Sao Tome and Principe</option>
													<option value="SA">Saudi Arabia</option>
													<option value="SN">Senegal</option>
													<option value="RS">Serbia</option>
													<option value="SC">Seychelles</option>
													<option value="SL">Sierra Leone</option>
													<option value="SG">Singapore</option>
													<option value="SX">Sint Maarten (Dutch part)</option>
													<option value="SK">Slovakia</option>
													<option value="SI">Slovenia</option>
													<option value="SB">Solomon Islands</option>
													<option value="SO">Somalia</option>
													<option value="ZA">South Africa</option>
													<option value="GS">South Georgia and the South Sandwich Islands</option>
													<option value="SS">South Sudan</option>
													<option value="ES">Spain</option>
													<option value="LK">Sri Lanka</option>
													<option value="SD">Sudan</option>
													<option value="SR">Suriname</option>
													<option value="SJ">Svalbard and Jan Mayen</option>
													<option value="SZ">Swaziland</option>
													<option value="SE">Sweden</option>
													<option value="CH">Switzerland</option>
													<option value="SY">Syrian Arab Republic</option>
													<option value="TW">Taiwan, Province of China</option>
													<option value="TJ">Tajikistan</option>
													<option value="TZ">Tanzania, United Republic of</option>
													<option value="TH">Thailand</option>
													<option value="TL">Timor-Leste</option>
													<option value="TG">Togo</option>
													<option value="TK">Tokelau</option>
													<option value="TO">Tonga</option>
													<option value="TT">Trinidad and Tobago</option>
													<option value="TN">Tunisia</option>
													<option value="TR">Turkey</option>
													<option value="TM">Turkmenistan</option>
													<option value="TC">Turks and Caicos Islands</option>
													<option value="TV">Tuvalu</option>
													<option value="UG">Uganda</option>
													<option value="UA">Ukraine</option>
													<option value="AE">United Arab Emirates</option>
													<option value="GB">United Kingdom</option>
													<option value="US">United States</option>
													<option value="UM">United States Minor Outlying Islands</option>
													<option value="UY">Uruguay</option>
													<option value="UZ">Uzbekistan</option>
													<option value="VU">Vanuatu</option>
													<option value="VE">Venezuela, Bolivarian Republic of</option>
													<option value="VN">Viet Nam</option>
													<option value="VG">Virgin Islands, British</option>
													<option value="VI">Virgin Islands, U.S.</option>
													<option value="WF">Wallis and Futuna</option>
													<option value="EH">Western Sahara</option>
													<option value="YE">Yemen</option>
													<option value="ZM">Zambia</option>
													<option value="ZW">Zimbabwe</option>
										    </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-12">
                                    	<h4 class="info-text"> School </h4>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
	                                    <div class="form-group">
	                                        <label>Current Grade Level</label>
	                                        <select name="school.grade" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
		                                        <option selected disabled>Please Select...</option>
		                                        <option value="9">9th grade - Freshmen</option>
		                                        <option value="10">10th grade - Sophomore</option>
		                                        <option value="11">11th grade - Junior</option>
		                                        <option value="12">12th grade - Senior</option>
	                                        </select>
										</div>
                                    </div>
                                    <div class="col-sm-5">
	                                    <div class="form-group">
	                                        <label>High School Grad Year</label>
	                                        <select name="school.grad" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
		                                        <option selected disabled>Please Select...</option>
		                                        <option value="15">2015</option>
		                                        <option value="16">2016</option>
		                                        <option value="17">2017</option>
		                                        <option value="18">2018</option>
		                                        <option value="19">2019</option>
		                                        <option value="idk">I don't know...</option>
	                                        </select>
										</div>
                                    </div>
                                    <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>What state is your school in?</label>
                                    		<select name="school.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
										    </select>
                                    	</div>
                                    </div>
                                    <div class="col-sm-12">
                                    	<h4 class="info-text"> A couple more questions... </h4>
                                    </div>
                                    
                                    <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
	                                    	<label>What <strong>country</strong> are you resident from?</label>
	                                    	<select name="resident.country" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="AF">Afghanistan</option>
													<option value="AX">Åland Islands</option>
													<option value="AL">Albania</option>
													<option value="DZ">Algeria</option>
													<option value="AS">American Samoa</option>
													<option value="AD">Andorra</option>
													<option value="AO">Angola</option>
													<option value="AI">Anguilla</option>
													<option value="AQ">Antarctica</option>
													<option value="AG">Antigua and Barbuda</option>
													<option value="AR">Argentina</option>
													<option value="AM">Armenia</option>
													<option value="AW">Aruba</option>
													<option value="AU">Australia</option>
													<option value="AT">Austria</option>
													<option value="AZ">Azerbaijan</option>
													<option value="BS">Bahamas</option>
													<option value="BH">Bahrain</option>
													<option value="BD">Bangladesh</option>
													<option value="BB">Barbados</option>
													<option value="BY">Belarus</option>
													<option value="BE">Belgium</option>
													<option value="BZ">Belize</option>
													<option value="BJ">Benin</option>
													<option value="BM">Bermuda</option>
													<option value="BT">Bhutan</option>
													<option value="BO">Bolivia, Plurinational State of</option>
													<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
													<option value="BA">Bosnia and Herzegovina</option>
													<option value="BW">Botswana</option>
													<option value="BV">Bouvet Island</option>
													<option value="BR">Brazil</option>
													<option value="IO">British Indian Ocean Territory</option>
													<option value="BN">Brunei Darussalam</option>
													<option value="BG">Bulgaria</option>
													<option value="BF">Burkina Faso</option>
													<option value="BI">Burundi</option>
													<option value="KH">Cambodia</option>
													<option value="CM">Cameroon</option>
													<option value="CA">Canada</option>
													<option value="CV">Cape Verde</option>
													<option value="KY">Cayman Islands</option>
													<option value="CF">Central African Republic</option>
													<option value="TD">Chad</option>
													<option value="CL">Chile</option>
													<option value="CN">China</option>
													<option value="CX">Christmas Island</option>
													<option value="CC">Cocos (Keeling) Islands</option>
													<option value="CO">Colombia</option>
													<option value="KM">Comoros</option>
													<option value="CG">Congo</option>
													<option value="CD">Congo, the Democratic Republic of the</option>
													<option value="CK">Cook Islands</option>
													<option value="CR">Costa Rica</option>
													<option value="CI">Côte d'Ivoire</option>
													<option value="HR">Croatia</option>
													<option value="CU">Cuba</option>
													<option value="CW">Curaçao</option>
													<option value="CY">Cyprus</option>
													<option value="CZ">Czech Republic</option>
													<option value="DK">Denmark</option>
													<option value="DJ">Djibouti</option>
													<option value="DM">Dominica</option>
													<option value="DO">Dominican Republic</option>
													<option value="EC">Ecuador</option>
													<option value="EG">Egypt</option>
													<option value="SV">El Salvador</option>
													<option value="GQ">Equatorial Guinea</option>
													<option value="ER">Eritrea</option>
													<option value="EE">Estonia</option>
													<option value="ET">Ethiopia</option>
													<option value="FK">Falkland Islands (Malvinas)</option>
													<option value="FO">Faroe Islands</option>
													<option value="FJ">Fiji</option>
													<option value="FI">Finland</option>
													<option value="FR">France</option>
													<option value="GF">French Guiana</option>
													<option value="PF">French Polynesia</option>
													<option value="TF">French Southern Territories</option>
													<option value="GA">Gabon</option>
													<option value="GM">Gambia</option>
													<option value="GE">Georgia</option>
													<option value="DE">Germany</option>
													<option value="GH">Ghana</option>
													<option value="GI">Gibraltar</option>
													<option value="GR">Greece</option>
													<option value="GL">Greenland</option>
													<option value="GD">Grenada</option>
													<option value="GP">Guadeloupe</option>
													<option value="GU">Guam</option>
													<option value="GT">Guatemala</option>
													<option value="GG">Guernsey</option>
													<option value="GN">Guinea</option>
													<option value="GW">Guinea-Bissau</option>
													<option value="GY">Guyana</option>
													<option value="HT">Haiti</option>
													<option value="HM">Heard Island and McDonald Islands</option>
													<option value="VA">Holy See (Vatican City State)</option>
													<option value="HN">Honduras</option>
													<option value="HK">Hong Kong</option>
													<option value="HU">Hungary</option>
													<option value="IS">Iceland</option>
													<option value="IN">India</option>
													<option value="ID">Indonesia</option>
													<option value="IR">Iran, Islamic Republic of</option>
													<option value="IQ">Iraq</option>
													<option value="IE">Ireland</option>
													<option value="IM">Isle of Man</option>
													<option value="IL">Israel</option>
													<option value="IT">Italy</option>
													<option value="JM">Jamaica</option>
													<option value="JP">Japan</option>
													<option value="JE">Jersey</option>
													<option value="JO">Jordan</option>
													<option value="KZ">Kazakhstan</option>
													<option value="KE">Kenya</option>
													<option value="KI">Kiribati</option>
													<option value="KP">Korea, Democratic People's Republic of</option>
													<option value="KR">Korea, Republic of</option>
													<option value="KW">Kuwait</option>
													<option value="KG">Kyrgyzstan</option>
													<option value="LA">Lao People's Democratic Republic</option>
													<option value="LV">Latvia</option>
													<option value="LB">Lebanon</option>
													<option value="LS">Lesotho</option>
													<option value="LR">Liberia</option>
													<option value="LY">Libya</option>
													<option value="LI">Liechtenstein</option>
													<option value="LT">Lithuania</option>
													<option value="LU">Luxembourg</option>
													<option value="MO">Macao</option>
													<option value="MK">Macedonia, the former Yugoslav Republic of</option>
													<option value="MG">Madagascar</option>
													<option value="MW">Malawi</option>
													<option value="MY">Malaysia</option>
													<option value="MV">Maldives</option>
													<option value="ML">Mali</option>
													<option value="MT">Malta</option>
													<option value="MH">Marshall Islands</option>
													<option value="MQ">Martinique</option>
													<option value="MR">Mauritania</option>
													<option value="MU">Mauritius</option>
													<option value="YT">Mayotte</option>
													<option value="MX">Mexico</option>
													<option value="FM">Micronesia, Federated States of</option>
													<option value="MD">Moldova, Republic of</option>
													<option value="MC">Monaco</option>
													<option value="MN">Mongolia</option>
													<option value="ME">Montenegro</option>
													<option value="MS">Montserrat</option>
													<option value="MA">Morocco</option>
													<option value="MZ">Mozambique</option>
													<option value="MM">Myanmar</option>
													<option value="NA">Namibia</option>
													<option value="NR">Nauru</option>
													<option value="NP">Nepal</option>
													<option value="NL">Netherlands</option>
													<option value="NC">New Caledonia</option>
													<option value="NZ">New Zealand</option>
													<option value="NI">Nicaragua</option>
													<option value="NE">Niger</option>
													<option value="NG">Nigeria</option>
													<option value="NU">Niue</option>
													<option value="NF">Norfolk Island</option>
													<option value="MP">Northern Mariana Islands</option>
													<option value="NO">Norway</option>
													<option value="OM">Oman</option>
													<option value="PK">Pakistan</option>
													<option value="PW">Palau</option>
													<option value="PS">Palestinian Territory, Occupied</option>
													<option value="PA">Panama</option>
													<option value="PG">Papua New Guinea</option>
													<option value="PY">Paraguay</option>
													<option value="PE">Peru</option>
													<option value="PH">Philippines</option>
													<option value="PN">Pitcairn</option>
													<option value="PL">Poland</option>
													<option value="PT">Portugal</option>
													<option value="PR">Puerto Rico</option>
													<option value="QA">Qatar</option>
													<option value="RE">Réunion</option>
													<option value="RO">Romania</option>
													<option value="RU">Russian Federation</option>
													<option value="RW">Rwanda</option>
													<option value="BL">Saint Barthélemy</option>
													<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
													<option value="KN">Saint Kitts and Nevis</option>
													<option value="LC">Saint Lucia</option>
													<option value="MF">Saint Martin (French part)</option>
													<option value="PM">Saint Pierre and Miquelon</option>
													<option value="VC">Saint Vincent and the Grenadines</option>
													<option value="WS">Samoa</option>
													<option value="SM">San Marino</option>
													<option value="ST">Sao Tome and Principe</option>
													<option value="SA">Saudi Arabia</option>
													<option value="SN">Senegal</option>
													<option value="RS">Serbia</option>
													<option value="SC">Seychelles</option>
													<option value="SL">Sierra Leone</option>
													<option value="SG">Singapore</option>
													<option value="SX">Sint Maarten (Dutch part)</option>
													<option value="SK">Slovakia</option>
													<option value="SI">Slovenia</option>
													<option value="SB">Solomon Islands</option>
													<option value="SO">Somalia</option>
													<option value="ZA">South Africa</option>
													<option value="GS">South Georgia and the South Sandwich Islands</option>
													<option value="SS">South Sudan</option>
													<option value="ES">Spain</option>
													<option value="LK">Sri Lanka</option>
													<option value="SD">Sudan</option>
													<option value="SR">Suriname</option>
													<option value="SJ">Svalbard and Jan Mayen</option>
													<option value="SZ">Swaziland</option>
													<option value="SE">Sweden</option>
													<option value="CH">Switzerland</option>
													<option value="SY">Syrian Arab Republic</option>
													<option value="TW">Taiwan, Province of China</option>
													<option value="TJ">Tajikistan</option>
													<option value="TZ">Tanzania, United Republic of</option>
													<option value="TH">Thailand</option>
													<option value="TL">Timor-Leste</option>
													<option value="TG">Togo</option>
													<option value="TK">Tokelau</option>
													<option value="TO">Tonga</option>
													<option value="TT">Trinidad and Tobago</option>
													<option value="TN">Tunisia</option>
													<option value="TR">Turkey</option>
													<option value="TM">Turkmenistan</option>
													<option value="TC">Turks and Caicos Islands</option>
													<option value="TV">Tuvalu</option>
													<option value="UG">Uganda</option>
													<option value="UA">Ukraine</option>
													<option value="AE">United Arab Emirates</option>
													<option value="GB">United Kingdom</option>
													<option value="US">United States</option>
													<option value="UM">United States Minor Outlying Islands</option>
													<option value="UY">Uruguay</option>
													<option value="UZ">Uzbekistan</option>
													<option value="VU">Vanuatu</option>
													<option value="VE">Venezuela, Bolivarian Republic of</option>
													<option value="VN">Viet Nam</option>
													<option value="VG">Virgin Islands, British</option>
													<option value="VI">Virgin Islands, U.S.</option>
													<option value="WF">Wallis and Futuna</option>
													<option value="EH">Western Sahara</option>
													<option value="YE">Yemen</option>
													<option value="ZM">Zambia</option>
													<option value="ZW">Zimbabwe</option>
										    </select>
                                    	</div>
                                    </div> 
                                    
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What <strong>state</strong> are you resident from?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
										    </select>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="education">
                                <div class="row">
	                                <div class="col-sm-12">
	                                	<h4 class="info-text">High School</h4>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>Select the latest high school you have attended.</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What is your current high school GPA/Grades?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-3 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>Total SAT Scores?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-3">
                                    	<div class="form-group">
                                    		<label>Highest ACT score? <i class="fa fa-question-circle" data-toggle="tooltip" title="Yes, you can superscore!"></i></label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-3">
                                    	<div class="form-group">
                                    		<label>Class Rank?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>

	                                <div class="col-sm-12">
	                                	<h4 class="info-text">College</h4>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>Which colleges are you interested/planning on attending?</label>
                                    		<select name="resident.state[]" class="selectpicker form-control" multiple data-max-options="20" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option disabled>Please Select...</option>
													<option value="NA">None, I am International...</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>

										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What will your enrollment status be? or How will you enroll as?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="activities">
                                <div class="row">
	                                <div class="col-md-12">
		                                <h4 class="info-text">Hobbies & Extracurriculars</h4>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>What sports do you play regularly?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What organizations/clubs are you part of?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-10 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>What hobbies and activities do you participate regularly?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="misc">
                                <div class="row">
	                                <div class="col-md-12">
		                                <h4 class="info-text">Demographics</h4>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>Are either of you parents parents deceased?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What is your household annual income?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>Have you ever worked? If so, where?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What is your race?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5 col-sm-offset-1">
                                    	<div class="form-group">
                                    		<label>What is your ethnicity?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
	                                <div class="col-md-5">
                                    	<div class="form-group">
                                    		<label>What is your religion?</label>
                                    		<select name="resident.state" class="selectpicker form-control" data-menu-style="" data-style="form-control" data-live-search="true">
											    <option selected disabled>Please Select...</option>
													<option value="NA">Not Applicable/I don't know</option>
													<option value="FT">Full-Time</option>
													<option value="PT">Part-Time</option>
										    </select>
                                    	</div>
	                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />
        
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>	
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    
    
     <div class="footer">
      <div class="container">
             Made with <i class="fa fa-heart heart"></i> in the RGV
      </div>
    </div>
    


</div>

</body>

    <script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-morphing.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/bootstrap-datepicker-n.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/jquery.tagsinput.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
	
	<!-- GSDK Pro functions -->
	<script src="js/wizard.js"></script>
	<script src="assets/js/get-shit-done.js"></script>

	
	
	
</html>