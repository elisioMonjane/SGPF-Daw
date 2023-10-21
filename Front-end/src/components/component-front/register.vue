<script>

</script>
<template>
  <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="img/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Formulario do registo</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nome :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Apelido :</label>
                                <input type="text" name="father_name" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number">Celular :</label>
                            <input type="number" name="number" id="number" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Genero :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Masculino</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Feminino</label>
                                <span class="check"></span>
                            </div>
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
                       
                        <div class="form-group">
                            <label for="course">Método:</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value="">Pilulas</option>
                                    <option value="">Designer</option>
                                    <option value="">Marketing</option>
                                    <option value="">Injeção</option>
                                    <option value="">Dio</option>
                                    <option value="">Implante</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                      
                        <div class="form-submit">
                            <button type="button" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>
<style scoped>
@import '@/assets/css/style.css';


</style>