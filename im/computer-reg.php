<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Computer-reg</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">

<style>

.form-container {
  border-radius: 5px;
  background-image: url(assets/img/avatars/background-computerReg.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 20px;
}

.form-heading{
    width: 700px;
	padding-top:15px; 
    padding-left :50px; 
    font-family:Times New Roman;	  
}

label{
  padding: 12px 12px 12px 0;
  display: inline-block;
}

form{
	font-size:20px;
	font-family:Chaparral Pro;
	background-color:white;
	width: 1000px;
	padding:20px;
	margin: 40px;
	border-radius:20px;
    opacity: 0.9;
}

.sumbit-next{  
  padding: 7px 28px;
  cursor: pointer;
  margin: 4px 2px;
  border-radius: 5px;
  background:#00001a;
  color:white; 
}    

</style>

</head>

<body>
    
<?php
		include 'header.php';
	?>

    <!----------------------------------------------------------------------------------------->
    
    <div class="form-container">        
                <div class="form-contain">

    <div class="row">
        <div class="col-md-10 mx-auto">

            <form method="post" action = "computer-add.php"> 

                <center>
            <div class="form-heading">
                    <h2 class="text-info">Getting School details</h2>
                    <h6>Fill all the fields with correct details.</h6><br>
                </div>
                </center>

                <div class="form-group row">
                    <div class="col-sm-6">
                    
                        <label for="inputProvience">Province :</label>
                        <select name="provience" id="provience" class="form-control" required>
                            <option value="">Choose an option</option>
                            <option value="Western">Western</option>
                            <option value="Uva">Uva</option>
                            <option value="Southern">Southern</option>
                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                            <option value="North Western">North Western</option>
                            <option value="Northern">Northern</option>
                            <option value="North Central">North Central</option>
                            <option value="Eastern"> Eastern</option>
                            <option value="Central"> Central</option>
                        </select>
                    </div>
                    
                    
                    <div class="col-sm-6">
                        <label for="inputDistrict">District :</label>
                        <select name="district" id="district" class="form-control" required>
                            <option value="">Choose an option</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota"> Hambantota</option>
                            <option value="Jaffna"> Jaffna</option>
                            <option value="Kalutara"> Kalutara</option>
                            <option value="Kandy"> Kandy</option>
                            <option value="Kegalle"> Kegalle</option>
                            <option value="Kilinochchi"> Kilinochchi</option>
                            <option value="Kurunegala"> Kurunegala</option>
                            <option value="Mannar"> Mannar</option>
                            <option value="Matale"> Matale</option>
                            <option value="Matara"> Matara</option>
                            <option value="Monaragala"> Monaragala</option>
                            <option value="Mullaitivu"> Mullaitivu</option>
                            <option value="Nuwara Eliya"> Nuwara Eliya</option>
                            <option value="Polonnaruwa"> Polonnaruwa</option>
                            <option value="Puttalam"> Puttalam</option>
                            <option value="Ratnapura"> Ratnapura</option>
                            <option value="Trincomalee"> Trincomalee</option>
                            <option value="Vavuniya"> Vavuniya</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputZone">Zone :</label>
                        <input type="text" name="zone" class="form-control" id="zone" placeholder="Zone" required>
                    </div>
                    

                 <div class="col-sm-6">
                 <label for="inputSchool">School Name :</label>
                        <select name="schoolname" id="schoolname"class="form-control" required>
                        <option value="">Choose an option</option>
                            <option value="school">DE LA SALLE COLLEGE MUTWAL, COLOMBO 15</option>
                            <option value="school">MODARA ANANDA M.M.V. MODARA, COLOMBO 15</option> 
                            <option value="school">ST. ANTHONY'S B.M.V. MUTWAL, COLOMBO 15</option> 
                            <option value="school">KUMARA V. KOTAHENA, COLOMBO 13</option>
                            <option value="school">ST. JOHN'S M.V. CENTER ROAD, COLOMBO 15</option>   
                            <option value="school">ST.LUCIA'S COLLEGE KOTAHENA, COLOMBO 13</option>   
                            <option value="school">KOTAHENA M.M.V. MAHA VIDYALA MW, COLOMBO 13</option>
                            <option value="school">RAJASINGHE M.V. BASELINE ROAD, DEMATAGODA, COLOMBO 09</option> 
                            <option value="school">VIJAYABA M.V. STACE ROAD, COLOMBO 10 </option>
                            <option value="school">ST.JOSEPH'S B.M.V. GRANDPASS, COLOMBO 14 </option>
                            <option value="school">ST.JOSEPH'S BOYS V. GRANDPASS, COLOMBO 14</option>    
                            <option value="school">WOLFENDHAL B.M.V. NO.02, VIVEKANANDA HILL, COLOMBO 13 </option>    
                            <option value="school">CLIFTON B.M.V. MALIGAKANDA ROAD, COLOMBO 10 </option>    
                            <option value="school">ST.MATHEWS COLLEGE, DEMATAGODA, COLOMBO 09 </option> 
                            <option value="school">ST.JOHN'S COLLEGE DEMATAGODA, COLOMBO 09</option> 
                            <option value="school">SUSAMAYAWARDHANA V. AUSTIN PL, COLOMBO 08</option>    
                            <option value="school">PRESBYTERIAN GIRL'S SCHOOL REGENT ST, COLOMBO 10</option> 
                            <option value="school">RATHNAWALI B.M.V. PARK AVENUE, COLOMBO 08 </option> 
                            <option value="school">ALL SAINTS' B.M.V. ANANDA RAJAKARUNA MW, COLOMBO 10 </option> 
                            <option value="school">VELUWANA COLLEGE COLOMBO-09 </option> 
                            <option value="school">C.W.W.KANNANGARA V. COLOMBO 08</option> 
                            <option value="school">SUJATHA B.V. NARAHENPITA, COLOMBO 05</option> 
                            <option value="school">DUDLEY SENANAYAKA V. PARK RD, COLOMBO 05 </option> 
                            <option value="school">ST.ANTHONY'S B.M.V. ST.ANTHONY'S MW, COLOMBO 03 </option> 
                            <option value="school">ST.CLARE'S B.M.V. 1ST CHAPEL LANE, COLOMBO 06 </option> 
                            <option value="school">LINDSAY B.V. GALLE ROAD, COLOMBO 03 </option> 
                            <option value="school">S.DE.S. JAYASINGHE CENTRAL COLLEGE ANAGARIKA DHARMAPALA MW, KARAGAMPITIYA</option> 
                            <option value="school"> HOLY FAMILY CONVENT NO.100, GALLE ROAD, DEHIWALA</option> 
                            <option value="school">PRESBYTERIAN B.V DEHIWALA0</option> 
                            <option value="school">ST.JOSEPH'S GIRL'S S. HIGH LEVEL ROAD, NUGEGODA </option> 
			                <option value="school">KOTHALAWALAPURA M.V.,RATMALANA</option> 
                            <option value="school">SCIENGE COLLEGE TEMPLERS ROAD, MOUNT LAVINIA </option> 
                            <option value="school">LALITH ATHULATHMUDALI COLLEGE HENA ROAD, MOUNT LAVINIA </option>    
                            <option value="school">SEDAWATTA SIDDHARTHA CENTRAL COLLEGE WELLAMPITIYA  </option> 
                            <option value="school"> SRI RAJASINGHE CENTRAL COLLEGE KUDA BUTHGAMUWA, MULLERIYAWA NEW TOWN</option> 
                            <option value="school">SRI RAHULA MAHA VIDYALAYA MULLERIYAWA NEW TOWN </option> 
                            <option value="school"> HENRY OLCOTT MAHA VIDYALAYA SALAMULLA, KOLONNAWA </option> 
                            <option value="school">ANANDA BALIKA MAHA VIDYALAYA PAGODA ROAD, KOTTE </option> 
                            <option value="school"> SRI JAYAWARDHANAPURA M.V. MISSION LANE, KOTTE </option> 
                            <option value="school">SRI JAYAWARDHANAPURA BALIKA VIDYALAYA MISSION ROAD, KOTTE </option> 
                            <option value="school"> ST.THOMAS COLLEGE KOTTE</option> 
                            <option value="school">HEWAVITHARANA M.V. RAJAGIRIYA ROAD, RAJAGIRIYA</option> 
                            <option value="school">MORATU MAHA V. MORATUWA </option> 
                            <option value="school"> DE SOYZA M.V. GALLE ROAD, KATUBEDDA, MORATUWA </option> 
                            <option value="school"> METHODIST HIGH SCHOOL PUWAKARAMBA, MORATUWA </option> 
                            <option value="school">WEERAPURAN APPU MODEL S. MORATUWA </option> 
                            <option value="school">RAWATAWATTA ROMAN CATHOLIC SCHOOLMORATUWA </option>
                            <option value="school">RAWATHAWATTA METHODIST C. CHARLES PLACE, RAWATHAWATTA, MORATUWA </option> 
                            <option value="school">AL HIDHAYA V. SRI SANGARAJA MAWATHA, COLOMBO 10 </option> 
                            <option value="school">HAMEED AL HUSSEINIE COLLEGE 45, HUSSEINIA ROAD, COLOMBO-12  </option> 
                            <option value="school">DHARUSSALAAM M.V., 281, JUMMAHMASJID ROAD, COLOMBO 10 </option> 
                            <option value="school">VIVEKANANDA NATIONAL SCHOOL 57, NEW CHETTY STREET, COLOMBO-13  </option> 
                            <option value="school">AL HIKMA V. 65, ST.SEBASTIAN STREET, COLOMBO 12 </option> 
                            <option value="school">ST. ANNE'S B.M.V, HILL STREET, COLOMBO 13</option> 
                            <option value="school">ST.ANTHONY'S BOYS M.V. VIVEKANANDA HILL, COLOMBO 13  </option> 
                            <option value="school">KANAPATHY HINDU LADIES M.V. 194, BANDARANAYAKA MAWATHA, COLOMBO 12 </option> 
                            <option value="school">COLOMBO CENTRAL HINDU M.V. 186, MAHA VIDYALAYA MAWATHA, COLOMBO 13 </option> 
                            <option value="school">SIR RAZIK FAREED MUS.V. ST.MARY'S RD, COLOMBO 15  </option> 
                            <option value="school">MAHAWATTA ST.ANTHONY'S T.M.V. MAHAWATT RD, COLOMBO 14. </option> 
                            <option value="school">GOOD SHEPHERD G.T.V. WASALA RD,KOTAHENA, COLOMBO 13 </option> 
                            <option value="school">HINDU COLLEGE -COLOMBO 15, MUTWALL MW, COLOMBO 15</option> 
                            <option value="school">VIPULANANTHA T.M.V. VELUWANA RD, DEMATAGODA, COLOMBO 09  </option> 
                            <option value="school">RAMANATHAN HINDU LADIES COLLEGE -COLOMBO-04 LORENCE RD, COLOMBO-04 </option> 
                            <option value="school">SUBHUTHI NATIONAL SCHOOL BATTARAMULLA  </option> 
                            <option value="school">KOTHALAWALA MAHA VIDYALAYA KOTHALAWALA, KADUWELA.  </option> 
                            <option value="school">KORATHOTA SRI SOMANANDA M.V. KORATHOTA, KADUWELA.  </option> 
                            <option value="school">BOMIRIYA MUNIDASA KUMARATHUNGA V.BOMIRIYA, KADUWELA</option> 
                            <option value="school">M.D.H.JAYAWARDANA MAHA VIDYALAYA THALANGAMA NORTH, BATHTHARAMULLA </option> 
                            <option value="school">KOSGAMA M.V. KOSGAMA  </option> 
                            <option value="school">WP/HO/ST. MARY'S COLLEGE AVISSAWELLA </option> 
                            <option value="school">ST. JOHN BOSCO'S COLLEGE KALUAGGALA, HANWELLA </option> 
                            <option value="school">KOSGAMA SUMEDHA VIDYALAYA KOSGAMA  </option> 
                            <option value="school">AVISSAWELLA JANADHIPATHI VIDYALAYA KUDAGAMA ROAD, AVISSAWELLA </option> 
                            <option value="school">PUWAKPITIYA C.C. TAMIL M.V. PUWAKPITIYA </option> 
                            <option value="school">BOPE RAJASINGHE M.V. BOPE, PADUKKA</option> 
                            <option value="school">MAYADUNNA MAHA VIDYALAYA HANWELLA </option> 
                            <option value="school">PAHATHGAMA ROMAN CATHOLIC JUNIOR SCHOOL </option> 
                            <option value="school">MEEGODA MAHA VIDYALAYA MEEGODA  </option> 
                            <option value="school">WIJAYAWARDANA MAHA VIDYALAYA KIRIWATHTHUDUWA</option> 
                            <option value="school">SRI PARAKRAMA MAHA VIDYALAYA PANAGODA , HOMAGAMA  </option> 
                            <option value="school">MATTEGODA VIDYADEEPA MAHA VIDYALAYA MTTEGODA, PANNIPITIYA </option> 
                            <option value="school">MAGAMMANA MAHA VIDYALAYA MAGAMMANA, HOMAGAMA  </option> 
                            <option value="school">HOMAGAMA MAHA VIDYALAYA ATHURUGIRIYA ROAD, HOMAGAMA  </option> 
                            <option value="school">MEEGODA DHARMARAJA VIDYALAYA MEEGODA </option> 
                            <option value="school">SUBHARATHI MAHAMATHYA MAHA VIDYALAYA GODAGAMA, HOMAGAMA  </option> 
                            <option value="school">BUWANEKABA M.V. MAHARAGAMA </option> 
                            <option value="school">CENTRAL COLLEGE MAHARAGAMA GAMMANA ROAD MAHARAGAMA  </option> 
                            <option value="school">KOTTAWA NORTH DHARMAPALA M.V. HOKANDARA ROAD PANNIPITIYA  </option> 
                            <option value="school">DHARMARAJA M.V. MAMPE, PILIYANDALA  </option> 
                            <option value="school">PHILIP ATTYGALLE M.V. MADAPATHA  </option> 
                            <option value="school">VIDYALOKA M.V. AREWWALA, PANNIPITIYA.  </option> 
                            <option value="school">MAKANDANA SRI SUDARSHANA MODEL S.MAKANDANA, MADAPATHA  </option> 
                            <option value="school">EAST ARAWWALA DHARMAPALA M.V. PANNAPATIYA  </option> 
                            <option value="school">SRI CHANDRARATHNA MANAWASINGHE M.V. MAHARAGAMA </option> 
			                <option value="school">RATMALANA HINDU COLLEGE, RATMALANA</option>
                            <option value="school">PROF.EDIRIWEERA SARACHCHANDRA VIDYALAYA HIMBUTANA, MULLERIYAWA  </option> 
                            <option value="school">PAMUNUGAMA M.V. BOPITIYA PAMUNUGAMA </option> 
                            <option value="school">GONSALVEZ M.V. PAMUNUGAMA</option>  
                            <option value="school">GOODSHEPERED B.M.V. NAYAKAKANDA, HENDALA, WATTHALA  </option> 
                            <option value="school">HEENKENDA M.V. HEENKENDA RAGAMA </option> 
                            <option value="school">PASYALA M.V KANDY ROAD, PASYALA</option> 
			                <option value="school">D.S.SENANAYAKA M.M.V, MIRIGAMA</option> <!-- 107 chathurya -->

                            <option value="school">KANDANGAMUWA M.V. MIRIGAMA</option>
                            <option value="school">PALLEWELA M.V. PALLEWELA</option> 
                            <option value="school">BANDARANAYAKA M.V MIRIGAMA</option> 
                            <option value="school">SIRI MIHINDU M.V. RADAWADUNNA</option>
                            <option value="school">KALAGEDIHENA MAHA VIDYALA KALAGEDIHENA</option>   
                            <option value="school">ST.MARY'S M.V. VEYANGODA</option>   
                            <option value="school">VIDYALOKA M.V. PATHTHALAGEDARA, VEYANGOD</option>
                            <option value="school">RANPOKUNAGAMA M.V. RANPOKUNAGAMA, NITTAMBUWA</option> 
                            <option value="school">RAJASINGHE M.V. IMBULGODA</option>
                            <option value="school">SRI SIDDHARTHA KUMARA M.V. SRI VIJAYA SRI MAWATHA, GAMPAHA</option>
                            <option value="school">HEMAMALI M.V. GALAHITIYAWA GANEMULLA </option>    
                            <option value="school">SRI CHANDRAJOTHI M.V. YAKKALA</option>    
                            <option value="school">MADDUMA BANDARA M.V. WELIVERIYA</option>    
                            <option value="school">HENARATHGODA KEPPETIPOLA M.V. MUDUNGODA </option> 
                            <option value="school">KADAWATHA M.M.V. KADAWATHA </option>    
                            <option value="school">UDUPILA WEERA VIJAYABA M.V. DELGODA</option>    
                            <option value="school">HOLY FAMIL B.M.V. KIRIMATIYAGARA KADAWATHA </option>    
                            <option value="school">BUTHPITIYA M.V. BUTHPITIYA </option> 
                            <option value="school">JAYAKODY M.V. KANDALIYADDAPALUWA GANEMULLA</option> 
                            <option value="school">S.K.K.SOORIARACHCHI SECONDRY SCHOOLGONAHENA KADAWATHA</option> 
                            <option value="school">ST.SEBASTIANS M.V EDERAMULL, WATTALA</option> 
                            <option value="school">VIDYALOKA VIDYALAYA IHALA KARAGAHAMUNA, KADAWATHA</option>
                            <option value="school">WEBODA NORTH VIDYADEEPA M.V. WEBODA NORTH, WEBODA </option>
                            <option value="school">HENEGAMA MAHABODHI K.V. HENEGAMA</option>
                            <option value="school">SIYANE NATIONAL SCHOOL PALUGAMA, DOMPE</option>
                            <option value="school">MAHAGAMASEKARA M.V. THUNMANHANDIYA, RADAWANA</option>
                            <option value="school">OVITIGAMA BODHIRAJA M.V. OVITIGAMA, PUGODA</option>
                            <option value="school">DOMPE M.V. DOMPE </option>
                            <option value="school">KIRINDIWELA M.V. KIRINDIWELA</option>
                            <option value="school">SANGAMITHTHA MAHA VIDYALAYA HEIYANTHUDUWA</option>
                            <option value="school">MAHINDA M.V. HEIYANTHUDUWA</option>
                            <option value="school">MAHAMAYA BALIKA M.V. PAHALA BIYANWILA, KADAWATHA</option>
                            <option value="school">SUBHASHIE RAJAKEEYA M.V. KARAMBUGAS HANDIYA, MALWANA</option>
                            <option value="school">YATIHENA K.V. YATIHENA, MALWANA</option>
                            <option value="school">ST.PAUL'S BALIKA M.V. WARAGODA, KELANIYA</option>
                            <option value="school">SRI SUMANGALA M.V. ERIYAWETIYA KELANIYA </option>
                            <option value="school">KELANI M.V. SINHARAMULLA, KELANIYA</option>
                            <option value="school">ST.FRANCIS M.V. DALUGAMA , KELANIYA</option>
                            <option value="school">D.A.RAJAPAKSHA V KIRIBATHGODA</option>
                            <option value="school">PRESIDENT COLLEGE-PILAPITIYA PILAPITIYA, KELANIYA</option>
                            <option value="school">PRESIDENT COLLEGE MAHARA, KADAWATHA</option>
                            <option value="school">HELENA WIJAYAWARDHANA B.M.V. SINHARAMULLA, KELANIYA </option>
                            <option value="school">DESHAMANYA H.K.DARMADASA M.V. PASAL MAWATHA, PELIYAGODA </option>
                            <option value="school">AL-ASHRAFF M.V. MABOLA WATTALA</option>
                            <option value="school">AL-AZHAR M.M.V. WARANA ROAD, THIHARIYA, KALAGEDIHENA </option>
                            <option value="school">ALBADRIYA M.V. KAHATOWITA</option>
                            <option value="school">AL-MUBARAK NATIONAL SCHOOL MALWANA </option>
                            <option value="school">ST.MARY'S M.V. MAIN STREET, NEGOMBO </option>
                            <option value="school">KOCHCHIKADE M.V. KOCHCHIKADE</option>
                            <option value="school">ST.ANN'S M.V. KURANA, NEGOMBO. </option>
                            <option value="school">PITIPANA M.V. MEDA PITIPANA, NEGOMBO</option>
                            <option value="school">DALUPOTHA M.V. DALUPOTHA, NEGOMBO.</option>
                            <option value="school">ST.ANNE'S M.V. DALUWAKOTUWA, KOCHCHIKADE.</option>
                            <option value="school">NIMALA MARIA M.V. BOLWALANA, NEGOMBO. </option>
                            <option value="school">VIDYALANKARA M.V. TEMPLE ROAD, NEGOMBO. </option>
                            <option value="school">ANDIAMBALAMA M.V. ANDIAMBALAMA</option>
                            <option value="school">MUDALIDU DAVID MENDIS M.V. THIMBIRIGASKATUWA </option>
                            <option value="school">DHAMMALOKA M.V. HEENATIYANA, MINUWANGODA</option>
                            <option value="school">MARIYA RAJINIE J.S.V. KATANA</option>
                            <option value="school">JEYARAJ FERNANDOPULLE M.V. KIMBULAPITIYA</option>
                            <option value="school">HUNUMULLA M.V. HUNUMULLA</option>
                            <option value="school">NAWANA M.V. NAWANA </option>
                            <option value="school">BANDURAGODA DHARMASHOKA M.V. BANDURAGODA </option>
                            <option value="school">MELLAWAGEDARA ANAGARIKA M.V. MELLAWAGEDARA</option>
                            <option value="school">DUNAGAHA RANASINGHA M.V. DUNAGAHA</option>
                            <option value="school">SRI GNANAWASA M.V. DIVULAPITIYA </option>
                            <option value="school">HORAMPELLA SEELAWIMALA M.V. HORAMPELLA</option>
                            <option value="school">POLWATHTHA SRI RATHANASARA M.V. MINUWANGODA </option>
                            <option value="school">PRESIDENT COLLEGE MINUWANGODA</option>
                            <option value="school">SRI RAHULA M.V. KOTUGODA</option>
                            <option value="school">DEVELAPOLA ANANDA M.V. DEWELAPOLA</option>
                            <option value="school">BURULLAPITIYA M. V MINUWANGODA </option>
                            <option value="school">DR.KULASINGHE M.V. UDAMMITA, KOTUGODA</option>
                            <option value="school">CHRIST KING COLLEGE THUDELLA, JA-ELA</option>
                            <option value="school">ST.SEBASTIAN'S M.V. KANDANA</option>
                            <option value="school">JINARAJA M.V. NIWANDAMA, JA-ELA </option>
                            <option value="school">BATUWATTA M.V. BATUWATTA, RAGAMA</option>
                            <option value="school">B SENANAYAKA M.V. EKALA </option>
                            <option value="school">JAYANTHI J S V JA ELA</option>
                            <option value="school">ST MARY'S MODEL SCHOOL HAPUGODA KADANA </option>
                            <option value="school">BASILICA M.V. KADAWATHA ROAD RAGAMA</option>
                            <option value="school">AL-HILAL M.V. PERIYAMULLA, NEGOMBO</option>
                            <option value="school">WIJERATNAM HINDU CENTRAL COLLEGE 134, SEA STREET, NEGOMBO </option>
                            <option value="school">AL-FALAH M.V. PORUTHOTA, KOCHCHIKADE </option>
                            <option value="school">SANGAMITHTHA B.M.V. KIRIDIWELA</option>
                            <option value="school">PANADURA BALIKA M.V. PANADURA </option>
                            <option value="school">WALANA MAHANAMA M.V. WALANA, PANADURA </option>
                            <option value="school">SARIKKAMULLA SRI THAKSALA M.V. SARIKKAMULLA, PANADURA</option>
                            <option value="school">ST.ANTHONY'S GIRLS SCHOOL PANADURA </option>
                            <option value="school">HORETHUDUWA SRI CHANDRASEKARA M.V. HORETHUDUWA, KESELWATHTHA</option>
                            <option value="school">BAUDDHALOKA M.V. WEKADA, PANADURA</option>
                            <option value="school">UPADYA M.V. PANADURA</option>
                            <option value="school">BANDARAGAMA M.M.V. BANDARAGAMA </option>
                            <option value="school">WEVITA MAITHREE M.V. WEVITA, BANDARAGAMA</option>
                            <option value="school">ALUBOMULLA S.MAHINDA M.V ALUBOMULLA </option>
                            <option value="school">SRI SARALANKARA M.V. KIDELPITIYA, WELMILLA JUNCTION </option>
                            <option value="school">DOMBAGODA SEELARATHANA M.V DOMBAGODA, HORANA </option>
                            <option value="school">PATHAHAWATHTHA SRI SWARNAJOTHI K.VRAIGAMA, BANDARAGAMA </option>
                            <option value="school">MILLANIYA SRI DEWARAKSHITHA M.V. MILLANIYA </option>
                            <option value="school">ARUGGODA SRI PARAKKRAMA M.V. ARUGGODA, ALUBOMULLA</option>
                            <option value="school">MAHAWILA K.V. MAHGAWILA, PANADURA</option>
                            <option value="school">WALGAMA SRI SADDHATHISSA M.V. WALGAMA, BANDARAGAMA </option>
                            <option value="school">SRI SUMANGALA M.V. OLABODUWA, GONAPOLA JUNCTION</option>
                            <option value="school">PALANNORUWA M.M.V. PALANNORUWA, GONAPOLA JUNCTION</option>
                            <option value="school">MAPUTUGALA M.V. PORUWADHANDA </option>
                            <option value="school">MEEWANAPALANA M.V. MEEWANAPALANA, HORANA</option>
                            <option value="school">SRI MEDHANKARA M.V. PADUKKA ROAD, HORANA</option>
                            <option value="school">DONPEDRICK M.V. HORANA </option>
                            <option value="school">SIRIMEWAN K.V. POKUNUWITA </option>
                            <option value="school">MORAGAHAHENA M V MORAGAHAHENA, MILLAWA</option>
                            <option value="school">HANDAPANGODA M.V. HADAPANGODA </option>
                            <option value="school">PRAJAPATHI B.M.V. DICKHENAPURA, HORANA</option>
                            <option value="school">GOVINNA M.V. GOVINNA</option>
                            <option value="school">POLEGODA M.V. POLEGODA, MAHAGAMA </option>
                            <option value="school">MADURAWALA M.V. ANGURUWATHOTA</option>
                            <option value="school">REMUNA M.V. REMUNA, ANGURUWATOTA</option>
                            <option value="school">DODANGODA M.V. DODANGODA</option>
                            <option value="school">NAVUTHTHUDUWA M.V. NAVUTHTHUDUWA</option>
                            <option value="school">BOMBUWALA SRI DHARMALOKA M.V. BOMBUWALA KALUTHARA SOUTH </option>
                            <option value="school">DODANGODA MIRISWATTA NATIONAL SCHOOL DODANGODA</option>
                            <option value="school">WALAGEDARA M.V. GALMATHTHA, WALAGEDARA </option>
                            <option value="school">HORAWALA M.V. HORAWALA, WELIPENNA </option>
                            <option value="school">D.D. ATHULATHMUDALI K.V. MATUGAMA </option>
                            <option value="school">GNANODAYA M.V. GNANODAYA MAWATHA, KALUTARA SOUTH</option>
                            <option value="school">DIYAGAMA M.V. DIYAGAMA, GALPATHA </option>
                            <option value="school">POTHUPITIYA M.V. POTHUPITIYA, WADDUWA </option>
                            <option value="school">UGGALBODA M.V. UGGALBODA, KALUTARA</option>
                            <option value="school">KATUKURUNDA DHARMAPALA M.V. KATUKURUNDA, KALUTARA</option>
                            <option value="school">ST. JOHN'S M.V. KALUTARA SOUTH</option>
                            <option value="school">MORONTHUDUWA DHAMMANANDA M.V.MORONTHUDUWA </option>
                            <option value="school">VELAPURA M.V. KALUTARA SOUTH </option>
                            <option value="school">ALUTHGAMA NATIONAL SCHOOL ALUTHGAMA</option>
                            <option value="school">SANGAMITTA BALIKA M.V. WELIPENNA ROAD ALUTHGAMA</option>
                            <option value="school">SRI GNANISSARA MAHA VIDYALAYA NAKANDALAGODA DHARGA TOWN </option>
                            <option value="school">BANDARANAYAKA M.V. PAYAGALA</option> 237
                            <option value="school">D S SENANAYAKA NATIONAL SCHOOL, BERUWALA</option>
                            <option value="school">ARIYAWANSHA MAHA VIDYALAYA, ARIYAWANSHA MAWATHA BERUWALA </option>
                            <option value="school">HALKANDAWILA MAHA VIDYALAYA, HALKANDAWILA PAYAGALA</option>
                            <option value="school">BELLANA M.V, BELLANA</option>
                            <option value="school">BADURALIYA K.V, BADURALIYA</option>
                            <option value="school">MERIL KARIYAWASAM M.M.V, MEEGAHATHENNA</option>
                            <option value="school">COLVIN R DE SILVA M.V, ITTAPANA</option>
                            <option value="school">ALUTHGAM WEEDIYA MUSLIM BALIKA M.V, DHARGA TOWN </option>
                            <option value="school">AL HUMAISARA CENTRAL COLLEGE, CHINA FORT BERUWALA</option>  <!--251 Amindi  -->

                            <option value="school">ZAHIRA MAHA VIDYALAYA DHARGA TOWN </option>
                            <option value="school">NALEEM HAJIAR LADIES COLLEGE CHINA FORT BERUWALA </option>
                            <option value="school">ZAM REFAI HAJIAR MAHA VIDYALAYA MALIGAHENA BERUWALA</option>
                            <option value="school">KALUTARA MUSLIM M.M.V. NO.51, MOSQUE ROAD, KALUTARA SOUTH </option>
                            <option value="school">KALUTARA MUSLIM BALIKA M.V. MOOR STREET, KALUTARA</option>
                            <option value="school">AL HAMBRA MAHA VIDYALAYA DHARGA TOWN</option>
                            <option value="school">AL FAHRIYA CENTRAL COLLEGE THOTAWATHA PANADURA </option>
                            <option value="school">JEELAN CENTRAL COLLEGE HENAMULLA PANADUARA</option>
                            <option value="school">WELIPENNA RAHMANIYA M.V. WELIPENNA </option>
                            <option value="school">E.W. ADIKARAM M.V. MATUGAMA</option>
                            <option value="school">IDAMEGAMA M.M.V. WERELLAGAMA.</option>
                            <option value="school">GALAGEDARA M.M.V. GALAGEDARA</option>
                            <option value="school">SUJATHA BALIKA.M.M.V. - GALAGEDARA GALAGEDARA </option>
                            <option value="school">HATHARALIYADDA M. M. V. HATHARALIYADDA </option>
                            <option value="school">POOJAPITIYA M.M.V. POOJAPITIYA </option>
                            <option value="school">ANKUMBURA PARAKRAMA M. M. V. ANKUMBURA </option>
                            <option value="school">AMBATENNA PUSHPADANA M.V. AMBATENNA </option>
                            <option value="school">ALAWATHUGODA M.M.V ALAWATHUGODA </option>
                            <option value="school">NALANDA M.M.V. MARATHUGODA</option>
                            <option value="school">DHARMAVIJAYA M.V. GOHAGODA, KATUGASTOTA. </option>
                            <option value="school">KANDY ANANDA M.M.V. GONIGODA, MEDAWALA, HARISPATHTHUA. </option>
                            <option value="school">HALLOLUWA M.V. HALLOLUWA.</option>
                            <option value="school">RAJASINGHE C C RAJASINGHE C C PANWILA</option>
                            <option value="school">PARANAGAMA C.C. JAMBUGAHAPITIYA</option>
                            <option value="school">WATTEGAMA B.M.V WATTEGAMA</option>
                            <option value="school">WATTEGAMA M.M.V. WATTEGAMA</option>
                            <option value="school">YATIRAWANA M.V. WATTEGAMA </option>
                            <option value="school">PATHADUMBARA M.V. WALALA, MENIKHINNNA </option>
                            <option value="school">UDADUMBARA SECONDARY SCHOOL UDADUMBARA</option>
                            <option value="school">PILHATHA MAHA VIDYALAYA MAHAYAYA HASALAKA </option>
                            <option value="school">BANDARANAYAKA SECONDARY SCHOOL UDAWELA BARAWARDHANAOYA</option>
                            <option value="school">SANGHABODHI CENTRAL COLLAGE MORAYAYA, MINIPE </option>
                            <option value="school">RANASINGHE PREMADASA NATIONAL SCHOOL HASALAKA </option>
                            <option value="school">GAMINI DISSANAYAKA MODEL SCHOOL PALLEWATHTHA HASALAKA </option>
                            <option value="school">KOLONGODA CENTRAL COLLEGE KOLONGODA </option>
                            <option value="school">AMUPITIYA N.S. UDISPATHTHUWA </option>
                            <option value="school">UDISPATTUWA SECONDARY SCHOOL, UDISPATTUWA</option>
                            <option value="school">GAMIMA BANDARANAYAKE MAHA VIDYALAYA ,TELDENIYA</option>
                            <option value="school">DUNHINNA SECONDARY SCHOOL,DUNHINNA WERAPITIYA</option>
                            <option value="school">MEDAMAHANUWARA SECONDRY SCHOOL,MEDAMAHANUWARA</option>
                            <option value="school">KARALLIYADDA JUNIOR SCHOOL,KARALLIYADDA TELDENIYA</option>
                            <option value="school">A.RATHNAYAKE M.M.V.,WALALA, MENIKHINNA</option>
                            <option value="school">S.W.R.D.BANDARANAYAKE N.S., WARAPITIYA, KUNDASALE</option>
                            <option value="school">KENGALLA.M.V., KENGALLA</option>
                            <option value="school">PILAWALA M.V., PILAWALA</option>
                            <option value="school">MENIKHINNA M.V, MENIKHINNA</option>
                            <option value="school">SIRIMALWATTE M.V., GUNNEPANA</option>
                            <option value="school">HUREEKADUWA B.M.V. , MANIKHINNA</option>
                            <option value="school">RAJAWELLA K.V., RAJAWELLA</option>
                            <option value="school">RAJAWELLA HINDU N.C., RAJAWELLA, DIGANA</option>
                            <option value="school">AL-HIKMA MUS. M.V., KUMBUKKANDURA, RAJAWELLA</option>
                            <option value="school">JAMIUL AZHAR MUS C.C, UDATHALAWINNA MADIGE, UDATHALAWINNA</option>
                            <option value="school">ABIRAMI T.M.V., KALLEBOKKA, MADULKELLE</option>
                            <option value="school">AL-MANAR MUS.M.V. - GALHINNA, GALHINNA</option>
                            <option value="school">AKURANA ZAHIRA MUS.M.M.V., BULUGAHATHENNA, AKURANA</option>
                            <option value="school">KURUNDUGAHA-ELA MUS. V., AKURANA</option>
                            <option value="school">AKURANA MUSLIM BALIKA M.V., AKURANA</option>
                            <option value="school">HEWAHETA CENTRAL COLLEGE, THALATUOYA</option>
                            <option value="school">BOPITIYA RAJASINGHE N.S., POTHGODA, MARASSANA</option>
                            <option value="school">KARAGASKADA CENTRAL COLLAGE, DELTOTA</option>
                            <option value="school">MAILAPITIYA MAHA VIDYALAYA, MAILAPITIYA</option>
                            <option value="school">MARASSANA N.S., MERUPPA, MARASSANA</option>
                            <option value="school">HAPUTHALE MAHA VIDYALAYA, THALATHUOYA KANDY</option>
                            <option value="school">ST. ANTHANY'S COLLEGE, KANDY</option>
                            <option value="school">BERREWARTS COLLEGE, AMPITIYA, KANDY</option>
                            <option value="school">GURUDENIYA MAHA VIDYALAYA, GURUDENIYA</option>
                            <option value="school">D.S.SENANAYAKE MAHA VIDYALAYA, KANDY</option>
                            <option value="school">SIDDHARTHA MAHA VIDYALAYA, AMPITIYA KANDY</option>
                            <option value="school">SEEVALI MAHA VIDYALAYA, PERADENIYA</option>
                            <option value="school">LUMBINI ROYAL COLLEGE, KANDY</option>
                            <option value="school">GOTHAMI GIRLS COLLEGE, RAJAPIHILLA MAWATHA KANDY</option>
                            <option value="school">SAMUDRDEVI B.V., NAWAYALATENNA, KATUGASTOTA.</option>
                            <option value="school">HEMAMALI BALIKA VIDYALAYA, KANHILL STREET, KANDYDY</option>
                            <option value="school">PERADENIYA CENTRAL COLLEGE, PERADENIYA</option>
                            <option value="school">MAHANAMA MAHA VIDYALAYA, KANDY</option>
                            <option value="school">SRI RAHULA KOLLEGE, KATUGASTOTA</option>
                            <option value="school">DHARMAWICKRAMA GIRLS' COLLAGE, KANDY</option>
                            <option value="school">SEETHADEVI BALIKA VIDYALAYA, KANDY</option>
                            <option value="school">MENIKDIWELA CENTRAL COLLEGE, MANIKDEWELA</option>
                            <option value="school">KADUGANNAWA N.S, KADUGANNAWA</option>
                            <option value="school">SRI SWARNAJOTHI NATINAL SCHOOL, KIRIBATHIKUBURA</option>
                            <option value="school">DANTHURE M.V., DANTHURE</option>
                            <option value="school">PILIMATHALAWA MADYA MAHA VIDYALAYA, PILIMATHALAWA</option>
                            <option value="school">PALAWA M.V., MURUTHALAWA</option>
                            <option value="school">ERIYAGAMA SRI PUSHPADANA MODEL S., PERADANIYA</option>
                            <option value="school">D.B.WIJETHUNGA N.S, MURUTHAGAHAMULA</option>
                            <option value="school">UDAALUDENIYA M.V., WELIGALLA</option>
                            <option value="school">SRI PRAGNARATHANA M.V., GELIOYA</option>
                            <option value="school">GONADIKA SIHALA TAMIL V., BAMBARAGAHAELA</option>
                            <option value="school">WICKRAMABAHU MADYA VIDYALAYA, GAMPOLA</option>
                            <option value="school">WIMALADHARMA N.S. - ATABAGE, ATABAGE GAMPOLA</option>
                            <option value="school">JINARAJA BOYS' COLLAGE, SINHAPITIYA, GAMPOLA</option>
                            <option value="school">DOLUWA MAHA VIDYALAYA, DOLUWA GAMPOLA</option>
                            <option value="school">JINARAJA BALIKA MAHA VIDYALAYA, WEEGULAWATHTHA ROAD GAMPOLA</option>
                            <option value="school">GANGASIRIPURA VIDYALAYA, MALABAR STREET, GAMPOLA</option>
                            <option value="school">BAUDDA VIDYALAYA, HILL STREET GAMPOLA</option>
                            <option value="school">SENADHIKARI N.S. - UDAHENTHENNA, UDAHENTHENNA</option>
                            <option value="school">ULAPANE MAHA VIDYALAYA, ULAPANE, GAMPOLA</option>
                            <option value="school">ANURUDDA KUMARA MMV, NAWALAPITIYA</option>
                            <option value="school">ST.ANDREW'S BALIKA MAHA VIDYALAYA, NAWALAPITIYA</option>
                            <option value="school">BADI-DU-DIN MAHMUD GIRLS' COLLEGE, D.S.SENANAYAKA VEEDIYA, KANDY</option>
                            <option value="school">SIDDILEBBE MUSLIM VIDYALAYA, PERADENIYA ROAD, PERADENIYA ROAD, KANDY</option>
                            <option value="school">ENASALGOLLA CENTRAL COLLEGE, ENASALGOLLA DELTOTA</option>
                            <option value="school">SRI RAMAKRISHNA CENTRAL COLLEGE, GALAHA</option>
                            <option value="school">ZAHIRA BOYS COLLEGE, MATALE ROAD KATUGASTOTA</option>
                            <option value="school">MALAIMAHAL HINDHU CENTRAL COLLEGE-DELTOTA, DELTOTA</option>
                            <option value="school">DELTOTA MUSLIM CENTRAL COLLEGE ,DELTOTA</option>
                            <option value="school">KATHIRESAN CENTRAL COLLEGE ,KOTMALE ROAD, NAWALAPITIYA</option>
                            <option value="school">SARASWATHY CENTRAL COLLEGE ,PUSSELLEAWA</option>
                            <option value="school">ST MARYS COLLEGE ,NAWALAPITIYA</option>
                            <option value="school">PUSSELLAWA HINDU N.S. ,NUWARAELIYA ROAD, PUSSELLAWA</option>
                            <option value="school">KATHIRESAN HINDU LADIES' COLLEGE ,KOTMALE ROAD, NAWALAPITIYA.</option>
                            <option value="school">DEHIANGA AL-AZHAR M.V. ,DEHIANGA , MURUTHALAWA</option>
                            <option value="school">AL MANAR N.S. ,HANDESSA</option>
                            <option value="school">WELAMBODA MU.M.V. ,WELAMBODA</option>
                            <option value="school">KALUGAMUWA CENTRAL COLLEGE ,KALUGAMUWA GELIOYA</option>
                            <option value="school">GAMPOLA HINDU COLLEGE ,GAMPOLA</option>
                            <option value="school">RANABIMA ROYAL COLLEGE ,PERADENIYA</option>
                            <option value="school">KANDY MODEL S. ,PALLETHALAWINNA PALLETHALAWINNA KATUGASTHOTA</option>
                            <option value="school">KURUNDUWATTA ROYAL COLLEGE ,KURUNDUWATTA BAZAAR KURUNDUWATTA</option>
                            <option value="school">D.S.SENANAYAKA MAHA VIDYALAYA ,ERAULA JUNCTION, DAMBULLA</option>
                            <option value="school">THITHTHAWELGOLLA JUNIOR SCHOOL ,KAPUWATTA, DAMBULLA</option>
                            <option value="school">WEERA MOHAN JAYAMAHA M.V. ,DAMBULUGAMA, DAMBULLA</option>
                            <option value="school">MEDABEDDA M V ,MEDABEDDA WASALAKOTTE</option>
                            <option value="school">AKURAMBODA JUNIOR SCHOOL ,AKURAMBODA</option>
                            <option value="school">THOLAMBUGOLLA MAHA VIDYALAYA ,THOLAMBUGOLLA, GALEWELA</option>
                            <option value="school">SRI NAGA NATIONAL SCHOOL ,NAULA</option>
                            <option value="school">NALANDA MAHA VIDYALAYA ,NALANDA</option>
                            <option value="school">NAMINIOYA M.M.V. ,WILGAMUWA</option>
                            <option value="school">MARAKA M.V. ,MARAKA</option>
                            <option value="school">NUGAGOLLA M.V. ,NUGAGOLLA</option>
                            <option value="school">PUSSELLA NAVODYA SCHOOL ,PUSSELLA, GAMMADUWA</option>
                            <option value="school">BUDDDHAGOSHA MAHA VIDYALAYA ,PALAPATHWALA MATALE</option>
                            <option value="school">VIJAYA NATIONAL SCHOOL ,MATALE</option>
                            <option value="school">MADAWALA ULPOTHA SECONDARY SCHOOL ,MADAWALA ULPOTHA MATALE</option>
                            <option value="school">VIJAYAPALA MAHA VIDYALAYA ,RICHARD PAMUNUWA MAWATHA, MATALE</option>
                            <option value="school">WEERAPARAKRAMA SECONDARY SCHOOL ,YATAWATTA , MATALE</option>
                            <option value="school">CHRIST CHURCH COLLEGE ,MATALE</option>
                            <option value="school">KAIKAWALA CENTRAL COLLEGE ,KAIKAWALA</option>
                            <option value="school">BANDARAPOLA M.V. ,KIULA, MATALE</option>
                            <option value="school">SRI PARACKRAMA MAHA VIDYALAYA ,RATTOTA, MATALE</option>
                            <option value="school">MAHINDA RAJAPAKSHA NAVODYA MAHA VIDYALAYA ,KURIWELA UKUWELA</option>
                            <option value="school">THENNA MAHA VDYALAYA ,MATALE</option>
                            <option value="school">ZAHIRA COLLAGE ,MATALE</option>
                            <option value="school">AMINA N.S. ,MOLANDAPITIYA RD, MATALE</option>
                            <option value="school">PAKKIYAM NATIONAL COLLAGE ,DHRAMAPALA MAWATHA, MATALE</option>
                            <option value="school">AJMEER NATIONAL SCHOOL ,ELKADUWA, UKUWELA</option>
                            <option value="school">ALFURKHAN MU.M.V. ,GALEWELA</option>
                            <option value="school">RATTOTA HINDU MAHA VIDYALYAM ,RATTOTA</option>
                            <option value="school">HINDU NATIONAL SCHOOL -MATALE ,MATALE</option>
                            <option value="school">MINHAJ MAHA VIDIYALAYA -YATAWATTA ,NIKAGOLLA, YATAWATTA</option>
                            <option value="school">ANNOOR MUSLIM M.V. ,KANDY ROAD , WARAKAMBURA</option>
                            <option value="school">KURIWELA HAMEEDIYA COLLEGE ,UKUWELA</option>
                            <option value="school">WEERA KEPPETIPOLA NATIONAL SCHOOL ,AKURAMBODA</option>
                            <option value="school">SIRIMAVO BANDARANAIKE MODEL SCHOOL ,KANDY ROAD MATALE</option>
                            <option value="school">GAMINI CENTRAL COLLEGE ,NUWARA ELIYA</option>
                            <option value="school">SUMANA SECONDARY SCHOOL ,THALAWALELLE</option>
                            <option value="school">GOOD SHEPHERD B.M.V. ,PARK ROAD NUWARA ELIYA</option>
                            <option value="school">SRI SENANANDA M.V. ,MEEPILIMANA NUWARAELIYA</option>
                            <option value="school">ST.COOMBS M.V. ,TALAWAKELLE</option>
                            <option value="school">GIRLS'HIGH SCHOOL ,NUWARA ELIYA</option>
                            <option value="school">SRIPADA M.M.V. ,HATTON</option>
                            <option value="school">ST GABRIEL'S GIRLS' COLLEGE,HATTON</option>
                            <option value="school">KALUGALA M.V. ,PITAWALA, NAWALAPITIYA</option>
                            <option value="school">AMBAGAMUWA M.M.V.,AMBAGAMUWA, UDUBULATHGAMA</option>
                            <option value="school">HEDUNUWEWA CENTRAL COLLAGE,HEDUNUWEWA, HATTON</option>
                            <option value="school">HARANGALA SECONDARY SCHOOL,HARANGALAGAMA, NAWALAPITIYA</option>
                            <option value="school">JAYAHELA NATIONAL SCHOOL,PUNDALUOYA</option>
                            <option value="school">GAMINI DISSANAYAKE N.S.,NEW TOWN, KOTHMALE</option>
                            <option value="school">DELTA GEMUNUPURA M.V.,PUSSELLAWA</option>
                            <option value="school">SIRISAMAN M.V.,GORAKAOYA, NAWALAPITIYA</option>
                            <option value="school">NAYAPANA M.V.,NAYAPANA JANAPADHAYA, GAMPOLA</option>
                            <option value="school">ROJASANGAMA M.V.,ROJASANGAMA NAWALAPITIYA</option>
                            <option value="school">SRI BUDDHARAJA M.V.,NAWATHISPANE, NAWALAPITIYA</option>
                            <option value="school">SRI SUMANGALA N C,NILDANDAHINNA</option>
                            <option value="school">BATAGOLLA PUSSADEWA SECONDARY SCHOOL,WALAPANE</option>
                            <option value="school">T.B.M.HERATH SECONDARY SCHOOL,RAGALA HALGRANOYA</option>
                            <option value="school">RUPAHA MAAHA VIDYALAYA,RUPAHA</option>
                            <option value="school">MADULLA MAHA VIDYALAYA,MADULLA</option>
                            <option value="school">HIGHLANDS C,HATTION</option>
                            <option value="school">TALAWAKELLE T.M.V,TALAWAKELLE</option>
                            <option value="school">ST.JOHN BOSCO'S C,HATTON</option>
                            <option value="school">SARASWATHY T.M.V.,LINDULA</option>
                            <option value="school">HOLBROOK T.M.V.,AGARAPATANA</option>
                            <option value="school">AGARAPATANA T.M.V,AGARAPATANA</option>
                            <option value="school">KOTAGALA T.M.V,KOTAGALA</option>
                            <option value="school">PANMURE T.M.V.,HATTON</option>
                            <option value="school">WATAGODA T.M.V.,WATAGODA</option>
                            <option value="school">DIMBULA T.M.V,PATANA</option>
                            <option value="school">ST.CLAIR T.M.V.,TALAWAKELLE</option>
                            <option value="school">SHANNON T.M.V.,HATTON</option>
                            <option value="school">WATAWALA T.M.V.,WATAWALA</option>
                            <option value="school">PATANA T.V,KOTAGALA</option>
                            <option value="school">BARATHY MAHA VIDYALAYA,TALAWAKELLE</option>
                            <option value="school">STJOSEPHS COLLEGE,ST.JOSEPHS COLLEGE MASKELIYA</option>
                            <option value="school">ST.MARYS C.C,BOGAWANTALAWA</option>
                            <option value="school">HOLYROSARY MAHA VIDYALAYAM,BOGAWANTALAWA</option>
                            <option value="school">KADAWALA VICKNESHWARA C,WATAWALA</option>
                            <option value="school">NORWOOD T.M.V,NORWOOD</option>
                            <option value="school">NALLATHANNEER T.M.V,MASKELIYA</option>
                            <option value="school">ST JOHN DELERY T.V,NORWOOD</option>
                            <option value="school">HORNSEY C (PULLIYAWATE T.M.V.),DICKOYA</option>
                            <option value="school">INGESTRE T.V,DICKOYA</option>
                            <option value="school">DICKOYA T.M.V.,DICKOYA</option>
                            <option value="school">LUCCUMBE T.M.V.,MASKELIYA</option>
                            <option value="school">TIENTSIN T.V,BOGAWANTALWA</option>
                            <option value="school">BLOOMFIELD T.M.V,MASKELIYA</option>
                            <option value="school">CARFAX C,HATTON</option>
                            <option value="school">CAMPION T M.V.,BOGAWANTHALAWA</option>
                            <option value="school">GOURAVILA T.M.V.,UPCOT</option>
                            <option value="school">ANNFIELD T.M.V,DICKOYA</option>
                            <option value="school">TILLYRIE T.V.,DICKOYA</option>
                            <option value="school">RAGALA TAMIL SCHOOL,HALGRANOYA</option>
                            <option value="school">ST LENADS TAMIL SCHOOL,ST LENAD ESTATE</option>
                            <option value="school">TULLOES TAMIL MAHA VIDYALAYA,UDAPUSSALLAWA</option>
                            <option value="school">MAHAUWA TAMIL SCHOOL,WALAPANE</option>
                            <option value="school">RILAMULLA TAMIL M.V.,KANDAPOLA</option>
                            <option value="school">AL-MINHAJ N.S.,HAPUGASTHALAWA, NAWALAPITIYA</option>
                            <option value="school">PUNDULOYA T.M.V.,PUNDULOYA</option>
                            <option value="school">RAMBODA HINDU V.,RAMBODA</option>
                            <option value="school">KATABOOLA TAMIL MAHA VIDYALAYA,KATABOOLA</option>
                            <option value="school">ST.XAVIER'S COLLEGE,NUWARA ELIYA</option>
                            <option value="school">HOLY TRINITY C.C,HAWA ELIYA NUWARA ELIYA</option>
                            <option value="school">METHODIST COLLEGE,KANDAPOLA</option>
                            <option value="school">MARIA T.M.V,LINDULA</option>
                            <option value="school">GREAT WESTERN T.V,TALAWALELLE</option>
                            <option value="school">VICTIRIA NATIONAL SCHOOL,RAJAMAWATHA ADIKARIGAMA</option>
                            <option value="school">PALLEBOWALA SECONDARY SCHOOL,PALLEBOWALA</option>
                            <option value="school">SIRIMAVO BANDARANAYAKE GIRLS'COLLEGE,HANGUNRANKETHA</option>
                            <option value="school">VIDYAKARA MAHA VIDYALAYA,PORAMADULLA RIKILLAGASKADA</option>
                            <option value="school">DENIKE SECONDARY SCHOOL,DENIKE RIKILLAGASKADA</option>
                            <option value="school">PADIYAPELELLA SECONDARY SCHOOL,PADIYAPELELLA</option>
                            <option value="school">MATHURATA MAHA VIDYALAYA,MATHURATA</option>
                            <option value="school">IREBY T.V,NORWOOD</option>
                            <option value="school">NAWALAR COLLEGE,NANUOYA</option>
                            <option value="school">KUILWATTE T.M.V,ROZELLA</option>
                            <option value="school">RIKILLAGASKADA MODEL SCHOOL,RIKILLAGASKADA</option>
                            <option value="school">CAMBRIDGE COLLEGE,KOTAGALA</option>
                            <option value="school">HEGALLA MAHA VIDYALAYA,HEGALLA KOSGODA</option>
                            <option value="school">RAJAPAKSHA MAHA VIDYALAYA,AHUNGALLA</option>
                            <option value="school">SRIPATHI M.V.,WATHUGEDARA</option>
                            <option value="school">BATAPOLA M.M.V.,BATAPOLA</option>
                            <option value="school">AMPEGAMA SRI NANDASARA M.V.,AMPEGAMA</option>
                            <option value="school">YATAGALA M.V.,YATAGALA, URAGASMANHANDIYA</option>
                            <option value="school">MADAKUMBURA MAHA VIDYALAYA,MADAKUMBURA, KARANDENIYA</option>
                            <option value="school">ETHKANDURA SEEWALEE M.V.,ETHKANDURA</option>
                            <option value="school">GAMINI M.M.V,BENTHOTA</option>
                            <option value="school">ELAKAKA M.V.,ELAKAKA HABURUGALA</option>
                            <option value="school">GONAGALA M.V.,GONAGALAPURA BENTHOTA</option>
                            <option value="school">MIRISWATHTHA M.V.,MIRISWATHTHA BENTHOTA</option>
                            <option value="school">AWITHTHAWA NALANDA M.V.,GANEGODA</option>
                            <option value="school">AMUGODA M.V.,AMUGODA</option>
                            <option value="school">KAHADUWA M.V.,KAHADUWA</option>
                            <option value="school">INDIPALGODA M.V.,PITIGALA</option>
                            <option value="school">ST.THERESA B.M.V.,ELPITIYA</option>
                            <option value="school">GANEGODA M.V.,GANEGODA</option>
                            <option value="school">HINIDUMA MALLIKA M.V.,HINIDUMA, GALLE</option>
                            <option value="school">OPATHA M.V.,OPATHA, GALLE</option>
                            <option value="school">NAGODA ROYAL NATIONAL SCHOOL,NAGODA</option>
                            <option value="school">PODDIWALA M.V.,PODDIWALA, MATHTHAKA</option>
                            <option value="school">MAPALAGAMA SIRISUNANDA M.V.,ETHUMALE</option>
                            <option value="school">SRI RATHNASARA MAHA VIDYALAYA,SANDARAWALA, BADDEGAMA</option>
                            <option value="school">ST. ANTHONY"S COLLEGE,BADDEGAMA</option>
                            <option value="school">UDUGAMA MAHA VIDYALAYA,UDUGAMA</option>
                            <option value="school">POLPAGODA MAHA VIDYALAYA,YAKKALAMULLA</option>
                            <option value="school">MAGEDARA SECONDARY SCHOOL,MAGEDARA, GALLE</option>
                            <option value="school">THELLAMBURA DUTUGEMUNU M.V.,TELLAMBURA, NAKIYADENIYA</option>
                            <option value="school">SRI SUMANGALA M.M.V.,NALAGASDENIYA, HIKKADUWA</option>
                            <option value="school">MADAMPA MADYA MAHA VIDYALAYA,KULEEGODA</option>
                            <option value="school">WERAGODA VIJAYABA SECONDARY SCHOOL,MEEETIYAGODA</option>
                            <option value="school">SACRED HEART CONVENT,KALUWELLA GALLE</option>
                            <option value="school">OLCOTT MAHA VIDYALAYA,WELIWATTA, GALLE</option>
                            <option value="school">SUDHARMA VIDYALAYA,MAGALLE GALLE</option>
                            <option value="school">ALLSAINT VIDDYALAYA,FORT GALLE</option>
                            <option value="school">UPANANDAVIDYALAYA,MANAWILA WALAHANDUWA</option>
                            <option value="school">MEEPAWALA AMARASURIYA COLLEGE,MEEPAWALA, PODDALA</option>
                            <option value="school">BATADUWA SRI RATHANAJOTHI M.V.,BATADUWA, GALLE</option>
                            <option value="school">KALAHE SRI SUMANGALODAYA SECONDARY SCHOOL,KALAHE, WANCHAWALA, GALLE</option>
                            <option value="school">PILANA VIDYARTHODAYA MAHA VIDYALAYA,PILANA, WANCHAWALA</option>
                            <option value="school">DR.RICHARD PATHIRANA COLLEGE,ULUVITIKE, GALLE</option>
                            <option value="school">HAPUGALA MAHA VIDYALAYA,WAKWELLA GALLE</option>
                            <option value="school">AKMEEMANA MAHAVIDYALAYA,AKMEEMANA</option>
                            <option value="school">IHALAGODA SUMANGALA MODEL SCHOOL,IHALAGODA, AKMEEMANA</option>
                            <option value="school">BUONAVISTA COLLAGE,UNAWATUNA GALLE</option>
                            <option value="school">KATUKURUNDA DHARMIKA MAHA VIDYALAYA,KATUKURUNDA HABARADUWA</option>
                            <option value="school">ANGULUGAHA MAHA VIDYALAYA,ANGULUGAHA</option>
                            <option value="school">WELLETHOTA SUGATHANANDA M.V.,WELLETHOTA-TALPE</option>
                            <option value="school">KATHALUWA CENTRAL COLLEGE,KATHALUWA, AHANGAMA</option>
                            <option value="school">AHANGAMA SHARIPUTHRA COLLEGE,AHANGAMA</option>
                            <option value="school">ROHANA MAHA VIDYALAYA,AHANGAMA</option>
                            <option value="school">ZAHIRA COLLAGE (N.S.) - GINTOTA,KURUDWATTA, GINTOTA</option>
                            <option value="school">MALHARSULHIYA CENTRAL COLLEGE,H.K.EDMOND MAWATHA, GALLE</option>
                            <option value="school">MUSLIM LADIES COLLEGE,KONG TREE RD GALLE</option>
                            <option value="school">USWATHUNHASANA M.V.,KATUGODA, GALLE</option>
                            <option value="school">JANADIPATHI BALIKA VIDYALAYA,WLAHANDUWA, GALLE</option>
                            <option value="school">PITABEDDARA M.V.,PITABEDDARA</option>
                            <option value="school">DEHIGASPA DUDLY SENANAYAKA M.V.,DEHIGASPA PITABADDARA</option>
                            <option value="school">SIYAMBALAGODA EAST M.V.,SIYAMBALAGODA EAST PITABEDDARA</option>
                            <option value="school">DERANGALA M.V.,III STEP, KIRIWELKALE, PITABEDDARA</option>
                            <option value="school">ALAPALADENIYA M.V.,NELUWA ROAD ALAPALADENIYA</option>
                            <option value="school">KOTAPOLA N.S.,KOTAPOLA</option>
                            <option value="school">WARALLA M.D.YAPA M.V.,DENIYAYA ROAD,WARALLA</option>
                            <option value="school">URUBOKKA NATIONAL SCHOOL,URUBOKKA</option>
                            <option value="school">BERALAPANATHARA M.V.,BERALAPANATHARA</option>
                            <option value="school">BENGAMUWA SECONDARY SCHOOL,BENGAMUWA</option>
                            <option value="school">DENIYAYA RAJAPAKSHA M.V.,MAIN STREET, DENIYAYA</option>
                            <option value="school">DENIYAYA ST.MATTEW'S B.M.V.,RATHNAPURA RD DENIYAYA</option>
                            <option value="school">PALLEGAMA SECONDARY SCHOOL,KOLAWENIGAMA,DENIYAYA</option>
                            <option value="school">GODAPITIYA NATIONAL SCHOOL,AKURESSA</option>
                            <option value="school">AKURESSA M.V.,AMALAGODA AKURESSA</option>
                            <option value="school">PORAMBA VIDYALAYA,PORAMBA AKURESSA</option>
                            <option value="school">MARABA MAHA VIDYALAYA,MARABA AKURESSA</option>
                            <option value="school">GODAPITIYA K.V,THIBBOTUWAWA AKURESSA</option>
                            <option value="school">WILPITA M.V.,WILPITA AKURESSA</option>
                            <option value="school">KAMBURUPITIYA MAHA VIDYALAYA,KAMBURUPITIYA</option>
                            <option value="school">OWITIGAMUWA MAHA NVIDYALAYA,KARAPUTUGALA</option>
                            <option value="school">SIRI PANNALANKARA VIDYALAYA,MAPALANA KAMBURUPITIYA</option>
                            <option value="school">THIHAGODA M.M.V.,THIHAGODA</option>
                            <option value="school">KITHALAGAMA EAST K.V.,THIHAGODA</option>
                            <option value="school">YATIYANA M.V.,YATIYANA,MATARA</option>
                            <option value="school">PUHULWELLA MADYA MAHA VIDYALAYA,KIRINDA PUHULWELLA</option>
                            <option value="school">METHODIST.M.M.V.,METHODIST HAKMANA</option>
                            <option value="school">METHODIST.M.M.V.,METHODIST HAKMANA</option>
                            <option value="school">KONGALA M.M.V.,HAKMANA</option>
                            <option value="school">NARAWELPITA SOUTH CENTREL COLLEGE,NARAWELPITA,HAKMANA.</option>
                            <option value="school">MAKANDURA M.M.V.,MAKANDURA</option>
                            <option value="school">RANSEGODA NORTH K.V.,MAKANDURA</option>
                            <option value="school">KORAMBURUWANA MAHA VIDYALAYA,RANSEGODA</option>
                            <option value="school">SRIMATH ANAGARIKA DHARMAPALA M.V.,GOMILA MAWARALA</option>
                            <option value="school">ROTUMBA VIJAYABA MAHA VIDYALAYA,ROTUMBA MATARA</option>
                            <option value="school">PASGODA M.V.,PASGODA</option>
                            <option value="school">DENIPITIYA M M VIDYALAYA,DENEPITIYA</option>
                            <option value="school">ARAFA CENTRAL COLLEGE,GALBOKKA, WELIGAMA</option>
                            <option value="school">ARAFA CENTRAL COLLEGE,GALBOKKA, WELIGAMA</option>
                            <option value="school">KAMBURUGAMUWA MAHA VIDYALAYA,KAMBURUGAMUWA MATARA</option>
                            <option value="school">MIRISSA M.M.VIDYALAYA,UDUPILA MIRISSA</option>
                            <option value="school">MALIMBADA SRI SUMEDA M.V.,MALIMBADA,PALATUWA</option>
                            <option value="school">PALATUWA GUNARATHANA MADYA MAHA VIDYALAYA,PALATUWA MATARA</option>
                            <option value="school">PAMBURANA SHARIPUTHRA M.V.,PAMBURANA, MATARA</option>
                            <option value="school">MAHANAMA MAHA VIDYALAYA,WALGAMA, MATARA</option>
                            <option value="school">NADUGALA MAHA VIDYALAYA,NADUGALA</option>
                            <option value="school">DEEYAGAHA WEST M.V.,NAWIMANA,MATARA</option>
                            <option value="school">MAHAMAYA BALIKA MAHA VIDYALAYA,BEACH ROAD KOTUWEGODA MATARA</option>
                            <option value="school">KOTUWA JANADHIPATHI VIDYALAYA,KOTUWA MATARA</option>
                            <option value="school">THALPAVILA M.M.V.,DEVINUWARA</option>
                            <option value="school">KOKAWALA CENTRAL COLLEGE,KOKAWALA KEKANADURA</option>
                            <option value="school">DEVINUWARA CENTRAL COLLEGE,DEVINUWARA</option>
                            <option value="school">GANDARA MAHA VIDUHALA,GANDARA</option>
                            <option value="school">SARANAPALA K.V,DEVINUWARA</option>
                            <option value="school">GODAUDA M.V.,GODAUDA,KOTTAGODA</option>
                            <option value="school">THALALLA SOUTH M.V.,THALLALLA KOTTAGODA</option>
                            <option value="school">THALALLA NORTH DHARMAWIJAYA M.V.,KEKANADURA</option>
                            <option value="school">RADAMPOLA SRI SUMANGALA CENTRAL COLLEGE,RADAMPOLA URUGAMUWA</option>
                            <option value="school">KUMARATHUNGE MUNIDASA M.V.,BELIATTA ROAD DICKWELLA</option>
                            <option value="school">MINHATH N.S. - DICKWELLA,SANDIS ROAD, DICKWELLA</option>
                            <option value="school">KATUWANA NATIONAL SCHOOL,KATUWANA</option>
                            <option value="school">HOREWELA MAHA VIDIYALAYA,HOREWELA WALASMULLA</option>
                            <option value="school">KIRAMA DAMMANANDA M.V.,KIRAMA</option>
                            <option value="school">WALGAMMULLA M.V.,WALGAMMULLA. KIRAMA</option>
                            <option value="school">MEEGASARA MAHA VIDYALAYA,JULAMPITIYA</option>
                            <option value="school">MIDDENIYA MAHA VIDYALAYA,MIDDENIYA</option>
                            <option value="school">D.A.RAJAPAKSHA M.V.,MEDAMULANA</option>
                            <option value="school">TANGALLE BOYS NATIONAL SCHOOL,TANGALLE </option>607
                            <option value="school">NETOLPITIYA GEMUNU MAHA VIDYALAYA,NETOLPITIYA TANGALLE</option>
                            <option value="school">POLOMMARUWA MODEL SCHOOL,TANGALLE</option>
                            <option value="school">MAMADALA MAHA VIDYALAYA,MAMADALA AMBALANTOTA</option>
                            <option value="school">AMBALANTOTA MAHA VIDYALAYA,MALPETTAWA, AMBALANTOTA</option>
                            <option value="school">DHARMAPALA M.V.,WETIYA, BARAWAKUMBUKA.</option>
                            <option value="school">GATAMANNA VIJAYA MAHA VIDYALAYA,GATAMANNA</option>
                            <option value="school">NAKULUGAMUWA GAMINI M.V.,NAKULUGAMUWA.</option>
                            <option value="school">PUWAKDANDAWA DHAMMAPALA BALIKA VIDYALAYA,PUWAKDANDAWA,BELIATTA</option>
                            <option value="school">H KANUMULDENIYA NAVODYA SCHOOL,WALASMULLA</option>
                            <option value="school">SRI DEWANANDA MAHA VIDYALAYA,YODAKANDIYA, THISSAMAHARAMA</option>
                            <option value="school">MAHASENPURA M.V.,MAHASENPURA, THISSAMAHARAMA</option>
                            <option value="school">THISSAMAHARAMA MAHA VIDYALAYA,THISSAMAHARAMA</option>
                            <option value="school">BOLANA MADYA MAHA VIDYALAYA,BOLANA, RUHUNU RIDIYAGAMA, AMBALANTOTA</option>
                            <option value="school">WIHARAGALA M.V.,WIHARAGALA, SOORIYAWEWA</option>
                            <option value="school">NAMADAGASWEWA M.V.,NAMADAGASWEWA, SOORIYAWEWA</option>
                            <option value="school">WEERIYAGAMA M.V.,WEERIYAGAMA, SOORIYAWEWA</option>
                            <option value="school">TZU-CHI NATIONAL SCHOOL,SIRIBOPURA, HAMBANTOTA</option>
                            <option value="school">SRI LANKA SINGAPORE FRIENSHIP COLLAGE,KONDAGALA, WEERAKATIYA</option>
                            <option value="school">VELANAI CENTRAL COLLEGE,VELANAI WEST, VELANAI</option>
                            <option value="school">VADDU HINDU COLLEGE,SITHTHANKERNY</option>
                            <option value="school">VICTORIA COLLEGE,MAIN STREET, CHULIPURAM</option>
                            <option value="school">ARALY SARASWATHY MAHA VIDYALAYAM,ARALY SOUTH VADDUKODDAI</option>
                            <option value="school">CHANKANAI SIVAPRAGASA MV,VALLAI ROAD ROAD, CHANKANAI</option>
                            <option value="school">PANNAGAM MEIHANDAN M.V.,CHULIPURAM</option>
                            <option value="school">VADDU CENTRAL COLLEGE,VADDU SOUTH WEST VADDUKODDAI</option>
                            <option value="school">ILAVALAI CONVENT M.V.,ILAVALAI CONVENT M.V, ILAVALAI</option>
                            <option value="school">ST.HENRYS COLLEGE,ILAVALAI</option>
                            <option value="school">MAHAJANACOLLEGE,AMPANAI TELLIPALAI</option>
                            <option value="school">UNION COLLEGE,TELLIPPALAI</option>
                            <option value="school">ARUNODAYA COLLEGE,ALAVEDDY WEST, ALAVEDDY</option>
                            <option value="school">MALLAKAM MAHA VIDYALAYAM,MALLAKAM CENTRAL MALLAKAM</option>
                            <option value="school">MATHAKAL STJOSEPH MAHA VIDYALAYAM,MAIN STREET, MATHAGAL</option>
                            <option value="school">MANIPAY HINDU COLLEGE (NATIONAL SCHOOL),SANGARAPILLAI ROAD, MANIPAY</option>
                            <option value="school">RAMANATHAN COLLEGE - MARUTHANARMADAM,K.K.S ROAD, MARUTHANARMADAM, CHUNNAKAM</option>
                            <option value="school">SKANDAVAROTHAYA COLLEGE - KANDARODAI,KANDARODAI, CHUNNAKAM</option>
                            <option value="school">MANIPAY LADIES COLLEGE,YARL ROAD, MANIPAY</option>
                            <option value="school">ERLALAI MAHA VIDYALAYAM,ERLALAI CENTRE ERLALAI</option>
                            <option value="school">MANIPAY MEMORIAL ENGLISH SCHOOL,MANIPAY</option>
                            <option value="school">INUVIL HINDU COLLEGE,INUVIL , CHUNNAKAM</option>
                            <option value="school">INUVIL CENTRAL COLLEGE,K.K.S. ROAD INUVIL CUNNAKAM</option>
                            <option value="school">SANDILIPAY HINDU COLLEGE,SANDILIPAY CENTER, SANDILIPAY</option>
                            <option value="school">ANAICODDAI R.C.T.M,UYARAPULAM, ANAICODDAI</option>
                            <option value="school">ERALALAI SRIMURUGAN VIDYALAYAM,ERALALAI SOUTH, ERALALAI</option>
                            <option value="school">VAYAVILAN CENTRAL COLLEGE,MAVAYAVILANRAKA</option>
                            <option value="school">ATCHUVELY CENTRAL COLLEGE,ATCHUVELY, JAFFNA</option>
                            <option value="school">ATTIAR HINU COLLEGE,POINT PEDRO ROAD NEERVELY</option>
                            <option value="school">IDAIKKADU MAHA VIDYALAYAM,IDAIKKADU ATCHUVELY</option>
                            <option value="school">KOPAY CHRISTION COLLEGE,KOPAY CENTER KOPAY</option>
                            <option value="school">SRI SOMASKANDA COLLEGE PUTTUR,PUTTUR</option>
                            <option value="school">URUMPIRAI HINDU COLLEGE,PALALY ROAD, URUMPIRAI</option>
                            <option value="school">ST.THERESA'S GIRLS' COLLEGE ATCHUVELY,CHANKANAI ROAD ATCHUVELY</option>
                            <option value="school">AVARANGAL NADARAJA RAMALINGA VIDYALAYAM,PUTTUR</option>
                            <option value="school">URUMPIRAI SAIVA TAMIL VIDYALAYAM,URUMPIRAI NORTH URUMPIRAI</option>
                            <option value="school">NELLIADY CENTRAL COLLEGE,KARAVEDDY</option>
                            <option value="school">UDUPPIDDY GIRLS COLLEGE,VALVETTITHURAI</option>
                            <option value="school">UDUPPIDDY AMERICAN MISSION COLLEGE,VALVETTITHURAI</option>
                            <option value="school">VIGNESWARA COLLEGE,KARAVEDDY</option>
                            <option value="school">THEVARAIYALI HINDU COLLEGE - KARAVEDDY,KARAVEDDY</option>
                            <option value="school">THUMPALAI SIVAPRAGASA MAHA VIDYALAYAM,THUMPALAI POINTPEDRO</option>
                            <option value="school">VADAMARADCHY HINDU GIRLS COLLEGE,POINTPEDRO</option>
                            <option value="school">HARTLEY COLLEGE,POINTPEDRO</option>
                            <option value="school">METHODIST GIRLS' HIGH SCHOOL,POINTPEDRO</option>
                            <option value="school">DRIEBERG COLLEGE,A9 ROAD, CHAVAKACHCHERI</option>
                            <option value="school">CHAVAKACHCHERI HINDU COLLEGE,KANDY ROAD, CHAVAKACHCHERI</option>
                            <option value="school">MEESALAI VEERASINGAM CENTRAL COLLEGE,MEESALAI</option>
                            <option value="school">VARANI CENTRAL COLLEGE,KARAMPAIKURICHCHI, VARANI</option>
                            <option value="school">KODIKAMAM THIRUNAVUKKARASU CENTRAL COLLEGE,KACHAI ROAD, KODIKAMAM</option>
                            <option value="school">CANAGARATNAM MADYA MAHA VIDYALAYAM,NAVALAR ROAD, ARIYALAI, JAFFNA</option>
                            <option value="school">MUTHUTHAMBY MAHA VIDYALAYAM,KALASALAI ROAD THIRUNELVELY</option>
                            <option value="school">KONDAVIL HINDU COLLEGE,STATION ROAD KONDAVIL WEST KONDAVIL</option>
                            <option value="school">KONDAVIL RAMAKRISHNA MAHA VIDYALAYAM,KONDAVIL EAST KONDAVIL</option>
                            <option value="school">PERIYAPULAM M.V,K.K.S.ROAD JAFFNA</option>
                            <option value="school">COLUMBUTHURAI HINDU MAHA VIDYALAYAM,COLUMBUTHURAI ROAD JAFFNA</option>
                            <option value="school">JAFFNA CENTRAL COLLEGE,JAFFNA</option>
                            <option value="school">HOLY FAMILY CONVENT,VEMBADY ROAD, JAFFNA</option>
                            <option value="school">ST.CHARLES'MAHA VIDYALAYAM,MAINSTREET, JAFFNA</option>
                            <option value="school">ST JAMES MAHA VDYALAYAM,GURUNAGAR JAFFNA</option>
                            <option value="school">VAIDYESHWARA COLLEGE,SIVAN NORTH STREET, JAFFNA</option>
                            <option value="school">NAVANTHURAI R.C VIDYALAYAM,NAVALAR ROAD NAVANTHURAI JAFFNA</option>
                            <option value="school">ST JAMES GIRLS SCHOOL,MAIN STREET JAFFNA</option>
                            <option value="school">VADAMARADCHY CENTRAL LADIES' COLLEGE,VATHIRY, KARAVEDDY</option>
                            <option value="school">KILINOCHCHI MADHYA MAHA VIDYALAYAM,A9 ROAD, ANANTHAPURAM, KILINOCHCHI</option>
                            <option value="school">KILINOCHCHI HINDU COLLEGE,07,JEYANTHINAGAR KILINOCHCHI</option>
                            <option value="school">MARVADDAKKACHCHI CENTRAL COLLEGEAKA,VADDAKKACHCHI, KILINOCHCHI</option>
                            <option value="school">RAMANATHAPURAM M.V.,RAMANATHAPURAM KILINOCHCHI</option>
                            <option value="school">AKKARAYAN MAHA VIDYALAYAM,AKKARAYANKULAM KILINOCHCHI</option>
                            <option value="school">KANAGAPURAM M.V.,KANAGAPURAM KILINOCHCHI</option>
                            <option value="school">MULANKAVIL MAHA VIDYALAYAM,VINAYAKAPURAM POONAKARY</option>
                            <option value="school">KILINOCHCHI MAHA VIDYALAYAM,WILSON ROAD KILINOCHCHI</option>
                            <option value="school">RAMANATHAPURAM EAST G.T.M.SCHOOL,RAMANATHAPURAM KILINOCHCHI</option>
                            <option value="school">MURUGANTHA COLLEGE,MURASUMODAI, PARANTHAN</option>
                            <option value="school">PALLAI CENTRAL COLLEGE,A-09 ROAD, PALLAI</option>
                            <option value="school">THARUMAPURAM CENTRAL COLLEGE,THARUMAPURAM PARANTHAN</option>
                            <option value="school">BARATHY VIDYALAYAM,BARATHY PURAM, KILINOCHCHI</option>
                            <option value="school">PIRAMANTHANARU MAHA VIDYALAYAM,PIRAMANTHANARU THARUMAPURAM PARANTHAN</option>
                            <option value="school">POONAGARY SRI VIGNESWARA VIDYALAYAM,4TH MAIL POST POONAGARY</option>
                            <option value="school">VIVEKANANTHA VIDYALAYAM,AMBALKULAM KILINOCHCHI</option>
                            <option value="school">SITHIVINAYAGAR HINDU COLLEGE,UPPUKULAM MANNAR</option>
                            <option value="school">ST.XAVIERS BOYS COLLEGE,SINNAKADAI MANNAR</option>
                            <option value="school">ST.XAVIER'S GIRLS' COLLEGE,SINNAKADAI, MANNAR</option>
                            <option value="school">FATIMA MADHYA MAHA VIDYALAYAM,PESALAI</option>
                            <option value="school">ST.JOSEPH'S MAHAVIDYALAYAM. THALVUPADHU,THALVUPADHU MANNAR</option>                            
                            <option value="school">ST.LUCIA'S M.V.,PALLIMUNAI, MANNAR</option>
                            <option value="school">AL-AZHAR M.V.,MOORSTREET, MANNAR</option>
                            <option value="school">MUSALI NATIONAL SCHOOL,MUSALI, CHILAWATHUARI</option>
                            <option value="school">ANDANKULAM RCTMS,ANDANKULAM</option>
                            <option value="school">PUT/RISHAD BATHIUDEEN .M.V.,AL-QASSIMI CITY, PALAVI</option>
                            <option value="school">MULLAITIVU MAHA VIDYALAYAM,KARACHCHIKKUDIRUPPU MULLAITIVU</option>
                            <option value="school">PUTHUKKUDIYIRUPPU CENTRAL COLLEGE,WARD NO-01, PUTHUKKUDIYIRUPPU, MULLAITIVU</option>
                            <option value="school">VIDYANANDA COLLEGE,MULLIYAWALAI</option>
                            <option value="school">PUTHUKKUDIYIRUPPU R C V,PUTHUKKUDIYIRUPPU MULLAITIVU</option>
                            <option value="school">ALAMPIL ROMAN CATHOLIC MAHA VIDYALAYAM,ALAMPIL MULLAITIVU</option>
                            <option value="school">KALAIMAHAL VIDYALAYAM,WORD NO.1, MULLIYAWALAI</option>
                            <option value="school">UDAIYARKADDU MAHAVIDYALAYAM,UDIYARKADDU</option>
                            <option value="school">MARVALLIPUNAM MAHAVIDYALYAMAKA,VALLIPURAM PUTHUKKUDIYIRUPPU MULLAITIVU</option>
                            <option value="school">BHARATHY MAHA VIDYALAYAM,VALLUVARPURAM, VISUVAMADU</option>
                            <option value="school">MANKULAM MAHA VIDYALAYAM,A-9 ROAD, MANKULAM</option>                            
                            <option value="school">MALLAVI CENTRAL COLLEGE,YOGAPURAM</option>
                            <option value="school">PANDARAVANNIYAN M.V.,ODDUSUDDAN</option>
                            <option value="school">RAMBAIKULAM GIRLS MAHA VIDYALAYAM,RAMBAIKULAM VAVUNIYA</option>
                            <option value="school">OMANTHAI CENTRAL COLLEGE,A9 ROAD OMANTHAI</option>
                            <option value="school">VAVUNIYA MUSLIM MAHA VIDYALAYAM,MANNAR ROAD PADDANICHOOR VAVUNIYA</option>
                            <option value="school">VAVUNIYA HINDU COLLEGE,KOVILPUTHUKULAM VAVUNIYA</option>
                            <option value="school">NELUKKULAM KALAIMAKAL MAHA VIDYALAYAM,NELUKKULAM VAVUNIYA</option>
                            <option value="school">VIPULANANTHA COLLEGE,PANDARIKULAM, VAVUNIYA</option>
                            <option value="school">PUTHUKKULAM M.V.,SASTHIRIKOOLANKULAM, VAVUNIYA</option>
                            <option value="school">CHURCH CEYLON TAMIL MIXED SCHOOL,KUDDIYIRUPPU VAVUNIYA</option>
                            <option value="school">SAIVAPRAGASA LADIES COLLEGE,VAVUNIYA</option>
                            <option value="school">POONTHODDAM MAHA VIDYALAYAM,POONTHODDAM VAVUNIYA</option>
                            <option value="school">KANAKARAYANKULAM MAHA VIDYALAYAM,KANAKARAYANKULAM VAVUNIYA</option>
                            <option value="school">CHEDDIKULAM MAHA VIDYALAYAM,CHEDDIKULAM</option>
                            <option value="school">MADUKANDA MAHA VIDIYALAYA,MADUKANDA VAVUNIYA</option>                            
                            <option value="school">ALAGALLA VIDYALAYA,ALAGALLA VAVUNIYA</option>
                            <option value="school">PARAKUM M.V.,IRATPERIYAKULAMA, VAVUNIYA</option>
                            <option value="school">SUNTHARAPURAM SARASWATHY VIDYALAYAM,SAASDTHRIKOOLANKULAM VAVUNIYA</option>
                            <option value="school">KATHIRAVELY VIGNESVARA MAHA VIDYALAYAM,TRINCO ROAD, KATHIRAVELY</option>
                            <option value="school">VAKARAI MAHA VIDYALAYAM,VAKARAI</option>
                            <option value="school">MEERAVODAI-AL-HIDAYA MAHA VIDYALAYAM,MEERAVODAI</option>
                            <option value="school">VALAICHEANAI AN-NOOR MAHA VIDYALAYAM,MAIN CROSS ROAD, VALACHEANAI-5</option>
                            <option value="school">KARUWAKERNY VIGNESWARA VID,KARUWAKERNY, VALAICHENAI</option>
                            <option value="school">VALAIHENAI HINDU COLLEGE,VALAICHENAI</option>
                            <option value="school">KK/PETHALAI VIPULANANDA COLLEGE,PETHALAI, VALAICHENAI</option>
                            <option value="school">KIRAN CENTRAL COLLEGE,KIRAN</option>
                            <option value="school">KORAKALLIMADU SRI RAMANAMAHARISHI VIDYALAYAM,KORAKALLIMADU KIRAN</option>
                            <option value="school">SANTHIVELY SITHI VINAYAGAR VIDYALAYAM,SANTHIVELY, MURAKODANCHENAI</option>
                            <option value="school">MURAKOTTANCHENAI RAMA KRISHNA MISSION VIDYAL,MAIN ROAD, MURAKOTTANCHENAI.</option>
                            <option value="school">VANTHARUMOOLAI VISNU MAHA VID,VANTHARUMOOLAI</option>                            
                            <option value="school">KALUWANKERNY VIVEGANANDAH VID,KALUWANKERNY - 01</option>
                            <option value="school">KK/CHENKALADY CENTRAL COLLEGE,CHENKALADY</option>
                            <option value="school">ERAVUR VIPULANANDA VIDYALAYAM,ERAVUR 5, CHENKALADY</option>
                            <option value="school">BW/KARADIYANARU MAHA VIDYALAYAM,KARADIYANARU</option>
                            <option value="school">MAHILAVADDAWAN MAHA VIDYALAYAM,AYITHIYAMALAI</option>
                            <option value="school">ALIGHAR CENTRAL COLLEGE,MAIN STREET, ERAVUR</option>
                            <option value="school">MACAN MARKAR MAHA VIDYALAYA,MEERAKERNY ROAD, ERAVUR</option>
                            <option value="school">ARAFA VIDYALAYAM,ERAVUR</option>
                            <option value="school">AL-AZHAR GIRLS HIGH SCHOOL,KATTUPALLI ROAD, ERAVUR</option>
                            <option value="school">ERAVUR RAHMANIYA MAHA VIDYALAYA,LADIES MARKET RAOD, ERAVUR-02A</option>
                            <option value="school">IYANKERNY TAMIL VIDYALAYAM,IYANKERNY CHENKALADY</option>
                            <option value="school">BT / ST. Joseph's College,THANNAMUNAI BATTICALOA</option>
                            <option value="school">MAHAJANA COLLEGE,ARASADY BATTICALOA</option>
                            <option value="school">VINCENT GIRLS' HIGH SCHOOL,CHAPEL STREET, BATTICALOA</option>
                            <option value="school">METHODIST CENTRAL COLLEGE,AMEN CORNER ROAD BATTICALOA</option>                            
                            <option value="school">ST.CECILIA'S GIRLS' COLLEGE,2ND CROSS ROAD, BATTICALOA</option>
                            <option value="school">PUTHUR VIGNESWARA VIDYALAYAM,PUTHUNAKAR BATTICALOA</option>
                            <option value="school">VIVEKANADA LADIES'COLLEGE,KALLADY UPPODAI, BATTICALOA</option>
                            <option value="school">SHIVANANDA VIDYALAYA (NATIONAL SCHOOL),KALLADY UPPODAI, BATTICALOA</option>
                            <option value="school">AN-NASSAR VIDYALAYA,MAIN STREET, KATTANKUDY 01</option>
                            <option value="school">AL-AMEEN MAHA VIDYALAYAM,KATTANKUDY</option>
                            <option value="school">AL-HIRA MAHA VIDYALAYA,OLD ROAD, KATTANKUDY 05</option>
                            <option value="school">MEERA BALIKA MAHA VIDYALAYAM,MAIN STREET, KATTANKUDY</option>
                            <option value="school">PUTHUKUDIYIRUPPU KANNAKI MAHA VIDYALAYAM,ARAYAMPATHY</option>
                            <option value="school">NAVATKADU NAMAHAL VIDYALAYAM,NAVATKADU</option>
                            <option value="school">KIRANKULAM VINAYAGAR MAHA VIDYALAYAM,KIRANKULAM 30159</option>
                            <option value="school">AMPILANTHURAI KALAIMAGAL MAHA VIDYALAYAM,AMPILANTHURAI</option>
                            <option value="school">THETTATIVU MAHA VIDYALAYAM,THETTATIVU</option>
                            <option value="school">KALUTHAVALAI MAHA VIDYALAYAM,KALUTHAVALAI, PADDIRIPPU</option>
                            <option value="school">PADDIRUPPU MADHYA MAHA VIDYALAYAM,KALUWANCHIKUDY - 30200</option>                            
                            <option value="school">ERUVIL KANNAKI MAHA VIDYALAYAM,ERUVIL, KALUWANCHIKUDY</option>
                            <option value="school">KURUMANVELY SIVASAKTHI MAHA VIDYALAYAM,KURUMANVELY-11, KALUWANCHIKUDY</option>
                            <option value="school">MAHILOOR SARASWATHY MAHA VIDYALAYAM,MAHILOOR, KALUWANCHIKUDY</option>
                            <option value="school">ONTHACHIMADAM SRIVINAYAGAR MAHA VIDYALAYAM,KALUWANCHIKUDY</option>
                            <option value="school">KODDAIKALLAR MAHA VIDYALAYAM,MAIN ROAD, KODDAIKALLAR</option>
                            <option value="school">THURAINEELAVANAI MAHA VIDYALAYAM,THURAINEELAVANAI-6</option>
                            <option value="school">VELLAVELY KALAIMAHAL M.V,VELLAVELY</option>
                            <option value="school">MANDUR MAHA VIDYALAYAM,MANDUR</option>
                            <option value="school">MANDUR 14 SHAKTHY MAHA VIDYALAYAM,KANESAPURAM MANDUR</option>
                            <option value="school">KOVILPORATHIVU VIVEKANANDA MAHA VIDYALAYAM,KOVILPORATHIVU, PERIYAPORATHIVU</option>
                            <option value="school">PALUGAMAM KANDUMANI MAHA VIDYALAYAM,THIRUPPALUGAMAM</option>
                            <option value="school">MAHILADIDITHIVU SARASWATHY MAHAVIDYALAYAM,MAHILADITHIVU KOKKADDICHOLAI</option>
                            <option value="school">BW/ARASADITHIVU VIGNESWARA MAHA VIDYALAYAM,ARASADITHIVU, KOKKADDICHOLAI</option>
                            <option value="school">KOKKADDICHCHOLAI R.K.M VID,KOKKADICHCHOLAI</option>
                            <option value="school">ODDAMAVADY FATHIMA BALIKA MAHA VIDYALAYA,MPCS ROAD, ODDAMAVADY 02</option>                            
                            <option value="school">CHENKALADY VIVEGANANDAH VID,CHENKALADY</option>
                            <option value="school">AYISHA MAHALIR MAHA VIDYALAYA,VALAICHENAI</option>
                            <option value="school">KEPPETIPOLA SECONDARY SCHOOL,MAHAOYA</option>
                            <option value="school">PADIYATHALAWA NATIONAL SCHOOL,PADIYATHALAWA</option>
                            <option value="school">WERENKETAGODA MAHA VIDYALAYA,WERENKETAGODA</option>
                            <option value="school">UHANA MAHA VIDYALAYA,UHANA</option>
                            <option value="school">SADDHATHISSA MAHA VIDYALAYA,AMPARA</option>
                            <option value="school">KAWANTHISSA MAHA VIDYALAYA,AMPARA</option>
                            <option value="school">MARAGAMINI MAHA VIDYALAYAKA,AMPARA</option>
                            <option value="school">NAMALTHALAWA MAHA VIDYALAYA,NAMALOYA, AMPARA</option>
                            <option value="school">POLWATHTHA MAHA VIDYALAYA,MAPOLWAGA JANAPADAYARAKA</option>
                            <option value="school">BANDARANAYAKA BALIKA MAHA VIDYALAYA,AMPARA</option>
                            <option value="school">HEGODA SRI INDRASARA VIDYALAYA,MIHINDUPURA, AMPARA</option>
                            <option value="school">PANAMA MAHA VIDYALAYA,PANAMA</option>
                            <option value="school">SANDUNPURA V.,DEHIATTAKANDIYA</option>                            
                            <option value="school">SIRIPURA CENTRAL COLLEGE,SIRIPURA, POLONNARUWA</option>
                            <option value="school">NUWARAGALA M.V.,NUWARAGALA, POLONNARUWA</option>
                            <option value="school">AS-SIRAJ MAHA VIDYALAYA,CHALAMBAIKERNY</option>
                            <option value="school">NAVITHANVELI ANNAMALAI MAHA VIDYALAYAM,NAVITHANVELI</option>
                            <option value="school">AL-MARJAN MUSLIM LADIES COLLEGE,AMPARA ROAD, SAMMANTHURAI</option>
                            <option value="school">VIPULANANDA MAHA VIDYALAYAM,MAIN STREET, MALWATTAI-01</option>
                            <option value="school">RANAMADU HINDU COLLAGE (RANAMADU HINDU M.V.),CENTRAL CAMP 05</option>
                            <option value="school">AL-MUNEER VIDSYALAYA,SAMMANTHURAI</option>
                            <option value="school">DHARUSSALAM MAHA VIDYALAYA,MALKAMPITTY ROAD, SAMMANTHURAI</option>
                            <option value="school">VEERATHIDAL AL HIDAYA MAHA VIDYALAYAM,CHAWALAKKADE, KALMUNAI</option>
                            <option value="school">SENNEL ZAHIRA MAHA VIDYALA,SENNEL GIRAMAM 01, SAMMANTHURAI</option>
                            <option value="school">AL-ARSATH MAHA VIDYALAYAM,MALAYADI GIRAMAM-03, SAMMANTHURAI</option>
                            <option value="school">SAMMANTHURAI AL AZHAR VIDYALAYAM,KAIKADYADI SAMMANTHURAI</option>
                            <option value="school">WESLEY HIGH SCHOOL,MAIN STREET, KALMUNAI</option>
                            <option value="school">AL MANAR CENTRAL COLLEGE,MAIN STEERT MARUTHAMUNAI</option>                            
                            <option value="school">NATPIDDIMUNAI AL-AKSHA MADHYA MAHA VIDYALAYA,NATPIDDIMUNAI, KALMUNAI</option>
                            <option value="school">RAMA KRISHNA MAHA VIDYALAYAM,RKM ROAD KALMUNAI</option>
                            <option value="school">PERIYANEELAVANAI VISHNU MAHA VIDAYALAYA,MAIN STREET, PERIYANEELAVANAI-02</option>
                            <option value="school">PULAVARMANI SHARIFUDEEN MAHA VIDYALAYA,PERIYANEELAVANAI, MARUTHAMUNAI</option>
                            <option value="school">AL-HAMBRA VIDYALAYA, MARUTHAMUNAI,AL-HAMBRA ROAD, MARUTHAMUNAI</option> 

                            </select>
                    </div>
                </div>     

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputPrincipalName">Principal Name :</label>
                        <input type="text" name="principalname" class="form-control" id="principalname" placeholder="Principal Name" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputPrincipalEmail">Principal Email :</label>
                        <input type="email" name="principalemail" class="form-control" id="principalemail" placeholder="abc@gmail.com" required>
                    </div>  
                </div>
                    <center>
                        <button type="submit" class="sumbit-next">Submit</button>
                    </center>    
                </div>
               
            </form>
        </div>
    </div>
</div>
     </div>       
       

     <!----------------------------------------------------------------------------------------->
    
     <?php
		include 'footer.php';
	?>
    <!-- End: Footer Dark -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    
</body>

</php>
