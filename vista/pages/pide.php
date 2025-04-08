<head>
    
    <title>UTL | PIDE</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
        <?php 
            include_once("vista/headerUriel.php") 
        ?>
        <div 
            class="content-wrapper" >
            
            <?php
                include_once("vista/sideBar.php")
                
            ?>
        
            <div id="appPide" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                            <span class="primary--text">PIDE</span>
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <h2 class="h2 mb-3 secondary--text pb-3" style="border-bottom: #00b293  5px solid;" >Plan Institucional de Desarrollo 2021-2025 (PIDE)</h2>

                                    <v-card class="pa-5">

                                        <v-tabs v-model="tab" grow slider-color="primary" class="mt-3 mb-2 " background-color="grey lighten-5">
                                                <v-tab>
                                                    <v-div class="text-center">
                                                        <div class="h1">Macro Proceso Institucional Académico</div>
                                                        <div class="caption grey--text">EJE 1. CALIDAD EDUCATIVA</div>   
                                                    </v-div>
                                                </v-tab>
                                                <v-tab>
                                                    <v-div class="text-center">
                                                        <div class="h1">Macro Proceso Institucional Vinculación</div>
                                                        <div class="caption grey--text">EJE 2. VINCULACIÓN INNOVADORA Y EMPRENDIMIENTO</div>
                                                    </v-div>
                                                </v-tab>
                                                <v-tab>
                                                    <v-div class="text-center">
                                                        <div class="h1">Macro Proceso Institucional Administración</div>
                                                        <div class="caption grey--text">EJE 3. ADMINISTRACIÓN Y FINANZAS EFICACES Y EFICIENTES</div>
                                                    </v-div>
                                                </v-tab>
                                                <v-tab>
                                                    <v-div class="text-center">
                                                        <div class="h1">Macro Proceso Institucional Ambiental</div>
                                                        <div class="caption grey--text">EJE 4. RESPONSABILIDAD SOCIAL UNIVERSITARIA</div>
                                                    </v-div>
                                                </v-tab>
                                        </v-tabs>

                                        <v-tabs-items v-model="tab" class="grey lighten-5" >
                                            
                                            <v-tab-item >
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <p class="text-justify "><strong>Objetivo general:</strong> Asegurar y mejorar la calidad de la capacidad y competitividad académica, así como los elementos que intervienen en el proceso de enseñanza-aprendizaje.</p>
                                                </v-card>
                                            </v-tab-item>

                                            
                                            <v-tab-item class="">
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <p class="text-justify"><strong>Objetivo general:</strong> Crear interacciones permanentes entre la universidad y los sectores sociales.</p>
                                                </v-card>
                                            </v-tab-item>

                                            <v-tab-item>
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <p class="text-justify"><strong>Objetivo general:</strong>  Utilizar racional y efectivamente los recursos humanos, materiales y financieros con el fin de cumplir con los objetivos Institucionales.</p>
                                                </v-card>
                                            </v-tab-item>

                                            <v-tab-item>
                                                <v-card flat class="pa-6 grey lighten-5">
                                                    <p class="text-justify"><strong>Objetivo general:</strong> Promover la responsabilidad social universitaria por medio de la cultura del cuidado del medio ambiente en las actividades que emprenda la universidad.</p>
                                                </v-card>
                                            </v-tab-item>
                                        </v-tabs-items>
                                    </v-card>

                                    <v-div class="d-flex justify-center text-center mt-4 mb-4">
                                        
                                        <v-btn color="primary" outlined href="https://www.utleon.edu.mx/utl/archivos/pide.pdf" target="_blank">
                                            <v-icon icon>mdi-file-eye-outline</v-icon>
                                            Conoce la versión extensa PIDE 2021-2025
                                        </v-btn>

                                    </v-div>

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
        el: '#appPide',
        vuetify: new Vuetify(),
        data: () => ({
            tab: null,
            
        }),
    })
</script>