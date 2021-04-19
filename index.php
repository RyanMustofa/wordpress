<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Hello, world!</title>
    <style>
      .control-label {
        text-align: left;
      }
      @media (min-width: 768px) {
        .control-label {
          text-align: right;
        }
      }
    </style>
  </head>
  <body>
    <div class="navbar-top-contact">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div class="navbar-contact">
            <i class="fa fa-phone"></i>+62 21 27874080
          </div>
          <div class="navbar-sosmed hidden-xs">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
    <div id="top-search" class="top-search">
      <div class="container">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input
            type="text"
            name="s"
            class="form-control"
            placeholder="Ketik dan cari"
            autocomplete=""
          />
          <span class="input-group-addon close-search" onclick="hide_search()"
            ><i class="fa fa-times"></i
          ></span>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-down">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          id="toggler"
          onclick="toggler_on()"
          data-bs-toggle="collapse"
          data-bs-target="#navbari"
          aria-controls="navbari"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <button
          class="navbar-toggler"
          type="button"
          onclick="toggler_off()"
          id="toggler-off"
          data-bs-toggle="collapse"
          data-bs-target="#navbari"
          aria-controls="navbari"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="https://donasi.dompetdhuafa.org/">
          <img
            src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/assets/img/logo-dd-with-text.png"
            class="logo"
            alt="portal donasi"
          />
        </a>
        <a class="nav-link link-konfirmasi" aria-current="page" id="show-search" onclick="show_search()">
          <i class="fa fa-search"></i>
        </a>
        <a class="nav-link link-konfirmasi" aria-current="page" id="hide-search" onclick="hide_search()">
          <i class="fa fa-search"></i>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbari">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link link-konfirmasi" aria-current="page" href="#"
                >Konfirmasi</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-warning" role="alert">
              Selamat datang di portal donasi, donasi aman dan mudah
            </div>
          </div>
        </div>
        <form class="form_validation">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-horizontal form-green">
                <fieldset>
                  <legend>Pilihan Donasi</legend>
                </fieldset>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label"
                      >Jenis Donasi <span class="text-red">*</span></label
                    >
                    <div class="col-sm-6">
                      <select class="form-control" data-parsley-id="5841">
                        <option value="Zakat">Zakat</option
                        ><option value="Infak / Sedekah">Infak / Sedekah</option
                        ><option value="Wakaf">Wakaf</option
                        ><option value="Kemanusiaan">Kemanusiaan</option>
                      </select>
                      <ul class="parsley-errors-list" id="parsley-id-5841"></ul>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label"
                      >Pengkhususan donasi</label
                    >

                    <div class="col-sm-6">
                      <select
                        class="form-control"
                        onchange="donasi()"
                        id="donasi_select"
                        data-parsley-id="0937"
                      >
                        <option value="">- silahkan pilih -</option>
                        <option value="Zakat Maal" class="Zakat"
                          >Zakat Maal</option
                        ><option value="Zakat Fitrah" class="Zakat"
                          >Zakat Fitrah</option
                        ><option value="Zakat Penghasilan" class="Zakat"
                          >Zakat Penghasilan</option
                        ><option value="Fidyah" class="Zakat">Fidyah</option>
                      </select>
                      <ul class="parsley-errors-list" id="parsley-id-0937"></ul>
                    </div>
                  </div>
                </div>
                <div id="display-none">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"
                        >Keterangan donasi</label
                      >
                      <div class="col-sm-6">
                        <select
                          name="donasi_3"
                          class="form-control"
                          id="donasi_3"
                          data-parsley-id="4928"
                          disabled=""
                        >
                          <option value="">- silahkan pilih -</option>
                        </select>
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-4928"
                        ></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="display-form" class="mb-4">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"
                        >Keterangan donasi</label
                      >
                      <div class="col-sm-6">
                        <select
                          name="donasi_3"
                          class="form-control"
                          id="donasi_3"
                          data-parsley-id="4928"
                        >
                          <option value="">- silahkan pilih -</option>
                          <option value="Penghasilan" class="Zakat Maal"
                            >Penghasilan</option
                          ><option value="Emas dan Perak" class="Zakat Maal"
                            >Emas dan Perak</option
                          ><option value="Simpanan" class="Zakat Maal"
                            >Simpanan</option
                          ><option value="Perdagangan" class="Zakat Maal"
                            >Perdagangan</option
                          ><option value="Pertanian" class="Zakat Maal"
                            >Pertanian</option
                          >
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label">Jumlah (Rp.)*</label>

                    <div class="col-sm-6">
                      <input type="number" class="form-control" />
                      <ul
                        id="parsley-id-0937"
                        style="color:#555;margin-right:auto;"
                      >
                        Minimal : 10000
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-horizontal form-green">
                <fieldset>
                  <legend>Profil Donatur</legend>
                </fieldset>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label"
                      >Sapaan <span class="text-red">*</span></label
                    >
                    <div class="col-sm-6">
                      <select
                        name="sapaan"
                        class="form-control"
                        data-parsley-id="8548"
                      >
                        <option value="Bapak">Bapak</option
                        ><option value="Ibu">Ibu</option
                        ><option value="Saudara">Saudara</option
                        ><option value="Saudari">Saudari</option>
                      </select>
                      <ul class="parsley-errors-list" id="parsley-id-8548"></ul>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label"
                      >Nama Lengkap <span class="text-red">*</span></label
                    >
                    <div class="col-sm-6">
                      <input class="form-control" type="text" />
                      <ul class="parsley-errors-list" id="parsley-id-5841"></ul>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label">Email</label>

                    <div class="col-sm-6">
                      <input class="form-control" type="email" />
                      <ul class="parsley-errors-list" id="parsley-id-0937"></ul>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label">Telepon / HP</label>

                    <div class="col-sm-6">
                      <input
                        type="number"
                        name="telepon"
                        class="form-control"
                        id="donasi_2"
                      />
                      <div style="color: #555;">Contoh: 085717527494</div>
                    </div>
                  </div>
                </div>
                <div
                  style="cursor:pointer;margin-bottom:1rem;"
                  onclick="show_down()"
                  id="show-down"
                >
                  <div style="font-weight:700;">
                    [+] Tampilkan informasi tambahan
                  </div>
                  Sesuai dengan peraturan perpajakan di Indonesia, untuk
                  mendapatkan manfaat sebagai pengurang Penghasilan Kena Pajak
                  (PKP) sesuai keputusan Dirjen Pajak No. PER-11/PJ/2017, kami
                  memelurkan informasi tambahan mengenai profil diri Anda.
                </div>
                <div
                  style="cursor:pointer;margin-bottom:1rem;"
                  onclick="show_up()"
                  id="show-up"
                >
                  <div style="font-weight:700;">
                    [+] Tampilkan informasi tambahan
                  </div>
                  Sesuai dengan peraturan perpajakan di Indonesia, untuk
                  mendapatkan manfaat sebagai pengurang Penghasilan Kena Pajak
                  (PKP) sesuai keputusan Dirjen Pajak No. PER-11/PJ/2017, kami
                  memelurkan informasi tambahan mengenai profil diri Anda.
                </div>
                <div id="show-down-group">
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Alamat</label>

                      <div class="col-sm-6">
                        <textarea rows="3" class="form-control" type="text">
                        </textarea>
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Tipe Donatur</label>

                      <div class="col-sm-6">
                        <input type="radio" /> Personal <br />

                        <input type="radio" /> Institutional/Perusahaan
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"
                        >Nama Institusi</label
                      >

                      <div class="col-sm-6">
                        <input class="form-control" type="text" />
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">NPWP</label>

                      <div class="col-sm-6">
                        <input class="form-control" type="text" />
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Kota</label>

                      <div class="col-sm-6">
                        <input class="form-control" type="text" />
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Kodepos</label>

                      <div class="col-sm-6">
                        <input class="form-control" type="text" />
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Propinsi</label>

                      <div class="col-sm-6">
                        <input class="form-control" type="text" />
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label">Negara</label>

                      <div class="col-sm-6">
                        <select name="negara" class="form-control">
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Åland Islands">Åland Islands</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antarctica">Antarctica</option>
                          <option value="Antigua and Barbuda"
                            >Antigua and Barbuda</option
                          >
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
                          <option value="Bosnia and Herzegovina"
                            >Bosnia and Herzegovina</option
                          >
                          <option value="Botswana">Botswana</option>
                          <option value="Bouvet Island">Bouvet Island</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Territory"
                            >British Indian Ocean Territory</option
                          >
                          <option value="Brunei Darussalam"
                            >Brunei Darussalam</option
                          >
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic"
                            >Central African Republic</option
                          >
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island"
                            >Christmas Island</option
                          >
                          <option value="Cocos (Keeling) Islands"
                            >Cocos (Keeling) Islands</option
                          >
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Congo, The Democratic Republic of The"
                            >Congo, The Democratic Republic of The</option
                          >
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
                          <option value="Dominican Republic"
                            >Dominican Republic</option
                          >
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea"
                            >Equatorial Guinea</option
                          >
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands (Malvinas)"
                            >Falkland Islands (Malvinas)</option
                          >
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia"
                            >French Polynesia</option
                          >
                          <option value="French Southern Territories"
                            >French Southern Territories</option
                          >
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
                          <option value="Guernsey">Guernsey</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-bissau">Guinea-bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Heard Island and Mcdonald Islands"
                            >Heard Island and Mcdonald Islands</option
                          >
                          <option value="Holy See (Vatican City State)"
                            >Holy See (Vatican City State)</option
                          >
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia" selected="selected"
                            >Indonesia</option
                          >
                          <option value="Iran, Islamic Republic of"
                            >Iran, Islamic Republic of</option
                          >
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jersey">Jersey</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea, Democratic People's Republic of"
                            >Korea, Democratic People's Republic of</option
                          >
                          <option value="Korea, Republic of"
                            >Korea, Republic of</option
                          >
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Lao People's Democratic Republic"
                            >Lao People's Democratic Republic</option
                          >
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libyan Arab Jamahiriya"
                            >Libyan Arab Jamahiriya</option
                          >
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macao">Macao</option>
                          <option
                            value="Macedonia, The Former Yugoslav Republic of"
                            >Macedonia, The Former Yugoslav Republic of</option
                          >
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands"
                            >Marshall Islands</option
                          >
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia, Federated States of"
                            >Micronesia, Federated States of</option
                          >
                          <option value="Moldova, Republic of"
                            >Moldova, Republic of</option
                          >
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="Netherlands Antilles"
                            >Netherlands Antilles</option
                          >
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Northern Mariana Islands"
                            >Northern Mariana Islands</option
                          >
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Palestinian Territory, Occupied"
                            >Palestinian Territory, Occupied</option
                          >
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea"
                            >Papua New Guinea</option
                          >
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
                          <option value="Russian Federation"
                            >Russian Federation</option
                          >
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Helena">Saint Helena</option>
                          <option value="Saint Kitts and Nevis"
                            >Saint Kitts and Nevis</option
                          >
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Pierre and Miquelon"
                            >Saint Pierre and Miquelon</option
                          >
                          <option value="Saint Vincent and The Grenadines"
                            >Saint Vincent and The Grenadines</option
                          >
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe"
                            >Sao Tome and Principe</option
                          >
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands"
                            >Solomon Islands</option
                          >
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option
                            value="South Georgia and The South Sandwich Islands"
                            >South Georgia and The South Sandwich
                            Islands</option
                          >
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Svalbard and Jan Mayen"
                            >Svalbard and Jan Mayen</option
                          >
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syrian Arab Republic"
                            >Syrian Arab Republic</option
                          >
                          <option value="Taiwan, Province of China"
                            >Taiwan, Province of China</option
                          >
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania, United Republic of"
                            >Tanzania, United Republic of</option
                          >
                          <option value="Thailand">Thailand</option>
                          <option value="Timor-leste">Timor-leste</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago"
                            >Trinidad and Tobago</option
                          >
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks and Caicos Islands"
                            >Turks and Caicos Islands</option
                          >
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates"
                            >United Arab Emirates</option
                          >
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="United States Minor Outlying Islands"
                            >United States Minor Outlying Islands</option
                          >
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Viet Nam">Viet Nam</option>
                          <option value="Virgin Islands, British"
                            >Virgin Islands, British</option
                          >
                          <option value="Virgin Islands, U.S."
                            >Virgin Islands, U.S.</option
                          >
                          <option value="Wallis and Futuna"
                            >Wallis and Futuna</option
                          >
                          <option value="Western Sahara">Western Sahara</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <ul
                          class="parsley-errors-list"
                          id="parsley-id-0937"
                        ></ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="form-horizontal form-green">
                <fieldset>
                  <legend>silahkan pilih metode pembayaran :</legend>
                </fieldset>
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button
                      class="nav-link active"
                      id="nav-home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-home"
                      type="button"
                      role="tab"
                      aria-controls="nav-home"
                      aria-selected="true"
                    >
                      Transfer Bank
                    </button>
                    <button
                      class="nav-link"
                      id="nav-profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-profile"
                      type="button"
                      role="tab"
                      aria-controls="nav-profile"
                      aria-selected="false"
                    >
                      Online Payment
                    </button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="nav-home"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                  >
                    <div class="form-group">
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-bca.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-mandiri.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-bni.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-muamalat.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-maybank-syariah.png"
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                  >
                    <div class="form-group">
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-link-aja.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-dana.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-jenius.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-cimb-clicks.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-ib-muamalat.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-visa-master-card.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-shopeepay.png"
                        />
                      </div>
                      <div class="d-flex my-3 pembayaran">
                        <input type="radio" class="my-auto" name="bca" />
                        <img
                          style="width:106px; margin-left:1rem;"
                          src="https://donasi.dompetdhuafa.org/wp-content/themes/donasidd/framework/library/dd_payment_gateway/assets/images/logo-ovo.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row mb-2">
                    <button class="btn mb-2 btn-warning btn-block">
                      Donasi Sekarang
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div
      class="footer mt-4"
      style="border-top:1px solid #e7e7e7;background-color:#eaeaea; padding: 40px 0;"
    >
      <div class="container">
        <div class="row justify-content-center">
          COPYRIGHT &copy; 2021 CODING LOCAL
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
    <script>
      const display_none = document.getElementById("display-none");
      const display_form = document.getElementById("display-form");
      const show_down_group = document.getElementById("show-down-group");
      const showdown = document.getElementById("show-down");
      const showup = document.getElementById("show-up");
      const toggler = document.getElementById("toggler");
      const toggleroff = document.getElementById("toggler-off");
      const navbari = document.getElementById("navbari");
      const showsearch = document.getElementById('show-search');
      const hidesearch = document.getElementById('hide-search');
      const topsearch = document.getElementById('top-search');

      hidesearch.style.display = "none";
      display_form.style.display = "none";
      show_down_group.style.display = "none";
      showdown.style.display = "none";
      toggleroff.style.display = "none";

      const donasi = e => {
        const donasi_select = document.forms[0].elements[2].value;
        if (donasi_select === "Zakat Maal") {
          display_none.style.display = "none";
          display_form.style.display = "";
        }
        if (donasi_select !== "Zakat Maal") {
          display_form.style.display = "none";
          display_none.style.display = "";
        }
      };
      const show_down = () => {
        show_down_group.style.display = "none";
        showdown.style.display = "none";
        showup.style.display = "";
      };
      const show_up = () => {
        show_down_group.style.display = "";
        showup.style.display = "none";
        showdown.style.display = "";
      };
      const toggler_on = () => {
        toggler.style.display = "none";
        toggleroff.style.display = "";
        navbari.style.display = "block";
      };
      const toggler_off = () => {
        toggler.style.display = "";
        toggleroff.style.display = "none";
        navbari.style.display = "none";
      };
      const show_search = () => {
        showsearch.style.display = "none";
        hidesearch.style.display = "";
        topsearch.style.display = "flex"
      }
      const hide_search = () => {
        showsearch.style.display = "";
        hidesearch.style.display = "none";
        topsearch.style.display = "none"
      }
    </script>
  </body>
</html>
