<head>
    <title>UTL | Becas</title>
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
        
            <div id="appBecas" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            <v-row class="mt-8 mb-6" align="center">
                                <v-col cols="12" md="7" order-md="1" order="2">
                                    <h1 class="becas-title mb-4">
                                        <span class="primary--text">Becas</span>
                                        <span class="">Universitarias</span>
                                    </h1>
                                    
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
                                    class="mb-4"
                                    >
                                        <strong>¡No dejes que lo económico detenga tus sueños!</strong> Explora las opciones de beca disponibles para ti.
                                    </v-alert>
                                </v-col>
                                
                                <v-col cols="12" md="5" order-md="2" order="1" class="text-center">
                                    <v-img
                                    src="https://www.utleon.edu.mx/resource/img/imagenes/2.3.1%20Becas.jpg"
                                    aspect-ratio="1.5"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px;"
                                    alt="Estudiantes beneficiados con becas"
                                    ></v-img>
                                </v-col>
                            </v-row>

                                <!-- Tipos de becas -->
                            <v-row class="mb-6">
                                <v-col cols="12" md="4">
                                    <v-card class="pa-4 h-100" elevation="2">
                                    <v-card-title class="primary--text">
                                        <v-icon left color="primary">mdi-home</v-icon>
                                        Becas Internas
                                    </v-card-title>
                                    <v-card-text>
                                        <p>Apoyos económicos otorgados directamente por la universidad:</p>
                                        <v-list dense>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Excelencia académica</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Apoyo económico</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Deportivas y culturales</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        </v-list>
                                    </v-card-text>
                                    </v-card>
                                </v-col>
                                
                                <v-col cols="12" md="4">
                                    <v-card class="pa-4 h-100" elevation="2">
                                    <v-card-title class="primary--text">
                                        <v-icon left color="primary">mdi-bank</v-icon>
                                        Becas Externas
                                    </v-card-title>
                                    <v-card-text>
                                        <p>Programas de apoyo de instituciones gubernamentales y privadas:</p>
                                        <v-list dense>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Becas federales</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Programas estatales</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-check</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Convenios con empresas</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        </v-list>
                                    </v-card-text>
                                    </v-card>
                                </v-col>
                                
                                <v-col cols="12" md="4">
                                    <v-card class="pa-4 h-100" elevation="2">
                                    <v-card-title class="primary--text">
                                        <v-icon left color="primary">mdi-calendar-clock</v-icon>
                                        Proceso de Solicitud
                                    </v-card-title>
                                    <v-card-text>
                                        <p>Requisitos generales para aplicar:</p>
                                        <v-list dense>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-numeric-1</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Promedio mínimo de 9.0</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-numeric-2</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Documentación completa</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item>
                                            <v-list-item-icon>
                                            <v-icon  color="primary">mdi-numeric-3</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                            <span>Cumplir con fechas límite</span>
                                            </v-list-item-content>
                                        </v-list-item>
                                        </v-list>
                                    </v-card-text>
                                    </v-card>
                                </v-col>
                            </v-row>

                                <!-- Genially -->
                            <v-row class="mb-6">
                                <v-col cols="12">
                                    <v-card class="elevation-3">
                                    <v-card-title class="primary white--text">
                                        <v-icon left dark>mdi-book-open-variant</v-icon>
                                        Conoce todo sobre nuestras becas
                                    </v-card-title>
                                    <v-card-text class="pa-0">
                                        <iframe 
                                        src="https://view.genial.ly/65eb59426e9b7900155ba749" 
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

<script setup>
    new Vue({
        el: '#appBecas',
        vuetify: new Vuetify(),
        data: () => ({
    
        }),
    })
</script>