<template>
    <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              Registrar nuevo movimiento
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              <div class="form-group">
                <label for="tipo">Tipo de Movimiento</label>
                <select v-model="tipo" class="form-control">
                  <option value="" selected>Seleccione</option>
                  <option value="INGRESO" selected>INGRESO</option>
                  <option value="EGRESO" selected>EGRESO</option>
                </select>
              </div>
              <div class="form-group">
                <label for="concepto">Concepto</label>
                <input type="text" v-model="concepto" class="form-control">
              </div>
              <div class="form-group">
                <label for="monto">Monto</label>
                <input type="text" v-model="monto" class="form-control">
              </div>
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <div class="col-md-6">
                <button class="btn btn-primary" @click="save">Registrar</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-danger" @click="$emit('close')">
                Cancelar
              </button>
              </div>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>
<script>
import webServices from '../webServices'
export default {
    name: 'movimientos',
     props:['caja'],
    data() {
      return {
        errors: [],
        concepto: '',
        monto: 0,
        tipo: ''
      }
    },
     methods: {
      close() {
        this.$emit('close');
      },
      save(){
        var url = '/admin/storemovimiento';
       
        webServices.post(url, {
           concepto: this.concepto,
           monto: this.monto,
           tipo: this.tipo,
           caja_id : this.caja.id
        }).then((res) => {
        }).catch(error => {
            this.errors = 'Corrija para poder crear con éxito'
        });
        this.limpiar();
         this.close();
         toastr.success('Movimiento Creado con éxito');   
      },
      limpiar(){
         this.concepto= '',
          this.monto= 0,
          this.tipo=''
      }
    }
}
</script>
<style scoped>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>