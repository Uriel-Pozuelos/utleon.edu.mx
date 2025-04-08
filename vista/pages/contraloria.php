<head>
    <title>UTL | Contraloría Social</title>
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
        
            <div id="appContraloria" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                        <v-row class="mb-6" justify="center">
                            <v-col cols="12" md="10">
                                <v-card flat>
                                <v-row class="mb-3">
                                    <v-col cols="12">
                                        <h1 class="text-center text-h4">
                                            <span class="primary--text mr-2">Contraloría </span>Social
                                        </h1>
                                        <v-divider class="mt-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                    </v-col>
                                </v-row> 
                                
                                <v-card-text class="text-center">
                                    <v-img
                                    src="https://www.utleon.edu.mx/public_html/transparencia/contraloria-social/logo_contraloria.jpg"
                                    width="100%"
                                    contain
                                    class="mx-auto"
                                    ></v-img>
                                </v-card-text>
                                </v-card>
                            </v-col>
                        </v-row>

                            <!-- Contacto -->
                        <v-row justify="center" class="mb-6">
                            <v-col cols="12" md="12">
                                <v-alert
                                outlined
                                color="deep-orange"
                                class="amber lighten-4"
                                >
                                <h3 class="text-center">ENLACE DE CONTRALORÍA SOCIAL DE LA UTL</h3>
                                <v-divider class="my-3"></v-divider>
                                <v-list dense  class="amber lighten-4">
                                    <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-account</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title><strong>Nombre:</strong> {{ contacto.nombre }}</v-list-item-title>
                                    </v-list-item-content>
                                    </v-list-item>
                                    
                                    <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-briefcase</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title><strong>Puesto:</strong> {{ contacto.puesto }}</v-list-item-title>
                                    </v-list-item-content>
                                    </v-list-item>
                                    
                                    <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-phone</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title><strong>Teléfono:</strong> {{ contacto.telefono }}</v-list-item-title>
                                    </v-list-item-content>
                                    </v-list-item>
                                    
                                    <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-email</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>
                                        <strong>Correo electrónico:</strong> 
                                        <a :href="`mailto:${contacto.email}`">{{ contacto.email }}</a>
                                        </v-list-item-title>
                                    </v-list-item-content>
                                    </v-list-item>
                                </v-list>
                                
                                <v-divider class="my-3"></v-divider>
                                <p class="font-weight-bold">
                                    {{ contacto.aviso }}
                                </p>
                                </v-alert>
                            </v-col>
                        </v-row>

                            <!-- Secciones principales -->
                        <v-row justify="center" class="mb-6">
                            <v-col cols="12" md="10">
                                <v-expansion-panels focusable>
                                <v-expansion-panel v-for="(item, index) in seccionesPrincipales" :key="`principal-${index}`">
                                    <v-expansion-panel-header>{{ item.title }}</v-expansion-panel-header>
                                    <v-expansion-panel-content>
                                    <v-list dense>
                                        <v-list-item v-for="(contentItem, contentIndex) in item.    content" :key="`principal-content-${contentIndex}`">
                                        <v-list-item-icon>
                                            <v-icon small>mdi-file-document-outline</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <a :href="contentItem.link" v-if="contentItem.link">{{ contentItem.title }}</a>
                                        </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                    </v-expansion-panel-content>
                                </v-expansion-panel>
                                </v-expansion-panels>
                            </v-col>
                        </v-row>

                            <!-- Material CCS PRODEP 2023 -->
                        <v-row justify="center" class="mb-6">
                            <v-col cols="12" md="10">
                                <h2 class="text-h5 primary--text mb-4">Material CCS PRODEP 2023</h2>
                                <v-divider class="mb-4"></v-divider>
                                
                                <v-expansion-panels focusable>
                                <v-expansion-panel v-for="(item, index) in materialProdep" :key="`prodep-${index}`">
                                    <v-expansion-panel-header>{{ item.title }}</v-expansion-panel-header>
                                    <v-expansion-panel-content>
                                    <v-list dense>
                                        <v-list-item v-for="(contentItem, contentIndex) in item.content" :key="`prodep-content-${contentIndex}`">
                                        <v-list-item-icon>
                                            <v-icon small>mdi-file-document-outline</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title>{{ contentItem }}</v-list-item-title>
                                        </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                    </v-expansion-panel-content>
                                </v-expansion-panel>
                                </v-expansion-panels>
                            </v-col>
                        </v-row>

                            <!-- PFCE 2020 -->
                        <v-row justify="center" class="mb-6">
                            <v-col cols="12" md="10">
                                <h2 class="text-h5 primary--text mb-4">CONTRALORÍA SOCIAL DE LA INSTANCIA EJECUTORA, PROGRAMA FORTALECIMIENTO DE LA CALIDAD EDUCATIVA (PFCE) 2020</h2>
                                <v-divider class="mb-4"></v-divider>
                                
                                <p class="mb-6">
                                {{ descripciones.pfce }}
                                </p>
                                
                                <v-expansion-panels focusable>
                                <v-expansion-panel v-for="(item, index) in pfce" :key="`pfce-${index}`">
                                    <v-expansion-panel-header>{{ item.title }}</v-expansion-panel-header>
                                    <v-expansion-panel-content>
                                    <v-list dense>
                                        <v-list-item v-for="(contentItem, contentIndex) in item.content" :key="`pfce-content-${contentIndex}`">
                                        <v-list-item-icon>
                                            <v-icon small>mdi-file-document-outline</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title>{{ contentItem }}</v-list-item-title>
                                        </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                    </v-expansion-panel-content>
                                </v-expansion-panel>
                                </v-expansion-panels>
                            </v-col>
                        </v-row>

                            <!-- PROFEXCE 2020 -->
                        <v-row justify="center" class="mb-6">
                            <v-col cols="12" md="10">
                                <h2 class="text-h5 primary--text mb-4">CONTRALORÍA SOCIAL DE LA INSTANCIA EJECUTORA, PROGRAMA FORTALECIMIENTO A LA EXCELENCIA EDUCATIVA (PROFEXCE) 2020</h2>
                                <v-divider class="mb-4"></v-divider>
                                
                                <p class="mb-6">
                                {{ descripciones.profexce }}
                                </p>
                                
                                <v-expansion-panels focusable>
                                <v-expansion-panel v-for="(item, index) in profexce" :key="`profexce-${index}`">
                                    <v-expansion-panel-header>{{ item.title }}</v-expansion-panel-header>
                                    <v-expansion-panel-content>
                                    <v-list dense>
                                        <v-list-item v-for="(contentItem, contentIndex) in item.content" :key="`profexce-content-${contentIndex}`">
                                        <v-list-item-icon>
                                            <v-icon small>mdi-file-document-outline</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title>{{ contentItem }}</v-list-item-title>
                                        </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                    </v-expansion-panel-content>
                                </v-expansion-panel>
                                </v-expansion-panels>
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
        el: '#appContraloria',
        vuetify: new Vuetify(),
        data: () => ({
            contacto: {
                nombre: "C.P. Martha Patricia Quintana Olmos",
                puesto: "Directora de Administración y Finanzas",
                telefono: "477 7100020 ext. 215",
                email: "mquintana@utleon.edu.mx",
                aviso: "Este programa es público, ajeno a cualquier partido político; queda prohibido para fines distintos a los establecidos en él. Quien haga uso indebido de los recursos de este programa deberá ser denunciado y sancionado con la ley aplicable y ante la autoridad competente."
            },
            descripciones: {
                pfce: "Conforme a lo dispuesto por la Ley General de Desarrollo Social, la Contraloría Social constituye una práctica de transparencia, de rendición de cuentas y se convierte en un mecanismo para los beneficiarios, para que de manera organizada verifiquen el cumplimiento de las metas y la correcta aplicación de los recursos públicos asignados a diferentes Programas Federales.",
                profexce: "Conforme a lo dispuesto por la Ley General de Desarrollo Social, la Contraloría Social constituye una práctica de transparencia, de rendición de cuentas y se convierte en un mecanismo para los beneficiarios, para que de manera organizada verifiquen el cumplimiento de las metas y la correcta aplicación de los recursos públicos asignados a diferentes Programas Federales."
            },
            seccionesPrincipales: [
                {
                    title: "Anexos de Contraloría Social",
                    content: [
                        {
                            title: "2_5 Anexo 4 Informe del Comite de Contraloria Social 2024",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/ANEXOS%20DE%20CONTRALORÍA%20SOCIAL%202024/2_5%20Anexo%204%20Informe%20del%20Comite%20de%20Contraloria%20Social%202024.pdf",
                        },
                        {
                            title: "2_6 Anexo Lista de Asistencia 2024",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/ANEXOS%20DE%20CONTRALORÍA%20SOCIAL%202024/2_6%20Anexo%20Lista%20de%20Asistencia%202024.pdf",
                        },
                        {
                            title: "Anexo_1_Acta_constituci_n_de_CCS_24",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/ANEXOS%20DE%20CONTRALORÍA%20SOCIAL%202024/Anexo_1_Acta_constituci_n_de_CCS_24.pdf",
                        },
                        {
                            title: "Anexo_2_Acta_sustituci_n_integrantes_2024_",
                            link: "www.utleon.edu.mx/resource/documentos/contraloria_social/ANEXOS%20DE%20CONTRALORÍA%20SOCIAL%202024/Anexo_1_Acta_constituci_n_de_CCS_24.pdf",
                        },
                    ],
                        

                },
                {
                    title: "Documentos Normativos",
                    content: [
                        {
                            title: "Convocatoria CS U006 2024 UTL",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/DOCUMENTOS%20NORMATIVOS%202024/Convocatoria%20CS%20U006%202024%20UTL.pub",        
                        },
                        {
                            title: "DOF_-_Lineamientos_CS_11-10-23",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/DOCUMENTOS%20NORMATIVOS%202024/DOF_-_Lineamientos_CS_11-10-23.pdf"
                        },
                        {
                            title: "Ley-General-de-Desarrollo-Social",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/DOCUMENTOS%20NORMATIVOS%202024/Lineamientos_Contralor%C3%ADa_Social.pdf"
                        }
                    ]
                },
                {
                    title: "Material de Difusión",
                    content: [
                        {
                            title: "Convocatoria CS U006 2024",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/MATERIALES%20DE%20DIFUSI%C3%93N/Convocatoria%20CS%20U006%202024.pdf"
                        },
                        {
                            title: "Convocatoria CS U006 2024.pub",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/MATERIALES%20DE%20DIFUSI%C3%93N/Convocatoria%20CS%20U006%202024.pub"
                        },
                    ]
                },
                {
                    title: "Material de capacitación y apoyo",
                    content: [
                        {
                            title: "01_Presentacion_CS_PpU006_2024",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/MATERIAL%20DE%20CAPACITACI%C3%93N%20Y%20APOYO/01_Presentacion_CS_PpU006_2024.pdf"
                        },
                        {
                            title: "1_ Esquema de ContralorÃ_a Social Pp U006",
                            link: "https://www.utleon.edu.mx/resource/documentos/contraloria_social/MATERIAL%20DE%20CAPACITACI%C3%93N%20Y%20APOYO/1_%20Esquema%20de%20Contralor%C3%83_a%20Social%20Pp%20U006.pdf"
                        }
                    ]
                }
            ],
            materialProdep: [
                {
                    title: "Archivo Guión PAG IE-CS S247",
                    content: [
                    "Guión completo en formato PDF",
                    "Instrucciones para su uso",
                    "Ejemplos de aplicación"
                    ]
                },
                {
                    title: "Documentos",
                    content: [
                    "Documentación oficial PRODEP",
                    "Formatos requeridos",
                    "Plantillas de documentos"
                    ]
                },
                {
                    title: "Formatos",
                    content: [
                    "Formato 1: Solicitud de recursos",
                    "Formato 2: Reporte de actividades",
                    "Formato 3: Evaluación de resultados"
                    ]
                },
                {
                    title: "Marco Normativo",
                    content: [
                    "Leyes aplicables",
                    "Reglamentos institucionales",
                    "Normas de operación"
                    ]
                },
                {
                    title: "Difusión",
                    content: [
                    "Material para redes sociales",
                    "Comunicados oficiales",
                    "Presentaciones informativas"
                    ]
                },
                {
                    title: "Capacitación",
                    content: [
                    "Programa de capacitación",
                    "Material didáctico",
                    "Calendario de sesiones"
                    ]
                },
                {
                    title: "Directorio",
                    content: [
                    "Contactos de contraloría",
                    "Responsables por área",
                    "Comité de Contraloría Social"
                    ]
                },
                {
                    title: "Atención a Quejas y Denuncias",
                    content: [
                    "Procedimiento para presentar quejas",
                    "Formatos de denuncia",
                    "Protocolo de seguimiento"
                    ]
                }
            ],
            pfce: [
                {
                    title: "Documentos",
                    content: [
                    "Documentación del programa PFCE",
                    "Informes anuales",
                    "Reportes de evaluación"
                    ]
                },
                {
                    title: "Formatos en blanco",
                    content: [
                    "Formato de solicitud PFCE",
                    "Formato de reporte de actividades",
                    "Formato de evaluación"
                    ]
                },
                {
                    title: "Formatos",
                    content: [
                    "Formato 1: Registro de beneficiarios",
                    "Formato 2: Control de recursos",
                    "Formato 3: Seguimiento de metas"
                    ]
                },
                {
                    title: "Marco Normativo",
                    content: [
                    "Normatividad del PFCE",
                    "Lineamientos de operación",
                    "Reglas de participación"
                    ]
                },
                {
                    title: "Difusión",
                    content: [
                    "Material promocional PFCE",
                    "Comunicados oficiales",
                    "Resultados publicados"
                    ]
                },
                {
                    title: "Atención a Quejas y Denuncias",
                    content: [
                    "Procedimiento para quejas PFCE",
                    "Formatos específicos",
                    "Canales de atención"
                    ]
                },
                {
                    title: "Presentaciones",
                    content: [
                    "Presentación general del programa",
                    "Material para capacitaciones",
                    "Resultados y estadísticas"
                    ]
                },
                {
                    title: "Informe del Comité de Contraloría Social",
                    content: [
                    "Informe anual 2020",
                    "Seguimiento a recomendaciones",
                    "Plan de mejora continua"
                    ]
                },
                {
                    title: "Directorio",
                    content: [
                    "Integrantes del comité PFCE",
                    "Responsables institucionales",
                    "Contactos de seguimiento"
                    ]
                }
            ],
            profexce: [
                {
                    title: "Documentos",
                    content: [
                    "Documentación oficial PROFEXCE",
                    "Manual de procedimientos",
                    "Guías operativas"
                    ]
                },
                {
                    title: "Formatos en blanco",
                    content: [
                    "Solicitud de participación",
                    "Reporte de avances",
                    "Evaluación final"
                    ]
                },
                {
                    title: "Manuales",
                    content: [
                    "Manual de operación PROFEXCE",
                    "Guía para beneficiarios",
                    "Protocolo de evaluación"
                    ]
                },
                {
                    title: "Marco Normativo",
                    content: [
                    "Bases de participación",
                    "Lineamientos específicos",
                    "Normativa aplicable"
                    ]
                },
                {
                    title: "Difusión",
                    content: [
                    "Convocatorias publicadas",
                    "Material informativo",
                    "Resultados de ediciones anteriores"
                    ]
                },
                {
                    title: "Presentaciones",
                    content: [
                    "Presentación institucional",
                    "Material de capacitación",
                    "Resultados estadísticos"
                    ]
                },
                {
                    title: "Quejas y Denuncias",
                    content: [
                    "Procedimiento para PROFEXCE",
                    "Formatos específicos",
                    "Mecanismos de seguimiento"
                    ]
                },
                {
                    title: "Informe",
                    content: [
                    "Informe final 2020",
                    "Evaluación de resultados",
                    "Propuestas de mejora"
                    ]
                },
                {
                    title: "Directorio",
                    content: [
                    "Comité evaluador",
                    "Responsables administrativos",
                    "Contactos de apoyo"
                    ]
                }
            ]

        }),
    })
</script>