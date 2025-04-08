<head>
    <title>UTL | Estadías Especiales </title>
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
        
            <div id="appEstadiasEspeciales" class="main-content">
                <v-app>
                    <v-main >
                        <v-container>    

                            <v-row class="mb-6">
                                <v-col cols="12">
                                    <h1 class="text-center text-h4">
                                    <span class="primary--text">Estadías Especiales </span> e Internacionalización
                                    </h1>
                                    <v-divider class="my-4 primary" style="max-width: 100%; margin: 0 auto;"></v-divider>
                                </v-col>
                            </v-row>   
    
                            <v-container fluid class="pa-0">                                
                                <v-row class="mb-6">
                                    <v-col cols="12">
                                        <v-img
                                        src="https://www.utleon.edu.mx/resource/img/imagenes/estadias_especiales4.jpeg"
                                        max-height="400"
                                        class="rounded-xl"
                                        ></v-img>
                                    </v-col>
                                </v-row>
                            </v-container>

                            <!-- Introducción -->
                            <v-container>
                                <v-row>
                                    <v-col cols="12">
                                        <p class="text-h5 font-weight-bold mb-4 secondary--text">
                                            Forma parte de una experiencia única en la República Mexicana o en el Extranjero.
                                        </p>
                                        
                                        <p class="mb-4">
                                            La estadía especial es la práctica profesional que realiza un TSU o Ingeniero durante 13 semanas fuera del estado de Guanajuato, que te permite:
                                        </p>
                                        
                                        <v-list dense class="mb-6">
                                            <v-list-item v-for="(benefit, i) in benefits" :key="i">
                                                <v-list-item-icon>
                                                    <v-icon color="primary">mdi-check</v-icon>
                                                </v-list-item-icon>
                                                <v-list-item-content>
                                                    <v-list-item-title>{{ benefit }}</v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-list>
                                        
                                        <p class="mb-4">
                                            ¡Revisa nuestras convocatorias, complementa tu formación y actualiza tus conocimientos en otro país!
                                        </p>
                                        
                                        <v-alert color="secondary " class="mb-6">
                                            <v-btn text color="primary" href="../../public_html/alumno/movilidad/estadias-especiales/docs/Guia para el Estudiante Movilidad.pdf" target="_blank">
                                                <v-icon left>mdi-download</v-icon>
                                                Consulta nuestra guía de movilidad
                                            </v-btn>
                                            <span class="white--text"> donde te daremos algunos tips que debes considerar antes y durante tu viaje.</span>
                                        </v-alert>
                                        
                                        <p>
                                        Los Programas de Movilidad son gestionados por el Departamento de Internacionalización adscrito a la Secretaría de Vinculación, en conjunto con las áreas académicas involucradas y son financiados por el alumnado o con el apoyo de becas federales y estatales.
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-container>

                            <!-- Mapa -->
                            <v-container>
                                <v-row class="mb-6">
                                <v-col cols="12">
                                    <v-img
                                    src="https://www.utleon.edu.mx/public_html/alumno/movilidad/movilidad_bg.jpg"
                                    max-height="500"
                                    >
                                    <div class="d-flex justify-end align-center" style="height: 100%; padding-right: 50px;">
                                        <div class="d-flex">
                                        <div class="text-center mx-4">
                                            <v-chip color="primary" text-color="white" class="mb-2">Nacional</v-chip>
                                            <v-img src="public_html/alumno/movilidad/nacional.jpg" max-width="150"></v-img>
                                        </div>
                                        <div class="text-center mx-4">
                                            <v-chip color="primary" text-color="white" class="mb-2">América Latina</v-chip>
                                            <v-img src="public_html/alumno/movilidad/america_latina.jpg" max-width="150"></v-img>
                                        </div>
                                        </div>
                                    </div>
                                    </v-img>
                                </v-col>
                                </v-row>
                                
                                <v-row class="mb-6">
                                <v-col cols="12">
                                    <p class="mb-4">
                                    Vivir una experiencia internacional te permite ver la vida y el mundo de otra manera; mejorar tu competencia lingüística y obtener oportunidades de empleo. A su vez, te acercas a otra cultura, lo que logra un enriquecimiento social, una capacitación especializada y una experiencia de mucho valor para tu currículo de vida.
                                    </p>
                                    <p>Contamos con convenios con universidades en:</p>
                                </v-col>
                                </v-row>
                            </v-container>

                            <!-- Tabla de instituciones Nacionales e Internacionales-->
                            <v-container>
                                <v-data-table
                                :headers="headers"
                                :items="institutions"
                                class="elevation-1 mb-6"
                                header-class="table-header-primary"
                                ></v-data-table>
                            </v-container>

                            <!-- Sección Nacional -->
                            <v-container>
                                <v-row>
                                    <v-col cols="12">
                                        <h2 class="text-h4 secondary--text mb-4">Nacional</h2>
                                        
                                        <v-tabs v-model="nationalTab" grow>
                                            <v-tab>Políticas de Movilidad</v-tab>
                                            <v-tab>Documentos a entregar</v-tab>
                                            <v-tab>Después de Documentación</v-tab>
                                        </v-tabs>
                                        
                                        <v-tabs-items v-model="nationalTab" class="mt-4">
                                                <v-tab-item>
                                                    <v-card flat>
                                                        <v-card-text>
                                                            <p>Las convocatorias están abiertas en las siguientes fechas:</p>
                                                            <ul>
                                                                <li>Ingenierías durante el 8vo cuatrimestre</li>
                                                                <li>Técnico/a Superior Universitario/a, durante el 3er cuatrimestre matutino o 6to vespertino.</li>
                                                            </ul>
                                                        </v-card-text>
                                                    </v-card>
                                            </v-tab-item>
                                        
                                            <v-tab-item>
                                                <v-card flat>
                                                    <v-card-text>
                                                        <v-row>
                                                            <v-col v-for="(doc, i) in documents" :key="i" cols="6" sm="4" md="3">
                                                                <v-img
                                                                :src="doc.image"
                                                                max-height="100"
                                                                contain
                                                                class="mb-2"
                                                                ></v-img>
                                                                <div class="text-center">{{ doc.name }}</div>
                                                            </v-col>
                                                        </v-row>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>
                                        
                                            <v-tab-item>
                                                <v-card flat>
                                                    <v-card-text>
                                                        <p>Prácticas y Estadías recibe la documentación completa y solicita al área académica el reporte conductual y en algunos casos, es posible la realización de evaluación psicopedagógica en UTL. Una vez emitido el dictamen final, se les informa por correo electrónico los resultados de aceptación y se inicia el proceso de gestión con la empresa.</p>
                                                        <ul>
                                                            <li>Tienes opción de cambiar de lugar de estadía a más tardar en la semana 9 del cuatrimestre previo a su estadía.</li>
                                                            <li>En caso de que desees realizar tu estadía en Cancún y tu movilidad sea aceptada deberás pagar tu inscripción en la UT BIS de Cancún.</li>
                                                            <li>Cualquier cambio fuera de estas fechas, significa realizarla en la zona de influencia de la UTL.</li>
                                                            <li>La compra de boletos de avión, hospedajes y otros gastos debes realizarlo una vez que la organización confirme tu aceptación.</li>
                                                            <li>La UTL no otorga ningún tipo de apoyo económico. Tampoco otorga ningún tipo de carta que testifique el estado de salud del estudiante o que cuenta con vacuna COVID-19.</li>
                                                        </ul>
                                                    </v-card-text>
                                                </v-card>
                                            </v-tab-item>
                                        </v-tabs-items>
                                    </v-col>
                                </v-row>
                            </v-container>

                            <!-- Formularios -->
                            <v-container>
                                <v-row>
                                <v-col cols="12">
                                    <h2 class="text-h4 secondary--text mb-4">Carga tus Documentos de Estadías Especiales Aquí</h2>
                                    
                                    <v-list class="mb-6">
                                    <v-list-item v-for="(form, i) in forms" :key="i">
                                        <v-list-item-content>
                                        <v-list-item-title class="font-weight-bold">{{ form.title }}</v-list-item-title>
                                        </v-list-item-content>
                                        <v-list-item-action>
                                        <v-btn color="primary" :href="form.link" target="_blank">
                                            Formulario
                                        </v-btn>
                                        </v-list-item-action>
                                    </v-list-item>
                                    </v-list>
                                </v-col>
                                </v-row>
                            </v-container>

                            <!-- Sección América Latina -->
                            <v-container>
                                <v-row>
                                    <v-col cols="12">
                                        <h2 class="text-h4 secondary--text mb-4">América Latina</h2>
                                        
                                        <v-list class="mb-6">
                                            <v-list-group prepend-icon="mdi-earth" value="true" >
                                                <template v-slot:activator >
                                                    <v-list-item-title class="font-weight-bold">Estadías Especiales</v-list-item-title>
                                                </template>
                                                <v-list-item href="estadias-especiales">
                                                    <v-list-item-title>Información de Estadías Especiales</v-list-item-title>
                                                </v-list-item>
                                                <v-list-item href="https://aiesec.org.mx/talento-global/" target="_blank">
                                                    <v-list-item-title>AIESEC</v-list-item-title>
                                                </v-list-item>
                                            </v-list-group>
                                            
                                            <v-list-group prepend-icon="mdi-airplane" value="true">
                                                <template v-slot:activator>
                                                    <v-list-item-title class="font-weight-bold">Programas de Movilidad</v-list-item-title>
                                                </template>
                                                <v-list-item href="https://becas.alianzapacifico.net/" target="_blank">
                                                    <v-list-item-title>Alianza del Pacífico</v-list-item-title>
                                                </v-list-item>
                                            </v-list-group>
                                        </v-list>
                                    </v-col>
                                </v-row>
                            </v-container>

                            <!-- Sección Convocatorias Internacionales -->
                            <v-container>
                                <v-row>
                                <v-col cols="12">
                                    <h2 class="text-h4 secondary--text mb-4">Convocatorias Internacionales</h2>
                                    
                                    <v-list>
                                    <v-list-item v-for="(convocation, i) in convocations" :key="i" :href="convocation.link" target="_blank">
                                        <v-list-item-icon>
                                        <v-icon>mdi-link</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                        <v-list-item-title>{{ convocation.name }}</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    </v-list>
                                </v-col>
                                </v-row>
                            </v-container>

                            <!-- Contacto -->
                            <v-container>
                                <v-row class="justify-center mb-4">
                                    <v-col cols="12" md="10" class="d-flex">
                                        <v-card class="" width="100%" elevation="4">
                                            <v-row no-gutters>
                                                <v-col cols="12" md="7">
                                                    <v-img src="https://www.utleon.edu.mx/resource/img/imagenes/5.3.1%20ESTADIAS%20EMPRESARIALES.jpg" height="100%" ></v-img>
                                                </v-col>
                                                <v-col cols="12" md="5">
                                                    <v-card-title class="text-h4 primary--text">Campus Central</v-card-title>
                                                    <v-card-text class="caption">
                                                        <div class="d-flex align-center" >
                                                            <v-col cols="1" class=mr-2>
                                                                <v-icon>mdi-map-marker</v-icon>
                                                            </v-col>
                                                            <v-col cols="10">
                                                                <span>Edificio E planta baja</span>
                                                            </v-col>
                                                        </div>
                                                        <div class="d-flex align-center" >
                                                            <v-col cols="1" class="mr-2" >
                                                                <v-icon>mdi-clock</v-icon>
                                                            </v-col>
                                                            <v-col cols="10" >
                                                                <span>Lunes a viernes de 7:00 a 21:30 hrs</span>
                                                                <br>
                                                                <span>Sábados de 7:00 a 14:00 hrs</span>
                                                            </v-col>
                                                        </div>

                                                        <div class="d-flex align-center" >
                                                            <v-col cols="1" class="mr-2">
                                                                <v-icon>mdi-phone</v-icon>
                                                            </v-col>
                                                            <v-col cols="10">
                                                                <span>Ext. 107</span>
                                                            </v-col>
                                                        </div>

                                                        <div class="d-flex align-center" >
                                                            <v-col cols="1" class="mr-2">
                                                                <v-icon>mdi-account</v-icon>
                                                            </v-col>
                                                            <v-col cols="10">
                                                                <span>Gabriela Barrientos Rangel (Matutino)</span>
                                                            </v-col>
                                                        </div>

                                                        <div class="d-flex align-center" >
                                                            <v-col cols="1" class="mr-2">
                                                                <v-icon>mdi-account</v-icon>
                                                            </v-col>
                                                            <v-col cols="10">
                                                                <span>Sandra Leticia Nava Almanza (Verspertino)</span>
                                                            </v-col>
                                                        </div>
                                                    </v-card-text>
                                                    
                                                </v-col>
                                            </v-row>
                                        </v-card>
                                    </v-col>    
                                </v-row>
                            </v-container>

                        </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>

</body>

<script setup>
    new Vue({
        el: '#appEstadiasEspeciales',
        vuetify: new Vuetify(),
        data: () => ({
            imgEstadiasPrinc: 'https://www.utleon.edu.mx/resource/img/imagenes/2.2%20Estadias.jpg',
            benefits: [
                "Desarrollar la visión global que necesitas para enfrentar los desafíos locales e internacionales",
                "Entender las distintas culturas y resolver problemas actuando en un entorno ajeno",
                "Adquirir conciencia de otros puntos de vista y formas de pensar acerca del mundo",
                "Mejorar la fluidez en otro idioma y su uso en la práctica",
                "Aumentar tu seguridad, responsabilidad personal y autonomía",
                "Optimizar sus oportunidades profesionales."
            ],
            headers: [
                { text: 'No.', value: 'number', align: 'center' },
                { text: 'Instituciones extranjeras', value: 'institution', align: 'center' },
                { text: 'País', value: 'country', align: 'center' },
                { text: 'Fecha de vencimiento', value: 'expiration', align: 'center' }
            ],
            institutions: [
                { number: 1, institution: 'Universidad Nacional de Cuyo', country: 'Argentina', expiration: 'Indeterminado' },
                { number: 2, institution: 'IUT des Pays de l\'Adour', country: 'Francia', expiration: 'Indeterminado' },
                { number: 3, institution: 'El Colegio Algonquin de Artes Aplicadas y Tecnología', country: 'Canadá', expiration: 'Indeterminado' },
                { number: 4, institution: 'Cégep de Jonquiere', country: 'Canadá', expiration: 'Indeterminado' },
                { number: 5, institution: 'Saint-Laurent', country: 'Canadá', expiration: 'Indeterminado' },
                { number: 6, institution: 'Universidad de Cantabria', country: 'España', expiration: 'Indeterminado' },
                { number: 7, institution: 'Collège Montmorency', country: 'Canadá', expiration: 'Indeterminado' },
                { number: 8, institution: 'Collège Ahuntsic', country: 'Canadá', expiration: 'Indeterminado' },
                { number: 9, institution: 'Escuela Colombiana de Carreras Industriales', country: 'Colombia', expiration: 'Indeterminado' },
                { number: 10, institution: 'Vive México', country: 'México', expiration: 'Indeterminado' },
                { number: 11, institution: 'Universidad de Hiroshima', country: 'Japón', expiration: 'Indeterminado' }
            ],
            nationalTab: null,
            documents: [
                { name: 'Documento 1', image: 'https://www.utleon.edu.mx/resource/img/botones/estudiante/13.png' },
                { name: 'Documento 2', image: 'https://www.utleon.edu.mx/resource/img/botones/estudiante/14.png' },
                { name: 'Documento 3', image: 'https://www.utleon.edu.mx/resource/img/botones/estudiante/15.png' },
                { name: 'Documento 4', image: 'https://www.utleon.edu.mx/resource/img/botones/estudiante/17.png' }
            ],
            forms: [
                { title: 'Formulario de Estadías Especiales Nacionales para Licenciatura/Ingeniería', link: 'https://docs.google.com/forms/d/e/1FAIpQLSfrBXgs0RT7TAsKg4j82TONSEt1gEnW1BEZRxUEAU5Rfa_EfA/viewform' },
                { title: 'Formulario de Estadías Especiales Internacionales para Licenciatura/Ingeniería', link: 'https://docs.google.com/forms/d/e/1FAIpQLSdJD5pukd0uVeoYcbgcd2Lr7c7ZIOBwyAXYYyqSfBknoIer8A/viewform?usp=sf_link' },
                { title: 'Formulario de Estadías Especiales Nacionales para TSU', link: 'https://forms.gle/ceZVXsJbaFBBTFid6' },
                { title: 'Formulario de Estadías Especiales Internacionales para TSU', link: 'https://forms.gle/mQhZAA5FzFb6X2Ps7' }
            ],
            convocations: [
                { name: 'Becas de la Agencia Mexicana de Cooperación Internacional para el Desarrollo (AMEXCID)', link: 'https://www.gob.mx/amexcid/archivo/documentos' },
                { name: 'JuventudesGTO', link: 'https://juventudesgto.guanajuato.gob.mx/index.php/convocatorias/' },
                { name: 'Fulbright Comexus', link: 'https://www.comexus.org.mx/index.php' },
                { name: 'Servicio Alemán de Intercambio Académico (DAAD)', link: 'https://www.daad.mx/es/' },
                { name: 'Emerging Leaders in the Americas Program (ELAP)', link: 'https://www.educanada.ca/scholarships-bourses/can/institutions/elap-pfla.aspx?lang=eng' },
                { name: 'Funiber', link: 'https://www.funiber.org/' },
                { name: 'Conacyt', link: 'https://conacyt.mx/becas_posgrados/' },
                { name: 'Campus France', link: 'https://www.mexique.campusfrance.org/es' },
                { name: 'Becas del Gobierno de México', link: 'https://www.gob.mx/tramites/educacion' },
                { name: 'Becas de la Organización de los Estados Americanos (OEA)', link: 'https://www.oas.org/es/temas/becas.asp' },
                { name: 'Vive México', link: 'https://vivemexico.org/' },
                { name: 'Campus Iberoamérica', link: 'https://campusiberoamerica.net/es' }
            ],
            contacts: [
                { name: 'María Alejandra Arrieta Ayala', email: 'marrieta@utleon.edu.mx' },
                { name: 'Rogelio Medina Villagomez', email: 'rmedina@utleon.edu.mx' },
                { name: 'Karla Verónica Echeveste Flores', email: 'kecheveste@utleon.edu.mx' }
            ]
        })
    });
</script>