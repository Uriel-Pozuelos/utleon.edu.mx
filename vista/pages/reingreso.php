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
                                    <span class="primary--text">Procesos de </span> Reingreso
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                    
                    <v-row align="center">
                        <v-col cols="12" md="7" class="text-center">
                            <v-row justify="center" class="mb-8">
                                <v-col cols="12" sm="6" md="4">
                                    <v-hover v-slot="{ hover }">
                                        <v-card 
                                            flat
                                            :elevation="hover ? 6 : 2"
                                            @click="openModal(0)"
                                        >
                                            <v-img
                                            src="https://www.utleon.edu.mx/resource/img/botones/estudiante/7.png"
                                            aspect-ratio="2.66"
                                            contain
                                            ></v-img>
                                        </v-card>
                                    </v-hover>
                                </v-col>
                                <v-col cols="12" sm="6" md="4">
                                    <v-hover v-slot="{ hover }">
                                    <v-card 
                                        flat
                                        :elevation="hover ? 6 : 2"
                                        @click="openModal(1)"
                                    >
                                        <v-img
                                        src="https://www.utleon.edu.mx/resource/img/botones/estudiante/8.png"
                                        aspect-ratio="2.66"
                                        contain
                                        ></v-img>
                                    </v-card>
                                    </v-hover>
                                </v-col>
                                <v-col cols="12" sm="6" md="4">
                                    <v-hover v-slot="{ hover }">
                                    <v-card 
                                        flat
                                        :elevation="hover ? 6 : 2"
                                        @click="openModal(2)"
                                    >
                                        <v-img
                                        src="https://www.utleon.edu.mx/resource/img/botones/estudiante/9.png"
                                        aspect-ratio="2.66"
                                        contain
                                        ></v-img>
                                    </v-card>
                                    </v-hover>
                                </v-col>
                            </v-row>
                        </v-col>

                        <!-- Imagen -->
                        <v-col cols="12" md="5" class="text-center">
                            <v-img
                            src="https://www.utleon.edu.mx/resource/img/imagenes/2.3.3%20Reingreso.jpg"
                            aspect-ratio="1.5"
                            class="rounded-lg elevation-3"
                            style="border-radius: 1px 100px;"
                            ></v-img>
                        </v-col>
                    </v-row>

                            
                        <v-dialog v-model="modals[0]" max-width="1200" scrollable>
                            <v-card>
                                <v-card-title class="primary white--text">
                                Proceso de Reingreso
                                <v-spacer></v-spacer>
                                <v-btn icon dark @click="modals[0] = false">
                                    <v-icon>mdi-close</v-icon>
                                </v-btn>
                                </v-card-title>
                                <v-card-text class="pa-0 modal-content">
                                <iframe 
                                    src="https://view.genially.com/63ced312f376d3001a8e6881/guide-reingreso-ma2025" 
                                    width="100%" 
                                    height="800px" 
                                    style="border: none;"
                                    title="Proceso de Reingreso"
                                ></iframe>
                                </v-card-text>
                            </v-card>
                        </v-dialog>

                            
                        <v-dialog v-model="modals[1]" max-width="1200" scrollable>
                            <v-card>
                                <v-card-title class="primary white--text">
                                    Cambio de Universidad Tecnológica
                                <v-spacer></v-spacer>
                                <v-btn icon dark @click="modals[1] = false">
                                    <v-icon>mdi-close</v-icon>
                                </v-btn>
                                </v-card-title>
                                <v-card-text class="pa-0 modal-content">
                                <iframe 
                                    src="https://view.genially.com/63d3f32cd1cebc0018e7d6c6/interactive-content-cambio-de-ut-ea2025" 
                                    width="100%" 
                                    height="800px" 
                                    style="border: none;"
                                    title="Cambio de Universidad Tecnológica"
                                ></iframe>
                                </v-card-text>
                            </v-card>
                        </v-dialog>

                            
                        <v-dialog v-model="modals[2]" max-width="1200" scrollable>
                            <v-card>
                                <v-card-title class="primary white--text">
                                    Cambio de Institución Educativa
                                <v-spacer></v-spacer>
                                <v-btn icon dark @click="modals[2] = false">
                                    <v-icon>mdi-close</v-icon>
                                </v-btn>
                                </v-card-title>
                                <v-card-text class="pa-0 modal-content">
                                <iframe 
                                    src="https://view.genial.ly/63d3f3104330010018e13c96/interactive-content-cambio-de-ie-ma2023" 
                                    width="100%" 
                                    height="900px" 
                                    style="border: none;"
                                    title="Cambio de Institución Educativa"
                                ></iframe>
                                </v-card-text>
                            </v-card>
                        </v-dialog>

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
            modals: [false, false, false],

        }),
        methods: {
            openModal(index) {
            this.modals = this.modals.map((_, i) => i === index);
            }
        }
    })
</script>

                            

