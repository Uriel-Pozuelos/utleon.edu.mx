<head>
    
    <title>UTL | Servicio de Atención Psicopedagógica SAP </title>
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
        
            <div id="appAtencionPsico" class="main-content">
                <v-app>
                    <v-main >
                        <v-container class="py-8">

                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Servicio de Atención </span> Psicopedagógica SAP
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            
                            <v-row justify="center" class="mb-8">
                                <v-col cols="12" md="10" lg="11">
                                    <v-row>
                                        <v-col cols="12" sm="6" md="3" v-for="(service, index) in services" :key="index">
                                            <v-card height="100%" hover class="service-card">
                                                <v-card-text class="text-center">
                                                    <v-icon large color="primary" class="mb-3">{{ service.icon }}</v-icon>
                                                    <h3 class="text-h6 mb-3">{{ service.title }}</h3>
                                                    <p class="body-2">{{ service.description }}</p>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-col>
                            </v-row>

                            
                            <v-row justify="center" class="mb-6">
                                <v-col cols="12" md="10" lg="11">
                                    <v-card class="pa-4 info-card">
                                        <h3 class="text-h5 mb-4" style="color:#1A237E">Motivos de orientación</h3>
                                        <v-chip-group column>
                                            <v-chip v-for="(razon, i) in razones" :key="i" color="primary" outlined>
                                                {{ razon }}
                                            </v-chip>
                                        </v-chip-group>
                                        
                                        <v-alert type="info" style="background-color: #1A237E !important;" class="mt-6">
                                            El servicio es de <strong>alcance orientativo e intervención en crisis</strong>. 
                                            Si el estudiante requiere tratamiento psicológico, médico o nutricional, 
                                            se canalizará a instancias externas adecuadas.
                                        </v-alert>
                                    </v-card>
                                </v-col>
                            </v-row>

                            <!--Contacto -->
                            <v-row justify="center">
                                <v-col cols="12" md="10" lg="11">
                                    <v-card class="pa-4 contact-card">
                                        <h3 class="text-h5 mb-4 primary--text">Cómo solicitar orientación</h3>
                                        <p class="body-1 mb-4">
                                            Puedes solicitar orientación individual a través del módulo SAP en SITO o con tu tutor/a.
                                        </p>
                                        
                                        <v-row class="mb-4">
                                            <v-col cols="12" md="6">
                                                <v-card  class="pa-4" height="100%">
                                                    <h4 class="text-subtitle-1 font-weight-bold mb-2">Horario de atención:</h4>
                                                    <ul class="pl-4">
                                                        <li>Lunes a viernes: 8:00 - 13:00 y 16:00 - 20:00 horas</li>
                                                        <li>Sábados: 9:00 - 13:00 horas</li>
                                                    </ul>
                                                </v-card>
                                            </v-col>
                                            <v-col cols="12" md="6">
                                                <v-card  class="pa-4">
                                                    <h4 class="text-subtitle-1 font-weight-bold mb-2">Contacto:</h4>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-account</v-icon>
                                                        <span>Mtra. Gabriela Martínez García</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-phone</v-icon>
                                                        <span>Ext. 302</span>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-icon small class="mr-2">mdi-map-marker</v-icon>
                                                        <span>Edificio CVD, planta alta</span>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-icon small class="mr-2">mdi-email</v-icon>
                                                        <a heref="mailto:rmartinezg@utleon.edu.mx">rmartinezg@utleon.edu.mx</a>
                                                    </div>
                                                    
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                        
                                        <a href="https://sito.utleon.edu.mx/" target="_blank" rel="noopener noreferrer" class="white--text text-decoration-none" style="">
                                            <v-btn color="primary" large block class="mt-2" >
                                                <v-icon left>mdi-calendar</v-icon>
                                                Solicitar cita
                                            </v-btn>
                                        </a>
                                    </v-card>
                                </v-col>
                            </v-row>

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appAtencionPsico',
        vuetify: new Vuetify(),
        data: () => ({
            
            services: [
                {
                    icon: 'mdi-bullhorn',
                    title: 'Difundir información preventiva',
                    description: 'Que aliente en los participantes la búsqueda de soluciones a problemáticas específicas.'
                },
                {
                    icon: 'mdi-hand-heart',
                    title: 'Intervenciones psicológicas breves',
                    description: 'Que faciliten el afrontamiento de malestares o riesgos leves.'
                },
                {
                    icon: 'mdi-account-switch',
                    title: 'Derivar y dar seguimiento',
                    description: 'A los casos de riesgo que requieren atención de instituciones especializadas.'
                },
                {
                    icon: 'mdi-chart-line',
                    title: 'Aportar información',
                    description: 'A las áreas académicas para la mejora continua de sus procesos.'
                }
            ],
            razones: [
                'Desorientación vocacional',
                'Riesgo de deserción escolar',
                'Dificultades en el estado de ánimo',
                'Trastornos emocionales',
                'Problemas familiares',
                'Problemas personales',
                'Problemas escolares',
                'Proyecto de vida'
            ]
        }),

    })

</script>