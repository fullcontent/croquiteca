<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.39.1/mapbox-gl.css' rel='stylesheet' />
    <style>

        body {
          color:#404040;
          font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
          margin:0;
          padding:0;
          -webkit-font-smoothing:antialiased;
        }

        * {
          -webkit-box-sizing:border-box;
          -moz-box-sizing:border-box;
          box-sizing:border-box;
        }

        .sidebar {
          position:absolute;
          width:33.3333%;
          height:100%;
          top:0;left:0;
          overflow:hidden;
          border-right:1px solid rgba(0,0,0,0.25);
        }
        .pad2 {
          padding:20px;
        }

        .map {
          position:absolute;
          left:33.3333%;
          width:66.6666%;
          top:0;bottom:0;
        }

        h1 {
          font-size:22px;
          margin:0;
          font-weight:400;
          line-height: 20px;
          padding: 20px 2px;
        }

        a {
          color:#404040;
          text-decoration:none;
        }

        a:hover {
          color:#101010;
        }

        .heading {
          background:#fff;
          border-bottom:1px solid #eee;
          min-height:60px;
          line-height:60px;
          padding:0 10px;
          background-color: #00853e;
          color: #fff;
        }

        .listings {
          height:100%;
          overflow:auto;
          padding-bottom:60px;
        }

        .listings .item {
          display:block;
          border-bottom:1px solid #eee;
          padding:10px;
          text-decoration:none;
        }

        .listings .item:last-child { border-bottom:none; }
        .listings .item .title {
          display:block;
          color:#00853e;
          font-weight:700;
        }

        .listings .item .title small { font-weight:400; }
        .listings .item.active .title,
        .listings .item .title:hover { color:#8cc63f; }
        .listings .item.active {
          background-color:#f8f8f8;
        }
        ::-webkit-scrollbar {
          width:3px;
          height:3px;
          border-left:0;
          background:rgba(0,0,0,0.1);
        }
        ::-webkit-scrollbar-track {
          background:none;
        }
        ::-webkit-scrollbar-thumb {
          background:#00853e;
          border-radius:0;
        }

        .marker {
          border: none;
          cursor: pointer;
          height: 56px;
          width: 56px;
          background-image: url(marker.png);
          background-color: rgba(0, 0, 0, 0);
        }

        .clearfix { display:block; }
        .clearfix:after {
          content:'.';
          display:block;
          height:0;
          clear:both;
          visibility:hidden;
        }

        /* Marker tweaks */
        .mapboxgl-popup {
          padding-bottom: 50px;
        }

        .mapboxgl-popup-close-button {
          display:none;
        }
        .mapboxgl-popup-content {
          font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
          padding:0;
          width:180px;
        }
        .mapboxgl-popup-content-wrapper {
          padding:1%;
        }
        .mapboxgl-popup-content h3 {
          background:#91c949;
          color:#fff;
          margin:0;
          display:block;
          padding:10px;
          border-radius:3px 3px 0 0;
          font-weight:700;
          margin-top:-15px;
        }

        .mapboxgl-popup-content h4 {
          margin:0;
          display:block;
          padding: 10px 10px 10px 10px;
          font-weight:400;
        }

        .mapboxgl-popup-content div {
          padding:10px;
        }

        .mapboxgl-container .leaflet-marker-icon {
          cursor:pointer;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
          margin-top: 15px;
        }

        .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
          border-bottom-color: #91c949;
        }
      </style>
   
</head>
<body>


<div class='sidebar pad2'>Listing</div>
<div id='map' class='map pad2'>Map</div>
<script>
  // This will let you use the .remove() function later on
  if (!('remove' in Element.prototype)) {
    Element.prototype.remove = function() {
      if (this.parentNode) {
          this.parentNode.removeChild(this);
      }
    };
  }

  mapboxgl.accessToken = 'pk.eyJ1IjoiZXhhbXBsZXMiLCJhIjoiY2lqbmpqazdlMDBsdnRva284cWd3bm11byJ9.V6Hg2oYJwMAxeoR9GEzkAA';

  // This adds the map
  var map = new mapboxgl.Map({
    // container id specified in the HTML
    container: 'map',
    // style URL
    style: 'mapbox://styles/mapbox/outdoors-v10',
    // initial position in [long, lat] format
    center: [-77.034084142948, 38.909671288923],
    // initial zoom
    zoom: 13,
    scrollZoom: true
  });

  var stores = {
"type": "FeatureCollection",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Name": "Morro da Mina", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.567071, -28.554043, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra da Vaca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.434373, -27.068575, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro do Baú", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.929611, -26.799434, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro Dom Bosco", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.366649, -27.050339, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Paredão Carvalho", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.451146, -27.090244, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pico da Bandeira", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.630996, -27.226828, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Boa Vista", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.073686, -26.899885, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Filhote", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.930599, -26.805526, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedreira do Abraão", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.589128, -27.609196, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Estaleiro", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.573554, -27.024601, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Sepultura", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.478753, -27.13496, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Branca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.70555, -27.610413, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Urubu", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.434975, -27.6141, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Gravatá", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.431904, -27.615938, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra da Esponja", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.65756, -27.107194, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Praia Brava", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.626069, -26.932048, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Brito", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.622176, -27.766049, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.507056, -27.118112, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.412863, -27.391002, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Costões da Barra", "description": "Testa do Burro setor 1 barra da lagoa, vias de 2 a 4 cordadas", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.413085, -27.575357, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro dos Ingleses", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.365971, -27.443384, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Costão do Santinho", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.375292, -27.472549, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Aguada", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.598323, -27.001013, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Estaleiro", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.593649, -27.067619, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Costão Plaza", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.58861, -27.079823, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Costão de São Miguel", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.618003, -26.82776, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponta do Vigia", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.596941, -26.773828, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Mirante", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.500728, -27.210642, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Espinhales", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.635141, -27.055961, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Boi nos ares", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.498449, -27.203825, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Tainha", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.511141, -27.216648, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pico da Teta", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.658348, -26.987242, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Abraão", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.596886, -27.607381, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Itaguaçu", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.59824, -27.615427, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Cruz", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.533701, -27.586647, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Nalfragados", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.569466, -27.835917, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro do Boi", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.606669, -27.035951, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Coroa", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.487207, -27.779243, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Solidão", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.536301, -27.805572, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Matadeiro", "description": "local conhecido como \"paraíso do Bito\"", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.4864182, -27.758857, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Galheta", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.428876, -27.596817, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Mole", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.435733, -27.609422, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Falésia Seu Zizo", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.726909, -29.105792, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ipoã", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.76226, -28.537675, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Moça", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.743343, -29.039088, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro dos Conventos", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.362688, -28.935259, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Branca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.668084, -28.05025, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra do Urubu", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.587126, -27.901472, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponta da Vigia", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.609034, -28.017591, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Gravatá", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.747612, -28.507197, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.766453, -28.466689, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.7663, -28.469583, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponta do Gi", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.738718, -28.423182, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Taba", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.759589, -28.528202, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Formigão", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.040059, -28.488441, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra dos Padres", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.124985, -28.568238, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra do Leão", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.036264, -28.349393, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Guarda do Embaú", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.58284, -27.906062, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Praia do Porto", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.662921, -28.210436, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pontão Praia da Ribanceira", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.657454, -28.193506, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Rosa Norte", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.635429, -28.122497, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Rosa Sul", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.636948, -28.140478, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Praia dos amores", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.658297, -28.19316, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro Seco", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.989944, -28.333675, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Falésias 13 de maio", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.122143, -28.581482, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Falésia Negativa Sertão Jararaca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.07008, -28.453434, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos Morro da Antena", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.985212, -28.521162, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos de Capivari", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.953852, -28.417581, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Sertão Jararaca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.06128, -28.4472, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Farol de Santa Marta", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.813025, -28.605173, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponta da Galheta", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.787707, -28.568662, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponta do Cardoso", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.81994, -28.608966, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Itapirubá", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.702208, -28.339525, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.644831, -28.144016, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.732731, -29.071835, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.865576, -28.918269, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Tiriú", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.496905, -26.227159, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ilha Feia", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.580817, -26.467208, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Costão norte", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.498639, -26.228862, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Prainha", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.500611, -26.235411, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Beira Mar", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.494704, -26.220036, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Sambaqui", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.499073, -26.23339, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Efeitos", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.495847, -26.223272, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Tartaruga", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.496747, -26.216763, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ubatuba", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.527321, -26.195508, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Itaguaçu", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.525444, -26.176903, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Forte", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.532515, -26.163154, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Forquilhinha", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.318741, -26.606239, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro Rio Bonito", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.310359, -26.588222, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Escondida", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.005005, -26.620545, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pico Jaraguá", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.040428, -26.515876, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Cascata Paraíso", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.25768, -26.200327, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Igreja", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.257802, -26.363103, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Braço Esquerdo", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.23758, -26.366448, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra da Divisa", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.934026, -25.992954, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Finder", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.83159, -26.25848, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Grande", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.634024, -26.316629, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Palha", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.646975, -26.299163, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Itauatê", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.664898, -26.295169, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Paredão das Lágrimas", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.66473, -26.302549, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Cruz", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.624655, -26.236361, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Canta Galo", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.733249, -26.182421, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Castelinho", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.0484986, -26.2505212, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Castelo dos Bugres", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.0482943, -26.2356512, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro Pelado", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.03436, -26.245261, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Monte Crista", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.917865, -26.081259, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos Quiriri", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.942313, -26.0412, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Tartaruga", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.923922, -26.012613, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Schmalz", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.93535, -26.013192, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos Quiriri", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.996635, -26.019091, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Blocos Quiriri", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.973729, -26.010873, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Rio do Rastro", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.545251, -28.397326, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pinheiro Marcado", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.962708, -27.803969, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Branca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.320561, -27.802285, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Serra dos dois irmãos", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.844715, -27.784527, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Salto Branco", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.530053, -28.493352, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pessegueiros", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.047093, -27.805832, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pico Aiurê", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.364769, -28.054027, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Branca", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.101559, -29.26477, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Setembrino", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.204586, -27.831294, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedras Brancas", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.207808, -27.843508, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "São Pedro", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.609814, -28.552706, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Prudente", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.284138, -27.824679, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.155447, -27.822525, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Falésias de Timbé do Sul", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.855497, -28.860351, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Morro da Igreja", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.49037, -28.138517, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Pedra Furada", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.479415, -28.134118, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Serrinha", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.6205853, -28.6129842, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Dedos de Treviso", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.525423, -28.511144, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Três Marias", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.761011, -28.845987, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.76734, -28.843852, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.794612, -28.825516, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.794318, -28.823482, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -50.126545, -27.812587, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Torre do Funil", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -49.5317423, -28.3403926, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 136", "description": "Ponta da Felicidade, diversas vias de 2 ou 3  cordadas", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.4839106, -27.7847203, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 137", "description": "Bolders", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.4988558, -27.7495853, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 138", "description": "Bolders", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.5003901, -27.7518664, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 139", "description": "Setor dois Barra da Lagoa, varias vias esportivas", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.4170592, -27.5798836, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 140", "description": "escalada Ponta do Rapa", "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.4169197, -27.3821139, 0.0 ] } },
{ "type": "Feature", "properties": { "Name": "Ponto 141", "description": null, "timestamp": null, "begin": null, "end": null, "altitudeMode": null, "tessellate": -1, "extrude": 0, "visibility": -1, "drawOrder": null, "icon": null }, "geometry": { "type": "Point", "coordinates": [ -48.5249779, -27.468783, 0.0 ] } }
]
};
  // This adds the data to the map
  map.on('load', function (e) {
    // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
    map.addSource("places", {
      "type": "geojson",
      "data": stores
    });

   
    // Initialize the list
    buildLocationList(stores);

  });

  // This is where your interactions with the symbol layer used to be
  // Now you have interactions with DOM markers instead
  stores.features.forEach(function(marker, i) {
    // Create an img element for the marker
    var el = document.createElement('div');
    el.id = "marker-" + i;
    el.className = 'marker';
    // Add markers to the map at all points
    new mapboxgl.Marker(el, {offset: [-28, -46]})
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);

    el.addEventListener('click', function(e){
        // 1. Fly to the point
        flyToStore(marker);

        // 2. Close all other popups and display popup for clicked store
        createPopUp(marker);

        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');

        e.stopPropagation();
        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }

        var listing = document.getElementById('listing-' + i);
        listing.classList.add('active');

    });
  });


  function flyToStore(currentFeature) {
    map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 15
      });
  }

  function createPopUp(currentFeature) {
    var popUps = document.getElementsByClassName('mapboxgl-popup');
    if (popUps[0]) popUps[0].remove();


    var popup = new mapboxgl.Popup({closeOnClick: false})
          .setLngLat(currentFeature.geometry.coordinates)
          .setHTML('<h3>Sweetgreen</h3>' +
            '<h4>' + currentFeature.properties.Name + '</h4>')
          .addTo(map);
  }


  function buildLocationList(data) {
    for (i = 0; i < data.features.length; i++) {
      var currentFeature = data.features[i];
      var prop = currentFeature.properties;

      var listings = document.getElementById('listings');
      var listing = listings.appendChild(document.createElement('div'));
      listing.className = 'item';
      listing.id = "listing-" + i;

      var link = listing.appendChild(document.createElement('a'));
      link.href = '#';
      link.className = 'title';
      link.dataPosition = i;
      link.innerHTML = prop.Name;

      var details = listing.appendChild(document.createElement('div'));
      details.innerHTML = prop.city;
      if (prop.description) {
        details.innerHTML += ' &middot; ' + prop.description;
      }



      link.addEventListener('click', function(e){
        // Update the currentFeature to the store associated with the clicked link
        var clickedListing = data.features[this.dataPosition];

        // 1. Fly to the point
        flyToStore(clickedListing);

        // 2. Close all other popups and display popup for clicked store
        createPopUp(clickedListing);

        // 3. Highlight listing in sidebar (and remove highlight for all other listings)
        var activeItem = document.getElementsByClassName('active');

        if (activeItem[0]) {
           activeItem[0].classList.remove('active');
        }
        this.parentNode.classList.add('active');

      });
    }
  }


    </script>
<div class='sidebar'>
  <div class='heading'>
    <h1>Our locations</h1>
  </div>
  <div id='listings' class='listings'></div>
</div>


</body>
</html>


