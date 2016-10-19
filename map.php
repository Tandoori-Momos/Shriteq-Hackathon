
<!DOCTYPE html>
<html>
<head>

<?php  function getCoordinates($address){
 
$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
 
$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
 
$response = file_get_contents($url);
 
$json = json_decode($response,TRUE); //generate array object from the response from the web
 
return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
 
}
$pos =  getCoordinates('Police Station Rama Krishna Puram
Kaifi Azmi Marg, Police Colony, Sector 12, RK Puram
New Delhi, Delhi 110022
India');

echo $pos;


echo '<script src="https://maps.googleapis.com/maps/api/js"></script>'; 
echo '<script type="text/javascript">
  function initialize() {
    var position = new google.maps.LatLng('.$pos.');
    var myOptions = {
      zoom: 15,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"This is the place."
    });  
 
    var contentString = "xyz content string";
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
    google.maps.event.addListener(marker,"click", function() {
        infowindow.open(map,marker);
    });
 
  }
 google.maps.event.addDomListener(window, "load", initialize);
</script>';
?>
</head>
<body>

  <div id="map_canvas" style="width:500px; height:500px"></div>


</body>
</html>