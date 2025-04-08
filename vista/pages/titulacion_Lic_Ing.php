<head>
    <title>UTL | Titulación Licenciatura/Ingeniería</title>
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
        
            <div id="appTitulacionLicIng" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    

                            <v-row class="mb-4">
                                <v-col cols="12">
                                    <h1 class="text-center procesos-title">
                                        <span class="primary--text">Titulación Licenciatura</span> e Ingeniería
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-col cols="12" md="12" width="100%"> 
                                <v-card elevation="3">
                                    <v-card-title class="primary white--text">
                                        Proceso de Titulación Licenciatura e Ingeniería
                                    </v-card-title>
                                    <v-card-text width="100%" >
                                        <iframe 
                                        src=" https://view.genially.com/67b5f7be6632f19b51062493" 
                                        width="100%" 
                                        height="500px" 
                                        style="border: none;"
                                        title="Guía para el proceso de titulación TSU"
                                        loading="lazy"
                                        ></iframe>
                                    </v-card-text>
                                
                                </v-card>
                            </v-col>

                                <v-row class="mt-4">
                                    <v-col cols="12">
                                        <h1 class="text-center procesos-title">
                                            <span class="secondary--text">Ven por tu título </span>
                                        </h1>
                                        <v-divider class="my-4 primary" style="max-width: 300PX; margin: 0 auto;"></v-divider>
                                    </v-col>
                                </v-row> 

                                <v-row justify="center" class="mb-6">
                                    <v-col cols="12" md="8" class="d-flex justify-center">
                                        <v-card class="pa-6 elevation-3">
                                        <h3 class="text-h6 mb-4 primary--text text-center">Consulta tus resultados</h3>
                                        <v-row align="center">
                                            <v-col cols="12" md="6">
                                                <v-text-field
                                                    label="Ingresa tu matrícula"
                                                    outlined
                                                    dense
                                                    maxlength="8"
                                                    counter
                                                    hide-details
                                                    
                                                ></v-text-field>
                                            </v-col>
                                            <v-col cols="12" md="6">
                                                <v-btn 
                                                    color="primary" 
                                                    large
                                                    depressed
                                                >
                                                    <v-icon left>mdi-magnify</v-icon>
                                                    Consultar resultados
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                        </v-card>
                                    </v-col>
                                </v-row>

                                <!--Encuesta -->
                                <v-row class="mb-6" align="center">
                                    
                                    <v-col cols="12" md="12">
                                        <h1 class="text-center procesos-title">
                                            <span class="secondary--text">Encuesta</span>
                                        </h1>
                                        <v-divider class="my-2 primary" style="max-width: 300PX; margin: 0 auto;"></v-divider>
                                    </v-col>

                                    <v-col cols="12" md="12">
                                        <v-card class="pa-3 elevation-3">
                                            <p class="pl-4 text-body-1">Si el trámite ha sido finalizado, en el momento en que te entreguen tus documentos en 
                                                Servicios Escolares deberás contestar la encuesta de satisfacción.</p>
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
        el: '#appTitulacionLicIng',
        vuetify: new Vuetify(),
        data: () => ({
            
        }),
    })
</script>

<li><a href="#empresario">EMPRESARIO</a>
        <!-- SUBMENU ================================================== -->
        <ul class="submenu">
            <li><a href="registro-de-estadias">Registro de Estadias</a></li>
            <li><a href="registro-de-vacantes">Registro de Vacantes</a></li>
            <li><a href="capacitacion-y-certificacion">Capacitación y Certificación</a></li>
            <!-- <li><a href="centro-de-idiomas">Centro de Idiomas</a></li> -->
            <!-- <li><a href="public_html/micrositios/oferta-educativa/cursos/cursos_2015.pdf" target="_blank">Cursos 2015</a></li> -->
            <li><a href="desarrollo-de-software">Desarrollo de Software</a></li>
            <li><a href="proyectos-tecnologicos">Proyectos Tecnológicos</a></li>
            <li><a href="relaciones-con-la-industria">Relaciones con la Industria</a></li>
        </ul>
    </li>