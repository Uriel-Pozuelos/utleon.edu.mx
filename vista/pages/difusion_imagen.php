<head>
    
    <title>UTL | Difusión e Imagen</title>
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
        
            <div id="appDifImg" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>
                            <v-row>
                                <v-col cols="12">

                                    <v-row class="mb-2">
                                        <v-col cols="12">
                                            <h1 class="text-center text-h4">
                                                <span class="primary--text" >Difusión e</span> Imagen Institucional
                                            </h1>
                                            <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                        </v-col>
                                    </v-row> 

                                    <h1 class="h4 mb-3">
                                    </h1>

                                    <v-img :src="mainImage" style="" max-height="400" width="100%" ></v-img>

                                    <p class="text-justify py-2 px-3">
                                        El departamento de Imagen Institucional es el encargado del diseño gráfico de conceptos, 
                                        productos y campañas de difusión internas y externas que sean congruentes y apoyen al 
                                        posicionamiento de la institución.
                                    </p>
                                    <p class="text-justify py-1 px-3">
                                        Una de sus principales funciones es verificar el correcto uso del logotipo institucional, 
                                        por lo cual, ponemos a su disposición el Manual de Identidad Corporativa para que se apegue 
                                        a sus lineamientos.
                                    </p>
                                    <p class="text-justify py-2 px-3">
                                        Antes de producir cualquier material que incluya el logotipo institucional, deberá solicitar 
                                        su validación con el Departamento de Imagen a la ext. 213 o al correo <a href="mailto:argomez@utleon.edu.mx">argomez@utleon.edu.mx</a>.
                                    </p>

                                    <v-row class="py-2 px-3">
                                        <v-col>
                                            <v-card elevation="4" class="py-2 px-3">
                                                <h2 class=" my-3" style="color: #1A237E">Lineamientos del departamento de imagen</h2>
                                                <div>
                                                    <p class="px-2">
                                                        <a class="my-2" href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/docs/manual_utl/manual_utl.html#p=1">Manua de imagen institucional</a>
                                                    </p>
                                                    <v-expansion-panels
                                                    v-model="panel1"
                                                    focusable
                                                    multiple
                                                    >
                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>Solicitud de Diseño</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/docs/Politicas_Dise%C3%B1o_2023.docx">Políticas de Servicio de Diseño</a>                                                            
                                                                    <a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/docs/FEDRP03_A%20Solicitud%20de%20Dise%C3%B1o.xlsx">Formato de Solicitud de Diseño</a>
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>Solicitud de Diseño Web</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/docs/Politicas_web%202023.docx">Políticas de Servicio de Diseño Web</a>
                                                                    <a href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/docs/FEDRP04_A%20Solicitud%20dise%C3%B1o%20Web.xlsx">Formato de Solicitud Web</a>
                                                                </div>    
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                    </v-expansion-panels>
                                                </div> 
                                                
                                                <h2 class=" my-3" style="color: #1A237E">Firma Electrónica</h2>
                                                <div>
                                                    <p class="px-2">
                                                        <a class="my-2" href="https://www.utleon.edu.mx/public_html/difusion-e-imagen/imagen-institucional/imagen_2024/FIRMA%20ELECTRÓNICA/Instrucciones%20firma%20institucional_2024.pdf" download>Instrucciones para firma de correo institucional UTL-UAS</a>
                                                    </p>
                                                    <v-expansion-panels
                                                    v-model="panel2"
                                                    focusable
                                                    multiple
                                                    >
                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>León</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/Firma%20electronica_2025_LE%C3%93N.pptx">Firma de correo institucional UTL León</a>        
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>Acámbaro</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/Firma%20electronica_2025_UAS.pptx">Firma de correo institucional UTL Acámbaro</a>        
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                    </v-expansion-panels>
                                                </div>

                                                <h2 class=" my-3" style="color: #1A237E">Plantillas para presentaciones</h2>
                                                <div>
                                                    <v-expansion-panels
                                                    v-model="panel3"
                                                    focusable
                                                    multiple
                                                    >
                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>León</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/Presentaci%C3%B3n%20LE%C3%93N.pptx">Plantilla power point para presentaciones UTL León</a>
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>Acámbaro</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/Presentaci%C3%B3n%20AC%C3%81MBARO.pptx">Plantilla power point para presentaciones UTL Acámbaro</a>
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                    </v-expansion-panels>
                                                </div>

                                                <h2 class=" my-3" style="color: #1A237E">Fondos de pantalla</h2>
                                                <div>
                                                    <v-expansion-panels
                                                    v-model="panel4"
                                                    focusable
                                                    multiple
                                                    >
                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>León</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/wallpaper-01.jpg">UTL León Wallpaper</a>
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                        <v-expansion-panel>
                                                            <v-expansion-panel-header>Acámbaro</v-expansion-panel-header>
                                                            <v-expansion-panel-content>
                                                                <div class="d-flex flex-column">
                                                                    <a href="https://www.utleon.edu.mx/resource/documentos/imagen_institucional_2025/WALLPAPER%20UAS-01.jpg">UTL Acámbaro Wallpaper</a>
                                                                </div>
                                                            </v-expansion-panel-content>
                                                        </v-expansion-panel>

                                                    </v-expansion-panels>
                                                </div>
                                                
                                            </v-card>

                                            
                                        </v-col>
                                    </v-row>

                                    <v-row class=" px-3 d-flex justify-center">
                                        <v-col cols="12" md="6" lg="6" class="d-flex justify-center">
                                            <v-card elevation="6" class="my-4 pa-3">
                                                
                                                <h2 class="h3 primary--text">Contáctanos </h2>
                                                <div class="d-flex flex-column py-2 px-3" >
                                                    <p>
                                                        Lic. Araceli Leticia Reyes Gómez - Jefa de Departamento de Imagen y Relaciones Públicas
                                                    </p>
                                                    <p>
                                                        <a href="mailto:argomez@utleon.edu.mx">argomez@utleon.edu.mx</a>
                                                    </p>
                                                    <p>
                                                        Difusión e Imagen Institucional – Olimpo Planta Baja
                                                    </p>
                                                    <p>
                                                        Tel: Ext. 144, 213
                                                    </p>
                                                    <span class=" primary--text text-right overline">*Es importante mencionar que el Departamento de Imagen no brinda servicio de asesoría a la comunidad estudiantil*</span>
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
        el: '#appDifImg',
        vuetify: new Vuetify(),
        data: () => ({
            mainImage: "https://www.utleon.edu.mx/resource/img/banner%20difusi%C3%B3n.png",
            panel1: [0,1,2],
            panel2: [0,1],
            panel3: [0,1],
            panel4: [0,1],
            

        })
    })
</script>