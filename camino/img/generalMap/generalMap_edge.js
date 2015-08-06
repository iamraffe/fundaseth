/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "both",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'generalMap',
                            type: 'image',
                            rect: ['-7px', '-4px', '594px', '256px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"generalMap.svg",'0px','0px']
                        },
                        {
                            id: 'santi',
                            type: 'image',
                            rect: ['21px', '98px', '26px', '26px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"Pasted.svg",'0px','0px']
                        },
                        {
                            id: 'pedro',
                            type: 'image',
                            rect: ['120px', '75px', '16px', '16px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"Pasted2.svg",'0px','0px']
                        },
                        {
                            id: 'arzua',
                            type: 'image',
                            rect: ['216px', '60px', '16px', '16px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"arzua.svg",'0px','0px']
                        },
                        {
                            id: 'palas',
                            type: 'image',
                            rect: ['341px', '116px', '16px', '16px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"palas.svg",'0px','0px']
                        },
                        {
                            id: 'porto',
                            type: 'image',
                            rect: ['446px', '155px', '16px', '16px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"porto.svg",'0px','0px']
                        },
                        {
                            id: 'sarria',
                            type: 'image',
                            rect: ['541px', '167px', '16px', '16px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"sarria.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '581px', '250px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 0,
                    autoPlay: false,
                    data: [

                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("generalMap_edgeActions.js");
})("mapadelcamino");
