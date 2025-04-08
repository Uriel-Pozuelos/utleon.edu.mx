<head>
    <title>UTL | Trámites para Baja</title>
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
        
            <div id="appTramitesBaja" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    

                            <v-row class="mb-4">
                                <v-col cols="12">
                                    <h1 class="text-center procesos-title">
                                    <span class="primary--text">Trámites para</span> Baja
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            
                            <v-col cols="12" md="12" width="100%">
                                <v-card elevation="3">
                                <v-card-title class="primary white--text">
                                    Proceso para Baja Definitiva
                                </v-card-title>
                                <v-card-text  >
                                    <iframe 
                                    src="https://www.utleon.edu.mx/resource/genially/proceso_baja_definitiva_2022/" 
                                    width="100%" 
                                    height="1200px" 
                                    style="border: none;"
                                    title="Guía para el proceso extraordinario"
                                    loading="lazy"
                                    ></iframe>
                                </v-card-text>
                                </v-card>
                            </v-col>

                            <v-col cols="12" md="12" width="100%">
                                <v-card elevation="3">
                                <v-card-title class="primary white--text">
                                    Proceso para Baja Temporal
                                </v-card-title>
                                <v-card-text  >
                                    <iframe 
                                    src="https://view.genial.ly/650dc46ab85e1100112ac216/interactive-content-proceso-de-baja-temporal" 
                                    width="100%" 
                                    height="1200px" 
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
        el: '#appTramitesBaja',
        vuetify: new Vuetify(),
        data: () => ({
            
        }),
    })
</script>
