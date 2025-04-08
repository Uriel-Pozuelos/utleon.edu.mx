<head>
    <title>UTL | Titulación TSU</title>
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
        
            <div id="appTitulacionTSU" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    

                            <v-row class="mb-4">
                                <v-col cols="12">
                                    <h1 class="text-center procesos-title">
                                        <span class="primary--text">Titulación </span> TSU
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-col cols="12" md="12" width="100%"> 
                                <v-card elevation="3">
                                    <v-card-title class="primary white--text">
                                        Proceso de Titulación TSU
                                    </v-card-title>
                                    <v-card-text width="100%" >
                                        <iframe 
                                        src=" https://view.genially.com/6679c612e1eaeb0015020bbe" 
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

                                <!-- Sección de contacto -->
                                <v-row class="mb-6" align="center">
                                    
                                    <v-col cols="12" md="6">
                                        <v-img
                                        src="https://www.utleon.edu.mx/resource/img/imagenes/2.3.4%20Titulaci%C3%B3n.jpeg"
                                        max-height="400"
                                        class="rounded-lg elevation-3"
                                        style="border-radius: 1px 100px;"
                                        ></v-img>
                                    </v-col>

                                    
                                    <v-col cols="12" md="6">
                                        <v-card class="pa-6 elevation-2">
                                        <h2 class="text-h4 mb-4 primary--text">Contáctanos</h2>    
                                            <v-list dense>
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                    <v-icon color="primary">mdi-account</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                    <v-list-item-title class="font-weight-medium">Brenda Isabel Tellez Reyes</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                    <v-icon color="primary">mdi-email</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                    <v-list-item-title>btellez@utleon.edu.mx</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                    <v-icon color="primary">mdi-clock-outline</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                    <v-list-item-title>Lunes a viernes de 9:00 a 17:00 hrs</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>
                                        
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
        el: '#appTitulacionTSU',
        vuetify: new Vuetify(),
        data: () => ({
            
            
        }),
        
    })
</script>