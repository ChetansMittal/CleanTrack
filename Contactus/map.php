<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>MapmyIndia Maps API: Map Polygon Example!</title>
        <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!--put your map api javascript url with key here-->
        <script src="https://apis.mapmyindia.com/advancedmaps/v1/c89317c927468c8a8dbffc055d9ca67f/map_load?v=1.5&plugin=editable,path.drag"></script>
        <!--<script src="js/Leaflet.Editable.js"></script>--->      
        <!--<script src="js/Path.Drag.js"></script>--->      

        <style type="text/css">
            html { height: 100%; }
            body { height: 100px; width:150px;font-family:Verdana,sans-serif, Arial;color:#000;margin: 0; font-size:14px; padding: 0; }
            #map{
                position: absolute;
                left: 0px; top: 0px; 
                right: 2px; bottom: 2px; 
                border: 1px solid #cccccc;
                width: 100px
                height 150px; }
            
            
        </style>
    </head>
    <body>
        
          
        
        <div id="map"></div>


        <script>
            var req = new XMLHttpRequest(); 
            var a;
            var map = null;
            var polygons = [];
            var visbility = false;
            var p1 = null;
            var poly;
            var pts;
            var count = 3;
            var region = 'Aundh';
  
               req.onload = function() {

                a= this.responseText;

                map = new MapmyIndia.Map('map', {editable: true, zoomControl: true, hybrid: true});

              var pts = [[18.56306837985162, 73.79652366619601],[18.562987014589265, 73.8096557613858],[18.555501244473476, 73.8096557613858],[18.55566398209786, 73.79643783550848]];
                var patArr = [];
                for (var i = 0; i < pts.length; i++) {
                    patArr.push(new L.LatLng(pts[i][0], pts[i][1]));
                }

                if(a[10]==1){
                    var poly = new L.polygon(patArr, {color: "rgb(0,255,0"});
                }
                if(a[10]==2){
                    var poly = new L.polygon(patArr, {color: "rgb(255,165,0"});
                }
                if(a[10]>=3){
                    var poly = new L.polygon(patArr, {color: "rgb(255,0,0"});
                }

                poly.on("mousedown", function (e) {/mouseup event on polygon P2/
                    getBounds(poly, "Yellow polygon");
                });
                poly.on("click", function (e) {/click event on polygon P2/
                    poly.bindPopup("Has fewer garbage issues").openPopup();/binds popup to the polygon/
                });
                map.addLayer(poly);
                polygons.push(poly);
                map.fitBounds(poly.getBounds());


                var pts1 = [[18.513729030865164, 73.79805031983214],[18.51446152797943, 73.81693307108543],[18.50086912641894, 73.81658974833537],[18.50062494167229, 73.79212800239362]];
                var patArr1 = [];
                for (var i = 0; i < pts1.length; i++) {
                    patArr1.push(new L.LatLng(pts1[i][0], pts1[i][1]));
                }

                if(a[25]==1){
                    var poly1 = new L.polygon(patArr1, {color: "rgb(0,255,0"});
                }
                if(a[25]==2){
                    var poly1 = new L.polygon(patArr1, {color: "rgb(255,165,0"});
                }
                if(a[25]>=3){
                    var poly1 = new L.polygon(patArr1, {color: "rgb(255,0,0"});
                }

                poly1.on("mousedown", function (e) {/mouseup event on polygon P2/
                    getBounds(poly1, "Yellow polygon");
                });
                poly1.on("click", function (e) {/click event on polygon P2/
                    poly1.bindPopup("Has fewer garbage issues").openPopup();/binds popup to the polygon/
                });
                map.addLayer(poly1);
                polygons.push(poly1);
                map.fitBounds(poly1.getBounds());




                var pts2 = [[18.534490395601143, 73.83706366085885],[18.534815910737265, 73.8495091105485],[18.52423635148727, 73.84899412642342],[18.52586401860174, 73.83620535398369]];
                var patArr2 = [];
                for (var i = 0; i < pts2.length; i++) {
                    patArr2.push(new L.LatLng(pts2[i][0], pts2[i][1]));
                }

                if(a[45]==1){
                    var poly2 = new L.polygon(patArr2, {color: "rgb(0,255,0"});
                }
                if(a[45]==2){
                    var poly2 = new L.polygon(patArr2, {color: "rgb(255,165,0"});
                }
                if(a[45]>=3){
                    var poly2 = new L.polygon(patArr2, {color: "rgb(255,0,0"});
                }

                poly2.on("mousedown", function (e) {/mouseup event on polygon P2/
                    getBounds(poly2, "Yellow polygon");
                });
                poly2.on("click", function (e) {/click event on polygon P2/
                    poly2.bindPopup("Has fewer garbage issues").openPopup();/binds popup to the polygon/
                });
                map.addLayer(poly2);
                polygons.push(poly2);
                map.fitBounds(poly2.getBounds());


                var pts3 = [[18.556419267544268, 73.8755894471361],[18.557721157192425, 73.88640411376298],[18.547143016396898, 73.88992317195108],[18.54632928611278, 73.87292869582312]];
                var patArr3 = [];
                for (var i = 0; i < pts3.length; i++) {
                    patArr3.push(new L.LatLng(pts3[i][0], pts3[i][1]));
                }

                if(a[60]==1){
                    var poly3 = new L.polygon(patArr3, {color: "rgb(0,255,0"});
                }
                if(a[60]==2){
                    var poly3 = new L.polygon(patArr3, {color: "rgb(255,165,0"});
                }
                if(a[60]>=3){
                    var poly3 = new L.polygon(patArr3, {color: "rgb(255,0,0"});
                }

                poly3.on("mousedown", function (e) {/mouseup event on polygon P2/
                    getBounds(poly3, "Yellow polygon");
                });
                poly3.on("click", function (e) {/click event on polygon P2/
                    poly3.bindPopup("Has fewer garbage issues").openPopup();/binds popup to the polygon/
                });
                map.addLayer(poly3);
                polygons.push(poly3);
                map.fitBounds(poly3.getBounds());
            }







            function getBounds(poly, name) {
                if (poly) {
                    var event_div = document.getElementById("event-log");
                    event_div.innerHTML = '';
                    var bounds = poly.getBounds();/*Returns the bounding box of this polygon in WGS coordinates. */
                    var centroidPoint = bounds.getCenter();/*Returns the position of the polygon, as the centroid point, calculated from points. */
                    event_div.innerHTML = "" + name + ":</br> north east lat:" + bounds.getNorthEast().lat
                            + "</br> north east lng:" + bounds.getNorthEast().lng + "</br>south west lat:"
                            + bounds.getSouthWest().lat + "</br>south west lng:" + bounds.getSouthWest().lng
                            + "</br>centroid lat:" + centroidPoint.lat + "</br>centroid lng:" + centroidPoint.lng + "</br>" + event_div.innerHTML;
                    ;
                }
            }

            req.open("get", "output.php", true); 
            req.send();
            
          
            
                    
            
            
            
        </script>
    </body>
</html>
