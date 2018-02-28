<template>
    <div class="ui column three stackable grid" style="height: 100%; margin-top: 10%;">
        <div class="six wide column">
        </div>
        <div class="four wide column">
            <div class="ui middle aligned center aligned grid">
                <div class="column">
                    <h2 class="ui blue image header">
                        <img src="assets/images/logo.png" class="image">
                        <div class="content">
                            Log-in to your account
                        </div>
                    </h2>
                    <form class="ui large form">
                        <div class="ui stacked segment">
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" name="email" placeholder="E-mail address">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="ui fluid large blue submit button">Login</div>
                        </div>

                        <div class="ui error message"></div>

                    </form>

                    <div class="ui message">
                        New to us? <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="six wide column">
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.initComponents();
        }
        ,
        methods:{
            initComponents() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier  : 'email',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your e-mail'
                                    },
                                    {
                                        type   : 'email',
                                        prompt : 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier  : 'password',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your password'
                                    },
                                    {
                                        type   : 'length[6]',
                                        prompt : 'Your password must be at least 6 characters'
                                    }
                                ]
                            }
                        }
                    });
            }
        }
    }
</script>
