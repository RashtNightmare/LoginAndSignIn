<template>

    <div class="container">
        <div class="width: fit-content;height:fit-content;padding:4px;">

            <div >

                <table>
                    <tr>
                        <th>
                            <input
                                :style="mgcss"
                                id="name"
                                type="text"
                                class="form-control"
                                v-model="FormData.name"
                                name="name"
                                placeholder="Name"
                                required="required"
                                autocomplete="name"
                                autofocus="autofocus">

                                <input
                                    :style="mgcss"
                                    id="email"
                                    type="text"
                                    class="form-control"
                                    v-model="FormData.email"
                                    name="email"
                                    placeholder="E-mail"
                                    required="required"
                                    autocomplete="email"
                                    autofocus="autofocus">

                                    <input
                                        :style="mgcss"
                                        id="password"
                                            type="password"
                                        class="form-control"
                                        v-model="FormData.password"
                                        name="password"
                                        placeholder="Password"
                                        required="required"
                                        autocomplete="password"
                                        autofocus="autofocus">

                                        <input
                                            :style="mgcss"
                                            id="password_confirm"
                                            type="password"
                                            class="form-control"
                                            v-model="FormData.password_confirm"
                                            name="password_confirm"
                                            placeholder="Password-Confirm"
                                            required="required"
                                            autocomplete="password_confirm"
                                            autofocus="autofocus">

                                            <button
                                                style="background-color:blue;color:white;padding:10px;"
                                                @click="doRegister">
                                                Register
                                            </button>

                                        </th>
                                        <th><img  style="margin-left:10px;" width="400" height="400" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQIOo84B02fPPAitf3dRK2xoEzS23ggHkRMg&usqp=CAU" alt="authorization_card"></th>

                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>
                </template>
                <script>
                    export default {
                        data() {
                            return {
                                mgcss: "margin-bottom:10px;margin-right:10px;width:100%",
                                FormData: {
                                    name: "",
                                    password: "",
                                    email: "",
                                    password_confirm: ""

                                }
                            }
                        },
                        methods: {

                            doRegister() {
                                axios
                                    .post('/doRegister', this.FormData)
                                    .then(Response => {
                                        let nameVal = this.FormData.name;
                                        let emailVal = this.FormData.email;
                                        window.alert(Response.data);
                                        this.FormData.name = nameVal;
                                        this.FormData.email = emailVal;
                                    })
                                    .catch(error => {
                                        window.alert(error);
                                    });
                            }
                        }
                    }
                </script>