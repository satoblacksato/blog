<create-book>

<div class="modal fade" id="dvCreateBook" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{_title}</h4>
      </div>
      <div class="modal-body">
            <div if={!_load}>
                cargando.....
            </div>
            <div if={_load}>
                <div class="form-group">
                    <label>Categorias</label>
                    <select id="cmbCategorias" class="form-control" >
                    <option each={categories} value="{id}">{name}</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Titulo</label>
                    <input id="title" class="form-control" />
                </div>
                 <div class="form-group">
                    <label>Descripcion</label>
                    <input id="description" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input id="picture" class="form-control" type='file'/>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="{guardar}" >Guardar</button>
      </div>
    </div>
  </div>
</div>

<script>
   
    this.on('mount',function(){
        $("#dvCreateBook").modal();
    });

    var self=this;
    self._title=opts.title;
    self._load=false;
    getCategories();


    function getCategories(){
            $.get('/catalogos/categories-select',function(result){
                   self.categories=result;
                    self._load=true;
                   self.update();
            },'json');
    }

    guardar(){

          var _parameters = new FormData();
            _parameters.append('picture', $("#picture").prop("files")[0]);
            _parameters.append('title', $("#title").val());
            _parameters.append('description', $("#description").val());
            _parameters.append('categoria', $("#cmbCategorias").val());

       $.ajax({
            url: '/catalogos/books',
            type: "POST",
            dataType: "json",
            data: _parameters,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            headers:{'X-CSRF-TOKEN':opts.token},

            success: function(msg){
                    alertToastSuccess('Libro publicado correctamente',3000);
                    $("#dvCreateBook .close").click();
            },
            error: function(xhr, status) {
                if( xhr.status == 422 ) {
                    var errores='';
                    errors = xhr.responseJSON;
                    $.each( errors.errors, function( key, value ) {
                        errores += value[0]+"\n";
                    });
                    if(errores.trim()!=""){
				alert(errores);
                    }
                }else{console.log(xhr);
                    if( xhr.status == '404' ) {
                        alert("C\u00F3digo o Pagina no encontrado");
                    }else{
                        alert("Error de procesamiento (cod: "+xhr.status+ ")\n"+xhr.responseText);
                    }

                }
            },
        }); 
    }

</script>
</create-book>