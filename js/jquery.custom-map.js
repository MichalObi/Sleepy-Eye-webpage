/**
 *
 * Custom Map Style for Google Maps
 * =======================================================================================================
 * 
 * @since 1.0.0
 *
 */
var map;
var MY_MAPTYPE_ID = 'custom_style';

function initialize()
{

	var featureOpts = [
		{
			"stylers" :
			[
				{ "hue" 		: "#2ee68a" },
				{ "saturation" 	: -30 },
				{ "lightness" 	: 15 }
			]
		}
	];

	var endgame = new google.maps.LatLng( 33.393 , -104.523 )
	var mapOptions =
	{
		zoom: 15,
		center: endgame,
		disableDefaultUI: true,
		mapTypeControlOptions:
		{
			mapTypeIds: [google.maps.MapTypeId.ROADMAP , MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map( document.getElementById('map-canvas'),mapOptions );

	var marker = new google.maps.Marker({
		position: endgame,
		map: map
	});

	var styledMapOptions =
	{
		name : 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType( featureOpts , styledMapOptions );

	map.mapTypes.set( MY_MAPTYPE_ID , customMapType );

}

google.maps.event.addDomListener( window , 'load' , initialize );