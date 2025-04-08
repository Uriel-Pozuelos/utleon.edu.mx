<head>
    <title>UTL | Reinscripción</title>
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
        
            <div id="appReinscripcion" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>    

                            <v-row class="mb-6">
                                <v-col cols="12">
                                    <h1 class="text-center procesos-title">
                                    <span class="primary--text">Reinscripción</span> 
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                                <!-- Contenido principal - iframe -->
                                <v-row height="auto" class="mb-6">
                                    <v-col cols="12" md="12">
                                        <iframe 
                                        src="https://view.genial.ly/6436e1e9c114300013d65010/interactive-content-reinscripcion-cuatrimestral-ma2023" 
                                        width="100%" 
                                        height="1200px" 
                                        style="border: none;"
                                        title="Proceso de reinscripción cuatrimestral"
                                        loading="lazy"
                                        ></iframe>
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
        el: '#appReinscripcion',
        vuetify: new Vuetify(),
        data: () => ({
            
        }),
    })
</script>