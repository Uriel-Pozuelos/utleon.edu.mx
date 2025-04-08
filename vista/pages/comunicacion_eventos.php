<head>
    
    <title>UTL | Comunicación y Eventos</title>
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
        
            <div id="appComunicacionEv" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Comunicación y</span> Eventos
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <v-img :src="mainImage" ></v-img>

                                    <v-row>
                                        <v-col cols="12" md="6" lg="6" class="d-flex justify-center align-center mt-4">
                                            
                                            <v-card tile class="mx-auto px-3 py-4" elevation="3" style="border-radius: 8px !important;">
                                                <h2 class="h3 primary--text">Lineamientos del área de Comunicación y Eventos</h2>
                                                
                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/Politicas_de_comunicacion_interna_y_externa_2023.docx">Políticas de comunicación interna y externa</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/Politicas_web%202023.docx">Políticas Web</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/FRDRP07_A_Solicitud_de_apoyo_para_evento.xlsx">Formato de Solicitud de Apoyo a Eventos</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/FRDRP01_B%20Solicitud_de_apoyo_del_area_de%20comunicacion%20.xlsx">Formato de Solicitud de Apoyo del Área de Comunicación</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/FRDRP08_A_Solicitud_de_difusion_de_campanas.xlsx">Solicitud de Apoyo de Difusión de Campañas</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title><a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/comunicacion-eventos/docs/formato_de_aviso_de_evento_2018.xlsx">Ficha Informativa de Evento 2018</a></v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-card>

                                        </v-col>

                                        <v-col cols="12" md="6" lg="6" class="d-flex justify-center align-center">
                                            <v-card elevation="4" class="my-4 pa-3 justify-center" width="100% ">
                                                
                                                <h2 class="h3 primary--text">Contáctanos </h2>
                                                <div class="d-flex flex-column py-2 px-3 h2" >
                                                    <p>
                                                        Juan Jesús Ibarra Moncada
                                                    </p>
                                                    <p>
                                                        <a href="mailto:jibarram@utleon.edu.mx">jibarram@utleon.edu.mx</a>
                                                    </p>
                                                    <p>
                                                        Subdirección de Difusión e Imagen - Rectoría Planta Baja
                                                    </p>
                                                    <p>
                                                        Tel: Ext. 227
                                                    </p>
                                                    
                                                </div>
                                            </v-card>
                                        </v-col>
                                    </v-row>

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
        el: '#appComunicacionEv',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagen_institucional.jpg",
        })
    })

</script>

