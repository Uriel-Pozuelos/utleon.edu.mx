<head>
    <title>UTL | Modelo Educativo</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appProcesoAdmision" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>    
                        <!-- Título  -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <h1 class="text-h3 text-center ">
                                    <span class="primary--text">Proceso de Admisión</span>  Ingerierias y Licenciatura
                                </h1>
                                <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                            </v-col>
                        </v-row>

                        <v-row align="center" >
                            <v-col cols="12" md="6" lg="6">
                                <v-hover v-slot="{ hover }">
                                    <v-card flat @click="openModal(0)" :elevation="hover ? 6 : 2" >
                                        <!-- añade efecto de hover a la imagen -->
                                        <v-img 
                                            src="https://www.utleon.edu.mx/resource/img/admisiones_2025/1RA%20CONVOCATORIA.png"
                                            height="100%"
                                            class="d-flex rounded-lg justify-center align-center"
                                            >
                                                
                                        </v-img>
                                    </v-card>
                                </v-hover>
                            </v-col>

                            <v-col cols="12" md="6" lg="6">
                                <v-hover v-slot="{ hover }">
                                    <v-card flat @click="openModal(1)" :elevation="hover ? 6 : 2">
                                        <v-img 
                                            src="https://www.utleon.edu.mx/resource/img/admisiones_2025/2DA%20CONVOCATORIA.png"
                                            height="100%"
                                        >

                                        </v-ima>
                                    </v-card>
                                </v-hover>
                            </v-col>
                        </v-row>




                        <v-dialog v-model="modals[0]" max-width="1200" scrollable>
                            <v-card>
                                <v-card-title class="primary white--text">
                                    1ra Convocatoria Admisiones 2025
                                <v-spacer></v-spacer>
                                <v-btn icon dark @click="modals[0] = false">
                                    <v-icon>mdi-close</v-icon>
                                </v-btn>
                                </v-card-title>
                                <v-card-text class="pa-0 modal-content">
                                    <iframe 
                                        src="https://view.genially.com/678a96030b1a8fd3458f7b47/interactive-content-genially-sin-titulo" 
                                        width="100%" 
                                        height="800px" 
                                        style="border: none;"
                                        title="1ra Convocatoria Admisiones 2025"
                                    ></iframe>
                                </v-card-text>
                            </v-card>
                        </v-dialog>

                        <v-dialog v-model="modals[1]" max-width="1200" scrollable>
                            <v-card>
                                <v-card-title class="primary white--text">
                                    2da Convocatoria Admisiones 2025
                                <v-spacer></v-spacer>
                                    <v-btn icon dark @click="modals[1] = false">
                                        <v-icon>mdi-close</v-icon>
                                    </v-btn>
                                </v-card-title>
                                <v-card-text class="pa-0 modal-content">
                                    <iframe 
                                        src="https://view.genially.com/67b8c8074fd9fbf4d451d091/interactive-content-2da-convocatoria-admisiones-2025" 
                                        width="100%" 
                                        height="800px" 
                                        style="border: none;"
                                        title="2da Convocatoria Admisiones 2025"
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

<script>
    new Vue({
        el: '#appProcesoAdmision',
        vuetify: new Vuetify(),
        data: () => ({
            modals: [false, false],
        }), 
        methods: {
            openModal(index) {
            this.modals = this.modals.map((_, i) => i === index);
            }
        }
    })
</script>