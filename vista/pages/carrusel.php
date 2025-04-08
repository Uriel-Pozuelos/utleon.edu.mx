<head>
    <script type="" src="../../resource/javascript/VueJs/vue/vue.js" ></script>
    <script type="" src="../../resource/javascript/VueJs/vue/vue-composition-api.prod.js" ></script>

    <title>Eventos</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="../../resource/css/icon_material_design_4495/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="../../resource/javascript/VueJs/vuetify/vuetify.min.css" rel="stylesheet" />
    
    <script src="../../resource/javascript/VueJs/vuetify/vuetify.min.js" ></script>
    <script src="../../resource/javascript/axios/axios.min.js" ></script>
    <!-- <link href="../../../javascript/VueJs/trix/trix.css" rel="stylesheet"/>
    <script src="../../../javascript/VueJs/trix/trix.js" ></script> -->
    <script src="../../resource/javascript/sweetalert2/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../../resource/javascript/sweetalert2/sweetalert2.css">
    <script src="../../resource/javascript/lodash/lodash.min.js"></script>
    <!-- use the latest VueQuill release -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body class="app-container">
        
            <?php 
                include_once("headerUriel.php") 
            ?>
            <div class="content-wrapper">
                <?php
                    include_once("sideBar.php")
                ?>                
                
                    <div id="carrusel-eventos">
                        <v-app>
                            <v-carousel cycle height="400" hide-delimiters>
                                <v-carousel-item v-for="(evento, i) in eventos" :key="i">
                                    <v-card height="100%" class="d-flex flex-column">
                                        <v-img
                                            :src="evento.imagen_portada ? '../../resource/'+evento.imagen_portada : '../../resource/images/default-event.jpg'"
                                            height="70%"
                                            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                            class="white--text align-end"
                                        >
                                            <v-card-title class="headline">{{ evento.titulo }}</v-card-title>
                                        </v-img>
                                        <v-card-text>
                                            <div class="text-subtitle-1">
                                                <v-icon small>mdi-calendar</v-icon>
                                                {{ formatFecha(evento.fecha) }} | {{ evento.hora_inicio }}
                                            </div>
                                            <div class="text-subtitle-1">
                                                <v-icon small>mdi-map-marker</v-icon>
                                                {{ evento.lugar }}
                                            </div>
                                        </v-card-text>
                                        <v-card-actions>
                                            <v-btn color="primary" text :to="'/evento/'+evento.cve_eventos">
                                                Ver más
                                            </v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-carousel-item>
                            </v-carousel>
                        </v-app>
                    </div>

                    </v-container>
                    </v-main>
                </v-app>
            </div>  
            
        </div>
        
        <?php include_once("vista/footer.php") ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/vue-quill-editor@3.0.4/dist/vue-quill-editor.js"></script>

<script>
    Vue.use(VueQuillEditor)  
new Vue({
    el: "#carrusel-eventos",
    vuetify: new Vuetify(),
    data() {
        return {
            eventos: []
        }
    },
    mounted() {
        this.cargarEventos();
    },
    methods: {
        async cargarEventos() {
            try {
                const {data} = await axios.post('../../controlador/controlador_eventos.php', 
                    new URLSearchParams({ accion: 11 })
                );
                this.eventos = data;
            } catch (error) {
                console.error("Error al cargar eventos:", error);
            }
        },
        formatFecha(fecha) {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(fecha).toLocaleDateString('es-ES', options);
        }
    }
});
</script>