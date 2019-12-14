export default class {
    constructor()
    {
        this.name = null;
        this.email = null;
        this.password = null;
        this.passwordConfirmation = null;
        this.id = null;
        this.token = null;
        this.Error = {
            error_text : null,
            error_title : "Error!",
            visible: false,
        }
    }

    hasFilledFields()
    {
        return true;
        if(this.name === null || this.name === "")
        {
            this.Error.error_text = "Please provide the user name";
            this.Error.visible = true;
            return false;
        }
        else if(this.email === null || this.email === "")
        {
            this.Error.error_text = "Please provide the user email";
            this.Error.visible = true;
            return false;
        }
        else if(this.password === null || this.password === "")
        {
            this.Error.error_text = "Please provide the user password";
            this.Error.visible = true;
            return false;
        }
        else if(this.passwordConfirmation === null || this.passwordConfirmation === "")
        {
            this.Error.error_text = "Please provide the password confirmation";
            this.Error.visible = true;
            return false;
        }
        else if(this.password !== this.passwordConfirmation )
        {
            this.Error.error_text = "Please ensure password do match";
            this.Error.visible = true;
            return false;
        }
        return true;
    }
    getRegisterParams()
    {
        return {
            name: this.name,
            email:this.email,
            password:this.password,
            password_confirmation: this.passwordConfirmation
        }
    }

}