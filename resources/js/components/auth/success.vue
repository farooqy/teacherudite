<template>
    <!-- Modal -->
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" 
        style="display:block; background-color:#c425257d">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Success
                        <img src="/admin_assets/img/success-icon-.jpg" alt="" height="40px">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        @click="disMissErrorModel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="min-height: 70px">
                    {{success_text}}
                </div>
                <div style="color:gray; font-size:12px; border-top:thin solid gray">
                    <p class="hint">Click on the X at the top to close the error modal</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: 'auth-error',
                version: '1'
            }
        },
        methods: {
            disMissErrorModel()
            {
                this.$emit('dismiss-error-modal');
            }
        },
        props: ["error_text"]
    }

</script>
