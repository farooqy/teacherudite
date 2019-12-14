// window.Vue = require('vue');
import error from "../components/auth/error.vue";
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
        }
    },
    methods: {
        RegisterUser()
        {
            if(this.User.hasFilledFields())
            {
                console.log('we are ready')
                this.Server.setRequest(this.User.getRegisterParams());
                this.Server.serverRequest('/api/admin/register',
                    this.successRegistration, this.showErrorModal);
                
            }
            else
            {
                this.Error= this.User.Error
            }
        },
        successRegistration(data)
        {
            this.Success.success_text = 'Successfully registered the user '+this.User.name;
            this.Success.visible = true;
            this.User = new User();
        },
        resetErrorModal()
        {
            this.Error= {
                error_text : null,
                error_title : null,
                visible : false,
            }
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

            
        }
    },
    mounted() {
        console.log('wagew')
    },
    components: {error}
})

// return app;