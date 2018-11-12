/*
 Template Name: Canvab - Bootstrap 4 Admin Dashboard & Frontend
 Author: Themesbrand
 File: Vector Maps Init
 */

!function ($) {
    "use strict";

    var VectorMap = function () {
    };

    VectorMap.prototype.init = function () {
        //various examples
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            scaleColors: ['#4ac18e', '#4ac18e'],
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            regionStyle: {
                initial: {
                    fill: '#e8e8e8'
                }
            },
            markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#6d60b0',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width': 7,
                    'stroke-opacity': 0.4
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
            backgroundColor: 'transparent',
            markers: [{
                latLng: [51.05, 13.73],
                name: '20/11/18: Opera house Dresden'
            }, {
                latLng: [32.16, 34.81],
                name: '24/11/18: Zappa Herzliya'
            }, {
                latLng: [-33.85, 151.21],
                name: '27/11/18: Sydney Opera House'
            }, {
                latLng: [40.78, -73.97],
                name: '30/11/18: Beacon Theatre - New York'
            }, {
                latLng: [34.05, -118.24],
                name: '04/12/18: Walt Disney Concert Hall'
            }, {
                latLng: [40.38, -3.73],
                name: '08/12/18: Palacio Vistalegre Arena - Madrid'
            }, ]
        });

        $('#usa').vectorMap({
            map: 'us_aea_en',
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: '#4ac18e'
                }
            }
        });

        $('#uk').vectorMap({
            map: 'uk_mill_en', backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: '#eb7475'
                }
            }
        });

        $('#chicago').vectorMap({
            map: 'us-il-chicago_mill_en', backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: '#1d1e3a'
                }
            }
        });

    },
        //init
        $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
}(window.jQuery),

//initializing 
    function ($) {
        "use strict";
        $.VectorMap.init()
    }(window.jQuery);
