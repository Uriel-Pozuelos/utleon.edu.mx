<head>
    <title>UTL | Ubicación</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appUbicacion" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>    
                        <!-- Título principal -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h1 class="text-h3 text-center">
                                    <span class="primary--text">Ubicación</span> de los Campus
                                </h1>
                                <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                            </v-col>
                        </v-row>

                        <v-row justify="center" class="mb-2">
                            <v-col cols="12" class="text-center">
                                <h2 class="text-h3 secondary--text mb-4">Campus Central</h2>
                                <v-divider class="mx-auto primary" width="300" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                            </v-col>
                        </v-row>

                        <v-row class="mb-10" align="center">
                            <v-col cols="12" md="2" >
                                <v-card flat class="pa-4 mb-4" style="border-left: 4px solid rgb(82, 74, 163); background-color: #f3f1fc;" height="100%">
                                    <p class="body-1 mb-4">
                                        <v-icon color="primary" left>mdi-map-marker</v-icon>
                                        La Universidad Tecnológica de León se ubica al sureste de la ciudad de León, Guanajuato, a un costado del Hospital Regional de Alta Especialidad del Bajío, a la altura del Puente del Milenio.
                                    </p>
                                </v-card>
                            </v-col>
                            
                            <v-col cols="12" md="10" class="text-center">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/1.2.JPG"
                                    aspect-ratio="1.5"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px; max-height: 400px;"
                                    alt="Vista del campus universitario"
                                ></v-img>
                            </v-col>
                        </v-row>

                        <!-- Sección de mapa -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h2 class="text-h4 mb-4 secondary--text ">
                                    <v-icon left color="secondary">mdi-map</v-icon>
                                    ¿Cómo llegar?
                                </h2>
                                <v-divider class="mb-4 secondary" style="border-width: 2px;"></v-divider>
                                
                                <v-card class="elevation-3 pa-2">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14892.76321961692!2d-101.58166455!3d21.065040149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b963652f40f0d%3A0xa7d88da0ad8eff8a!2sUniversidad%20Tecnol%C3%B3gica%20de%20Le%C3%B3n!5e0!3m2!1ses-419!2smx!4v1651591395502!5m2!1ses-419!2smx" 
                                        width="100%" 
                                        height="400" 
                                        style="border:0;" 
                                        allowfullscreen 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Mapa de ubicación de la Universidad Tecnológica de León"
                                    ></iframe>
                                </v-card>
                            </v-col>
                        </v-row>

                        <v-row justify="center" class="mb-4">
                            <v-col cols="12" class="text-center">
                                <h2 class="text-h3 secondary--text mb-4">Campus II</h2>
                                <v-divider class="mx-auto primary" width="150" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                            </v-col>
                        </v-row>

                    
                        <v-row class="mb-10" align="center">
                            <v-col cols="12" md="2">
                                <v-card flat class="pa-4 mb-4" style="border-left: 4px solid rgb(82, 74, 163); background-color: #f3f1fc;">
                                    <p class="body-1 mb-4">
                                        <v-icon color="primary" left>mdi-map-marker</v-icon>
                                        La Universidad Tecnológica de León campus II se ubica al sureste de la ciudad de León, Guanajuato, ingresando por el fraccionamiento Jardines de Versalles.
                                    </p>
                                </v-card>
                            </v-col>
                            
                            <v-col cols="12" md="10" class="text-center">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/Campus%20II%20opk.jpg"
                                    aspect-ratio="1.5"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px; max-height: 400px;"
                                    alt="Vista del campus universitario II"
                                ></v-img>
                            </v-col>
                        </v-row>

                        <!-- Sección de mapa -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h2 class="text-h4 mb-4 secondary--text ">
                                    <v-icon left color="secondary ">mdi-map</v-icon>
                                    ¿Cómo llegar?
                                </h2>
                                <v-divider class="mb-4 secondary" style="border-width: 2px;"></v-divider>
                                
                                <v-card class="elevation-3 pa-2">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4427.500424414372!2d-101.57605742203658!3d21.069896779806143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b962c40501be9%3A0x6f8a0c54cf13cf56!2sUniversidad%20Tecnol%C3%B3gica%20de%20Le%C3%B3n%20Campus%20II!5e0!3m2!1ses-419!2smx!4v1652122525705!5m2!1ses-419!2smx" 
                                        width="100%" 
                                        height="400" 
                                        style="border:0;" 
                                        allowfullscreen 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Mapa de ubicación de la Universidad Tecnológica de León Campus II"
                                    ></iframe>
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

<script>
    new Vue({
        el: '#appUbicacion',
        vuetify: new Vuetify(),
        data: () => ({
            
        })
    })
</script>
