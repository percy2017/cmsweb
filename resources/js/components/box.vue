<template>
<div>
     <div class="container-fluid">
        <div class="side-body padding-top">
            <div v-if="caja.estado">
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
    </div>
</div>
</template>
<script>
import modal from './modal.vue';
export default {
    props:['caja'],
    components: {
     modal
    },
    data() {
        return {
             isModalVisible: false,
        }
    },
    methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
    }
}
</script>