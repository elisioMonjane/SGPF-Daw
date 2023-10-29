<script>
import axios from 'axios'
export default {
    data() {
      return {
        email: '',
        password: '',
        loggedIn: false,
        error: '',
        perfil: ''
      };
    },
    methods: {
      login() {
        if (this.email === 'utente@email.com' && this.password === '12345') {
          this.loggedIn = true;
          this.error = '';
          this.$router.push('/Dashboard');
        } else if (this.email === 'admin@email.com' && this.password === '12345') {
          this.loggedIn = true;
          this.error = '';
          this.$router.push('/DashboardMedico');
        } else {
          this.loggedIn = false;
          this.error = 'Credenciais inválidas. Tente novamente.';
          this.perfil = '';
        }
      }
    },
  

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
  <section class="boxLogin container">
<div class="content">
      
      <form class="login" method="post" name="login" @submit.prevent="login">

        <h1><i class="fa-solid fa-key"></i> Login</h1>

        <div class="padding">

          <label>
            <input type="text" class="campos" placeholder="E-mail" name="email" v-model="email" required>
          </label>

          <label>
            <input type="password" class="campos" placeholder="Password"  name="senha" v-model="password" required>
          </label>

          <input type="submit" class="btn fade_8S" name="login" value="Entrar">
          
        </div><!--padding-->

        <div class="linksForm">

          <a href="#" class="fade_4S" title="Resgatar Senha"><i class="fa-sharp fa-solid fa-share"></i> Resgatar Senha</a> 
          <!--<a href="/Register" class="fade_4S" title="Cadastrar-se"><i class="fa-solid fa-user-plus"></i> Cadastro</a>-->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Registe-se</button>

        </div>

      </form>

 </div>
 </section><!--Login-->
    
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Registe-se aqui!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form @submit.prevent="handleSubmit">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Primeiro nome</label>
                        <input v-model="name" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apelido</label>
                        <input v-model="apelido" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input v-model="email" type="text" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Senha</label>
                        <input v-model="password" type="password" class="form-control" id="password">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" @click="handleSubmit" value="submit">enviar</button>
            </div>
        </div>
    </div>
</div>

</template>
<style>

.boxLogin { 

    padding:5em 0; 
   
}

.boxLogin .content { padding:0.5em; }

.login  { 

    width:100%; 
    overflow: hidden; 
    margin:auto; 
    display:inherit; 
    background-color:#fff; 
    border-radius:4px; 
    box-shadow: 1px 0px 3px 0px #cbcbcb; 

}

.login h1 { 

    text-align:center; 
    font-family:'open_sansregular';
    font-size:1.5em; 
    border-bottom:1px #e9e9e9 solid; 
    padding:0.5em;
    background-color:#0085d5; 
    color:#ffffff; 
}

.login .padding { padding:1.5em; float:left;  }

.login label { 

    width:100%; 
    float:left; 
    margin-bottom:1em; 
}


.login .campos { 

    border-top:1px transparent solid; 
    border-left:1px transparent solid; 
    border-bottom:1px #eaeaea solid; 
    border-right:1px transparent solid; 
    color:#414141; 
    font-family:'open_sansregular';
    font-size:1.3rem; 
    outline:none; 
    padding: 0.5rem 0rem;
    transition:0.4s; 
}

.login .campos:focus { 

    border-top:1px transparent solid; 
    border-left:1px transparent solid; 
    border-bottom:1px #0085d5 solid; 
    border-right:1px transparent solid; 
    color:#0085d5; 
}

.login .btn { 

    width:auto; 
    float:left; 
    padding:0.4rem 1.3rem; 
    font-family:'open_sansregular'; 
    font-size:1rem; 
    background-color:#0085d5; 
    color:#fff; 
    border:0; 
    border-radius:4px;
    transition:0.4s; 

}

.login .btn:hover  { 

    background-color:#4c4c4c; 

}

.login .linksForm { 

    width:100%; 
    float:left; 
    background-color:#f6f6f6; 
    border-top:1px #e9e9e9 solid; 
    padding:1rem 1.5rem; 
    display:inline-block;
    transition:0.4s; 

}

.login .linksForm a { 

    float:left; 
    margin-bottom:0.5rem; 
    text-decoration:none; 
    font-size:0.89rem; 
    font-family:'open_sansregular'; 
    color:#868686; 
    margin-right:10px;
    border-right:1px #d9d9d9 solid;
    padding-right:10px;
    transition:0.4s ;

}

.login .linksForm a:last-child { 

    border-right:0;
    padding-right:0px;

}

.login .linksForm a:hover { color:#ffa700; }

/*Responsivo*/
/*480PX BREAKPOINT*/
@media (min-width:30em){

.login  { width:50%; }

}

/*768PX BREAKPOINT*/
@media (min-width:48rem){

.login  { width:35%; }
.login .linksForm a { font-size:0.9rem; }

} 
</style>