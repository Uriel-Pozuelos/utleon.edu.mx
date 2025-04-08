<head>
    
    <title>UTL | Salud Integral </title>
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
        
            <div id="appSaludIntegral" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>
                        
                            <v-parallax :src="imgSaludIntegral" style="background-position: bottom !important; background-position-y: bottom !important;" height="450">
                                <v-row align="center" justify="center" class="hero-overlay">
                                    <v-col cols="12" class="text-center">
                                        <h1 class="text-h2 font-weight-bold white--text mb-4">Salud Integral</h1>
                                        <v-btn x-large color="primary" class="mt-4" href="#servicios" style="scroll-behavior: smooth;">
                                            <v-icon left>mdi-information</v-icon>
                                            Conoce nuestros servicios
                                        </v-btn>
                                    </v-col>
                                </v-row>
                            </v-parallax>

                            <!-- Services Section -->
                            <v-container class="py-8">
                                <v-row justify="center" class="mb-4">
                                    <v-col cols="12" class="text-center">
                                        <h2 class="text-h3 secondary--text mb-4">Nuestros Servicios</h2>
                                        <v-divider class="mx-auto primary" width="150" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                                    </v-col>
                                </v-row>

                                <v-row justify="center" class="mb-4">
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
                            </v-container>

                            <v-row justify="center">
                                <v-col cols="12" md="10" lg="11">
                                    <v-card class="pa-4 contact-card">
                                        <h3 class="text-h5 mb-4 primary--text">Contáctanos</h3>
                                        
                                        <v-row class="mb-4 justify-center">
                                            <v-img :src="imgExamenMedico" height="200"></v-img>

                                            <v-col cols="12" md="12" lg="10">
                                                <v-card  class="pa-4">
                                                    <div class="d-flex align-center mb-2">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-doctor</v-icon>
                                                            <span class="font-weight-bold">Dr. Martín Gustavo Murillo Almaguer:</span>           
                                                        </v-col>
                                                        <v-col>
                                                            Jefe De Departamento de Salud Integral
                                                        </v-col>
                                                        
                                                        
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-mother-nurse</v-icon>
                                                            <span class="font-weight-bold">Enfermeras turno matutino:</span> 
                                                        </v-col>
                                                        <v-col>
                                                            Valeria Abigail Ramírez Amaro (Campus Central) y Paola Guerrero Serna (Campus II)
                                                        </v-col>
                                                    </div>
                                                    <div class="d-flex align-center mb-2">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-doctor</v-icon>
                                                            <span class="font-weight-bold">Enfermero/a turno vespertino: </span>
                                                        </v-col>
                                                        <v-col>
                                                            Mónica Regina Guerrero Gómez (Campus Central) y Arturo Medina Torres (Campus II)
                                                        </v-col>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-brain</v-icon>
                                                            <span class="font-weight-bold">Psicólogo Laboral UTL:</span>
                                                        </v-col>
                                                        <v-col>
                                                            César Mariano González Barrera
                                                        </v-col>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-clock</v-icon>
                                                            <span class="font-weight-bold">Horario: </span>
                                                        </v-col>
                                                        <v-col>
                                                            lunes a viernes de 7:00 a 21:00 hrs (Campus Central), 7:00 a 20:30 hrs (Campus II). Y sábado de 08:00 a 13:00 hrs.
                                                        </v-col>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-map-marker</v-icon>
                                                            <span class="font-weight-bold">Ubicación: </span>
                                                        </v-col>
                                                        <v-col>
                                                            Edificio CVD Planta Baja
                                                        </v-col>
                                                    </div>
                                                    <div class="d-flex align-center">
                                                        <v-col>
                                                            <v-icon class="mr-2">mdi-phone</v-icon>
                                                            <span class="font-weight-bold">Teléfono: </span>
                                                        </v-col>
                                                        <v-col>
                                                            325 (Campus Central) y 175 (Campus II)
                                                        </v-col>
                                                    </div>
                                                    
                                                </v-card>
                                            </v-col>
                                        </v-row>
                                    
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
        el: '#appSaludIntegral',
        vuetify: new Vuetify(),
        data: () => ({
            imgSaludIntegral: 'https://www.utleon.edu.mx/resource/img/imagenes/2.4.2%20Servicio%20de%20Salud%20Integral%201.JPG',
            imgExamenMedico: 'https://www.utleon.edu.mx/resource/img/imagenes/2.4.2%20Servicio%20de%20Salud%20Integral%202.jpg',
            services: [
                {
                    icon: 'mdi-Stethoscope',
                    title: 'Examen Médico',
                    description: 'Evaluación del estado de salud del alumnado de nuevo ingreso.'
                },
                {
                    icon: 'mdi-hospital-box',
                    title: 'Atención Médica',
                    description: 'Urgencias y canalización.'
                },
                {
                    icon: 'mdi-medical-bag',
                    title: 'Orientación Médica Preventiva',
                    description: 'Campañas, pláticas y talleres de temas de salud.'
                },
                {
                    icon: 'mdi-heart-pulse',
                    title: 'Apoyo en Eventos Especiales',
                    description: 'Torneos deportivos, jornadas, congresos entre otros'
                },


            ],
        })
    })
</script>