<head>
    
    <title>UTL | Consejo Directivo</title>
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
        
            <div id="appConsejoDirectivo" class="main-content">
                <v-app>
                    <v-main >
                        <v-container fluid>

                            <v-card>
                                <v-card-title class="primary white--text">
                                    <v-icon left color="white">mdi-account-group</v-icon>
                                    Consejo Directivo
                                </v-card-title>
                                
                                <v-card-text>
                                    <p class="body-1 mb-6 mt-3">Es el máximo órgano de gobierno de la universidad y en conjunto con la Rectoría, son los responsables de su dirección y administración.</p>
                                    
                                    <h3 class="headline mb-4 primary--text" >Integrantes</h3>
                                    
                                    <v-simple-table>
                                        <template v-slot:default>
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Representantes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>I.- Tres representantes del Gobierno del Estado de Guanajuato, que serán nombrados por el Gobernador y lo presidirá quien él designe;</td>
                                                </tr>
                                                <tr>
                                                    <td>II.- Tres representantes del Gobierno Federal, designados por el Secretario de Educación Pública;</td>
                                                </tr>
                                                <tr>
                                                    <td>III.- Un representante del Gobierno Municipal designado por el H. Ayuntamiento, donde se ubique la universidad;</td>
                                                </tr>
                                                <tr>
                                                    <td>IV.- Dos representantes del Sector Productivo, a invitación del Ejecutivo Estatal.</td>
                                                </tr>
                                            </tbody>
                                        </template>
                                    </v-simple-table>

                                    <div class="d-flex justify-center mt-4 mb-4">
                                        <v-btn color="primary" @click="dialog = true">Conoce el Reglamento del Consejo Directivo</v-btn>

                                    </div>

                                    <h3 class="headline mt-8 mb-4">Informes Anuales</h3>
                                    <v-data-table
                                    :headers="headersAnuales"
                                    :items="informesAnuales"
                                    hide-default-footer
                                    class="elevation-1"
                                    >
                                        <template v-slot:item.acciones="{ item }">
                                            <v-btn small color="primary" @click="window.open(item.src, '_blank')">
                                                <v-icon left >mdi-download</v-icon>
                                                Descargar
                                            </v-btn>
                                        </template>
                                    </v-data-table>

                                    <h3 class="headline mt-8 mb-4">Informes Cuatrimestrales</h3>
                                    <v-chip-group column>
                                        <v-chip
                                            v-for="(item, i) in informesCuatrimestrales"
                                            :key="i"
                                            color="primary"
                                            text-color="white"
                                            @click="window.open(item.src, '_blank')"
                                        >
                                            {{ item.periodo }}
                                        </v-chip>
                                    </v-chip-group>
                                </v-card-text>

                                <!-- Dialog PDF -->
                                <v-dialog v-model="dialog" max-width="80%" hide-overlay transition="dialog-bottom-transition">
                                    <v-card>
                                        <v-toolbar class="primary">
                                            <v-toolbar-title>Reglamento del Consejo Directivo</v-toolbar-title>
                                            <v-spacer></v-spacer>
                                            <v-btn icon @click="dialog = false">
                                                <v-icon >mdi-close</v-icon>
                                            </v-btn>
                                        </v-toolbar>

                                        <v-card-text class="pa-0" >
                                            <iframe 
                                                src="https://www.utleon.edu.mx/resource/documentos/Reglamento%20Consejo%20Directivo.pdf"
                                                width="100%" 
                                                height="600px"
                                                style="border: none;"
                                            ></iframe>
                                        
                                        </v-card-text>
                                        
                                        <v-card-actions style="justify-content: center;">
                                            
                                            <v-btn style="background-color: #00b293; color: #FFFFFF" @click="dialog = false">
                                                Cerrar
                                            </v-btn>
                                            <v-btn 
                                                style="background-color: #00b293; color: #FFFFFF; margin-left: 10px"  
                                                :href="reglamentoPdf" 
                                                target="_blank" 
                                                download
                                            >
                                                <v-icon left>mdi-download</v-icon>
                                                Descargar
                                            </v-btn>
                                            
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>


                            </v-card>
                        </v-container>
                    </v-main>
                </v-app>
            </div>
        
        </div>
        <?php include_once("vista/footer.php") ?>
</body>

<script setup>
    new Vue({
        el: '#appConsejoDirectivo',
        vuetify: new Vuetify(),
        data: () => ({
            headersAnuales: [
                { text: 'Periodo', value: 'periodo' },
                { text: 'Acciones', value: 'acciones' }
            ],
            informesAnuales: [
                { periodo: '2018-2019', src: 'https://www.utleon.edu.mx/resource/documentos/InformeDeActividadesAnual24%202018-2019.pdf'},
                { periodo: '2019-2020', src: 'https://www.utleon.edu.mx/resource/documentos/Informe%20Anual%202019-2020.pdf'},
                { periodo: '2020-2021', src: 'https://www.utleon.edu.mx/resource/documentos/XCVIII_InformeAnual2020-2021.pdf'},
                { periodo: '2021-2022', src: 'https://www.utleon.edu.mx/resource/documentos/CII_Informe%20Anual%2027%202021-2022.pdf'},
                { periodo: '2022-2023', src: 'https://www.utleon.edu.mx/resource/documentos/CVI_28%20Informe%20Anual%202022-2023.pdf'},
                { periodo: '2023-2024', src: 'https://www.utleon.edu.mx/resource/documentos/Informe%20Anual%202023-2024.pdf'},
            ],
            informesCuatrimestrales: [
                { periodo: 'Sep - Dic 2021', src: 'https://www.utleon.edu.mx/resource/documentos/XCIX_InformeCuatrimestralSD2021.pdf'},
                { periodo: 'Ene - Abr 2022', src: 'https://www.utleon.edu.mx/resource/documentos/C_InformeCuatrimestralEA2022.pdf'},
                { periodo: 'May - Ago 2022', src: 'https://www.utleon.edu.mx/resource/documentos/CI_Informe%20Cuatrimestral%20MA2022.pdf'},
                { periodo: 'Sep - Dic 2022', src: 'https://www.utleon.edu.mx/resource/documentos/CIII_Informe_cuatrimestral_sep-dic%202022.pdf'},
                { periodo: 'Ene - Abr 2023', src: 'https://www.utleon.edu.mx/resource/documentos/CIV_Informe_ejecutivo_EA2023.pdf'},
                { periodo: 'May - Ago 2023', src: 'https://www.utleon.edu.mx/resource/documentos/CV_Informe_ejecutivo_MA2023.pdf'},
                { periodo: 'Sep - Dic 2023', src: 'https://www.utleon.edu.mx/resource/documentos/Informe%20Cuatrimestral%20de%20actividades%20SEP-DIC%202023.pdf'},
                { periodo: 'Ene - Abr 2024', src: 'https://www.utleon.edu.mx/resource/documentos/Informe%20de%20actividades_2024%20Enero-Abril.pdf'},
                { periodo: 'May - Ago 2024', src: 'https://www.utleon.edu.mx/resource/documentos/Informe%20de%20actividades_2024%20Mayo-Agosto.pdf'},
            ],
            dialog: false,
            reglamentoPdf: 'https://www.utleon.edu.mx/resource/documentos/Reglamento%20Consejo%20Directivo.pdf',

        })
    })
</script>