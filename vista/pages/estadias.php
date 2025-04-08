<head>
    <title>UTL | Estadías </title>
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
        
            <div id="appEstadias" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    


                            <v-row class="mb-2">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                        <span class="primary--text mr-2">Estadías</span>
                                    </h1>
                                    <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row> 

                            <!-- <v-row justify="center" class="">
                                <v-col cols="12" md="10" lg="12">
                                    <v-card flat color="transparent">
                                        <v-card-title class="text-h4 font-weight-bold text-center">
                                        </v-card-title>
                                        <v-divider class="my-4 primary"></v-divider>
                                    </v-card>
                                </v-col>
                            </v-row> -->

                            <v-row>
                                <v-col cols="12" md="6" lg="6">
                                    <v-card>
                                        <v-card-subtitle class="text-h6 secondary--text">¿Qué es una Estadía? </v-card-subtitle>
                                        <v-card-text>

                                            <p class="text-body-2 mb-4"> 
                                                Es la práctica profesional que realizas como estudiante de TSU o Ingeniería, 
                                                donde aplicas todos tus conocimientos adquiridos durante tu formación académica, 
                                                con la elaboración de un proyecto que satisfaga las necesidades de la Empresa. 
                                                Este proyecto se desarrolla y culmina en un periodo de 13 semanas.
                                            </p>
                                            
                                            <v-expansion-panels multiple class="mb-4" v-model="panel">
                                                <v-expansion-panel>
                                                    <v-expansion-panel-header class="text-body-1 font-weight-bold">
                                                        <span>
                                                            <v-icon left :color="panelIconColor">mdi-information</v-icon>
                                                            Información importante sobre tu Estadía
                                                        </span>
                                                    </v-expansion-panel-header>
                                                    <v-expansion-panel-content>
                                                        <v-list dense>
                                                            <v-list-item>
                                                                <v-list-item-icon>
                                                                    <v-icon color="primary">mdi-account-tie</v-icon>
                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>
                                                                        Serás guiado por:
                                                                        <ul class="mt-2">
                                                                            <li>Asesor/a Académico (docente experto)</li>
                                                                            <li>Asesor/a Organizacional (designado por la empresa)</li>
                                                                        </ul>
                                                                    </v-list-item-title>
                                                                </v-list-item-content>
                                                            </v-list-item>
                                                            
                                                            <v-list-item>
                                                                <v-list-item-icon>
                                                                    <v-icon color="primary">mdi-office-building</v-icon>
                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>
                                                                        La organización debe proporcionarte:
                                                                        <ul class="mt-2">
                                                                            <li>Espacio adecuado</li>
                                                                            <li>Material necesario</li>
                                                                            <li>Equipo requerido</li>
                                                                        </ul>
                                                                    </v-list-item-title>
                                                                </v-list-item-content>
                                                            </v-list-item>
                                                            
                                                            <v-list-item>
                                                                <v-list-item-icon>
                                                                    <v-icon color="primary">mdi-shield-account</v-icon>
                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>
                                                                        Debes contar con Seguridad Social vigente durante toda la Estadía
                                                                    </v-list-item-title>
                                                                </v-list-item-content>
                                                            </v-list-item>
                                                        </v-list>
                                                    </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>

                                            

                                        </v-card-text>
                                    </v-card>
                                </v-col>
                                <v-col cols="12" md="6" lg="6">
                                    <v-img :src="imgEstadiasPrinc" width="100%" height="100%" style="border-radius:8px;"></v-img>
                                </v-col>

                            </v-row>

                            <v-container class="py-8">
                                <h2 class="text-h4 secondary--text mb-6">Preguntas Frecuentes sobre Estadías</h2>
    
                                <v-expansion-panels accordion>
                                    <!-- Pregunta 1 -->
                                    <v-expansion-panel>
                                        <v-expansion-panel-header class="justify-start">
                                            <template class="justify-start" v-slot:default="{ open }">                                                
                                                <span class="text-left"><v-icon left :color="open ? 'white' : 'primary'">mdi-calendar</v-icon> ¿Cuál es el periodo de estadías?</span>
                                            </template>
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <v-list dense>
                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <strong>1. Cuatrimestre enero – abril</strong>
                                                        <div class="ml-4 mt-1">
                                                        <div>- Estadías de Ingeniería</div>
                                                        <div>- Búsqueda y recepción de proyectos de estadía para TSU siguiente periodo</div>
                                                        </div>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <strong>2. Cuatrimestre mayo – agosto</strong>
                                                        <div class="ml-4 mt-1">- Estadías de TSU</div>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <strong>3. Cuatrimestre septiembre – diciembre</strong>
                                                        <div class="ml-4 mt-1">
                                                        <div>- Búsqueda y recepción de proyectos de estadía para Ingeniería siguiente periodo</div>
                                                        </div>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>

                                    <!-- Pregunta 2 -->
                                    <v-expansion-panel>
                                        <v-expansion-panel-header>
                                            <template class="justify-start" v-slot:default="{ open }">   
                                                <span><v-icon left class="mr-2" :color="open ? 'white' : 'primary'">mdi-clipboard-list</v-icon> ¿Cuáles son los requisitos de estadía?</span>
                                            </template>
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <v-list dense>
                                                <v-list-item v-for="(requisito, index) in requisitosEstadia" :key="index">
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">{{ index + 1 }}.</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>{{ requisito }}</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>
                                        
                                            <v-alert type="warning" class="mt-4">
                                                <strong>IMPORTANTE:</strong> La UTL no otorga ningún tipo de apoyo económico. Tampoco otorga ningún tipo de carta que testifique el estado de salud del estudiante o que cuenta con vacuna COVID-19.
                                            </v-alert>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>

                                    <!-- Pregunta 3 -->
                                    <v-expansion-panel>
                                        <v-expansion-panel-header>
                                            <template class="justify-start" v-slot:default="{ open }">   
                                                <span><v-icon left class="mr-2" :color="open ? 'white' : 'primary'">mdi-shield-account</v-icon> ¿Qué tipo de seguro puedo tener para realizar mi estadía?
                                            </template>
                                        </v-expansion-panel-header>
                                        <v-expansion-panel-content>
                                            <v-list dense>
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-check</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>Constancia de Vigencia de Seguridad Social del IMSS (descargarlo de la página del IMSS)</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-check</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>INSABI: Debe entregar Póliza de Afiliación con vigencia actualizada</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-check</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>ISSSTE: Debe presentar copia del tarjetón o carta de afiliación donde indique la vigencia activa</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-check</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>Póliza de Seguro particular vigente</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                                
                                                <v-list-item>
                                                    <v-list-item-icon>
                                                        <v-icon color="primary">mdi-alert</v-icon>
                                                    </v-list-item-icon>
                                                    <v-list-item-content>
                                                        <v-list-item-title>En caso de no tener Seguro, deberás acudir a Servicios Escolares para obtener Seguro Facultativo</v-list-item-title>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>
                                        </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-expansion-panels>
                            </v-container>
                            
                            <v-row justify="center" class="mb-4">
                                <v-col cols="12" class="text-center">
                                    <h2 class="text-h3 secondary--text mb-4">Descarga los Formatos</h2>
                                    <v-divider class="mx-auto primary" width="150" style="border-width: 2.3px 0 0 0 !important"></v-divider>
                                </v-col>
                            </v-row>

                            <v-tabs v-model="tab" grow >
                                <v-tab v-for="(tab, index) in tabs" class="grey lighten-5" :key="index">{{ tab.title }}</v-tab>
                            </v-tabs>

                            <v-tabs-items v-model="tab" class="mt-4" >
                                <v-tab-item v-for="(tabContent, index) in tabs" :key="index">
                                    <v-card >
                                        <v-card-text>
                                            <!-- Renderizar contenido basado en el tipo -->
                                            <template v-if="tabContent.type === 'simple-list'" class="grey lighten-5">
                                                <v-list>
                                                    <template v-for="(item, i) in tabContent.items">
                                                        <v-list-item v-if="item.isLink" :key="i" @click="downloadFile(item)">
                                                            <v-list-item-icon>
                                                                <v-icon color="primary">mdi-file-document</v-icon>
                                                            </v-list-item-icon>
                                                            <v-list-item-content>
                                                                <v-list-item-title>{{ item.text }}</v-list-item-title>
                                                            </v-list-item-content>
                                                            <v-list-item-action>
                                                                <v-btn icon color="primary">
                                                                    <v-icon>mdi-download</v-icon>
                                                                </v-btn>
                                                            </v-list-item-action>
                                                        </v-list-item>
                                                        
                                                        <v-list-item v-else :key="i" class="non-link-item">
                                                            <v-list-item-content>
                                                                <v-list-item-title>{{ item.text }}</v-list-item-title>
                                                            </v-list-item-content>
                                                        </v-list-item>
                                                    </template>
                                                </v-list>
                                            </template>

                                            <template v-else-if="tabContent.type === 'portadas'">
                                                <template v-for="(section, i) in tabContent.sections">
                                                    <v-alert class="blue lighten-4" v-for="(note, j) in section.notes" :key="'note-'+i+'-'+j" 
                                                        class=" mb-4">
                                                        <span  v-html="note"></span>
                                                    </v-alert>
                                                    
                                                    <h3 class="text-h5 secondary--text mb-4">{{ section.title }}</h3>
                                                    <v-list>
                                                        <v-list-item v-for="(item, k) in section.items" :key="'item-'+i+'-'+k" 
                                                                @click="downloadFile(item)">
                                                            <v-list-item-content>
                                                                <v-list-item-title>{{ item.text }}</v-list-item-title>
                                                            </v-list-item-content>
                                                            <v-list-item-action>
                                                                <v-btn icon color="primary">
                                                                    <v-icon>mdi-download</v-icon>
                                                                </v-btn>
                                                            </v-list-item-action>
                                                        </v-list-item>
                                                    </v-list>
                                                </template>
                                            </template>

                                            <template v-else-if="tabContent.type === 'proyectos'">
                                                <div class="two-columns">
                                                    <div v-for="(column, i) in tabContent.columns" :key="'col-'+i">
                                                        <h3 class="text-h5 secondary--text mb-4">{{ column.title }}</h3>
                                                        <v-list dense>
                                                            <v-list-item v-for="(item, j) in column.items" :key="'proj-'+i+'-'+j" 
                                                                    @click="downloadFile(item)">
                                                                <v-list-item-icon>
                                                                    <v-icon color="primary">mdi-file-document</v-icon>
                                                                </v-list-item-icon>
                                                                <v-list-item-content>
                                                                    <v-list-item-title>{{ item.text }}</v-list-item-title>
                                                                </v-list-item-content>
                                                                <v-list-item-action>
                                                                    <v-btn icon color="primary">
                                                                        <v-icon>mdi-download</v-icon>
                                                                    </v-btn>
                                                                </v-list-item-action>
                                                            </v-list-item>
                                                        </v-list>
                                                    </div>
                                                </div>
                                            </template>
                                        </v-card-text>
                                    </v-card>
                                </v-tab-item>
                            </v-tabs-items>
                            
                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appEstadias',
        vuetify: new Vuetify(),
        data: () => ({
            imgEstadiasPrinc: 'https://www.utleon.edu.mx/resource/img/imagenes/2.2%20Estadias.jpg',
            panel: [0],
            requisitosEstadia: [
                "Formato de inscripción de proyecto (FIP): deberá ser llenado a computadora cumpliendo con todos los apartados obligatorios (mismos que están marcados con un asterisco * para su identificación).",
                "El FIP deberá estar firmado y sellado por el gestor de carrera y el asesor organizacional.",
                "Acude al área de Prácticas y Estadías a entregar FIP con tu seguridad social.",
                "Después de 5 días hábiles, acude al área de Prácticas y Estadías a recoger tu FIP con sello de recibido para que registres tu proyecto en SITO.",
                "Cuando esté registrado tu proyecto, avisa a tu gestor de carrera para que te asigne tu asesor académico.",
                "Una vez realizado el paso anterior, podrás descargar tu convenio, recolectar firmas y entregarlo a tu gestor de carrera, para que él a su vez, lo proporcione al Departamento de Estadías."
            ],
            tab: null,
            tabs: [
                    {
                        title: "Formatos",
                        type: "simple-list",
                        items: [
                            { text: "Manual de Estadías", isLink: true },
                            { text: "Políticas de Estadías", isLink: true },
                            { text: "Carta de Cancelación y Cambio de Estadía", isLink: true }
                        ]
                    },
                    {
                        title: "Guías para informe final",
                        type: "simple-list",
                        items: [
                            { text: "Guía de forma para informe", isLink: true },
                            { text: "Guía de contenido para informe", isLink: true }
                        ]
                    },
                    {
                        title: "Portadas para informe final",
                        type: "portadas",
                        sections: [
                            {
                                title: "TSU",
                                notes: [
                                    "NOTA 1: Es importante que para el IFE consultes la Guía de forma y la Guía de contenido",
                                    "NOTA 2: Consulta la portada ejemplo del IFE de tu carrera. (<a href='#' style='color: #1976D2; text-decoration: none;'>Click aquí</a>)"
                                ],
                                items: [
                                    { text: "Plantilla del informe final TSU León", isLink: true },
                                    { text: "Plantilla del informe final TSU Acámbaro", isLink: true }
                                ]
                            },
                            {
                                title: "Licenciaturas e Ingenierías",
                                notes: [
                                    "NOTA 1: Es importante que para el IFE consultes la Guía de forma y la Guía de contenido",
                                    "NOTA 2: Consulta la portada ejemplo del IFE de tu carrera. (<a href='#' style='color: #1976D2; text-decoration: none;'>Click aquí</a>)"
                                ],
                                items: [
                                    { text: "Plantilla del informe final Licenciaturas e Ingenierías León", isLink: true },
                                    { text: "Plantilla del informe final Licenciaturas e Ingenierías Acámbaro", isLink: true }
                                ]
                            }
                        ]
                    },
                    {
                        title: "Proyectos de estadía",
                        type: "proyectos",
                        columns: [
                            {
                                title: "Técnico Superior Universitario (TSU)",
                                items: [
                                    { text: "Administración área Capital Humano", isLink: true },
                                    { text: "Desarrollo de Negocios área Mercadotecnia", isLink: true },
                                    { text: "Gastronomía", isLink: true },
                                    { text: "Turismo", isLink: true },
                                    { text: "Logística área Transporte Terrestre", isLink: true },
                                    { text: "Mecatrónica área Optomecatrónica", isLink: true },
                                    { text: "Mecatrónica área Sistemas de Manufactura Flexible", isLink: true },
                                    { text: "Procesos Industriales área Gestión y Productividad del Calzado", isLink: true },
                                    { text: "Procesos Industriales área Manufactura", isLink: true },
                                    { text: "Procesos Industriales área Automotriz", isLink: true },
                                    { text: "Procesos Industriales área Plásticos", isLink: true },
                                    { text: "Química área Tecnología Ambiental", isLink: true },
                                    { text: "TIC'S área Desarrollo de Software Multiplataforma", isLink: true },
                                    { text: "Tecnologías de la Información área Entornos Virtuales y Negocios Digitales", isLink: true },
                                    { text: "TIC'S área Infraestructura de Redes Digitales", isLink: true }
                                ]
                            },
                            {
                                title: "Licenciaturas e Ingenierías",
                                items: [
                                    { text: "Lic. Gestión del Capital Humano", isLink: true },
                                    { text: "Lic. Innovación de Negocios y Mercadotecnia", isLink: true },
                                    { text: "Lic. Gastronomía", isLink: true },
                                    { text: "Licenciatura en Gestión y Desarrollo Turístico", isLink: true },
                                    { text: "Lic. Diseño y Gestión de Redes Logísticas", isLink: true },
                                    { text: "Ing. Mantenimiento Industrial", isLink: true },
                                    { text: "Ing. en Mecatrónica", isLink: true },
                                    { text: "Ing. Tecnología Ambiental", isLink: true }
                                ]
                            }
                        ]
                    }
                ]
        }),
        computed: {
            panelIconColor() {
                return this.panel.length > 0 ? 'white' : 'primary';
            }
        }

    })

</script>