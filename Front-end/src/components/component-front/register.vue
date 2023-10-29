<script>
import axios from 'axios'
export default{
    name: 'register',
    
    data() {
    return {
        apelido: '',
        name: '',
        email: '',
        password: '',
    } 
      },
        methods:  {
            handleSubmit() {
            const data = {
                    apelido: this.apelido,
                    name: this.name,
                    email: this.email,
                    password: this.password,
            };
            axios.post('http://127.0.0.1:8000/api/register',data)
            .then(
                res =>{
                    console.log(res)
                }
                    
            ).catch(
                err =>{
                    console.log(err)
                }
            )   
        }
    }
}


</script>
<template>



  <!--<div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="img/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form @submit.prevent="handleSubmit" class="register-form" id="register-form">
                        <h2>Formulario do registo</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nome :</label>
                                <input v-model="name" type="text" name="name" id="name" />
                            </div>
                            <div class="form-group">
                                <label for="apelido">Apelido :</label>
                                <input v-model="apelido" type="text" name="apelido" id="apelido" />
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group">
                                <label for="email">e-mail :</label>
                                <input v-model="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="email">senha:</label>
                                <input v-model="password" type="password" placeholder="Senha">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="number">Celular :</label>
                            <input v-model="number" type="number" name="number" id="number" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Provincia :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="us">Maputo</option>
                                        <option value="uk">Maputo cidade</option>
                                        <option value="us">Gaza</option>
                                        <option value="uk">Inhambane</option>
                                        <option value="us">Sofala</option>
                                        <option value="uk">Manica</option>
                                        <option value="us">Zambezia</option>
                                        <option value="uk">Tete</option>
                                        <option value="us">Nampula</option>
                                        <option value="uk">Cabo Delgado</option>
                                        <option value="us">Niassa</option>
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Distrito :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="Manhiça">Manhiça</option>
                                        <option value="Bilene">Bilene</option>
                                        <option value="Maxixe">Maxixe</option>
                                        <option value="gondola">Gondola</option>
                                        <option value="pemba">Pemba</option>
                                        <option value="Xai-xa-">Xai-Xai</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Data de Nascimento :</label>
                            <input type="date" name="date" id="birth_date">
                        </div>
                      
                        <div class="form-submit">
                            <button type="button" class="btn btn-success" @click="handleSubmit" value="submit">Submit</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>-->
</template>
<style scoped>
@import '@/assets/css/style.css';


</style>