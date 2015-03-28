<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>J_KULA</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB-hQRMh-14jafG3yTMmf1ZRKVLqGOkce8">
    </script>
        <script type="text/javascript" data-main="scripts/main.js" src="scripts/require.js"></script>
         <link rel="stylesheet" href="../css/styleHead.css"/>
         <link href="css/aboutme.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Josefin+Slab" />
    </head>
    <body style="margin: 0; padding: 0;">
        <div id="greatdiv" onload="initialize()">  
        <header ng-controller="HeaderCtrl as hd">
             <div id="smHeader">
                 <div class="socialm">
                     <div class="github">
                         <img ng-click="hd.openrepo()" src="../wImages/sgithub.png"/>
                        <p>Public Repo...</p> 
                     </div>
                         
                     <div class="others">
                         <img ng-click="hd.linkedin()" src="../wImages/slinkedin.png"/>
                         <img ng-click="hd.gplus()" src="../wImages/sgplus.png"/>
                         <img ng-click="hd.faceme()" src="../wImages/sface.png"/>
                         <img ng-click="hd.twitt()" src="../wImages/stwitter.png"/>
                     </div>
                 </div>
            </div> 
            <div id="bnavi" >
            <nav> 
                <ul>
                    <li>
                <a href="#aboutme"> <img src="../wImages/0-saboutme.png"/>About J.kula</a></li>
                <li><a href="#"><img src="../wImages/4-smyblog.png"/>MyBlog</a></li>
                <li><a href="#"><img src="../wImages/3sportfolio.png"/>Portfolio</a></li>
                <li><a href="#contact"><img src="../wImages/1-contact.png"/>Contact</a></li>
            </ul>
            </nav>
           
        </div>
            <!--Square Background -->
            <div id="squareback">
                <div class="mdetails">
                    <div class="mimage">
                        <img ng-click="hd.home()" alt="Jkula profile Picture" src="../wImages/Jkula_001.png"/>
                        
                    </div>
                    <div  class="mprof">
                        <p>JOSUE KULA</p>
                        <p>Software Developer</p>
                        <p>Josh.kula@outlook.com</p>
                  </div>
                </div>     
            </div>
        </header>
            
    <wrapper>
        
    </wrapper>
    
     <!-- This is the TECHNOLOGY -->
       <div id="Learntech">
           <div class="yeswecan">Learn More</div>
           <div id="techwrapper">
               <!--- LEARN MORE --->
               <div class="learnmore">
                   <div class="techimg">
                       <img alt="Lear more about HTML5" src="../techImage/shtml5.png" />
                    <img alt="Learn more about Java" src="../techImage/sjava.png" />
                    <img alt="Learn more about Mysql" src="../techImage/smysql.png" />
                    <img alt="Learn more about Angularjs" src="../techImage/sangular.png" />
                    <img alt="Learn more about Nodejs" src="../techImage/snode.png" />
                    <img alt="Learn more about Apache Server" src="../techImage/sapache.png" />
                  </div>
                   
               </div>
                
           </div>  
       </div>
       <!-- This is the Footer -->
    <footer>
           <!-- this is the sub-menu -->
           <div id="wrapper2">
               <div id="submenu">
               <ul>
                   <li><a href="#">About J.kula</a></li>
                   <li><a href="#">Myblog</a></li>
                   <li><a href="#">Portfolio</a></li>
                   <li><a href="#">Contact</a></li>
               </ul> 
               </div>
               <div id="lastblock">
               <!-- Connect block -->
               <div class="connect">
                   <p>Connect <span> </span>></p>
                   <div class="subsmedia">
                        <img src="../wImages/slinkedin.png"/>
                         <img src="../wImages/sgplus.png"/>
                         <img src="../wImages/sface.png"/>
                         <img src="../wImages/stwitter.png"/>
                   </div>
                   <div class="rights">
                       ID : Josue Kula’s Intellectual property
                   </div>
               </div>
               <!-- WWW Consortium -->
               <div class="w3c">
                   <img src="../techImage/sw3.png" />
               </div>
               <!-- contact me -->
               <div class="contact">
                   <div class="mnom"><img src="../wImages/myname.png" /></div>
                   <div class="place"><img src="../wImages/splace.png" /></div>
                   <div class="semail"><img src="../wImages/semail.png" /></div>
               </div>
               
               </div>
           </div>  
       </footer>
    <script type="text/javascript">
      function initialize() {
          var jmarker;
          var jaddress = new google.maps.LatLng(30.23384,-97.73093);
          //map cordinates
          //var mapcord = { lat: 30.23384, lng: -97.73093};
         //mapStyle Array
         var mapstyle = [
                            {
                             "stylers": [
                              { "hue": "#0055ff" },
                             { "lightness": 35 }
                            ]
                                 },{
                                "featureType": "road.local",
                                "elementType": "labels.icon",
                                "stylers": [
                                 { "hue": "#0055ff" },
                            { "saturation": -48 }
                                ]
                                },{
                                }
                            ];
                            
    //Creating the style goes here
    var StyleMap = new google.maps.StyledMapType(mapstyle,{name : "Mystyled Maped"});
    //Creating the map Object                        
         var mapOptions = {
          center:jaddress ,
          zoom: 15,
          mapTypeControlOptions :{
              mapTypeIds: [google.maps.MapTypeId.ROADMAP,'map_Style'] 
          }
        };
        var map = new google.maps.Map(document.getElementById('greatdiv'),
            mapOptions);
       //Setting the marker for
       var image ='../wImages/jlocation1.png';
       jmarker = new google.maps.Marker({
           map:map,
           draggable: false,
           title: 'I am here',
           animation: google.maps.Animation.DROP,
           position: jaddress,
           icon : image
       });
       //google.maps.event.addListener(jmarker,'click',toggleBounce)
       //Associting the stype map with the mapTypeId
       map.mapTypes.set('map_Style',StyleMap);
       map.setMapTypeId('map_Style');
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
     </div>
    </body> 
</html>
