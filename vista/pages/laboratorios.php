<head>
    
    <title>UTL | Laboratorios Especializados </title>
</head>
<body class="app-container main-pages " style="scroll-behavior: smooth;" data-app="true">
        
        <?php 
            include_once("vista/headerUriel.php") 
        ?>
        <div 
            class="content-wrapper" >
            
            <?php
                include_once("vista/sideBar.php")
                
            ?>
        
            <div id="appLabs" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    
                            
                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Laboratorios</span> Especializados
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-row justify="center" class="mb-4">
                                <v-col cols="12" md="10" lg="12" >
                                    <v-img :src="imgLabs" height="400" width="100%" style="border-radius: 8px;"  ></v-img>
                                </v-col>
                            </v-row>
                
                            <!-- Tabs con v-model -->
                            <v-tabs v-model="tab" centered grow>
                                <v-tab href="#ti">Tecnologías de la Información</v-tab>
                                <v-tab href="#economica">Económico Administrativa</v-tab>
                                <v-tab href="#electromecanica">Electromecánica Industrial</v-tab>
                                <v-tab href="#sustentabilidad">Sustentabilidad y Desarrollo</v-tab>
                            </v-tabs>

                            <!-- Tabs items con el MISMO v-model -->
                    <v-tabs-items v-model="tab">
                        <!-- Tecnologías de la Información -->
                        <v-tab-item value="ti">
                            <v-container class="pa-0">
                                <h2 class="text-h4 primary--text mb-3">Tecnologías de la Información</h2>
                                
                                <v-expansion-panels accordion>
                                    <v-expansion-panel v-for="(lab, index) in laboratoriosTI" :key="index" class="compact-panel">
                                        <v-expansion-panel-header class="panel-title">
                                            {{ lab.nombre }}
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <p class="mb-4">{{ lab.descripcion }}</p>
                                            
                                            <div class="info-item">
                                                <v-icon small>mdi-clock</v-icon>
                                                <span>{{ lab.horario }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-map-marker</v-icon>
                                                <span>{{ lab.ubicacion }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-phone</v-icon>
                                                <span>Ext. {{ lab.extension }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-account</v-icon>
                                                <span>{{ lab.encargado }}</span>
                                            </div>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-expansion-panels>
                            </v-container>
                        </v-tab-item>

                        <!-- Económico Administrativa -->
                        <v-tab-item value="economica">
                            <v-container class="pa-0">
                                <h2 class="text-h4 primary--text mb-3">Económico Administrativa</h2>
                                
                                <v-expansion-panels accordion>
                                    <v-expansion-panel v-for="(lab, index) in laboratoriosEconomica" :key="index" class="compact-panel">
                                        <v-expansion-panel-header class="panel-title">
                                            {{ lab.nombre }}
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <p class="mb-4">{{ lab.descripcion }}</p>
                                            
                                            <div class="info-item">
                                                <v-icon small>mdi-clock</v-icon>
                                                <span>{{ lab.horario }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-map-marker</v-icon>
                                                <span>{{ lab.ubicacion }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-phone</v-icon>
                                                <span>Ext. {{ lab.extension }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-account</v-icon>
                                                <span>{{ lab.encargado }}</span>
                                            </div>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-expansion-panels>

                                <!-- Laboratorios extras -->
                                <v-alert color="grey lighten-5" class="mt-4">
                                    <h3 class="text-h6 mb-2">ADEMÁS CONTAMOS CON:</h3>
                                    <div>
                                        <v-chip v-for="(extra, i) in extrasEconomica" :key="i" color="secondary" text-color="white" small class="mr-2 mb-2">
                                            {{ extra }}
                                        </v-chip>
                                    </div>
                                </v-alert>

                            </v-container>
                        </v-tab-item>

                        <!-- Laboratorios electromecanica -->
                        <v-tab-item value="electromecanica">
                            <v-container class="pa-0">
                                <h2 class="text-h4 primary--text mb-3">Electromecánica Industrial</h2>
                                
                                <v-expansion-panels accordion>
                                    <v-expansion-panel v-for="(lab, index) in laboratoriosElectromecanica" :key="index" class="compact-panel">
                                        <v-expansion-panel-header class="panel-title">
                                            {{ lab.nombre }}
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <p class="mb-4">{{ lab.descripcion }}</p>
                                            
                                            <div class="info-item">
                                                <v-icon small>mdi-clock</v-icon>
                                                <span>{{ lab.horario }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-map-marker</v-icon>
                                                <span>{{ lab.ubicacion }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-phone</v-icon>
                                                <span>Ext. {{ lab.extension }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-account</v-icon>
                                                <span>{{ lab.encargado }}</span>
                                            </div>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-expansion-panels>

                                <!-- Laboratorios extras -->
                                <v-alert color="grey lighten-5" class="mt-4">
                                    <h3 class="text-h6 mb-2">ADEMÁS CONTAMOS CON:</h3>
                                    <div>
                                        <v-chip v-for="(extra, i) in extrasElectromecanica" :key="i" color="secondary" text-color="white" small class="mr-2 mb-2">
                                            {{ extra }}
                                        </v-chip>
                                    </div>
                                </v-alert>

                            </v-container>
                        </v-tab-item>

                        <!-- Laboratorios de sustentabilidad -->
                        <v-tab-item value="sustentabilidad">
                            <v-container class="pa-0">
                                <h2 class="text-h4 primary--text mb-3">Sustentabilidad para el Desarrollo</h2>
                                
                                <v-expansion-panels accordion>
                                    <v-expansion-panel v-for="(lab, index) in laboratoriosSustentabilidad" :key="index" class="compact-panel">
                                        <v-expansion-panel-header class="panel-title">
                                            {{ lab.nombre }}
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <p class="mb-4">{{ lab.descripcion }}</p>
                                            
                                            <div class="info-item">
                                                <v-icon small>mdi-clock</v-icon>
                                                <span>{{ lab.horario }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-map-marker</v-icon>
                                                <span>{{ lab.ubicacion }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-phone</v-icon>
                                                <span>Ext. {{ lab.extension }}</span>
                                            </div>
                                            <div class="info-item">
                                                <v-icon small>mdi-account</v-icon>
                                                <span>{{ lab.encargado }}</span>
                                            </div>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-expansion-panels>

                                <!-- Laboratorios extras -->
                                <v-alert color="grey lighten-5" class="mt-4">
                                    <h3 class="text-h6 mb-2">ADEMÁS CONTAMOS CON:</h3>
                                    <div>
                                        <v-chip v-for="(extra, i) in extrasSustentabilidad" :key="i" color="secondary" text-color="white" small class="mr-2 mb-2">
                                            {{ extra }}
                                        </v-chip>
                                    </div>
                                </v-alert>

                            </v-container>
                        </v-tab-item>

                        <!-- Otras áreas pueden agregarse aquí -->
                    </v-tabs-items>
                                

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appLabs',
        vuetify: new Vuetify(),
        data: () => ({
            imgLabs: 'https://www.utleon.edu.mx/resource/img/imagenes/laboratorios/b485bc9c-214d-4b97-9031-f03a6c1cb0ed.jpg',
            tab: null,  
                laboratoriosTI: [
                    {
                        nombre: "Laboratorio RFID",
                        descripcion: "El Laboratorio de Dispositivos móviles y RFID tiene como objetivo la formación del estudiantado en las áreas de análisis, diseño y desarrollo de proyectos sobre aplicaciones para dispositivos móviles y RFID.",
                        horario: "Lunes a Viernes 7:00 - 21:20 hrs. y sábado 8:00 - 13:00 hrs",
                        extension: "439",
                        ubicacion: "Edificio D Planta Alta",
                        encargado: "Sandra Leticia Nava Almanza - Matutino / Alma de Jesús Ortiz García - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Redes",
                        descripcion: "Laboratorio equipado para prácticas de configuración de redes y comunicaciones.",
                        horario: "Lunes a Viernes 7:00 - 21:20 hrs. y sábado 8:00 - 13:00 hrs",
                        extension: "440",
                        ubicacion: "Edificio D Planta Alta",
                        encargado: "Juan Pérez - Matutino / María López - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Programación",
                        descripcion: "Laboratorio equipado para el desarrollo de software y programación avanzada.",
                        horario: "Lunes a Viernes 7:00 - 21:20 hrs. y sábado 8:00 - 13:00 hrs",
                        extension: "441",
                        ubicacion: "Edificio D Planta Alta",
                        encargado: "Laura Martínez - Matutino / Pedro Sánchez - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Diseño Gráfico",
                        descripcion: "Laboratorio especializado en diseño gráfico y multimedia.",
                        horario: "Lunes a Viernes 7:00 - 21:20 hrs. y sábado 8:00 - 13:00 hrs",
                        extension: "442",
                        ubicacion: "Edificio D Planta Alta",
                        encargado: "Ana Torres - Matutino / Luis Hernández - Vespertino"
                    }
                ],
                laboratoriosEconomica: [
                    {
                        nombre: "Laboratorio de Finanzas",
                        descripcion: "Laboratorio especializado en simulación financiera y análisis de mercados.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "235",
                        ubicacion: "Edificio A Planta Baja",
                        encargado: "Carlos Martínez - Matutino / Ana García - Vespertino"
                    }, 
                    {
                        nombre: "Laboratorio de Contabilidad",
                        descripcion: "Laboratorio equipado para prácticas contables y auditorías.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "236",
                        ubicacion: "Edificio A Planta Baja",
                        encargado: "María López - Matutino / Juan Pérez - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Mercadotecnia",
                        descripcion: "Laboratorio especializado en investigación de mercados y análisis de datos.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "237",
                        ubicacion: "Edificio A Planta Baja",
                        encargado: "Laura Martínez - Matutino / Pedro Sánchez - Vespertino"
                    }
                ],
                extrasEconomica: [
                    "Laboratorio de Aula Virtual",
                    "Taller de serigrafía (CCC)",
                    "Laboratorio de Alimentos y Bebidas",
                ],

                laboratoriosElectromecanica: [
                    {
                        nombre: "Laboratorio de Máquinas Eléctricas",
                        descripcion: "Laboratorio especializado en el estudio y análisis de máquinas eléctricas.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "238",
                        ubicacion: "Edificio B Planta Baja",
                        encargado: "José Ramírez - Matutino / Ana Torres - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Automatización",
                        descripcion: "Laboratorio equipado para prácticas de automatización industrial.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "239",
                        ubicacion: "Edificio B Planta Baja",
                        encargado: "Luis Hernández - Matutino / María López - Vespertino"
                    },
                ],

                extrasElectromecanica: [
                    "Laboratorio de Mantenimiento Industrial",
                    "Taller de Refrigeración y Aire Acondicionado",
                ],

                laboratoriosSustentabilidad: [
                    {
                        nombre: "Laboratorio de Energías Renovables",
                        descripcion: "Laboratorio especializado en energías renovables y sostenibilidad.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "240",
                        ubicacion: "Edificio C Planta Baja",
                        encargado: "Ana García - Matutino / Carlos Martínez - Vespertino"
                    },
                    {
                        nombre: "Laboratorio de Biotecnología",
                        descripcion: "Laboratorio equipado para prácticas de biotecnología y medio ambiente.",
                        horario: "Lunes a Viernes 8:00 - 20:00 hrs",
                        extension: "241",
                        ubicacion: "Edificio C Planta Baja",
                        encargado: "Pedro Sánchez - Matutino / Laura Martínez - Vespertino"
                    }
                ],

                extrasSustentabilidad: [
                    "Laboratorio de Química Ambiental",
                    "Taller de Energías Alternativas",
                ]

        })
    });
</script>