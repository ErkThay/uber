(() => {
    'use strict';
    window.addEventListener('load', () => {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('formulario-viaje');

        var map, directionsService, directionsRenderer;
        let mapa = document.getElementById("map");
        let coords = { lat: 19.2935778, lng: -99.6558995 };
        var coordenadasUser;

        let estilo1 = [
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ];
        let estilo2 = [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ];
        let estilo3 = [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#242f3e"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#746855"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#242f3e"
                    }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#d59563"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#d59563"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#263c3f"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#6b9a76"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#38414e"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#212a37"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9ca5b3"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#746855"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#1f2835"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#f3d19c"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#2f3948"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#d59563"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#17263c"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#515c6d"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#17263c"
                    }
                ]
            }
        ];
        let estilo4 = [
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ebe3cd"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#523735"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f1e6"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#c9b2a6"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#dcd2be"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#ae9e90"
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#93817c"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#a5b076"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#447530"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f1e6"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#fdfcf8"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f8c967"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#e9bc62"
                    }
                ]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e98d58"
                    }
                ]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#db8555"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#806b63"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#8f7d77"
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ebe3cd"
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dfd2ae"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#b9d3c2"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#92998d"
                    }
                ]
            }
        ];


        if (navigator.geolocation) {

            const options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };

            const success = (position) => {
                let miOrigen = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                initMap(miOrigen);
                coordenadasUser = miOrigen;
            }

            const error = (error) => {

                var errores = {
                    1: 'Permiso denegado',
                    2: 'PosiciÃ³n no disponible',
                    3: 'ExpirÃ³ el tiempo de respuesta'
                };

                console.log(`Error : ${errores[error.code]}`);
            };
            navigator.geolocation.getCurrentPosition(success, error, options);
        } else {
            console.error("el navegador no soporta geolocation");
        }

        function initMap(coordenadas) {

            let geocoder = new google.maps.Geocoder;

            geocoder.geocode({ 'location': coordenadas }, (results, status) => {
                if (status === 'OK') {
                    if (results[0]) {
                        let direccion = results[0].formatted_address;
                        let inputOrigen = document.getElementById("inputOrigen");
                        let miMarcador = crearMarker(coordenadas, "img/street-view.png", direccion);
                        inputOrigen.value = direccion;
                        miMarcador.setMap(map);
                    } else {
                        console.log("No hay resultados");
                    }
                } else {
                    console.log('No se pudo acceder al metodo geocoder: ' + status);
                }
            });

            let fecha = new Date();
            let horas = fecha.getHours();

            if (horas >= 0 && horas < 12) cargarMapa(estilo1);
            if (horas >= 12 && horas < 18) cargarMapa(estilo2);
            if (horas >= 18 && horas < 24) cargarMapa(estilo3);

            let contador = 0;
            // setInterval(() => {
            //     console.log(contador++);
            //     cargarUbers();
            // }, 1000);

            cargarUbers();

        }

        function cargarUbers() {
            let url = "https://localhost/uber-web-app/back-app/";
            let data = new FormData();
            data.append("opcion", "cargarCoordenadas");
            data.append("id_type_user", "2");
            fetchAPI(url, "POST", data)
                .then((data) => {
                    if (data.estatus == "ok") {
                        let conductores = data.mensaje;

                        const latLng = (point) => new google.maps.LatLng(point);

                        //calcular distancia entre dos puntos y la retorna en KM 
                        const calcularDistancia = (origen, destino) => {
                            let p1 = latLng(origen);
                            let p2 = latLng(destino);
                            return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
                        }

                        // calcular la distancia mas cercana al usuario
                        const vehiculosCercanos = (origen, destino) => {
                            const distanciaMaxima = 1; //KM
                            let distancia = calcularDistancia(origen, destino);
                            return (distancia <= distanciaMaxima) ? { cercano: true, distancia: distancia } : { cercano: false, distancia: distancia };
                        }

                        //convierte una cadena a flotante
                        const cadenaFlotante = (cadena) => parseFloat(cadena);

                        //crea un objeto con las propiedades lat y lng
                        const crearObjeto = (lat, lng) => { return { lat: lat, lng: lng } }


                        let ubersCercanos = conductores.map((conductor) => {
                            let destino = crearObjeto(cadenaFlotante(conductor.lat), cadenaFlotante(conductor.lng));
                            let cercaDelUsuario = vehiculosCercanos(coordenadasUser, destino);
                            if (cercaDelUsuario.cercano) return conductor;
                        });
                        ubersCercanos.forEach((uberCercano) => {
                            let destino = crearObjeto(cadenaFlotante(uberCercano.lat), cadenaFlotante(uberCercano.lng));
                            let marcadorConductor = crearMarker(destino, "img/car.png", uberCercano.name);
                            marcadorConductor.setMap(map);
                        });
                    }
                });
        }

        //autocompletamos la direccion, usando la api de google maps 
        const autocomplete = (input) => new google.maps.places.Autocomplete(input);

        function cargarMapa(estilo) {
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();

            map = new google.maps.Map(mapa, {
                center: coords,
                zoom: 17,
                styles: estilo,
                disableDefaultUI: true,
                fullscreenControl: true
            });

            directionsRenderer.setOptions({ suppressMarkers: true });
            directionsRenderer.setMap(map);

            let inputOrigen = document.getElementById("inputOrigen");
            let inputDestino = document.getElementById("inputDestino");
            autocomplete(inputOrigen);
            autocomplete(inputDestino);
        }


        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            directionsService.route(
                {
                    origin: { query: $('#inputOrigen').val() },
                    destination: { query: $('#inputDestino').val() },
                    travelMode: google.maps.DirectionsTravelMode.DRIVING
                },
                function (response, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(response);
                        //tarifa por kilometro en pesos 
                        let tarifaKilometro = 2;
                        let myRoute = response.routes[0].legs[0];
                        let points = response.routes[0].overview_path;
                        console.log(points);
                        let mp = new google.maps.Marker({
                            position: { lat: points[0].lat(), lng: points[0].lng() }
                        });
                        mp.setMap(map);

                        mp.setPosition({ lat: points[1].lat(), lng: points[1].lng() });
                        // points.forEach((point)=>{
                        //     let marker = new google.maps.Marker({
                        //         position : {lat : point.lat(), lng : point.lng()}
                        //     });
                        //     marker.setMap(map);
                        // });
                        $(".tiempo").text(myRoute.duration.text);
                        $(".distancia").text(myRoute.distance.text);
                        $(".tarifa-pagar").text((tarifaKilometro * (myRoute.distance.value / 1000) * 21.93).toFixed(2));
                        //  let markerOrigen = crearMarker(myRoute.start_location, "img/street-view.png", `inicie en : ${myRoute.start_address}`);
                        let markerDestino = crearMarker(myRoute.end_location, "img/checkpoint.png", `mi destino es : ${myRoute.end_address}`);
                        //  markerOrigen.setMap(map);
                        markerDestino.setMap(map);
                        cargarUbers();
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
        }


        function crearMarker(coords, url, title) {
            return new google.maps.Marker({
                position: coords,
                animation: google.maps.Animation.DROP,
                title: title,
                icon: url
            });
        }

        const establecerTema = (opcion) => {
            let nuevoEstilo;
            switch (opcion) {
                case 1:
                    nuevoEstilo = estilo1;
                    $(".contenedor-cards > div").removeClass().addClass("card card-success");
                    $(".formulario-viaje > button").removeClass().addClass("btn btn-success float-right");
                    $(".input-group-prepend > span").removeClass().addClass("input-group-text bg-success text-white");
                    $(".dropdown > button").removeClass().addClass("btn btn-success dropdown-toggle");
                    break;
                case 2:
                    nuevoEstilo = estilo2;
                    $(".contenedor-cards > div").removeClass().addClass("card card-2");
                    $(".formulario-viaje > button").removeClass().addClass("btn btn-light text-white estilo-2 float-right");
                    $(".input-group-prepend > span").removeClass().addClass("input-group-text estilo-2 text-white");
                    $(".dropdown > button").removeClass().addClass("btn btn-light estilo-2 text-white dropdown-toggle");
                    break;
                case 3:
                    nuevoEstilo = estilo3;
                    $(".contenedor-cards > div").removeClass().addClass("card card-3");
                    $(".formulario-viaje > button").removeClass().addClass("btn btn-dark estilo-3 float-right");
                    $(" .input-group-prepend > span").removeClass().addClass("input-group-text  estilo-3  text-white");
                    $(".dropdown > button").removeClass().addClass("btn btn-dark  estilo-3 dropdown-toggle");
                    break;
                case 4:
                    nuevoEstilo = estilo4;
                    $(".contenedor-cards > div").removeClass().addClass("card card-4");
                    $(".formulario-viaje > button").removeClass().addClass("btn btn-secondary estilo-4 float-right");
                    $(".input-group-prepend > span").removeClass().addClass("input-group-text  estilo-4 text-white");
                    $(".dropdown > button").removeClass().addClass("btn btn-secondary estilo-4 dropdown-toggle");
                    break;
            }
            return nuevoEstilo;
        }

        $(".grupo-botones > a").click(function () {
            let opcion = $(this).data("opcion");
            map.set("styles", establecerTema(opcion));
        });

        Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    cargarMapa(estilo2);
                    calculateAndDisplayRoute(directionsService, directionsRenderer);
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();