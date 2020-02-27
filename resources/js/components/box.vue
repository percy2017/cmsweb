<template>
<div>
     <div class="container-fluid">
        <div class="side-body padding-top">
            <div v-if="caja.estado" class="row">
                 <button type="button" class="btn btn-info btn-small" @click="showModal">Nuevo Movimiento</button>
            </div>
        </div>
    </div>
    <div class="page-content browse container-fluid">
        <div class="col-md-12">
            <div class="panel panel-bordered">
              <div class="row">
                  <div class="col-md-6" >
                      <modal :caja="caja"
                        v-show="isModalVisible"
                        @close="closeModal"
                        />
                    <div class="row">
                        <div class="col-md-6" style="margin:0px">
                            <div class="panel-heading" style="border-bottom:0;">
                                <h3 class="panel-title">Monto total de ingresos</h3>
                            </div>
                            <div class="panel-body" style="padding-top:0;">
                                <p>055 Bs.</p>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin:0px">
                            <div class="panel-heading" style="border-bottom:0;">
                                <h3 class="panel-title">Monto total de egresos</h3>
                            </div>
                            <div class="panel-body" style="padding-top:0;">
                                <p>350 Bs.</p>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Concepto</td> 
                                <td>Monto</td>
                                <td>Tipo</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="mov in movimientos" :key="mov.id">
                                <td>{{mov.concepto}}</td>
                                <td>{{mov.monto}}</td>
                                <td>{{mov.tipo}}</td>
                            </tr>
                            <infinite-loading @infinite="infinitehandler">
                                <div slot="no-more">No hay mas dados</div>
                                <div slot="spinner">Cargando...</div>
                                <div slot="no-results">Sin resultados.</div>
                            </infinite-loading>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import modal from './modal.vue';
import InfiniteLoading from 'vue-infinite-loading';
import webServices from '../webServices'
export default {
    props:['caja'],
    components: {
     modal,
     InfiniteLoading
    },
    data() {
        return {
             isModalVisible: false,
             movimientos: [],
             page: 0
        }
    },
    methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      },
      infinitehandler($state){
          this.page++
          let url = '/api/listasientos/'+this.caja.id+'?page=' +this.page
          webServices.get(url)
                             .then(response => {
                                 let list = response.data.data

                                 if (list.length) {
                                     this.movimientos = this.movimientos.concat(list)
                                     $state.loaded()
                                 }else {
                                     $state.complete()
                                 }
                             })
      }
    }
}
</script>