<head>
    <title>UTL | Sistema de Gestión Ambiental</title>
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
        
            <div id="appSGI" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text">Sistema de</span> Gestón Ambiental
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <v-row>
                                        <v-col cols="8" md="5" lg="5" class="d-flex justify-center align-center">
                                            <v-card elevation="6" height="100%" width="100%" class="d-flex justify-center align-items-center flex-column" style="border-radius: 8px; padding: 20px; ">
                                                <p class="text-justify pa-2">
                                                    Desarrollo y provisión de servicios educativos para los niveles:
                                                </p>
                                                <ul>
                                                    <li>Técnico/a superior universitario/a</li>
                                                    <li>Licenciatura e ingeniería</li>
                                                    <li>Incubación de negocios y</li>
                                                    <li>Servicios de apoyo a los sectores productivo y social</li>
                                                </ul>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" md="7" lg="7" class="px-6">
                                            <v-img :src="mainImage" style="border-radius:10px;" class="elevation-3" contain ></v-img>
                                            
                                        </v-col>
                                    </v-row>
                                        

                                    <div>
                                        <h1 class="h4 mt-6 secondary--text pb-2" style="border-bottom: #00b293 5px solid">Objetivos de Calidad Integral</h1>
                                        <v-row class="py-4">
                                            <v-col cols="12" md="4" lg="4">
                                                <v-card elevation="5" class="mt-2 pa-3" height="100%" >
                                                    <h3 class="primary--text mb-2 text-center" >ASPECTOS AMBIENTALES SIGNIFICATIVOS</h3>
                                                    <ul>
                                                        <li>Consumo de agua</li>
                                                        <li>Generación de agua residual</li>
                                                        <li>Generación de residuos de manejo especial</li>
                                                        <li>Generación de residuos peligrosos</li>
                                                        <li>Consumo de papel</li>
                                                        <li>Consumo de energía eléctrica</li>
                                                    </ul>
                                                </v-card>
                                            </v-col>

                                            <v-col cols="12" md="4" lg="4">
                                                <v-card elevation="5" class="mt-2 pa-3" height="100%">
                                                    <h3 class=" primary--text mb-2 text-center">COMPROMISOS AMBIENTALES</h3>
                                                    <ul>
                                                        <li>Cumplir las metas ambientales establecidas en el Programa Institucional de Mejora del Desempeño Ambiental</li>
                                                        <li>Cumplir con la legislación ambiental aplicable a los Aspectos Ambientales de la Universidad</li>
                                                        <li>Difundir en la comunidad universitaria los principios del desarrollo sustentable en materia de consumo de agua, manejo de residuos, consumo de energía eléctrica, uso del papel</li>
                                                    </ul>
                                                </v-card>
                                            </v-col>

                                            <v-col cols="12" md="4" lg="4" class="">
                                                <v-card elevation="5" class="mt-2 pa-3" height="100%">
                                                    <h3 class="primary--text mb-2 text-center">PROGRAMAS AMBIENTALES</h2>
                                                    <p>Programa Institucional Ambiental:</p>
                                                    <ul>
                                                        <li>Manejo integral de residuos</li>
                                                        <li>Aprovechamiento y cuidado del agua</li>
                                                        <li>Consumo eficiente de energía eléctrica</li>
                                                        <li>Uso eficiente del papel</li>
                                                    </ul>
                                                </v-card>
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
        el: '#appSGI',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/imagenes/Logo%20SGI.png",
            

        })
    })
</script>