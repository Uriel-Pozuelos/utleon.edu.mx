<head>
    <title>UTL | Solicitud de Constancia </title>
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
        
            <div id="appSolicitudConst" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            
                            
                            <v-row class="mb-3">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Solicitud de</span> Constancia
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <v-row class="mt-4 mb-10" >
                                <v-col cols="12" md="6" lg="6" order-md="1" order="2" height="100%">  
                                    <v-card class="elevation-3 pa-4" height="100%" class="">
                                        <v-alert type="info" style="background-color: #FFBF00 !important;" class="black--text mb-4">
                                            <p class="">El proceso y emisión del documento de constancia de estudios se realizará por medio electrónico y de manera digital, debido al periodo de contingencia actual.</p>
                                        </v-alert>
                                        <p class="mb-4">Se emite con los datos de la persona de la Institución que validada la información, así como, un código de identificación en el documento para cualquier cotejo o validación posterior, en caso de ser requerido por quién recibe el documento.</p>
                                        <p>En caso de requerir una constancia de estudios, bajo las especificaciones expuestas, deberás realizar el siguiente proceso.</p>
                                    </v-card>                                  
                                </v-col>
                                
                                <v-col cols="12" md="6" lg="6" order-md="2" order="1" class="text-center" height="100%">
                                    <v-img
                                        src="https://www.utleon.edu.mx/resource/img/imagenes/Solicitud%20de%20constancias.jpg"
                                        class="elevation-6"
                                        height="100%"
                                        width="100%"
                                        style="border-radius: 8px; "
                                    ></v-img>
                                </v-col>
                            </v-row>

                            <!-- Sección del proceso con genially -->
                            <v-row justify="center" class="mb-12">
                                <v-col cols="12" md="10">
                                    <v-card class="elevation-3 pa-4">
                                        <h2 class="text-h5 mb-4 text-center ">Proceso para solicitud de constancias</h2>
                                        <iframe 
                                        src="https://view.genially.com/670d41338460577d90578c6e" 
                                        width="100%" 
                                        height="1200px" 
                                        style="border: none; overflow: hidden;"
                                        title="Proceso para solicitud de constancias"
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

<script setup>
    new Vue({
        el: '#appSolicitudConst',
        vuetify: new Vuetify(),
    
    })
</script>