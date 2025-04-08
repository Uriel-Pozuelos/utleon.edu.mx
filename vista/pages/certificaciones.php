<head>
    
    <title>UTL | Certificaciones</title>
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
        
            <div id="appCert" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-3">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Certificaciones</span> Institucionales
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <v-row  justify="center">
                                        <v-col cols="8" md="6" lg="8" class="d-flex justify-center align-center">
                                            <v-img :src="mainImage" style="border-radius:10px;" max-height="400" gradient="to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5)"></v-img>
                                        </v-col>
                                        <v-col cols="12" md="4" lg="4" >
                                            <v-card elevation="3" class="pa-6" height="400">
                                                <p class="text-justify">
                                                    La Universidad Tecnológica de León asegura el cumplimiento de la política y objetivos de calidad, a través de 
                                                    la implementación, mantenimiento y mejoramiento de los requisitos de la Normas:
                                                </p>
                                                <ul>
                                                    <li>ISO 9001:2015</li>
                                                    <li>ISO 14001:2015</li>
                                                    <li>NMX-R-025-SCFI-2015</li>
                                                </ul>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                        

                                    <div>
                                        <h1 class="h4 mt-6 mb-4 secondary--text pb-2 " style="border-bottom: #00b293 5px solid">Certificaciones</h1>
                                        <v-row>
                                            <v-col cols="12" md="6" lg="6">
                                                <v-card elevation="3" class="mt-2 pa-2">
                                                    <h2 class="h2">Recertificación en <span class="primary--text">ISO 9001:2015</span> mayo 2021 con vigencia de tres años</h2>
                                                    <p>
                                                        Certificado del Sistema de Gestión de Calidad aplicable a los procesos de desarrollo y 
                                                        provisión de servicios educativos para los niveles de técnico/a superior universitario/a 
                                                        y de licenciatura e ingeniería; servicios de apoyo al sector productivo y social y de incubación 
                                                        de negocios.
                                                    </p>
                                                </v-card>
                                                <v-img :src="srcSistemasGestion" class="mt-4"></v-img>
                                            </v-col>

                                            <v-col cols="12" md="6" lg="6">
                                                <v-card elevation="3" class="mt-2 pa-2">
                                                    <h2 class="h2">Recertificación en <span class="primary--text">ISO 14001:2015</span> mayo 2021 con vigencia de tres años</h2>
                                                    <p>
                                                        Certificado del Sistema de Gestión Ambiental aplicable a los procesos de desarrollo y provisión 
                                                        de servicios educativos para los niveles de técnico/a superior universitario/a y de licenciatura e 
                                                        ingeniería, así como de servicios a la industria y de incubación de negocios.
                                                    </p>
                                                </v-card>
                                                <v-img :src="srcNmx" class="mt-4"></v-img>        
                                            </v-col>
                                        
                                        </v-row>
                                        
                                    </div>


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
        el: '#appCert',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/certificaciones2.jpeg",
            tab: null,
            srcSistemasGestion: 'https://www.utleon.edu.mx/resource/img/botones/zona_libre/2.png',
            srcNmx: 'https://www.utleon.edu.mx/resource/img/botones/zona_libre/2.png',
            

        })
    })
</script>