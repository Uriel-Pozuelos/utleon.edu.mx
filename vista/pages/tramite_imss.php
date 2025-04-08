<head>
    <title>UTL | Trámite Estudiantil de IMSS</title>
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
        
            <div id="appTramiteImss" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            <v-row class="mb-3">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Trámite Estudiantil </span> de IMSS
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 
                            
                                <!-- Proceso interactivo -->
                                <v-row class="mb-6">
                                <v-col cols="12">
                                    <v-card class="elevation-3">
                                    <v-card-title class="primary white--text">
                                        <v-icon left dark>mdi-playlist-check</v-icon>
                                        Proceso completo para tu trámite de IMSS
                                    </v-card-title>
                                    <v-card-text class="pa-0">
                                        <iframe 
                                        src="https://view.genial.ly/6413445c7a622500178c62ff/interactive-content-proceso-imss" 
                                        width="100%" 
                                        height="1500px" 
                                        style="border: none;"
                                        title="Proceso para trámite de IMSS"
                                        loading="lazy"
                                        ></iframe>
                                    </v-card-text>
                                    </v-card>
                                </v-col>
                                </v-row>

                                <!-- Contacto y ayuda -->
                                <v-row>
                                <v-col cols="12">
                                    <v-alert
                                    border="left"
                                    colored-border
                                    color="primary"
                                    elevation="2"
                                    >
                                    <h3 class="subtitle-1 font-weight-bold mb-2">¿Necesitas ayuda?</h3>
                                    <p class="mb-0">
                                        Contacta al Departamento de Servicios Escolares: 
                                        <strong>servicios.escolares@utleon.edu.mx</strong> | 
                                        Tel: <strong>477 710 8500 ext. 5632</strong>
                                    </p>
                                    </v-alert>
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
        el: '#appTramiteImss',
        vuetify: new Vuetify(),
        data: () => ({
    
        }),
    })
</script>