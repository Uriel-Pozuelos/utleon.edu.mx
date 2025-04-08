
<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_httponly', 1);

session_start();

if (empty($_SESSION['usuario'])) {
    error_log("Redirigiendo: Sesión vacía");
    header("Location: /acceder");
    exit();
}

$usuario_id = $_SESSION['usuario']['id'];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administración de Eventos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

<body style="height:100vh">
    <div id="app2">
        <v-app>
            <v-main>
                <v-container fluid>

                    <v-row>
                        <v-col style="margin-top: 20px">
                            
                            <v-card max-width="100%" ref="formularioEvento">
                                <!-- Título -->
                                <v-toolbar dense dark color="primary">
                                    <h2>Formulario para gestionar eventos</h2>  
                                </v-toolbar>
                                
                                <v-card-text>
                                    <!-- Formulario Eventos -->
                                    <v-row>
                                        <v-col>

                                            <v-card >
                                                <v-card-text>
                                                    <!-- Titulo del nuevo evento-->
                                                    <v-row>
                                                        <v-col>
                                                            <v-text-field
                                                                :rules="rules_t"
                                                                maxlength="150"
                                                                v-model="titulo"
                                                                label="Título evento"
                                                            ></v-text-field>
                                                        </v-col>
                                                        
                                                        <!-- Fecha inicio -->
                                                        <v-col>
                                                            <v-dialog
                                                                ref="dialog1"
                                                                v-model="modal2"
                                                                :return-value.sync="fecha"
                                                                persistent
                                                                width="290px"
                                                            >
                                                                <template v-slot:activator="{ on, attrs }">
                                                                    <v-text-field
                                                                        v-model="fecha"
                                                                        label="Fecha inicio"
                                                                        prepend-icon="mdi-calendar"
                                                                        readonly
                                                                        v-bind="attrs"
                                                                        v-on="on"
                                                                    ></v-text-field>
                                                                </template>
                                                                <v-date-picker
                                                                    v-model="fecha"
                                                                    scrollable
                                                                    color="green lighten-1"
                                                                >
                                                                    <v-spacer></v-spacer>
                                                                    <v-btn text color="primary" @click="modal2 = false">
                                                                        Cancel
                                                                    </v-btn>
                                                                    <v-btn text color="primary" @click="$refs.dialog1.save(fecha)">
                                                                        OK
                                                                    </v-btn>
                                                                </v-date-picker>
                                                            </v-dialog>
                                                        </v-col>
                                                        
                                                        <!-- Fecha fin -->
                                                        <v-col>
                                                            <v-dialog
                                                                ref="dialog4"
                                                                v-model="modal3"
                                                                :return-value.sync="fecha_fin"
                                                                persistent
                                                                width="290px"
                                                            >
                                                                <template v-slot:activator="{ on, attrs }">
                                                                    <v-text-field
                                                                        v-model="fecha_fin"
                                                                        label="Fecha fin"
                                                                        prepend-icon="mdi-calendar"
                                                                        readonly
                                                                        v-bind="attrs"
                                                                        v-on="on"
                                                                    ></v-text-field>
                                                                </template>
                                                                <v-date-picker
                                                                    v-model="fecha_fin"
                                                                    scrollable
                                                                    color="green lighten-1"
                                                                >
                                                                    <v-spacer></v-spacer>
                                                                    <v-btn text color="primary" @click="modal3 = false">
                                                                        Cancel
                                                                    </v-btn>
                                                                    <v-btn text color="primary" @click="$refs.dialog4.save(fecha_fin)">
                                                                        OK
                                                                    </v-btn>
                                                                </v-date-picker>
                                                            </v-dialog>
                                                        </v-col>
                                                    </v-row>
                                                    
                                                    <!-- Segundo renglon formulario -->
                                                    <v-row>
                                                        <v-col>
                                                            <!-- Hora de inicio-->
                                                            <v-menu
                                                                ref="ref_menu"
                                                                v-model="menu2"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="time"
                                                                transition="scale-transition"
                                                                offset-y
                                                                max-width="290px"
                                                                min-width="290px"
                                                            >
                                                                <template v-slot:activator="{ on, attrs }">
                                                                    <v-text-field
                                                                        v-model="time"
                                                                        label="Hora inicio (formato 24hrs)"
                                                                        prepend-icon="mdi-clock-time-four-outline"
                                                                        readonly
                                                                        v-bind="attrs"
                                                                        v-on="on"
                                                                    ></v-text-field>
                                                                </template>
                                                                <v-time-picker
                                                                    v-if="menu2"
                                                                    v-model="time"
                                                                    full-width
                                                                    @click:minute="$refs.ref_menu.save(time)"
                                                                ></v-time-picker>
                                                            </v-menu>
                                                        </v-col>
                                                        
                                                        <v-col>
                                                            <!--Hora fin -->
                                                            <v-menu
                                                                ref="ref_menu2"
                                                                v-model="menu3"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="time2"
                                                                transition="scale-transition"
                                                                offset-y
                                                                max-width="290px"
                                                                min-width="290px"
                                                            >
                                                                <template v-slot:activator="{ on, attrs }">
                                                                    <v-text-field
                                                                        v-model="time2"
                                                                        label="Hora fin (formato 24hrs)"
                                                                        prepend-icon="mdi-clock-time-four-outline"
                                                                        readonly
                                                                        v-bind="attrs"
                                                                        v-on="on"
                                                                    ></v-text-field>
                                                                </template>
                                                                <v-time-picker
                                                                    v-if="menu3"
                                                                    v-model="time2"
                                                                    full-width
                                                                    @click:minute="$refs.ref_menu2.save(time2)"
                                                                ></v-time-picker>
                                                            </v-menu>
                                                        </v-col>        
                                                        
                                                        <v-col>
                                                            <!-- ubicacion -->
                                                            <v-text-field
                                                                counter
                                                                label="Lugar"
                                                                :rules="rules"
                                                                v-model="lugar"
                                                                maxlength="50"
                                                            ></v-text-field>
                                                        </v-col>
                                                    </v-row>
                                                    
                                                    <!-- Informacion evento -->
                                                    <v-row>
                                                        <v-col>
                                                            <v-textarea
                                                                name="input-7-1"
                                                                filled
                                                                label="Información"
                                                                auto-grow
                                                                v-model="contenido"
                                                            ></v-textarea>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                                
                                                <!-- Botones del Formulario -->
                                                <v-card-actions class="justify-end my-5"> 
                                                    <v-btn text @click="fnLimpiar">
                                                        Limpiar
                                                    </v-btn>
                                                    <v-btn 
                                                        v-if="cve_evento<1"
                                                        color="success"
                                                        text
                                                        :loading="loader"
                                                        @click="guardarYMostrarModal(), dialog2=true"
                                                    >
                                                        Guardar
                                                    </v-btn>
                                                    <v-btn 
                                                        v-if="cve_evento>0"
                                                        color="amber"
                                                        :loading="loader"
                                                        text
                                                        @click="fnActualizar(),dialog2=false"
                                                    >
                                                        Modificar
                                                    </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    
                                    <!-- Dialog para subida de imagenes -->
                                    <v-row>
                                        <v-col>
                                            <v-dialog
                                                transition="dialog-top-transition"
                                                max-width="1200"
                                                v-model="dialog2"
                                                dense
                                            >
                                                <template v-slot:default="dialog">
                                                    <v-card>
                                                        <v-toolbar color="secondary" dark>
                                                            Agregar imágenes
                                                            <v-spacer></v-spacer>
                                                            <v-btn dark icon @click="dialog2=false">
                                                                <v-icon>mdi-close-box</v-icon>
                                                            </v-btn>
                                                        </v-toolbar>
                                                        <v-card-text>
                                                            <!-- Selector imagenes y boton -->
                                                            <v-row>
                                                                <v-col>
                                                                    <v-file-input
                                                                        accept="image/*"
                                                                        show-size
                                                                        counter
                                                                        label="Cargar imagen"
                                                                        v-model="load_imagen"
                                                                    ></v-file-input>
                                                                    &nbsp;
                                                                    <v-btn 
                                                                        color="secondary" 
                                                                        :disabled="_.isNull(load_imagen)"
                                                                        @click="fnGuardarImagen"
                                                                    >
                                                                        Guardar imagen
                                                                    </v-btn>
                                                                </v-col>
                                                                <v-col></v-col>
                                                            </v-row>
                                                            
                                                            <!-- Galeria de imagenes -->
                                                            <v-row>
                                                                <v-col
                                                                    v-for="item in imagenes"
                                                                    :key="item.cve_imagenes"
                                                                    class="d-flex child-flex"
                                                                    cols="4"
                                                                >
                                                                    <v-card>
                                                                        <v-img
                                                                            :src="`../../resource/`+item.url"
                                                                            contain
                                                                            aspect-ratio="2"
                                                                            class="grey lighten-2"
                                                                        >
                                                                            <template v-slot:placeholder>
                                                                                <v-row class="fill-height ma-0" align="center" justify="center">
                                                                                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                                                                                </v-row>
                                                                            </template>
                                                                        </v-img>
                                                                        <v-card-actions>
                                                                            <!-- Cover Image Selection -->
                                                                            <div class="py-2 px-3 d-flex justify-end" style="max-width:auto;">
                                                                                <v-radio-group v-model="portada">
                                                                                    <v-radio
                                                                                        label="Portada"
                                                                                        color="primary"
                                                                                        :value="item.cve_imagenes"
                                                                                        @click="fnPortada(item)"
                                                                                    ></v-radio>
                                                                                </v-radio-group> &nbsp;
                                                                            </div>
                                                                            <v-spacer></v-spacer>
                                                                            <!-- Acciones de imagen -->
                                                                            <div class="d-flex px-3 align-center">
                                                                                <v-btn 
                                                                                    link 
                                                                                    target="_blank"  
                                                                                    color="secondary"
                                                                                    text 
                                                                                    :href="`../../resource/`+item.url"
                                                                                >
                                                                                    Visualizar
                                                                                </v-btn>
                                                                                <v-btn icon @click="fnDelete(item)" color="error">
                                                                                    <v-icon>mdi-delete</v-icon>
                                                                                </v-btn>
                                                                            </div>

                                                                        </v-card-actions>
                                                                    </v-card>
                                                                </v-col>
                                                            </v-row>
                                                        </v-card-text>
                                                        <!-- Boton para cerrar dialog de cargar imagenes -->
                                                        <v-card-actions class="justify-end"> 
                                                            <v-btn text @click="dialog2 = false">
                                                                Cerrar
                                                            </v-btn>
                                                        </v-card-actions>

                                                    </v-card>
                                                </template>
                                            </v-dialog>

                                        </v-col>
                                    </v-row>
                                    
                                    <!-- Data table -->
                                    <h1 class="secondary--text mb-3 text-h4">Eventos Registrados</h1>
                                    <v-row>
                                        <v-col>
                                            <v-data-table
                                                dense
                                                :search="search"
                                                :items="datos"
                                                :headers="headers"
                                                :loading="loader"
                                                :server-items-length="datos.length"
                                                :items-per-page="10"
                                                :footer-props="{ itemsPerPageOptions: [10, 20, 30] }"
                                            >
                                                <!-- Search field -->
                                                <!-- <template v-slot:top>
                                                    <v-text-field
                                                        v-model="search"
                                                        append-icon="mdi-magnify"
                                                        label="Buscar"
                                                        single-line
                                                        hide-details
                                                    ></v-text-field>
                                                </template> -->
                                                
                                                <!-- Evento Destacado -->
                                                <template v-slot:item.destacado="{ item }">
                                                    <v-switch
                                                        color="warning"
                                                        v-model="item.destacado"
                                                        @change="fnPublicar(item,10)"
                                                    ></v-switch>
                                                </template>
                                                
                                                <!-- Evento Activo -->
                                                <template v-slot:item.activo="{ item }">
                                                    <v-switch
                                                        color="success"
                                                        v-model="item.activo"
                                                        @change="fnPublicar(item,5)"
                                                    ></v-switch>
                                                </template>
                                                
                                                <!-- Acciones de c/registro  -->
                                                <template v-slot:item.acciones="{ item }">
                                                    
                                                    
                                                    <v-badge
                                                        small
                                                        :content="item.no_imagenes"
                                                        :value="item.no_imagenes"
                                                        color="green"
                                                        overlap
                                                    >
                                                        <v-btn
                                                            icon 
                                                            color="info" 
                                                            @click="fnImagenes(item.cve_eventos),dialog2=true"
                                                        >
                                                            <v-icon>mdi-image-edit</v-icon>
                                                        </v-btn>
                                                    </v-badge>
                                                    
                                                    <!-- Edit Button -->
                                                    <v-btn
                                                        icon  
                                                        color="warning"
                                                        @click="fnEditar(item)"
                                                    >
                                                        <v-icon>mdi-pencil</v-icon>
                                                    </v-btn>
                                                    
                                                    <!-- Delete Button -->
                                                    <v-btn
                                                        :disabled="item.no_imagenes>0 && item.activo==1"
                                                        icon  
                                                        color="error"
                                                        @click="dialog3=true,cve_evento=item.cve_eventos"
                                                    >
                                                        <v-icon>mdi-delete</v-icon>
                                                    </v-btn>
                                                </template>
                                            </v-data-table>
                                        </v-col>
                                    </v-row>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>
                
                <!-- Dialog de confirmar eliminación -->
                <v-dialog v-model="dialog3" persistent max-width="490">
                    <v-card>
                        <v-card-title class="text-h5">
                            ¿Desea eliminar el registro?
                        </v-card-title>
                        <v-card-text>
                            El registro se eliminara permanentemente.
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="red darken-1" text @click="dialog3 = false,cve_evento=0">
                                Cancelar
                            </v-btn>
                            <v-btn color="green darken-1" text @click="dialog3 = false,fnEliminar()">
                                Aceptar
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>

                <v-carousel 
    v-if="eventos.length > 0"
    cycle 
    height="400" 
    hide-delimiters
    :show-arrows="eventos.length > 1"
>
    <v-carousel-item 
        v-for="(evento, i) in eventos" 
        :key="'evento-'+evento.cve_eventos"
    >
        <v-sheet height="100%" color="transparent">
            <v-card class="mx-auto" height="100%" max-width="800">
                <!-- Imagen con manejo de errores -->
                <v-img
                    :src="evento.imagen_portada"
                    height="250"
                    contain
                    class="white--text align-end"
                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                    
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
            </v-card>
        </v-sheet>
    </v-carousel-item>
</v-carousel>

<v-alert v-else type="info" class="ma-4">
    No hay eventos activos para mostrar
</v-alert>

            </v-main>
        </v-app>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue-quill-editor@3.0.4/dist/vue-quill-editor.js"></script>
<!-- Scripts del sitio -->
<script>
    Vue.use(VueQuillEditor)          
     new Vue({
        el: "#app2",
        vuetify: new Vuetify(),
        setup() {
            //Composition components
            const {ref,onMounted, watch,computed} = VueCompositionAPI;
            const ctr= '../../controlador/controlador_eventos.php';
            const search= ref("")
            const headers= ref([
                {text: 'Título',align: 'start',sortable: false,value: 'titulo'},
                {text: 'Fecha',align: 'end',sortable: false,value: 'fecha'},
                {text: 'Hora inicio',align: 'end',sortable: false,value: 'hora_inicio'},
                {text: 'Fecha fin',align: 'end',sortable: false,value: 'fecha_fin'},
                {text: 'Hora fin',align: 'end',sortable: false,value: 'hora_fin'},
                {text: 'Lugar',align: 'start',sortable: false,value: 'lugar'},
                {text: 'Destacado',sortable: false,value: 'destacado'},
                {text: 'Activo',sortable: false,value: 'activo'},
                {text: 'Acciones',align: 'center',sortable: false,value: 'acciones'},
            ]);
            const datos= ref([]);
            const eventos= ref([]);
            //formulario
            const cve_evento= ref(0);
            const titulo= ref("");
            const fecha= ref((new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10));
            const fecha_fin= ref((new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10));
            const sinopsis= ref("");
            const lugar= ref("");
            const contenido= ref("");
            const menu= ref(false);
            const dialog1= ref(false);
            const dialog2= ref(false);//formulario
            const dialog4= ref(false);//formulario
            const modal2= ref(false);
            const modal3= ref(false);
            const rules= ref([v => v.length <= 100 || 'Max 100 characters']);
            const rules_t= ref([v => v.length <= 150 || 'Max 150 characters']);
            const loader= ref(false);
            const dialog3= ref(false);
            const portada= ref();
            const imagenes= ref([]);
            const load_imagen= ref(null);
            const ref_menu= ref(false);
            const menu2= ref(false);
            const time= ref(null);
            const ref_menu2= ref(false);
            const menu3= ref(false);
            const time2= ref(null);
            const quill_ref= ref();
            const computed_quill= computed(() => {
                return quill_ref.quill
            });


            const editorOption= ref({
                        theme: 'snow',
                        placeholder: "",
                        modules: {
                            toolbar: [
                                ['bold', 'italic', 'underline', 'strike'],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                [{ 'color': [] }, { 'background': [] }],
                                [{ 'font': [] }],
                                [{ 'align': [] }],
                                ['link', 'image'],
                                ['clean']
                            ]
                        }
                    });
                    

            //LifeCicle vue
            onMounted(() => {               
                fnTabla();
                cargarEventos();

                setTimeout(() => {
                    console.log("Estado final de eventos:", eventos.value);
                }, 2000);
            });

            async function guardarYMostrarModal() {
                await this.fnGuardar();
                this.dialog2 = true;
            }

            async function fnTabla() {
                try {
                    loader.value = true;
                    
                    const response = await axios.post(ctr, new URLSearchParams({
                        accion: 1,
                        cve_usuario: <?= $usuario_id ?>
                    }));

                    if (response.status === 200) {
                        
                        if (Array.isArray(response.data)) {
                            datos.value = response.data;
                        } else {
                            datos.value = [];
                        }
                    }
                } catch (error) {
                    console.error("Error en la funcion cargar tabla:", {
                        message: error.message,
                        response: error.response?.data,
                        config: error.config
                    });
                    Swal.fire("Error", "No se pudieron cargar los datos", "error");
                } finally {
                    loader.value = false;
                }
            }

            async function fnImagenes(item){
                try {
                    //console.log(item);
                    imagenes.value= [];
                    loader.value= true;
                    
                    let parametros = new URLSearchParams();
                    parametros.append("accion", 6);
                    parametros.append("cve_evento", item);

                    let {data,status}= await axios.post(ctr,parametros)

                    if(status==200){
                        cve_evento.value= item;
                        if(data){
                            imagenes.value= data;
                            data.forEach(element => {
                                if(element.portada==1){
                                    portada.value= element.cve_imagenes;
                                }
                            });
                        }
                    }
                } catch (error) {
                    console.error(error);
                }finally{
                    loader.value= false;
                }
            }

            async function fnEditar(item){
                cve_evento.value= item.cve_eventos;
                titulo.value= item.titulo;
                fecha.value= item.fecha;
                fecha_fin.value= item.fecha_fin;
                time.value= item.hora_inicio;
                time2.value= item.hora_fin;
                lugar.value= item.lugar;
                contenido.value= item.informacion;
                

                // Espera a que se actualice el DOM
                await Vue.nextTick(); 

                const formulario = this.$refs.formularioEvento;
                if (formulario) {
                    formulario.$el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }

            async function fnGuardarImagen() {
                try {

                    if (!cve_evento.value) {
                        Swal.fire("Error", "Primero debes guardar el evento antes de agregar imágenes", "error");
                        return;
                    }

                    if (!load_imagen.value) {
                        alert("Selecciona una imagen");
                        return;
                    }

                    const formData = new FormData();
                    formData.append("accion", 7);
                    formData.append("imagen", load_imagen.value);
                    formData.append("cve_evento", cve_evento.value);

                    const { data } = await axios.post(ctr, formData, {
                        headers: { 'Content-Type': 'multipart/form-data' }
                    });

                    if (data.error) {
                        throw new Error(data.error);
                    }

                    Swal.fire("Success", "Imagen guardada correctamente", "success");
                    fnImagenes(cve_evento.value);
                    fnTabla();
                    
                    
                } catch (error) {
                    console.error("Error:", error);
                    Swal.fire("Error", error.message, "error");
                } finally {
                    load_imagen.value = null;
                }
            }

            async function fnGuardar(){
                try {
                    loader.value= true;
                    let parametros = new URLSearchParams();
                    //console.log(document.getElementById("yBody").value);
                    console.log("cve_usuario",<?= $usuario_id ?>);

                    parametros.append("accion", 2);
                    parametros.append("titulo", titulo.value);
                    parametros.append("lugar", lugar.value);
                    parametros.append("fecha", fecha.value);
                    parametros.append("fecha_fin", fecha_fin.value);
                    parametros.append("hora_inicio", time.value);
                    parametros.append("hora_fin", time2.value);
                    parametros.append("informacion", contenido.value);

                    console.log("Parámetros a enviar:", Object.fromEntries(parametros));

                    let {data,status}= await axios.post(ctr,parametros)

                    if(status==200){
                        if(data==1){
                            fnTabla();
                            Swal.fire({
                                title: 'Registro exitoso!',
                                text: 'Información guardada',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: 'Error al guardar el evento',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                    
                } catch (error) {
                    console.error(error);
                    Swal.fire('Error', error.message || 'Error al guardar el evento', 'error');
                }finally{
                    loader.value= false;
                }

            }


            async function fnActualizar(){
                try {
                    //console.log(document.getElementById("yBody").value);
                    loader.value= true;
                    let parametros = new URLSearchParams();
                    parametros.append("accion", 3);
                    parametros.append("cve_evento", cve_evento.value);
                    parametros.append("titulo", titulo.value);
                    parametros.append("lugar", lugar.value);
                    parametros.append("fecha", fecha.value);
                    parametros.append("fecha_fin", fecha_fin.value);
                    parametros.append("hora_inicio", time.value);
                    parametros.append("hora_fin", time2.value);
                    parametros.append("informacion", contenido.value);
                    let {data,status}= await axios.post(ctr,parametros)
                    if(status==200){
                      
                        if(data==1){
                            fnTabla();
                            Swal.fire({
                                title: 'Actualización exitosa!',
                                text: 'Información actualizada correctamente',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                            console.log(computed_quill.value);
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: 'La información no fue procesada',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                } catch (error) {
                    console.error(error);
                }finally{
                    fnLimpiar();
                    loader.value= false;
                }
            }

            async function fnPortada(item){
                try {
                    //console.log(document.getElementById("yBody").value);
                    loader.value= true;
                    let parametros = new URLSearchParams();
                    parametros.append("accion", 8);
                    parametros.append("cve_imagenes", item.cve_imagenes);
                    parametros.append("cve_evento", item.cve_eventos);
                    parametros.append("portada", 1);
                    let {data,status}= await axios.post(ctr,parametros)
                    if(status==200){
                      
                        if(data>0){
                            fnImagenes(item.cve_eventos);
                            Swal.fire({
                                title: 'Registro exitoso!',
                                text: 'Información guardada',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: 'La información no fue procesada',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                } catch (error) {
                    console.error(error);
                }finally{
                    fnLimpiar();
                    loader.value= false;
                }
            }

            async function fnDelete(item){
                try {
                    //console.log(document.getElementById("yBody").value);
                   
                        loader.value= true;
                        let parametros = new URLSearchParams();
                        parametros.append("accion", 9);
                        parametros.append("cve_imagenes", item.cve_imagenes);
                        parametros.append("cve_evento", item.cve_eventos);
                        let {data,status}= await axios.post(ctr,parametros)
                        if(status==200){
                        
                            if(data>0){
                                fnImagenes(item.cve_eventos);
                                fnTabla();
                                Swal.fire({
                                    title: 'Eliminación exitosa!',
                                    text: 'Se a eliminado la imagen correctamente',
                                    icon: 'success',
                                    confirmButtonText: 'Aceptar'
                                });
                            
                        }
                    }else{
                        Swal.fire({
                            title: 'Error!',
                            text: 'No puede eliminar la imagen que esta como Portada de la noticia',
                            icon: 'error',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                    
                } catch (error) {
                    console.error(error);
                }finally{
                    fnLimpiar();
                    loader.value= false;
                }
            }

            async function fnPublicar(item, accion){
                try {
                    loader.value= true;
                    let parametros = new URLSearchParams();
                    parametros.append("accion", accion);
                    parametros.append("cve_evento", item.cve_eventos);
                    if(accion==5){
                        parametros.append("activo", item.activo?1:0);
                    }else if(accion==10){
                        parametros.append("destacado", item.destacado?1:0);
                    } 
                    
                    
                    let {data,status}= await axios.post(ctr,parametros)
                    if(status==200){
                        
                        if(data==1){
                            fnTabla();
                            Swal.fire({
                                title: 'Actualización de estado!',
                                text: 'Se cambio el estado de la noticia correctamente',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        }else{
                            Swal.fire({
                                title: 'Error la publicar la noticia!',
                                text: 'No se logró publicar la noticia',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                } catch (error) {
                    console.error(error);
                }finally{
                    fnLimpiar();
                    loader.value= false;
                }
            }

            async function fnEliminar(){
                try {
                    loader.value= true;
                    let parametros = new URLSearchParams();
                    parametros.append("accion", 4);
                    parametros.append("cve_evento", cve_evento.value);
                    let {data,status}= await axios.post(ctr,parametros)
                    if(status==200){
                        
                        if(data==1){
                            fnTabla();
                            Swal.fire({
                                title: 'Registro eliminado!',
                                text: 'Registro eliminado correctamente',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: 'La información no fue procesada',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    }
                } catch (error) {
                    console.error(error);
                }finally{
                    fnLimpiar();
                    loader.value= false;
                }
            }

            async function cargarEventos() {
                try {
                    loader.value = true;
                    const response = await axios.post(ctr, new URLSearchParams({
                        accion: 11
                    }));

                    console.log("Respuesta cruda del servidor:", response); // Depuración

                    if (response.status === 200 && response.data && Array.isArray(response.data)) {
                        
                        eventos.value = response.data.map(evento => ({
                            ...evento,
                            // Construir la URL de la imange
                            imagen_portada: `http://localhost/resource/${evento.imagen_portada}`,
                            
                            titulo: evento.titulo || 'Evento sin título',
                            fecha: evento.fecha || '',
                            hora_inicio: evento.hora_inicio || '',
                            lugar: evento.lugar || 'Ubicación no especificada'
                        }));

                        console.log("Eventos procesados:", eventos.value); // Depuración

                    } else {
                        console.error("Formato de respuesta inesperado:", response);
                        eventos.value = [];
                    }
                    
                } catch (error) {
                    console.error("Error cargando eventos:", error);
                    eventos.value = [];
                    Swal.fire("Error", "No se pudieron cargar los eventos", "error");
                } finally {
                    loader.value = false;
                }
                
            }                      

            function fnLimpiar(){
                cve_evento.value= 0;
                titulo.value= "";
                time.value= null;
                time2.value= null;
                lugar.value= "";
                contenido.value="";
                fecha.value= (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10);
                fecha_fin.value= (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10);
                
            }


            return{
                search, headers, datos, fecha,titulo,sinopsis,contenido,modal2, dialog1,rules,rules_t,dialog2,
                loader,dialog3,fnGuardar,fnEditar,fnActualizar,cve_evento,fnLimpiar,fnEliminar,fnPublicar,
                portada,fnImagenes,imagenes,load_imagen,fnGuardarImagen, guardarYMostrarModal,fnPortada,fnDelete,modal3,fecha_fin,dialog4,
                ref_menu,menu2,ref_menu2,menu3,time2,time,lugar,quill_ref,computed_quill,editorOption, eventos
            }
        },
        methods: {
            formatFecha(fecha) {
                if (!fecha) return '';
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                return new Date(fecha).toLocaleDateString('es-ES', options);
            }

        }
    });
</script>
</html>

