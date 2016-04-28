<?php
$description="";
$pagetitle="Car Insurance |";
include("header.php");
?>

<!-- Content starts here-->
<div class="container">
	<div class="car-content">
		<div class="car-quote">
      <div class="car-get cf">
        <h2>Get Car Insurance <span>It only takes 30 seconds</span></h2>
        <div class="car-fis-ul">
            <?php
              //$str = file_get_contents('assets/js/car-data.json');
              //$json = json_decode($str, true);

              // $temp = $json[0]['name'];
              // echo $temp;

              $url = "http://52.32.253.76:8080/webapp/api/business/getAllMakes";
              $ch = curl_init();

              // Disable SSL verification
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              // Will return the response, if false it print the response
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              // Set the url
              curl_setopt($ch, CURLOPT_URL,$url);
              // Execute
              $res = curl_exec($ch);
              // Closing
              curl_close($ch);

              $json = json_decode($res, true);

              //echo $json[1];

            ?>

 <select id="car-model" name="carmodel">
  <option value="" disabled selected>Car Model</option>
  <?php
    foreach ($json as $data) {
      echo  "<option value=". $data['make_id'] .">" . $data['name'] .  "</option>";
    }
  ?>
</select>


            <!-- <input id="typeahead1" type="text" data-provide="typeahead" class="car-mod span3" name="car-mod"
            data-items="6" placeholder="Car" data-source="[
            <?php foreach ($json as $data) {
                echo '&quot;' . $data['name'] . '&quot;,'; }
                echo "&quot; &quot;";
            ?>
            ]" value="<?php foreach ($json as $data) {
                echo $data['make_id']; }

            ?>"/> -->

           <!-- <input type="text" class="car-mod span3" name="car-mod" data-provide="typeahead" data-items="4"
           data-source="" placeholder="Car Model"> -->

          <select name="FuelType" class="sel-fuel">
             <option value="" disabled selected>Fuel Type</option>
             <option value="Petrol">Petrol</option>
             <option value="Diesel">Diesel</option>
          </select>

          <!-- <input id="typeahead2" type="text" data-provide="typeahead" class="car-mod span3" name="car-mod"
            data-items="6" placeholder="Variant"> -->

          <select name="variant" class="sel-var">
           <option value="" disabled selected>Variant</option>
          </select>

       </div>
       <div class="car-sec-ul">

           <select class="car-year" name="Manufacturing Year">
             <option value="year" disabled selected>Manufacturing Year</option>
             <option value="2016">2016</option>
             <option value="2015">2015</option>
             <option value="2015">2014</option>
             <option value="2015">2013</option>
             <option value="2015">2012</option>
             <option value="2015">2011</option>
             <option value="2016">2010</option>
             <option value="2015">2009</option>
             <option value="2015">2008</option>
             <option value="2015">2007</option>
             <option value="2015">2006</option>
             <option value="2015">2005</option>
             <option value="2016">2004</option>
             <option value="2015">2003</option>
             <option value="2015">2002</option>
             <option value="2015">2001</option>
           </select>

         <input id="typeahead3" type="text" class="car-mod span3 car-sel" name="car-mod" data-provide="typeahead" data-items="6"
         data-source="[&quot;AN-01 - Port Blair&quot;,&quot;AN-02 - Car Nicobar&quot;,&quot;AP-01 - Nirmal&quot;,&quot;AP-02 - Anantapur&quot;,
&quot;AP-03 - Tirupathi&quot;,&quot;AP-04 - Cuddapah&quot;,&quot;AP-05 - Rajahmundry&quot;,&quot;AP-06 - Kakinada&quot;,
&quot;AP-07 - Guntur&quot;,&quot;AP-08 - Guntur&quot;,&quot;AP-09 - Hyderabad&quot;,&quot;AP-10 - Secunderabad Hyderabad North&quot;,
&quot;AP-11 - Malakpet Hyderabad East&quot;,&quot;AP-12 - Kisanbagh Hyderabad South&quot;,&quot;AP-13 - Tolichowki Hyderabad West&quot;,&quot;AP-14 - Karimnagar&quot;,
&quot;AP-15 - Karimnagar&quot;,&quot;AP-16 - Vijayawada&quot;,&quot;AP-17 - Vijayawada&quot;,&quot;AP-18 - Vijayawada&quot;,
&quot;AP-19 - Vijayawada&quot;,&quot;AP-20 - Khammam&quot;,&quot;AP-21 - Kurnool&quot;,&quot;AP-22 - Mahaboobnagar&quot;,
&quot;AP-23 - Sangareddy&quot;,&quot;AP-24 - Nalgonda&quot;,&quot;AP-25 - Nizamabad&quot;,&quot;AP-26 - Nellore&quot;,
&quot;AP-27 - Ongole&quot;,&quot;AP-28 - Rangareddy&quot;,&quot;AP-29 - Rangareddy&quot;,&quot;AP-30 - Srikakulam&quot;,
&quot;AP-31 - Visakhapatnam&quot;,&quot;AP-32 - Visakhapatnam&quot;,&quot;AP-33 - Gajuwaka&quot;,&quot;AP-34 - Visakhapatnam&quot;,
&quot;AP-35 - Vizianagaram&quot;,&quot;AP-36 - Warangal&quot;,&quot;AP-37 - Eluru&quot;,&quot;AP-38 - Eluru&quot;,
&quot;AR-01 - Itanagar&quot;,&quot;AR-02 - Itanagar&quot;,&quot;AR-03 - Tawang&quot;,&quot;AR-04 - Bomdila&quot;,
&quot;AR-05 - Seppa&quot;,&quot;AR-06 - Ziro&quot;,&quot;AR-07 - Daporiji&quot;,&quot;AR-08 - Along&quot;,
&quot;AR-09 - Pasighat&quot;,&quot;AR-10 - Anini&quot;,&quot;AR-11 - Tezu&quot;,&quot;AR-12 - Changalang&quot;,
&quot;AR-13 - Khonsa&quot;,&quot;AR-14 - Yingkiong&quot;,&quot;AR-16 - Roing&quot;,&quot;AS-01 - Guwahati&quot;,
&quot;AS-02 - Nagaon&quot;,&quot;AS-03 - Jorhat&quot;,&quot;AS-04 - Sibsagar&quot;,&quot;AS-05 - Golaghat&quot;,
&quot;AS-06 - Dibrugarh&quot;,&quot;AS-07 - Lakhimpur&quot;,&quot;AS-08 - North Cachar Hills&quot;,&quot;AS-09 - Karbi Anglong&quot;,
&quot;AS-10 - Karimganj&quot;,&quot;AS-11 - Cachar&quot;,&quot;AS-12 - Sonitpur&quot;,&quot;AS-13 - Darrang&quot;,
&quot;AS-14 - Nalbari&quot;,&quot;AS-15 - Barpeta&quot;,&quot;AS-16 - Kokrajhar&quot;,&quot;AS-17 - Dhubri&quot;,
&quot;AS-18 - Goalpara&quot;,&quot;AS-19 - Bongaigaon&quot;,&quot;AS-20 - Assam&quot;,&quot;AS-21 - Marigaon&quot;,
&quot;AS-22 - Dhemaji&quot;,&quot;AS-23 - Tinsukia&quot;,&quot;AS-24 - Hailakandi&quot;,&quot;AS-25 - Guwahati&quot;,
&quot;AS-26 - Chirang&quot;,&quot;AS-30 - Assam&quot;,&quot;BR-01 - Patna&quot;,&quot;BR-02 - Gaya&quot;,
&quot;BR-03 - Bhojpur&quot;,&quot;BR-04 - Chapra&quot;,&quot;BR-05 - Motihari&quot;,&quot;BR-06 - Muzaffarpur&quot;,
&quot;BR-07 - Darbhanga&quot;,&quot;BR-08 - Munger&quot;,&quot;BR-09 - Begusarai&quot;,&quot;BR-10 - Bhagalpur&quot;,
&quot;BR-11 - Purnea&quot;,&quot;BR-12 - Dumka&quot;,&quot;BR-13 - Hazaribagh&quot;,&quot;BR-14 - Ranchi&quot;,
&quot;BR-15 - Palamu&quot;,&quot;BR-16 - Jamshedpur&quot;,&quot;BR-17 - Dhanbad&quot;,&quot;BR-18 - Chaibassa&quot;,
&quot;BR-19 - Saharsa&quot;,&quot;BR-20 - Bokaro&quot;,&quot;BR-21 - Nalanda&quot;,&quot;BR-22 - Bettiah&quot;,
&quot;BR-23 - Giridih&quot;,&quot;BR-24 - Dehri&quot;,&quot;BR-25 - Jahanabad&quot;,&quot;BR-26 - Aurangabad&quot;,
&quot;BR-27 - Nawada&quot;,&quot;BR-28 - Gopalganj&quot;,&quot;BR-29 - Siwan&quot;,&quot;BR-30 - Sitamrahi&quot;,
&quot;BR-31 - Vaishali&quot;,&quot;BR-32 - Madhubani&quot;,&quot;BR-33 - Samastipur&quot;,&quot;BR-34 - Khagaria&quot;,
&quot;BR-35 - Sahebganj&quot;,&quot;BR-36 - Godda&quot;,&quot;BR-37 - Kishanganj&quot;,&quot;BR-38 - Araria&quot;,
&quot;BR-39 - Katihar&quot;,&quot;BR-40 - Deoghar&quot;,&quot;BR-41 - Gumla&quot;,&quot;BR-42 - Lohardaga&quot;,
&quot;BR-43 - Madhepura&quot;,&quot;BR-44 - Buxar&quot;,&quot;BR-45 - Bhabua&quot;,&quot;BR-46 - Jamui&quot;,
&quot;BR-47 - Koderma&quot;,&quot;BR-50 - Supaul&quot;,&quot;BR-51 - Banka&quot;,&quot;BR-52 - Lakhisarai&quot;,
&quot;BR-53 - Lakhisarai&quot;,&quot;CG-01 - Chattisgarh&quot;,&quot;CG-02 - Chattisgarh&quot;,&quot;CG-03 - Chattisgarh&quot;,
&quot;CG-04 - Raipur&quot;,&quot;CG-05 - Dhamtari&quot;,&quot;CG-06 - Mahasamund&quot;,&quot;CG-07 - Durg&quot;,
&quot;CG-08 - Rajnandgaon&quot;,&quot;CG-09 - Kawardha&quot;,&quot;CG-10 - Bilaspur&quot;,&quot;CG-11 - Janjgir-Champa&quot;,
&quot;CG-12 - Korba&quot;,&quot;CG-13 - Raigarh&quot;,&quot;CG-14 - Jashpur&quot;,&quot;CG-15 - Ambikapur&quot;,
&quot;CG-16 - Baikunthpur&quot;,&quot;CG-17 - Jagdalpur&quot;,&quot;CG-18 - Dantewada&quot;,&quot;CG-19 - Kanker&quot;,
&quot;CG-22 - Baloda Bazaar&quot;,&quot;CG-24 - Balod&quot;,&quot;CG-28 - Mungeli&quot;,&quot;CH-01 - Chandigarh&quot;,
&quot;CH-02 - Chandigarh&quot;,&quot;CH-03 - Chandigarh&quot;,&quot;CH-04 - Chandigarh&quot;,&quot;DD-02 - Diu&quot;,
&quot;DD-03 - Daman&quot;,&quot;DL-1 - Delhi North Hill Road&quot;,&quot;DL-10 - West Delhi&quot;,&quot;DL-11 - North West Delhi&quot;,
&quot;DL-12 - South West Delhi Vasant Vihar&quot;,&quot;DL-13 - East Delhi  Shahdara&quot;,&quot;DL-14 - Sonipat&quot;,&quot;DL-15 - Gurgaon&quot;,
&quot;DL-16 - Faridabad&quot;,&quot;DL-17 - Noida&quot;,&quot;DL-18 - Ghaziabad&quot;,&quot;DL-2 - New Delhi&quot;,
&quot;DL-3 - South Delhi&quot;,&quot;DL-4 - Delhi West Raja Garden&quot;,&quot;DL-5 - Delhi North Loni Road&quot;,&quot;DL-6 - Delhi Central Sarai Kale Khan&quot;,
&quot;DL-7 - Delhi East&quot;,&quot;DL-8 - North West Delhi&quot;,&quot;DL-9 - South West Delhi&quot;,&quot;DN-09 - Silvassa Dadar and Nagar Haveli&quot;,
&quot;GA-01 - North Goa&quot;,&quot;GA-02 - South Goa&quot;,&quot;GA-03 - Mapusa&quot;,&quot;GA-04 - Bicholim&quot;,
&quot;GA-05 - Ponda&quot;,&quot;GA-06 - Vasco&quot;,&quot;GA-07 - Panaji&quot;,&quot;GA-08 - Margao&quot;,
&quot;GA-09 - Mollem&quot;,&quot;GA-10 - Canacona&quot;,&quot;GA-11 - Pernem&quot;,&quot;GA-12 - Dharbandora&quot;,
&quot;GJ-1 - Ahmedabad&quot;,&quot;GJ-10 - Jamnagar&quot;,&quot;GJ-11 - Junagadh&quot;,&quot;GJ-12 - Kutch&quot;,
&quot;GJ-13 - Surendranagar&quot;,&quot;GJ-14 - Amreli&quot;,&quot;GJ-15 - Valsad&quot;,&quot;GJ-16 - Bharuch&quot;,
&quot;GJ-17 - Godhra&quot;,&quot;GJ-18 - Gandhinagar&quot;,&quot;GJ-19 - Bardoli Surat&quot;,&quot;GJ-2 - Mehsana&quot;,
&quot;GJ-20 - Dahod&quot;,&quot;GJ-21 - Navsari&quot;,&quot;GJ-22 - Narmada&quot;,&quot;GJ-23 - Anand&quot;,
&quot;GJ-24 - Patan&quot;,&quot;GJ-25 - Porbandar&quot;,&quot;GJ-26 - Vyara Tapi&quot;,&quot;GJ-27 - Ahmedabad East&quot;,
&quot;GJ-28 - Surat&quot;,&quot;GJ-29 - Vadodra&quot;,&quot;GJ-3 - Rajkot&quot;,&quot;GJ-30 - Dang&quot;,
&quot;GJ-31 - Gandhidham&quot;,&quot;GJ-32 - Botad&quot;,&quot;GJ-33 - Aravalli&quot;,&quot;GJ-34 - Dwarka&quot;,
&quot;GJ-35 - Mahisagar&quot;,&quot;GJ-36 - Morbi&quot;,&quot;Gj-37 - Chhota Udaipur&quot;,&quot;GJ-38 - Gir Somnath Veraval&quot;,
&quot;GJ-4 - Bhavnagar&quot;,&quot;GJ-5 - Surat&quot;,&quot;GJ-6 - Vadodara&quot;,&quot;GJ-7 - Kheda&quot;,
&quot;GJ-8 - Banaskantha&quot;,&quot;GJ-9 - Sabarkantha&quot;,&quot;HP-01 - Shimla&quot;,&quot;HP-02 - Shimla&quot;,
&quot;HP-03 - Shimla&quot;,&quot;HP-04 - Dharamsala&quot;,&quot;HP-05 - Mandi&quot;,&quot;HP-06 - Rampur Busha&quot;,
&quot;HP-07 - RLA Shimla&quot;,&quot;HP-08 - Chaupal&quot;,&quot;HP-09 - Theog&quot;,&quot;HP-10 - Rohru&quot;,
&quot;HP-11 - Arki&quot;,&quot;HP-12 - Nalagarh&quot;,&quot;HP-13 - Kandaghat&quot;,&quot;HP-14 - Solan&quot;,
&quot;HP-15 - Parwanoo&quot;,&quot;HP-16 - Rajgarh&quot;,&quot;HP-17 - Paonta Sahib&quot;,&quot;HP-18 - Nahan&quot;,
&quot;HP-19 - Amb&quot;,&quot;HP-20 - Una&quot;,&quot;HP-21 - Barsar&quot;,&quot;HP-22 - Hamirpur&quot;,
&quot;HP-23 - Ghumarwin&quot;,&quot;HP-24 - Bilaspur&quot;,&quot;HP-25 - Kalpa&quot;,&quot;HP-26 - Nichar&quot;,
&quot;HP-27 - RLA Pooh&quot;,&quot;HP-28 - Sarkaghat&quot;,&quot;HP-29 - Jogendranagar&quot;,
&quot;HP-30 - Karsog&quot;,&quot;HP-31 - Sundernagar&quot;,&quot;HP-32 - Gohar&quot;,&quot;HP-33 - Mandi&quot;,
&quot;HP-34 - Kullu&quot;,&quot;HP-35 - Ani&quot;,&quot;HP-36 - Dehra&quot;,&quot;HP-37 - Palampur&quot;,
&quot;HP-38 - Noorpur&quot;,&quot;HP-39 - Dharamsala&quot;,&quot;HP-40 - Kangra&quot;,&quot;HP-41 - Kaza&quot;,
&quot;HP-42 - Keylong&quot;,&quot;HP-43 - Udaipur&quot;,&quot;HP-44 - Churah&quot;,&quot;HP-45 - Pangi&quot;,
&quot;HP-46 - Bharmour&quot;,&quot;HP-47 - Dalhosie&quot;,&quot;HP-48 - Chamba&quot;,&quot;HP-49 - Banjar&quot;,
&quot;HP-50 - Shimla&quot;,&quot;HP-51 - Shimla&quot;,&quot;HP-52 - Shimla&quot;,&quot;HP-53 - Baijnath&quot;,
&quot;HP-54 - Jawali&quot;,&quot;HP-55 - Nadaun&quot;,&quot;HP-56 - Jaisinghpur&quot;,&quot;HP-57 - Chowari&quot;,
&quot;HP-58 - Manali&quot;,&quot;HP-62 - DodraKwar&quot;,&quot;HP-63 - Shimla&quot;,&quot;HP-64 - Solan&quot;,
&quot;HP-65 - Mandi&quot;,&quot;HP-66 - Kullu&quot;,&quot;HP-67 - Hamirpur&quot;,&quot;HP-68 - Kangra&quot;,
&quot;HP-69 - Bilaspur&quot;,&quot;HP-71 - Nahan&quot;,&quot;HP-72 - Una&quot;,&quot;HP-73 - Chamba&quot;,
&quot;HP-74 - Bhoranj&quot;,&quot;HP-76 - RLA Paddhar&quot;,&quot;HP-77 - Dodra Kawar&quot;,&quot;HP-78 - Bangana&quot;,
&quot;HP-79 - Sangrah Sirmaur&quot;,&quot;HP-85 - Shillai&quot;,&quot;HR-01 - Ambala&quot;,&quot;HR-02 - Jagadhri&quot;,
&quot;HR-03 - Panchkula&quot;,&quot;HR-04 - Naraingarh&quot;,&quot;HR-05 - Karnal&quot;,&quot;HR-06 - Panipat&quot;,
&quot;HR-07 - Kurukshetra&quot;,&quot;HR-08 - Kaithal&quot;,&quot;HR-09 - Gulah&quot;,&quot;HR-10 - Sonepat&quot;,
&quot;HR-11 - Gohana&quot;,&quot;HR-12 - Rohtak&quot;,&quot;HR-13 - Bhadurgarh&quot;,&quot;HR-14 - Jhajjar&quot;,
&quot;HR-15 - Meham&quot;,&quot;HR-16 - Bhiwani&quot;,&quot;HR-17 - Siwani&quot;,&quot;HR-18 - Loharu&quot;,
&quot;HR-19 - Charkhi Dadri&quot;,&quot;HR-20 - Hisar&quot;,&quot;HR-21 - Hansi&quot;,&quot;HR-22 - Fatehabad&quot;,
&quot;HR-23 - Tohana&quot;,&quot;HR-24 - Sirsa&quot;,&quot;HR-25 - Dabwali&quot;,&quot;HR-26 - Gurgaon&quot;,
&quot;HR-27 - Nuh&quot;,&quot;HR-28 - Ferozepur Zhirka&quot;,&quot;HR-29 - Ballabgarh&quot;,&quot;HR-30 - Palwal&quot;,
&quot;HR-31 - Jind&quot;,&quot;HR-32 - Narwana&quot;,&quot;HR-33 - Safidon&quot;,&quot;HR-34 - Mohindergarh&quot;,
&quot;HR-35 - Narnaul&quot;,&quot;HR-36 - Rewari&quot;,&quot;HR-37 - Ambala&quot;,&quot;HR-38 - Faridabad&quot;,
&quot;HR-39 - Hisar&quot;,&quot;HR-40 - Assandh&quot;,&quot;HR-41 - Pehowa&quot;,&quot;HR-42 - Ganaur&quot;,
&quot;HR-43 - Kosli&quot;,&quot;HR-44 - Ellanabad&quot;,&quot;HR-45 - Karnal&quot;,&quot;HR-46 - Rohtak&quot;,
&quot;HR-47 - Rewari&quot;,&quot;HR-48 - Tobhama&quot;,&quot;HR-49 - Kalka&quot;,&quot;HR-50 - Hodal&quot;,
&quot;HR-51 - Faridabad&quot;,&quot;HR-52 - Hathin&quot;,&quot;HR-53 - Adampur&quot;,&quot;HR-54 - Borara&quot;,
&quot;HR-55 - Gurgaon&quot;,&quot;HR-56 - Jind&quot;,&quot;HR-58 - Jagadhari&quot;,&quot;HR-59 - Ratia&quot;,
&quot;HR-60 - Samalkha&quot;,&quot;HR-61 - Bhiwani&quot;,&quot;HR-62 - Samalkha&quot;,&quot;HR-63 - Jhajjar&quot;,
&quot;HR-65 - Kurukshetra&quot;,&quot;HR-66 - Narnaul&quot;,&quot;HR-67 - Panipat&quot;,&quot;HR-68 - Panchkula&quot;,
&quot;HR-69 - Sonepat&quot;,&quot;HR-70 - Chandigarh&quot;,&quot;HR-71 - Bilaspur&quot;,&quot;HR-72 - Gurgaon&quot;,
&quot;HR-73 - Palwal&quot;,&quot;HR-74 - Mewat&quot;,&quot;HR-75 - Indri&quot;,&quot;HR-76 - Pataudi&quot;,
&quot;HR-77 - Beri&quot;,&quot;HR-78 - Shahabad&quot;,&quot;HR-79 - Kharkhoda&quot;,&quot;HR-80 - Barwala&quot;,
&quot;HR-81 - Bawal&quot;,&quot;HR-82 - Uklana&quot;,&quot;HR-86 - Sonipat&quot;,&quot;JH-01 - Ranchi&quot;,
&quot;JH-02 - Hazaribagh&quot;,&quot;JH-03 - Daltonganj&quot;,&quot;JH-04 - Dumka&quot;,&quot;JH-05 - Jamshedpur&quot;,
&quot;JH-06 - Chaibasa&quot;,&quot;JH-07 - Gumla&quot;,&quot;JH-08 - Lohardaga&quot;,&quot;JH-09 - Bokaro&quot;,
&quot;JH-10 - Dhanbad&quot;,&quot;JH-11 - Giridih&quot;,&quot;JH-12 - Koderma&quot;,&quot;JH-13 - Chatra&quot;,
&quot;JH-14 - Gumla&quot;,&quot;JH-15 - Deoghar&quot;,&quot;JH-16 - Pakur&quot;,&quot;JH-17 - Godda&quot;,
&quot;JH-18 - Sahibganj&quot;,&quot;JH-19 - Latehar&quot;,&quot;JH-20 - Simdega&quot;,&quot;JH-21 - Jamtara&quot;,
&quot;JH-22 - Saraikela-Kharsawan&quot;,&quot;JK-01 - Srinagar&quot;,&quot;JK-02 - Jammu&quot;,&quot;JK-03 - Anantnag&quot;,
&quot;JK-04 - Budgam&quot;,&quot;JK-05 - Baramulla&quot;,&quot;JK-06 - Doda&quot;,&quot;JK-07 - Kargil&quot;,
&quot;JK-08 - Kathua&quot;,&quot;JK-09 - Kupwara&quot;,&quot;JK-10 - Leh&quot;,&quot;JK-11 - Rajouri&quot;,
&quot;JK-12 - Poonch&quot;,&quot;JK-13 - Pulwama&quot;,&quot;JK-14 - Udhampur&quot;,&quot;JK-15 - Bandipora&quot;,
&quot;JK-16 - Ganderbal&quot;,&quot;JK-17 - Kishtawar&quot;,&quot;JK-18 - Kulgam&quot;,&quot;JK-19 - Ramban&quot;,
&quot;JK-20 - Reasi&quot;,&quot;JK-21 - Samba&quot;,&quot;JK-22 - Shopian&quot;,&quot;KA-01 - Bangalore Kormangala&quot;,
&quot;KA-02 - Bangalore Rajajinagar&quot;,&quot;KA-03 - Bangalore Indiranagar&quot;,&quot;KA-04 - Bangalore Yashwanthpur&quot;,&quot;KA-05 - Bangalore Jayanagar&quot;,
&quot;KA-06 - Tumkur&quot;,&quot;KA-07 - Kolar&quot;,&quot;KA-08 - Kolar Gold Fields&quot;,&quot;KA-09 - Mysore&quot;,
&quot;KA-10 - Bangalore Chamrajpeth&quot;,&quot;KA-11 - Mandya&quot;,&quot;KA-12 - Madikeri&quot;,&quot;KA-13 - Hassan&quot;,
&quot;KA-14 - Shimoga&quot;,&quot;KA-15 - Sagar&quot;,&quot;KA-16 - Chitradurga&quot;,&quot;KA-17 - Davangere&quot;,
&quot;KA-18 - Chickmagalur&quot;,&quot;KA-19 - Mangalore&quot;,&quot;KA-20 - Udupi&quot;,&quot;KA-21 - Puttur&quot;,
&quot;KA-22 - Belgaum&quot;,&quot;KA-23 - Chikkodi&quot;,&quot;KA-24 - Bailhongal&quot;,&quot;KA-25 - Dharwad&quot;,
&quot;KA-26 - Gadag&quot;,&quot;KA-27 - Haveri&quot;,&quot;KA-28 - Bijapur&quot;,&quot;KA-29 - Bagalkot&quot;,
&quot;KA-30 - Karwar&quot;,&quot;KA-31 - Sirsi&quot;,&quot;KA-32 - Gulbarga&quot;,&quot;KA-33 - Yadgir&quot;,
&quot;KA-34 - Bellary&quot;,&quot;KA-35 - Hospet&quot;,&quot;KA-36 - Raichur&quot;,&quot;KA-37 - Koppal&quot;,
&quot;KA-38 - Bidar&quot;,&quot;KA-39 - Bhalki&quot;,&quot;KA-40 - Chikkaballapur&quot;,&quot;KA-41 - Bangalore Kengeri&quot;,
&quot;KA-42 - Ramanagar&quot;,&quot;KA-43 - Devanahalli Bangalore&quot;,&quot;KA-44 - Tiptur&quot;,&quot;KA-45 - Hunsur&quot;,
&quot;KA-46 - Sakaleshapur&quot;,&quot;KA-47 - Honnavar&quot;,&quot;KA-48 - Jamkhandi&quot;,&quot;KA-49 - Gokak&quot;,
&quot;KA-50 - Bangalore Yalahanka&quot;,&quot;KA-51 - Bangalore Electronic City&quot;,&quot;KA-52 - Nelamangala Bangalore&quot;,&quot;KA-53 - Bangalore Krishnarajpuram&quot;,
&quot;KA-54 - Nagamangala&quot;,&quot;KA-55 - Mysore&quot;,&quot;KA-56 - Basavakalyan&quot;,&quot;KA-57 - Shantinagar Bangalore&quot;,
&quot;KA-58 - Banashankari&quot;,&quot;KA-59 - Chamrajpet Bangalore&quot;,&quot;KA-60 - RT Nagar Bangalore&quot;,&quot;KA-61 - Marathahalli Bangalore&quot;,
&quot;KA-62 - Surathkal Mangalore&quot;,&quot;KA-63 - Hubballi&quot;,&quot;KA-64 - Madhugiri&quot;,&quot;KA-65 - Dandeli&quot;,
&quot;KA-66 - Tarikere&quot;,&quot;KL-01 - Thiruvananthapuram&quot;,&quot;KL-02 - Kollam&quot;,&quot;KL-03 - Pathanamthitta&quot;,
&quot;KL-04 - Alappuzha&quot;,&quot;KL-05 - Kottayam&quot;,&quot;KL-06 - Idukki&quot;,&quot;KL-07 - Ernakulam&quot;,
&quot;KL-08 - Thrissur&quot;,&quot;KL-09 - Palakkad&quot;,&quot;KL-10 - Malappuram&quot;,&quot;KL-11 - Kozhikode&quot;,
&quot;KL-12 - Wayanad&quot;,&quot;KL-13 - Kannur&quot;,&quot;KL-14 - Kasaragod&quot;,&quot;KL-15 - Thiruvananthapuram&quot;,
&quot;KL-16 - Attingal&quot;,&quot;KL-17 - Muvattupuzha&quot;,&quot;KL-18 - Vatakara&quot;,&quot;KL-19 - Parassala&quot;,
&quot;KL-20 - Neyyattinkara&quot;,&quot;KL-21 - Nedumangad&quot;,&quot;KL-22 - Kazhakuttam&quot;,&quot;KL-23 - Karunagappally&quot;,
&quot;KL-24 - Kottarakara&quot;,&quot;KL-25 - Punalur&quot;,&quot;KL-26 - Adoor&quot;,&quot;KL-27 - Thiruvalla&quot;,
&quot;KL-28 - Mallappally&quot;,&quot;KL-29 - Kayamkulam&quot;,&quot;KL-30 - Chengannur&quot;,&quot;KL-31 - Mavelikara&quot;,
&quot;KL-32 - Cherthala&quot;,&quot;KL-33 - Changanassery&quot;,&quot;KL-34 - Kanjirappally&quot;,&quot;KL-35 - Palai&quot;,
&quot;KL-36 - Vaikom&quot;,&quot;KL-37 - Vandiperiyar&quot;,&quot;KL-38 - Thodupuzha&quot;,&quot;KL-39 - Thripunithura&quot;,
&quot;KL-40 - Perumbavoor&quot;,&quot;KL-41 - Aluva&quot;,&quot;KL-42 - North Paravur&quot;,&quot;KL-43 - Mattancherry&quot;,
&quot;KL-44 - Kothamangalam&quot;,&quot;KL-45 - Irinjalakuda&quot;,&quot;KL-46 - Guruvayur&quot;,&quot;KL-47 - Kodungalloor&quot;,
&quot;KL-48 - Wadakkancherry&quot;,&quot;KL-49 - Alathur&quot;,&quot;KL-50 - Mannarkkad&quot;,&quot;KL-51 - Ottappalam&quot;,
&quot;KL-52 - Pattambi&quot;,&quot;KL-53 - Perinthalmanna&quot;,&quot;KL-54 - Ponnani&quot;,&quot;KL-55 - Tirur&quot;,
&quot;KL-56 - Koyilandy&quot;,&quot;KL-57 - Koduvally&quot;,&quot;KL-58 - Thalassery&quot;,&quot;KL-59 - Taliparamba&quot;,
&quot;KL-60 - Kanhangad&quot;,&quot;KL-61 - Kunnathur&quot;,&quot;KL-62 - Ranni&quot;,&quot;KL-63 - Angamaly&quot;,
&quot;KL-64 - Chalakkudy&quot;,&quot;KL-65 - Thirurangadi&quot;,&quot;KL-67 - Uzhavoor&quot;,&quot;KL-68 - Devikulam&quot;,
&quot;KL-70 - Chittur&quot;,&quot;KL-71 - Nilambur&quot;,&quot;KL-72 - Mananthavady&quot;,&quot;KL-73 - Sulthan Bathery&quot;,
&quot;LD-01 - Kavaratti&quot;,&quot;LD-08 - Kalpeni&quot;,&quot;LD-09 - Minicoy&quot;,&quot;MH-01 - Mumbai Tardeo&quot;,
&quot;MH-02 - Mumbai Andheri&quot;,&quot;MH-03 - Mumbai Worli&quot;,&quot;MH-04 - Thane Mumbai&quot;,&quot;MH-05 - Kalyan Mumbai&quot;,
&quot;MH-06 - Pen&quot;,&quot;MH-07 - Sindhudurg&quot;,&quot;MH-08 - Ratnagiri&quot;,&quot;MH-09 - Kolhapur&quot;,
&quot;MH-10 - Sangli&quot;,&quot;MH-11 - Satara&quot;,&quot;MH-12 - Pune&quot;,&quot;MH-13 - Solapur&quot;,
&quot;MH-14 - Pimpri-Chinchwad&quot;,&quot;MH-15 - Nashik&quot;,&quot;MH-16 - Ahmadnagar&quot;,&quot;MH-17 - Srirampur&quot;,
&quot;MH-18 - Dhule&quot;,&quot;MH-19 - Jalgaon&quot;,&quot;MH-20 - Aurangabad&quot;,&quot;MH-21 - Jalna&quot;,
&quot;MH-22 - Parbhani&quot;,&quot;MH-23 - Beed&quot;,&quot;MH-24 - Latur&quot;,&quot;MH-25 - Osmanabad&quot;,
&quot;MH-26 - Nanded&quot;,&quot;MH-27 - Amravati&quot;,&quot;MH-28 - Buldana&quot;,&quot;MH-29 - Yavatmal&quot;,
&quot;MH-30 - Akola&quot;,&quot;MH-31 - Nagpur&quot;,&quot;MH-32 - Wardha&quot;,&quot;MH-33 - Gadchiroli&quot;,
&quot;MH-34 - Chandrapur&quot;,&quot;MH-35 - Gondia&quot;,&quot;MH-36 - Bhandara&quot;,&quot;MH-37 - Washim&quot;,
&quot;MH-38 - Hingoli&quot;,&quot;MH-39 - Nandurbar&quot;,&quot;MH-40 - Wadi Nagpur&quot;,&quot;MH-41 - Malegaon&quot;,
&quot;MH-42 - Baramati&quot;,&quot;MH-43 - Navi Mumbai&quot;,&quot;MH-44 - Ambejogai&quot;,&quot;MH-45 - Akluj&quot;,
&quot;MH-46 - Panvel Mumbai&quot;,&quot;MH-47 - Borivali Mumbai&quot;,&quot;MH-48 - Virar Vasai Mumbai&quot;,&quot;MH-49 - Nagpur Bhandara&quot;,
&quot;MH-50 - Karad Satara&quot;,&quot;ML-01 - Shillong&quot;,&quot;ML-02 - Shillong&quot;,&quot;ML-03 - Shillong&quot;,
&quot;ML-04 - Jaintia Hills&quot;,&quot;ML-05 - East Khasi Hills&quot;,&quot;ML-06 - West Khasi Hills&quot;,&quot;ML-07 - East Garo Hills&quot;,
&quot;ML-08 - West Garo Hills&quot;,&quot;ML-09 - South Garo Hills&quot;,&quot;ML-10 - Ri-Bhoi&quot;,&quot;ML-11 - Khliehriat&quot;,
&quot;ML-56 - Shillong&quot;,&quot;MN-01 - Imphal&quot;,&quot;MN-02 - Churachandpur&quot;,&quot;MN-03 - Kangpokpi&quot;,
&quot;MN-04 - Thoubal&quot;,&quot;MP-01 - M.P.&quot;,&quot;MP-02 - M.P.&quot;,&quot;MP-03 - M.P.&quot;,
&quot;MP-04 - Bhopal&quot;,&quot;MP-05 - Hoshangabad&quot;,&quot;MP-06 - Chambal&quot;,&quot;MP-07 - Gwalior&quot;,
&quot;MP-08 - Guna&quot;,&quot;MP-09 - Indore&quot;,&quot;MP-10 - Khargone&quot;,&quot;MP-11 - Dhar&quot;,
&quot;MP-12 - Khandwa&quot;,&quot;MP-13 - Ujjain&quot;,&quot;MP-14 - Mandsor&quot;,&quot;MP-15 - Sagar&quot;,
&quot;MP-16 - Chhatarpur&quot;,&quot;MP-17 - Rewa&quot;,&quot;MP-18 - Shahdol&quot;,&quot;MP-19 - Satna&quot;,
&quot;MP-20 - Jabalpur&quot;,&quot;MP-21 - Katni&quot;,&quot;MP-22 - Seoni&quot;,&quot;MP-23 - Raipur&quot;,
&quot;MP-24 - Durg&quot;,&quot;MP-25 - Jagdalpur&quot;,&quot;MP-26 - Bilaspur&quot;,&quot;MP-27 - Ambikapur&quot;,
&quot;MP-28 - Chhindwara&quot;,&quot;MP-30 - Tikamgarh&quot;,&quot;MP-31 - Sheopur&quot;,&quot;MP-32 - Datia&quot;,
&quot;MP-33 - Shivpuri&quot;,&quot;MP-34 - Vidisha&quot;,&quot;MP-35 - Panna&quot;,&quot;MP-36 - Tikamgarh&quot;,
&quot;MP-37 - Sehore&quot;,&quot;MP-38 - Raisen&quot;,&quot;MP-39 - Rajgarh&quot;,&quot;MP-40 - Badwani&quot;,
&quot;MP-41 - Dewas&quot;,&quot;MP-42 - Betul&quot;,&quot;MP-43 - Ratlam&quot;,&quot;MP-44 - Neemuch&quot;,
&quot;MP-45 - Mandla&quot;,&quot;MP-46 - Dindori&quot;,&quot;MP-47 - Sidhi&quot;,&quot;MP-48 - Betul&quot;,
&quot;MP-49 - Narsinghpur&quot;,&quot;MP-50 - Balaghat&quot;,&quot;MP-51 - Mandla&quot;,&quot;MP-52 - Dindori&quot;,
&quot;MP-53 - Sidhi&quot;,&quot;MP-54 - Umariya&quot;,&quot;MP-65 - Anuppur&quot;,&quot;MP-66 - Singrauli&quot;,
&quot;MP-67 - Ashoknagar&quot;,&quot;MP-68 - Burhanpur&quot;,&quot;MP-69 - Panna&quot;,&quot;MZ-01 - Aizawl&quot;,
&quot;MZ-02 - Lunglei&quot;,&quot;MZ-03 - Chimtuipui&quot;,&quot;MZ-04 - Champhai&quot;,&quot;MZ-05 - Kolasib&quot;,
&quot;MZ-06 - Serchhip&quot;,&quot;MZ-07 - Lawngtlai&quot;,&quot;MZ-08 - Mamit&quot;,&quot;NL-01 - Kohima&quot;,
&quot;NL-02 - Mokokchung&quot;,&quot;NL-03 - Tuensang&quot;,&quot;NL-04 - Mon&quot;,&quot;NL-05 - Wokha&quot;,
&quot;NL-06 - Zunheboto&quot;,&quot;NL-07 - Dimapur&quot;,&quot;NL-08 - Phek&quot;,&quot;OD-01 - Balasore&quot;,
&quot;OD-02 - Bhubaneswar&quot;,&quot;OD-03 - Bolangir&quot;,&quot;OD-04 - Chandikhole&quot;,&quot;OD-05 - Cuttack&quot;,
&quot;OD-06 - Dhenkanal&quot;,&quot;OD-07 - Ganjam&quot;,&quot;OD-08 - Kalahandi&quot;,&quot;OD-09 - Keonjhar&quot;,
&quot;OD-10 - Koraput&quot;,&quot;OD-11 - Mayurbhanj&quot;,&quot;OD-12 - Phulbani&quot;,&quot;OD-13 - Puri&quot;,
&quot;OD-14 - Rourkela&quot;,&quot;OD-15 - Sambalpur&quot;,&quot;OD-16 - Sundergarh&quot;,&quot;OD-17 - Baragarh&quot;,
&quot;OD-18 - Rayagada&quot;,&quot;OD-19 - Angul&quot;,&quot;OD-20 - Gajapati&quot;,&quot;OD-21 - Jagatsinghpur&quot;,
&quot;OD-22 - Bhadrak&quot;,&quot;OD-23 - Jharsuguda&quot;,&quot;OD-24 - Nabarangpur&quot;,&quot;OD-25 - Nayagarh&quot;,
&quot;OD-26 - Nuapada&quot;,&quot;OD-27 - Boudh&quot;,&quot;OD-28 - Debagarh&quot;,&quot;OD-29 - Kendarapara&quot;,
&quot;OD-30 - Malkangiri&quot;,&quot;OD-31 - Sonepur&quot;,&quot;OD-32 - Bhanjanagar&quot;,&quot;OD-33 - Bhubaneshwar&quot;,
&quot;OD-34 - Jajpur&quot;,&quot;OD-35 - Talcher&quot;,&quot;OR-01 - Balasore&quot;,&quot;OR-02 - Bhubaneswar&quot;,
&quot;OR-03 - Bolangir&quot;,&quot;OR-04 - Chandikhole&quot;,&quot;OR-05 - Cuttack&quot;,&quot;OR-06 - Dhenkanal&quot;,
&quot;OR-07 - Ganjam&quot;,&quot;OR-08 - Kalahandi&quot;,&quot;OR-09 - Keonjhar&quot;,&quot;OR-10 - Koraput&quot;,
&quot;OR-11 - Mayurbhanj&quot;,&quot;OR-12 - Phulbani&quot;,&quot;OR-13 - Puri&quot;,&quot;OR-14 - Rourkela&quot;,
&quot;OR-15 - Sambalpur&quot;,&quot;OR-16 - Sundergarh&quot;,&quot;OR-17 - Baragarh&quot;,&quot;OR-18 - Rayagada&quot;,
&quot;OR-19 - Angul&quot;,&quot;OR-20 - Gajapati&quot;,&quot;OR-21 - Jagatsinghpur&quot;,&quot;OR-22 - Bhadrak&quot;,
&quot;OR-23 - Jharsuguda&quot;,&quot;OR-24 - Nabarangpur&quot;,&quot;OR-25 - Nayagarh&quot;,&quot;OR-26 - Nuapada&quot;,
&quot;OR-27 - Boudh&quot;,&quot;OR-28 - Debagarh&quot;,&quot;OR-29 - Kendarapara&quot;,&quot;OR-30 - Malkangiri&quot;,
&quot;OR-31 - Sonepur&quot;,&quot;PB-01 - Chandigarh&quot;,&quot;PB-02 - Amritsar&quot;,&quot;PB-03 - Bathinda&quot;,
&quot;PB-04 - Faridkot&quot;,&quot;PB-05 - Ferozepur&quot;,&quot;PB-06 - Gurdaspur&quot;,&quot;PB-07 - Hoshiarpur&quot;,
&quot;PB-08 - Jalandhar&quot;,&quot;PB-09 - Kapurthala&quot;,&quot;PB-10 - Ludhiana&quot;,&quot;PB-11 - Patiala&quot;,
&quot;PB-12 - Ropar&quot;,&quot;PB-13 - Sangrur&quot;,&quot;PB-14 - Ajnala&quot;,&quot;PB-15 - Abohar&quot;,
&quot;PB-16 - Anandpur Sahib&quot;,&quot;PB-17 - Baba Bakala&quot;,&quot;PB-18 - Batala&quot;,&quot;PB-19 - Barnala&quot;,
&quot;PB-20 - Balachaur&quot;,&quot;PB-21 - Dasuya&quot;,&quot;PB-22 - Fazilka&quot;,&quot;PB-23 - Fatehgarh&quot;,
&quot;PB-24 - Garhshankar&quot;,&quot;PB-25 - Jagraon&quot;,&quot;PB-26 - Khanna&quot;,&quot;PB-27 - Kharar&quot;,
&quot;PB-28 - Malerkotla&quot;,&quot;PB-29 - Moga&quot;,&quot;PB-30 - Muktsar&quot;,&quot;PB-31 - Mansa&quot;,
&quot;PB-32 - Nawan&quot;,&quot;PB-33 - Nakodar&quot;,&quot;PB-34 - Nabha&quot;,&quot;PB-35 - Pathankot&quot;,
&quot;PB-36 - Phagwara&quot;,&quot;PB-37 - Philaur&quot;,&quot;PB-38 - Patti&quot;,&quot;PB-39 - Rajpura&quot;,
&quot;PB-40 - Rampura&quot;,&quot;PB-41 - Sultanpur&quot;,&quot;PB-42 - Samana&quot;,&quot;PB-43 - Samrala&quot;,
&quot;PB-44 - Sunam&quot;,&quot;PB-45 - Talwandi&quot;,&quot;PB-46 - Tarn Taran&quot;,&quot;PB-47 - Zira&quot;,
&quot;PB-48 - Amloh&quot;,&quot;PB-49 - Khamono&quot;,&quot;PB-50 - Budhlada&quot;,&quot;PB-51 - Jhunir Sardulgarh&quot;,
&quot;PB-52 - Bassi Pathana&quot;,&quot;PB-53 - Malout&quot;,&quot;PB-54 - Mukerian&quot;,&quot;PB-55 - Payal&quot;,
&quot;PB-56 - Raikot&quot;,&quot;PB-57 - Bhulath&quot;,&quot;PB-58 - Dera Babu Nanak&quot;,&quot;PB-59 - Dhuri&quot;,
&quot;PB-60 - Gidderbaha&quot;,&quot;PB-61 - Jalalabad&quot;,&quot;PB-62 - Jaitu&quot;,&quot;PB-63 - Khadoor&quot;,
&quot;PB-64 - Moonak&quot;,&quot;PB-65 - Mohali&quot;,&quot;PB-66 - Nihal Sing Wala&quot;,&quot;PB-67 - Shahkot&quot;,
&quot;PB-68 - Dhar&quot;,&quot;PB-69 - Bagha&quot;,&quot;PB-70 - Dera Bassi&quot;,&quot;PB-71 - Chamkaur&quot;,
&quot;PB-72 - Patran&quot;,&quot;PB-73 - Tappa Mandi&quot;,&quot;PB-74 - Nangal&quot;,&quot;PB-75 - Lehra&quot;,
&quot;PY-01 - Puducherry&quot;,&quot;PY-02 - Karaikal&quot;,&quot;PY-03 - Mahe&quot;,&quot;PY-04 - Yanam&quot;,
&quot;RJ-01 - Ajmer&quot;,&quot;RJ-02 - Alwar&quot;,&quot;RJ-03 - Banswara&quot;,&quot;RJ-04 - Barmer&quot;,
&quot;RJ-05 - Bharatpur&quot;,&quot;RJ-06 - Bhilwara&quot;,&quot;RJ-07 - Bikaner&quot;,&quot;RJ-08 - Bundi&quot;,
&quot;RJ-09 - Chittaurgarh&quot;,&quot;RJ-10 - Churu&quot;,&quot;RJ-11 - Dholpur&quot;,&quot;RJ-12 - Dhungarpur&quot;,
&quot;RJ-13 - Sri Ganganagar&quot;,&quot;RJ-14 - Jaipur&quot;,&quot;RJ-15 - Jaisalmer&quot;,&quot;RJ-16 - Jalore&quot;,
&quot;RJ-17 - Jhalawar&quot;,&quot;RJ-18 - Jhunjhunu&quot;,&quot;RJ-19 - Jodhpur&quot;,&quot;RJ-20 - Kota&quot;,
&quot;RJ-21 - Nagour&quot;,&quot;RJ-22 - Pali&quot;,&quot;RJ-23 - Sikar&quot;,&quot;RJ-24 - Sirohi&quot;,
&quot;RJ-25 - Sawaimadhopur&quot;,&quot;RJ-26 - Tonk&quot;,&quot;RJ-27 - Udaipur&quot;,&quot;RJ-28 - Baran&quot;,
&quot;RJ-29 - Dausa&quot;,&quot;RJ-30 - Rajsamad&quot;,&quot;RJ-31 - Hanumangarh&quot;,&quot;RJ-32 - Kotputli&quot;,
&quot;RJ-33 - Ramganj&quot;,&quot;RJ-34 - Karauli&quot;,&quot;RJ-35 - Pratapgarh&quot;,&quot;RJ-36 - Beawar&quot;,
&quot;RJ-37 - Didwana&quot;,&quot;RJ-38 - Rawatbhata&quot;,&quot;RJ-39 - Balotra&quot;,&quot;RJ-40 - Bhiwadi&quot;,
&quot;RJ-41 - Chomu, Jaipur&quot;,&quot;RJ-42 - Kishangarh, Ajmer&quot;,&quot;RJ-43 - Phalodi&quot;,&quot;RJ-44 - Sujangarh&quot;,
&quot;RJ-45 - Jaipur&quot;,&quot;RJ-46 - Bhinmal (Jalore)&quot;,&quot;RJ-47 - Dudu, Jaipur&quot;,&quot;RJ-48 - Kekri&quot;,
&quot;RJ-49 - Nohar&quot;,&quot;RJ-50 - Nokha&quot;,&quot;RJ-51 - Shahpura&quot;,&quot;RJ-52 - Shahpura, Jaipur&quot;,
&quot;SK-01 - Gangtok&quot;,&quot;SK-02 - Gangtok&quot;,&quot;SK-03 - Gangtok&quot;,&quot;SK-04 - Gangtok&quot;,
&quot;SK-05 - Gangtok&quot;,&quot;TN-01 - Chennai Ayanavaram&quot;,&quot;TN-02 - Chennai Annanagar&quot;,&quot;TN-03 - Chennai Tondiarpet&quot;,
&quot;TN-04 - Chennai Kolathur&quot;,&quot;TN-05 - Chennai NO&quot;,&quot;TN-06 - Chennai Mandaveli&quot;,&quot;TN-07 - Chennai Thiruvanmiyur&quot;,
&quot;TN-09 - Chennai KK Nagar&quot;,&quot;TN-10 - Chennai Virugambakkam&quot;,&quot;TN-11 - Chennai Tambaram&quot;,&quot;TN-12 - Chennai Poonamallee&quot;,
&quot;TN-13 - Chennai Ambattur&quot;,&quot;TN-14 - Chennai Sholinganallur&quot;,&quot;TN-15 - Kallakuruchi&quot;,&quot;TN-16 - Tindivanam&quot;,
&quot;TN-18 - Chennai Red Hills&quot;,&quot;TN-19 - Chengulpat&quot;,&quot;TN-20 - Tiruvallur&quot;,&quot;TN-21 - Sriperumbudur&quot;,
&quot;TN-22 - Meenambakkam Chennai&quot;,&quot;TN-23 - Vellore&quot;,&quot;TN-24 - Krishnagiri&quot;,&quot;TN-25 - Thiruvannamalai&quot;,
&quot;TN-27 - Salem&quot;,&quot;TN-28 - Namakkal&quot;,&quot;TN-29 - Dharmapuri&quot;,&quot;TN-30 - Salem Town&quot;,
&quot;TN-31 - Cuddalore&quot;,&quot;TN-32 - Villupuram&quot;,&quot;TN-33 - Erode&quot;,&quot;TN-34 - Thiruchengode&quot;,
&quot;TN-36 - Gobichettipalayam&quot;,&quot;TN-37 - Sulur Coimbatore&quot;,&quot;TN-38 - Coimbatore&quot;,&quot;TN-39 - Tiruppur&quot;,
&quot;TN-40 - Mettupalayam&quot;,&quot;TN-41 - Pollachi&quot;,&quot;TN-42 - Tirrupur S&quot;,&quot;TN-43 - Gudalur&quot;,
&quot;TN-45 - Manapparai&quot;,&quot;TN-46 - Perambalur&quot;,&quot;TN-47 - Karur&quot;,&quot;TN-48 - Sri Rangam&quot;,
&quot;TN-49 - Tanjavur&quot;,&quot;TN-50 - Tiruvarur&quot;,&quot;TN-51 - Nagapattinam&quot;,&quot;TN-52 - Mettur&quot;,
&quot;TN-54 - Salem&quot;,&quot;TN-55 - Pudukottai&quot;,&quot;TN-56 - Perundurai&quot;,&quot;TN-57 - Dindigul&quot;,
&quot;TN-58 - Madurai SO&quot;,&quot;TN-59 - Melur&quot;,&quot;TN-60 - Periyakulam&quot;,&quot;TN-61 - Ariyalur&quot;,
&quot;TN-63 - Sivagagngai&quot;,&quot;TN-64 - Madurai&quot;,&quot;TN-65 - Ramanathpura&quot;,&quot;TN-66 - Coimbatore&quot;,
&quot;TN-67 - Virudhnagar&quot;,&quot;TN-68 - Kumbakonam&quot;,&quot;TN-69 - Tuticorin&quot;,&quot;TN-70 - Hosur&quot;,
&quot;TN-72 - Tirunelveli&quot;,&quot;TN-73 - Ranipet&quot;,&quot;TN-74 - Nagercoil&quot;,&quot;TN-75 - Marthandam&quot;,
&quot;TN-76 - Tenkasi&quot;,&quot;TN-77 - Attur&quot;,&quot;TN-78 - Udumalpet&quot;,&quot;TN-79 - Sankarankoil&quot;,
&quot;TN-81 - Thiruverumbur&quot;,&quot;TN-82 - Mayiladuthurai&quot;,&quot;TN-83 - Vellore&quot;,&quot;TN-84 - Sivakasi&quot;,
&quot;TN-85 - Chennai Southwest&quot;,&quot;TN-86 - Erode West&quot;,&quot;TN-88 - Paramathivellore&quot;,&quot;TN-99 - Coimbatore City West&quot;,
&quot;TR-01 - Agartala&quot;,&quot;TR-02 - Kailshahar&quot;,&quot;TR-03 - Udaipur&quot;,&quot;TR-04 - Udaipur&quot;,
&quot;TS-01 - Adilabad&quot;,&quot;TS-02 - Karimnagar&quot;,&quot;TS-03 - Warangal&quot;,&quot;TS-04 - Khammam&quot;,
&quot;TS-05 - Nalgonda&quot;,&quot;TS-06 - Mahbubnagar&quot;,&quot;TS-07 - Attapur&quot;,&quot;TS-08 - Uppal Kalan&quot;,
&quot;TS-09 - Hyderabad Central&quot;,&quot;TS-10 - Secunderabad Hyderabad North&quot;,&quot;TS-11 - Malakpet Hyderabad East&quot;,&quot;TS-12 - Kisanbagh Hyderabad South&quot;,
&quot;TS-13 - Tolichowki Hyderabad West&quot;,&quot;TS-14 - Hyderabad&quot;,&quot;TS-15 - Medak&quot;,&quot;TS-16 - Nizamabad&quot;,
&quot;UA-01 - Almora&quot;,&quot;UA-02 - Bageshwar&quot;,&quot;UA-03 - Champawat&quot;,&quot;UA-04 - Nanital&quot;,
&quot;UA-05 - Pithoragarh&quot;,&quot;UA-06 - Udham Singh Nagar&quot;,&quot;UA-07 - Dehradun&quot;,&quot;UA-08 - Haridwar&quot;,
&quot;UA-09 - Tehri&quot;,&quot;UA-10 - Uttarkashi&quot;,&quot;UA-11 - Chamoli&quot;,&quot;UA-12 - Pauri&quot;,
&quot;UA-13 - Rudraprayag&quot;,&quot;UK-01 - Almora&quot;,&quot;UK-02 - Bageshwar&quot;,&quot;UK-03 - Champawat&quot;,
&quot;UK-04 - Nanital&quot;,&quot;UK-05 - Pithoragarh&quot;,&quot;UK-06 - Udham Singh Nagar&quot;,&quot;UK-07 - Dehradun&quot;,
&quot;UK-08 - Haridwar&quot;,&quot;UK-09 - Tehri&quot;,&quot;UK-10 - Uttarkashi&quot;,&quot;UK-11 - Chamoli&quot;,
&quot;UK-12 - Pauri&quot;,&quot;UK-13 - Rudraprayag&quot;,&quot;UK-14 - Rishikesh&quot;,&quot;UK-15 - Kotdwara&quot;,
&quot;UK-16 - Vikasnagar&quot;,&quot;UK-17 - Roorkee&quot;,&quot;UK-18 - Kashipur&quot;,&quot;UP-01 - Almora&quot;,
&quot;UP-02 - Haldwani&quot;,&quot;UP-03 - Pitharogarh&quot;,&quot;UP-04 - Udham Singh Nagar&quot;,&quot;UP-05 - Chamoli&quot;,
&quot;UP-06 - Pauri&quot;,&quot;UP-07 - Dehradun&quot;,&quot;UP-08 - Tehri&quot;,&quot;UP-09 - Uttarkashi&quot;,
&quot;UP-10 - Haridwar&quot;,&quot;UP-11 - Saharanpur&quot;,&quot;UP-12 - Muzaffarnagar&quot;,&quot;UP-13 - Bulandshahr&quot;,
&quot;UP-14 - Ghaziabad&quot;,&quot;UP-15 - Meerut&quot;,&quot;UP-16 - Noida&quot;,&quot;UP-17 - Baghpat&quot;,
&quot;UP-18 - Greater Noida&quot;,&quot;UP-19 - Shamli&quot;,&quot;UP-20 - Bijnor&quot;,&quot;UP-21 - Muradabad&quot;,
&quot;UP-22 - Rampur&quot;,&quot;UP-23 - Jyotiba Phule Nagar&quot;,&quot;UP-24 - Badaun&quot;,&quot;UP-25 - Bareilly&quot;,
&quot;UP-26 - Pilibhit&quot;,&quot;UP-27 - Shahjahanpur&quot;,&quot;UP-30 - Hardoi&quot;,&quot;UP-31 - Kheri&quot;,
&quot;UP-32 - Lucknow&quot;,&quot;UP-33 - Rai Bareli&quot;,&quot;UP-34 - Sitapur&quot;,&quot;UP-35 - Unnao&quot;,
&quot;UP-36 - Lucknow&quot;,&quot;UP-37 - Hapur&quot;,&quot;UP-38 - Sambhal&quot;,&quot;UP-40 - Bahraich&quot;,
&quot;UP-41 - Barabanki&quot;,&quot;UP-42 - Faizabad&quot;,&quot;UP-43 - Gonda&quot;,&quot;UP-44 - Sultanpur&quot;,
&quot;UP-45 - Ambedkar Nagar&quot;,&quot;UP-46 - Shrawasti&quot;,&quot;UP-47 - Balrampur&quot;,&quot;UP-50 - Azamgarh&quot;,
&quot;UP-51 - Basti&quot;,&quot;UP-52 - Deoria&quot;,&quot;UP-53 - Gorakhpur&quot;,&quot;UP-54 - Mau&quot;,
&quot;UP-55 - Siddharth Nagar&quot;,&quot;UP-56 - Mahrajganj&quot;,&quot;UP-57 - Padrauna&quot;,&quot;UP-58 - Sant Kabir Nagar&quot;,
&quot;UP-60 - Ballia&quot;,&quot;UP-61 - Ghazipur&quot;,&quot;UP-62 - Jaunpur&quot;,&quot;UP-63 - Mirzapur&quot;,
&quot;UP-64 - Sonbhadra&quot;,&quot;UP-65 - Varanasi&quot;,&quot;UP-66 - Bhadohi&quot;,&quot;UP-67 - Chandauli&quot;,
&quot;UP-70 - Allahabad&quot;,&quot;UP-71 - Fatehpur&quot;,&quot;UP-72 - Pratapgarh&quot;,&quot;UP-73 - Kaushambi&quot;,
&quot;UP-74 - Kannauj&quot;,&quot;UP-75 - Etawah&quot;,&quot;UP-76 - Farrukhabad&quot;,&quot;UP-77 - Kanpur&quot;,
&quot;UP-78 - Kanpur&quot;,&quot;UP-79 - Auraiya&quot;,&quot;UP-80 - Agra&quot;,&quot;UP-81 - Aligarh&quot;,
&quot;UP-82 - Etah&quot;,&quot;UP-83 - Firozabad&quot;,&quot;UP-84 - Mainpuri&quot;,&quot;UP-85 - Mathura&quot;,
&quot;UP-86 - Mahamaya Nagar&quot;,&quot;UP-87 - Kanshiram Nagar&quot;,&quot;UP-90 - Banda&quot;,&quot;UP-91 - Hamirpur&quot;,
&quot;UP-92 - Jalaun&quot;,&quot;UP-93 - Jhansi&quot;,&quot;UP-94 - Lalitpur&quot;,&quot;UP-95 - Mahoba&quot;,
&quot;UP-96 - Chitrakoot dham&quot;,&quot;WB-01 - Kolkata&quot;,&quot;WB-02 - Kolkata&quot;,&quot;WB-03 - Kolkata&quot;,
&quot;WB-04 - Kolkata&quot;,&quot;WB-05 - Kolkata&quot;,&quot;WB-06 - Kolkata&quot;,&quot;WB-07 - Kolkata&quot;,
&quot;WB-08 - Kolkata&quot;,&quot;WB-09 - Kolkata&quot;,&quot;WB-10 - Kolkata&quot;,&quot;WB-11 - Howrah&quot;,
&quot;WB-12 - Howrah&quot;,&quot;WB-13 - Howrah&quot;,&quot;WB-14 - Howrah&quot;,&quot;WB-15 - Hooghly&quot;,
&quot;WB-16 - Hooghly&quot;,&quot;WB-18 - Hooghly&quot;,&quot;WB-19 - Alipore&quot;,&quot;WB-20 - South 24 Paraganas&quot;,
&quot;WB-22 - Alipore&quot;,&quot;WB-23 - Barrackpore&quot;,&quot;WB-24 - Barrackpore&quot;,&quot;WB-25 - Barasat&quot;,
&quot;WB-26 - Barasat&quot;,&quot;WB-29 - Tamluk&quot;,&quot;WB-30 - Tamluk&quot;,&quot;WB-31 - Contai&quot;,
&quot;WB-32 - Contai&quot;,&quot;WB-33 - Midnapur&quot;,&quot;WB-34 - Midnapur&quot;,&quot;WB-36 - Midnapur&quot;,
&quot;WB-37 - Asansol&quot;,&quot;WB-38 - Asansol&quot;,&quot;WB-39 - Durgapur&quot;,&quot;WB-40 - Durgapur&quot;,
&quot;WB-41 - Burdwan&quot;,&quot;WB-42 - Burdwan&quot;,&quot;WB-44 - Asansol&quot;,&quot;WB-48 - Bolpur&quot;,
&quot;WB-51 - Nadia&quot;,&quot;WB-52 - Nadia&quot;,&quot;WB-53 - Birbhum&quot;,&quot;WB-54 - Birbhum&quot;,
&quot;WB-55 - Purulia&quot;,&quot;WB-56 - Purulia&quot;,&quot;WB-57 - Murshidabad&quot;,&quot;WB-58 - Murshidabad&quot;,
&quot;WB-59 - Rajganj&quot;,&quot;WB-60 - Rajganj&quot;,&quot;WB-61 - Balurghat&quot;,&quot;WB-62 - Balurghat&quot;,
&quot;WB-63 - Cooch Behar&quot;,&quot;WB-64 - Cooch Behar&quot;,&quot;WB-65 - Malda&quot;,&quot;WB-66 - Malda&quot;,
&quot;WB-67 - Bankura&quot;,&quot;WB-68 - Bankura&quot;,&quot;WB-69 - Alipur&quot;,&quot;WB-70 - Alipur&quot;,
&quot;WB-71 - Jalpaiguri&quot;,&quot;WB-72 - Jalpaiguri&quot;,&quot;WB-73 - Siliguri&quot;,&quot;WB-74 - Siliguri&quot;,
&quot;WB-76 - Darjeeling&quot;,&quot;WB-77 - Darjeeling&quot;,&quot;WB-78 - Kalimpong&quot;,&quot;WB-79 - Kalimpong&quot;,
&quot;WB-82 - Raghunathpur&quot;,&quot;WB-90 - Kalyani&quot;,&quot;WB-92 - Islampur&quot;,&quot;WB-96 - Baruipur&quot;

         ]" placeholder="RTO">

         <select name="SelPolStat" class="polstat">
          <option value="buynew" disabled selected>Policy Status</option>
          <option value="buynew" class="buynew">Buy New</option>
          <option value="renew" class="renew">Renew</option>
        </select>
    </div>
    <div class="car-sub-btn">
      <button class="btn-quote"><a href="car-compare.php">Get Quotes</a></button>
    </div>
  </div>
</div>
</div>
  <div class="middle-content">
    <div class="list-insurance">
      <div>
        <div class="ins-head ins-how">
          <h2>How it Works</h2>
        </div>
        <div class="ins-img">
          <img src="assets/images/how-it-works.png" alt="Ins">
          <span>Give us your car details</span>
          <span>Select from wide array of affordable options</span>
          <span>Fill in your personal details</span>
          <span>Our Executive will contact you at the earliest</span>
        </div>
      </div>

      <div class="sketch-cont cf">
        <div class="car-block">
          <h3>Car Insurance</h3>
          <i class="fa fa-car fa-5x wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
          <p>Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance, Compare and save upto 60% on car insurance</p>
        </div>
        <!-- <div class="health-block">
          <h3>Health Insurance</h3>
          <i class="fa fa-heart-o fa-5x wow bounceIn text-primary" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
          <p>Find the best match health insurance, Find the best match health insurance, Find the best match health insurance</p>
        </div> -->
      </div>

      <div class="main-testi">
        <h2>Policynote has done a great job. I renewed my car policy in 10 minutes. It’s quite incredible.</h2>
        <span>- Jack Son</span>
      </div>
      <div class="car-bg-lay">
        <div class="ins-head">
          <h2>Insurance Thoughts</h2>
        </div>
        <div class="ins-thoug">
          <p>
            <img src="assets/images/comma.png" alt="comma">
            Policynote has managed to do what no one else has. Buying insurance has never been this easy. Policynote has managed to do what no one else has. Buying insurance has never been this easy.
          </p>
          <p>
            <img src="assets/images/comma.png" alt="comma">
            Policynote has managed to do what no one else has. Buying insurance has never been this easy. Policynote has managed to do what no one else has. Buying insurance has never been this easy.
          </p>
        </div>
      </div>
      <div class="ins-gq">
          <h2>Get a quote from more than 20 companies</h2>
      </div>
    </div>
  </div>
    </div>
    <!-- Content ends here -->

    <?php include("footer.php"); ?>
