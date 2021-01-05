var myCenter = new google.maps.LatLng(27.035943, 88.262271);

        function initialize() {
            var mapProp = {
                center: myCenter,
                scrollwheel: false,
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE,
                icon: '',
                map: map,
            });
            var styles = [{
                stylers: [{
                        hue: "#c5c5c5"
                    },
                    {
                        saturation: -100
                    }
                ]
            }, ];
            map.setOptions({
                styles: styles
            });
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);