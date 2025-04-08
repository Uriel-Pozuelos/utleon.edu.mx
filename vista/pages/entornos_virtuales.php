<head>
    <title>UTL | Ingeniería en Entornos Virtuales</title>
</head>
<body class="app-container main-pages" style="scroll-behavior: smooth;" data-app="true">
        
    <?php include_once("vista/headerUriel.php") ?>
    
    <div class="content-wrapper">
        <?php include_once("vista/sideBar.php") ?>
    
        <div id="appCarrera" class="main-content">
            <v-app>
                <v-main>
                    <v-container fluid>
                        <!-- Breadcrumb
                        <v-row class="mb-2">
                            <v-col cols="12">
                                <v-breadcrumbs :items="breadcrumbs" class="px-0">
                                    <template v-slot:divider>
                                        <v-icon>mdi-chevron-right</v-icon>
                                    </template>
                                </v-breadcrumbs>
                            </v-col>
                        </v-row> -->

                        <!-- Banner de la carrera -->
                        <v-row class="mb-6 justify-center">
                            <v-col cols="12">
                                <v-img
                                    :src="carrera.banner"
                                    aspect-ratio="3"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 8px;"
                                    transparent
                                ></v-img>
                            </v-col>
                        </v-row>

                        <!-- Título de la carrera -->
                        <v-row class="mb-4">
                            <v-col cols="12">
                                <h1 class="text-h3 text-uppercase primary--text">
                                    {{ carrera.nombre }}
                                </h1>
                                <v-divider class="my-4 primary"></v-divider>
                            </v-col>
                        </v-row>

                        <!-- Descripción -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <div class="text-body-1" v-html="carrera.descripcion"></div>
                            </v-col>
                        </v-row>

                        <!-- Pestañas de información -->
                        <v-row class="mb-6">
                            <v-col cols="12">
                                <v-tabs v-model="tab" grow color="primary">
                                    <v-tab v-for="item in tabs" :key="item">
                                        {{ item }}
                                    </v-tab>
                                </v-tabs>

                                <v-tabs-items v-model="tab">
                                    <!-- Perfil de Ingreso/Egreso -->
                                    <v-tab-item>
                                        <v-card flat class="pa-4">
                                            <h2 class="text-h5 mb-4 primary--text">PERFIL DE INGRESO:</h2>
                                            <p class="mb-4">La/El aspirante a la Universidad y al programa educativo en <b>{{ carrera.nombre.split('CON TSU')[0] }}</b> se caracterizará idealmente por poseer:</p>
                                            
                                            <ul class="mb-6">
                                                <li v-for="(item, index) in carrera.perfilIngreso" :key="'ingreso-'+index">
                                                    <b>{{ item.titulo }}:</b> {{ item.descripcion }}
                                                </li>
                                            </ul>

                                            <h2 class="text-h5 mb-4 primary--text">PERFIL DE EGRESO:</h2>
                                            <p class="mb-4">{{ carrera.perfilEgreso.descripcion }}</p>
                                            <p>{{ carrera.perfilEgreso.complemento }}</p>
                                        </v-card>
                                    </v-tab-item>

                                    <!-- Funciones -->
                                    <v-tab-item>
                                        <v-card flat class="pa-4">
                                            <ul>
                                                <li v-for="(funcion, index) in carrera.funciones" :key="'funcion-'+index">
                                                    {{ funcion }}
                                                </li>
                                            </ul>
                                        </v-card>
                                    </v-tab-item>

                                    <!-- Talleres y laboratorios -->
                                    <v-tab-item>
                                        <v-card flat class="pa-4">
                                            <ul>
                                                <li v-for="(lab, index) in carrera.laboratorios" :key="'lab-'+index">
                                                    {{ lab }}
                                                </li>
                                            </ul>
                                        </v-card>
                                    </v-tab-item>

                                    <!-- Campo Laboral -->
                                    <v-tab-item>
                                        <v-card flat class="pa-4">
                                            <h3 class="text-h6 mb-3 primary--text">Se puede desempeñar como:</h3>
                                            <ul class="mb-6">
                                                <li v-for="(puesto, index) in carrera.campoLaboral.puestos" :key="'puesto-'+index">
                                                    {{ puesto }}
                                                </li>
                                            </ul>

                                            <h3 class="text-h6 mb-3 primary--text">Se podrá desenvolver en:</h3>
                                            <ul>
                                                <li v-for="(sector, index) in carrera.campoLaboral.sectores" :key="'sector-'+index">
                                                    {{ sector }}
                                                </li>
                                            </ul>
                                        </v-card>
                                    </v-tab-item>

                                    <!-- Plan de Materias -->
                                    <v-tab-item>
                                        <v-card flat class="pa-4">
                                            <v-row>
                                                <v-col
                                                    v-for="(cuatrimestre, index) in carrera.planEstudios"
                                                    :key="'cuatri-'+index"
                                                    cols="12"
                                                    sm="6"
                                                    md="4"
                                                    lg="3"
                                                >
                                                    <v-card elevation="2" class="mb-4" style="height: 100%;">
                                                        <v-card-title class="primary white--text">
                                                            {{ cuatrimestre.numero }} Cuatrimestre
                                                        </v-card-title>
                                                        <v-card-text>
                                                            <ul>
                                                                <li v-for="(materia, i) in cuatrimestre.materias" :key="'materia-'+i">
                                                                    {{ materia }}
                                                                </li>
                                                            </ul>
                                                            <div v-if="cuatrimestre.numero === '6' || cuatrimestre.numero === '10'">
                                                                <hr style="border-top: 1px dotted;">
                                                                <p><a href="https://www.utleon.edu.mx/estadias">¿Qué son las Estadías?</a></p>
                                                                <p><a href="https://www.utleon.edu.mx/estadias-especiales">Estadías especiales</a></p>
                                                            </div>
                                                        </v-card-text>
                                                    </v-card>
                                                </v-col>
                                            </v-row>
                                        </v-card>
                                    </v-tab-item>
                                </v-tabs-items>
                            </v-col>
                        </v-row>

                        <!-- Enlaces Recomendados -->
                        <v-row class="mb-6">
                            <v-col cols="12" md="8">
                                <v-img
                                    src="https://www.utleon.edu.mx/resource/img/modelo_educativo.jpg"
                                    aspect-ratio="2.35"
                                    class="rounded-lg elevation-3"
                                    style="border-radius: 1px 100px;"
                                ></v-img>
                            </v-col>
                            <v-col cols="12" md="4">
                                <v-card elevation="2">
                                    <v-list>
                                        <v-subheader class="primary white--text text-uppercase">Enlaces Recomendados</v-subheader>
                                        <v-list-item
                                            v-for="(enlace, index) in enlacesRecomendados"
                                            :key="'enlace-'+index"
                                            link
                                        >
                                            <v-list-item-title>{{ enlace }}</v-list-item-title>
                                        </v-list-item>
                                    </v-list>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-main>
            </v-app>
        </div>  
    </div>
    
    <?php include_once("vista/footer.php") ?>

    <script>
    new Vue({
        el: '#appCarrera',
        vuetify: new Vuetify(),
        data: () => ({
            tab: null,
            tabs: [
                'PERFIL DE INGRESO Y EGRESO',
                'Funciones',
                'Talleres y laboratorios',
                'Campo Laboral',
                'Plan de Materias'
            ],
            breadcrumbs: [
                { text: 'Inicio', disabled: false, href: '/' },
                { text: 'Soy aspirante', disabled: false, href: '/aspirante' },
                { text: 'Oferta Educativa', disabled: false, href: '/oferta' },
                { text: 'INGENIERIA EN TECNOLOGÍAS DE LA INFORMACIÓN', disabled: true }
            ],
            enlacesRecomendados: [
                'Admisiones',
                'Becas',
                'Estadías',
                'Oferta Educativa',
                'Cultura y Deporte',
                'Estadías en el Extranjero'
            ],
            carrera: {
                nombre: "INGENIERIA EN TECNOLOGÍAS DE LA INFORMACIÓN E INNOVACIÓN CON TSU EN ENTORNOS VIRTUALES Y NEGOCIOS DIGITALES",
                banner: "https://www.utleon.edu.mx/resource/img/imagenes/Soy_Aspirante/Oferta_Educativa_ING/banners/ENTORNOS%20VIRTUALES%20Y%20NEGOCIOS%20DIGITALES_2.png",
                descripcion: `
                    <p>La/El Ingeniero/a en Tecnologías de la Información e Innovación Digital Desarrolla soluciones tecnológicas a través de lenguajes de programación estructurada, programación orientada a objetos y de consulta, herramientas de desarrollo asistido de software, usabilidad y pruebas, fundamentos de redes de área local, sistemas operativos, medidas de seguridad informática para contribuir a la eficiencia y productividad en diferentes contextos con un enfoque de impulso al desarrollo social, ambiental y de economía socialmente responsable.</p>
                    <p>Implementa aplicaciones multiplataforma, digitales e interactivas, mediante software especializado en diseño y entornos virtuales, desarrollando contenidos multidimensionales, realidades extendidas, Incorporando herramientas de IA para contribuir a la comercialización de productos, servicios y a la optimización de los recursos de las organizaciones con un enfoque de responsabilidad social, equidad, inclusión, excelencia, vanguardia, innovación e interculturalidad.</p>
                `,
                perfilIngreso: [
                    {
                        titulo: "Habilidades de pensamiento crítico",
                        descripcion: "La capacidad de analizar, evaluar y resolver problemas de manera lógica y estructurada."
                    },
                    {
                        titulo: "Conocimientos básicos en matemáticas y ciencias",
                        descripcion: "La comprensión de principios matemáticos y científicos que son fundamentales para la ingeniería."
                    },
                    {
                        titulo: "Competencias tecnológicas",
                        descripcion: "Familiaridad con herramientas y plataformas digitales, así como una disposición para aprender y adaptarse a nuevas tecnologías."
                    },
                    {
                        titulo: "Innovación y creatividad",
                        descripcion: "La habilidad para desarrollar ideas originales y aplicarlas en contextos prácticos."
                    },
                    {
                        titulo: "Capacidad de gestión de proyectos",
                        descripcion: "Habilidad para planificar, organizar y gestionar proyectos, incluyendo la gestión del tiempo y los recursos."
                    },
                    {
                        titulo: "Interés en el desarrollo tecnológico",
                        descripcion: "Pasión por la tecnología y el deseo de contribuir a su evolución mediante la innovación y la implementación de nuevas soluciones."
                    }
                ],
                perfilEgreso: {
                    descripcion: "La/El egresado/a de la Ingeniería en Tecnologías de la Información e Innovación Digital cuenta con las competencias profesionales necesarias para su desempeño en el campo laboral, en el ámbito local, regional y nacional.",
                    complemento: "Este perfil integral no solo se ajusta a las demandas actuales del sector, sino que también anticipa y se adapta a las transformaciones y desafíos emergentes de la Ingeniería en Tecnologías de la Información e Innovación Digital. Su capacidad para integrar conocimientos técnicos especializados, habilidades analíticas y una visión innovadora lo posiciona como un profesional altamente cualificado y preparado para contribuir significativamente al avance de la disciplina y a la resolución eficiente de problemáticas complejas en distintos contextos."
                },
                funciones: [
                    "Implementa soluciones básicas de software",
                    "Implementa soluciones básicas de redes de computadoras",
                    "Desarrolla contenido digital multidimensional y de realidad extendida",
                    "Desarrolla aplicaciones organizadas para negocios digitales",
                    "Administra proyectos de tecnologías de la información",
                    "Implementa un plan maestro de seguridad de sistema, datos e infraestructura",
                    "Desarrolla soluciones integrales de internet de las cosas",
                    "Implementa sistemas integrales"
                ],
                laboratorios: [
                    "Fábrica y célula de desarrollo de software con certificación CMMI nivel 3.",
                    "Laboratorio de Multimedia equipado con cámaras de video y fotografía digital, software especializado en manejo de imágenes, audio y video.",
                    "Laboratorio de Sistemas de Negocios Electrónicos para el desarrollo especializado de sitios web (con Tecnología TouchScreen).",
                    "Laboratorio de Mantenimiento Preventivo (IT Essentials).",
                    "Laboratorio de Animación 3D equipado con computadoras Macintosh.",
                    "Laboratorios de producción multimedia.",
                    "Además 11 Centros de Cómputo de aplicación general.",
                    "Cabina de audio"
                ],
                campoLaboral: {
                    puestos: [
                        "Desarrollador Front-End, Back-End o Full Stack.",
                        "Desarrollador de aplicaciones móviles.",
                        "Líder de proyectos de Tecnologías de la Información.",
                        "Director de proyectos de innovación digital.",
                        "Desarrollador de videojuegos.",
                        "Creador de contenidos digitales.",
                        "Director de negocios digitales.",
                        "Ingeniero de redes digitales.",
                        "Ingeniero de cómputo en la nube y virtualización.",
                        "Ingeniero DevOps.",
                        "Especialista en ciberseguridad y protección de datos.",
                        "Integrador de soluciones de infraestructura de redes inteligentes.",
                        "Líder de proyectos de infraestructura de redes inteligentes y ciberseguridad.",
                        "Administrador de TI.",
                        "Auditor de TI.",
                        "Administrador de redes",
                        "Analista de Ciberseguridad.",
                        "Administrador de bases de datos.",
                        "Científico de datos.",
                        "Integrador de proyectos IoT.",
                        "Integrador de proyectos de Inteligencia Artificial y aprendizaje automático.",
                        "Consultor de proyectos de Tecnologías de la Información.",
                        "Educador tecnológico.",
                        "Ingeniero de calidad de software y pruebas.",
                        "Ingeniero de soporte y servicios.",
                        "Director de TI.",
                        "Arquitecto de software.",
                        "Diseñador de experiencia de usuario."
                    ],
                    sectores: [
                        "Empresas grandes, medianas, pequeñas y microempresas.",
                        "Empresas asociadas al sector financiero de apoyo y fomento a MiPyMES.",
                        "Instituciones gubernamentales de apoyo y fomento al desarrollo.",
                        "Organizaciones No Gubernamentales.",
                        "Empresas de consultoría en materia de formulación y evaluación de proyectos de Tecnologías de la Información.",
                        "Empresas del sector público, privado y social.",
                        "Empresas nacionales y trasnacionales.",
                        "Emprendimientos."
                    ]
                },
                planEstudios: [
                    {
                        numero: "1",
                        materias: [
                            "Comunicación y Habilidades Digitales",
                            "Desarrollo Humano y Valores",
                            "Física",
                            "Fundamentos de Programación",
                            "Fundamentos de Redes",
                            "Fundamentos Matemáticos",
                            "Inglés I"
                        ]
                    },
                    {
                        numero: "2",
                        materias: [
                            "Cálculo Diferencial",
                            "Conmutación y Enrutamiento de Redes",
                            "Habilidades Socioemocionales y Manejo de Conflictos",
                            "Inglés II",
                            "Probabilidad y Estadística",
                            "Programación Estructurada",
                            "Sistemas Operativos"
                        ]
                    },
                    {
                        numero: "3",
                        materias: [
                            "Bases de Datos",
                            "Cálculo Integral",
                            "Desarrollo del Pensamiento y Toma de Decisiones",
                            "Inglés III",
                            "Programación Orientada a Objetos",
                            "Proyecto Integrador I",
                            "Tópicos de Calidad para el Diseño de Software"
                        ]
                    },
                    {
                        numero: "4",
                        materias: [
                            "Aplicaciones Web",
                            "Cálculo de Varias Variables",
                            "Diseño Digital y Producción Audiovisual",
                            "Ética Profesional",
                            "Inglés IV",
                            "Mercadotecnia Digital",
                            "Modelado y Animación Digital"
                        ]
                    },
                    {
                        numero: "5",
                        materias: [
                            "Aplicaciones para Realidad Aumentada",
                            "Aplicaciones para Realidad Virtual",
                            "Ecuaciones Diferenciales",
                            "Frameworks para Desarrollo Web",
                            "Inglés V",
                            "Liderazgo de Equipos de Alto Desempeño",
                            "Proyecto Integrador II"
                        ]
                    },
                    {
                        numero: "6",
                        materias: ["Estadía"]
                    },
                    {
                        numero: "7",
                        materias: [
                            "Animación Avanzada y Efectos Visuales",
                            "Ética y Legislación en Tecnologías de la Información",
                            "Formulación de Proyectos de Tecnología",
                            "Fundamentos de Inteligencia Artificial",
                            "Habilidades Gerenciales",
                            "Inglés VI",
                            "Seguridad informática"
                        ]
                    },
                    {
                        numero: "8",
                        materias: [
                            "Administración de Servidores",
                            "Electrónica Digital",
                            "Gestión de Proyectos de Tecnología",
                            "Informática Forense",
                            "Inglés VII",
                            "Programación de Video Juegos",
                            "Programación para Inteligencia Artificial"
                        ]
                    },
                    {
                        numero: "9",
                        materias: [
                            "Aplicaciones WEB progresivas",
                            "Ciencia de Datos",
                            "Evaluación de Proyectos de Tecnología",
                            "Inglés VIII",
                            "Internet de las Cosas",
                            "Proyecto Integrador III",
                            "Tecnologías Disruptivas"
                        ]
                    },
                    {
                        numero: "10",
                        materias: ["Estadía"]
                    }
                ]
            }
        }),
    })
    </script>

    <style>
    .v-card {
        transition: transform 0.3s ease;
    }
    
    .v-card:hover {
        transform: translateY(-5px);
    }
    
    ul {
        padding-left: 20px;
    }
    
    li {
        margin-bottom: 8px;
    }
    
    </style>
</body>