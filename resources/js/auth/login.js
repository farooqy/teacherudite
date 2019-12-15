// window.Vue = require('vue');
import error from "../components/auth/error.vue";
import success from "../components/auth/success.vue";
import User from "../auth/User.js";
import Server from "../auth/Server.js";

var app = new Vue({
    el: '#app',
    data: {
        User: new User(),
        Server: new Server(),
        Error: {
            error_text : null,
            error_title : null,
            visible : false,
        },
        Success: {
            success_text: null,
            visible: false,
        },
        requestLoading: false,
        
    },
    methods: {
        LoginUser()
        {
            this.requestLoading = true;
            if(this.User.hasLoginFields())
            {
                console.log('we are ready')
                this.Server.setRequest(this.User.getLoginFields());
                this.Server.serverRequest('/api/admin/login',
                    this.successLogin, this.showErrorModal);
                
            }
            else
            {
                this.Error= this.User.Error
                this.requestLoading = false;
            }
        },
        successLogin(data)
        {
            this.Success.success_text = 'Successful. Redirecting to dashboard... ';
            this.Success.visible = true;
            this.User = new User();
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        },
        resetErrorModal()
        {
            this.Error= {
                error_text : null,
                error_title : null,
                visible : false,
            }
            this.requestLoading = false;
        },
        showErrorModal(error)
        {
            console.log('error ',error);
            if(error.hasOwnProperty('error_message'))
            {
                error = error.error_message;
            }
            this.Error.error_text = error;
            this.Error.visible = true;

        },
        resetSuccesModal()
        {
            this.Success= {
                success_text: null,
                visible: false,
            }
            this.requestLoading = false;
        }
    },
    mounted() {
        console.log('wagew')
    },
    components: {error, success}
})

// return app;