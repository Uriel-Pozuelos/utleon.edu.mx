<head>
    <title>UTL | Pago de Examen de Regularización</title>
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
        
            <div id="appPagoRegularizacion" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    

                            <v-row class="mb-6">
                                <v-col cols="12">
                                    <h1 class="text-center procesos-title">
                                    <span class="primary--text">Procesos Académicos </span>
                                    <span class="">de Regularización</span>
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 
                            
                        <!-- Proceso de Recuperación -->
                        <v-col cols="12" md="12" width="100%"> 
                            <v-card elevation="3">
                                <v-card-title class="primary white--text">
                                    Proceso de Recuperación
                                </v-card-title>
                                <v-card-text width="100%" >
                                    <iframe 
                                    src="https://view.genial.ly/643ed4dab5cfa80011a47fde/guide-proceso-de-recuperacion-ea2023" 
                                    width="100%" 
                                    height="500px" 
                                    style="border: none;"
                                    title="Guía para el proceso de recuperación"
                                    loading="lazy"
                                    ></iframe>
                                </v-card-text>
                            
                            </v-card>
                        </v-col>

                            <!-- Proceso Extraordinario -->
                            <v-col cols="12" md="12" width="100%">
                                <v-card elevation="3">
                                <v-card-title class="primary white--text">
                                    Proceso Extraordinario
                                </v-card-title>
                                <v-card-text  >
                                    <iframe 
                                    src="https://view.genial.ly/63d402439b77f10012b53c9f/guide-extraordinario-ma2023" 
                                    width="100%" 
                                    height="500px" 
                                    style="border: none;"
                                    title="Guía para el proceso extraordinario"
                                    loading="lazy"
                                    ></iframe>
                                </v-card-text>
                                </v-card>
                            </v-col>

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appPagoRegularizacion',
        vuetify: new Vuetify(),
        data: () => ({
            
        }),
    })
</script>

                                