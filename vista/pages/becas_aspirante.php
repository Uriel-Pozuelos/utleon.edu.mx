<head>
    <title>UTL | Becas Aspirantes</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appBecasAspirante" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>    
                        <!-- Título principal -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h1 class="text-h3 text-center">
                                    <span class="primary--text">Becas</span> Aspirantes
                                </h1>
                                <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                            </v-col>
                        </v-row>

                        <!-- Sección informativa -->
                        <v-row class="mb-10" align="center">
                            <v-col cols="12" md="7">
                                <v-card flat class="pa-4 mb-4" style="border-left: 4px solid #1976D2; background-color: #f5f9ff;">
                                    <p class="body-1 font-weight-medium mb-3">
                                        <v-icon color="primary" left>mdi-school</v-icon>
                                        La Universidad Tecnológica de León cuenta con un sistema de Becas Internas y Externas
                                    </p>
                                    <p class="body-1">
                                        Nuestro objetivo es brindar apoyo económico para que puedas continuar con tu preparación académica sin que los factores económicos sean una limitante.
                                    </p>
                                </v-card>
                                <v-alert
                                    border="left"
                                    colored-border
                                    color="success"
                                    elevation="0"
                                >
                                    <strong>¡No dejes que lo económico detenga tus sueños!</strong> Explora las opciones de beca disponibles para ti.
                                </v-alert>
                            </v-col>
                            
                            <v-col cols="12" md="5" class="text-center">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/2.3.1%20Becas.jpg"
                                    aspect-ratio="1.5"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px;"
                                    alt="Estudiantes beneficiados con becas"
                                ></v-img>
                            </v-col>
                        </v-row>

                        <!-- Contenido interactivo -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <v-card class="elevation-3">
                                    <v-card-title class="primary white--text">
                                        
                                        Conoce todo sobre nuestras becas para aspirantes
                                    </v-card-title>
                                    <v-card-text class="pa-0">
                                        <iframe 
                                            src="https://www.utleon.edu.mx/resource/genially/Sitio_de_Becas/" 
                                            width="100%" 
                                            height="1500px" 
                                            style="border: none;"
                                            title="Información completa sobre becas universitarias"
                                            loading="lazy"
                                        ></iframe>
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

<script>
    new Vue({
        el: '#appBecasAspirante',
        vuetify: new Vuetify(),
        data: () => ({
            
        })
    })
</script>

    