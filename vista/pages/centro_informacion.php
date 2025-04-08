<head>
    
    <title>UTL | Centro de Información </title>
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
        
            <div id="appCentroInfo" class="main-content">
                <v-app>
                    <v-main >
                        <v-container class="py-8">

                            <v-parallax :src="imgCentroInfo"  height="500">
                                <v-row align="center" justify="center" class="hero-overlay">
                                    <v-col cols="12" class="text-center">
                                        <h1 class="text-h2 font-weight-bold white--text mb-4">Centro de Información</h1>
                                        <v-btn x-large color="primary" class="mt-4" href="#servicios" style="scroll-behavior: smooth;">
                                            <v-icon left>mdi-information</v-icon>
                                            Conoce nuestros servicios
                                        </v-btn>
                                    </v-col>
                                </v-row>
                            </v-parallax>

                            <!-- Description Section -->
                        <!-- <v-container class="py-8"> -->
                            <v-row justify="center" class="my-8 ">
                                <v-col cols="12" md="10" lg="10">
                                    <p class="text-h5 text-center">
                                    Es el área donde la comunidad académica encontrará los recursos de información 
                                    en diferentes formatos (libros, revistas, CD, DVD, etc.) que apoyan los planes 
                                    de estudio de cada programa educativo.
                                    </p>
                                </v-col>
                            </v-row>

                            
                            <v-row justify="center" class="mb-8">
                                <v-col cols="12" class="text-center">
                                    <h2 class="text-h3 secondary--text mb-6">¿Qué hacemos?</h2>
                                    <v-divider class="mx-auto primary" width="150" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                                </v-col>
                            </v-row>

                            <v-row justify="center" class="mb-2">
                                <v-col cols="12" md="8" lg="6" class="text-center">
                                    <v-btn x-large color="primary" class="px-8" block>
                                        <v-icon left>mdi-open-in-new</v-icon>
                                        Acceso al micrositio del Centro de Información
                                    </v-btn>
                                </v-col>
                            </v-row>

                                
                            <v-row justify="center" class="mb-8">
                                <v-col cols="12" md="6" id="servicios">
                                    <v-card class="pa-4 " height="100%">
                                        <v-card-title class="text-h5 secondary--text mb-2">
                                            <v-icon large color="secondary" class="mr-3">mdi-bookshelf</v-icon>
                                            Servicios
                                        </v-card-title>
                                        <v-card-text>
                                            <v-list>
                                            <v-list-item v-for="(servicio, index) in servicios" :key="index">
                                                <v-list-item-icon>
                                                <v-icon color="primary">mdi-check-circle</v-icon>
                                                </v-list-item-icon>
                                                <v-list-item-content>
                                                <v-list-item-title class="text-h6">{{ servicio }}</v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                            </v-list>
                                        </v-card-text>
                                    </v-card>
                                </v-col>

                                <v-col cols="12" md="6">
                                    <v-card class="pa-6 info-card" height="100%">
                                        <v-card-title class="text-h5 secondary--text mb-2">
                                            <v-icon large color="secondary" class="mr-3">mdi-clock</v-icon>
                                            Horario y Contacto
                                        </v-card-title>
                                        <v-card-text>
                                            <v-list>
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-calendar</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="text-h6">Horario:</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                            7:00 a 21:30 de Lunes a Viernes<br>
                                                            8:00 a 13:00 los Sábados
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-account</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title class="text-h6">Contacto:</v-list-item-title>
                                                        <v-list-item-subtitle>
                                                            <strong>Maria Anel Romero Torres</strong><br>
                                                            Jefa del Departamento de Centro de Información
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-phone</v-icon>
                                                    </v-list-item-icon>
                                                        <v-list-item-content>
                                                        <v-list-item-subtitle>
                                                            477 710020 Ext. 231
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-email</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-subtitle>
                                                            <a href="mailto:aromero@utleon.edu.mx">
                                                                aromero@utleon.edu.mx
                                                            </a>
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                            </v-list-item>
                                            </v-list>
                                        </v-card-text>
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
        el: '#appCentroInfo',
        vuetify: new Vuetify(),
        data: () => ({
            imgCentroInfo: 'https://www.utleon.edu.mx/resource/img/imagenes/docente/3.4%20Desarrollo%20Integral%20Docente%20(3).jpg',
            servicios: [
                'Préstamos a domicilio',
                'Consulta en sala',
                'Cubículos de estudio',
                'Laboratorio de internet',
                'Hemeroteca',
                'Videoteca',
                'Reserva de materiales',
                'Biblioteca Digital'
            ],

        })
    })

</script>